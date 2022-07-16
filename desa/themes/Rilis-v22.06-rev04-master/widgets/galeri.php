<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="relative-hidden ptb-5">
	<div class="headmodule bgcolor1 flexcenter">
		<i class="fa fa-camera"></i><h1>Galeri Foto</h1>
	</div>
	<div class="gallery-home ptb-20 bggradient2 plr-20">
		<div class="mlr-min-10">
			<div class="carouselright js-flickity" data-flickity='{ "autoPlay": false, "wrapAround": true, "cellAlign": "left" }'>
				<?php foreach ($w_gal As $data): ?>
				<div class="carouselright-cell">
				<div class="plr-10">
					<a href="<?= site_url("first/sub_gallery/$data[id]"); ?>">
					<div class="image-fotohome">
						<?php if (is_file(LOKASI_GALERI . "kecil_" . $data['gambar'])): ?>
							<img src="<?= AmbilGaleri($data['gambar'],'kecil')?>" alt="Album : <?= "$data[nama]" ?>">
						<?php else: ?>
							<img src="<?= base_url("$this->theme_folder/$this->theme/images/pengganti.jpg") ?>"/>
							<div class="logo-no-image"><img src="<?= gambar_desa($desa['logo']);?>"/></div>
						<?php endif; ?>	
						<div class="bottom-gradient"></div>
						<div class="absolute-title" style="text-align:center;">
							<p><?= "$data[nama]" ?></p>
						</div>
					</div>	
					</a>
				</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>
