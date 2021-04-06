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
      <img src="../images/arbre.jpg" class="d-block w-50 h-50 mx-auto img-thumbnail border-dark" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../images/ciel.jpg" class="d-block w-50 h-50 mx-auto img-thumbnail border-dark" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../images/dunes.jpg" class="d-block w-50 h-50 mx-auto img-thumbnail border-dark" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../images/desert.jpg" class="d-block w-50 h-50 mx-auto img-thumbnail border-dark" alt="...">
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
<div class="container">
  <h2 class="text-center m-3">Rick Roll</h2>
  <div class="embed-responsive embed-responsive-16by9 my-3">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="embed-responsive-item"></iframe>
  </div>
</div>

<?php 
  $content = ob_get_clean();
  require "partials/template.php";
?>