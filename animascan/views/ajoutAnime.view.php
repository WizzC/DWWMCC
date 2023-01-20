<?php
session_start();
ob_start()
?>

<form method="POST" action="<?= URL ?>listeAnime/av" enctype="multipart/form-data">
<!-- enctype="multipart/form-data" obliger de le mettre quand on charge un fichier -->
    <div class="form-group">
        <label for="nom">Nom :</label>
        <input type="text" class="form-control" id="nom" name="nom">
        <!-- id sert pour js et css -->
    </div>
    <div class="form-group">
        <label for="date">date :</label>
        <input type="date" class="form-control" id="date" name="date">
    </div>
    <div class="form-group">
        <label for="auteur">auteur :</label>
        <input type="text" class="form-control" id="auteur" name="auteur">
    </div>
    <div class="form-group">
        <label for="description">description :</label>
        <input type="text" class="form-control" id="description" name="description">
    </div>
    <div class="form-group">
        <label for="image" class="form-label">Image :</label>
        <input class="form-control-file" type="file" id="image" name="image">
    </div>
    <button type="submit" class="btn btn-primary">Valider</button>
</form>

<?php
$content = ob_get_clean();
$titre = "Ajout d'un manga";
require "template.php";
?>