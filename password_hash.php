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