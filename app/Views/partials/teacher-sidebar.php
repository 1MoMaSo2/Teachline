<!-- Teacher Sidebar START -->
<div class="col-xl-3">

    <!-- Responsive offcanvas body START -->
    <div
        class="offcanvas-xl offcanvas-end"
        tabindex="-1"
        id="offcanvasSidebar">

        <!-- Offcanvas body -->
        <div class="offcanvas-body p-3 p-xl-0">

            <div class="bg-dark border rounded-3 pb-0 p-3 w-75">

                <!-- Dashboard menu -->
                <div class="list-group list-group-dark list-group-borderless">

                    <a
                        class="list-group-item"
                        href="<?= base_url('/teacher') ?>">

                        <i class="bi bi-ui-checks-grid fa-fw me-2"></i>

                        داشبورد

                    </a>

                    <a
                        class="list-group-item"
                        href="<?= base_url('/teacher/create-course') ?>">

                        <i class="bi bi-collection-play fa-fw me-2"></i>

                        افزودن دوره

                    </a>

                    <a
                        class="list-group-item"
                        href="<?= base_url('/teacher/courses') ?>">

                        <i class="bi bi-folder-check fa-fw me-2"></i>

                        لیست دوره‌ها

                    </a>

                </div>

            </div>

        </div>
        <!-- Offcanvas body END -->

    </div>
    <!-- Responsive offcanvas body END -->

</div>
<!-- Teacher Sidebar END -->