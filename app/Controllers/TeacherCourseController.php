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

    public function store(): void
    {
        $teacherId = $_SESSION['teacher_id'] ?? null;
        $teacherName = $_SESSION['full_name'] ?? null;

        if (!$teacherId || !$teacherName) {
            throw new \RuntimeException('Teacher information not found.');
        }

        $name = trim($_POST['name_course'] ?? '');
        $description = trim($_POST['description'] ?? '');
        $tag = trim($_POST['tag'] ?? '');
        $educationBasic = trim($_POST['education_basic'] ?? '');
        $fieldStudy = trim($_POST['field_study'] ?? '');
        $typeBook = trim($_POST['type_book'] ?? '');
        $nameBook = trim($_POST['name_book'] ?? '');
        $lesson = trim($_POST['lesson'] ?? '');

        if ($name === '' || $description === '' || $tag === '' || $educationBasic === '' || $fieldStudy === '' || $typeBook === '' || $nameBook === '' || $lesson === '') {
            throw new \InvalidArgumentException('لطفاً تمام فیلدها را تکمیل کنید.');
        }

        $now = time();

        $courseId = $this->course->create([
            'teacher_id_training_courses_mast' => (int) $teacherId,
            'training_courses_name_mast' => $name,
            'training_courses_teacher_mast' => $teacherName,
            'training_courses_description_mast' => $description,
            'training_courses_tag_mast' => $tag,
            'training_courses_education_basic_mast' => $educationBasic,
            'training_courses_field_study_mast' => $fieldStudy,
            'training_courses_type_book_mast' => $typeBook,
            'training_courses_name_book_mast' => $nameBook,
            'training_courses_lesson_mast' => $lesson,
            'training_courses_date_created_course_mast' => $now,
            'training_courses_date_update_course_mast' => $now,
        ]);

        if ($courseId <= 0) {
            throw new \RuntimeException('Course could not be created.');
        }

        header('Location: /teachline/public/teacher/courses');
        exit;
    }
}