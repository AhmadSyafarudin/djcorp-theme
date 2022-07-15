<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view($folder_themes . '/commons/meta') ?>
  <link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/assets/css/bootstrap.min.css") ?>">
  <?php $this->load->view($folder_themes . '/commons/source_css') ?>
  <link rel="stylesheet" href="<?= base_url('assets/css/peta.css'); ?>">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.27.0/feather.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/8.1.1/highcharts.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/8.1.1/highcharts-3d.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body data-theme="<?= THEME_COLOR_SCHEME ?>">

  <?php $this->load->view($folder_themes . '/commons/loading_screen') ?>
  <?php $this->load->view($folder_themes . '/commons/loading_screen') ?>
  <?php $this->load->view($folder_themes . '/commons/header') ?>
  <?php $this->load->view($folder_themes . '/commons/secondary_nav') ?>
  <?php $this->load->view($folder_themes . '/commons/main_nav') ?>
  <?php $this->load->view($folder_themes . '/partials/map') ?>
  <?php $this->load->view($folder_themes . '/commons/footer') ?>
  <script src="<?= base_url("$this->theme_folder/$this->theme/assets/js/script.min.js?" . THEME_VERSION) ?>"></script>
  <script>
    $('.fetched-data').on('DOMNodeInserted', 'link[rel=stylesheet]', function () {
      $(this).remove();
    });
  </script>
  <?php $this->load->view('head_tags_front') ?>
</body>

</html>