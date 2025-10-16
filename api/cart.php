<?php
declare(strict_types=1);

require_once __DIR__ . '/../includes/init.php';

$method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

if ($method === 'GET') {
    $items = get_cart_items();
    $totals = calculate_cart_totals($items);
    respond_json([
        'items' => $items,
        'totals' => $totals,
    ]);
}

$payload = json_decode(file_get_contents('php://input'), true);
if (!is_array($payload)) {
    respond_json(['error' => 'Invalid payload'], 400);
}

$action = $payload['action'] ?? 'add';
$items = get_cart_items();

switch ($action) {
    case 'add':
        $productId = (string) ($payload['product_id'] ?? '');
        if ($productId === '') {
            respond_json(['error' => 'Missing product_id'], 422);
        }
        $size = (string) ($payload['size'] ?? '');
        $color = (string) ($payload['color'] ?? '');
        $quantity = max(1, (int) ($payload['quantity'] ?? 1));

        $product = find_product_by_id($productId);
        if ($product === null) {
            respond_json(['error' => 'Product not found'], 404);
        }

        $lineId = generate_cart_line_id($productId, $size, $color);
        $updated = false;

        foreach ($items as &$item) {
            if (($item['line_id'] ?? '') === $lineId) {
                $item['quantity'] += $quantity;
                $updated = true;
                break;
            }
        }
        unset($item);

        if (!$updated) {
            $items[] = normalize_cart_item([
                'id' => $product['id'],
                'name' => $product['name'] ?? ['fr' => '', 'en' => ''],
                'price' => $product['price'] ?? 0,
                'currency' => $product['currency'] ?? 'EUR',
                'size' => $size,
                'color' => $color,
                'quantity' => $quantity,
                'line_id' => $lineId,
            ]);
        }
        break;

    case 'update':
        $lineId = (string) ($payload['line_id'] ?? '');
        $quantity = max(0, (int) ($payload['quantity'] ?? 0));
        foreach ($items as $index => &$item) {
            if (($item['line_id'] ?? '') === $lineId) {
                if ($quantity === 0) {
                    unset($items[$index]);
                } else {
                    $item['quantity'] = $quantity;
                }
                break;
            }
        }
        unset($item);
        $items = array_values($items);
        break;

    case 'remove':
        $lineId = (string) ($payload['line_id'] ?? '');
        $items = array_values(array_filter($items, static fn (array $item): bool => ($item['line_id'] ?? '') !== $lineId));
        break;

    case 'clear':
        $items = [];
        break;

    default:
        respond_json(['error' => 'Unsupported action'], 400);
}

set_cart_items($items);

respond_json([
    'items' => $items,
    'totals' => calculate_cart_totals($items),
]);
