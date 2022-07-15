<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div class="pengaduan">
<div class="box-default bgwhite mb-10">
	<div class="heading-module bggradient1 flexcenter">
	<i class="fa fa-bullhorn"></i><h1 class="flexcenter">Pengaduan</h1>
	</div>
	<div class="relative-hidden plr-15 pt-15">
		<div class="flexcenter mb-20">
			<form action="<?= $search_action; ?>" method="get">
				<div class="width-default flexcenter">
					<select class="form-input form-control border-grey-soft select2 mlr-3" id="caristatus" name="caristatus" style="margin:0 0 10px;">
						<option value="">Semua Status</option>
						<option value="1" <?= selected($caristatus, 1); ?>>Menunggu Diproses</option>
						<option value="2" <?= selected($caristatus, 2); ?>>Sedang Diproses</option>
						<option value="3" <?= selected($caristatus, 3); ?>>Selesai Diproses</option>
					</select>

					<input type="text" name="cari" value="<?= $cari; ?>" placeholder="Cari pengaduan disini..." class="form-input form-control border-grey mlr-3 mb-10">
					<button type="submit" class="tombol bgcolor2 flexcenter mlr-3 mb-10"><i class="fa fa-search"></i></button>	
				</div>
				<div class="width-default flexcenter">
					<div class="tombol bggradient1 flexcenter" data-toggle="modal" data-target="#newpengaduan" style="color:#fff;" type="button"><i class="fa fa-gavel"></i><p style="margin-left:5px;">Buat Pengaduan</p></div>
				</div>
		</form>
		</div>
		<div class="width-default">
			
			<?php if (($notif = session('notif')) && (! session('notif')['data'])) : ?>
			<div class="alertpengaduan">
			<div id="notifikasi" class="alert alert-<?= $notif['status']; ?>" role="alert">
				<?= $notif['pesan']; ?>
			</div>
			</div>
			<?php endif; ?>

			<?php if ($pengaduan) : ?>
				<?php foreach ($pengaduan as $key => $value) : ?>
					<div class="<?= $value['status'] ?> allstatus" data-toggle="modal" data-target="#pengaduan<?= $value['id'] ?>">
					<div class="listrow border-grey ptb-10">
						<div class="listrow-image">
							<div class="foto-pengaduan">
								<img src="<?= base_url("$this->theme_folder/$this->theme/images/iconsvg/pelapor.svg") ?>"/>
							</div>
						</div>
						<div class="listrow-title">
							<h2><?= $value['nama']; ?></h2>
							<div class="info flexleft mb-10" style="width:100%;font-size:90%;">
							<i class="fa fa-calendar flexleft" style="margin-right:5px;"></i><?= $value['created_at'] ?>
							<?php if ($value['status'] == '1') : ?>
								<span class="badge bgblue" style="margin-left:5px;font-weight:normal;">Belum Diproses</span>
							<?php elseif ($value['status'] == '2') : ?>
								<span class="badge bgorange" style="margin-left:5px;font-weight:normal;">Sedang Diproses</span>
							<?php elseif ($value['status'] == '3') : ?>
								<span class="badge bggreen" style="margin-left:5px;font-weight:normal;">Selesai Diproses</span>
							<?php endif; ?>
							</div>
							<h3 style="margin:0 0 5px;"><b><?=$value['judul']?></b></h3>
							<p>
							<?= substr($value['isi'], 0, 50); ?>
							<?php if (strlen($value['isi']) > 50) : ?> ...selengkapnya<?php endif; ?>
							</p>
						</div>
						<div class="tanggapan">
						<?php if ($value['status'] == '1') : ?>
						<span class="badge bggrey3 badge-<?= $value['jumlah'] > 0 ? 'primary' : 'danger'; ?> pull-right"><i class="fa fa-comments"></i> <?= $value['jumlah']; ?> Tanggapan</span>
						<?php else : ?>
						<span class="badge bggradient2 badge-<?= $value['jumlah'] > 0 ? 'primary' : 'danger'; ?> pull-right"><i class="fa fa-comments"></i> <?= $value['jumlah']; ?> Tanggapan</span>
						<?php endif; ?>
						</div>
					</div>

							
					</div>
					
					<div class="modal fade" id="pengaduan<?= $value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="pengaduan<?= $value['id'] ?>" aria-hidden="true" data-backdrop="true">
						<div class="modal-dialog">
							<div class="modal-center-small bgwhite">
								<div class="modal-head bggradient2 flexleft">
									Detail Pengaduan
									<div class="close-area flexcenter">
										<div class="close-button" data-dismiss="modal" aria-hidden="true">
										<svg x="0px" y="0px" viewBox="0 0 492 492">
										</div>
									</div>
								</div>
								<div class="modal-isi pengaduan-detail">
								<div class="withscroll">
								<div class="relative-hidden p-15">
									<h2 class="color-1 mb-10"><?=$value['judul']?></h2>
									<h3 class="mb-5">Dari : <b><?= $value['nama']; ?></b> | Tanggal : <?= $value['created_at'] ?></h3>
									<p class="mb-10"><?=$value['isi']?></p>
									<?php if ($value['foto']) : ?>
										<img src="<?= base_url(LOKASI_PENGADUAN . $value['foto']); ?>" style="width:100%;margin:0 0 10px;display:block;">
									<?php endif; ?>
							
									<div class="tanggapan-status mb-20 flexleft">
										<h2 class="flexleft">
										Status :
										<?php if ($value['status'] == '1') : ?>
										<font class="badge2 biru" style="margin-left:5px;font-weight:normal;">Belum Diproses</font>
										<?php elseif ($value['status'] == '2') : ?>
										<font class="badge2 ungu" style="margin-left:5px;font-weight:normal;">Sedang Diproses</font>
										<?php elseif ($value['status'] == '3') : ?>
										<font class="badge2 hijau" style="margin-left:5px;font-weight:normal;">Selesai Diproses</font>
										<?php endif; ?>
										</h2>
									</div>
								
									<?php foreach ($pengaduan_balas as $keyna => $valuena) : ?>
									<?php if ($valuena['id_pengaduan'] && $valuena['id_pengaduan'] == $value['id']) : ?>
										<div class="mb-20" style="width:100%;float:left;">
										<h3>Ditanggapi : <?= $valuena['nama']; ?> | <?= $valuena['created_at'] ?></h3><p><?= $valuena['isi'] ?></p>
										</div>
									<?php endif; ?>
									<?php endforeach; ?>
								</div>
								</div>
								</div>
							</div>
						
						</div>
					</div>
			
				<?php endforeach; ?>
				

				<?php $this->load->view("$folder_themes/commons/page"); ?>

			<?php else : ?>
				<div class="no-data-big flexcenter">
					<img src="<?= base_url("$this->theme_folder/$this->theme/images/nodata.png") ?>" />
						<div>
							<h3 class="color-1">Mohon maaf,</h3>
							<p>Untuk saat ini data Pengaduan belum tersedia</p>
						</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>

