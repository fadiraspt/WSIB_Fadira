<?php
require_once 'Topi.php';
require_once 'Celana.php';
require_once 'Baju.php';

// Topi
$topi = new Topi("L", "Pink", "Topi Baseball", "Sporty");
echo "Topi:\n";
echo "Nama: " . $topi->nama() . "\n";
echo "Ukuran: " . $topi->ukuran() . "\n";
echo "Warna: " . $topi->warna() . "\n";
echo "Model: " . $topi->model() . "\n";

// Celana
$celana = new Celana("M", "Biru Donker", "Jeans", "Skinny", "Casual");
echo "\nCelana:\n";
echo "Nama: " . $celana->nama() . "\n";
echo "Ukuran: " . $celana->ukuran() . "\n";
echo "Warna: " . $celana->warna() . "\n";
echo "Tipe: " . $celana->tipe() . "\n";
echo "Model: " . $celana->model() . "\n";

// Baju
$baju = new Baju("S", "Hijau", "Kaos Oblong", "Lengan Pendek");
echo "\nBaju:\n";
echo "Nama: " . $baju->nama() . "\n";
echo "Ukuran: " . $baju->ukuran() . "\n";
echo "Warna: " . $baju->warna() . "\n";
echo "Tipe: " . $baju->tipe() . "\n";
?>
