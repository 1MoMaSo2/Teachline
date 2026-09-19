<?php
namespace App\Controllers\Admin;
use App\Core\View;
use App\Models\TypeBook;
use PDO;
class AdminTypeBookController
{
    public function __construct(private View $view , private TypeBook $typeBook , private PDO $connection) {}

    public function index(): void
    {
        $typeBooks = $this->typeBook->all();
        $this->view->render('admin/type-book/index', [
            'typeBooks' => $typeBooks],
            'admin'
        );
    }

    public function store(): void
    {
        $name = trim($_POST['type_book'] ?? '');

        if ($name === '') {
            flash('warning' , 'نام نوع کتاب الزامی است.');
            header('Location: ' . base_url('/admin/type-book'));
            exit;
        }

        if ($this->typeBook->existsByName($name)) {
            flash('warning' , 'این نوع کتاب قبلاً ثبت شده است.');
            header('Location: ' . base_url('/admin/type-book'));
            exit;
        }

        $adminId = (int) ($_SESSION['admin_id'] ?? 0);

        if ($adminId <= 0) {
            flash('warning' , 'شناسه مدیر معتبر نیست.');
            header('Location: ' . base_url('/admin/login'));
            exit;
        }

        $this->typeBook->create([
            'admin_id_type_book_mast' => $adminId,
            'type_book_mast' => $name
        ]);

        flash('success', 'نوع کتاب با موفقیت اضافه شد.');
        header('Location: ' . base_url('/admin/type-book'));
        exit;
    }

    public function delete(): void
    {
        $typeBookId = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);

        if (!$typeBookId) {
            flash('warning' , 'شناسه نوع کتاب نامعتبر است.');
            header('Location: ' . base_url('/admin/type-book'));
            exit;
        }

        $typeBook = $this->typeBook->find($typeBookId);

        if (!$typeBook) {
            flash('warning' , 'نوع کتاب موردنظر پیدا نشد.');
            header('Location: ' . base_url('/admin/type-book'));
            exit;
        }

        $name = $typeBook['type_book_mast'];

        $courseStatement = $this->connection->prepare('SELECT COUNT(*) FROM training_courses_mast WHERE training_courses_type_book_mast = :name');
        $courseStatement->execute(['name' => $name]);
        $courseCount = (int) $courseStatement->fetchColumn();

        if ($courseCount > 0) {
            flash('info' , 'این نوع کتاب در بخش دیگری از سیستم استفاده شده و قابل حذف نیست.');
            header('Location: ' . base_url('/admin/type-book'));
            exit;
        }

        $deleted = $this->typeBook->delete($typeBookId);

        if (!$deleted) {
            flash('error' , 'حذف نوع کتاب انجام نشد.');
            header('Location: ' . base_url('/admin/type-book'));
            exit;
        }

        flash('success' , 'نوع کتاب با موفقیت حذف شد.');
        header('Location: ' . base_url('/admin/type-book'));
        exit;
    }
}