<?php ob_start() ?>
<form action="" method="GET">
    <button type="submit" name="animaux">tous les animaux</button>
    <button type="submit" name="chien">chiens</button>
    <button type="submit" name="chat">chats</button>
</form>
<?php 
class Personnage {
    public $nom;
    public $age;
    public bool $race;

public function __construct($nom,$age,$race)
{
    $this->nom = $nom;
    $this->age = $age ;
    $this->race = $race;
}

public function ecrire() : void{
    
        if (isset($_GET["chat"])) {
           
                foreach($value as $personnage ){
                    if($this->race === true){
                    echo $personnage;
                    }
                
            }
        }
    echo "$this->nom est un chien et a $this->age ans";
    }
    else {
    echo "$this->nom est un chat et a $this->age ans";
}
}


$personnage1 = new Personnage("Pierre",32, true);
$personnage2 = new Personnage("Marie",28,false);
$personnage3 = new Personnage("Riri",35,true);
$personnage4 = new Personnage("Fifi",7,false);
$tabAnimaux = [$personnage1,$personnage2,$personnage3,$personnage4];
$tabAnimaux -> ecrire();

    ?>




<?php
$titre = "Exo Moyen 4";
$content = ob_get_clean();
require "template.php";
?>