<?php
namespace App\Core;
class View
{
    public function render(string $view , array $data = [] , string $layout = 'main'): void {
        extract($data , EXTR_SKIP);
        ob_start();
        require __DIR__ . '/../Views/' . $view . '.php';
        $content = ob_get_clean();
        require __DIR__ . '/../Views/layouts/' . $layout . '.php';
    }
}