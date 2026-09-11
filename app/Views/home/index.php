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
Popular course START -->
                <section class="bg-light position-relative overflow-hidden">
                    <!-- SVG decoration -->
                    <figure class="position-absolute bottom-0 end-0 mb-n5">
                        <svg style="transform: scale(-1,1)" width="822.2px" height="301.9px" viewBox="0 0 822.2 301.9">
                            <path class="fill-warning" d="M752.5,51.9c-4.5,3.9-8.9,7.8-13.4,11.8c-51.5,45.3-104.8,92.2-171.7,101.4c-39.9,5.5-80.2-3.4-119.2-12.1 c-32.3-7.2-65.6-14.6-98.9-13.9c-66.5,1.3-128.9,35.2-175.7,64.6c-11.9,7.5-23.9,15.3-35.5,22.8c-40.5,26.4-82.5,53.8-128.4,70.7 c-2.1,0.8-4.2,1.5-6.2,2.2L0,301.9c3.3-1.1,6.7-2.3,10.2-3.5c46.1-17,88.1-44.4,128.7-70.9c11.6-7.6,23.6-15.4,35.4-22.8 c46.7-29.3,108.9-63.1,175.1-64.4c33.1-0.6,66.4,6.8,98.6,13.9c39.1,8.7,79.6,17.7,119.7,12.1C634.8,157,688.3,110,740,64.6 c4.5-3.9,9-7.9,13.4-11.8C773.8,35,797,16.4,822.2,1l-0.7-1C796.2,15.4,773,34,752.5,51.9z"></path>
                        </svg>
                    </figure>
                    <!-- SVG decoration -->
                    <figure class="position-absolute top-0 start-0 mt-n8 me-5 d-none d-lg-block">
                        <svg style="transform: scale(-1,1)" width="822.2px" height="301.9px" viewBox="0 0 822.2 301.9">
                            <path class="fill-purple opacity-3" d="M752.5,51.9c-4.5,3.9-8.9,7.8-13.4,11.8c-51.5,45.3-104.8,92.2-171.7,101.4c-39.9,5.5-80.2-3.4-119.2-12.1 c-32.3-7.2-65.6-14.6-98.9-13.9c-66.5,1.3-128.9,35.2-175.7,64.6c-11.9,7.5-23.9,15.3-35.5,22.8c-40.5,26.4-82.5,53.8-128.4,70.7 c-2.1,0.8-4.2,1.5-6.2,2.2L0,301.9c3.3-1.1,6.7-2.3,10.2-3.5c46.1-17,88.1-44.4,128.7-70.9c11.6-7.6,23.6-15.4,35.4-22.8 c46.7-29.3,108.9-63.1,175.1-64.4c33.1-0.6,66.4,6.8,98.6,13.9c39.1,8.7,79.6,17.7,119.7,12.1C634.8,157,688.3,110,740,64.6 c4.5-3.9,9-7.9,13.4-11.8C773.8,35,797,16.4,822.2,1l-0.7-1C796.2,15.4,773,34,752.5,51.9z"></path>
                        </svg>
                    </figure>

                    <div class="container position-relative">
                        <!-- Title -->
                        <div class="row mb-4">
                            <div class="col-12">
                                <h2 class="fs-3 fw-bold">
                        <span class="position-relative z-index-1">درباره ما
                            <!-- SVG START -->
						<span class="position-absolute top-50 start-50 translate-middle z-index-n1">
							<svg style="transform: scale(-1,1)" width="163.9px" height="48.6px">
								<path class="fill-warning" d="M162.5,19.9c-0.1-0.4-0.2-0.8-0.3-1.3c-0.1-0.3-0.2-0.5-0.4-0.7c-0.3-0.4-0.7-0.7-1.2-0.9l0.1,0l-0.1,0 c0.1-0.4-0.2-0.5-0.5-0.6c0,0-0.1,0-0.1,0c-0.1-0.1-0.2-0.2-0.3-0.3c0-0.3,0-0.6-0.2-0.7c-0.1-0.1-0.3-0.2-0.6-0.2 c0-0.3-0.1-0.5-0.3-0.6c-0.1-0.1-0.3-0.2-0.5-0.2c-0.1,0-0.1,0-0.2,0c-0.5-0.4-1-0.8-1.4-1.1c0,0,0-0.1,0-0.1c0-0.1-0.1-0.1-0.3-0.2 c-0.9-0.5-1.8-1-2.6-1.5c-6-3.6-13.2-4.3-19.8-6.2c-4.1-1.2-8.4-1.4-12.6-2c-5.6-0.8-11.3-0.6-16.9-1.1c-2.3-0.2-4.6-0.3-6.8-0.3 c-1.2,0-2.4-0.2-3.5-0.1c-2.4,0.4-4.9,0.6-7.4,0.7c-0.8,0-1.7,0.1-2.5,0.1c-0.1,0-0.1,0-0.2,0c-0.1,0-0.1,0-0.2,0 c-0.9,0-1.8,0.1-2.7,0.1c-0.9,0-1.8,0-2.7,0c-5.5-0.3-10.7,0.7-16,1.5c-2.5,0.4-5.1,1-7.6,1.5c-2.8,0.6-5.6,0.7-8.4,1.4 c-4.1,1-8.2,1.9-12.3,2.6c-4,0.7-8,1.6-11.9,2.7c-3.6,1-6.9,2.5-10.1,4.1c-1.9,0.9-3.8,1.7-5.2,3.2c-1.7,1.8-2.8,4-4.2,6 c-1,1.3-0.7,2.5,0.2,3.9c2,3.1,5.5,4.4,9,5.7c1.8,0.7,3.6,1,5.3,1.8c2.3,1.1,4.6,2.3,7.1,3.2c5.2,2,10.6,3.4,16.2,4.4 c3,0.6,6.2,0.9,9.2,1.1c4.8,0.3,9.5,1.1,14.3,0.8c0.3,0.3,0.6,0.3,0.9-0.1c0.7-0.3,1.4,0.1,2.1-0.1c3.7-0.6,7.6-0.3,11.3-0.3 c2.1,0,4.3,0.3,6.4,0.2c4-0.2,8-0.4,11.9-0.8c5.4-0.5,10.9-1,16.2-2.2c0.1,0.2,0.2,0.1,0.2,0c0.5-0.1,1-0.2,1.4-0.3 c0.1,0.1,0.2,0.1,0.3,0c0.5-0.1,1-0.3,1.6-0.3c3.3-0.3,6.7-0.6,10-1c2.1-0.3,4.1-0.8,6.2-1.2c0.2,0.1,0.3,0.1,0.4,0.1 c0.1,0,0.1,0,0.2-0.1c0,0,0.1,0,0.1-0.1c0,0,0-0.1,0.1-0.1c0.2-0.1,0.4-0.1,0.6-0.2c0,0,0.1,0,0.1,0c0.1,0,0.2-0.1,0.3-0.2 c0,0,0,0,0,0l0,0c0,0,0,0,0,0c0.2,0,0.4-0.1,0.5-0.1c0,0,0,0,0,0c0.1,0,0.1,0,0.2,0c0.2,0,0.3-0.1,0.3-0.3c0.5-0.2,0.9-0.4,1.4-0.5 c0.1,0,0.2,0,0.2,0c0,0,0.1,0,0.1,0c0,0,0.1-0.1,0.1-0.1c0,0,0,0,0.1,0c0,0,0.1,0,0.1,0c0.2,0.1,0.4,0.1,0.6,0 c0.1,0,0.1-0.1,0.2-0.2c0.1-0.1,0.1-0.2,0.1-0.3c0.5-0.2,1-0.4,1.6-0.7c1.5-0.7,3.1-1.4,4.7-1.9c4.8-1.5,9.1-3.4,12.8-6.3 c0.8-0.2,1.2-0.5,1.6-1c0.2-0.3,0.4-0.6,0.5-0.9c0.5-0.1,0.7-0.2,0.9-0.5c0.2-0.2,0.2-0.5,0.3-0.9c0-0.1,0-0.1,0.1-0.1 c0.5,0,0.6-0.3,0.8-0.5C162.3,24,163,22,162.5,19.9z M4.4,28.7c-0.2-0.4-0.3-0.9-0.1-1.2c1.8-2.9,3.4-6,6.8-8 c2.8-1.7,5.9-2.9,8.9-4.2c4.3-1.8,9-2.5,13.6-3.4c0,0.1,0,0.2,0,0.2l0,0c-1.1,0.4-2.2,0.7-3.2,1.1c-3.3,1.1-6.5,2.1-9.7,3.4 c-4.2,1.6-7.6,4.2-10.1,7.5c-0.5,0.7-1,1.3-1.6,2c-2.2,2.7-1,4.7,1.2,6.9c0.1,0.1,0.3,0.3,0.4,0.5C7.8,32.5,5.5,31.2,4.4,28.7z  M158.2,23.8c-1.7,2.8-4.1,5.1-7,6.8c-2,1.2-4.5,2.1-6.9,2.9c-3.3,1-6.4,2.4-9.5,3.7c-3.9,1.6-8.1,2.5-12.4,2.9 c-6,0.5-11.8,1.5-17.6,2.5c-4.8,0.8-9.8,1-14.7,1.5c-5.6,0.6-11.2,0.2-16.8,0.1c-3.1-0.1-6.3,0.3-9.4,0.5c-2.6,0.2-5.2,0.1-7.8-0.1 c-3.9-0.3-7.8-0.5-11.7-0.9c-2.8-0.3-5.5-0.7-8.2-1.4c-3.2-0.8-6.3-1.7-9.5-2.5c-0.5-0.1-1-0.3-1.4-0.5c-0.2-0.1-0.4-0.1-0.6-0.2 c0,0,0.1,0,0.1,0c0.3-0.1,0.5,0,0.7,0.1c0,0,0,0,0,0c3.4,0.5,6.9,1.2,10.3,1.4c0.5,0,1,0,1.5,0c0.5,0,1.3,0.2,1.3-0.3 c0-0.6-0.7-0.9-1.4-0.9c-2.1,0-4.2-0.2-6.3-0.5c-4.6-0.7-9.1-1.5-13.4-3c-2.9-1.1-5.4-2.7-6.9-5.2c-0.5-0.8-0.5-1.6-0.1-2.4 c3.2-6.2,9-9.8,16.3-12.2c6.7-2.2,13.2-4.5,20.2-6c5-1.1,10-1.8,15-2.9c8.5-1.9,17.2-2.4,26-2.7c3.6-0.1,7.1-0.8,10.8-0.6 c8.4,0.7,16.7,1.2,25,2.3c4.5,0.6,9,1.2,13.6,1.7c3.6,0.4,7.1,1.4,10.5,2.8c3.1,1.3,6,2.9,8.5,5C159.1,17.7,159.8,21.1,158.2,23.8z"/>
							</svg>
						</span>
                            <!-- SVG END -->
					</span>
                                </h2>
                            </div>
                        </div>

                        <!-- Outer tabs START -->
                        <ul class="nav nav-pills nav-pill-soft mb-3" id="course-pills-tab" role="tablist">
                            <!-- Tab item -->
                            <li class="nav-item me-2 me-sm-5" role="presentation">
                                <button class="nav-link active" id="course-pills-tab-1" data-bs-toggle="pill" data-bs-target="#course-pills-tab1" type="button" role="tab" aria-controls="course-pills-tab1" aria-selected="true">دوره آموزشی</button>
                            </li>
                            <!-- Tab item -->
                            <li class="nav-item me-2 me-sm-5" role="presentation">
                                <button class="nav-link" id="course-pills-tab-2" data-bs-toggle="pill" data-bs-target="#course-pills-tab2" type="button" role="tab" aria-controls="course-pills-tab2" aria-selected="false">محتوای آموزشی</button>
                            </li>
                            <!-- Tab item -->
                            <li class="nav-item me-2 me-sm-5" role="presentation">
                                <button class="nav-link" id="course-pills-tab-3" data-bs-toggle="pill" data-bs-target="#course-pills-tab3" type="button" role="tab" aria-controls="course-pills-tab3" aria-selected="false">دبیران</button>
                            </li>
                            <!-- Tab item -->
                            <li class="nav-item me-2 me-sm-5" role="presentation">
                                <button class="nav-link" id="course-pills-tab-4" data-bs-toggle="pill" data-bs-target="#course-pills-tab4" type="button" role="tab" aria-controls="course-pills-tab4" aria-selected="false">هنرجویان</button>
                            </li>
                        </ul>
                        <!-- Outer tabs END -->

                        <!-- Outer tabs contents START -->
                        <div class="tab-content mb-0" id="course-pills-tabContent">

                            <!-- Outer content START -->
                            <div class="tab-pane fade show active" id="course-pills-tab1" role="tabpanel" aria-labelledby="course-pills-tab-1">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row justify-content-between">
                                            <!-- Left content START -->
                                            <div class="col-lg-7">
                                                <!-- Title -->
                                                <h3>دوره های آموزشی</h3>
                                                <p class="mb-3">دوره‌های مدرسه آنلاین TeachLine با هدف پوشش کامل دروس عمومی و تخصصی هنرستان طراحی شده‌اند . این دوره‌ها با کیفیت بالا و بر اساس نیازهای واقعی هنرجویان تولید شده‌اند تا یادگیری را آسان ، کاربردی و هدفمند کنند.</p>
                                            </div>
                                            <!-- Left content END -->
                                        </div>
                                    </div>
                                </div> <!-- Row END -->
                            </div>
                            <!-- Outer content END -->

                            <!-- Outer content START -->
                            <div class="tab-pane fade" id="course-pills-tab2" role="tabpanel" aria-labelledby="course-pills-tab-2">
                                <div class="row">
                                    <!-- Left content START -->
                                    <div class="col-lg-6">
                                        <!-- Title -->
                                        <h3>محتوای آموزشی</h3>
                                        <p class="mb-3"> تمامی ویدیوهای آموزشی در مدرسه آنلاین TeachLine توسط معلمان متخصص تولید شده‌اند و متناسب با استانداردهای درسی هنرستان‌ها هستند . این محتوا تلاش می‌کنند مفاهیم را به ساده‌ترین شکل و با تمرکز بر یادگیری عمیق منتقل کنند .</p>
                                    </div>
                                    <!-- Left content END -->
                                </div>
                            </div>
                            <!-- Outer content END -->

                            <!-- Outer content START -->
                            <div class="tab-pane fade" id="course-pills-tab3" role="tabpanel" aria-labelledby="course-pills-tab-3">
                                <div class="row g-4">
                                    <!-- Left content START -->
                                    <div class="col-lg-6">
                                        <!-- Title -->
                                        <h3>دبیران</h3>
                                        <p class="mb-3"> دبیران فعال در مدرسه آنلاین TeachLine از میان معلمان باتجربه و متخصص انتخاب شده‌اند . هر دبیر با دسترسی به پنل اختصاصی خود ، محتوای آموزشی را مدیریت کرده و تلاش می‌کند تجربه‌ای مؤثر و کاربردی برای هنرجویان فراهم کند .</p>
                                    </div>
                                    <!-- Left content END -->
                                </div>
                            </div>
                            <!-- Outer content END -->

                            <!-- Outer content START -->
                            <div class="tab-pane fade" id="course-pills-tab4" role="tabpanel" aria-labelledby="course-pills-tab-4">
                                <div class="row g-4">
                                    <!-- Left content START -->
                                    <div class="col-lg-6">
                                        <!-- Title -->
                                        <h3>هنرجویان</h3>
                                        <p class="mb-3"> هنرجویان محور اصلی مدرسه آنلاین TeachLine هستند . این سامانه با هدف پاسخ‌گویی به نیازهای آموزشی آنها طراحی شده تا بتوانند در محیطی ساده و جذاب به محتوای  عمومی و تخصصی رشته خود دسترسی پیدا کنند .</p>
                                    </div>
                                    <!-- Left content END -->
                                </div>
                            </div>
                            <!-- Outer content END -->
                        </div>
                        <!-- Outer tabs contents END -->
                    </div>
                </section>
                <!-- =======================
                Popular course END -->

                <!-- =======================
