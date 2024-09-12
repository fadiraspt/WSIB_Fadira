<?php
// Matriks A: Matriks 3x3 dengan nilai-nilai yang sudah ditentukan.
$A = [
    [1, 1, 1],
    [2, 2, 2],
    [3, 3, 3]
];

// Matriks B: Matriks 3x3 dengan nilai-nilai yang sudah ditentukan.
$B = [
    [3, 3, 3],
    [2, 2, 2],
    [1, 1, 1]
];

// Matriks C: Matriks 3x3 untuk menyimpan hasil penjumlahan dari Matriks A dan Matriks B.
// Diinisialisasi dengan nilai 0.
$C = [
    [0, 0, 0],
    [0, 0, 0],
    [0, 0, 0]
];

// Menghitung hasil penjumlahan Matriks A dan Matriks B, lalu menyimpan hasilnya di Matriks C.
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        // Menambahkan elemen-elemen dari Matriks A dan Matriks B, kemudian menyimpannya di Matriks C.
        $C[$i][$j] = $A[$i][$j] + $B[$i][$j];
    }
}

// Menampilkan Matriks A.
echo "Matriks A:<br>";
for ($i = 0; $i < 3; $i++) {
    // Menggunakan implode untuk menggabungkan elemen-elemen dalam baris Matriks A dengan spasi, lalu mencetaknya.
    echo implode(" ", $A[$i]) . "<br>";
}

// Menampilkan Matriks B.
echo "<br>Matriks B:<br>";
for ($i = 0; $i < 3; $i++) {
    // Menggunakan implode untuk menggabungkan elemen-elemen dalam baris Matriks B dengan spasi, lalu mencetaknya.
    echo implode(" ", $B[$i]) . "<br>";
}

// Menampilkan hasil penjumlahan Matriks A dan Matriks B (Matriks C).
echo "<br>Hasil Penjumlahan Matriksnya:<br>";
for ($i = 0; $i < 3; $i++) {
    // Menggunakan implode untuk menggabungkan elemen-elemen dalam baris Matriks C dengan spasi, lalu mencetaknya.
    echo implode(" ", $C[$i]) . "<br>";
}
?>
