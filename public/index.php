<?php ob_start();?>

<div id="carouselExampleIndicators" class="carousel slide fondCarousel py-3" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../images/arbre.jpg" class="d-block w-50 h-50 mx-auto img-thumbnail border-dark" alt="..." />
    </div>
    <div class="carousel-item">
      <img src="../images/ciel.jpg" class="d-block w-50 h-50 mx-auto img-thumbnail border-dark" alt="..." />
    </div>
    <div class="carousel-item">
      <img src="../images/dunes.jpg" class="d-block w-50 h-50 mx-auto img-thumbnail border-dark" alt="..." />
    </div>
    <div class="carousel-item">
      <img src="../images/desert.jpg" class="d-block w-50 h-50 mx-auto img-thumbnail border-dark" alt="..." />
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only text-primary">Next</span>
  </a>
</div>
<div class="container text-center" id="presentation">
  <h2 class="m-3">Rick Roll</h2>
  <div class="embed-responsive embed-responsive-16by9 my-5">
    <iframe
      width="560"
      height="315"
      src="https://www.youtube.com/embed/dQw4w9WgXcQ"
      title="YouTube video player"
      frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
      allowfullscreen
      class="embed-responsive-item"
    ></iframe>
  </div>
</div>
<div class="container text-center mt-4" id="monCV">
  <h2>Mes Compétences</h2>
  <div class="row my-3">
    <div class="col-md-4 col-6 my-4">
      <h3>HTML / CSS</h3>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">80%</div>
      </div>
    </div>
    <div class="col-md-4 col-6 my-4">
      <h3>PHP / POO</h3>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
      </div>
    </div>
    <div class="col-md-4 col-6 my-4">
      <h3>Wordpress</h3>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">40%</div>
      </div>
    </div>
    <div class="col-md-4 col-6 my-4">
      <h3>JAVASCRIPT</h3>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">70%</div>
      </div>
    </div>
    <div class="col-md-4 col-6 my-4">
      <h3>MySQL</h3>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">70%</div>
      </div>
    </div>
    <div class="col-md-4 col-6 my-4">
      <h3>Vue.JS</h3>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">40%</div>
      </div>
    </div>
  </div>
</div>


<?php 
  $content = ob_get_clean();
  require "partials/template.php";
?>
