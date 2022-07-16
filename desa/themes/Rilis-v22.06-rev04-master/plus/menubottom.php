<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="menubottom">
	<table style="width:100%;">
		<tr>
			<td>
				<a href="<?= site_url(); ?>">
				<div class="menubottom-inner flexcenter">
				<div>
				<img src="<?= base_url("$this->theme_folder/$this->theme/images/iconbottom/home.svg") ?>"/><p>Home</p>
				</div>
				</div>
				</a>
			</td>
			<td>
				<a data-remote="false" data-toggle="modal" data-target="#aparatur<?= $in; ?>" title="Aparatur" style="cursor:pointer;">
				<div class="menubottom-inner flexcenter">
				<div>
				<img src="<?= base_url("$this->theme_folder/$this->theme/images/iconbottom/aparatur.svg") ?>"/><p>Aparatur</p>
				</div>
				</div>
				</a>
			</td>
			<td>
				<div class="menubottom-inner flexcenter" onclick="openmenu()">
				<div>
				<img src="<?= base_url("$this->theme_folder/$this->theme/images/iconbottom/menu.svg") ?>"/><p>Menu</p>
				</div>
				</div>
			</td>
			<td>
				<?php if(IS_PREMIUM) : ?>
				<a href="<?= site_url('galeri') ?>">
				<div class="menubottom-inner flexcenter">
				<div>
				<img src="<?= base_url("$this->theme_folder/$this->theme/images/iconbottom/kamera.svg") ?>"/><p>Galeri</p>
				</div>
				</div>
				</a>
				<?php else : ?>
				<a href="<?= site_url('first/gallery') ?>">
				<div class="menubottom-inner flexcenter">
				<div>
				<img src="<?= base_url("$this->theme_folder/$this->theme/images/iconbottom/kamera.svg") ?>"/><p>Galeri</p>
				</div>
				</div>
				</a>
				<?php endif ?>
			</td>
			<td>
				<a href="<?= site_url('peta') ?>">
				<div class="menubottom-inner flexcenter">
				<div>
				<img src="<?= base_url("$this->theme_folder/$this->theme/images/iconbottom/peta.svg") ?>"/><p>Peta</p>
				</div>
				</div>
				</a>
			</td>
		</tr>
	</table>
</div>