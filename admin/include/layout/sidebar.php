<div id="layoutSidenav_nav">
    <nav class="snav shadow-right snav-light">
        <div class="snav-menu">
            <div class="nav accordion" id="accordionSidenav">

                <div class="snav-menu-heading">
                    <img class="w-50 h-100" style="margin-right: 58px" src="assets/img/logo_teachline.svg" alt="logo_teachline">
                </div>


                <!-- داشبورد -->
                <a class="nav-link collapsed active" href="admin-dashboard.php">
                    <div class="nav-link-icon"><i class="bx bx-pulse"></i></div>
                    داشبورد
                </a>

                <!-- مدیریت دوره ها -->
                <a class="nav-link collapsed" href="admin-waiting-courses-list.php">
                    <div class="nav-link-icon"><i class="bx bx-columns"></i></div>
                    مدیریت دوره ها
                </a>

                <!-- مدیریت دبیران -->
                <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                   data-bs-target="#collapseApps" aria-expanded="false" aria-controls="collapseApps">
                    <div class="nav-link-icon"><i class="bx bx-photo-album"></i></div>
                    مدیریت دبیران
                    <div class="snav-collapse-arrow"><i class="bx bx-chevron-down"></i></div>
                </a>
                <div class="collapse" id="collapseApps" data-bs-parent="#accordionSidenav">
                    <nav class="snav-menu-nested nav accordion" id="accordionSidenavAppsMenu">

                        <!-- دبیران -->
                        <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                           data-bs-target="#appsCollapseUserManagement" aria-expanded="false"
                           aria-controls="appsCollapseUserManagement">
                            دبیران
                            <div class="snav-collapse-arrow"><i class="bx bx-chevron-down"></i></div>
                        </a>
                        <div class="collapse" id="appsCollapseUserManagement"
                             data-bs-parent="#accordionSidenavAppsMenu">
                            <nav class="snav-menu-nested nav">
                                <a class="nav-link" href="admin-approved-instructors-list.php">لیست دبیران تایید شده</a>
                                <a class="nav-link" href="admin-waiting-instructors-list.php">لیست دبیران در انتظار</a>
                            </nav>
                        </div>
                        <!-- مدیریت دبیران -->
                    </nav>
                </div>

                <!-- پایه های تحصیلی -->
                <a class="nav-link" href="admin-add-education-basic.php">
                    <div class="nav-link-icon"><i class="bx bxs-backpack"></i></div>
                    پایه های تحصیلی
                </a>

                <!-- رشته های تحصیلی -->
                <a class="nav-link" href="admin-add-field-study.php">
                    <div class="nav-link-icon"><i class="bx bxs-area"></i></div>
                    رشته های تحصیلی
                </a>

                <!-- نوع کتاب -->
                <a class="nav-link" href="admin-add-type-book.php">
                    <div class="nav-link-icon"><i class="bx bx-archive"></i></div>
                    نوع کتاب
                </a>
            </div>
        </div>
    </nav>
</div>