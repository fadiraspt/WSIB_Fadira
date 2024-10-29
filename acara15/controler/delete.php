<?php
require '../Config/database.php';

$id = $_GET['id'];

$db = new database();
$koneksi = $db->getConnection();

$query = "DELETE FROM user_detail WHERE id = '$id'";
$statement = $koneksi->prepare($query);
$statement->execute();

header('Location: ../Views/home.php');