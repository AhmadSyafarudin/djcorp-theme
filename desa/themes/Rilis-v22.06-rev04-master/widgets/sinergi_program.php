<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<div class="sinergi">
<div class="box-default bgwhite mb-10">
	<div class="heading-module bggradient1 flexcenter">
	<i class="fa fa-external-link"></i><h1 class="flexcenter"><?= $judul_widget ?></h1>
	</div>
	<div class="relative-row p-10">
	<div class="mlr-min-10">
		<div class="carouselright js-flickity" data-flickity='{ "autoPlay": true, "contain": true, "cellAlign": "left", "wrapAround": true }'>
		<?php foreach($sinergi_program as $key => $program) :
		$baris[$program['baris']][$program['kolom']] = $program;
		endforeach; ?>
		
			<?php foreach($baris as $baris_program) : ?>
			<?php $width = 100/count($baris_program)-count($baris_program)?>
			<?php foreach($baris_program as $key => $program) : ?>
				
			<div class="carouselright-cell" style="text-align:center;">
				<div class="mlr-10">
				<div class="sinergiprogram">
				<a href="<?= $program['tautan']?>" rel="noopener noreferrer" target="_blank">
				<?php if (is_file(LOKASI_GAMBAR_WIDGET.$program['gambar'])): ?>
				<img src="<?= base_url().LOKASI_GAMBAR_WIDGET.$program['gambar']?>"/>
				<?php endif ?>
				<p><?= $program['judul']?></p>				
				</a>
				</div>
				</div>
			</div>
		
			<?php endforeach; ?>	
		<?php endforeach; ?>
	</div>
	</div>
	</div>
</div>
</div>


