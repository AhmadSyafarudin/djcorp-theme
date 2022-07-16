<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php if ($w_cos): ?>
<div class="sidebar-area">
		<?php foreach ($w_cos as $widget): ?>
			<?php
				$judul_widget = [
					'judul_widget' => str_replace('Desa', ucwords($this->setting->sebutan_desa), strip_tags($widget['judul']))
				];
			?>
			<?php if ($widget["jenis_widget"] == 1): ?>
				<?php $this->load->view("{$folder_themes}/widgets/{$widget['isi']}", $judul_widget) ?>
			<?php elseif($widget['jenis_widget'] == 2) : ?>
				<?php $this->load->view("../../{$widget['isi']}", $judul_widget) ?>
			<?php else : ?>
				
				<div class="box-default bgwhite mb-10">
					<div class="heading-module bggradient1 flexcenter">
					<i class="fa fa-folder"></i><h1 class="flexcenter"><?= strip_tags($widget['judul']) ?></h1>
					</div>
					<div class="relative-hidden p-10">
						<?= html_entity_decode($widget['isi']) ?>
					</div>
				</div>
			<?php endif ?>
		<?php endforeach ?>
</div>		
<?php endif ?>