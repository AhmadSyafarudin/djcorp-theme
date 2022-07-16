<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php if($teks_berjalan) : ?>
  <div class="newsticker">
    <h3 class="newsticker-heading"><i data-feather="info" class="icon icon-lg"></i> <span class="newsticker-title">Sekilas Info</span></h3>
    <ul class="newsticker-list">
      <?php foreach($teks_berjalan as $newsticker) : ?>
        <li class="newsticker-item">
          <?= $newsticker['teks'] ?>
          <?php if($newsticker['tautan']) : ?>
          <a href="<?= $newsticker['tautan'] ?>" class="newsticker-link"><i data-feather="link" class="icon icon-sm mr-2"></i> <?= $newsticker['judul_tautan']?></a>
          <?php endif ?>
        </li>
      <?php endforeach ?>
    </ul>
  </div>
<?php endif ?>