<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php if (!empty($komentar)): ?>
	<div class="comment-content ptb-15">
		<div class="comment-head color-1 mb-10"><h2>Komentar<h2></div>
		<?php foreach ($komentar AS $data): ?>
			<div class="comment-page">
				<h2><i class="fa fa-user flexleft" style="margin:0 5px 0 0;float:left;color:#919191;"></i><?= $data['owner']?></h2>
				<h3><?= tgl_indo2($data['tgl_upload'])?></h3>
				<div class="speak" style="margin-left:-10px;">	
					<div class="speak-quote"><img src="<?= base_url("$this->theme_folder/$this->theme/images/iconsvg/quote.svg") ?>"/></div>
					<div class="speak-title"><?= $data['komentar']?></div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
<?php endif; ?>
	
<?php if ($single_artikel['boleh_komentar'] == 1): ?>
	<div class="comment-content ptb-15" id="kolom-komentar">
		<?php
			$notif = $this->session->flashdata('notif');
			$label = ($notif['status'] == -1) ? 'label-danger' : 'label-info';
		?>
		<?php if ($notif): ?>
			<p style="margin:0 0 10px;padding:10px;margin:0 0 20px;line-height:1.1;color:#000;border-radius:5px;display:block;background:#d6ffb5;"><?= $notif['pesan']; ?></p>
		<?php endif; ?>
		<div class="comment-head color-1 mb-10"><h2>Kirim Komentar</h2></div>
		<div class="contact_bottom">
			<form class="contact_form form-komentar" id="validasi" name="form" action="<?= site_url("add_comment/$single_artikel[id]"); ?>" method="POST" onSubmit="return validasi(this);">
			<div class="flexleft">
				<div class="box-isian-title">Nama</div>
				<div class="box-isian-isi">
					<input class="form-control" type="text" name="owner" maxlength="100" placeholder="ketik di sini" value="<?= $notif['data']['owner']; ?>" required>
				</div>
			</div>
			<div class="flexleft">
				<div class="box-isian-title">Telp./HP</div>
				<div class="box-isian-isi">
					<input class="form-control" type="text" name="no_hp" maxlength="15" placeholder="ketik di sini" value="<?= $notif['data']['no_hp']; ?>" required>
				</div>
			</div>
			<div class="flexleft">
				<div class="box-isian-title">E-mail</div>
				<div class="box-isian-isi">
					<input class="form-control" type="text" name="email" maxlength="100" placeholder="email@gmail.com" value="<?= $notif['data']['email']; ?>" required>
				</div>
			</div>
			<div class="box-isian-title">Komentar</div>
			<div class="box-isian-isi">
				<textarea class="form-control" name="komentar"><?= $notif['data']['komentar']; ?></textarea>
			</div>
			<div class="width-default">
				<div class="margin-min5">
					<div class="column-comment-left">
						<div class="padding-lr-5">
							<img id="captcha" src="<?= base_url('securimage/securimage_show.php?'); ?>" alt="CAPTCHA Image"/>
							<a href="#" onclick="document.getElementById('captcha').src = '<?= base_url()."securimage/securimage_show.php?"?>' + Math.random(); return false" >[ Ganti ]</a>
						</div>
					</div>
					<div class="column-comment-right">
					<div class="padding-lr-5">
						Isikan Jawaban
						<input style="display:block;" type="text" name="captcha_code" class="form-control" maxlength="6" value="<?= $notif['data']['captcha_code']; ?>"/>
					</div>
					</div>
				</div>
			</div>
			<div class="width-default flexcenter mt-10"><input class="button-default bgcolor1 pull-right" type="submit" value="Kirim"></div>
						
			</form>
		</div>
	</div>		
<?php else: ?>
	<div class="comment-content mtb-15">
	<span class='info'></span>
	</div>	
<?php endif; ?>


<?php if ($single_artikel['boleh_komentar'] == 1): ?>
	<div class="relative-hidden ptb-15">
		<div class="comment-head color-1"><h2>Komentar Facebook<h2></div>
		<div class="fb-comments" data-href="<?= site_url('artikel/'.buat_slug($single_artikel))?>" width="100%" data-numposts="5"></div>
	</div>		
<?php endif; ?>
	