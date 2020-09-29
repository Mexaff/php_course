<?php


namespace Core;

class Router
{
    private $routes = [];
    private $requestUri;
    public function __construct()
    {
        $this->setRoutes();
    }

    public function setRoutes()
    {
        $this->routes = include APP_ABSOLUTE_PATH . '/Config/Route.php';
    }
    private function getUri()
    {
        if (empty( $_SERVER['REQUEST_URI'])) {
            return '/';
        } else {
            return $_SERVER['REQUEST_URI'];
        }
    }
    public function run()
    {
       $this->requestUri = $this->getUri();

       //echo $this->requestUri;
        foreach ($this->routes as $uriPattern => $path) {
           if(preg_match("~$uriPattern~", $this->requestUri)){

               $temp = explode('/', $path);
               $controllerName = array_shift($temp) . 'Controller';

               $actionName = 'action' . ucfirst(array_shift($temp));

               $controllerFile = APP_ABSOLUTE_PATH . DIRECTORY_SEPARATOR . 'Controllers' . DIRECTORY_SEPARATOR . $controllerName . '.php';

               include_once($controllerFile);

               $object = new $controllerName;
               $result = $object->$actionName();
               if ($result != null) {
                   break;
               }

           }
       }
    }


}