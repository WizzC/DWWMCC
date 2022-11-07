<?php
$nombre = readline("choisir un nombre pair et divisible : ");

while($nombre){
if($nombre % 3 == 0 && $nombre % 2 == 0){
    echo("Le nombre " . $nombre . " est divisible par 2 et par 3");
}

}


?>