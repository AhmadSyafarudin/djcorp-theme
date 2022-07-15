<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="relative-hidden statistik bgwhite mtb-5" style="border-radius:5px;">
	<div class="headmodule bggradient2 flexcenter">
		<i class="fa fa-bar-chart "></i><h1>Statistik</h1>
	</div>
	<div class="relative-hidden bgsoft">
		<div class="statistik-inner">
		<div class="flex-container mlr-min-5">
		<?php $i=0; ?>
		<?php foreach ($stat_widget as $data): ?>
			<?php if ($data['jumlah'] != "-" AND $data['nama']!= "JUMLAH"): ?>
				<div class="flexitem-3-default" style="margin-bottom:0;">
				<div class="stat-box flexcenter">
				<i class="fa color-1 <?php if($i==0){ echo "fa-male"; } elseif($i==1){ echo "fa-female"; } elseif($i==2) { echo "fa-users"; } elseif($i==3) { echo "fa-user-times"; } ?>"></i>
				<h3 class="flexcenter"><span id="count-<?= $i ?>" class="stat-big"><?= $data['jumlah']?></span> </h3><p><font style="text-transform:lowercase !important;"><?= $data['nama']?></font></p>
				</div>
				</div>
			<?php $i++; ?>
			<?php endif; ?>
		<?php endforeach; ?>
		</div>
		</div>
	</div>
	<div class="stat-penduduk bgwhite border-2 relative-hidden">
		<div class="stat-penduduk-margin">
		<div class="flex-container mlr-min-10">
			<div class="flexitem-6">
				<a href="<?= site_url(); ?>first/wilayah">
				<div class="stat-bubble border-grey">
					<img src="<?= base_url("$this->theme_folder/$this->theme/images/wilayah.png") ?>" />
				</div>
				<h2>Statistik Berdasarkan Wilayah</h2>
				</a> 
			</div>
			<div class="flexitem-6">
				<a href="<?= site_url(); ?>first/statistik/13">
				<div class="stat-bubble border-grey">
					<img src="<?= base_url("$this->theme_folder/$this->theme/images/usia.png") ?>" />
				</div>
				<h2>Statistik Berdasarkan Usia</h2>
				</a> 
			</div>
			<div class="flexitem-6">
				<a href="<?= site_url(); ?>first/statistik/0">
				<div class="stat-bubble border-grey">
					<img src="<?= base_url("$this->theme_folder/$this->theme/images/pendidikan.png") ?>" />
				</div>
				<h2>Statistik Berdasarkan Pendidikan</h2>
				</a> 
			</div>
			<div class="flexitem-6">
				<a href="<?= site_url(); ?>first/statistik/1">
				<div class="stat-bubble border-grey">
					<img src="<?= base_url("$this->theme_folder/$this->theme/images/pekerjaan.png") ?>" />
				</div>
				<h2>Statistik Berdasarkan Pekerjaan</h2>
				</a> 
			</div>
			<div class="flexitem-6">
				<a href="<?= site_url(); ?>first/statistik/3">
				<div class="stat-bubble border-grey">
					<img src="<?= base_url("$this->theme_folder/$this->theme/images/agama.png") ?>" />
				</div>
				<h2>Statistik Berdasarkan Agama</h2>
				</a> 
			</div>
			<div class="flexitem-6">
				<a href="<?= site_url(); ?>first/dpt">
				<div class="stat-bubble border-grey">
					<img src="<?= base_url("$this->theme_folder/$this->theme/images/pemilih.png") ?>" />
				</div>
				<h2>Statistik Data Pemilih</h2>
				</a> 
			</div>
		</div>
		</div>
	</div>
</div>