<?php ob_start() ?>
<form action="" method="POST">
    <input type="string" name="pseudo" />
    <input type="number" name="age">
    <button type="submit" name="submit">Valider</button>
</form>
<?php
$pseudo = null;
$age = null;
if (isset($_POST["submit"])) {
    $pseudo = $_POST["pseudo"];
    $age = $_POST["age"];
}
?>
<p>Pseudo <?= $pseudo ?> Age <?= $age ?></p>
<?php
$titre = "Exo 4";
$content = ob_get_clean();
require "template.php";
?>