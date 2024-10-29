<?php
// Mengambil informasi tanggal dan waktu saat ini dengan menggunakan fungsi getdate().
// Fungsi ini mengembalikan array dengan elemen-elemen seperti hari, bulan, dan juga tahun.
$tangalSkrng = getdate();

// Menampilkan tanggal saat ini dengan format: hari-bulan-tahun.
// 'mday' adalah hari dalam bulan, 'mon' adalah bulan, dan 'year' adalah tahun.
echo $tangalSkrng['mday']." - ".$tangalSkrng['mon'] .' - '. $tangalSkrng['year'];
// $tangalSkrng['mday']: Mengakses hari dalam bulan dari array.
//$tangalSkrng['mon']: Mengakses bulan dari array (berformat angka).
//$tangalSkrng['year']: Mengakses tahun dari array.
//echo: Menampilkan informasi tanggal dengan format hari-bulan-tahun.
?>
