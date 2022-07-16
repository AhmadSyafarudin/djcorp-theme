<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view($folder_themes .'/commons/meta') ?>
  <?php $this->load->view($folder_themes .'/commons/source_css') ?>
</head>
<body data-theme="<?= THEME_COLOR_SCHEME ?>">
  <?php if($this->uri->segment(2) == 'kategori' && empty($judul_kategori)) : ?>
    <?php $this->load->view($folder_themes .'/commons/404') ?>
    <?php else : ?>
      
      <?php $this->load->view($folder_themes .'/commons/header') ?>
      <?php $this->load->view($folder_themes .'/commons/secondary_nav') ?>
      <?php $this->load->view($folder_themes .'/commons/main_nav') ?>
      <?php $this->load->view($folder_themes .'/layouts/beranda.tpl.php') ?>
      <?php $this->load->view($folder_themes .'/commons/footer') ?>
      
  <?php endif ?>
  <?php $this->load->view($folder_themes .'/commons/source_js') ?>
  <script src="<?= base_url("$this->theme_folder/$this->theme/assets/js/script.min.js?" . THEME_VERSION) ?>"></script>
</body>
</html>