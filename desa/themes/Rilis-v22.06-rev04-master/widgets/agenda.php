<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="box-default bgwhite mb-10">
	<div class="heading-module bggradient1 flexcenter">
	<i class="fa fa-calendar"></i><h1 class="flexcenter"><?= $judul_widget ?></h1>
	</div>
	<div class="relative-hidden p-10">
	<div class="height-box">
	<div class="withscroll">
			<div class="agenda-title color-1">Terjadwal</div>
			<?php if (count(array_merge($hari_ini, $yad)) > 0): ?>

			<?php foreach ($hari_ini as $agenda): ?>
				<div class="agenda">
					<div class="agenda-row"> 
					<img src="<?= base_url("$this->theme_folder/$this->theme/images/iconsvg/agenda.svg") ?>" />
					<h3><?= tgl_indo2($agenda['tgl_agenda'])?><br/>Tempat : <?= $agenda['lokasi_kegiatan']?></h3>
					</div>
					<a href="<?= site_url('artikel/'.buat_slug($agenda))?>"><h2><?= $agenda['judul']?></h2></a>
				</div>
			<?php endforeach; ?>
			
			<?php foreach ($yad as $agenda): ?>
				<div class="agenda">
					<div class="agenda-row"> 
					<img src="<?= base_url("$this->theme_folder/$this->theme/images/iconsvg/agenda.svg") ?>" />
					<h3><?= tgl_indo2($agenda['tgl_agenda'])?><br/>Tempat : <?= $agenda['lokasi_kegiatan']?></h3>
					</div>
					<a href="<?= site_url('artikel/'.buat_slug($agenda))?>"><h2><?= $agenda['judul']?></h2></a>
				</div>
			<?php endforeach; ?>
			
			<?php else: ?>
				<div class="no-data">
				<img src="<?= base_url("$this->theme_folder/$this->theme/images/nodata.png") ?>" />
				<p>Mohon maaf, belum ada agenda yang akan dilaksanakan...</p>
				</div>
			<?php endif; ?>
			
			<div class="agenda-title color-1">Sebelumnya</div>
			<?php if (count($lama) > 0): ?>
			<?php foreach ($lama as $agenda): ?>
				<div class="agenda">
					<div class="agenda-row"> 
					<img src="<?= base_url("$this->theme_folder/$this->theme/images/iconsvg/agenda.svg") ?>" />
					<h3><?= tgl_indo2($agenda['tgl_agenda'])?><br/>Tempat : <?= $agenda['lokasi_kegiatan']?></h3>
					</div>
					<a href="<?= site_url('artikel/'.buat_slug($agenda))?>"><h2><?= $agenda['judul']?></h2></a>
				</div>
			<?php endforeach; ?>
			<?php else: ?>
				<div class="no-data">
				<img src="<?= base_url("$this->theme_folder/$this->theme/images/nodata.png") ?>" />
				<p>Mohon maaf, belum ada agenda yang akan dilaksanakan...</p>
				</div>
			<?php endif; ?>
	</div>
	</div>
	</div>
</div>





