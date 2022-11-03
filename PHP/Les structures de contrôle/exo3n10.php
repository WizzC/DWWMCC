<?php
$annee = readline("entrez une année : ");
$resultat ;
if($annee % 4 == 0){
    if($annee % 100 == 0){
        if($annee % 400 == 0){
            $resultat ="vrai";
        }
        else $resultat ="faux";
    }
}
else {
    $resultat ="faux";    
}

if($resultat =="vrai"){
    echo ("bissextile");
}
else {
    echo ("Non bissextile");
}




?>