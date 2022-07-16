<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<nav class="main-nav is-sticky">
  <div class="main-nav-inner">
    <ul class="navigation">
      <div class="navigation-item inline-block lg:hidden uppercase pt-3 pb-1 tracking-wide font-bold text-lg">Menu</div>

      <li class="navigation-item is-active lg:inline-block">
        <a href="<?= site_url() ?>" class="navigation-link"><span data-feather="home" class="icon"></span></a>
      </li>
      <?php if ($menu_atas) : ?>
        <?php foreach ($menu_atas as $menu) : ?>
          <li class="navigation-item">
            <a href="<?= $menu['link'] ?>" class="navigation-link font-medium font-bold lg:font-normal"><i data-feather="chevron-right" class="navigation-link-decor"></i>
              <?= $menu['nama'] ?>
              <?php if (count($menu['submenu']) > 0) : ?>
                <i data-feather="chevron-down" class="icon icon-base ml-2 navigation-icon"></i>
              <?php endif ?>
            </a>
            <?php if (count($menu['submenu']) > 0) : ?>
              <ul class="navigation-dropdown">
                <?php foreach ($menu['submenu'] as $submenu) : ?>
                  <li class="navigation-dropdown-item">
                    <a href="<?= $submenu['link'] ?>" class="navigation-dropdown-link"><i data-feather="chevron-right" class="navigation-link-decor"></i> <?= $submenu['nama'] ?></a>
                  </li>
                <?php endforeach ?>
              </ul>
            <?php endif ?>
          </li>
        <?php endforeach ?>
      <?php endif ?>

    </ul>
    <form action="<?= site_url('first'); ?>" method="GET" class="form mt-4 lg:mt-0">
      <div class="search">
        <input type="search" name="cari" id="cari" class="form-search-input" placeholder="Cari Artikel">
        <button><span data-feather="search" class="icon icon-base mx-2"></span></button>
      </div>
    </form>
  </div>
</nav>