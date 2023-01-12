<?php ob_start()?>

<p>ici le contenu de ma page d'accueil</p>


<?php
$content = ob_get_clean();
$titre = "Bibliotèque MGA";
require "template.php";
?>
