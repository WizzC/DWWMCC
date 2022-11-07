<?php

$nombre = readline("choisir un nombre divisible par 2 et par 3 : ");
$essai = 1 ;
while($nombre % 3 != 0 && $nombre % 2 != 0 || $nombre % 3 != 0 && $nombre % 2 == 0 || $nombre % 3 == 0 && $nombre % 2 != 0 ){
    
    if($nombre % 3 != 0 && $nombre % 2 == 0){
        echo("*******Essai numéro " . $essai . "*********" . "\n" . "Le nombre n'est pas divisible par 3" . "\n" );
        $nombre = readline("choisir un nombre divisible par 2 et par 3 : ");
    }

    elseif($nombre % 3 == 0 && $nombre % 2 != 0){
    echo("*******Essai numéro " . $essai . "*********" . "\n" . "Le nombre n'est pas pair !" . "\n" );
    $nombre = readline("choisir un nombre divisible par 2 et par 3 : ");
    }

    elseif($nombre % 3 != 0 && $nombre % 2 != 0){
        echo("*******Essai numéro " . $essai . "*********" . "\n" . "Le nombre n'est pas divisible par 3 et n'est pas pair" . "\n" );
        $nombre = readline("choisir un nombre divisible par 2 et par 3 : ");
    }
    
    $essai = $essai + 1;
}

    echo("*******Essai numéro " . $essai . "*********" . "\n" . "Le nombre est " . $nombre . " divisible par 2 et par 3 ");




?>