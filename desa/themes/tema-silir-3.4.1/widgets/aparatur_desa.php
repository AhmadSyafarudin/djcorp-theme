<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<section class="relative overflow-hidden shadow-lg rounded-xl <?php $is_home and print('my-5') ?>" data-aos="fade-zoom-in">
  <div class="product-header">
    <h3 class="text-heading product-ribbon">Aparatur</h3>
  </div>
  <div class="owl-carousel flex space-x-4 bg-primary dark:bg-dark-primary p-4 <?php $is_home and print('product') ?>">
    <?php foreach($aparatur_desa['daftar_perangkat'] as $data) : ?>
      <div class="card p-4 flex flex-col justify-between space-y-4 product-item">
        <div class="space-y-3">
          <img src="<?= $data['foto'] ?>" alt="<?= $data['nama'] ?>" class="w-full object-cover object-center bg-slate-300 dark:bg-slate-600 mx-auto rounded-xl" style="<?php !$is_home and print('width: 65%') ?>">
          <div class="space-y-1 text-sm text-center">
            <span class="text-heading"><?= $data['nama'] ?></span>
            <span class="block"><?= $data['jabatan'] ?></span>
            <?php if ($data['pamong_niap']) : ?>
              <span class="block"><?= $this->setting->sebutan_nip_desa ?> : <?= $data['pamong_niap'] ?></span>
            <?php endif ?>
            <?php if ($data['status_kehadiran'] == 'hadir'): ?>
              <span class="bg-emerald-500 text-white py-1 px-3 rounded inline-block">Hadir</span>
            <?php endif ?>
          </div>
        </div>
      </div>
    <?php endforeach ?>
  </div>
</section>
