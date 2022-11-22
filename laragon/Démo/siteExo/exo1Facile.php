<?php ob_start() ?>

<form action="exo1Facile.php" method="POST">
    <input type="number" name="nombre" />
    <button type="submit" name="submit">Entrez</button>
</form>

<?php
$carre = null;
if (isset($_POST["submit"])) {
    $val = $_POST['nombre'];
    $carre = $val * $val;
}
$titre = "Carré d'un nombre";
$content = ob_get_clean();
require "template.php";
?>
<button>
    <h1><?php echo $carre ?></h1>
</button>