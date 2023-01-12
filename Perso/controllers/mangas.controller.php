<?php
require_once "models/mangasManager.class.php";
// require_once "models/manga.class.php";
class MangasController{
    private $mangaManager;

    public function __construct(){    
        $this->mangaManager=new MangaManager();
        $this->mangaManager->chargementMangas();
    }

    public function afficherMangas(){
        $this->mangaManager;
        $mangas= $this->mangaManager->getMangas();
        require "views/mangas.view.php";
    }
    public function afficherManga($id){
        $manga = $this->mangaManager->getMangaById($id);
        echo $manga->getTitre();
    
    }
}