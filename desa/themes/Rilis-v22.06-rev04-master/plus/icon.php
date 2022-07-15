<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="flexitem-3-icon">
	<a data-remote="false" data-toggle="modal" data-target="#identitas<?= $in; ?>" title="Tentang <?= ucwords($this->setting->sebutan_desa); ?>" style="cursor:pointer;">
		<div class="relative-hidden menu-icon">
		<img src="<?= base_url("$this->theme_folder/$this->theme/images/iconsvg/tentang.svg") ?>"/><p>Tentang<br/><?= ucwords($this->setting->sebutan_desa); ?></p>
		</div>
	</a>
</div>

<div class="flexitem-3-icon">
	<a data-remote="false" data-toggle="modal" data-target="#aparatur<?= $in; ?>" title="Aparatur" style="cursor:pointer;">
		<div class="relative-hidden menu-icon">
		<img src="<?= base_url("$this->theme_folder/$this->theme/images/iconsvg/perangkat.svg") ?>"/><p>Aparatur<br/><?= ucwords($this->setting->sebutan_desa); ?></p>
		</div>
	</a>
</div>

<div class="flexitem-3-icon">
	<?php if(IS_PREMIUM) : ?>
	<a href="<?= site_url(); ?>data-wilayah">
		<div class="relative-hidden menu-icon">
		<img src="<?= base_url("$this->theme_folder/$this->theme/images/iconsvg/location.svg") ?>"/><p>Data<br/>Wilayah</p>
		</div>
	</a>
	<?php else : ?>
	<a href="<?= site_url('first/wilayah') ?>">
		<div class="relative-hidden menu-icon">
		<img src="<?= base_url("$this->theme_folder/$this->theme/images/iconsvg/location.svg") ?>"/><p>Data<br/>Wilayah</p>
		</div>
	</a>
	<?php endif ?>
</div>

<div class="flexitem-3-icon">
	<a data-remote="false" data-toggle="modal" data-target="#pengaduanmasyarakat<?= $in; ?>" title="Pengaduan" style="cursor:pointer;">
		<div class="relative-hidden menu-icon">
		<img src="<?= base_url("$this->theme_folder/$this->theme/images/iconsvg/layanan.svg") ?>"/><p>Kontak<br/><?= ucwords($this->setting->sebutan_desa); ?></p>
		</div>
	</a>
</div>

<div class="flexitem-3-icon">
	<a href="<?= site_url('arsip') ?>">
		<div class="relative-hidden menu-icon">
		<img src="<?= base_url("$this->theme_folder/$this->theme/images/iconsvg/artikel.svg") ?>"/><p>Arsip<br/>Artikel</p>
		</div>
	</a>
</div>

<div class="flexitem-3-icon">
	<?php if(IS_PREMIUM) : ?>
	<a href="<?= site_url('galeri') ?>">
		<div class="relative-hidden menu-icon">
		<img src="<?= base_url("$this->theme_folder/$this->theme/images/iconsvg/camera1.svg") ?>"/><p>Galeri<br/>Foto</p>
		</div>
	</a>
	<?php else : ?>
	<a href="<?= site_url('first/gallery') ?>">
		<div class="relative-hidden menu-icon">
		<img src="<?= base_url("$this->theme_folder/$this->theme/images/iconsvg/camera1.svg") ?>"/><p>Galeri<br/>Foto</p>
		</div>
	</a>
	<?php endif ?>
</div>

<div class="flexitem-3-icon">
	<a href="<?= site_url('lapak') ?>">
		<div class="relative-hidden menu-icon">
		<img src="<?= base_url("$this->theme_folder/$this->theme/images/iconsvg/shop.svg") ?>"/><p>Lapak<br/><?= ucwords($this->setting->sebutan_desa); ?></p>
		</div>
	</a>
</div>

<div class="flexitem-3-icon">
	<a href="<?= site_url('peta') ?>">
		<div class="relative-hidden menu-icon">
		<img src="<?= base_url("$this->theme_folder/$this->theme/images/iconsvg/mappin.svg") ?>"/><p>Peta<br/><?= ucwords($this->setting->sebutan_desa); ?></p>
		</div>
	</a>
</div>

<div class="flexitem-3-icon">
	<a href="<?= site_url('pembangunan') ?>">
		<div class="relative-hidden menu-icon">
		<img src="<?= base_url("$this->theme_folder/$this->theme/images/iconsvg/pemb.svg") ?>"/><p>Bangun<br/><?= ucwords($this->setting->sebutan_desa); ?></p>
		</div>
	</a>
</div>



