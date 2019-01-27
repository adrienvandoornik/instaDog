<!DOCTYPE html>
<html lang="en">

<head>
  <title>InstaDog</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="connexion.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body>
 
  <!-- ////HEADER////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
 
  <?php

include 'header.php';
?>

  <div class="container-fluid">
    <div class="jumbotron pt-5 pb-5">
      <h2>SE CONNECTER</h2>
    </div>
  </div>

  <!-- //// FORMULAIRE/////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
  <div class="container">
  <form class="needs-validation formPadding" novalidate>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="validationCustom01">Email</label>
        <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required>
        <div class="valid-feedback">
          
        </div>
      </div>
      <div class="col-md-6 mb-3">
        <label for="validationCustom02">Password</label>
        <input type="password" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required>
        <div class="valid-feedback">
         
        </div>
      </div>
      
    </div>
    <div class="clearfix"></div>
    
    
<div class="container">
  <div class="row">
    <div class="col text-center">
      <button class="btn btn-primary bottonConnecter">SE CONNECTER</button>
    </div>
  </div>
</div>
  <p>Pas encore membre?</p>
  

<div class="container">
  <div class="row">
    <div class="col text-center">
      <button class="btn btn-primary bottonInscrition">S'INCRIRE</button>
    </div>
  </div>
</div>
  </form>
 
  

  </div>

  <!-- /////Footer////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
  <footer class="page-footer font-small teal pt-4">

    <!-- Footer Text -->
    <div class="container-fluid ">

      <!-- Grid row -->
      <div class="row text-center bg-dark borderFooter pt-3 text-light">
        <div class="col-md-4 col-lg-4">
            <a href="galeriePhoto.html"><h5 class="text-uppercase font-weight-bold">HOME</h5></a>
        </div>

        <div class="col-md-4 col-lg-4">
            <a href="profil_user.html"><h5 class="text-uppercase font-weight-bold">PROFIL</h5></a>
        </div>

        <div class="col-md-4 col-lg-4">
            <a href="inscription.html"><h5 class="text-uppercase font-weight-bold">S'INSCRIRE</h5></a>
        </div>
      </div>
    </div>

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 footerCopy bg-dark">InstaDog © 2019 Copyright: Adrien & Gutemberg 
      <a href="galeriePhoto.html">InstaDog.ch</a>
    </div>
    <!-- Copyright -->

  </footer>
</body>

</html>