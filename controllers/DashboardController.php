<?php

class DashboardController {
    public function index() 
    {
        require_once "views/template/header.php";
        require_once "views/dashboard.php";
        require_once "views/template/footer.php";
    }
}