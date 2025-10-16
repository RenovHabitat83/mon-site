<?php
require_once __DIR__ . '/includes/init.php';
$pageSlug = 'policies';
$pageTitle = 'Vision — Politiques';
$pageDescription = "Découvrez les politiques de confidentialité, livraison et retours Vision.";
include __DIR__ . '/includes/layout/head.php';
include __DIR__ . '/includes/layout/header.php';
?>
<main>
        <section class="page-hero">
            <div class="container">
                <p class="eyebrow" data-i18n="policies_tag">Politiques</p>
                <h1 data-i18n="policies_title">Confidentialité, retours, livraison & cookies</h1>
                <p data-i18n="policies_intro">Retrouvez l'ensemble des informations clés concernant la gestion de vos données, les retours, la livraison et vos préférences de cookies.</p>
            </div>
        </section>

        <section class="legal-section" id="privacy">
            <div class="container">
                <h2 data-i18n="privacy_title">Politique de confidentialité</h2>
                <p data-i18n="privacy_intro">Vision s'engage à protéger vos données personnelles. Le document complet sera publié dès validation juridique.</p>
                <ul class="legal-list">
                    <li data-i18n="privacy_data">Collecte limitée aux données nécessaires : identifiants, préférences, historique de commandes.</li>
                    <li data-i18n="privacy_use">Utilisation : gestion des commandes, personnalisation, newsletter Vision Loop.</li>
                    <li data-i18n="privacy_rights">Vos droits : accès, rectification, portabilité, suppression via privacy@visionwear.com.</li>
                    <li data-i18n="privacy_security">Sécurité : chiffrement, audits réguliers, hébergement conforme RGPD.</li>
                </ul>
            </div>
        </section>

        <section class="legal-section" id="returns">
            <div class="container">
                <h2 data-i18n="returns_title">Politique de retour</h2>
                <p data-i18n="returns_intro">Les modalités officielles seront intégrées lors de la mise en ligne. Aperçu des engagements Vision :</p>
                <ul class="legal-list">
                    <li data-i18n="returns_period">Retour sous 30 jours, pièces non portées et étiquettes intactes.</li>
                    <li data-i18n="returns_process">Portail Vision Loop pour générer une étiquette prépayée et suivre votre dossier.</li>
                    <li data-i18n="returns_refund">Remboursement sous 7 jours ouvrés après réception et contrôle qualité.</li>
                    <li data-i18n="returns_exchange">Échanges possibles selon disponibilité en stock.</li>
                </ul>
            </div>
        </section>

        <section class="legal-section" id="delivery">
            <div class="container">
                <h2 data-i18n="delivery_title">Politique de livraison</h2>
                <p data-i18n="delivery_intro">Vision expédie à l'international en collaborant avec des partenaires logistiques responsables.</p>
                <ul class="legal-list">
                    <li data-i18n="delivery_modes">Modes : express 24/48h, standard 3-5 jours, relais 4-6 jours.</li>
                    <li data-i18n="delivery_tracking">Suivi temps réel via l'espace client et notifications SMS.</li>
                    <li data-i18n="delivery_fees">Frais calculés selon le pays, offerts dès 200 € d'achat.</li>
                    <li data-i18n="delivery_green">Option green : compensation carbone, emballages recyclés.</li>
                </ul>
            </div>
        </section>

        <section class="legal-section" id="cookies">
            <div class="container">
                <h2 data-i18n="cookies_title">Politique cookies & préférences</h2>
                <p data-i18n="cookies_intro">Vision respecte le RGPD. Cette section sera connectée à une CMP (Consent Management Platform) lors du développement final.</p>
                <ul class="legal-list">
                    <li data-i18n="cookies_necessary">Cookies essentiels : indispensables au fonctionnement (authentification, panier).</li>
                    <li data-i18n="cookies_analytics">Cookies analytiques : mesure d'audience anonymisée.</li>
                    <li data-i18n="cookies_marketing">Cookies marketing : personnalisation des offres et campagnes.</li>
                    <li data-i18n="cookies_preferences">Vous pouvez ajuster vos préférences à tout moment depuis le bandeau cookies ou votre compte.</li>
                </ul>
            </div>
        </section>
    </main>
<?php include __DIR__ . '/includes/layout/footer.php'; ?>
