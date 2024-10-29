<?php

require '../Config/database.php';

session_start();

$db = new database();
$koneksi = $db->getConnection();
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty(trim($email)) && !empty(trim($password))) {
        $query = "SELECT * FROM user_detail WHERE user_email = ?";
        $statement = $koneksi->prepare($query);
        $statement->bindParam(1, $email);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            $id = $result['id'];
            $email_user = $result['user_email'];
            $password_user = $result['user_password'];
            $username = $result['user_fullname'];
            $level = $result['level'];
            if ($email_user == $email && $password_user == $password) {
                $_SESSION['id'] = $id;
                $_SESSION['username'] = $username;
                $_SESSION['user_email'] = $email_user;
                $_SESSION['level'] = $level;

                header('Location: ../Views/home.php');
                exit();
            } else {
                echo "<script>alert('Kata sandi atau password salah');
                document.location.href = '../Views/login.php';</script>";
                exit();
            }
        } else {
            echo "<script>alert('email tidak ditemukan')
                  document.location.href = '../Views/login.php';</script>";
            exit();
        }
    } else {
        echo 'Data Tidak Boleh Kosong';
    }
}
?>