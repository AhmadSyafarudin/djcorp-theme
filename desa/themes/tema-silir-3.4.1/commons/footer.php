<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php require("$this->theme_folder/$this->theme/commons/social_icons.php") ?>

<div class="container px-3 max-w-container mx-auto space-y-5 my-5">
  <?php if($transparansi) $this->load->view($folder_themes .'/partials/apbdesa', $transparansi) ?>
</div>

<?php $this->load->view($folder_themes .'/commons/bottom_nav') ?>

<footer class="footer">
  <div class="footer-inner">
    <div class="footer-widget">
      <div class="footer-column">
        <div class="footer-brand">
          <img src="<?= gambar_desa($desa['logo']) ?>" alt="Logo <?= ucfirst($this->setting->sebutan_desa).' '.ucwords($desa['nama_desa']) ?>" class="footer-brand-image">
          <p class="footer-brand-caption">
            <?= ucfirst($this->setting->sebutan_desa).' '.ucwords($desa['nama_desa']) ?>
          </p>
        </div>
        <p class="footer-info">
          Website Resmi Pemerintah <?= ucfirst($this->setting->sebutan_desa).' '.ucwords($desa['nama_desa']) ?>,
          <?= ucfirst($this->setting->sebutan_kecamatan) ?>
          <?= ucwords($desa['nama_kecamatan']) ?>,
          <?= ucfirst($this->setting->sebutan_kabupaten) ?>
          <?= ucwords($desa['nama_kabupaten']) ?>
        </p>
        <ul class="footer-smed">
          <?php foreach($sosmed as $data) : ?>
            <?php if(!empty($data['link'])) : ?>
              <li title="<?= $data['nama'] ?>" class="footer-smed-item">
                <a href="<?= $data['link'] ?>" target="_blank" class="footer-smed-link">
                  <?php if(in_array($brand = strtolower(str_replace(' ', '-', $data['nama'])), $socials)) : ?>
                    <svg viewBox="0 0 24 24" height="24" width="24" fill="currentColor" stroke="none" class="footer-smed-icon" xmlns="http://www.w3.org/2000/svg"><?= $svg[$brand] ?></svg>
                    <?php else : ?>
                      <i data-feather="<?= strtolower(str_replace(' ', '-', $data['nama']))?>" class="footer-smed-icon"></i>
                  <?php endif ?>
                </a>
              </li>
            <?php endif ?>
          <?php endforeach ?>
        </ul>
      </div>
      <div class="footer-column">
        <h3 class="footer-heading">Hubungi Kami</h3>
        <p class="footer-info">
          <?= ucwords($desa['alamat_kantor']) ?>,
          <?= ucfirst($this->setting->sebutan_desa) .' '. ucwords($desa['nama_desa']) ?>,
          <?= ucfirst($this->setting->sebutan_kecamatan) .' '. ucwords($desa['nama_kecamatan']) ?>,
          <?= ucfirst($this->setting->sebutan_kabupaten) .' '. ucwords($desa['nama_kabupaten']) ?>,
          Provinsi <?= ucwords($desa['nama_propinsi']) ?>,
          Indonesia,
          <?= $desa['kode_pos'] ?>.
        </p>
        <ul class="footer-contact">
          <?php if($desa['telepon']) : ?>
            <li class="footer-contact-item"><i data-feather="phone" class="icon icon-base mr-2 text-secondary"></i><span>Telepon/Fax: <?= $desa['telepon'] ?></span></li>
          <?php endif ?>
          <?php if($desa['email_desa']) : ?>
            <li class="footer-contact-item"><i data-feather="mail" class="icon icon-base mr-2 text-secondary"></i><span>Email: <?= $desa['email_desa'] ?></span></li>
          <?php endif ?>
        </ul>
      </div>
      <div class="footer-column">
        <h3 class="footer-heading">Album Galeri</h3>
        <div class="footer-album">
          <?php foreach(array_slice($w_gal, 0, 3) as $album) : ?>
            <?php if(is_file(LOKASI_GALERI . 'kecil_' . $album['gambar'])) : ?>
              <?php $link = site_url('first/sub_gallery/'.$album['id']) ?>
              <a href="<?= $link ?>" class="footer-album-item">
                <img src="<?= AmbilGaleri($album['gambar'], 'kecil') ?>" alt="<?= $album['nama'] ?>" title="<?= $album['nama'] ?>" class="footer-album-image">
              </a>
            <?php endif ?>
          <?php endforeach ?>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <span>Hak cipta &copy; <?= date('Y') ?> - Pemerintah <a href="<?= site_url() ?>"><?= NAMA_DESA ?></a> - <a href="https://github.com/OpenSID/OpenSID" target="_blank">OpenSID <?= ambilVersi() ?></a> | <a href="https://opendesa.id" target="_blank">OpenDesa</a> | <a href="https://silirdev.com" target="_blank">Tema Silir <?= THEME_VERSION ?>.</a></span>
    </div>
  </div>
</footer>

<?php $this->load->view($folder_themes . '/partials/scroll_top') ?>