<!DOCTYPE html>
<html lang="fa" dir="rtl">

<?php
include "../include/database/connect.php";
include "../script/jdf/jdf.php";
include "include/config/aouth.php";
global $connection;

$sel = $connection->prepare("SELECT * FROM training_courses_mast WHERE training_courses_teacher_mast=? AND training_courses_status_mast = '1' ORDER BY id_training_courses_mast DESC");
$sel->bindValue(1, $_SESSION['full_name_teacher']);
$sel->execute();
$training_course = $sel->fetchAll(PDO::FETCH_ASSOC);

if ($_SESSION['login_teacher']) {}

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
                                    <h1 class="my-1 fs-4"><i class="bi bi-patch-check-fill text-info small"></i> <?php echo $_SESSION['full_name_teacher'];?></h1>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xl-3 d-flex justify-content-between align-items-center">
                            <a class="h6 mb-0 fw-bold d-xl-none" href="#">منوی کاربری</a>
                            <button class="btn btn-primary d-xl-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
                                <i class="fas fa-sliders-h"></i>
                            </button>
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
                            <h3 class="mb-0 ff-vb fs-5">لیست دوره ها</h3>
                        </div>
                        <!-- Card header END -->

                        <!-- Card body START -->
                        <div class="card-body">

                            <!-- Search and select START -->
                            <div class="row g-3 align-items-center justify-content-between mb-4">
                                <!-- Search -->
<!--                                <div class="col-md-12">-->
<!--                                    <form action="#" class="rounded position-relative">-->
<!--                                        <input class="form-control pe-5 bg-transparent" type="search"-->
<!--                                               placeholder="جستجوی دوره" aria-label="Search">-->
<!--                                        <button class="bg-transparent p-3 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset"-->
<!--                                                type="submit" name="sub_search">-->
<!--                                            <i class="fas fa-search fs-6 "></i>-->
<!--                                        </button>-->
<!--                                    </form>-->
<!--                                </div>-->
                            </div>
                            <!-- Search and select END -->

                            <!-- Course list table START -->
                            <div class="table-responsive border-0">
                                <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
                                    <!-- Table head -->
                                    <thead>
                                    <tr>
                                        <th scope="col" class="border-0 rounded-start">نام دوره</th>
                                        <th scope="col" class="border-0">تاریخ ثبت دوره</th>
                                        <th scope="col" class="border-0">تاریخ آپدیت دوره</th>
                                        <th scope="col" class="border-0">رشته تحصیلی</th>
                                        <th scope="col" class="border-0 rounded-end">عملیات</th>
                                    </tr>
                                    </thead>

                                    <!-- Table body START -->
                                    <tbody>

                                    <?php foreach ($training_course as $training_courses) { ?>

                                        <!-- Table item -->
                                        <tr>
                                            <!-- Course item -->
                                            <td>
                                                <div class="d-flex">
                                                    <div class="badge bg-secondary bg-opacity-10">
                                                        <!-- Title -->
                                                        <h6 class="fw-normal"><?php echo $training_courses['training_courses_name_mast']; ?></h6>
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="badge bg-secondary bg-opacity-10 text-secondary"><?php echo jdate('Y/m/d , ساعت H:i', $training_courses['training_courses_date_created_course_mast']); ?></div>
                                            </td>

                                            <td>
                                                <div class="badge bg-secondary bg-opacity-10 text-secondary"><?php echo jdate('Y/m/d , ساعت H:i', $training_courses['training_courses_date_update_course_mast']); ?></div>
                                            </td>

                                            <td>
                                                <div class="badge bg-secondary bg-opacity-10 text-secondary"><?php echo htmlentities($training_courses['training_courses_field_study_mast']); ?></div>
                                            </td>

                                            <td>
                                                <a href="instructor-edit-course.php?id=<?php echo $training_courses['id_training_courses_mast']; ?>"
                                                   class="btn btn-sm btn-success-soft btn-round me-1 mb-0" title="ویرایش"><i
                                                             class="far fa-fw fa-edit"></i></a>
                                                <a href="#"
                                                   class="btn btn-sm btn-danger-soft btn-round mb-0"
                                                   title="حذف"
                                                   onclick="confirmDelete('<?php echo $training_courses['id_training_courses_mast']; ?>'); return false;"><i class="fas fa-fw fa-times"></i></a>
                                                <a href="instructor-manage-course-meetings.php?course=<?php echo $training_courses['training_courses_name_mast']; ?>"
                                                   class="btn btn-sm btn-primary-soft btn-round me-1 mb-0" title="مدیریت جلسات دوره"><i
                                                             class="fas fa-fw fa-chalkboard"></i></a>

                                            </td>
                                        </tr>

                                    <?php } ?>

                                    </tbody>
                                    <!-- Table body END -->
                                </table>
                            </div>
                            <!-- Course list table END -->
                        </div>
                        <!-- Card body START -->
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

</body>

</html>