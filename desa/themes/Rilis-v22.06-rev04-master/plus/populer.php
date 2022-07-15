<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="populer bgwhite border-grey mtb-5">
		<div class="headmodule bggradient-vertical flexcenter mb-5">
			<i class="fa fa-heart"></i><h1>Populer</h1>
		</div>
		<div class="relative-hidden plr-10 pt-5">
		<div class="withscroll">
		<?php foreach (array('populer' => 'arsip_populer') as $jenis => $jenis_arsip) : ?>
			<?php $count = 0;
			foreach ($$jenis_arsip as $arsip): ?>
			<?php if ($count < 6): ?>
				<div class="relative-hidden arsip-row mb-10">
					<a href="<?= site_url('artikel/'.buat_slug($arsip))?>">
						<div class="arsip-row-image">
							<?php if (is_file(LOKASI_FOTO_ARTIKEL.'sedang_'.$arsip[gambar])): ?>
							<img src="<?= base_url(LOKASI_FOTO_ARTIKEL.'sedang_'.$arsip[gambar])?>"/>
							<?php else: ?>
							<img src="<?= base_url("$this->theme_folder/$this->theme/images/pengganti.jpg") ?>"/>
							<div class="logo-no-image"><img src="<?= gambar_desa($desa['logo']);?>"/></div>
							<?php endif;?>
							<div class="image-slider-shadow"></div>
						</div>
						<div class="arsip-row-title">
						<div>
						<div class="info-other flexleft"><i class="fa fa-eye flexleft"></i><?= hit($arsip['hit']); ?> dibuka</div>
						<div class="info-other"><p><?= tgl_indo($arsip['tgl_upload']);?> | <?= $arsip["judul"] ?></p></div>
						</div>
						</div>
					</a>
				</div>
			<?php endif;
			$count++;
			endforeach; ?>
		<?php endforeach ?>			
		</div>
		</div>
	</div>