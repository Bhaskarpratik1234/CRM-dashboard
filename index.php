<!doctype html>
<html lang="en" data-layout="vertical" data-layout-style="default" data-layout-position="fixed" data-topbar="light"
    data-sidebar="dark" data-layout-width="fluid" data-sidebar-size="lg">

    <?php include 'includes/ticketHead.html'; ?>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

    <?php include 'includes/ticetHeader.html'; ?>
    <?php include 'includes/ticketSidenav.html'; ?>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col">

                            <div class="h-100">
                                <div class="row mb-3 pb-1">
                                    <div class="col-12">
                                        <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                            <div class="flex-grow-1">
                                                <h1 class="fs-28 mb-1 fw-bolder text-capitalize">tickets overview</h1>
                                                <!-- <p class="text-muted mb-0">Here's what's happening with your store today.</p> -->
                                            </div>

                                        </div>
                                        <!-- end card header -->
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->

                                <div class="row">
                                <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="col-xl-3 col-md-3 carousel-item active">
                                        <!-- card -->
                                        <div class="card card-">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p
                                                            class="text-uppercase fs-14 fw-medium text-muted text-truncate mb-0">
                                                            COMPLETED ORDERS</p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <div class="dropdown card-header-dropdown">
                                                            <a class="text-reset dropdown-btn" href="#"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <span class="text-muted">This Month<i
                                                                        class="mdi mdi-chevron-down ms-1"></i></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Download Report</a>
                                                                <a class="dropdown-item" href="#">Export</a>
                                                                <a class="dropdown-item" href="#">Import</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between mt-4">
                                                    <div>
                                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                                                class="counter-value" data-target="1234">1234</span>
                                                        </h4>
                                                        <!-- <a href="#" class="text-decoration-underline">View net earnings</a> -->
                                                    </div>
                                                    <div class="mb-4 flex-shrink-0">
                                                        <div class="dropdown card-header-dropdown">
                                                            <a class="text-reset dropdown-btn" href="#"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <span class="text-muted fs-14 fw-normal">Order<i
                                                                        class="mdi mdi-chevron-down ms-1"></i></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Download Report</a>
                                                                <a class="dropdown-item" href="#">Export</a>
                                                                <a class="dropdown-item" href="#">Import</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->
                               
                                    <div class="col-xl-3 col-md-3 carousel-item">
                                        <!-- card -->
                                        <div class="card card-e">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p
                                                            class="text-uppercase fs-14  fw-medium text-muted text-truncate mb-0">
                                                            INPROGRESS ORDERS</p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <div class="dropdown card-header-dropdown">
                                                            <a class="text-reset dropdown-btn" href="#"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <span class="text-muted fs-14 fw-normal">This Month<i
                                                                        class="mdi mdi-chevron-down ms-1"></i></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Download Report</a>
                                                                <a class="dropdown-item" href="#">Export</a>
                                                                <a class="dropdown-item" href="#">Import</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between mt-4">
                                                    <div>
                                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                                                class="counter-value" data-target="534">534</span></h4>
                                                        <!-- <a href="#" class="text-decoration-underline">View all orders</a> -->
                                                    </div>
                                                    <div class=" flex-shrink-0 mb-4">
                                                        <div class="dropdown card-header-dropdown">
                                                            <a class="text-reset dropdown-btn" href="#"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <span class="text-muted">Order<i
                                                                        class="mdi mdi-chevron-down ms-1"></i></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Download Report</a>
                                                                <a class="dropdown-item" href="#">Export</a>
                                                                <a class="dropdown-item" href="#">Import</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->

                                    <div class="col-xl-3 col-md-3 carousel-item">
                                        <!-- card -->
                                        <div class="card card-">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p
                                                            class="text-uppercase fs-14 fw-medium text-muted text-truncate mb-0">
                                                            PENDING ORDERS</p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <div class="dropdown card-header-dropdown">
                                                            <a class="text-reset dropdown-btn" href="#"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <span class="text-muted fs-14  fw-normal">This Month<i
                                                                        class="mdi mdi-chevron-down ms-1"></i></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Download Report</a>
                                                                <a class="dropdown-item" href="#">Export</a>
                                                                <a class="dropdown-item" href="#">Import</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between mt-4">
                                                    <div>
                                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                                                class="counter-value" data-target="424">424</span> </h4>
                                                        <!-- <a href="#" class="text-decoration-underline">See details</a> -->
                                                    </div>
                                                    <div class=" flex-shrink-0 mb-4">
                                                        <div class="dropdown card-header-dropdown">
                                                            <a class="text-reset dropdown-btn" href="#"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <span class="text-muted fs-14 fw-normal">Order<i
                                                                        class="mdi mdi-chevron-down ms-1"></i></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Download Report</a>
                                                                <a class="dropdown-item" href="#">Export</a>
                                                                <a class="dropdown-item" href="#">Import</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->

                                    <div class="col-xl-3 col-md-3 carousel-item">
                                        <!-- card -->
                                        <div class="card card-">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p
                                                            class="text-uppercase fs-14  fw-medium text-muted text-truncate mb-0">
                                                            APRVL. PENDING ORDERS</p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <div class="dropdown card-header-dropdown">
                                                            <a class="text-reset dropdown-btn" href="#"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <span class="text-muted fs-14  fw-normal">This Month<i
                                                                        class="mdi mdi-chevron-down ms-1"></i></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Download Report</a>
                                                                <a class="dropdown-item" href="#">Export</a>
                                                                <a class="dropdown-item" href="#">Import</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between mt-4">
                                                    <div>
                                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                                                class="counter-value" data-target="110">110</span> </h4>
                                                        <!-- <a href="#" class="text-decoration-underline">Withdraw money</a> -->
                                                    </div>
                                                    <div class=" flex-shrink-0 mb-4">
                                                        <div class="dropdown card-header-dropdown">
                                                            <a class="text-reset dropdown-btn" href="#"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <span class="text-muted fs-14  fw-normal">Order<i
                                                                        class="mdi mdi-chevron-down ms-1"></i></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Download Report</a>
                                                                <a class="dropdown-item" href="#">Export</a>
                                                                <a class="dropdown-item" href="#">Import</a>
                                                            </div>
                                                        </div>
                                                        <!-- <span class="avatar-title bg-primary-subtle rounded fs-3">
                                                            <i class="bx bx-wallet text-primary"></i>
                                                        </span> -->
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->
                                    <div class="col-xl-3 col-md-3 carousel-item">
                                        <!-- card -->
                                        <div class="card card-">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p
                                                            class="text-uppercase fs-14  fw-medium text-muted text-truncate mb-0">
                                                            APRVL. PENDING ORDERS</p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <div class="dropdown card-header-dropdown">
                                                            <a class="text-reset dropdown-btn" href="#"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <span class="text-muted fs-14  fw-normal">This Month<i
                                                                        class="mdi mdi-chevron-down ms-1"></i></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Download Report</a>
                                                                <a class="dropdown-item" href="#">Export</a>
                                                                <a class="dropdown-item" href="#">Import</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between mt-4">
                                                    <div>
                                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                                                class="counter-value" data-target="110">110</span> </h4>
                                                        <!-- <a href="#" class="text-decoration-underline">Withdraw money</a> -->
                                                    </div>
                                                    <div class=" flex-shrink-0 mb-4">
                                                        <div class="dropdown card-header-dropdown">
                                                            <a class="text-reset dropdown-btn" href="#"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <span class="text-muted fs-14  fw-normal">Order<i
                                                                        class="mdi mdi-chevron-down ms-1"></i></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Download Report</a>
                                                                <a class="dropdown-item" href="#">Export</a>
                                                                <a class="dropdown-item" href="#">Import</a>
                                                            </div>
                                                        </div>
                                                        <!-- <span class="avatar-title bg-primary-subtle rounded fs-3">
                                                            <i class="bx bx-wallet text-primary"></i>
                                                        </span> -->
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->
                                    <div class="col-xl-3 col-md-3 carousel-item">
                                        <!-- card -->
                                        <div class="card card-">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p
                                                            class="text-uppercase fs-14  fw-medium text-muted text-truncate mb-0">
                                                            APRVL. PENDING ORDERS</p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <div class="dropdown card-header-dropdown">
                                                            <a class="text-reset dropdown-btn" href="#"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <span class="text-muted fs-14  fw-normal">This Month<i
                                                                        class="mdi mdi-chevron-down ms-1"></i></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Download Report</a>
                                                                <a class="dropdown-item" href="#">Export</a>
                                                                <a class="dropdown-item" href="#">Import</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between mt-4">
                                                    <div>
                                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                                                class="counter-value" data-target="110">110</span> </h4>
                                                        <!-- <a href="#" class="text-decoration-underline">Withdraw money</a> -->
                                                    </div>
                                                    <div class=" flex-shrink-0 mb-4">
                                                        <div class="dropdown card-header-dropdown">
                                                            <a class="text-reset dropdown-btn" href="#"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <span class="text-muted fs-14  fw-normal">Order<i
                                                                        class="mdi mdi-chevron-down ms-1"></i></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Download Report</a>
                                                                <a class="dropdown-item" href="#">Export</a>
                                                                <a class="dropdown-item" href="#">Import</a>
                                                            </div>
                                                        </div>
                                                        <!-- <span class="avatar-title bg-primary-subtle rounded fs-3">
                                                            <i class="bx bx-wallet text-primary"></i>
                                                        </span> -->
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->

                                </div> <!-- end row-->
                                <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                                        <span class="" aria-hidden="true"><img src="assets/images/leftArrow.png" alt="" title="" /></span>
                                    </a>
                                    <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                                        <span class="" aria-hidden="true"><img src="assets/images/rightArrow.png" alt="" title="" /></span>
                                    </a>
                                </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-8">
                                        <div class="card card-height-100">
                                            <div class="card-header align-items-center d-flex">
                                                <h4 class="card-title fs-24  fw-medium  mb-0 flex-grow-1">Orders &
                                                    Revenue Report</h4>
                                                <div class="flex-shrink-0">
                                                    <div class="dropdown card-header-dropdown">
                                                        <a class="text-reset dropdown-btn" href="#"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <span class="fw-semibold text-uppercase fs-14  fw-normal">
                                                            </span><span class="text-muted">This Year<i
                                                                    class="mdi mdi-chevron-down ms-1"></i></span>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Today</a>
                                                            <a class="dropdown-item" href="#">Last Week</a>
                                                            <a class="dropdown-item" href="#">Last Month</a>
                                                            <a class="dropdown-item" href="#">Current Year</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end card header -->
                                            <div class="card-body px-0">
                                                <ul class="list-inline main-chart text-center mb-0">
                                                    <li class="list-inline-item chart-border-left me-0 border-0">
                                                        <h4 class="text-primary">$584k <span
                                                                class="text-muted d-inline-block fs-13 align-middle ms-2">Revenue</span>
                                                        </h4>
                                                    </li>
                                                    <li class="list-inline-item chart-border-left me-0">
                                                        <h4>$497k<span
                                                                class="text-muted d-inline-block fs-13 align-middle ms-2">Expenses</span>
                                                        </h4>
                                                    </li>
                                                    <li class="list-inline-item chart-border-left me-0">
                                                        <h4><span data-plugin="counterup">3.6</span>%<span
                                                                class="text-muted d-inline-block fs-13 align-middle ms-2">Profit
                                                                Ratio</span></h4>
                                                    </li>
                                                </ul>

                                                <div id="revenue-expenses-charts"
                                                    data-colors='["--vz-success", "--vz-danger"]' class="apex-charts"
                                                    dir="ltr"></div>
                                            </div>
                                        </div><!-- end card --><!-- end card -->
                                    </div><!-- end col -->

                                    <div class="col-xl-4">
                                        <!-- card -->
                                        <div class="card card-height-100">
                                            <div class="card-header align-items-center d-flex">
                                                <h4 class="card-title fs-24  fw-medium mb-0 flex-grow-1">User Overview
                                                </h4>
                                                <div class="flex-shrink-0">
                                                    <div class="dropdown card-header-dropdown">
                                                        <a class="text-reset dropdown-btn" href="#"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <span class="text-muted fs-14  fw-normal">This Month<i
                                                                    class="mdi mdi-chevron-down ms-1"></i></span>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Download Report</a>
                                                            <a class="dropdown-item" href="#">Export</a>
                                                            <a class="dropdown-item" href="#">Import</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end card header -->

                                            <!-- card body -->
                                            <div class="card-body">
                                                <!-- <svg width="380" height="480" viewBox="0 0 380 480" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="380" height="480" rx="4" fill="white"/>
                                                    <path d="M39.992 55.288C38.792 55.288 37.704 55.056 36.728 54.592C35.768 54.112 35 53.384 34.424 52.408C33.864 51.432 33.584 50.192 33.584 48.688V38.2H36.128V48.712C36.128 50.184 36.48 51.264 37.184 51.952C37.888 52.64 38.84 52.984 40.04 52.984C41.224 52.984 42.168 52.64 42.872 51.952C43.576 51.264 43.928 50.184 43.928 48.712V38.2H46.472V48.688C46.472 50.192 46.176 51.432 45.584 52.408C45.008 53.384 44.224 54.112 43.232 54.592C42.256 55.056 41.176 55.288 39.992 55.288ZM54.3913 55.288C52.8873 55.288 51.6473 54.92 50.6713 54.184C49.6953 53.448 49.1353 52.472 48.9913 51.256H51.5592C51.6873 51.8 51.9913 52.272 52.4713 52.672C52.9513 53.056 53.5833 53.248 54.3672 53.248C55.1353 53.248 55.6953 53.088 56.0473 52.768C56.3993 52.448 56.5753 52.08 56.5753 51.664C56.5753 51.056 56.3273 50.648 55.8313 50.44C55.3513 50.216 54.6793 50.016 53.8153 49.84C53.1433 49.696 52.4713 49.504 51.7993 49.264C51.1433 49.024 50.5913 48.688 50.1433 48.256C49.7113 47.808 49.4953 47.208 49.4953 46.456C49.4953 45.416 49.8953 44.552 50.6953 43.864C51.4953 43.16 52.6153 42.808 54.0553 42.808C55.3833 42.808 56.4553 43.128 57.2713 43.768C58.1033 44.408 58.5913 45.312 58.7353 46.48H56.2873C56.2073 45.968 55.9673 45.568 55.5673 45.28C55.1833 44.992 54.6633 44.848 54.0073 44.848C53.3673 44.848 52.8713 44.984 52.5193 45.256C52.1673 45.512 51.9913 45.848 51.9913 46.264C51.9913 46.68 52.2313 47.008 52.7113 47.248C53.2073 47.488 53.8553 47.704 54.6553 47.896C55.4553 48.072 56.1913 48.28 56.8633 48.52C57.5513 48.744 58.1033 49.08 58.5193 49.528C58.9353 49.976 59.1433 50.632 59.1433 51.496C59.1593 52.584 58.7353 53.488 57.8713 54.208C57.0233 54.928 55.8633 55.288 54.3913 55.288ZM67.4885 55.288C66.3205 55.288 65.2805 55.032 64.3685 54.52C63.4725 53.992 62.7685 53.264 62.2565 52.336C61.7445 51.408 61.4885 50.328 61.4885 49.096C61.4885 47.848 61.7365 46.752 62.2325 45.808C62.7445 44.864 63.4485 44.128 64.3445 43.6C65.2565 43.072 66.3125 42.808 67.5125 42.808C68.6805 42.808 69.6965 43.072 70.5605 43.6C71.4245 44.112 72.0965 44.8 72.5765 45.664C73.0565 46.528 73.2965 47.48 73.2965 48.52C73.2965 48.68 73.2885 48.856 73.2725 49.048C73.2725 49.224 73.2645 49.424 73.2485 49.648H63.9845C64.0645 50.8 64.4405 51.68 65.1125 52.288C65.8005 52.88 66.5925 53.176 67.4885 53.176C68.2085 53.176 68.8085 53.016 69.2885 52.696C69.7845 52.36 70.1525 51.912 70.3925 51.352H72.9365C72.6165 52.472 71.9765 53.408 71.0165 54.16C70.0725 54.912 68.8965 55.288 67.4885 55.288ZM67.4885 44.896C66.6405 44.896 65.8885 45.152 65.2325 45.664C64.5765 46.16 64.1765 46.912 64.0325 47.92H70.7525C70.7045 46.992 70.3765 46.256 69.7685 45.712C69.1605 45.168 68.4005 44.896 67.4885 44.896ZM75.9361 55V43.096H78.2161L78.4321 45.352C78.8481 44.568 79.4241 43.952 80.1601 43.504C80.9121 43.04 81.8161 42.808 82.8721 42.808V45.472H82.1761C81.4721 45.472 80.8401 45.592 80.2801 45.832C79.7361 46.056 79.2961 46.448 78.9601 47.008C78.6401 47.552 78.4801 48.312 78.4801 49.288V55H75.9361ZM98.9482 55.288C97.2842 55.288 95.8282 54.92 94.5802 54.184C93.3322 53.448 92.3562 52.432 91.6522 51.136C90.9482 49.824 90.5962 48.312 90.5962 46.6C90.5962 44.888 90.9482 43.384 91.6522 42.088C92.3562 40.776 93.3322 39.752 94.5802 39.016C95.8282 38.28 97.2842 37.912 98.9482 37.912C100.612 37.912 102.068 38.28 103.316 39.016C104.564 39.752 105.532 40.776 106.22 42.088C106.924 43.384 107.276 44.888 107.276 46.6C107.276 48.312 106.924 49.824 106.22 51.136C105.532 52.432 104.564 53.448 103.316 54.184C102.068 54.92 100.612 55.288 98.9482 55.288ZM98.9482 53.008C100.1 53.008 101.1 52.752 101.948 52.24C102.812 51.728 103.484 50.992 103.964 50.032C104.444 49.072 104.684 47.928 104.684 46.6C104.684 45.272 104.444 44.128 103.964 43.168C103.484 42.208 102.812 41.472 101.948 40.96C101.1 40.448 100.1 40.192 98.9482 40.192C97.7962 40.192 96.7882 40.448 95.9242 40.96C95.0602 41.472 94.3882 42.208 93.9082 43.168C93.4442 44.128 93.2122 45.272 93.2122 46.6C93.2122 47.928 93.4442 49.072 93.9082 50.032C94.3882 50.992 95.0602 51.728 95.9242 52.24C96.7882 52.752 97.7962 53.008 98.9482 53.008ZM113.35 55L108.886 43.096H111.55L114.862 52.576L118.174 43.096H120.814L116.374 55H113.35ZM127.864 55.288C126.696 55.288 125.656 55.032 124.744 54.52C123.848 53.992 123.144 53.264 122.632 52.336C122.12 51.408 121.864 50.328 121.864 49.096C121.864 47.848 122.112 46.752 122.608 45.808C123.12 44.864 123.824 44.128 124.72 43.6C125.632 43.072 126.688 42.808 127.888 42.808C129.056 42.808 130.072 43.072 130.936 43.6C131.8 44.112 132.472 44.8 132.952 45.664C133.432 46.528 133.672 47.48 133.672 48.52C133.672 48.68 133.664 48.856 133.648 49.048C133.648 49.224 133.64 49.424 133.624 49.648H124.36C124.44 50.8 124.816 51.68 125.488 52.288C126.176 52.88 126.968 53.176 127.864 53.176C128.584 53.176 129.184 53.016 129.664 52.696C130.16 52.36 130.528 51.912 130.768 51.352H133.312C132.992 52.472 132.352 53.408 131.392 54.16C130.448 54.912 129.272 55.288 127.864 55.288ZM127.864 44.896C127.016 44.896 126.264 45.152 125.608 45.664C124.952 46.16 124.552 46.912 124.408 47.92H131.128C131.08 46.992 130.752 46.256 130.144 45.712C129.536 45.168 128.776 44.896 127.864 44.896ZM136.311 55V43.096H138.591L138.807 45.352C139.223 44.568 139.799 43.952 140.535 43.504C141.287 43.04 142.191 42.808 143.247 42.808V45.472H142.551C141.847 45.472 141.215 45.592 140.655 45.832C140.111 46.056 139.671 46.448 139.335 47.008C139.015 47.552 138.855 48.312 138.855 49.288V55H136.311ZM148.764 55L144.3 43.096H146.964L150.276 52.576L153.588 43.096H156.228L151.788 55H148.764ZM159.759 40.84C159.279 40.84 158.879 40.696 158.559 40.408C158.255 40.104 158.103 39.728 158.103 39.28C158.103 38.832 158.255 38.464 158.559 38.176C158.879 37.872 159.279 37.72 159.759 37.72C160.239 37.72 160.631 37.872 160.935 38.176C161.255 38.464 161.415 38.832 161.415 39.28C161.415 39.728 161.255 40.104 160.935 40.408C160.631 40.696 160.239 40.84 159.759 40.84ZM158.487 55V43.096H161.031V55H158.487ZM169.957 55.288C168.789 55.288 167.749 55.032 166.837 54.52C165.941 53.992 165.237 53.264 164.725 52.336C164.213 51.408 163.957 50.328 163.957 49.096C163.957 47.848 164.205 46.752 164.701 45.808C165.213 44.864 165.917 44.128 166.813 43.6C167.725 43.072 168.781 42.808 169.981 42.808C171.149 42.808 172.165 43.072 173.029 43.6C173.893 44.112 174.565 44.8 175.045 45.664C175.525 46.528 175.765 47.48 175.765 48.52C175.765 48.68 175.757 48.856 175.741 49.048C175.741 49.224 175.733 49.424 175.717 49.648H166.453C166.533 50.8 166.909 51.68 167.581 52.288C168.269 52.88 169.061 53.176 169.957 53.176C170.677 53.176 171.277 53.016 171.757 52.696C172.253 52.36 172.621 51.912 172.861 51.352H175.405C175.085 52.472 174.445 53.408 173.485 54.16C172.541 54.912 171.365 55.288 169.957 55.288ZM169.957 44.896C169.109 44.896 168.357 45.152 167.701 45.664C167.045 46.16 166.645 46.912 166.501 47.92H173.221C173.173 46.992 172.845 46.256 172.237 45.712C171.629 45.168 170.869 44.896 169.957 44.896ZM180.312 55L176.808 43.096H179.352L181.656 52.072L184.248 43.096H187.08L189.672 52.072L191.976 43.096H194.52L191.016 55H188.4L185.664 45.64L182.928 55H180.312Z" fill="#121212"/>
                                                    <path d="M258.855 55.5V46.666H255.929V45.7H262.957V46.666H260.031V55.5H258.855ZM264.323 55.5V45.42H265.499V49.746C265.733 49.3167 266.064 48.9853 266.493 48.752C266.923 48.5093 267.389 48.388 267.893 48.388C268.696 48.388 269.34 48.64 269.825 49.144C270.311 49.6387 270.553 50.404 270.553 51.44V55.5H269.391V51.566C269.391 50.1193 268.808 49.396 267.641 49.396C267.035 49.396 266.526 49.6153 266.115 50.054C265.705 50.4833 265.499 51.0993 265.499 51.902V55.5H264.323ZM273.049 47.016C272.816 47.016 272.62 46.9413 272.461 46.792C272.312 46.6333 272.237 46.4373 272.237 46.204C272.237 45.98 272.312 45.7933 272.461 45.644C272.62 45.4947 272.816 45.42 273.049 45.42C273.273 45.42 273.464 45.4947 273.623 45.644C273.782 45.7933 273.861 45.98 273.861 46.204C273.861 46.4373 273.782 46.6333 273.623 46.792C273.464 46.9413 273.273 47.016 273.049 47.016ZM272.461 55.5V48.556H273.637V55.5H272.461ZM278.345 55.668C277.514 55.668 276.823 55.458 276.273 55.038C275.722 54.618 275.4 54.0487 275.307 53.33H276.511C276.585 53.694 276.777 54.0113 277.085 54.282C277.402 54.5433 277.827 54.674 278.359 54.674C278.853 54.674 279.217 54.5713 279.451 54.366C279.684 54.1513 279.801 53.8993 279.801 53.61C279.801 53.19 279.647 52.91 279.339 52.77C279.04 52.63 278.615 52.504 278.065 52.392C277.691 52.3173 277.318 52.21 276.945 52.07C276.571 51.93 276.259 51.734 276.007 51.482C275.755 51.2207 275.629 50.88 275.629 50.46C275.629 49.8533 275.853 49.3587 276.301 48.976C276.758 48.584 277.374 48.388 278.149 48.388C278.886 48.388 279.488 48.5747 279.955 48.948C280.431 49.312 280.706 49.8347 280.781 50.516H279.619C279.572 50.1613 279.418 49.886 279.157 49.69C278.905 49.4847 278.564 49.382 278.135 49.382C277.715 49.382 277.388 49.4707 277.155 49.648C276.931 49.8253 276.819 50.0587 276.819 50.348C276.819 50.628 276.963 50.8473 277.253 51.006C277.551 51.1647 277.953 51.3 278.457 51.412C278.886 51.5053 279.292 51.622 279.675 51.762C280.067 51.8927 280.384 52.0933 280.627 52.364C280.879 52.6253 281.005 53.008 281.005 53.512C281.014 54.1373 280.776 54.6553 280.291 55.066C279.815 55.4673 279.166 55.668 278.345 55.668ZM286.46 55.5V45.7H287.832L291.36 52.532L294.86 45.7H296.246V55.5H295.07V47.8L291.794 54.1H290.912L287.636 47.814V55.5H286.46ZM301.407 55.668C300.754 55.668 300.166 55.5187 299.643 55.22C299.121 54.9213 298.705 54.5013 298.397 53.96C298.099 53.4093 297.949 52.7653 297.949 52.028C297.949 51.2907 298.103 50.6513 298.411 50.11C298.719 49.5593 299.135 49.1347 299.657 48.836C300.189 48.5373 300.782 48.388 301.435 48.388C302.089 48.388 302.677 48.5373 303.199 48.836C303.722 49.1347 304.133 49.5593 304.431 50.11C304.739 50.6513 304.893 51.2907 304.893 52.028C304.893 52.7653 304.739 53.4093 304.431 53.96C304.123 54.5013 303.703 54.9213 303.171 55.22C302.649 55.5187 302.061 55.668 301.407 55.668ZM301.407 54.66C301.809 54.66 302.182 54.562 302.527 54.366C302.873 54.17 303.153 53.876 303.367 53.484C303.582 53.092 303.689 52.6067 303.689 52.028C303.689 51.4493 303.582 50.964 303.367 50.572C303.162 50.18 302.887 49.886 302.541 49.69C302.196 49.494 301.827 49.396 301.435 49.396C301.034 49.396 300.661 49.494 300.315 49.69C299.97 49.886 299.69 50.18 299.475 50.572C299.261 50.964 299.153 51.4493 299.153 52.028C299.153 52.6067 299.261 53.092 299.475 53.484C299.69 53.876 299.965 54.17 300.301 54.366C300.647 54.562 301.015 54.66 301.407 54.66ZM306.529 55.5V48.556H307.593L307.663 49.802C307.887 49.3633 308.209 49.018 308.629 48.766C309.049 48.514 309.525 48.388 310.057 48.388C310.878 48.388 311.531 48.64 312.017 49.144C312.511 49.6387 312.758 50.404 312.758 51.44V55.5H311.583V51.566C311.583 50.1193 310.985 49.396 309.791 49.396C309.193 49.396 308.694 49.6153 308.293 50.054C307.901 50.4833 307.705 51.0993 307.705 51.902V55.5H306.529ZM317.284 55.5C316.65 55.5 316.15 55.346 315.786 55.038C315.422 54.73 315.24 54.1747 315.24 53.372V49.55H314.036V48.556H315.24L315.394 46.89H316.416V48.556H318.46V49.55H316.416V53.372C316.416 53.8107 316.505 54.1093 316.682 54.268C316.86 54.4173 317.172 54.492 317.62 54.492H318.348V55.5H317.284ZM319.954 55.5V45.42H321.13V49.746C321.364 49.3167 321.695 48.9853 322.124 48.752C322.554 48.5093 323.02 48.388 323.524 48.388C324.327 48.388 324.971 48.64 325.456 49.144C325.942 49.6387 326.184 50.404 326.184 51.44V55.5H325.022V51.566C325.022 50.1193 324.439 49.396 323.272 49.396C322.666 49.396 322.157 49.6153 321.746 50.054C321.336 50.4833 321.13 51.0993 321.13 51.902V55.5H319.954Z" fill="#71717A"/>
                                                    <path d="M338 48C337.901 47.9994 337.803 48.0183 337.712 48.0557C337.621 48.093 337.538 48.148 337.468 48.2175L332.968 52.7175C332.826 52.8587 332.747 53.0503 332.747 53.25C332.747 53.4497 332.826 53.6413 332.968 53.7825C333.109 53.9237 333.3 54.0031 333.5 54.0031C333.7 54.0031 333.891 53.9237 334.033 53.7825L338 49.8075L341.968 53.775C342.111 53.8979 342.296 53.9621 342.484 53.9548C342.673 53.9475 342.852 53.8692 342.986 53.7357C343.119 53.6021 343.198 53.423 343.205 53.2343C343.212 53.0455 343.148 52.861 343.025 52.7175L338.525 48.2175C338.385 48.0789 338.197 48.0008 338 48Z" fill="#71717A"/>
                                                    <path d="M92.2 220.2C84.9098 220.2 78.9183 226.131 79.7911 233.368C80.9875 243.29 83.533 253.024 87.3732 262.295C92.9013 275.641 101.004 287.767 111.218 297.982C121.433 308.196 133.559 316.299 146.905 321.827C156.176 325.667 165.909 328.212 175.832 329.409C183.069 330.282 189 324.29 189 317V299.4C189 292.11 183.033 286.333 175.888 284.884C171.74 284.043 167.672 282.804 163.743 281.176C155.735 277.859 148.46 272.998 142.331 266.869C136.202 260.74 131.341 253.465 128.024 245.457C126.396 241.528 125.156 237.46 124.316 233.312C122.867 226.167 117.09 220.2 109.8 220.2H92.2Z" fill="#B591BE"/>
                                                    <path d="M191.2 317C191.2 324.29 197.131 330.282 204.368 329.409C214.29 328.212 224.024 325.667 233.295 321.827C246.641 316.299 258.767 308.196 268.982 297.982C279.196 287.767 287.299 275.641 292.827 262.295C296.667 253.024 299.212 243.29 300.409 233.368C301.282 226.131 295.29 220.2 288 220.2L270.4 220.2C263.11 220.2 257.333 226.167 255.884 233.312C255.043 237.46 253.804 241.528 252.176 245.457C248.859 253.465 243.998 260.74 237.869 266.869C231.74 272.998 224.465 277.859 216.457 281.176C212.528 282.804 208.46 284.043 204.312 284.884C197.167 286.333 191.2 292.11 191.2 299.4L191.2 317Z" fill="#FFC478"/>
                                                    <path d="M287.8 218C295.09 218 301.083 212.068 300.202 204.832C297.243 180.509 286.149 157.719 268.489 140.218C247.672 119.589 219.439 108 190 108C160.561 108 132.328 119.589 111.511 140.218C93.8514 157.719 82.7567 180.509 79.7978 204.832C78.9175 212.068 84.9098 218 92.2 218H110.2C117.49 218 123.266 212.031 124.727 204.889C127.308 192.27 133.582 180.571 142.907 171.331C155.397 158.954 172.337 152 190 152C207.663 152 224.603 158.954 237.093 171.331C246.418 180.571 252.692 192.27 255.273 204.889C256.734 212.031 262.51 218 269.8 218H287.8Z" fill="#91B388"/>
                                                    <rect x="32" y="395.5" width="14" height="14" rx="2" fill="#91B288"/>
                                                    <path d="M57.8005 407.168C56.8392 407.168 55.9945 406.958 55.2665 406.538C54.5478 406.109 53.9832 405.511 53.5725 404.746C53.1712 403.981 52.9705 403.099 52.9705 402.1C52.9705 401.101 53.1712 400.224 53.5725 399.468C53.9832 398.703 54.5478 398.105 55.2665 397.676C55.9945 397.247 56.8392 397.032 57.8005 397.032C58.7712 397.032 59.6158 397.247 60.3345 397.676C61.0625 398.105 61.6272 398.703 62.0285 399.468C62.4298 400.224 62.6305 401.101 62.6305 402.1C62.6305 403.099 62.4298 403.981 62.0285 404.746C61.6272 405.511 61.0625 406.109 60.3345 406.538C59.6158 406.958 58.7712 407.168 57.8005 407.168ZM57.8005 406.132C58.5192 406.132 59.1492 405.973 59.6905 405.656C60.2412 405.329 60.6658 404.867 60.9645 404.27C61.2725 403.663 61.4265 402.94 61.4265 402.1C61.4265 401.26 61.2725 400.541 60.9645 399.944C60.6658 399.347 60.2412 398.889 59.6905 398.572C59.1492 398.245 58.5192 398.082 57.8005 398.082C57.0818 398.082 56.4472 398.245 55.8965 398.572C55.3552 398.889 54.9305 399.347 54.6225 399.944C54.3238 400.541 54.1745 401.26 54.1745 402.1C54.1745 402.94 54.3238 403.663 54.6225 404.27C54.9305 404.867 55.3552 405.329 55.8965 405.656C56.4472 405.973 57.0818 406.132 57.8005 406.132ZM64.257 407V400.056H65.321L65.391 401.302C65.615 400.863 65.937 400.518 66.357 400.266C66.777 400.014 67.253 399.888 67.785 399.888C68.6063 399.888 69.2597 400.14 69.745 400.644C70.2397 401.139 70.487 401.904 70.487 402.94V407H69.311V403.066C69.311 401.619 68.7137 400.896 67.519 400.896C66.9217 400.896 66.4223 401.115 66.021 401.554C65.629 401.983 65.433 402.599 65.433 403.402V407H64.257ZM72.2687 407V396.92H73.4447V407H72.2687ZM76.0863 398.516C75.8529 398.516 75.6569 398.441 75.4983 398.292C75.3489 398.133 75.2743 397.937 75.2743 397.704C75.2743 397.48 75.3489 397.293 75.4983 397.144C75.6569 396.995 75.8529 396.92 76.0863 396.92C76.3103 396.92 76.5016 396.995 76.6603 397.144C76.8189 397.293 76.8983 397.48 76.8983 397.704C76.8983 397.937 76.8189 398.133 76.6603 398.292C76.5016 398.441 76.3103 398.516 76.0863 398.516ZM75.4983 407V400.056H76.6743V407H75.4983ZM78.7219 407V400.056H79.7859L79.8559 401.302C80.0799 400.863 80.4019 400.518 80.8219 400.266C81.2419 400.014 81.7179 399.888 82.2499 399.888C83.0712 399.888 83.7245 400.14 84.2099 400.644C84.7045 401.139 84.9519 401.904 84.9519 402.94V407H83.7759V403.066C83.7759 401.619 83.1785 400.896 81.9839 400.896C81.3865 400.896 80.8872 401.115 80.4859 401.554C80.0939 401.983 79.8979 402.599 79.8979 403.402V407H78.7219ZM89.8556 407.168C89.1929 407.168 88.6049 407.019 88.0916 406.72C87.5782 406.412 87.1722 405.987 86.8736 405.446C86.5842 404.905 86.4396 404.265 86.4396 403.528C86.4396 402.8 86.5842 402.165 86.8736 401.624C87.1629 401.073 87.5642 400.649 88.0776 400.35C88.6002 400.042 89.2022 399.888 89.8836 399.888C90.5556 399.888 91.1342 400.042 91.6196 400.35C92.1142 400.649 92.4922 401.045 92.7536 401.54C93.0149 402.035 93.1456 402.567 93.1456 403.136C93.1456 403.239 93.1409 403.341 93.1316 403.444C93.1316 403.547 93.1316 403.663 93.1316 403.794H87.6016C87.6296 404.326 87.7509 404.769 87.9656 405.124C88.1896 405.469 88.4649 405.731 88.7916 405.908C89.1276 406.085 89.4822 406.174 89.8556 406.174C90.3409 406.174 90.7469 406.062 91.0736 405.838C91.4002 405.614 91.6382 405.311 91.7876 404.928H92.9496C92.7629 405.572 92.4036 406.109 91.8716 406.538C91.3489 406.958 90.6769 407.168 89.8556 407.168ZM89.8556 400.882C89.2956 400.882 88.7962 401.055 88.3576 401.4C87.9282 401.736 87.6809 402.231 87.6156 402.884H91.9836C91.9556 402.259 91.7409 401.769 91.3396 401.414C90.9382 401.059 90.4436 400.882 89.8556 400.882ZM102.021 407.168C101.349 407.168 100.738 407.037 100.187 406.776C99.646 406.505 99.212 406.09 98.8854 405.53C98.5587 404.97 98.3954 404.256 98.3954 403.388V397.2H99.5714V403.402C99.5714 404.354 99.8 405.045 100.257 405.474C100.715 405.903 101.312 406.118 102.049 406.118C102.787 406.118 103.379 405.903 103.827 405.474C104.275 405.045 104.499 404.354 104.499 403.402V397.2H105.675V403.388C105.675 404.256 105.512 404.97 105.185 405.53C104.859 406.09 104.42 406.505 103.869 406.776C103.319 407.037 102.703 407.168 102.021 407.168ZM110.257 407.168C109.426 407.168 108.736 406.958 108.185 406.538C107.634 406.118 107.312 405.549 107.219 404.83H108.423C108.498 405.194 108.689 405.511 108.997 405.782C109.314 406.043 109.739 406.174 110.271 406.174C110.766 406.174 111.13 406.071 111.363 405.866C111.596 405.651 111.713 405.399 111.713 405.11C111.713 404.69 111.559 404.41 111.251 404.27C110.952 404.13 110.528 404.004 109.977 403.892C109.604 403.817 109.23 403.71 108.857 403.57C108.484 403.43 108.171 403.234 107.919 402.982C107.667 402.721 107.541 402.38 107.541 401.96C107.541 401.353 107.765 400.859 108.213 400.476C108.67 400.084 109.286 399.888 110.061 399.888C110.798 399.888 111.4 400.075 111.867 400.448C112.343 400.812 112.618 401.335 112.693 402.016H111.531C111.484 401.661 111.33 401.386 111.069 401.19C110.817 400.985 110.476 400.882 110.047 400.882C109.627 400.882 109.3 400.971 109.067 401.148C108.843 401.325 108.731 401.559 108.731 401.848C108.731 402.128 108.876 402.347 109.165 402.506C109.464 402.665 109.865 402.8 110.369 402.912C110.798 403.005 111.204 403.122 111.587 403.262C111.979 403.393 112.296 403.593 112.539 403.864C112.791 404.125 112.917 404.508 112.917 405.012C112.926 405.637 112.688 406.155 112.203 406.566C111.727 406.967 111.078 407.168 110.257 407.168ZM117.719 407.168C117.056 407.168 116.468 407.019 115.955 406.72C115.442 406.412 115.036 405.987 114.737 405.446C114.448 404.905 114.303 404.265 114.303 403.528C114.303 402.8 114.448 402.165 114.737 401.624C115.026 401.073 115.428 400.649 115.941 400.35C116.464 400.042 117.066 399.888 117.747 399.888C118.419 399.888 118.998 400.042 119.483 400.35C119.978 400.649 120.356 401.045 120.617 401.54C120.878 402.035 121.009 402.567 121.009 403.136C121.009 403.239 121.004 403.341 120.995 403.444C120.995 403.547 120.995 403.663 120.995 403.794H115.465C115.493 404.326 115.614 404.769 115.829 405.124C116.053 405.469 116.328 405.731 116.655 405.908C116.991 406.085 117.346 406.174 117.719 406.174C118.204 406.174 118.61 406.062 118.937 405.838C119.264 405.614 119.502 405.311 119.651 404.928H120.813C120.626 405.572 120.267 406.109 119.735 406.538C119.212 406.958 118.54 407.168 117.719 407.168ZM117.719 400.882C117.159 400.882 116.66 401.055 116.221 401.4C115.792 401.736 115.544 402.231 115.479 402.884H119.847C119.819 402.259 119.604 401.769 119.203 401.414C118.802 401.059 118.307 400.882 117.719 400.882ZM122.568 407V400.056H123.632L123.73 401.386C123.944 400.929 124.271 400.565 124.71 400.294C125.148 400.023 125.69 399.888 126.334 399.888V401.12H126.012C125.601 401.12 125.223 401.195 124.878 401.344C124.532 401.484 124.257 401.727 124.052 402.072C123.846 402.417 123.744 402.893 123.744 403.5V407H122.568ZM130.314 407.168C129.483 407.168 128.792 406.958 128.242 406.538C127.691 406.118 127.369 405.549 127.276 404.83H128.48C128.554 405.194 128.746 405.511 129.054 405.782C129.371 406.043 129.796 406.174 130.328 406.174C130.822 406.174 131.186 406.071 131.42 405.866C131.653 405.651 131.77 405.399 131.77 405.11C131.77 404.69 131.616 404.41 131.308 404.27C131.009 404.13 130.584 404.004 130.034 403.892C129.66 403.817 129.287 403.71 128.914 403.57C128.54 403.43 128.228 403.234 127.976 402.982C127.724 402.721 127.598 402.38 127.598 401.96C127.598 401.353 127.822 400.859 128.27 400.476C128.727 400.084 129.343 399.888 130.118 399.888C130.855 399.888 131.457 400.075 131.924 400.448C132.4 400.812 132.675 401.335 132.75 402.016H131.588C131.541 401.661 131.387 401.386 131.126 401.19C130.874 400.985 130.533 400.882 130.104 400.882C129.684 400.882 129.357 400.971 129.124 401.148C128.9 401.325 128.788 401.559 128.788 401.848C128.788 402.128 128.932 402.347 129.222 402.506C129.52 402.665 129.922 402.8 130.426 402.912C130.855 403.005 131.261 403.122 131.644 403.262C132.036 403.393 132.353 403.593 132.596 403.864C132.848 404.125 132.974 404.508 132.974 405.012C132.983 405.637 132.745 406.155 132.26 406.566C131.784 406.967 131.135 407.168 130.314 407.168Z" fill="#71717A"/>
                                                    <rect x="32" y="432.5" width="14" height="14" rx="2" fill="#FFC478"/>
                                                    <path d="M53.3885 444V434.2H56.5525C57.3179 434.2 57.9432 434.326 58.4285 434.578C58.9139 434.83 59.2732 435.175 59.5065 435.614C59.7399 436.053 59.8565 436.538 59.8565 437.07C59.8565 437.686 59.6885 438.241 59.3525 438.736C59.0259 439.231 58.5125 439.581 57.8125 439.786L59.9545 444H58.5685L56.5805 439.954H56.4965H54.5645V444H53.3885ZM54.5645 439.03H56.4685C57.2245 439.03 57.7752 438.848 58.1205 438.484C58.4659 438.12 58.6385 437.653 58.6385 437.084C58.6385 436.505 58.4659 436.048 58.1205 435.712C57.7845 435.367 57.2292 435.194 56.4545 435.194H54.5645V439.03ZM64.3155 444.168C63.6529 444.168 63.0649 444.019 62.5515 443.72C62.0382 443.412 61.6322 442.987 61.3335 442.446C61.0442 441.905 60.8995 441.265 60.8995 440.528C60.8995 439.8 61.0442 439.165 61.3335 438.624C61.6229 438.073 62.0242 437.649 62.5375 437.35C63.0602 437.042 63.6622 436.888 64.3435 436.888C65.0155 436.888 65.5942 437.042 66.0795 437.35C66.5742 437.649 66.9522 438.045 67.2135 438.54C67.4749 439.035 67.6055 439.567 67.6055 440.136C67.6055 440.239 67.6009 440.341 67.5915 440.444C67.5915 440.547 67.5915 440.663 67.5915 440.794H62.0615C62.0895 441.326 62.2109 441.769 62.4255 442.124C62.6495 442.469 62.9249 442.731 63.2515 442.908C63.5875 443.085 63.9422 443.174 64.3155 443.174C64.8009 443.174 65.2069 443.062 65.5335 442.838C65.8602 442.614 66.0982 442.311 66.2475 441.928H67.4095C67.2229 442.572 66.8635 443.109 66.3315 443.538C65.8089 443.958 65.1369 444.168 64.3155 444.168ZM64.3155 437.882C63.7555 437.882 63.2562 438.055 62.8175 438.4C62.3882 438.736 62.1409 439.231 62.0755 439.884H66.4435C66.4155 439.259 66.2009 438.769 65.7995 438.414C65.3982 438.059 64.9035 437.882 64.3155 437.882ZM71.8672 441.816C71.4752 441.816 71.1159 441.765 70.7892 441.662L70.0892 442.32C70.1919 442.395 70.3179 442.46 70.4672 442.516C70.6259 442.563 70.8499 442.609 71.1392 442.656C71.4286 442.693 71.8346 442.735 72.3572 442.782C73.2906 442.847 73.9579 443.062 74.3592 443.426C74.7606 443.79 74.9612 444.266 74.9612 444.854C74.9612 445.255 74.8492 445.638 74.6252 446.002C74.4106 446.366 74.0746 446.665 73.6172 446.898C73.1692 447.131 72.5906 447.248 71.8812 447.248C71.2559 447.248 70.7006 447.164 70.2152 446.996C69.7299 446.837 69.3519 446.59 69.0812 446.254C68.8106 445.927 68.6752 445.512 68.6752 445.008C68.6752 444.747 68.7452 444.462 68.8852 444.154C69.0252 443.855 69.2866 443.571 69.6692 443.3C69.4639 443.216 69.2866 443.127 69.1372 443.034C68.9972 442.931 68.8666 442.819 68.7452 442.698V442.376L69.9352 441.2C69.3846 440.733 69.1092 440.117 69.1092 439.352C69.1092 438.895 69.2166 438.479 69.4312 438.106C69.6459 437.733 69.9586 437.439 70.3692 437.224C70.7799 437 71.2792 436.888 71.8672 436.888C72.2686 436.888 72.6326 436.944 72.9592 437.056H75.5212V437.938L74.2192 437.994C74.4899 438.386 74.6252 438.839 74.6252 439.352C74.6252 439.809 74.5132 440.225 74.2892 440.598C74.0746 440.971 73.7619 441.27 73.3512 441.494C72.9499 441.709 72.4552 441.816 71.8672 441.816ZM71.8672 440.85C72.3619 440.85 72.7539 440.724 73.0432 440.472C73.3419 440.211 73.4912 439.837 73.4912 439.352C73.4912 438.876 73.3419 438.512 73.0432 438.26C72.7539 437.999 72.3619 437.868 71.8672 437.868C71.3632 437.868 70.9619 437.999 70.6632 438.26C70.3739 438.512 70.2292 438.876 70.2292 439.352C70.2292 439.837 70.3739 440.211 70.6632 440.472C70.9619 440.724 71.3632 440.85 71.8672 440.85ZM69.8232 444.896C69.8232 445.363 70.0192 445.708 70.4112 445.932C70.8032 446.165 71.2932 446.282 71.8812 446.282C72.4599 446.282 72.9219 446.156 73.2672 445.904C73.6219 445.652 73.7992 445.316 73.7992 444.896C73.7992 444.597 73.6779 444.336 73.4352 444.112C73.1926 443.897 72.7446 443.771 72.0912 443.734C71.5779 443.697 71.1346 443.65 70.7612 443.594C70.3786 443.799 70.1266 444.019 70.0052 444.252C69.8839 444.495 69.8232 444.709 69.8232 444.896ZM77.5618 435.516C77.3285 435.516 77.1325 435.441 76.9738 435.292C76.8245 435.133 76.7498 434.937 76.7498 434.704C76.7498 434.48 76.8245 434.293 76.9738 434.144C77.1325 433.995 77.3285 433.92 77.5618 433.92C77.7858 433.92 77.9772 433.995 78.1358 434.144C78.2945 434.293 78.3738 434.48 78.3738 434.704C78.3738 434.937 78.2945 435.133 78.1358 435.292C77.9772 435.441 77.7858 435.516 77.5618 435.516ZM76.9738 444V437.056H78.1498V444H76.9738ZM82.8574 444.168C82.0268 444.168 81.3361 443.958 80.7854 443.538C80.2348 443.118 79.9128 442.549 79.8194 441.83H81.0234C81.0981 442.194 81.2894 442.511 81.5974 442.782C81.9148 443.043 82.3394 443.174 82.8714 443.174C83.3661 443.174 83.7301 443.071 83.9634 442.866C84.1968 442.651 84.3134 442.399 84.3134 442.11C84.3134 441.69 84.1594 441.41 83.8514 441.27C83.5528 441.13 83.1281 441.004 82.5774 440.892C82.2041 440.817 81.8308 440.71 81.4574 440.57C81.0841 440.43 80.7714 440.234 80.5194 439.982C80.2674 439.721 80.1414 439.38 80.1414 438.96C80.1414 438.353 80.3654 437.859 80.8134 437.476C81.2708 437.084 81.8868 436.888 82.6614 436.888C83.3988 436.888 84.0008 437.075 84.4674 437.448C84.9434 437.812 85.2188 438.335 85.2934 439.016H84.1314C84.0848 438.661 83.9308 438.386 83.6694 438.19C83.4174 437.985 83.0768 437.882 82.6474 437.882C82.2274 437.882 81.9008 437.971 81.6674 438.148C81.4434 438.325 81.3314 438.559 81.3314 438.848C81.3314 439.128 81.4761 439.347 81.7654 439.506C82.0641 439.665 82.4654 439.8 82.9694 439.912C83.3988 440.005 83.8048 440.122 84.1874 440.262C84.5794 440.393 84.8968 440.593 85.1394 440.864C85.3914 441.125 85.5174 441.508 85.5174 442.012C85.5268 442.637 85.2888 443.155 84.8034 443.566C84.3274 443.967 83.6788 444.168 82.8574 444.168ZM89.627 444C88.9923 444 88.493 443.846 88.129 443.538C87.765 443.23 87.583 442.675 87.583 441.872V438.05H86.379V437.056H87.583L87.737 435.39H88.759V437.056H90.803V438.05H88.759V441.872C88.759 442.311 88.8477 442.609 89.025 442.768C89.2023 442.917 89.515 442.992 89.963 442.992H90.691V444H89.627ZM95.2276 444.168C94.565 444.168 93.977 444.019 93.4636 443.72C92.9503 443.412 92.5443 442.987 92.2456 442.446C91.9563 441.905 91.8116 441.265 91.8116 440.528C91.8116 439.8 91.9563 439.165 92.2456 438.624C92.535 438.073 92.9363 437.649 93.4496 437.35C93.9723 437.042 94.5743 436.888 95.2556 436.888C95.9276 436.888 96.5063 437.042 96.9916 437.35C97.4863 437.649 97.8643 438.045 98.1256 438.54C98.387 439.035 98.5176 439.567 98.5176 440.136C98.5176 440.239 98.513 440.341 98.5036 440.444C98.5036 440.547 98.5036 440.663 98.5036 440.794H92.9736C93.0016 441.326 93.123 441.769 93.3376 442.124C93.5616 442.469 93.837 442.731 94.1636 442.908C94.4996 443.085 94.8543 443.174 95.2276 443.174C95.713 443.174 96.119 443.062 96.4456 442.838C96.7723 442.614 97.0103 442.311 97.1596 441.928H98.3216C98.135 442.572 97.7756 443.109 97.2436 443.538C96.721 443.958 96.049 444.168 95.2276 444.168ZM95.2276 437.882C94.6676 437.882 94.1683 438.055 93.7296 438.4C93.3003 438.736 93.053 439.231 92.9876 439.884H97.3556C97.3276 439.259 97.113 438.769 96.7116 438.414C96.3103 438.059 95.8156 437.882 95.2276 437.882ZM100.076 444V437.056H101.14L101.238 438.386C101.453 437.929 101.78 437.565 102.218 437.294C102.657 437.023 103.198 436.888 103.842 436.888V438.12H103.52C103.11 438.12 102.732 438.195 102.386 438.344C102.041 438.484 101.766 438.727 101.56 439.072C101.355 439.417 101.252 439.893 101.252 440.5V444H100.076ZM108.025 444.168C107.362 444.168 106.774 444.019 106.261 443.72C105.747 443.412 105.341 442.987 105.043 442.446C104.753 441.905 104.609 441.265 104.609 440.528C104.609 439.8 104.753 439.165 105.043 438.624C105.332 438.073 105.733 437.649 106.247 437.35C106.769 437.042 107.371 436.888 108.053 436.888C108.725 436.888 109.303 437.042 109.789 437.35C110.283 437.649 110.661 438.045 110.923 438.54C111.184 439.035 111.315 439.567 111.315 440.136C111.315 440.239 111.31 440.341 111.301 440.444C111.301 440.547 111.301 440.663 111.301 440.794H105.771C105.799 441.326 105.92 441.769 106.135 442.124C106.359 442.469 106.634 442.731 106.961 442.908C107.297 443.085 107.651 443.174 108.025 443.174C108.51 443.174 108.916 443.062 109.243 442.838C109.569 442.614 109.807 442.311 109.957 441.928H111.119C110.932 442.572 110.573 443.109 110.041 443.538C109.518 443.958 108.846 444.168 108.025 444.168ZM108.025 437.882C107.465 437.882 106.965 438.055 106.527 438.4C106.097 438.736 105.85 439.231 105.785 439.884H110.153C110.125 439.259 109.91 438.769 109.509 438.414C109.107 438.059 108.613 437.882 108.025 437.882ZM116.023 444.168C115.333 444.168 114.726 444.009 114.203 443.692C113.69 443.375 113.289 442.941 112.999 442.39C112.719 441.839 112.579 441.214 112.579 440.514C112.579 439.814 112.724 439.193 113.013 438.652C113.303 438.101 113.704 437.672 114.217 437.364C114.731 437.047 115.337 436.888 116.037 436.888C116.607 436.888 117.111 437.005 117.549 437.238C117.988 437.471 118.329 437.798 118.571 438.218V433.92H119.747V444H118.683L118.571 442.852C118.347 443.188 118.025 443.491 117.605 443.762C117.185 444.033 116.658 444.168 116.023 444.168ZM116.149 443.146C116.616 443.146 117.027 443.039 117.381 442.824C117.745 442.6 118.025 442.292 118.221 441.9C118.427 441.508 118.529 441.051 118.529 440.528C118.529 440.005 118.427 439.548 118.221 439.156C118.025 438.764 117.745 438.461 117.381 438.246C117.027 438.022 116.616 437.91 116.149 437.91C115.692 437.91 115.281 438.022 114.917 438.246C114.563 438.461 114.283 438.764 114.077 439.156C113.881 439.548 113.783 440.005 113.783 440.528C113.783 441.051 113.881 441.508 114.077 441.9C114.283 442.292 114.563 442.6 114.917 442.824C115.281 443.039 115.692 443.146 116.149 443.146ZM128.981 444.168C128.309 444.168 127.698 444.037 127.147 443.776C126.606 443.505 126.172 443.09 125.845 442.53C125.519 441.97 125.355 441.256 125.355 440.388V434.2H126.531V440.402C126.531 441.354 126.76 442.045 127.217 442.474C127.675 442.903 128.272 443.118 129.009 443.118C129.747 443.118 130.339 442.903 130.787 442.474C131.235 442.045 131.459 441.354 131.459 440.402V434.2H132.635V440.388C132.635 441.256 132.472 441.97 132.145 442.53C131.819 443.09 131.38 443.505 130.829 443.776C130.279 444.037 129.663 444.168 128.981 444.168ZM137.217 444.168C136.386 444.168 135.695 443.958 135.145 443.538C134.594 443.118 134.272 442.549 134.179 441.83H135.383C135.457 442.194 135.649 442.511 135.957 442.782C136.274 443.043 136.699 443.174 137.231 443.174C137.725 443.174 138.089 443.071 138.323 442.866C138.556 442.651 138.673 442.399 138.673 442.11C138.673 441.69 138.519 441.41 138.211 441.27C137.912 441.13 137.487 441.004 136.937 440.892C136.563 440.817 136.19 440.71 135.817 440.57C135.443 440.43 135.131 440.234 134.879 439.982C134.627 439.721 134.501 439.38 134.501 438.96C134.501 438.353 134.725 437.859 135.173 437.476C135.63 437.084 136.246 436.888 137.021 436.888C137.758 436.888 138.36 437.075 138.827 437.448C139.303 437.812 139.578 438.335 139.653 439.016H138.491C138.444 438.661 138.29 438.386 138.029 438.19C137.777 437.985 137.436 437.882 137.007 437.882C136.587 437.882 136.26 437.971 136.027 438.148C135.803 438.325 135.691 438.559 135.691 438.848C135.691 439.128 135.835 439.347 136.125 439.506C136.423 439.665 136.825 439.8 137.329 439.912C137.758 440.005 138.164 440.122 138.547 440.262C138.939 440.393 139.256 440.593 139.499 440.864C139.751 441.125 139.877 441.508 139.877 442.012C139.886 442.637 139.648 443.155 139.163 443.566C138.687 443.967 138.038 444.168 137.217 444.168ZM144.679 444.168C144.016 444.168 143.428 444.019 142.915 443.72C142.401 443.412 141.995 442.987 141.697 442.446C141.407 441.905 141.263 441.265 141.263 440.528C141.263 439.8 141.407 439.165 141.697 438.624C141.986 438.073 142.387 437.649 142.901 437.35C143.423 437.042 144.025 436.888 144.707 436.888C145.379 436.888 145.957 437.042 146.443 437.35C146.937 437.649 147.315 438.045 147.577 438.54C147.838 439.035 147.969 439.567 147.969 440.136C147.969 440.239 147.964 440.341 147.955 440.444C147.955 440.547 147.955 440.663 147.955 440.794H142.425C142.453 441.326 142.574 441.769 142.789 442.124C143.013 442.469 143.288 442.731 143.615 442.908C143.951 443.085 144.305 443.174 144.679 443.174C145.164 443.174 145.57 443.062 145.897 442.838C146.223 442.614 146.461 442.311 146.611 441.928H147.773C147.586 442.572 147.227 443.109 146.695 443.538C146.172 443.958 145.5 444.168 144.679 444.168ZM144.679 437.882C144.119 437.882 143.619 438.055 143.181 438.4C142.751 438.736 142.504 439.231 142.439 439.884H146.807C146.779 439.259 146.564 438.769 146.163 438.414C145.761 438.059 145.267 437.882 144.679 437.882ZM149.528 444V437.056H150.592L150.69 438.386C150.904 437.929 151.231 437.565 151.67 437.294C152.108 437.023 152.65 436.888 153.294 436.888V438.12H152.972C152.561 438.12 152.183 438.195 151.838 438.344C151.492 438.484 151.217 438.727 151.012 439.072C150.806 439.417 150.704 439.893 150.704 440.5V444H149.528ZM157.273 444.168C156.443 444.168 155.752 443.958 155.201 443.538C154.651 443.118 154.329 442.549 154.235 441.83H155.439C155.514 442.194 155.705 442.511 156.013 442.782C156.331 443.043 156.755 443.174 157.287 443.174C157.782 443.174 158.146 443.071 158.379 442.866C158.613 442.651 158.729 442.399 158.729 442.11C158.729 441.69 158.575 441.41 158.267 441.27C157.969 441.13 157.544 441.004 156.993 440.892C156.62 440.817 156.247 440.71 155.873 440.57C155.5 440.43 155.187 440.234 154.935 439.982C154.683 439.721 154.557 439.38 154.557 438.96C154.557 438.353 154.781 437.859 155.229 437.476C155.687 437.084 156.303 436.888 157.077 436.888C157.815 436.888 158.417 437.075 158.883 437.448C159.359 437.812 159.635 438.335 159.709 439.016H158.547C158.501 438.661 158.347 438.386 158.085 438.19C157.833 437.985 157.493 437.882 157.063 437.882C156.643 437.882 156.317 437.971 156.083 438.148C155.859 438.325 155.747 438.559 155.747 438.848C155.747 439.128 155.892 439.347 156.181 439.506C156.48 439.665 156.881 439.8 157.385 439.912C157.815 440.005 158.221 440.122 158.603 440.262C158.995 440.393 159.313 440.593 159.555 440.864C159.807 441.125 159.933 441.508 159.933 442.012C159.943 442.637 159.705 443.155 159.219 443.566C158.743 443.967 158.095 444.168 157.273 444.168Z" fill="#71717A"/>
                                                    <rect x="223" y="395.5" width="14" height="14" rx="2" fill="#B591BE"/>
                                                    <path d="M248.83 407.168C247.868 407.168 247.024 406.958 246.296 406.538C245.577 406.109 245.012 405.511 244.602 404.746C244.2 403.981 244 403.099 244 402.1C244 401.101 244.2 400.224 244.602 399.468C245.012 398.703 245.577 398.105 246.296 397.676C247.024 397.247 247.868 397.032 248.83 397.032C249.8 397.032 250.645 397.247 251.364 397.676C252.092 398.105 252.656 398.703 253.058 399.468C253.459 400.224 253.66 401.101 253.66 402.1C253.66 403.099 253.459 403.981 253.058 404.746C252.656 405.511 252.092 406.109 251.364 406.538C250.645 406.958 249.8 407.168 248.83 407.168ZM248.83 406.132C249.548 406.132 250.178 405.973 250.72 405.656C251.27 405.329 251.695 404.867 251.994 404.27C252.302 403.663 252.456 402.94 252.456 402.1C252.456 401.26 252.302 400.541 251.994 399.944C251.695 399.347 251.27 398.889 250.72 398.572C250.178 398.245 249.548 398.082 248.83 398.082C248.111 398.082 247.476 398.245 246.926 398.572C246.384 398.889 245.96 399.347 245.652 399.944C245.353 400.541 245.204 401.26 245.204 402.1C245.204 402.94 245.353 403.663 245.652 404.27C245.96 404.867 246.384 405.329 246.926 405.656C247.476 405.973 248.111 406.132 248.83 406.132ZM255.286 407V400.056H256.35L256.448 401.386C256.663 400.929 256.99 400.565 257.428 400.294C257.867 400.023 258.408 399.888 259.052 399.888V401.12H258.73C258.32 401.12 257.942 401.195 257.596 401.344C257.251 401.484 256.976 401.727 256.77 402.072C256.565 402.417 256.462 402.893 256.462 403.5V407H255.286ZM263.262 407.168C262.572 407.168 261.965 407.009 261.442 406.692C260.929 406.375 260.528 405.941 260.238 405.39C259.958 404.839 259.818 404.214 259.818 403.514C259.818 402.814 259.963 402.193 260.252 401.652C260.542 401.101 260.943 400.672 261.456 400.364C261.97 400.047 262.576 399.888 263.276 399.888C263.846 399.888 264.35 400.005 264.788 400.238C265.227 400.471 265.568 400.798 265.81 401.218V396.92H266.986V407H265.922L265.81 405.852C265.586 406.188 265.264 406.491 264.844 406.762C264.424 407.033 263.897 407.168 263.262 407.168ZM263.388 406.146C263.855 406.146 264.266 406.039 264.62 405.824C264.984 405.6 265.264 405.292 265.46 404.9C265.666 404.508 265.768 404.051 265.768 403.528C265.768 403.005 265.666 402.548 265.46 402.156C265.264 401.764 264.984 401.461 264.62 401.246C264.266 401.022 263.855 400.91 263.388 400.91C262.931 400.91 262.52 401.022 262.156 401.246C261.802 401.461 261.522 401.764 261.316 402.156C261.12 402.548 261.022 403.005 261.022 403.528C261.022 404.051 261.12 404.508 261.316 404.9C261.522 405.292 261.802 405.6 262.156 405.824C262.52 406.039 262.931 406.146 263.388 406.146ZM272.026 407.168C271.363 407.168 270.775 407.019 270.262 406.72C269.748 406.412 269.342 405.987 269.044 405.446C268.754 404.905 268.61 404.265 268.61 403.528C268.61 402.8 268.754 402.165 269.044 401.624C269.333 401.073 269.734 400.649 270.248 400.35C270.77 400.042 271.372 399.888 272.053 399.888C272.726 399.888 273.304 400.042 273.79 400.35C274.284 400.649 274.662 401.045 274.924 401.54C275.185 402.035 275.316 402.567 275.316 403.136C275.316 403.239 275.311 403.341 275.302 403.444C275.302 403.547 275.302 403.663 275.302 403.794H269.772C269.8 404.326 269.921 404.769 270.136 405.124C270.36 405.469 270.635 405.731 270.962 405.908C271.298 406.085 271.652 406.174 272.026 406.174C272.511 406.174 272.917 406.062 273.244 405.838C273.57 405.614 273.808 405.311 273.958 404.928H275.12C274.933 405.572 274.574 406.109 274.042 406.538C273.519 406.958 272.847 407.168 272.026 407.168ZM272.026 400.882C271.466 400.882 270.966 401.055 270.528 401.4C270.098 401.736 269.851 402.231 269.785 402.884H274.154C274.126 402.259 273.911 401.769 273.51 401.414C273.108 401.059 272.614 400.882 272.026 400.882ZM276.874 407V400.056H277.938L278.036 401.386C278.251 400.929 278.578 400.565 279.016 400.294C279.455 400.023 279.996 399.888 280.64 399.888V401.12H280.318C279.908 401.12 279.53 401.195 279.184 401.344C278.839 401.484 278.564 401.727 278.358 402.072C278.153 402.417 278.05 402.893 278.05 403.5V407H276.874ZM284.62 407.168C283.789 407.168 283.099 406.958 282.548 406.538C281.997 406.118 281.675 405.549 281.582 404.83H282.786C282.861 405.194 283.052 405.511 283.36 405.782C283.677 406.043 284.102 406.174 284.634 406.174C285.129 406.174 285.493 406.071 285.726 405.866C285.959 405.651 286.076 405.399 286.076 405.11C286.076 404.69 285.922 404.41 285.614 404.27C285.315 404.13 284.891 404.004 284.34 403.892C283.967 403.817 283.593 403.71 283.22 403.57C282.847 403.43 282.534 403.234 282.282 402.982C282.03 402.721 281.904 402.38 281.904 401.96C281.904 401.353 282.128 400.859 282.576 400.476C283.033 400.084 283.649 399.888 284.424 399.888C285.161 399.888 285.763 400.075 286.23 400.448C286.706 400.812 286.981 401.335 287.056 402.016H285.894C285.847 401.661 285.693 401.386 285.432 401.19C285.18 400.985 284.839 400.882 284.41 400.882C283.99 400.882 283.663 400.971 283.43 401.148C283.206 401.325 283.094 401.559 283.094 401.848C283.094 402.128 283.239 402.347 283.528 402.506C283.827 402.665 284.228 402.8 284.732 402.912C285.161 403.005 285.567 403.122 285.95 403.262C286.342 403.393 286.659 403.593 286.902 403.864C287.154 404.125 287.28 404.508 287.28 405.012C287.289 405.637 287.051 406.155 286.566 406.566C286.09 406.967 285.441 407.168 284.62 407.168ZM296.375 407.168C295.806 407.168 295.297 407.051 294.849 406.818C294.411 406.585 294.075 406.258 293.841 405.838L293.729 407H292.665V396.92H293.841V401.204C294.065 400.868 294.383 400.565 294.793 400.294C295.213 400.023 295.745 399.888 296.389 399.888C297.08 399.888 297.682 400.047 298.195 400.364C298.709 400.681 299.105 401.115 299.385 401.666C299.675 402.217 299.819 402.842 299.819 403.542C299.819 404.242 299.675 404.867 299.385 405.418C299.105 405.959 298.704 406.389 298.181 406.706C297.668 407.014 297.066 407.168 296.375 407.168ZM296.249 406.146C296.716 406.146 297.127 406.039 297.481 405.824C297.836 405.6 298.116 405.292 298.321 404.9C298.527 404.508 298.629 404.051 298.629 403.528C298.629 403.005 298.527 402.548 298.321 402.156C298.116 401.764 297.836 401.461 297.481 401.246C297.127 401.022 296.716 400.91 296.249 400.91C295.783 400.91 295.372 401.022 295.017 401.246C294.663 401.461 294.383 401.764 294.177 402.156C293.972 402.548 293.869 403.005 293.869 403.528C293.869 404.051 293.972 404.508 294.177 404.9C294.383 405.292 294.663 405.6 295.017 405.824C295.372 406.039 295.783 406.146 296.249 406.146ZM301.652 410.08L303.374 406.328H302.968L300.21 400.056H301.484L303.78 405.46L306.216 400.056H307.434L302.884 410.08H301.652ZM315.992 407.168C315.32 407.168 314.709 407.037 314.158 406.776C313.617 406.505 313.183 406.09 312.856 405.53C312.529 404.97 312.366 404.256 312.366 403.388V397.2H313.542V403.402C313.542 404.354 313.771 405.045 314.228 405.474C314.685 405.903 315.283 406.118 316.02 406.118C316.757 406.118 317.35 405.903 317.798 405.474C318.246 405.045 318.47 404.354 318.47 403.402V397.2H319.646V403.388C319.646 404.256 319.483 404.97 319.156 405.53C318.829 406.09 318.391 406.505 317.84 406.776C317.289 407.037 316.673 407.168 315.992 407.168ZM324.228 407.168C323.397 407.168 322.706 406.958 322.156 406.538C321.605 406.118 321.283 405.549 321.19 404.83H322.394C322.468 405.194 322.66 405.511 322.968 405.782C323.285 406.043 323.71 406.174 324.242 406.174C324.736 406.174 325.1 406.071 325.334 405.866C325.567 405.651 325.684 405.399 325.684 405.11C325.684 404.69 325.53 404.41 325.222 404.27C324.923 404.13 324.498 404.004 323.948 403.892C323.574 403.817 323.201 403.71 322.828 403.57C322.454 403.43 322.142 403.234 321.89 402.982C321.638 402.721 321.512 402.38 321.512 401.96C321.512 401.353 321.736 400.859 322.184 400.476C322.641 400.084 323.257 399.888 324.032 399.888C324.769 399.888 325.371 400.075 325.838 400.448C326.314 400.812 326.589 401.335 326.664 402.016H325.502C325.455 401.661 325.301 401.386 325.04 401.19C324.788 400.985 324.447 400.882 324.018 400.882C323.598 400.882 323.271 400.971 323.038 401.148C322.814 401.325 322.702 401.559 322.702 401.848C322.702 402.128 322.846 402.347 323.136 402.506C323.434 402.665 323.836 402.8 324.34 402.912C324.769 403.005 325.175 403.122 325.558 403.262C325.95 403.393 326.267 403.593 326.51 403.864C326.762 404.125 326.888 404.508 326.888 405.012C326.897 405.637 326.659 406.155 326.174 406.566C325.698 406.967 325.049 407.168 324.228 407.168ZM331.69 407.168C331.027 407.168 330.439 407.019 329.926 406.72C329.412 406.412 329.006 405.987 328.708 405.446C328.418 404.905 328.274 404.265 328.274 403.528C328.274 402.8 328.418 402.165 328.708 401.624C328.997 401.073 329.398 400.649 329.912 400.35C330.434 400.042 331.036 399.888 331.718 399.888C332.39 399.888 332.968 400.042 333.454 400.35C333.948 400.649 334.326 401.045 334.588 401.54C334.849 402.035 334.98 402.567 334.98 403.136C334.98 403.239 334.975 403.341 334.966 403.444C334.966 403.547 334.966 403.663 334.966 403.794H329.436C329.464 404.326 329.585 404.769 329.8 405.124C330.024 405.469 330.299 405.731 330.626 405.908C330.962 406.085 331.316 406.174 331.69 406.174C332.175 406.174 332.581 406.062 332.908 405.838C333.234 405.614 333.472 405.311 333.622 404.928H334.784C334.597 405.572 334.238 406.109 333.706 406.538C333.183 406.958 332.511 407.168 331.69 407.168ZM331.69 400.882C331.13 400.882 330.63 401.055 330.192 401.4C329.762 401.736 329.515 402.231 329.45 402.884H333.818C333.79 402.259 333.575 401.769 333.174 401.414C332.772 401.059 332.278 400.882 331.69 400.882ZM336.538 407V400.056H337.602L337.7 401.386C337.915 400.929 338.242 400.565 338.68 400.294C339.119 400.023 339.66 399.888 340.304 399.888V401.12H339.982C339.572 401.12 339.194 401.195 338.848 401.344C338.503 401.484 338.228 401.727 338.022 402.072C337.817 402.417 337.714 402.893 337.714 403.5V407H336.538ZM344.284 407.168C343.454 407.168 342.763 406.958 342.212 406.538C341.662 406.118 341.34 405.549 341.246 404.83H342.45C342.525 405.194 342.716 405.511 343.024 405.782C343.342 406.043 343.766 406.174 344.298 406.174C344.793 406.174 345.157 406.071 345.39 405.866C345.624 405.651 345.74 405.399 345.74 405.11C345.74 404.69 345.586 404.41 345.278 404.27C344.98 404.13 344.555 404.004 344.004 403.892C343.631 403.817 343.258 403.71 342.884 403.57C342.511 403.43 342.198 403.234 341.946 402.982C341.694 402.721 341.568 402.38 341.568 401.96C341.568 401.353 341.792 400.859 342.24 400.476C342.698 400.084 343.314 399.888 344.088 399.888C344.826 399.888 345.428 400.075 345.894 400.448C346.37 400.812 346.646 401.335 346.72 402.016H345.558C345.512 401.661 345.358 401.386 345.096 401.19C344.844 400.985 344.504 400.882 344.074 400.882C343.654 400.882 343.328 400.971 343.094 401.148C342.87 401.325 342.758 401.559 342.758 401.848C342.758 402.128 342.903 402.347 343.192 402.506C343.491 402.665 343.892 402.8 344.396 402.912C344.826 403.005 345.232 403.122 345.614 403.262C346.006 403.393 346.324 403.593 346.566 403.864C346.818 404.125 346.944 404.508 346.944 405.012C346.954 405.637 346.716 406.155 346.23 406.566C345.754 406.967 345.106 407.168 344.284 407.168Z" fill="#71717A"/>
                                                    </svg> -->

                                                <div id="store-visits-source"
                                                    data-colors='["--vz-primary", "--vz-success", "--vz-warning", "--vz-danger", "--vz-info"]'
                                                    class="apex-charts" dir="ltr"></div>

                                                <!-- <div class="px-2 py-2 mt-1">
                                                    <p class="mb-1">Canada <span class="float-end">75%</span></p>
                                                    <div class="progress mt-2" style="height: 6px;">
                                                        <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75"></div>
                                                    </div>

                                                    <p class="mt-3 mb-1">Greenland <span class="float-end">47%</span>
                                                    </p>
                                                    <div class="progress mt-2" style="height: 6px;">
                                                        <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 47%" aria-valuenow="47" aria-valuemin="0" aria-valuemax="47"></div>
                                                    </div>

                                                    <p class="mt-3 mb-1">Russia <span class="float-end">82%</span></p>
                                                    <div class="progress mt-2" style="height: 6px;">
                                                        <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="82"></div>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                        <!-- end card -->
                                    </div>
                                    <!-- end col -->
                                </div>


                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="card verticalScroll"> 
                                            <div class="card-header border-0 align-items-center d-flex">
                                                <h4 class="card-title fs-24  fw-medium mb-0 flex-grow-1">Recent  Activities</h4>

                                                <div class="flex-shrink-0">
                                                    <div class="dropdown card-header-dropdown">
                                                        <a class="text-reset dropdown-btn" href="#"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <span class="text-muted fs-14 fw-normal">This Month<i
                                                                    class="mdi mdi-chevron-down ms-1"></i></span>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Download Report</a>
                                                            <a class="dropdown-item" href="#">Export</a>
                                                            <a class="dropdown-item" href="#">Import</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end card header -->



                                            <div class="card-body  p-0">
                                                <div data-simplebar style="height: 390px;">
                                                    <div class="p-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-xs flex-shrink-0">
                                                                <span class="avatar-title bg-light rounded-circle">
                                                                    <img src="./assets/images/Kashmira Khatun.svg"
                                                                        alt="" srcset="">
                                                                    <!-- <i data-feather="arrow-down-circle" class="icon-dual-success icon-sm"></i> -->
                                                                </span>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="fs-16 fw-normal mb-1">Kashmira Khatun</h6>
                                                                <p class="text-muted fs-14 fw-normal fst-italic mb-0">
                                                                    Kashmira Khatun has submitted the content files of
                                                                    Kane Brook.
                                                                </p>
                                                            </div>
                                                            <div class="flex-shrink-0 text-end">
                                                                <h6 class="mb-1 text-success">10:30<span
                                                                        class="text-uppercase ms-1">Am</span></h6>

                                                            </div>
                                                        </div><!-- end -->
                                                        <div class="d-flex align-items-center mt-3">
                                                            <div class="avatar-xs flex-shrink-0">
                                                                <span class="avatar-title bg-light rounded-circle">
                                                                    <img src="./assets/images/Kashmira Khatun.svg"
                                                                        alt="" srcset="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="fs-16 fw-normal mb-1">Sandip Sah</h6>
                                                                <p class="text-muted fs-14 fw-normal fst-italic mb-0">
                                                                    Sandip Sah has submitted the content files of Kane
                                                                    Brook.
                                                                </p>
                                                            </div>
                                                            <div class="flex-shrink-0 text-end">
                                                                <h6 class="mb-1 text-success">10:30<span
                                                                        class="text-uppercase ms-1">Am</span></h6>
                                                            </div>
                                                        </div><!-- end -->


                                                        <div class="d-flex align-items-center mt-3">
                                                            <div class="avatar-xs flex-shrink-0">
                                                                <span class="avatar-title bg-light rounded-circle">
                                                                    <img src="./assets/images/Kashmira Khatun.svg"
                                                                        alt="" srcset="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="fs-16 fw-normal mb-1">Ujjal Mondal</h6>
                                                                <p class="text-muted fs-14 fw-normal fst-italic mb-0">
                                                                    Ujjal Mondal has submitted the content files of Kane
                                                                    Brook.
                                                                </p>
                                                            </div>
                                                            <div class="flex-shrink-0 text-end">
                                                                <h6 class="mb-1 text-success">1:35 <span
                                                                        class="text-uppercase ms-1">Pm</span></h6>
                                                            </div>
                                                        </div><!-- end -->
                                                        <div class="d-flex align-items-center mt-3">
                                                            <div class="avatar-xs flex-shrink-0">
                                                                <span class="avatar-title bg-light rounded-circle">
                                                                    <img src="./assets/images/Kashmira Khatun.svg"
                                                                        alt="" srcset="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="fs-14 fw-normal mb-1">Kashmira Khatun</h6>
                                                                <p class="text-muted fs-14 fw-normal fst-italic mb-0">
                                                                    Sandip Sah has submitted the content files of Kane
                                                                    Brook.
                                                                </p>
                                                            </div>
                                                            <div class="flex-shrink-0 text-end">
                                                                <h6 class="mb-1 text-success">10:30<span
                                                                        class="text-uppercase ms-1">Am</span></h6>
                                                            </div>
                                                        </div><!-- end -->

                                                        <div class="d-flex align-items-center mt-3">
                                                            <div class="avatar-xs flex-shrink-0">
                                                                <span class="avatar-title bg-light rounded-circle">
                                                                    <img src="./assets/images/Kashmira Khatun.svg"
                                                                        alt="" srcset="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="fs-16 fw-normal mb-1">Sandip Sah</h6>
                                                                <p class="text-muted fs-14 fw-normal fst-italic mb-0">
                                                                    Sandip Sah has submitted the content files of Kane
                                                                    Brook.
                                                                </p>
                                                            </div>
                                                            <div class="flex-shrink-0 text-end">
                                                                <h6 class="mb-1 text-success">1:35 <span
                                                                        class="text-uppercase ms-1">Pm</span></h6>
                                                            </div>
                                                        </div><!-- end -->
                                                        <div class="d-flex align-items-center mt-3">
                                                            <div class="avatar-xs flex-shrink-0">
                                                                <span class="avatar-title bg-light rounded-circle">
                                                                    <img src="./assets/images/Kashmira Khatun.svg"
                                                                        alt="" srcset="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="fs-16 fw-normal mb-1">Kashmira Khatun</h6>
                                                                <p class="text-muted fs-14 fw-normal fst-italic mb-0">
                                                                    Kashmira Khatun has submitted the content files of
                                                                    Kane Brook.
                                                                </p>
                                                            </div>
                                                            <div class="flex-shrink-0 text-end">
                                                                <h6 class="mb-1 text-success">1:35 <span
                                                                        class="text-uppercase ms-1">Pm</span></h6>
                                                            </div>
                                                        </div><!-- end -->

                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-xs flex-shrink-0">
                                                                <span class="avatar-title bg-light rounded-circle">
                                                                    <img src="./assets/images/Kashmira Khatun.svg"
                                                                        alt="" srcset="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3 mt-3">
                                                                <h6 class="fs-16 fw-normal mb-1">Sandip Sah</h6>
                                                                <p class="text-muted fs-14 fw-normal fst-italic mb-0">
                                                                    Sandip Sah has submitted the content files of Kane
                                                                    Brook.
                                                                </p>
                                                            </div>
                                                            <div class="flex-shrink-0 text-end">
                                                                <h6 class="mb-1 text-success">1:35 <span
                                                                        class="text-uppercase ms-1">Pm</span></h6>
                                                            </div>
                                                        </div><!-- end -->

                                                        <div class="d-flex align-items-center mt-3">
                                                            <div class="avatar-xs flex-shrink-0">
                                                                <span class="avatar-title bg-light rounded-circle">
                                                                    <img src="./assets/images/Kashmira Khatun.svg"
                                                                        alt="" srcset="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="fs-16 fw-normal mb-1">Ujjal Mondal</h6>
                                                                <p class="text-muted fs-14 fw-normal fst-italic mb-0">
                                                                    Ujjal Mondal has submitted the content files of Kane
                                                                    Brook.
                                                                </p>
                                                            </div>
                                                            <div class="flex-shrink-0 text-end">
                                                                <h6 class="mb-1 text-success">1:35 <span
                                                                        class="text-uppercase ms-1">Pm</span></h6>
                                                            </div>
                                                        </div><!-- end -->

                                                        <div class="mt-3 text-center">
                                                            <a href="javascript:void(0);"
                                                                class="text-muted text-decoration-underline">Load
                                                                More</a>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->
                                    <div class="col-xl-4">
        <div class="card verticalScroll">
         <div class="card-header border-0 align-items-center d-flex">
            <h4 class="card-title fs-24  fw-medium mb-0 flex-grow-1">Most Threaded Tickets</h4>
            <div class="flex-shrink-0">
                <div class="dropdown card-header-dropdown">
                    <a class="text-reset dropdown-btn" href="#"
                        data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <span class="text-muted fs-14 fw-normal">This Month<i
                                class="mdi mdi-chevron-down ms-1"></i></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Download Report</a>
                        <a class="dropdown-item" href="#">Export</a>
                        <a class="dropdown-item" href="#">Import</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body  p-0">
            <ul>
                <li>
                    <p>Placing Order</p>
                    <p>24</p>
                </li>
            </ul>
        </div>
        </div>
    </div>
    <div class="col-xl-4">
        <div class="card verticalScroll">
         <div class="card-header border-0 align-items-center d-flex">
            <h4 class="card-title fs-24  fw-medium mb-0 flex-grow-1">Unresolved Tickets</h4>
            <div class="flex-shrink-0">
                <div class="dropdown card-header-dropdown">
                    <a class="text-reset dropdown-btn" href="#"
                        data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <span class="text-muted fs-14 fw-normal">This Month<i
                                class="mdi mdi-chevron-down ms-1"></i></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Download Report</a>
                        <a class="dropdown-item" href="#">Export</a>
                        <a class="dropdown-item" href="#">Import</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body  p-0">
            <ul>
                <li>
                    <p>Placing Order</p>
                    <p>24</p>
                </li>
            </ul>
        </div>
        </div>
    </div>
                                    


                                </div> <!-- end .h-100-->

                            </div> <!-- end col -->


                        </div>

                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © CRM Dashboard.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design &amp; Develop by Viacon India
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->



        <!--start back-to-top-->
        <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </button>
        <!--end back-to-top-->

        <!--preloader-->
         <!-- apexcharts -->
         <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
         <!-- Vector map-->
         <script src="assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
        <script src="assets/libs/jsvectormap/maps/world-merc.js"></script>
         <!--Swiper slider js-->
         <script src="assets/libs/swiper/swiper-bundle.min.js"></script>
        <!-- Dashboard init -->
        <script src="assets/js/pages/dashboard-ecommerce.init.js"></script>
        <!-- apexcharts -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- Dashboard init -->
        <script src="assets/js/pages/dashboard-crm.init.js"></script>
        <!-- Chart JS -->
        <script src="assets/libs/chart.js/chart.umd.js"></script>

        <!-- chartjs init -->
        <script src="assets/js/pages/chartjs.init.js"></script> -->

        <?php include 'includes/footer.html' ?>
</body>

</html>