<?php
class Router {
    public function run() 
    {
        // Captura a URL amigável ou define uma rota padrão (dashboard)
        $url = isset($_GET['url']) ? $_GET['url'] : 'dashboard/index';
        $urlParts = explode('/', $url);


        // Define o nome do controlador baseado no primeiro parametro da URL
        $controllerName = ucfirst($urlParts[0]) . 'Controller';

        // Define o método baseado no segundo parâmetro da URL
        $methodName = ucfirst($urlParts[1]) ? $urlParts[1] : 'index';

        $controllerFile = "controllers/$controllerName.php";

        if (file_exists($controllerFile)) {
            require_once $controllerFile;
            $controller = new $controllerName();

            if (method_exists($controller, $methodName)) {
                $controller->$methodName();
            } else {
                die("Erro 404: Ação ou Método '$methodName' não existe no controlador.");
            }
        } else {
            die("Erro 404: O Controlador '$controllerName' não foi localizado no sistema.");
        }
    }
}