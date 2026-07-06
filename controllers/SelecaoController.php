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

    public function create()
    {
        require_once "views/template/header.php";
        require_once "views/selecao_form.php";
        require_once "views/template/footer.php";
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $model = new Selecao();

            $model->insert(
                $_POST['pais'],
                $_POST['tecnico'],
                $_POST['grupo'],
                $_POST['titulos']
            );

            header("Location: ?url=selecao/index");
        }
    }


    public function edit($id)
    {
        $model = new Selecao();
        $selecao = $model->getById($id);

        print_r($selecao);
        exit;

        require_once "views/template/header.php";
        require_once "views/selecao_form.php";
        require_once "views/template/footer.php";
    }

    public function update($id) 
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $model = new Selecao();

            $model->update(
                $id,
                $_POST['pais'],
                $_POST['tecnico'],
                $_POST['grupo'],
                $_POST['titulos']
            );

            header("Location: ?url=selecao/index");
        }
    }

    public function delete($id)
    {
        $model = new Selecao();
        $model->delete($id);

        header("Location: ?url=selecao/index");
    }
}