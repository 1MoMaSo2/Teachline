<!DOCTYPE html>
<html lang="fa" dir="rtl">

<?php
include "../include/database/connect.php";
include "include/config/aouth.php";
$error_upload = null;
$success_upload = null;
global $connection;

$array = array(
    'course' => $_GET['course']);

$sel = $connection->prepare("SELECT * FROM training_courses_mast WHERE training_courses_name_mast=?");
$sel->bindValue(1, $array['course']);
$sel->execute();
$course = $sel->fetchAll(PDO::FETCH_ASSOC);

foreach ($course as $courses) {}

if ($_SESSION['login_teacher']) {}

if (isset($_POST['submit'])) {

    $array = array(
        'title' => $_POST['title'],
        'course' => $_GET['course']);

    if (!empty($_FILES['fileToUpload'])) {
        $target_dir = "../assets/upload/course/";
        $new_course = rand(1000, 100000) . '-' . basename($_FILES["fileToUpload"]["name"]);
        $target_file = $target_dir . $new_course;
        $FileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        if ($FileType != "mp4" && $FileType != "mkv") {
            $error_upload = true;
        }else {
            move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
            $success_upload = true;
            $send = $connection->prepare("INSERT INTO training_course_meetings_mast SET training_course_meetings_title_mast=? , training_course_meetings_link_mast=? , training_course_meetings_course_name_mast=?");
            $send->bindValue(1 , $array['title']);
            $send->bindValue(2 , $new_course);
            $send->bindValue(3 , $array['course']);
            $send->execute();
        }
    }
}

?>

<?php
include "include/layout/head.php";
?>

<body>

<?php
include "include/layout/header.php";
?>

<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
    Main Banner START -->
    <section class="pt-0">
        <!-- Main banner background image -->
        <div class="container-fluid px-0">
            <div class="bg-blue h-100px h-md-100px rounded-0"></div>
        </div>
        <div class="container mt-n4">
            <div class="row">
                <!-- Profile banner START -->
                <div class="col-12">
                    <div class="card bg-transparent card-body p-0">
                        <div class="row d-flex justify-content-between">
                            <!-- Profile info -->
                            <div class="col d-md-flex justify-content-between align-items-center mt-4">
                                <div><br><br>
                                    <h1 class="my-1 fs-4"><i
                                                class="bi bi-patch-check-fill text-info small"></i> <?php echo $_SESSION['full_name_teacher']; ?>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Profile banner END -->
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Page Banner END -->

    <!-- =======================
    Page content START -->
    <section class="pt-0">
        <div class="container">
            <div class="row">

                <?php
                include "include/layout/sidebar.php";
                ?>

                <!-- Main content START -->
                <div class="col-xl-9">
                    <!-- Card START -->
                    <div class="card border bg-transparent rounded-3">
                        <!-- Card header START -->
                        <div class="card-header bg-transparent border-bottom">
                            <h2 class="mb-0 ff-vb fs-5">مدیریت جلسات دوره
                                : <?php echo htmlentities($courses['training_courses_name_mast']); ?></h2>
                            <br>
                            <form method="post" enctype="multipart/form-data">
                                <div style="margin-right: 10% ; margin-left: 10%" class="mb-4">
                                    <label for="exampleInput" class="form-label">عنوان جلسه</label>
                                    <div class="input-group input-group-lg">
                                        <input type="text" name="title" class="form-control border-0 bg-light rounded-end ps-1"
                                               id="exampleInput">
                                    </div>
                                </div>

                                <label for="file-input" class="drop-container">
                                    <span class="drop-title">ویدیو</span>
                                    <input type="file" name="fileToUpload" id="file-input">
                                </label>
                                <br>
                                <input class="btn btn-success-shadow w-100" type="submit" name="submit" value="ثبت">
                            </form>
                        </div>
                        <!-- Card header END -->
                    </div>
                    <!-- Card END -->
                </div>
                <!-- Main content END -->
            </div><!-- Row END -->
        </div>
    </section>
    <!-- =======================
    Inner part END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

<!-- Bootstrap JS -->
<script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendors -->
<script src="../assets/vendor/choices/js/choices.min.js"></script>

<!-- Template Functions -->
<script src="../assets/js/functions.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    function confirmDelete(id) {
        Swal.fire({
            title: "آیا مطمئنی پاک شود ؟",
            icon: "info",
            showCancelButton: true,
            cancelButtonText: "نه",
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "آره"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "instructor-delete-course.php?id=" + id;

                Swal.fire({
                    title: "حذف شد",
                    text: "Your file has been deleted.",
                    icon: "success",
                });
            }
        });
    }
</script>

<?php if ($error_upload) { ?>
    '<script> Swal.fire({
            position: 'top - end',
            icon: 'error',
            title: 'لطفا از این فرمت ها MP4 , MKV استفاده کنید',
            showConfirmButton: false,
            timer: 1500
        }) </script>'
<?php } ?>

<?php if ($success_upload) { ?>
    '<script> Swal.fire({
            position: 'top - end',
            icon: 'success',
            title: 'ویدیو با موفقیت آپلود شد',
            showConfirmButton: false,
            timer: 1500
        }) </script>'
<?php } ?>


</body>

</html>