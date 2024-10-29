<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydts";

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Mengecek koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>