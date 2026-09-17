<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <?php require_once __DIR__ . '/../../partials/head.php'; ?>

    <title>ورود مدیر | TeachLine</title>
</head>

<body>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">

            <div class="card shadow-sm border-0">
                <div class="card-body p-4">

                    <div class="text-center mb-4">
                        <h3 class="mb-2">ورود مدیر</h3>
                        <p class="text-muted mb-0">
                            ورود به پنل مدیریت TeachLine
                        </p>
                    </div>

                    <?php if (!empty($error)): ?>
                        <div class="alert alert-danger" role="alert">
                            <?= htmlspecialchars($error) ?>
                        </div>
                    <?php endif; ?>

                    <form method="POST" action="<?= base_url('/admin/login') ?>">

                        <div class="mb-3">
                            <label for="email" class="form-label">
                                ایمیل
                            </label>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                class="form-control"
                                value="<?= htmlspecialchars($_POST['email'] ?? '') ?>"
                                required
                            >
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">
                                رمز عبور
                            </label>

                            <input
                                type="password"
                                id="password"
                                name="password"
                                class="form-control"
                                required
                            >
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            ورود
                        </button>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>