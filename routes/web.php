<?php
use App\Core\Router;
use App\Controllers\StudentController;

return function (Router $router , StudentController $studentController):void {
    $router->get('/students', [$studentController ,'index']);
};