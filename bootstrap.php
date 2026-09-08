<?php
use App\Core\Database;
use App\Core\Router;
use App\Core\View;
use App\Models\Student;
use App\Controllers\StudentController;

require_once __DIR__ . '/vendor/autoload.php';

$database = new Database();
$connection = $database->getConnection();
$student = new Student($connection);
$view = new View();
$studentController = new StudentController($student , $view);

$router = new Router();
$routes = require __DIR__ . '/routes/web.php';
$routes($router , $studentController);
return $router;