<!DOCTYPE html>
<html lang="fa" dir="rtl">

<?php
include "include/database/connect.php";
global $connection;
$success_active_code = null;
$error_active_code = null;

if(isset($_GET['active_code'])){

    $array = array(
        'active_code' => $_GET['active_code']);

    $_GET['success'] = null ;
    $send = $connection->prepare("UPDATE student_mast SET student_status_mast=? WHERE student_active_code_mast=?");
    $send->bindValue(1, 1);
    $send->bindValue(2, $array['active_code']);
    $send->execute();

    $send = $connection->prepare("SELECT student_active_code_mast FROM student_mast WHERE student_active_code_mast=?");
    $send->bindValue(1, $array['active_code']);
    $send->execute();
    if($send->rowCount()>=1){
        $success_active_code = true;
    }else if ($send->rowCount()<=0){
        $error_active_code = true;
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
                <div class="col-12 col-lg-6 d-md-flex align-items-center justify-content-center bg-primary bg-opacity-10 vh-lg-200">
                    <div class="p-3 p-lg-5">
                        <!-- Title -->
                        <div class="text-center">
                            <h2 class="mb-4 display-7">  خوش آمدید به مدرسه آنلاین TeachLine</h2>
                            <p class="mb-0 h6 fw-light">بیایید امروز چیز جدیدی یاد بگیریم !</p>
                        </div>
                        <!-- SVG Image -->
                        <img src="assets/images/element/07.svg" class="mt-8" alt="">
                    </div>
                </div>

                <!-- Right -->
                <div class="col-12 col-lg-6 m-auto">
                    <div class="row my-5">
                        <div class="col-sm-10 col-xl-8 m-auto">
                            <!-- Title -->
                            <h2 class="">فعالسازی حساب</h2>
                            <!-- Form START -->
                            <form method="get">
                                <!-- full-name -->
                                <div class="mb-4">
                                    <label for="exampleInputEmail1" class="form-label">کد فعالسازی</label>
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="bi bi-qr-code-scan"></i></span>
                                        <input type="number" name="active_code" class="form-control border-0 bg-light rounded-end ps-1" placeholder="کد فعالسازی را وارد کنید" id="exampleInputEmail1">
                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="align-items-center mt-0">
                                    <div class="d-grid">
                                        <input class="btn btn-success-shadow mb-0" type="submit" name="submit" value="ارسال">
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
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Template Functions -->
<script src="assets/js/functions.js"></script>
<script src="assets/vendor/jquery/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php  if($_GET['success']){ ?>
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
            icon: "info",
            title: "کد فعالسازی به ایمیل شما ارسال شد"
        });
    </script>';
<?php } ?>

<?php if($success_active_code){ ?>
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
            title: "حساب کاربری شما فعال شد"
        });
        setTimeout(function() { window.location.href = 'sign-in.php'; }, 1000);
    </script>
<?php } ?>

<?php if($error_active_code){ ?>
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
            title: "کد فعالسازی شما نادرست است"
        });
    </script><?php } ?>
</body>

</html>