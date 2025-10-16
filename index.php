<?php
require_once __DIR__ . '/includes/init.php';
$pageSlug = 'home';
$pageTitle = 'Vision — Streetwear & Casual';
$pageDescription = "Vision imagine un vestiaire streetwear et casual inspiré de la culture urbaine.";
include __DIR__ . '/includes/layout/head.php';
include __DIR__ . '/includes/layout/header.php';
?>
<main>
        <section class="hero" id="hero">
            <div class="container hero-content">
                <div>
                    <p class="eyebrow" data-i18n="hero_tag">Nouvelle vague streetwear</p>
                    <h1 data-i18n="hero_title">Vision — L'élégance urbaine taillée pour le quotidien</h1>
                    <p class="lead" data-i18n="hero_copy">Des silhouettes minimalistes, des matières responsables et une allure qui capte l'instant. Découvrez des pièces pensées pour bouger avec vous.</p>
                    <div class="hero-actions">
                        <a class="btn" href="shop.php" data-i18n="hero_cta_primary">Explorer la collection</a>
                        <a class="btn ghost" href="#limited" data-i18n="hero_cta_secondary">Voir les éditions limitées</a>
                    </div>
                </div>
                <div class="hero-visual" role="presentation">
                    <div class="hero-card">
                        <span class="badge" data-i18n="badge_new">Nouveautés</span>
                        <h2 data-i18n="hero_card_title">Drop Vision 07</h2>
                        <p data-i18n="hero_card_copy">Parka technique, hoodie double épaisseur, pantalon cargo texturé.</p>
                        <a class="text-link" href="shop.php" data-i18n="hero_card_link">Découvrir la capsule</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="highlight-products" id="selection">
            <div class="container">
                <div class="section-header light">
                    <span class="eyebrow" data-i18n="highlight_tag">Sélection lumineuse</span>
                    <h2 data-i18n="highlight_title">Une zone claire pour repérer vos prochains essentiels</h2>
                    <p data-i18n="highlight_copy">Visualisez dès maintenant trois emplacements produits dédiés à vos futurs best-sellers Vision.</p>
                </div>
                <div class="highlight-grid" role="list">
                    <article class="highlight-card" role="listitem">
                        <div class="highlight-media" aria-hidden="true">
                            <span class="slot-id">01</span>
                            <span class="media-note" data-i18n="highlight_visual">Visuel 4:5</span>
                        </div>
                        <div class="highlight-body">
                            <span class="highlight-label" data-i18n="highlight_product1_label">Produit à venir</span>
                            <h3 data-i18n="highlight_product1_name">Emplacement produit n°1</h3>
                            <p data-i18n="highlight_product1_copy">Réservez cet espace pour votre pièce phare : photo, nom, prix et appel à l'action s'y intégreront parfaitement.</p>
                            <p class="highlight-price" data-i18n="highlight_price_placeholder">Prix à définir</p>
                            <button class="btn ghost" type="button" disabled data-i18n="highlight_cta">Bientôt disponible</button>
                        </div>
                    </article>
                    <article class="highlight-card" role="listitem">
                        <div class="highlight-media" aria-hidden="true">
                            <span class="slot-id">02</span>
                            <span class="media-note" data-i18n="highlight_visual">Visuel 4:5</span>
                        </div>
                        <div class="highlight-body">
                            <span class="highlight-label" data-i18n="highlight_product2_label">Produit à venir</span>
                            <h3 data-i18n="highlight_product2_name">Emplacement produit n°2</h3>
                            <p data-i18n="highlight_product2_copy">Mettez en avant une nouveauté ou une édition limitée avec visuel 3:4 et fiche descriptive concise.</p>
                            <p class="highlight-price" data-i18n="highlight_price_placeholder">Prix à définir</p>
                            <button class="btn ghost" type="button" disabled data-i18n="highlight_cta">Bientôt disponible</button>
                        </div>
                    </article>
                    <article class="highlight-card" role="listitem">
                        <div class="highlight-media" aria-hidden="true">
                            <span class="slot-id">03</span>
                            <span class="media-note" data-i18n="highlight_visual">Visuel 4:5</span>
                        </div>
                        <div class="highlight-body">
                            <span class="highlight-label" data-i18n="highlight_product3_label">Produit à venir</span>
                            <h3 data-i18n="highlight_product3_name">Emplacement produit n°3</h3>
                            <p data-i18n="highlight_product3_copy">Préparez ici votre drop exclusif : matériaux, storytelling et boutons d'ajout au panier seront mis en valeur.</p>
                            <p class="highlight-price" data-i18n="highlight_price_placeholder">Prix à définir</p>
                            <button class="btn ghost" type="button" disabled data-i18n="highlight_cta">Bientôt disponible</button>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="grid-section" id="collections">
            <div class="container section-header">
                <span class="eyebrow" data-i18n="collections_tag">Collections</span>
                <h2 data-i18n="collections_title">Des pièces essentielles pour un dressing visionnaire</h2>
                <p data-i18n="collections_copy">Composez votre uniforme urbain avec des basiques revisités, des coupes oversize maîtrisées et des détails techniques pensés pour durer.</p>
            </div>
            <div class="container collection-grid">
                <article class="collection-card">
                    <h3 data-i18n="collection_metro_title">Ligne Métropolis</h3>
                    <p data-i18n="collection_metro_copy">Blousons modulaires, pantalons cargos ajustables et accessoires réfléchissants inspirés de la ville nocturne.</p>
                    <a class="text-link" href="shop.php#metropolis" data-i18n="collection_metro_link">Shopper la ligne</a>
                </article>
                <article class="collection-card">
                    <h3 data-i18n="collection_essentials_title">Essentials 24/7</h3>
                    <p data-i18n="collection_essentials_copy">Hoodies premium, tees respirants et joggers sculptés pour l'agilité. Le confort sans compromis.</p>
                    <a class="text-link" href="shop.php#essentials" data-i18n="collection_essentials_link">Shopper les essentiels</a>
                </article>
                <article class="collection-card">
                    <h3 data-i18n="collection_fluid_title">Fluid Dynamics</h3>
                    <p data-i18n="collection_fluid_copy">Pièces unisexes, tissus techniques semi-transparents et superpositions légères inspirées du mouvement.</p>
                    <a class="text-link" href="shop.php#fluid" data-i18n="collection_fluid_link">Shopper la capsule</a>
                </article>
            </div>
        </section>

        <section class="split-section" id="values">
            <div class="container split">
                <div>
                    <span class="eyebrow" data-i18n="values_tag">Manifeste</span>
                    <h2 data-i18n="values_title">Un vestiaire engagé pour une communauté en mouvement</h2>
                    <ul class="value-list">
                        <li data-i18n="values_1">Production responsable en ateliers certifiés en Europe et au Japon.</li>
                        <li data-i18n="values_2">Matériaux recyclés, coton bio, cuir vegan et emballages compostables.</li>
                        <li data-i18n="values_3">Création inclusive : coupes pensées pour toutes les morphologies.</li>
                    </ul>
                    <a class="btn ghost" href="about.php" data-i18n="values_cta">Lire notre histoire</a>
                </div>
                <div class="metrics">
                    <div class="metric">
                        <span class="metric-value">92%</span>
                        <span class="metric-label" data-i18n="metric_satisfaction">de clients satisfaits</span>
                    </div>
                    <div class="metric">
                        <span class="metric-value">48h</span>
                        <span class="metric-label" data-i18n="metric_shipping">Expédition moyenne</span>
                    </div>
                    <div class="metric">
                        <span class="metric-value">35</span>
                        <span class="metric-label" data-i18n="metric_cities">Pays livrés</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="feature-section" id="limited">
            <div class="container section-header">
                <span class="eyebrow" data-i18n="limited_tag">Éditions limitées</span>
                <h2 data-i18n="limited_title">Drops exclusifs & collaborations visionnaires</h2>
                <p data-i18n="limited_copy">Alertes en temps réel, quantités restreintes, design signature. Ne manquez aucun drop.</p>
            </div>
            <div class="container limited-grid">
                <article class="limited-card">
                    <span class="badge" data-i18n="badge_collab">Collaboration</span>
                    <h3 data-i18n="limited_card1_title">Vision x Concrete Waves</h3>
                    <p data-i18n="limited_card1_copy">Capsule inspirée des textures urbaines et des graffitis lumineux.</p>
                    <a class="text-link" href="shop.php#limited" data-i18n="limited_card1_link">Accéder au drop</a>
                </article>
                <article class="limited-card">
                    <span class="badge" data-i18n="badge_limited">Série limitée</span>
                    <h3 data-i18n="limited_card2_title">Programme Atelier 06</h3>
                    <p data-i18n="limited_card2_copy">Pièces numérotées, broderies à la main, packaging signature Vision.</p>
                    <a class="text-link" href="shop.php#atelier" data-i18n="limited_card2_link">Réserver</a>
                </article>
                <article class="limited-card">
                    <span class="badge" data-i18n="badge_restocks">Restock</span>
                    <h3 data-i18n="limited_card3_title">Archive Restock</h3>
                    <p data-i18n="limited_card3_copy">Les pièces iconiques reviennent en quantités très limitées.</p>
                    <a class="text-link" href="shop.php#archive" data-i18n="limited_card3_link">Être notifié·e</a>
                </article>
            </div>
        </section>

        <section class="immersive-section" id="immersive">
            <div class="container split">
                <div>
                    <span class="eyebrow" data-i18n="immersive_tag">Vue 360°</span>
                    <h2 data-i18n="immersive_title">Interagissez avec nos pièces en 3D</h2>
                    <p data-i18n="immersive_copy">Manipulez chaque vêtement, inspectez les textures et choisissez la combinaison qui vous ressemble. La technologie Vision 360° rend l'expérience d'achat tactile.</p>
                    <ul class="value-list">
                        <li data-i18n="immersive_point1">Visualisation multi-angle et zoom haute définition.</li>
                        <li data-i18n="immersive_point2">Prévisualisation des variations de couleurs en temps réel.</li>
                        <li data-i18n="immersive_point3">Compatibilité mobile, tablette et desktop.</li>
                    </ul>
                </div>
                <div class="viewer">
                    <model-viewer src="assets/models/sample-model.glb" alt="Veste Vision 3D" ar ar-modes="webxr scene-viewer quick-look" camera-controls poster="assets/images/placeholder-3d.jpg" shadow-intensity="1"></model-viewer>
                    <p class="viewer-note" data-i18n="immersive_note">Aperçu prototype — la modélisation finale sera intégrée lors de la réception des fichiers 3D.</p>
                </div>
            </div>
        </section>

        <section class="feature-section" id="services">
            <div class="container section-header">
                <span class="eyebrow" data-i18n="services_tag">Services</span>
                <h2 data-i18n="services_title">Une expérience e-commerce fluide et sécurisée</h2>
            </div>
            <div class="container services-grid">
                <article class="service-card">
                    <h3 data-i18n="service_payment_title">Paiement sécurisé</h3>
                    <p data-i18n="service_payment_copy">Carte bancaire, PayPal et wallets numériques avec chiffrement AES-256.</p>
                </article>
                <article class="service-card">
                    <h3 data-i18n="service_delivery_title">Livraison mondiale</h3>
                    <p data-i18n="service_delivery_copy">Suivi en temps réel, partenaires DHL Express & Chronopost, options green.</p>
                </article>
                <article class="service-card">
                    <h3 data-i18n="service_returns_title">Retours simplifiés</h3>
                    <p data-i18n="service_returns_copy">Portail de retours intégré, étiquettes prépayées, remboursement rapide.</p>
                </article>
                <article class="service-card">
                    <h3 data-i18n="service_support_title">Support humain</h3>
                    <p data-i18n="service_support_copy">Équipe dédiée multilingue, réponses sous 24h et assistance live chat.</p>
                </article>
            </div>
        </section>

        <section class="newsletter" id="newsletter">
            <div class="container newsletter-inner">
                <div>
                    <span class="eyebrow" data-i18n="newsletter_tag">Newsletter</span>
                    <h2 data-i18n="newsletter_title">Recevez les drops avant tout le monde</h2>
                    <p data-i18n="newsletter_copy">Inscrivez-vous pour accéder aux préventes, codes promo exclusifs et invitations à nos évènements.</p>
                </div>
                <form class="newsletter-form" novalidate>
                    <label for="newsletter-email" data-i18n="newsletter_label">Votre email</label>
                    <div class="newsletter-input">
                        <input type="email" id="newsletter-email" name="email" placeholder="name@email.com" required>
                        <button type="submit" class="btn" data-i18n="newsletter_cta">S'inscrire</button>
                    </div>
                    <p class="form-feedback" role="status" aria-live="polite"></p>
                </form>
            </div>
        </section>
    </main>
<?php include __DIR__ . '/includes/layout/footer.php'; ?>
