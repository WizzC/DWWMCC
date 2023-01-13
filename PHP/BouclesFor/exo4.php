<?php

// $nombre1 = readline("ecrire un 1er nombre : ");
// $nombre2 = readline("ecrire un 2e nombre : ");
// $nombre3 = readline("ecrire un 3e nombre : ");
// $nombre4 = readline("ecrire un 4e nombre : ");
// $nombre5 = readline("ecrire un 5e nombre : ");


// echo "Le plus grand nombre est " . max($nombre1, $nombre2, $nombre3, $nombre4, $nombre5 ) . "\n";
// echo "Le plus petit nombre est " . min($nombre1, $nombre2, $nombre3, $nombre4, $nombre5 );



$saisie = readline("écrire un nombre");
$max = $saisie ;
$min = $saisie ;
for($i = 1; $i<=4 ; $i++ ){
    $saisie = readline("écrire un nombre");
    if ( $max <= $saisie ){
        $max = $saisie ;
    }
    if ( $min >= $saisie){
        $min = $saisie ;
    }

}
echo "Le plus grand nombre est " . $max . "\n";
echo "Le plus petit nombre est " . $min ;


?>