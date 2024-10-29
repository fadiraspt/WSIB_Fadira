<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $tgl = $_POST['tgl'];
    $email = $_POST['email'];
    $tlpn = $_POST['tlpn'];
    $alamat = $_POST['alamat'];
    $kelamin = $_POST['kelamin'];
    
    $sql = "INSERT INTO diri (nama, lahir, email, telpon, alamat, kelamin)
            VALUES ('$nama', '$tgl', '$email', '$tlpn', '$alamat', '$kelamin')";
    
    if(mysqli_query($conn, $sql)) {
        echo "<script type='text/javascript'> alert('Data Berhasil Dimasukkan!');
        location.replace('index.php');
        </script>";
    } else {
        echo "<script type='text/javascript'> alert('Data Gagal Dimasukkan!');
        location.replace('index.php');
        </script>";
    }
    mysqli_close($conn);
}

?>