<?php
/*
session_start();
if (isset($_SESSION['id'])){

}else {
    header ('location: se_connecter.php');
}*/

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>INSTADOG - Communauté de chiens</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,500,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">
    <link rel="stylesheet" href="profil_chien.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
        <?php require 'connexion.php';
        $appliBD = new Connexion();
        $chienById = $appliBD->getChienById($_GET['id']);
        $articleById = $appliBD->getListeArticle($_GET['id']);
        ?>
</head>
<body>
  <!-- ////HEADER//////////////////////////////////////////////////////////////////////////////////////////////////////// -->
  <?php
    include 'header.php';
  ?>
     <!--  ///Text Profil////////////////////////////////////////////////////////////////////////////////////////////////7 -->
     <div class="jumbotron text-center pt-5 pb-5">
        <h2 class="title" style="font-size:3vw;"><?php echo $chienById->getSurnom(); ?></h2>
        <h6><i class="fas fa-paw"></i> Profil de mon chien</h6>
    </div>
    <div id="demo" class="carousel slide" data-ride="carousel">
        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo $chienById->getImage();?>" alt="Photo profil chien" width="1100" height="400">
                <div class="carousel-caption text-center">
                    <div class="container-fluid">
                        <div class="flex row justify-content-center">
                            <div class="col-sm-12">
                              <div class="table-responsive">
                              <table class="table">
                                <thead class="thead-dark">
                                  <tr>
                                    <th>Surnom</th>
                                    <th>Elevage</th>
                                    <th>Age</th>
                                    <th>Sexe</th>
                                    <th>Race</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <tr class="table-dark text-dark">
                                    <td><i class="fas fa-dog"></i> <?php echo $chienById->getSurnom(); ?></td>
                                    <td><i class="fas fa-home"></i> <?php echo $chienById->getNomElevage();  ?></td>
                                    <td><i class="fas fa-clock"></i> <?php echo $chienById->getAge(); ?></td>
                                    <td><i class="fas fa-transgender-alt"></i> <?php echo $chienById->getSexe(); ?></td>
                                    <td><i class="fas fa-dna"></i> <?php echo $chienById->getRace(); ?></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ///deuxieme parti////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <h2 class="text-center mt-4 text-decoration"><i class="far fa-newspaper"></i> Articles</h2>
  <div class="container mt-4">
  <div class="d-flex justify-content-center">
    <button class="btn btn-danger mb-5 mt-3" type="button" data-toggle="collapse" data-target="#footwear" aria-expanded="false" aria-controls="footwear">
    <i class="far fa-plus-square"></i> Ajouter un Article
</button>
  </div>
  <div class="d-flex justify-content-center">
<div class="collapse" id="footwear" style="width: 50rem;">
                    <div class="card card-body">
                        <div class="row d-flex justify-content-around">
                        <form method="post" action="formulaire_action_article.php" enctype="multipart/form-data" class="needs-validation formPadding" novalidate >
                                <div class="form-row">
                                  <div class="form-group col-md-7">
                                      <label for="commentaire"><i class="fas fa-comment-medical"></i> Commentaire</label>
                                      <textarea class="form-control" rows="5" id="commentaire" type="text" name="texte" placeholder="Entrer un texte"
                                    value="" required></textarea>
                                    <div class="valid-feedback">validé!</div>
                                    <div class="invalid-feedback">Rentrer un texte</div>
                                  </div>
                                    <div class="col-md-5 mb-3 sm-6">
                                      <label for="validationCustom02"><i class="fas fa-camera-retro"></i> Photo</label><br>
                                       <input type="hidden" name="MAX_FILE_SIZE" value="1073741824" />
                                        <input type="file" name="image" class="form-control-file border" />
                                        <input type="hidden" name="postId" value=<?php echo $chienById->getId();?>>
                                        <div class="valid-feedback">validé!</div>
                                        <div class="invalid-feedback">Ajouter une image</div>
                                    </div>
                                    <div class="container">
                                    <div class="row">
                                        <div class="col text-center">
                                        <button class="btn btn-primary bottonConnecter mb-5"><i class="far fa-plus-square"></i> VALIDER</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
        </div>
  </div>
<!--///Liste Article/////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

  <?php
  echo'<div class="container mb-3">';

    foreach($articleById as $article){

    echo'<div class="d-flex justify-content-center">
      <div class="card mt-1 mb-4" style="width:500px">';
         echo'<a href=article.php?id='.$article->getId().'>';
          echo'<img class="card-img-top" src="'.$article->getImage().'" alt="Lights" style="width:100%" height="350" alt="Card image">
         </a>
       <div class="card-body">
         <h4 class="card-title"><i class="fas fa-paw"></i> '. $chienById->getSurnom().'</h4>
         <p class="card-text">'.$article->getTexte().'</p>
     </div>
     </div>
    </div>';
 }
echo'</div>';

 ?>
<!-- /////Footer/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
     <?php
    include 'footer.php';
    ?>
</body>
</html>
