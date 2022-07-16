<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * File ini:
 *
 * View halaman lapak pada website
 *
 *
 * donjo-app/views/web/halaman_statis/lapak.php
 *
 */

/**
 *
 * File ini bagian dari:
 *
 * OpenSID
 *
 * Sistem informasi desa sumber terbuka untuk memajukan desa
 *
 * Aplikasi dan source code ini dirilis berdasarkan lisensi GPL V3
 *
 * Hak Cipta 2009 - 2015 Combine Resource Institution (http://lumbungkomunitas.net/)
 * Hak Cipta 2016 - 2020 Perkumpulan Desa Digital Terbuka (https://opendesa.id)
 *
 * Dengan ini diberikan izin, secara gratis, kepada siapa pun yang mendapatkan salinan
 * dari perangkat lunak ini dan file dokumentasi terkait ("Aplikasi Ini"), untuk diperlakukan
 * tanpa batasan, termasuk hak untuk menggunakan, menyalin, mengubah dan/atau mendistribusikan,
 * asal tunduk pada syarat berikut:
 *
 * Pemberitahuan hak cipta di atas dan pemberitahuan izin ini harus disertakan dalam
 * setiap salinan atau bagian penting Aplikasi Ini. Barang siapa yang menghapus atau menghilangkan
 * pemberitahuan ini melanggar ketentuan lisensi Aplikasi Ini.
 *
 * PERANGKAT LUNAK INI DISEDIAKAN "SEBAGAIMANA ADANYA", TANPA JAMINAN APA PUN, BAIK TERSURAT MAUPUN
 * TERSIRAT. PENULIS ATAU PEMEGANG HAK CIPTA SAMA SEKALI TIDAK BERTANGGUNG JAWAB ATAS KLAIM, KERUSAKAN ATAU
 * KEWAJIBAN APAPUN ATAS PENGGUNAAN ATAU LAINNYA TERKAIT APLIKASI INI.
 *
 * @package	OpenSID
 * @author	Tim Pengembang OpenDesa
 * @copyright	Hak Cipta 2009 - 2015 Combine Resource Institution (http://lumbungkomunitas.net/)
 * @copyright	Hak Cipta 2016 - 2020 Perkumpulan Desa Digital Terbuka (https://opendesa.id)
 * @license	http://www.gnu.org/licenses/gpl.html	GPL V3
 * @link 	https://github.com/OpenSID/OpenSID
 */
?>

