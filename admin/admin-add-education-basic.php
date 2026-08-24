<!DOCTYPE html>
<html lang="fa">

<?php
include "../include/database/connect.php";
include "include/config/aouth.php";

global $connection;
$success_add = null;
$error_add = null;
$num = 1;

if (isset($_POST['submit'])) {

    $array = array(
        'education_basic' => $_POST['education_basic']);

    if (!empty($array['education_basic'])) {

        $send = $connection->prepare("INSERT INTO education_basic_mast SET education_basic_name_mast=?");
        $send->bindValue(1, $array['education_basic']);
        $send->execute();

        $success_add = true;
    } else {
        $error_add = true;
    }
}

if (isset($_GET['id'])) {

    $array = array(
        'id' => intval($_GET['id']));

    $send = $connection->prepare("DELETE FROM education_basic_mast WHERE id_education_basic_mast=?");
    $send->bindValue(1, $array['id']);

    if ($send->execute()) {
        header("Location: admin-add-education-basic.php");
    }
}

$sel = $connection->prepare("SELECT * FROM education_basic_mast ORDER BY id_education_basic_mast DESC");
$sel->execute();
$education_basic = $sel->fetchAll(PDO::FETCH_ASSOC);

?>

<?php
include "include/layout/head.php"
?>

<body class="nav-fixed">

<?php
include "include/layout/header.php"
?>

<div id="layoutSidenav">
    <div id="layoutSidenav_nav">

        <?php
        include "include/layout/sidebar.php"
        ?>

    </div>

    <div id="layoutSidenav_content">
        <main>
            <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4 is-rtl">
                <div class="container-fluid px-4">
                    <div class="page-header-content">
                        <div class="row align-items-center justify-content-between pt-3">
                            <div class="col-auto mb-3">
                                <h1 class="page-header-title">
                                    <div class="page-header-icon">
                                        <i class="bx bx-book"></i>
                                    </div>
                                    لیست پایه تحصیلی
                                </h1>
                            </div>
                            <!-- کلیک در پس زمینه -->
                            <div class="col-lg-2 col-md-6">
                                <div class="mb-3">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#backDropModal">
                                        افزودن پایه تحصیلی
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
                                        <div class="modal-dialog">
                                            <form method="post" class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="backDropModalTitle">افزودن پایه تحصیلی</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>

                                                <div class="modal-body">
                                                    <div class="row g-2  mb-4">
                                                        <div class="col">
                                                            <label for="nameBackdrop" class="form-label">پایه تحصیلی</label>
                                                            <input type="text" id="nameBackdrop" class="form-control"
                                                                   placeholder="پایه تحصیلی را وارد کنید" name="education_basic">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-label-secondary"
                                                            data-bs-dismiss="modal">
                                                        بستن
                                                    </button>
                                                    <input type="submit" class="btn btn-primary" name="submit" value="افزودن">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="container-fluid px-4 is-rtl">
                <div class="card">
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                            <tr>
                                <th>ردیف</th>
                                <th>پایه تحصیلی</th>
                                <th>عملیات</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php foreach ($education_basic as $education_basics) { ?>

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <?php echo $num++ ?>
                                    </div>
                                </td>
                                <td><?php echo htmlentities($education_basics['education_basic_name_mast']); ?></td>
                                <td>
                                    <a href="#"
                                       class="btn btn-datatable btn-icon btn-transparent-dark"
                                       title="حذف"
                                       onclick="confirmDelete('<?php echo $education_basics['id_education_basic_mast']; ?>'); return false;"><i
                                                class="bx bx-trash"></i></a>

                                </td>
                            </tr>

                            <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>


<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/scripts.js"></script>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/simple-datatables@latest.js"></script>
<script src="assets/js/simple-datatables@demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if ($success_add) { ?>
    '<script>
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });
        Toast.fire({
            icon: "success",
            title: "پایه تحصیلی با موفقیت اضافه گردید"
        });
    </script>'
<?php } ?>

<?php if ($error_add) { ?>
    '<script>
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });
        Toast.fire({
            icon: "warning",
            title: "لطفا از پر بودن مقادیر خواسته شده اطمینان حاصل بفرمایید"
        });
    </script>'
<?php } ?>

<script>
    function confirmDelete(id) {
        Swal.fire({
            title: "آیا مطمئنی پاک شود ؟",
            icon: "info",
            showCancelButton: true,
            cancelButtonText: "نه",
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "آره"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "admin-add-education-basic.php?id=" + id;

                Swal.fire({
                    title: "حذف شد",
                    text: "Your file has been deleted.",
                    icon: "success",
                });
            }
        });
    }
</script>

</body>

</html>