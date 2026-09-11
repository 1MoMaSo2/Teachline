<?php
namespace App\Controllers;
use App\Core\View;
use App\Models\Student;
class AuthController
{
    public function __construct(private Student $student , private View $view) {}

    public function login():void
    {
        $this->view->render('auth/login' , [
            'title' => "ورود"
        ]);
    }
}