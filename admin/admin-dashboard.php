<!DOCTYPE html>
<html lang="fa">

<?php
include "../include/database/connect.php";
include "include/config/aouth.php";
global $connection;

$send = $connection->prepare("SELECT COUNT(id_training_courses_mast) FROM training_courses_mast");
$send->execute();
$training_courses = $send->fetch(PDO::FETCH_ASSOC);
foreach ($training_courses AS $training_coursess){}

$send = $connection->prepare("SELECT COUNT(id_training_course_meetings_mast) FROM training_course_meetings_mast");
$send->execute();
$ctraining_course_meetings = $send->fetch(PDO::FETCH_ASSOC);
foreach ($ctraining_course_meetings AS $training_course_meeting){}

$send = $connection->prepare("SELECT COUNT(id_student_mast) FROM student_mast");
$send->execute();
$count_student = $send->fetch(PDO::FETCH_ASSOC);
foreach ($count_student AS $count_students){}

$send = $connection->prepare("SELECT COUNT(id_teacher_mast) FROM teacher_mast");
$send->execute();
$count_teacher = $send->fetch(PDO::FETCH_ASSOC);
foreach ($count_teacher AS $count_teachers){}

?>

<?php
include "include/layout/head.php"
?>

<body class="nav-fixed">

<?php
include "include/layout/header.php"
?>

<div id="layoutSidenav">

    <div id="layoutSidenav_content">

        <?php
        include "include/layout/sidebar.php"
        ?>

        <main class="is-rtl">
            <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                <div class="container-xl px-4">
                    <div class="page-header-content pt-4">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto mt-4">
                                <h1 class="page-header-title">
                                    <div class="page-header-icon"><i class="bx bx-pulse"></i></div>
                                    داشبورد مدیریتی
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="container-xl px-4 mt-n10 is-rtl">
                <br>
                <br>
                <br>
                <div class="row">
                    <div class="col-lg-6 col-xl-3 mb-5">
                        <div class="card bg-black text-white h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="me-3">
                                        <div class="text-white-75"><p style="font-size: 22px"><?php echo $training_coursess ?></p></div>
                                        <div class="text-lg fw-bold">دوره آموزشی</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3 mb-5">
                        <div class="card bg-warning text-white h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="me-3">
                                        <div class="text-white-75 small"><p style="font-size: 22px"><?php echo $training_course_meeting ?></p></div>
                                        <div class="text-lg fw-bold">ویدیو آموزشی</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3 mb-5">
                        <div class="card bg-success text-white h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="me-3">
                                        <div class="text-white-75 small"><p style="font-size: 22px"><?php echo $count_teachers?></p></div>
                                        <div class="text-lg fw-bold">دبیر</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3 mb-5">
                        <div class="card bg-danger text-white h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="me-3">
                                        <div class="text-white-75 small"><p style="font-size: 22px"><?php echo $count_students ?></p></div>
                                        <div class="text-lg fw-bold">هنرجو</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/scripts.js"></script>
<script src="assets/js/jquery.js"></script>

<script src="assets/js/simple-datatables@latest.js"></script>
<script src="assets/js/simple-datatables@demo.js"></script>


<script src="assets/js/persian-date.js"></script>
<script src="assets/js/persian-datepicker.js"></script>

</body>

</html>