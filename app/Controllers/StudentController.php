<?php
namespace App\Controllers;
use App\Models\Student;
class StudentController
{
    public function __construct(private Student $student)
    {
    }

    public function index():void
    {
        $students = $this->student->fineAll();
        require __DIR__ . '/../Views/Students/index.php';
    }
}