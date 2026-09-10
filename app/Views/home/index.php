<main>

    <!-- Main Banner START -->
    <section class="position-relative overflow-hidden pb-0 pb-sm-5">

        <div class="container">
            <div class="row align-items-center justify-content-xl-between g-4 g-md-5">

                <!-- Left content START -->
                <div class="col-lg-7 col-xl-5 position-relative z-index-1 text-center text-lg-start mb-2 mb-md-9 mb-xl-0">

                    <!-- Welcome -->
                    <?php if ($user['loggedIn']): ?>

                        <h1 class="mb-4 display-7">
                            <?= htmlentities($user['fullName']) ?>
                            عزیز به مدرسه آنلاین TeachLine خوش آمدی
                        </h1>

                    <?php else: ?>

                        <h1 class="mb-4 display-7">
                            خوش آمدید به مدرسه آنلاین TeachLine
                        </h1>

                    <?php endif; ?>

                    <br>

                    <!-- Search -->
                    <form method="get"
                          action="/teachline/public/course-search"
                          class="border rounded p-2 mb-4">

                        <div class="input-group">

                            <input
                                    class="form-control border-0 me-1"
                                    type="search"
                                    name="course"
                                    placeholder="جستجو..."
                                    aria-label="Search"
                            >

                            <button
                                    type="submit"
                                    class="btn btn-primary mb-0 rounded">
                                <i class="fas fa-search"></i>
                            </button>

                        </div>
                    </form>

                    <!-- Statistics -->
                    <div class="row g-3 mb-3 mb-lg-0">

                        <!-- Courses -->
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">

                                <div class="icon-lg fs-4 text-orange bg-white bg-opacity-10 rounded">
                                    <i class="bi-book-half"></i>
                                </div>

                                <div class="ms-3">
                                    <h4
                                            class="purecounter fw-bold mb-0"
                                            data-purecounter-start="0"
                                            data-purecounter-end="<?= $statistics['courses'] ?>"
                                            data-purecounter-delay="100">
                                    </h4>

                                    <div>دوره آموزشی</div>
                                </div>

                            </div>
                        </div>

                        <!-- Meetings -->
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">

                                <div class="icon-lg fs-4 text-light bg-white bg-opacity-10 rounded">
                                    <i class="fas fa-tv text-purple"></i>
                                </div>

                                <div class="ms-3">
                                    <h4
                                            class="purecounter fw-bold mb-0"
                                            data-purecounter-start="0"
                                            data-purecounter-end="<?= $statistics['meetings'] ?>"
                                            data-purecounter-delay="100">
                                    </h4>

                                    <div>ویدیو آموزشی</div>
                                </div>

                            </div>
                        </div>

                        <!-- Teachers -->
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="icon-lg fs-4 text-primary bg-white bg-opacity-10 rounded">
                                    <i class="fas fa-user-tie"></i>
                                </div>

                                <div class="ms-3">
                                    <h4
                                            class="purecounter fw-bold mb-0"
                                            data-purecounter-start="0"
                                            data-purecounter-end="<?= $statistics['teachers'] ?>"
                                            data-purecounter-delay="100">
                                    </h4>

                                    <div>دبیر</div>
                                </div>

                            </div>
                        </div>

                        <!-- Students -->
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">

                                <div class="icon-lg fs-4 text-success bg-white bg-opacity-10 rounded">
                                    <i class="fas fa-user-graduate"></i>
                                </div>

                                <div class="ms-3">
                                    <h4
                                            class="purecounter fw-bold mb-0"
                                            data-purecounter-start="0"
                                            data-purecounter-end="<?= $statistics['students'] ?>"
                                            data-purecounter-delay="100">
                                    </h4>

                                    <div>هنرجو</div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- Statistics END -->

                </div>
                <!-- Left content END -->

                <!-- Right content START -->
                <div class="col-lg-5 col-xl-6 text-center position-relative">

                    <!-- SVG decoration -->
                    <figure class="position-absolute top-100 start-0 translate-middle mt-n6 ms-5 ps-5 d-none d-md-block">
                        <svg width="297.5px" height="295.9px">
                            <path
                                    stroke="#F99D2B"
                                    fill="none"
                                    stroke-width="13"
                                    d="M286.2,165.5c-9.8,74.9-78.8,128.9-153.9,120.4c-76-8.6-131.4-78.2-122.8-154.2C18.2,55.8,87.8,0.3,163.7,9">
                            </path>
                        </svg>
                    </figure>

                    <!-- Bell icon -->
                    <div class="icon-lg bg-primary text-white rounded-4 shadow position-absolute top-0 start-100 translate-middle z-index-9 ms-n4 d-none d-md-block">
                        <i class="fas fa-bell"></i>
                    </div>

                    <!-- Guest signup -->
                    <?php if (!$user['loggedIn']): ?>

                        <div
                                style="margin-left: 150px"
                                class="p-3 card card-body shadow rounded-4 position-absolute top-0 start-0 translate-middle me-9 z-index-1 d-none d-xl-block">

                            <div class="d-flex justify-content-between">

                                <div class="text-start ms-3">

                                    <h6 class="mb-0">
                                        عضو این مدرسه باشید
                                    </h6>

                                    <a
                                            href="/teachline/sign-up.php"
                                            class="btn btn-sm btn-primary-soft mt-3 mb-0"
                                            style="margin-right: 25px">
                                        ثبت نام
                                    </a>

                                </div>

                            </div>
                        </div>

                    <?php endif; ?>

                    <!-- Main visual -->
                    <div class="position-relative">

                        <!-- Yellow background -->
                        <div class="bg-warning rounded-4 border border-white border-5 h-200px h-sm-300px shadow"></div>

                        <!-- Image -->
                        <img
                                style="border-radius: 50px; width: 64%; margin-bottom: 10px"
                                src="/teachline/assets/images/element/06.svg"
                                class="position-absolute bottom-0 start-50 translate-middle-x"
                                alt="">
                    </div>

                </div>
                <!-- Right content END -->

                <!-- =======================
