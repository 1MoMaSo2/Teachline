<?php
namespace App\Controllers;
use App\Core\View;
use App\Models\Teacher;
class TeacherController
{
    public function __construct(private Teacher $teacher , private View $view){}

    public function index():void
    {
        $teachers = $this->teacher->findAll();
        $this->view->render('teachers/index' ,
            [
                'title' => 'teachers',
                'teachers' => $teachers
            ]
        );
    }
}