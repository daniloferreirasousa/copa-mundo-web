<?php
require_once 'models/Selecao.php';

class SelecaoController {
    public function index() 
    {
        $model = new Selecao();
        $selecoes = $model->getAll();

        require_once "views/template/header.php";
        require_once "views/selecao_list.php";
        require_once "views/template/footer.php";
    }
}