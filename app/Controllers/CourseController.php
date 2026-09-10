<?php
namespace App\Controllers;
use App\Core\View;
use App\Models\Course;

require_once __DIR__ . '/../../script/jdf/jdf.php';
class CourseController
{
    public function __construct(private Course $course , private View $view){}
    public function detail():void
    {
        $courseName = $_GET['course'] ?? '';
        if($courseName == ''){
            throw new \InvalidArgumentException("Course name is required.");
        }

        $course = $this->course->findByName($courseName);
        if($course == null){
            throw new \InvalidArgumentException("Course not found.");
        }

        $meetings = $this->course->findMeetingsByCourseName($courseName);
        $tags = array_filter(array_map('trim' , explode(',' , $course['training_courses_tag_mast'] ?? '')));
        $this->view->render("courses/detail" , [
            'title' => $courseName,
            'course' => $course,
            'meetings' => $meetings,
            'tags' => $tags
        ]);
    }
    public function search():void
    {
        $search = trim($_GET['course'] ?? '');
        $courses = $this->course->searchByName($search);
        $this->view->render("courses/search" , [
            'title' => 'جستجوی دوره ها',
            'search' => $search,
            'courses' => $courses
        ]);
    }
}