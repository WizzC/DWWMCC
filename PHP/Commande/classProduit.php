<?php
class Produit{
    private static $produit=[];
    private string $libelle;
    private string $description;
    private string $reference;
    private float $prixUnitaireTTC;

    public function __construct($libelle,$description,$reference,$prixUnitaireTTC){
        $this->libelle=$libelle;
        $this->description=$description;
        $this->reference=$reference;
        $this->prixUnitaireTTC=$prixUnitaireTTC;
        self::$produit[]=$this;
    }
    
    public function getLibelle(){return $this->libelle;}
    public function setLibelle($libelle){return $this->libelle=$libelle;}
    public function getDescription(){return $this->description;}
    public function setDescription($description){return $this->description=$description;}
    public function getReference(){return $this->reference;}
    public function setReference($reference){return $this->reference=$reference;}
    public function getPrixUnitaireTTC(){return $this->prixUnitaireTTC;}
    public function setPrixUnitaireTTC($prixUnitaireTTC){return $this->prixUnitaireTTC=$prixUnitaireTTC;}
    public static function getProduit(){return self::$produit;}
    public static function setProduit(){return self::$produit;}
    
    public function afficherSesInfos(){
        echo $this->libelle . " " . $this->description . " " .  $this->reference . " " .  $this->prixUnitaireTTC . "\n" ;
    }

}




?>