<!DOCTYPE html>
<html lang="fr">

<head>
  <title>InstaDog</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="galeriePhoto.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,500,900" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <?php require 'connexion.php';
    $appliBD = new Connexion();

    ?>
</head>

<body>
  <!-- ////HEADER////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<?php
include 'header.php';

//Galerie de Photo//////////////////////////////////////////////////////////////////////////////////////////////////////////////7

$recherche = "";
if ($_POST != null) {
    $recherche = $_POST['recherche'];
}
$afficherChien = $appliBD->rechercheByRace($recherche);

echo '<div class="row no-gutters">';
foreach ($afficherChien as $chien) { // A completer indentation
    echo '<div class="col-md-4 col-lg-4">';
    echo '<a href= profil_chien.php?id=' . $chien->getId() . '>';
    echo '<div class="square" style="background-image: url(' . $chien->getImage() . ')">';
    echo '<div class="card-img-overlay">';
    echo '<h4 class="card-title" style="font-size:3vw;">' . $chien->getSurnom() . '</h4>';
    echo '<p class="card-title" style="font-size:1.2vw;"><i class="fas fa-paw"></i> ' . $chien->getRace() . '</p>';
    echo '</div>';
    echo '</div>';
    echo '</a>';
    echo '</div>';
};
echo '</div>';

/////Footer//////////////////////////////////////////////////////////////////////////////////////////////////////////
    include 'footer.php';
    ?>

</body>
</html>
