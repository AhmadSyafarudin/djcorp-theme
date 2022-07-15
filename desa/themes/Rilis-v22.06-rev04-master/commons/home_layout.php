<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>


<!-- Top Link -->
	<?php $this->load->view("$folder_themes/plus/top_link"); ?>
<!-- Top Link -->
	
<!-- Aparatur -->
	<?php $this->load->view("$folder_themes/plus/aparatur"); ?>
<!-- Aparatur -->

<!-- Article -->
	<?php $this->load->view("$folder_themes/plus/article"); ?>
<!-- Article -->

<!-- Lapak Home -->
	<?php $this->load->view("$folder_themes/lapakhome/lapak_home"); ?>
<!-- Lapak Home -->

<!-- Video -->
	<?php $this->load->view("$folder_themes/plus/video"); ?>
<!-- Video -->
	
<!-- Statistik -->
	<?php $this->load->view("$folder_themes/plus/statistik"); ?>
<!-- Statistik -->
	
<!-- Layanan Mandiri & Galeri -->
	<?php $this->load->view("$folder_themes/plus/mandiri_gallery"); ?>
<!-- Layanan Mandiri & Galeri -->

<!-- Icon Link -->
	<?php $this->load->view("$folder_themes/linkplus/link"); ?>
<!-- Icon Link -->

<!-- Sinergi Program -->
	<?php foreach($w_cos as $widget) : ?>
		<?php $judul_widget = ['judul_widget' => str_replace('Desa', ucwords($this->setting->sebutan_desa), strip_tags($widget['judul']))]; ?>
		<?php if ($widget["jenis_widget"] == 1 || $widget["jenis_widget"] == 2): ?>
			<?php if ($widget["isi"] == 'sinergi_program.php'): ?>
			<div class="width-default pt-5">
			<?php $this->load->view("{$folder_themes}/widgets/sinergi_program", $judul_widget) ?>
			</div>
			<?php endif; ?>
		<?php endif; ?>	
	<?php endforeach ?>
<!-- Sinergi Program -->

<!-- Peta Daerah -->
	<?php $this->load->view("$folder_themes/plus/map_daerah"); ?>
<!-- Peta Daerah -->
	
<!-- Anggaran Bottom -->
	<?php if (!is_null($transparansi)): ?>
		<?php if (!is_null($transparansi)) $this->load->view($folder_themes. '/widgets/keuangan.php', $transparansi);?>	
	<?php endif; ?>
<!-- Anggaran Bottom -->




