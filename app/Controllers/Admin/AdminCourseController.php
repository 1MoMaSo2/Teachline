<?php
namespace App\Controllers\Admin;
use App\Core\View;
use App\Models\Course;
use App\Models\CourseMeeting;
class AdminCourseController
{
    public function __construct(private View $view , private Course $course , private CourseMeeting $courseMeeting) {}

    public function index(): void
    {
        $courses = $this->course->findAll();
        $this->view->render('admin/courses/index', [
            'courses' => $courses],
            'admin'
        );
    }

    public function pending(): void
    {
        $courses = $this->course->findPending();
        $this->view->render('admin/courses/pending', [
            'courses' => $courses],
            'admin'
        );
    }

    public function approve(): void
    {
        $courseId = filter_input(INPUT_POST , 'id' , FILTER_VALIDATE_INT);

        if (!$courseId) {
            http_response_code(400);
            echo 'شناسه دوره نامعتبر است.';
            return;
        }

        $approved = $this->course->approve($courseId);

        if (!$approved) {
            http_response_code(404);
            echo 'دوره مورد نظر پیدا نشد یا قبلاً تأیید شده است.';
            return;
        }

        header('Location: ' . base_url('/admin/courses/pending'));
        exit;
    }

    public function reject(): void
    {
        $courseId = filter_input(INPUT_POST , 'id' , FILTER_VALIDATE_INT);

        if (!$courseId) {
            http_response_code(400);
            echo 'شناسه دوره نامعتبر است.';
            return;
        }

        $course = $this->course->findById($courseId);

        if (!$course || (int) ($course['training_courses_status_mast'] ?? 1) !== 0) {
            http_response_code(404);
            echo 'دوره مورد نظر پیدا نشد یا در انتظار تأیید نیست.';
            return;
        }

        $meetings = $this->courseMeeting->findByCourseId($courseId);

        $uploadPath = __DIR__ . '/../../public/assets/upload/course/';

        foreach ($meetings as $meeting) {
            $videoLink = $meeting['training_course_meetings_link_mast'] ?? '';

            if (!$videoLink) {
                continue;
            }

            $fileName = basename(parse_url($videoLink, PHP_URL_PATH));

            if (!$fileName) {
                continue;
            }

            $filePath = $uploadPath . $fileName;

            if (is_file($filePath)) {
                unlink($filePath);
            }
        }

        $this->courseMeeting->deleteByCourseId($courseId);
        $deleted = $this->course->deletePending($courseId);

        if (!$deleted) {
            http_response_code(404);
            echo 'حذف دوره انجام نشد.';
            return;
        }

        header('Location: ' . base_url('/admin/courses/pending'));
        exit;
    }
}