<?php
// require_once "../livre.class.php";

ob_start()?>

<table class="table text-center" >
    <tr class ="table-dark">
        <th>Image</th>
        <th>Titre</th>
        <th>Nombre de page</th>
        <th colspan="2">Actions</th>
    </tr>
    <?php 
    for ($i=0;$i<count($livres);$i++) : ?>
    <tr>
    <td class="align-middle"><img src="public/images/<?=$livres[$i]->getImage();?>" width="60px"></td>
    <td class="align-middle"><a href="<?= URL ?>livres/l/<?=$livres[$i]->getId();?>"><?=$livres[$i]->getTitre();?></a></td>
    <td class="align-middle"><?=$livres[$i]->getNbPages();?></td>
    <td class="align-middle"><a href="" class="btn btn-warning" style="background-color: #4654D2">Modifier</a></td>
    <td class="align-middle"><a href="" class="btn btn-danger" >Supprimer</a></td>
</tr>
<?php endfor?>
</table>
<a href="<?= URL ?>livres/a" class="btn btn-success d-block center-block" style="height: 50px; width: 200px">Ajouter</a>

<?php
$content = ob_get_clean();
$titre = "Les livres de la bibliothèque";
require "template.php";
?>