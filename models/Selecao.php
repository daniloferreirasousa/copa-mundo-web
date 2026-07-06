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


    public function getById($id) 
    {
        $sql = "SELECT * FROM Selecao WHERE id_selecao = :id";

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":id", $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


    public function insert($pais, $tecnico, $grupo, $titulos)
    {
        $sql = "INSERT INTO Selecao (pais, tecnico, grupo, titulos_mundiais) 
            VALUES (:pais, :tecnico, :grupo, :titulos)";

        $stmt = $this->db->prepare($sql);
        
        $stmt->bindParam(":pais", $pais);
        $stmt->bindParam(":tecnico", $tecnico);
        $stmt->bindParam(":grupo", $grupo);
        $stmt->bindParam(":titulos", $titulos_mundiais);
        $stmt->execute();
    }

    public function update($id, $pais, $tecnico, $grupo, $titulos)
    {
        $sql = "UPDATE Selecao SET pais = :pais, tecnico = :tecnico, grupo = :grupo, titulos_mundiais = :titulos WHERE id_selecao = :id";

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":pais", $pais);
        $stmt->bindParam(":tecnico", $tecnico);
        $stmt->bindParam(":grupo", $grupo);
        $stmt->bindParam(":titulos", $titulos);
        $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM Selecao WHERE id_selecao = :id";
        
        $stmt = $this->db->prepare($sql);
        
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }
}