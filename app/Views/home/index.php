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

            </div>
        </div>

    </section>
    <!-- Main Banner END -->

</main>