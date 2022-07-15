<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="box-default bgwhite mb-10">
	<div class="heading-module bggradient1 flexcenter">
	<i class="fa fa-camera"></i><h1 class="flexcenter">Album Galeri Foto</h1>
	</div>
	<div class="relative-hidden plr-15 pt-10 pb-10">
		<?php if ($gallery): ?>
		<div class="flex-container mlr-min-5">
			<?php $i = 1; ?>
			<?php foreach($gallery AS $data): ?>
			<div class="flexitem-2-default" style="margin-bottom:0;">
				<div class="gallery-page border-grey bggrey2 p-10 mt-10 mb-10">
				<a href="<?= site_url() . "first/sub_gallery/" . $data['id'] ?>">
				<div class="image-foto">
					<?php if(is_file(LOKASI_GALERI . "kecil_" . $data['gambar'])): ?>
						<img src="<?= AmbilGaleri($data['gambar'],'kecil') ?>" />
					<?php else: ?>
						<img src="<?= base_url("$this->theme_folder/$this->theme/images/album.jpg") ?>"/>
						<div class="logo-no-image"><img src="<?= gambar_desa($desa['logo']);?>"/></div>
					<?php endif;?>
				</div>
				</a>
				<h2><?= $data["nama"] ?></h2>
				</div>
			</div>
			<?php endforeach ?>
		</div>
		<div class="relative-hidden mt-10">
		<?php $this->load->view("$folder_themes/commons/page"); ?>
		</div>
		<?php else: ?>
			<div class="no-data-big flexcenter">
				<img src="<?= base_url("$this->theme_folder/$this->theme/images/nodata.png") ?>" />
				<div>
					<h3 class="color-1">Mohon maaf,</h3>
					<p>Untuk saat ini data belum tersedia</p>
				</div>
			</div>
		<?php endif;?>
	</div>
</div>		