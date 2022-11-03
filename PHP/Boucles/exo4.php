<?php
$nombre1 = readline("nombre");
$nombre2 = readline("nombre");
while(($nombre1 * $nombre2) !==0 ){
if($nombre1 > $nombre2){
    $nombre1 = $nombre1 - $nombre2;
}
else{
    $nombre2 = $nombre2 - $nombre1;
}
}
if($nombre1 == 0){
    echo(("pgcd") . $nombre2);
}
else{
    echo(("pgcd") . $nombre1);
}



?>