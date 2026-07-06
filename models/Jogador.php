<?php
class Jogador {
    private $db;

    public function __construct()
    {
        $this->db = (new Database())->connect();
    }

    public function getRelatorioCompleto() 
    {
        $sql = "SELECT
                j.id_jogador,
                j.nome AS nome_jogador,
                j.posicao,
                j.numero_camisa,
                s.pais AS pais_da_selecao,
                IFNULL(c.cor_cartao, '-') AS cartao_recebido,
                IFNULL(c.minuto_jogo, '-') AS minuto_jogo,
                IFNULL(GROUP_CONCAT(DISTINCT t.numero SEPARATOR ' / '), 'Não Cadastrado') AS telefones_contato
            FROM Jogador j
            INNER JOIN Selecao s ON j.id_selecao = s.id_selecao
            LEFT JOIN Jogador_Telefone t ON j.id_jogador = t.id_jogador
            LEFT JOIN Cartao c ON j.id_jogador = c.id_jogador
            GROUP BY j.id_jogador, c.id_cartao
            ORDER BY j.nome ASC";

        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}