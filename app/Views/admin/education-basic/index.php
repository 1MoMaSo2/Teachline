<div class="container-xl px-4 mt-4">

    <div class="page-header mb-4">
        <div class="page-header-content">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto">
                    <h1 class="page-header-title">
                        <div class="page-header-icon">
                            <i class="bx bx-book"></i>
                        </div>
                        مدیریت پایه‌های تحصیلی
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <!-- Add Education Basic -->
        <div class="col-xl-4 mb-4">

            <div class="card shadow-sm">

                <div class="card-header">
                    افزودن پایه تحصیلی
                </div>

                <div class="card-body">

                    <form
                        action="<?= base_url('/admin/education-basic/store') ?>"
                        method="POST"
                    >

                        <div class="mb-3">

                            <label
                                for="educationBasicName"
                                class="form-label"
                            >
                                نام پایه تحصیلی
                            </label>

                            <input
                                type="text"
                                name="name"
                                id="educationBasicName"
                                class="form-control"
                                placeholder="مثلاً دهم"
                            >

                        </div>

                        <button
                            type="submit"
                            class="btn btn-primary"
                        >
                            <i class="bx bx-plus"></i>
                            افزودن
                        </button>

                    </form>

                </div>

            </div>

        </div>

        <!-- Education Basics List -->
        <div class="col-xl-8 mb-4">

            <div class="card shadow-sm">

                <div class="card-header">
                    پایه‌های تحصیلی
                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered align-middle">

                            <thead>

                            <tr>
                                <th>#</th>
                                <th>نام پایه تحصیلی</th>
                                <th class="text-center">عملیات</th>
                            </tr>

                            </thead>

                            <tbody>

                            <?php if (empty($educationBasics)): ?>

                            <tr>
                                <td
                                        colspan="3"
                                        class="text-center"
                                >
                                    هنوز پایه تحصیلی ثبت نشده است.
                                </td>

                            </tr>

                            <?php else: ?>

                                <?php foreach ($educationBasics as $index => $educationBasic): ?>

                                    <tr>

                                        <td>
                                            <?= $index + 1 ?>
                                        </td>

                                        <td>
                                            <?= htmlspecialchars(
                                                    $educationBasic['education_basic_name_mast']
                                            ) ?>
                                        </td>

                                        <td class="text-center">

                                            <form
                                                    action="<?= base_url('/admin/education-basic/delete') ?>"
                                                    method="POST"
                                                    class="d-inline"
                                            >

                                                <input
                                                        type="hidden"
                                                        name="id"
                                                        value="<?= (int) $educationBasic['id_education_basic_mast'] ?>"
                                                >

                                                <button
                                                        type="submit"
                                                        class="btn btn-sm btn-danger"
                                                >
                                                    <i class="bx bx-trash"></i>
                                                    حذف
                                                </button>

                                            </form>

                                        </td>

                                    </tr>

                                <?php endforeach; ?>

                            <?php endif; ?>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>