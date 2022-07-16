<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="box-default bgwhite mb-10">
	<?php if ($jam_kerja) : ?>
	<div class="heading-module bggradient1 flexcenter">
	<i class="fa fa-clock-o"></i><h1 class="flexcenter">Jam Kerja</h1>
	</div>
	<div class="relative-row p-10">
	<table class="jamkerja color-1" style="width: 100%;border-radius:0 0 5px 5px 0;overflow:hidden;" cellpadding="0" cellspacing="0">
          <thead>
            <tr>
              <th>Hari</th>
              <th>Mulai</th>
              <th>Selesai</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($jam_kerja as $value) : ?>
            <tr>
              <td><?= $value->nama_hari ?></td>
              <?php if ($value->status) : ?>
                <td><?= $value->jam_masuk ?></td>
                <td><?= $value->jam_keluar ?></td>
              <?php else : ?>
                <td colspan="2"><span class="label label-danger"> Libur </span></td>
              <?php endif ?>
            </tr>
            <?php endforeach ?>
          </tbody>
        </table>
	</div>
	<?php else : ?>
	<div class="flexcenter">
	<p>Fitur Jam Kerja Belum Diaktifkan...</p>
	</div>
	<?php endif ?>
</div>
 



