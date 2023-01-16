<?php 
session_start();

// definie la constante URL
define("URL",str_replace("index.php","",(isset($_SERVER["HTTPS"])?"https":"http").
"://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

// recup le fichier controller des animes
require_once "controllers/animeController.php";
$animeController=new AnimeController;

try{
    // si lutilisateur est nulle part dans url page accueil
    if(empty($_GET["page"])){
        require "views/accueil.view.php";
    }
    // permet de gerer le chgment de page quand utilisateur est deja dans une autre page
    else{
        $url=explode("/",filter_var($_GET["page"],FILTER_SANITIZE_URL));

        // on test premier element de url
        switch($url[0]){
            case"accueil" : require "views/accueil.view.php";
            break;
            case"listeAnime" :
            // si on a rien en tant que 2ème élément dans mon URL
                if(empty($url[1])){
                    $animeController->afficherListeAnime();
                }else if($url[1]==="l"){
                    // afficher le livre concerner
                    $animeController->afficherAnime((int)$url[2]);
                }else if($url[1]==="a"){
                    
                }else if($url[1]==="m"){
                    
                }else if($url[1]==="s"){
                   
                }else if($url[1]==="av"){
                  
                }elseif($url[1]==="mv"){

             }else{
                    // lever l'erreur si page nexiste pas
                    throw new Exception("La page n'existe pas");
                }
            break;
            // c'est une sorte de else ! De plus on lève lerreur
            default : throw new Exception("La page n'existe pas");
        }
    }
}catch(Exception $e){   //permet dafficher le message
    echo $e->getMessage();
}
