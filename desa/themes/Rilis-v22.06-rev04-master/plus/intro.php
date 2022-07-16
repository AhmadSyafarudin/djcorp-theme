<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<style>
.ttan{display:inline-flex;cursor:pointer;transition:all 1s;position:absolute;top:10px;line-height:34px;padding:0;margin:0;color:#fff;background:rgba(0,0,0,0.3);font-weight:normal;border-radius:4px;font-size:90%;z-index:15 !important;opacity:0.6;left:50%;-webkit-transform: translate3d(-50%, 0, 0);-moz-transform: translate3d(-50%, 0, 0);-ms-transform: translate3d(-50%, 0, 0);-o-transform: translate3d(-50%, 0, 0);transform: translate3d(-50%, 0, 0);}
.ttan-close {width:30px;height:30px;position:relative;z-index:50 !important;cursor:pointer;}
.ttan-close:before{content:'';position:absolute;left:50%;margin-left:-1px;width:2px;height:60%;top:20%;background:#fff;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);}
.ttan-close:after{content:'';position:absolute;left:50%;margin-left:-1px;width:2px;height:60%;top:20%;background:#fff;-webkit-transform:rotate(45deg);transform:rotate(45deg);}
#dtan{display:none}
.hitung{color:#fff;font-size:100%;line-height:30px;padding:0;margin:0;font-weight:normal;position:absolute;top:10px;left:50%;-webkit-transform: translate3d(-50%, 0, 0);-moz-transform: translate3d(-50%, 0, 0);-ms-transform: translate3d(-50%, 0, 0);-o-transform: translate3d(-50%, 0, 0);transform: translate3d(-50%, 0, 0);}
.angka{font-size:130%;margin:0 5px;}	
</style>

<div class="modal fade" id="modalintro" data-backdrop="false">
	<div class="modal-dialog">
		<div class="popupcover-color"></div>
		<div class="modal-info-popup bggradient1 flexcenter">
			<div>
			<h3>Selamat datang di website resmi preview Tema Pro Batuah OpenSID</h3>
			<h3>Jika tertarik silahkan hubungi kami...</h3>
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
				</div>
			</div>
					
			<div class="ttan flexcenter" data-dismiss="modal" id="dtan"><div class="ttan-close"></div></div>
			<div id="daplong">
				<script type="text/javascript">/*<![CDATA[*/var seconds=6;setInterval(function(){if(seconds<=1){daplong.style.display="none";dtan.style.display="inline-block"}else{document.getElementById("credits").innerHTML=--seconds}},600);document.write('<div class="hitung flexcenter">Tutup Dalam <span id="credits" class="angka">6</span> dtk</div>');/*]]>*/</script>
			</div>
		</div>
	</div>
</div>

<script>
	// angka 500 dibawah ini artinya pesan akan muncul dalam 0,5 detik setelah document ready
	$(document).ready(function(){
	setTimeout(function(){
	$('#modalintro').modal('show');
	}, 1000);
	});
</script>