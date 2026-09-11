<?php
use App\Core\Router;
use App\Controllers\StudentController;
use App\Controllers\TeacherController;
use App\Controllers\CourseController;
use App\Controllers\HomeController;
use App\Controllers\AuthController;

return function (Router $router , StudentController $studentController , TeacherController $teacherController , CourseController $courseController , HomeController $homeController , AuthController $authController):void {
    $router->get('/students' , [$studentController , 'index']);
    $router->get('/teachers' , [$teacherController , 'index']);
    $router->get('/course-detail' , [$courseController , 'detail']);
    $router->get('/course-search' , [$courseController , 'search']);
    $router->get('/course-category/{education}/{type}' , [$courseController , 'category']);
    $router->get('/' , [$homeController , 'index']);
    $router->get('/login' , [$authController , 'login']);
    $router->post('/login' , [$authController , 'login']);
};