<?php
require_once "template/header.php";


?>

<!--Section hero-->

<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
  <!-- Indicateurs -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <!-- Slides -->
  <div class="carousel-inner">
    <!-- Slide 1 -->
    <div class="carousel-item active">
      <img src="asset/images/pic1.jpg" class="d-block w-100 img-fluid" alt="Création site web moderne">
      <div class="carousel-caption text-start">
        <h1>Sites modernes & performants</h1>
        <p>Nous concevons des expériences digitales engageantes.</p>
        <p><a class="btn btn-primary btn-lg" href="#contact">Contactez-nous</a></p>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="carousel-item">
      <img src="asset/images/pic2.jpg" class="d-block w-100 img-fluid" alt="Optimisation SEO">
      <div class="carousel-caption">
        <h1>Optimisation SEO naturelle</h1>
        <p>Attirez plus de clients grâce à un référencement efficace.</p>
        <p><a class="btn btn-primary btn-lg" href="#formules">Voir nos formules</a></p>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="carousel-item">
      <img src="asset/images/pic3.jpg" class="d-block w-100 img-fluid" alt="Design responsive">
      <div class="carousel-caption text-end">
        <h1>Responsive & intuitif</h1>
        <p>Adapté à tous les écrans, pour une navigation fluide.</p>
        <p><a class="btn btn-primary btn-lg" href="#projets">Nos réalisations</a></p>
      </div>
    </div>
  </div>

  <!-- Contrôles -->
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Précédent</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Suivant</span>
  </button>
</div>





<!--Section à propos-->

<div class="about-section container col-xxl-10 px-4 py-5 ">
  <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
      <div id="lottie-computer-aboutUs" style="width:100%;max-width:800px;margin:auto"></div>
    </div>
    <div class="col-lg-6">
      <h1 class="display-5 fw-bold text-white lh-1 mb-3">À propos de SunDev Agency</h1>
      <p class="lead">Chez SunDev Agency, nous créons bien plus que des sites web : nous bâtissons des expériences digitales sur mesure, pensées pour faire rayonner votre image et booster votre activité. Notre agence est née d'une passion pour le design, la technologie et la communication, avec une mission claire : accompagner les entrepreneurs, marques et indépendants dans leur croissance digitale.</p>
      <ul class="list-unstyled mb-4">
        <li class="mb-2"><i class="bi bi-window"></i> Création de site vitrine</li>
        <li class="mb-2"><i class="bi bi-palette"></i> Identité visuelle & branding</li>
        <li class="mb-2"><i class="bi bi-bullseye"></i> Stratégie de communication digitale</li>
        <li class="mb-2"><i class="bi bi-graph-up"></i> SEO & optimisation de la visibilité en ligne</li>
      </ul>
      <p>Notre promesse : un accompagnement humain, transparent et 100% personnalisé. En collaborant avec SunDev, vous choisissez un partenaire de confiance, réactif et à l'écoute de vos objectifs.</p>
      <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Contactez-nous</button>
        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Nos réalisations</button>
      </div>
    </div>
  </div>
</div>

<!--Section réalisation-->
<section class="realisations-section py-5">
  <div class="container">
    <h2 class="text-center text-white mb-5 display-4 fw-bold">Nos réalisations</h2>
    <div class="row g-4 justify-content-center">
      <div class="col-12 col-md-6 col-lg-4">
        <div class="real-card h-100 shadow-lg">
          <img src="asset/images/logo1.png" class="card-img-top" alt="Projet 1">
          <div class="card-body p-4">
            <h5 class="card-title mb-3">Projet Vitrine</h5>
            <div class="mb-3">
              <span class="badge bg-primary me-1">HTML</span>
              <span class="badge bg-info text-dark me-1">CSS</span>
              <span class="badge bg-warning text-dark">Bootstrap</span>
            </div>
            <p class="card-text">Site vitrine moderne pour une startup innovante, design responsive et animations subtiles.</p>
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
</section>

<?php
require_once "template/footer.php"
?>