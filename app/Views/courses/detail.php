<main>
    <!-- =======================
    Page intro START -->
    <section class="bg-light py-0 py-sm-5">
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-8">
                    <!-- Title -->
                    <h1 class="fs-3"><?php echo htmlentities($course['training_courses_name_mast']); ?></h1>
                    <!-- Content --><br>
                    <ul class="list-inline mb-1">
                        <li class="list-inline-item h5 fw-light mb-1 mb-sm-0"><i class="fas fa-school text-danger me-2"></i><?php echo htmlentities($course['training_courses_education_basic_mast']); ?></li>
                        <br>
                        <li style="margin-top: 10px" class="list-inline-item h5 fw-light mb-1 mb-sm-0"><i class="fa fa-table text-blue me-2"></i><?php echo htmlentities($course['training_courses_field_study_mast']); ?></li>
                        <br>
                        <li style="margin-top: 10px" class="list-inline-item h5 fw-light mb-1 mb-sm-0"><i class="fas bi-book text-orange me-2"></i><?php echo htmlentities($course['training_courses_type_book_mast']); ?></li>
                        <br>
                        <li style="margin-top: 10px" class="list-inline-item h5 fw-light mb-1 mb-sm-0"><i class="fas bi-person text-purple me-2"></i><?php echo htmlentities($course['training_courses_teacher_mast']); ?></li>
                        <br>
                        <li style="margin-top: 10px" class="list-inline-item h5 fw-light mb-1 mb-sm-0"><i class="fas bi-calendar-date text-success me-2"></i>آخرین به روزرسانی : <?php echo jdate('Y/m/d' , $course['training_courses_date_update_course_mast']); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Page intro END -->

    <!-- =======================
    Page content START -->
    <section class="pb-0 py-lg-5">
        <div class="container">
            <div class="row">
                <!-- Main content START -->
                <div class="col-lg-8">
                    <div class="shadow rounded-2 p-0">
                        <!-- Tabs START -->
                        <div class="card-header border-bottom px-4 py-3">
                            <ul class="nav nav-pills nav-tabs-line py-0" id="course-pills-tab" role="tablist">
                                <!-- Tab item -->
                                <li class="nav-item me-2 me-sm-4" role="presentation">
                                    <button class="nav-link mb-2 mb-md-0 active" id="course-pills-tab-1" data-bs-toggle="pill" data-bs-target="#course-pills-1" type="button" role="tab" aria-controls="course-pills-1" aria-selected="true">توضیحات</button>
                                </li>
                                <!-- Tab item -->
                                <li class="nav-item me-2 me-sm-4" role="presentation">
                                    <button class="nav-link mb-2 mb-md-0" id="course-pills-tab-2" data-bs-toggle="pill" data-bs-target="#course-pills-2" type="button" role="tab" aria-controls="course-pills-2" aria-selected="false">جلسات دوره</button>
                                </li>
                            </ul>
                        </div>
                        <!-- Tabs END -->

                        <!-- Tab contents START -->
                        <div class="card-body p-4">
                            <div class="tab-content pt-2" id="course-pills-tabContent">
                                <!-- Content START -->
                                <div class="tab-pane fade show active" id="course-pills-1" role="tabpanel" aria-labelledby="course-pills-tab-1">
                                    <!-- Course detail START -->
                                    <h2 class="mb-3">توضیحات این دوره</h2>
                                    <p class="mb-3"><?php echo $course['training_courses_description_mast']; ?></p>
                                </div>
                                <!-- Content END -->

                                <!-- Content START -->
                                <div class="tab-pane fade" id="course-pills-2" role="tabpanel" aria-labelledby="course-pills-tab-2">
                                    <!-- Course accordion START -->
                                    <div class="accordion accordion-icon accordion-bg-light" id="accordionExample2">
                                        <h6 class="accordion-header font-base" id="heading-1">
                                            <button class="accordion-button fw-bold rounded d-sm-flex d-inline-block collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                                قسمت های این دوره
                                            </button>
                                        </h6>
                                        <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#accordionExample2">
                                            <div class="accordion-body mt-3">
                                                <!-- Course lecture -->
                                                <?php foreach ($meetings as $index => $meeting): ?>
                                                    <hr>
                                                    <p> قسمت <?php echo $index + 1 ?></p>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="position-relative d-flex align-items-center">
                                                            <a href="/teachline/assets/upload/course/<?php echo $meeting['training_course_meetings_link_mast']; ?>"
                                                               class="btn btn-primary-soft btn-round btn-sm mb-0 stretched-link position-static" title="تماشای ویدیو">
                                                                <i class="fas fa-play me-0"></i>
                                                            </a>
                                                            <span class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-100px w-sm-200px w-md-400px"><?php echo htmlentities($meeting['training_course_meetings_title_mast']); ?></span>
                                                        </div>
                                                        <div class="position-relative d-flex align-items-center">
                                                            <a href="/teachline/assets/upload/course/<?php echo $meeting['training_course_meetings_link_mast']; ?>" download
                                                               class="btn btn-success-soft btn-round btn-sm mb-0 stretched-link position-static" title="دانلود ویدیو">
                                                                <i class="fas fa-download me-0"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                                <!-- Divider -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Course accordion END -->
                            </div>
                            <!-- Content END -->
                        </div>
                    </div>
                    <!-- Tab contents END -->
                </div>
            </div>
            <!-- Main content END -->

            <!-- Right sidebar START -->
            <div class="col-lg-4 pt-5 pt-lg-0">
                <div class="row mb-5 mb-lg-0">
                    <div class="col-md-6 col-lg-12">
                        <!-- Video START -->
                        <div class="card shadow p-2 mb-4 z-index-9">
                            <div class="overflow-hidden rounded-3">
                                <!-- Overlay -->
                                <div class="bg-overlay bg-dark opacity-6"></div>
                            </div>

                            <div class="col-md-6 col-lg-12">

                                <!-- Tags START -->
                                <div class="card card-body shadow p-4">
                                    <h4 class="mb-3 fs-5">برچسب ها</h4>
                                    <ul class="list-inline mb-0">
                                        <?php foreach ($tags as $tag): ?>
                                            <li class="list-inline-item"><a class="btn btn-outline-light btn-sm" href="#"><?php echo htmlentities($tag) ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <!-- Tags END -->
                            </div>
                        </div><!-- Row End -->
                    </div>
                    <!-- Right sidebar END -->

                </div><!-- Row END -->
            </div>
    </section>
    <!-- =======================
    Page content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- Modal START -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header border-0 bg-transparent">
                <!-- Close button -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal body -->
            <div class="modal-body px-5 pb-5 position-relative overflow-hidden">

                <!-- Element -->
                <figure class="position-absolute bottom-0 end-0 mb-n4 me-n4 d-none d-sm-block">
                    <img src="teachline/assets/images/element/01.svg" alt="element">
                </figure>
                <figure class="position-absolute top-0 end-0 z-index-n1 opacity-2">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="818.6px" height="235.1px" viewBox="0 0 818.6 235.1">
                        <path class="fill-info" d="M735,226.3c-5.7,0.6-11.5,1.1-17.2,1.7c-66.2,6.8-134.7,13.7-192.6-16.6c-34.6-18.1-61.4-47.9-87.3-76.7 c-21.4-23.8-43.6-48.5-70.2-66.7c-53.2-36.4-121.6-44.8-175.1-48c-13.6-0.8-27.5-1.4-40.9-1.9c-46.9-1.9-95.4-3.9-141.2-16.5 C8.3,1.2,6.2,0.6,4.2,0H0c3.3,1,6.6,2,10,3c46,12.5,94.5,14.6,141.5,16.5c13.4,0.6,27.3,1.1,40.8,1.9 c53.4,3.2,121.5,11.5,174.5,47.7c26.5,18.1,48.6,42.7,70,66.5c26,28.9,52.9,58.8,87.7,76.9c58.3,30.5,127,23.5,193.3,16.7 c5.8-0.6,11.5-1.2,17.2-1.7c26.2-2.6,55-4.2,83.5-2.2v-1.2C790,222,761.2,223.7,735,226.3z"></path>
                    </svg>
                </figure>
                <!-- Title -->
                <h2 class="fs-3">خرید دوره پیشرفته <span class="text-success">350,000 تومان</span></h2>
                <p>چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</p>
                <!-- Content -->
                <div class="row mb-3 item-collapse">
                    <div class="col-sm-6">
                        <ul class="list-group list-group-borderless">
                            <li class="list-group-item text-body"> <i class="bi bi-patch-check-fill text-success"></i>برنامه درسی با کیفیت بالا</li>
                            <li class="list-group-item text-body"> <i class="bi bi-patch-check-fill text-success"></i>تقویم برنامه ریزی</li>
                            <li class="list-group-item text-body"> <i class="bi bi-patch-check-fill text-success"></i>به روزرسانی رایگان</li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <ul class="list-group list-group-borderless">
                            <li class="list-group-item text-body"> <i class="bi bi-patch-check-fill text-success"></i>دوره های متوسط</li>
                            <li class="list-group-item text-body"> <i class="bi bi-patch-check-fill text-success"></i>بیش از 200 دوره آنلاین</li>
                        </ul>
                    </div>
                </div>
                <!-- Button -->
                <a href="#" class="btn btn-lg btn-orange-soft">خرید دوره</a>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer d-block bg-info">
                <div class="d-sm-flex justify-content-sm-between align-items-center text-center text-sm-start">
                    <!-- Social media button -->
                    <ul class="list-inline mb-0 social-media-btn mb-2 mb-sm-0">
                        <li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-facebook" href="#"><i class="fab fa-fw fa-facebook-f"></i></a> </li>
                        <li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-instagram" href="#"><i class="fab fa-fw fa-instagram"></i></a> </li>
                        <li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-twitter" href="#"><i class="fab fa-fw fa-twitter"></i></a> </li>
                        <li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-linkedin" href="#"><i class="fab fa-fw fa-linkedin-in"></i></a> </li>
                    </ul>
                    <!-- Contact info -->
                    <div>
                        <p class="mb-1 small"><a href="#" class="text-white"><i class="far fa-envelope fa-fw me-2"></i>example@gmail.com</a></p>
                        <p class="mb-0 small"><a href="#" class="text-white"><i class="fas fa-headset fa-fw me-2"></i>09380417520</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal END -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

<!-- Bootstrap JS -->
<script src="<?php asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>

<!-- Vendors -->
<script src="<?php asset('vendor/tiny-slider/tiny-slider-rtl.js') ?>"></script>
<script src="<?php asset('vendor/glightbox/js/glightbox.js') ?>"></script>
<script src="<?php asset('vendor/choices/js/choices.min.js') ?>"></script>

<!-- Template Functions -->
<script src="<?php asset('js/functions.js') ?>"></script>