<?php
$nombre1 = readline("entrez un nombre : ");
$ope = readline("entrez une opération : " );
$nombre2 = readline("entrez un nombre : ");

switch ($ope){

    case "+" :
        $nombre3 = $nombre1 + $nombre2 ;
        break;

    case "-" :
        $nombre3 = $nombre1 - $nombre2 ;
        break;

    case "*" :
        $nombre3 = $nombre1 * $nombre2 ;
         break;

    case "/" :
        $nombre3 = $nombre1 / $nombre2 ;
        break;
    }
    
    echo $nombre3 ;

?>