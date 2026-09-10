<?php
/** @var string $education */
/** @var string $type */
/** @var array $courses */
?>

<section class="pt-5">
    <div class="container">

        <div class="row g-4">

            <div class="col-12">
                <h1>
                    دروس <?= htmlentities($type) ?> پایه <?= htmlentities($education) ?>
                </h1>
            </div>

            <?php if (empty($courses)): ?>

                <div class="col-12">
                    <p>دوره‌ای برای این دسته‌بندی پیدا نشد.</p>
                </div>

            <?php else: ?>

                <?php foreach ($courses as $course): ?>

                    <div class="col-lg-10 col-xxl-3">
                        <div class="card rounded overflow-hidden shadow">
                            <div class="row g-3">

                                <div class="col-md-12">
                                    <div class="card-body">

                                        <h5 class="card-title fw-normal">
                                            <a href="/teachline/public/course-detail?course=<?= urlencode($course['training_courses_name_mast']) ?>">
                                                <?= htmlentities($course['training_courses_name_mast']) ?>
                                            </a>
                                        </h5>

                                        <ul class="list-inline mb-1">

                                            <li class="list-inline-item">
                                                <?= htmlentities($course['training_courses_education_basic_mast']) ?>
                                            </li>

                                            <li class="list-inline-item">
                                                <?= htmlentities($course['training_courses_field_study_mast']) ?>
                                            </li>

                                            <li class="list-inline-item">
                                                <?= htmlentities($course['training_courses_type_book_mast']) ?>
                                            </li>

                                            <li class="list-inline-item">
                                                <?= htmlentities($course['training_courses_teacher_mast']) ?>
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