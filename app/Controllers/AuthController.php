<?php
namespace App\Controllers;
use App\Core\View;
use App\Models\Student;
use RuntimeException;
class AuthController
{
    public function __construct(private Student $student , private View $view) {}

    public function login(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = trim($_POST['email'] ?? '');
            $password = $_POST['password'] ?? '';
            $student = $this->student->verifyPassword($email, $password);

            if (!$student) {
                flash('error' , 'ایمیل یا رمز عبور نادرست است');
                header('location:' . base_url('/login'));
                exit;
            }

            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }

            session_regenerate_id(true);

            $_SESSION['login'] = true;
            $_SESSION['student_id'] = $student['id_student_mast'];
            $_SESSION['full_name'] = $student['student_full_name_mast'];
            $_SESSION['email'] = $student['student_email_mast'];

            flash('success' , 'با موفقیت وارد شدید');
            header('Location:' . base_url('/'));
            exit;
        }

        $this->view->render('auth/login', [
            'title' => 'ورود'
        ], 'auth');
    }

    public function register(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $fullName = trim($_POST['full_name'] ?? '');
            $email = trim($_POST['email'] ?? '');
            $password = $_POST['password'] ?? '';
            $phoneNumber = trim($_POST['phone_number'] ?? '');
            $educationBasic = trim($_POST['education_basic'] ?? '');
            $fieldStudy = trim($_POST['field_study'] ?? '');

            $old = [
                'full_name' => $fullName,
                'email' => $email,
                'phone_number' => $phoneNumber,
                'education_basic' => $educationBasic,
                'field_study' => $fieldStudy
            ];

            $errors = [];

            if ($fullName === '') {
                $errors['full_name'] = 'نام و نام خانوادگی الزامی است';
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'ایمیل وارد شده معتبر نیست';
            }

            if (strlen($password) < 8) {
                $errors['password'] = 'رمز عبور باید حداقل ۸ کاراکتر باشد';
            }

            if (!preg_match('/^09\d{9}$/', $phoneNumber)) {
                $errors['phone_number'] = 'شماره موبایل معتبر نیست';
            }

            if ($educationBasic === '') {
                $errors['education_basic'] = 'لطفاً مقطع تحصیلی را انتخاب کنید';
            }

            if ($fieldStudy === '') {
                $errors['field_study'] = 'لطفاً رشته تحصیلی را انتخاب کنید';
            }

            if (!empty($errors)) {
                $this->view->render('auth/register', [
                    'title' => 'ثبت نام',
                    'errors' => $errors ,
                    'old' => $old
                ], 'auth');

                return;
            }
        }

        $this->view->render('auth/register', [
            'title' => 'ثبت نام'
        ], 'auth');
    }

    public function logout():void
    {
        $_SESSION = [];
        session_destroy();
        header('location:' . base_url('/'));
        exit;
    }
}