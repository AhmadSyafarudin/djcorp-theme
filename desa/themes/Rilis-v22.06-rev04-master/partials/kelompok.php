<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="box-default bgwhite mb-10">
	<div class="heading-module bggradient1 flexcenter">
	<i class="fa fa-group"></i><h1 class="flexcenter">Kelompok <?= $detail['nama']; ?></h1>
	</div>
	<div class="kelompok relative-hidden border-grey p-15">
		<?php if($detail['keterangan']): ?>
		<table style="width:100%;border:none;">
		<tbody style="border:none;">
			<tr>
				<td style="vertical-align:top;text-align:center;border:none;"><?= $detail['keterangan']?></td>
			</tr>
		</tbody>
		</table>
		<?php endif;?>
	</div>
	<div class="relative-hidden p-15">
		<div class="head-center-inner flexcenter mb-10 color-1">
		<h1 class="border-3">Pengurus</h1>
		</div>
		<div class="table-responsive" style="margin:0 !important;padding:0 !important;">
			<table class="penduduk" style="width:100%;">
				<thead>
					<tr>
						<th class="bggrey2" style="width:7%;text-align:center;">No</th>
						<th class="bggrey2">NAMA</th>
						<th class="bggrey2" style="text-align:center;">JABATAN</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($pengurus as $key => $data): ?>
					<tr>
						<td style="width:7%;text-align:center;"><?= $key + 1?></td>
						<td>
						<b><?= $data['nama']?></b>
						<br/>
						Alamat : <?= $data['alamat']?>
						</td>
						<td style="text-align:center;">
						<?= $data['jabatan']?>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<?php if($anggota): ?>
		<div class="head-center-inner flexcenter mt-30 mb-10 color-1">
		<h1 class="border-3">Anggota</h1>
		</div>
		<div class="table-responsive" style="margin:0 !important;padding:0 !important;">
			<table class="penduduk" style="width:100%;">
				<thead>
					<tr>
						<th class="bggrey2" style="width:7%;text-align:center;">No</th>
						<th class="bggrey2">NAMA</th>
						<th class="bggrey2" style="text-align:center;">No. Anggota</th>
						<th class="bggrey2" style="text-align:center;">Kelamin</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($anggota as $key => $data): ?>
					<tr>
						<td style="width:7%;text-align:center;"><?= $key + 1?></td>
						<td>
						<b><?= $data['nama']?></b>
						<br/>
						Alamat : <?= $data['alamat']?>
						</td>
						<td style="text-align:center;">
						<?= $data['no_anggota'] ?:'-'; ?>
						</td>
						<td style="text-align:center;">
						<?= $data['sex']; ?>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<?php endif;?>
	</div>
</div>		

<script>
	$(document).ready(function(){
		$('#tabel-data').DataTable({
			'processing': true,
			"pageLength": 10,
			'order': [],
			"info": false,
			'columnDefs': [
				{
					'searchable': false,
					'targets': 0
				},
				{
					'orderable': false,
					'targets': 0
				}
			],
			'language': {
				'url': BASE_URL + '/assets/bootstrap/js/dataTables.indonesian.lang'
			},
		});
	});
</script>
