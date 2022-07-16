<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view($folder_themes . '/commons/meta') ?>
  <?php $this->load->view($folder_themes . '/commons/source_css') ?>
  <link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/assets/css/bs-modal.min.css?" . THEME_VERSION) ?>">
</head>
<body data-theme="<?= THEME_COLOR_SCHEME ?>">

  <?php $this->load->view($folder_themes . '/commons/loading_screen') ?>
  <?php $this->load->view($folder_themes . '/commons/header') ?>
  <?php $this->load->view($folder_themes . '/commons/secondary_nav') ?>
  <?php $this->load->view($folder_themes . '/commons/main_nav') ?>

  <main class="container px-3 max-w-container mx-auto space-y-5 my-5">
    <?php $this->load->view($folder_themes . '/partials/newsticker') ?>

    <section class="content-wrapper my-5">
      <div class="card w-full rounded overflow-hidden">
        <div class="main-content">
          <?php if(IS_PREMIUM) : ?>
            <?php if(preg_match("/halaman_statis/i", $halaman_statis)) : ?>
              <?php $this->load->view($halaman_statis); ?>
              <?php else : ?>
                <?php $halaman_statis = str_replace('home/idm', 'idm/index', $halaman_statis); ?>
                <?php $this->load->view("{$folder_themes}/partials/{$halaman_statis}"); ?>
            <?php endif ?>
            <?php else : ?>
              <?php if (in_array($halaman_statis, ['web/halaman_statis/lapak', 'home/idm', 'idm/index'])): ?>
                <?php $halaman_statis = $halaman_statis === 'web/halaman_statis/lapak' ? 'lapak/index' : ($halaman_statis === 'home/idm' ? 'idm/index' : $halaman_statis) ?>
                  <?php $this->load->view("{$folder_themes}/partials/{$halaman_statis}"); ?>
                <?php else: ?>
                  <?php $this->load->view($halaman_statis); ?>
                <?php endif; ?>
          <?php endif ?>
        </div>
      </div>
    </section>
    <?php $this->load->view($folder_themes .'/widgets/shortcut_links') ?>
  </main>

  <?php $this->load->view($folder_themes .'/commons/footer') ?>
  <?php $this->load->view($folder_themes . '/commons/customizer') ?>

  <?php $this->load->view($folder_themes . '/commons/source_js') ?>
  <script src="<?= base_url("$this->theme_folder/$this->theme/assets/js/bs-modal.min.js?" . THEME_VERSION) ?>"></script>
  <script src="<?= base_url("$this->theme_folder/$this->theme/assets/js/script.min.js?" . THEME_VERSION) ?>"></script>

</body>
</html>