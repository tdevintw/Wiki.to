<?php

namespace Core;
class Router
{
    private string $controller = 'App\Controller\HomeController';
    private string $method = 'index';
    private array $params = array();
    public function __construct()
    {
        $this->Sender();
    }

    public function Sender():void
    {
        $uri= $_SERVER['REQUEST_URI'] ?? '';
        $uri = explode('/', trim(strtolower($uri), '/'));


        unset($uri[0]);
        // page
        if (!empty($uri[1])) {
            $controller = ucwords($uri[1] ) . 'Controller';
            unset($uri[1]);
            $controller = "App\Controller\\" . $controller;
            if (class_exists($controller)) {
                $this->controller = $controller;

            } else {
                include 'App/view/404.php';
                exit;
            }
        }

        $objetController = new $this -> controller;

        if (isset($uri[2])) {

            $method = $uri[2];
            unset($uri[2]);

            if (method_exists($objetController, $method)) {
                $this->method = $method;
            } else {
                include 'App/view/404.php';
                exit;
            }
        }

        if (isset($uri[3])) {
            $this->params = array_values($uri);
        }

        call_user_func_array([$objetController, $this->method], $this->params);
    }
}
new Router();