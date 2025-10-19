<?php
require_once __DIR__ . '/includes/init.php';
$pageSlug = 'contact';
$pageTitle = 'Vision — Contact';
$pageDescription = "Contactez Vision : support, showroom et réseaux sociaux.";
include __DIR__ . '/includes/layout/head.php';
include __DIR__ . '/includes/layout/header.php';
?>
<main>
    <section class="py-5 bg-white">
        <div class="container py-4 text-center">
            <span class="text-uppercase text-primary fw-semibold small">Contact</span>
            <h1 class="fw-bold display-6 mt-3">Parlons de votre expérience Vision</h1>
            <p class="text-secondary mx-auto" style="max-width: 680px;">Support client, collaborations, presse ou wholesale — notre équipe est disponible en français et en anglais.</p>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-7">
                    <div class="card border-0 contact-card p-4">
                        <h2 class="h4 fw-bold mb-3">Envoyez-nous un message</h2>
                        <form class="row g-3" novalidate>
                            <div class="col-sm-6">
                                <label class="form-label" for="contact-name">Nom complet</label>
                                <input class="form-control" type="text" id="contact-name" required placeholder="Votre nom">
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label" for="contact-email">Email</label>
                                <input class="form-control" type="email" id="contact-email" required placeholder="vous@vision.com">
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="contact-topic">Sujet</label>
                                <select class="form-select" id="contact-topic" required>
                                    <option selected disabled>Choisir un sujet</option>
                                    <option>Support commande</option>
                                    <option>Collaboration</option>
                                    <option>Presse</option>
                                    <option>Wholesale</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="contact-message">Message</label>
                                <textarea class="form-control" id="contact-message" rows="6" required placeholder="Décrivez votre demande"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary btn-lg w-100" type="submit">Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body d-flex flex-column gap-4">
                            <div>
                                <h2 class="h5 fw-bold">Support client</h2>
                                <p class="mb-0">support@visionwear.com</p>
                                <p class="text-secondary mb-0">Disponible du lundi au samedi, 9h-20h CET.</p>
                            </div>
                            <div>
                                <h2 class="h5 fw-bold">Presse & collaborations</h2>
                                <p class="mb-0">press@visionwear.com</p>
                                <p class="text-secondary mb-0">Envoyez vos dossiers de presse, portfolios et propositions de projets.</p>
                            </div>
                            <div>
                                <h2 class="h5 fw-bold">Showroom Vision</h2>
                                <p class="mb-0">18 rue Horizon, 75010 Paris</p>
                                <p class="text-secondary mb-0">Visite sur rendez-vous, essayage privé et personnalisation.</p>
                            </div>
                            <div>
                                <h2 class="h5 fw-bold">Réseaux sociaux</h2>
                                <div class="d-flex gap-2">
                                    <a class="btn btn-outline-secondary btn-sm" href="https://instagram.com">Instagram</a>
                                    <a class="btn btn-outline-secondary btn-sm" href="https://tiktok.com">TikTok</a>
                                    <a class="btn btn-outline-secondary btn-sm" href="https://pinterest.com">Pinterest</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container">
            <div class="newsletter-card mx-auto text-center">
                <h2 class="fw-bold">Rejoignez la communauté Vision Loop</h2>
                <p class="text-secondary mb-4">Recyclage de vêtements, offres exclusives et invitations à nos évènements immersifs.</p>
                <a class="btn btn-primary btn-lg" href="index.php#newsletter">S'inscrire</a>
            </div>
        </div>
    </section>
</main>
<?php include __DIR__ . '/includes/layout/footer.php'; ?>
