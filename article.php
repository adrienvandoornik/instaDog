<?php

session_start();
if (isset($_SESSION['id'])){

}else {
    header ('location: se_connecter.php');
}

?>

<!DOCTYPE html>
<html lang="fr">

<?php
// On démarre la session dans toutes les pages de notre section membre
session_start ();

// On récupère nos variables de session
if (isset($_SESSION['email']) && isset($_SESSION['motDePasse'])) {

    echo'<div class="alert alert-success" role="alert">';
    echo'Bienvenue sur votre espace membre '.$_SESSION['email'].'!';
    echo '<a href="./deconnexion_session.php"><button type="button" class="btn btn-danger float-right"><i class="fas fa-sign-out-alt"></i> Se déconnecter</button></a>';
    echo'</div>';
}
else {
}
?>

<head>
    <title>InstaDog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,500,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="article.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <?php require 'connexion.php';
    $appliBD = new Connexion();
    $article = $appliBD->getArticleById(1);
    $commentaire = $appliBD->getListeCommentaire(1);
    
    $article_Id = $appliBD->getListeArticle(2);

    ?>
</head>

<body>
    <!-- ////HEADER////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <?php
    include 'header.php';
    ?>
    <!-- ////Photo Article////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card mt-5"  style="width:750px">
                <img class="card-img-top"
                    src= <?php echo $article->getImage();  ?>
                    alt="Lights" style="width:100%" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title"><i class="fas fa-paw"></i>Chien</h4>
                    <p class="card-text"><?php echo $article->getTexte(); ?></p>
                </div>
            </div>
        </div>
    </div>


<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////777-->
<?php
    echo'<div class="container">
        <div class="container mt-5">';
        foreach($commentaire as $value){
            echo'<h3><i class="fas fa-comments"></i> Commentaires</h3>
            <div class="media border p-3 bg-white">
                <img src="https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Fcdn3.iconfinder.com%2Fdata%2Ficons%2Fbusiness-round-flat-vol-1-1%2F36%2Fuser_account_profile_avatar_person_student_male-512.png&f=1"
                    alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                <div class="media-body">
                    <h4>'.$value->getLogin().';</h4>
                    <small><i><i class="far fa-clock"></i>'.$value->getDateCommentaire().';</i></small>
                    <p><'.$value->getTexte().';</p>
                </div>
            </div>';
          }
        echo'</div>
    </div>';
?>
<!--///Inserer Commentaires///////////////////////////////////////////////////////////////////////////////////////////////////////// -->

    <div class="container mt-3">
        <form  action="formulaire_action_commentaire.php" method="post" class="needs-validation formPadding" novalidate>
            <div class="form-group">
                <label for="commentaire"><i class="fas fa-comment-medical"></i> Comment:</label>
                <textarea class="form-control" rows="5" id="commentaire" name="texte" placeholder="Entrer un commentaire" value="" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-comment-medical"></i> Submit</button>
        </form>
    </div>

    <!-- ////////Autres Articles////////////////////////////////////////////////////////////////////////////////////// -->
<?php
    echo '<div class="container mb-3">
        <h3 class="text-center mt-3 text-decoration">Autres Articles</h3>';

        echo'<div class="d-flex justify-content-center align-items-center">';
            foreach($article_Id as $articles){
          echo'<div class="card mt-5 mr-4" style="width:100px">
                <img class="card-img-top"
                     src="'.$articles->getImage().'";
                     alt="Lights" style="width:100%" height="90" alt="Card image">
            </div>';
          }
          echo' </div>
  </div>';
?>
<!-- /////Footer////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <?php
    include 'footer.php';
    ?>
</body>
</html>