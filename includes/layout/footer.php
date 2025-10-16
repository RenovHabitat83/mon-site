    <footer class="site-footer">
        <div class="container footer-grid">
            <div>
                <img
                    src="assets/images/vision-logo-light.svg"
                    alt="<?= APP_NAME ?>"
                    class="brand-logo"
                    data-logo-dark="assets/images/vision-logo-light.svg"
                    data-logo-light="assets/images/vision-logo-dark.svg"
                />
                <p data-i18n="footer_copy">Vision réinvente les essentiels urbains avec un regard responsable et avant-gardiste.</p>
                <div class="social-links" aria-label="Réseaux sociaux">
                    <a href="https://instagram.com" aria-label="Instagram">Instagram</a>
                    <a href="https://tiktok.com" aria-label="TikTok">TikTok</a>
                    <a href="https://youtube.com" aria-label="YouTube">YouTube</a>
                </div>
            </div>
            <div>
                <h3 data-i18n="footer_shop">Boutique</h3>
                <ul>
                    <li><a href="<?= htmlspecialchars(base_url('shop.php#metropolis'), ENT_QUOTES) ?>" data-i18n="footer_metro">Ligne Métropolis</a></li>
                    <li><a href="<?= htmlspecialchars(base_url('shop.php#essentials'), ENT_QUOTES) ?>" data-i18n="footer_essentials">Essentials 24/7</a></li>
                    <li><a href="<?= htmlspecialchars(base_url('shop.php#fluid'), ENT_QUOTES) ?>" data-i18n="footer_fluid">Fluid Dynamics</a></li>
                    <li><a href="<?= htmlspecialchars(base_url('shop.php#limited'), ENT_QUOTES) ?>" data-i18n="footer_limited">Drops exclusifs</a></li>
                </ul>
            </div>
            <div>
                <h3 data-i18n="footer_support">Support</h3>
                <ul>
                    <li><a href="<?= htmlspecialchars(base_url('contact.php'), ENT_QUOTES) ?>" data-i18n="footer_contact">Nous contacter</a></li>
                    <li><a href="<?= htmlspecialchars(base_url('policies.php#returns'), ENT_QUOTES) ?>" data-i18n="footer_returns">Politique de retour</a></li>
                    <li><a href="<?= htmlspecialchars(base_url('policies.php#delivery'), ENT_QUOTES) ?>" data-i18n="footer_delivery">Livraison & suivi</a></li>
                    <li><a href="<?= htmlspecialchars(base_url('policies.php#privacy'), ENT_QUOTES) ?>" data-i18n="footer_privacy">Confidentialité & cookies</a></li>
                </ul>
            </div>
            <div>
                <h3 data-i18n="footer_legal">Légal</h3>
                <ul>
                    <li><a href="<?= htmlspecialchars(base_url('legal.php#terms'), ENT_QUOTES) ?>" data-i18n="footer_terms">Mentions légales</a></li>
                    <li><a href="<?= htmlspecialchars(base_url('legal.php#cgv'), ENT_QUOTES) ?>" data-i18n="footer_cgv">Conditions générales de vente</a></li>
                    <li><a href="<?= htmlspecialchars(base_url('policies.php#cookies'), ENT_QUOTES) ?>" data-i18n="footer_cookies">Préférences cookies</a></li>
                </ul>
            </div>
        </div>
        <div class="container footer-bottom">
            <p data-i18n="footer_rights">© Vision. Tous droits réservés.</p>
            <p class="goat-cheese" data-i18n="footer_budget">Budget : des toasts de chèvre ?</p>
        </div>
    </footer>

    <div class="cookies-banner" role="dialog" aria-live="assertive" aria-label="Gestion des cookies">
        <div class="cookies-content">
            <p data-i18n="cookies_message">Vision utilise des cookies pour personnaliser votre expérience. Choisissez vos préférences.</p>
            <div class="cookies-actions">
                <button class="btn ghost" data-action="cookies-settings" data-i18n="cookies_settings">Paramétrer</button>
                <button class="btn" data-action="cookies-accept" data-i18n="cookies_accept">Tout accepter</button>
            </div>
        </div>
    </div>

    <script type="module" src="<?= asset('assets/js/main.js') ?>"></script>
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
</body>
</html>
