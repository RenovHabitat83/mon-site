<?php
require_once __DIR__ . '/includes/init.php';
$pageSlug = 'legal';
$pageTitle = 'Vision — Mentions légales & CGV';
$pageDescription = "Consultez les mentions légales et conditions générales Vision.";
include __DIR__ . '/includes/layout/head.php';
include __DIR__ . '/includes/layout/header.php';
?>
<main>
        <section class="page-hero">
            <div class="container">
                <p class="eyebrow" data-i18n="legal_tag">Légal</p>
                <h1 data-i18n="legal_title">Mentions légales & Conditions générales de vente</h1>
                <p data-i18n="legal_intro">Informations officielles de la marque Vision, détaillant notre statut juridique, les conditions de vente et les garanties associées.</p>
            </div>
        </section>

        <section class="legal-section" id="terms">
            <div class="container">
                <h2 data-i18n="legal_terms_title">Mentions légales</h2>
                <p data-i18n="legal_terms_intro">Ce contenu est fourni à titre de maquette. Les informations officielles seront intégrées lorsque les documents juridiques seront finalisés.</p>
                <ul class="legal-list">
                    <li data-i18n="legal_terms_company">Vision Wear SAS — Capital social à définir — RCS Paris.</li>
                    <li data-i18n="legal_terms_address">Siège social : 18 rue Horizon, 75010 Paris, France.</li>
                    <li data-i18n="legal_terms_contact">Contact : legal@visionwear.com — +33 (0)1 00 00 00 00.</li>
                    <li data-i18n="legal_terms_director">Directeur de publication : Aliyah Chen.</li>
                    <li data-i18n="legal_terms_host">Hébergeur : à confirmer.</li>
                </ul>
            </div>
        </section>

        <section class="legal-section" id="cgv">
            <div class="container">
                <h2 data-i18n="legal_cgv_title">Conditions générales de vente</h2>
                <p data-i18n="legal_cgv_intro">Ces CGV seront remplacées par le document officiel communiqué par l'équipe juridique.</p>
                <ol class="legal-ordered">
                    <li data-i18n="legal_cgv_1">Objet : définir les modalités de vente en ligne des produits Vision.</li>
                    <li data-i18n="legal_cgv_2">Produits : vêtements et accessoires streetwear, quantités limitées, disponibilité temps réel.</li>
                    <li data-i18n="legal_cgv_3">Prix : affichés en EUR avec TVA incluse. Conversion automatique selon la devise du pays de livraison.</li>
                    <li data-i18n="legal_cgv_4">Commande : validation après email de confirmation. Possibilité de suivi via l'espace client.</li>
                    <li data-i18n="legal_cgv_5">Paiement : cartes bancaires, PayPal, wallets numériques. Sécurisation via protocole 3D Secure.</li>
                    <li data-i18n="legal_cgv_6">Livraison : internationale, délais indicatifs communiqués avant paiement, suivi en temps réel.</li>
                    <li data-i18n="legal_cgv_7">Retours : 30 jours, produits non portés. Remboursement sous 7 jours après validation.</li>
                    <li data-i18n="legal_cgv_8">Garanties : conformité légale, défauts de fabrication, service après-vente dédié.</li>
                    <li data-i18n="legal_cgv_9">Service client : support multilingue, contact@visionwear.com.</li>
                    <li data-i18n="legal_cgv_10">Droit applicable : droit français. Litiges soumis aux tribunaux compétents de Paris.</li>
                </ol>
            </div>
        </section>
    </main>
<?php include __DIR__ . '/includes/layout/footer.php'; ?>
