<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php $article = $single_artikel ?>

<?php if($article['kategori']) : ?>
  <a href="<?= site_url('first/kategori/'.$article['kat_slug']) ?>" class="rounded-full bg-tertiary text-white px-3 py-1 text-sm">
    <?= $article['kategori'] ?>
  </a>
<?php endif ?>

<h1 class="text-heading text-lg lg:text-2xl border-b border-dotted border-primary dark:border-white pb-2 title">
  <?= $article['judul'] ?>
</h1>

<div class="flex flex-wrap gap-2 text-sm">
  <div class="inline-flex items-center mr-2.5 mb-1">
    <span class="icon text-secondary icon-base mr-2" data-feather="calendar"></span>
    <span><?= tgl_indo($article['tgl_upload']) ?></span>
  </div>
  <div class="inline-flex items-center mr-2.5 mb-1">
    <span class="icon text-secondary icon-base mr-2" data-feather="user"></span>
    <span><?= $article['owner'] ?></span>
  </div>
  <div class="inline-flex items-center">
    <span class="icon text-secondary icon-base mr-2" data-feather="book-open"></span>
    <span>Dibaca <?= hit($article['hit']) ?></span>
  </div>
</div>

<?php if($article['gambar'] && is_file(LOKASI_FOTO_ARTIKEL.'sedang_'.$article['gambar'])) : ?>
  <a href="<?= AmbilFotoArtikel($article['gambar'],'sedang') ?>" class="block" data-fancybox="images">
    <figure>
      <img src="<?= AmbilFotoArtikel($article['gambar'],'sedang') ?>" alt="<?= $article['judul'] ?>" class="w-full">
    </figure>
  </a>
<?php endif ?>

<?= $article['isi'] ?>

<?php for($i = 1; $i <= 3; $i++) : ?>
  <?php if($article['gambar'.$i] && is_file(LOKASI_FOTO_ARTIKEL.'sedang_'.$article['gambar'.$i])) : ?>
    <a href="<?= AmbilFotoArtikel($article['gambar'.$i],'sedang') ?>" class="block" data-fancybox="images">
      <figure>
        <img src="<?= AmbilFotoArtikel($article['gambar'.$i],'sedang') ?>" alt="<?= $article['nama'] ?>" class="w-full">
      </figure>
    </a>
  <?php endif ?>
<?php endfor ?>

<?php if($article['dokumen']) : ?>
  <div class="bg-slate-200 dark:bg-dark-primary py-3 px-5 border-l-4 border-secondary">
    <h4 class="text-heading text-base">Dokumen Lampiran</h4>
    <a href="<?= site_url('first/unduh_dokumen_artikel/'.$article['id']) ?>" class="text-link text-sm flex space-x-3 pt-2">
      <span data-feather="download-cloud" class="icon icon-lg text-secondary"></span>
      <span><?= $article['link_dokumen'] ?></span>
    </a>
  </div>
<?php endif ?>

<span class="block font-bold">Bagikan artikel ini:</span>
<div class="flex space-x-2">
    <a href="http://www.facebook.com/sharer.php?u=<?= site_url('artikel/'.buat_slug($article))?>" target="_blank" rel="noopener" class="inline-flex items-center justify-center w-10 h-10 bg-facebook text-white rounded-full hover:ring-2 hover:ring-tertiary hover:ring-offset-2 transition duration-100">
      <i class="fa fa-facebook text-xl"></i>
    </a>
    <a href="http://twitter.com/share?url=<?= site_url('artikel/'.buat_slug($article))?>" target="_blank" rel="noopener" class="inline-flex items-center justify-center w-10 h-10 bg-twitter text-white rounded-full hover:ring-2 hover:ring-tertiary hover:ring-offset-2 transition duration-100">
      <i class="fa fa-twitter text-xl"></i>
    </a>
    <a href="https://telegram.me/share/url?url=<?= site_url('artikel/'.buat_slug($article))?>" target="_blank" rel="noopener" class="inline-flex items-center justify-center w-10 h-10 bg-telegram text-white rounded-full hover:ring-2 hover:ring-tertiary hover:ring-offset-2 transition duration-100">
      <i class="fa fa-telegram text-xl"></i>
    </a>
    <a href="https://api.whatsapp.com/send?text=<?= site_url('artikel/'.buat_slug($article))?>" target="_blank" rel="noopener" class="inline-flex items-center justify-center w-10 h-10 bg-whatsapp text-white rounded-full hover:ring-2 hover:ring-tertiary hover:ring-offset-2 transition duration-100">
      <i class="fa fa-whatsapp text-xl"></i>
    </a>
</div>