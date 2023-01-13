<?php

$nombre = rand( 1 , 20);
if($nombre >= 16){
    echo("Il est compris entre 16 et 20 ") ;
}
elseif($nombre >= 11){
    echo("Il est comrpis entre 11 et 15 ") ;
}
elseif($nombre >= 6){
    echo("Il est compris entre 6 et 10") ;
}
else{
    echo("Il est compris entre 1 et 5");
}


?>