<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="modal fade" id="jamkerja" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
	<div class="modal-dialog">
		<div class="modal-center-small bgwhite">
			<div class="modal-head bggradient2 flexleft">
				Jam Kerja
				<div class="close-area flexcenter">
					<div class="close-button" data-dismiss="modal" aria-hidden="true">
						<svg x="0px" y="0px" viewBox="0 0 492 492">
					</div>
				</div>
			</div>
			<div class="modal-isi">
				<div class="withscroll">
				<div class="p-15">
				<?php if ($jam_kerja) : ?>
				<?php $this->load->view("$folder_themes/widgets/jam_kerja"); ?>
				<?php else: ?>
				<?php $this->load->view("$folder_themes/plus/jam_kerja_manual"); ?>
				<?php endif ?>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="jshalat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
	<div class="modal-dialog">
		<div class="modal-center-small bgwhite">
			<div class="modal-head bggradient2 flexleft">
				Jadwal Shalat
				<div class="close-area flexcenter">
					<div class="close-button" data-dismiss="modal" aria-hidden="true">
						<svg x="0px" y="0px" viewBox="0 0 492 492">
					</div>
				</div>
			</div>
			<div class="modal-isi">
				<div class="withscroll">
				<div class="p-15">
				<?php $this->load->view("$folder_themes/plus/jadwal_shalat"); ?>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="updatecovid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
	<div class="modal-dialog">
		<div class="modal-center-small bgwhite">
			<div class="modal-head bggradient2 flexleft">
				Data Covid
				<div class="close-area flexcenter">
					<div class="close-button" data-dismiss="modal" aria-hidden="true">
						<svg x="0px" y="0px" viewBox="0 0 492 492">
					</div>
				</div>
			</div>
			<div class="modal-isi">
				<div class="withscroll">
				<div class="p-15">
				<?php $this->load->view("$folder_themes/plus/covid"); ?>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="pengaduanmasyarakat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
	<div class="modal-dialog">
		<div class="modal-center-small bgwhite">
			<div class="modal-head bggradient2 flexleft">
				Kontak <?= ucwords($this->setting->sebutan_desa); ?>
				<div class="close-area flexcenter">
					<div class="close-button" data-dismiss="modal" aria-hidden="true">
						<svg x="0px" y="0px" viewBox="0 0 492 492">
					</div>
				</div>
			</div>
			<div class="modal-isi">
				<div class="withscroll">
				<div class="p-15">
				<div class="modal-flex bggrey">
					<div class="relative-hidden p-10 flexcenter">
					<img src="<?= base_url("$this->theme_folder/$this->theme/images/pengaduan.png") ?>"/>
					<?php if ($desa['telepon']): ?> 
					<h3>Jika ada saran, pertanyaan, keluhan maupun kritikan dan pengaduan silahkan ajukan dengan menggunakan layanan kontak dibawah...</h3>
					<?php elseif ($desa['email_desa']): ?> 
					<h3>Jika ada saran, pertanyaan, keluhan maupun kritikan dan pengaduan silahkan ajukan dengan menggunakan layanan kontak dibawah...</h3>
					<?php else: ?>
					<h3>Jika ada saran, pertanyaan, keluhan maupun kritikan  dan pengaduan silahkan datang langsung ke kantor <?= ucwords($this->setting->sebutan_desa); ?></h3>
					<?php endif ?>
					</div>
				</div>
				<div class="modal-contact">
					<?php if ($desa['telepon']): ?> 
						<a rel="nofollow" href="https://api.whatsapp.com/send?phone=<?= ucwords(" ".$desa['telepon'])?>&text=Saya ingin bertanya sesuatu" target="blank">
						<div class="modal-contact-inner flexleft bggradient2 mt-5">
						<img src="<?= base_url("$this->theme_folder/$this->theme/images/iconsvg/social/whatsapp.svg") ?>"/><p><?= ucwords(" ".$desa['telepon'])?></p>
						</div>
						</a>
					<?php endif ?>
					<?php if ($desa['telepon']): ?> 
						<a href="tel://6282269993730">
						<div class="modal-contact-inner flexleft bggradient2 mt-5">
						<i class="fa fa-phone"></i><p><?= ucwords(" ".$desa['telepon'])?></p>
						</div>
						</a>
					<?php endif ?>
					<?php if ($desa['email_desa']): ?> 
						<div class="modal-contact-inner flexleft bggradient2 mt-5">
						<i class="fa fa-paper-plane"></i><p><?= ucwords(" ".$desa['email_desa'])?></p>
						</div>
					<?php endif ?>
					<div class="flexcenter mt-5" style="text-align:center;">
					<p>Kantor <?= ucwords($this->setting->sebutan_desa); ?> :<br/><?= ucwords(($desa['alamat_kantor']) ? ' ' . $desa['alamat_kantor'] : ''); ?>, <?=ucwords($this->setting->sebutan_kecamatan)?> <?=$desa['nama_kecamatan']?>, <?=ucwords($this->setting->sebutan_kabupaten)?> <?=$desa['nama_kabupaten']?> - Provinsi <?=$desa['nama_propinsi']?></p>
					</div>
					<div class="footer-social flexcenter mt-10">
					<?php foreach($sosmed as $data) : ?>
					  <?php if(!empty($data['link'])) : ?>
						<a href="<?= $data['link'] ?>" target="_blank" rel="noopener">
						  <?php if(in_array($brand = strtolower(str_replace(' ', '-', $data['nama'])), $socials)) : ?>
							<svg viewBox="0 0 24 24" width="24" height="24" stroke="none" xmlns="http://www.w3.org/2000/svg" class="border-1"><?= $svg[$brand] ?></svg>
							<?php else : ?>
							  <span data-feather="<?= strtolower(str_replace(' ', '-', $data['nama']))?>"></span>
						  <?php endif ?>
						</a>
					  <?php endif ?>
					<?php endforeach ?>
				</div>
				</div>
				<?php if(IS_PREMIUM) : ?>
					<a href="<?= site_url('pengaduan') ?>">
						<div class="modal-contact-inner flexcenter bgcolor1 mt-10">
						<i class="fa fa-bullhorn"></i><p>Layanan Khusus Pengaduan</p>
						</div>
					</a>
				<?php endif ?>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>