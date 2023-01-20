<?php 
session_start();
ob_start()?>
<div class="d-flex justify-content-center">
<form method="POST" class=" w-50" style="background-color: #BA5C12;">
  <div class="mb-3">
    <label for="email" class="form-label">email</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <div class="mb-3 form-check d-flex justify-content-center">
    
  </div>
  <div class="d-flex justify-content-center">
  <button type="submit" name="Connecter" class="btn btn-dark ms-3 mb-3">Connecter</button></div>
</form></div>

<?php 
if(isset($_POST['Connecter']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    var_dump($_POST['email']);
    var_dump($_POST['password']);
    $db=new PDO("mysql:host=localhost;dbname=animascan;charset=utf8","root","");

    $sql="select * from users where email = '$email'";
    $result=$db->prepare($sql);
    $result->execute();
    $_SESSION['email'] = $email;
    var_dump($_SESSION['email']);
    if($result->rowCount() > 0){
        $data = $result->fetchAll();
        if(password_verify($password, $data[0]['password'])){
            echo 'connecter avec succès!';
            $_SESSION['email'] = $email;
            var_dump($_SESSION['email']);
            header("Location: ".URL."accueil"); 
        }
        else{
          echo "rééssaye";
        }
    }
}


?>

<?php
    $titre="connexion";
    $content=ob_get_clean();
    require "template.php";
?>