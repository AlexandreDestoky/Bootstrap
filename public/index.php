<?php ob_start();?>

  <h2>On test</h2>
  <p>un paragraphe</p>
  <button class="btn btn-success">Valider</button>

<?php 
  $content = ob_get_clean();
  require "partials/template.php";
?>