<?php ob_start() ?>
<div>
    <form action="" method="POST">
    <input type="number" name="nombre1" />
    <input type="number" name="nombre2" />
    <button type="submit" name="add">+</button>
    <button type="submit" name="sous">-</button>
    <button type="submit" name="mul">x</button>
    <button type="submit" name="div">/</button>
    </form>
</div>
<?php
if(isset($_POST["add"])) {
    $result = $_POST['nombre1'] + $_POST['nombre2'];
    ?><p><?= $result ?> </p><?php
}
elseif(isset($_POST["sous"])) {
    $result = $_POST['nombre1'] - $_POST['nombre2'];
    ?><p><?= $result ?> </p><?php
}
elseif(isset($_POST["mul"])) {
    $result = $_POST['nombre1'] * $_POST['nombre2'];
    ?><p><?= $result ?> </p><?php
}
elseif(isset($_POST["div"])) {
    $result = $_POST['nombre1'] / $_POST['nombre2'];
    ?><p><?= $result ?> </p><?php
}
?>
<?php
$titre = "Exo 1";
$content = ob_get_clean();
require "template.php";
?>