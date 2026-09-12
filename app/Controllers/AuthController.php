<?php
namespace App\Controllers;
use App\Core\View;
use App\Models\Student;
use App\Services\MailService;
class AuthController
{
    public function __construct(private Student $student , private View $view , private MailService $mailService) {}

    public function login(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = trim($_POST['email'] ?? '');
            $password = $_POST['password'] ?? '';
            $student = $this->student->verifyPassword($email , $password);

            if (!$student) {
                flash('error' , 'ایمیل یا رمز عبور نادرست است');
                header('location:' . base_url('/login'));
                exit;
            }

            if ((int)$student['student_status_mast'] !== 1) {
                flash('warning', 'حساب شما هنوز فعال نشده است');
                header('Location:' . base_url('/login'));
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

            if (empty($errors)) {
                if ($this->student->findByEmail($email)) {
                    $errors['email'] = 'این ایمیل قبلاً ثبت شده است';
                }

                if ($this->student->findByPhone($phoneNumber)) {
                    $errors['phone_number'] = 'این شماره موبایل قبلاً ثبت شده است';
                }
            }

            if (!empty($errors)) {
                $this->view->render('auth/register', [
                    'title' => 'ثبت نام',
                    'errors' => $errors,
                    'old' => $old
                ], 'auth');

                return;
            }

            $hashedPassword = password_hash($password , PASSWORD_DEFAULT);
            $activeCode = random_int(100000 , 999999);
            $studentId = $this->student->create([
                'student_full_name_mast' => $fullName,
                'student_email_mast' => $email,
                'student_password_mast' => $hashedPassword,
                'student_phone_number_mast' => $phoneNumber,
                'student_education_basic_mast' => $educationBasic,
                'student_field_study_mast' => $fieldStudy,
                'student_date_created_account_mast' => time(),
                'student_active_code_mast' => $activeCode
            ]);

            $mailSent = $this->mailService->sendActivationEmail($email , $fullName , (string) $activeCode);

            if (!$mailSent) {
                flash('info', 'ثبت نام انجام شد اما ارسال ایمیل فعال سازی با مشکل مواجه شد');
                header('Location:' . base_url('/register'));
                exit;
            }

            flash('success', 'ثبت نام انجام شد. کد فعال سازی به ایمیل شما ارسال شد');
            header('Location:' . base_url('/activate'));
            exit;
        }

        $this->view->render('auth/register', [
            'title' => 'ثبت نام'
        ], 'auth');
    }

    public function activate(): void
    {
        $activeCode = trim($_GET['code'] ?? '');

        // اگر کدی ارسال نشده، صفحه فعال سازی را نمایش بده
        if ($activeCode === '') {
            $this->view->render('auth/activate', [
                'title' => 'فعال سازی حساب'
            ], 'auth');

            return;
        }

        $student = $this->student->findByActiveCode($activeCode);

        if (!$student) {
            flash('error', 'کد فعال سازی نامعتبر است');
            header('Location:' . base_url('/activate'));
            exit;
        }

        // اگر حساب قبلاً فعال شده باشد
        if ((int)$student['student_status_mast'] === 1) {
            flash('success', 'حساب شما قبلاً فعال شده است');
            header('Location:' . base_url('/login'));
            exit;
        }

        $activated = $this->student->activate(
            (int)$student['id_student_mast']
        );

        if (!$activated) {
            flash('error', 'فعال سازی حساب انجام نشد');
            header('Location:' . base_url('/activate'));
            exit;
        }

        flash('success', 'حساب شما با موفقیت فعال شد');
        header('Location:' . base_url('/login'));
        exit;
    }

    public function logout():void
    {
        $_SESSION = [];
        session_destroy();
        header('location:' . base_url('/'));
        exit;
    }
}