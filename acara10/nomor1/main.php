<?php

require_once 'MobilBMW.php';
require_once 'MobilBmwBeraksi.php';

$bmw = new MobilBMW;
$aksi = new MobilBMWberaksi();

$aksi->nontonTV($bmw);
$aksi->hidupkanMobil($bmw);
$aksi->ubahGigi($bmw);
$aksi->matikanMobil($bmw);