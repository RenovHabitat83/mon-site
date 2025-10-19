<?php
if (!isset($pageTitle)) {
    $pageTitle = APP_NAME . ' — Rénovation intérieure et extérieure dans le Var';
}
if (!isset($pageDescription)) {
    $pageDescription = "Renov Habitat 83 accompagne vos projets de rénovation, d'extension et d'aménagement dans tout le Var.";
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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" integrity="sha384-2v9WuFyuFUnwDPY2sV7mBy06SnVAk0nnBYnCTsRmR271GGBqBPdZiZsa1+lPHX7n" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= asset('assets/css/style.css') ?>">
</head>
<body data-page="<?= htmlspecialchars($pageSlug, ENT_QUOTES) ?>" class="site-body d-flex flex-column min-vh-100">
