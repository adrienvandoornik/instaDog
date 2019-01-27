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

    <div class="container gallery-container">

      <div class="tz-gallery mt-3">
        
        <div class="row">
          <div class="col-lg-6">           
            <img class="img-responsive"src="https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Fstatic.wamiz.fr%2Fimages%2Fadoption%2Flarge%2Fchien-flat-coated-retriever-adopter-107830.JPG&f=1"
              alt="Park">
          </div>

          <div class="col-lg-6">
            <img class="img-responsive" src="https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Fstatic.lexpress.fr%2Fmedias_10954%2Fw_2048%2Ch_1146%2Cc_crop%2Cx_0%2Cy_341%2Fw_1520%2Ch_855%2Cc_fill%2Cg_north%2Fv1464890691%2Fberger-allemand-chien-meilleur-ami-de-l-homme-licence-sans-soucis_5608599.jpg&f=1"
              alt="Park">
          </div>
        </div>


        <div class="row">
          <div class="col-lg-6">
            <img class="img-responsive" src="https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.selection.ca%2Fwp-content%2Fuploads%2Fsites%2F15%2F2016%2F03%2Fraces-chiens-plus-stupides.jpg&f=1"
              alt="Park">
          </div>

          <div class="col-lg-6">
            <img class="img-responsive" src="https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Fwww.guide-du-chien.com%2Fwp-content%2Fuploads%2F2015%2F12%2FTop-10-des-races-de-chien-de-garde.jpg&f=1"
              alt="Park">
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