<?php

require_once 'MobilLengkap.php';

// Kelas MobilBMW merupakan turunan dari kelas mobilLengkap
// Menyediakan implementasi untuk fitur khusus BMW seperti menonton TV,
// serta fungsi dasar mobil seperti menghidupkan dan mematikan mobil,
// serta mengubah gigi mobil.
class MobilBMW extends mobilLengkap {

    // Menghidupkan TV dan menampilkan siaran pada channel SCTV.
    // Metode ini adalah fitur khusus dari BMW yang memungkinkan penumpang
    // untuk menonton TV di dalam mobil.
    public function nontonTV()
    {
        echo "TV dihidupkan\n";
        echo "TV Mencari Chanel SCTV\n";
        echo "TV Menampilkan siaran pada channel SCTV\n";
    }

    // Menghidupkan mobil.
    // Metode ini akan mengeluarkan pesan bahwa mobil telah dihidupkan.
    public function hidupkanMobil()
    {
        echo "Mobil di Hidupkan\n";
    }

    // Mematikan mobil.
    // Metode ini akan mengeluarkan pesan bahwa mobil telah dimatikan.
    public function matikanMobil()
    {
        echo "Mobil dimatikan\n";
    }

    // Mengubah gigi mobil.
    // Metode ini akan mengeluarkan pesan bahwa gigi mobil telah diubah.
    public function ubahGigi()
    {
        echo "Gigi mobil diubah\n";
    }
}
