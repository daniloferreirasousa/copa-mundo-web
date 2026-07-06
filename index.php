<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Carregamento manual dos arquivos estruturais do Core
require_once "core/Router.php";
require_once "core/Database.php";

$router = new Router();
$router->run();