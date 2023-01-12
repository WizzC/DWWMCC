<?php
require_once "Model.class.php";

class LivreManager extends Model{
    private $livres;

    public function ajoutLivres($livre)
    {
        $this->livres[]=$livre;
    }
    public function getLivres(){return $this->livres;}
    public function setLivres($livres){$this->livres = $livres;}

    public function chargementLivres(){
        $req = $this->getBdd()->prepare("SELECT * FROM livre");
        $req->execute();
        $mesLivres= $req->fetchALL(PDO::FETCH_ASSOC); 
        $req->closeCursor();
        
        foreach($mesLivres as $livre){
            $l = new Livre($livre['id'],$livre['titre'],$livre['nbPages'],$livre['image']);
            $this->ajoutLivres($l);
        }
      
    }
}