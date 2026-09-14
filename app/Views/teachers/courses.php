<section class="pt-5">
    <div class="container">

        <div class="card border bg-transparent rounded-3">

            <div class="card-header bg-transparent border-bottom">
                <h3 class="mb-0 ff-vb fs-5">لیست دوره‌های من</h3>
            </div>

            <div class="card-body">

                <?php if (empty($courses)): ?>

                    <p class="mb-0">هنوز دوره‌ای برای شما ثبت نشده است.</p>

                <?php else: ?>

                    <div class="table-responsive border-0">

                        <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">

                            <thead>
                            <tr>
                                <th scope="col" class="border-0">نام دوره</th>
                                <th scope="col" class="border-0">رشته تحصیلی</th>
                                <th scope="col" class="border-0">وضعیت</th>
                                <th scope="col" class="border-0">تاریخ ثبت</th>
                            </tr>
                            </thead>

                            <tbody>

                            <?php foreach ($courses as $course): ?>

                                <tr>

                                    <td>
                                        <?= htmlspecialchars(
                                            $course['training_courses_name_mast']
                                        ) ?>
                                    </td>

                                    <td>
                                        <?= htmlspecialchars(
                                            $course['training_courses_field_study_mast']
                                        ) ?>
                                    </td>

                                    <td>
                                        <?php if ((int) $course['training_courses_status_mast'] === 1): ?>
                                            فعال
                                        <?php else: ?>
                                            در انتظار تأیید
                                        <?php endif; ?>
                                    </td>

                                    <td>
                                        <?= htmlspecialchars(
                                            $course['training_courses_date_created_course_mast']
                                        ) ?>
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
</section>