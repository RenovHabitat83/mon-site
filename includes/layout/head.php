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
<html lang="<?= htmlspecialchars($pageLang, ENT_QUOTES) ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES) ?></title>
    <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES) ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= asset('assets/css/style.css') ?>">
</head>
<body data-page="<?= htmlspecialchars($pageSlug, ENT_QUOTES) ?>" class="d-flex flex-column min-vh-100">
