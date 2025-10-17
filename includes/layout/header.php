<header class="border-bottom bg-white">
    <nav class="navbar navbar-expand-lg navbar-light py-3">
        <div class="container align-items-center">
            <a class="navbar-brand d-flex align-items-center gap-2" href="<?= htmlspecialchars(base_url('index.php'), ENT_QUOTES) ?>">
                <img src="assets/images/vision-logo-dark.svg" alt="<?= APP_NAME ?>" height="36" class="d-inline-block align-text-top">
                <span class="fw-semibold text-uppercase small letter-spacing">Vision</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#primaryNav" aria-controls="primaryNav" aria-expanded="false" aria-label="Basculer la navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="primaryNav">
                <ul class="navbar-nav ms-auto mb-3 mb-lg-0 align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link" data-page-link="home" href="<?= htmlspecialchars(base_url('index.php'), ENT_QUOTES) ?>">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-page-link="shop" href="<?= htmlspecialchars(base_url('shop.php'), ENT_QUOTES) ?>">Boutique</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-page-link="about" href="<?= htmlspecialchars(base_url('about.php'), ENT_QUOTES) ?>">À propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-page-link="contact" href="<?= htmlspecialchars(base_url('contact.php'), ENT_QUOTES) ?>">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-page-link="admin" href="<?= htmlspecialchars(base_url('admin/index.php'), ENT_QUOTES) ?>">Administration</a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-primary" href="<?= htmlspecialchars(base_url('cart.php'), ENT_QUOTES) ?>">Panier</a>
                    </li>
                    <li class="nav-item ms-lg-2">
                        <a class="btn btn-outline-secondary" href="<?= htmlspecialchars(base_url('account.php'), ENT_QUOTES) ?>">Mon compte</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
