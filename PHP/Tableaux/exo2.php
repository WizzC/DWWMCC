<?php
$neg = 0 ;
$pos = 0 ;
$nombreval = readline("Ecris ton nombre de valeur : ");
$tab = [] ;
for( $i=1; $i<=$nombreval ; $i++ ){
    $nombre = readline("Ecrire une valeur : ");
    $tab[$i] = $nombre ;
    if($nombre<0){
        $neg = $neg +1 ;

    }
    elseif($nombre>0){
        $pos = $pos +1 ;
        
    }
}
echo "il y a " . $neg . " nombre négatif" . "\n" ;
echo "il y a " . $pos . " nombre positi"  ;

?>