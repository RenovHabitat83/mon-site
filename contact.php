<?php
require_once __DIR__ . '/includes/init.php';
$pageSlug = 'contact';
$pageTitle = 'Vision — Contact';
$pageDescription = "Contactez Vision : support, showroom et réseaux sociaux.";
include __DIR__ . '/includes/layout/head.php';
include __DIR__ . '/includes/layout/header.php';
?>
<main>
        <section class="page-hero">
            <div class="container">
                <p class="eyebrow" data-i18n="contact_tag">Contact</p>
                <h1 data-i18n="contact_title">Parlons de votre expérience Vision</h1>
                <p data-i18n="contact_intro">Support client, collaborations, presse ou wholesale — notre équipe est disponible en français et en anglais.</p>
            </div>
        </section>

        <section class="split-section">
            <div class="container split contact-layout">
                <form class="contact-form" id="contact-form" novalidate>
                    <div class="form-group">
                        <label for="contact-name" data-i18n="contact_name">Nom complet</label>
                        <input type="text" id="contact-name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="contact-email" data-i18n="contact_email">Email</label>
                        <input type="email" id="contact-email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="contact-topic" data-i18n="contact_topic">Sujet</label>
                        <select id="contact-topic" name="topic" required>
                            <option value="support" data-i18n="topic_support">Support commande</option>
                            <option value="collab" data-i18n="topic_collab">Collaboration</option>
                            <option value="press" data-i18n="topic_press">Presse</option>
                            <option value="wholesale" data-i18n="topic_wholesale">Wholesale</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="contact-message" data-i18n="contact_message">Message</label>
                        <textarea id="contact-message" name="message" rows="6" required></textarea>
                    </div>
                    <button type="submit" class="btn" data-i18n="contact_submit">Envoyer</button>
                    <p class="form-feedback" role="status" aria-live="polite"></p>
                </form>
                <div class="contact-info">
                    <div>
                        <h2 data-i18n="contact_support_title">Support client</h2>
                        <p>support@visionwear.com</p>
                        <p data-i18n="contact_support_copy">Disponible du lundi au samedi, 9h-20h CET.</p>
                    </div>
                    <div>
                        <h2 data-i18n="contact_press_title">Presse & collaborations</h2>
                        <p>press@visionwear.com</p>
                        <p data-i18n="contact_press_copy">Envoyez vos dossiers de presse, portfolios et propositions de projets.</p>
                    </div>
                    <div>
                        <h2 data-i18n="contact_store_title">Showroom Vision</h2>
                        <p>18 rue Horizon, 75010 Paris</p>
                        <p data-i18n="contact_store_copy">Visite sur rendez-vous, essayage privé et personnalisation.</p>
                    </div>
                    <div class="social-links">
                        <a href="https://instagram.com" aria-label="Instagram">Instagram</a>
                        <a href="https://tiktok.com" aria-label="TikTok">TikTok</a>
                        <a href="https://pinterest.com" aria-label="Pinterest">Pinterest</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta-banner">
            <div class="container">
                <h2 data-i18n="contact_cta_title">Rejoignez la communauté Vision Loop</h2>
                <p data-i18n="contact_cta_copy">Recyclage de vêtements, offres exclusives et invitations à nos évènements immersifs.</p>
                <a class="btn" href="index.php#newsletter" data-i18n="contact_cta_button">S'inscrire</a>
            </div>
        </section>
    </main>
<?php include __DIR__ . '/includes/layout/footer.php'; ?>
