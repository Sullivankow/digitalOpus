<?php
$offres_vitrine = [
  [
    'title' => 'Vitrine Essentiel',
    'features' => [
      '✔ 1 à 3 pages',
      '✔ Design responsive',
      '✔ Formulaire de contact',
      '✔ SEO de base',
    ],
    'badge' => ['text' => 'À partir de 590€', 'class' => 'bg-primary'],
    'lottieId' => 'formule-lottie-1',
  ],
  [
    'title' => 'Vitrine Pro',
    'features' => [
      '✔ 4 à 8 pages',
      '✔ Design sur-mesure',
      '✔ Animations',
      '✔ Formulaire avancé',
      '✔ SEO optimisé',
    ],
    'badge' => ['text' => 'À partir de 990€', 'class' => 'bg-success'],
    'lottieId' => 'formule-lottie-2',
  ],
  [
    'title' => 'Vitrine Premium',
    'features' => [
      '✔ Pages illimitées',
      '✔ Blog & actualités',
      '✔ Réseaux sociaux',
      '✔ SEO avancé',
    ],
    'badge' => ['text' => 'À partir de 1490€', 'class' => 'bg-warning text-dark'],
    'lottieId' => 'formule-lottie-3',
  ],
];

$offres_catalogue = [
  [
    'title' => 'Catalogue Start',
    'features' => [
      '✔ Jusqu’à 20 produits',
      '✔ Sans paiement',
      '✔ Gestion simple',
      '✔ Design responsive',
    ],
    'badge' => ['text' => 'À partir de 1290€', 'class' => 'bg-primary'],
    'lottieId' => 'formule-lottie-4',
  ],
  [
    'title' => 'Catalogue Pro',
    'features' => [
      '✔ Produits illimités',
      '✔ Filtres avancés',
      '✔ Fiches détaillées',
      '✔ Gestion back-office',
    ],
    'badge' => ['text' => 'À partir de 1790€', 'class' => 'bg-success'],
    'lottieId' => 'formule-lottie-5',
  ],
];

$offres_ecommerce = [
  [
    'title' => 'E-Commerce Essentiel',
    'features' => [
      '✔ Jusqu’à 20 produits',
      '✔ Paiement sécurisé',
      '✔ Gestion commandes',
      '✔ Responsive',
    ],
    'badge' => ['text' => 'À partir de 1990€', 'class' => 'bg-primary'],
    'lottieId' => 'formule-lottie-6',
  ],
  [
    'title' => 'E-Commerce Pro',
    'features' => [
      '✔ Produits illimités',
      '✔ Gestion stocks',
      '✔ Codes promo',
      '✔ Analytics',
      '✔ SEO avancé',
      '✔ Support technique',
    ],
    'badge' => ['text' => 'À partir de 2990€', 'class' => 'bg-success'],
    'lottieId' => 'formule-lottie-1',
  ],
];

$options = [
  [
    'title' => 'Rédaction de contenu',
    'features' => [
      '✔ Textes professionnels',
      '✔ Optimisés SEO',
    ],
    'badge' => ['text' => 'Sur devis', 'class' => 'bg-info'],
    'lottieId' => 'formule-lottie-2',
  ],
  [
    'title' => 'Maintenance & Sécurité',
    'features' => [
      '✔ Sauvegardes',
      '✔ Mises à jour',
      '✔ Surveillance sécurité',
      '✔ Assistance technique',
    ],
    'badge' => ['text' => 'À partir de 29€/mois', 'class' => 'bg-secondary'],
    'lottieId' => 'formule-lottie-3',
  ],
  [
    'title' => 'Référencement avancé (SEO)',
    'features' => [
      '✔ Optimisation technique',
      '✔ Netlinking',
      '✔ Audit complet',
    ],
    'badge' => ['text' => 'Sur devis', 'class' => 'bg-warning text-dark'],
    'lottieId' => 'formule-lottie-4',
  ],
];
?>



<section id="formules" class="formules-section py-5">
  <div class="container">
    <h2 class="text-center text-white mb-5 display-4 fw-bold">Nos formules</h2>

    <!-- Offres site vitrine -->
    <h3 class="text-white mt-4 mb-3">Offres Site Vitrine</h3>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center mb-5">
      <?php foreach ($offres_vitrine as $formule): ?>
        <div class="col">
          <div class="card h-100 bg-transparent border-0 shadow-lg text-center text-white">
            <div class="formule-lottie mx-auto mt-4" id="<?= $formule['lottieId'] ?>"></div>
            <div class="card-body">
              <h4 class="card-title fw-semibold mb-3"><?= $formule['title'] ?></h4>
              <ul class="list-unstyled mb-3">
                <?php foreach ($formule['features'] as $feature): ?>
                  <li><?= $feature ?></li>
                <?php endforeach; ?>
              </ul>
              <span class="badge <?= $formule['badge']['class'] ?> fs-5 mb-2"><?= $formule['badge']['text'] ?></span>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Offres site catalogue -->
    <h3 class="text-white mt-4 mb-3">Offres Site Catalogue (sans paiement)</h3>
    <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center mb-5">
      <?php foreach ($offres_catalogue as $formule): ?>
        <div class="col">
          <div class="card h-100 bg-transparent border-0 shadow-lg text-center text-white">
            <div class="formule-lottie mx-auto mt-4" id="<?= $formule['lottieId'] ?>"></div>
            <div class="card-body">
              <h4 class="card-title fw-semibold mb-3"><?= $formule['title'] ?></h4>
              <ul class="list-unstyled mb-3">
                <?php foreach ($formule['features'] as $feature): ?>
                  <li><?= $feature ?></li>
                <?php endforeach; ?>
              </ul>
              <span class="badge <?= $formule['badge']['class'] ?> fs-5 mb-2"><?= $formule['badge']['text'] ?></span>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Offres E-Commerce -->
    <h3 class="text-white mt-4 mb-3">Offres E-Commerce</h3>
    <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center mb-5">
      <?php foreach ($offres_ecommerce as $formule): ?>
        <div class="col">
          <div class="card h-100 bg-transparent border-0 shadow-lg text-center text-white">
            <div class="formule-lottie mx-auto mt-4" id="<?= $formule['lottieId'] ?>"></div>
            <div class="card-body">
              <h4 class="card-title fw-semibold mb-3"><?= $formule['title'] ?></h4>
              <ul class="list-unstyled mb-3">
                <?php foreach ($formule['features'] as $feature): ?>
                  <li><?= $feature ?></li>
                <?php endforeach; ?>
              </ul>
              <span class="badge <?= $formule['badge']['class'] ?> fs-5 mb-2"><?= $formule['badge']['text'] ?></span>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Options complémentaires -->
    <h3 class="text-white mt-4 mb-3">Options complémentaires (à la carte)</h3>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center mb-3">
      <?php foreach ($options as $formule): ?>
        <div class="col">
          <div class="card h-100 bg-transparent border-0 shadow-lg text-center text-white">
            <div class="formule-lottie mx-auto mt-4" id="<?= $formule['lottieId'] ?>"></div>
            <div class="card-body">
              <h4 class="card-title fw-semibold mb-3"><?= $formule['title'] ?></h4>
              <ul class="list-unstyled mb-3">
                <?php foreach ($formule['features'] as $feature): ?>
                  <li><?= $feature ?></li>
                <?php endforeach; ?>
              </ul>
              <span class="badge <?= $formule['badge']['class'] ?> fs-5 mb-2"><?= $formule['badge']['text'] ?></span>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>