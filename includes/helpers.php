<?php
declare(strict_types=1);

function asset(string $path): string
{
    $version = APP_ASSET_VERSION;
    $separator = str_contains($path, '?') ? '&' : '?';
    return sprintf('%s%sv=%s', $path, $separator, rawurlencode($version));
}

function determine_user_theme(): string
{
    $theme = $_COOKIE[APP_THEME_COOKIE] ?? 'dark';
    return $theme === 'light' ? 'light' : 'dark';
}

function persist_user_theme(string $theme): void
{
    setcookie(APP_THEME_COOKIE, $theme === 'light' ? 'light' : 'dark', [
        'expires' => time() + 31536000,
        'path' => '/',
        'httponly' => false,
        'samesite' => 'Lax',
    ]);
}

function determine_user_locale(): string
{
    $locale = APP_LOCALE_DEFAULT;

    if (isset($_GET['lang']) && in_array($_GET['lang'], APP_SUPPORTED_LOCALES, true)) {
        $locale = $_GET['lang'];
    } elseif (!empty($_SESSION['vision_locale']) && in_array($_SESSION['vision_locale'], APP_SUPPORTED_LOCALES, true)) {
        $locale = $_SESSION['vision_locale'];
    } elseif (!empty($_COOKIE[APP_LOCALE_COOKIE]) && in_array($_COOKIE[APP_LOCALE_COOKIE], APP_SUPPORTED_LOCALES, true)) {
        $locale = $_COOKIE[APP_LOCALE_COOKIE];
    }

    $_SESSION['vision_locale'] = $locale;

    setcookie(APP_LOCALE_COOKIE, $locale, [
        'expires' => time() + 31536000,
        'path' => '/',
        'httponly' => false,
        'samesite' => 'Lax',
    ]);

    return $locale;
}

function base_url(string $path = ''): string
{
    $normalized = ltrim($path, '/');
    return $normalized === '' ? '/' : '/' . $normalized;
}

function get_fallback_products(): array
{
    static $products = null;
    if ($products === null) {
        $products = require __DIR__ . '/data/fallback_products.php';
    }

    return $products;
}

function fetch_products_from_database(): array
{
    try {
        $pdo = Database::getConnection();
        $statement = $pdo->query('SELECT * FROM products ORDER BY created_at DESC, id DESC');
        $rows = $statement->fetchAll();

        if (!$rows) {
            return [];
        }

        return array_map('transform_product_row', $rows);
    } catch (Throwable $exception) {
        return [];
    }
}

function get_products(): array
{
    $databaseProducts = fetch_products_from_database();

    if (!empty($databaseProducts)) {
        return $databaseProducts;
    }

    return get_fallback_products();
}

function get_fallback_cart(): array
{
    static $cart = null;
    if ($cart === null) {
        $cart = require __DIR__ . '/data/fallback_cart.php';
    }

    return array_map('normalize_cart_item', $cart);
}

function normalize_cart_item(array $item): array
{
    $size = $item['size'] ?? '';
    $color = $item['color'] ?? '';
    $lineId = $item['line_id'] ?? generate_cart_line_id($item['id'] ?? '', $size, $color);

    $item['line_id'] = $lineId;
    $item['price'] = isset($item['price']) ? (float) $item['price'] : 0.0;
    $item['currency'] = $item['currency'] ?? 'EUR';
    $item['quantity'] = isset($item['quantity']) ? max(1, (int) $item['quantity']) : 1;

    return $item;
}

function generate_cart_line_id(string $productId, string $size, string $color): string
{
    return sha1(strtolower($productId . '|' . $size . '|' . $color));
}

function get_cart_items(): array
{
    if (!isset($_SESSION['vision_cart']) || !is_array($_SESSION['vision_cart'])) {
        $_SESSION['vision_cart'] = get_fallback_cart();
    }

    return array_map('normalize_cart_item', $_SESSION['vision_cart']);
}

function set_cart_items(array $items): void
{
    $_SESSION['vision_cart'] = array_map('normalize_cart_item', $items);
}

function calculate_cart_totals(array $items): array
{
    $subtotal = 0.0;
    $currency = 'EUR';

    foreach ($items as $item) {
        $subtotal += ($item['price'] ?? 0) * ($item['quantity'] ?? 1);
        if (!empty($item['currency'])) {
            $currency = $item['currency'];
        }
    }

    $shipping = $subtotal >= 200 ? 0.0 : ($subtotal > 0 ? 12.0 : 0.0);
    $total = $subtotal + $shipping;

    return [
        'subtotal' => round($subtotal, 2),
        'shipping' => round($shipping, 2),
        'total' => round($total, 2),
        'currency' => $currency,
    ];
}

function find_product_by_id(string $productId): ?array
{
    $catalog = get_fallback_products();
    foreach ($catalog as $product) {
        if (($product['id'] ?? '') === $productId) {
            return $product;
        }
    }

    try {
        $pdo = Database::getConnection();
        $statement = $pdo->prepare('SELECT * FROM products WHERE slug = :slug OR sku = :slug LIMIT 1');
        $statement->execute(['slug' => $productId]);
        $row = $statement->fetch();
        if ($row) {
            return transform_product_row($row);
        }
    } catch (Throwable $exception) {
        // Ignore database errors in the prototype layer.
    }

    return null;
}

function transform_product_row(array $row): array
{
    return [
        'id' => (string) ($row['slug'] ?? $row['sku'] ?? $row['id'] ?? ''),
        'slug' => (string) ($row['slug'] ?? ''),
        'sku' => (string) ($row['sku'] ?? ''),
        'name' => [
            'fr' => $row['name_fr'] ?? ($row['name'] ?? ''),
            'en' => $row['name_en'] ?? ($row['name'] ?? ''),
        ],
        'description' => [
            'fr' => $row['description_fr'] ?? ($row['description'] ?? ''),
            'en' => $row['description_en'] ?? ($row['description'] ?? ''),
        ],
        'price' => isset($row['price']) ? (float) $row['price'] : 0.0,
        'currency' => $row['currency'] ?? 'EUR',
        'category' => $row['category'] ?? 'all',
        'size' => !empty($row['sizes']) ? array_map('trim', explode(',', (string) $row['sizes'])) : [],
        'color' => $row['default_color'] ?? 'black',
        'availability' => $row['availability'] ?? 'in-stock',
        'tag' => [
            'fr' => $row['badge_fr'] ?? '',
            'en' => $row['badge_en'] ?? ($row['badge_fr'] ?? ''),
        ],
        'created_at' => $row['created_at'] ?? null,
        'updated_at' => $row['updated_at'] ?? null,
    ];
}

function respond_json(mixed $data, int $status = 200): void
{
    http_response_code($status);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    exit;
}
