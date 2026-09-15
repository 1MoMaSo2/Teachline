<section class="pt-0">

    <div class="card border bg-transparent rounded-3">

        <!-- Card header START -->
        <div class="card-header bg-transparent border-bottom">

            <h3 class="mb-0 ff-vb fs-5">
                لیست دوره ها
            </h3>

        </div>
        <!-- Card header END -->


        <!-- Card body START -->
        <div class="card-body">

            <!-- Course list table START -->
            <div class="table-responsive border-0">

                <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">

                    <!-- Table head -->
                    <thead>

                    <tr>

                        <th scope="col" class="border-0 rounded-start">
                            نام دوره
                        </th>

                        <th scope="col" class="border-0">
                            تاریخ ثبت دوره
                        </th>

                        <th scope="col" class="border-0">
                            تاریخ آپدیت دوره
                        </th>

                        <th scope="col" class="border-0">
                            رشته تحصیلی
                        </th>

                        <th scope="col" class="border-0 rounded-end">
                            عملیات
                        </th>

                    </tr>

                    </thead>


                    <!-- Table body START -->
                    <tbody>

                    <?php if (empty($courses)): ?>

                        <tr>

                            <td colspan="5" class="text-center py-4">
                                هنوز دوره‌ای برای شما ثبت نشده است.
                            </td>

                        </tr>

                    <?php else: ?>

                    <?php foreach ($courses as $course): ?>

                    <tr>

                        <!-- Course name -->
                        <td>

                            <div class="d-flex">

                                <div class="badge bg-secondary bg-opacity-10">

                                    <h6 class="fw-normal mb-0">

                                        <?= htmlspecialchars($course['training_courses_name_mast']) ?>

                                    </h6>

                                </div>

                            </div>

                        </td>
                        <!-- Created date -->
                        <td>

                            <div class="badge bg-secondary bg-opacity-10 text-secondary">

                                <?= jalali_date('Y/m/d , ساعت H:i' , (int) $course['training_courses_date_created_course_mast']) ?>

                            </div>

                        </td>


                        <!-- Updated date -->
                        <td>

                            <div class="badge bg-secondary bg-opacity-10 text-secondary">

                                <?= jalali_date('Y/m/d , ساعت H:i' , (int) $course['training_courses_date_update_course_mast']) ?>

                            </div>

                        </td>


                        <!-- Field of study -->
                        <td>

                            <div class="badge bg-secondary bg-opacity-10 text-secondary">

                                <?= htmlspecialchars($course['training_courses_field_study_mast']) ?>

                            </div>

                        </td>


                        <!-- Operations -->
                        <td>

                            <a href="/teachline/public/teacher/edit-course?id=<?= (int) $course['id_training_courses_mast'] ?>"
                               class="btn btn-sm btn-success-soft btn-round me-1 mb-0"
                               title="ویرایش">
                                <i class="far fa-fw fa-edit"></i>
                            </a>


                            <button
                                    type="button"
                                    class="btn btn-sm btn-danger-soft btn-round me-1 mb-0"
                                    title="حذف"
                                    disabled>

                                <i class="fas fa-fw fa-times"></i>

                            </button>


                            <button
                                    type="button"
                                    class="btn btn-sm btn-primary-soft btn-round mb-0"
                                    title="مدیریت جلسات"
                                    disabled>

                                <i class="fas fa-fw fa-chalkboard"></i>

                            </button>

                        </td>

                    </tr>

                        <?php endforeach; ?>

                    <?php endif; ?>

                    </tbody>
                    <!-- Table body END -->

                </table>

            </div>
            <!-- Course list table END -->

        </div>
        <!-- Card body END -->

    </div>

</section>