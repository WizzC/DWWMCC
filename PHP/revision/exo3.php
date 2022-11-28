<?php
// Sert a initialiser la boucle while
$variablefin = 10;
// Sert de compteur
$compteur = 0;
// Cette boucle sert a demander un nombre a l'utilisateur et a verifier que l'utilisateur a bien rentrer un nombre demandé
do{
    $variabledepart = readline("Entrez un nombre entre 100 et 1000 : ");
}while($variabledepart < 100 || $variabledepart > 1000);
// Cette boucle sert a se que la variablefin est égale a la variabledebut tout en comptent le nombre d'itérations 
do{
    $variablefin = rand(100,1000);
    $compteur++;
}while($variabledepart != $variablefin);

echo "Le nombre d'itérations est de : " . $compteur ;



?>