<?php ob_start();?>

<div class="container text-center" id="contact">
  <h2 class="m-3">Mes infos personnelles</h2>
  <table class="table table-borderless">
    <thead>
      <tr>
        <td><img src="../images/facebook.png" width="100px"></td>
        <td><img src="../images/github.png" width="100px"></td>
        <td><img src="../images/linkedin.jpg" width="100px"></td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Facebook</td>
        <td>Github</td>
        <td>Linkedin</td>
      </tr>
    </tbody>
  </table>
</div>

<?php 
  $content = ob_get_clean();
  require "partials/template.php";
?>