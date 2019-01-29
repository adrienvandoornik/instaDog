<!DOCTYPE html>
<html lang="en">

<head>
  <title>InstaDog</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
  <link rel="stylesheet" href="inscription.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
</head>

<body>
  
 
   
 <!-- ////HEADER////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

  
 <?php

include 'header.php';
?>
     
    
  <div class="jumbotron text-center pt-5 pb-5">
      <h2>S'INSCRIRE</h2>
      <h6><span class="" aria-hidden="true"></span>Inscrivez-vous pour continuer</h6>
  </div>



  <!-- //// FORMULAIRE/////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
  <div class="container containerForm bg-white">
    <form class="needs-validation formPadding" novalidate>
      <div class="form-row">
        <div class="col-md-6 mb-3">
          <label for="validationCustom01">Prénom</label>
          <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark"
            required>
          <div class="valid-feedback">

          </div>
        </div>
        <div class="col-md-6 mb-3">
          <label for="validationCustom02">Nom</label>
          <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required>
          <div class="valid-feedback">

          </div>
        </div>

        <div class="col-md-6 mb-3">
          <label for="validationCustom01">Email</label>
          <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark"
            required>
          <div class="valid-feedback">

          </div>
        </div>
        <div class="col-md-6 mb-3">
          <label for="validationCustom02">Password</label>
          <input type="password" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required>
          <div class="valid-feedback">

          </div>
        </div>

        <div class="col-md-6 mb-3">
          <label for="validationCustom02">Login</label>
          <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required>
          <div class="valid-feedback">

          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      
          
<div class="container">
  <div class="row">
    <div class="col text-center">
      <button class="btn btn-primary bottonConnecter">S'INSCRIRE</button>
    </div>
  </div>
</div>
 
    </form>
     <p>Déjà membre?</p>
  

<div class="container">
  <div class="row">
    <div class="col text-center mb-4">
      <a href="connexion.php"><button class="btn btn-primary bottonInscrition">SE CONNECTER</button></a>
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