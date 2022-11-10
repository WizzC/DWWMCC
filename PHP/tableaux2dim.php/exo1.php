<?php
$tab = array();
$max = 0;
for( $i=1 ; $i <=12 ; $i++){
    for( $j=0; $j<=8 ; $j++){
        $tab[$i.$j] = $nombre = rand(1,1000);
        if($nombre>$max){
            $max = $nombre;
            $jmax = $j ;
            $imax = $i;
        }
        echo $tab[ $i . $j ] . " ";
        
    }
    echo "\n";
}


echo  $max . " de position : " . $imax . "-" . $jmax;
?>