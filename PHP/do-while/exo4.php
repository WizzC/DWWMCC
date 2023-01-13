<?php
 $nombre = readline ("Donnez un nombre entre 10 et 20 ");
do{
   
    if($nombre<10){
        echo $nombre = readline ("plus grand ") . "\n" ;
    }
    if($nombre>20){
        echo $nombre = readline ("plus petit ") . "\n" ;
    }
}
while($nombre<10 || $nombre>20);
echo "bon"




?>