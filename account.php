<?php
require_once __DIR__ . '/includes/init.php';
$pageSlug = 'account';
$pageTitle = 'Vision — Espace client';
$pageDescription = "Gérez vos informations Vision, vos adresses et vos préférences.";
include __DIR__ . '/includes/layout/head.php';
include __DIR__ . '/includes/layout/header.php';
?>
<main>
    <section class="py-5 bg-white">
        <div class="container py-4 text-center">
            <span class="text-uppercase text-primary fw-semibold small">Mon espace</span>
            <h1 class="fw-bold display-6 mt-3">Gérez votre profil Vision</h1>
            <p class="text-secondary mx-auto" style="max-width: 720px;">Suivez vos commandes, gérez vos adresses, vos préférences de livraison et vos listes d'envies.</p>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm p-4">
                        <ul class="nav nav-pills account-tabs mb-4" id="accountTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="login-tab" data-bs-toggle="pill" data-bs-target="#login" type="button" role="tab" aria-controls="login" aria-selected="true">Connexion</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="register-tab" data-bs-toggle="pill" data-bs-target="#register" type="button" role="tab" aria-controls="register" aria-selected="false">Créer un compte</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="accountTabContent">
                            <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab" tabindex="0">
                                <form class="row g-3" novalidate>
                                    <div class="col-12">
                                        <label class="form-label" for="login-email">Email</label>
                                        <input class="form-control" type="email" id="login-email" required placeholder="vous@vision.com">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="login-password">Mot de passe</label>
                                        <input class="form-control" type="password" id="login-password" required>
                                    </div>
                                    <div class="col-12 d-flex justify-content-between align-items-center">
                                        <a class="link-secondary small" href="#">Mot de passe oublié ?</a>
                                        <button class="btn btn-primary" type="submit">Se connecter</button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab" tabindex="0">
                                <form class="row g-3" novalidate>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="register-name">Nom complet</label>
                                        <input class="form-control" type="text" id="register-name" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="register-email">Email</label>
                                        <input class="form-control" type="email" id="register-email" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="register-password">Mot de passe</label>
                                        <input class="form-control" type="password" id="register-password" minlength="8" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="register-preferences">Préférences</label>
                                        <select class="form-select" id="register-preferences">
                                            <option>Streetwear structuré</option>
                                            <option>Casual minimal</option>
                                            <option>Drops exclusifs</option>
                                        </select>
                                    </div>
                                    <div class="col-12 form-check">
                                        <input class="form-check-input" type="checkbox" id="register-newsletter" checked>
                                        <label class="form-check-label" for="register-newsletter">Je souhaite recevoir la newsletter Vision.</label>
                                    </div>
                                    <div class="col-12 text-end">
                                        <button class="btn btn-primary" type="submit">Créer mon compte</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="order-summary p-4 mb-4">
                        <h2 class="h5 fw-bold mb-3">Suivi de commande</h2>
                        <form class="row g-3" novalidate>
                            <div class="col-12">
                                <label class="form-label" for="tracking-number">Numéro de commande</label>
                                <input class="form-control" type="text" id="tracking-number" required placeholder="VISION-0001">
                            </div>
                            <div class="col-12">
                                <button class="btn btn-outline-primary w-100" type="submit">Suivre</button>
                            </div>
                        </form>
                        <p class="text-secondary small mb-0">Recevez des notifications en temps réel, ajustez vos créneaux de livraison et programmez un retour.</p>
                    </div>
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <h2 class="h5 fw-bold">Vision+</h2>
                            <p class="text-secondary">Accès prioritaire aux drops, personnalisation des pièces et retours gratuits.</p>
                            <a class="btn btn-primary w-100" href="shop.php">Découvrir Vision+</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include __DIR__ . '/includes/layout/footer.php'; ?>
