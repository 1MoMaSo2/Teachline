<?php
namespace App\Controllers\Admin;
use App\Core\View;
use App\Models\EducationBasic;
use PDO;
class AdminEducationBasicController
{
    public function __construct(private View $view , private EducationBasic $educationBasic , private PDO $connection) {}

    public function index(): void
    {
        $educationBasics = $this->educationBasic->all();
        $this->view->render('admin/education-basic/index', [
            'educationBasics' => $educationBasics ],
            'admin'
        );
    }

    public function store(): void
    {
        $name = trim($_POST['name'] ?? '');

        if ($name === '') {
            flash('warning' , 'نام پایه تحصیلی الزامی است.');
            header('Location: ' . base_url('/admin/education-basic'));
            exit;
        }

        if ($this->educationBasic->existsByName($name)) {
            flash('warning' , 'این پایه تحصیلی قبلاً ثبت شده است.');
            header('Location: ' . base_url('/admin/education-basic'));
            exit;
        }

        $adminId = (int) ($_SESSION['admin_id'] ?? 0);

        if ($adminId <= 0) {
            flash('warning' , 'شناسه مدیر معتبر نیست.');
            header('Location: ' . base_url('/admin/login'));
            exit;
        }
        $this->educationBasic->create([
            'admin_id_education_basic_mast' => $adminId,
            'education_basic_name_mast' => $name
        ]);

        flash('success' , 'پایه تحصیلی با موفقیت اضافه شد.');
        header('Location: ' . base_url('/admin/education-basic'));
        exit;
    }

    public function delete(): void
    {
        $educationBasicId = filter_input(INPUT_POST , 'id' , FILTER_VALIDATE_INT);

        if (!$educationBasicId) {
            flash('warning' , 'شناسه پایه تحصیلی نامعتبر است.');
            header('Location: ' . base_url('/admin/education-basic'));
            exit;
        }

        $educationBasic = $this->educationBasic->find($educationBasicId);

        if (!$educationBasic) {
            flash('warning' , 'پایه تحصیلی موردنظر پیدا نشد.');
            header('Location: ' . base_url('/admin/education-basic'));
            exit;
        }

        $name = $educationBasic['education_basic_name_mast'];

        $studentStatement = $this->connection->prepare("SELECT COUNT(*) FROM student_mast  WHERE student_education_basic_mast = :name");
        $studentStatement->execute(['name' => $name]);
        $studentCount = (int) $studentStatement->fetchColumn();

        $courseStatement = $this->connection->prepare("SELECT COUNT(*) FROM training_courses_mast WHERE training_courses_education_basic_mast = :name");
        $courseStatement->execute(['name' => $name]);
        $courseCount = (int) $courseStatement->fetchColumn();

        if ($studentCount > 0 || $courseCount > 0) {
            flash('info' , 'این پایه تحصیلی در بخش دیگری از سیستم استفاده شده و قابل حذف نیست.');
            header('Location: ' . base_url('/admin/education-basic'));
            exit;
        }

        $deleted = $this->educationBasic->delete($educationBasicId);

        if (!$deleted) {
            flash('error' , 'حذف پایه تحصیلی انجام نشد.');
            header('Location: ' . base_url('/admin/education-basic'));
            exit;
        }

        flash('success' , 'پایه تحصیلی با موفقیت حذف شد.');
        header('Location: ' . base_url('/admin/education-basic'));
        exit;
    }
}