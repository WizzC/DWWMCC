<?php

class LigneCommande{
    private  $produit;
    private int $qte ;

    public function __construct($produit,$qte)
    {
        $this->produit=$produit;
        $this->qte=$qte;
    }
    public function getProduit(){return $this->produit;}
    public function setProduit($produit){return $this->produit=$produit;}
    public function getQte(){return $this->qte;}
    public function setQte($qte){return $this->qte=$qte;}
    
public function affichage(){
    echo $this->produit ." " . $this->qte . "\n";
}

    public function calculTotalTTC($qte,$produit){
        $nombre=$qte*$produit->getPrixUnitaireTTC();
        return $nombre;
    }
}


?>