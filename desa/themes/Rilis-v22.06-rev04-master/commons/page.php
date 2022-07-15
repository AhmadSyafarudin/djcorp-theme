<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<?php if ($paging->num_rows > $paging->per_page): ?>
    <div style="width:100%;float:left;" class="mt-20">
        <div class="flexcenter mb-5" style="font-size:90%;">Halaman <?= $paging->page ?> dari <?= $paging->end_link ?></div>
        <div class="pagination flexcenter" style="float:none !important;padding:0 !important;margin:0 auto !important;">

			<?php if ($paging->prev): ?>
                <li><a href="<?= site_url("$paging_page/$paging->prev" . $paging->suffix); ?>" title="Halaman Sebelumnya"><span aria-hidden="true">&laquo;</span></a></li>
            <?php endif; ?>
			<?php foreach ($pages as $i): ?>
			<li <?= ($paging->page == $i) ? 'class="page-item active"' : "" ?>>
				<a class="page-link" href="<?=site_url("$paging_page/$i" . $paging->suffix); ?>" title="Halaman <?= $i ?>"><?= $i ?></a>
			</li>
			<?php endforeach; ?>
			<?php if ($paging->next): ?>
                <li><a href="<?= site_url("$paging_page/$paging->next" . $paging->suffix); ?>" title="Halaman Selanjutnya"><span aria-hidden="true">&raquo;</span></a></li>
            <?php endif; ?>

        </div>
    </div>
<?php endif; ?>
