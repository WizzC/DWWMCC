<?php
$pos = 0 ;
$nombreval = [1,20,18,15,12,1,3,3];

for( $i=0; $i<count ($nombreval) ; $i++ ){
    $moyenne = array_sum($nombreval) / count($nombreval) ;
  if ( $nombreval[$i] >= $moyenne ){
        $pos = $pos +1 ;

    }
    }

echo "La moyenne est de " . $moyenne . "\n";
echo "Le nombre de note supérieures a la moyen est de : " . $pos ;


?>