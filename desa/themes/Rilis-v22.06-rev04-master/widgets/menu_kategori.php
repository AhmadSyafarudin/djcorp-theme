<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="box-default bgwhite mb-10">
	<div class="heading-module bggradient1 flexcenter">
	<i class="fa fa-th"></i><h1 class="flexcenter"><?= $judul_widget ?></h1>
	</div>
	<div class="relative-row p-10">
		<ul id="ul-menu" style="text-align:left;">
		<?php foreach($menu_kiri as $data):?>
			<li>
				<div class="single-link"><a href="<?= site_url("artikel/kategori/$data[slug]"); ?>"><?= $data['kategori']; ?><?php (count($data['submenu'])>0) and print('<span class="caret"></span>'); ?>
				</a></div>
				<?php if(count($data['submenu'])>0): ?>
					<ul>
						<?php foreach($data['submenu'] as $submenu):?>
							<div class="subsingle-link"><a href="<?= site_url("artikel/kategori/$submenu[slug]"); ?>"><?= $submenu['kategori']?></a></div>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
			</li>
		<?php endforeach;?>
	</ul>
	</div>

</div>





