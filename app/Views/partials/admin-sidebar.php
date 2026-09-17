<div id="layoutSidenav_nav">

    <nav class="snav shadow-right snav-light">

        <div class="snav-menu">

            <div class="nav accordion" id="accordionSidenav">

                <!-- Logo -->
                <div class="snav-menu-heading">

                    <img
                        class="w-50 h-100"
                        style="margin-right: 58px"
                        src="<?= base_url('/assets/img/logo_teachline.svg') ?>"
                        alt="TeachLine"
                    >

                </div>


                <!-- Dashboard -->
                <a
                    class="nav-link collapsed active"
                    href="<?= base_url('/admin') ?>"
                >

                    <div class="nav-link-icon">
                        <i class="bx bx-pulse"></i>
                    </div>

                    داشبورد

                </a>


                <!-- Course Management -->
                <a
                    class="nav-link collapsed"
                    href="javascript:void(0);"
                >

                    <div class="nav-link-icon">
                        <i class="bx bx-columns"></i>
                    </div>

                    مدیریت دوره ها

                </a>


                <!-- Teacher Management -->
                <a
                    class="nav-link collapsed"
                    href="javascript:void(0);"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseTeachers"
                    aria-expanded="false"
                    aria-controls="collapseTeachers"
                >

                    <div class="nav-link-icon">
                        <i class="bx bx-photo-album"></i>
                    </div>

                    مدیریت دبیران

                    <div class="snav-collapse-arrow">
                        <i class="bx bx-chevron-down"></i>
                    </div>

                </a>


                <!-- Teacher Submenu -->
                <div
                    class="collapse"
                    id="collapseTeachers"
                    data-bs-parent="#accordionSidenav"
                >

                    <nav
                        class="snav-menu-nested nav accordion"
                        id="accordionTeacherMenu"
                    >

                        <a
                            class="nav-link collapsed"
                            href="javascript:void(0);"
                            data-bs-toggle="collapse"
                            data-bs-target="#teacherManagement"
                            aria-expanded="false"
                            aria-controls="teacherManagement"
                        >

                            دبیران

                            <div class="snav-collapse-arrow">
                                <i class="bx bx-chevron-down"></i>
                            </div>

                        </a>
                        <div
                            class="collapse"
                            id="teacherManagement"
                            data-bs-parent="#accordionTeacherMenu"
                        >

                            <nav class="snav-menu-nested nav">

                                <a
                                    class="nav-link"
                                    href="javascript:void(0);"
                                >
                                    لیست دبیران تایید شده
                                </a>

                                <a
                                    class="nav-link"
                                    href="javascript:void(0);"
                                >
                                    لیست دبیران در انتظار
                                </a>

                            </nav>

                        </div>

                    </nav>

                </div>


                <!-- Education Basics -->
                <a
                    class="nav-link"
                    href="javascript:void(0);"
                >

                    <div class="nav-link-icon">
                        <i class="bx bxs-backpack"></i>
                    </div>

                    پایه های تحصیلی

                </a>


                <!-- Field Studies -->
                <a
                    class="nav-link"
                    href="javascript:void(0);"
                >

                    <div class="nav-link-icon">
                        <i class="bx bxs-area"></i>
                    </div>

                    رشته های تحصیلی

                </a>


                <!-- Book Types -->
                <a
                    class="nav-link"
                    href="javascript:void(0);"
                >

                    <div class="nav-link-icon">
                        <i class="bx bx-archive"></i>
                    </div>

                    نوع کتاب

                </a>

            </div>

        </div>

    </nav>

</div>