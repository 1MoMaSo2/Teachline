<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">

    <div class="container-xl px-4">

        <div class="page-header-content pt-4">

            <div class="row align-items-center justify-content-between">

                <div class="col-auto mt-4">

                    <h1 class="page-header-title">

                        <div class="page-header-icon">
                            <i class="bx bx-time-five"></i>
                        </div>

                        دوره‌های در انتظار تأیید

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
            لیست دوره‌های در انتظار تأیید
        </div>

        <div class="card-body">

            <?php if (empty($courses)): ?>

                <div class="alert alert-info text-center mb-0">
                    در حال حاضر دوره‌ای برای تأیید وجود ندارد.
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
                            <th>تعداد جلسات</th>
                            <th>تاریخ ایجاد</th>
                            <th>عملیات</th>
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
                                    <?= (int)($course['training_courses_lesson_mast'] ?? 0) ?>
                                </td>

                                <td>
                                    <?= htmlspecialchars($createdAt !== null
                                            ? jalali_date('Y/m/d , ساعت H:i', (int) $createdAt) : '-',
                                            ENT_QUOTES,
                                            'UTF-8')
                                    ?>
                                </td>

                                <td>

                                    <!-- تأیید -->
                                    <form
                                            action="<?= base_url('/admin/courses/approve') ?>"
                                            method="POST"
                                            class="d-inline"
                                    >
                                        <input
                                                type="hidden"
                                                name="id"
                                                value="<?= (int) ($course['id_training_courses_mast'] ?? 0) ?>"
                                        >

                                        <button
                                                type="submit"
                                                class="btn btn-success btn-sm"
                                        >
                                            <i class="bx bx-check"></i>
                                            تأیید
                                        </button>
                                    </form>


                                    <!-- رد کردن -->
                                    <form
                                            action="<?= base_url('/admin/courses/reject') ?>"
                                            method="POST"
                                            class="d-inline"
                                    >
                                        <input
                                                type="hidden"
                                                name="id"
                                                value="<?= (int) ($course['id_training_courses_mast'] ?? 0) ?>"
                                        >

                                        <button
                                                type="submit"
                                                class="btn btn-danger btn-sm"
                                        >
                                            <i class="bx bx-x"></i>
                                            رد کردن
                                        </button>
                                    </form>

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