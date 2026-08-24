<!DOCTYPE html>
<html lang="fa" dir="rtl">

<?php
include "include/database/connect.php";
include "script/jdf/jdf.php";
global $connection;

$sel = $connection->prepare("SELECT * FROM training_courses_mast WHERE training_courses_type_book_mast = 'عمومی' AND training_courses_education_basic_mast = 'دهم' ");
$sel->execute();
$training_course = $sel->fetchAll(PDO::FETCH_ASSOC);
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
    Page Banner START -->
    <section class="bg-dark align-items-center d-flex" style="background:url(assets/images/pattern/04.png) no-repeat center center; background-size:cover;">
        <!-- Main banner background image -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Title -->
                    <h1 class="text-white fs-2">دروس عمومی پایه دهم هنرستان</h1>
                    <!-- Breadcrumb -->
                    <div class="d-flex">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-dark breadcrumb-dots mb-0">
                                <li class="breadcrumb-item"><a href="index.php">صفحه اصلی</a></li>
                                <li class="breadcrumb-item"><a href="tenth-general-category.php">دسته بندی عمومی دهم</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Page Banner END -->

    <!-- =======================
    Page content START -->
    <section class="pt-5">
        <div class="container">

            <!-- Course list START -->
            <div class="row g-4 justify-content-center">

                <?php foreach ($training_course as $training_courses){ ?>

                <!-- Card item START -->
                <div class="col-lg-10 col-xxl-3">
                    <div class="card rounded overflow-hidden shadow">
                        <div class="row g-3">
                            <!-- Card body -->
                            <div class="col-md-12">
                                <div class="card-body">
                                    <!-- Title -->
                                    <div class="d-flex justify-content-between mb-3">
                                        <h5 class="card-title fw-normal"><a href="course-detail.php?course=<?php echo htmlentities($training_courses['training_courses_name_mast']); ?>"><?php echo htmlentities($training_courses['training_courses_name_mast']); ?></a></h5>
                                    </div>
                                    <!-- Info -->
                                    <ul class="list-inline mb-1">
                                        <li class="list-inline-item h5 fw-light mb-1 mb-sm-0"><i class="fas fa-school text-danger me-2"></i><?php echo htmlentities($training_courses['training_courses_education_basic_mast']); ?></li>
                                        <br>
                                        <li style="margin-top: 10px" class="list-inline-item h5 fw-light mb-1 mb-sm-0"><i class="fa fa-table text-blue me-2"></i><?php echo htmlentities($training_courses['training_courses_field_study_mast']); ?></li>
                                        <br>
                                        <li style="margin-top: 10px" class="list-inline-item h5 fw-light mb-1 mb-sm-0"><i class="fas bi-book text-orange me-2"></i><?php echo htmlentities($training_courses['training_courses_type_book_mast']); ?></li>
                                        <br>
                                        <li style="margin-top: 10px" class="list-inline-item h5 fw-light mb-1 mb-sm-0"><i class="fas bi-person text-purple me-2"></i><?php echo htmlentities($training_courses['training_courses_teacher_mast']); ?></li>
                                        <br>
                                        <li style="margin-top: 10px" class="list-inline-item h5 fw-light mb-1 mb-sm-0"><i class="fas bi-calendar-date text-success me-2"></i>آخرین به روزرسانی : <?php echo jdate('Y/m/d' , $training_courses['training_courses_date_update_course_mast']); ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->

                <?php } ?>
            </div>
    </section>
    <!-- =======================
    Page content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->
<?php
include "include/layout/footer.php";
?>

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

<!-- Bootstrap JS -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendors -->
<script src="assets/vendor/choices/js/choices.min.js"></script>

<!-- Template Functions -->
<script src="assets/js/functions.js"></script>

</body>

</html>