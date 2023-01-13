<?php
// Sert a initialisé la boucle while
$continuer = 1;
// Sert a poser la question jusqu'à se que l'utilisateur veuille stoper
while($continuer != "N"){
// Demande a l'utilisateur quel de rentrer un nombre
$rayon = readline("Quel est le rayon du cercle : ");
// calcul du circonference
$circonference = 2 * pi() * $rayon ;
// calcul la surface
$surface = pi() * ($rayon * $rayon);
// ecrie la surface et la circonférence
echo "Sa circonférence est de : " . round($circonference,2) . "\n" ;
echo "Sa surface est de : " . round($surface,2) . "\n" ;
// renitialise la variable pour pouvoir faire la seconde boucle while pour savoir si l'utilisateur veut continuer
$continuer = 1 ;
while($continuer != "N" && $continuer != "O"){
$continuer = readline("Voulez vous faire un autre calcul (O/N)");
    }

}
?>