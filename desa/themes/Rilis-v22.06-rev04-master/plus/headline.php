<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="headline relative-hidden bggradient1 mtb-5">
	<div class="mobile-only">
		<div class="headmodule bgcolor1 flexcenter mb-5">
			<i class="fa fa-star"></i><h1>HEADLINE</h1>
		</div>
	</div>
	<div class="relative-hidden plr-10 ptb-5">
	<div class="flex-container">
		<div class="headline-image mtb-5">
			<a href="<?= site_url('artikel/'.buat_slug($headline))?>">
			<div class="image-headline">
				<?php if (is_file(LOKASI_FOTO_ARTIKEL."sedang_".$headline['gambar'])): ?>
				<img src="<?= AmbilFotoArtikel($headline['gambar'],'sedang') ?>">
				<?php else: ?>
					<img src="<?= base_url("$this->theme_folder/$this->theme/images/pengganti.jpg") ?>"/>
					<div class="logo-no-image"><img src="<?= gambar_desa($desa['logo']);?>"/></div>
				<?php endif; ?>
				<div class="image-slider-shadow"></div>
			</div>
			</a>
		</div>
		<div class="headline-title mtb-5">
		<div class="relative-hidden p-10">
			<div class="desktop-only flexleft">
			<h1 class="mb-10 bgcolor1">HEADLINE</h1>
			</div>
			<h2 class="mb-10"><?= $headline['judul'] ?></h2>
			<div class="relative-hidden ptb-5">
				<div class="info-other flexleft"><i class="fa fa-calendar flexleft"></i><?= tgl_indo($headline['tgl_upload']);?></div>
				<div class="info-other flexleft"><i class="fa fa-eye flexleft"></i><?= hit($headline['hit']) ?></div>
				<div class="info-other flexleft"><i class="fa fa-user flexleft"></i><?= $headline['owner'] ?></div>
			</div>
			<?php if ($headline['isi']): ?>
				<div class="relative-hidden isi-article-home">
					<div class="desktop-only"><?= potong_teks ($headline['isi'], 350); ?>...</div>
					<div class="mobile-only"><?= potong_teks ($headline['isi'], 150); ?>...</div>
				</div>
			<?php endif; ?>
			<div class="flexright">	
				<a href="<?= site_url('artikel/'.buat_slug($headline))?>">
				<div class="selengkapnya flexcenter color-light"><i class="fa fa-calendar flexleft"></i><p>Selengkapnya...</p></div>
				</a>
			</div>
		</div>
		</div>
	</div>
</div>
</div>