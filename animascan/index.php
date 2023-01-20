<?php 
// definie la constante URL
define("URL",str_replace("index.php","",(isset($_SERVER["HTTPS"])?"https":"http").
"://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

// recup le fichier controller des animes
require_once __DIR__."\controllers/animeController.php";
$animeController=new AnimeController;

require_once __DIR__."\controllers/usersController.php";
$usersController=new UsersController;

require_once __DIR__."\controllers/scanController.php";
$scanController=new ScanController;
try{
    // si lutilisateur est nulle part dans url page accueil
    if(empty($_GET["page"])){
        require __DIR__."\views/accueil.view.php";
    }
    // permet de gerer le chgment de page quand utilisateur est deja dans une autre page
    else{
        $url=explode("/",filter_var($_GET["page"],FILTER_SANITIZE_URL));

        // on test premier element de url
        switch($url[0]){
            case"accueil" : 
                $animeController->afficherAccueil();

            break;
            case"connexion":
                $usersController->afficherConnexion();
            break;
            case"logout" : require "views/logout.php";
            break;
            case"inscription":
                if(empty($url[1])){
                $usersController->afficherInscription();
            }elseif($url[1]==="ic"){
                $usersController->ajoutUsersValidation();
            }else{
                // lever l'erreur si page nexiste pas
                throw new Exception("La page n'existe pas");
            }
                
            break;
            case"listeAnime" :
            // si on a rien en tant que 2ème élément dans mon URL
                if(empty($url[1])){
                    $animeController->afficherListeAnime();
                    
                }else if($url[1]==="l"){
                    // afficher le anime concerner
                    $animeController->afficherAnime((int)$url[2]);
                    
                    
                    
                }else if($url[1]==="a"){
                    $animeController->ajoutAnime();
                }else if($url[1]==="m"){
                    $animeController->modificationAnime((int)$url[2]);
                }else if($url[1]==="s"){
                    $animeController->suppressionAnime((int)$url[2]);
                }else if($url[1]==="av"){
                    $animeController->ajoutAnimeValidation();
                }elseif($url[1]==="mv"){
                    $animeController->modificationAnimeValidation();
             }else{
                    // lever l'erreur si page nexiste pas
                    throw new Exception("La page n'existe pas");
                }break;
                case"listeScan" :
                    // si on a rien en tant que 2ème élément dans mon URL
                        if(empty($url[1])){
                            $scanController->afficherListeScan();
                        }else if($url[1]==="a"){
                            $scanController->ajoutScan();
                        }else if($url[1]==="m"){
                            $scanController->modificationScan((int)$url[2]);
                        }else if($url[1]==="s"){
                            $scanController->suppressionScan((int)$url[2]);
                        }else if($url[1]==="av"){
                            $scanController->ajoutScanValidation();
                        }elseif($url[1]==="mv"){
                            $scanController->modificationScanValidation();
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
