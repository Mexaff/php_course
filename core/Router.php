<?php

namespace Core;


class Router
{
    private $httpHost;
    private $requestUri;
    private $routes = [];

    public function __construct()
    {
        $this->setRoutes();
        $this->setServerParams();
    }

    public function setRoutes()
    {
       $this->routes = include APP_ABSOLUTE_PATH . DIRECTORY_SEPARATOR . 'Config' . DIRECTORY_SEPARATOR . 'Route.php';
    }

//    public function run()
//    {
//        var_export($this->requestUri);
//    }

    public function run()
    {
        if (array_key_exists($this->requestUri, $this->routes)) {
            $parser = new ControllerNameParser;
            $checkController = $parser->parse($this->routes[$this->requestUri]);
            if ($checkController) {

                $controller = $parser->getController();
                $contrObj = new $controller();
                $reflectionController = new \ReflectionClass($parser->getController());
                $method = $reflectionController->getMethod($parser->getActionName());
                $method->invokeArgs($contrObj, $this->requestParams);
            } else {
                throw new \Exception($parser->getErrorMessage());
            }

        } else {
            throw new \Exception('Controller ' . $this->requestUri . ' absent');
        }
    }


    private function setServerParams()
    {
        $this->httpHost = $_SERVER['HTTP_HOST'];
        $this->requestUri = $_SERVER['REQUEST_URI'];
    }
}