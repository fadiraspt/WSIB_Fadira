<?php

// Ini adalah kelas untuk menghitung luas segitiga
class Segitiga implements hitungLuas
{
    // Di sini kita menyimpan panjang sisi dan tinggi segitiga
    private $sisi;
    private $tinggi;

    // Bagian ini akan dijalankan ketika kita membuat segitiga dan memasukkan panjang sisi dan tinggi
    public function __construct($sisi, $tinggi) {
        // Menyimpan nilai sisi dan tinggi yang kita masukkan
        $this->sisi = $sisi;
        $this->tinggi = $tinggi;
    }

    // Fungsi ini seharusnya untuk menghitung luas persegi, tapi tidak dipakai di sini
    public function hitungLuasPersegi()
    {
        // Tidak melakukan apa-apa karena ini adalah kelas segitiga
        return null;
    }

    // Fungsi ini digunakan untuk menghitung luas segitiga
    public function hitungLuasSegitiga()
    {
        // Menghitung luas segitiga dengan rumus: 0.5 * sisi * tinggi
        return 0.5 * $this->sisi * $this->tinggi;
    }

    // Fungsi ini seharusnya untuk menghitung luas lingkaran, tapi tidak digunakan di sini
    public function hitungLuasLingkaran()
    {
        // Tidak melakukan apa-apa karena ini adalah kelas segitiga
        return null;
    }
}

?>
