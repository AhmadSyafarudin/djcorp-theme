<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php if ($single_artikel['gambar1']!='' and is_file(LOKASI_FOTO_ARTIKEL."sedang_".$single_artikel['gambar1'])): ?>
	<div class="width-default">
	<div class="carouselright js-flickity" data-flickity-options='{ "wrapAround": true }'>
		<?php if ($single_artikel['gambar']!='' and is_file(LOKASI_FOTO_ARTIKEL."sedang_".$single_artikel['gambar'])): ?>
			<div class="carouselright-cell">
				<a href="<?= AmbilFotoArtikel($single_artikel['gambar'],'sedang') ?>"  data-fancybox="images" data-caption="<?= $single_artikel["judul"]?>">
					<div class="image-default" style="border-radius:5px;">
					<img src="<?= AmbilFotoArtikel($single_artikel['gambar'],'sedang')?>"/>
					</div>
				</a>
			</div>
		<?php endif;?>
		<?php if ($single_artikel['gambar1']!='' and is_file(LOKASI_FOTO_ARTIKEL."sedang_".$single_artikel['gambar1'])): ?>
			<div class="carouselright-cell">
				<a href="<?= AmbilFotoArtikel($single_artikel['gambar1'],'sedang') ?>"  data-fancybox="images" data-caption="<?= $single_artikel["judul"]?>">
					<div class="image-default" style="border-radius:5px;">
					<img src="<?= AmbilFotoArtikel($single_artikel['gambar1'],'sedang')?>"/>
					</div>
				</a>
			</div>
		<?php endif;?>
		<?php if ($single_artikel['gambar2']!='' and is_file(LOKASI_FOTO_ARTIKEL."sedang_".$single_artikel['gambar2'])): ?>
			<div class="carouselright-cell">
				<a href="<?= AmbilFotoArtikel($single_artikel['gambar2'],'sedang') ?>"  data-fancybox="images" data-caption="<?= $single_artikel["judul"]?>">
					<div class="image-default" style="border-radius:5px;">
					<img src="<?= AmbilFotoArtikel($single_artikel['gambar2'],'sedang')?>"/>
					</div>
				</a>
			</div>
		<?php endif;?>
	</div>
	</div>
<?php else: ?>
	<?php if ($single_artikel['gambar']!='' and is_file(LOKASI_FOTO_ARTIKEL."sedang_".$single_artikel['gambar'])): ?>
		<div class="image-nocrop">
			<img src="<?= AmbilFotoArtikel($single_artikel['gambar'],'sedang')?>"/>
		</div>
	<?php endif; ?>

<?php endif;?>