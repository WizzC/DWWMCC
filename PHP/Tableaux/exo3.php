<?php
$tab = readline("nombre de valeur ");
$notes = [] ;

for( $i=1 ; $i<=$tab ; $i++ ){
    $saisie = readline( "note : ") ;
    $notes[$i] = $saisie ;

}
$somme = array_sum($notes);
 echo $somme ;

?>