<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>


	<div class="relative-hidden for-category plr-5">
		<div class="mlr-min-10">
			<div class="box-left">
			<div class="plr-10">
				<div class="box-default bgwhite mb-10">
				<div class="heading-module bggradient1 flexcenter">
					<?php if ($title) : ?>
						<?php if (!empty($judul_kategori)): ?>
							<i class="fa fa-th"></i><h1 class="flexcenter"><?= $judul_kategori['kategori'] ?></h1>
						<?php else: ?>
							<i class="fa fa-folder-open"></i><h1 class="flexcenter"><?= $title ?></h1>
						<?php endif; ?>
					<?php else: ?>
						<i class="fa fa-search"></i><h1 class="flexcenter">Hasil Pencarian</h1>
					<?php endif; ?>
				</div>	
				<div class="relative-hidden pt-15 plr-15">
				<?php if ($artikel): ?>
					<div class="flex-container mlr-min-5">
					<?php foreach ($artikel as $data): ?>
						<div class="flexitem-3-news">
							<a href="<?= site_url('artikel/'.buat_slug($data))?>" title="Baca Selengkapnya">
							<div class="article-grid relative-hidden plr-5 pt-5 pb-10">
								<div class="image-default">
								<?php if (is_file(LOKASI_FOTO_ARTIKEL."kecil_".$data['gambar'])): ?>
									<img src="<?= AmbilFotoArtikel($data['gambar'],'kecil') ?>" alt="<?= $data["judul"] ?>"/>
								<?php else: ?>
									<img src="<?= base_url("$this->theme_folder/$this->theme/images/pengganti.jpg") ?>"/>
									<div class="logo-no-image"><img src="<?= gambar_desa($desa['logo']);?>"/></div>
								<?php endif;?>
								</div>
								<h2><?= $data["judul"] ?></h2>
								<div class="info-article-home border-grey">
									<div class="info-tanggal bggrey border-grey flexcenter color-1"><?php echo date('d',strtotime($data['tgl_upload']));?></div>
									<div class="info-bulan flexcenter"><?php echo date('M',strtotime($data['tgl_upload']));?><br/><?php echo date('Y',strtotime($data['tgl_upload']));?></div>
								</div>
								<div class="relative-hidden">
								<div class="info-other flexleft"><i class="fa fa-eye flexleft"></i><?= hit($data['hit']) ?></div>
								<div class="info-other flexleft"><i class="fa fa-comments-o flexleft"></i><?php $baca_komentar = $this->db->query("SELECT * FROM komentar WHERE id_artikel = '".$data['id']."'"); $komentarku = $baca_komentar->num_rows(); echo number_format($komentarku,0,',','.'); ?> Komentar</div>
								</div>
								<div class="relative-hidden isi-article-home">
								<?php if ($data['isi']): ?>
									<?= potong_teks ($data['isi'], 100); ?>...
								<?php endif; ?>
								</div>
							</div>
							</a>
						</div>
					<?php endforeach; ?>
					</div>
					<div class="column-1 mb-20">
					<?php $this->load->view("$folder_themes/commons/page"); ?>
					</div>
				<?php else: ?>
					<div class="no-data-big flexcenter">
					<img src="<?= base_url("$this->theme_folder/$this->theme/images/nodata.png") ?>" />
					<div>
					<?php if ($title) : ?>
						<?php if (!empty($judul_kategori)): ?>
							<h3 class="color-1">Mohon maaf,</h3>
							<p>Untuk saat ini belum ada data di kategori <?= $judul_kategori['kategori'] ?></p>
						<?php else: ?>
							<h3 class="color-1">Mohon maaf,</h3>
							<p>Halaman ini belum tersedia atau sedang dalam perbaikan...</p>
						<?php endif; ?>
					<?php else: ?>
						<h3 class="color-1">Mohon maaf,</h3>
						<p>Tidak ditemukan artikel yang terkait dengan kata pencarian yang anda masukkan...</p>
					<?php endif; ?>
					</div>
					</div>
				<?php endif; ?>	
				</div>
				</div>
				<?php $this->load->view("$folder_themes/widgets/arsip_artikel"); ?>
			</div>
			</div>
			<div class="box-right">
				<div class="plr-10">
				<?php $this->load->view("$folder_themes/partials/sidebar"); ?>
				</div>
			</div>
		</div>	
	</div>
