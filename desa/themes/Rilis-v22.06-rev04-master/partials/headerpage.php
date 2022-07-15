<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

	<div class="headerpage">
		<div class="header-inner" style="background-image:url(<?= base_url($latar_website ? $latar_website : 'assets/front/css/images/latar_website.jpg'); ?>);">
		<div class="header-inner2" style="background-image:url(<?= base_url('desa/pengaturan/images/latar_website.jpg') ?>);"></div>
			<div class="header-backg"></div>
			<div class="header-cover bggradient-vertical"></div>
			<a href="<?= site_url(); ?>">
			<div class="headerpage-logo flexleft">
				<div class="logo-image transition-height">
					<?php $weblogo = 'desa/logo.gif'; ?>
					<?php if(is_file($weblogo)) : ?>
					<img src="<?= base_url('desa/logo.gif')?>">
					<?php else : ?>
					<img src="<?= gambar_desa($desa['logo']);?>"/>
					<?php endif; ?>	
				</div>
				<div>
					<div class="logo-title transition-height">
						<h1><?= ucwords($this->setting->sebutan_desa); ?> <?= ucwords(($desa['nama_desa']) ? ' ' . $desa['nama_desa'] : ''); ?></h1>
						<div class="logo-title-cover transition-height">
						<h2><?= ucwords($this->setting->sebutan_desa); ?> <?= ucwords(($desa['nama_desa']) ? ' ' . $desa['nama_desa'] : ''); ?></h2>
						</div>
					</div>
				
					<h3><?=ucwords($this->setting->sebutan_kecamatan)?> <?=$desa['nama_kecamatan']?><br/><?=ucwords($this->setting->sebutan_kabupaten)?> <?=$desa['nama_kabupaten']?> - <?=$desa['nama_propinsi']?></h3>
					<h4><?=ucwords($this->setting->sebutan_kecamatan)?> <?=$desa['nama_kecamatan']?>, <?=ucwords($this->setting->sebutan_kabupaten)?> <?=$desa['nama_kabupaten']?> - <?=$desa['nama_propinsi']?></h4>
					<div class="logo-title-page transition-height">
						<?php $this->load->view("$folder_themes/plus/headpage"); ?>
					</div>
				</div>
			</div>
			</a>
			<div class="hiasan-logo"></div>
		</div>
	
	<?php $this->load->view("$folder_themes/partials/menu"); ?>
	
	<?php $this->load->view("$folder_themes/plus/running"); ?>
</div>