Action box START-->
                <section class="pt-0 pt-md-6">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="bg-light p-4 p-sm-5 rounded-3 position-relative overflow-hidden">
                                    <!-- SVG decoration -->
                                    <figure class="position-absolute top-0 start-0 d-none d-lg-block ms-n7">
                                        <svg style="transform: scale(-1,1) ; enable-background:new 0 0 294.5 261.6" width="294.5px" height="261.6px" viewBox="0 0 294.5 261.6">
                                            <path class="fill-warning opacity-5" d="M280.7,84.9c-4.6-9.5-10.1-18.6-16.4-27.2c-18.4-25.2-44.9-45.3-76-54.2c-31.7-9.1-67.7-0.2-93.1,21.6 C82,36.4,71.9,50.6,65.4,66.3c-4.6,11.1-9.5,22.3-17.2,31.8c-6.8,8.3-15.6,15-22.8,23C10.4,137.6-0.1,157.2,0,179 c0.1,28,11.4,64.6,40.4,76.7c23.9,10,50.7-3.1,75.4-4.7c23.1-1.5,43.1,10.4,65.5,10.6c53.4,0.6,97.8-42,109.7-90.4 C298.5,140.9,293.4,111.5,280.7,84.9z"></path>
                                        </svg>
                                    </figure>
                                    <!-- SVG decoration -->
                                    <figure class="position-absolute top-50 start-50 translate-middle">
                                        <svg style="transform: scale(-1,1)" width="453px" height="211px">
                                            <path class="fill-orange" d="M16.002,8.001 C16.002,12.420 12.420,16.002 8.001,16.002 C3.582,16.002 -0.000,12.420 -0.000,8.001 C-0.000,3.582 3.582,-0.000 8.001,-0.000 C12.420,-0.000 16.002,3.582 16.002,8.001 Z"></path>
                                            <path class="fill-warning" d="M176.227,203.296 C176.227,207.326 172.819,210.593 168.614,210.593 C164.409,210.593 161.000,207.326 161.000,203.296 C161.000,199.266 164.409,196.000 168.614,196.000 C172.819,196.000 176.227,199.266 176.227,203.296 Z"></path>
                                            <path class="fill-primary" d="M453.002,65.001 C453.002,69.420 449.420,73.002 445.001,73.002 C440.582,73.002 437.000,69.420 437.000,65.001 C437.000,60.582 440.582,57.000 445.001,57.000 C449.420,57.000 453.002,60.582 453.002,65.001 Z"></path>
                                        </svg>
                                    </figure>
                                    <!-- SVG decoration -->
                                    <figure class="position-absolute top-0 end-0 mt-5 me-n5 d-none d-sm-block">
                                        <svg style="transform: scale(-1,1)" width="285px" height="272px">
                                            <path class="fill-info opacity-4" d="M142.500,-0.000 C221.200,-0.000 285.000,60.889 285.000,136.000 C285.000,211.111 221.200,272.000 142.500,272.000 C63.799,272.000 -0.000,211.111 -0.000,136.000 C-0.000,60.889 63.799,-0.000 142.500,-0.000 Z"></path>
                                        </svg>
                                    </figure>

                                    <div class="col-11 mx-auto position-relative">
                                        <div class="row align-items-center">
                                            <!-- Title -->
                                            <div class="col-lg-8">
                                                <h4 class="fs-4">جهت ثبت نام در مدرسه آنلاین TeachLine به عنوان "معلم" میتوانید درخواست خود را برای ادمین سایت ارسال کنید</h4>
                                            </div>
                                            <!-- Content and input -->
                                            <div class="col-lg-4 text-lg-end">
                                                <a href="/teachline/instructor/instructor-sign-up.php" class="btn btn-success mb-0">ثبت درخواست</a>
                                                <a href="/teachline/instructor/instructor-sign-in.php" class="btn btn-success mb-0">ورود به پنل</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- =======================
                Action box END-->

            </div>
        </div>

    </section>
    <!-- Main Banner END -->

</main>