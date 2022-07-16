<?php
// -------------------------------------------------------------------------
//
// Letakkan username, password dan database sebetulnya di file ini.
// File ini JANGAN di-commit ke GIT. TAMBAHKAN di .gitignore
// -------------------------------------------------------------------------

// Data Konfigurasi MySQL yang disesuaikan

$db['default']['hostname'] = 'localhost';
$db['default']['username'] = 'root';
$db['default']['password'] = '';
$db['default']['port']     = 80;
$db['default']['database'] = 'opensid-dev';

/*
| Untuk setting koneksi database 'Strict Mode'
| Sesuaikan dengan ketentuan hosting
*/
$db['default']['stricton'] = TRUE;
