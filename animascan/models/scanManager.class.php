<?php
require_once __DIR__."\..\models/model.class.php";
require_once __DIR__."\..\models/scan.class.php";

class ScanManager extends Model{
    private $listeScan;

    public function ajoutscan($scan){
        $this->listeScan[]=$scan;
    }

    public function getListescan(){return $this->listeScan;}
    
    public function chargementListescan(){
        // appelle connexion à la bdd
        $req=$this->getBdd()->prepare("SELECT * FROM scan");
        // on execute req
        $req->execute();

        $mesScan=$req->fetchAll(PDO::FETCH_ASSOC);

        $req->closeCursor();


        foreach($mesScan as $scan){
            // genere livre de la classe Livre
            $l=new Scan($scan["id"],$scan["saison"],$scan["nomArc"],$scan["chapitre"],$scan["tomes"],$scan["episodes"],$scan["idAnime"]);
            $this->ajoutscan($l);
        }
    }

    public function getscanById($id){
        for($i=0;$i<count($this->listeScan);$i++){
            if($this->listeScan[$i]->getId() === $id){
                return $this->listeScan[$i];
            }
        }
    }
    public function ajoutScanBD($saison,$nomArc,$chapitre,$tomes,$episodes,$idAnime){
        $req=("INSERT INTO Scan SET saison = :saison,nomArc = :nomArc,chapitre = :chapitre,tomes = :tomes,episodes = :episodes,idAnime = :idAnime ");

        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":saison",$saison,PDO::PARAM_INT);
        $stmt->bindValue(":nomArc",$nomArc,PDO::PARAM_STR);
        $stmt->bindValue(":chapitre",$chapitre,PDO::PARAM_STR);
        $stmt->bindValue(":tomes",$tomes,PDO::PARAM_STR);
        $stmt->bindValue(":episodes",$episodes,PDO::PARAM_STR);
        $stmt->bindValue(":idAnime",$idAnime,PDO::PARAM_STR);
        $resultat = $stmt->execute();
        $stmt->closeCursor();
    }
    public function suppressionScanBd($id){
        //  il est interdit de faire une concatenation avec $id, pour la securité
        $req="DELETE from scan where id= :id";
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
            $scan=$this->getScanById($id);
            unset($Scan);
        }
    }
    public function modificationScanBD($id,$saison,$nomArc,$chapitre,$tomes,$episodes,$idAnime){
        $req = "UPDATE scan
        set saison = :saison,nomArc = :nomArc,chapitre = :chapitre,tomes = :tomes,episodes = :episodes,idAnime = :idAnime
        where id = :id";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":id",$id,PDO::PARAM_INT);
        $stmt->bindValue(":saison",$saison,PDO::PARAM_STR);
        $stmt->bindValue(":nomArc",$nomArc,PDO::PARAM_STR);
        $stmt->bindValue(":chapitre",$chapitre,PDO::PARAM_STR);
        $stmt->bindValue(":tomes",$tomes,PDO::PARAM_STR);
        $stmt->bindValue(":episodes",$episodes,PDO::PARAM_STR);
        $stmt->bindValue(":idAnime",$idAnime,PDO::PARAM_INT);
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if($resultat>0){
            $this->getScanById($id)->setSaison($saison);
            $this->getScanById($id)->setNomArc($nomArc);
            $this->getScanById($id)->setChapitre($chapitre);
            $this->getScanById($id)->setTomes($tomes);
            $this->getScanById($id)->setEpisodes($episodes);
            $this->getScanById($id)->setIdAnime($idAnime);
            
        }
    }

}