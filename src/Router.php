<?php

namespace Guirod\SimpleMvc;

class Router
{
    protected $routes = [];

    public function addRoute($route, $controller, $action)
    {
        $this->routes[$route] = ['controller' => $controller, 'action' => $action];
    }

    public function dispatch($uri)
    {
        $requestParams = null;
        $params = explode('?',$uri);
        $uri = $params[0];
        //Extract query params
        if (count($params) > 1) {
            $requestParams = [];
            parse_str($params[1], $requestParams);
        }

        if (array_key_exists($uri, $this->routes)) {
            $controller = $this->routes[$uri]['controller'];
            $action = $this->routes[$uri]['action'];

            $controller = new $controller();
            $controller->$action($requestParams);
        } else {
            throw new \Exception("No route found for URI: $uri");
        }
    }
}