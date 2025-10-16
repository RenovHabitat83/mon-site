<?php
require_once __DIR__ . '/includes/init.php';
$pageSlug = 'about';
$pageTitle = 'Vision — À propos';
$pageDescription = "Découvrez l'histoire, les valeurs et la mission de Vision.";
include __DIR__ . '/includes/layout/head.php';
include __DIR__ . '/includes/layout/header.php';
?>
<main>
    <section class="py-5 bg-white">
        <div class="container py-4 text-center">
            <span class="text-uppercase text-primary fw-semibold small">Notre univers</span>
            <h1 class="fw-bold display-6 mt-3">Vision : l'esthétique streetwear pensée pour durer</h1>
            <p class="text-secondary mx-auto" style="max-width: 720px;">Née dans les rues de Paris et façonnée par une communauté internationale, Vision repense les essentiels urbains avec exigence et conscience.</p>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row g-5 align-items-start">
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-4">Notre histoire</h2>
                    <div class="d-flex flex-column gap-4">
                        <div class="timeline-item">
                            <h3 class="h6 text-uppercase text-secondary">2016 — Origines</h3>
                            <p class="mb-0 text-secondary">Lancement de Vision avec une première série de hoodies produits en édition limitée et sérigraphiés à la main.</p>
                        </div>
                        <div class="timeline-item">
                            <h3 class="h6 text-uppercase text-secondary">2018 — Communauté</h3>
                            <p class="mb-0 text-secondary">Ouverture du studio Vision à Paris, ateliers co-créatifs avec les clients et collaborations avec des artistes visuels.</p>
                        </div>
                        <div class="timeline-item">
                            <h3 class="h6 text-uppercase text-secondary">2021 — Expansion</h3>
                            <p class="mb-0 text-secondary">Distribution internationale, lancement de la plateforme e-commerce et introduction des gammes techniques.</p>
                        </div>
                        <div class="timeline-item">
                            <h3 class="h6 text-uppercase text-secondary">2024 — Innovation</h3>
                            <p class="mb-0 text-secondary">Intégration de la modélisation 3D, logistique bas carbone et programme de recyclage Vision Loop.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body">
                            <span class="text-uppercase text-primary fw-semibold small">Mission</span>
                            <h2 class="h4 fw-bold mt-2">Créer des pièces qui racontent les villes et respectent la planète</h2>
                            <p class="text-secondary mb-0">Chaque collection est conçue à partir de matériaux premium et responsables. Nous travaillons avec des ateliers certifiés, privilégions des séries limitées pour éviter la surproduction et offrons une traçabilité complète.</p>
                        </div>
                    </div>
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <span class="text-uppercase text-primary fw-semibold small">Vision</span>
                            <h2 class="h4 fw-bold mt-2">Une marque pensée pour la communauté</h2>
                            <p class="text-secondary mb-0">Vision défend la diversité, l'inclusivité et l'expression personnelle. Nos campagnes donnent la parole aux clients, artistes, athlètes et créatifs qui nous inspirent.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container">
            <div class="section-heading">
                <span class="text-uppercase text-primary fw-semibold small">Nos piliers</span>
                <h2 class="fw-bold mt-2">Trois engagements qui nous guident</h2>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm card-lift">
                        <div class="card-body">
                            <h3 class="h5">Design fonctionnel</h3>
                            <p class="text-secondary mb-0">Coupes étudiées, poches intelligentes, tissus respirants et résistance à l'eau pour accompagner les rythmes urbains.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm card-lift">
                        <div class="card-body">
                            <h3 class="h5">Culture street</h3>
                            <p class="text-secondary mb-0">Influencée par le skate, la musique électronique et l'art contemporain, Vision capte l'énergie des grandes villes.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm card-lift">
                        <div class="card-body">
                            <h3 class="h5">Responsabilité</h3>
                            <p class="text-secondary mb-0">Traçabilité complète, partenaires engagés, packaging recyclé et don d'invendus à des associations.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="section-heading">
                <span class="text-uppercase text-primary fw-semibold small">L'équipe Vision</span>
                <h2 class="fw-bold mt-2">Une équipe multidisciplinaire</h2>
                <p class="text-secondary">Designers, stylistes, développeurs, logisticiens et storytellers orchestrent chaque lancement Vision.</p>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card border-0 shadow-sm h-100 contact-card">
                        <div class="card-body">
                            <h3 class="h5">Aliyah Chen</h3>
                            <p class="text-secondary mb-0">Directrice créative — imagine les silhouettes et collabore avec des artistes émergents.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0 shadow-sm h-100 contact-card">
                        <div class="card-body">
                            <h3 class="h5">Liam Moreau</h3>
                            <p class="text-secondary mb-0">Head of Digital — pilote l'expérience e-commerce, la 3D et les innovations retail.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0 shadow-sm h-100 contact-card">
                        <div class="card-body">
                            <h3 class="h5">Jade Okafor</h3>
                            <p class="text-secondary mb-0">Responsable production — garantit la qualité, la traçabilité et la logistique bas carbone.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include __DIR__ . '/includes/layout/footer.php'; ?>
