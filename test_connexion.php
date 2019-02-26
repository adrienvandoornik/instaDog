

<?php



/*
session_start();

$_SESSION['email'] = "raul_seixas@gmail.com";
$_SESSION['motDePasse'] = "raul1";

echo $_SESSION['email'];
echo <a href="formulaire_action_user.php">link</a>*/

require 'connexion.php';
$appliBD = new Connexion();

$commentaires = $appliBD->getListeCommentaire(18);

print_r($commentaires);



//$appliBD->insertCommentaire("blabla", "2019-07-07", 6, 21 );


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

//$appliBD->insertChien("Pepito", "pepito", "2007-07-07", "Male", "Batard", "image/5830c711109dcfc4ec70955162ba0daf.jpg", 9);
//$appliBD->insertChien("Denis", "denis", "2007-07-07", "Male", "Bouledogue", "image/23722302_1654340134622428_2842479475226363596_n.jpg", 9);

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

/*
$email = $_POST['email'];

$motDePasse = $_POST['motDePasse'];

$utilisateurByEmai = $appliBD->getUtilisateurEmail($email)->getMotDePasse();

$email = $appliBD->getUtilisateurEmail($email)->getEmail();

$idProfilHash = $appliBD->getUtilisateurEmail($email)->getId();

if(password_verify($motDePasse, $hash)) {

  $utilisateur_id = $appliBD->getUtilisateur($idProfilHash);
  $email = $utilisateur_id->getEmail();
  $motDePasse = $appliBD->getUtilisateurEmail($email)->getMotDePasse();

  if(isset($_POST['email']) && isset($_POST['motDePasse'])){
      if ($email == $_POST['email'] && $motDePasse == $_POST['motDePasse']){

          session_start();
          $_SESSION['email'] = $_POST['email'];
          $_SESSION['motDePasse'] = $_POST['motDePasse'];

          header('Location: profil_user.php?id='.$idProfilHash);
      } else {
          header ('location: se_connecter.php');
      }
  }
}
*/


?>
