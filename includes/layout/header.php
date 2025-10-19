<?php
    $isLight = $initialTheme === 'light';
    $currentLang = $pageLang === 'en' ? 'en' : 'fr';
    $targetLang = $currentLang === 'fr' ? 'en' : 'fr';
    $flag = $targetLang === 'en' ? '🇬🇧' : '🇫🇷';
    $langLabel = $targetLang === 'en' ? 'Passer en anglais' : 'Passer en français';
    $logoSrc = $isLight ? 'assets/images/vision-logo-dark.svg' : 'assets/images/vision-logo-light.svg';
?>
<header class="site-header">
    <div class="container header-inner">
        <nav class="main-nav" aria-label="Navigation principale">
            <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="primary-menu">
                <span></span>
                <span></span>
                <span></span>
                <span class="sr-only">Menu</span>
            </button>
            <ul id="primary-menu" class="nav-list">
                <li><a data-i18n="nav_home" data-page-link="home" href="<?= htmlspecialchars(base_url('index.php'), ENT_QUOTES) ?>">Accueil</a></li>
                <li><a data-i18n="nav_shop" data-page-link="shop" href="<?= htmlspecialchars(base_url('shop.php'), ENT_QUOTES) ?>">Boutique</a></li>
                <li><a data-i18n="nav_about" data-page-link="about" href="<?= htmlspecialchars(base_url('about.php'), ENT_QUOTES) ?>">À propos</a></li>
                <li><a data-i18n="nav_contact" data-page-link="contact" href="<?= htmlspecialchars(base_url('contact.php'), ENT_QUOTES) ?>">Contact</a></li>
                <li><a data-i18n="nav_admin" data-page-link="admin" href="<?= htmlspecialchars(base_url('admin/index.php'), ENT_QUOTES) ?>">Administration</a></li>
            </ul>
        </nav>
        <div class="header-actions">
            <button class="theme-toggle" type="button" aria-pressed="<?= $isLight ? 'true' : 'false' ?>" data-state="<?= $isLight ? 'light' : 'dark' ?>">
                <span class="sr-only theme-label"><?= $isLight ? 'Mode sombre' : 'Mode clair' ?></span>
                <span class="toggle-track" aria-hidden="true">
                    <span class="toggle-icon toggle-icon--moon">☾</span>
                    <span class="toggle-icon toggle-icon--sun">☀</span>
                    <span class="toggle-thumb"></span>
                </span>
            </button>
            <button class="lang-toggle" type="button" data-lang="<?= $currentLang ?>" aria-label="<?= htmlspecialchars($langLabel, ENT_QUOTES) ?>">
                <span class="flag" aria-hidden="true"><?= $flag ?></span>
                <span class="sr-only lang-toggle-label"><?= htmlspecialchars($langLabel, ENT_QUOTES) ?></span>
            </button>
            <a class="header-btn" href="<?= htmlspecialchars(base_url('cart.php'), ENT_QUOTES) ?>" data-i18n="cta_cart">Panier</a>
            <a class="header-account" href="<?= htmlspecialchars(base_url('account.php'), ENT_QUOTES) ?>">
                <span class="sr-only" data-i18n="account_link_label">Mon compte</span>
                <span class="account-icon" aria-hidden="true"></span>
            </a>
        </div>
        <a class="brand" href="<?= htmlspecialchars(base_url('index.php'), ENT_QUOTES) ?>" aria-label="<?= APP_NAME ?> — Accueil">
            <img
                src="<?= htmlspecialchars($logoSrc, ENT_QUOTES) ?>"
                alt="<?= APP_NAME ?>"
                class="brand-logo"
                data-logo-dark="assets/images/vision-logo-light.svg"
                data-logo-light="assets/images/vision-logo-dark.svg"
            />
        </a>
    </div>
</header>
