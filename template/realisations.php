<?php
/*Je créer mon tableau de projets pour la section réalisation et les insérer de manière dynamique"*/
$projects = [
  [
    "title" => "Projet Øverst",
    "images" => ["asset/images/overst.png", "asset/images/overst1.png", "asset/images/overst2.png", "asset/images/overst3.png", "asset/images/overst4.png", "asset/images/overst5.png"],
    "badges" => ["HTML", "css/Tailwind", "Typescript", "React.js", "Lucid"],
    "description" => "Site vitrine moderne pour l'artiste électro pop Øverst, design responsive avec lecteur audio, vidéo et formulaire de contact."
  ],

  [
    "title" => "Laeti Nails",
    "images" => ["asset/images/laetinails.png", "asset/images/laetinails2.png", "asset/images/laetinails3.png", "asset/images/laetinails1.png", "asset/images/laetinails4.png", "asset/images/laetinails5.png"],
    "badges" => ["Illustrator", "Photoshop"],
    "description" => "Création de logo, charte graphique et supports de communication pour une marque dynamique."
  ],

  [
    "title" => "Arcadia",
    "images" => ["asset/images/arcadia.png", "asset/images/arcadia1.png", "asset/images/arcadia2.png", "asset/images/arcadia3.png", "asset/images/arcadia4.png", "asset/images/arcadia5.png"],
    "badges" => ["Illustrator", "Photoshop"],
    "description" => "Création de logo, charte graphique et supports de communication pour une marque dynamique."
  ],
  [
    "title" => "Quai Antique",
    "images" => ["asset/images/qa.png", "asset/images/qa1.png", "asset/images/qa2.png", "asset/images/qa3.png", "asset/images/qa4.png", "asset/images/qa5.png"],
    "badges" => ["Illustrator", "Photoshop"],
    "description" => "Création de logo, charte graphique et supports de communication pour une marque dynamique."
  ],
  [
    "title" => "Portfolio",
    "images" => ["asset/images/portfolio.png", "asset/images/portfolio1.png", "asset/images/portfolio2.png", "asset/images/portfolio3.png", "asset/images/portfolio4.png", "asset/images/portfolio5.png"],
    "badges" => ["Illustrator", "Photoshop"],
    "description" => "Création de logo, charte graphique et supports de communication pour une marque dynamique."
  ],

  [
    "title" => "CvUp",
    "images" => ["asset/images/cvup.png", "asset/images/cvup1.png", "asset/images/cvup2.png", "asset/images/cvup3.png", "asset/images/cvup4.png", "asset/images/cvup5.png"],
    "badges" => ["Illustrator", "Photoshop"],
    "description" => "Création de logo, charte graphique et supports de communication pour une marque dynamique."
  ],

]





?>




<section id="realisations" class="realisations-section py-5">
  <div class="container">
    <h2 class="text-center text-white mb-5 display-4 fw-bold">Nos réalisations</h2>
    <div class="row g-4 justify-content-center">
      <?php foreach ($projects as $index => $project): ?>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="real-card h-100 shadow-lg">
            <img src="<?= $project['images'][0] ?>" class="card-img-top" alt="<?= $project['title'] ?>">
            <div class="card-body p-4">
              <h5 class="card-title mb-3"><?= $project['title'] ?></h5>
              <div class="mb-3">
                <?php foreach ($project['badges'] as $badge): ?>
                  <span class="badge bg-primary me-1"><?= $badge ?></span>
                <?php endforeach; ?>
              </div>
              <p class="card-text"><?= $project['description'] ?></p>
              <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#projectModal<?= $index ?>">Voir plus</button>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>




<!-- Modal pour afficher les photos du projet sous forme de grille -->
<?php foreach ($projects as $index => $project): ?>
  <div class="modal fade" id="projectModal<?= $index ?>" tabindex="-1" aria-labelledby="projectModalLabel<?= $index ?>" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="projectModalLabel<?= $index ?>">Photos du projet : <?= $project['title'] ?></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row g-3">
            <?php foreach ($project['images'] as $image): ?>
              <div class="col-6 col-md-4">
                <img src="<?= $image ?>" class="img-fluid rounded modal-image" alt="Photo du projet" data-bs-toggle="modal" data-bs-target="#fullScreenModal">
              </div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>