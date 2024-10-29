<?php

require_once '../config/koneksiDb.php';

class crud extends koneksiDb

{
    public function __construct()
    {
        $this->koneksi = $this->getConnection();
    }

    public function lihatData()
    {
        $query = "SELECT * FROM user_detail";
        $stmt = $this->koneksi->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function tambahData($email, $password, $name)
    {
        try {
            $query = "INSERT INTO user_detail(user_email, user_password, user_fullname, level) VALUES(:email, :password, :fullname, 2)";
            $stmt = $this->koneksi->prepare($query);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":password", $password);
            $stmt->bindParam(":fullname", $name);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}