<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<div class="box-default bgwhite mb-10">
	<div class="heading-module bggradient1 flexcenter">
	<i class="fa fa-user"></i><h1 class="flexcenter"><?= $judul_widget ?></h1>
	</div>
	
	<div class="aparatur-side">
	<div class="plr-10 relative-hidden ptb-10">
		<div class="mlr-min-5">
		<div class="carouselright js-flickity" data-flickity='{ "autoPlay": true, "cellAlign": "left", "wrapAround": true }'>
			<?php foreach($aparatur_desa['daftar_perangkat'] as $data) : ?>
				<div class="carouselright-cell">
				<div class="mlr-5">
					<div class="image-aparatur">
						<img src="<?= $data['foto'] ?>" alt="<?= $data['nama'] ?>">
					</div>
					<div class="aparatur-title bgcolor2 flexcenter">
					<div>
					<h3><?= $data['nama'] ?></h3>
					<p><?= $data['jabatan'] ?></p>
					</div>
					</div>
				</div>
				</div>
			<?php endforeach; ?>
		</div>
		</div>
	</div>
	</div>
</div>