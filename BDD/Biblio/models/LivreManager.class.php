<?php
require_once "Model.class.php";
require_once "livre.class.php";
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
            $l = new Livre($livre['id'],$livre["titre"],$livre['nbPages'],$livre['image']);
            $this->ajoutLivres($l);
        }      
    }
    public function getLivreById($id){
        for($i=0;$i<count($this->livres);$i++){
            if($this->livres[$i]->getId()==$id){
                return $this->livres[$i];
            }
        }
    }
}