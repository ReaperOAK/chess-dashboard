<?php
class Database {
    private $host = "localhost";
    private $db_name = "u703958259_dashboard2";
    private $username = "u703958259_dashboard";
    private $password = "Oa786ak92*";
    public $conn;
    

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name,
                $this->username,
                $this->password
            );
            $this->conn->exec("set names utf8");
        } catch(PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>