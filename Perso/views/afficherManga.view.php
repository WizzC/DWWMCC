<?php ob_start();?>
<div class="row p-5">
    <div class="col-6">
        <img src="<?= URL ?>public/images/<?= $manga->getImage();?>">

    </div>
    <div class="col-6 p-5">
        <p>Titre : <?=$manga->getNomAnime();?></p>
        <p>Date de sorti : <?=$manga->getDate();?></p>
        <p>Style : <?=$manga->getStyle();?></p>
        <p>Auteur : <?=$manga->getAuteur();?></p>
    </div>
</div>
<?php
$content = ob_get_clean();
$titre = $manga->getNomAnime();
require "template.php";
?>
