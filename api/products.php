<?php
declare(strict_types=1);

require_once __DIR__ . '/../includes/init.php';

try {
    $products = [];
    try {
        $pdo = Database::getConnection();
        $statement = $pdo->query('SELECT * FROM products ORDER BY created_at DESC LIMIT 48');
        while ($row = $statement->fetch()) {
            $products[] = transform_product_row($row);
        }
    } catch (Throwable $exception) {
        $products = get_fallback_products();
    }

    if ($products === []) {
        $products = get_fallback_products();
    }

    respond_json($products);
} catch (Throwable $exception) {
    respond_json(get_fallback_products());
}
