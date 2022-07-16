Untuk mengaktifkan theme / tema Batuah, silahkan lakukan aktivasi dengan cara :
1. Lakukan pembayaran dan konfirmasi kepada Open Desa
2. Kirim domain OpenSID desa anda kepada Open Desa
3. Theme / Tema Batuah segera diaktifkan

--------------------------------------------------------------------------------------------------------------

* LOGO
Secara default, logo yang tampil adalah yang di setting dari admin OpenSID.
Jika menggunakan logo format gif, silahkan upload file logo ke folder : desa, dengan nama dan ekstensi (harus) : logo.gif
Logo yang diupload akan terus tampil meskipun upgrade versi Batuah karena lokasi file tersimpan di folder desa, bukan di folder tema Batuah

--------------------------------------------------------------------------------------------------------------

* WARNA TEMA
Untuk mengganti warna default silahkan buka file : temabatuah/plus/color.php
(petunjuk terlampir di file tersebut)

--------------------------------------------------------------------------------------------------------------

* LEBAR TAMPILAN
Untuk mengganti mode tampilan layar (full / box), buka file temabatuah/plus/stylemode.php dan baca petunjuk disana

--------------------------------------------------------------------------------------------------------------

* LAYOUT HOME, BOTTOM HALAMAN & SIDEBAR
Untuk edit urutan layout bagian tengah halaman home, buka file : temabatuah/commons/home_layout.php
pindahkan salahsatu item dengan menseleksi - cut dan pastekan di posisi yang diinginkan 

Untuk edit urutan layout bagian bawah halaman (kecuali home), buka file : temabatuah/commons/bottom_page.php
pindahkan salahsatu item dengan menseleksi - cut dan pastekan di posisi yang diinginkan 

Untuk edit urutan layout bagian sidebar, silahkan lakukan via halaman admin OpenSID di pengaturan Widget

* LINK TAMBAHAN
Cara aktifkan fitur Link Tambahan di halaman Home :
1. Buka file : temabatuah/linkplus/link.json
2. Pada baris ke 2 ganti "aktif": false, menjadi "aktif": true,

Cara Edit :

1. Buka file : temabatuah/linkplus/link.json

2. Dan edit seperti contoh ini:
   "id": "1", ---> biarkan / tidak perlu dirubah
   "judulitem": "edit bagian ini", ---> Jangan terlalu panjang, contoh : "judulitem": "Buku Tamu",
   "gambar": "edit bagian ini", ---> Sesuaikan dengan nama file/gambar icon, contoh : "gambar": "namafile.png",
   "link": "edit bagian ini" ---> Contoh : "link": "https://opendesa.id/"
   
2. untuk icon, silahkan upload file/gambar pada : temabatuah/linkplus/icon
   sesuaikan nama file/gambar dengan isi di file temabatuah/link.json (format : jpg, png)

--------------------------------------------------------------------------------------------------------------

* LAPAK HOME
Untuk aktifkan Lapak di halaman Home :
Edit file temabatuah/lapak.json
Pada baris ke 2 : "aktif": false,
ganti dengan : "aktif": true,

Edit dan tambah Lapak di Home :
Edit file temabatuah/lapak.json
dan ubah isi dari item Lapak :
    {
      "id": "edit bagian ini",
      "produk": "edit bagian ini",
      dst... hingga
    },
	
Untuk menambah, copy :
	{
      "id": "item",
      "produk": "item",
      dst... hingga
    },	
kemudian pastekan seperti contoh yang sudah ada.
Pastikan setiap kode } diakhiri dengan tanda koma = },
Dan pastikan produk Lapak terakhir tidak diakhiri dengan tanda koma = }

untuk gambar lapak, silahkan upload file/gambar pada : temabatuah/assets/lapak
sesuaikan nama file/gambar dengan isi di file lapak.json

--------------------------------------------------------------------------------------------------------------

* VIDEO
Untuk aktifkan video di home buka file : temabatuah/commons/home_layout.php (untuk di Home) dan commons/bottom_page.php (untuk halaman lainnya),
kemudian copy dan pastekan script dibawah ini di tempat yang diinginkan :
<!-- Video -->
	<?php $this->load->view("$folder_themes/plus/video"); ?>
<!-- Video -->

Untuk mengedit video buka file : temabatuah/plus/video.php
ganti id video youtube dengan yang baru : <iframe class="video-box" align="center" src="https://www.youtube.com/embed/id_video_youtube_anda" frameborder="0"allowfullscreen></iframe>
lalu judul video : <div class="video-title">Tujuan SDGS Desa1</div>

Untuk menambah, copy :
	<!-- video -->
	<div class="carouselright-cell">
		<div class="mlr-5">
			<div class="box-default backg-white" style="padding:5px !important;">
				<iframe class="video-box" align="center" src="https://www.youtube.com/embed/8UF-xOxHsnU" frameborder="0"allowfullscreen></iframe>
			</div>
			<div class="video-title">Tujuan SDGS Desa1</div>
		</div>
	</div>
	
kemudian pastekan pada urutan selanjutnya	

--------------------------------------------------------------------------------------------------------------

* APPID
Untuk mengganti APPID dengan APPID anda sendiri buka file temabatuah/plus/fbappid.php

<script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v3.2&appId=328618625940706&autoLogAppEvents=1"></script>

Ganti angka :  328618625940706 dengan APPID anda

--------------------------------------------------------------------------------------------------------------

* JADWAL SHALAT
Untuk menyesuaikan waktu jadwal shalat dengan kota/kabupaten masing-masing daerah,
buka file temabatuah/plus/jadwal_shalat.php
edit baris ke 16 ganti angka 632 dengan kode kota/kabupaten anda
atau,
copy script dibawah ini :
    $config['kode_kota'] = 632;
lalu pastekan di file desa/config/config.php	
sama dengan sebelumnya, ganti angka 632 dengan kode kota/kabupaten anda
untuk daftar kode kota/kabupaten silahkan cari di link ini : https://api.banghasan.com/sholat/format/json/kota

--------------------------------------------------------------------------------------------------------------

* THUMNAIL DEFAULT
Untuk gambar thumnail share OpenSID tema Batuah, silahkan edit file temabatuah/commons/meta_image.php (baca petunjuknya)