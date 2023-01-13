<?php
// Permet de lancer la boucle while
$pays = 1;
// Verifie si la valeur pays est bien un pays dans la liste
while($pays != "Angleterre" && $pays != "USA" && $pays != "Canada" && $pays != "Japon" 
    && $pays != "Mexique" && $pays != "Maroc" && $pays != "Angleterre" && $pays != "Inde" ){
    $pays = readline("Entrez le pays souhaité : ");
}
// Permet d'avoir le montant a convertir 
$argent = readline(("Entrez le montant en euro a convertir : "));
// A l'aide des if on convertie la monaie dans celle choisie
if($pays == "Angleterre"){
    $euro = $argent * 0.88;
    echo "Votre montant de " . $argent . " équivaut a " . $euro . " Livre sterling";
}

if($pays == "USA"){
    $euro = $argent * 1.04;
    echo "Votre montant de " . $argent . " équivaut a " . $euro . " Dollar américain";
}

if($pays == "Canada"){
    $euro = $argent * 1.38;
    echo "Votre montant de " . $argent . " équivaut a " . $euro . " Dollar canadien";
}

if($pays == "Japon"){
    $euro = $argent * 145.05;
    echo "Votre montant de " . $argent . " équivaut a " . $euro . " Yen";
}
if($pays == "Mexique"){
    $euro = $argent * 20.12;
    echo "Votre montant de " . $argent . " équivaut a " . $euro . " Peso mexicain";
}

if($pays == "Maroc"){
    $euro = $argent * 11.16;
    echo "Votre montant de " . $argent . " équivaut a " . $euro . " Dirham marocain";
}

if($pays == "Inde"){
    $euro = $argent * 84.42;
    echo "Votre montant de " . $argent . " équivaut a " . $euro . " Roupie indienne";
}
?>