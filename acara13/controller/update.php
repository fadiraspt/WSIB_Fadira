<?php

require_once("../Config/database.php");

$db = new database();
$koneksi = $db->getConnection();

if(isset($_POST["update"])){
    $id = $_POST["id"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $username = $_POST["username"];

    $query = "UPDATE user_detail SET user_password = ?, user_email = ?, user_fullname = ? WHERE id = ?";
    $statement = $koneksi->prepare($query);
    $statement->bindParam(1, $password);
    $statement->bindParam(2, $email);
    $statement->bindParam(3, $username);
    $statement->bindParam(4, $id);
    if ($statement->execute())
    {
    header("location: ../Views/home.php");
    }

}