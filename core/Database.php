<?php
class Database {
    private $host = '127.0.0.1';
    private $port = '3306';
    private $db = 'copa_mundo';
    private $user = 'root';
    private $pass = 'alunolab';
    private $pdo;


    public function connect() {
        try {
            $dsn = "mysql:host={$this->host};port={$this->port};dbname={$this->db};charset=utf8mb4";

            $this->pdo = new PDO($dsn, $this->user, $this->pass);

            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $this->pdo;
        } catch (PDOException $e) {
            die("<div class='alert alert-danger m-3'>Erro de Conexão: <b>{$e->getMessage()}</b></div>");
        }
    }
}