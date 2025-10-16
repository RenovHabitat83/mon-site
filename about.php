<?php
require_once __DIR__ . '/includes/init.php';
$pageSlug = 'about';
$pageTitle = 'Vision — À propos';
$pageDescription = "Découvrez l'histoire, les valeurs et la mission de Vision.";
include __DIR__ . '/includes/layout/head.php';
include __DIR__ . '/includes/layout/header.php';
?>
<main>
        <section class="page-hero">
            <div class="container">
                <p class="eyebrow" data-i18n="about_tag">Notre univers</p>
                <h1 data-i18n="about_title">Vision : l'esthétique streetwear pensée pour durer</h1>
                <p data-i18n="about_intro">Née dans les rues de Paris et façonnée par une communauté internationale, Vision repense les essentiels urbains avec exigence et conscience.</p>
            </div>
        </section>

        <section class="timeline">
            <div class="container">
                <article class="timeline-item">
                    <h2 data-i18n="timeline_2016_title">2016 — Origines</h2>
                    <p data-i18n="timeline_2016_copy">Lancement de Vision avec une première série de hoodies produits en édition limitée et sérigraphiés à la main.</p>
                </article>
                <article class="timeline-item">
                    <h2 data-i18n="timeline_2018_title">2018 — Communauté</h2>
                    <p data-i18n="timeline_2018_copy">Ouverture du studio Vision à Paris, ateliers co-créatifs avec les clients et premières collaborations avec des artistes visuels.</p>
                </article>
                <article class="timeline-item">
                    <h2 data-i18n="timeline_2021_title">2021 — Expansion</h2>
                    <p data-i18n="timeline_2021_copy">Distribution internationale, lancement de la plateforme e-commerce et introduction des gammes techniques.</p>
                </article>
                <article class="timeline-item">
                    <h2 data-i18n="timeline_2024_title">2024 — Innovation</h2>
                    <p data-i18n="timeline_2024_copy">Intégration de la modélisation 3D, logistique bas carbone et programme de recyclage Vision Loop.</p>
                </article>
            </div>
        </section>

        <section class="split-section">
            <div class="container split">
                <div>
                    <span class="eyebrow" data-i18n="mission_tag">Mission</span>
                    <h2 data-i18n="mission_title">Créer des pièces qui racontent les villes et respectent la planète</h2>
                    <p data-i18n="mission_copy">Chaque collection est conçue à partir de matériaux premium et responsables. Nous travaillons avec des ateliers certifiés, privilégions des séries limitées pour éviter la surproduction et offrons une traçabilité complète.</p>
                </div>
                <div>
                    <span class="eyebrow" data-i18n="vision_tag">Vision</span>
                    <h2 data-i18n="vision_title">Une marque pensée pour la communauté</h2>
                    <p data-i18n="vision_copy">Vision défend la diversité, l'inclusivité et l'expression personnelle. Nos campagnes donnent la parole aux clients, artistes, athlètes et créatifs qui nous inspirent.</p>
                </div>
            </div>
        </section>

        <section class="values-grid">
            <div class="container section-header">
                <h2 data-i18n="pillars_title">Nos piliers</h2>
            </div>
            <div class="container grid-3">
                <article>
                    <h3 data-i18n="pillar_design_title">Design fonctionnel</h3>
                    <p data-i18n="pillar_design_copy">Coupes étudiées, poches intelligentes, tissus respirants et résistance à l'eau pour accompagner les rythmes urbains.</p>
                </article>
                <article>
                    <h3 data-i18n="pillar_culture_title">Culture street</h3>
                    <p data-i18n="pillar_culture_copy">Influencée par le skate, la musique électronique et l'art contemporain, Vision capte l'énergie des grandes villes.</p>
                </article>
                <article>
                    <h3 data-i18n="pillar_responsibility_title">Responsabilité</h3>
                    <p data-i18n="pillar_responsibility_copy">Traçabilité complète, partenaires engagés, packaging recyclé et donation d'invendus à des associations.</p>
                </article>
            </div>
        </section>

        <section class="team">
            <div class="container section-header">
                <h2 data-i18n="team_title">L'équipe Vision</h2>
                <p data-i18n="team_copy">Une équipe multidisciplinaire mêlant designers, stylistes, développeurs, logisticiens et storytellers.</p>
            </div>
            <div class="container team-grid">
                <article class="team-card">
                    <h3>Aliyah Chen</h3>
                    <p data-i18n="team_aliyah">Directrice créative — imagine les silhouettes et collabore avec des artistes émergents.</p>
                </article>
                <article class="team-card">
                    <h3>Liam Moreau</h3>
                    <p data-i18n="team_liam">Head of Digital — pilote l'expérience e-commerce, la 3D et les innovations retail.</p>
                </article>
                <article class="team-card">
                    <h3>Jade Okafor</h3>
                    <p data-i18n="team_jade">Responsable production — garantit la qualité, la traçabilité et la logistique bas carbone.</p>
                </article>
            </div>
        </section>
    </main>
<?php include __DIR__ . '/includes/layout/footer.php'; ?>
