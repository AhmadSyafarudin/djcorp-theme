<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="mainmenu bgcolor1 sticky">
	<div class="mainmenu-margin">
	<div class="nav-wrapper large-nav">
		<a href="<?= site_url() ?>"><div class="to-home flexcenter"><i class="fa fa-home"></i></div></a>
		<ul class="clearlist local-scroll" style="margin:0 0 0 70px;padding:0;">
			
			<?php foreach($menu_atas as $data) { ?>
				<?php if(count($data['submenu'])>0): ?>
				<li><a class="menu-down" href="<?= $data['link']?>"><?= $data['nama']; if(count($data['submenu'])>0) { echo "<span class='caret'></span>"; } ?></a>
					<ul class="nav-sub bgcolor3">
					<?php foreach($data['submenu'] as $submenu): ?>
						<li><a href="<?= $submenu['link']?>"><?= $submenu['nama']?></a></li>
					<?php endforeach; ?>
					</ul>
				</li>
			<?php else: ?>
				<li><a href="<?= $data['link']?>"><?= $data['nama']?></a></li>
			<?php endif; ?>
			<?php } ?>

			<li><a href="<?= site_url('arsip') ?>">Arsip</a></li>
		</ul>
	</div>
	</div>

</div>
