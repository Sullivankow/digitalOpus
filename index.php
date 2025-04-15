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


<?php
require_once "template/footer.php"
?>








