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
    private function addRoute(string $method , string $path , callable $action): void
    {
        $this->routes[$method][$path] = $action;
    }

    public function dispatch(string $method , string $path): mixed
    {
        if (!isset($this->routes[$method][$path])) {
            throw new InvalidArgumentException('Route not found.');
        }
        return ($this->routes[$method][$path])();
    }
}