<?php
class Selecao {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }


    public function getAll() 
    {
        $sql = "SELECT * FROM Selecao ORDER BY grupo, pais ASC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}