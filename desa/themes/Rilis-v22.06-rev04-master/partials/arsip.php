<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="box-default bgwhite mb-10">
	<div class="heading-module bggradient1 flexcenter">
	<i class="fa fa-folder-open"></i><h1 class="flexcenter">Arsip Artikel</h1>
	</div>
	<div class="relative-hidden p-15">
		<?php if(count($farsip)>0): ?>
			<div class="table-responsive">
				<table>
					<thead>
						<tr>
							<td style="vertical-align:top;width:10%;text-align:center;padding:7px 5px;"><b>No.</b></td>
							<td style="vertical-align:top;padding:7px 5px;"><b>Artikel</b></td>
							<td style="vertical-align:top;text-align:center;padding:7px 5px;"><b>Penulis</b></td>
							<td style="vertical-align:top;text-align:center;padding:7px 5px;"><b>Dibaca</b></td>
						</tr>
					</thead>
					<tbody>
						<?php foreach($farsip AS $data): ?>
							<tr>
								<td class="border-grey" style="text-align:center;vertical-align:top;border:none;border-top:1px solid;padding:5px;">
									<?= $data["no"]?>
								</td>
								<td class="border-grey" style="vertical-align:top;border:none;border-top:1px solid;padding:5px;">
									<?= tgl_indo($data["tgl_upload"])?><br/>
									<b><a href="<?= site_url('artikel/'.buat_slug($data))?>"><?= $data["judul"]?></a></b>
								</td>
								<td class="border-grey" style="text-align:center;vertical-align:top;border:none;border-top:1px solid;padding:5px;">
									<?= $data["owner"]?>
								</td>
								<td class="border-grey" style="text-align:center;vertical-align:top;border:none;border-top:1px solid;padding:5px;">
									<?= hit($data['hit']) ?>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
			<?php
				$data['paging_page'] = 'arsip';
				$this->load->view("$folder_themes/commons/page", $data);
			?>

		<?php else: ?>
				<div class="not-found">
						<h3>Mohon maaf, belum ada artikel</h3>
						<img src="<?= base_url("$this->theme_folder/$this->theme/images/no-found.png") ?>"/>
					</div>
		<?php endif; ?>
	</div>
</div>		