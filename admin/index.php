<?php
require_once __DIR__ . '/../includes/init.php';

$pageSlug = 'admin';
$pageTitle = 'Vision — Administration produits';
$pageDescription = "Ajoutez et gérez le catalogue Vision directement depuis l'interface d'administration.";

$formData = [
    'slug' => '',
    'sku' => '',
    'name_fr' => '',
    'name_en' => '',
    'description_fr' => '',
    'description_en' => '',
    'price' => '',
    'currency' => 'EUR',
    'category' => '',
    'sizes' => '',
    'default_color' => '',
    'availability' => 'in-stock',
    'badge_fr' => '',
    'badge_en' => '',
];

$errors = [];
$successMessage = null;
$connectionError = null;

try {
    $pdo = Database::getConnection();
} catch (Throwable $exception) {
    $pdo = null;
    $connectionError = $exception->getMessage();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $formData = array_merge($formData, [
        'slug' => trim((string)($_POST['slug'] ?? '')),
        'sku' => trim((string)($_POST['sku'] ?? '')),
        'name_fr' => trim((string)($_POST['name_fr'] ?? '')),
        'name_en' => trim((string)($_POST['name_en'] ?? '')),
        'description_fr' => trim((string)($_POST['description_fr'] ?? '')),
        'description_en' => trim((string)($_POST['description_en'] ?? '')),
        'price' => trim((string)($_POST['price'] ?? '')),
        'currency' => strtoupper(trim((string)($_POST['currency'] ?? 'EUR'))),
        'category' => trim((string)($_POST['category'] ?? '')),
        'sizes' => trim((string)($_POST['sizes'] ?? '')),
        'default_color' => trim((string)($_POST['default_color'] ?? '')),
        'availability' => trim((string)($_POST['availability'] ?? 'in-stock')),
        'badge_fr' => trim((string)($_POST['badge_fr'] ?? '')),
        'badge_en' => trim((string)($_POST['badge_en'] ?? '')),
    ]);

    if ($formData['slug'] === '') {
        $errors[] = 'Le champ “Identifiant (slug)” est obligatoire.';
    }

    if ($formData['name_fr'] === '') {
        $errors[] = 'Le nom en français est obligatoire.';
    }

    if ($formData['price'] === '') {
        $errors[] = 'Le prix est obligatoire.';
    }

    $normalizedPrice = str_replace(',', '.', $formData['price']);
    $priceValue = (float) $normalizedPrice;
    if ($normalizedPrice === '' || !is_numeric($normalizedPrice)) {
        $errors[] = 'Le prix doit être un nombre valide.';
    }

    if ($formData['currency'] === '') {
        $formData['currency'] = 'EUR';
    }

    if ($formData['availability'] === '') {
        $formData['availability'] = 'in-stock';
    }

    if ($pdo === null) {
        $errors[] = "Impossible d'enregistrer le produit tant que la base de données n'est pas configurée.";
    }

    if (empty($errors) && $pdo !== null) {
        try {
            $statement = $pdo->prepare(
                'INSERT INTO products (slug, sku, name_fr, name_en, description_fr, description_en, price, currency, category, sizes, default_color, availability, badge_fr, badge_en, created_at, updated_at)
                 VALUES (:slug, :sku, :name_fr, :name_en, :description_fr, :description_en, :price, :currency, :category, :sizes, :default_color, :availability, :badge_fr, :badge_en, NOW(), NOW())'
            );

            $statement->execute([
                'slug' => $formData['slug'],
                'sku' => $formData['sku'] ?: null,
                'name_fr' => $formData['name_fr'],
                'name_en' => $formData['name_en'] ?: $formData['name_fr'],
                'description_fr' => $formData['description_fr'],
                'description_en' => $formData['description_en'] ?: $formData['description_fr'],
                'price' => $priceValue,
                'currency' => $formData['currency'],
                'category' => $formData['category'] ?: null,
                'sizes' => $formData['sizes'] ?: null,
                'default_color' => $formData['default_color'] ?: null,
                'availability' => $formData['availability'],
                'badge_fr' => $formData['badge_fr'] ?: null,
                'badge_en' => $formData['badge_en'] ?: null,
            ]);

            $successMessage = 'Le produit a été créé avec succès.';
            $formData = array_merge($formData, [
                'slug' => '',
                'sku' => '',
                'name_fr' => '',
                'name_en' => '',
                'description_fr' => '',
                'description_en' => '',
                'price' => '',
                'currency' => 'EUR',
                'category' => '',
                'sizes' => '',
                'default_color' => '',
                'availability' => 'in-stock',
                'badge_fr' => '',
                'badge_en' => '',
            ]);
        } catch (PDOException $exception) {
            $errors[] = "Impossible d'enregistrer le produit : " . $exception->getMessage();
        }
    }
}

