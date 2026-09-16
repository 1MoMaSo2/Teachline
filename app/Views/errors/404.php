<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <?php require_once __DIR__ . '/../partials/head.php'; ?>
</head>

<body>

<?php require_once __DIR__ . '/../partials/header.php'; ?>

<main class="container py-5">

    <div class="text-center py-5">

        <!-- **************** MAIN CONTENT START **************** -->
        <main>
            <section class="pt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <!-- Image -->
                            <img src="<?= asset('/images/element/error404.svg') ?>" class="h-200px h-md-400px mb-4" alt="">
                            <!-- Title -->
                            <h1 class="display-1 text-danger mb-0">404</h1>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- **************** MAIN CONTENT END **************** -->

    </div>

</main>

<?php require_once __DIR__ . '/../partials/footer.php'; ?>

</body>
</html>