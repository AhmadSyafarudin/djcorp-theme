<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="relative-hidden">
<?php if ($this->setting->layanan_mandiri && $w_gal): ?>
	<div class="duet-col">
	<div class="mlr-min-5">
		<div class="column-2">
			<div class="plr-5">
			<?php $this->load->view("$folder_themes/plus/layanan_mandiri"); ?>
			</div>
		</div>
		<div class="column-2">
			<div class="plr-5">
			<?php $this->load->view("$folder_themes/widgets/galeri"); ?>
			</div>
		</div>
	</div>
	</div>
<?php elseif ($this->setting->layanan_mandiri): ?>
	<?php $this->load->view("$folder_themes/plus/layanan_mandiri"); ?>	
<?php elseif ($w_gal): ?>
	<div class="duet-col">
	<div class="mlr-min-5">
		<div class="column-2">
			<div class="plr-5">
			<?php $this->load->view("$folder_themes/widgets/galeri"); ?>
			</div>
		</div>
		<div class="column-2">
			<div class="plr-5">
			<div class="relative-hidden ptb-5">
			<div class="headmodule bgcolor1 flexcenter">
				<h1>Identitas <?= ucwords($this->setting->sebutan_desa); ?></h1>
			</div>
			<div class="identitas-alt bggradient1">
				<div class="identitas-alt-abs">
				<div class="withscroll">
					<table id="table-agenda" width="100%">
						<tr>
							<td width="47%" style="vertical-align:top;">Nama <?= ucwords($this->setting->sebutan_desa); ?></td>
							<td width="3%" style="vertical-align:top;">:</td>
							<td width="50%" style="text-align:left;vertical-align:top"><b><?= ucwords(($desa['nama_desa']) ? ' ' . $desa['nama_desa'] : ''); ?></b></td>
						</tr>
						<tr>
							<td width="47%" style="vertical-align:top;">Kode <?= ucwords($this->setting->sebutan_desa); ?></td>
							<td width="3%" style="vertical-align:top;">:</td>
							<td width="50%" style="text-align:left;vertical-align:top"><?= ucwords(($desa['kode_desa']) ? ' ' . $desa['kode_desa'] : ''); ?></td>
						</tr>
						<tr>
							<td width="47%" style="vertical-align:top;"><?= ucwords($this->setting->sebutan_kecamatan); ?></td>
							<td width="3%" style="vertical-align:top;">:</td>
							<td width="50%" style="text-align:left;vertical-align:top"><?= ucwords(($desa['nama_kecamatan']) ? ' ' . $desa['nama_kecamatan'] : ''); ?></td>
						</tr>
						<tr>
							<td width="47%" style="vertical-align:top;">Kode <?= ucwords($this->setting->sebutan_kecamatan); ?></td>
							<td width="3%" style="vertical-align:top;">:</td>
							<td width="50%" style="text-align:left;vertical-align:top"><?= ucwords(($desa['kode_kecamatan']) ? ' ' . $desa['kode_kecamatan'] : ''); ?></td>
						</tr>
						<tr>
							<td width="47%" style="vertical-align:top;"><?= ucwords($this->setting->sebutan_kabupaten); ?></td>
							<td width="3%" style="vertical-align:top;">:</td>
							<td width="50%" style="text-align:left;vertical-align:top"><?= ucwords(($desa['nama_kabupaten']) ? ' ' . $desa['nama_kabupaten'] : ''); ?></td>
						</tr>
						<tr>
							<td width="47%" style="vertical-align:top;">Kode <?= ucwords($this->setting->sebutan_kabupaten); ?></td>
							<td width="3%" style="vertical-align:top;">:</td>
							<td width="50%" style="text-align:left;vertical-align:top"><?= ucwords(($desa['kode_kabupaten']) ? ' ' . $desa['kode_kabupaten'] : ''); ?></td>
						</tr>
						<tr>
							<td width="47%" style="vertical-align:top;">Provinsi</td>
							<td width="3%" style="vertical-align:top;">:</td>
							<td width="50%" style="text-align:left;vertical-align:top"><?= ucwords(($desa['nama_propinsi']) ? ' ' . $desa['nama_propinsi'] : ''); ?></td>
						</tr>
						<tr>
							<td width="47%" style="vertical-align:top;">Kode Provinsi</td>
							<td width="3%" style="vertical-align:top;">:</td>
							<td width="50%" style="text-align:left;vertical-align:top"><?= ucwords(($desa['kode_propinsi']) ? ' ' . $desa['kode_propinsi'] : ''); ?></td>
						</tr>
						<tr>
							<td width="47%" style="vertical-align:top;">Kode Pos</td>
							<td width="3%" style="vertical-align:top;">:</td>
							<td width="50%" style="text-align:left;vertical-align:top"><?= ucwords(($desa['kode_pos']) ? ' ' . $desa['kode_pos'] : ''); ?></td>
						</tr>
					</table>
				</div>
				</div>
			</div>
			</div>
			</div>
		</div>
	</div>
	</div>
<?php endif; ?>
</div>