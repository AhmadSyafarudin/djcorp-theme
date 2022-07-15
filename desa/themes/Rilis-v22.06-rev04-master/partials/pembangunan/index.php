<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div class="pembangunan">
<div class="box-default bgwhite mb-10">
	<div class="heading-module bggradient1 flexcenter">
	<i class="fa fa-gavel"></i><h1 class="flexcenter">Pembangunan <?= ucwords($this->setting->sebutan_desa); ?></h1>
	</div>
	<div class="relative-hidden plr-15 pt-15">

		<?php if ($pembangunan): ?>
		<div class="flex-container mlr-min-10">
			<?php foreach ($pembangunan as $data): ?>
				<div class="flexitem-3pemb bggrey2">
				<div class="relative-hidden p-10">
					<div class="image-default">
					<a href="<?= base_url() . LOKASI_GALERI . $data->foto; ?>"  data-fancybox="images">
					<img src="<?= is_file(LOKASI_GALERI . $data->foto) == TRUE ? base_url() . LOKASI_GALERI . $data->foto : base_url("$this->theme_folder/$this->theme/assets/images/pengganti.jpg") ?>">
					</a>
					</div>
					<h2><?= $data->judul ?></h2>
					<table style="width:100%;">
						<tr>
							<td>Tahun</td>
							<td style="width:20px;rexr-align:center;">:</td>
							<td><?= $data->tahun_anggaran ?></td>
						</tr>
						<tr>
							<td>Volume</td>
							<td style="width:20px;rexr-align:center;">:</td>
							<td><?= $data->volume ?></td>
						</tr>
						<tr>
							<td>Anggaran</td>
							<td style="width:20px;rexr-align:center;">:</td>
							<td>Rp. <?= number_format($data->anggaran,0) ?></td>
						</tr>
					</table>
					
				</div>
				<div class="link-pembangunan flexcenter">
					<?php if(IS_PREMIUM) : ?>
					<a href="<?= site_url("pembangunan/$data->slug"); ?>" title="Detail"><div class="tombol bgcolor1 flexcenter"><i class="fa fa-paper-plane"></i><p style="margin-left:5px;">Selengkapnya</p></div></a>
					<?php else : ?>
					<a href="<?= site_url("pembangunan/detail/$data->id"); ?>" title="Detail"><div class="tombol bgcolor1 flexcenter"><i class="fa fa-paper-plane"></i><p style="margin-left:5px;">Selengkapnya</p></div></a>
					<?php endif ?>
					<a href="https://www.google.com/maps/dir//<?= $data->lat?>,<?= $data->lng?>" title="Lokasi" rel="noopener noreferrer" target="_blank"><div class="tombol bgcolor2 flexcenter"><i class="fa fa-map-marker"></i><p style="margin-left:5px;">Lokasi</p></div></a>
				</div>
				</div>
			<?php endforeach; ?>
			
			<div class="width-default">
			<?php $this->load->view("$folder_themes/commons/page"); ?>
			</div>

		</div>
	<?php else: ?>
		<div class="no-data-big flexcenter">
			<img src="<?= base_url("$this->theme_folder/$this->theme/images/nodata.png") ?>" />
				<div>
					<h3 class="color-1">Mohon maaf,</h3>
					<p>Untuk saat ini data Pembangunan belum tersedia</p>
				</div>
		</div>
	<?php endif; ?>	
</div>
</div>
</div>
