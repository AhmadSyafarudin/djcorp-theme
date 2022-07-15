<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php $navs = array(
  array(
    'icon' => 'home',
    'name' => 'Beranda',
    'url' => site_url()
  ),
  array(
    'icon' => 'map-pin',
    'name' => 'Peta',
    'url' => site_url('peta')
  ),
  array(
    'icon' => 'grid',
    'name' => 'Menu',
    'url' => '#'
  ),
  array(
    'icon' => 'folder',
    'name' => 'Kategori',
    'url' => '#'
  ),
  array(
    'icon' => 'image',
    'name' => 'Galeri',
    'url' => site_url('first/gallery')
  )) ?>
<section class="bottom-nav">
  <div class="bottom-nav-inner">
    <?php foreach($navs as $nav) : ?>
      <a href="<?= $nav['url'] ?>" class="bottom-nav-item <?= 'tab-' . $nav['icon'] ?>">
        <span data-feather="<?= $nav['icon'] ?>" class="bottom-nav-icon"></span>
        <span class="bottom-nav-name"><?= $nav['name'] ?></span>
      </a>
    <?php endforeach ?>
  </div>
</section>