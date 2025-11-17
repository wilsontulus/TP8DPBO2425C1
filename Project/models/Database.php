<?php
class Database {
    // PHP Data Objects configuration
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "tp8_mvc25";
    public $db;

    public function __construct() {
        try {
            $this->db = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    // Simple but secure way of executing SQL queries using prepared statements
    public function executeQuery($query, $params = []) {
        try {
            $stmt = $this->db->prepare($query);
            $stmt->execute($params);
            return $stmt;
        } catch (PDOException $e) {
            die("Error executing database query due to: " . $e->getMessage());
        }
    }
}
?>
