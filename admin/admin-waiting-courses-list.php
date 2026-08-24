<!DOCTYPE html>
<html lang="fa">

<?php
include "../include/database/connect.php";
include "include/config/aouth.php";
include "../script/jdf/jdf.php";

global $connection;

$sel = $connection->prepare("SELECT * FROM training_courses_mast WHERE training_courses_status_mast = '0' ");
$sel->execute();
$training_courses = $sel->fetchAll(PDO::FETCH_ASSOC);

if (isset($_GET['id'])) {

    $array = array(
        'id' => intval($_GET['id']));

    $send = $connection->prepare("DELETE FROM training_courses_mast WHERE id_training_courses_mast=?");
    $send->bindValue(1, $array['id']);

    if ($send->execute()) {
        header("Location: admin-waiting-courses-list.php");
    }
}
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
                                     لیست دوره های در انتظار تایید
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="container-xl px-4 mt-n10 is-rtl">
                <div class="card mb-4">
                    <div class="card-header">جدول دوره ها</div>
                    <div class="card-body">

                        <table id="datatablesSimple">
                            <thead>
                            <tr>
                                <th>نام دوره</th>
                                <th>نام دبیر دوره</th>
                                <th>تاریخ ثبت دوره</th>
                                <th>پایه تحصیلی دوره</th>
                                <th>رشته تحصیلی دوره</th>
                                <th>نوع کتاب دوره</th>
                                <th>عملیات</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php foreach ($training_courses as $training_course) { ?>

                                <tr>
                                    <td><?php echo htmlentities($training_course['training_courses_name_mast']); ?></td>
                                    <td><?php echo htmlentities($training_course['training_courses_teacher_mast']); ?></td>
                                    <td><?php echo jdate('Y/m/d , ساعت H:i', $training_course['training_courses_date_created_course_mast']); ?></td>
                                    <td><?php echo htmlentities($training_course['training_courses_education_basic_mast']); ?></td>
                                    <td><?php echo htmlentities($training_course['training_courses_field_study_mast']); ?></td>
                                    <td><?php echo htmlentities($training_course['training_courses_type_book_mast']); ?></td>
                                    <td>
                                        <a href="admin-accept-courses-list.php?id=<?php echo $training_course['id_training_courses_mast']; ?>"><div class="badge bg-success text-white rounded-pill">تایید</div></a>
                                        <a href="#"
                                           class="badge bg-danger text-white rounded-pill"
                                           onclick="confirmDelete('<?php echo $training_course['id_training_courses_mast']; ?>'); return false;"><i class="fas fa-fw fa-times">رد کردن</i></a>
                                    </td>
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

<script>
    function confirmDelete(id) {
        Swal.fire({
            title: "آیا مطمئن هستید پاک شود",
            icon: "info",
            showCancelButton: true,
            cancelButtonText: "نه",
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "بله"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "admin-waiting-courses-list.php?id=" + id;
            }
        });
    }
</script>

</body>

</html>