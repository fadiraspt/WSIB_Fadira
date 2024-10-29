<?php
// Mendeklarasikan array $arr dengan nilai 1, 2, 3, dan 4
$arr = array(1, 2, 3, 4);

// Menggunakan loop foreach untuk mengakses setiap elemen dalam array $arr
// Variabel $value akan menjadi referensi ke setiap elemen dalam array
foreach ($arr as &$value) {
    // Setiap elemen dalam array dikalikan dengan 2
    // Karena $value referensi, nilai asli dalam $arr juga akan berubah
    $value = $value * 2;
    // Misalnya: elemen pertama (1) dikalikan menjadi 2, elemen kedua (2) menjadi 4, dst.
}

// Setelah loop selesai, array $arr sekarang berisi nilai yang telah dikalikan:
//Dalam loop, setiap elemen dari array dikalikan dengan 2, sehingga array $arr berubah dari [1, 2, 3, 4] menjadi [2, 4, 6, 8].
// $arr adalah array(2, 4, 6, 8)

// Menggunakan unset() untuk memutus referensi dari variabel $value
// Jika unset() tidak digunakan, $value akan tetap merujuk pada elemen terakhir dalam array (8)
// Hal ini bisa menyebabkan masalah jika $value digunakan lagi setelah loop
unset($value);  // Memutus referensi agar $value tidak lagi terhubung dengan array $arr
?>
