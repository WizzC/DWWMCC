<?php
class Client{
    private string $nom;
    private string $prenom;
    private string $numeroClient;

    public function __construct($nom,$prenom,$numeroClient)
    {
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->numeroClient=$numeroClient; 
    }
    public function getNom(){return $this->nom;}
    public function setNom($nom){return $this->nom=$nom;}
    public function getPrenom(){return $this->prenom;}
    public function setPrenom($prenom){return $this->prenom=$prenom;}
    public function getNumeroClient(){return $this->numeroClient;}
    public function setNumeroClient($numeroClient){return $this->numeroClient=$numeroClient;}
}

?>