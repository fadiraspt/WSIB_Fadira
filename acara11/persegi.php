<?php

// Ini adalah kelas untuk menghitung luas persegi
class Persegi implements hitungLuas
{
    // Di sini kita menyimpan ukuran sisi persegi
    private $sisi;

    // Bagian ini akan dijalankan ketika kita membuat persegi dan memasukkan panjang sisinya
    public function __construct($sisi)
    {
        // Menyimpan nilai sisi yang kita masukkan
        $this->sisi = $sisi;
    }

    // Fungsi ini digunakan untuk menghitung luas persegi
    public function hitungLuasPersegi()
    {
        // Menghitung luas persegi dengan rumus: sisi * sisi
        return $this->sisi * $this->sisi;
    }

    // Fungsi ini seharusnya untuk menghitung luas segitiga, tapi tidak dipakai di sini
    public function hitungLuasSegitiga()
    {
        // Tidak melakukan apa-apa karena ini adalah kelas persegi
        return null;
    }

    // Fungsi ini seharusnya untuk menghitung luas lingkaran, tapi tidak digunakan di sini
    public function hitungLuasLingkaran()
    {
        // Tidak melakukan apa-apa karena ini adalah kelas persegi
        return null;
    }
}

?>
