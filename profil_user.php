
<?php
/*
session_start();
if (!isset($_SESSION['id'])){
    header ('location: se_connecter.php');
    exit;
}*/
?>

<!DOCTYPE html>
<html lang="fr">


<head>
    <title>INSTADOG - Communauté de chiens</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="profil_user.css">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,500,900" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
    <?php require 'connexion.php';
    $appliBD = new Connexion();
    $utilisateur_id = $appliBD->getUtilisateur($_GET['id']);
    $listeChien = $appliBD->getListeChien($_GET['id']);
  
    ?>
</head>

<body>

<!-- ////HEADER////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<?php
    include 'header.php';
?>

<!-- ///Donnees du User////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

    <div class="jumbotron text-center pt-5 pb-5">
        <h2 class="title" style="font-size:3vw;"><?php echo $utilisateur_id->getPrenom(); ?> <?php echo $utilisateur_id->getNom(); ?></h2>
        <h6><span aria-hidden="true"></span><i class="fas fa-user-circle"></i> Mon Profil Utilisateur</h6>
    </div>

    <div class="container text-center bg-white">
        <p><i class="fas fa-id-card"></i> Mes données personnelles:</p>
        <br>
        <div class="row">
            <div class="col-md-4 col-lg-4">
                <table class="table table-hover text-left">
                    <tbody>
                        <tr>
                            <th scope="row"><i class="fas fa-user-circle"></i> NOM</th>
                            <td><?php echo $utilisateur_id->getNom(); ?> <button type="button" class="btn btn-link"><i class="far fa-edit"></i>
                                    modifier</button></td>
                        </tr>
                        <tr>
                            <th scope="row"><i class="far fa-user-circle"></i> PRENOM</th>
                            <td><?php echo $utilisateur_id->getPrenom(); ?>  <button type="button" class="btn btn-link"><i class="far fa-edit"></i>
                                    modifier</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="cocol-md-4 col-lg-4">
                <table class="table table-hover text-left">
                    <tbody>
                        <tr>
                            <th scope="row"><i class="far fa-envelope"></i> EMAIL</th>
                            <td><?php echo $utilisateur_id->getEmail();?><button type="button" class="btn btn-link"><i
                                        class="far fa-edit"></i> modifier</button></td>
                        </tr>
                        <tr>
                            <th scope="row"><i class="fas fa-key"></i> MOT DE PASSE</th>
                            <td>****** <button type="button" class="btn btn-link"><i class="far fa-edit"></i>
                                    modifier</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="cocol-md-4 col-lg-4">
                <table class="table table-hover text-left">
                    <tbody>
                        <tr>
                            <th scope="row"><i class="fas fa-theater-masks"></i> PSEUDO</th>
                            <td><?php echo $utilisateur_id->getLogin();?><button type="button" class="btn btn-link"><i class="far fa-edit"></i>
                                    modifier</button></td>
                        </tr>
                        <tr>
                            <th scope="row"><i class="far fa-clock"></i> DERNIERE CONNEXION</th>
                            <td>22/01/2019<button type="button" class="btn btn-link"><i class="far fa-edit"></i>
                                    modifier</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ///Formulaire Ajouter Chien/////////////////////////////////////////////////////////////////////////////////////////////// -->

        <h3><i class="fas fa-dog"></i> MES CHIENS</h3>
        <p><em>Ma liste de chiens</em></p>
        <p><button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="collapse"
                data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                <i class="far fa-plus-square"></i> Ajouter un chien
            </button></p>
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                <div class="row">

                    <form method="post" action="formulaire_action_dog.php" enctype="multipart/form-data" class="needs-validation formPadding" novalidate >
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01"><i class="far fa-user-circle"></i> Surnom</label>
                                <input type="text" name="surnom" class="form-control" id="validationCustom01" placeholder="Entrer un surnom"
                                    value="" required>
                                    <div class="valid-feedback">Validé!</div>
                                    <div class="invalid-feedback">Rentrer un surnom</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom02"><i class="fas fa-dog"></i> Nom de l'élevage</label>
                                <input type="text" name="nomElevage" class="form-control" id="validationCustom02" placeholder="Entrer un nom d'élevage"
                                    value="" required>
                                    <div class="valid-feedback">Validé!</div>
                                    <div class="invalid-feedback">Rentrer un nom d'élevage</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01"><i class="far fa-clock"></i> Âge</label>
                                <input type="date" name="age" class="form-control" id="validationCustom01" placeholder="Entrer un âge"
                                    value="" required>
                                    <div class="valid-feedback">Validé!</div>
                                    <div class="invalid-feedback">Rentrer un age</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom02"><i class="fas fa-venus"></i> Sexe</label><br>
                                <input type="radio"  name="sexe" value="male">
                                <label class="mr-5" for="male">Mâle</label>
                                <input class="ml-5" type="radio" name="sexe"  value="femelle">
                                <label for="femelle">Femelle</label>
                                    <div class="valid-feedback">Validé!</div>
                                    <div class="invalid-feedback">Rentrer si le chien est un mâle ou une femelle</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom02"><i class="fas fa-dog"></i> Race</label>
                                <input type="text" name="race" class="form-control" id="validationCustom02" placeholder="Entrer une race"
                                    value="" required>
                                    <div class="valid-feedback">Validé!</div>
                                    <div class="invalid-feedback">Rentrer la race du chien</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom02"><i class="fas fa-camera-retro"></i> Photo</label><br>
                                 <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
                                 <input type="file" name="image" class="form-control-file border" />
                                 <div class="valid-feedback">Validé!</div>
                                <div class="invalid-feedback">Rentrer une image du chien</div>
                            </div>
                        </div>

                </div>

                <div class=" row justify-content-center mt-3">
                <div class="col-md-6 mb-3">
                    <button class="btn btn-primary btn-block"><i class="far fa-plus-square"></i> Ajouter un chien</button>
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

            </div>
        </div>
    </div>

<!-- ////Liste de Chien//////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<?php
echo   ' <div class="container">';
echo       ' <div class="row mb-3">';
  foreach($listeChien as $chien){
echo            '<div class="col-sm-4">';
        echo       ' <div class="card">';
              echo      '<div class="card-body text-center">';
                  echo      '<img class="card-img-top" src="'. $chien->getImage() .'" alt="Card image cap" width="300"
                            height="300">';
                  echo    '  <h5 class="card-title"><i class="fas fa-paw"></i> '. $chien->getSurnom().'</h5>';
                  echo    '  <p class="card-text">'. $chien->getRace().' / '. $chien->getSexe().' / '. $chien->getAge().' / '. $chien->getNomElevage().'</p>';
                        echo '<a href= profil_chien.php?id='. $chien->getId().' class="btn btn-primary" ><i
                                class="fas fa-chevron-right"></i> Voir profil</a>';
                echo    ' </div>
                       </div>
                   </div>';
}
      echo   ' </div>
        </div>';
?>

<!-- /////Footer////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<?php
include 'footer.php';
?>

</body>
</html>
