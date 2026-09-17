<nav
    class="is-rtl topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light bg-white"
    id="snavAccordion"
>

    <button
        class="btn btn-icon btn-transparent-dark order-1 order-lg-0 me-2 ms-lg-2 me-lg-0"
        id="sidebarToggle"
    >
        <i class="bx bx-menu bx-sm"></i>
    </button>

    <a
        class="navbar-brand pe-3 ps-4 ps-lg-2"
        href="<?= base_url('/admin') ?>"
    >
        پنل مدیر
    </a>

    <ul class="navbar-nav align-items-center ms-auto">

        <li class="nav-item dropdown no-caret dropdown-user me-3 me-lg-4">

            <a
                class="btn btn-icon btn-transparent-dark dropdown-toggle"
                id="navbarDropdownUserImage"
                href="javascript:void(0);"
                role="button"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
            >
                <img
                    class="img-fluid"
                    src="<?= base_url('/assets/img/svg/browser-stats.svg') ?>"
                    alt="TeachLine"
                >
            </a>

            <div
                class="dropdown-menu dropdown-menu-w15 dropdown-menu-end border-0 shadow animated--fade-in-up"
                aria-labelledby="navbarDropdownUserImage"
            >

                <h6 class="dropdown-header d-flex align-items-center">

                    <div class="dropdown-user-details">

                        <div class="dropdown-user-details-name">
                            <?= htmlspecialchars($_SESSION['admin_username'] ?? 'مدیر') ?>
                        </div>

                        <div class="dropdown-user-details-email">
                            <?= htmlspecialchars($_SESSION['admin_email'] ?? '') ?>
                        </div>

                    </div>

                </h6>

                <div class="dropdown-divider"></div>

                <a
                    class="dropdown-item"
                    href="<?= base_url('/admin/logout') ?>"
                >

                    <div class="dropdown-item-icon">
                        <i class="bx bx-log-out"></i>
                    </div>

                    خروج

                </a>

            </div>

        </li>

    </ul>

</nav>