<?php

/////////MOT DE PASSE SECURISEE AVEC PHP 5.5////////////////////////////////////////////////////////////////////////////////

// Crée une clé de hachage pour un mot de passe
// PASSWORD_BCRYPT est utilisée pour créer une nouvelle table de hachage de mot de passe
// en utilisant l'algorithme CRYPT_BLOWFISH.

$hash = password_hash("digital2018", PASSWORD_BCRYPT);
echo $hash;
echo '<br>';
echo '<br>';

// méthode 3 pour calculer le bon coût avec notre serveur

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

if (password_verify('digital2018', $hash)) {
    echo 'Le mot de passe est valide !';
} else {
    echo 'Le mot de passe est invalide.';
}
?>
