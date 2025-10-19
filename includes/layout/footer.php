    <footer class="site-footer mt-auto pt-5 pb-4 text-light">
        <div class="container">
            <div class="row g-4 align-items-start">
                <div class="col-lg-4">
                    <a class="footer-brand d-inline-flex align-items-center gap-3 text-decoration-none text-light mb-3" href="<?= htmlspecialchars(base_url('index.php'), ENT_QUOTES) ?>">
                        <img src="assets/images/logo-renov.svg" alt="<?= APP_NAME ?>" height="44">
                        <div>
                            <span class="fw-semibold text-uppercase small">Renov Habitat 83</span>
                            <span class="d-block">Artisans du Var depuis 2010</span>
                        </div>
                    </a>
                    <p class="text-white-50 mb-4">Rénovation intérieure, extension, aménagement extérieur : notre équipe donne vie à vos projets avec exigence et passion.</p>
                    <div class="d-flex gap-3">
                        <a class="footer-social" href="https://www.facebook.com" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                        <a class="footer-social" href="https://www.instagram.com" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                        <a class="footer-social" href="https://www.linkedin.com" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <h3 class="h6 text-uppercase text-white-50 mb-3">Coordonnées</h3>
                    <ul class="list-unstyled text-white-50 mb-0">
                        <li class="mb-2"><i class="bi bi-telephone-fill me-2 text-success"></i><a class="footer-link" href="tel:+33494000000">04 94 00 00 00</a></li>
                        <li class="mb-2"><i class="bi bi-envelope-fill me-2 text-success"></i><a class="footer-link" href="mailto:contact@renovhabitat83.fr">contact@renovhabitat83.fr</a></li>
                        <li class="mb-2"><i class="bi bi-geo-alt-fill me-2 text-success"></i>123 avenue des Arts &amp; Métiers, 83000 Toulon</li>
                        <li><i class="bi bi-clock-fill me-2 text-success"></i>Du lundi au samedi · 8h00 – 19h00</li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <h3 class="h6 text-uppercase text-white-50 mb-3">Liens utiles</h3>
                    <ul class="list-unstyled text-white-50">
                        <li class="mb-2"><a class="footer-link" href="<?= htmlspecialchars(base_url('about.php'), ENT_QUOTES) ?>">Qui sommes-nous ?</a></li>
                        <li class="mb-2"><a class="footer-link" href="<?= htmlspecialchars(base_url('policies.php'), ENT_QUOTES) ?>">Politique de confidentialité</a></li>
                        <li class="mb-2"><a class="footer-link" href="<?= htmlspecialchars(base_url('legal.php'), ENT_QUOTES) ?>">Mentions légales</a></li>
                        <li><a class="footer-link" href="<?= htmlspecialchars(base_url('admin/index.php'), ENT_QUOTES) ?>">Espace administration</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom mt-5 pt-3 border-top border-white-10 d-flex flex-column flex-lg-row justify-content-between align-items-center gap-3">
                <p class="mb-0 small text-white-50">© <span data-current-year></span> <?= APP_NAME ?>. Tous droits réservés.</p>
                <p class="mb-0 small text-white-50">Entreprise certifiée Qualibat &amp; RGE.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="<?= asset('assets/js/main.js') ?>" defer></script>
</body>
</html>
