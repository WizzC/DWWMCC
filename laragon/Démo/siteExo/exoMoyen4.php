<?php ob_start() ?>
<form action="" method="GET">
    <button type="submit" name="Tous">Tous les animaux</button>
    <button type="submit" name="Chien">Tous les chiens</button>
    <button type="submit" name="Chat">Tous les chats</button>
</form>
<?php
$tab = array(
    'Marie' => array("30", "Chien"),
    'Pierre' => array("32", "Chat"),
    'Riri' => array("28", "Chien"),
    'Fifi' => array("28", "Chat"),
);
if (isset($_GET["Tous"])) {
    foreach ($tab as $key => $value) {
        ?> <h1> Nom : <?= $key ?></h1><?php
        ?> <h1> Age : <?= $value[0] ?></h1><?php
        ?> <h1> Race : <?= $value[1] ?></h1>
        --------------------------------------<?php
    }
}
if (isset($_GET["Chien"])) {
    foreach ($tab as $key => $value) {
        if ($value[1] == "Chien") {
            ?> <h1> Nom : <?= $key ?></h1><?php
            ?> <h1> Age : <?= $value[0] ?></h1><?php
            ?> <h1> Race : <?= $value[1] ?></h1>
            --------------------------------------<?php
        }
    }
}
if (isset($_GET["Chat"])) {
    foreach ($tab as $key => $value) {
        if ($value[1] == "Chat") {
            ?> <h1> Nom : <?= $key ?></h1><?php
            ?> <h1> Age : <?= $value[0] ?></h1><?php
            ?> <h1> Race : <?= $value[1] ?></h1>
            --------------------------------------<?php
        }
    }
}
?>
<?php
$titre = "Exo 4";
$content = ob_get_clean();
require "template.php";
?>