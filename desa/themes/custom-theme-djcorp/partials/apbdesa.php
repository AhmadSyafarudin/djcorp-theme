<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<section class="flex lg:space-x-4 mt-1 mb-5 space-y-4 lg:space-y-0 flex-col lg:flex-row">
  <?php $index = 0 ?>

  <?php foreach($data_widget as $subdata_name => $subdatas) : ?>
		<div class="card w-full" data-aos="fade-up" data-aos-delay="<?= $index * 50 ?>">
      <h3 class="card-heading is-bordered"><?= ($subdatas['laporan'])?></h3>
      <div class="card-content space-y-2">
          <?php foreach($subdatas as $key => $subdata) : ?>
            <?php if($subdata['judul'] != NULL and $key != 'laporan' and $subdata['realisasi'] != 0 or $subdata['anggaran'] != 0): ?>
            <div class="group">
              <span class="text-sm font-bold"><?= ucwords(strtolower($subdata['judul'])) ?></span>
              <div class="text-sm flex justify-between">
                <span>Rp<?= number_format($subdata['realisasi']) ?></span>
                <span>Rp<?= number_format($subdata['anggaran']) ?></span>
              </div>
              <div class="progress">
                <div class="progress-item" style="width:<?= $subdata['persen'] ?>%">
                  <span class="progress-value"><?= $subdata['persen'] ?>%</span>
                </div>
              </div>
            </div>
          <?php endif ?>
        <?php endforeach ?>
      </div>
    </div>
    <?php $index++ ?>
  <?php endforeach ?>
</section>