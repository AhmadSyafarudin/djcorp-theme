<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="py-4 px-5">
  <h1 class="text-heading text-lg lg:text-2xl border-b border-dotted border-primary dark:border-white pb-2 title">Pemerintah <?= NAMA_DESA ?></h1>
  <?php if($pemerintah) : ?>
  <div class="grid grid-cols-1 lg:grid-cols-4 gap-3 lg:gap-5 py-5">
    <?php foreach($pemerintah as $data) : ?>
      <div class="space-y-3 border p-3">
        <img class="w-1/2 mx-auto h-auto shadow-none" src="<?= $data['foto'] ?>" alt="Foto <? $data['nama'] ?>" />

        <div class="space-y-1 text-sm text-center z-10">
          <span class="font-bold"><?= $data['nama'] ?></span>
          <span class="block"><?= $data['jabatan'] ?></span>
          <?php if ($data['pamong_niap']) : ?>
            <span class="block"><?= $this->setting->sebutan_nip_desa ?> : <?= $data['pamong_niap'] ?></span>
          <?php endif ?>
          <?php if ($data['status_kehadiran'] == 'hadir'): ?>
            <span class="bg-emerald-500 text-white py-1 px-3 rounded inline-block">Hadir</span>
          <?php endif ?>
        </div>
      </div>
    <?php endforeach ?>
  </div>
  <?php else: ?>
    <p class="py-3">Pemerintah <?= NAMA_DESA ?> tidak tersedia.</p>
<?php endif ?> 
</div>