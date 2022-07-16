<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<div class="relative-hidden layar-margin pb-10">
	<div class="running border-grey flexleft bgwhite mt-10">
	<div class="sekilas-info bggradient1 flexleft">
	<i class="fa fa-bullhorn"></i><p class="flexleft desktop-only"><span style="margin-right:5px;">Sekilas</span>Info</p>
	</div>
	<?php if (!empty($teks_berjalan)): ?>
		<marquee onmouseover="this.stop()" onmouseout="this.start()">
			<?php foreach ($teks_berjalan AS $teks): ?>
				<?= $teks['teks']?>
				<?php if ($teks['tautan']): ?>
					<a href="<?= $teks['tautan'] ?>" rel="noopener noreferrer"><b><?= $teks['judul_tautan']?></b></a>
				<?php endif; ?>
			<?php endforeach; ?>
		</marquee>
	<?php endif; ?>
	</div>
</div>