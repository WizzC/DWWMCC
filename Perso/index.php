<?php
define("URL",str_replace("index.php","",(isset($_SERVER['HTTPS'])?"https":"http")."://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

require_once "controllers/mangas.controller.php";
$mangaController = new MangasController;
try{
if(empty($_GET['page'])){
require "views/accueil.view.php";
}
else{
    $url = explode("/",filter_var($_GET['page']),FILTER_SANITIZE_URL);
    switch($url[0]){
        case "accueil" : require "views/accueil.view.php";
        break;
        case "mangas" : 
            if(empty($url[1])){
                $mangaController->afficherMangas();
            }elseif($url[1] === "l"){
                echo $mangaController->afficherManga($url[2]);
            }elseif($url[2] === "a"){
                echo "ajouter d'un manga";
            }elseif($url[3] === "m"){
                echo "modifier un manga";
            }elseif($url[4] === "s"){
                echo "suppression d'un manga";
            }else{
                throw new Exception("La page n'existe pas");
            }
        break;
        default : throw new Exception("La page n'existe pas");
        }
    }
}
catch(Exception $e){
    echo $e->getMessage();
}
?>