<!DOCTYPE html>
<html lang="fr">

<head>
  <title>InstaDog</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,500,900" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="se_connecter.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body>

  <!-- ////HEADER////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

  <?php
    include 'header.php';
  ?>

  <div class="jumbotron text-center pt-5 pb-5">
      <h2 class="title" style="font-size:3vw;"><i class="fas fa-sign-in-alt"></i> SE CONNECTER</h2>
  </div>

  <!-- //// FORMULAIRE/////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

  <div class="container bg-white mb-3">
  <form action="formulaire_action_connexion.php" method="post" class="needs-validation bg-white formPadding" novalidate>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="validationCustom01"><i class="far fa-envelope"></i> Email</label>
        <input type="text" name="email" class="form-control" id="validationCustom01" placeholder="Entrer un email" value="" required>
        <div class="valid-feedback">validé!</div>
        <div class="invalid-feedback">Rentrer un email valide</div>
      </div>

      <div class="col-md-6 mb-3">
        <label for="validationCustom02"><i class="fas fa-key"></i> Password</label>
        <input type="password" name="motDePasse" class="form-control" id="validationCustom02" placeholder="Entrer un mot de passe" value="" required>
        <div class="valid-feedback">validé!</div>
        <div class="invalid-feedback">Rentrer un mot de passe valide</div>
      </div>

    </div>
    <div class="clearfix"></div>

    <div class="container">
    <div class="row">
      <div class="col text-center bg-white">
          <button class="btn btn-primary bottonConnecter" type="submit" name="login"><i class="fas fa-sign-in-alt"></i> SE CONNECTER</button>
      </div>
    </div>
    </div>
  </form>

  <script>
// function application du style sur les champs de validation du formulaire
(function() {
  'use strict';
  window.addEventListener('load', function() {
    var forms = document.getElementsByClassName('needs-validation');
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

 <p>Pas encore membre?</p>
<div class="container bg-white">
  <div class="row">
    <div class="col text-center mb-4">
     <a href="inscription.php"> <button class="btn btn-primary bottonInscrition"><i class="fas fa-user-plus"></i> S'INSCRIRE</button></a>
    </div>
  </div>
</div>
</div>

<!-- /////Footer////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<?php
include 'footer.php';
?>

</body>
</html>
