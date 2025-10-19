<?php
require_once __DIR__ . '/includes/init.php';
$pageSlug = 'home';
$pageTitle = 'Vision — Streetwear & Casual';
$pageDescription = "Vision imagine un vestiaire streetwear et casual inspiré de la culture urbaine.";
include __DIR__ . '/includes/layout/head.php';
include __DIR__ . '/includes/layout/header.php';
?>
<main>
    <section class="hero-section py-5 py-lg-5">
        <div class="container py-5">
            <div class="row align-items-center gy-5">
                <div class="col-lg-6 text-center text-lg-start">
                    <span class="badge rounded-pill text-bg-light text-uppercase mb-3">Nouvelle vague</span>
                    <h1 class="display-5 fw-bold mb-4">Vision — l'élégance urbaine taillée pour le quotidien</h1>
                    <p class="lead mb-4">Des silhouettes minimalistes, des matières responsables et une allure qui capte l'instant. Découvrez des pièces pensées pour bouger avec vous.</p>
                    <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center justify-content-lg-start">
                        <a class="btn btn-light btn-lg" href="shop.php">Explorer la collection</a>
                        <a class="btn btn-outline-light btn-lg" href="#editions">Voir les éditions limitées</a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="position-relative">
                        <img src="assets/images/placeholder-3d.jpg" alt="Capsule Vision" class="img-fluid rounded-4 shadow-lg">
                        <div class="position-absolute bottom-0 start-0 translate-middle-y bg-white text-dark rounded-4 p-4 shadow-lg" style="max-width: 260px;">
                            <span class="badge text-bg-primary rounded-pill mb-2">Drop Vision 07</span>
                            <p class="mb-1 small text-uppercase text-secondary">Capsule à venir</p>
                            <p class="mb-0 fw-semibold">Parka technique, hoodie double épaisseur et pantalon cargo texturé.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="section-heading">
                <span class="text-uppercase text-primary fw-semibold small">Sélection lumineuse</span>
                <h2 class="fw-bold mt-2">Repérez vos prochains essentiels</h2>
                <p class="text-secondary">Trois emplacements dédiés à vos futurs best-sellers Vision. Inspirez-vous et projetez vos produits phares dans un univers premium.</p>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100 border-0 card-lift">
                        <div class="card-body">
                            <div class="feature-icon">01</div>
                            <h3 class="h5">Emplacement produit n°1</h3>
                            <p class="text-secondary">Présentez votre pièce phare avec photo, nom, prix et appel à l'action harmonisés.</p>
                            <span class="badge rounded-pill text-bg-primary">Prix à définir</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 card-lift">
                        <div class="card-body">
                            <div class="feature-icon">02</div>
                            <h3 class="h5">Emplacement produit n°2</h3>
                            <p class="text-secondary">Mettez en avant une nouveauté ou une édition limitée avec storytelling immersif.</p>
                            <span class="badge rounded-pill text-bg-primary">Prix à définir</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 card-lift">
                        <div class="card-body">
                            <div class="feature-icon">03</div>
                            <h3 class="h5">Emplacement produit n°3</h3>
                            <p class="text-secondary">Réservez cet espace pour vos collaborations exclusives ou drops en précommande.</p>
                            <span class="badge rounded-pill text-bg-primary">Prix à définir</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-5">
                    <span class="text-uppercase text-primary fw-semibold small">Manifeste</span>
                    <h2 class="fw-bold mt-3">Un vestiaire engagé pour une communauté en mouvement</h2>
                    <p class="text-secondary">Production responsable, matériaux recyclés et création inclusive : Vision imagine un vestiaire haut de gamme qui respecte la planète et les villes qui nous inspirent.</p>
                    <ul class="list-unstyled text-secondary mb-4">
                        <li class="mb-2">• Production responsable en ateliers certifiés en Europe et au Japon.</li>
                        <li class="mb-2">• Matériaux recyclés, coton bio et emballages compostables.</li>
                        <li>• Coupes pensées pour toutes les morphologies.</li>
                    </ul>
                    <a class="btn btn-outline-primary" href="about.php">Lire notre histoire</a>
                </div>
                <div class="col-lg-7">
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="stat-card text-center">
                                <h3>92%</h3>
                                <p class="mb-0 text-secondary">Clients satisfaits</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="stat-card text-center">
                                <h3>48h</h3>
                                <p class="mb-0 text-secondary">Expédition moyenne</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="stat-card text-center">
                                <h3>35</h3>
                                <p class="mb-0 text-secondary">Pays livrés</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5" id="editions">
        <div class="container">
            <div class="section-heading">
                <span class="text-uppercase text-primary fw-semibold small">Éditions limitées</span>
                <h2 class="fw-bold mt-2">Drops exclusifs & collaborations visionnaires</h2>
                <p class="text-secondary">Alertes en temps réel, quantités restreintes et design signature. Ne manquez aucun drop de la communauté Vision.</p>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100 border-0 card-lift">
                        <div class="card-body">
                            <span class="badge text-bg-primary rounded-pill mb-3">Collaboration</span>
                            <h3 class="h5">Vision x Concrete Waves</h3>
                            <p class="text-secondary">Capsule inspirée des textures urbaines et des graffitis lumineux.</p>
                            <a class="link-primary fw-semibold" href="shop.php#limited">Accéder au drop</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 card-lift">
                        <div class="card-body">
                            <span class="badge text-bg-primary rounded-pill mb-3">Série limitée</span>
                            <h3 class="h5">Programme Atelier 06</h3>
                            <p class="text-secondary">Pièces numérotées, broderies à la main et packaging signature Vision.</p>
                            <a class="link-primary fw-semibold" href="shop.php#limited">Réserver</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 card-lift">
                        <div class="card-body">
                            <span class="badge text-bg-primary rounded-pill mb-3">Restock</span>
                            <h3 class="h5">Archive Restock</h3>
                            <p class="text-secondary">Les pièces iconiques reviennent en quantités très limitées.</p>
                            <a class="link-primary fw-semibold" href="shop.php#archive">Être notifié·e</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="ratio ratio-16x9 rounded-4 overflow-hidden shadow-lg">
                        <iframe src="https://www.youtube.com/embed/Zi_XLOBDo_Y" title="Vision Experience" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-6">
                    <span class="text-uppercase text-primary fw-semibold small">Services</span>
                    <h2 class="fw-bold mt-3">Une expérience e-commerce fluide et sécurisée</h2>
                    <div class="mt-4">
                        <div class="d-flex align-items-start gap-3 mb-3">
                            <div class="feature-icon flex-shrink-0">💳</div>
                            <div>
                                <h3 class="h6 mb-1">Paiement sécurisé</h3>
                                <p class="text-secondary mb-0">Carte bancaire, PayPal et wallets numériques avec chiffrement AES-256.</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start gap-3 mb-3">
                            <div class="feature-icon flex-shrink-0">🚚</div>
                            <div>
                                <h3 class="h6 mb-1">Livraison mondiale</h3>
                                <p class="text-secondary mb-0">Suivi en temps réel, partenaires DHL Express & Chronopost, options green.</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start gap-3">
                            <div class="feature-icon flex-shrink-0">💬</div>
                            <div>
                                <h3 class="h6 mb-1">Support humain</h3>
                                <p class="text-secondary mb-0">Équipe dédiée multilingue, réponses sous 24h et assistance live chat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
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
                                <label class="form-label" for="newsletter-email">Votre email</label>
                                <input class="form-control form-control-lg" type="email" id="newsletter-email" placeholder="vous@vision.com">
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
