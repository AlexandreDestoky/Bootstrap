<?php ob_start();?>

<div class="container text-center" >
  <h2 class="m-3">Mes infos personnelles</h2>
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

<div class="container text-center col-12 col-md-6 mt-4">
  <h2 class="m-3">Formulaire de contact</h2>
  <form method="POST" action="">
    <div class="form-group">
      <label for="exampleInputEmail1">Adresse Email</label>
      <input type="email" class="form-control" id="exampleInputEmail1" name="mail" placeholder="Entrez votre mail">
    </div>
    <div class="form-group">
      <label for="objet">Objet du mail</label>
      <select class="form-control" id="objet" name="objet">
        <option disabled selected="selected">Choisir</option>
        <option value="question">Question</option>
        <option value="remarque">Remarque</option>
        <option value="autre">Autres</option>
      </select>
    </div>
    <div class="form-group">
      <label for="message">Votre Message</label>
      <textarea class="form-control" id="message" name="message" rows="4" placeholder="Insérez votre message"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
  </form>
</div>

<?php 
  $content = ob_get_clean();
  require "partials/template.php";
?>