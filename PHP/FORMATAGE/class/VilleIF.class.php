<?php
class VilleIF implements IFormatage{
    private $cp;
    private $ville;

    public function __construct($cp,$ville)
    {
        $this->cp = $this->formatageNombre($cp);
        $this->ville = $this->formatageChaine($ville);
    }
    public function getCp(){return $this->cp;}
    public function getVille(){return $this->ville;}

    public function setCp($cp){$this->cp = $cp;}
    public function setVille($ville){$this->ville = $ville;}

    public function formatageDate($date)
    {
        
    }
    public function formatageChaine($chaine)
    {
     return ucfirst($chaine);
    }

    public function formatageNombre($cp)
    {
        return $cp;
    }
}
?>