<?php
class database{
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $db = 'user';
    public $connect;

    public function getConnection()
    {
        $this->connect = null;
        try {
            $this->connect = new PDO("mysql:host=".$this->host.";dbname=". $this->db, $this->username, $this->password);
        } catch (PDOException $e) {
            echo "Koneksi gagal" . $e->getMessage();
        }
        return $this->connect;
    }
}
?>