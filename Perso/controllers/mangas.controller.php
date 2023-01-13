<?php
require_once "models/MangasManager.class.php";

class MangasController {
    private $mangaManager;

    public function __construct(){
        // on instancie et charge les Mangas
        $this->mangaManager=new MangaManager;
        $this->mangaManager->chargementMangas();
    }
    
    public function afficherMangas(){
        // $Mangas recup le tableau des Mangas
        $mangas=$this->mangaManager->getMangas();
        require "views/manga.view.php";
        // qd on require, tous ce qui est declarer ds fonction et va dans require
    }

    public function afficherManga($id){
        $manga=$this->mangaManager->getMangaById($id);
        require "views/afficherManga.view.php";
    }

    public function ajoutManga(){
        require "views/ajoutManga.view.php";
    }

    public function ajoutMangaValidation(){
        // charge image
        $file=$_FILES["image"];
        // ajouter image au image public
        $repertoire="public/images/";
        $nomImageAjoute= $this->ajoutImage($file,$repertoire);
        // ajouter le Manga en bdd
        $this->mangaManager->ajoutMangaBd($_POST["nomAnime"],$_POST["date"],$_POST["style"],$_POST["auteur"],$nomImageAjoute);
        // redirige lutilisateur vers la pages des Mangas
        header("Location: ".URL."Manga");
    }

    private function ajoutImage($file, $dir){

        // si la personne a oublier choisir un fichier
        if(!isset($file['name']) || empty($file['name']))
            throw new Exception("Vous devez indiquer une image");

        // sil y a pas de dossier on le cree
        // 0777 ce sont des droit
        if(!file_exists($dir)) mkdir($dir,0777);

        // recup extension fichier
        $extension = strtolower(pathinfo($file['name'],PATHINFO_EXTENSION));
        // ajout numero fichier generer aleatoire (eviter dooublons)
        $random = rand(0,99999);
        // genere nom fichier
        $target_file = $dir.$random."_".$file['name'];

        // verifie si bien une image
        if(!getimagesize($file["tmp_name"]))
            throw new Exception("Le fichier n'est pas une image");
        // verifie extension
        if($extension !== "jpg" && $extension !== "jpeg" && $extension !== "png" && $extension !== "gif")
            throw new Exception("L'extension du fichier n'est pas reconnu");
        // verifie si existe pas deja
        if(file_exists($target_file))
            throw new Exception("Le fichier existe déjà");
        // verifie taille
        if($file['size'] > 500000)
            throw new Exception("Le fichier est trop gros");
        // si pas reusssi a ajouter image
        if(!move_uploaded_file($file['tmp_name'], $target_file))
            throw new Exception("l'ajout de l'image n'a pas fonctionné");
        //  si functionne dit nom image qui a été ajouter
        else return ($random."_".$file['name']);
    }

    public function suppressionManga($id){
        $nomImage= $this->mangaManager->getMangaById($id)->getImage();
        // retire l'image de mon dossier
        unlink("public/images/".$nomImage);
        // supprime ds bdd
        $this->mangaManager->suppressionMangaBd($id);
        // redirige lutilisateur vers la pages des Mangas
        header("Location: ".URL."Manga");
    }
    public function modificationManga($id){
        $manga=$this->mangaManager->getMangaById($id);
        require "views/modifiermanga.view.php";
    }

    public function modificationMangaValidation(){
        $imageActuelle = $this->mangaManager->getmangaById((int)$_POST['identifiant'])->getImage();
        $file = $_FILES['image'];

        if($file['size']>0){
            unlink("public/images/".$imageActuelle);
            $repertoire="public/images/";
            $nomImageTooAdd= $this->ajoutImage($file,$repertoire);
        }
        else{
            $nomImageTooAdd = $imageActuelle;
        }
        $this->mangaManager->modificationMangaBD((int)$_POST['identifiant'],$_POST['nomAnime'],$_POST['date'],$_POST['style'],$_POST['auteur'],$nomImageTooAdd);
        header("Location: ".URL."manga");
    }

}

?>