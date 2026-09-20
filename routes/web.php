<?php
use App\Core\Router;
use App\Controllers\CourseController;
use App\Controllers\HomeController;
use App\Controllers\AuthController;
use App\Controllers\TeacherCourseController;
use App\Controllers\TeacherCourseMeetingController;
use App\Controllers\Admin\AdminAuthController;
use App\Controllers\Admin\AdminDashboardController;
use App\Controllers\Admin\AdminCourseController;
use App\Controllers\Admin\AdminEducationBasicController;
use App\Controllers\Admin\AdminFieldStudyController;
use App\Controllers\Admin\AdminTypeBookController;
use App\Controllers\Admin\AdminTeacherController;

return function (Router $router , CourseController $courseController , HomeController $homeController , AuthController $authController , TeacherCourseController $teacherCourseController , TeacherCourseMeetingController $teacherCourseMeetingController , AdminAuthController $adminAuthController , AdminDashboardController $adminDashboardController , AdminCourseController $adminCourseController , AdminEducationBasicController $adminEducationBasicController , AdminFieldStudyController $adminFieldStudyController , AdminTypeBookController $adminTypeBookController , AdminTeacherController $adminTeacherController):void {
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
    $router->get('/admin/login' , [$adminAuthController , 'login']);
    $router->post('/admin/login' , [$adminAuthController , 'login']);
    $router->get('/admin/logout' , [$adminAuthController , 'logout']);

    $router->get('/admin' , [$adminDashboardController , 'index'] , 'admin_auth');
    $router->get('/admin/courses' , [$adminCourseController , 'index'] , 'admin_auth');
    $router->get('/admin/courses/pending' , [$adminCourseController , 'pending'] , 'admin_auth');
    $router->post('/admin/courses/approve' , [$adminCourseController , 'approve'] , 'admin_auth');
    $router->post('/admin/courses/reject' , [$adminCourseController , 'reject'] , 'admin_auth');
    $router->get('/admin/education-basic' , [$adminEducationBasicController , 'index'] , 'admin_auth');
    $router->post('/admin/education-basic/store' , [$adminEducationBasicController , 'store'] , 'admin_auth');
    $router->post('/admin/education-basic/delete' , [$adminEducationBasicController , 'delete'] , 'admin_auth');
    $router->get('/admin/field-study' , [$adminFieldStudyController , 'index'] , 'admin_auth');
    $router->post('/admin/field-study/store' , [$adminFieldStudyController , 'store'] , 'admin_auth');
    $router->post('/admin/field-study/delete' , [$adminFieldStudyController , 'delete'] , 'admin_auth');
    $router->get('/admin/type-book' , [$adminTypeBookController , 'index'] , 'admin_auth');
    $router->post('/admin/type-book/store' , [$adminTypeBookController , 'store'] , 'admin_auth');
    $router->post('/admin/type-book/delete' , [$adminTypeBookController , 'delete'] , 'admin_auth');
    $router->get('/admin/teachers/pending' , [$adminTeacherController , 'pending'] , 'admin_auth');
    $router->post('/admin/teachers/approve' , [$adminTeacherController , 'approve'] , 'admin_auth');
    $router->post('/admin/teachers/delete' , [$adminTeacherController , 'delete'] , 'admin_auth');

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