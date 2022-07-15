<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php
  $title = (!empty($judul_kategori))? $judul_kategori: 'Artikel Terkini';
  $slug = 'terkini';
  if(is_array($title)){
    $slug = $title['slug'];
    $title = $title['kategori'];
  }
?>

<main class="container px-3 max-w-container mx-auto space-y-5 my-5">
  <?php if(empty($this->input->get('cari') AND
      count($slider_gambar) > 0) AND
        $this->uri->segment(2) != 'kategori' AND ($this->uri->segment(2) !== 'index' AND $this->uri->segment(1) !== 'index')) : ?>
    <div class="flex lg:flex-row flex-col -mt-5">
      <div class="lg:w-2/3 w-full">
        <?php $this->load->view($folder_themes .'/partials/slider') ?>
      </div>
      <div class="lg:w-1/3 w-full lg:px-5">
        <?php $this->load->view($folder_themes .'/partials/headline') ?>
      </div>
    </div>
  <?php endif ?>

  <?php $this->load->view($folder_themes .'/partials/newsticker') ?>

  <?php if(empty($this->input->get('cari')) AND $this->uri->segment(2) != 'kategori' AND ($this->uri->segment(2) !== 'index' AND $this->uri->segment(1) !== 'index')) : ?>
    <?php if(IS_RAMADHAN) : ?>
      <?php $this->load->view($folder_themes .'/widgets/prayer_time') ?>
    <?php endif ?>
    <?php $data['hide_covid19'] = true ?>
    <?php $this->load->view($folder_themes .'/widgets/covid19', $data) ?>
    <?php $this->load->view($folder_themes .'/widgets/shortcut_links') ?>
  <?php endif ?>


  <section id="article-list" class="space-y-4">
    <h3 class="border-b-2 border-primary dark:border-white text-heading text-lg lg:text-xl" data-aos="fade-zoom-in">
      <span class="inline-block border-2 border-b-0 -mb-0.5 bg-slate-100 dark:bg-slate-900 dark:border-white border-primary px-4 py-2 mt-3"><?= $title ?></span>
    </h3>
    <?php if($artikel) : ?>
      <ul class="w-full space-x-2 text-sm" data-aos="fade-zoom-in">
        <li class="inline-block">
          <a class="button button-primary px-5" href="<?= site_url('first/arsip') ?>"><i class="fa fa-folder-open mr-2"></i> Indeks Artikel</a>
        </li>
        <li class="inline-block">
          <button class="button button-secondary px-5 button-s-menu"><i class="fa fa-list-alt mr-2"></i> Kategori Artikel</button>
        </li>
      </ul>
      <div class="grid grid-cols-1 gap-5 lg:grid-cols-3 md:grid-cols-2">
      <?php foreach($artikel as $article) : ?>
        <?php $data['article'] = $article ?>
          <?php $this->load->view($folder_themes .'/partials/article_list', $data) ?>
      <?php endforeach ?>
      </div>
      <?php $data['paging_page'] = ($paging_page && IS_PREMIUM && $this->uri->segment(2) === 'kategori') ? $paging_page : 'first/'.$paging_page ?>
      <?php $this->load->view($folder_themes .'/commons/paging', $data) ?>
      <?php else : ?>
        <?php $data['title'] = $title ?>
        <?php $this->load->view($folder_themes .'/partials/empty_article', $data) ?>
    <?php endif ?>
  </section>

  <?php if(empty($this->input->get('cari')) AND $this->uri->segment(2) != 'kategori') : ?>
    <?php $this->load->view($folder_themes .'/partials/self_service') ?>
    <?php $data['is_home'] = true ?>
    <?php $this->load->view($folder_themes .'/widgets/aparatur_desa', $data) ?>
    <aside class="grid grid-cols-1 lg:grid-cols-3 gap-5 rounded-xl">
      <?php $widget = ['statistik', 'sinergi_program', 'peta_lokasi_kantor'] ?>
      <?php foreach($widget as $w) : ?>
        <div class="sidebar-item">
          <?php $this->load->view($folder_themes . '/widgets/' . $w) ?>
        </div>
      <?php endforeach ?>
    </aside>
  <?php endif ?>
</main>