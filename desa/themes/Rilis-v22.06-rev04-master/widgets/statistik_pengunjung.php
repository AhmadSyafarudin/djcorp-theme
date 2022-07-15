<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<div class="box-default bgwhite mb-10">
	<div class="heading-module bggradient1 flexcenter">
	<i class="fa fa-line-chart"></i><h1 class="flexcenter"><?= $judul_widget ?></h1>
	</div>
	<div class="relative-row p-10">
		<table style="width: 100%;" cellpadding="0" cellspacing="0" class="pengunjung table-striped" >
			<tr>
				<td>Hari ini</td><td class="dot">:</td><td><?= ribuan($statistik_pengunjung['hari_ini']); ?></td>
			</tr>
			<tr>
				<td class="description">Kemarin</td><td class="dot">:</td><td class="case"><?= ribuan($statistik_pengunjung['kemarin']); ?></td>
						</tr>
						<tr>
							<td class="description">Total</td><td class="dot">:</td><td class="case"><?= ribuan($statistik_pengunjung['total']); ?></td>
						</tr>
						<tr>
							<td class="description">Sistem Operasi</td><td class="dot">:</td><td class="case"><?= $statistik_pengunjung['os']; ?></td>
						</tr>
						<tr>
							<td class="description">IP Address</td><td class="dot">:</td><td class="case"><?= $statistik_pengunjung['ip_address']; ?></td>
						</tr>
						<tr>
							<td class="description">Browser</td><td class="dot">:</td><td class="case"><?= $statistik_pengunjung['browser']; ?></td>
						</tr>
					</table>
	</div>
</div>

