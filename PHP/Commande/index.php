<?php
require "classProduit.php";
require "classLigneCommande.php";
require "classClient.php";
require "classCommande.php";
$produit1 = new Produit ("mars","barre chocolatée", "19596959488903003",6);
$produit2 = new Produit ("twix","barre chocolatéer","93890393229902",12);
$produit3 = new Produit ("kinder bueno","un cœur fondant aux noisettes et une fine gaufrette croustillante enrobée de chocolat","98765903456",1);
$produit4 = new Produit ("kinder country","barre de céréales et barre au chocolat","67489387789988844",14);
$produit5 = new Produit ("petit prince","biscuit rond dentelé fourré au chocolat ou à la vanille","9800092224442111",15);
$produits= Produit::getProduit();

foreach($produits as $element){

    echo $element->afficherSesInfos();
}
?>