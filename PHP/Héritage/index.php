<?php
require "cadre.php";

$employé1 = new Employe("Neymar","Jean","1850389546458",1500.56,"soudeur");
$employé2 = new Employe("Simon","Jeremy","179028955812",1700.47,"assistant mécanicien");
$employé3 = new Employe("Odile","Deray","285097154678",1900.14,"magasinière");

$employes = [$employé1,$employé2,$employé3];


$cadre = new Cadre ("Alain","Deloin","1840259453666",2100.23,"chef maintenance",[$employé1,$employé3]);

foreach($employes as $employe){
    echo $employe->__toString() . $employe->effectueSonJob();
}
echo $cadre->__toString();
echo $cadre->augmentation($cadre);

echo $employé2->__toString()


?>