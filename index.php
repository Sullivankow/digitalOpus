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

<div class="container col-xxl-8 px-4 py-5">
  <div class="row flex-lg-row-reverse align-items-center g-5 py-5 data-aos=" data-aos="fade-up" data-aos-duration="1000">
    <div class="col-10 col-sm-8 col-lg-6">
      <img src="asset/images/logo1.png" class="d-block mx-auto img-fluid" alt="Logo" width="700" height="500" loading="lazy">
    </div>
    <div class="col-lg-6">
      <h1 class="display-5 fw-bold  lh-1 mb-3">Pourquoi faire appel à nous?</h1>
      <p class="lead">Faites appel à notre agence pour concevoir un site web à votre image, alliant design moderne, performance et expérience utilisateur optimale. Nous vous accompagnons à chaque étape, de la réflexion stratégique à la mise en ligne, afin de créer une présence digitale efficace, adaptée à vos objectifs et à votre secteur d’activité.</p>
      <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Demander un devis</button>
        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Voir nos réalisations</button>
      </div>
    </div>
  </div>
</div>


<?php
require_once "template/footer.php"
?>