<!DOCTYPE html>
<html lang="fa" dir="rtl">

<?php
use PHPMailer\PHPMailer\PHPMailer;

include "include/database/connect.php";
global $connection;

$success_sign = null;
$error_ep = null;
$email_info = null;

if (isset($_POST['submit'])) {

    $array = array(
        'full_name' => $_POST['full_name'],
        'email' => $_POST['email'],
        'password' => $_POST['password'],
        'phone_number' => $_POST['phone_number'],
        'education_basic' => $_POST['education_basic'],
        'field_study' => $_POST['field_study'],
        'active_code' => rand(1000, 9999));

    $send = $connection->prepare("SELECT * FROM student_mast WHERE student_email_mast=?");
    $send->bindValue(1, $array['email']);
    $send->execute();
    if ($send->rowCount() >= 1) {
        $email_info = true;
    } elseif ($send->rowCount() <= 0) {

        if (!empty($array['email']) && !empty($array['password'])) {

            $send = $connection->prepare("INSERT INTO student_mast SET student_full_name_mast=? , student_email_mast=? , student_password_mast=? , student_phone_number_mast=? , student_education_basic_mast=? , student_field_study_mast=? , student_date_created_account_mast=? , student_active_code_mast=?");
            $send->bindValue(1, $array['full_name']);
            $send->bindValue(2, $array['email']);
            $send->bindValue(3, $array['password']);
            $send->bindValue(4, $array['phone_number']);
            $send->bindValue(5, $array['education_basic']);
            $send->bindValue(6, $array['field_study']);
            $send->bindValue(7, time());
            $send->bindValue(8, $array['active_code']);

            if ($send->execute()) {

                require 'phpmailer/src/PHPMailer.php';
                require 'phpmailer/src/SMTP.php';
                require 'phpmailer/src/Exception.php';

                $mail = new PHPMailer();
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com'; // سرور SMTP
                $mail->SMTPAuth = true;
                $mail->Username = 'a.teachline@gmail.com'; // ایمیل ارسال‌کننده
                $mail->Password = ''; // پسورد ایمیل
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;

                // تنظیمات فرستنده و گیرنده ایمیل
                $mail->setFrom('a.teachline@gmail.com'); // ایمیل فرستنده
                $mail->addAddress($array['email']); // ایمیل گیرنده (کاربر)

                $mail->Subject = 'Confirmation Code';
                $mail->Body = " Yuor Account Confirmation Code : " . $array['active_code']; // محتوای ایمیل

                if ($mail->send()) {
                    echo 'Verification code has been sent to your email.';
                    echo "<script>
                    toastr.success('ثبت ‌نام با موفقیت انجام شد!');
                    setTimeout(function() { window.location.href = 'index.php'; }, 1000);
                    </script>";
                } else {
                    echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
                }
            } else {
                echo "<script>toastr.error('خطا در ثبت اطلاعات ! لطفاً دوباره تلاش کنید.');</script>";
            }
            $success_sign = true;
            header('location:sign-up-check.php?success=true');
        } else {
            $error_ep = true;
        }
    }
}

$sel = $connection->prepare("SELECT * FROM education_basic_mast");
$sel->execute();
$education_basic = $sel->fetchAll(PDO::FETCH_ASSOC);

$sel = $connection->prepare("SELECT * FROM field_study_mast");
$sel->execute();
$field_study = $sel->fetchAll(PDO::FETCH_ASSOC);

?>


<?php
include "include/layout/head.php";
?>

<body>
<!-- Pre loader -->
<div class="preloader">
    <div class="preloader-item">
        <div class="spinner-grow text-primary"></div>
    </div>
