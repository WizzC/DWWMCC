<?php

// Il faut que l'id ne soit pas vide
// trim sert a nettoyer les données
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // inclure ma connexion
    require_once "config.php";

    // prepare ma requête pour récuperer le user en fonction de l'id
    $sql= "SELECT * FROM users WHERE id = ? and email= ?";

    // ($stmt=mysqli_prepare($link,$sql))==true
    // je test si bien connecter a ma bd et ma quete
    if($stmt=mysqli_prepare($link,$sql)){
        // met un i pour integer 
        // va lier le ? de ma requête à param_id
        mysqli_stmt_bind_param($stmt,"is",$param_id);

        // récupère id
        $param_id = trim($_GET['id']);

        // exécute ma requete stmt et la test si fonctionne
        if(mysqli_stmt_execute($stmt)){
            // recupere nombre enregistrement
            $result = mysqli_stmt_get_result($stmt);

            // Test si le nombre de ligne est = à 1 (car 1 seul id == 1 enregistrement)
            if(mysqli_num_rows($result) == 1){
                // tansforme resultat en tableau associatif
                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

                $email = $row['email'];
                $mdp = $row["motdepasse"];
                
            
            }
            // fait une redirection vers la page d'erreur, lève l'erreur si ça plante
            else{
                header("location: index.php");
                exit();
            }
        }
            
        else{
            echo "Oups, problème de connexion à la BDD, veuillez réessayer ultérieurement";
        }
    }
    // vide la mémoire
    // On le met si mysqli stmt n'est pas valable
    // mysqli_stmt_close($stmt);

    // deconnexion de la bdd
    mysqli_close($link);


}else{
    header("Location:index.php");
    exit();

}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mt-5 mb-3"></h1>
                <div class="form-group">
                    <label for="">Email</label>
                    <p><?php echo $row["email"]; ?> </p>
                </div>
                <div class="form-group">
                    <label for="">Mot de passe</label>
                    <p><?= $row["motdepasse"]; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>