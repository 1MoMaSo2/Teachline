<?php
use App\Core\Router;
use App\Controllers\StudentController;
use App\Controllers\TeacherController;

return function (Router $router , StudentController $studentController , TeacherController $teacherController):void {
    $router->get('/students', [$studentController ,'index']);
    $router->get('/teachers', [$teacherController ,'index']);
};