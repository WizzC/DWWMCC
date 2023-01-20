<?php
session_start();
ob_start()
?>
<form method="POST" action="<?= URL ?>listeScan/mv" enctype="multipart/form-data">
<!-- enctype="multipart/form-data" obliger de le mettre quand on charge un fichier -->
    <div class="form-group">
        <label for="saison">saison :</label>
        <input type="number" class="form-control" id="saison" name="saison" value="<?= $scan->getSaison()?>">
        <!-- id sert pour js et css -->
    </div>
    <div class="form-group">
        <label for="nomArc">nomArc :</label>
        <input type="text" class="form-control" id="nomArc" name="nomArc" value="<?= $scan->getNomArc()?>">
    </div>
    <div class="form-group">
        <label for="chapitre">chapitre :</label>
        <input type="text" class="form-control" id="chapitre" name="chapitre" value="<?= $scan->getChapitre()?>">
        <!-- id sert pour js et css -->
    </div>
    <div class="form-group">
        <label for="tomes">tomes :</label>
        <input type="text" class="form-control" id="tomes" name="tomes" value="<?= $scan->getTomes()?>">
        <!-- id sert pour js et css -->
    </div>
    <div class="form-group">
        <label for="episodes">episodes :</label>
        <input type="text" class="form-control" id="episodes" name="episodes" value="<?= $scan->getEpisodes()?>">
        <!-- id sert pour js et css -->
    </div>
    <div class="form-group">
        <label for="idAnime">idAnime :</label>
        <input type="text" class="form-control" id="idAnime" name="idAnime" value="<?= $scan->getIdAnime()?>">
        <!-- id sert pour js et css -->
    </div>
    
    
    <input type="hidden" name="identifiant" value="<?=$scan->getId();?>">
    <button type="submit" class="btn btn-primary">Valider</button>
</form>


<?php
$twitter = "public/image/Twitter.png";
$instagram = "public/image/instagram.png";
$content = ob_get_clean();
$titre = "Modification du anime : ".$scan->getId();
require "template.php";
?>