<!DOCTYPE html>
<html lang="fa">

<?php
include "../include/database/connect.php";
include "include/config/aouth.php";
include "../script/jdf/jdf.php";

global $connection;

$sel = $connection->prepare("SELECT * FROM teacher_mast WHERE teacher_status_mast = '1' ");
$sel->execute();
$teacher = $sel->fetchAll(PDO::FETCH_ASSOC);

?>

<?php
include "include/layout/head.php"
?>

<body class="nav-fixed">

<?php
include "include/layout/header.php"
?>

<div id="layoutSidenav">
    <div id="layoutSidenav_nav">

        <?php
        include "include/layout/sidebar.php"
        ?>

    </div>
    <div id="layoutSidenav_content">
        <main>
            <header class="page-header page-header-dark bg-gradient-custom-to-custom pb-10 is-rtl">
                <div class="container-xl px-4">
                    <div class="page-header-content pt-4">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto mt-4">
                                <h1 class="page-header-title">
                                    <i class="ms-1 me-1 bx bx-filter"></i>
                                    لیست دبیران تایید شده
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="container-xl px-4 mt-n10 is-rtl">
                <div class="card mb-4">
                    <div class="card-header">جدول دبیران</div>
                    <div class="card-body">

                        <table id="datatablesSimple">
                            <thead>
                            <tr>
                                <th>نام و نام خانوادگی دبیر</th>
                                <th>ایمیل</th>
                                <th>رمز عبور</th>
                                <th>جنسیت</th>
                                <th>مدرک تحصیلی</th>
                                <th>رشته تحصیلی</th>
                                <th>سابقه تدریس</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php foreach ($teacher as $teachers) { ?>

                                <tr>
                                    <td><?php echo htmlentities($teachers['teacher_full_name_mast']); ?></td>
                                    <td><?php echo htmlentities($teachers['teacher_email_mast']); ?></td>
                                    <td><?php echo htmlentities($teachers['teacher_password_mast']); ?></td>
                                    <td><?php echo htmlentities($teachers['teacher_gender_mast']); ?></td>
                                    <td><?php echo htmlentities($teachers['teacher_degree_mast']); ?></td>
                                    <td><?php echo htmlentities($teachers['teacher_field_study_mast']); ?></td>
                                    <td><?php echo htmlentities($teachers['teacher_teaching_history_mast']); ?></td>
                                </tr>

                            <?php } ?>

                            </tbody>
                        </table>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>