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

    public function approve(): void
    {
        $teacherId = filter_input(INPUT_POST , 'id' , FILTER_VALIDATE_INT);

        if (!$teacherId) {
            http_response_code(400);
            echo 'شناسه دبیر نامعتبر است.';
            return;
        }

        $teacher = $this->teacher->find($teacherId);

        if (!$teacher || (int) ($teacher['teacher_status_mast'] ?? 1) !== 0) {
            http_response_code(404);
            echo 'دبیر مورد نظر پیدا نشد یا قبلاً بررسی شده است.';
            return;
        }

        $approved = $this->teacher->approve($teacherId);

        if (!$approved) {
            http_response_code(500);
            echo 'تأیید دبیر انجام نشد.';
            return;
        }

        header('Location: ' . base_url('/admin/teachers/pending'));
        exit;
    }

    public function delete(): void
    {
        $teacherId = filter_input(INPUT_POST , 'id' , FILTER_VALIDATE_INT);

        if (!$teacherId) {
            http_response_code(400);
            echo 'شناسه دبیر نامعتبر است.';
            return;
        }

        $teacher = $this->teacher->find($teacherId);

        if (!$teacher || (int) ($teacher['teacher_status_mast'] ?? 1) !== 0) {
            http_response_code(404);
            echo 'دبیر مورد نظر پیدا نشد یا قبلاً بررسی شده است.';
            return;
        }

        $deleted = $this->teacher->delete($teacherId);

        if (!$deleted) {
            http_response_code(500);
            echo 'حذف دبیر انجام نشد.';
            return;
        }

        header('Location: ' . base_url('/admin/teachers/pending'));
        exit;
    }
}