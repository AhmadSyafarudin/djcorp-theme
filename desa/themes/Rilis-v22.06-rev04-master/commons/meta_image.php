<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>


<meta property="og:image" content="<?= gambar_desa($desa['logo']);?>"/>
<meta itemprop="image" content="<?= gambar_desa($desa['logo']);?>"/>

<!-- pindahkan semua baris ini ke baris 3
<meta property="og:image" content="<?= base_url("$this->theme_folder/$this->theme/images/namafile.jpg") ?>"/>
<meta itemprop="image" content="<?= base_url("$this->theme_folder/$this->theme/images/namafile.jpg") ?>"/>
pindahkan semua baris ini ke baris 6 --> 

<!--
Secara default, thumbnail gambar share link adalah logo website.
Jika ingin thumbnail gambar share website menggunakan gambar lain :
1. Silahkan terlebih dahulu sediakan gambar yang diinginkan dengan format = .jpg (contoh.jpg)
2. Upload gambar tersebut ke folder desa/themes/batuah/images/
3. Kemudian copy nama file tersebut dan pastekan dengan mengganti : namafile.jpg diatas
4. Pindahkan baris sesuai petunjuk diatas
-->

