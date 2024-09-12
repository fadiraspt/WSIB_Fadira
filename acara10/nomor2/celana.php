<?php
require_once 'ItemsProduct.php';

class Celana extends ItemProduk {
    private $tipe;
    private $model;

    public function __construct($ukuran, $warna, $nama, $tipe, $model) {
        parent::__construct($ukuran, $warna, $nama);
        $this->tipe = $tipe;
        $this->model = $model;
    }

    public function tipe() {
        return $this->tipe;
    }

    public function model() {
        return $this->model;
    }
}
?>
