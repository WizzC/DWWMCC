<?php
// require_once "../livre.class.php";

ob_start()?>

<table class="table text-center" >
    <tr class ="table-dark">
        <th>Image</th>
        <th>Nom de l'anime</th>
        <th>date</th>
        <th>style</th>
        <th>auteur</th>
        <th colspan="2">Actions</th>
    </tr>
    <?php 
    for ($i=0;$i<count($mangas);$i++) : ?>
    <tr>
    <td class="align-middle"><img src="public/images/<?=$mangas[$i]->getImage();?>" width="60px"></td>
    <td class="align-middle"><a href="<?=URL ?>mangas/l/<?= $mangas[$i]-> getId() ?>"><?= $mangas[$i]-> getNomAnime() ?></td>
    <td class="align-middle"><?=$mangas[$i]->getDate();?></td>
    <td class="align-middle"><?=$mangas[$i]->getStyle();?></td>
    <td class="align-middle"><?=$mangas[$i]->getAuteur();?></td>
    <td class="align-middle"><a href="<?=URL ?>manga/m/<?= $mangas[$i]-> getId() ?>" class="btn btn-warning" style="background-color: #4654D2">Modifier</a></td>
    <td class="align-middle"> 
            <!-- onSubmit pour confirmer la suprresion -->
            <form action="<?= URL ?>manga/s/<?= $mangas[$i]->getId() ?>" onSubmit="return confirm('Voulez-vous vraiment supprimer le manga ?')" method="POST">
                <button class="btn btn-danger" type="submit">Supprimer</button>
            </form>
        </td>
</tr>
<?php endfor?>
</table>
<a href="<?= URL ?>manga/a" class="btn btn-success d-block center-block" style="height: 50px; width: 200px">Ajouter</a>

<?php
$content = ob_get_clean();
$titre = "Les mangas de la bibliothèque";
require "template.php";
?>