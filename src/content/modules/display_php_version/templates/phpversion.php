<h2 class="accordion-header"><?php
translate ( "php_version" );
?></h2>
<div class="accordion-content">
<?php translate("running_php_version");?> <strong><?php Template::escape(phpversion())?></strong>
</div>