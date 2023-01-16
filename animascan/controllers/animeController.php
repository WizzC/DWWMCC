<?php
require_once "models/animeManager.class.php";

class AnimeController {
    private $animeManager;

    public function __construct(){

        $this->animeManager=new AnimeManager;
        $this->animeManager->chargementListeAnime();
    }
    public function afficherListeAnime(){
       
        $anime=$this->animeManager->getListeAnime();
        require "views/anime.view.php";
        
    }
    public function afficherAnime($id){
        $anime=$this->animeManager->getAnimeById($id);
        require "views/afficherAnime.view.php";

    }

}