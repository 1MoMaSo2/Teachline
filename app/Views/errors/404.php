<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <?php require_once __DIR__ . '/../partials/head.php'; ?>
</head>

<body>

<?php require_once __DIR__ . '/../partials/header.php'; ?>

<main class="container py-5">

    <section class="pt-5">
        <div class="container">

            <div class="row">
                <div class="col-12 text-center">

                    <img
                            src="<?= asset('/images/element/error404.svg') ?>"
                            class="h-200px h-md-400px mb-4"
                            alt="صفحه پیدا نشد"
                    >

                    <h1 class="display-1 text-danger mb-0">
                        404
                    </h1>

                    <h2 class="mb-3">
                        صفحه مورد نظر پیدا نشد
                    </h2>

                    <p class="text-muted mb-4">
                        آدرس وارد شده وجود ندارد یا صفحه مورد نظر حذف شده است.
                    </p>

                    <a href="<?= base_url('/') ?>" class="btn btn-primary">
                        بازگشت به صفحه اصلی
                    </a>

                </div>
            </div>

        </div>
    </section>

</main>

<?php require_once __DIR__ . '/../partials/footer.php'; ?>

</body>
</html>