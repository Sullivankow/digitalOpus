<?php
$formules = [
  [
    "title" => "Site Vitrine",
    "features" => [
      "✔ Design personnalisé",
      "✔ Site responsive",
      "✔ Référencement naturel inclus",
      "✔ Formulaire de contact simple",
      "✔ Jusqu'à 5 pages"

    ],

    "badge" => ["text" => "À partir de 990€", "class" => "bg-primary"],
    "lottieId" => "formule-lottie-1"
  ],
  [
    "title" => "E-commerce",
    "features" => [
      "✔ Boutique en ligne sécurisée",
      "✔ Jusqu’à 8 pages",
      "✔ Paiement en ligne (Stripe, PayPal...)",
      "✔ Formulaire dynamique",
      "✔ Conformité RGPD",
      "✔ Design personnalisé"
    ],
    "badge" => ["text" => "À partir de 2490€", "class" => "bg-success"],
    "lottieId" => "formule-lottie-2"
  ],
  [
    "title" => "Sur-mesure",
    "features" => [
      "✔ Fonctionnalités avancées",
      "✔ Développement spécifique",
      "✔ Conseil & accompagnement expert",
      "✔ Maintenance & évolutions",
      "✔  Blog optimisé et SEO avancé",
      "✔  Rédaction du contenu",
      "✔  Formation client incluse",

    ],
    "badge" => ["text" => "Sur devis", "class" => "bg-warning text-dark"],
    "lottieId" => "formule-lottie-3"
  ],
  [
    "title" => "SEO & Marketing",
    "features" => [
      "✔ Optimisation SEO avancée",
      "✔ Campagnes publicitaires",
      "✔ Analyse de trafic",
      "✔ Stratégie digitale"
    ],
    "badge" => ["text" => "À partir de 290€", "class" => "bg-info"],
    "lottieId" => "formule-lottie-4"
  ],
  [
    "title" => "Maintenance/Hébergement",
    "features" => [
      "✔ Surveillance 24/7",
      "✔ Sauvegarde automatique",
      "✔ Mises à jour régulières",
      "✔ Assistance technique",
      "✔ Hébergement sécurisé",
      "✔ Performances optimisées",
      "✔ Support technique inclus",
      "✔ Domaines & emails"
    ],
    "badge" => ["text" => "À partir de 49€/mois", "class" => "bg-secondary"],
    "lottieId" => "formule-lottie-5"
  ],
  [
    "title" => "Gestion Réseaux Sociaux",
    "features" => [
      "✔ Création de contenu",
      "✔ Gestion des publications",
      "✔ Analyse des performances",
      "✔ Veille concurrentielle"
    ],
    "badge" => ["text" => "À partir de 190€/mois", "class" => "bg-dark"],
    "lottieId" => "formule-lottie-6"
  ],
];
?>



<section id="formules" class="formules-section py-5">
  <div class="container">
    <h2 class="text-center text-white mb-5 display-4 fw-bold">Nos formules</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php foreach ($formules as $formule): ?>
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