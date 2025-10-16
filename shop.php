<?php
require_once __DIR__ . '/includes/init.php';
$pageSlug = 'shop';
$pageTitle = 'Vision — Boutique';
$pageDescription = "Explorez les collections Vision et filtrez vos essentiels.";
include __DIR__ . '/includes/layout/head.php';
include __DIR__ . '/includes/layout/header.php';
?>
<main>
        <section class="page-hero">
            <div class="container">
                <p class="eyebrow" data-i18n="shop_tag">Boutique</p>
                <h1 data-i18n="shop_title">Composez votre uniforme urbain</h1>
                <p data-i18n="shop_copy">Filtrez par catégorie, taille, couleur ou disponibilité pour trouver la pièce Vision qui vous correspond.</p>
            </div>
        </section>

        <section class="filters" aria-label="Filtres produits">
            <div class="container filters-inner">
                <form class="filters-form" id="filters-form">
                    <div class="filter-group">
                        <label for="filter-category" data-i18n="filter_category">Catégorie</label>
                        <select id="filter-category" name="category">
                            <option value="all" data-i18n="filter_all">Toutes</option>
                            <option value="metropolis" data-i18n="filter_metropolis">Métropolis</option>
                            <option value="essentials" data-i18n="filter_essentials">Essentials</option>
                            <option value="fluid" data-i18n="filter_fluid">Fluid Dynamics</option>
                            <option value="limited" data-i18n="filter_limited">Éditions limitées</option>
                        </select>
                    </div>
                    <div class="filter-group">
                        <label for="filter-size" data-i18n="filter_size">Taille</label>
                        <select id="filter-size" name="size">
                            <option value="all" data-i18n="filter_all_sizes">Toutes</option>
                            <option value="xs">XS</option>
                            <option value="s">S</option>
                            <option value="m">M</option>
                            <option value="l">L</option>
                            <option value="xl">XL</option>
                        </select>
                    </div>
                    <div class="filter-group">
                        <label for="filter-color" data-i18n="filter_color">Couleur</label>
                        <select id="filter-color" name="color">
                            <option value="all" data-i18n="filter_all_colors">Toutes</option>
                            <option value="black" data-i18n="filter_black">Noir</option>
                            <option value="white" data-i18n="filter_white">Blanc</option>
                            <option value="grey" data-i18n="filter_grey">Gris</option>
                            <option value="accent" data-i18n="filter_accent">Accent chromé</option>
                        </select>
                    </div>
                    <div class="filter-group">
                        <label for="filter-availability" data-i18n="filter_availability">Disponibilité</label>
                        <select id="filter-availability" name="availability">
                            <option value="all" data-i18n="filter_all">Toutes</option>
                            <option value="in-stock" data-i18n="filter_instock">En stock</option>
                            <option value="preorder" data-i18n="filter_preorder">Précommande</option>
                            <option value="restock" data-i18n="filter_restock">Restock</option>
                        </select>
                    </div>
                    <div class="filter-actions">
                        <button type="submit" class="btn" data-i18n="filter_apply">Appliquer</button>
                        <button type="reset" class="btn ghost" data-i18n="filter_reset">Réinitialiser</button>
                    </div>
                </form>
                <div class="promo-card">
                    <h2 data-i18n="promo_title">Utilisez le code VISION15</h2>
                    <p data-i18n="promo_copy">15% de réduction sur votre première commande. Offre limitée aux 500 premiers clients.</p>
                </div>
            </div>
        </section>

        <section class="product-grid" aria-live="polite">
            <div class="container" id="product-list">
                <!-- Products will be injected via JS -->
            </div>
        </section>

        <section class="cta-banner">
            <div class="container">
                <h2 data-i18n="cta_banner_title">Besoin d'un conseil style ?</h2>
                <p data-i18n="cta_banner_copy">Réservez une session en visio avec nos stylistes Vision pour créer votre tenue idéale.</p>
                <a class="btn" href="contact.php" data-i18n="cta_banner_link">Planifier une session</a>
            </div>
        </section>
    </main>
<?php include __DIR__ . '/includes/layout/footer.php'; ?>
