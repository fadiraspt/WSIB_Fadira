<?php 
// Mendeklarasikan variabel $x dengan angka 5985 (tipe integer)
$x = 5985;  
// var_dump() digunakan untuk menampilkan tipe data dan nilai dari $x
// Hasilnya menunjukkan bahwa $x adalah sebuah integer dengan nilai 5985
var_dump($x);  // Output: int(5985)
echo "<br>";   // Menambahkan baris baru di HTML untuk output yang rapi

// Mengubah nilai variabel $x menjadi angka negatif -345
$x = -345;  
// var_dump() akan menunjukkan bahwa $x sekarang adalah integer negatif dengan nilai -345
var_dump($x);  // Output: int(-345)
echo "<br>";   // Menambahkan baris baru

// Mendeklarasikan $x sebagai angka dalam format hexadecimal (0x8C)
// Nilai ini adalah 140 dalam sistem desimal
$x = 0x8C;  
// var_dump() menunjukkan bahwa $x adalah integer dengan nilai 140 (dikonversi dari hexadecimal)
var_dump($x);  // Output: int(140)
echo "<br>";   // Menambahkan baris baru

// Mendeklarasikan $x sebagai angka dalam format octal (047)
// Nilai ini adalah 39 dalam sistem desimal
$x = 047;  
// var_dump() menunjukkan bahwa $x adalah integer dengan nilai 39 (dikonversi dari octal)
var_dump($x);  // Output: int(39)
echo "<br>";   // Menambahkan baris baru

// Mendeklarasikan $x sebagai angka desimal dengan koma, 10.365 (tipe float)
$x = 10.365;  
// var_dump() menunjukkan bahwa $x adalah float dengan nilai 10.365
var_dump($x);  // Output: float/desimal(10.365)
echo "<br>";   // Menambahkan baris baru

// Mendeklarasikan $x sebagai angka dalam notasi ilmiah, 2.4e3 berarti 2.4 x 10^3 (2400)
$x = 2.4e3;  
// var_dump() menunjukkan bahwa $x adalah float/desimal dengan nilai 2400
var_dump($x);  // Output: float(2400)
echo "<br>";   // Menambahkan baris baru

// Mendeklarasikan $x dengan angka notasi ilmiah 8E-5, yang berarti 8 x 10^-5 (0.00008)
$x = 8E-5;  
// var_dump() menunjukkan bahwa $x adalah float/desimal dengan nilai 0.00008
var_dump($x);  // Output: float(0.00008)
echo "<br>";   // Menambahkan baris baru

// Menggunakan fungsi strlen() untuk menghitung panjang string "Hello world!"
// Panjang string adalah jumlah karakter, termasuk spasi
echo strlen("Hello world!");  // Output: 12 (karakter total termasuk spasi)
echo "<br>";   // Menambahkan baris baru

// Menggunakan fungsi strpos() untuk menemukan posisi kata "world" dalam string "Hello world!"
// Posisi karakter dihitung dari nol, jadi "world" dimulai dari karakter ke-6
echo strpos("Hello world!", "world");  // Output: 6 (huruf pertama "w" ada di posisi ke-6)
?>
