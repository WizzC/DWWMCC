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
    public function ajoutMangaBd($image,$nomAnime,$date,$style,$auteur){
        $req="
        INSERT INTO mangas (image,nomAnime,date,style,auteur)
        value (:image,:nomAnime,:date,:style,:auteur)";
        // connexion à bd
        $stmt=$this->getBdd()->prepare($req);
        // on met en lien la req avec ce qu'il y a dans la bd
        $stmt->bindValue(":image",$image,PDO::PARAM_STR); //PDO::PARAM_STR sert à securiser le type de données
        $stmt->bindValue(":nomAnime",$nomAnime,PDO::PARAM_INT);
        $stmt->bindValue(":date",$date,PDO::PARAM_STR);
        $stmt->bindValue(":style",$style,PDO::PARAM_STR);
        $stmt->bindValue(":auteur",$auteur,PDO::PARAM_STR);
        // sert à executer requete et a ajouter données à la bdd
        $resultat=$stmt->execute();
        // ferme connexion abdd
        $stmt->closeCursor();

        // si requete fonctionne 
        if($resultat>0){
            // on ajoute le manga a la classe manga
            $manga=new Manga($this->getBdd()->lastInsertId(),$image,$nomAnime,$date,$style,$auteur);
            // ajoute manga au tableau de manga
            $this->ajoutMangas($manga);
        }
}
public function suppressionMangaBd($id){
    //  il est interdit de faire une concatenation avec $id, pour la securité
    $req="
    DELETE from manga where id= :idManga";
    // connexion à bd
    $stmt=$this->getBdd()->prepare($req);
    $stmt->bindValue(":idManga",$id,PDO::PARAM_INT);
    // sert à executer requete et a ajouter données à la bdd
    $resultat=$stmt->execute();
    // ferme connexion abdd
    $stmt->closeCursor();

    // si requete fonctionne 
    if($resultat>0){
        // on supprime le manga au tableau de manga
        $manga=$this->getMangaById($id);
        unset($manga);
    }
}
public function modificationMangaBD($id,$nomAnime,$date,$style,$auteur,$image){
    $req = "
    update manga
    set nomAnime = :nomAnime, date = :date,style = :style, auteur =:auteur,image =:image
    where id = :id";
    $stmt = $this->getBdd()->prepare($req);
    $stmt->bindValue(":id",$id,PDO::PARAM_INT);
    $stmt->bindValue(":nomAnime",$nomAnime,PDO::PARAM_STR);
    $stmt->bindValue(":date",$date,PDO::PARAM_INT);
    $stmt->bindValue(":auteur ",$auteur,PDO::PARAM_STR);
    $stmt->bindValue(":style",$style,PDO::PARAM_STR);
    $stmt->bindValue(":image",$image,PDO::PARAM_STR);
    $resultat = $stmt->execute();
    $stmt->closeCursor();

    if($resultat>0){
        $this->getMangaById($id)->setnomAnime($nomAnime);
        $this->getMangaById($id)->setdate($date);
        $this->getMangaById($id)->setStyle($style);
        $this->getMangaById($id)->setStyle($auteur);
        $this->getMangaById($id)->setStyle($image);
    }
}
}