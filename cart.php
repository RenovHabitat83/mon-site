<?php
require_once __DIR__ . '/includes/init.php';
$pageSlug = 'cart';
$pageTitle = 'Vision — Panier';
$pageDescription = "Visualisez et validez vos pièces Vision avant le paiement sécurisé.";
include __DIR__ . '/includes/layout/head.php';
include __DIR__ . '/includes/layout/header.php';
?>
<main>
        <section class="page-hero">
            <div class="container">
                <p class="eyebrow" data-i18n="cart_tag">Panier</p>
                <h1 data-i18n="cart_title">Vos sélections Vision</h1>
                <p data-i18n="cart_intro">Ajustez les quantités, appliquez vos codes promo et choisissez votre mode de livraison.</p>
            </div>
        </section>

        <section class="cart-section">
            <div class="container cart-grid">
                <div class="cart-items" id="cart-items" aria-live="polite">
                    <!-- Cart items generated via JS -->
                </div>
                <aside class="cart-summary">
                    <h2 data-i18n="cart_summary_title">Récapitulatif</h2>
                    <div class="summary-line">
                        <span data-i18n="cart_subtotal">Sous-total</span>
                        <span id="cart-subtotal">0 €</span>
                    </div>
                    <div class="summary-line">
                        <span data-i18n="cart_shipping">Livraison estimée</span>
                        <span id="cart-shipping">0 €</span>
                    </div>
                    <div class="summary-line total">
                        <span data-i18n="cart_total">Total</span>
                        <span id="cart-total">0 €</span>
                    </div>
                    <form class="promo-form" id="promo-form" novalidate>
                        <label for="promo-code" data-i18n="cart_promo">Code promo</label>
                        <div class="promo-input">
                            <input type="text" id="promo-code" name="promo" placeholder="VISION15">
                            <button type="submit" class="btn ghost" data-i18n="cart_apply">Appliquer</button>
                        </div>
                        <p class="form-feedback" role="status" aria-live="polite"></p>
                    </form>
                    <button class="btn" data-i18n="cart_checkout">Passer au paiement sécurisé</button>
                    <p class="secure-note" data-i18n="cart_secure_note">Transactions sécurisées (CB, PayPal, Apple Pay). Garantie satisfait ou remboursé 30 jours.</p>
                </aside>
            </div>
        </section>

        <section class="services-grid additional-info">
            <div class="container grid-3">
                <article>
                    <h3 data-i18n="cart_delivery_title">Livraison agile</h3>
                    <p data-i18n="cart_delivery_copy">Choisissez entre express, standard ou point relais. Suivi en temps réel sur votre espace Vision.</p>
                </article>
                <article>
                    <h3 data-i18n="cart_returns_title">Retours simplifiés</h3>
                    <p data-i18n="cart_returns_copy">Préparez votre retour en ligne, choisissez la collecte à domicile ou déposez dans un point relais.</p>
                </article>
                <article>
                    <h3 data-i18n="cart_support_title">Support 24/7</h3>
                    <p data-i18n="cart_support_copy">Live chat, WhatsApp, email. Réponse sous 15 minutes pour les commandes en cours.</p>
                </article>
            </div>
        </section>
    </main>
<?php include __DIR__ . '/includes/layout/footer.php'; ?>
