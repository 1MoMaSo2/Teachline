<?php
namespace App\Controllers;
use App\Core\View;
use App\Models\Student;
class AuthController
{
    public function __construct(private Student $student , private View $view) {}
}