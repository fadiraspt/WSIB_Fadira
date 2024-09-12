<?php
class ItemProduk {
    protected $ukuran;
    protected $warna;
    protected $nama;

    public function __construct($ukuran, $warna, $nama) {
        $this->ukuran = $ukuran;
        $this->warna = $warna;
        $this->nama = $nama;
    }

    public function ukuran() {
        return $this->ukuran;
    }

    public function warna() {
        return $this->warna;
    }

    public function nama() {
        return $this->nama;
    }
}
?>
