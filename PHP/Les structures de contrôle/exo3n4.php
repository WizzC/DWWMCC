<?php
$nombre1 = readline("Nombre : ");
$nombre2 = readline("Nombre : ");
if((($nombre1<0)&&($nombre2<0))||($nombre1>0)&&($nombre2>0)){
echo("Positif");
}
elseif((($nombre1<0)&&($nombre2>0))||($nombre1>0)&&($nombre2<0)){
    echo("Négatif");
}
else echo ("0");



?>