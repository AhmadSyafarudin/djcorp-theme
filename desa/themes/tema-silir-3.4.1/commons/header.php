<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php require("$this->theme_folder/$this->theme/commons/social_icons.php") ?>

<header class="header">
  <section class="header-top">
    <div class="header-top-inner">
      <div class="header-top-left">
        <button class="mr-3 button-s-menu">
          <span data-feather="more-vertical"></span>
        </button>
        <div class="header-top-contact">
          <?php if($desa['telepon']) : ?>
          <div class="contact-item">
            <span class="icon icon-sm pr-1 text-secondary" data-feather="phone"></span>
            <span><?= $desa['telepon'] ?></span>
          </div>
          <?php endif ?>
          <?php if($desa['email_desa']) : ?>
          <div class="contact-item">
            <span class="icon icon-sm pr-1 text-secondary" data-feather="mail"></span>
            <span><?= $desa['email_desa'] ?></span>
          </div>
          <?php endif ?>
        </div>
      </div>
      <div class="header-top-right">
        <?php foreach($sosmed as $data) : ?>
          <?php if(!empty($data['link'])) : ?>
            <a href="<?= $data['link'] ?>" target="_blank" rel="noopener" class="header-top-right-link">
              <?php if(in_array($brand = strtolower(str_replace(' ', '-', $data['nama'])), $socials)) : ?>
                <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor" stroke="none" class="icon icon-base mx-1" xmlns="http://www.w3.org/2000/svg"><?= $svg[$brand] ?></svg>
                <?php else : ?>
                  <span data-feather="<?= strtolower(str_replace(' ', '-', $data['nama']))?>" class="icon icon-base mx-1"></span>
              <?php endif ?>
            </a>
          <?php endif ?>
        <?php endforeach ?>
        <div class="toggle ml-3">
          <div class="toggle-track">
            <div class="toggle-item dark" title="dark mode"><span data-feather="moon" class="icon icon-sm"></span></div>
            <div class="toggle-item light" title="light mode"><span data-feather="sun" class="icon icon-sm"></span>
            </div>
          </div>
          <div class="toggle-indicator is-dark"></div>
          <input type="checkbox" class="toggle-check" />
        </div>
      </div>
    </div>
  </section>
  <section class="header-bottom">
    <div class="header-bottom-inner">
      <a href="<?= site_url() ?>" class="brand">
        <img src="<?= gambar_desa($desa['logo']) ?>" alt="Logo <?= ucfirst($this->setting->sebutan_desa).' '.ucwords($desa['nama_desa']) ?>" class="brand-image">
        <div class="brand-name">
          <span class="brand-title">Sistem Informasi <?= NAMA_DESA ?></span>
          <p class="brand-tagline"><?= ucfirst($this->setting->sebutan_kecamatan_singkat) ?>
            <?= ucwords($desa['nama_kecamatan']) ?>
            <?= ucfirst($this->setting->sebutan_kabupaten_singkat) ?>
            <?= ucwords($desa['nama_kabupaten']) ?></p>
        </div>
      </a>
      <form action="<?= site_url('first');?>" method="GET" class="form mt-4 lg:mt-0">
        <div class="form-search">
          <input type="search" name="cari" id="cari" class="form-search-input" placeholder="Cari...">
          <button class="form-search-button"><span data-feather="search" class="icon icon-base mx-2"></span></button>
        </div>
      </form>
    </div>
  </section>
</header>
