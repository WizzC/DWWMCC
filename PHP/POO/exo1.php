<?php
class ChainePlus{
    private $chaine;
    public function __construct($chaine)
    {
     $this->chaine = $chaine;   
    }
    public function getChaine(){return $this->chaine;}
    public function setChaine($chaine){$this->chaine = $chaine;}

    public function gras(){
        return "<b>$this->chaine</b>" ;
    }

    public function italique(){
        return "<i>$this->chaine</i>";
    }

    public function souligne(){
        return "<u>$this->chaine</u>";
    }

    public function majuscules(){
        return strtoupper($this->chaine);
    }
}

$chaines = new ChainePlus("programmation orientée objet en PHP");
echo "Gras : " . $chaines->gras()  ?> <br><?php
echo "Italique : " . $chaines->italique()  ?> <br> <?php
echo "Souligne : " . $chaines->souligne()  ?> <br><?php
echo "Majuscule : " . $chaines->majuscules()  ?> <br> 


<?php
echo "-----------------------------------"?><br>
<?php


?>