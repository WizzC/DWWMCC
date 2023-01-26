<?php
session_start();
ob_start();
require_once __DIR__."\..\controllers/animeController.php";
?>
<?php
if(!empty($_POST)){

    $errors = [];

    if(empty($_POST['pseudo'])  || !preg_match('/^[a-zA-Z0-9_]+$/',$_POST['pseudo'])){
        $errors['pseudo'] = "Votre pseudo n'est pas valide";
    }
    else{
        $pseudo = $_POST['pseudo'] ;
    }

    if(empty($_POST['email']) || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Votre email n'est pas valide";
    }
    else{
        $email = $_POST['email'] ;
    }
    if(empty($_POST['passwordUsers']) || $_POST['passwordUsers'] != $_POST['password_confirm']){
        $errors['passwordUsers'] = "Vous devez rentrer un mot de passe valide";
    }
    else{
        $password = $_POST['passwordUsers'] ;
    }
    

    debug($errors);

}
?>
<div class="d-flex justify-content-center "style="margin-bottom:40vh;"enctype="multipart/form-data">
<form action="<?= URL ?>inscription/ic" method="POST">

<div class="form-group bg-white">

<label for="pseudo">Pseudo</label>
<input type="text" name="pseudo" class="form-control" >
</div>

<div class="form-group bg-white">

<label for="email">Email</label>
<input type="text" name="email" class="form-control" >
</div>

<div class="form-group bg-white">

<label for="password">Mot de passe</label>
<input type="password" name="passwordUsers" class="form-control" >
</div>

<div class="form-group bg-white" >

<label for="password_confirm">Confirmez votre mot de passe</label>
<input type="password" name="password_confirm" class="form-control" >
</div>

<button type="submit" class="btn btn-primary">M'inscrire</button>
</form>
</div>



<?php
$content=ob_get_clean();
$titre="S'inscrire";
require "template.php";
?>