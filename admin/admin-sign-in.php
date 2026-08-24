<!DOCTYPE html>
<html lang="fa">

<?php
global $connection;
include "../include/database/connect.php";

$success_message = null;
$error_message = null;

if (isset($_POST['submit'])) {

    $array = array(
        'email' => $_POST['email'],
        'password' => $_POST['password']);

    $send = $connection->prepare("SELECT * FROM admin_mast WHERE admin_email_mast=? AND admin_password_mast=?");
    $send->bindValue(1, $array['email']);
    $send->bindValue(2, $array['password']);
    $send->execute();

    if ($send->rowCount() >= 1) {
        $success_message = true;
        $rows = $send->fetch(PDO::FETCH_ASSOC);
        $_SESSION['login_admin'] = true;
        $_SESSION['username_admin'] = $rows['admin_username_mast'];
        $_SESSION['email_admin'] = $rows['admin_email_mast'];
        $_SESSION['password_admin'] = $rows['admin_password_mast'];
        if (isset($_POST['rem'])) {
            setcookie('email', $_SESSION['email_admin'], time() + (60 * 60 * 24 * 7), '/');
            setcookie('password', $_SESSION['password_admin'], time() + (60 * 60 * 24 * 7), '/');
        }

    } else if ($send->rowCount() <= 0) {
        $error_message = true;
    }
}

?>

<?php
include "include/layout/head.php"
?>

<body class="bg-white">

<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container-xl px-4 is-rtl">
                <div class="row justify-content-center">
                    <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center">
                        <div class="flex-row text-center mx-auto">
                            <img src="assets/img/register-cover.jpg" alt="Auth Cover Bg color" width="520"
                                 class="mb-3 img-fluid authentication-cover-img"
                                 data-app-light-img="pages/register-light.png"
                                 data-app-dark-img="pages/register-dark.html">
                        </div>
                    </div>
                    <div class="col-lg-4 mt-5">

                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header justify-content-center"><h3 class="fw-light my-2">ورود به حساب
                                    کاربری</h3></div>
                            <div class="card-body">

                                <form id="formAuthentication" method="post">

                                    <!-- ایمیل -->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputUsername">ایمیل</label>
                                        <input class="form-control" name="email" id="inputUsername" type="text">
                                    </div>

                                    <!-- رمز عبور -->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputPassword">رمز عبور</label>
                                        <div class="input-group input-group-merge has-validation">
                                            <input type="password" name="password" id="inputPassword"
                                                   class="form-control text-start" dir="ltr" placeholder=""
                                                   aria-describedby="inputPassword">
                                        </div>
                                    </div>

                                    <input class="btn btn-primary" style="margin-right: 150px" type="submit"
                                           name="submit" value="ورود مدیر">

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div id="layoutAuthentication_footer">
    </div>
</div>

<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/scripts.js"></script>
<script src="assets/js/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if ($success_message) { ?>
    '<script>
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });
        Toast.fire({
            icon: "success",
            title: "ادمین عزیز ورود با موفقیت انجام شد"
        });
        setTimeout(function () {
            window.location.href = 'admin-dashboard.php';
        }, 3000);
    </script>'
<?php } ?>

<?php if ($error_message) { ?>
    '
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });
        Toast.fire({
            icon: "warning",
            title: "اطلاعات نادرست میباشد"
        });
    </script>'
<?php } ?>

</body>

</html>