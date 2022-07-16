<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<div class="pemerintah">
	<div class="relative-hidden">
		<div class="width-default ptb-10">
		<div class="flex-container mlr-min-10">
		<?php foreach ($aparatur_desa['daftar_perangkat'] as $data): ?>
			<div class="flexitem-4 bggrey2">
			<div class="relative-hidden p-10">
				<div class="image-pemerintah mb-10">
				<img src="<?= $data['foto'] ?>">
				</div>
				<div>
				<div class="pemerintah-title pb-5">
				<h2><?= $data['nama'] ?></h2>
				<h3><?= $data['jabatan'] ?></h3>
				</div>
				<div class="fitur-kehadiran">
				<?php if ($this->setting->tampilkan_kehadiran && $data['status_kehadiran'] == 'hadir') : ?>
					<div class="flexcenter p-5 ada" style="text-align:center;color:#fff;margin:5px 0;border-radius:4px;"><p>Hadir</p></div>
				<?php else: ?>
					<div class="flexcenter p-5 tidakada" style="text-align:center;color:#fff;margin:5px 0;border-radius:4px;"><p>Belum Hadir</p></div>
				<?php endif ?>
				</div>
				</div>
			</div>
			</div>
		<?php endforeach ?>
		</div>
		</div>
	</div>
</div>
