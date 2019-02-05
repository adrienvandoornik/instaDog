<?php

/////////MOT DE PASSE SECURISEE AVEC PHP 5.5////////////////////////////////////////////////////////////////////////////////

// Crée une clé de hachage pour un mot de passe
// PASSWORD_BCRYPT est utilisée pour créer une nouvelle table de hachage de mot de passe
// en utilisant l'algorithme CRYPT_BLOWFISH.

// méthode 1
echo password_hash("digital2018", PASSWORD_DEFAULT);
echo '<br>';
echo '<br>';

// méthode 2 avec le coût
$options = ['cost' => 12,];
echo password_hash("digital2018", PASSWORD_BCRYPT, $options);
echo '<br>';
echo '<br>';
 // On sauvegarde la photo sur le serveur dans le dossier img // Chaque photo aura pour nom photo-DDMMYYYYHHmmss.jpeg par exemple ; //  on ajoute un timestamp au nom pour le rendre unique $suffixe = date("YmdHis"); $uploadedFileName = $_FILES["photo-promenade"]["name"]; $uploadedFile = new SplFileInfo($uploadedFileName); $fileExtension = $uploadedFile->getExtension(); $destinationFolder = $_SERVER['DOCUMENT_ROOT']."/projets/Promenades/"; $destinationName = "img/photo-".$suffixe.".".$fileExtension; if(move_uploaded_file($_FILES["photo-promenade"]["tmp_name"], $destinationFolder.$destinationName)){     echo "<br/> fichier enregistré avec succes"; } // On insère la promenade // Si l'insertion s'est bien passée, on récupère l'id de la promenade $id = $appli->insertPromenade($titre,$auteur,$pays,$ville,$codePostal,$depart,$arrivee,$description,$destinationName); // Puis on redirige vers la page particulière de cette promenade header('Location: promenade.php?id='.$id); exit;
// méthode 3 pour obtenir le bon coût avec notre serveur

/*
$timeTarget = 0.05; // 50 millisecondes

$cost = 8;
do {
    $cost++;
    $start = microtime(true);
    password_hash("digital2018", PASSWORD_BCRYPT, ["cost" => $cost]);
    $end = microtime(true);
} while (($end - $start) < $timeTarget);

echo "Valeur de 'cost' la plus appropriée : " . $cost;
*/

//////////VERIFIER UN HACHE////////////////////////////////////////////////////////////////////////////////////////////////

// Vérifie qu'un mot de passe correspond à un hachage
$hash = '$2y$12$lN4bD4I2fQZj1Gyv7YlWnus6fWH.fN871YiH4Wt6aQye0DuhXSfZa';

if (password_verify('digital2018', $hash)) {
    echo 'Le mot de passe est valide !';
} else {
    echo 'Le mot de passe est invalide.';
}
?>
