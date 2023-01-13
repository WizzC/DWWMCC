<?php



abstract class Personne{
    protected $nom;
    protected $prenom;

    public function __construct($nom,$prenom)
    {
        $this->nom=$nom;
        $this->prenom=$prenom;

    }
    public function getNom(){return $this->nom;}
    public function getPrenom(){return $this->prenom;}

    public function setNom($nom){$this->nom=$nom;}
    public function setPrenom($prenom){$this->prenom=$prenom;}

}

class Client extends Personne{
    private $adresse;

    public function __construct($nom,$prenom,$adresse)
    {
        parent::__construct($nom, $prenom);
        $this->adresse=$adresse;
    }
    public function getAdresse(){return $this->adresse;}
    
    public function setAdresse($adresse){$this->adresse=$adresse;}

    public function Coord(){
        return $this->nom . " " . $this->prenom . " " . $this->adresse . "\n";
    }

}

class Electeur extends Personne{
    private $bureauDeVote;
    private $voter;
    public function __construct($nom,$prenom,$bureauDeVote)
    {
        parent::__construct($nom, $prenom);
        $this->bureauDeVote=$bureauDeVote;
        $this->vote=true;
    }
    public function getBureauDeVote(){return $this->bureauDeVote;}
    public function getVote(){return $this->vote;}

    public function setBureauDeVote($bureauDeVote){$this->bureauDeVote=$bureauDeVote;}
    public function setVote($vote){$this->vote=$vote;}

    public function avoter(){
            if($this->vote){
                return $this->nom . " " . $this->prenom . " " . " a voté au bureau de vote de " . $this->bureauDeVote;
            }
            else{
                return $this->nom . " " . $this->prenom . " " . " n'a pas voté au bureau de vote de ". $this->bureauDeVote;
            }
    }
}

$client = new Client("Walid","Zemmour","18 rue des Noob");
echo $client->Coord();
$electeur = new Electeur("Walid","Lepen","GS");
echo $electeur->avoter();
echo $electeur->vote;
?>