<?php
class Anime{
    private $id;
    private $nom;
    private $date;
    private $auteur;
    private $description;
    private $image;

    public function __construct($id,$nom,$date,$auteur,$description,$image)
    {
        $this->id=$id;
        $this->nom=$nom;
        $this->date=$date;
        $this->auteur=$auteur;
        $this->description=$description;
        $this->image=$image;
    }

    public function getId(){return $this->id;}
    public function setId($id){$this->id=$id;}

    public function getNom(){return $this->nom;}
    public function setNom($nom){$this->nom=$nom;}

    public function getDate(){return $this->date;}
    public function setDate($date){$this->date=$date;}

    public function getAuteur(){return $this->auteur;}
    public function setAuteur($auteur){$this->auteur=$auteur;}

    public function getDescription(){return $this->description;}
    public function setDescription($description){$this->description=$description;}

    public function getImage(){return $this->image;}
    public function setImage($image){$this->image=$image;}
}

?>