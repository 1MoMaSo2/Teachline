<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <?php require_once __DIR__ . '/../partials/head.php'; ?>
</head>

<body>

<?php require_once __DIR__ . '/../partials/teacher-header.php'; ?>

<!-- ** MAIN CONTENT START ** -->
<main>

    <!-- =======================
    Teacher Profile Banner START -->
    <section class="pt-0">

        <div class="container-fluid px-0">
            <div class="bg-blue h-100px h-md-100px rounded-0"></div>
        </div>

        <div class="container mt-n4">
            <div class="row">

                <!-- Profile banner START -->
                <div class="col-12">

                    <div class="card bg-transparent card-body p-0">

                        <div class="row d-flex justify-content-between">

                            <!-- Teacher profile info -->
                            <div class="col d-md-flex justify-content-between align-items-center mt-4">

                                <div>
                                    <br>
                                    <br>

                                    <h1 class="my-1 fs-4">
                                        <i class="bi bi-patch-check-fill text-info small"></i>

                                        <?= htmlspecialchars($_SESSION['full_name'] ?? 'پنل مدرس') ?>
                                    </h1>
                                </div>

                            </div>

                        </div>

                        <!-- Mobile sidebar button -->
                        <div class="col-12 col-xl-3 d-flex justify-content-between align-items-center">

                            <a class="h6 mb-0 fw-bold d-xl-none" href="#">
                                منوی کاربری
                            </a>

                            <button
                                    class="btn btn-primary d-xl-none"
                                    type="button"
                                    data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasSidebar"
                                    aria-controls="offcanvasSidebar">

                                <i class="fas fa-sliders-h"></i>

                            </button>

                        </div>

                    </div>

                </div>
                <!-- Profile banner END -->

            </div>
        </div>

    </section>
    <!-- =======================
    Teacher Profile Banner END -->


    <!-- =======================
    Page content START -->
    <section class="pt-0">

        <div class="container">
            <div class="row">

                <!-- Teacher Sidebar -->
                <?php require_once __DIR__ . '/../partials/teacher-sidebar.php'; ?>

                <!-- Main content START -->
                <div class="col-xl-9">

                    <?= $content ?>

                </div>
                <!-- Main content END -->

            </div>
        </div>

    </section>
    <!-- =======================
    Page content END -->

</main>
<!-- ** MAIN CONTENT END ** -->


<?php require_once __DIR__ . '/../partials/flash.php'; ?>


<!-- Bootstrap JS -->
<script src="/teachline/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Template Functions -->
<script src="/teachline/assets/js/functions.js"></script>

<!-- SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>