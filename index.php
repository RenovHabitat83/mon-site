<?php
require_once __DIR__ . '/includes/init.php';

$pageSlug = 'home';
$pageTitle = 'Renov Habitat 83 — Votre maison, notre passion depuis 2010';
$pageDescription = "Construction, rénovation et aménagement dans le Var : Renov Habitat 83 conçoit des espaces sur mesure pour les particuliers et les professionnels.";

include __DIR__ . '/includes/layout/head.php';
include __DIR__ . '/includes/layout/header.php';
?>
<main class="homepage">
    <section class="hero-section position-relative text-light">
        <div class="hero-background"></div>
        <div class="container position-relative">
            <div class="row justify-content-start">
                <div class="col-lg-7 col-xl-6">
                    <div class="hero-card shadow-lg">
                        <span class="hero-badge">Entreprise Renov Habitat 83</span>
                        <h1 class="display-5 fw-bold mb-3">Votre maison, notre passion depuis 2010</h1>
                        <p class="lead text-secondary-emphasis mb-4">Nous rénovons, agrandissons et sublimons vos espaces de vie dans tout le Var. Une équipe d'artisans experts à votre écoute, du premier croquis à la réception de chantier.</p>
                        <div class="d-flex flex-column flex-sm-row gap-3 mb-4">
                            <a class="btn btn-success btn-lg rounded-pill px-4" href="#contact">Demander un devis gratuit</a>
                            <a class="btn btn-outline-success btn-lg rounded-pill px-4" href="#realisations">Découvrir nos réalisations</a>
                        </div>
                        <ul class="hero-list list-unstyled d-flex flex-column gap-2 mb-4">
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Accompagnement personnalisé et interlocuteur unique</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Respect des délais, suivi de chantier transparent</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Garanties décennales et assurances professionnelles</li>
                        </ul>
                        <div class="hero-highlight d-flex align-items-center gap-3">
                            <div class="highlight-icon">
                                <i class="bi bi-house-heart-fill"></i>
                            </div>
                            <div>
                                <p class="mb-0 fw-semibold text-dark">+350 projets réalisés</p>
                                <p class="mb-0 text-secondary">Rénovations complètes, extensions contemporaines et extérieurs paysagers.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 why-section">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <div class="why-icon">
                        <i class="bi bi-tools"></i>
                    </div>
                    <h2 class="fw-bold mb-3">Pourquoi choisir Renov Habitat 83 ?</h2>
                    <p class="text-secondary mb-4">Parce que chaque projet est unique, nous imaginons des solutions sur mesure en tenant compte de vos envies, de votre budget et de votre planning. Notre équipe coordonne l'ensemble des corps de métier pour un résultat irréprochable.</p>
                    <ul class="list-unstyled d-flex flex-column gap-2">
                        <li><i class="bi bi-check-lg text-success me-2"></i>Artisans qualifiés, certifiés Qualibat &amp; RGE</li>
                        <li><i class="bi bi-check-lg text-success me-2"></i>Matériaux durables et circuits d'approvisionnement locaux</li>
                        <li><i class="bi bi-check-lg text-success me-2"></i>Suivi client dédié et visites régulières de chantier</li>
                    </ul>
                </div>
                <div class="col-lg-7">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="feature-card h-100">
                                <div class="feature-icon bg-success-subtle text-success"><i class="bi bi-bricks"></i></div>
                                <h3 class="h5 fw-semibold">Rénovations complètes</h3>
                                <p class="text-secondary mb-0">Appartements, villas et locaux professionnels : nous transformons vos espaces pour conjuguer confort, design et performance énergétique.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-card h-100">
                                <div class="feature-icon bg-success-subtle text-success"><i class="bi bi-columns-gap"></i></div>
                                <h3 class="h5 fw-semibold">Extensions &amp; Surélévations</h3>
                                <p class="text-secondary mb-0">Gagnez des mètres carrés lumineux et fonctionnels avec des structures intégrées à l'architecture existante.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-card h-100">
                                <div class="feature-icon bg-success-subtle text-success"><i class="bi bi-flower3"></i></div>
                                <h3 class="h5 fw-semibold">Aménagements extérieurs</h3>
                                <p class="text-secondary mb-0">Terrasses, piscines et jardins paysagers : créez un cocon extérieur propice au partage et à la détente.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-card h-100">
                                <div class="feature-icon bg-success-subtle text-success"><i class="bi bi-lightning-charge"></i></div>
                                <h3 class="h5 fw-semibold">Interventions rapides</h3>
                                <p class="text-secondary mb-0">Maintenance, mise en sécurité, dépannages : une équipe réactive pour vos urgences techniques.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light" id="realisations">
        <div class="container">
            <div class="section-heading text-center mb-5">
                <span class="subtitle">Nos dernières réalisations</span>
                <h2 class="fw-bold">Des projets sur mesure qui valorisent votre patrimoine</h2>
                <p class="text-secondary">Découvrez quelques-unes de nos interventions récentes dans le Var : rénovation intérieure, cuisine sur mesure, extension de maison et aménagement extérieur paysager.</p>
            </div>
            <div class="row g-4">
                <div class="col-12 col-md-6 col-xl-3">
                    <article class="realisation-card h-100">
                        <div class="ratio ratio-4x3 rounded-4 overflow-hidden mb-3">
                            <img src="https://images.unsplash.com/photo-1580587771525-78b9dba3b914?auto=format&fit=crop&w=900&q=80" alt="Rénovation de villa contemporaine" class="img-fluid object-fit-cover">
                        </div>
                        <h3 class="h5 fw-semibold mb-1">Villa contemporaine · Bandol</h3>
                        <p class="text-secondary mb-0">Rénovation globale avec ouverture sur la mer et création d'une suite parentale.</p>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-xl-3">
                    <article class="realisation-card h-100">
                        <div class="ratio ratio-4x3 rounded-4 overflow-hidden mb-3">
                            <img src="https://images.unsplash.com/photo-1505691938895-1758d7feb511?auto=format&fit=crop&w=900&q=80" alt="Cuisine sur mesure" class="img-fluid object-fit-cover">
                        </div>
                        <h3 class="h5 fw-semibold mb-1">Cuisine design · Toulon</h3>
                        <p class="text-secondary mb-0">Mobilier sur mesure, plan de travail en quartz et éclairage intégré.</p>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-xl-3">
                    <article class="realisation-card h-100">
                        <div class="ratio ratio-4x3 rounded-4 overflow-hidden mb-3">
                            <img src="https://images.unsplash.com/photo-1449844908441-8829872d2607?auto=format&fit=crop&w=900&q=80" alt="Extension de maison" class="img-fluid object-fit-cover">
                        </div>
                        <h3 class="h5 fw-semibold mb-1">Extension bois · Hyères</h3>
                        <p class="text-secondary mb-0">Extension ossature bois avec grande baie vitrée et terrasse pergola.</p>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-xl-3">
                    <article class="realisation-card h-100">
                        <div class="ratio ratio-4x3 rounded-4 overflow-hidden mb-3">
                            <img src="https://images.unsplash.com/photo-1600585154340-0ef3c08dcdb6?auto=format&fit=crop&w=900&q=80" alt="Aménagement extérieur" class="img-fluid object-fit-cover">
                        </div>
                        <h3 class="h5 fw-semibold mb-1">Jardin méditerranéen · Sanary</h3>
                        <p class="text-secondary mb-0">Création d'une piscine miroir, terrasses en bois et jardin sec végétalisé.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 testimonials-section">
        <div class="container">
            <div class="section-heading text-center mb-5">
                <span class="subtitle">Ils parlent de nous !</span>
                <h2 class="fw-bold">La satisfaction de nos clients est notre meilleure vitrine</h2>
                <p class="text-secondary">Professionnels et particuliers nous recommandent pour notre écoute, la qualité de notre travail et le respect des engagements.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <article class="testimonial-card h-100">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center gap-3">
                                <div class="avatar">AB</div>
                                <div>
                                    <h3 class="h6 mb-1">Amandine B. · Toulon</h3>
                                    <p class="mb-0 text-secondary">Rénovation complète d'appartement</p>
                                </div>
                            </div>
                            <div class="stars text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                        <p class="mb-0">"Equipe très professionnelle, respect des délais et un rendu final au-delà de nos attentes. Nous recommandons Renov Habitat 83 les yeux fermés !"</p>
                    </article>
                </div>
                <div class="col-lg-6">
                    <article class="testimonial-card h-100">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center gap-3">
                                <div class="avatar">JM</div>
                                <div>
                                    <h3 class="h6 mb-1">Jean-Marc L. · La Seyne</h3>
                                    <p class="mb-0 text-secondary">Extension et terrasse</p>
                                </div>
                            </div>
                            <div class="stars text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                        <p class="mb-0">"Un suivi de chantier irréprochable et des finitions parfaites. Les équipes sont à l'écoute et force de proposition pour optimiser chaque détail."</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 contact-section" id="contact">
        <div class="container">
            <div class="contact-panel p-4 p-lg-5 rounded-4 shadow-lg">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-7">
                        <span class="contact-badge">Parlez-nous de votre projet</span>
                        <h2 class="fw-bold mb-3">Nous imaginons et réalisons votre habitat idéal</h2>
                        <p class="text-secondary mb-4">Un conseiller dédié vous accompagne à chaque étape : étude personnalisée, plans 3D, sélection des matériaux et coordination complète du chantier.</p>
                        <ul class="list-unstyled d-flex flex-column gap-2 mb-4">
                            <li><i class="bi bi-telephone-outbound-fill text-success me-2"></i>Devis détaillé sous 48 heures</li>
                            <li><i class="bi bi-calendar-check-fill text-success me-2"></i>Prise de rendez-vous sur mesure à domicile ou en visio</li>
                            <li><i class="bi bi-shield-check text-success me-2"></i>Garanties décennales et responsabilité civile professionnelle</li>
                        </ul>
                        <a class="btn btn-success btn-lg rounded-pill px-4" href="mailto:contact@renovhabitat83.fr">Envoyer ma demande</a>
                    </div>
                    <div class="col-lg-5">
                        <div class="contact-box rounded-4 p-4">
                            <h3 class="h5 fw-semibold mb-3">Contactez-nous</h3>
                            <div class="d-flex flex-column gap-3">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="contact-icon bg-success-subtle text-success"><i class="bi bi-telephone-fill"></i></div>
                                    <div>
                                        <p class="mb-0 fw-semibold">Appelez-nous</p>
                                        <a class="text-decoration-none text-dark" href="tel:+33494000000">04 94 00 00 00</a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-3">
                                    <div class="contact-icon bg-success-subtle text-success"><i class="bi bi-envelope-fill"></i></div>
                                    <div>
                                        <p class="mb-0 fw-semibold">Écrivez-nous</p>
                                        <a class="text-decoration-none text-dark" href="mailto:contact@renovhabitat83.fr">contact@renovhabitat83.fr</a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-3">
                                    <div class="contact-icon bg-success-subtle text-success"><i class="bi bi-geo-alt-fill"></i></div>
                                    <div>
                                        <p class="mb-0 fw-semibold">Venez nous rencontrer</p>
                                        <p class="mb-0 text-secondary">123 avenue des Arts &amp; Métiers · 83000 Toulon</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include __DIR__ . '/includes/layout/footer.php'; ?>
