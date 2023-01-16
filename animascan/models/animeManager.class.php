<?php
require_once "model.class.php";
require_once "anime.class.php";

class AnimeManager extends Model{
    private $listeAnime;

    public function ajoutAnime($anime){
        $this->listeAnime[]=$anime;
    }

    public function getListeAnime(){return $this->listeAnime;}
    
    public function chargementListeAnime(){
        // appelle connexion à la bdd
        $req=$this->getBdd()->prepare("SELECT * FROM anime");
        // on execute req
        $req->execute();

        $mesAnimes=$req->fetchAll(PDO::FETCH_ASSOC);

        $req->closeCursor();


        foreach($mesAnimes as $anime){
            // genere livre de la classe Livre
            $l=new Anime($anime["idAnime"],$anime["nom"],$anime["dateDeSortie"],$anime["auteur"],$anime["description"],$anime["image"]);
            $this->ajoutAnime($l);
        }
    }

    public function getAnimeById($id){
        for($i=0;$i<count($this->listeAnime);$i++){
            if($this->listeAnime[$i]->getId() === $id){
                return $this->listeAnime[$i];
            }
        }
    }
}