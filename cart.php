<?php
require_once __DIR__ . '/includes/init.php';
$pageSlug = 'cart';
$pageTitle = 'Vision — Panier';
$pageDescription = "Visualisez et validez vos pièces Vision avant le paiement sécurisé.";
$cartItems = get_cart_items();
$totals = calculate_cart_totals($cartItems);
include __DIR__ . '/includes/layout/head.php';
include __DIR__ . '/includes/layout/header.php';
?>
<main>
    <section class="py-5 bg-white">
        <div class="container py-4 text-center">
            <span class="text-uppercase text-primary fw-semibold small">Panier</span>
            <h1 class="fw-bold display-6 mt-3">Vos sélections Vision</h1>
            <p class="text-secondary mx-auto" style="max-width: 680px;">Ajustez les quantités, appliquez vos codes promo et choisissez votre mode de livraison.</p>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm p-4">
                        <h2 class="h4 fw-bold mb-4">Articles</h2>
                        <?php if (empty($cartItems)): ?>
                            <p class="text-secondary mb-0">Votre panier est vide pour le moment.</p>
                        <?php else: ?>
                            <?php foreach ($cartItems as $item): ?>
                                <div class="cart-item d-flex flex-column flex-md-row gap-3 align-items-start">
                                    <div class="flex-grow-1">
                                        <h3 class="h5 mb-1"><?= htmlspecialchars($item['name']['fr'] ?? $item['name'] ?? 'Produit Vision', ENT_QUOTES) ?></h3>
                                        <p class="text-secondary mb-2"><?= htmlspecialchars($item['description']['fr'] ?? $item['description'] ?? 'Pièce signature Vision.', ENT_QUOTES) ?></p>
                                        <div class="d-flex flex-wrap gap-3 text-secondary small">
                                            <?php if (!empty($item['size'])): ?>
                                                <span>Taille : <?= htmlspecialchars(is_array($item['size']) ? implode(', ', $item['size']) : $item['size'], ENT_QUOTES) ?></span>
                                            <?php endif; ?>
                                            <?php if (!empty($item['color'])): ?>
                                                <span>Couleur : <?= htmlspecialchars($item['color'], ENT_QUOTES) ?></span>
                                            <?php endif; ?>
                                            <span>Quantité : <?= (int) ($item['quantity'] ?? 1) ?></span>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <span class="fw-semibold d-block"><?= number_format((float) ($item['price'] ?? 0), 2, ',', ' ') ?> <?= htmlspecialchars($item['currency'] ?? 'EUR', ENT_QUOTES) ?></span>
                                        <a class="link-secondary small" href="shop.php">Modifier</a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="order-summary p-4">
                        <h2 class="h5 fw-bold mb-4">Récapitulatif</h2>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Sous-total</span>
                            <span><?= number_format($totals['subtotal'], 2, ',', ' ') ?> <?= htmlspecialchars($totals['currency'], ENT_QUOTES) ?></span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Livraison estimée</span>
                            <span><?= number_format($totals['shipping'], 2, ',', ' ') ?> <?= htmlspecialchars($totals['currency'], ENT_QUOTES) ?></span>
                        </div>
                        <div class="d-flex justify-content-between border-top pt-3 mt-3 fw-semibold">
                            <span>Total</span>
                            <span><?= number_format($totals['total'], 2, ',', ' ') ?> <?= htmlspecialchars($totals['currency'], ENT_QUOTES) ?></span>
                        </div>
                        <div class="mt-4">
                            <label class="form-label" for="promo-code">Code promo</label>
                            <div class="input-group">
                                <input class="form-control" type="text" id="promo-code" placeholder="VISION15" disabled>
                                <span class="input-group-text">À venir</span>
                            </div>
                        </div>
                        <a class="btn btn-primary btn-lg w-100 mt-4" href="account.php">Passer au paiement sécurisé</a>
                        <p class="text-secondary small mt-3 mb-0">Transactions sécurisées (CB, PayPal, Apple Pay). Garantie satisfait ou remboursé 30 jours.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm card-lift">
                        <div class="card-body">
                            <h3 class="h5">Livraison agile</h3>
                            <p class="text-secondary mb-0">Choisissez entre express, standard ou point relais. Suivi en temps réel sur votre espace Vision.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm card-lift">
                        <div class="card-body">
                            <h3 class="h5">Retours simplifiés</h3>
                            <p class="text-secondary mb-0">Préparez votre retour en ligne, choisissez la collecte à domicile ou déposez dans un point relais.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm card-lift">
                        <div class="card-body">
                            <h3 class="h5">Support 24/7</h3>
                            <p class="text-secondary mb-0">Live chat, WhatsApp, email. Réponse sous 15 minutes pour les commandes en cours.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include __DIR__ . '/includes/layout/footer.php'; ?>
