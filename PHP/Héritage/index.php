<?php
require "cadre.php";

$employe1 = new Employe("Neymar","Jean","1850389546458",1500.56,"soudeur");
$employe2 = new Employe("Simon","Jeremy","179028955812",1700.47,"assistant mecanicien");
$employe3 = new Employe("Odile","Deray","285097154678",1900.14,"magasinière");
$employe1->setNom("455");
$employes = [$employe1,$employe2,$employe3];


$cadre = new Cadre ("Alain","Deloin","1840259453666",2100.23,"chef maintenance",[$employe1,$employe3]);

foreach($employes as $employe){
    echo $employe->__toString() . $employe->effectueSonJob();
}
echo $cadre->__toString();
echo $cadre->augmentation($cadre);

echo $employe2->__toString()


?>