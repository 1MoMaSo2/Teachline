<?php
namespace App\Controllers\Admin;
use App\Core\View;
use App\Models\FieldStudy;
use PDO;
class AdminFieldStudyController
{
    public function __construct(private View $view , private FieldStudy $fieldStudy , private PDO $connection) {}

    public function index(): void
    {
        $fieldStudies = $this->fieldStudy->all();
        $this->view->render('admin/field-study/index', [
            'fieldStudies' => $fieldStudies],
            'admin'
        );
    }

    public function store(): void
    {
        $name = trim($_POST['field_study'] ?? '');

        if ($name === '') {
            flash('warning' , 'نام رشته تحصیلی الزامی است.');
            header('Location: ' . base_url('/admin/field-study'));
            exit;
        }

        if ($this->fieldStudy->existsByName($name)) {
            flash('warning' , 'این رشته تحصیلی قبلاً ثبت شده است.');
            header('Location: ' . base_url('/admin/field-study'));
            exit;
        }

        $adminId = (int) ($_SESSION['admin_id'] ?? 0);

        if ($adminId <= 0) {
            flash('warning' , 'شناسه مدیر معتبر نیست.');
            header('Location: ' . base_url('/admin/login'));
            exit;
        }

        $this->fieldStudy->create([
            'admin_id_field_study_mast' => $adminId,
            'field_study_name_mast' => $name
        ]);

        flash('success' , 'رشته تحصیلی با موفقیت اضافه شد.');
        header('Location: ' . base_url('/admin/field-study'));
        exit;
    }

    public function delete(): void
    {
        $fieldStudyId = filter_input(INPUT_POST , 'id' , FILTER_VALIDATE_INT);

        if (!$fieldStudyId) {
            flash('warning' , 'شناسه رشته تحصیلی نامعتبر است.');
            header('Location: ' . base_url('/admin/field-study'));
            exit;
        }

        $fieldStudy = $this->fieldStudy->find($fieldStudyId);

        if (!$fieldStudy) {
            flash('warning' , 'رشته تحصیلی موردنظر پیدا نشد.');
            header('Location: ' . base_url('/admin/field-study'));
            exit;
        }

        $name = $fieldStudy['field_study_name_mast'];
        $studentStatement = $this->connection->prepare('SELECT COUNT(*)FROM student_mast WHERE student_field_study_mast = :name');
        $studentStatement->execute(['name' => $name]);
        $studentCount = (int) $studentStatement->fetchColumn();

        $courseStatement = $this->connection->prepare('SELECT COUNT(*) FROM training_courses_mast WHERE training_courses_field_study_mast = :name');
        $courseStatement->execute(['name' => $name]);
        $courseCount = (int) $courseStatement->fetchColumn();

        if ($studentCount > 0 || $courseCount > 0) {
            flash('info' , 'این رشته تحصیلی در بخش دیگری از سیستم استفاده شده و قابل حذف نیست.');
            header('Location: ' . base_url('/admin/field-study'));
            exit;
        }

        $deleted = $this->fieldStudy->delete($fieldStudyId);

        if (!$deleted) {
            flash('error' , 'حذف رشته تحصیلی انجام نشد.');
            header('Location: ' . base_url('/admin/field-study'));
            exit;
        }

        flash('success' , 'رشته تحصیلی با موفقیت حذف شد.');
        header('Location: ' . base_url('/admin/field-study'));
        exit;
    }
}