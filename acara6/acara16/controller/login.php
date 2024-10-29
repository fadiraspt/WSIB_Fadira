<?php
require_once '../config/koneksiDb.php';

class login
{
    private $db;

    public function __construct()
    {
        $this->db = new koneksiDb();
    }

    public function login()
    {
        session_start();
        if (isset($_POST['login'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $koneksi = $this->db->getConnection();
            $query = "SELECT * FROM user_detail WHERE user_email = ?";
            $stm = $koneksi->prepare($query);
            $stm->bindParam(1, $email);
            $stm->execute();
            $result = $stm->fetch(PDO::FETCH_ASSOC);
            if ($result) {
                $userId = $result['id'];
                $userEmail = $result['user_email'];
                $userPassword = $result['user_password'];
                $userFullName = $result['user_fullname'];
                $userLevel = $result['level'];
                if ($email == $userEmail && $password == $userPassword) {

                    $_SESSION['id'] = $userId;
                    $_SESSION['username'] = $userFullName;
                    $_SESSION['user_email'] = $userEmail;
                    $_SESSION['level'] = $userLevel;

                    header('location: ../Views/home.php?user_fullname=' . urldecode($userFullName));
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

        }
    }
}

$login = new login();
$login->login();