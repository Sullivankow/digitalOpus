<?php
$formules = [
  [
    "title" => "Site Vitrine",
    "features" => [
      "✔ Design personnalisé",
      "✔ Site responsive",
      "✔ Référencement naturel inclus",
      "✔ Pages illimitées"
    ],
    "badge" => ["text" => "À partir de 499€", "class" => "bg-primary"],
    "lottieId" => "formule-lottie-1"
  ],
  [
    "title" => "E-commerce",
    "features" => [
      "✔ Boutique en ligne sécurisée",
      "✔ Gestion des produits & commandes",
      "✔ Paiement en ligne (Stripe, PayPal...)",
      "✔ Accompagnement personnalisé"
    ],
    "badge" => ["text" => "À partir de 899€", "class" => "bg-success"],
    "lottieId" => "formule-lottie-2"
  ],
  [
    "title" => "Sur-mesure",
    "features" => [
      "✔ Fonctionnalités avancées",
      "✔ Développement spécifique",
      "✔ Conseil & accompagnement expert",
      "✔ Maintenance & évolutions"
    ],
    "badge" => ["text" => "Sur devis", "class" => "bg-warning text-dark"],
    "lottieId" => "formule-lottie-3"
  ]
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