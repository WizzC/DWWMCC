<?php
require_once "models/LivreManager.class.php";
// require_once "models/livre.class.php";
class LivresController{
    private $livreManager;

    public function __construct(){    
        $this->livreManager=new LivreManager();
        $this->livreManager->chargementLivres();
    }

    public function afficherLivres(){
        $this->livreManager;
        $livres= $this->livreManager->getLivres();
        require "views/livres.view.php";
    }
    public function afficherLivre($id){
        $livre = $this->livreManager->getLivreById($id);
        require "views/afficherLivre.view.php";
    
    }
    public function ajoutLivre(){
        require "views/ajoutLivre.view.php";
    }
}
?>