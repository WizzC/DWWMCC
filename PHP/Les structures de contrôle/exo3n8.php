<?php
$nombre = readline("Nombre");
if($nombre>=30){
    $nombre=0.10*10+0.09*20+0.08*($nombre-30);
    echo("La facture est de ") .$nombre . ("euro");
}
elseif($nombre>=20){
    $nombre=0.10*10+0.09*($nombre-10);
    echo("La facture est de ") .$nombre . ("euro");
}
else{
    $nombre=0.10*$nombre;
    echo("La facture est de ") .$nombre . ("euro");
}
    




?>