<?php
namespace App\Core;
use InvalidArgumentException;
class Router
{
    private array $routes = [];
    public function get(string $path, callable $action): void
    {
        $this->addRoute('GET', $path, $action);
    }
    public function post(string $path, callable $action): void
    {
        $this->addRoute('POST', $path, $action);
    }
    private function addRoute(string $method , string $path , callable $action): void
    {
        $this->routes[$method][$path] = $action;
    }

    public function dispatch(string $method , string $path): mixed
    {
        foreach ($this->routes[$method] ?? [] as $route => $action) {

            $pattern = preg_replace('#\{[^/]+\}#' , '([^/]+)' , $route);

            if (preg_match('#^' . $pattern . '$#', $path, $matches)) {
                array_shift($matches);
                $matches = array_map('urldecode', $matches);
                return $action(...$matches);
            }
        }

        throw new InvalidArgumentException('Route not found.');
    }
}