<?php

// Mendefinisikan sebuah kelas bernama Kalkulator.
class Kalkulator {
    
    // Fungsi untuk melakukan operasi penjumlahan.
    // Menerima dua parameter ($angka1 dan $angka2) dan mengembalikan hasil penjumlahan keduanya sebagai integer.
    public function penjumlahan($angka1, $angka2) : int {
        return $angka1 + $angka2;
    }

    // Fungsi untuk melakukan operasi pengurangan.
    // Menerima dua parameter dengan tipe data integer dan mengembalikan hasil pengurangan keduanya sebagai integer.
    public function pengurangan(int $angka1, $angka2) : int {
        return $angka1 - $angka2;
    }

    // Fungsi untuk melakukan operasi pembagian.
    // Menerima dua parameter dan mengembalikan hasil pembagian keduanya sebagai float (bilangan desimal).
    public function pembagian($angka1, $angka2) : float {
        return $angka1 / $angka2;
    }

    // Fungsi untuk melakukan operasi perkalian.
    // Menerima dua parameter dan mengembalikan hasil perkalian keduanya sebagai integer.
    public function perkalian($angka1, $angka2) : int {
        return $angka1 * $angka2;
    }
}
?>
