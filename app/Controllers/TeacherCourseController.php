<?php
namespace App\Controllers;
use App\Core\View;
use App\Models\Course;
class TeacherCourseController
{
    public function __construct(private Course $course , private View $view) {}

    public function index(): void
    {
        $teacherId = $_SESSION['teacher_id'] ?? null;

        if (!$teacherId) {
            throw new \RuntimeException('Teacher ID not found.');
        }

        $courses = $this->course->findByTeacherId((int) $teacherId);
        $this->view->render('teachers/courses', [
            'title' => 'دوره‌های من',
            'courses' => $courses
        ]);
    }
}