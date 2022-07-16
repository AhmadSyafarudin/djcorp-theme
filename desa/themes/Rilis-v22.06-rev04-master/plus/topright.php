<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<a href="<?= site_url('layanan-mandiri/masuk') ?>">
<div class="topright-item flexcenter desktop-only" style="margin:0;cursor:pointer;border:none;">
	<div class="top-tombol bglight flexcenter color-1">E-Mandiri</div>
</div>
</a>

<div class="top-search desktop-only">
	<form method=get action="<?= site_url(); ?>">
		<input type="text" name="cari" maxlength="50" class="form-control" value="<?= $cari ?>" placeholder="Cari Artikel">
		<button type="submit" class="to-search flexcenter">
			<svg x="0px" y="0px" viewBox="0 0 56.966 56.966">
			<path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23 s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92 c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17 s-17-7.626-17-17S14.61,6,23.984,6z"/>
			</svg>
		</button>
	</form>
</div>

<div class="topright-item bgwhite-transparent flexcenter tip-bottom" onclick="openkehadiran()" data-toggle="tooltip" data-original-title="Kehadiran Aparatur"  style="margin:0;cursor:pointer;">
	<svg viewBox="0 0 32 32">
	<g><rect fill="none" height="32" width="32"/></g><g><path d="M20,16c-0.75,0-8,0-8,0s-2,0-2,2c0,0.778,0,12,0,12h12V18C22,18,22,16,20,16z" fill="#fff"/></g><g><circle cx="16" cy="11" r="3" fill="#fff"/></g><g><circle cx="8" cy="5" r="3" fill="#fff"/></g><g><path d="M12,14h0.023C11.39,13.162,11,12.131,11,11c0-0.343,0.035-0.677,0.101-1C8.968,10,4,10,4,10s-2,0-2,2c0,0.778,0,12,0,12h6 v-6C8,14,12,14,12,14z" fill="#fff"/></g><g><path d="M30,12c0,0,0-2-2-2c-0.587,0-5.143,0-7.101,0C20.965,10.323,21,10.657,21,11c0,1.131-0.39,2.162-1.022,3H20c4,0,4,4,4,4v6 h6V12z" fill="#fff"/></g><g><circle cx="24" cy="5" r="3" fill="#fff"/></g>
	</svg>
</div>
<div id="hadir_perangkat" class="rightpanel">
	<div class="rightpanel-inner bgwhite">
	<a href="javascript:void(0)" onclick="closekehadiran()">
	<div class="panel-head bgcolor2 flexcenter">
	<div class="close-area flexcenter">
		<div class="close-button">
		<svg x="0px" y="0px" viewBox="0 0 492 492">
		</div>
	</div>
	</div>
	</a>
	<div class="rightpanel-body">
		<div class="withscroll">
		<div class="relative-hidden p-10">
		<div class="head-center-inner flexcenter mb-10 color-1">
		<h1 class="border-3">Kehadiran Aparatur <?= ucwords($this->setting->sebutan_desa); ?></h1>
		</div>
		<?php $this->load->view("$folder_themes/plus/aparatur_modal"); ?>
		</div>
		</div>
	</div>
	</div>
</div>

<div class="topright-item bgwhite-transparent flexcenter tip-bottom desktop-only" data-toggle="tooltip" data-original-title="Statistik Pengunjung" style="margin:0;cursor:pointer;" onclick="openvisitor()">
	<svg viewBox="0 0 32 32">
	<path d="M30.92,1.62a1,1,0,0,0-.54-.54A1,1,0,0,0,30,1H28a1,1,0,0,0-1,1,1,1,0,0,0,.66.93l-.32.31L19.89,8.83,12.45,5.11a1,1,0,0,0-1,.09l-8,6a1,1,0,0,0-.2,1.4A1,1,0,0,0,4,13a1,1,0,0,0,.6-.2l7.51-5.63,7.44,3.72a1,1,0,0,0,1.05-.09l8-6,.11-.09.36-.37A1,1,0,0,0,30,5a1,1,0,0,0,1-1V2A1,1,0,0,0,30.92,1.62Z M4,15a3,3,0,0,0-3,3V28a3,3,0,0,0,6,0V18A3,3,0,0,0,4,15Z M12,10a3,3,0,0,0-3,3V28a3,3,0,0,0,6,0V13A3,3,0,0,0,12,10Z M20,13a3,3,0,0,0-3,3V28a3,3,0,0,0,6,0V16A3,3,0,0,0,20,13Z M28,9a3,3,0,0,0-3,3V28a3,3,0,0,0,6,0V12A3,3,0,0,0,28,9Z"/>
	</svg>
