

<?php

require 'connexion.php';
$appliBD = new Connexion();




/*
if($appliBD->getConnexion() != null){
    echo 'Connexion BD reussie';

} else {
    echo 'Connexion BD échouée';
}
*/

/*$donneesUtilisateur = $appliBD->insertUtilisateur("Mascarenhas", "Gutembergue","2019-02-01","gmascarenhas3001@gmail.com","guto1978", "guto");
echo $donneesUtilisateur;*/


/*$select_id = $appliBD->getUtilisateurById(4);

foreach ($appliBD-> getUtilisateurById(4) as $value) {


  /*  echo"<input type='checkbox'>" $value->nom . ' '.$value->prenom . '' .$value->dateConnexion. '' . $value->email. '' . $value->motDePasse. '' . $value->login."<input> . '<br>';
*/


/*echo $value->prenom;*/

$utilisateur_id = $appliBD->getUtilisateur(4);

echo $utilisateur_id->getEmail();
echo "<br>";
var_dump($utilisateur_id);




?>
