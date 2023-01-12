<?php

class Manga {
    private $id;
    private $image;
    private $nomAnime;
    private $date;
    private $style;
    private $auteur;

    public function __construct($id,$image,$nomAnime,$date,$style,$auteur)
    {
        $this->id=$id;
        $this->image=$image;
        $this->nomAnime=$nomAnime;
        $this->date=$date;
        $this->style=$style;
        $this->auteur=$auteur;
    }
    public function getId(){return $this->id;}
    public function getImage(){return $this->image;}
    public function getNomAnime(){return $this->nomAnime;}
    public function getDate(){return $this->date;}
    public function getStyle(){return $this->style;}
    public function getAuteur(){return $this->auteur;}

    public function setId($id){ $this->id=$id;}
    public function setImage($image){ $this->image=$image;}
    public function setNomAnime($nomAnime){$this->nomAnime=$nomAnime;}
    public function setDate($date){$this->date=$date;}
    public function setStyle($style){$this->style=$style;}
    public function setAuteur($auteur){$this->auteur=$auteur;}
}
?>