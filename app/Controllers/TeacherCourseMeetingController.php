<?php
namespace App\Controllers;
use App\Models\Course;
use App\Models\CourseMeeting;
use App\Core\View;
class TeacherCourseMeetingController
{
    public function __construct(private Course $course , private CourseMeeting $courseMeeting , private View $view) {}

    public function index(): void
    {
        $teacherId = (int) ($_SESSION['teacher_id'] ?? 0);

        if ($teacherId <= 0) {
            header('Location: /teachline/public/login');
            exit;
        }

        $courseId = filter_input(INPUT_GET , 'id' , FILTER_VALIDATE_INT);

        if (!$courseId || $courseId <= 0) {
            header('Location: /teachline/public/teacher/courses');
            exit;
        }

        $course = $this->course->findByIdAndTeacherId($courseId, $teacherId);

        if (!$course) {
            header('Location: /teachline/public/teacher/courses');
            exit;
        }

        $meetings = $this->courseMeeting->findByCourseName(
            $course['training_courses_name_mast']
        );

        $this->view->render(
            'teachers/course-meetings' , [
                'course' => $course,
                'meetings' => $meetings,
            ] , 'teacher'
        );
    }

    public function store(): void
    {
        $teacherId = (int) ($_SESSION['teacher_id'] ?? 0);

        if ($teacherId <= 0) {
            header('Location: /teachline/public/login');
            exit;
        }

        $courseId = filter_input(INPUT_GET , 'id', FILTER_VALIDATE_INT);

        if (!$courseId || $courseId <= 0) {
            header('Location: /teachline/public/teacher/courses');
            exit;
        }

        $course = $this->course->findByIdAndTeacherId($courseId , $teacherId);

        if (!$course) {
            header('Location: /teachline/public/teacher/courses');
            exit;
        }

        $title = trim($_POST['title'] ?? '');

        if ($title === '') {
            flash('warning' , 'عنوان جلسه را وارد کنید.');
            header('Location: /teachline/public/teacher/course-meetings?id=' . $courseId);
            exit;
        }

        if (!isset($_FILES['fileToUpload']) || $_FILES['fileToUpload']['error'] !== UPLOAD_ERR_OK) {
            flash('warning' , 'فایل ویدیو را انتخاب کنید.');
            header('Location: /teachline/public/teacher/course-meetings?id=' . $courseId);
            exit;
        }

        $file = $_FILES['fileToUpload'];
        $extension = strtolower(pathinfo($file['name'] , PATHINFO_EXTENSION));

        if (!in_array($extension , ['mp4' , 'mkv'] , true)) {
            flash('info' , 'فرمت ویدیو باید MP4 یا MKV باشد.');
            header('Location: /teachline/public/teacher/course-meetings?id=' . $courseId);
            exit;
        }

        $uploadDirectory = __DIR__ . '/../../assets/upload/course/';

        if (!is_dir($uploadDirectory)) {
            mkdir($uploadDirectory , 0755 , true);
        }

        $fileName = bin2hex(random_bytes(16)) . '.' . $extension;
        $targetPath = $uploadDirectory . $fileName;

        if (!move_uploaded_file($file['tmp_name'] , $targetPath)) {
            flash('error', 'آپلود فایل انجام نشد.');
            header('Location: /teachline/public/teacher/course-meetings?id=' . $courseId);
            exit;
        }

        $link = '/teachline/assets/upload/course/' . $fileName;
        $this->courseMeeting->create([
            'teacher_id' => $teacherId,
            'title' => $title,
            'link' => $link,
            'course_name' => $course['training_courses_name_mast'],
        ]);

        flash('success', 'جلسه با موفقیت ثبت شد.');
        header('Location: /teachline/public/teacher/course-meetings?id=' . $courseId);
        exit;
    }

    public function delete(): void
    {
        $teacherId = (int) ($_SESSION['teacher_id'] ?? 0);

        if ($teacherId <= 0) {
            header('Location: /teachline/public/login');
            exit;
        }

        $courseId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        $meetingId = filter_input(INPUT_GET, 'meeting_id', FILTER_VALIDATE_INT);

            if (!$courseId || $courseId <= 0 || !$meetingId || $meetingId <= 0) {
            header('Location: /teachline/public/teacher/courses');
            exit;
        }

        $course = $this->course->findByIdAndTeacherId($courseId, $teacherId);

        if (!$course) {
            header('Location: /teachline/public/teacher/courses');
            exit;
        }

        $courseName = $course['training_courses_name_mast'];
        $meeting = $this->courseMeeting->findByIdAndCourseName($meetingId , $courseName);

        if (!$meeting) {
            flash('error' , 'جلسه مورد نظر پیدا نشد.');
            header('Location: /teachline/public/teacher/course-meetings?id=' . $courseId);
            exit;
        }

        $deleted = $this->courseMeeting->deleteByIdAndCourseName($meetingId , $courseName);

        if (!$deleted) {
            flash('error' , 'حذف جلسه انجام نشد.');
            header('Location: /teachline/public/teacher/course-meetings?id=' . $courseId);
            exit;
        }

        $fileName = basename(parse_url($meeting['training_course_meetings_link_mast'] , PHP_URL_PATH));
        $filePath = __DIR__ . '/../../assets/upload/course/' . $fileName;

        if (is_file($filePath)) {
            unlink($filePath);
        }

        flash('success', 'جلسه و فایل ویدیویی با موفقیت حذف شدند.');
        header('Location: /teachline/public/teacher/course-meetings?id=' . $courseId);
        exit;
    }
}