$databaseProducts = fetch_products_from_database();

include __DIR__ . '/../includes/layout/head.php';
include __DIR__ . '/../includes/layout/header.php';
?>
<main>
    <section class="py-5 bg-white border-bottom">
        <div class="container py-4">
            <span class="text-uppercase text-primary fw-semibold small">Administration</span>
            <h1 class="fw-bold display-6 mt-3">Gestion du catalogue produits</h1>
            <p class="text-secondary" style="max-width: 720px;">Ajoutez les fiches produits de votre boutique et gérez les métadonnées utilisées sur la page Boutique.</p>
            <?php if ($connectionError !== null): ?>
                <div class="alert alert-danger mt-4" role="alert">
                    Connexion à la base de données impossible : <?= htmlspecialchars($connectionError, ENT_QUOTES) ?>
                </div>
            <?php endif; ?>
            <?php if (!empty($errors)): ?>
                <div class="alert alert-danger mt-4" role="alert">
                    <ul class="mb-0">
                        <?php foreach ($errors as $error): ?>
                            <li><?= htmlspecialchars($error, ENT_QUOTES) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
            <?php if ($successMessage !== null): ?>
                <div class="alert alert-success mt-4" role="alert">
                    <?= htmlspecialchars($successMessage, ENT_QUOTES) ?>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <h2 class="h5 fw-bold mb-3">Créer un produit</h2>
                            <p class="text-secondary">Renseignez les informations essentielles. Les champs non obligatoires peuvent être complétés ultérieurement.</p>
                            <form method="post" class="mt-4">
                                <div class="mb-3">
                                    <label class="form-label" for="product-slug">Identifiant (slug)<span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" id="product-slug" name="slug" value="<?= htmlspecialchars($formData['slug'], ENT_QUOTES) ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="product-sku">Référence interne (SKU)</label>
                                    <input class="form-control" type="text" id="product-sku" name="sku" value="<?= htmlspecialchars($formData['sku'], ENT_QUOTES) ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="product-name-fr">Nom (FR)<span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" id="product-name-fr" name="name_fr" value="<?= htmlspecialchars($formData['name_fr'], ENT_QUOTES) ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="product-name-en">Nom (EN)</label>
                                    <input class="form-control" type="text" id="product-name-en" name="name_en" value="<?= htmlspecialchars($formData['name_en'], ENT_QUOTES) ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="product-description-fr">Description (FR)</label>
                                    <textarea class="form-control" id="product-description-fr" name="description_fr" rows="3"><?= htmlspecialchars($formData['description_fr'], ENT_QUOTES) ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="product-description-en">Description (EN)</label>
                                    <textarea class="form-control" id="product-description-en" name="description_en" rows="3"><?= htmlspecialchars($formData['description_en'], ENT_QUOTES) ?></textarea>
                                </div>
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <label class="form-label" for="product-price">Prix (€)<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" id="product-price" name="price" value="<?= htmlspecialchars($formData['price'], ENT_QUOTES) ?>" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="product-currency">Devise</label>
                                        <input class="form-control" type="text" id="product-currency" name="currency" value="<?= htmlspecialchars($formData['currency'], ENT_QUOTES) ?>" maxlength="3">
                                    </div>
                                </div>
                                <div class="row g-3 mt-0">
                                    <div class="col-sm-6">
                                        <label class="form-label" for="product-category">Catégorie</label>
                                        <input class="form-control" type="text" id="product-category" name="category" value="<?= htmlspecialchars($formData['category'], ENT_QUOTES) ?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="product-availability">Disponibilité</label>
                                        <select class="form-select" id="product-availability" name="availability">
                                            <?php
                                            $availabilityOptions = [
                                                'in-stock' => 'En stock',
                                                'preorder' => 'Précommande',
                                                'restock' => 'Restock',
                                                'archived' => 'Archivé',
                                            ];
                                            foreach ($availabilityOptions as $value => $label):
                                                $selected = $formData['availability'] === $value ? 'selected' : '';
                                            ?>
                                                <option value="<?= htmlspecialchars($value, ENT_QUOTES) ?>" <?= $selected ?>><?= htmlspecialchars($label, ENT_QUOTES) ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <label class="form-label" for="product-sizes">Tailles disponibles (séparées par des virgules)</label>
                                    <input class="form-control" type="text" id="product-sizes" name="sizes" value="<?= htmlspecialchars($formData['sizes'], ENT_QUOTES) ?>" placeholder="XS,S,M,L,XL">
                                </div>
                                <div class="mt-3">
                                    <label class="form-label" for="product-color">Couleur par défaut</label>
                                    <input class="form-control" type="text" id="product-color" name="default_color" value="<?= htmlspecialchars($formData['default_color'], ENT_QUOTES) ?>" placeholder="noir">
                                </div>
                                <div class="mt-3">
                                    <label class="form-label" for="product-badge-fr">Badge (FR)</label>
                                    <input class="form-control" type="text" id="product-badge-fr" name="badge_fr" value="<?= htmlspecialchars($formData['badge_fr'], ENT_QUOTES) ?>">
                                </div>
                                <div class="mt-3">
                                    <label class="form-label" for="product-badge-en">Badge (EN)</label>
                                    <input class="form-control" type="text" id="product-badge-en" name="badge_en" value="<?= htmlspecialchars($formData['badge_en'], ENT_QUOTES) ?>">
                                </div>
                                <div class="mt-4 d-flex gap-3">
                                    <button class="btn btn-primary" type="submit">Enregistrer</button>
                                    <a class="btn btn-outline-secondary" href="<?= htmlspecialchars(base_url('shop.php'), ENT_QUOTES) ?>" target="_blank" rel="noopener">Voir la boutique</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="card shadow-sm border-0 h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start flex-wrap gap-3">
                                <div>
                                    <h2 class="h5 fw-bold mb-1">Produits enregistrés</h2>
                                    <p class="text-secondary mb-0">Les produits ajoutés ici remplacent automatiquement les données de démonstration sur la boutique.</p>
                                </div>
                                <span class="badge text-bg-primary align-self-start"><?= count($databaseProducts) ?> produit(s)</span>
                            </div>
                            <?php if (empty($databaseProducts)): ?>
                                <div class="alert alert-info mt-4" role="alert">
                                    Aucun produit n'est enregistré pour le moment. Les éléments de démonstration resteront visibles sur la boutique.
                                </div>
                            <?php else: ?>
                                <div class="table-responsive mt-4">
                                    <table class="table align-middle">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nom</th>
                                                <th scope="col">Slug</th>
                                                <th scope="col">Prix</th>
                                                <th scope="col">Disponibilité</th>
                                                <th scope="col">Mise à jour</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($databaseProducts as $product): ?>
                                                <tr>
                                                    <td class="fw-semibold"><?= htmlspecialchars($product['name']['fr'] ?? '', ENT_QUOTES) ?></td>
                                                    <td><code><?= htmlspecialchars($product['slug'] ?? $product['id'], ENT_QUOTES) ?></code></td>
                                                    <td><?= number_format((float) ($product['price'] ?? 0), 2, ',', ' ') ?> <?= htmlspecialchars($product['currency'] ?? 'EUR', ENT_QUOTES) ?></td>
                                                    <td>
                                                        <?php
                                                        $labels = [
                                                            'in-stock' => 'En stock',
                                                            'preorder' => 'Précommande',
                                                            'restock' => 'Restock',
                                                            'archived' => 'Archivé',
                                                        ];
                                                        $availability = $product['availability'] ?? 'in-stock';
                                                        ?>
                                                        <span class="badge text-bg-secondary"><?= htmlspecialchars($labels[$availability] ?? $availability, ENT_QUOTES) ?></span>
                                                    </td>
                                                    <td>
                                                        <?php if (!empty($product['updated_at'])): ?>
                                                            <?= htmlspecialchars(date('d/m/Y', strtotime($product['updated_at'])), ENT_QUOTES) ?>
                                                        <?php else: ?>
                                                            —
                                                        <?php endif; ?>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
include __DIR__ . '/../includes/layout/footer.php';