</div>
<div id="visitorweb" class="rightpanel">
	<div class="rightpanel-inner bgwhite">
	<a href="javascript:void(0)" onclick="closevisitor()">
	<div class="panel-head bgcolor2 flexcenter">
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
		<div class="head-center-inner flexcenter mb-10 color-1">
		<h1 class="border-3">Statistik Pengunjung</h1>
		</div>
		<?php $this->load->view("$folder_themes/widgets/statistik_pengunjung"); ?>
		</div>
		</div>
	</div>
	</div>
</div>

<div class="dropdown topright-item bgwhite-transparent flexcenter tip-bottom" data-toggle="tooltip" data-original-title="Ganti Warna" style="cursor:pointer;position:relative;">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-target="#warna" role="button" aria-haspopup="true" aria-expanded="true"><img src="<?= base_url("$this->theme_folder/$this->theme/images/iconsvg/color.svg") ?>"/></a>
	<div id="warna">
		<div class="dropdown-menu">
			<h3>Pilih Style Warna</h3>
			<div class="colors"><a class="c-green" data-val="green" href="javascript:void(0);"><div class="pilih flexleft"><div class="pilih-hijau"></div><p>Hijau</p></div></a></div>
			<div class="colors"><a class="c-blue" data-val="blue" href="javascript:void(0);"><div class="pilih flexleft"><div class="pilih-biru"></div><p>Biru</p></div></a></div>
			<div class="colors"><a class="c-red" data-val="red" href="javascript:void(0);"><div class="pilih flexleft"><div class="pilih-merah"></div><p>Merah</p></div></a></div>
			<div class="colors"><a class="c-viola" data-val="viola" href="javascript:void(0);"><div class="pilih flexleft"><div class="pilih-ungu"></div><p>Violet</p></div></a></div>
		</div>
	</div>
</div>

<div class="topright-item bgwhite-transparent flexcenter tip-bottom desktop-only" data-toggle="tooltip" data-original-title="Pengaturan Tampilan" style="margin:0;cursor:pointer;" onclick="opensetting()">
	<svg viewBox="0 0 512 512">
	<path d="M496.851,212.213l-48.806-12.201c-4.106-14.108-9.722-27.572-16.666-40.205l25.89-43.151  c4.722-7.869,3.482-17.943-3.008-24.432l-34.485-34.485c-6.489-6.49-16.563-7.729-24.432-3.008l-43.151,25.89  c-12.633-6.944-26.097-12.56-40.205-16.666l-12.201-48.805C297.561,6.246,289.562,0,280.384,0h-48.769  c-9.177,0-17.177,6.246-19.403,15.149l-12.201,48.805c-14.108,4.106-27.572,9.722-40.205,16.666l-43.151-25.89  c-7.87-4.722-17.943-3.482-24.432,3.008L57.738,92.223c-6.489,6.489-7.729,16.562-3.008,24.432l25.89,43.151  c-6.944,12.633-12.56,26.097-16.666,40.205l-48.806,12.201C6.246,214.438,0,222.438,0,231.615v48.769  c0,9.177,6.246,17.177,15.149,19.403l48.806,12.201c4.106,14.108,9.722,27.572,16.666,40.205l-25.89,43.151  c-4.722,7.869-3.482,17.943,3.008,24.432l34.485,34.485c6.489,6.49,16.563,7.729,24.432,3.008l43.151-25.89  c12.633,6.944,26.097,12.56,40.205,16.666l12.201,48.805c2.226,8.903,10.225,15.149,19.403,15.149h48.769  c9.177,0,17.177-6.246,19.403-15.149l12.201-48.805c14.108-4.106,27.572-9.722,40.205-16.666l43.151,25.89  c7.87,4.722,17.943,3.482,24.432-3.008l34.485-34.485c6.489-6.489,7.729-16.562,3.008-24.432l-25.89-43.151  c6.944-12.633,12.56-26.097,16.666-40.205l48.806-12.201c8.903-2.226,15.149-10.226,15.149-19.403v-48.769  C512,222.438,505.754,214.438,496.851,212.213z M256,336c-44.112,0-80-35.888-80-80s35.888-80,80-80s80,35.888,80,80  S300.112,336,256,336z"/>
	</svg>
</div>
<div id="settingweb" class="rightpanel">
	<div class="rightpanel-inner bgcolor1">
	<a href="javascript:void(0)" onclick="closesetting()">
	<div class="panel-head bgcolor2 flexcenter">
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
		<div class="head-center-inner flexcenter mb-30">
		<h1 class="border-3" style="color:#fff;">Pengaturan</h1>
		</div>
		<?php $this->load->view("$folder_themes/plus/setting"); ?>
		</div>
		</div>
	</div>
	</div>
</div>

