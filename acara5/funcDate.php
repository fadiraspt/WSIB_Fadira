<?php
// Mengambil tanggal saat ini dan menyimpannya dalam variabel $tanggal.
// Format tanggal yang diambil adalah hari-bulan-tahun, dengan bulan dalam format nama lengkap.
//date('d-F-Y'): Mengambil tanggal saat ini dengan format hari (d), nama bulan lengkap (F), dan tahun (Y).
$tanggal = date('d-F-Y');
//$tanggal: Variabel untuk menyimpan hasil tanggal.

// Menampilkan tanggal yang disimpan dalam variabel $tanggal.
echo $tanggal;
?>
