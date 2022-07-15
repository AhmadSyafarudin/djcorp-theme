<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<div class="relative-hidden ptb-5">
	<div class="headmodule bgcolor1 flexcenter">
		<i class="fa fa-file"></i><h1>E-Mandiri</h1>
	</div>
	<div class="layanan-mandiri ptb-20 bggradient2 plr-10">
	<div class="flex-container">
		<div class="mandiri-left flexcenter">
		<img src="<?= base_url("$this->theme_folder/$this->theme/images/layanan-intro.png") ?>" />
		</div>
		<div class="mandiri-center bgblack-transparent2 flexcenter">
		<div class="plr-20">
			<img src="<?= gambar_desa($desa['logo']);?>"/>
			<h2><?= ucwords($this->setting->sebutan_desa); ?> <?= ucwords(($desa['nama_desa']) ? ' ' . $desa['nama_desa'] : ''); ?></h2>
			<p><?=ucwords($this->setting->sebutan_kecamatan)?> <?=$desa['nama_kecamatan']?><br/><?=ucwords($this->setting->sebutan_kabupaten)?> <?=$desa['nama_kabupaten']?> - <?=$desa['nama_propinsi']?></p>
		</div>
		</div>
		<div class="mandiri-right bgblack-transparent2 flexcenter">
		<div class="plr-20">
			<?php
			if( ! isset($_SESSION['mandiri']) OR $_SESSION['mandiri']<>1) { ?>
				<form action="<?= site_url('layanan-mandiri/cek'); ?>" method="post" target="blank">
					<input name="nik" type="text" placeholder="Ketik Nomor KTP" maxlength="16" class="form-control" value="" required>
					<input name="pin" type="password" placeholder="Ketik Kode PIN" value="" maxlength="6" class="form-control" required>
					<div class="flexcenter">
					<button type="submit" id="but" class="btn bgcolor1" style="border:none;box-shadow:none;color:#fff;">Masuk</button>
					</div>
					<div class="dapat-pin flexleft mt-10"><img src="<?= base_url("$this->theme_folder/$this->theme/images/iconsvg/penting.svg") ?>" /><p>Hubungi Perangkat <?=ucwords($this->setting->sebutan_desa)?> untuk mendapatkan PIN</p></div>
				</form>
			<?php
			} else {
			?>
				<div class="anda-online" style="margin-top:10px;">
				<p style="margin:0 0 10px;padding:0;line-height:1.1;color:#fff;">Saat ini anda masih online di Layanan Mandiri <?= ucwords($this->setting->sebutan_desa). ' ' . (($desa['nama_desa']) ? ' ' . $desa['nama_desa'] : ''); ?></p>
					<div class="margin-min5">
						<div class="column-2layanan">
						<div class="padding-lr-5">
							<a href="<?= site_url('layanan-mandiri/profil'); ?>"><div class="form-control" style="height:30px;line-height:30px;">Profil</div></a>
							<a href="<?= site_url('layanan-mandiri/pesan-masuk'); ?>"><div class="form-control" style="height:30px;line-height:30px;">Pesan</div></a>
						</div>
						</div>
						<div class="column-2layanan">
						<div class="padding-lr-5">
							<a href="<?= site_url('layanan-mandiri/permohonan-surat'); ?>"><div class="form-control" style="height:30px;line-height:30px;">Permohonan</div></a>
							<a href="<?= site_url('layanan-mandiri/bantuan'); ?>"><div class="form-control" style="height:30px;line-height:30px;">Bantuan</div></a>
							<a href="<?= site_url("layanan-mandiri/keluar"); ?>"><div class="tombol backg-2 pull-right">
							<svg x="0px" y="0px" viewBox="0 0 24.303 24.303" style="float:left;width:auto;height:16px;fill:#fff;margin:3px 5px 0 0;">
							<path d="M10.269,11.298V1.883C10.269,0.844,11.113,0,12.152,0s1.883,0.844,1.883,1.883v9.415 c0,1.039-0.844,1.883-1.883,1.883S10.269,12.337,10.269,11.298z M19.616,2.761c-0.61-0.483-1.5-0.377-1.983,0.234 c-0.483,0.612-0.378,1.5,0.234,1.984c2.24,1.767,3.524,4.413,3.524,7.261c0,5.094-4.145,9.239-9.238,9.239 c-5.094,0-9.239-4.145-9.239-9.239c0-2.847,1.283-5.492,3.521-7.258c0.612-0.483,0.717-1.371,0.234-1.984 c-0.483-0.612-1.37-0.716-1.984-0.234C1.764,5.069,0.089,8.523,0.089,12.24c0,6.652,5.412,12.063,12.063,12.063 s12.063-5.412,12.063-12.063C24.215,8.521,22.538,5.067,19.616,2.761z"></path>
							</svg>
							Keluar</div></a>
						</div>
						</div>
					</div>
				</div>

			<?php }
			?>
			<?php $this->load->view('head_tags_front') ?>
		</div>	
		</div>
	</div>
	</div>
</div>