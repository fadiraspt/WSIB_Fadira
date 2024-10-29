<?php
// Mendefinisikan matriks A dan B
// Matriks A dengan ukuran 3x3 (ada 3 baris horizontal dan vertikal)
$A = [
    [5, 14, 25],
    [1, 5, 16],
    [31, 12, 9]
];

// Matriks B dengan ukuran 3x3 (ada 3 barishorizontal dan vertikal)
$B = [
    [12, 21, 24],
    [3, 7, 21],
    [20, 17, 24]
];

// Inisialisasi matriks hasil yang akan menyimpan hasil penjumlahan dari A dan B
$hasil = [];

// Menjumlahkan elemen-elemen dari matriks A dan B
// Menggunakan loop untuk iterasi setiap baris ($i) dan kolom ($j)
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        // Menjumlahkan elemen di baris ke-$i dan kolom ke-$j
        $hasil[$i][$j] = $A[$i][$j] + $B[$i][$j];
    }
}

// Menampilkan hasil penjumlahan matriks A dan B
echo "Hasil penjumlahan matriks A dan B adalah:<br>";

// Loop untuk menampilkan hasil penjumlahan
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        // Menampilkan elemen dari matriks hasil
        echo $hasil[$i][$j] . " ";
    }
    // Pindah ke baris berikutnya setelah menampilkan semua kolom
    echo "<br>";
}
?>
