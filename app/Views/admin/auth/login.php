<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ورود مدیر | TeachLine</title>

    <link rel="stylesheet" href="<?= base_url('/assets/css/fonts.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/css/boxicons.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/css/admin-login.css') ?>">

</head>

<body>

<?php $flash = getFlash(); ?>

<div class="admin-login-wrapper">

    <div class="admin-login-container">

        <!-- Brand Panel -->

        <section class="admin-brand-panel">

            <div class="brand-content">

                <div class="brand-icon">
                    <i class="bx bx-shield-quarter"></i>
                </div>

                <div class="brand-title">
                    TeachLine
                </div>

                <p class="brand-subtitle">
                    مدیریت هوشمند پلتفرم آموزشی
                    <br>
                    همه چیز برای مدیریت بهتر، یکجا
                </p>

                <div class="brand-badge">
                    <i class="bx bx-lock-alt"></i>
                    پنل مدیریت امن
                </div>

            </div>

        </section>


        <!-- Login Panel -->

        <section class="admin-form-panel">

            <div class="login-content">

                <div class="login-heading">

                    <h1>
                        خوش آمدید 👋
                    </h1>

                    <p>
                        برای ورود به پنل مدیریت اطلاعات خود را وارد کنید.
                    </p>

                </div>

                <form
                        method="POST"
                        action="<?= base_url('/admin/login') ?>"
                >

                    <!-- Email -->

                    <div class="form-group">

                        <label
                                class="form-label-custom"
                                for="inputUsername"
                        >
                            ایمیل مدیر
                        </label>
                        <div class="input-wrapper">

                            <i class="bx bx-envelope"></i>

                            <input
                                    class="custom-input"
                                    name="email"
                                    id="inputUsername"
                                    type="email"
                                    value="<?= htmlspecialchars($_POST['email'] ?? '') ?>"
                                    autocomplete="email"
                                    placeholder="admin@example.com"
                            >

                        </div>

                    </div>


                    <!-- Password -->

                    <div class="form-group">

                        <label
                                class="form-label-custom"
                                for="inputPassword"
                        >
                            رمز عبور
                        </label>

                        <div class="input-wrapper">

                            <i class="bx bx-lock-alt"></i>

                            <input
                                    type="password"
                                    name="password"
                                    id="inputPassword"
                                    class="custom-input"
                                    dir="ltr"
                                    autocomplete="current-password"
                                    placeholder="••••••••"
                            >
                            <button
                                    type="button"
                                    class="password-toggle"
                                    id="passwordToggle"
                                    aria-label="نمایش رمز عبور"
                            >
                                <i class="bx bx-show"></i>
                            </button>

                        </div>

                    </div>


                    <?php if (!empty($error)): ?>

                        <div class="login-error">

                            <i class="bx bx-error-circle"></i>

                            <span>
                                <?= htmlspecialchars($error) ?>
                            </span>

                        </div>

                    <?php endif; ?>


                    <button
                            class="login-button"
                            type="submit"
                    >
                        ورود به پنل مدیریت
                    </button>

                </form>


                <div class="login-footer">
                    TeachLine Admin Panel
                </div>

            </div>

        </section>

    </div>

</div>

<script src="<?= base_url('/assets/js/sweetalert2.all.min.js') ?>"></script>

<?php require_once __DIR__ . '/../../partials/flash.php'; ?>

<script>

    const passwordInput = document.getElementById('inputPassword');
    const passwordToggle = document.getElementById('passwordToggle');

    passwordToggle.addEventListener('click', function () {

        const icon = this.querySelector('i');

        if (passwordInput.type === 'password') {

            passwordInput.type = 'text';

            icon.classList.remove('bx-show');
            icon.classList.add('bx-hide');

            this.setAttribute(
                'aria-label',
                'مخفی کردن رمز عبور'
            );

        } else {

            passwordInput.type = 'password';

            icon.classList.remove('bx-hide');
            icon.classList.add('bx-show');

            this.setAttribute(
                'aria-label',
                'نمایش رمز عبور'
            );

        }

    });

</script>

</body>

</html>