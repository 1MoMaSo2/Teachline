<!DOCTYPE html>
<html lang="fa" dir="rtl">

<?php
include "../include/database/connect.php";

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
        'gender' => $_POST['gender'],
        'degree' => $_POST['degree'],
        'field_study' => $_POST['field_study'],
        'teaching_history' => $_POST['teaching_history']);

    $send = $connection->prepare("SELECT * FROM teacher_mast WHERE teacher_email_mast=?");
    $send->bindValue(1, $array['email']);
    $send->execute();
    if ($send->rowCount() >= 1) {
        $email_info = true;
    } elseif ($send->rowCount() <= 0) {

        if (!empty($array['full_name']) && !empty($array['email']) && !empty($array['password']) && !empty($array['phone_number']) && !empty($array['gender']) && !empty($array['degree']) && !empty($array['field_study']) && !empty($array['teaching_history'])) {

            $send = $connection->prepare("INSERT INTO teacher_mast SET teacher_full_name_mast=? , teacher_email_mast=? , teacher_password_mast=? , teacher_phone_number_mast=? , teacher_gender_mast=? , teacher_degree_mast=? , teacher_field_study_mast=? , teacher_teaching_history_mast=? , teacher_date_created_account_mast=?");
            $send->bindValue(1, $array['full_name']);
            $send->bindValue(2, $array['email']);
            $send->bindValue(3, $array['password']);
            $send->bindValue(4, $array['phone_number']);
            $send->bindValue(5, $array['gender']);
            $send->bindValue(6, $array['degree']);
            $send->bindValue(7, $array['field_study']);
            $send->bindValue(8, $array['teaching_history']);
            $send->bindValue(9, time());
            $send->execute();

            $success_sign = true;
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
                            <p class="mb-0 h6 fw-light">خیلی خوشحال هستیم که معلمی همچون شما قرار است در این مدرسه آنلاین آموزش دهد</p>
                        </div>
                        <!-- SVG Image -->
                        <img src="../assets/images/element/07.svg" class="mt-5" alt="">
                    </div>
                </div>

                <!-- Right -->
                <div class="col-12 col-lg-6 m-auto">
                    <div class="row my-5">
                        <div class="col-sm-10 col-xl-8 m-auto">
                            <!-- Title -->
                            <h2 class="">ثبت نام (دبیر)</h2>
                            <p class="mb-4">از دیدن شما خوشحالم معلم عزیز ! لطفا جهت فعالیت در این مدرسه آنلاین درخواست ثبت نام خود را انجام دهید</p>

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
                                               placeholder="علی مرادی" id="exampleInputEmail1">
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
                                <!-- gender -->
                                <label for="inputPassword5" class="form-label">جنسیت</label>
                                <select name="gender" class="form-select form-select-lg mb-3"
                                        aria-label="Default select example">
                                        <option>آقا</option>
                                        <option>خانم</option>
                                </select>
                                <!-- degree -->
                                <div class="mb-4">
                                    <label for="exampleInputEmail1" class="form-label">مدرک تحصیلی</label>
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                                    class="bi bi-person-vcard"></i></span>
                                        <input type="text" name="degree"
                                               class="form-control border-0 bg-light rounded-end ps-1"
                                               placeholder="لیسانس" id="exampleInputEmail1">
                                    </div>
                                </div>
                                <!-- field_study -->
                                <div class="mb-4">
                                    <label for="exampleInputEmail1" class="form-label">رشته تحصیلی</label>
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                                    class="bi bi-person-vcard"></i></span>
                                        <input type="text" name="field_study"
                                               class="form-control border-0 bg-light rounded-end ps-1"
                                               placeholder="کامپیوتر" id="exampleInputEmail1">
                                    </div>
                                </div>
                                <!-- teaching_history -->
                                <div class="mb-4">
                                    <label for="exampleInputEmail1" class="form-label">سابقه تدریس</label>
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                                    class="bi bi-person-vcard"></i></span>
                                        <input type="text" name="teaching_history"
                                               class="form-control border-0 bg-light rounded-end ps-1"
                                               placeholder="* سال" id="exampleInputEmail1">
                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="align-items-center mt-0">
                                    <div class="d-grid">
                                        <input class="btn btn-success-shadow mb-0" type="submit" name="submit"
                                               value="ثبت نام">
                                    </div>
                                </div>
                            </form>
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
<script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Template Functions -->
<script src="../assets/js/functions.js"></script>
<script src="../assets/vendor/jquery/jquery-3.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<?php if ($success_sign) { ?>
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
            icon: "info",
            title: "درخواست شما با موفقیت برای ادمین ارسال , پس از تایید میتوانید به پنل خودتان ورود کنید"
        });
        setTimeout(function() { window.location.href = '../index.php'; }, 5000);
    </script>'
<?php } ?>

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