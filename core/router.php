<?php
namespace Core;
class Router
{
    private string $controller = 'App\Controller\HomeController';
    //we give $controller by default the controller of the home so if the $controller variable doesnt change the website will render the home page, or if we enter an empty url
    
    private string $method = 'index';
    private array $params = array();
    public function __construct()
    {
        $this->Sender();
    }

    public function Sender():void
    {

        $uri= $_SERVER['REQUEST_URI'] ?? '';
        //we use the ?? so  it s like saying if the user doesnt enter and uri or uri is not set then assign uri to be empty
        $uri = explode('/', trim(strtolower($uri), '/'));
        //here we strtolower so we make all the uri low letters and trim to delete teh first and last / , and explode to slice the uri into sections (assoc_array)
        // page
        if (!empty($uri[0])) {

            $controller = ucwords($uri[0] ) . 'Controller';
            //since our controller respect a straight syntax then we need to make the frist letter of the frist indexed maj letter so it turn the right controller
            unset($uri[0]);
            $controller = "App\Controller\\" . $controller;
            //we concatenate the var with the namespace so we specify that we want the controller that is located at this namespace
            if (class_exists($controller)) {
                $this->controller = $controller;

            } else {
                include '../App/view/404.php';
                exit;
                //when teh router will concatenate the controller , it will search if teh coontroller exist if it doesnt it will return not found page
            }
        }

        $objetController = new $this->controller;
        //if the router finds the controller we will create an instance so the method of rendring will respond which will result : obtining teh page we want 
        if (isset($uri[1])) {
            //router check which function will applly if there is no mentioned function by default the method is the index method which is used to render the image
            $method = $uri[1];
            unset($uri[1]);

            if (method_exists($objetController, $method)) {
                $this->method = $method;
            } else {
                include '../App/view/404.php';
                exit;
            }
        }

        if (isset($uri[2])) {
            //check if there is params , if yes , stock them into the array , the params  can be a get vars or post , ....etc
            $this->params = array_values($uri);
        }

        call_user_func_array([$objetController, $this->method], $this->params);
    }
}
new Router();