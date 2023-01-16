<?php ob_start()
?>
<div class="container">
<?php
print_r($anime);
 for($i=0;$i<count($anime);$i++): ?>
 <div class="container">
    <img src="public/image/<?= $anime[$i]->getImage() ?>" alt="">
 </div>
 <?php endfor ?>
</div>

<?php
$content=ob_get_clean();
$titre="Anime";
require "template.php";
?>