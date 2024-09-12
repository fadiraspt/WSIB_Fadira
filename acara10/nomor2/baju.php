<?php
require_once 'ItemsProduct.php';

class Baju extends ItemProduk {
    private $tipe;

    public function __construct($ukuran, $warna, $nama, $tipe) {
        parent::__construct($ukuran, $warna, $nama);
        $this->tipe = $tipe;
    }

    public function tipe() {
        return $this->tipe;
    }
}
?>
