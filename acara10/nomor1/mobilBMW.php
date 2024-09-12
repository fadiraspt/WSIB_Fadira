<?php

require_once 'MobilLengkap.php';

class MobilBMW extends mobilLengkap {
    public function nontonTV()
    {
        echo "TV dihidupkan\n";
        echo "TV Mencari Chanel SCTV\n";
        echo "TV Menampilkan siaran pada channel SCTV\n";
    }

    public function hidupkanMobil()
    {
        echo "Mobil di Hidupkan\n";
    }

    public function matikanMobil()
    {
        echo "Mobil dimatikan\n";
    }

    public function ubahGigi()
    {
        echo "Gigi mobil diubah\n";
    }
}