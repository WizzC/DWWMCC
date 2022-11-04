<?php
$nombre = rand( 1 , 20 );
if($nombre >14){
    echo ( $nombre . "\n" . "Hello");
}
elseif($nombre > 7){
    echo ( $nombre . "\n" . "Salut" );
}
else{
    echo ( $nombre .  "Bonjour" );
}

?>