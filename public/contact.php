<?php ob_start();
  require "../utils/formatage.php";
?>

<?php
  if(isset($_POST["mail"])) {
    $to = "adestoky@gmail.com";
    $from = $_POST['mail'];
    $objet = $_POST["objet"];
    $message = $_POST["message"];
    mail($to,$objet,$message,$from);
    ?>
    <div class="alert alert-success" role="alert">
      Message envoyé !
    </div>
 <?php } ?>

<div class="container text-center" >
  <?php  echo formatageTitre("Mes infos personnelles"); ?>
  <div class="table-responsive">
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
</div>

<div class="container text-center">
  <?php  echo formatageTitre("Formulaire de contact"); ?>
  <form method="POST" action="" class="col-12 col-md-6 m-auto">
    <div class="form-group">
      <label for="exampleInputEmail1">Adresse Email</label>
      <input type="email" class="form-control" id="exampleInputEmail1" name="mail" placeholder="Entrez votre mail" required>
    </div>
    <div class="form-group">
      <label for="objet">Objet du mail</label>
      <select class="form-control" id="objet" name="objet" required>
        <option disabled selected="selected" value="">Choisir</option>
        <option value="question">Question</option>
        <option value="remarque">Remarque</option>
        <option value="autre">Autres</option>
      </select>
    </div>
    <div class="form-group">
      <label for="message">Votre Message</label>
      <textarea class="form-control" id="message" name="message" rows="4" placeholder="Insérez votre message" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
  </form>
</div>

<?php 
  $content = ob_get_clean();
  require "partials/template.php";
?>