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

        if(array_key_exists($this->requestUri, $this->routes)) {

            $temp = explode('@', $this->routes[$this->requestUri]);
            $tempPath = $temp[0];
            $tempAction = $temp[1];

            $actionName = 'action' . ucwords($tempAction);
            $Path = str_replace('/', '\\', $tempPath);

            $controllerPath =  'App\\Controllers\\' . $Path . 'Controller';

            $object = new $controllerPath;
            $object->$actionName();
        }
        else {
            $controllerPath =  'App\\Controllers\\ErrorController';
            $object = new $controllerPath;
            $object->indexError();
        }
    }
}