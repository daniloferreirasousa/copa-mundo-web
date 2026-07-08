<?php
require_once "models/Jogador.php";

class JogadorController {
    public function index() 
    {
        $model = new Jogador();
        $jogadores = $model->getRelatorioCompleto();

        require_once "views/template/header.php";
        require_once "views/jogador_list.php";
        require_once "views/template/footer.php";
    }

    public function ativos() 
    {
        $model = new Jogador();
        $jogadores = $model->getRelatorioAtivos(); 

        require_once "views/template/header.php";
        require_once "views/relatorio_jogador.php";
        require_once "views/template/footer.php";
    }
}