<section class="container-fluid px-4">

    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">

        <div class="container-xl px-4">

            <div class="page-header-content pt-4">

                <div class="row align-items-center justify-content-between">

                    <div class="col-auto mt-4">

                        <h1 class="page-header-title">

                            <div class="page-header-icon">
                                <i class="bx bx-user-check"></i>
                            </div>

                            دبیران تأیید شده

                        </h1>

                    </div>

                </div>

            </div>

        </div>

    </header>

    <div class="card mb-4">

        <div class="card-header">
            <div class="d-flex align-items-center">
                <i class="bx bx-user-check me-2"></i>
                دبیران تأیید شده
            </div>
        </div>

        <div class="card-body">

            <?php if (empty($teachers)): ?>

                <div class="alert alert-info text-center mb-0">
                    در حال حاضر هیچ دبیر تأیید شده‌ای وجود ندارد.
                </div>

            <?php else: ?>

            <div class="table-responsive">

                <table id="datatablesSimple" class="table table-bordered table-hover align-middle">

                    <thead>
                    <tr>
                        <th>ردیف</th>
                        <th>نام و نام خانوادگی</th>
                        <th>ایمیل</th>
                        <th>شماره تماس</th>
                        <th>مدرک</th>
                        <th>رشته تحصیلی</th>
                        <th>سابقه تدریس</th>
                        <th>تاریخ ثبت‌نام</th>
                        <th>وضعیت</th>
                    </tr>
                    </thead>

                    <tbody>

                    <?php foreach ($teachers as $index => $teacher): ?>

                    <?php
                    $createdAt = $teacher['teacher_date_created_account_mast'] ?? null;
                    ?>

                    <tr>

                        <td>
                            <?= $index + 1 ?>
                        </td>

                        <td>
                            <?= htmlspecialchars(
                                    $teacher['teacher_full_name_mast'] ?? '',
                                    ENT_QUOTES,
                                    'UTF-8'
                            ) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars(
                                    $teacher['teacher_email_mast'] ?? '',
                                    ENT_QUOTES,
                                    'UTF-8'
                            ) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars(
                                    $teacher['teacher_phone_number_mast'] ?? '',
                                    ENT_QUOTES,
                                    'UTF-8'
                            ) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars(
                                    $teacher['teacher_degree_mast'] ?? '',
                                    ENT_QUOTES,
                                    'UTF-8'
                            ) ?>
                        </td>
                        <td>
                            <?= htmlspecialchars(
                                    $teacher['teacher_field_study_mast'] ?? '',
                                    ENT_QUOTES,
                                    'UTF-8'
                            ) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars(
                                    $teacher['teacher_teaching_history_mast'] ?? '',
                                    ENT_QUOTES,
                                    'UTF-8'
                            ) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($createdAt !== null
                                    ? jalali_date('Y/m/d , ساعت H:i', (int) $createdAt) : '-',
                                    ENT_QUOTES,
                                    'UTF-8')
                            ?>
                        </td>

                        <td>
                             <span class="badge bg-success">
                                 تأیید شده
                             </span>
                        </td>

                    </tr>

                    <?php endforeach; ?>

                    </tbody>

                </table>

            </div>

            <?php endif; ?>

        </div>

    </div>

</section>