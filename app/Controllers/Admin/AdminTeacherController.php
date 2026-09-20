<?php
namespace App\Controllers\Admin;
use App\Core\View;
use App\Models\Teacher;
class AdminTeacherController
{
    public function __construct(private View $view , private Teacher $teacher) {}

    public function pending(): void
    {
        $teachers = $this->teacher->findPending();
        $this->view->render('admin/teachers/pending', [
            'teachers' => $teachers],
            'admin'
        );
    }
}