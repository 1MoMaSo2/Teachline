<section class="py-0 bg-blue h-md-100px align-items-center d-flex h-200px rounded-0">

    <div class="container">
        <div class="row">

            <div class="col-12 text-center">
                <h2 class="text-white">ویرایش دوره آموزشی</h2>
            </div>

        </div>
    </div>

</section>


<section>

    <div class="container">

        <div class="row">

            <div class="col-md-8 mx-auto text-center">

                <p class="text-center">
                    لطفا جهت ویرایش دوره از انتخاب مشخصات لازم اطمینان حاصل بفرمایید
                </p>

            </div>

        </div>


        <div class="card bg-transparent border rounded-5 mb-4">

            <div id="stepper" class="bs-stepper stepper-outline">

                <br>

                <form
                    method="post"
                    action="/teachline/public/teacher/edit-course?id=<?= (int) $course['id_training_courses_mast'] ?>"
                >

                    <!-- نام دوره -->

                    <div style="margin-right: 10%; margin-left: 10%" class="mb-4">

                        <label for="course-name" class="form-label">
                            نام دوره آموزشی
                        </label>

                        <div class="input-group input-group-lg">

                            <input
                                type="text"
                                name="name_course"
                                class="form-control border-0 bg-light rounded-end ps-1"
                                id="course-name"
                                maxlength="30"
                                value="<?= htmlspecialchars(
                                    $course['training_courses_name_mast'] ?? '',
                                    ENT_QUOTES,
                                    'UTF-8'
                                ) ?>"
                            >

                        </div>

                    </div>


                    <!-- توضیحات -->
                    <div style="margin-right: 11.5%; width: 77%" class="mb-4">

                        <label for="course-description" class="form-label">
                            توضیحات دوره آموزشی
                        </label>

                        <div class="centered">

                            <div class="row row-editor">

                                <textarea
                                    name="description"
                                    id="course-description"
                                ><?= htmlspecialchars(
                                        $course['training_courses_description_mast'] ?? '',
                                        ENT_QUOTES,
                                        'UTF-8'
                                    ) ?></textarea>

                            </div>

                        </div>

                    </div>


                    <!-- برچسب -->

                    <div style="margin-right: 10%; margin-left: 10%" class="mb-4">

                        <label for="course-tags" class="form-label">
                            برچسب های دوره آموزشی
                        </label>

                        <div class="input-group input-group-lg">

                            <input
                                type="text"
                                name="tag"
                                class="form-control border-0 bg-light rounded-end ps-1"
                                id="course-tags"
                                value="<?= htmlspecialchars(
                                    $course['training_courses_tag_mast'] ?? '',
                                    ENT_QUOTES,
                                    'UTF-8'
                                ) ?>"
                            >

                        </div>

                        <p style="font-size: 10px">
                            برای جدا کردن برچسب ها از یکدیگر لطفا از , کاما استفاده کنید
                        </p>

                    </div>


                    <!-- پایه تحصیلی -->

                    <div style="margin-right: 10%; margin-left: 10%" class="mb-4">

                        <label for="education-basic" class="form-label">
                            انتخاب پایه تحصیلی
                        </label>

                        <select
                            name="education_basic"
                            id="education-basic"
                            class="form-select form-select-lg mb-3"
                        >

                            <?php foreach ($educationBasics as $educationBasic): ?>

                            <option
                                value="<?= htmlspecialchars(
                                    $educationBasic['education_basic_name_mast'],
                                    ENT_QUOTES,
                                    'UTF-8'
                                ) ?>"
                                <?= (
                                    $educationBasic['education_basic_name_mast']
                                    === ($course['training_courses_education_basic_mast'] ?? '')
                                ) ? 'selected' : '' ?>
                            >
                                <?= htmlspecialchars(
                                    $educationBasic['education_basic_name_mast'],
                                    ENT_QUOTES,
                                    'UTF-8'
                                ) ?>

                            </option>

                            <?php endforeach; ?>

                        </select>

                    </div>


                    <!-- رشته تحصیلی -->

                    <div style="margin-right: 10%; margin-left: 10%" class="mb-4">

                        <label for="field-study" class="form-label">
                            انتخاب رشته تحصیلی
                        </label>

                        <select
                            name="field_study"
                            id="field-study"
                            class="form-select form-select-lg mb-3"
                        >

                            <?php foreach ($fieldStudies as $fieldStudy): ?>

                                <option
                                    value="<?= htmlspecialchars(
                                        $fieldStudy['field_study_name_mast'],
                                        ENT_QUOTES,
                                        'UTF-8'
                                    ) ?>"
                                    <?= (
                                        $fieldStudy['field_study_name_mast']
                                        === ($course['training_courses_field_study_mast'] ?? '')
                                    ) ? 'selected' : '' ?>
                                >

                                    <?= htmlspecialchars(
                                        $fieldStudy['field_study_name_mast'],
                                        ENT_QUOTES,
                                        'UTF-8'
                                    ) ?>

                                </option>

                            <?php endforeach; ?>

                        </select>

                    </div>


                    <!-- نوع کتاب -->

                    <div style="margin-right: 10%; margin-left: 10%" class="mb-4">

                        <label for="type-book" class="form-label">
                            انتخاب نوع کتاب
                        </label>

                        <select
                            name="type_book"
                            id="type-book"
                            class="form-select form-select-lg mb-3"
                        >

                            <?php foreach ($typeBooks as $typeBook): ?>

                            <option
                                value="<?= htmlspecialchars(
                                    $typeBook['type_book_mast'],
                                    ENT_QUOTES,
                                    'UTF-8'
                                ) ?>"
                                <?= (
                                    $typeBook['type_book_mast']
                                    === ($course['training_courses_type_book_mast'] ?? '')
                                ) ? 'selected' : '' ?>
                            >
                                <?= htmlspecialchars(
                                    $typeBook['type_book_mast'],
                                    ENT_QUOTES,
                                    'UTF-8'
                                ) ?>

                            </option>

                            <?php endforeach; ?>

                        </select>

                    </div>


                    <!-- نام کتاب -->

                    <div style="margin-right: 10%; margin-left: 10%" class="mb-4">

                        <label for="book-name" class="form-label">
                            نام کتاب
                        </label>

                        <div class="input-group input-group-lg">

                            <input
                                type="text"
                                name="name_book"
                                class="form-control border-0 bg-light rounded-end ps-1"
                                id="book-name"
                                value="<?= htmlspecialchars(
                                    $course['training_courses_name_book_mast'] ?? '',
                                    ENT_QUOTES,
                                    'UTF-8'
                                ) ?>"
                            >

                        </div>

                    </div>


                    <!-- درس یا پودمان -->

                    <div style="margin-right: 10%; margin-left: 10%" class="mb-4">

                        <label for="lesson" class="form-label">
                            درس یا پودمان
                        </label>

                        <div class="input-group input-group-lg">

                            <input
                                type="text"
                                name="lesson"
                                class="form-control border-0 bg-light rounded-end ps-1"
                                id="lesson"
                                value="<?= htmlspecialchars(
                                    $course['training_courses_lesson_mast'] ?? '',
                                    ENT_QUOTES,
                                    'UTF-8'
                                ) ?>"
                            >

                        </div>

                    </div>
                    <!-- دکمه -->

                    <div
                        style="margin-right: 10%; margin-left: 10%"
                        class="align-items-center mt-0"
                    >

                        <div class="d-grid">

                            <input
                                class="btn btn-success-shadow mb-0"
                                type="submit"
                                value="ویرایش دوره"
                            >

                        </div>

                    </div>


                    <br>
                    <br>

                </form>

            </div>

        </div>

    </div>

</section>


<!-- TinyMCE -->

<script src="/teachline/script/tinymce/js/tinymce/tinymce.min.js"></script>

<script>
    tinymce.init({
        selector: '#course-description',
        height: 600,
        directionality: 'rtl',
        plugins: 'preview searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help quickbars emoticons',
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | align numlist bullist | link image | table media | outdent indent | forecolor backcolor removeformat | charmap emoticons | code fullscreen preview | ltr rtl',
        toolbar_mode: 'sliding',
        contextmenu: 'link image table',
        content_style: 'body { font-family: Tahoma, Arial, sans-serif; font-size: 16px; direction: rtl; }'
    });
</script>