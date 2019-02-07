

<?php

require 'connexion.php';
$appliBD = new Connexion();


/*
session_start();

$_SESSION['email'] = "raul_seixas@gmail.com";
$_SESSION['motDePasse'] = "raul1";

echo $_SESSION['email'];
echo <a href="formulaire_action_user.php">link</a>

require 'connexion.php';
$appliBD = new Connexion();*/


/*
$toutLesChiens = $appliBD->getAllChien();
foreach ($toutLesChiens as  $chiens) {
  echo $chiens->getSurnom();
}*/

/*
$hash = $appliBD->getUtilisateurEmail($_POST['email'])->getMotDePasse();
//echo $hash;

$idProfilHash = $appliBD->getUtilisateurEmail($_POST['email'])->getId();
//echo $idProfilHash;

if(password_verify($_POST['motDePasse'], $hash)) {
    header('Location: profil_user.php?id='.$idProfilHash);;
} else {
    echo 'ERREUR';
}*/



$hash = $appliBD->getUtilisateurEmail("raul_seixas@gmail.com")->getMotDePasse();
echo $hash;


$email = $appliBD->getUtilisateurEmail("raul_seixas@gmail.com")->getEmail();
echo $email;

$idProfilHash = $appliBD->getUtilisateurEmail("raul_seixas@gmail.com")->getId();
echo $idProfilHash;
/*
if(password_verify('raul1', $hash)) {
    header('Location: profil_user.php?id='.$idProfilHash);
} else {
    echo 'ERREUR';
}*/




/*
if($appliBD->getConnexion() != null){
    echo 'Connexion BD reussie';

} else {
    echo 'Connexion BD échouée';
}
*/

/*$donneesUtilisateur = $appliBD->insertUtilisateur("Mascarenhas", "Gutembergue","2019-02-01","gmascarenhas3001@gmail.com","guto1978", "guto");
echo $donneesUtilisateur;*/

/////get Utilisateur///////////////////////////////////////////////////////////////////////////////////////////////

/*$utilisateur_id = $appliBD->getUtilisateur(4);

echo $utilisateur_id->getEmail();
echo "<br>";
//var_dump($utilisateur_id);*/



//$appliBD->insertChien($_POST["surnom"], $_POST["nomElevage"], $_POST["age"], $_POST["sexe"], $_POST["race"], $file["image"], $utilisateur_Id);

$appliBD->insertChien("Rocky", "rocky2", "1991-07-07", "Male", "Labrador", "image/photochienTESTE.jpeg", 4);


/*$chienById = $appliBD->getChienById(2);
echo $chienById->getSurnom();*/

//$appliBD->insertArticle("image/cachorro.jpeg", "Tuca est un chien tres intelligent et vaillant", "2019-02-06", 2);

//$appliBD->insertCommentaire("Il est tout beau", "2019-02-06", 4, 1);



// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
/*session_start ();


// On récupère nos variables de session
if (isset($_SESSION['email']) && isset($_SESSION['motDePasse'])) {

  // On teste pour voir si nos variables ont bien été enregistrées
  echo '<html>';
  echo '<head>';
  echo '<title>Page de notre section membre</title>';
  echo '</head>';

  echo '<body>';
  echo 'Votre email est '.$_SESSION['email'].' et votre mot de passe est '.$_SESSION['motDePasse'].'.';
  echo '<br />';

  // On affiche un lien pour fermer notre session

}
else {
  echo 'Les variables ne sont pas déclarées.';
}*/




?>
