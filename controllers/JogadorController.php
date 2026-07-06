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
}