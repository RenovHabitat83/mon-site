<?php
require_once __DIR__ . '/includes/init.php';
$pageSlug = 'shop';
$pageTitle = 'Vision — Boutique';
$pageDescription = "Explorez les collections Vision et filtrez vos essentiels.";
$products = get_products();
include __DIR__ . '/includes/layout/head.php';
include __DIR__ . '/includes/layout/header.php';
?>
<main>
    <section class="py-5 bg-white">
        <div class="container py-4 text-center">
            <span class="text-uppercase text-primary fw-semibold small">Boutique</span>
            <h1 class="fw-bold display-6 mt-3">Composez votre uniforme urbain</h1>
            <p class="text-secondary mx-auto" style="max-width: 680px;">Filtrez par catégorie, taille, couleur ou disponibilité pour trouver la pièce Vision qui vous correspond.</p>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row g-4 align-items-start">
                <div class="col-lg-8">
                    <form class="row g-3">
                        <div class="col-sm-6 col-lg-3">
                            <label class="form-label" for="filter-category">Catégorie</label>
                            <select class="form-select" id="filter-category" disabled>
                                <option selected>Toutes</option>
                                <option>Métropolis</option>
                                <option>Essentials</option>
                                <option>Fluid Dynamics</option>
                                <option>Éditions limitées</option>
                            </select>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <label class="form-label" for="filter-size">Taille</label>
                            <select class="form-select" id="filter-size" disabled>
                                <option selected>Toutes</option>
                                <option>XS</option>
                                <option>S</option>
                                <option>M</option>
                                <option>L</option>
                                <option>XL</option>
                            </select>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <label class="form-label" for="filter-color">Couleur</label>
                            <select class="form-select" id="filter-color" disabled>
                                <option selected>Toutes</option>
                                <option>Noir</option>
                                <option>Blanc</option>
                                <option>Gris</option>
                                <option>Accent chromé</option>
                            </select>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <label class="form-label" for="filter-availability">Disponibilité</label>
                            <select class="form-select" id="filter-availability" disabled>
                                <option selected>Toutes</option>
                                <option>En stock</option>
                                <option>Précommande</option>
                                <option>Restock</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <div class="alert alert-primary mb-0" role="alert">
                                Les filtres seront activés lors de la connexion à votre back-office. Cette maquette présente la disposition finale.
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <h2 class="h5 fw-bold">Utilisez le code VISION15</h2>
                            <p class="text-secondary">15% de réduction sur votre première commande. Offre limitée aux 500 premiers clients.</p>
                            <a class="btn btn-primary w-100" href="contact.php">Parler à un expert style</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5" id="metropolis">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-4">
                <div>
                    <h2 class="fw-bold">Sélection Vision</h2>
                    <p class="text-secondary mb-0">Découvrez nos quatre produits emblématiques pour lancer votre catalogue.</p>
                </div>
                <a class="btn btn-outline-primary mt-3 mt-md-0" href="#newsletter">Recevoir les mises à jour</a>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 g-4">
                <?php foreach ($products as $product): ?>
                    <div class="col" id="<?= htmlspecialchars($product['category'], ENT_QUOTES) ?>">
                        <div class="card h-100 border-0 shadow-sm card-lift product-card">
                            <img src="assets/images/placeholder-3d.jpg" alt="<?= htmlspecialchars($product['name']['fr'], ENT_QUOTES) ?>" class="card-img-top">
                            <div class="card-body">
                                <?php if (!empty($product['tag']['fr'])): ?>
                                    <span class="badge rounded-pill mb-3"><?= htmlspecialchars($product['tag']['fr'], ENT_QUOTES) ?></span>
                                <?php endif; ?>
                                <h3 class="h5"><?= htmlspecialchars($product['name']['fr'], ENT_QUOTES) ?></h3>
                                <p class="text-secondary mb-4"><?= htmlspecialchars($product['description']['fr'], ENT_QUOTES) ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="fw-semibold"><?= number_format((float) $product['price'], 2, ',', ' ') ?> <?= htmlspecialchars($product['currency'], ENT_QUOTES) ?></span>
                                    <a class="btn btn-sm btn-primary" href="cart.php">Ajouter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white" id="limited">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <h2 class="h4 fw-bold">Besoin d'un conseil style ?</h2>
                            <p class="text-secondary">Réservez une session en visio avec nos stylistes Vision pour créer votre tenue idéale.</p>
                            <a class="btn btn-outline-primary" href="contact.php">Planifier une session</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" id="archive">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <h2 class="h4 fw-bold">Drops exclusifs</h2>
                            <p class="text-secondary">Restez informé·e des collaborations et restocks Vision. Nous préparons une sélection de drops limitée à nos membres.</p>
                            <a class="btn btn-primary" href="account.php">Créer un compte Vision</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5" id="newsletter">
        <div class="container">
            <div class="newsletter-card mx-auto">
                <div class="row align-items-center g-4">
                    <div class="col-lg-7">
                        <span class="text-uppercase text-primary fw-semibold small">Newsletter</span>
                        <h2 class="fw-bold mt-2">Recevez les drops avant tout le monde</h2>
                        <p class="text-secondary mb-0">Inscrivez-vous pour accéder aux préventes, codes promo exclusifs et invitations à nos évènements.</p>
                    </div>
                    <div class="col-lg-5">
                        <form class="row g-3" novalidate>
                            <div class="col-12">
                                <label class="form-label" for="newsletter-shop-email">Votre email</label>
                                <input class="form-control form-control-lg" type="email" id="newsletter-shop-email" placeholder="vous@vision.com">
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary btn-lg w-100" type="submit">S'inscrire</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include __DIR__ . '/includes/layout/footer.php'; ?>
