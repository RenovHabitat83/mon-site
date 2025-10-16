<?php
require_once __DIR__ . '/includes/init.php';
$pageSlug = 'legal';
$pageTitle = 'Vision — Mentions légales & CGV';
$pageDescription = "Consultez les mentions légales et conditions générales Vision.";
include __DIR__ . '/includes/layout/head.php';
include __DIR__ . '/includes/layout/header.php';
?>
<main>
    <section class="py-5 bg-white">
        <div class="container py-4 text-center">
            <span class="text-uppercase text-primary fw-semibold small">Légal</span>
            <h1 class="fw-bold display-6 mt-3">Mentions légales & Conditions générales de vente</h1>
            <p class="text-secondary mx-auto" style="max-width: 720px;">Informations officielles de la marque Vision, détaillant notre statut juridique, les conditions de vente et les garanties associées.</p>
        </div>
    </section>

    <section class="py-5" id="terms">
        <div class="container">
            <div class="policy-section">
                <h2 class="fw-bold">Mentions légales</h2>
                <p class="text-secondary">Ce contenu est fourni à titre de maquette. Les informations officielles seront intégrées lorsque les documents juridiques seront finalisés.</p>
                <ul class="text-secondary">
                    <li>Vision Wear SAS — Capital social à définir — RCS Paris.</li>
                    <li>Siège social : 18 rue Horizon, 75010 Paris, France.</li>
                    <li>Contact : legal@visionwear.com — +33 (0)1 00 00 00 00.</li>
                    <li>Directrice de publication : Aliyah Chen.</li>
                    <li>Hébergeur : à confirmer.</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white" id="cgv">
        <div class="container">
            <div class="policy-section">
                <h2 class="fw-bold">Conditions générales de vente</h2>
                <p class="text-secondary">Ces CGV seront remplacées par le document officiel communiqué par l'équipe juridique.</p>
                <ol class="text-secondary ps-4">
                    <li>Objet : définir les modalités de vente en ligne des produits Vision.</li>
                    <li>Produits : vêtements et accessoires streetwear, quantités limitées, disponibilité temps réel.</li>
                    <li>Prix : affichés en EUR avec TVA incluse. Conversion automatique selon la devise du pays de livraison.</li>
                    <li>Commande : validation après email de confirmation. Possibilité de suivi via l'espace client.</li>
                    <li>Paiement : cartes bancaires, PayPal, wallets numériques. Sécurisation via protocole 3D Secure.</li>
                    <li>Livraison : internationale, délais indicatifs communiqués avant paiement, suivi en temps réel.</li>
                    <li>Retours : 30 jours, produits non portés. Remboursement sous 7 jours après validation.</li>
                    <li>Garanties : conformité légale, défauts de fabrication, service après-vente dédié.</li>
                    <li>Service client : support multilingue, contact@visionwear.com.</li>
                    <li>Droit applicable : droit français. Litiges soumis aux tribunaux compétents de Paris.</li>
                </ol>
            </div>
        </div>
    </section>
</main>
<?php include __DIR__ . '/includes/layout/footer.php'; ?>
