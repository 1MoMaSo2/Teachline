<?php
use App\Core\Router;
use App\Controllers\CourseController;
use App\Controllers\HomeController;
use App\Controllers\AuthController;
use App\Controllers\TeacherCourseController;
use App\Controllers\TeacherCourseMeetingController;

return function (Router $router , CourseController $courseController , HomeController $homeController , AuthController $authController , TeacherCourseController $teacherCourseController , TeacherCourseMeetingController $teacherCourseMeetingController):void {
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

    $router->get('/teacher/courses' , [$teacherCourseController , 'index'] , 'teacher_auth');
    $router->get('/teacher/create-course' , [$teacherCourseController , 'create'] , 'teacher_auth');
    $router->post('/teacher/create-course' , [$teacherCourseController , 'store'] , 'teacher_auth');
    $router->get('/teacher' , [$teacherCourseController , 'dashboard'] , 'teacher_auth');
    $router->get('/teacher/edit-course' , [$teacherCourseController , 'edit'] , 'teacher_auth');
    $router->post('/teacher/edit-course' , [$teacherCourseController , 'update'] , 'teacher_auth');
    $router->get('/teacher/delete-course' , [$teacherCourseController , 'delete'] , 'teacher_auth');
    $router->get('/teacher/course-meetings' , [$teacherCourseMeetingController , 'index'] , 'teacher_auth');
    $router->post('/teacher/course-meetings' , [$teacherCourseMeetingController , 'store'] , 'teacher_auth');
    $router->get('/teacher/course-meetings/delete' , [$teacherCourseMeetingController , 'delete'] , 'teacher_auth');
};