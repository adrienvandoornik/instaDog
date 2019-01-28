<!DOCTYPE html>
<html lang="en">

<head>
  <title>InstaDog</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="galeriePhoto.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</head>

<body>
<!-- ////HEADER////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<?php

include 'header.php';
?>

<div id="demo" class="carousel slide" data-ride="carousel">
        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/chien1.jpg" alt="Los Angeles" width="1100" height="400">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>

  <div class="container">
  <div class="d-flex justify-content-center">
    <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#footwear" aria-expanded="false" aria-controls="footwear">
Ajouter un Article
</button>
  </div>
  <div class="d-flex justify-content-center ">
    

<div class="collapse" id="footwear" style="width: 36rem;">
                    <div class="card card-body">
                        <div class="row ">
                            <form class="needs-validation formPadding" novalidate>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3 sm-6 text-center">
                                        <label for="validationCustom01">Texte</label>
                                        <input type="text" class="form-control" id="validationCustom01" placeholder="First name"
                                            value="Mark" required>
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3 sm-6 text-center">
                                        <label for="validationCustom02">Photo</label>
                                        <input type="text" class="form-control" id="validationCustom02" placeholder="Last name"
                                            value="Otto" required>
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                   
                                                                        
                                    <div class="container">
                                    <div class="row">
                                        <div class="col text-center">
                                        <button class="btn btn-primary bottonConnecter">VALIDER</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
  </div>


  <div class="container">
  <div class="d-flex justify-content-center">
 <div class="card mt-5" style="width:500px">
  <img class="card-img-top" src="https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Fkimsulli.files.wordpress.com%2F2011%2F06%2Fdog3.jpg&f=1" alt="Lights" style="width:100%" alt="Card image">
 
  <div class="card-body">
    <h4 class="card-title">Feioso</h4>
    <p class="card-text">Some example text some example text. John Doe is an architect and engineer sdsd dffd  wewefefref  gergergerg  ergergerg ergerg gf a we t ree rger  eg</p>
  </div>
</div>
</div>
</div>
</body>
</html>