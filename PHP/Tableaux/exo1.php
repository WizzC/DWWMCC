<?php
$notes = [] ;

for( $i=0 ; $i<9 ; $i++ ){
    $saisie = readline( "note : ") ;
    $notes[$i] = $saisie ;

}
$moyenne = array_sum($notes) / count($notes) ;
echo ("La moyenne est de " . $moyenne );




?>