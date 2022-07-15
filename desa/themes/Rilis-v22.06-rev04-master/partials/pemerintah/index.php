<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<div class="pemerintah">
<div class="box-default bgwhite mb-10">
	<div class="heading-module bggradient1 flexcenter">
	<i class="fa fa-male"></i><i class="fa fa-female"></i><h1 class="flexcenter">Pemerintah <?= ucwords($this->setting->sebutan_desa); ?></h1>
	</div>
	<div class="relative-hidden plr-15 pt-15">
		<div class="width-default">
		<div class="flex-container mlr-min-10">
		<?php foreach ($pemerintah as $data): ?>
			<div class="flexitem-4 bggrey2">
			<div class="relative-hidden p-10">
				<div class="image-pemerintah mb-10">
				<img src="<?= $data['foto'] ?>">
				</div>
				<div class="pemerintah-title pb-5">
				<h2><?= $data['nama'] ?></h2>
				<h3><?= $data['jabatan'] ?></h3>
				</div>
				<?php if ($this->setting->tampilkan_kehadiran && $data['status_kehadiran'] == 'hadir') : ?>
					<div class="flexcenter p-5 ada" style="text-align:center;color:#fff;margin:5px 0;border-radius:4px;"><p>Hadir</p></div>
				<?php else: ?>
					<div class="flexcenter p-5 tidakada" style="text-align:center;color:#fff;margin:5px 0;border-radius:4px;"><p>Belum Hadir</p></div>
				<?php endif ?>
			</div>
			</div>
		<?php endforeach ?>
		</div>
		</div>
	</div>
</div>
</div>
