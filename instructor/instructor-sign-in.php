<!DOCTYPE html>
<html lang="fa" dir="rtl">

<?php
global $connection;
include "../include/database/connect.php";

$success_message = null;
$error_message = null;

if (isset($_POST['submit'])) {

    $array = array(
        'email' => $_POST['email'],
        'password' => $_POST['password']);

    $send = $connection->prepare("SELECT * FROM teacher_mast WHERE teacher_email_mast=? AND teacher_password_mast=? AND teacher_status_mast = '1'");
    $send->bindValue(1, $array['email']);
    $send->bindValue(2, $array['password']);
    $send->execute();

    if ($send->rowCount() >= 1) {
        $success_message = true;
        $rows = $send->fetch(PDO::FETCH_ASSOC);
        $_SESSION['login_teacher'] = true;
        $_SESSION['full_name_teacher'] = $rows['teacher_full_name_mast'];
        $_SESSION['email_teacher'] = $rows['teacher_email_mast'];
        $_SESSION['password_teacher'] = $rows['teacher_password_mast'];
        if (isset($_POST['rem'])) {
            setcookie('email', $_SESSION['email_teacher'], time() + (60 * 60 * 24 * 7), '/');
            setcookie('password', $_SESSION['password_teacher'], time() + (60 * 60 * 24 * 7), '/');
        }

    } else if ($send->rowCount() <= 0) {
        $error_message = true;
    }
}

?>


<?php
include "include/layout/head.php";
?>

<body>

<!-- **************** MAIN CONTENT START **************** -->
<main>
    <section class="p-0 d-flex align-items-center position-relative overflow-hidden">

        <div class="container-fluid">
            <div class="row">
                <!-- left -->
                <div class="col-12 col-lg-6 d-md-flex align-items-center justify-content-center bg-primary bg-opacity-10 vh-lg-100">
                    <div class="p-3 p-lg-5">
                        <!-- Title -->
                        <div class="text-center">
                            <h2 class="fw-bold fs-3">به انجمن ما خوش آمدید</h2>
                            <p class="mb-0 h6 fw-light">ممنون از شما دبیر عزیز که امروز قصد آموزش دادن را دارید !</p>
                        </div>
                        <!-- SVG Image -->
                        <img src="../assets/images/element/16.svg" class="mt-5" alt="">
                    </div>
                </div>

                <!-- Right -->
                <div class="col-12 col-lg-6 m-auto">
                    <div class="row my-5">
                        <div class="col-sm-10 col-xl-8 m-auto">
                            <!-- Title -->
                            <h1 class="fs-4">ورود به حساب کاربری (دبیر)</h1>
                            <p class="mb-4">از دیدن شما دبیر عزیز بسیار خوشحالم ! لطفا با ایمیل و رمزعبور خود وارد
                                شوید.</p>

                            <!-- Form START -->
                            <form method="post">
                                <!-- Email -->
                                <div class="mb-4">
                                    <label for="exampleInputEmail1" class="form-label">ایمیل *</label>
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                                    class="bi bi-envelope-fill"></i></span>
                                        <input type="email" name="email"
                                               class="form-control border-0 bg-light rounded-end ps-1"
                                               placeholder="***@gmail.com" id="exampleInputEmail1">
                                    </div>
                                </div>
                                <!-- password -->
                                <div class="mb-4">
                                    <label for="exampleInputEmail1" class="form-label">رمز عبور</label>
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                                    class="fas fa-lock"></i></span>
                                        <input type="password" name="password"
                                               class="form-control border-0 bg-light rounded-end ps-1"
                                               placeholder="********" id="password" data-bs-toggle="tooltip"
                                               data-bs-placement="right">

                                        <button type="button" class="form-control border-0 w-50px" id="togglePassword">
                                            نمایش
                                        </button>

                                    </div>
                                </div>
                                <!-- Check box -->
                                <div class="mb-4 d-flex justify-content-between mb-4">
                                    <div class="form-check">
                                        <input type="checkbox" name="rem" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">مرا به خاطر بسپار</label>
                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="align-items-center mt-0">
                                    <div class="d-grid">
                                        <input class="btn btn-success-shadow mb-0" name="submit" type="submit"
                                               value="ورود">
                                    </div>
                                </div>
                            </form>
                            <!-- Form END -->
                        </div>
                    </div> <!-- Row END -->
                </div>
            </div> <!-- Row END -->
        </div>
    </section>
</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

<!-- Bootstrap JS -->
<script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Template Functions -->
<script src="../assets/js/functions.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php if ($success_message) { ?>
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
            icon: "success",
            title: "دبیر عزیز ورود شما با موفقیت انجام شد"
        });
        setTimeout(function () {
            window.location.href = 'instructor-dashboard.php';
        }, 1000);
    </script>
<?php } ?>


<?php if ($error_message) { ?>
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
            icon: "error",
            title: "ایمیل یا رمز عبور نادرست است یا هنوز از طرف ادمین تایید نشده اید"
        });
    </script>
<?php } ?>

<script>
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');

    togglePassword.addEventListener('click', function () {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        this.textContent = type === 'password' ? 'نمایش' : 'پنهان کردن';
    });
</script>

</body>

</html>