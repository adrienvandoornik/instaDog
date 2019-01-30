

<?php

require 'connexion.php';
$appliBD = new Connexion();





if($appliBD->getConnexion() != null){
    echo 'Connexion BD reussie';

} else {
    echo 'Connexion BD échouée';
} 

?>