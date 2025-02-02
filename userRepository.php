<?php
class UserRepository {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Funksioni për të marrë të gjithë përdoruesit
    public function getAllUsers() {
        $query = "SELECT * FROM user";  // Emri i tabelës duhet të jetë i saktë

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        // Verifikoni nëse ka përdorues dhe kthejeni si array
        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);  // Kthen një array asociativ
        }

        return [];  // Kthejeni një array bosh nëse nuk ka përdorues
    }
}
?>
