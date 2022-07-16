<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="pagestyle">
	
	<?php $this->load->view("$folder_themes/partials/header_top.php"); ?>
	<div class="body-absolute">
		<?php $this->load->view("$folder_themes/partials/header.php"); ?>
		<div class="container-page mt-15">
		<?php if ($artikel): ?>
		<div class="gridview mb-30">
			<div class="mr-30">	
				<div class="head-module green-1 flexcenter">
				<?php if ($title) : ?>
					<?php if (!empty($judul_kategori)): ?>
					<h1><?= $judul_kategori['kategori'] ?></h1>
					<?php else: ?>
					<h1><?= $title ?></h1>
					<?php endif; ?>
				<?php else: ?>
					<h1>Hasil Pencarian</h1>
				<?php endif; ?>
				</div>
				<div class="box-default mb-15 bg-white">
					<?php foreach ($artikel as $data): ?>
					<div class="category-row">
						<a href="<?= site_url('artikel/'.buat_slug($data))?>" title="Baca Selengkapnya">
						<div class="margin-min7">
							<div class="category-image">
							<div class="pd-lr-7">
								<div class="image-height-default" style="border-radius:7px;">
									<?php if (is_file(LOKASI_FOTO_ARTIKEL."kecil_".$data['gambar'])): ?>
									<img src="<?= AmbilFotoArtikel($data['gambar'],'kecil') ?>" alt="<?= $data["judul"] ?>"/>
									<?php else: ?>
									<img src="<?= base_url("$this->theme_folder/$this->theme/images/pengganti.jpg") ?>"/>
									<div class="logo-no-image"><img src="<?= gambar_desa($desa['logo']);?>"/></div>
												<?php endif;?>
								</div>
							</div>
							</div>
							<div class="category-title">
							<div class="pd-lr-7">
								<h2><?= $data["judul"] ?></h2>
								<div class="info flexleft"><i class="fa fa-eye flexleft"></i><?= hit($data['hit']) ?></div>
								<div class="info flexleft"><i class="fa fa-comments-o flexleft"></i><?php $baca_komentar = $this->db->query("SELECT * FROM komentar WHERE id_artikel = '".$data['id']."'"); $komentarku = $baca_komentar->num_rows(); echo number_format($komentarku,0,',','.'); ?></div>
								<div class="category-isi"><?= potong_teks($data['isi'], 85); ?>...</div>
							</div>
							</div>
						</div>
						</a>
					</div>
					<?php endforeach; ?>
						
					<?php $this->load->view("$folder_themes/commons/page"); ?>
				</div>
			</div>

			<div class="sidebarright mb-15">
				<ul>
				<?php $this->load->view("$folder_themes/plus/populer.php"); ?>
				</ul>
			</div>
		</div>
		<?php else: ?>
		<div class="box-default bg-white mb-30">
			<div class="no-found flexcenter">
				<div class="no-found-title">
				<h1 class="flexleft">Ups...<font class="tanda-seru popin" style="color:#ffc000;">!</font></h1>
				<h2>Mohon maaf,</h2>
				<?php if ($title) : ?>
				<?php if (!empty($judul_kategori)): ?>
					<h3>Belum ada data di kategori <?= $judul_kategori['kategori'] ?></h3>
				<?php else: ?>
					<h3>Halaman ini belum tersedia atau sedang dalam perbaikan...</h3>
				<?php endif; ?>
				<?php else: ?>
					<h3>Tidak ditemukan artikel dengan kata pencarian yang anda masukkan...</h3>
				<?php endif; ?>
				</div>
				<div class="no-found-image">
				<img src="<?= base_url("$this->theme_folder/$this->theme/images/no-found.jpg") ?>"/>
				</div>
			</div>
		</div>
		<?php endif; ?>
		</div>
		<?php $this->load->view("$folder_themes/partials/bottom_plus.php"); ?>
		<?php $this->load->view("$folder_themes/partials/bottom_page.php"); ?>
		<?php $this->load->view("$folder_themes/commons/footer.php"); ?>
	</div>
	
</div>