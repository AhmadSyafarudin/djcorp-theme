<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="terbaru_populer">
<div class="flex-container mlr-min-5">
	<div class="flexitem-2-newsb bgwhite">
		<div class="headmodule bggradient-vertical flexcenter mb-5">
			<i class="fa fa-heart"></i><h1>Populer</h1>
		</div>
		<div class="relative-hidden plr-10 pt-5">
		<div class="flex-container mlr-min-5">
		<?php foreach (array('populer' => 'arsip_populer') as $jenis => $jenis_arsip) : ?>
			<?php $count = 0;
			foreach ($$jenis_arsip as $arsip): ?>
			<?php if ($count < 4): ?>
				<div class="flexitem-2-news">
					<a href="<?= site_url('artikel/'.buat_slug($arsip))?>">
					<div class="relative-hidden p-10">
						<div class="image-short mb-5">
							<?php if (is_file(LOKASI_FOTO_ARTIKEL.'sedang_'.$arsip[gambar])): ?>
							<img src="<?= base_url(LOKASI_FOTO_ARTIKEL.'sedang_'.$arsip[gambar])?>"/>
							<?php else: ?>
							<img src="<?= base_url("$this->theme_folder/$this->theme/images/pengganti.jpg") ?>"/>
							<div class="logo-no-image"><img src="<?= gambar_desa($desa['logo']);?>"/></div>
							<?php endif;?>
						</div>
						<div class="arsip-row-title"><p><?= hit($arsip['hit']); ?> dibuka<br/><span class="color-1"><?= $arsip["judul"] ?></span></p></div>
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
	<div class="flexitem-2-newsb bgwhite">
		<div class="headmodule bggradient-vertical flexcenter mb-5">
			<i class="fa fa-star"></i><h1>Terbaru</h1>
		</div>
		<div class="relative-hidden plr-10 pt-5">
		<div class="flex-container mlr-min-5">
		<?php foreach (array('terkini' => 'arsip_terkini') as $jenis => $jenis_arsip) : ?>
			<?php $count = 0;
			foreach ($$jenis_arsip as $arsip): ?>
			<?php if ($count < 4): ?>
				<div class="flexitem-2-news">
					<a href="<?= site_url('artikel/'.buat_slug($arsip))?>">
						<div class="relative-hidden p-10">
						<div class="image-short mb-5">
							<?php if (is_file(LOKASI_FOTO_ARTIKEL.'sedang_'.$arsip[gambar])): ?>
							<img src="<?= base_url(LOKASI_FOTO_ARTIKEL.'sedang_'.$arsip[gambar])?>"/>
							<?php else: ?>
							<img src="<?= base_url("$this->theme_folder/$this->theme/images/pengganti.jpg") ?>"/>
							<div class="logo-no-image"><img src="<?= gambar_desa($desa['logo']);?>"/></div>
							<?php endif;?>
						</div>
						<div class="arsip-row-title"><p><?= tgl_indo($arsip['tgl_upload']); ?><br/><span class="color-1"><?= $arsip["judul"] ?></span></p></div>
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
</div>
</div>