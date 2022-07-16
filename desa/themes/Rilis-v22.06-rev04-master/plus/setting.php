<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="defaultmode-view">
	<div class="relative-hidden p-15 bgblack-transparent mb-15" style="border-radius:5px;">
	<div class="flexleft" onclick="setBoxMode(true)" id="boxBtn" style="cursor:pointer;">
		<img style="height:35px;margin:0 10px 0 0;"src="<?= base_url("$this->theme_folder/$this->theme/images/iconpng/default.png") ?>"/>
		<h3 style="font-size:100%;font-weight:500;">Tampilan Box</h3>
	</div>
	</div>
	<div class="relative-hidden p-15 bgblack-transparent" style="border-radius:5px;">
		<h3 style="font-size:100%;font-weight:500;margin:0 0 10px;">Pilih Style Warna</h3>
		<div class="colors"><a class="c-green" data-val="green" href="javascript:void(0);"><div class="pilih flexleft"><div class="pilih-hijau"></div><p style="color:#bdff8c !important;">Hijau</p></div></a></div>
		<div class="colors"><a class="c-blue" data-val="blue" href="javascript:void(0);"><div class="pilih flexleft"><div class="pilih-biru"></div><p style="color:#a8f2ff !important;">Biru</p></div></a></div>
		<div class="colors"><a class="c-red" data-val="red" href="javascript:void(0);"><div class="pilih flexleft"><div class="pilih-merah"></div><p style="color:#ffbfbf !important;">Merah</p></div></a></div>
		<div class="colors"><a class="c-viola" data-val="viola" href="javascript:void(0);"><div class="pilih flexleft"><div class="pilih-ungu"></div><p style="color:#f1bfff !important;">Violet</p></div></a></div>
	</div>	
</div>	

<div class="boxmode-view">
	<div class="relative-hidden p-15 bgblack-transparent mb-15" style="border-radius:5px;">
	<div class="flexleft" onclick="setDefaultMode(true)" id="defBtn" style="cursor:pointer;">
		<img style="height:35px;margin:0 10px 0 0;"src="<?= base_url("$this->theme_folder/$this->theme/images/iconpng/full.png") ?>"/>
		<h3 style="font-size:100%;font-weight:500;">Tampilan Full</h3>
	</div>
	</div>
	<div class="relative-hidden p-15 bgblack-transparent" style="border-radius:5px;">
		<h3 style="font-size:100%;font-weight:500;margin:0 0 10px;">Pilih Style Warna</h3>
		<div class="colors"><a class="c-green" data-val="green" href="javascript:void(0);"><div class="pilih flexleft"><div class="pilih-hijau"></div><p style="color:#bdff8c !important;">Hijau</p></div></a></div>
		<div class="colors"><a class="c-blue" data-val="blue" href="javascript:void(0);"><div class="pilih flexleft"><div class="pilih-biru"></div><p style="color:#a8f2ff !important;">Biru</p></div></a></div>
		<div class="colors"><a class="c-red" data-val="red" href="javascript:void(0);"><div class="pilih flexleft"><div class="pilih-merah"></div><p style="color:#ffbfbf !important;">Merah</p></div></a></div>
		<div class="colors"><a class="c-viola" data-val="viola" href="javascript:void(0);"><div class="pilih flexleft"><div class="pilih-ungu"></div><p style="color:#f1bfff !important;">Violet</p></div></a></div>
	</div>	
</div>
