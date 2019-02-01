<?php

/////////MOT DE PASSE SECURISEE AVEC PHP 5.5////////////////////////////////////////////////////////////////////////////////

// Crée une clé de hachage pour un mot de passe
// PASSWORD_BCRYPT est utilisée pour créer une nouvelle table de hachage de mot de passe 
// en utilisant l'algorithme CRYPT_BLOWFISH.

function password_bcrypt() {
    $pass = 'Mot de passe'&#160;;
    // On augmente le coût (cost) de l'algorithme le rendant par la même occasion plus lent et donc plus dur à « brute-forcer ».
    $hash = password_hash($pass,PASSWORD_BCRYPT,['cost' => 13])&#160;;
}

////////COMPARER UN MOT DE PASSE ET UN HACHE////////////////////////////////////////////////////////////////////////////////

// Pour déterminer le coût de l'algorithme idéal
function getOptimalCost($timeTarget)
{ 
    $cost = 9;
    do {
        $cost++;
        $start = microtime(true);
        password_hash("test", PASSWORD_BCRYPT, ["cost" => $cost]);
        $end = microtime(true);
    } while (($end - $start) < $timeTarget);
    
    return $cost;
}

// On choisit en général un temps d'exécution entre 0,1 s et 0,5 s ; 
// C'est le bon compromis entre sécurité et attente de l'utilisateur.
echo getOptimalCost(0.3);

//////////VERIFIER UN HACHE////////////////////////////////////////////////////////////////////////////////////////////////

// Vérifie qu'un mot de passe correspond à un hachage
if(password_verify('ADMIN', '$2a$10$GlvaE1qXuYE6O/ICVtPTeOf3QwE6QNB2quHgqpbK2JKzDYCNnyAL6')) {
    // valide
    echo 'OK';
} else {
    // invalide
    echo 'ERREUR';
}

// Vérifie qu'un mot de passe correspond à un hachage
if (password_verify($pass, $hash)) {
    // Vérifie que le hachage fourni est conforme à l'algorithme et aux options spécifiées
    if (password_needs_rehash($hash, $algorithm, $options)) {
        $hash = password_hash($pass, $algorithm, $options);
    }
}

?>