<?php
ob_start();
if(!empty($_SESSION['alert'])):
?>
<div class="alert alert-<?=$_SESSION['alert']['type']?>" role="alert">
<?=$_SESSION['alert']['msg']?>
</div>
<?php 
unset($_SESSION['alert']);
endif;?>
<table class="table text-center">
    <tr class="table-light">
        <th>Image</th>
        <th>Nom</th>
        <th>Date de sortie</th>
        <th>Auteur</th>
        <th>description</th>
        <!-- Permet d'avoir 2 colonnes en une -->
        <th colspan="2">Actions</th>
    </tr>
    <!-- Va chercher dans la classe Livre, l'attribut livres (tableau des livres)  en faisant Livre::livres-->
    <?php 
    for($i=0;$i<count($anime);$i++): ?>
    <tr class="table-light">
        <td class="align-middle"><img src="public/image/<?= $anime[$i]->getImage() ?>" width="100px"></td>
        <td class="align-middle"><a href="<?=URL ?>listeAnime/l/<?= $anime[$i]->getId() ?>"><?= $anime[$i]->getNom() ?></td>
        <td class="align-middle"><?= $anime[$i]-> getDateDeSortie() ?></td>
        <td class="align-middle"><?= $anime[$i]-> getAuteur() ?></td>
        <td class="align-middle" width="60%"><?= $anime[$i]->getDescription() ?></td>
        <td class="align-middle"><a href="<?= URL ?>anime/m/<?= $anime[$i]->getId() ?>" class="btn btn-warning">Modifier</a></td>
        <td class="align-middle"> 
            <!-- onSubmit pour confirmer la suprresion -->
            <form action="<?= URL ?>anime/s/<?= $anime[$i]->getId() ?>" onSubmit="return confirm('Voulez-vous vraiment supprimer le livre ?')" method="POST">
                <button class="btn btn-danger" type="submit">Supprimer</button>
            </form>
        </td>
    </tr>
    <?php endfor ?>
</table>
<a href="<?= URL ?>anime/a" class="btn btn-success d-block">Ajouter</a>

<?php
$content=ob_get_clean();
$titre="Les anime de la bibliothèque";
require "template.php";
?>