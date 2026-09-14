<?php
use App\Core\Database;
use App\Core\Router;
use App\Core\View;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Course;
use App\Models\Home;
use App\Models\EducationBasic;
use App\Models\FieldStudy;
use App\Controllers\StudentController;
use App\Controllers\TeacherController;
use App\Controllers\CourseController;
use App\Controllers\TeacherCourseController;
use App\Controllers\HomeController;
use App\Controllers\AuthController;
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
$course = new Course($connection);
$home = new Home($connection);
$educationBasic = new EducationBasic($connection);
$fieldStudy = new FieldStudy($connection);
$view = new View();
$mailService = new MailService();
$studentController = new StudentController($student , $view);
$teacherController = new TeacherController($teacher , $view);
$courseController = new CourseController($course , $view);
$teacherCourseController = new TeacherCourseController($course , $view);
$homeController = new HomeController($home , $view);
$authController = new AuthController($student , $teacher , $view , $mailService , $educationBasic , $fieldStudy);

$router = new Router();
$routes = require __DIR__ . '/routes/web.php';
$routes($router , $studentController , $teacherController , $courseController , $homeController , $authController , $teacherCourseController);
return $router;