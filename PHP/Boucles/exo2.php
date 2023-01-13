<?php
$nombre = readline ("Donnez un nombre entre 10 et 20 ");
while($nombre<10 || $nombre>20){
    if($nombre<10){
        echo $nombre = readline (" plus grand ");
    }
    if($nombre>20){
        echo $nombre = readline (" plus petit ");
    }

}
echo("Bon")


?>