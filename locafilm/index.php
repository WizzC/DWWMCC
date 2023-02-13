<?php 
define("URL",str_replace("index.php","",(isset($_SERVER["HTTPS"])?"https":"http").
"://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

require_once __DIR__."\controller/usersController.php";
$usersController=new UsersController;


try{
    if(empty($_GET["page"])){
        require "views/accueil.view.php";
    }
    else{
        $url=explode("/",filter_var($_GET["page"],FILTER_SANITIZE_URL));

        switch($url[0]){
            case"accueil" : 
                require "views/accueil.view.php";

            break;
            case"inscription":
                if(empty($url[1])){
                $usersController->afficherInscription();
            }elseif($url[1]==="ic"){
                $usersController->ajoutUsersValidation();
            }else{
                throw new Exception("La page n'existe pas");
            }
                
            break;
        }
        }}
catch(Exception $e){  
    echo $e->getMessage();
}
