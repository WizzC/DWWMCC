<?php
require "classClient.php";
require "classLigneCommande.php";
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
public function getListeLigneCommande(){return $this;}
}

?>