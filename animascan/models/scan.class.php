<?php
class Scan{
    private $id;
    private $saison;
    private $nomArc;
    private $chapitre;
    private $tomes;
    private $episodes;
    private $idAnime;

    public function __construct($id,$saison,$nomArc,$chapitre,$tomes,$episodes,$idAnime)
    {
        $this->id=$id;
        $this->saison=$saison;
        $this->nomArc=$nomArc;
        $this->chapitre=$chapitre;
        $this->tomes=$tomes;
        $this->episodes=$episodes;
        $this->idAnime=$idAnime;
    }

    public function getId(){return $this->id;}
    public function setId($id){$this->id=$id;}

    public function getSaison(){return $this->saison;}
    public function setSaison($saison){$this->saison=$saison;}

    public function getNomArc(){return $this->nomArc;}
    public function setNomArc($nomArc){$this->nomArc=$nomArc;}

    public function getChapitre(){return $this->chapitre;}
    public function setChapitre($chapitre){$this->chapitre=$chapitre;}

    public function getTomes(){return $this->tomes;}
    public function setTomes($tomes){$this->tomes=$tomes;}

    public function getEpisodes(){return $this->episodes;}
    public function setEpisodes($episodes){$this->episodes=$episodes;}

    public function getIdAnime(){return $this->idAnime;}
    public function setIdAnime($idAnime){$this->idAnime=$idAnime;}
}

?>