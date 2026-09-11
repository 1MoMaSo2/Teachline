<?php
use App\Core\Database;
use App\Core\Router;
use App\Core\View;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Course;
use App\Models\Home;
use App\Controllers\StudentController;
use App\Controllers\TeacherController;
use App\Controllers\CourseController;
use App\Controllers\HomeController;
use App\Controllers\AuthController;

require_once __DIR__ . '/vendor/autoload.php';

$database = new Database();
$connection = $database->getConnection();
$student = new Student($connection);
$teacher = new Teacher($connection);
$course = new Course($connection);
$home = new Home($connection);
$view = new View();
$studentController = new StudentController($student , $view);
$teacherController = new TeacherController($teacher , $view);
$courseController = new CourseController($course , $view);
$homeController = new HomeController($home , $view);
$authController = new AuthController($student , $view);

$router = new Router();
$routes = require __DIR__ . '/routes/web.php';
$routes($router , $studentController , $teacherController , $courseController , $homeController , $authController);
return $router;