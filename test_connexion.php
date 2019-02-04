

<?php

require 'connexion.php';
$appliBD = new Connexion();
//$utilisateur_Id = 4; // _SESSION["id"];




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

// $appliBD->insertChien("Tuca", "Tuca2", "1990-10-10", "Male", "Batard", "image/cachorro.jpeg", 4);







?>
