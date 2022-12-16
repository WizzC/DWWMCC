<?php
echo "Racine du l'équation du 2nd degré" . "\n" . "Y = ax² + bx + c " . "\n" ;
// Sert a initialisé la boucle while
$reponse = 1 ;
// Sert a poser la question jusqu'à se que l'utilisateur veuille stoper
while($reponse != "N" ){
    // Demande les valeurs 
    $valeura = readline("Quelle est la valeur de a : ");
    $valeurb = readline("Quelle est la valeur de b : ");
    $valeurc = readline("Quelle est la valeur de c : ");
    // Calcul le Delta
    $delta = ($valeurb * $valeurb) - (4 * $valeura * $valeurc ) ;
    // Si le delta est négatif
    if($delta < 0){
        echo "L'équation ne possède pas de racine réelle : " . "\n Delta = " . $delta . "\n";
    }
    // Si le delta est 0
    if($delta == 0){
        $x1 = -($valeurb / (2*$valeura));
        echo "L'équation possède une racine double : " . "\n Delta = " . $delta . "\n" . " X1 = X2 = " . $x1 . "\n";
    }
    // Si le delta est positif
    if($delta > 0){
        $x1 = -( - $valeurb + sqrt( $delta ) ) / 2 * $valeura ;
        $x2 = -( - $valeurb - sqrt( $delta ) ) / 2 * $valeura ;
        echo "L'équation possède 2 racines distinctes : " . "\n Delta = " . $delta . "\n" . "L'équation s'annule pour : \nX1 = " . $x1 . "\n" . "X2 = " . $x2 . "\n";
    }
    // renitialise la variable pour pouvoir faire la seconde boucle while pour savoir si l'utilisateur veut continuer
    $reponse = 1;
    // Verifie que l'utilisateur marque bien O ou N 
    while($reponse != "N" && $reponse != "O"){
        $reponse = readline("Voulez vous faire un autre calcul (O/N)");
            }
}
echo "Au revoir et & bientot"


?>