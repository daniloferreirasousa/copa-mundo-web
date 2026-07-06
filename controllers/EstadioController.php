<?php
require_once "models/Estadio.php";

class EstadioController {
    public function index()
    {
        $model = new Estadio();
        $estadios = $model->getAll();

        require_once "views/template/header.php";
        require_once "views/estadio_list.php";
        require_once "views/template/footer.php";
    }
}