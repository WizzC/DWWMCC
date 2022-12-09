<?php
// require "classClient.php";

class Commande{
    private string $numeroCommande;
    private $client;
    private $listeLigneCommande;

    public function __construct($numeroCommande,$client,$listeLigneCommande)
    {
        $this->numeroCommande = $numeroCommande;
        $this->client = $client;
        $this->listeLigneCommande = $listeLigneCommande;
    }
public function getNumeroCommande(){return $this->numeroCommande;}
public function getClient(){return $this->client;}
public function getListeLigneCommande(){return $this->listeLigneCommande;}

public function setNumeroCommande($numeroCommande){return $this->numeroCommande=$numeroCommande;}
public function setClient($client){return $this->client=$client;}
public function setListeLigneCommande($listeLigneCommande){return $this->listeLigneCommande=$listeLigneCommande;}

public function affichageCommande(){
    echo $this->numeroCommande . " " . $this->client . " " . $this->listeLigneCommande . "\n";
}


}

?>