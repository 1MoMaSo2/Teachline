<?php
namespace App\Controllers\Admin;
use App\Models\Admin;
use App\Core\View;
class AdminAuthController
{
    public function __construct(private Admin $admin , private View $view) {}

    public function login(): void
    {
        if (($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST') {

            $email = trim($_POST['email'] ?? '');
            $password = $_POST['password'] ?? '';

            if ($email === '' || $password === '') {
                $this->view->render('admin/auth/login', [
                    'error' => 'ایمیل و رمز عبور الزامی هستند.'
                ] , 'none');
                return;
            }

            $admin = $this->admin->verifyPassword($email, $password);

            if (!$admin) {
                $this->view->render('admin/auth/login', [
                    'error' => 'ایمیل یا رمز عبور صحیح نیست.'
                ] , 'none');
                return;
            }

            session_regenerate_id(true);

            $_SESSION['admin_login'] = true;
            $_SESSION['admin_id'] = (int) $admin['id_admin_mast'];
            $_SESSION['admin_username'] = $admin['admin_username_mast'];
            $_SESSION['admin_email'] = $admin['admin_email_mast'];
            $_SESSION['admin_role'] = (int) $admin['admin_role_mast'];

            flash('success' , 'با موفقیت وارد پنل مدیریت شدید');
            header('Location: ' . base_url('/admin'));
            exit;
        }

        $this->view->render('admin/auth/login' , [] , 'none');
    }

    public function logout(): void
    {
        unset(
            $_SESSION['admin_login'],
            $_SESSION['admin_id'],
            $_SESSION['admin_username'],
            $_SESSION['admin_email'],
            $_SESSION['admin_role']
        );

        session_regenerate_id(true);

        header('Location: ' . base_url('/admin/login'));
        exit;
    }
}