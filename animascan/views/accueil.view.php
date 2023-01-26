<?php
session_start();
ob_start()
?>
<div class="container d-flex flex-wrap align-item-center">
<?php

 for($i=0;$i<count($anime);$i++): ?>
 <div class="container d-flex justify-content-center row m-0 w-25">
    <img src="public/image/<?= $anime[$i]->getImageAnime() ?>" >
    <div class=" p-0">
      <a class="rounded border border-dark p-2 mt-5 mb-5 text-center text-black d-flex justify-content-center" 
      style="background-color: #BA5C12;" href="<?=URL ?>listeAnime/l/<?= $anime[$i]->getIdAnime() ?>"><?= $anime[$i]->getNom() ?></a>
    </div>
 </div>
 <?php endfor ?>
</div>

<?php

$content=ob_get_clean();
$titre="Anime";
require "template.php";
?>