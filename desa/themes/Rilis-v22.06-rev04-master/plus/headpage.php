<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="page-article">
	<div class="headpage-title"><?= $single_artikel["judul"]?></div>
	<div class="relative-hidden pt-5">
	<div class="info-other flexleft"><i class="fa fa-calendar flexleft"></i><?= tgl_indo($single_artikel['tgl_upload']);?></div>
	<div class="info-other flexleft"><i class="fa fa-eye flexleft"></i><?= hit($single_artikel['hit']) ?></div>
	<div class="info-other flexleft"><i class="fa fa-user flexleft"></i><?= $single_artikel['owner'] ?></div>
	</div>
</div>
<div class="page-arsip">
	<div class="relative-hidden"><div class="headpage-title-big">Arsip Artikel</div></div>
</div>
<div class="page-gallery">
	<div class="relative-hidden"><div class="headpage-title-big">Album Galeri</div></div>
</div>
<div class="page-subgallery">
	<div class="relative-hidden">
	<div class="headpage-title-big">
	<?php if(IS_PREMIUM) : ?>
		Galeri Foto <?= $parent['nama']; ?>
	<?php else: ?>
		Galeri Foto <?= $parrent['nama']; ?>
	<?php endif;?>
	</div>
	</div>
</div>
<div class="page-kelompok">
	<div class="relative-hidden"><div class="headpage-title-big"><?= $detail['nama']; ?></div></div>
</div>
<div class="page-suplemen">
	<div class="relative-hidden"><div class="headpage-title-big"><?= $main['suplemen']['nama']; ?></div></div>
</div>
<div class="page-statis">
	<div class="relative-hidden"><div class="headpage-title-big">
	<?php if($main): ?>
		Data Vaksinasi
	<?php else:?>
		<?=$heading?>
	<?php endif;?>
	</div></div>
</div>
<div class="page-statislebar">
	<div class="relative-hidden"><div class="headpage-title-big">
	<?php if($produk): ?>
		Lapak <?= ucwords($this->setting->sebutan_desa); ?>
	<?php elseif($pembangunan): ?>
		Pembangunan <?= ucwords($this->setting->sebutan_desa); ?>
	<?php elseif($pengaduan): ?>
		Pengaduan Masyarakat	
	<?php elseif($pemerintah): ?>
		Pemerintah <?= ucwords($this->setting->sebutan_desa); ?>	
	<?php elseif($idm): ?>
		Indek Desa Membangun		
	<?php endif;?>
	</div></div>
</div>
<div class="page-peta">
	<div class="relative-hidden"><div class="headpage-title-big">
	<?php if($halaman_peta): ?>
		Peta <?= ucwords($this->setting->sebutan_desa); ?>	
	<?php endif;?>
	</div></div>
</div>
<div class="page-stat">
	<div class="relative-hidden"><div class="headpage-title-big">
		<?php if($heading): ?>
		Statistik - <?=$heading?>
		<?php else:?>
		Data Statistik
		<?php endif;?>		
	</div></div>
</div>
<div class="page-category">
	<div class="relative-hidden"><div class="headpage-title-big">
		<?php if ($title) : ?>
			<?php if (!empty($judul_kategori)): ?>
				Kategori - <?= $judul_kategori['kategori'] ?>
			<?php else: ?>
				<?= $title ?>
			<?php endif; ?>
		<?php else: ?>
			Hasil Pencarian
		<?php endif; ?>
	</div></div>
</div>

<div class="page-analisis">
	<div class="relative-hidden"><div class="headpage-title-big">
		Data Analisis		
	</div></div>
</div>