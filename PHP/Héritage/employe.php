<?php
class Employe{
    protected string $nom ;
    protected string $prenom;
    protected string $numSecu;
    protected float $salaire;
    protected string $job;

    public function __construct($nom,$prenom,$numSecu,$salaire,$job)
    {
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->numSecu=$numSecu;
        $this->salaire=$salaire;
        $this->job=$job;
    }
    public function getNom(){return $this->nom;}
    public function getPrenom(){return $this->prenom;}
    public function getNumSecu(){return $this->numSecu;}
    public function getSalaire(){return $this->salaire;}
    public function getJob(){return $this->job;}

    public function setNom(){return $this->nom;}
    public function setPrenom(){return $this->prenom;}
    public function setNumSecu(){return $this->numSecu;}
    public function setSalaire(){return $this->salaire;}
    public function setJob(){return $this->job;}

    public  function __toString()
    {
    $texte = $this->nom . " " . $this->prenom ." a pour numéro de sécu " . $this->numSecu . " est touche un salaire de " . $this->salaire . " en tant que " . $this->job . "\n";
        
     
     return $texte;
    }


    public function effectueSonJob(){
        if($this->job == "soudeur"){
            $sonJob = "Le soudeur réalise des travaux d'assemblage, d'installation, de modification et de maintenance de réseaux de tuyauteries ou d'élèments chaudronnés. En fonction des soudures, il travaille au chalumeau, au laser.." . "\n";
            return $sonJob;
        }
        elseif($this->job == "assistant mécanicien"){
                $sonJob = "L'aide mécanicien constitue le premier niveau dans l'emploi de mécanicien garagiste. courants selon les prescriptions du constructeur. Il effectue les réparations des circuits électriques simples concernant l'éclairage et la signalisation. en matière de sécurité, d'hygiène et d'environnement." . "\n";
            return $sonJob;
        }
        elseif($this->job == "magasinière"){
            $sonJob = "quelle que soit la nature des marchandises, le magasinier cariste planifie leur livraison, les réceptionne, les transporte, les stocke et les expédie. À l'arrivée des camions, il décharge les marchandises, vérifie les quantités, trie et classe les produits." . "\n";
            return $sonJob;
        }
    }
}


?>