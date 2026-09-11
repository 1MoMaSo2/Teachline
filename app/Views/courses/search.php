<?php
/** @var string $search */
/** @var array $courses */
?>

<section class="bg-dark align-items-center d-flex"
         style="background:url(/teachline/assets/images/pattern/04.png) no-repeat center center; background-size:cover;">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <h1 class="text-white fs-2">جستجوی دوره ها</h1>

                <div class="d-flex">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-dark breadcrumb-dots mb-0">

                            <li class="breadcrumb-item">
                                <a href="/teachline/public/">صفحه اصلی</a>
                            </li>

                            <li class="breadcrumb-item">
                                <a href="/teachline/public/course-search">جستجوی دوره</a>
                            </li>

                        </ol>
                    </nav>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="pt-5">
    <div class="container">
        <div class="row g-4 justify-content-center">

            <h3>
                نتایج جستجو برای " <?php echo htmlentities($search) ?> "
            </h3>

            <?php if (empty($courses)): ?>

                <div class="col-12">
                    <p>دوره‌ای برای این جستجو پیدا نشد.</p>
                </div>

            <?php else: ?>

            <?php foreach ($courses as $course): ?>

            <div class="col-lg-10 col-xxl-3">
                <div class="card rounded overflow-hidden shadow">
                    <div class="row g-3">

                        <div class="col-md-12">
                            <div class="card-body">

                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="card-title fw-normal">

                                        <a href="/teachline/public/course-detail?course=<?php echo urlencode($course['training_courses_name_mast']); ?>">
                                            <?php echo htmlentities($course['training_courses_name_mast']); ?>
                                        </a>

                                    </h5>
                                </div>

                                <ul class="list-inline mb-1">

                                    <li class="list-inline-item h5 fw-light mb-1 mb-sm-0">
                                        <i class="fas fa-school text-danger me-2"></i>
                                        <?php echo htmlentities($course['training_courses_education_basic_mast']); ?>
                                    </li>

                                    <br>

                                    <li style="margin-top: 10px"
                                        class="list-inline-item h5 fw-light mb-1 mb-sm-0">
                                        <i class="fa fa-table text-blue me-2"></i>
                                        <?php echo htmlentities($course['training_courses_field_study_mast']); ?>
                                    </li>

                                    <br>

                                    <li style="margin-top: 10px"
                                        class="list-inline-item h5 fw-light mb-1 mb-sm-0">
                                        <i class="fas bi-book text-orange me-2"></i>
                                        <?php echo htmlentities($course['training_courses_type_book_mast']); ?>
                                    </li>

                                    <br>
                                    <li style="margin-top: 10px"
                                        class="list-inline-item h5 fw-light mb-1 mb-sm-0">
                                        <i class="fas bi-person text-purple me-2"></i>
                                        <?php echo htmlentities($course['training_courses_teacher_mast']); ?>
                                    </li>

                                    <br>

                                    <li style="margin-top: 10px"
                                        class="list-inline-item h5 fw-light mb-1 mb-sm-0">

                                        <i class="fas bi-calendar-date text-success me-2"></i>

                                        آخرین به روزرسانی :
                                        <?php echo jdate('Y/m/d', $course['training_courses_date_update_course_mast']); ?>

                                    </li>

                                </ul>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

                <?php endforeach; ?>

            <?php endif; ?>

        </div>
    </div>
</section>