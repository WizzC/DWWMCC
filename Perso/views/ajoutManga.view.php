<?php ob_start()
?>

<form method="POST" action="<?= URL ?>livres/av" enctype="multipart/form-data">
<!-- enctype="multipart/form-data" obliger de le mettre quand on charge un fichier -->
    <div class="form-group">
        <label for="Titre">Nom du manga :</label>
        <input type="text" class="form-control" id="Titre" name="Titre">
        <!-- id sert pour js et css -->
    </div>
    <div class="form-group">
        <label for="date">date :</label>
        <input type="date" class="form-control" id="date" name="date">
    </div>
    
    <div class="form-group">
        <label for="style">style :</label>
        <input type="text" class="form-control" id="style" name="style">
    </div>
    <div class="form-group">
        <label for="auteur">auteur :</label>
        <input type="text" class="form-control" id="auteur" name="auteur">
    </div>
    <div class="form-group">
        <label for="image" class="form-label">Image :</label>
        <input class="form-control-file" type="file" id="image" name="image">
    </div>
    <button type="submit" class="btn btn-primary">Valider</button>
</form>

<?php
$content = ob_get_clean();
$titre = "Ajout d'un livre";
require "template.php";
?>