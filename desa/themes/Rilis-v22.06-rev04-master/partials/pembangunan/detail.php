<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>


<div class="pembangunan">
<div class="box-default bgwhite mb-10">
	<div class="heading-module bggradient1 flexcenter">
	<i class="fa fa-gavel"></i><h1 class="flexcenter">Detail Pembangunan</h1>
	</div>
	<div class="relative-hidden plr-15 pt-15">

		<?php if ($pembangunan): ?>
			<div class="flexcenter mb-15">
			<h1><?= $pembangunan->judul ?></h1>
			</div>
			<div class="flex-container mlr-min-10">
				<div class="flexitem-2-default border-grey">
					<div class="relative-hidden">
						<img style="display:block;width:100%;heigh:auto;margin-bottom:10px;" title="<?= $pembangunan->keterangan; ?>" loading="lazy" src="<?= is_file(LOKASI_GALERI . $pembangunan->foto) == TRUE ? base_url() . LOKASI_GALERI . $pembangunan->foto : base_url("$this->theme_folder/$this->theme/assets/images/pengganti.jpg") ?>">
						
						<table style="width:100%;" class="penduduk">
							<tr><td style="width:35%;">Lokasi</td><td style="width:20px;text-align:center;">:</td><td><?= ($pembangunan->alamat == "=== Lokasi Tidak Ditemukan ===") ? 'Lokasi tidak diketahui' : $pembangunan->alamat; ?></td></tr>
							<tr><td style="width:35%;">Anggaran</td><td style="width:20px;text-align:center;">:</td><td>Rp. <?= number_format($pembangunan->anggaran,0) ?></td></tr>
							<tr><td style="width:35%;">Volume</td><td style="width:20px;text-align:center;">:</td><td><?= $pembangunan->volume ?></td></tr>
							<tr><td style="width:35%;">Sumber Dana</td><td style="width:20px;text-align:center;">:</td><td><?= $pembangunan->sumber_dana ?></td></tr>
							<tr><td style="width:35%;">Tahun</td><td style="width:20px;text-align:center;">:</td><td><?= $pembangunan->tahun_anggaran ?></td></tr>
							<tr><td style="width:35%;">Pelaksana</td><td style="width:20px;text-align:center;">:</td><td><?= $pembangunan->pelaksana_kegiatan ?></td></tr>
							<tr><td style="width:35%;">Manfaat</td><td style="width:20px;text-align:center;">:</td><td><?= $pembangunan->manfaat ?></td></tr>
							<tr><td style="width:35%;">Keterangan</td><td style="width:20px;text-align:center;">:</td><td><?= $pembangunan->keterangan ?></td></tr>
						</table>
					</div>
				</div>
				<div class="flexitem-2-default">
					<div class="relative-hidden">
						<div class="dokumentasi border-grey relative-hidden p-10 mb-15" style="border:1px solid;border-radius:5px;">
							<div class="head-center-inner flexcenter mb-10 color-1">
							<h1 class="border-3">Foto Dokumentasi</h1>
							</div>
							<?php if ($dokumentasi): ?>
							<div class="flex-container mlr-min-5">
							<?php foreach ($dokumentasi as $value): ?>
								<div class="flexitem-2-default bggrey2 border-grey">
								<div class="relative-hidden p-10">
								<a data-fancybox="gallery" href="<?= base_url(LOKASI_GALERI . $value->gambar); ?>">
								<div class="image-default">
									<?php if (is_file(LOKASI_GALERI . $value->gambar)): ?>
									<img src="<?= base_url(LOKASI_GALERI . $value->gambar); ?>" alt="Foto Pembangunan <?= $value->persentase; ?>"/>
									<?php else: ?>
									<img src="<?= base_url("$this->theme_folder/$this->theme/images/pengganti.jpg") ?>" alt="Foto Pembangunan <?= $value->persentase; ?>"/>
									<?php endif; ?>
								</div>
								</a>
								<div class="flexcenter mt-10"><p>Foto Pembangunan <?= $value->persentase; ?></p></div>
								</div>
								</div>
							<?php endforeach; ?>	
							</div>
							<?php else: ?>
								<div class="no-found-small flexcenter">
								<img src="<?= base_url("$this->theme_folder/$this->theme/images/nodata.png") ?>"/>
								<p>Untuk saat ini foto dokumentasi kegiatan pembangunan ini belum tersedia</p>
								</div>
							<?php endif; ?>	
						</div>
					
					</div>
					<div class="head-center-inner flexcenter mb-10 color-1">
						<h1 class="border-3">Lokasi</h1>
					</div>
					<?php if ($dokumentasi): ?>
						<div id="map" class="map-pemb1"></div>
						<?php else: ?>
						<div id="map" class="map-pemb2"></div>
					<?php endif; ?>
					<div class="head-center-inner flexcenter mt-15 mb-10 color-1">
						<h1 class="border-3">Bagikan :</h1>
					</div>
					<div style="width:100%;float:left;text-align:center;"> 
					<?php
						$share = [
						'link' => site_url('pembangunan/' . $pembangunan->slug),
						'judul' => $pembangunan->judul,
						];
						$this->load->view("$folder_themes/commons/share", $share);
					?>
					</div>
				</div>
			</div>
		<?php endif; ?>
</div>
</div>
</div>


<script type="text/javascript">
	$(document).ready(function() {
		let map_key = "<?= $this->setting->mapbox_key; ?>";
		let lat = "<?= $pembangunan->lat ?? $desa['lat']; ?>";
		let lng = "<?= $pembangunan->lng ?? $desa['lng']; ?>";
		let posisi = [lat, lng];
		let zoom = "<?= $desa['zoom'] ?? 10 ?>";
		let logo = L.icon({
			iconUrl: "<?= base_url('assets/images/gis/point/construction.png'); ?>",
            iconSize: [25, 25],
            shadowSize: [25, 32],
            iconAnchor: [20, 20],
            shadowAnchor: [5, 5],
            popupAnchor: [0, 0]
    });
		pembangunan = L.map('map').setView(posisi, zoom);
		getBaseLayers(pembangunan, map_key);
		pembangunan.addLayer(new L.Marker(posisi, {icon:logo}));
	});
</script>
