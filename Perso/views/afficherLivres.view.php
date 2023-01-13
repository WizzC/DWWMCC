<?php ob_start();?>
<div class="row">
    <div class="col-6">
        <img src="<?= URL ?>public/images/<?= $manga->getImage();?>">

    </div>
    <div class="col-6">
        <p>Titre : <?=$manga->getTitre();?></p>
        <p>Nombre de pages : <?=$manga->getNbPages();?></p>
    </div>
</div>
<?php
$content = ob_get_clean();
$titre = $manga->getTitre();
require "template.php";
?>
