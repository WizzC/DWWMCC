<?php 
define("URL",str_replace("index.php","",(isset($_SERVER["HTTPS"])?"https":"http").
"://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));




try{
    if(empty($_GET["page"])){
        require "views/accueil.view.php";
    }
    else{
        $url=explode("/",filter_var($_GET["page"],FILTER_SANITIZE_URL));

        }}
catch(Exception $e){  
    echo $e->getMessage();
}