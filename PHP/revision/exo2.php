<?php
// Sert a initialiser la boucle while
$variablefin = 1;
// Sert de compteur
$compteur = 0;
// Sert a demander un nombre a l'utilisateur
$variabledepart = readline("Entrez un nombre entre 100 et 1000 : ");
// Cette boucle sert a verifier que l'utilisateur a bien rentrer un nombre demandé
while($variabledepart < 100 || $variabledepart > 1000){
    $variabledepart = readline("Entrez un nombre entre 100 et 1000 : ");
}

// Cette boucle sert a se que la variablefin est égale a la variabledebut tout en comptent le nombre d'itérations 
while($variabledepart != $variablefin){
    $variablefin = rand(100,100000000);
    $compteur++;
   
}
echo "Le nombre d'itérations est de : " . $compteur ;



?>