<?php
require_once "model.class.php";
require_once "mangas.class.php";
class MangaManager extends Model{
    private $mangas;

    public function ajoutMangas($manga)
    {
        $this->mangas[]=$manga;
    }
    public function getMangas(){return $this->mangas;}
    public function setMangas($mangas){$this->mangas = $mangas;}

    public function chargementMangas(){
        $req = $this->getBdd()->prepare("SELECT * FROM manga");
        $req->execute();
        $mesMangas= $req->fetchALL(PDO::FETCH_ASSOC); 
        $req->closeCursor();
        
        foreach($mesMangas as $manga){
            $l = new Manga($manga['id'],$manga["image"],$manga['nomAnime'],$manga['date'],$manga['style'],$manga['auteur']);
            $this->ajoutMangas($l);
        }      
    }
    public function getMangaById($id){
        for($i=0;$i<count($this->mangas);$i++){
            if($this->mangas[$i]->getId()==$id){
                return $this->mangas[$i];
            }
        }
    }
}