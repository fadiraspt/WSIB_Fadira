<?php
require '../Config/database.php';

if (isset($_POST['register'])) {
    $userEmail = $_POST['email'];
    $userPassword = $_POST['password'];
    $username = $_POST['nama'];
    $userLevel = 2;

    $db = new database();
    $koneksi = $db->getConnection();

    $query = "INSERT INTO user_detail (user_email, user_password, user_fullname, level) VALUES (?, ?, ?, ?)";
    $statement = $koneksi->prepare($query);
    $statement->bindParam(1, $userEmail);
    $statement->bindParam(2, $userPassword);
    $statement->bindParam(3, $username);
    $statement->bindParam(4, $userLevel);

    if ($statement->execute()) {
        echo "<script>alert('Data Berhasil Disimpan');
        document.location.href = '../Views/login.php';</script>";
        exit();
    } else {
        echo "<script>alert('Data Gagal Disimpan');
        document.location.href = '../Views/register.php';</script>";
        exit();
    }

}