<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="width-default mb-10">
	<h1><?= $single_artikel["judul"]?></h1>
	<div class="relative-hidden pt-5">
	<div class="info-other flexleft"><i class="fa fa-calendar flexleft"></i><?= tgl_indo($single_artikel['tgl_upload']);?></div>
	<div class="info-other flexleft"><i class="fa fa-eye flexleft"></i><?= hit($single_artikel['hit']) ?></div>
	<div class="info-other flexleft"><i class="fa fa-user flexleft"></i><?= $single_artikel['owner'] ?></div>
	</div>
</div>
<?php $this->load->view("$folder_themes/partials/artikel_image.php"); ?>

<?php if ($single_artikel['dokumen']!='' and is_file(LOKASI_DOKUMEN.$single_artikel['dokumen'])): ?>
	<div class="lampiran flexcenter mtb-15">
		<div>
		<p style="margin:0 0 10px;">Tersedia file lampiran <b><?= $single_artikel['link_dokumen']?></b></p>
		<div class="flexcenter">
			<a href="<?= site_url("first/unduh_dokumen_artikel/{$single_artikel[id]}") ?>" title=""><button class="button-default bgcolor1 "  style="margin:5px 5px;"><p>Download File</p></button></a>
		</div>
		</div>
	</div>
<?php endif; ?>

<?php if ($single_artikel['id_kategori'] == 1000) : ?>
	<div class="collapse-right">
		<table class="table" style="border:none !important;">
			<tbody style="border:none !important;">
				<tr style="border:none !important;">
					<td style="width:35%;padding:10px 0;vertical-align:top;border:none !important;">Tanggal</td>
					<td style="width:5%;padding:10px 0;vertical-align:top;border:none !important;">:</td>
					<td style="width:60%;padding:10px 0;vertical-align:top;border:none !important;"><?= tgl_indo2($detail_agenda['tgl_agenda']) ?></td>
				</tr>
				<tr style="border:none !important;">
					<td style="width:35%;padding:10px 0;vertical-align:top;border:none !important;">Tempat</td>
					<td style="width:5%;padding:10px 0;vertical-align:top;border:none !important;">:</td>
					<td style="width:60%;padding:10px 0;vertical-align:top;border:none !important;"><?= $detail_agenda['lokasi_kegiatan'] ?></td>
				</tr>	
				<tr style="border:none !important;">
					<td style="width:35%;padding:10px 0;vertical-align:top;border:none !important;">Koordinator</td>
					<td style="width:5%;padding:10px 0;vertical-align:top;border:none !important;">:</td>
					<td style="width:60%;padding:10px 0;vertical-align:top;border:none !important;">
					<?php if (!empty($detail_agenda['koordinator_kegiatan'])): ?>
					<?= $detail_agenda['koordinator_kegiatan'] ?>
					<?php else: ?>
					-
					<?php endif; ?>
					</td>
				</tr>	
			</tbody>
		</table>
	</div>
<?php endif; ?>

<div class="isi-content ptb-15">
	<?= $single_artikel["isi"]?>
</div>

<?php $this->load->view("$folder_themes/plus/share.php"); ?>

<?php $this->load->view("$folder_themes/plus/komen.php"); ?>