<?php
namespace App\Core;
use InvalidArgumentException;
class Router
{
    private array $routes = [];
    public function get(string $path , callable $action , string|callable|null $middleware = null): void
    {
        $this->addRoute('GET', $path , $action , $middleware);
    }

    public function post(string $path , callable $action , string|callable|null $middleware = null): void
    {
        $this->addRoute('POST', $path , $action , $middleware);
    }

    private function addRoute(string $method , string $path , callable $action , string|callable|null $middleware = null): void
    {
        $this->routes[$method][$path] = [
            'action' => $action ,
            'middleware' => $middleware
        ];
    }

    public function dispatch(string $method , string $path): mixed
    {
        foreach ($this->routes[$method] ?? [] as $route => $routeData) {

            $pattern = preg_replace('#\{[^/]+\}#' , '([^/]+)' , $route);

            if (preg_match('#^' . $pattern . '$#' , $path , $matches)) {
                array_shift($matches);
                $matches = array_map('urldecode' , $matches);

                $this->runMiddleware($routeData['middleware']);

                return ($routeData['action'])(...$matches);
            }
        }
        throw new InvalidArgumentException('Route not found.');
    }

    private function runMiddleware(string|callable|null $middleware): void
    {
        if($middleware === 'auth') {
            require_login();
            return;
        }

        if($middleware){
            $middleware();
        }
    }
}