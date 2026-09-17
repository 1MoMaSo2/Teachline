<?php
namespace App\Controllers\Admin;
use App\Core\View;
use App\Models\Course;
use App\Models\CourseMeeting;
use App\Models\Student;
use App\Models\Teacher;
class AdminDashboardController
{
    public function __construct(private View $view , private Course $course , private CourseMeeting $courseMeeting , private Student $student , private Teacher $teacher) {}

    public function index(): void
    {
        $stats = [
            'courses' => $this->course->count(),
            'videos' => $this->courseMeeting->count(),
            'students' => $this->student->count(),
            'teachers' => $this->teacher->count(),
        ];

        $this->view->render('admin/dashboard/index',
            ['stats' => $stats], 'admin'
        );
    }
}