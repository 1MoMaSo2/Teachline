<section class="container-fluid px-4">

    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">

        <div class="container-xl px-4">

            <div class="page-header-content pt-4">

                <div class="row align-items-center justify-content-between">

                    <div class="col-auto mt-4">

                        <h1 class="page-header-title">

                            <div class="page-header-icon">
                                <i class="bx bx-time-five"></i>
                            </div>

                            دبیران در انتظار تأیید

                        </h1>

                    </div>

                </div>

            </div>

        </div>

    </header>

    <div class="card mb-4">

        <div class="card-header">
            <div class="d-flex align-items-center">
                <i class="bx bx-user-clock me-2"></i>
                دبیران در انتظار بررسی
            </div>
        </div>

        <div class="card-body">

            <?php if (empty($teachers)): ?>

                <div class="alert alert-info text-center mb-0">
                    در حال حاضر هیچ دبیری در انتظار تأیید نیست.
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
                            <th>عملیات</th>
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
                                    <span class="badge bg-warning text-dark">
                                        در انتظار تأیید
                                    </span>
                                </td>

                                <td>

                                    <form
                                            action="<?= base_url('/admin/teachers/approve') ?>"
                                            method="POST"
                                    >

                                        <input
                                                type="hidden"
                                                name="id"
                                                value="<?= (int)$teacher['id_teacher_mast'] ?>"
                                        >

                                        <button
                                                type="submit"
                                                class="btn btn-success btn-sm"
                                        >
                                            <i class="bx bx-check me-1"></i>
                                            تأیید دبیر
                                        </button>

                                    </form>

                                    <form
                                            action="<?= base_url('/admin/teachers/delete') ?>"
                                            method="POST"
                                            class="d-inline delete-teacher-form"
                                            onsubmit="return confirmDeleteTeacher(event, this)"
                                    >
                                        <input
                                                type="hidden"
                                                name="id"
                                                value="<?= (int) $teacher['id_teacher_mast'] ?>"
                                        >

                                        <button
                                                type="submit"
                                                class="btn btn-danger btn-sm"
                                        >
                                            <i class="bx bx-trash me-1"></i>
                                            حذف دبیر
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
    <script>
        function confirmDeleteTeacher(event, form) {
            event.preventDefault();
            Swal.fire({
                title: 'حذف دبیر',
                text: 'آیا از حذف این دبیر مطمئن هستید؟',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'بله، حذف شود',
                cancelButtonText: 'انصراف',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
            return false;
        }
    </script>
</section>