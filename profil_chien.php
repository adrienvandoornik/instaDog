<!DOCTYPE html>
<html lang="fr">

<head>
    <title>INSTADOG - Communauté de chiens</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">
    <link rel="stylesheet" href="profil_user.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
    <style>
        body {
    color: #777;
}

.jumbotron { 
    background-color: #525050; /* Gris */
    color: #ffffff;
}

  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }

.chien {
    width: 80%;
    height: 80%;
    opacity: 0.8;
}

.chien:hover {
    opacity: 1;
}

.carousel-inner{
    height: 620px;
}
</style>
</head>

<body>

  <!-- ////HEADER////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

  
  <?php

include 'header.php';
?>



     <!--  ///Text Profil////////////////////////////////////////////////////////////////////////////////////////////////7 -->

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
    <div class="container text-center">
        <br>
        <div class="row justify-content-center">
            <div class="col-6">
                <p><button type="button" style="width: 36rem;" class="btn btn-primary btn-lg btn-block" data-toggle="collapse" data-target="#collapseExample"
                        aria-expanded="false" aria-controls="collapseExample">
                        Ajouter un article
                    </button></p>
                <div class="collapse" id="collapseExample" style="width: 36rem;">
                    <div class="card card-body">
                        <div class="row">
                            <form class="needs-validation formPadding" novalidate>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Texte</label>
                                        <input type="text" class="form-control" id="validationCustom01" placeholder="First name"
                                            value="Mark" required>
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom02">Photo</label>
                                        <input type="text" class="form-control" id="validationCustom02" placeholder="Last name"
                                            value="Otto" required>
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <button type="button" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-plus"></span>
                                            Ajouter un chien</button>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card text-center" style="width: 36rem;">
                    <img class="card-img-top" img src="image/chien2.png" alt="Card image cap" width="100%" height="100%">
                    <div class="card-body">
                        <h5 class="card-title">Chien 2</h5>
                        <p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a href="#" class="btn btn-primary">Voir Article</a>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card text-center" style="width: 36rem;">
                    <img class="card-img-top" img src="image/chien4.png" alt="Card image cap" width="100%" height="100%">
                    <div class="card-body">
                        <h5 class="card-title">Chien 2</h5>
                        <p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a href="#" class="btn btn-primary">Voir Article</a>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card text-center" style="width: 36rem;">
                    <img class="card-img-top" img src="image/chien3.jpg" alt="Card image cap" width="100%" height="100%">
                    <div class="card-body">
                        <h5 class="card-title">Chien 2</h5>
                        <p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a href="#" class="btn btn-primary">Voir Article</a>
                    </div>
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