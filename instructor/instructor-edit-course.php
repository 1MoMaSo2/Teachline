<!DOCTYPE html>
<html lang="fa" dir="rtl">

<?php
include "../include/database/connect.php";
include "include/config/aouth.php";
global $connection;

$success_up = null;
$error_up = null;

if (isset($_POST['submit'])) {

    $array = array(
        'name_course' => $_POST['name_course'],
        'full_name_teacher' => $_SESSION['full_name_teacher'],
        'description' => $_POST['description'],
        'tag' => $_POST['tag'],
        'education_basic' => $_POST['education_basic'] ?? null,
        'field_study' => $_POST['field_study'] ?? null,
        'type_book' => $_POST['type_book'] ?? null,
        'name_book' => $_POST['name_book'],
        'lesson' => $_POST['lesson'],
        'id' => $_GET['id']);

    if (!empty($array['name_course']) && !empty($array['description']) && !empty($array['tag']) && !empty($array['education_basic']) && !empty($array['field_study']) && !empty($array['type_book']) && !empty($array['name_book']) && !empty($array['lesson'])) {

        $send = $connection->prepare("UPDATE training_courses_mast SET training_courses_name_mast=? , training_courses_teacher_mast=? , training_courses_description_mast=? , training_courses_tag_mast=? , training_courses_education_basic_mast=? , training_courses_field_study_mast=? , training_courses_type_book_mast=? , training_courses_name_book_mast=? , training_courses_lesson_mast=? , training_courses_date_update_course_mast=? WHERE id_training_courses_mast=?");
        $send->bindValue(1, $array['name_course']);
        $send->bindValue(2, $_SESSION['full_name_teacher']);
        $send->bindValue(3, $array['description']);
        $send->bindValue(4, $array['tag']);
        $send->bindValue(5, $array['education_basic']);
        $send->bindValue(6, $array['field_study']);
        $send->bindValue(7, $array['type_book']);
        $send->bindValue(8, $array['name_book']);
        $send->bindValue(9, $array['lesson']);
        $send->bindValue(10, time());
        $send->bindValue(11, $array['id']);
        $send->execute();
        $success_up = true;
    } else {
        $error_up = true;
    }
}

$array = array(
    'id' => $_GET['id']);

$sel = $connection->prepare("SELECT * FROM training_courses_mast WHERE id_training_courses_mast=?");
$sel->bindValue(1, $array['id']);
$sel->execute();
$training_course = $sel->fetch(PDO::FETCH_ASSOC);

$sel = $connection->prepare("SELECT * FROM education_basic_mast");
$sel->execute();
$education_basic = $sel->fetchAll(PDO::FETCH_ASSOC);

$sel = $connection->prepare("SELECT * FROM field_study_mast");
$sel->execute();
$field_study = $sel->fetchAll(PDO::FETCH_ASSOC);

$sel = $connection->prepare("SELECT * FROM type_book_mast");
$sel->execute();
$type_book = $sel->fetchAll(PDO::FETCH_ASSOC);

$sel = $connection->prepare("SELECT * FROM teacher_mast");
$sel->execute();
$teacher = $sel->fetchAll(PDO::FETCH_ASSOC);

?>


<?php
include "include/layout/head.php";
?>

<body>

<?php
include "include/layout/header.php";
?>

