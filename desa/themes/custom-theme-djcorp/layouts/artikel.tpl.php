<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view($folder_themes . '/commons/meta') ?>
  <?php $this->load->view($folder_themes . '/commons/source_css') ?>
  <?php $this->load->view($folder_themes . '/commons/source_js') ?>
</head>
<body data-theme="<?= THEME_COLOR_SCHEME ?>">

  <?php if($single_artikel['id']) : ?>
    <?php $this->load->view($folder_themes . '/commons/loading_screen') ?>
    <?php $this->load->view($folder_themes . '/commons/header') ?>
    <?php $this->load->view($folder_themes . '/commons/secondary_nav') ?>
    <?php $this->load->view($folder_themes . '/commons/main_nav') ?>
      
    <main class="container px-3 max-w-container mx-auto space-y-5 my-5">
      <?php $this->load->view($folder_themes . '/partials/newsticker') ?>

      <section class="content-wrapper my-5">
        <article class="card content main-content">
          <?php $this->load->view($folder_themes .'/partials/article'); ?>
          <?php $this->load->view($folder_themes . '/partials/comment') ?>
        </article>
        <?php $this->load->view($folder_themes .'/partials/sidebar') ?>
      </section>
      <?php $this->load->view($folder_themes .'/widgets/shortcut_links') ?>
    </main>
    
    <?php $this->load->view($folder_themes .'/commons/footer') ?>
    <?php $this->load->view($folder_themes . '/commons/customizer') ?>

    <?php else : ?>
      <?php $this->load->view($folder_themes .'/commons/404') ?>
  <?php endif ?>

  <script src="<?= base_url("$this->theme_folder/$this->theme/assets/js/script.min.js?" . THEME_VERSION) ?>"></script>

</body>
</html>