<div class="topright-item bgblack-transparent flexcenter tip-bottom" data-toggle="tooltip" data-original-title="Gelap / Terang">
	<div class="hid-in-dark">
	<div class="colors">
		<a class="c-black" data-val="black" href="javascript:void(0);">
			<div class="to-dark flexcenter">
			<svg viewBox="0 0 16 16" style="fill:#fec500 !important;height:20px;">
				<g>
				<path d="M8,16c1.257,0,2.442-0.298,3.5-0.815C8.838,13.886,7,11.161,7,8s1.838-5.886,4.5-7.185C10.442,0.298,9.257,0,8,0  C3.582,0,0,3.582,0,8S3.582,16,8,16z M14,3c0,1.105-0.895,2-2,2c1.105,0,2,0.895,2,2c0-1.105,0.895-2,2-2C14.895,5,14,4.105,14,3z M10,6c0,1.105-0.895,2-2,2c1.105,0,2,0.895,2,2c0-1.105,0.895-2,2-2C10.895,8,10,7.105,10,6z M13,13c0-1.105,0.895-2,2-2c-1.105,0-2-0.895-2-2c0,1.105-0.895,2-2,2C12.105,11,13,11.895,13,13z"/>
				</g>
			</svg>
			</div>
		</a>
	</div>
	</div>
	<div class="hid-in-light">
	<div class="colors">
		<a class="c-green" data-val="green" href="javascript:void(0);">
			<div class="to-dark flexcenter">
			<svg viewBox="0 0 45.16 45.16" style="fill:#fec500 !important;height:22px;">
				<path d="M22.58,11.269c-6.237,0-11.311,5.075-11.311,11.312s5.074,11.312,11.311,11.312c6.236,0,11.311-5.074,11.311-11.312 S28.816,11.269,22.58,11.269z M22.58,7.944c-1.219,0-2.207-0.988-2.207-2.206V2.207C20.373,0.988,21.361,0,22.58,0c1.219,0,2.207,0.988,2.207,2.207 v3.531C24.787,6.956,23.798,7.944,22.58,7.944z M22.58,37.215c-1.219,0-2.207,0.988-2.207,2.207v3.53c0,1.22,0.988,2.208,2.207,2.208c1.219,0,2.207-0.988,2.207-2.208 v-3.53C24.787,38.203,23.798,37.215,22.58,37.215z M32.928,12.231c-0.861-0.862-0.861-2.259,0-3.121l2.497-2.497c0.861-0.861,2.259-0.861,3.121,0 c0.862,0.862,0.862,2.26,0,3.121l-2.497,2.497C35.188,13.093,33.791,13.093,32.928,12.231z M12.231,32.93c-0.862-0.863-2.259-0.863-3.121,0l-2.497,2.496c-0.861,0.861-0.862,2.26,0,3.121 c0.862,0.861,2.26,0.861,3.121,0l2.497-2.498C13.093,35.188,13.093,33.79,12.231,32.93z M37.215,22.58c0-1.219,0.988-2.207,2.207-2.207h3.531c1.219,0,2.207,0.988,2.207,2.207c0,1.219-0.988,2.206-2.207,2.206 h-3.531C38.203,24.786,37.215,23.799,37.215,22.58z M7.944,22.58c0-1.219-0.988-2.207-2.207-2.207h-3.53C0.988,20.373,0,21.361,0,22.58c0,1.219,0.988,2.206,2.207,2.206 h3.531C6.956,24.786,7.944,23.799,7.944,22.58z M32.928,32.93c0.862-0.861,2.26-0.861,3.121,0l2.497,2.497c0.862,0.86,0.862,2.259,0,3.12s-2.259,0.861-3.121,0 l-2.497-2.497C32.066,35.188,32.066,33.791,32.928,32.93z M12.231,12.231c0.862-0.862,0.862-2.259,0-3.121L9.734,6.614c-0.862-0.862-2.259-0.862-3.121,0 c-0.862,0.861-0.862,2.259,0,3.12l2.497,2.497C9.972,13.094,11.369,13.094,12.231,12.231z"/>
			</svg>
			</div>
		</a>
	</div>
	</div>
</div>


 <script>
	function openkehadiran() {
	  document.getElementById("hadir_perangkat").style.width = "100%";
	}
	function closekehadiran() {
	  document.getElementById("hadir_perangkat").style.width = "0";
	}
	function openvisitor() {
	  document.getElementById("visitorweb").style.width = "100%";
	}
	function closevisitor() {
	  document.getElementById("visitorweb").style.width = "0";
	}
	function opensetting() {
	  document.getElementById("settingweb").style.width = "100%";
	}
	function closesetting() {
	  document.getElementById("settingweb").style.width = "0";
	}
</script>