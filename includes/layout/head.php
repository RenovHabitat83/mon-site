<?php
if (!isset($pageTitle)) {
    $pageTitle = APP_NAME . ' — Streetwear & Casual';
}
if (!isset($pageDescription)) {
    $pageDescription = 'Vision imagine un vestiaire streetwear haut de gamme, multilingue et prêt pour le e-commerce.';
}
if (!isset($pageSlug)) {
    $pageSlug = 'page';
}
?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars($pageLang, ENT_QUOTES) ?>" data-theme="<?= htmlspecialchars($initialTheme, ENT_QUOTES) ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES) ?></title>
    <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES) ?>">
    <script>
        (function () {
            const storageKey = 'vision-theme';
            const cookieKey = '<?= APP_THEME_COOKIE ?>';
            const getCookieTheme = () => {
                const match = document.cookie.match(new RegExp('(?:^|; )' + cookieKey + '=([^;]+)'));
                return match ? match[1] : null;
            };
            let theme = document.documentElement.getAttribute('data-theme') || 'dark';
            try {
                const stored = localStorage.getItem(storageKey);
                if (stored) {
                    theme = stored;
                } else {
                    const cookieTheme = getCookieTheme();
                    if (cookieTheme) {
                        theme = cookieTheme;
                    } else if (window.matchMedia && window.matchMedia('(prefers-color-scheme: light)').matches) {
                        theme = 'light';
                    }
                }
            } catch (error) {
                const cookieTheme = getCookieTheme();
                theme = cookieTheme || theme;
            }
            document.documentElement.setAttribute('data-theme', theme === 'light' ? 'light' : 'dark');
        })();
    </script>
    <link rel="stylesheet" href="<?= asset('assets/css/style.css') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-3gJwYp2JpN0p2d6SmHgwlHGhEq+y3OCAXo+4wY0v5wE=" crossorigin="anonymous" defer></script>
</head>
<body data-page="<?= htmlspecialchars($pageSlug, ENT_QUOTES) ?>">
