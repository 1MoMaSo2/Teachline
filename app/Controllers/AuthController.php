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
                flash('error', 'ایمیل یا رمز عبور نادرست است');
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

            header('Location:' . base_url('/'));
            exit;
        }

        $this->view->render('auth/login', [
            'title' => 'ورود'
        ], 'auth');
    }
}