<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<div class="relative-hidden">
<div class="headmodule bggradient-vertical flexcenter mt-5">
			<i class="fa fa-user"></i><h1>Aparatur <?= ucwords($this->setting->sebutan_desa); ?></h1>
		</div>
<div class="mlr-min-5">
			
	<div class="leader mtb-5">
	<div class="plr-5">
		
		<div class="relative-hidden bgcolor1" style="border-radius:5px;">
		<?php $count = 0;
		foreach ($aparatur_desa['daftar_perangkat'] as $data): ?>
		<?php if ($count < 1): ?>
			<div class="column-2">
				<div class="image-pimpinan">
				<img src="<?= $data['foto'] ?>">
				</div>
			</div>
			<div class="welcome">
				<div class="welcome-bg1" style="background-image:url(<?= base_url($latar_website ? $latar_website : 'assets/front/css/images/latar_website.jpg'); ?>);"></div>
				<div class="welcome-bg2" style="background-image:url(<?= base_url($latar_website ? $latar_website : 'assets/front/css/images/latar_website.jpg'); ?>);"></div>
				<div class="welcome-bg3 bggradient-vertical2"></div>
				<div class="welcome-top">
				<p>Selamat datang di website resmi <?= ucwords($this->setting->sebutan_desa); ?> <?= ucwords(($desa['nama_desa']) ? ' ' . $desa['nama_desa'] : ''); ?> <?= ucwords($this->setting->sebutan_kecamatan_singkat." ".$desa['nama_kecamatan'])?>, <?= ucwords($this->setting->sebutan_kabupaten_singkat." ".$desa['nama_kabupaten'])?><br/><?= ucwords("Prov. ".$desa['nama_propinsi'])?></p>
				</div>
				<div class="welcome-bottom">
					<h3><?= $data['nama'] ?></h3>
					<p><?= $data['jabatan'] ?></p>
				</div>				
			</div>
		<?php endif;
		$count++;
		endforeach; ?>		
		</div>
	</div>
	</div>
	<div class="aparatur mtb-5">
	<div class="plr-5">
		<div class="mlr-min-5">
		<div class="carouselright js-flickity" data-flickity='{ "autoPlay": true, "cellAlign": "left", "wrapAround": true }'>
			<?php $count = 0;
			foreach ($aparatur_desa['daftar_perangkat'] as $data): ?>
			<?php if ($count > 0): ?>
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
			<?php endif;
			$count++;
			endforeach; ?>
		</div>
		</div>
	</div>
	</div>
	
</div>
</div>