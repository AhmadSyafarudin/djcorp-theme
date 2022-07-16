<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>


<!-- Layanan Mandiri & Galeri -->
	<?php $this->load->view("$folder_themes/plus/layanan_mandiri"); ?>
<!-- Layanan Mandiri & Galeri -->

<!-- Statistik -->
	<?php $this->load->view("$folder_themes/plus/statistik"); ?>
<!-- Statistik -->

<!-- Anggaran Bottom -->
	<?php if (!is_null($transparansi)): ?>
		<?php if (!is_null($transparansi)) $this->load->view($folder_themes. '/widgets/keuangan.php', $transparansi);?>	
	<?php endif; ?>
<!-- Anggaran Bottom -->