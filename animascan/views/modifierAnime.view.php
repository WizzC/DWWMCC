<?php
session_start();
ob_start()
?>
<form method="POST" action="<?= URL ?>listeAnime/mv" enctype="multipart/form-data">
<!-- enctype="multipart/form-data" obliger de le mettre quand on charge un fichier -->
    <div class="form-group">
        <label for="nom">nom :</label>
        <input type="text" class="form-control" id="nom" name="nom" value="<?= $anime->getNom()?>">
        <!-- id sert pour js et css -->
    </div>
    <div class="form-group">
        <label for="date">date :</label>
        <input type="date" class="form-control" id="date" name="date" value="<?= $anime->getDate()?>">
    </div>
    <div class="form-group">
        <label for="auteur">auteur :</label>
        <input type="text" class="form-control" id="auteur" name="auteur" value="<?= $anime->getAuteur()?>">
        <!-- id sert pour js et css -->
    </div>
    <div class="form-group">
        <label for="description">description :</label>
        <input type="text" class="form-control" id="description" name="description" value="<?= $anime->getDescription()?>">
        <!-- id sert pour js et css -->
    </div>
    <h3>Image : </h3>
    <img src="<?= URL ?>public/image/<?=$anime->getImage()?>" >
    <div class="form-group">
        <label for="image" class="form-label">Changer l'image :</label>
        <input class="form-control-file" type="file" id="image" name="image">
    </div>
    <input type="hidden" name="identifiant" value="<?=$anime->getId();?>">
    <button type="submit" class="btn btn-primary">Valider</button>
</form>


<?php
$twitter = "public/image/Twitter.png";
$instagram = "public/image/instagram.png";
$content = ob_get_clean();
$titre = "Modification du anime : ".$anime->getId();
require "template.php";
?>