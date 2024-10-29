<?php
// Mendefinisikan array A dan B dengan elemen yang sudah ditentukan
$A = array(5, 8, 23, 30, 41);
$B = array(4, 6, 16, 20, 12);

// Memeriksa apakah panjang array A dan B sama?
if (count($A) !== count($B)) {
    die("Array A dan B harus memiliki panjang yang sama");
}

// Array digunakan untuk menyimpan hasil penjumlahan dan pengurangan
$result_addition = array();
$result_subtraction = array();

// Menghitung hasil penjumlahan dan pengurangan
for ($i = 0; $i < count($A); $i++) {
    // Menjumlahkan elemen yang bersesuaian dari A dan B
    $result_addition[] = $A[$i] + $B[$i];
    // Mengurangkan elemen yang bersesuaian dari A dan B
    $result_subtraction[] = $A[$i] - $B[$i];
}

// Menampilkan array A
echo "Array A: ";
print_r($A);

// Menampilkan array B
echo "Array B: ";
print_r($B);

// Menampilkan hasil penjumlahan dari A dan B
echo "Hasil Penjumlahan A + B: ";
print_r($result_addition);

// Menampilkan hasil pengurangan dari A dan B
echo "Hasil Pengurangan A - B: ";
print_r($result_subtraction);
?>
