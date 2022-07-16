<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<div class="column-1 anggaran">
<div class="relative-hidden pt-5">
	<div class="headmodule bggradient2 flexcenter mb-5">
		<i class="fa fa-search-plus"></i><h1>Transparansi Anggaran</h1>
	</div>
<div class="flex-container mlr-min-5">
<?php foreach ($data_widget as $subdata_name => $subdatas): ?>
	<div class="flexitem-3-default bgwhite border-grey">
		<div class="headmodule bggradient2 flexcenter mb-5">
			<h1 style="font-size:100%;"><?= ($subdatas['laporan'])?></h1>
		</div>

		<div class="pt-15 plr-20">			
					<div class="anggaran-isi">
					<?php foreach ($subdatas as $key => $subdata): ?>
					<?php if($subdata['judul'] != NULL and $key != 'laporan' and $subdata['realisasi'] != 0 or $subdata['anggaran'] != 0): ?>
						<div class="progress-group anggaran-progress">
							<h4><b><?= $subdata['judul']; ?></b></h4>
							<table style="width:100%;text-align:center;" class="mtb-5">
								<tr>
									<td class="border-grey">Realisasi</td>
									<td class="border-grey">Anggaran</td>
								</tr>
								<tr>
									<td class="border-grey" style="font-size:95%;">Rp. <?= number_format($subdata['realisasi']); ?></td>
									<td class="border-grey" style="font-size:95%;">Rp. <?= number_format($subdata['anggaran']); ?></td>
								</tr>
							</table>
							<div class="progress progress-bar-striped bgcolor2" align="right"><small></small>
								<div class="progress-bar progress-bar-striped" role="progressbar" style="width: <?= $subdata['persen'] ?>%" aria-valuenow="<?= $subdata['persen'] ?>" aria-valuemin="0" aria-valuemax="100"><span><?= $subdata['persen'] ?> %</span></div>
							</div>
						</div>
					<?php endif; ?>
					<?php endforeach; ?>
					</div>
		</div>
	</div>
<?php endforeach; ?>
</div>
</div>			
</div>	