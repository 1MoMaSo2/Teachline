<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">

    <div class="container-xl px-4">

        <div class="page-header-content pt-4">

            <div class="row align-items-center justify-content-between">

                <div class="col-auto mt-4">

                    <h1 class="page-header-title">

                        <div class="page-header-icon">
                            <i class="bx bx-book"></i>
                        </div>

                        دوره‌های آموزشی

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

    <div class="card mb-4">

        <div class="card-header">
            لیست دوره‌های آموزشی
        </div>

        <div class="card-body">

            <?php if (empty($courses)): ?>

                <div class="alert alert-info text-center mb-0">
                    هنوز هیچ دوره‌ای ثبت نشده است.
                </div>

            <?php else: ?>

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle text-center">

                    <thead>
                    <tr>
                        <th>نام دوره</th>
                        <th>دبیر</th>
                        <th>مقطع</th>
                        <th>رشته</th>
                        <th>نوع دوره</th>
                        <th>وضعیت</th>
                        <th>تاریخ ایجاد</th>
                    </tr>
                    </thead>

                    <tbody>

                    <?php foreach ($courses as $course): ?>

                    <?php
                    $createdAt = $course['training_courses_date_created_course_mast'] ?? null;
                    ?>

                    <tr>

                        <td>
                            <?= htmlspecialchars(
                                $course['training_courses_name_mast'] ?? '-',
                                ENT_QUOTES,
                                'UTF-8'
                            ) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars(
                                $course['training_courses_teacher_mast'] ?? '-',
                                ENT_QUOTES,
                                'UTF-8'
                            ) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars(
                                $course['training_courses_education_basic_mast'] ?? '-',
                                ENT_QUOTES,
                                'UTF-8'
                            ) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars(
                                $course['training_courses_field_study_mast'] ?? '-',
                                ENT_QUOTES,
                                'UTF-8'
                            ) ?>
                        </td>
                        <td>
                            <?= htmlspecialchars(
                                $course['training_courses_type_book_mast'] ?? '-',
                                ENT_QUOTES,
                                'UTF-8'
                            ) ?>
                        </td>

                        <td>

                            <?php $status = (int) ($course['training_courses_status_mast'] ?? 0); ?>

                            <?php if ($status === 1): ?>

                                <span class="badge bg-success">
                                فعال
                            </span>

                            <?php else: ?>

                                <span class="badge bg-secondary">
                                غیرفعال
                            </span>

                            <?php endif; ?>

                        </td>
                        <td>
                            <?= htmlspecialchars($createdAt !== null
                                    ? jalali_date('Y/m/d , ساعت H:i', (int) $createdAt) : '-',
                                    ENT_QUOTES,
                                    'UTF-8')
                            ?>
                        </td>

                    </tr>

                    <?php endforeach; ?>

                    </tbody>

                </table>

            </div>

            <?php endif; ?>

        </div>

    </div>

</div>