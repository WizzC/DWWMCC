<?php
require_once "./model/usersManager.class.php";
class UsersController {
    private $usersManager;

    public function __construct(){

        $this->usersManager=new UsersManager;
        $this->usersManager->chargementListeUser();
    }
    public function afficherConnexion(){
        require "";
    }
    public function afficherInscription(){
        require __DIR__."\../views/inscription.view.php";
    }
    public function ajoutUsersValidation(){
        
        // ajouter le Anime en bdd
        $this->usersManager->ajoutUsersBD($_POST["pseudo"],$_POST["email"],$_POST["passwordUsers"]);

        $_SESSION['alert']= [
            "type"=> "success",
            "msg"=> "Ajout Réalisé"
        ];
        // redirige lutilisateur vers la pages des animes
        header("Location: ".URL."inscription");
    }
}