<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$tgl = $_POST['tgl'];
$email = $_POST['email'];
$tlpn = $_POST['tlpn'];
$alamat = $_POST['alamat'];
$kelamin = $_POST['kelamin'];

$sql = "UPDATE diri SET nama='$nama', lahir='$tgl', email='$email', telpon='$tlpn', alamat='$alamat', kelamin='$kelamin' WHERE id='$id'";

if(mysqli_query($conn, $sql)) {
    echo "<script type='text/javascript'> alert('Data Berhasil Diperbarui!');
    location.replace('index.php');
    </script>";
} else {
    echo "<script type='text/javascript'> alert('Data Gagal Diperbarui!');
    location.replace('index.php');
    </script>";
}
mysqli_close($conn);
?>