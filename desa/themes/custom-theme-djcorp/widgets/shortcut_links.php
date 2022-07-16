<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php 
  $shortcuts = array(
    array(
      'icon' => 'map.png',
      'name' => 'Peta Desa',
      'link' => site_url('peta'),
      'is_external' => false
    ),
    array(
      'icon' => 'compliant.png',
      'name' => 'Produk Hukum',
      'link' => site_url('peraturan_desa'),
      'is_external' => false
    ),
    array(
      'icon' => 'document.png',
      'name' => 'Informasi Publik',
      'link' => site_url('informasi_publik'),
      'is_external' => false
    ),
    array(
      'icon' => 'archive.png',
      'name' => 'Arsip Berita',
      'link' => site_url('arsip'),
      'is_external' => false
    ),
    array(
      'icon' => 'image-gallery.png',
      'name' => 'Album Galeri',
      'link' => site_url('first/gallery'),
      'is_external' => false
    ),
    array(
      'icon' => IS_RAMADHAN ? 'quranku.png': 'virus.png',
      'name' => IS_RAMADHAN ? 'Baca Quran' :'Kawal COVID-19',
      'link' => IS_RAMADHAN ? 'https://quranku.silirdev.com' : 'https://kawalcovid19.id',
      'is_external' => true
    )
    );
?>

<section class="grid gap-4 lg:gap-5 grid-cols-3 md:grid-cols-3 lg:grid-cols-6 auto-cols-auto my-5">
  <?php foreach($shortcuts as $index => $shortcut) : ?>
    <a href="<?= $shortcut['link'] ?>" target="<?php $shortcut['is_external'] and print('_blank') ?>" rel="noopener" class="card shadow p-2 lg:p-3 space-y-2 hover:shadow-lg transition duration-200" data-aos="zoom-in" data-aos-delay="<?= $index * 50 ?>">
      <img src="<?= base_url($this->theme_folder.'/'.$this->theme .'/assets/images/' . $shortcut['icon']) ?>" alt="<?= $shortcut['name'] ?>" class="w-auto mx-auto py-2 h-16 lg:h-20">
      <span class="text-center text-xs lg:text-sm font-bold block"><?= $shortcut['name'] ?></span>
    </a>
  <?php endforeach ?>
</section>