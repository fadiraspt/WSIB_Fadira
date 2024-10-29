<?php
include 'koneksi.php';

$id = $_GET['id'];
$sql = "DELETE FROM diri WHERE id='$id'";

if(mysqli_query($conn, $sql)) {
    echo "<script type='text/javascript'> alert('Data Berhasil Dihapus!');
    location.replace('index.php');
    </script>";
} else {
    echo "<script type='text/javascript'> alert('Data Gagal Dihapus!');
    location.replace('index.php');
    </script>";
}

mysqli_close($conn);
?>