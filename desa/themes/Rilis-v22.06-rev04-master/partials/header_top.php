<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="headertop bggradient1 flexleft">
	<div class="headertop-left flexleft ml-20">
	
		<div class="topmenu flexcenter" onclick="openmenu()">
			<svg viewBox="0 0 128.000000 512.000000">
			<g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)">
			<path d="M500 5104 c-234 -50 -436 -254 -485 -489 -95 -454 306 -855 760 -760 288 60 505 329 505 625 0 406 -380 710 -780 624z M500 3184 c-234 -50 -436 -254 -485 -489 -95 -454 306 -855 760 -760 288 60 505 329 505 625 0 406 -380 710 -780 624z M500 1264 c-234 -50 -436 -254 -485 -489 -95 -454 306 -855 760 -760 238 50 440 252 490 490 95 456 -309 857 -765 759z"/>
			</g>
			</svg>
		</div>
		<div id="menuside" class="leftpanel">
			<div class="leftpanel-inner bggrey">
			<a href="javascript:void(0)" onclick="closemenu()">
			<div class="panel-head flexcenter bgcolor2">
			<div class="close-area flexcenter">
				<div class="close-button">
				<svg x="0px" y="0px" viewBox="0 0 492 492">
				</div>
			</div>
			</div>
			</a>
			<div class="rightpanel-body" style="padding:10px;">
				<div class="withscroll">
				<div class="relative-hidden p-10">
				<?php $this->load->view("$folder_themes/plus/mobile_menu"); ?>
				</div>
				</div>
			</div>
			</div>
		</div>
		
		<div class="title-m">
		<?= ucwords($this->setting->sebutan_desa); ?> <?= ucwords(($desa['nama_desa']) ? ' ' . $desa['nama_desa'] : ''); ?>
		</div>
		
		<div id="waktu" class="mr-15 desktop-only"></div>
		<?php if ($desa['telepon']): ?> 
			<a rel="nofollow" href="https://api.whatsapp.com/send?phone=<?= ucwords(" ".$desa['telepon'])?>&text=Saya ingin bertanya sesuatu" target="blank">
			<div class="flexleft mr-15">
			<i class="fa fa-phone"></i><p><?= ucwords(" ".$desa['telepon'])?></p>
			</div>
			</a>
		<?php endif ?>
		<?php if ($desa['email_desa']): ?> 
			<div class="flexleft mr-15 desktop-only">
			<i class="fa fa-paper-plane"></i><p><?= ucwords(" ".$desa['email_desa'])?></p>
			</div>
		<?php endif ?>
		
	</div>
	
	<div class="headertop-right flexright">
		<?php $this->load->view("$folder_themes/plus/topright"); ?>
	</div>
	
</div>

<div class='modal fade' id="identitas" tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true' data-backdrop="false">
	<div class="modal-dialog">
		<div class="modal-center-small bgwhite">
			<div class="modal-head bggradient2 flexleft">
				Identitas <?= ucwords($this->setting->sebutan_desa); ?>
				<div class="close-area flexcenter">
					<div class="close-button" data-dismiss="modal" aria-hidden="true">
						<svg x="0px" y="0px" viewBox="0 0 492 492">
					</div>
				</div>
			</div>
			<div class="modal-isi">
				<div class="withscroll">
				<div class="p-15">
				<?php $this->load->view("$folder_themes/plus/identitas"); ?>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class='modal fade' id="aparatur" tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true' data-backdrop="false">
	<div class="modal-dialog">
		<div class="modal-center-medium bgwhite">
			<div class="modal-head bggradient2 flexleft">
				Aparatur <?= ucwords($this->setting->sebutan_desa); ?>
				<div class="close-area flexcenter">
					<div class="close-button" data-dismiss="modal" aria-hidden="true">
						<svg x="0px" y="0px" viewBox="0 0 492 492">
					</div>
				</div>
			</div>
			<div class="aparatur-modal modal-isi">
				<div class="withscroll">
				<div class="p-15">
				<?php $this->load->view("$folder_themes/plus/aparatur_modal"); ?>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>




 <script>
	function openmenu() {
	  document.getElementById("menuside").style.width = "100%";
	}
	function closemenu() {
	  document.getElementById("menuside").style.width = "0";
	}
</script>