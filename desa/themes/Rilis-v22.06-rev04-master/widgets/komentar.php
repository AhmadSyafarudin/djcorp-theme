<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="box-default bgwhite mb-10">
	<div class="heading-module bggradient1 flexcenter">
	<i class="fa fa-comment"></i><h1 class="flexcenter"><?= $judul_widget ?></h1>
	</div>
	<div class="relative-hidden p-10">
	<div class="height-box">
	<div class="withscroll">
		<?php $count = 0;
		foreach ($komen as $data): ?>
		<?php if ($count < 3): ?>
			<div class="commenthome mb-10">
				<h2><i class="fa fa-user flexleft" style="margin:0 5px 0 0;float:left;color:#919191;"></i><?= $data['owner']?></h2>
				<h3><?= tgl_indo2($data['tgl_upload'])?></h3>
				<a href="<?= site_url('artikel/' . buat_slug($data)); ?>">
				<div class="speak">
				<div class="speak-quote"><img src="<?= base_url("$this->theme_folder/$this->theme/images/iconsvg/quote.svg") ?>"/></div>
				<div class="speak-title"><?= potong_teks ($data['komentar'], 100); ?>...</div>
				</div>
				</a>
			</div>
		<?php endif;
		$count++;
		endforeach; ?>
	</div>
	</div>
	</div>

</div>





