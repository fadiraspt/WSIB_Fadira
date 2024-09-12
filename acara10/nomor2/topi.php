<?php
require_once 'ItemsProduct.php';

class Topi extends ItemProduk {
    private $model;

    public function __construct($ukuran, $warna, $nama, $model) {
        parent::__construct($ukuran, $warna, $nama);
        $this->model = $model;
    }

    public function model() {
        return $this->model;
    }
}
?>
