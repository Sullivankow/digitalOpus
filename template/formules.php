<?php
$offres_vitrine = [
  [
    'title' => 'Vitrine Essentielle',
    'features' => [
      '✔ Jusqu\'à 5 pages (Accueil, Services, À propos, Contact, etc.)',
      '✔ Design responsive (mobile/tablette)',
      '✔ Formulaire de contact',
      '✔ SEO de base',


    ],
    'badge' => ['text' => 'À partir de 990€', 'class' => 'bg-primary'],
    'lottieId' => 'formule-lottie-1',
  ],
  [
    'title' => 'Vitrine Pro',
    'features' => [
      '✔ Jusqu\'à 7 pages',
      '✔ Interface d’administration (changer textes, images…) ',
      '✔ Design sur-mesure et responsive',
      '✔ Animations',
      '✔ Formulaire avancé',
      '✔ SEO optimisé + RGPD',
      '✔ Formation de prise en main (1h)',
    ],
    'badge' => ['text' => 'À partir de 2440€', 'class' => 'bg-success'],
    'lottieId' => 'formule-lottie-2',
  ],
  [
    'title' => 'Vitrine Institution (Mairie, collectivités, associations)',
    'features' => [
      '✔ Jusqu\'à 10 pages  (Accueil, Actus, Services, Démarches, Contact, etc.)',
      '✔ Blog & actualités ou d\'annonces',
      '✔ Agenda / évènements',
      '✔ Réseaux sociaux',
      '✔ SEO avancé',
      '✔ Hébergement possible en collectivité',
    ],
    'badge' => ['text' => 'À partir de 3990€', 'class' => 'bg-warning text-dark'],
    'lottieId' => 'formule-lottie-3',
  ],
];

$offres_catalogue = [
  [
    'title' => 'Catalogue Start',
    'features' => [
      '✔ Jusqu’à 20 produits',
      '✔ Organisation par catégories',
      '✔ Fiche produit : image, description, prix indicatif',
      '✔ Admin simple pour ajouter/supprimer produits',
      '✔ Sans paiement',
      '✔ SEO produit de base
',
      '✔ Gestion simple',
      '✔ Design responsive',
    ],
    'badge' => ['text' => 'À partir de 1490€', 'class' => 'bg-primary'],
    'lottieId' => 'formule-lottie-4',
  ],
  [
    'title' => 'Catalogue Évolutif',
    'features' => [
      '✔ Produits illimités',
      '✔ Filtres avancés, par catégories, prix, etc',
      '✔ Galerie multiple images / documents',
      '✔ Gestion back-office',
      '✔ Moteur de recherche intégré',
      '✔ SEO + performance améliorée',
    ],
    'badge' => ['text' => 'À partir de 2990€', 'class' => 'bg-success'],
    'lottieId' => 'formule-lottie-5',
  ],
];

$offres_ecommerce = [
  [
    'title' => 'E-Commerce Essentiel',
    'features' => [
      '✔ Jusqu’à 30 produits',
      '✔ Paiement sécurisé (Stripe, Paypal)',
      '✔ Gestion commandes',
      '✔ Interface d\'administration',
      '✔ Responsive Design',
      '✔ Email de confirmation client',
    ],
    'badge' => ['text' => 'À partir de 2490€', 'class' => 'bg-primary'],
    'lottieId' => 'formule-lottie-6',
  ],
  [
    'title' => 'E-Commerce Pro+',
    'features' => [
      '✔ Produits illimités',
      '✔ Gestion stocks',
      '✔ Codes promo, ventes flash',
      '✔ Livraison, retrait magasin',
      '✔ Facturation automatique',
      '✔ Analytics',
      '✔ SEO avancé + Google Analytics',
      '✔ Formation (2h)',
    ],
    'badge' => ['text' => 'À partir de 4990€', 'class' => 'bg-success'],
    'lottieId' => 'formule-lottie-1',
  ],
];

$options = [
  [
    'title' => 'Communication digitale /Réseaux sociaux(optionnel)',
    'features' => [
      '✔ 4 publications/mois, création visuelle, planification',
      '✔ création visuelle',
      '✔ planification',

    ],
    'badge' => ['text' => '300€/mois', 'class' => 'bg-info'],
    'lottieId' => 'formule-lottie-2',
  ],
  [
    'title' => 'Maintenance & Sécurité(optionnel)',
    'features' => [
      '✔ Sauvegardes',
      '✔ Mises à jour',
      '✔ Surveillance sécurité',
      '✔ Assistance technique',
    ],
    'badge' => ['text' => ' 50€/mois', 'class' => 'bg-secondary'],
    'lottieId' => 'formule-lottie-3',
  ],
  [
    'title' => 'Hébergement & nom de domaine',
    'features' => [
      '✔ Nom de domaine : 15 € HT / an',
      '✔ Hébergement standard : 400 € HT / an',
      '✔ Hébergement e‑commerce : 600 € HT / an',
    ],
    'badge' => ['text' => ' Optionnel', 'class' => 'bg-secondary'],
    'lottieId' => 'formule-lottie-4',
  ],
];
?>



