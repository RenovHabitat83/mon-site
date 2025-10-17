    <footer class="bg-dark text-light mt-auto pt-5 pb-4">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <a class="d-inline-flex align-items-center gap-2 text-decoration-none text-light mb-3" href="<?= htmlspecialchars(base_url('index.php'), ENT_QUOTES) ?>">
                        <img src="assets/images/vision-logo-light.svg" alt="<?= APP_NAME ?>" height="36">
                        <span class="fw-semibold text-uppercase small letter-spacing">Vision</span>
                    </a>
                    <p class="text-secondary">Vision réinvente les essentiels urbains avec un regard responsable et avant-gardiste.</p>
                    <div class="d-flex gap-2" aria-label="Réseaux sociaux">
                        <a class="social-link" href="https://instagram.com" aria-label="Instagram">IG</a>
                        <a class="social-link" href="https://tiktok.com" aria-label="TikTok">TT</a>
                        <a class="social-link" href="https://youtube.com" aria-label="YouTube">YT</a>
                    </div>
                </div>
                <div class="col-6 col-md-2">
                    <h3 class="h6 text-uppercase text-white-50">Boutique</h3>
                    <ul class="list-unstyled small text-secondary">
                        <li><a class="footer-link" href="<?= htmlspecialchars(base_url('shop.php#metropolis'), ENT_QUOTES) ?>">Ligne Métropolis</a></li>
                        <li><a class="footer-link" href="<?= htmlspecialchars(base_url('shop.php#essentials'), ENT_QUOTES) ?>">Essentials 24/7</a></li>
                        <li><a class="footer-link" href="<?= htmlspecialchars(base_url('shop.php#fluid'), ENT_QUOTES) ?>">Fluid Dynamics</a></li>
                        <li><a class="footer-link" href="<?= htmlspecialchars(base_url('shop.php#limited'), ENT_QUOTES) ?>">Drops exclusifs</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-3">
                    <h3 class="h6 text-uppercase text-white-50">Support</h3>
                    <ul class="list-unstyled small text-secondary">
                        <li><a class="footer-link" href="<?= htmlspecialchars(base_url('contact.php'), ENT_QUOTES) ?>">Nous contacter</a></li>
                        <li><a class="footer-link" href="<?= htmlspecialchars(base_url('policies.php#returns'), ENT_QUOTES) ?>">Politique de retour</a></li>
                        <li><a class="footer-link" href="<?= htmlspecialchars(base_url('policies.php#delivery'), ENT_QUOTES) ?>">Livraison & suivi</a></li>
                        <li><a class="footer-link" href="<?= htmlspecialchars(base_url('policies.php#privacy'), ENT_QUOTES) ?>">Confidentialité & cookies</a></li>
                        <li><a class="footer-link" href="<?= htmlspecialchars(base_url('admin/index.php'), ENT_QUOTES) ?>">Administration</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3 class="h6 text-uppercase text-white-50">Légal</h3>
                    <ul class="list-unstyled small text-secondary">
                        <li><a class="footer-link" href="<?= htmlspecialchars(base_url('legal.php#terms'), ENT_QUOTES) ?>">Mentions légales</a></li>
                        <li><a class="footer-link" href="<?= htmlspecialchars(base_url('legal.php#cgv'), ENT_QUOTES) ?>">Conditions générales de vente</a></li>
                        <li><a class="footer-link" href="<?= htmlspecialchars(base_url('policies.php#cookies'), ENT_QUOTES) ?>">Préférences cookies</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-top border-secondary-subtle mt-4 pt-3 d-flex flex-column flex-lg-row gap-2 justify-content-between align-items-center small text-secondary">
                <p class="mb-0">© <span data-current-year></span> Vision. Tous droits réservés.</p>
                <p class="mb-0">Budget : des toasts de chèvre ?</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="<?= asset('assets/js/main.js') ?>" defer></script>
</body>
</html>
