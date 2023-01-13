<?php
$nombre1 = readline("nombre");
$nombre2 = readline("nombre");
$nombrea = $nombre1;
$nombreb = $nombre2;
while(($nombre1 * $nombre2) !==0 ){
if($nombre1 > $nombre2){
    $nombre1 = $nombre1 - $nombre2;
}
else{
    $nombre2 = $nombre2 - $nombre1;
}
}
if($nombre1 == 0){
    echo(("pgcm") . (($nombreb)/($nombre2)));
}
else{
    echo(("pgcm") .(($nombrea)/($nombre2)));
}



?>