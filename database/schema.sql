-- Schema Vision e-commerce
-- Créer la table des produits gérés depuis l'administration.

CREATE TABLE IF NOT EXISTS products (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    slug VARCHAR(190) NOT NULL,
    sku VARCHAR(100) DEFAULT NULL,
    name_fr VARCHAR(190) NOT NULL,
    name_en VARCHAR(190) DEFAULT NULL,
    description_fr TEXT DEFAULT NULL,
    description_en TEXT DEFAULT NULL,
    price DECIMAL(10,2) NOT NULL DEFAULT 0.00,
    currency CHAR(3) NOT NULL DEFAULT 'EUR',
    category VARCHAR(120) DEFAULT NULL,
    sizes VARCHAR(255) DEFAULT NULL,
    default_color VARCHAR(120) DEFAULT NULL,
    availability VARCHAR(50) NOT NULL DEFAULT 'in-stock',
    badge_fr VARCHAR(120) DEFAULT NULL,
    badge_en VARCHAR(120) DEFAULT NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    UNIQUE KEY products_slug_unique (slug),
    UNIQUE KEY products_sku_unique (sku)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE INDEX idx_products_category ON products (category);
CREATE INDEX idx_products_availability ON products (availability);
