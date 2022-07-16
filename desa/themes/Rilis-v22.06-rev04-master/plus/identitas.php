<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<table class="penduduk" width="100%">
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

	<div class="width-default mt-15 pb-30">
	<table class="penduduk" width="100%">
		<tr>
			<td width="47%" style="vertical-align:top;">Kepala <?= ucwords($this->setting->sebutan_desa); ?></td>
			<td width="3%" style="vertical-align:top;">:</td>
			<td width="50%" style="text-align:left;vertical-align:top"><b><?= ucwords(($desa['nama_kepala_desa']) ? ' ' . $desa['nama_kepala_desa'] : ''); ?></b></td>
		</tr>
		<tr>
			<td width="47%" style="vertical-align:top;">Kantor</td>
			<td width="3%" style="vertical-align:top;">:</td>
			<td width="50%" style="text-align:left;vertical-align:top"><?= ucwords(($desa['alamat_kantor']) ? ' ' . $desa['alamat_kantor'] : ''); ?></td>
		</tr>
		<tr>
			<td width="47%" style="vertical-align:top;">Telp</td>
			<td width="3%" style="vertical-align:top;">:</td>
			<td width="50%" style="text-align:left;vertical-align:top"><?= ucwords(($desa['telepon']) ? ' ' . $desa['telepon'] : ''); ?></td>
		</tr>
		<tr>
			<td width="47%" style="vertical-align:top;">Email</td>
			<td width="3%" style="vertical-align:top;">:</td>
			<td width="50%" style="text-align:left;vertical-align:top"><?= ucwords(($desa['email_desa']) ? ' ' . $desa['email_desa'] : ''); ?></td>
		</tr>
	</table>
	</div>