IT courses START -->
                <section>
                    <div class="container">

                        <!-- Title -->
                        <div class="row mb-4">
                            <div class="col-lg-8 text-center mx-auto">
                                <h2 class="fs-2">دروس عمومی و تخصصی هنرستان</h2>
                                <p class="mb-0">
                                    با انتخاب نوع درس و پایه تحصیلی مورد نظر , آموزش ها را مشاهده کنید
                                </p>
                            </div>
                        </div>

                        <div class="row g-4">

                            <!-- Course item -->
                            <div class="col-sm-6 col-lg-4 col-xl-4">
                                <div class="card card-metro overflow-hidden rounded-3">
                                    <img src="<?= asset('images/courses/o10.jpg') ?>" alt="">

                                    <div class="card-img-overlay d-flex">
                                        <div class="mt-auto card-text">
                                            <h5 class="card-title fw-normal">
                                                <a href="/teachline/public/course-category/دهم/عمومی"
                                                   class="stretched-link">
                                                    دروس عمومی پایه دهم هنرستان
                                                </a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Course item -->
                            <div class="col-sm-6 col-lg-4 col-xl-4">
                                <div class="card card-metro overflow-hidden rounded-3">
                                    <img src="<?= asset('images/courses/o11.png') ?>" alt="">

                                    <div class="card-img-overlay d-flex">
                                        <div class="mt-auto card-text">
                                            <h5 class="card-title fw-normal">
                                                <a href="/teachline/public/course-category/یازدهم/عمومی"
                                                   class="stretched-link">
                                                    دروس عمومی پایه یازدهم هنرستان
                                                </a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Course item -->
                            <div class="col-sm-6 col-lg-4 col-xl-4">
                                <div class="card card-metro overflow-hidden rounded-3">
                                    <img src="<?= asset('images/courses/o12.png') ?>" alt="">

                                    <div class="card-img-overlay d-flex">
                                        <div class="mt-auto card-text">
                                            <h5 class="card-title fw-normal">
                                                <a href="/teachline/public/course-category/دوازدهم/عمومی"
                                                   class="stretched-link">
                                                    دروس عمومی پایه دوازدهم هنرستان
                                                </a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Course item -->
                            <div class="col-sm-6 col-lg-4 col-xl-4">
                                <div class="card card-metro overflow-hidden rounded-3">
                                    <img src="<?= asset('images/courses/t10.jpg') ?>" alt="">

                                    <div class="card-img-overlay d-flex">
                                        <div class="mt-auto card-text">
                                            <h5 class="card-title fw-normal">
                                                <a href="/teachline/public/course-category/دهم/تخصصی"
                                                   class="stretched-link">
                                                    دروس تخصصی پایه دهم هنرستان
                                                </a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Course item -->
                            <div class="col-sm-6 col-lg-4 col-xl-4">
                                <div class="card card-metro overflow-hidden rounded-3">
                                    <img src="<?= asset('images/courses/t11.png') ?>" alt="">
                                    <div class="card-img-overlay d-flex">
                                        <div class="mt-auto card-text">
                                            <h5 class="card-title fw-normal">
                                                <a href="/teachline/public/course-category/یازدهم/تخصصی"
                                                   class="stretched-link">
                                                    دروس تخصصی پایه یازدهم هنرستان
                                                </a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Course item -->
                            <div class="col-sm-6 col-lg-4 col-xl-4">
                                <div class="card card-metro overflow-hidden rounded-3">
                                    <img src="<?= asset('images/courses/t12.png') ?>" alt="">

                                    <div class="card-img-overlay d-flex">
                                        <div class="mt-auto card-text">
                                            <h5 class="card-title fw-normal">
                                                <a href="/teachline/public/course-category/دوازدهم/تخصصی"
                                                   class="stretched-link">
                                                    دروس تخصصی پایه دوازدهم هنرستان
                                                </a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <!-- =======================
                IT courses END -->

                <!-- =======================
