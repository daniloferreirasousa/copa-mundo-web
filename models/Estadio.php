<?php
class Estadio {
    private $db;

    public function __construct()
    {
        $this->db = (new Database())->connect();
    }

    public function getAll() 
    {
        $sql = "SELECT
            e.nome AS estadio,
            e.capacidade,
            l.cidade,
            l.estado_pais
            FROM Estadio e
            INNER JOIN Localidade l ON e.id_localidade = l.id_localidade";
        
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}