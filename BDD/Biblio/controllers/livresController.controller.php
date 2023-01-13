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
    public function ajoutLivreValidation(){
        $file = $_FILES['image'];
        $repertoire = "public/images/";
        $nomImageAjoute = $this->ajoutImage($file,$repertoire);
        $this->livreManager->ajoutLivreBd($_POST['titre'],$_POST['nbPages'],$nomImageAjoute);
        header('location: '. URL . "livres");
    }
    public function suppressionLivre($id){
        $nomImage = $this->livreManager->getLivreById($id)->getImage();
        unlink("public/images/".$nomImage);
        $this->livreManager->suppressionLivreBD($id);
        header('location: '. URL . "livres");
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
        $target_file = $dir.$random."".$file['name'];

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
        else return ($random."".$file['name']);
    }
}
?>