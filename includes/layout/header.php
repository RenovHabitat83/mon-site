<header class="site-header">
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-3" href="<?= htmlspecialchars(base_url('index.php'), ENT_QUOTES) ?>">
                <img src="assets/images/logo-renov.svg" alt="<?= APP_NAME ?>" class="brand-mark" height="48">
                <div class="brand-copy">
                    <span class="fw-semibold text-uppercase text-success-emphasis small">Renov Habitat 83</span>
                    <span class="d-block fw-semibold text-dark-emphasis">Rénovation &amp; Construction</span>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#primaryNavbar" aria-controls="primaryNavbar" aria-expanded="false" aria-label="Menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="primaryNavbar">
                <ul class="navbar-nav ms-auto me-lg-4 align-items-lg-center gap-lg-3">
                    <li class="nav-item"><a class="nav-link" data-page-link="home" href="<?= htmlspecialchars(base_url('index.php'), ENT_QUOTES) ?>">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" data-page-link="shop" href="<?= htmlspecialchars(base_url('shop.php'), ENT_QUOTES) ?>">Boutique</a></li>
                    <li class="nav-item"><a class="nav-link" data-page-link="about" href="<?= htmlspecialchars(base_url('about.php'), ENT_QUOTES) ?>">À propos</a></li>
                    <li class="nav-item"><a class="nav-link" data-page-link="contact" href="<?= htmlspecialchars(base_url('contact.php'), ENT_QUOTES) ?>">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" data-page-link="admin" href="<?= htmlspecialchars(base_url('admin/index.php'), ENT_QUOTES) ?>">Administration</a></li>
                </ul>
                <div class="d-flex align-items-center gap-2">
                    <a class="btn btn-success rounded-pill px-4" href="#contact">Demander un devis</a>
                </div>
            </div>
        </div>
    </nav>
</header>