</div>


<div class="modal fade" id="newpengaduan" tabindex="-1" role="dialog" aria-labelledby="newpengaduan" aria-hidden="true" data-backdrop="true">
	<div class="modal-dialog">
		<div class="modal-center-small bgwhite">
			<div class="modal-head bggradient2 flexleft">
				Buat Pengaduan
				<div class="close-area flexcenter">
					<div class="close-button" data-dismiss="modal" aria-hidden="true">
					<svg x="0px" y="0px" viewBox="0 0 492 492">
					</div>
				</div>
			</div>
			<div class="modal-isi">
			<div class="withscroll">
			<div class="relative-hidden p-15">
			<form action="<?= $form_action; ?>" method="POST" enctype="multipart/form-data">
				
				<?php if (($notif = session('notif')) && ($data = session('notif')['data'])) : ?>
					<div class="flexcenter mb-10">
					<div class="alert alert-danger" role="alert">
						<?= $notif['pesan']; ?>
					</div>
					</div>
				<?php endif; ?>
			
				<input name="nik" type="text" maxlength="16" class="form-control bordergrey" placeholder="NIK" value="<?= $data['nik']; ?>" style="margin:10px 0;">
				<input name="nama" type="text" class="form-control bordergrey" placeholder="Nama*" value="<?= $data['nama']; ?>" required style="margin:10px 0;">
				<input name="email" type="email" class="form-control bordergrey" placeholder="Email" value="<?= $data['email']; ?>" style="margin:10px 0;">
				<input name="telepon" type="text" class="form-control bordergrey" placeholder="Telepon" value="<?= $data['telepon']; ?>" style="margin:10px 0;">
				<input name="judul" type="text" class="form-control bordergrey" placeholder="Judul*" value="<?= $data['judul']; ?>" required style="margin:10px 0;">
				<textarea style="margin:10px 0;" name="isi" class="form-control bordergrey" placeholder="Isi Pengaduan*" rows="5" required style="margin:0;"><?= $data['isi']; ?></textarea>
				
				<div class="form-group" style="margin:0 !important;">
					<div class="input-group">
						<input type="text" accept="image/*" onchange="readURL(this);" class="form-control bordergrey" id="file_path" placeholder="Unggah Foto" name="foto" value="<?= $data['foto']; ?>" style="margin:0;">
						<input type="file" accept="image/*" onchange="readURL(this);" class="hidden" id="file" name="foto" value="<?= $data['foto']; ?>">
						<span class="input-group-btn">
							<button type="button" class="btn bgcolor1" id="file_browser"><i class="fa fa-search" style="color:#fff;"></i></button>
						</span>
					</div>
					<small>Gambar: png,jpg,jpeg</small><br>
					<br><img id="blah" src="#" alt="gambar" class="img-responsive hidden" />
				</div>
				<div class="form-group" style="margin:0;">
					<div class="width-default relative-hidden">
						<div class="margin-min5">
							<div class="column-comment-left">
								<div class="padding-lr-5">
									<a href="#" id="b-captcha" onclick="document.getElementById('captcha').src = '<?= base_url()."securimage/securimage_show.php?"?>' + Math.random(); return false" style="color: #000000;">
									<img class="kode-gambar" id="captcha" src="<?= base_url('securimage/securimage_show'); ?>" alt="CAPTCHA Image"/>
									</a>
								</div>
							</div>
							<div class="column-comment-right">
							<div class="padding-lr-5">
								<input type="text" name="captcha_code" class="form-control bordergrey" maxlength="6" required style="margin:0;">Isi Jawaban
							</div>
							</div>
						</div>
					</div>

				</div>
				<div class="width-default flexcenter ptb-15">
					<button type="submit" class="btn btn-success"><i class="fa fa-pencil"></i> Kirim</button>
				</div>
				</form>
			</div>
			</div>
			</div>
		
		</div>
	</div>
</div>
	
<script type="text/javascript">
	$(document).ready(function() {
		window.setTimeout(function() {
			$("#notifikasi").fadeTo(500, 0).slideUp(500, function(){
				$(this).remove();
			});
		}, 1000);

		var data = "<?= session('notif')['data'] ?>";
		if (data) {
			$('#newpengaduan').modal('show');
		}
	});

	$('#b-captcha').click();

	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function(e) {
				$('#blah').removeClass('hidden');
				$('#blah').attr('src', e.target.result).width(150).height(auto);
			};

			reader.readAsDataURL(input.files[0]);
		}
	}
</script>