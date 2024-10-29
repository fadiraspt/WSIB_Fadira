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
        if (isset($_POST['login'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $koneksi = $this->db->getConnection();
            $query = "SELECT * FROM user_detail WHERE user_email = ?";
            $stm = $koneksi->prepare($query);
            $stm->bindParam(1, $email);
            if ($stm->execute()) {
                $result = $stm->fetch(PDO::FETCH_ASSOC);
                $userEmail = $result['user_email'];
                $userPassword = $result['user_password'];
                $userFullName = $result['user_fullname'];
                if ($email == $userEmail && $password == $userPassword) {
                    header('location: ../Views/home.php?user_fullname=' . urldecode($userFullName));
                }
            }

        }
    }
}

$login = new login();
$login->login();