<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
    Page Banner START -->
    <section class="py-0 bg-blue h-md-100px align-items-center d-flex h-200px rounded-0">
        <!-- Main banner background image -->
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Title -->
                    <h2 class="text-white">ویرایش دوره آموزشی</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Page Banner END -->

    <!-- =======================
    Steps START -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <!-- Content -->
                    <p class="text-center">لطفا جهت ویرایش دوره از انتخاب مشخصات لازم اطمینان حاصل بفرمایید</p>
                </div>
            </div>

            <div class="card bg-transparent border rounded-5 mb-4">
                <div id="stepper" class="bs-stepper stepper-outline">
                    <br>
                    <form method="post">
                        <div style="margin-right: 10% ; margin-left: 10%" class="mb-4">
                            <label for="exampleInput" class="form-label">نام دوره آموزشی</label>
                            <div class="input-group input-group-lg">
                                <input type="text" name="name_course"
                                       class="form-control border-0 bg-light rounded-end ps-1"
                                       id="exampleInput" pattern=".{0,30}" title="تا 30 کاراکتر"
                                       value="<?php echo $training_course['training_courses_name_mast']; ?>">
                            </div>
                        </div style="margin-right: 15px">

                        <div style="margin-right: 11.5% ; width: 77%" class="mb-4">
                            <label for="exampleInput" class="form-label">توضیحات دوره آموزشی</label>
                            <div class="centered">
                                <div class="row row-editor">
                                    <textarea name="description" id="open-source-plugins">
                                        <?php echo $training_course['training_courses_description_mast']; ?>
                                    </textarea>
                                </div>
                            </div>
                        </div>

                        <div style="margin-right: 10% ; margin-left: 10%" class="mb-4">
                            <label for="exampleInput" class="form-label">برچسب های دوره آموزشی</label>
                            <div class="input-group input-group-lg">
                                <input type="text" name="tag" class="form-control border-0 bg-light rounded-end ps-1"
                                       id="exampleInput"
                                       value="<?php echo $training_course['training_courses_tag_mast']; ?>">
                            </div>
                            <p style="font-size: 10px">برای جدا کردن برچسب ها از یکدیگر لطفا از , کاما استفاده کنید</p>
                        </div>

                        <div style="margin-right: 10% ; margin-left: 10%" class="mb-4">
                            <label for="inputPassword5" class="form-label">انتخاب پایه تحصیلی</label>
                            <select name="education_basic" class="form-select form-select-lg mb-3" aria-label="Default select example">
                                <?php foreach ($education_basic as $education_basics) { ?>
                                    <option style="direction: rtl ;text-align: right" value="<?php echo $education_basics['education_basic_name_mast']; ?>"
                                        <?php echo ($education_basics['education_basic_name_mast'] == $training_course['training_courses_education_basic_mast']) ? 'selected' : ''; ?>>
                                        <?php echo $education_basics['education_basic_name_mast']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>

                        <div style="margin-right: 10% ; margin-left: 10%" class="mb-4">
                            <label for="inputPassword5" class="form-label">انتخاب رشته تحصیلی</label>
                            <select name="field_study" class="form-select form-select-lg mb-3" aria-label="Default select example">
                                <option style="direction: rtl ;text-align: right">همه رشته ها</option>
                                <option style="direction: rtl ;text-align: right">ویژه کنکوری ها</option>
                                <?php foreach ($field_study as $field_studys) { ?>
                                    <option style="direction: rtl ;text-align: right" value="<?php echo $field_studys['field_study_name_mast']; ?>"
                                        <?php echo ($field_studys['field_study_name_mast'] == $training_course['training_courses_field_study_mast']) ? 'selected' : ''; ?>>
                                        <?php echo $field_studys['field_study_name_mast']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>

                        <div style="margin-right: 10% ; margin-left: 10%" class="mb-4">
                            <label for="inputPassword5" class="form-label">انتخاب نوع کتاب</label>
                            <select name="type_book" class="form-select form-select-lg mb-3" aria-label="Default select example">
                                <?php foreach ($type_book as $type_books) { ?>
                                    <option style="direction: rtl ;text-align: right" value="<?php echo $type_books['type_book_mast']; ?>"
                                        <?php echo ($type_books['type_book_mast'] == $training_course['training_courses_type_book_mast']) ? 'selected' : ''; ?>>
                                        <?php echo $type_books['type_book_mast']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>

                        <div style="margin-right: 10% ; margin-left: 10%" class="mb-4">
                            <label for="exampleInput" class="form-label">نام کتاب</label>
                            <div class="input-group input-group-lg">
                                <input type="text" name="name_book"
                                       class="form-control border-0 bg-light rounded-end ps-1"
                                       id="exampleInput"
                                       value="<?php echo $training_course['training_courses_name_book_mast']; ?>">
                            </div>
                        </div>

                        <div style="margin-right: 10% ; margin-left: 10%" class="mb-4">
                            <label for="exampleInput" class="form-label">درس یا پودمان</label>
                            <div class="input-group input-group-lg">
                                <input type="text" name="lesson"
                                       class="form-control border-0 bg-light rounded-end ps-1"
                                       id="exampleInput"
                                       value="<?php echo $training_course['training_courses_lesson_mast']; ?>">
                            </div>
                        </div>

                        <div style="margin-right: 10% ; margin-left: 10%" class="align-items-center mt-0">
                            <div class="d-grid">
                                <input class="btn btn-success-shadow mb-0" type="submit" name="submit"
                                       value="ویرایش دوره">
                            </div>
                        </div>

                        <br>
                        <br>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- =======================
    Steps END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

<!-- Bootstrap JS -->
<script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendors -->
<script src="../assets/vendor/choices/js/choices.min.js"></script>
<script src="../assets/vendor/aos/aos.js"></script>
<script src="../assets/vendor/glightbox/js/glightbox.js"></script>
<script src="../assets/vendor/quill/js/quill.min.js"></script>
<script src="../assets/vendor/stepper/js/bs-stepper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!--tinymce-->
<script src="../script/tinymce/js/tinymce/tinymce.min.js"></script>
<script>
    const useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
    const isSmallScreen = window.matchMedia('(max-width: 1023.5px)').matches;

    tinymce.init({
        selector: 'textarea#open-source-plugins',
        plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons accordion',
        editimage_cors_hosts: ['picsum.photos'],
        menubar: 'file edit view insert format tools table help',
        toolbar: "undo redo | accordion accordionremove | blocks fontfamily fontsize | bold italic underline strikethrough | align numlist bullist | link image | table media | lineheight outdent indent| forecolor backcolor removeformat | charmap emoticons | code fullscreen preview | save print | pagebreak anchor codesample | ltr rtl",
        autosave_ask_before_unload: true,
        autosave_interval: '30s',
        autosave_prefix: '{path}{query}-{id}-',
        autosave_restore_when_empty: false,
        autosave_retention: '2m',
        image_advtab: true,
        link_list: [
            { title: 'My page 1', value: 'https://www.tiny.cloud' },
            { title: 'My page 2', value: 'http://www.moxiecode.com' }
        ],
        image_list: [
            { title: 'My page 1', value: 'https://www.tiny.cloud' },
            { title: 'My page 2', value: 'http://www.moxiecode.com' }
        ],
        image_class_list: [
            { title: 'None', value: '' },
            { title: 'Some class', value: 'class-name' }
        ],
        importcss_append: true,
        file_picker_callback: (callback, value, meta) => {
            /* Provide file and text for the link dialog */
            if (meta.filetype === 'file') {
                callback('https://www.google.com/logos/google.jpg', { text: 'My text' });
            }

            /* Provide image and alt text for the image dialog */
            if (meta.filetype === 'image') {
                callback('https://www.google.com/logos/google.jpg', { alt: 'My alt text' });
            }

            /* Provide alternative source and posted for the media dialog */
            if (meta.filetype === 'media') {
                callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg' });
            }
        },
        height: 600,
        image_caption: true,
        quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
        noneditable_class: 'mceNonEditable',
        toolbar_mode: 'sliding',
        contextmenu: 'link image table',
        skin: useDarkMode ? 'oxide-dark' : 'oxide',
        content_css: useDarkMode ? 'dark' : 'default',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
    });
</script>

<!-- Template Functions -->
<script src="../assets/js/functions.js"></script>

<?php if ($success_up) { ?>
    '
    <script>
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
            title: "دوره با موفقیت ویرایش شد , لطفا از بخش مدیریت جلسات ویدیو آپلود کنید"
        });
        setTimeout(function () {
            window.location.href = 'instructor-manage-course.php';
        }, 3000);
    </script>'
<?php } ?>

<?php if ($error_up) { ?>
    '
    <script>
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
            title: "لطفا مقادیر را خالی نگذارید و از انتخاب رشته و پایه و نوع کتاب اطمینان حاصل بفرمایید"
        });
    </script>'
<?php } ?>

</body>

</html>