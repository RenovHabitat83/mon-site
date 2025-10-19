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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES) ?></title>
    <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES) ?>">
    <script>
        (function () {
            var doc = document.documentElement;
            var initial = doc.getAttribute('data-theme');
            var storageKey = 'vision-theme';
            var cookieKey = '<?= APP_THEME_COOKIE ?>';

            function readCookieTheme() {
                var match = document.cookie.match(new RegExp('(?:^|; )' + cookieKey + '=([^;]+)'));
                return match ? match[1] : null;
            }

            var theme = initial === 'light' ? 'light' : 'dark';

            try {
                var stored = window.localStorage.getItem(storageKey);
                if (stored) {
                    theme = stored;
                } else {
                    var cookieTheme = readCookieTheme();
                    if (cookieTheme) {
                        theme = cookieTheme;
                    } else if (window.matchMedia && window.matchMedia('(prefers-color-scheme: light)').matches) {
                        theme = 'light';
                    }
                }
            } catch (error) {
                var fallback = readCookieTheme();
                if (fallback) {
                    theme = fallback;
                }
            }

            doc.setAttribute('data-theme', theme === 'light' ? 'light' : 'dark');
        })();
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= asset('assets/css/style.css') ?>">
</head>
<body data-page="<?= htmlspecialchars($pageSlug, ENT_QUOTES) ?>" data-theme="<?= htmlspecialchars($initialTheme, ENT_QUOTES) ?>" class="d-flex flex-column min-vh-100">
