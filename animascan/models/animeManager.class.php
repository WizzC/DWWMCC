<?php
require_once __DIR__."\..\models/model.class.php";
require_once __DIR__."\..\models/anime.class.php";

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
            $l=new Anime($anime["id"],$anime["nom"],$anime["date"],$anime["auteur"],$anime["description"],$anime["image"]);
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
    public function ajoutAnimeBd($nom,$date,$auteur,$description,$image){
        $req="INSERT INTO anime (nom,date,auteur,description,image)
        value (:nom,:date,:auteur,:description,:image)";
        // connexion à bd
        $stmt=$this->getBdd()->prepare($req);
        // on met en lien la req avec ce qu'il y a dans la bd
        $stmt->bindValue(":nom",$nom,PDO::PARAM_STR); //PDO::PARAM_STR sert à securiser le type de données
        $stmt->bindValue(":date",$date);
        $stmt->bindValue(":auteur",$auteur,PDO::PARAM_STR);
        $stmt->bindValue(":description",$description,PDO::PARAM_STR);
        $stmt->bindValue(":image",$image,PDO::PARAM_STR);
        // sert à executer requete et a ajouter données à la bdd
        $resultat=$stmt->execute();
        // ferme connexion abdd
        $stmt->closeCursor();

        // si requete fonctionne 
        if($resultat>0){
            // on ajoute le Anime a la classe Anime
            $anime=new Anime($this->getBdd()->lastInsertId(),$nom,$date,$auteur,$description,$image);
            // ajoute Anime au tableau de Anime
            $this->ajoutAnime($anime);
        }
    }
    public function suppressionAnimeBd($id){
        //  il est interdit de faire une concatenation avec $id, pour la securité
        $req="DELETE from anime where id= :id";
        // connexion à bd
        $stmt=$this->getBdd()->prepare($req);
        $stmt->bindValue(":id",$id,PDO::PARAM_INT);
        // sert à executer requete et a ajouter données à la bdd
        $resultat=$stmt->execute();
        // ferme connexion abdd
        $stmt->closeCursor();

        // si requete fonctionne 
        if($resultat>0){
            // on supprime le livre au tableau de livre
            $anime=$this->getAnimeById($id);
            unset($anime);
        }
    }
    public function modificationAnimeBD($id,$nom,$date,$auteur,$description,$image){
        $req = "UPDATE anime
        set nom = :nom, date = :date,auteur = :auteur,description = :description,image = :image
        where id = :id";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":id",$id,PDO::PARAM_INT);
        $stmt->bindValue(":nom",$nom,PDO::PARAM_STR);
        $stmt->bindValue(":date",$date);
        $stmt->bindValue(":auteur",$auteur,PDO::PARAM_STR);
        $stmt->bindValue(":description",$description,PDO::PARAM_STR);
        $stmt->bindValue(":image",$image,PDO::PARAM_STR);
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if($resultat>0){
            $this->getAnimeById($id)->setNom($nom);
            $this->getAnimeById($id)->setdate($date);
            $this->getAnimeById($id)->setAuteur($auteur);
            $this->getAnimeById($id)->setDescription($description);
            $this->getAnimeById($id)->setImage($image);
        }
    }

}