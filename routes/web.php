<?php
use App\Core\Router;
use App\Controllers\StudentController;
use App\Controllers\TeacherController;
use App\Controllers\CourseController;

return function (Router $router , StudentController $studentController , TeacherController $teacherController , CourseController $courseController):void {
    $router->get('/students' , [$studentController , 'index']);
    $router->get('/teachers' , [$teacherController , 'index']);
    $router->get('/course-detail' , [$courseController , 'detail']);
    $router->get('/course-search' , [$courseController , 'search']);
    $router->get('/course-category/{education}/{type}' , [$courseController , 'category']);
};