<?php

// Ini adalah kelas untuk menghitung luas lingkaran
class Lingkaran implements hitungLuas
{
    // Kita akan menyimpan nilai jari-jari lingkaran di sini
    private $jariJari;

    // Bagian ini akan berjalan ketika kita membuat lingkaran dan memasukkan jari-jarinya
    public function __construct($jariJari)
    {
        // Menyimpan nilai jari-jari yang kita masukkan
        $this->jariJari = $jariJari;
    }

    // Fungsi ini seharusnya untuk menghitung luas persegi, tapi tidak digunakan
    public function hitungLuasPersegi()
    {
        // Tidak melakukan apa-apa karena ini untuk lingkaran
        return null;
    }

    // Fungsi ini seharusnya untuk menghitung luas segitiga, tapi tidak digunakan
    public function hitungLuasSegitiga()
    {
        // Tidak melakukan apa-apa karena ini untuk lingkaran
        return null;
    }

    // Fungsi ini untuk menghitung luas lingkaran
    public function hitungLuasLingkaran()
    {
        // Menghitung luas lingkaran dengan rumus: pi * jari-jari * jari-jari
        return pi() * $this->jariJari * $this->jariJari;
    }
}

// Membuat lingkaran baru dengan jari-jari 5
$lingkaran = new Lingkaran(5);

// Menampilkan hasil luas lingkaran yang sudah dihitung
echo "Luas lingkaran: " . $lingkaran->hitungLuasLingkaran();

?>
