<header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4 is-rtl">

    <div class="container-fluid px-4">

        <div class="page-header-content">

            <div class="row align-items-center justify-content-between pt-3">

                <div class="col-auto mb-3">

                    <h1 class="page-header-title">

                        <div class="page-header-icon">
                            <i class="bx bx-book"></i>
                        </div>

                        لیست رشته تحصیلی

                    </h1>

                </div>

                <div class="col-lg-2 col-md-6">

                    <div class="mb-3">

                        <button
                                type="button"
                                class="btn btn-primary"
                                data-bs-toggle="modal"
                                data-bs-target="#backDropModal"
                        >
                            افزودن رشته تحصیلی
                        </button>


                        <div
                                class="modal fade"
                                id="backDropModal"
                                data-bs-backdrop="static"
                                tabindex="-1"
                        >

                            <div class="modal-dialog">

                                <form
                                        method="POST"
                                        action="<?= base_url('/admin/field-study/store') ?>"
                                        class="modal-content"
                                >

                                    <div class="modal-header">

                                        <h5
                                                class="modal-title"
                                                id="backDropModalTitle"
                                        >
                                            رشته تحصیلی
                                        </h5>

                                        <button
                                                type="button"
                                                class="btn-close"
                                                data-bs-dismiss="modal"
                                                aria-label="Close"
                                        ></button>

                                    </div>


                                    <div class="modal-body">

                                        <div class="row g-2 mb-4">

                                            <div class="col">

                                                <label
                                                        for="nameBackdrop"
                                                        class="form-label"
                                                >
                                                    نام رشته تحصیلی
                                                </label>

                                                <input
                                                        type="text"
                                                        id="nameBackdrop"
                                                        class="form-control"
                                                        placeholder="رشته تحصیلی را وارد کنید"
                                                        name="field_study"
                                                >

                                            </div>

                                        </div>

                                    </div>


                                    <div class="modal-footer">

                                        <button
                                                type="button"
                                                class="btn btn-label-secondary"
                                                data-bs-dismiss="modal"
                                        >
                                            بستن
                                        </button>
                                        <button
                                                type="submit"
                                                class="btn btn-primary"
                                        >
                                            افزودن
                                        </button>

                                    </div>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</header>


<div class="container-fluid px-4 is-rtl">

    <div class="card">

        <div class="card-body">

            <table id="datatablesSimple">

                <thead>

                <tr>

                    <th>ردیف</th>

                    <th>رشته تحصیلی</th>

                    <th>عملیات</th>

                </tr>

                </thead>


                <tbody>

                <?php foreach ($fieldStudies as $index => $fieldStudy): ?>

                    <tr>

                        <td>

                            <div class="d-flex align-items-center">

                                <?= $index + 1 ?>

                            </div>

                        </td>


                        <td>

                            <?= htmlspecialchars(
                                    $fieldStudy['field_study_name_mast'],
                                    ENT_QUOTES,
                                    'UTF-8'
                            ) ?>
                        </td>


                        <td>

                            <a
                                    href="#"
                                    class="btn btn-datatable btn-icon btn-transparent-dark"
                                    title="حذف"
                                    onclick="confirmDelete(<?= (int)$fieldStudy['id_field_study_mast'] ?>); return false;"
                            >
                                <i class="bx bx-trash"></i>
                            </a>

                        </td>

                    </tr>

                <?php endforeach; ?>

                </tbody>

            </table>

        </div>

    </div>

</div>


<script>
    function confirmDelete(id) {
        Swal.fire({
            title: "آیا مطمئنی پاک شود ؟",
            icon: "info",
            showCancelButton: true,
            cancelButtonText: "نه",
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "آره"
        }).then((result) => {
            if (result.isConfirmed) {
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = '<?= base_url('/admin/field-study/delete') ?>';
                const input = document.createElement('input');
                input.type = 'hidden';
                input.name = 'id';
                input.value = id;
                form.appendChild(input);
                document.body.appendChild(form);
                form.submit();
            }
        });
    }
</script>
