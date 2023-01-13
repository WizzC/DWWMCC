<?php ob_start()?>
<div class="container">
<button type="button" class="btn btn-primary btn-lg m-3">SHONEN</button>
</div>

<div class="container">
<button type="button" class="btn btn-primary btn-lg m-3">SEINEN</button>
</div>

<div class="container">
<button type="button" class="btn btn-primary btn-lg m-3">SHOJO</button>
</div>
<?php
$content = ob_get_clean();

require "template.php";
?>