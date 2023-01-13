<?php ob_start()
?>
<form method="POST" action="<?= URL ?>manga/mv" enctype="multipart/form-data">
<!-- enctype="multipart/form-data" obliger de le mettre quand on charge un fichier -->
    <div class="form-group">
        <label for="nomAnime">Nom de l'anime :</label>
        <input type="text" class="form-control" id="nomAnime" name="nomAnime" value="<?= $manga->getNomAnime()?>">
        <!-- id sert pour js et css -->
    </div>
    <div class="form-group">
        <label for="date">date :</label>
        <input type="date" class="form-control" id="date" name="date" value="<?= $manga->getDate()?>">
    </div>
    <div class="form-group">
        <label for="style">style :</label>
        <input type="text" class="form-control" id="style" name="style" value="<?= $manga->getStyle()?>">
    </div>
    <div class="form-group">
        <label for="auteur">auteur :</label>
        <input type="text" class="form-control" id="auteur" name="auteur" value="<?= $manga->getAuteur()?>">
    </div>
    <h3>Image : </h3>
    <img src="<?= URL ?>public/images/<?=$manga->getImage()?>" >
    <div class="form-group">
        <label for="image" class="form-label">Changer l'image :</label>
        <input class="form-control-file" type="file" id="image" name="image">
    </div>
    <input type="hidden" name="identifiant" value="<?=$manga->getId();?>">
    <button type="submit" class="btn btn-primary">Valider</button>
</form>


<?php
$content = ob_get_clean();
$titre = "Modification du manga : ".$manga->getId();
require "template.php";
?>