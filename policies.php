<?php
require_once __DIR__ . '/includes/init.php';
$pageSlug = 'policies';
$pageTitle = 'Vision — Politiques';
$pageDescription = "Découvrez les politiques de confidentialité, livraison et retours Vision.";
include __DIR__ . '/includes/layout/head.php';
include __DIR__ . '/includes/layout/header.php';
?>
<main>
    <section class="py-5 bg-white">
        <div class="container py-4 text-center">
            <span class="text-uppercase text-primary fw-semibold small">Politiques</span>
            <h1 class="fw-bold display-6 mt-3">Confidentialité, retours, livraison & cookies</h1>
            <p class="text-secondary mx-auto" style="max-width: 720px;">Retrouvez l'ensemble des informations clés concernant la gestion de vos données, les retours, la livraison et vos préférences de cookies.</p>
        </div>
    </section>

    <section class="py-5" id="privacy">
        <div class="container">
            <div class="policy-section">
                <h2 class="fw-bold">Politique de confidentialité</h2>
                <p class="text-secondary">Vision s'engage à protéger vos données personnelles. Le document complet sera publié dès validation juridique.</p>
                <ul class="text-secondary">
                    <li>Collecte limitée aux données nécessaires : identifiants, préférences, historique de commandes.</li>
                    <li>Utilisation : gestion des commandes, personnalisation, newsletter Vision Loop.</li>
                    <li>Vos droits : accès, rectification, portabilité, suppression via privacy@visionwear.com.</li>
                    <li>Sécurité : chiffrement, audits réguliers, hébergement conforme RGPD.</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white" id="returns">
        <div class="container">
            <div class="policy-section">
                <h2 class="fw-bold">Politique de retour</h2>
                <p class="text-secondary">Les modalités officielles seront intégrées lors de la mise en ligne. Aperçu des engagements Vision :</p>
                <ul class="text-secondary">
                    <li>Retour sous 30 jours, pièces non portées et étiquettes intactes.</li>
                    <li>Portail Vision Loop pour générer une étiquette prépayée et suivre votre dossier.</li>
                    <li>Remboursement sous 7 jours ouvrés après réception et contrôle qualité.</li>
                    <li>Échanges possibles selon disponibilité en stock.</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="py-5" id="delivery">
        <div class="container">
            <div class="policy-section">
                <h2 class="fw-bold">Politique de livraison</h2>
                <p class="text-secondary">Vision expédie à l'international en collaborant avec des partenaires logistiques responsables.</p>
                <ul class="text-secondary">
                    <li>Modes : express 24/48h, standard 3-5 jours, relais 4-6 jours.</li>
                    <li>Suivi temps réel via l'espace client et notifications SMS.</li>
                    <li>Frais calculés selon le pays, offerts dès 200 € d'achat.</li>
                    <li>Option green : compensation carbone, emballages recyclés.</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white" id="cookies">
        <div class="container">
            <div class="policy-section">
                <h2 class="fw-bold">Politique cookies & préférences</h2>
                <p class="text-secondary">Vision respecte le RGPD. Cette section sera connectée à une CMP (Consent Management Platform) lors du développement final.</p>
                <ul class="text-secondary">
                    <li>Cookies essentiels : indispensables au fonctionnement (authentification, panier).</li>
                    <li>Cookies analytiques : mesure d'audience anonymisée.</li>
                    <li>Cookies marketing : personnalisation des offres et campagnes.</li>
                    <li>Vous pouvez ajuster vos préférences à tout moment depuis le bandeau cookies ou votre compte.</li>
                </ul>
            </div>
        </div>
    </section>
</main>
<?php include __DIR__ . '/includes/layout/footer.php'; ?>
