<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<div class="relative-hidden articlehome">
	<?php if($headline) : ?>
		<?php $this->load->view("$folder_themes/plus/headline"); ?>
	<?php endif; ?>
	<?php $this->load->view("$folder_themes/plus/terbaru"); ?>	
</div>
