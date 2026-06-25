<?php

class Router {

    private string $controller;
    private string $method;
    private array $params;

    public function __construct()
    {
        $this->processURLData($_SERVER['REQUEST_URI']);
        $this->runRouter();
    }

    private function processURLData(string $url): void
    {

        $urlBase = "/nevesFramework/public/";
        $url = str_replace($urlBase, "", $url);
        $arrayURL = explode("/", $url);

        $this->controller = !empty($arrayURL[0]) ? $arrayURL[0] : $_ENV['CONTROLLER_DEFAULT'];
        $this->method = !empty($arrayURL[1]) ? $arrayURL[1] : $_ENV['METHOD_DEFAULT'];
        $this->params = array_slice($arrayURL, 2);

    }

    private function runRouter(): void
    {

        $controllerClass = ucfirst($this->controller) . 'Controller';
        $dirController = $_ENV['NAMESPACE_CONTROLLER'] . $controllerClass;

        if (!class_exists($dirController)) die("Controller não encontrado");

        $controller = new $dirController();

        if (!method_exists($controller, $this->method)) die("Método não encontrado");

        call_user_func_array(
            [$controller, $this->method],
            $this->params
        );
    }

}