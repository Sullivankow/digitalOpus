<?php
/*Je créer mon tableau de projets pour la section réalisation et les insérer de manière dynamique"*/
$projects = [
  [
    "title" => "Projet Øverst",
    "images" => ["asset/images/overst.png", "asset/images/overst1.png", "asset/images/overst2.png"],
    "badges" => ["HTML", "css/Tailwind", "Typescript", "React.js", "Lucid"],
    "description" => "Site vitrine moderne pour l'artiste électro pop Øverst, design responsive avec lecteur audio, vidéo et formulaire de contact."
  ],
  [
    "title" => "E-commerce",
    "images" => ["asset/images/logo2.png"],
    "badges" => ["PHP", "MySQL", "Stripe"],
    "description" => "Boutique en ligne performante, gestion de catalogue, paiement sécurisé et interface intuitive."
  ],
  [
    "title" => "Identité visuelle",
    "images" => ["asset/images/logo3.png"],
    "badges" => ["Illustrator", "Photoshop"],
    "description" => "Création de logo, charte graphique et supports de communication pour une marque dynamique."
  ]

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

        <!-- Modal pour chaque projet -->
        <div class="modal fade" id="projectModal<?= $index ?>" tabindex="-1" aria-labelledby="projectModalLabel<?= $index ?>" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="projectModalLabel<?= $index ?>"><?= $project['title'] ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div id="modal-carousel<?= $index ?>" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <?php foreach ($project['images'] as $imageIndex => $image): ?>
                      <div class="carousel-item <?= $imageIndex === 0 ? 'active' : '' ?>">
                        <img src="<?= $image ?>" class="d-block w-100" alt="Image <?= $imageIndex + 1 ?>">
                      </div>
                    <?php endforeach; ?>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#modal-carousel<?= $index ?>" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carousel<?= $index ?>" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Fin de la modal -->
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!--Section réalisation-->
<!-- <section id="realisations" class="realisations-section py-5">
  <div class="container">
    <h2 class="text-center text-white mb-5 display-4 fw-bold">Nos réalisations</h2>
    <div class="row g-4 justify-content-center">
      <div class="col-12 col-md-6 col-lg-4">
        <div class="real-card h-100 shadow-lg">
          <img src="asset/images/overst.png" class="card-img-top" alt="Projet 1">
          <div class="card-body p-4">
            <h5 class="card-title mb-3">Projet Øverst</h5>
            <div class="mb-3">
              <span class="badge bg-primary me-1">HTML</span>
              <span class="badge bg-info text-dark me-1">CSS/Tailwind</span>
              <span class="badge bg-info text-dark me-1">Typescript</span>
              <span class="badge bg-warning text-dark">React.js</span>
              <span class="badge bg-warning text-dark">Lucid</span>
              
            </div>
            <p class="card-text">Site vitrine moderne pour l'artiste électro pop Øverst, design responsive avec lecteur audio, vidéo et formulaire de contact.</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4">
        <div class="real-card h-100 shadow-lg">
          <img src="asset/images/logo2.png" class="card-img-top" alt="Projet 2">
          <div class="card-body p-4">
            <h5 class="card-title mb-3">E-commerce</h5>
            <div class="mb-3">
              <span class="badge bg-primary me-1">PHP</span>
              <span class="badge bg-success me-1">MySQL</span>
              <span class="badge bg-warning text-dark">Stripe</span>
            </div>
            <p class="card-text">Boutique en ligne performante, gestion de catalogue, paiement sécurisé et interface intuitive.</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4">
        <div class="real-card h-100 shadow-lg">
          <img src="asset/images/logo3.png" class="card-img-top" alt="Projet 3">
          <div class="card-body p-4">
            <h5 class="card-title mb-3">Identité visuelle</h5>
            <div class="mb-3">
              <span class="badge bg-danger me-1">Illustrator</span>
              <span class="badge bg-dark">Photoshop</span>
            </div>
            <p class="card-text">Création de logo, charte graphique et supports de communication pour une marque dynamique.</p>
          </div>
        </div>
      </div>
       <div class="col-12 col-md-6 col-lg-4">
        <div class="real-card h-100 shadow-lg">
          <img src="asset/images/logo2.png" class="card-img-top" alt="Projet 2">
          <div class="card-body p-4">
            <h5 class="card-title mb-3">E-commerce</h5>
            <div class="mb-3">
              <span class="badge bg-primary me-1">PHP</span>
              <span class="badge bg-success me-1">MySQL</span>
              <span class="badge bg-warning text-dark">Stripe</span>
            </div>
            <p class="card-text">Boutique en ligne performante, gestion de catalogue, paiement sécurisé et interface intuitive.</p>
          </div>
        </div>
      </div>
       <div class="col-12 col-md-6 col-lg-4">
        <div class="real-card h-100 shadow-lg">
          <img src="asset/images/logo2.png" class="card-img-top" alt="Projet 2">
          <div class="card-body p-4">
            <h5 class="card-title mb-3">E-commerce</h5>
            <div class="mb-3">
              <span class="badge bg-primary me-1">PHP</span>
              <span class="badge bg-success me-1">MySQL</span>
              <span class="badge bg-warning text-dark">Stripe</span>
            </div>
            <p class="card-text">Boutique en ligne performante, gestion de catalogue, paiement sécurisé et interface intuitive.</p>
          </div>
        </div>
      </div>
       <div class="col-12 col-md-6 col-lg-4">
        <div class="real-card h-100 shadow-lg">
          <img src="asset/images/logo2.png" class="card-img-top" alt="Projet 2">
          <div class="card-body p-4">
            <h5 class="card-title mb-3">E-commerce</h5>
            <div class="mb-3">
              <span class="badge bg-primary me-1">PHP</span>
              <span class="badge bg-success me-1">MySQL</span>
              <span class="badge bg-warning text-dark">Stripe</span>
            </div>
            <p class="card-text">Boutique en ligne performante, gestion de catalogue, paiement sécurisé et interface intuitive.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->