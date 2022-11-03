<?php 
$nombre1 = readline("Donnez un nombre ") ; 
$nombre2 = $nombre1+10 ;
while ($nombre1 !== $nombre2){
    $nombre1 = $nombre1+1 ;
    echo("\n" . $nombre1 ) ;
}


?>