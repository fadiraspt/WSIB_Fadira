<?php

class koneksiDb
{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "user";

    protected $koneksi;

    public function getConnection(): PDO
    {
        $this->koneksi = null;
        try {
            $this->koneksi = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db, $this->user, $this->pass);
            $this->koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        return $this->koneksi;
    }
}