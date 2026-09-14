<?php
$errors = $errors ?? [];
$old = $old ?? [];
?>

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
                                به جمع معلمان TeachLine بپیوندید
                            </h2>

                            <p class="mb-0 h6 fw-light">
                                اطلاعات خود را وارد کنید تا درخواست تدریس شما ثبت شود.
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
                                ثبت نام مدرس
                            </h1>

                            <p class="mb-4">
                                اطلاعات خود را وارد کنید تا درخواست ثبت‌نام شما ارسال شود.
                            </p>


                            <form method="post" novalidate>

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
                                                value="<?= htmlspecialchars($old['full_name'] ?? '') ?>"
                                                required
                                        >

                                    </div>

                                    <?php if (isset($errors['full_name'])): ?>
                                        <div class="text-danger small mt-2">
                                            <?= htmlspecialchars($errors['full_name']) ?>
                                        </div>
                                    <?php endif; ?>

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
                                                value="<?= htmlspecialchars($old['email'] ?? '') ?>"
                                                required
                                        >

                                    </div>

                                    <?php if (isset($errors['email'])): ?>
                                        <div class="text-danger small mt-2">
                                            <?= htmlspecialchars($errors['email']) ?>
                                        </div>
                                    <?php endif; ?>

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
                                                required>

                                        <button
                                                type="button"
                                                class="form-control border-0 w-50px"
                                                id="togglePassword"
                                        >
                                            نمایش
                                        </button>

                                    </div>

                                    <?php if (isset($errors['password'])): ?>
                                        <div class="text-danger small mt-2">
                                            <?= htmlspecialchars($errors['password']) ?>
                                        </div>
                                    <?php endif; ?>

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
                                                value="<?= htmlspecialchars($old['phone_number'] ?? '') ?>"
                                                required
                                        >

                                    </div>

                                    <?php if (isset($errors['phone_number'])): ?>
                                        <div class="text-danger small mt-2">
                                            <?= htmlspecialchars($errors['phone_number']) ?>
                                        </div>
                                    <?php endif; ?>

                                </div>


                                <!-- Gender -->
                                <div class="mb-4">

                                    <label for="gender" class="form-label">
                                        جنسیت *
                                    </label>

                                    <select
                                            name="gender"
                                            id="gender"
                                            class="form-select form-select-lg border-0 bg-light"
                                            required
                                    >

                                        <option value="">
                                            انتخاب جنسیت
                                        </option>

                                        <option value="مرد"
                                                <?= (($old['gender'] ?? '') === 'مرد') ? 'selected' : '' ?>>
                                            مرد
                                        </option>

                                        <option value="زن"
                                                <?= (($old['gender'] ?? '') === 'زن') ? 'selected' : '' ?>>
                                            زن
                                        </option>

                                    </select>

                                    <?php if (isset($errors['gender'])): ?>
                                        <div class="text-danger small mt-2">
                                            <?= htmlspecialchars($errors['gender']) ?>
                                        </div>
                                    <?php endif; ?>

                                </div>

<!--                                 Degree -->
                                <div class="mb-4">

                                    <label for="degree" class="form-label">
                                        مدرک تحصیلی *
                                    </label>

                                    <div class="input-group input-group-lg">

        <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3">
            <i class="bi bi-mortarboard-fill"></i>
        </span>

                                        <input
                                                type="text"
                                                name="degree"
                                                class="form-control border-0 bg-light rounded-end ps-1"
                                                id="degree"
                                                placeholder="مثلاً کارشناسی"
                                                value="<?= htmlspecialchars($old['degree'] ?? '') ?>"
                                                required
                                        >

                                    </div>

                                    <?php if (isset($errors['degree'])): ?>
                                        <div class="text-danger small mt-2">
                                            <?= htmlspecialchars($errors['degree']) ?>
                                        </div>
                                    <?php endif; ?>

                                </div>


                                <!-- Field Study -->
                                <div class="mb-4">

                                    <label for="field_study" class="form-label">
                                        رشته تحصیلی *
                                    </label>

                                    <div class="input-group input-group-lg">

        <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3">
            <i class="bi bi-book-fill"></i>
        </span>

                                        <input
                                                type="text"
                                                name="field_study"
                                                class="form-control border-0 bg-light rounded-end ps-1"
                                                id="field_study"
                                                placeholder="رشته تحصیلی"
                                                value="<?= htmlspecialchars($old['field_study'] ?? '') ?>"
                                                required
                                        >

                                    </div>

                                    <?php if (isset($errors['field_study'])): ?>
                                        <div class="text-danger small mt-2">
                                            <?= htmlspecialchars($errors['field_study']) ?>
                                        </div>
                                    <?php endif; ?>

                                </div>


                                <!-- Teaching History -->
                                <div class="mb-4">

                                    <label for="teaching_history" class="form-label">
                                        سابقه تدریس *
                                    </label>

                                    <div class="input-group input-group-lg">

        <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3">
            <i class="bi bi-person-workspace"></i>
        </span>

                                        <input
                                                type="text"
                                                name="teaching_history"
                                                class="form-control border-0 bg-light rounded-end ps-1"
                                                id="teaching_history"
                                                placeholder="مثلاً 5 سال"
                                                value="<?= htmlspecialchars($old['teaching_history'] ?? '') ?>"
                                                required
                                        >

                                    </div>

                                    <?php if (isset($errors['teaching_history'])): ?>
                                        <div class="text-danger small mt-2">
                                            <?= htmlspecialchars($errors['teaching_history']) ?>
                                        </div>
                                    <?php endif; ?>

                                </div>


                                <!-- Submit -->
                                <div class="d-grid">
                                    <input
                                            class="btn btn-success-shadow mb-0"
                                            name="submit"
                                            type="submit"
                                            value="ثبت درخواست">
                                </div>

                            </form>


                            <div class="mt-4 text-center">

                                <span>
                                    حساب کاربری دارید؟
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