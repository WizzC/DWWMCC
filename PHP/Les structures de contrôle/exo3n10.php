<?php
$annee = readline("Année");
if(($annee/4)&&($annee/400)){
    echo("bissextile");
    

}
elseif(($annee/4)&&($annee/100)){
    echo("nonbissextile");
}
elseif($annee/4){
    echo("bissextile");
}
else
    echo("nonbissextile");




?>