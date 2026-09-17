<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <?php require_once __DIR__ . '/../partials/admin-head.php'; ?>
</head>

<body class="nav-fixed">

<?php require_once __DIR__ . '/../partials/admin-header.php'; ?>

<div id="layoutSidenav">

    <?php require_once __DIR__ . '/../partials/admin-sidebar.php'; ?>

    <div id="layoutSidenav_content">

        <main class="is-rtl">
            <?= $content ?? '' ?>
        </main>

    </div>

</div>

<script src="<?= base_url('/assets/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('/assets/js/scripts.js') ?>"></script>
<script src="<?= base_url('/assets/js/jquery.js') ?>"></script>
<script src="<?= base_url('/assets/js/simple-datatables@latest.js') ?>"></script>
<script src="<?= base_url('/assets/js/simple-datatables@demo.js') ?>"></script>
<script src="<?= base_url('/assets/js/persian-date.js') ?>"></script>
<script src="<?= base_url('/assets/js/persian-datepicker.js') ?>"></script>

</body>

</html>