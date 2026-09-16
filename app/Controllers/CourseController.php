<?php
namespace App\Controllers;
use App\Core\View;
use App\Models\Course;

require_once __DIR__ . '/../../script/jdf/jdf.php';
class CourseController
{
    public function __construct(private Course $course , private View $view){}
    public function detail(): void
    {
        $courseId = filter_input(INPUT_GET , 'id' , FILTER_VALIDATE_INT);

        if (!$courseId || $courseId <= 0) {
            throw new \InvalidArgumentException("Course ID is required.");
        }

        $course = $this->course->findById($courseId);

        if ($course === null) {
            throw new \InvalidArgumentException("Course not found.");
        }

        $meetings = $this->course->findMeetingsByCourseId($courseId);

        $tags = array_filter(
            array_map(
                'trim',
                explode(',', $course['training_courses_tag_mast'] ?? '')
            )
        );

        $this->view->render("courses/detail", [
            'title' => $course['training_courses_name_mast'],
            'course' => $course,
            'meetings' => $meetings,
            'tags' => $tags
        ]);
    }
    public function search():void
    {
        $search = trim($_GET['course'] ?? '');
        if ($search === '') {
            $courses = [];
        } else {
            $courses = $this->course->searchByName($search);
        }

        $this->view->render("courses/search", [
            'title' => 'جستجوی دوره ها',
            'search' => $search,
            'courses' => $courses
        ]);
    }
    public function category(string $education , string $type):void
    {
        $allowedEducations = ['دهم' , 'یازدهم' , 'دوازدهم'];
        $allowedTypes = ['عمومی' , 'تخصصی'];

        if(!in_array($education , $allowedEducations ,true)){
            throw new \InvalidArgumentException("Invalid education.");
        }
        if(!in_array($type , $allowedTypes ,true)){
            throw new \InvalidArgumentException("Invalid course type.");
        }

        $courses = $this->course->findByEducationAndType($education , $type);
        $this->view->render('courses/category' , [
            'title' => " دروس {$type} پایه {$education}",
            'education' => $education,
            'type' => $type,
            'courses' => $courses
        ]);
    }
}