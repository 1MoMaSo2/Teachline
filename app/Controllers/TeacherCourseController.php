<?php
namespace App\Controllers;
use App\Core\View;
use App\Models\Course;
use App\Models\EducationBasic;
use App\Models\FieldStudy;
use App\Models\TypeBook;

class TeacherCourseController
{
    public function __construct(private Course $course , private EducationBasic $educationBasic , private FieldStudy $fieldStudy, private TypeBook $typeBook , private View $view) {}

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
        ] , 'teacher');
    }

    public function create(): void
    {
        $educationBasics = $this->educationBasic->all();
        $fieldStudies = $this->fieldStudy->all();
        $typeBooks = $this->typeBook->all();

        $this->view->render('teachers/create-course', [
            'title' => 'ایجاد دوره',
            'educationBasics' => $educationBasics,
            'fieldStudies' => $fieldStudies,
            'typeBooks' => $typeBooks
        ], 'teacher');
    }
}