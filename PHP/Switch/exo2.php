<?php
$nombre1 = readline("entrez un nombre : ");
$nombre2 = readline("entrez un nombre : ");
echo " 1. Addition \n 2. Soustraction \n 3. Multiplication \n 4. Division \n";
$ope = readline("entrez une opération : " );

switch ($ope){
    case "1" :
        $nombre3 = $nombre1 + $nombre2 ;
        
        break;
    case "2" :
        $nombre3 = $nombre1 - $nombre2 ;
        break;
    case "3" :
        $nombre3 = $nombre1 * $nombre2 ;

         break;
    case "4" :
        $nombre3 = $nombre1 / $nombre2 ;
        break;
    }
    
    echo $nombre3 ;

?>