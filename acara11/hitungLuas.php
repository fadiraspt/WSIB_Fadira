<?php
// Interface HitungLuas adalah "janji" yang harus dipenuhi oleh kelas-kelas lain.
// Setiap kelas yang menggunakan interface ini harus memiliki fungsi hitungLuas().
Interface HitungLuas {
    public function hitungLuas(); // Fungsi ini wajib ada di kelas yang menggunakan interface ini
}

// Kelas Persegi untuk menghitung luas persegi
class Persegi implements HitungLuas {
    private $sisi; // Variabel untuk menyimpan panjang sisi persegi

    // Fungsi __construct untuk memberikan nilai sisi saat objek dibuat
    public function __construct($sisi) {
        $this->sisi = $sisi; // Menyimpan nilai sisi
    }

    // Fungsi hitungLuas untuk menghitung luas persegi
    public function hitungLuas()
    {
        return $this->sisi * $this->sisi; // Rumus luas persegi (sisi x sisi)
    }
}

// Kelas Segitiga untuk menghitung luas segitiga
class Segitiga implements HitungLuas {
    private $alas; // Variabel untuk menyimpan nilai alas segitiga
    private $tinggi; // Variabel untuk menyimpan nilai tinggi segitiga

    // Fungsi __construct untuk memberikan nilai alas dan tinggi saat objek dibuat
    public function __construct($alas, $tinggi) {
        $this->alas = $alas; // Menyimpan nilai alas
        $this->tinggi = $tinggi; // Menyimpan nilai tinggi
    }

    // Fungsi hitungLuas untuk menghitung luas segitiga
    public function hitungLuas() {
        return 0.5 * $this->alas * $this->tinggi; // Rumus luas segitiga (1/2 x alas x tinggi)
    }
}

// Kelas Lingkaran untuk menghitung luas lingkaran
class Lingkaran implements HitungLuas {
    private $jariJari; // Variabel untuk meny
