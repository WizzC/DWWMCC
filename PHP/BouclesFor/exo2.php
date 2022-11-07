<?php

$nombre1 = readline("ecrire un 1er nombre : ");


echo "Les 5 nombres précédants sont" . "\n";

for($i=1;$i<=5;$i++){

echo $nombre1-$i . "\n";
}


echo "Les 5 nombres suivants sont" . "\n";

for($i=1;$i<=5;$i++){
    
    echo $nombre1+$i . "\n";

}



?>