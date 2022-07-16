<h1 align="center">Selamat datang di Tema DeNatra!</h1>

<p dir="auto" align="center"><img style="max-width: 100%;" width="500" alt="denatra" src="https://user-images.githubusercontent.com/46939846/147866426-d50e1d2b-1ead-43de-b562-6f83fa85a1e1.png"></p>

## Tema DeNatra
Tema DeNatra https://www.natairaya.desa.id adalah salah satu Tema yang digunakan untuk halaman Website OpenSID (Sistem Informasi Desa).

Tema ini dibuat oleh Ariandi Ryan Kahfi, S.Pd. dengan mengangkat nama Desa Natai Raya yang disingkat menjadi DeNatra.

Sebelumnya ada Tema Natra (https://github.com/OpenSID/tema-natra) kependekan dari Natai Raya yang merupakan pemenang Sayembara Tema Web OpenSID 2019.

## Pengaturan
Salin dan Tempel beberapa konfigurasi di bawah ini ke dalam file desa/config/config.php

$config['fluid'] = true; //Tampilkan Halaman Penuh

$config['menu'] = true; //Tampilkan Menu Statis di Header

$config['logo'] = true; //Logo saat bagikan link web utama dari file : desa/themes/denatra/assets/image/logo.png

$config['kode_kota'] = '2207'; //Pengaturan Jadwal Sholat

$config['fbadmin'] = '1117950751'; //Pengaturan Komentar Facebook

$config['fbappid'] = '147912828718'; //Pengaturan Komentar Facebook

List kode kota bisa lihat di https://www.ariandi.net/kode

Cara mendapatkan ID Profil Akun Facebook bisa lihat di https://www.natairaya.desa.id/artikel/2019/1/30/memasang-komentar-facebook-di-sistem-informasi-desa

## Fitur Lapak (Manual)
- Ubah Produk menu Lapak, edit file: desa/themes/denatra/partials/lapak/lapak.json dengan keterangan sebagai berikut:

	"aktif": false, (ubah false menjadi true untuk menampilkan Lapak Desa bawaan tema)

	"id": "1", (ini harus urut jika menambah produk)

	"gambar": "lele.jpg", (gambar/mp4/wave/wom yang ada di folder desa/themes/denatra/assets/lapak)

	"hp": "628115222660", (nomor Hp Pelapak)

	"lat": "-2.665093", (Titik koordinat Latitude)

	"lng": "111.709899", (Titik koordinat Langitude)

- Tampilan bisa berupa gambar, mp4, ataupun embed dari Youtube.
  Contoh : link Youtube https://youtu.be/R2-vCJisOPY cukup ketik di baris gambar atas menjadi R2-vCJisOPY

## Keterangan Tambahan
- Ubah Background Header, ganti file: desa/themes/denatra/assets/img/header.jpg
- Sesuaikan tampilan widget di halaman utama bagian bawah, bisa edit file: desa/themes/denatra/partials/module_home.php

	ganti file php yang ada di $data["isi"] sesuai dengan nama file widget yang ingin ditampilkan. (baris 130, 135, 140, dan 145)

	(secara default ada 4 widget, statistik.php, peta_wilayah_desa.php, peta_lokasi_kantor.php dan komentar.php)

- Ingin menambah script pada bagian meta web, edit file: desa/themes/denatra/partials/module_top.php
- Ingin menambah script pada bagian footer web, edit file: desa/themes/denatra/partials/module_bottom.php
- Ingin menyesuaikan script pada bagian footer web, edit file: desa/themes/denatra/partials/module_footer.php
- Sesuaikan sidebar, edit file: desa/themes/denatra/commons/sidebar.php
- Sesuaikan tinggi slider, edit file: desa/themes/denatra/layouts/slider.php baris ke-25 (max-height: 350px dan 450px) sesuaikan angka yg diinginkan
- sesuaikan link tujuan dan link gambar pada Shortcut/Banner di halaman utama, edit file: desa/themes/denatra/partials/home/banner.php
- Munculkan icon statistik pengunjung di header Mobile View, edit file: desa/themes/denatra/commons/header.php baris ke-19 (hapus text-hide-xs didalam class nya)
- Munculkan loading pada saat membuka website, edit dan sesuaikan isi file: desa/themes/denatra/commons/loader.php
- Sesuaikan Link Terkait di bagian bawah website, edit file: desa/themes/denatra/partials/module_footer.php
- Sesuaikan Teks Berjalan pada Header, edit file: desa/themes/denatra/partials/module_bottom.php baris ke-38
- Jika ingin menyesuaikan kata pada status Kehadiran di Widget Aparatur Desa, edit file:

	desa/themes/denatra/widgets/aparatur_desa.php (baris 50)
	
	desa/themes/denatra/commons/sidebar.php (baris 169)

	dan sesuaikan pada kata 'Hadir di Kantor Desa' : 'Belum Rekam Kehadiran'
