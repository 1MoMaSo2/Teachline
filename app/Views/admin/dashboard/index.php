<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">

    <div class="container-xl px-4">

        <div class="page-header-content pt-4">

            <div class="row align-items-center justify-content-between">

                <div class="col-auto mt-4">

                    <h1 class="page-header-title">

                        <div class="page-header-icon">
                            <i class="bx bx-pulse"></i>
                        </div>

                        داشبورد مدیریتی

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

    <div class="row">

        <!-- Courses -->
        <div class="col-lg-6 col-xl-3 mb-5">

            <div class="card bg-black text-white h-100">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div class="me-3">

                            <div class="text-white-75">
                                <p style="font-size: 22px">
                                    <?= (int) ($stats['courses'] ?? 0) ?>
                                </p>
                            </div>

                            <div class="text-lg fw-bold">
                                دوره آموزشی
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- Videos -->
        <div class="col-lg-6 col-xl-3 mb-5">

            <div class="card bg-warning text-white h-100">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div class="me-3">

                            <div class="text-white-75 small">
                                <p style="font-size: 22px">
                                    <?= (int) ($stats['videos'] ?? 0) ?>
                                </p>
                            </div>

                            <div class="text-lg fw-bold">
                                ویدیو آموزشی
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
        <!-- Teachers -->
        <div class="col-lg-6 col-xl-3 mb-5">

            <div class="card bg-success text-white h-100">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div class="me-3">

                            <div class="text-white-75 small">
                                <p style="font-size: 22px">
                                    <?= (int) ($stats['teachers'] ?? 0) ?>
                                </p>
                            </div>

                            <div class="text-lg fw-bold">
                                دبیر
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- Students -->
        <div class="col-lg-6 col-xl-3 mb-5">

            <div class="card bg-danger text-white h-100">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div class="me-3">

                            <div class="text-white-75 small">
                                <p style="font-size: 22px">
                                    <?= (int) ($stats['students'] ?? 0) ?>
                                </p>
                            </div>

                            <div class="text-lg fw-bold">
                                هنرجو
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>