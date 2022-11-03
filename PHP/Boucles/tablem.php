<?php
$nombre1 = readline("Donnez chiffre : ");
$nombre3 = 1;
$nombre4 = $nombre1;
while($nombre3 !== 11){
    $nombre1 = $nombre4 * $nombre3 ;    
    echo(" " . $nombre4 . "x" . $nombre3 . "=" . $nombre1 ."\n");
    $nombre3 = $nombre3+1 ;
    
}



?>