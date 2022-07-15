<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php if ($w_cos): ?>
<div class="relative-row">
<div class="width-default">
<div class="mlr-min-5">
<?php foreach($w_cos as $widget) : ?>
	<?php $judul_widget = ['judul_widget' => str_replace('Desa', ucwords($this->setting->sebutan_desa), strip_tags($widget['judul']))]; ?>
		
		<?php if ($widget["jenis_widget"] == 1 || $widget["jenis_widget"] == 2): ?>
			<?php if ($widget["isi"] == 'peta_lokasi_kantor.php'): ?>
				<div class="column-map ptb-5">
				<div class="plr-5">
				<?php $this->load->view("{$folder_themes}/widgets/peta_lokasi_kantor", $judul_widget) ?>
				</div>
				</div>	
			<?php elseif ($widget["isi"] == 'peta_wilayah_desa.php'): ?>
				<div class="column-map ptb-5">
				<div class="plr-5">
				<?php $this->load->view("{$folder_themes}/widgets/peta_wilayah_desa", $judul_widget) ?>
				</div>
				</div>				
			<?php endif; ?>
		<?php endif; ?>	
		
<?php endforeach ?>
</div>
</div>
</div>
<?php endif; ?>