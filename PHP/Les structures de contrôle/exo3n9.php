<?php

$age = readline("Age: ");
$sexe = readline( "Sexe: ");

if($sexe=="H"&&$age>=20||$sexe=="F"&&$age>=18&&$age<=35){
echo("Imposable");
}else {
    echo("non imposable");
}


?>