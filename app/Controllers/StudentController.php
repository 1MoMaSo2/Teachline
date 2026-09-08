<?php
namespace App\Controllers;
use App\Core\View;
use App\Models\Student;
class StudentController
{
    public function __construct(private Student $student , private View $view)
    {
    }

    public function index():void
    {
        $students = $this->student->fineAll();
        $this->view->render('students/index' ,
            [
            'title' => 'Students',
            'students' => $students
            ]
        );
    }
}