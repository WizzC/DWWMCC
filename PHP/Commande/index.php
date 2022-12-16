<?php
require "classProduit.php";
require "classLigneCommande.php";
require "classClient.php";
require "classCommande.php";

$produit1 = new Produit ("001","Mars", "19596959488903003",6);
$produit2 = new Produit ("002","twix","93890393229902",12);
$produit3 = new Produit ("003","kinder bueno","98765903456",1);
$produit4 = new Produit ("004","kinder country","67489387789988844",14);
$produit5 = new Produit ("005","petit prince","9800092224442111",15);
$produits= Produit::getProduit();

<<<<<<< HEAD
$ligneCommande1 = new LigneCommande($produit1->getLibelle(),5);


$client1 = new Client("Carlier","Clément",001);


$commande1 = new Commande(001,$client1->getNom(),$client1->getNumeroClient());

=======
$ligneCommande1 = new LigneCommande();
$ligneCommande1->setProduit($produit1->getLibelle());
$ligneCommande1->setQte(5);

$client1 = new Client();
$client1->setNom("Clement");
$client1->setPrenom("vgz");
$client1->setNumeroClient("1");

$commande1 = new Commande();
$commande1->setNumeroCommande(1);
$commande1->setClient($client1);
$commande1->setListeLigneCommande($ligneCommande1);
>>>>>>> 3eb557910c70df121bf4f4c2b210179bf261079a

foreach($produits as $element){

    echo $element->afficherSesInfos();
<<<<<<< HEAD

    
}
$prixLot = 0 ;

foreach($produits as $element){
    echo $element->getDescription();
    $quantite = readline(" nombre de produit");
    $element->setPrixUnitaireTTC($element->getPrixUnitaireTTC()*$quantite);
    $prixLot = $prixLot+$element->getPrixUnitaireTTC();

}
echo $prixLot;
=======
    
}

// echo calculTotalTTC($ligneCommande1->getQte(),$produit1->getPrixUnitaireTTC());
>>>>>>> 3eb557910c70df121bf4f4c2b210179bf261079a


?>