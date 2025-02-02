<?php
class Database {
    private $host = 'localhost';
    private $dbname = 'loxo-mobishop';
    private $username = 'root'; 
    private $password = ''; 
    private $conn;

    public function __construct() {
        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, 
            $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function getConnection() {
        return $this->conn;
    }
    
    public function query($sql) {
        return $this->conn->query($sql);
    }

    public function getProducts() {
        $query = "SELECT * FROM products";
        $stmt = $this->query($query); // Ekzekuto query-n
        $products = [];
        
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // Krijo një array për çdo produkt dhe shto në listë
            $products[] = $row;
        }
        
        return $products; // Kthe array-n
    }
    }

?>