<section id="formules" class="formules-section py-5">
  <div class="container">
    <h2 class="text-center text-white mb-5 display-4 fw-bold">Nos formules</h2>

    <!-- Offres site vitrine -->
    <h3 class="text-white mt-4 mb-3">Offres Site Vitrine</h3>
    <div class="row justify-content-center mb-5">
      <?php foreach ($offres_vitrine as $formule): ?>
        <div class="col-12 col-sm-6 col-lg-4 d-flex align-items-stretch mb-4">
          <div class="card w-100 bg-white border-0 shadow-lg text-center text-dark p-3 rounded-4">
            <div class="card-body d-flex flex-column justify-content-between">
              <h4 class="card-title fw-bold mb-3 text-dark" style="font-size:1.35rem; letter-spacing:0.5px;"><?= $formule['title'] ?></h4>
              <ul class="list-unstyled mb-3 text-start mx-auto" style="max-width:90%;">
                <?php foreach ($formule['features'] as $feature): ?>
                  <li class="mb-1" style="font-size:1.07rem;"><?= $feature ?></li>
                <?php endforeach; ?>
              </ul>
              <span class="badge prix-badge fs-5 mb-2 mx-auto" style="min-width:120px; font-size:1.15rem;"><?= $formule['badge']['text'] ?></span>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Offres site catalogue -->
    <h3 class="text-white mt-4 mb-3">Offres Site Catalogue (sans paiement)</h3>
    <div class="row justify-content-center mb-5">
      <?php foreach ($offres_catalogue as $formule): ?>
        <div class="col-12 col-md-6 d-flex align-items-stretch mb-4">
          <div class="card w-100 bg-white border-0 shadow-lg text-center text-dark p-3 rounded-4">
            <div class="card-body d-flex flex-column justify-content-between">
              <h4 class="card-title fw-bold mb-3 text-dark" style="font-size:1.35rem; letter-spacing:0.5px;"><?= $formule['title'] ?></h4>
              <ul class="list-unstyled mb-3 text-start mx-auto" style="max-width:90%;">
                <?php foreach ($formule['features'] as $feature): ?>
                  <li class="mb-1" style="font-size:1.07rem;"><?= $feature ?></li>
                <?php endforeach; ?>
              </ul>
              <span class="badge prix-badge fs-5 mb-2 mx-auto" style="min-width:120px; font-size:1.15rem;"><?= $formule['badge']['text'] ?></span>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Offres E-Commerce -->
    <h3 class="text-white mt-4 mb-3">Offres E-Commerce</h3>
    <div class="row justify-content-center mb-5">
      <?php foreach ($offres_ecommerce as $formule): ?>
        <div class="col-12 col-md-6 d-flex align-items-stretch mb-4">
          <div class="card w-100 bg-white border-0 shadow-lg text-center text-dark p-3 rounded-4">
            <div class="card-body d-flex flex-column justify-content-between">
              <h4 class="card-title fw-bold mb-3 text-dark" style="font-size:1.35rem; letter-spacing:0.5px;"><?= $formule['title'] ?></h4>
              <ul class="list-unstyled mb-3 text-start mx-auto" style="max-width:90%;">
                <?php foreach ($formule['features'] as $feature): ?>
                  <li class="mb-1" style="font-size:1.07rem;"><?= $feature ?></li>
                <?php endforeach; ?>
              </ul>
              <span class="badge prix-badge fs-5 mb-2 mx-auto" style="min-width:120px; font-size:1.15rem;"><?= $formule['badge']['text'] ?></span>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Options complémentaires -->
    <h3 class="text-white mt-4 mb-3">Options complémentaires (à la carte)</h3>
    <div class="row justify-content-center mb-3">
      <?php foreach ($options as $formule): ?>
        <div class="col-12 col-sm-6 col-lg-4 d-flex align-items-stretch mb-4">
          <div class="card w-100 bg-white border-0 shadow-lg text-center text-dark p-3 rounded-4">
            <div class="card-body d-flex flex-column justify-content-between">
              <h4 class="card-title fw-bold mb-3 text-dark" style="font-size:1.35rem; letter-spacing:0.5px;"><?= $formule['title'] ?></h4>
              <ul class="list-unstyled mb-3 text-start mx-auto" style="max-width:90%;">
                <?php foreach ($formule['features'] as $feature): ?>
                  <li class="mb-1" style="font-size:1.07rem;"><?= $feature ?></li>
                <?php endforeach; ?>
              </ul>
              <span class="badge prix-badge fs-5 mb-2 mx-auto" style="min-width:120px; font-size:1.15rem;"><?= $formule['badge']['text'] ?></span>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="row">
    <div class="col-12 text-center mt-2">
      <small class="text-white" style="font-size:0.98rem; opacity:0.85;">
        <i>Les prix affichés sont hors taxes (HT). * Hors abonnement annuel d’hébergement de votre site à partir de 400 €.</i>
      </small>
    </div>
  </div>
</section>