<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="box-default bgwhite mb-10">
	<div class="heading-module bggradient1 flexcenter">
	<i class="fa fa-group"></i><h1 class="flexcenter">Data DPT</h1>
	</div>
	
	<div class="p-15">
	<div class="gridview">
		<div class="relative-hidden stat-isi">
			<div class="head-center-inner flexcenter mb-10 color-1">
				<h1 class="border-3" style="text-align:center;">Daftar Pemilih Tetap<br/>Per Hari Ini (<?= $tanggal_pemilihan ?>)</h1>
			</div>
			<div class="width-default mt-20">
				<div class="table-responsive">
					<table id="dpt" class="table table-bordered table-striped">
					<thead>
					<tr>
						<th class="text-center">No</th>
						<th class="text-center">Nama Dusun</th>
						<th class="text-center">RW</th>
						<th class="text-center">Jiwa</th>
						<th class="text-center">L</th>
						<th class="text-center">P</th>
					</tr>
					</thead><?php
					if(count($main) > 0){ ?>
						<tbody><?php
						foreach($main as $data){ ?>
							<tr>
								<td class="text-center"><?= $data["no"] ?></td>
								<td class="text-left"><?= strtoupper($data["dusun"]) ?></td>
								<td class="text-center"><?= strtoupper($data["rw"]) ?></td>
								<td class="text-center"><?= $data["jumlah_warga"] ?></td>
								<td class="text-center"><?= $data["jumlah_warga_l"] ?></td>
								<td class="text-center"><?= $data["jumlah_warga_p"] ?></td>
							</tr><?php
						} ?>
						</tbody>
						<tr>
							<th colspan="3" class="text-right">TOTAL</th>
							<th class="text-center"><?= $total["total_warga"] ?></th>
							<th class="text-center"><?= $total["total_warga_l"] ?></th>
							<th class="text-center"><?= $total["total_warga_p"] ?></th>
						</tr><?php
					} else { ?>
						<div class="no-found-small flexcenter">
							<img src="<?= base_url("$this->theme_folder/$this->theme/images/nodata.png") ?>"/>
							<p>Untuk sementara data Daftar Pemilih belum tersedia</p>
						</div>
						<?php
					} ?>
					</table>
				</div>
			</div>

		</div>
		<div class="sidebarright">
			<img style="width:100%;height:1px;display:block;" src="<?= base_url("$this->theme_folder/$this->theme/images/bigblank-image.png") ?>"/>
			<ul>
				<?php $this->load->view($folder_themes .'/partials/statistik/statistik_nav') ?>
			</ul>
		</div>
	</div>
	</div>

</div>
