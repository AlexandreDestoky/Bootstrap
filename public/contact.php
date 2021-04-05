<?php ob_start();?>

  <h2>Page de contact</h2>
  <p>un paragraphe</p>
  
<?php 
  $content = ob_get_clean();
  require "partials/template.php";
?>