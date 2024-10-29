<?php
global $koneksi;
include 'koneksi.php';

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$limit = 10 * 1024 * 1024;
$ekstensi = array('png', 'jpg', 'jpeg', 'gif');
$jumlahFile = count($_FILES['foto']['name']);

if (!is_dir('file')) {
    mkdir('file', 0755, true);
}

for ($x = 0; $x < $jumlahFile; $x++) {
    $namafile = $_FILES['foto']['name'][$x];
    $tmp = $_FILES['foto']['tmp_name'][$x];
    $tipe_file = pathinfo($namafile, PATHINFO_EXTENSION);
    $ukuran = $_FILES['foto']['size'][$x];

    if ($ukuran > $limit) {
        header("location:index.php?alert=gagal_ukuran");
        exit();
    } else {
        if (!in_array($tipe_file, $ekstensi)) {
            header("location:index.php?alert=gagal_ektensi");
            exit();
        } else {
            $filename = date('d-m-Y') . '-' . $namafile;
            move_uploaded_file($tmp, 'file/' . $filename);
            $filename_escaped = mysqli_real_escape_string($koneksi, $filename);
            mysqli_query($koneksi, "INSERT INTO gambar VALUES (NULL, '$filename_escaped')");
        }
    }
}
header("location:index.php?alert=simpan");
exit();