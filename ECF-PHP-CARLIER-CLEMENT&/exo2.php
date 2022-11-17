<?php
// Sert a initialisé la boucle while
$reponse = 1;
// Sert a poser la question jusqu'à se que l'utilisateur veuille stoper
while($reponse != "N"){
    // Sert  a avoir le nombre 
    $nombre1 = readline("Entree le nombre pour lequel vous voulez la table de multiplication : ");
// Sert a faire la table de multiplication
for($i = 1 ; $i<11 ; $i++){
    $resultat = $nombre1 * $i;
    echo $nombre1 . " * " . $i . " = " . $resultat . "\n";
}
// Sert a stoper la boucle
    $reponse = readline("Voulez-vous continuez ? ");
 
}

?>