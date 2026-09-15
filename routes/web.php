<?php
use App\Core\Router;
use App\Controllers\CourseController;
use App\Controllers\HomeController;
use App\Controllers\AuthController;
use App\Controllers\TeacherCourseController;

return function (Router $router , CourseController $courseController , HomeController $homeController , AuthController $authController , TeacherCourseController $teacherCourseController):void {
    $router->get('/course-detail' , [$courseController , 'detail']);
    $router->get('/course-search' , [$courseController , 'search']);
    $router->get('/course-category/{education}/{type}' , [$courseController , 'category']);
    $router->get('/' , [$homeController , 'index']);

    $router->get('/login' , [$authController , 'login']);
    $router->post('/login' , [$authController , 'login']);
    $router->get('/register' , [$authController , 'register']);
    $router->post('/register' , [$authController , 'register']);
    $router->get('/register/teacher' , [$authController , 'registerTeacher']);
    $router->post('/register/teacher' , [$authController , 'registerTeacher']);
    $router->get('/activate' , [$authController , 'activate']);
    $router->get('/logout' , [$authController , 'logout']);

    $router->get('/teacher/courses' , [$teacherCourseController , 'index'] , 'auth');
    $router->get('/teacher/create-course' , [$teacherCourseController , 'create']);
};