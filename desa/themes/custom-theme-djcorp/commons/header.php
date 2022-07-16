<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php require("$this->theme_folder/$this->theme/commons/social_icons.php") ?>

<header class="header">
  <section class="header-top">
    <div class="header-top-inner">
      <div class="header-top-left">
        <button class="mr-3 button-s-menu">
          <img src="<?= base_url("$this->theme_folder/$this->theme/assets/images/button-sidebar.svg") ?>" alt="">
        </button>
        <div class="header-top-contact">
          <?php if ($desa['telepon']) : ?>
            <div class="contact-item">
              <span class="icon icon-sm pr-1 text-secondary" data-feather="phone"></span>
              <span><?= $desa['telepon'] ?></span>
            </div>
          <?php endif ?>
          <?php if ($desa['email_desa']) : ?>
            <div class="contact-item">
              <span class="icon icon-sm pr-1 text-secondary" data-feather="mail"></span>
              <span><?= $desa['email_desa'] ?></span>
            </div>
          <?php endif ?>
        </div>
      </div>

    </div>
  </section>
  <section class="header-bottom" style="background-image: url(<?= base_url("$this->theme_folder/$this->theme/assets/images/bg-header.jpg") ?>); background-size: 100% auto; background-repeat:no-repeat;background-position:right; filter:blur(20)">
    <div class="container">
      <a href="<?= site_url() ?>" class="brand">
        <img src="<?= gambar_desa($desa['logo']) ?>" alt="Logo <?= ucfirst($this->setting->sebutan_desa) . ' ' . ucwords($desa['nama_desa']) ?>" class="" width="150">
        <div class="brand-name">
          <span class="brand-title"><?= NAMA_DESA ?></span>
          <p class="brand-tagline"><?= ucfirst($this->setting->sebutan_kecamatan_singkat) ?>
            <?= ucwords($desa['nama_kecamatan']) ?>
            <?= ucfirst($this->setting->sebutan_kabupaten_singkat) ?>
            <?= ucwords($desa['nama_kabupaten']) ?></p>
            <div class="menu-header">
              <span>Layanan Mandiri</span>
              <span>Bantuan</span>
            </div>
        </div>
      </div>
    </a>
  </section>
</header>