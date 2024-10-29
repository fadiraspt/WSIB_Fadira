<?php

// 1. Pertama, kita memasukkan file-file yang diperlukan.
//    File ini berisi definisi bagaimana cara menghitung luas untuk setiap bentuk.

include 'hitungLuas.php';  // Ini adalah file yang memberikan informasi umum tentang menghitung luas.
include 'Persegi.php';     // Ini untuk menghitung luas persegi.
include 'Segitiga.php';    // Ini untuk menghitung luas segitiga.
include 'Lingkaran.php';   // Ini untuk menghitung luas lingkaran.

// 2. Selanjutnya, kita membuat objek untuk setiap bentuk yang ingin kita hitung luasnya.
//    Misalnya, untuk persegi, kita memberi nilai 4 untuk sisi-sisinya.
$persegi = new Persegi(4); // Membuat persegi dengan sisi 4.

// 3. Untuk segitiga, kita perlu dua nilai: panjang alas dan tinggi.
//    Di sini kita memberi nilai 4 untuk alas dan 6 untuk tinggi.
$segitiga = new Segitiga(4, 6); // Membuat segitiga dengan alas 4 dan tinggi 6.

// 4. Untuk lingkaran, kita hanya butuh jari-jari.
//    Di sini kita memberi nilai 5 untuk jari-jari lingkaran.
$lingkaran = new Lingkaran(5); // Membuat lingkaran dengan jari-jari 5.

// 5. Sekarang kita bisa menghitung luas masing-masing bentuk dan menampilkannya.
//    Kita gunakan fungsi yang sudah kita definisikan di setiap kelas untuk menghitung luas.

echo "Luas Persegi: " . $persegi->hitungLuasPersegi() . PHP_EOL; // Menghitung dan menampilkan luas persegi.
echo "Luas Segitiga: " . $segitiga->hitungLuasSegitiga() . PHP_EOL; // Menghitung dan menampilkan luas segitiga.
echo "Luas Lingkaran: " . $lingkaran->hitungLuasLingkaran() . PHP_EOL; // Menghitung dan menampilkan luas lingkaran.

?>
