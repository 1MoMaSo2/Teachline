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
                                به TeachLine بپیوندید
                            </h2>

                            <p class="mb-0 h6 fw-light">
                                حساب کاربری خود را بسازید و یادگیری را شروع کنید!
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
                                ثبت نام
                            </h1>

                            <p class="mb-4">
                                اطلاعات خود را وارد کنید تا حساب کاربری شما ساخته شود.
                            </p>


                            <!-- Register Form -->
                            <form method="post">

                                <!-- Full Name -->
                                <div class="mb-4">

                                    <label for="full_name" class="form-label">
                                        نام و نام خانوادگی *
                                    </label>

                                    <div class="input-group input-group-lg">

                                        <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3">
                                            <i class="bi bi-person-fill"></i>
                                        </span>

                                        <input
                                            type="text"
                                            name="full_name"
                                            class="form-control border-0 bg-light rounded-end ps-1"
                                            id="full_name"
                                            placeholder="نام و نام خانوادگی"
                                            required
                                        >

                                    </div>

                                </div>


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
                                            id="email"
                                            placeholder="***@gmail.com"
                                            required
                                        >

                                    </div>

                                </div>
                                <!-- Password -->
                                <div class="mb-4">

                                    <label for="password" class="form-label">
                                        رمز عبور *
                                    </label>

                                    <div class="input-group input-group-lg">

                                        <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3">
                                            <i class="fas fa-lock"></i>
                                        </span>

                                        <input
                                            type="password"
                                            name="password"
                                            class="form-control border-0 bg-light rounded-end ps-1"
                                            id="password"
                                            placeholder="حداقل 8 کاراکتر"
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


                                <!-- Phone -->
                                <div class="mb-4">

                                    <label for="phone_number" class="form-label">
                                        شماره موبایل *
                                    </label>

                                    <div class="input-group input-group-lg">

                                        <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3">
                                            <i class="bi bi-phone-fill"></i>
                                        </span>

                                        <input
                                            type="tel"
                                            name="phone_number"
                                            class="form-control border-0 bg-light rounded-end ps-1"
                                            id="phone_number"
                                            placeholder="09123456789"
                                            pattern="[0-9]{11}"
                                            title="شماره موبایل باید 11 رقم باشد"
                                            required
                                        >

                                    </div>

                                </div>


                                <!-- Education -->
                                <div class="mb-4">

                                    <label for="education_basic" class="form-label">
                                        مقطع تحصیلی *
                                    </label>

                                    <select
                                        name="education_basic"
                                        id="education_basic"
                                        class="form-select form-select-lg border-0 bg-light"
                                        required
                                    >

                                        <option value="">
                                            انتخاب مقطع تحصیلی
                                        </option>

                                        <option value="دهم">
                                            دهم
                                        </option>
                                        <option value="یازدهم">
                                            یازدهم
                                        </option>

                                        <option value="دوازدهم">
                                            دوازدهم
                                        </option>

                                    </select>

                                </div>


                                <!-- Field Study -->
                                <div class="mb-4">

                                    <label for="field_study" class="form-label">
                                        رشته تحصیلی *
                                    </label>

                                    <select
                                        name="field_study"
                                        id="field_study"
                                        class="form-select form-select-lg border-0 bg-light"
                                        required
                                    >

                                        <option value="">
                                            انتخاب رشته تحصیلی
                                        </option>

                                        <option value="کامپیوتر">
                                            کامپیوتر
                                        </option>

                                        <option value="برق">
                                            برق
                                        </option>

                                        <option value="شیمی">
                                            شیمی
                                        </option>

                                        <option value="صنایع فلز">
                                            صنایع فلز
                                        </option>

                                        <option value="مکانیک">
                                            مکانیک
                                        </option>

                                        <option value="آبیاری گیاهان دریایی">
                                            آبیاری گیاهان دریایی
                                        </option>

                                    </select>

                                </div>


                                <!-- Submit -->
                                <div class="align-items-center mt-0">

                                    <div class="d-grid">

                                        <input
                                            class="btn btn-success-shadow mb-0"
                                            name="submit"
                                            type="submit"
                                            value="ثبت نام"
                                        >

                                    </div>

                                </div>

                            </form>


                            <!-- Login -->
                            <div class="mt-4 text-center">

                                <span>
                                    قبلاً حساب کاربری ساخته‌اید؟
                                    <a href="<?= base_url('/login') ?>">
                                        ورود
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