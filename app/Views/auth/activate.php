<body>

<main>
    <section class="p-0 d-flex align-items-center position-relative overflow-hidden">

        <div class="container-fluid">

            <div class="row">

                <!-- Left -->
                <div class="col-12 col-lg-6 d-md-flex align-items-center justify-content-center bg-primary bg-opacity-10 vh-lg-100">

                    <div class="p-3 p-lg-5">

                        <div class="text-center">

                            <h2 class="mb-4 display-7">
                                فعال سازی حساب کاربری
                            </h2>

                            <p class="mb-0 h6 fw-light">
                                برای استفاده از امکانات TeachLine حساب خود را فعال کنید.
                            </p>

                        </div>

                        <img
                            src="<?= asset('images/element/16.svg') ?>"
                            class="mt-5"
                            alt="TeachLine"
                            style="width: 100%"
                        >

                    </div>

                </div>

                <!-- Right -->
                <div class="col-12 col-lg-6 m-auto">

                    <div class="row my-5">

                        <div class="col-sm-10 col-xl-8 m-auto">

                            <h1 class="fs-4">
                                فعال سازی حساب
                            </h1>

                            <p class="mb-4">
                                کد فعال سازی ارسال شده به ایمیل خود را وارد کنید.
                            </p>

                            <!-- Activation Form -->
                            <form method="get" action="<?= base_url('/activate') ?>">

                                <div class="mb-4">

                                    <label for="code" class="form-label">
                                        کد فعال سازی *
                                    </label>

                                    <div class="input-group input-group-lg">

                                        <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3">
                                            <i class="bi bi-shield-check"></i>
                                        </span>

                                        <input
                                            type="text"
                                            name="code"
                                            class="form-control border-0 bg-light rounded-end ps-1"
                                            placeholder="123456"
                                            id="code"
                                            inputmode="numeric"
                                            pattern="[0-9]{6}"
                                            maxlength="6"
                                            required
                                        >

                                    </div>

                                </div>

                                <div class="align-items-center mt-0">

                                    <div class="d-grid">

                                        <input
                                            class="btn btn-success-shadow mb-0"
                                            type="submit"
                                            value="فعال سازی حساب"
                                        >

                                    </div>

                                </div>

                            </form>

                            <!-- Login -->
                            <div class="mt-4 text-center">

                                <span>
                                    حساب شما فعال شده است؟
                                    <a href="<?= base_url('/login') ?>">
                                        ورود به حساب
                                    </a>
                                </span>

                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </div>

    </section>
</main>

<!-- Back to top -->
<div class="back-top">
    <i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i>
</div>

<!-- Bootstrap JS -->
<script src="<?= asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>

<!-- Template Functions -->
<script src="<?= asset('js/functions.js') ?>"></script>

</body>