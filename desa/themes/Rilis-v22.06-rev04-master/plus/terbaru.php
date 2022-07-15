<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="relative-hidden ptb-5">
<div class="terbaru bgwhite border-grey">
		<div class="headmodule bggradient-vertical flexcenter mb-5">
			<i class="fa fa-edit"></i><h1>Artikel Terbaru</h1>
		</div>
		<div class="relative-hidden plr-10 pt-5 pb-20">	
			<div class="flex-container mlr-min-5">
			<?php foreach ($artikel as $data): ?>
				<div class="flexitem-4-news">
					<a href="<?= site_url('artikel/'.buat_slug($data))?>" title="Baca Selengkapnya">
					<div class="article-grid relative-hidden plr-5 pt-5 pb-10">
						<div class="image-default">
						<?php if (is_file(LOKASI_FOTO_ARTIKEL."kecil_".$data['gambar'])): ?>
							<img src="<?= AmbilFotoArtikel($data['gambar'],'kecil') ?>">
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
						<div class="relative-hidden">
						<div class="info-other flexleft"><i class="fa fa-user flexleft"></i><?= $data['owner'] ?></div>
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
			<?php $this->load->view("$folder_themes/commons/page"); ?>
		</div>
	</div>
</div>	