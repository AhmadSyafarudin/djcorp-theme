<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="box-default bgwhite mb-10">
	<div class="heading-module bggradient1 flexcenter">
	<i class="fa fa-pencil"></i><h1 class="flexcenter">Suplemen</h1>
	</div>
	<div class="head-center-inner flexcenter mt-20 mb-10 color-1">
		<h1 class="border-3"><?= $main['suplemen']['nama']; ?></h1>
	</div>
	<div class="relative-hidden p-15">
		<table class="table" style="width:100%;">
		<tbody>
			<tr>
				<td style="vertical-align:top;">Nama Data</td>
				<td style="vertical-align:top;text-align:center;width:10px;">:</td>
				<td style="vertical-align:top;"><?= $main['suplemen']['nama']; ?></td>
			</tr>
			<tr>
				<td style="vertical-align:top;">Sasaran Terdata</td>
				<td style="vertical-align:top;text-align:center;width:10px;">:</td>
				<td style="vertical-align:top;"><?= $sasaran[$main['suplemen']['sasaran']]; ?></td>
			</tr>
			<tr>
				<td style="vertical-align:top;">Keterangan</td>
				<td style="vertical-align:top;text-align:center;width:10px;">:</td>
				<td style="vertical-align:top;"><?= $main['suplemen']['keterangan']; ?></td>
			</tr>
		</tbody>
		</table>
		
		<div class="table-responsive">
			<table class="penduduk" id="tabel-data" style="width:100%;">
				<thead>
					<tr>
						<th class="bggrey2" style="width:7%;text-align:center;border-right:none !important;">No</th>
						<th class="bggrey2" style="border-right:none !important;">PENDUDUK</th>
						<th class="bggrey2" style="text-align:center;border-right:none !important;">LAHIR</th>
						<th class="bggrey2" style="text-align:center;">KELAMIN</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($main['terdata'] as $key => $data): ?>
						<tr>
							<td style="width:7%;text-align:center;border-top:none !important;border-right:none !important;"><?= ($key + 1); ?></td>
							<td style="border-top:none !important;border-right:none !important;">
							<b><?= $data['terdata_nama']; ?></b><br/>
							Alamat : <?= $data["info"];?>
							</td>
							<td style="text-align:center;border-top:none !important;border-right:none !important;">
							<?= $data["tempat_lahir"]; ?>
							</td>
							<td style="text-align:center;border-top:none !important;">
							<?= $data["sex"]; ?>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
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