About TeachLine START -->
                <section>
                    <div class="container">

                        <!-- Title -->
                        <div class="row mb-4">
                            <div class="col-lg-8 text-center mx-auto">
                                <h2 class="fs-2">درباره مدرسه آنلاین TeachLine</h2>
                            </div>
                        </div>

                        <!-- Tabs -->
                        <ul class="nav nav-pills nav-pill-soft mb-3"
                            id="course-pills-tab"
                            role="tablist">

                            <li class="nav-item me-2 me-sm-5" role="presentation">
                                <button class="nav-link active"
                                        id="course-pills-tab-1"
                                        data-bs-toggle="pill"
                                        data-bs-target="#course-pills-tab1"
                                        type="button"
                                        role="tab">
                                    دوره آموزشی
                                </button>
                            </li>

                            <li class="nav-item me-2 me-sm-5" role="presentation">
                                <button class="nav-link"
                                        id="course-pills-tab-2"
                                        data-bs-toggle="pill"
                                        data-bs-target="#course-pills-tab2"
                                        type="button"
                                        role="tab">
                                    محتوای آموزشی
                                </button>
                            </li>

                            <li class="nav-item me-2 me-sm-5" role="presentation">
                                <button class="nav-link"
                                        id="course-pills-tab-3"
                                        data-bs-toggle="pill"
                                        data-bs-target="#course-pills-tab3"
                                        type="button"
                                        role="tab">
                                    دبیران
                                </button>
                            </li>

                            <li class="nav-item me-2 me-sm-5" role="presentation">
                                <button class="nav-link"
                                        id="course-pills-tab-4"
                                        data-bs-toggle="pill"
                                        data-bs-target="#course-pills-tab4"
                                        type="button"
                                        role="tab">
                                    هنرجویان
                                </button>
                            </li>

                        </ul>

                        <!-- Tabs contents -->
                        <div class="tab-content mb-0" id="course-pills-tabContent">

                            <!-- دوره آموزشی -->
                            <div class="tab-pane fade show active"
                                 id="course-pills-tab1"
                                 role="tabpanel">

                                <div class="row">
                                    <div class="col-12">
                                        <div class="row justify-content-between">

                                            <div class="col-lg-7">
                                                <h3>دوره های آموزشی</h3>

                                                <p class="mb-3">
                                                    دوره‌های مدرسه آنلاین TeachLine با هدف پوشش کامل
                                                    دروس عمومی و تخصصی هنرستان طراحی شده‌اند.
                                                    این دوره‌ها با کیفیت بالا و بر اساس نیازهای واقعی
                                                    هنرجویان تولید شده‌اند تا یادگیری را آسان،
                                                    کاربردی و هدفمند کنند.
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- محتوای آموزشی -->
                            <div class="tab-pane fade"
                                 id="course-pills-tab2"
                                 role="tabpanel">

                                <div class="row">
                                    <div class="col-lg-6">

                                        <h3>محتوای آموزشی</h3>

                                        <p class="mb-3">
                                            تمامی ویدیوهای آموزشی در مدرسه آنلاین TeachLine
                                            توسط معلمان متخصص تولید شده‌اند و متناسب با
                                            استانداردهای درسی هنرستان‌ها هستند.
                                            این محتوا تلاش می‌کنند مفاهیم را به ساده‌ترین شکل
                                            و با تمرکز بر یادگیری عمیق منتقل کنند.
                                        </p>

                                    </div>
                                </div>

                            </div>
                            <!-- دبیران -->
                            <div class="tab-pane fade"
                                 id="course-pills-tab3"
                                 role="tabpanel">

                                <div class="row g-4">
                                    <div class="col-lg-6">

                                        <h3>دبیران</h3>

                                        <p class="mb-3">
                                            دبیران فعال در مدرسه آنلاین TeachLine از میان
                                            معلمان باتجربه و متخصص انتخاب شده‌اند.
                                            هر دبیر با دسترسی به پنل اختصاصی خود،
                                            محتوای آموزشی را مدیریت کرده و تلاش می‌کند
                                            تجربه‌ای مؤثر و کاربردی برای هنرجویان فراهم کند.
                                        </p>

                                    </div>
                                </div>

                            </div>

                            <!-- هنرجویان -->
                            <div class="tab-pane fade"
                                 id="course-pills-tab4"
                                 role="tabpanel">

                                <div class="row g-4">
                                    <div class="col-lg-6">

                                        <h3>هنرجویان</h3>

                                        <p class="mb-3">
                                            هنرجویان محور اصلی مدرسه آنلاین TeachLine هستند.
                                            این سامانه با هدف پاسخ‌گویی به نیازهای آموزشی
                                            آنها طراحی شده تا بتوانند در محیطی ساده و جذاب
                                            به محتوای عمومی و تخصصی رشته خود دسترسی پیدا کنند.
                                        </p>

                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </section>
                <!-- =======================
                About TeachLine END -->

                <!-- =======================
Action Box START -->
                <section class="pt-0 pt-md-6">
                    <div class="container">
                        <div class="row">

                            <div class="col-12">
                                <div class="bg-light p-4 p-sm-5 rounded-3 position-relative overflow-hidden">

                                    <div class="row position-relative align-items-center">

                                        <div class="col-lg-8">
                                            <h4 class="fs-4">
                                                جهت ثبت نام در مدرسه آنلاین TeachLine به عنوان
                                                "معلم" میتوانید درخواست خود را برای ادمین سایت ارسال کنید
                                            </h4>
                                        </div>

                                        <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">

                                            <a href="/teachline/instructor/instructor-sign-up.php"
                                               class="btn btn-success mb-0">
                                                ثبت درخواست
                                            </a>

                                            <a href="/teachline/instructor/instructor-sign-in.php"
                                               class="btn btn-success mb-0">
                                                ورود به پنل
                                            </a>

                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <!-- =======================
                Action box END -->

            </div>
        </div>

    </section>
    <!-- Main Banner END -->

</main>