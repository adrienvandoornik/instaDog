<!DOCTYPE html>
<html lang="en">

<head>
  <title>InstaDog</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="galeriePhoto.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
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

<!-- 
////Galerie de Photo////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<div class="container">
  <div class="d-flex justify-content-center">
 <div class="card mt-5" style="width:900px">
  <img class="card-img-top" src="https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Fkimsulli.files.wordpress.com%2F2011%2F06%2Fdog3.jpg&f=1" alt="Lights" style="width:100%" alt="Card image">
  <div class="card-img-overlay">
      <h4 class="card-title">John Doe</h4>
      <a href="#" class="btn btn-success">Voir Profil</a>
    </div>
  </div>
 
</div>
</div>
</div>

<div class="container">
  <div class="d-flex justify-content-center">
 <div class="card mt-5" style="width:900px">
  <img class="card-img-top" src="https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Fstatic.wamiz.fr%2Fimages%2Fadoption%2Flarge%2Fchien-flat-coated-retriever-adopter-107830.JPG&f=1" alt="Lights" style="width:100%" alt="Card image">
  <div class="card-img-overlay">
      <h4 class="card-title">Rocky</h4>
      <a href="#" class="btn btn-success">Voir Profil</a>
    </div>
  </div>
 
</div>
</div>
</div>

  
  <!-- /////Footer////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
  <?php
  include 'footer.php';
  
  ?>



  <!-- ///Scrip JavaScript//////////////////////////////////////////////////////////////////////////////////////////////// -->
  <script src="https://code.jquery.com/jquery-2.1.4.js"></script>

  <!-- Bootstrap Js CDN -->

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 

</body>
</html>