<?php
use App\Core\Database;
use App\Core\Router;
use App\Core\View;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Admin;
use App\Models\Course;
use App\Models\Home;
use App\Models\EducationBasic;
use App\Models\FieldStudy;
use App\Models\TypeBook;
use App\Models\CourseMeeting;
use App\Controllers\CourseController;
use App\Controllers\TeacherCourseController;
use App\Controllers\HomeController;
use App\Controllers\AuthController;
use App\Controllers\TeacherCourseMeetingController;
use App\Controllers\Admin\AdminAuthController;
use App\Controllers\Admin\AdminDashboardController;
use App\Controllers\Admin\AdminCourseController;
use App\Controllers\Admin\AdminEducationBasicController;
use App\Controllers\Admin\AdminFieldStudyController;
use App\Controllers\Admin\AdminTypeBookController;
use App\Controllers\Admin\AdminTeacherController;
use App\Services\MailService;

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/app/Helpers/url.php';
require_once __DIR__ . '/app/Helpers/flash.php';
require_once __DIR__ . '/app/Helpers/auth.php';

session_start();

$database = new Database();
$connection = $database->getConnection();
$student = new Student($connection);
$teacher = new Teacher($connection);
$admin = new Admin($connection);
$course = new Course($connection);
$courseMeeting = new CourseMeeting($connection);
$home = new Home($connection);
$educationBasic = new EducationBasic($connection);
$fieldStudy = new FieldStudy($connection);
$typeBook = new TypeBook($connection);

$view = new View();
$mailService = new MailService();
$courseController = new CourseController($course , $view);
$teacherCourseController = new TeacherCourseController($course , $courseMeeting , $educationBasic , $fieldStudy , $typeBook , $view);
$teacherCourseMettingController = new TeacherCourseMeetingController($course , $courseMeeting , $view);
$homeController = new HomeController($home , $view);
$authController = new AuthController($student , $teacher , $view , $mailService , $educationBasic , $fieldStudy);
$adminAuthController = new AdminAuthController($admin , $view);
$adminDashboardController = new AdminDashboardController($view , $course , $courseMeeting , $student , $teacher);
$adminCourseController = new AdminCourseController($view , $course , $courseMeeting);
$adminEducationBasicController = new AdminEducationBasicController($view , $educationBasic , $connection);
$adminFieldStudyController = new AdminFieldStudyController($view , $fieldStudy , $connection);
$adminTypeBookController = new AdminTypeBookController($view , $typeBook , $connection);
$adminTeacherController = new AdminTeacherController($view , $teacher);

$router = new Router();
$routes = require __DIR__ . '/routes/web.php';
$routes($router , $courseController , $homeController , $authController , $teacherCourseController , $teacherCourseMettingController , $adminAuthController , $adminDashboardController , $adminCourseController , $adminEducationBasicController , $adminFieldStudyController , $adminTypeBookController , $adminTeacherController);
return $router;