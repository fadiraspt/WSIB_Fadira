<?php
// Mendeklarasikan variabel $tugas1 dan $tugas2 dengan nilai masing-masing
$tugas1 = 90;  // Nilai tugas 1 adalah 90
$tugas2 = 80;  // Nilai tugas 2 adalah 80

// Menghitung jumlah dari kedua tugas
$jumlah = $tugas1 + $tugas2;  // Nilai tugas 1 (90) ditambah tugas 2 (80), hasilnya 170

// Menghitung rata-rata dari kedua tugas
$rerata = $jumlah / 2;  // Jumlah kedua tugas (170) dibagi 2, hasilnya 85 sebagai rerata

// Menampilkan nilai tugas 1
echo "Nilai Tugas 1 : " . $tugas1 . "<br>";  // Output: Nilai Tugas 1 : 90

// Menampilkan nilai tugas 2
echo "Nilai Tugas 2 : " . $tugas2 . "<br>";  // Output: Nilai Tugas 2 : 80

// Menampilkan rerata dari kedua tugas
echo "Rerata Tugas : " . $rerata;  // Output: Rerata Tugas : 85
echo "<br>";  // Menambahkan baris baru pada output HTML

// Menambahkan operator penggabungan string (".")
// Menggabungkan nilai $tugas1 dan $tugas2 sebagai string tanpa penjumlahan
$gabung = "Hasil penggabungan : " . $tugas1 . $tugas2;
// Hasilnya akan menjadi: "Hasil penggabungan : 9080" karena nilai 90 dan 80 digabungkan sebagai teks, bukan dijumlahkan

// Menampilkan hasil penggabungan string dari nilai tugas 1 dan tugas 2
//Penggabungan variabel $tugas1 dan $tugas2 sebagai string menghasilkan "9080" karena mereka disambungkan sebagai teks.
echo $gabung;  // Output: Hasil penggabungan : 9080
?>
