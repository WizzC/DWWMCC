<?php 
session_start();
ob_start() ?>
<div class="row">
  <div class="col-4 p-5">
    <img src="<?= URL ?>public/image/<?=$anime->getImage()?>" style="height: 500px;">
  </div>
  <div class="col-8 " style="background-color: white;">
    <figure>
      <blockquote class="blockquote">
        <p><?= $anime->getDescription() ?></p>
      </blockquote>
      <figcaption class="blockquote-footer">
        <?= $anime->getDate() ?> <cite title="Source Title"><?= $anime->getAuteur() ?></cite>
      </figcaption>
    </figure>
  </div>
</div>


<?php
$titre = $anime->getNom();
$content = ob_get_clean();
require "template.php";
?>