</div>
<!-- **************** MAIN CONTENT START **************** -->
<main>
    <section class="p-0 d-flex align-items-center position-relative overflow-hidden">

        <div class="container-fluid">
            <div class="row">
                <!-- left -->
                <div class="col-12 col-lg-6 d-md-flex align-items-center justify-content-center bg-primary bg-opacity-10 vh-lg-200">
                    <div class="p-3 p-lg-5">
                        <!-- Title -->
                        <div class="text-center">
                            <h2 class="mb-4 display-7">  خوش آمدید به مدرسه آنلاین TeachLine</h2>
                            <p class="mb-0 h6 fw-light">بیایید امروز چیز جدیدی یاد بگیریم !</p>
                        </div>
                        <!-- SVG Image -->
                        <img src="assets/images/element/07.svg" class="mt-5" alt="">
                    </div>
                </div>

                <!-- Right -->
                <div class="col-12 col-lg-6 m-auto">
                    <div class="row my-5">
                        <div class="col-sm-10 col-xl-8 m-auto">
                            <!-- Title -->
                            <h2 class="">ثبت نام</h2>
                            <p class="mb-4">از دیدن شما خوشحالم هنرجو عزیز ! لطفا حساب کاربری برای خود ایجاد کنید.</p>

                            <!-- Form START -->
                            <form method="post">
                                <!-- full-name -->
                                <div class="mb-4">
                                    <label for="exampleInputEmail1" class="form-label">نام و نام خانوادگی</label>
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                                    class="bi bi-person-vcard"></i></span>
                                        <input type="text" name="full_name"
                                               class="form-control border-0 bg-light rounded-end ps-1"
                                               placeholder="محمد مرادی" id="exampleInputEmail1">
                                    </div>
                                </div>
                                <!-- Email -->
                                <div class="mb-4">
                                    <label for="exampleInputEmail1" class="form-label">ایمیل</label>
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                                    class="bi bi-envelope-fill"></i></span>
                                        <input type="email" name="email"
                                               class="form-control border-0 bg-light rounded-end ps-1"
                                               placeholder="*@gmail.com" id="exampleInputEmail1">
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
                                               placeholder="********" id="password" pattern=".{8,}"
                                               title="حداقل 8 کاراکتر" data-bs-toggle="tooltip"
                                               data-bs-placement="right">

                                        <button type="button" class="form-control border-0 w-50px" id="togglePassword">
                                            نمایش
                                        </button>

                                    </div>
                                </div>
                                <!-- phonenumber -->
                                <div class="mb-4">
                                    <label for="inputPassword5" class="form-label">شماره تماس</label>
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                                    class="fas bi-phone"></i></span>
                                        <input type="tel" name="phone_number"
                                               class="form-control border-0 bg-light rounded-end ps-1"
                                               placeholder="091********" id="inputPassword5" pattern="[0-9]{11}"
                                               data-bs-toggle="tooltip" data-bs-placement="right" title="موبایل 11 رقم">
                                    </div>
                                </div>
                                <!-- education-basic -->
                                <label for="inputPassword5" class="form-label">پایه تحصیلی</label>
                                <select name="education_basic" class="form-select form-select-lg mb-3"
                                        aria-label="Default select example">
                                    <?php foreach ($education_basic as $education_basics) { ?>
                                        <option style="direction: rtl ;text-align: right" value="<?php echo $education_basics['education_basic_name_mast'] ?>"><?php echo $education_basics['education_basic_name_mast'] ?></option>
                                    <?php } ?>
                                </select>
                                <!-- field-study -->
                                <label for="inputPassword5" class="form-label">رشته تحصیلی</label>
                                <select name="field_study" class="form-select form-select-lg mb-3"
                                        aria-label="Default select example">
                                    <?php foreach ($field_study as $field_studys) { ?>
                                        <option style="direction: rtl ;text-align: right" value="<?php echo $field_studys['field_study_name_mast'] ?>"><?php echo $field_studys['field_study_name_mast'] ?></option>
                                    <?php } ?>
                                </select>
                                <!-- Button -->
                                <div class="align-items-center mt-0">
                                    <div class="d-grid">
                                        <input class="btn btn-success-shadow mb-0" type="submit" name="submit"
                                               value="ثبت نام">
                                    </div>
                                </div>
                            </form>
                            <!-- Sign up link -->
                            <div class="mt-4 text-center">
                                <span>آیا قبلا ثبت نام کرده اید ؟<a href="sign-in.php"> ورود</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

<!-- Bootstrap JS -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Template Functions -->
<script src="assets/js/functions.js"></script>
<script src="assets/vendor/jquery/jquery-3.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<?php if ($error_ep) { ?>
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
            title: "ایمیل و رمز عبور خالی نگذارید"
        });
    </script>'
<?php } ?>

<?php if ($email_info) { ?>
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
            icon: "question",
            title: "کاربری با این آدرس ایمیل از قبل ثبت نام شده است"
        });
    </script>'
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