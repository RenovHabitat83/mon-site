<?php
require_once __DIR__ . '/includes/init.php';
$pageSlug = 'account';
$pageTitle = 'Vision — Espace client';
$pageDescription = "Gérez vos informations Vision, vos adresses et vos préférences.";
include __DIR__ . '/includes/layout/head.php';
include __DIR__ . '/includes/layout/header.php';
?>
<main>
        <section class="page-hero">
            <div class="container">
                <p class="eyebrow" data-i18n="account_tag">Mon espace</p>
                <h1 data-i18n="account_title">Gérez votre profil Vision</h1>
                <p data-i18n="account_intro">Suivez vos commandes, gérez vos adresses, vos préférences de livraison et vos listes d'envies.</p>
            </div>
        </section>

        <section class="account-section">
            <div class="container account-grid">
                <div class="account-card">
                    <h2 data-i18n="account_login_title">Connexion</h2>
                    <form class="account-form" id="login-form" novalidate>
                        <div class="form-group">
                            <label for="login-email" data-i18n="account_email">Email</label>
                            <input type="email" id="login-email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="login-password" data-i18n="account_password">Mot de passe</label>
                            <input type="password" id="login-password" name="password" required>
                        </div>
                        <button type="submit" class="btn" data-i18n="account_login_button">Se connecter</button>
                        <a class="text-link" href="#" data-i18n="account_forgot">Mot de passe oublié ?</a>
                        <p class="form-feedback" role="status" aria-live="polite"></p>
                    </form>
                </div>
                <div class="account-card">
                    <h2 data-i18n="account_register_title">Créer un compte</h2>
                    <form class="account-form" id="register-form" novalidate>
                        <div class="form-group">
                            <label for="register-name" data-i18n="account_name">Nom complet</label>
                            <input type="text" id="register-name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="register-email" data-i18n="account_email">Email</label>
                            <input type="email" id="register-email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="register-password" data-i18n="account_password">Mot de passe</label>
                            <input type="password" id="register-password" name="password" minlength="8" required>
                        </div>
                        <div class="form-group">
                            <label for="register-preferences" data-i18n="account_preferences">Préférences</label>
                            <select id="register-preferences" name="preferences">
                                <option value="street" data-i18n="pref_street">Streetwear structuré</option>
                                <option value="casual" data-i18n="pref_casual">Casual minimal</option>
                                <option value="limited" data-i18n="pref_limited">Drops exclusifs</option>
                            </select>
                        </div>
                        <button type="submit" class="btn" data-i18n="account_register_button">Créer mon compte</button>
                        <label class="checkbox">
                            <input type="checkbox" name="newsletter" checked>
                            <span data-i18n="account_newsletter">Je souhaite recevoir la newsletter Vision.</span>
                        </label>
                        <p class="form-feedback" role="status" aria-live="polite"></p>
                    </form>
                </div>
                <div class="account-card">
                    <h2 data-i18n="account_tracking_title">Suivi de commande</h2>
                    <form class="account-form" id="tracking-form" novalidate>
                        <div class="form-group">
                            <label for="tracking-number" data-i18n="account_tracking_number">Numéro de commande</label>
                            <input type="text" id="tracking-number" name="order" required>
                        </div>
                        <button type="submit" class="btn" data-i18n="account_tracking_button">Suivre</button>
                        <p class="form-feedback" role="status" aria-live="polite"></p>
                    </form>
                    <p data-i18n="account_tracking_copy">Recevez des notifications en temps réel, ajustez vos créneaux de livraison et programmez un retour.</p>
                </div>
            </div>
        </section>

        <section class="cta-banner">
            <div class="container">
                <h2 data-i18n="account_cta_title">Activez Vision+</h2>
                <p data-i18n="account_cta_copy">Accès prioritaire aux drops, personnalisation des pièces et retours gratuits.</p>
                <a class="btn" href="shop.php" data-i18n="account_cta_button">Découvrir Vision+</a>
            </div>
        </section>
    </main>
<?php include __DIR__ . '/includes/layout/footer.php'; ?>
