<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php $latest_article = array_slice($artikel, 0, 1) ? array_slice($artikel, 0, 1)[0] : NULL ?>
<?php $headline = ($headline ?? $latest_article) ?>
<?php $abstrak_headline = potong_teks($headline['isi'], 250); ?>
<?php $url = site_url('artikel/'.buat_slug($headline)); ?>
<?php $image = ($headline['gambar'] && is_file(LOKASI_FOTO_ARTIKEL.'sedang_'.$headline['gambar'])) ?
  AmbilFotoArtikel($headline['gambar'],'sedang') :
  gambar_desa($desa['logo']);
?>

<?php if($headline) : ?> 
  <section>
    <div  class="article-wrapper py-3"  data-aos="fade-zoom-in">
      <div class="article-thumbnail rounded-xl <?php $image === gambar_desa($desa['logo']) and print('flex items-center') ?>">
        <img src="<?= $image ?>" alt="<?= $headline['judul'] ?>" class="<?php $image !== gambar_desa($desa['logo']) and print('article-image') ?> mx-auto">
      </div>
      <div class="article-caption flex flex-col justify-between space-y-3 pt-3">
        <div class="space-y-3">
          <a href="<?= $url ?>" class="text-heading lg:text-lg text-link block"><?= $headline['judul'] ?></a>
          <p><?= $abstrak_headline ?>..</p>
        </div>
        <a href="<?= $url ?>" class="button button-secondary w-40">Selengkapnya <span class="icon icon-base me-2 inline" data-feather="chevron-right"></span></a>
      </div>
    </div>
  </section>
<?php endif ?>