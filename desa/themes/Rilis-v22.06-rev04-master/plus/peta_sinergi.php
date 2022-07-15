<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php if ($w_cos): ?>

<div class="samewidth">
<?php foreach($w_cos as $widget) : ?>
	<?php $judul_widget = ['judul_widget' => str_replace('Desa', ucwords($this->setting->sebutan_desa), strip_tags($widget['judul']))]; ?>
		
		<?php if ($widget["jenis_widget"] == 1 || $widget["jenis_widget"] == 2): ?>
			<?php if ($widget["isi"] == 'sinergi_program.php'): ?>
				<div class="item-samewidth ptb-5">
					<div class="sinergi-weight">
					<?php $this->load->view("{$folder_themes}/widgets/sinergi_program", $judul_widget) ?>
					</div>
				</div>
			<?php elseif ($widget["isi"] == 'peta_lokasi_kantor.php'): ?>
				<div class="item-samewidth ptb-5">
				<?php $this->load->view("{$folder_themes}/widgets/peta_lokasi_kantor", $judul_widget) ?>
				</div>	
			<?php elseif ($widget["isi"] == 'peta_wilayah_desa.php'): ?>
				<div class="item-samewidth ptb-5">
				<?php $this->load->view("{$folder_themes}/widgets/peta_wilayah_desa", $judul_widget) ?>
				</div>		
			<?php endif; ?>
		<?php endif; ?>	
		
<?php endforeach ?>
</div>

<?php endif; ?>