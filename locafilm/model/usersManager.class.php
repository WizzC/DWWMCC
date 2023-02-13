<?php
require_once __DIR__."\..\model/model.class.php";
require_once __DIR__."\..\model/users.class.php";

class UsersManager extends Model{
    private $listeUser;

    public function ajoutUser($user){
        $this->listeUser[]=$user;
    }

    public function getListeUser(){return $this->listeUser;}
    
    public function chargementListeUser(){
        // appelle connexion à la bdd
        $req=$this->getBdd()->prepare("SELECT * FROM users");
        // on execute req
        $req->execute();

        $mesUsers=$req->fetchAll(PDO::FETCH_ASSOC);

        $req->closeCursor();


        foreach($mesUsers as $user){
            // genere livre de la classe Livre
            $l=new Users($user["idUsers"],$user["role"],$user["pseudo"],$user["email"],$user["motDePasse"]);
            $this->ajoutUser($l);
        }
    }

    public function getUserById($id){
        for($i=0;$i<count($this->listeUser);$i++){
            if($this->listeUser[$i]->getId() === $id){
                return $this->listeUser[$i];
            }
        }
    }
    public function ajoutUsersBD($pseudo,$email,$motDePasse){
        $req=("INSERT INTO users SET role = 1,pseudo = :pseudo,email = :email,motDePasse = :motDePasse ");
        $motDePasse = password_hash($_POST['motDePasse'],PASSWORD_BCRYPT);
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":pseudo",$pseudo,PDO::PARAM_STR);
        $stmt->bindValue(":email",$email,PDO::PARAM_STR);
        $stmt->bindValue(":motDePasse",$motDePasse,PDO::PARAM_STR);
        $resultat = $stmt->execute();
        $stmt->closeCursor();
    }
}