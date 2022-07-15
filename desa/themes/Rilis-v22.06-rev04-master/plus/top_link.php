<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>


<div class="relative-hidden">
<div class="top-link">

<div class="flex-container mlr-min-5">
	<div class="toplink-item bgorange">
		<a data-remote="false" data-toggle="modal" data-target="#jamkerja<?= $in; ?>" title="Jam Kerja" style="cursor:pointer;">
		<div class="toplink-inner flexcenter">
		<img src="<?= base_url("$this->theme_folder/$this->theme/images/iconsvg/jam.svg") ?>"/>
		<div class="desktop-only"><p>Jam Layanan Kantor <?= ucwords($this->setting->sebutan_desa); ?></p></div>
		<div class="mobile-only"><p>Jam Kantor</p></div>
		</div>
		</a>
	</div>
	
	<div class="toplink-item bggreen">
		<a data-remote="false" data-toggle="modal" data-target="#jshalat<?= $in; ?>" title="Jadwal Shalat" style="cursor:pointer;">
		<div class="toplink-inner flexcenter">
		<img src="<?= base_url("$this->theme_folder/$this->theme/images/iconsvg/islam.svg") ?>"/>
		<div class="desktop-only"><p>Jadwal Shalat Wilayah <?= ucwords($this->setting->sebutan_kabupaten_singkat." ".$desa['nama_kabupaten'])?></p></div>
		<div class="mobile-only"><p>Jadwal Shalat</p></div>
		</div>
		</a>
	</div>
	
	<div class="toplink-item bgyellow">
		<a data-remote="false" data-toggle="modal" data-target="#updatecovid<?= $in; ?>" title="Covid 19" style="cursor:pointer;">
		<div class="toplink-inner flexcenter">
		<img src="<?= base_url("$this->theme_folder/$this->theme/images/iconsvg/covid.svg") ?>"/>
		<div class="desktop-only"><p>Update Perkembangan Covid-19</p></div>
		<div class="mobile-only"><p>Covid-19</p></div>
		</div>
		</a>
	</div>
	<div class="toplink-item bgblue">
		<a data-remote="false" data-toggle="modal" data-target="#pengaduanmasyarakat<?= $in; ?>" title="Pengaduan" style="cursor:pointer;">
		<div class="toplink-inner flexcenter">
		<img src="<?= base_url("$this->theme_folder/$this->theme/images/iconsvg/lapor.svg") ?>"/>
		<div class="desktop-only"><p>Kontak & Layanan Pengaduan</p></div>
		<div class="mobile-only"><p>Lapor</p></div>
		</div>
		</a>
	</div>
	
</div>

</div>
</div>


