<?php
$tab = readline("nombre de valeur ");
$notes = [] ;
$max = 1 ;

for( $i=1 ; $i<=$tab ; $i++ ){
    $saisie = readline( "note : ") . "\n" ;
    $notes[$i] = $saisie ;
     ;
    if ( $max <= $notes[$i] ){
        $max = $notes[$i] ;
        $imax = $i ;
       
    }
     

}
echo  $imax . "-" .  $max;




?>