<div class="lapak">
<div class="box-default bgwhite mb-10">
	<div class="heading-module bggradient1 flexcenter">
	<i class="fa fa-shopping-cart"></i><h1 class="flexcenter">Lapak <?= ucwords($this->setting->sebutan_desa); ?></h1>
	</div>
	<div class="relative-hidden plr-15 pt-15">
		<div class="flexcenter mb-20">
			<form method="get" class="form-inline text-center">
			<div class="row">
				<div class="col-sm-12">
					<select class="form-control select2" id="id_kategori" name="id_kategori">
						<option selected value="">Semua Kategori</option>
						<?php foreach ($kategori as $kategori_item) : ?>
							<option value="<?= $kategori_item->id ?>" <?= selected($id_kategori, $kategori_item->id) ?>><?= $kategori_item->kategori ?></option>
						<?php endforeach; ?>
					</select>
					<input type="text" name="keyword" maxlength="50" class="form-control" value="<?= $keyword; ?>" placeholder="Cari Produk">
					<button type="submit" class="tombol bgcolor1">Cari</button>
				</div>
			</div>
		</form>
		</div>
		<?php if ($produk): ?>
		<div class="flex-container mlr-min-10">
			<?php foreach ($produk as $in => $pro): ?>
			<?php $foto = json_decode($pro->foto); ?>
				<div class="flexitem-4 bggrey2">
				<div class="relative-hidden p-10">
					<?php if ($pro->foto): ?>
					<div id="foto-produk-<?= $in; ?>" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
						<?php for ($i = 0; $i < $this->setting->banyak_foto_tiap_produk; $i++): ?>
						<?php if ($foto[$i]): ?>
							<div class="item <?= jecho($i, 0, 'active'); ?>">
							<?php if (is_file(LOKASI_PRODUK . $foto[$i])): ?>
								<a href="<?= base_url(LOKASI_PRODUK . $foto[$i]); ?>"  data-fancybox="images">
									<div class="image-default" style="border-radius:5px !important;">
									<img src="<?= base_url(LOKASI_PRODUK . $foto[$i]); ?>" alt="Foto <?= ($i+1); ?>">
									</div>
								</a>
							<?php else: ?>
								<div class="image-default" style="border-radius:5px !important;">
									<img src="<?= base_url("$this->theme_folder/$this->theme/images/pengganti.jpg") ?>"/>
								</div>
							<?php endif; ?>
							</div>
						<?php endif; ?>
						<?php endfor; ?>
						</div>
						<a class="left carousel-control flexcenter" href="#foto-produk-<?= $in; ?>" data-slide="prev" style="border-radius:5px !important;"><div class="carousel-control-leftarrow"></div></a>
						<a class="right carousel-control flexcenter" href="#foto-produk-<?= $in; ?>" data-slide="next" style="border-radius:5px !important;"><div class="carousel-control-rightarrow"></div></a>
					</div>	
					<?php else: ?>
						<div class="image-default" style="border-radius:5px !important;">
							<img src="<?= base_url("$this->theme_folder/$this->theme/images/pengganti.jpg") ?>"/>
						</div>
					<?php endif; ?>
					
					<h2><?= $pro->nama; ?></h2>
					
					<div class="harga-produk flexcenter">
					<?php $harga_potongan = ($pro->tipe_potongan == 1) ? ($pro->harga * ($pro->potongan / 100)) : $pro->potongan; ?>
					<p>
						<?php if ($pro->potongan != 0): ?>
						<font style="color:red; text-decoration: line-through red;"><?= rupiah($pro->harga); ?></font>
						<?php endif; ?>
					</p>
					<p class="color-1"><?= rupiah($pro->harga - $harga_potongan); ?></p>	
					</div>
					
				</div>
				<div class="link-produk flexcenter">
					<a data-remote="false" data-toggle="modal" data-target="#detail<?= $in; ?>" title="Detail"><div class="tombol bgcolor2 flexcenter"><i class="fa fa-info"></i></div></a>
					<?php if ($pro->telepon): ?>
						<?php $pesan = strReplaceArrayRecursive(['[nama_produk]' => $pro->nama, '[link_web]' => base_url('lapak'), '<br />' => "%0A"], nl2br($this->setting->pesan_singkat_wa)); ?>
						<a href="https://api.whatsapp.com/send?phone=<?=format_telpon($pro->telepon);?>&amp;text=<?= $pesan; ?>" rel="noopener noreferrer" target="_blank" title="WhatsApp">
						<div class="tombol bgcolor1 flexcenter"><i class="fa fa-shopping-cart "></i></div>
						</a>
					<?php endif; ?>
					<a data-remote="false" data-toggle="modal" data-target="#map-modal" title="Lokasi" data-lat="<?= $pro->lat?>" data-lng="<?= $pro->lng?>" data-zoom="<?= $pro->zoom?>" data-title="Lokasi <?= $pro->pelapak?>">	
					<div class="tombol bgorange flexcenter"><i class="fa fa-map-marker"></i></div>
					</a>
				</div>
				</div>
				
				<div class='modal fade' id="detail<?= $in; ?>" tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true' data-backdrop="false">
				<div class="modal-dialog">
					<div class="modal-center-small bgwhite">
						<div class="modal-head bggradient2 flexleft">
						Detail Produk
						<div class="close-area flexcenter">
							<div class="close-button" data-dismiss="modal" aria-hidden="true">
							<svg x="0px" y="0px" viewBox="0 0 492 492">
							</div>
						</div>
						</div>
						<div class="modal-isi">
						<div class="withscroll">
						<div class="p-15">
							<h1 class="mb-10"><?= $pro->nama; ?></h1>
							<table style="width:100%;" class="mb-10">
								<tr>
									<td style="vertical-align:top;">Kategori</td>
									<td style="width:20px;text-align:center;vertical-align:top;">:</td>
									<td style="vertical-align:top;"><?= $pro->kategori ?></td>
								</tr>
								<tr>
									<td style="vertical-align:top;">Pelapak</td>
									<td style="width:20px;text-align:center;vertical-align:top;">:</td>
									<td style="vertical-align:top;"><?= $pro->pelapak ?? 'ADMIN'; ?></td>
								</tr>
								<tr>
									<td style="vertical-align:top;">Harga</td>
									<td style="width:20px;text-align:center;vertical-align:top;">:</td>
									<td style="vertical-align:top;"><?= rupiah($pro->harga - $harga_potongan); ?></td>
								</tr>
								<tr>
									<td style="vertical-align:top;">Deskripsi</td>
									<td style="width:20px;text-align:center;vertical-align:top;">:</td>
									<td style="vertical-align:top;"><?= nl2br($pro->deskripsi); ?></td>
								</tr>
							</table>
							<?php if ($pro->telepon): ?>
								<div class="flexcenter mb-10">
								<?php $pesan = strReplaceArrayRecursive(['[nama_produk]' => $pro->nama, '[link_web]' => base_url('lapak'), '<br />' => "%0A"], nl2br($this->setting->pesan_singkat_wa)); ?>
								<a href="https://api.whatsapp.com/send?phone=<?=format_telpon($pro->telepon);?>&amp;text=<?= $pesan; ?>" rel="noopener noreferrer" target="_blank" title="WhatsApp">
								<div class="tombol bgcolor1 flexcenter"><i class="fa fa-shopping-cart"></i><p style="margin-left:5px;">Beli</p></div>
								</a>
								</div>
							<?php endif; ?>
							<?php if ($pro->foto): ?>
								<div id="foto-produk-<?= $in; ?>" class="carousel slide" data-ride="carousel">
									<?php for ($i = 0; $i < $this->setting->banyak_foto_tiap_produk; $i++): ?>
									<?php if ($foto[$i]): ?>
										<div class="item <?= jecho($i, 0, 'active'); ?>">
										<div class="ptb-5">
										<?php if (is_file(LOKASI_PRODUK . $foto[$i])): ?>
											<img style="width:100%;height:auto;margin:0 0 5px;" src="<?= base_url(LOKASI_PRODUK . $foto[$i]); ?>" alt="Foto <?= ($i+1); ?>">
										<?php endif; ?>
										</div>
										</div>
									<?php endif; ?>
									<?php endfor; ?>
								</div>	
								<?php else: ?>
									<div class="image-lapak">
										<img src="<?= base_url("$this->theme_folder/$this->theme/images/pengganti.jpg") ?>"/>
									</div>
								<?php endif; ?>
								
						</div>
						</div>
						</div>
					</div>
				</div>
				</div>
			<?php endforeach; ?>
			
			<div class='modal fade' id="map-modal" tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true' data-backdrop="false">
				<div class="modal-dialog">
					<div class="modal-center-medium bgwhite">
						<div class="modal-head bggradient2 flexleft">
						Lokasi Pelapak
						<div class="close-area flexcenter">
							<div class="close-button" data-dismiss="modal" aria-hidden="true">
							<svg x="0px" y="0px" viewBox="0 0 492 492">
							</div>
						</div>
						</div>
						<div class="modal-isi">
						<div class="modal-body" style="padding:0;">
						</div>
					</div>
				</div>
				</div>
			
			</div>
			
			<div class="width-default">
			<?php $this->load->view("$folder_themes/commons/page"); ?>
			</div>
			
		
	</div>
	<?php else: ?>
		<div class="no-data-big flexcenter">
			<img src="<?= base_url("$this->theme_folder/$this->theme/images/nodata.png") ?>" />
				<div>
					<h3 class="color-1">Mohon maaf,</h3>
					<p>Untuk saat ini data Lapak belum tersedia</p>
				</div>
		</div>
	<?php endif; ?>
</div>
</div>
</div>

<script type="text/javascript">
	var token = "<?= $this->setting->mapbox_key; ?>";

	$(document).ready(function() {
		$(document).on('shown.bs.modal','#map-modal', function(event) {
			var link = $(event.relatedTarget);
			var title = link.data('title');
			var modal = $(this);
			modal.find('.modal-title').text(title);
			modal.find('.modal-body').html("<div id='map' style='width: 100%;'></div>");

			var posisi = [link.data('lat'), link.data('lng')];
			var zoom = link.data('zoom');
			$("#lat").val(link.data('lat'));
			$("#lng").val(link.data('lng'));

			// Inisialisasi tampilan peta
			pelapak = L.map('map').setView(posisi, zoom);

			// Menampilkan BaseLayers Peta
			getBaseLayers(pelapak, token);

			// Tampilkan Posisi Pelapak
			marker = new L.Marker(posisi, {draggable:false});
			pelapak.addLayer(marker);
		});
	});
</script>