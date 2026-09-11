<body>
<!-- Main Content -->
<main>
    <section class="p-0 d-flex align-items-center position-relative overflow-hidden">

        <div class="container-fluid">
            <div class="row">

                <!-- Left -->
                <div class="col-12 col-lg-6 d-md-flex align-items-center justify-content-center bg-primary bg-opacity-10 vh-lg-100">

                    <div class="p-3 p-lg-5">

                        <div class="text-center">
                            <h2 class="mb-4 display-7">
                                خوش آمدید به مدرسه آنلاین TeachLine
                            </h2>

                            <p class="mb-0 h6 fw-light">
                                بیایید امروز چیز جدیدی یاد بگیریم !
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
                                ورود به حساب کاربری
                            </h1>

                            <p class="mb-4">
                                از دیدن شما خوشحالم ! لطفا با ایمیل و رمزعبور خود وارد شوید.
                            </p>

                            <!-- Form -->
                            <form method="post">

                                <!-- Email -->
                                <div class="mb-4">

                                    <label for="email" class="form-label">
                                        ایمیل *
                                    </label>

                                    <div class="input-group input-group-lg">

                                        <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3">
                                            <i class="bi bi-envelope-fill"></i>
                                        </span>

                                        <input
                                            type="email"
                                            name="email"
                                            class="form-control border-0 bg-light rounded-end ps-1"
                                            placeholder="***@gmail.com"
                                            id="email"
                                            required
                                        >

                                    </div>

                                </div>

                                <!-- Password -->
                                <div class="mb-4">

                                    <label for="password" class="form-label">
                                        رمز عبور
                                    </label>

                                    <div class="input-group input-group-lg">

                                        <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3">
                                            <i class="fas fa-lock"></i>
                                        </span>

                                        <input
                                            type="password"
                                            name="password"
                                            class="form-control border-0 bg-light rounded-end ps-1"
                                            placeholder="****"
                                            id="password"
                                            pattern=".{8,}"
                                            title="حداقل 8 کاراکتر"
                                            required
                                        >

                                        <button
                                            type="button"
                                            class="form-control border-0 w-50px"
                                            id="togglePassword"
                                        >
                                            نمایش
                                        </button>

                                    </div>

                                </div>

                                <!-- Remember Me -->
                                <div class="mb-4 d-flex justify-content-between">

                                    <div class="form-check">

                                        <input
                                            type="checkbox"
                                            name="rem"
                                            class="form-check-input"
                                            id="remember"
                                        >

                                        <label
                                            class="form-check-label"
                                            for="remember"
                                        >
                                            مرا به خاطر بسپار
                                        </label>

                                    </div>

                                </div>

                                <!-- Submit -->
                                <div class="align-items-center mt-0">

                                    <div class="d-grid">

                                        <input
                                            class="btn btn-success-shadow mb-0"
                                            name="submit"
                                            type="submit"
                                            value="ورود"
                                        >

                                    </div>

                                </div>

                            </form>

                            <!-- Sign Up -->
                            <div class="mt-4 text-center">

                                <span>
                                    حساب کاربری ندارید ؟
                                    <a href="<?= base_url('sign-up.php') ?>">
                                        ثبت نام
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

<!-- Password Toggle -->
<script>

    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');

    togglePassword.addEventListener('click', function () {

        const type =
            passwordInput.getAttribute('type') === 'password'
                ? 'text'
                : 'password';

        passwordInput.setAttribute('type', type);

        this.textContent =
            type === 'password'
                ? 'نمایش'
                : 'پنهان کردن';

    });

</script>

</body>