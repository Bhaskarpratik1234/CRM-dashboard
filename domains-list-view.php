<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">

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
                                        <div class="page-title-right">
                                            <ol class="breadcrumb m-0">
                                                <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                                <li class="breadcrumb-item active">Settings</li>
                                                <li class="breadcrumb-item active">Domains and Mailbox</li>

                                            </ol>
                                        </div>

                                        <!-- end card header -->
                                    </div>
                                    <!--end col-->
                                </div>


                                <div class="row justify-content-center">

                                    <div class=" col-xl-12">
                                        <div class="d-flex align-items-lg-center flex-lg-row flex-column mb-3 py-3">
                                            <div class="flex-grow-1">
                                                <h4 class="fs-28 fw-bolder">
                                                    Mailbox
                                                </h4>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="d-flex gap-2">
                                                    <!-- <div class="search-box">
                                                    <input type="text" class="form-control search" placeholder="Search for...">
                                                    <i class="ri-search-line search-icon"></i>
                                                </div> -->
                                                    <button type="button"
                                                        class="btn btn-outline-secondary waves-effect waves-light fs-16 fw-normal"
                                                        data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg"><i
                                                            class="ri-add-fill"></i>Add Mailbox</button>
                                                    <!--  Large modal example -->
                                                    <div class="modal fade bs-example-modal-lg" tabindex="-1"
                                                        role="dialog" aria-labelledby="myLargeModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header add-user-header mb-3">
                                                                    <h3 class="modal-title " id="myLargeModalLabel">Add
                                                                        Mailbox</h4>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="col-xl-12">
                                                                        <div class="row">
                                                                            <!-- Nav tabs -->
                                                                            <ul class="nav nav-tabs nav-tabs-custom nav-success nav-justified mb-3"
                                                                                role="tablist">
                                                                                <li class="nav-item">
                                                                                    <a class="nav-link active fs-16 fw-normal"
                                                                                        data-bs-toggle="tab"
                                                                                        href="#home1" role="tab">
                                                                                        Basic details
                                                                                    </a>
                                                                                </li>
                                                                                <li class="nav-item">
                                                                                    <a class="nav-link fs-16 fw-normal"
                                                                                        data-bs-toggle="tab"
                                                                                        href="#profile1" role="tab">
                                                                                        Members
                                                                                    </a>
                                                                                </li>
                                                                                <li class="nav-item">
                                                                                    <a class="nav-link fs-16 fw-normal"
                                                                                        data-bs-toggle="tab"
                                                                                        href="#messages1" role="tab">
                                                                                        Permissions
                                                                                    </a>
                                                                                </li>
                                                                                <!-- <li class="nav-item">
                                                        <a class="nav-link fs-16 fw-normal" data-bs-toggle="tab" href="#settings1" role="tab">
                                                            Notifications
                                                        </a>
                                                    </li> -->
                                                                            </ul>

                                                                            <!-- Tab panes -->
                                                                            <div class="tab-content text-muted">
                                                                                <div class="tab-pane active" id="home1"
                                                                                    role="tabpanel"
                                                                                    style="padding: 33px !important;">
                                                                                    <div class="d-flex">
                                                                                        <div class="flex-grow-1 ms-2">
                                                                                            <form
                                                                                                action="javascript:void(0);">
                                                                                                <div class="row">
                                                                                                    <div
                                                                                                        class="col-lg-6">
                                                                                                        <div
                                                                                                            class="mb-3">
                                                                                                            <label
                                                                                                                for="useremail"
                                                                                                                class="form-label">Email
                                                                                                                <span
                                                                                                                    class="text-danger">*</span></label>
                                                                                                            <input
                                                                                                                type="email"
                                                                                                                class="form-control"
                                                                                                                id="useremail"
                                                                                                                placeholder="Enter email address"
                                                                                                                required>
                                                                                                            <div
                                                                                                                class="invalid-feedback">
                                                                                                                Please
                                                                                                                enter
                                                                                                                email
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!--end col-->
                                                                                                    <div
                                                                                                        class="col-lg-6">
                                                                                                        <div
                                                                                                            class="mb-3">
                                                                                                            <label
                                                                                                                for="emailInput"
                                                                                                                class="form-label">Domain</label>
                                                                                                            <select
                                                                                                                class="form-select mb-3"
                                                                                                                aria-label="Default select example">
                                                                                                                <option
                                                                                                                    selected>
                                                                                                                    Select
                                                                                                                    domain
                                                                                                                </option>
                                                                                                                <option
                                                                                                                    value="1">
                                                                                                                    One
                                                                                                                </option>
                                                                                                                <option
                                                                                                                    value="2">
                                                                                                                    Two
                                                                                                                </option>
                                                                                                                <option
                                                                                                                    value="3">
                                                                                                                    Three
                                                                                                                </option>
                                                                                                            </select>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!--end col-->
                                                                                                    <div
                                                                                                        class="col-lg-6">
                                                                                                        <div
                                                                                                            class="mb-3">
                                                                                                            <label
                                                                                                                for="useremail"
                                                                                                                class="form-label">Label
                                                                                                                name
                                                                                                                <span
                                                                                                                    class="text-danger">*</span></label>
                                                                                                            <input
                                                                                                                type="email"
                                                                                                                class="form-control"
                                                                                                                id="useremail"
                                                                                                                placeholder="Label name "
                                                                                                                required>
                                                                                                            <div
                                                                                                                class="invalid-feedback">
                                                                                                                Please
                                                                                                                enter
                                                                                                                Label
                                                                                                                name
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!--end col-->
                                                                                                    <div
                                                                                                        class="col-lg-6">
                                                                                                        <div
                                                                                                            class="mb-3">
                                                                                                            <label
                                                                                                                for="ReportingInput1"
                                                                                                                class="form-label"></label>
                                                                                                            <!-- warning Alert -->
                                                                                                            <div class="alertss"
                                                                                                                role="">
                                                                                                                <div
                                                                                                                    class="d-flex justify-content-between">
                                                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                                        width="18"
                                                                                                                        height="22"
                                                                                                                        viewBox="0 0 18 22"
                                                                                                                        fill="none">
                                                                                                                        <path
                                                                                                                            d="M5.25 20.75H12.75M9.76147 4.32354C10.6788 4.47948 11.5251 4.9164 12.1835 5.57396C12.8419 6.23153 13.2798 7.0773 13.4369 7.99446M4.37847 14.6574C3.48667 13.9608 2.76435 13.0712 2.26581 12.0554C1.76727 11.0396 1.50548 9.92393 1.50011 8.79237C1.47765 4.72715 4.755 1.34783 8.81916 1.25217C10.394 1.21425 11.9409 1.67317 13.2402 2.56384C14.5396 3.45451 15.5256 4.73169 16.0582 6.21424C16.5909 7.69678 16.6432 9.30941 16.2078 10.8234C15.7724 12.3373 14.8713 13.6758 13.6324 14.6488C13.3596 14.8602 13.1383 15.1309 12.9854 15.4404C12.8326 15.7499 12.7521 16.0901 12.75 16.4353L12.75 17.0001C12.75 17.199 12.671 17.3897 12.5303 17.5304C12.3897 17.671 12.1989 17.75 12 17.75H5.99999C5.80108 17.75 5.61031 17.671 5.46966 17.5304C5.32901 17.3897 5.24999 17.199 5.24999 17.0001L5.24998 16.4346C5.24912 16.0917 5.17021 15.7534 5.01921 15.4455C4.86822 15.1376 4.6491 14.868 4.37847 14.6574Z"
                                                                                                                            stroke="#5E718D"
                                                                                                                            stroke-width="1.5"
                                                                                                                            stroke-linecap="round"
                                                                                                                            stroke-linejoin="round" />
                                                                                                                    </svg>
                                                                                                                    <p
                                                                                                                        class="fs-14 fw-normal ">
                                                                                                                        Color-coded
                                                                                                                        labels
                                                                                                                        aid
                                                                                                                        in
                                                                                                                        quickly
                                                                                                                        distinguishing
                                                                                                                        mailboxes
                                                                                                                        within
                                                                                                                        a
                                                                                                                        view.
                                                                                                                    </p>
                                                                                                                </div>
                                                                                                            </div>


                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!--end col-->
                                                                                                    <div
                                                                                                        class="col-lg-12">
                                                                                                        <div
                                                                                                            class="mb-3">
                                                                                                            <label
                                                                                                                for="useremail"
                                                                                                                class="form-label">Label
                                                                                                                colour
                                                                                                                <span
                                                                                                                    class="text-danger">*</span></label>

                                                                                                            <div class=""
                                                                                                                style="border-radius: 4px; border: 1px solid var(--neutrals-4, #E4E4E7); padding: 22px;">
                                                                                                                <div
                                                                                                                    class="d-flex justify-content-center">
                                                                                                                    <div
                                                                                                                        class="col-lg-5 mt-4">
                                                                                                                        <div
                                                                                                                            class="mb-3">

                                                                                                                            <label
                                                                                                                                for="ReportingInput1"
                                                                                                                                class="form-label">Choose
                                                                                                                                from
                                                                                                                                the
                                                                                                                                palette</label>
                                                                                                                            <!-- <h1 class="text-center">Color Picker</h1> -->
                                                                                                                            <div
                                                                                                                                class="container">
                                                                                                                                <div
                                                                                                                                    class="color-picker block-center">
                                                                                                                                    <ul
                                                                                                                                        class="color-list">
                                                                                                                                        <li class="color"
                                                                                                                                            data-color=" #E5E5E5">
                                                                                                                                        </li>
                                                                                                                                        <li class="color"
                                                                                                                                            data-color="#F9BAAB">
                                                                                                                                        </li>
                                                                                                                                        <li class="color"
                                                                                                                                            data-color="#F9D3A2">
                                                                                                                                        </li>
                                                                                                                                        <li class="color"
                                                                                                                                            data-color="#FEF86A">
                                                                                                                                        </li>
                                                                                                                                        <li class="color"
                                                                                                                                            data-color="#D7F3B0">
                                                                                                                                        </li>
                                                                                                                                        <li class="color"
                                                                                                                                            data-color="#C8E5FB">
                                                                                                                                        </li>
                                                                                                                                        <li class="color"
                                                                                                                                            data-color="#E0CEEF">
                                                                                                                                        </li>
                                                                                                                                        <li class="color"
                                                                                                                                            data-color="#F6D0E6">
                                                                                                                                        </li>
                                                                                                                                        <!---fs-->

                                                                                                                                    </ul>
                                                                                                                                    <ul
                                                                                                                                        class="color-list">
                                                                                                                                        <li class="color"
                                                                                                                                            data-color=" #E5E5E5">
                                                                                                                                        </li>
                                                                                                                                        <li class="color"
                                                                                                                                            data-color="#F9BAAB">
                                                                                                                                        </li>
                                                                                                                                        <li class="color"
                                                                                                                                            data-color="#F9D3A2">
                                                                                                                                        </li>
                                                                                                                                        <li class="color"
                                                                                                                                            data-color="#FEF86A">
                                                                                                                                        </li>
                                                                                                                                        <li class="color"
                                                                                                                                            data-color="#D7F3B0">
                                                                                                                                        </li>
                                                                                                                                        <li class="color"
                                                                                                                                            data-color="#C8E5FB">
                                                                                                                                        </li>
                                                                                                                                        <li class="color"
                                                                                                                                            data-color="#E0CEEF">
                                                                                                                                        </li>
                                                                                                                                        <li class="color"
                                                                                                                                            data-color="#F6D0E6">
                                                                                                                                        </li>
                                                                                                                                        <!---fs-->

                                                                                                                                    </ul>


                                                                                                                                </div>

                                                                                                                            </div>
                                                                                                                            <style>
                                                                                                                                .text-center {
                                                                                                                                    text-align: center;
                                                                                                                                }

                                                                                                                                .block-center {
                                                                                                                                    margin: 0 auto;
                                                                                                                                }

                                                                                                                                .color-picker {
                                                                                                                                    width: 400px;
                                                                                                                                    min-height: 40px;
                                                                                                                                    background-color: #ffffff;
                                                                                                                                    border-radius: 3px;
                                                                                                                                    /* border: 1px solid #dfe2e5; */
                                                                                                                                    padding: 5px 20px 5px 15px;
                                                                                                                                    /* box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important; */
                                                                                                                                }

                                                                                                                                .color-list {
                                                                                                                                    list-style: none;
                                                                                                                                    padding: 0;
                                                                                                                                }

                                                                                                                                .color-list li {
                                                                                                                                    display: inline-block;
                                                                                                                                    margin: 1px;
                                                                                                                                }

                                                                                                                                .color {
                                                                                                                                    height: 30px;
                                                                                                                                    width: 30px;
                                                                                                                                    /* border-radius: 100px; */
                                                                                                                                    background-color: attr(data-color);
                                                                                                                                    transition: transform 0.3s;
                                                                                                                                }

                                                                                                                                .color:not(.active):hover {
                                                                                                                                    cursor: pointer;
                                                                                                                                    transform: scale(1.2);
                                                                                                                                }

                                                                                                                                .color.active {
                                                                                                                                    border: 5px solid #ddd;
                                                                                                                                    /* width: 32px;
  height: 32px; */
                                                                                                                                }

                                                                                                                                .form-control {
                                                                                                                                    display: block;
                                                                                                                                    width: 100%;
                                                                                                                                    border-radius: 3px;
                                                                                                                                    border: 1px solid #D7D1D5;
                                                                                                                                    margin-top: 5px;
                                                                                                                                    margin-bottom: 5px;
                                                                                                                                    padding: 5px 0px 10px 5px;
                                                                                                                                    font-size: 14px;
                                                                                                                                    /* line-height: 1.75; */
                                                                                                                                }
                                                                                                                            </style>


                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="col-lg-2 ">
                                                                                                                        <div
                                                                                                                            class="mb-3 mt-3">
                                                                                                                            <h5>Or
                                                                                                                            </h5>

                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="col-lg-5  mt-4">
                                                                                                                        <div
                                                                                                                            class="mb-3">
                                                                                                                            <label
                                                                                                                                for="useremail"
                                                                                                                                class="form-label">Provide
                                                                                                                                a
                                                                                                                                hex
                                                                                                                                color
                                                                                                                                code
                                                                                                                                <span
                                                                                                                                    class="text-danger">*</span></label>
                                                                                                                            <form>
                                                                                                                                <!-- <label>HEX</label> -->
                                                                                                                                <input
                                                                                                                                    type="text"
                                                                                                                                    class="form-control"
                                                                                                                                    id="setColor" />
                                                                                                                            </form>
                                                                                                                            <!-- <input type="email" class="form-control" id="useremail" placeholder="Label name " required>
                                                                                                    <div class="invalid-feedback">
                                                                                                        Please enter Label name 
                                                                                                    </div> -->
                                                                                                                        </div>

                                                                                                                    </div>
                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!--end col-->
                                                                                                </div>
                                                                                                <!--end row-->
                                                                                            </form>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="tab-pane" id="profile1"
                                                                                    role="tabpanel">
                                                                                    <div
                                                                                        class="d-flex justify-content-center">
                                                                                        <div class="cad">
                                                                                            <div
                                                                                                class=" text-center mt-5 mb-2">
                                                                                                <div
                                                                                                    class="position-relative d-inline-block ">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                        width="147"
                                                                                                        height="134"
                                                                                                        viewBox="0 0 147 134"
                                                                                                        fill="none">
                                                                                                        <g
                                                                                                            clip-path="url(#clip0_2434_12604)">
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                clip-rule="evenodd"
                                                                                                                d="M2.143 94.5372C-0.715003 92.8872 -0.715003 90.1872 2.143 88.5372L68.243 50.3742C71.101 48.7242 75.777 48.7242 78.635 50.3742L144.736 88.5372C147.594 90.1872 147.594 92.8872 144.736 94.5372L78.636 132.7C75.777 134.35 71.101 134.35 68.243 132.7L2.143 94.5372Z"
                                                                                                                fill="#EAF0F6"
                                                                                                                fill-opacity="0.75" />
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                clip-rule="evenodd"
                                                                                                                d="M94.611 80.4458C105.676 86.8358 105.676 97.2888 94.611 103.677C83.546 110.067 65.439 110.067 54.373 103.677C43.308 97.2888 43.308 86.8348 54.373 80.4468C65.439 74.0568 83.546 74.0558 94.611 80.4458Z"
                                                                                                                fill="white" />
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                clip-rule="evenodd"
                                                                                                                d="M82.974 42.7708C77.476 43.8988 71.437 43.8948 65.944 42.7578L46.688 88.6808H46.695C47.784 85.6578 50.332 82.7808 54.374 80.4478C65.439 74.0578 83.546 74.0578 94.611 80.4478C97.513 82.1218 99.631 84.0798 101.011 86.1668L82.974 42.7708Z"
                                                                                                                fill="white" />
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                clip-rule="evenodd"
                                                                                                                d="M92.296 32.6864C102.088 27.0334 102.088 17.7814 92.296 12.1284C82.504 6.47542 66.481 6.47542 56.689 12.1284C46.897 17.7814 46.896 27.0334 56.689 32.6864C66.481 38.3394 82.504 38.3394 92.296 32.6864Z"
                                                                                                                stroke="#CBD6E5"
                                                                                                                stroke-width="5"
                                                                                                                stroke-linecap="round"
                                                                                                                stroke-linejoin="round" />
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                clip-rule="evenodd"
                                                                                                                d="M87.338 30.0702C94.638 25.8562 94.638 18.9602 87.338 14.7452C80.038 10.5302 68.094 10.5302 60.794 14.7452C53.494 18.9592 53.494 25.8562 60.794 30.0702C68.094 34.2842 80.038 34.2842 87.338 30.0702Z"
                                                                                                                stroke="#CBD6E5"
                                                                                                                stroke-width="5"
                                                                                                                stroke-linecap="round"
                                                                                                                stroke-linejoin="round" />
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                clip-rule="evenodd"
                                                                                                                d="M92.296 32.6863C82.504 38.3393 66.481 38.3393 56.689 32.6863C51.793 29.8593 49.345 26.1332 49.345 22.4062V29.1093C49.345 32.8353 51.793 36.5613 56.689 39.3883C66.481 45.0413 82.504 45.0413 92.296 39.3883C97.192 36.5613 99.64 32.8352 99.64 29.1082V22.4073C99.64 26.1333 97.192 29.8593 92.296 32.6863Z"
                                                                                                                stroke="#CBD6E5"
                                                                                                                stroke-width="5"
                                                                                                                stroke-linecap="round"
                                                                                                                stroke-linejoin="round" />
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                clip-rule="evenodd"
                                                                                                                d="M100.274 42.3972L104.261 36.0672L97.044 31.2492L97.033 31.2412L97.029 31.2392C96.548 30.9662 95.889 31.0062 95.162 31.4252C93.702 32.2682 92.508 34.3372 92.508 36.0232C92.508 36.8242 92.783 37.3912 93.223 37.6842L93.22 37.6902L93.276 37.7282L93.294 37.7392L100.274 42.3972Z"
                                                                                                                stroke="#CBD6E5"
                                                                                                                stroke-width="5"
                                                                                                                stroke-linecap="round"
                                                                                                                stroke-linejoin="round" />
                                                                                                            <path
                                                                                                                d="M119.293 42.3983L105.198 34.2303C104.453 33.7983 103.426 33.8563 102.294 34.5103C100.035 35.8133 98.187 39.0153 98.187 41.6233C98.187 42.9433 98.662 43.8643 99.422 44.2873L99.42 44.2913L113.599 52.4923"
                                                                                                                stroke="#CBD6E5"
                                                                                                                stroke-width="5"
                                                                                                                stroke-linecap="round"
                                                                                                                stroke-linejoin="round" />
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                clip-rule="evenodd"
                                                                                                                d="M120.635 45.1152C120.635 42.5062 118.787 41.4392 116.528 42.7452C114.268 44.0482 112.42 47.2492 112.42 49.8582C112.42 52.4662 114.268 53.5342 116.528 52.2292C118.788 50.9252 120.635 47.7242 120.635 45.1152ZM74.333 12.0762C71.306 13.6842 68.51 15.7232 66.077 18.1382C63.147 21.0472 60.759 24.4882 59.013 28.2302C59.614 28.7262 60.284 29.2002 61.043 29.6382C64.073 31.3862 67.903 32.3872 71.855 32.6612C73.02 28.8402 74.748 25.2042 77.115 21.9912C79.36 18.9432 82.203 16.3032 85.436 14.3412C82.184 12.8652 78.268 12.1092 74.333 12.0762Z"
                                                                                                                stroke="#CBD6E5"
                                                                                                                stroke-width="5"
                                                                                                                stroke-linecap="round"
                                                                                                                stroke-linejoin="round" />
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                clip-rule="evenodd"
                                                                                                                d="M87.55 15.4727C83.571 17.3457 80.307 20.5807 77.944 24.3027C76.275 26.9327 75.026 29.7927 74.017 32.7457C75.249 32.7477 76.479 32.6757 77.691 32.5377C79.451 29.5367 81.664 26.0167 83.658 23.7657C85.656 21.5107 88.033 19.5397 90.729 18.2207C89.945 17.2247 88.877 16.2987 87.55 15.4727Z"
                                                                                                                stroke="#CBD6E5"
                                                                                                                stroke-width="5"
                                                                                                                stroke-linecap="round"
                                                                                                                stroke-linejoin="round" />
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                clip-rule="evenodd"
                                                                                                                d="M92.296 32.6864C102.088 27.0334 102.088 17.7814 92.296 12.1284C82.504 6.47542 66.481 6.47542 56.689 12.1284C46.897 17.7814 46.896 27.0334 56.689 32.6864C66.481 38.3394 82.504 38.3394 92.296 32.6864Z"
                                                                                                                fill="white" />
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                clip-rule="evenodd"
                                                                                                                d="M92.296 32.6864C102.088 27.0334 102.088 17.7814 92.296 12.1284C82.504 6.47542 66.481 6.47542 56.689 12.1284C46.897 17.7814 46.896 27.0334 56.689 32.6864C66.481 38.3394 82.504 38.3394 92.296 32.6864Z"
                                                                                                                stroke="#CBD6E5"
                                                                                                                stroke-linecap="round"
                                                                                                                stroke-linejoin="round" />
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                clip-rule="evenodd"
                                                                                                                d="M87.338 30.0702C94.638 25.8562 94.638 18.9602 87.338 14.7452C80.038 10.5302 68.094 10.5302 60.794 14.7452C53.494 18.9592 53.494 25.8562 60.794 30.0702C68.094 34.2842 80.038 34.2842 87.338 30.0702Z"
                                                                                                                fill="#F2F5F8" />
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                clip-rule="evenodd"
                                                                                                                d="M87.338 30.0702C94.638 25.8562 94.638 18.9602 87.338 14.7452C80.038 10.5302 68.094 10.5302 60.794 14.7452C53.494 18.9592 53.494 25.8562 60.794 30.0702C68.094 34.2842 80.038 34.2842 87.338 30.0702Z"
                                                                                                                stroke="#CBD6E5" />
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                clip-rule="evenodd"
                                                                                                                d="M92.296 32.6863C82.504 38.3393 66.481 38.3393 56.689 32.6863C51.793 29.8593 49.345 26.1332 49.345 22.4062V29.1093C49.345 32.8353 51.793 36.5613 56.689 39.3883C66.481 45.0413 82.504 45.0413 92.296 39.3883C97.192 36.5613 99.64 32.8352 99.64 29.1082V22.4073C99.64 26.1333 97.192 29.8593 92.296 32.6863Z"
                                                                                                                fill="#F2F5F8" />
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                clip-rule="evenodd"
                                                                                                                d="M92.296 32.6863C82.504 38.3393 66.481 38.3393 56.689 32.6863C51.793 29.8593 49.345 26.1332 49.345 22.4062V29.1093C49.345 32.8353 51.793 36.5613 56.689 39.3883C66.481 45.0413 82.504 45.0413 92.296 39.3883C97.192 36.5613 99.64 32.8352 99.64 29.1082V22.4073C99.64 26.1333 97.192 29.8593 92.296 32.6863Z"
                                                                                                                stroke="#CBD6E5" />
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                clip-rule="evenodd"
                                                                                                                d="M100.274 42.3972L104.261 36.0672L97.044 31.2492L97.033 31.2412L97.029 31.2392C96.548 30.9662 95.889 31.0062 95.162 31.4252C93.702 32.2682 92.508 34.3372 92.508 36.0232C92.508 36.8242 92.783 37.3912 93.223 37.6842L93.22 37.6902L93.276 37.7282L93.294 37.7392L100.274 42.3972Z"
                                                                                                                fill="white" />
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                clip-rule="evenodd"
                                                                                                                d="M100.274 42.3972L104.261 36.0672L97.044 31.2492L97.033 31.2412L97.029 31.2392C96.548 30.9662 95.889 31.0062 95.162 31.4252C93.702 32.2682 92.508 34.3372 92.508 36.0232C92.508 36.8242 92.783 37.3912 93.223 37.6842L93.22 37.6902L93.276 37.7282L93.294 37.7392L100.274 42.3972Z"
                                                                                                                stroke="#CBD6E5"
                                                                                                                stroke-linecap="round"
                                                                                                                stroke-linejoin="round" />
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                clip-rule="evenodd"
                                                                                                                d="M119.293 42.3983L105.198 34.2303C104.453 33.7983 103.426 33.8563 102.294 34.5103C100.035 35.8133 98.187 39.0153 98.187 41.6233C98.187 42.9433 98.662 43.8643 99.422 44.2873L99.42 44.2913L113.599 52.4923"
                                                                                                                fill="#F2F5F8" />
                                                                                                            <path
                                                                                                                d="M119.293 42.3983L105.198 34.2303C104.453 33.7983 103.426 33.8563 102.294 34.5103C100.035 35.8133 98.187 39.0153 98.187 41.6233C98.187 42.9433 98.662 43.8643 99.422 44.2873L99.42 44.2913L113.599 52.4923"
                                                                                                                stroke="#CBD6E5" />
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                clip-rule="evenodd"
                                                                                                                d="M120.635 45.1153C120.635 42.5063 118.787 41.4393 116.528 42.7453C114.268 44.0483 112.42 47.2493 112.42 49.8583C112.42 52.4663 114.268 53.5343 116.528 52.2293C118.788 50.9253 120.635 47.7243 120.635 45.1153Z"
                                                                                                                fill="#F2F5F8" />
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                clip-rule="evenodd"
                                                                                                                d="M120.635 45.1153C120.635 42.5063 118.787 41.4393 116.528 42.7453C114.268 44.0483 112.42 47.2493 112.42 49.8583C112.42 52.4663 114.268 53.5343 116.528 52.2293C118.788 50.9253 120.635 47.7243 120.635 45.1153Z"
                                                                                                                stroke="#CBD6E5" />
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                clip-rule="evenodd"
                                                                                                                d="M74.333 12.0762C71.306 13.6842 68.51 15.7232 66.077 18.1382C63.147 21.0472 60.759 24.4882 59.013 28.2302C59.614 28.7262 60.284 29.2002 61.043 29.6382C64.073 31.3862 67.903 32.3872 71.855 32.6612C73.02 28.8402 74.748 25.2042 77.115 21.9912C79.36 18.9432 82.203 16.3032 85.436 14.3412C82.184 12.8652 78.268 12.1092 74.333 12.0762Z"
                                                                                                                fill="white" />
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                clip-rule="evenodd"
                                                                                                                d="M87.55 15.4727C83.571 17.3457 80.307 20.5807 77.944 24.3027C76.275 26.9327 75.026 29.7927 74.017 32.7457C75.249 32.7477 76.479 32.6757 77.691 32.5377C79.451 29.5367 81.664 26.0167 83.658 23.7657C85.656 21.5107 88.033 19.5397 90.729 18.2207C89.945 17.2247 88.877 16.2987 87.55 15.4727Z"
                                                                                                                fill="white" />
                                                                                                            <path
                                                                                                                d="M101.012 86.1659L82.974 42.7699C77.475 43.8969 71.437 43.8929 65.943 42.7559L46.687 88.6789H46.694"
                                                                                                                stroke="#CBD6E5"
                                                                                                                stroke-linecap="round"
                                                                                                                stroke-linejoin="round" />
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                clip-rule="evenodd"
                                                                                                                d="M94.611 80.4458C105.676 86.8358 105.676 97.2888 94.611 103.677C83.546 110.067 65.439 110.067 54.373 103.677C43.308 97.2888 43.308 86.8348 54.373 80.4468C65.439 74.0568 83.546 74.0558 94.611 80.4458Z"
                                                                                                                stroke="#CBD6E5"
                                                                                                                stroke-linecap="round"
                                                                                                                stroke-linejoin="round" />
                                                                                                            <path
                                                                                                                d="M121.68 10.236L109.778 14.597M115.666 23.734L110.427 21.264M119 25.306L118.247 24.95M106.763 7.402L105.96 9.106M109.781 1L107.971 4.84"
                                                                                                                stroke="#CBD6E5"
                                                                                                                stroke-width="2"
                                                                                                                stroke-linecap="round"
                                                                                                                stroke-linejoin="round" />
                                                                                                        </g>
                                                                                                        <defs>
                                                                                                            <clipPath
                                                                                                                id="clip0_2434_12604">
                                                                                                                <rect
                                                                                                                    width="147"
                                                                                                                    height="134"
                                                                                                                    fill="white" />
                                                                                                            </clipPath>
                                                                                                        </defs>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <h5
                                                                                                    class="mt-4 mb-4 fs-18 fw-normal fst-italic">
                                                                                                    No teams created
                                                                                                    yet, first create a
                                                                                                    team by adding users
                                                                                                    in Users and Teams
                                                                                                    page.
                                                                                                    Then you can add
                                                                                                    members to this
                                                                                                    mailbox.</h5>
                                                                                                <a href="url"
                                                                                                    class="fs-16 fw-normal">Go
                                                                                                    to Users and
                                                                                                    team</a>
                                                                                                <!-- <a href="http://">  <button type="button" class="btn btn-light  fs-16 fw-normal" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg"><i class="ri-add-fill"></i>Add mailbox</button></a> -->

                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="tab-pane" id="messages1"
                                                                                    role="tabpanel">
                                                                                    <div
                                                                                        class="d-flex justify-content-center">
                                                                                        <div class="cad">
                                                                                            <div
                                                                                                class=" text-center mt-5 mb-2">
                                                                                                <div
                                                                                                    class="position-relative d-inline-block ">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                        width="147"
                                                                                                        height="134"
                                                                                                        viewBox="0 0 147 134"
                                                                                                        fill="none">
                                                                                                        <g
                                                                                                            clip-path="url(#clip0_2434_12604)">
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                clip-rule="evenodd"
                                                                                                                d="M2.143 94.5372C-0.715003 92.8872 -0.715003 90.1872 2.143 88.5372L68.243 50.3742C71.101 48.7242 75.777 48.7242 78.635 50.3742L144.736 88.5372C147.594 90.1872 147.594 92.8872 144.736 94.5372L78.636 132.7C75.777 134.35 71.101 134.35 68.243 132.7L2.143 94.5372Z"
                                                                                                                fill="#EAF0F6"
                                                                                                                fill-opacity="0.75" />
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                clip-rule="evenodd"
                                                                                                                d="M94.611 80.4458C105.676 86.8358 105.676 97.2888 94.611 103.677C83.546 110.067 65.439 110.067 54.373 103.677C43.308 97.2888 43.308 86.8348 54.373 80.4468C65.439 74.0568 83.546 74.0558 94.611 80.4458Z"
                                                                                                                fill="white" />
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                clip-rule="evenodd"
                                                                                                                d="M82.974 42.7708C77.476 43.8988 71.437 43.8948 65.944 42.7578L46.688 88.6808H46.695C47.784 85.6578 50.332 82.7808 54.374 80.4478C65.439 74.0578 83.546 74.0578 94.611 80.4478C97.513 82.1218 99.631 84.0798 101.011 86.1668L82.974 42.7708Z"
                                                                                                                fill="white" />
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                clip-rule="evenodd"
                                                                                                                d="M92.296 32.6864C102.088 27.0334 102.088 17.7814 92.296 12.1284C82.504 6.47542 66.481 6.47542 56.689 12.1284C46.897 17.7814 46.896 27.0334 56.689 32.6864C66.481 38.3394 82.504 38.3394 92.296 32.6864Z"
                                                                                                                stroke="#CBD6E5"
                                                                                                                stroke-width="5"
                                                                                                                stroke-linecap="round"
                                                                                                                stroke-linejoin="round" />
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                clip-rule="evenodd"
                                                                                                                d="M87.338 30.0702C94.638 25.8562 94.638 18.9602 87.338 14.7452C80.038 10.5302 68.094 10.5302 60.794 14.7452C53.494 18.9592 53.494 25.8562 60.794 30.0702C68.094 34.2842 80.038 34.2842 87.338 30.0702Z"
                                                                                                                stroke="#CBD6E5"
                                                                                                                stroke-width="5"
                                                                                                                stroke-linecap="round"
                                                                                                                stroke-linejoin="round" />
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                clip-rule="evenodd"
                                                                                                                d="M92.296 32.6863C82.504 38.3393 66.481 38.3393 56.689 32.6863C51.793 29.8593 49.345 26.1332 49.345 22.4062V29.1093C49.345 32.8353 51.793 36.5613 56.689 39.3883C66.481 45.0413 82.504 45.0413 92.296 39.3883C97.192 36.5613 99.64 32.8352 99.64 29.1082V22.4073C99.64 26.1333 97.192 29.8593 92.296 32.6863Z"
                                                                                                                stroke="#CBD6E5"
                                                                                                                stroke-width="5"
                                                                                                                stroke-linecap="round"
                                                                                                                stroke-linejoin="round" />
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                clip-rule="evenodd"
                                                                                                                d="M100.274 42.3972L104.261 36.0672L97.044 31.2492L97.033 31.2412L97.029 31.2392C96.548 30.9662 95.889 31.0062 95.162 31.4252C93.702 32.2682 92.508 34.3372 92.508 36.0232C92.508 36.8242 92.783 37.3912 93.223 37.6842L93.22 37.6902L93.276 37.7282L93.294 37.7392L100.274 42.3972Z"
                                                                                                                stroke="#CBD6E5"
                                                                                                                stroke-width="5"
                                                                                                                stroke-linecap="round"
                                                                                                                stroke-linejoin="round" />
                                                                                                            <path
                                                                                                                d="M119.293 42.3983L105.198 34.2303C104.453 33.7983 103.426 33.8563 102.294 34.5103C100.035 35.8133 98.187 39.0153 98.187 41.6233C98.187 42.9433 98.662 43.8643 99.422 44.2873L99.42 44.2913L113.599 52.4923"
                                                                                                                stroke="#CBD6E5"
                                                                                                                stroke-width="5"
                                                                                                                stroke-linecap="round"
                                                                                                                stroke-linejoin="round" />
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                clip-rule="evenodd"
                                                                                                                d="M120.635 45.1152C120.635 42.5062 118.787 41.4392 116.528 42.7452C114.268 44.0482 112.42 47.2492 112.42 49.8582C112.42 52.4662 114.268 53.5342 116.528 52.2292C118.788 50.9252 120.635 47.7242 120.635 45.1152ZM74.333 12.0762C71.306 13.6842 68.51 15.7232 66.077 18.1382C63.147 21.0472 60.759 24.4882 59.013 28.2302C59.614 28.7262 60.284 29.2002 61.043 29.6382C64.073 31.3862 67.903 32.3872 71.855 32.6612C73.02 28.8402 74.748 25.2042 77.115 21.9912C79.36 18.9432 82.203 16.3032 85.436 14.3412C82.184 12.8652 78.268 12.1092 74.333 12.0762Z"
                                                                                                                stroke="#CBD6E5"
                                                                                                                stroke-width="5"
                                                                                                                stroke-linecap="round"
                                                                                                                stroke-linejoin="round" />
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                clip-rule="evenodd"
                                                                                                                d="M87.55 15.4727C83.571 17.3457 80.307 20.5807 77.944 24.3027C76.275 26.9327 75.026 29.7927 74.017 32.7457C75.249 32.7477 76.479 32.6757 77.691 32.5377C79.451 29.5367 81.664 26.0167 83.658 23.7657C85.656 21.5107 88.033 19.5397 90.729 18.2207C89.945 17.2247 88.877 16.2987 87.55 15.4727Z"
                                                                                                                stroke="#CBD6E5"
                                                                                                                stroke-width="5"
                                                                                                                stroke-linecap="round"
                                                                                                                stroke-linejoin="round" />
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                clip-rule="evenodd"
                                                                                                                d="M92.296 32.6864C102.088 27.0334 102.088 17.7814 92.296 12.1284C82.504 6.47542 66.481 6.47542 56.689 12.1284C46.897 17.7814 46.896 27.0334 56.689 32.6864C66.481 38.3394 82.504 38.3394 92.296 32.6864Z"
                                                                                                                fill="white" />
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                clip-rule="evenodd"
                                                                                                                d="M92.296 32.6864C102.088 27.0334 102.088 17.7814 92.296 12.1284C82.504 6.47542 66.481 6.47542 56.689 12.1284C46.897 17.7814 46.896 27.0334 56.689 32.6864C66.481 38.3394 82.504 38.3394 92.296 32.6864Z"
                                                                                                                stroke="#CBD6E5"
                                                                                                                stroke-linecap="round"
                                                                                                                stroke-linejoin="round" />
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                clip-rule="evenodd"
                                                                                                                d="M87.338 30.0702C94.638 25.8562 94.638 18.9602 87.338 14.7452C80.038 10.5302 68.094 10.5302 60.794 14.7452C53.494 18.9592 53.494 25.8562 60.794 30.0702C68.094 34.2842 80.038 34.2842 87.338 30.0702Z"
                                                                                                                fill="#F2F5F8" />
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                clip-rule="evenodd"
                                                                                                                d="M87.338 30.0702C94.638 25.8562 94.638 18.9602 87.338 14.7452C80.038 10.5302 68.094 10.5302 60.794 14.7452C53.494 18.9592 53.494 25.8562 60.794 30.0702C68.094 34.2842 80.038 34.2842 87.338 30.0702Z"
                                                                                                                stroke="#CBD6E5" />
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                clip-rule="evenodd"
                                                                                                                d="M92.296 32.6863C82.504 38.3393 66.481 38.3393 56.689 32.6863C51.793 29.8593 49.345 26.1332 49.345 22.4062V29.1093C49.345 32.8353 51.793 36.5613 56.689 39.3883C66.481 45.0413 82.504 45.0413 92.296 39.3883C97.192 36.5613 99.64 32.8352 99.64 29.1082V22.4073C99.64 26.1333 97.192 29.8593 92.296 32.6863Z"
                                                                                                                fill="#F2F5F8" />
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                clip-rule="evenodd"
                                                                                                                d="M92.296 32.6863C82.504 38.3393 66.481 38.3393 56.689 32.6863C51.793 29.8593 49.345 26.1332 49.345 22.4062V29.1093C49.345 32.8353 51.793 36.5613 56.689 39.3883C66.481 45.0413 82.504 45.0413 92.296 39.3883C97.192 36.5613 99.64 32.8352 99.64 29.1082V22.4073C99.64 26.1333 97.192 29.8593 92.296 32.6863Z"
                                                                                                                stroke="#CBD6E5" />
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                clip-rule="evenodd"
                                                                                                                d="M100.274 42.3972L104.261 36.0672L97.044 31.2492L97.033 31.2412L97.029 31.2392C96.548 30.9662 95.889 31.0062 95.162 31.4252C93.702 32.2682 92.508 34.3372 92.508 36.0232C92.508 36.8242 92.783 37.3912 93.223 37.6842L93.22 37.6902L93.276 37.7282L93.294 37.7392L100.274 42.3972Z"
                                                                                                                fill="white" />
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                clip-rule="evenodd"
                                                                                                                d="M100.274 42.3972L104.261 36.0672L97.044 31.2492L97.033 31.2412L97.029 31.2392C96.548 30.9662 95.889 31.0062 95.162 31.4252C93.702 32.2682 92.508 34.3372 92.508 36.0232C92.508 36.8242 92.783 37.3912 93.223 37.6842L93.22 37.6902L93.276 37.7282L93.294 37.7392L100.274 42.3972Z"
                                                                                                                stroke="#CBD6E5"
                                                                                                                stroke-linecap="round"
                                                                                                                stroke-linejoin="round" />
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                clip-rule="evenodd"
                                                                                                                d="M119.293 42.3983L105.198 34.2303C104.453 33.7983 103.426 33.8563 102.294 34.5103C100.035 35.8133 98.187 39.0153 98.187 41.6233C98.187 42.9433 98.662 43.8643 99.422 44.2873L99.42 44.2913L113.599 52.4923"
                                                                                                                fill="#F2F5F8" />
                                                                                                            <path
                                                                                                                d="M119.293 42.3983L105.198 34.2303C104.453 33.7983 103.426 33.8563 102.294 34.5103C100.035 35.8133 98.187 39.0153 98.187 41.6233C98.187 42.9433 98.662 43.8643 99.422 44.2873L99.42 44.2913L113.599 52.4923"
                                                                                                                stroke="#CBD6E5" />
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                clip-rule="evenodd"
                                                                                                                d="M120.635 45.1153C120.635 42.5063 118.787 41.4393 116.528 42.7453C114.268 44.0483 112.42 47.2493 112.42 49.8583C112.42 52.4663 114.268 53.5343 116.528 52.2293C118.788 50.9253 120.635 47.7243 120.635 45.1153Z"
                                                                                                                fill="#F2F5F8" />
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                clip-rule="evenodd"
                                                                                                                d="M120.635 45.1153C120.635 42.5063 118.787 41.4393 116.528 42.7453C114.268 44.0483 112.42 47.2493 112.42 49.8583C112.42 52.4663 114.268 53.5343 116.528 52.2293C118.788 50.9253 120.635 47.7243 120.635 45.1153Z"
                                                                                                                stroke="#CBD6E5" />
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                clip-rule="evenodd"
                                                                                                                d="M74.333 12.0762C71.306 13.6842 68.51 15.7232 66.077 18.1382C63.147 21.0472 60.759 24.4882 59.013 28.2302C59.614 28.7262 60.284 29.2002 61.043 29.6382C64.073 31.3862 67.903 32.3872 71.855 32.6612C73.02 28.8402 74.748 25.2042 77.115 21.9912C79.36 18.9432 82.203 16.3032 85.436 14.3412C82.184 12.8652 78.268 12.1092 74.333 12.0762Z"
                                                                                                                fill="white" />
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                clip-rule="evenodd"
                                                                                                                d="M87.55 15.4727C83.571 17.3457 80.307 20.5807 77.944 24.3027C76.275 26.9327 75.026 29.7927 74.017 32.7457C75.249 32.7477 76.479 32.6757 77.691 32.5377C79.451 29.5367 81.664 26.0167 83.658 23.7657C85.656 21.5107 88.033 19.5397 90.729 18.2207C89.945 17.2247 88.877 16.2987 87.55 15.4727Z"
                                                                                                                fill="white" />
                                                                                                            <path
                                                                                                                d="M101.012 86.1659L82.974 42.7699C77.475 43.8969 71.437 43.8929 65.943 42.7559L46.687 88.6789H46.694"
                                                                                                                stroke="#CBD6E5"
                                                                                                                stroke-linecap="round"
                                                                                                                stroke-linejoin="round" />
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                clip-rule="evenodd"
                                                                                                                d="M94.611 80.4458C105.676 86.8358 105.676 97.2888 94.611 103.677C83.546 110.067 65.439 110.067 54.373 103.677C43.308 97.2888 43.308 86.8348 54.373 80.4468C65.439 74.0568 83.546 74.0558 94.611 80.4458Z"
                                                                                                                stroke="#CBD6E5"
                                                                                                                stroke-linecap="round"
                                                                                                                stroke-linejoin="round" />
                                                                                                            <path
                                                                                                                d="M121.68 10.236L109.778 14.597M115.666 23.734L110.427 21.264M119 25.306L118.247 24.95M106.763 7.402L105.96 9.106M109.781 1L107.971 4.84"
                                                                                                                stroke="#CBD6E5"
                                                                                                                stroke-width="2"
                                                                                                                stroke-linecap="round"
                                                                                                                stroke-linejoin="round" />
                                                                                                        </g>
                                                                                                        <defs>
                                                                                                            <clipPath
                                                                                                                id="clip0_2434_12604">
                                                                                                                <rect
                                                                                                                    width="147"
                                                                                                                    height="134"
                                                                                                                    fill="white" />
                                                                                                            </clipPath>
                                                                                                        </defs>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <h5
                                                                                                    class="mt-4 mb-4 fs-18 fw-normal fst-italic">
                                                                                                    No teams created
                                                                                                    yet, first create a
                                                                                                    team by adding users
                                                                                                    in Users and Teams
                                                                                                    page.</h5>
                                                                                                <a href="http://"
                                                                                                    class="fs-16 fw-normal">Go
                                                                                                    to Users and
                                                                                                    team</a>

                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="tab-pane" id="settings1"
                                                                                    role="tabpanel">
                                                                                    <div class="d-flex">
                                                                                        <div class="flex-shrink-0">
                                                                                        </div>
                                                                                        <div class="flex-grow-1 ms-2">
                                                                                            <!-- Accordions Bordered -->
                                                                                            <div class="accordion custom-accordionwithicon custom-accordion-border accordion-border-box accordion-secondary"
                                                                                                id="accordionBordered">

                                                                                                <div
                                                                                                    class="accordion-item">
                                                                                                    <h1 class="accordion-header"
                                                                                                        id="accordionborderedExample1">
                                                                                                        <button
                                                                                                            class="accordion-button"
                                                                                                            type="button"
                                                                                                            data-bs-toggle="collapse"
                                                                                                            data-bs-target="#accor_borderedExamplecollapse1"
                                                                                                            aria-expanded="true"
                                                                                                            aria-controls="accor_borderedExamplecollapse1">
                                                                                                            Leads
                                                                                                        </button>
                                                                                                    </h1>
                                                                                                    <div id="accor_borderedExamplecollapse1"
                                                                                                        class="accordion-collapse collapse show"
                                                                                                        aria-labelledby="accordionborderedExample1"
                                                                                                        data-bs-parent="#accordionBordered">
                                                                                                        <div
                                                                                                            class="accordion-body">
                                                                                                            <div
                                                                                                                class="row">
                                                                                                                <div
                                                                                                                    class="col-md-6">
                                                                                                                    <h6>Event
                                                                                                                        name
                                                                                                                    </h6>
                                                                                                                    <hr>
                                                                                                                    <p>All
                                                                                                                        notifications
                                                                                                                        related
                                                                                                                        to
                                                                                                                        lead
                                                                                                                    </p>
                                                                                                                    <p> Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        is
                                                                                                                        created
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        is
                                                                                                                        assigned
                                                                                                                        to
                                                                                                                        you
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        opens
                                                                                                                        the
                                                                                                                        email
                                                                                                                        sent
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        clicks
                                                                                                                        a
                                                                                                                        link
                                                                                                                        in
                                                                                                                        email
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        is
                                                                                                                        qualified
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        is
                                                                                                                        unqualified
                                                                                                                    </p>

                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="col-md-3">
                                                                                                                    <h6>Notification
                                                                                                                    </h6>
                                                                                                                    <hr>
                                                                                                                    <!-- Custom Checkboxes Color -->
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="col-md-3">
                                                                                                                    <h6>Webpush
                                                                                                                    </h6>
                                                                                                                    <hr>
                                                                                                                    <!-- Custom Checkboxes Color -->
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="accordion-item mt-2">
                                                                                                    <h2 class="accordion-header"
                                                                                                        id="accordionborderedExample2">
                                                                                                        <button
                                                                                                            class="accordion-button collapsed"
                                                                                                            type="button"
                                                                                                            data-bs-toggle="collapse"
                                                                                                            data-bs-target="#accor_borderedExamplecollapse2"
                                                                                                            aria-expanded="false"
                                                                                                            aria-controls="accor_borderedExamplecollapse2">
                                                                                                            Deal
                                                                                                        </button>
                                                                                                    </h2>
                                                                                                    <div id="accor_borderedExamplecollapse2"
                                                                                                        class="accordion-collapse collapse"
                                                                                                        aria-labelledby="accordionborderedExample2"
                                                                                                        data-bs-parent="#accordionBordered">
                                                                                                        <div
                                                                                                            class="accordion-body">
                                                                                                            <div
                                                                                                                class="row">
                                                                                                                <div
                                                                                                                    class="col-md-6">
                                                                                                                    <h6>Event
                                                                                                                        name
                                                                                                                    </h6>
                                                                                                                    <hr>
                                                                                                                    <p>All
                                                                                                                        notifications
                                                                                                                        related
                                                                                                                        to
                                                                                                                        lead
                                                                                                                    </p>
                                                                                                                    <p> Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        is
                                                                                                                        created
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        is
                                                                                                                        assigned
                                                                                                                        to
                                                                                                                        you
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        opens
                                                                                                                        the
                                                                                                                        email
                                                                                                                        sent
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        clicks
                                                                                                                        a
                                                                                                                        link
                                                                                                                        in
                                                                                                                        email
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        is
                                                                                                                        qualified
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        is
                                                                                                                        unqualified
                                                                                                                    </p>

                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="col-md-3">
                                                                                                                    <h6>Notification
                                                                                                                    </h6>
                                                                                                                    <hr>
                                                                                                                    <!-- Custom Checkboxes Color -->
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="col-md-3">
                                                                                                                    <h6>Webpush
                                                                                                                    </h6>
                                                                                                                    <hr>
                                                                                                                    <!-- Custom Checkboxes Color -->
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="accordion-item mt-2">
                                                                                                    <h2 class="accordion-header"
                                                                                                        id="accordionborderedExample3">
                                                                                                        <button
                                                                                                            class="accordion-button collapsed"
                                                                                                            type="button"
                                                                                                            data-bs-toggle="collapse"
                                                                                                            data-bs-target="#accor_borderedExamplecollapse3"
                                                                                                            aria-expanded="false"
                                                                                                            aria-controls="accor_borderedExamplecollapse3">
                                                                                                            Contact
                                                                                                        </button>
                                                                                                    </h2>
                                                                                                    <div id="accor_borderedExamplecollapse3"
                                                                                                        class="accordion-collapse collapse"
                                                                                                        aria-labelledby="accordionborderedExample3"
                                                                                                        data-bs-parent="#accordionBordered">
                                                                                                        <div
                                                                                                            class="accordion-body">
                                                                                                            <div
                                                                                                                class="row">
                                                                                                                <div
                                                                                                                    class="col-md-6">
                                                                                                                    <h6>Event
                                                                                                                        name
                                                                                                                    </h6>
                                                                                                                    <hr>
                                                                                                                    <p>All
                                                                                                                        notifications
                                                                                                                        related
                                                                                                                        to
                                                                                                                        lead
                                                                                                                    </p>
                                                                                                                    <p> Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        is
                                                                                                                        created
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        is
                                                                                                                        assigned
                                                                                                                        to
                                                                                                                        you
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        opens
                                                                                                                        the
                                                                                                                        email
                                                                                                                        sent
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        clicks
                                                                                                                        a
                                                                                                                        link
                                                                                                                        in
                                                                                                                        email
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        is
                                                                                                                        qualified
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        is
                                                                                                                        unqualified
                                                                                                                    </p>

                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="col-md-3">
                                                                                                                    <h6>Notification
                                                                                                                    </h6>
                                                                                                                    <hr>
                                                                                                                    <!-- Custom Checkboxes Color -->
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="col-md-3">
                                                                                                                    <h6>Webpush
                                                                                                                    </h6>
                                                                                                                    <hr>
                                                                                                                    <!-- Custom Checkboxes Color -->
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="accordion-item mt-2">
                                                                                                    <h2 class="accordion-header"
                                                                                                        id="accordionborderedExample2">
                                                                                                        <button
                                                                                                            class="accordion-button collapsed"
                                                                                                            type="button"
                                                                                                            data-bs-toggle="collapse"
                                                                                                            data-bs-target="#accor_borderedExamplecollapse2"
                                                                                                            aria-expanded="false"
                                                                                                            aria-controls="accor_borderedExamplecollapse2">
                                                                                                            Account
                                                                                                        </button>
                                                                                                    </h2>
                                                                                                    <div id="accor_borderedExamplecollapse2"
                                                                                                        class="accordion-collapse collapse"
                                                                                                        aria-labelledby="accordionborderedExample2"
                                                                                                        data-bs-parent="#accordionBordered">
                                                                                                        <div
                                                                                                            class="accordion-body">
                                                                                                            <div
                                                                                                                class="row">
                                                                                                                <div
                                                                                                                    class="col-md-6">
                                                                                                                    <h6>Event
                                                                                                                        name
                                                                                                                    </h6>
                                                                                                                    <hr>
                                                                                                                    <p>All
                                                                                                                        notifications
                                                                                                                        related
                                                                                                                        to
                                                                                                                        lead
                                                                                                                    </p>
                                                                                                                    <p> Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        is
                                                                                                                        created
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        is
                                                                                                                        assigned
                                                                                                                        to
                                                                                                                        you
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        opens
                                                                                                                        the
                                                                                                                        email
                                                                                                                        sent
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        clicks
                                                                                                                        a
                                                                                                                        link
                                                                                                                        in
                                                                                                                        email
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        is
                                                                                                                        qualified
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        is
                                                                                                                        unqualified
                                                                                                                    </p>

                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="col-md-3">
                                                                                                                    <h6>Notification
                                                                                                                    </h6>
                                                                                                                    <hr>
                                                                                                                    <!-- Custom Checkboxes Color -->
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="col-md-3">
                                                                                                                    <h6>Webpush
                                                                                                                    </h6>
                                                                                                                    <hr>
                                                                                                                    <!-- Custom Checkboxes Color -->
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="accordion-item mt-2">
                                                                                                    <h2 class="accordion-header"
                                                                                                        id="accordionborderedExample3">
                                                                                                        <button
                                                                                                            class="accordion-button collapsed"
                                                                                                            type="button"
                                                                                                            data-bs-toggle="collapse"
                                                                                                            data-bs-target="#accor_borderedExamplecollapse3"
                                                                                                            aria-expanded="false"
                                                                                                            aria-controls="accor_borderedExamplecollapse3">
                                                                                                            Task
                                                                                                        </button>
                                                                                                    </h2>
                                                                                                    <div id="accor_borderedExamplecollapse3"
                                                                                                        class="accordion-collapse collapse"
                                                                                                        aria-labelledby="accordionborderedExample3"
                                                                                                        data-bs-parent="#accordionBordered">
                                                                                                        <div
                                                                                                            class="accordion-body">
                                                                                                            <div
                                                                                                                class="row">
                                                                                                                <div
                                                                                                                    class="col-md-6">
                                                                                                                    <h6>Event
                                                                                                                        name
                                                                                                                    </h6>
                                                                                                                    <hr>
                                                                                                                    <p>All
                                                                                                                        notifications
                                                                                                                        related
                                                                                                                        to
                                                                                                                        lead
                                                                                                                    </p>
                                                                                                                    <p> Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        is
                                                                                                                        created
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        is
                                                                                                                        assigned
                                                                                                                        to
                                                                                                                        you
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        opens
                                                                                                                        the
                                                                                                                        email
                                                                                                                        sent
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        clicks
                                                                                                                        a
                                                                                                                        link
                                                                                                                        in
                                                                                                                        email
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        is
                                                                                                                        qualified
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        is
                                                                                                                        unqualified
                                                                                                                    </p>

                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="col-md-3">
                                                                                                                    <h6>Notification
                                                                                                                    </h6>
                                                                                                                    <hr>
                                                                                                                    <!-- Custom Checkboxes Color -->
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="col-md-3">
                                                                                                                    <h6>Webpush
                                                                                                                    </h6>
                                                                                                                    <hr>
                                                                                                                    <!-- Custom Checkboxes Color -->
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="accordion-item mt-2">
                                                                                                    <h2 class="accordion-header"
                                                                                                        id="accordionborderedExample2">
                                                                                                        <button
                                                                                                            class="accordion-button collapsed"
                                                                                                            type="button"
                                                                                                            data-bs-toggle="collapse"
                                                                                                            data-bs-target="#accor_borderedExamplecollapse2"
                                                                                                            aria-expanded="false"
                                                                                                            aria-controls="accor_borderedExamplecollapse2">
                                                                                                            Ticket
                                                                                                        </button>
                                                                                                    </h2>
                                                                                                    <div id="accor_borderedExamplecollapse2"
                                                                                                        class="accordion-collapse collapse"
                                                                                                        aria-labelledby="accordionborderedExample2"
                                                                                                        data-bs-parent="#accordionBordered">
                                                                                                        <div
                                                                                                            class="accordion-body">
                                                                                                            <div
                                                                                                                class="row">
                                                                                                                <div
                                                                                                                    class="col-md-6">
                                                                                                                    <h6>Event
                                                                                                                        name
                                                                                                                    </h6>
                                                                                                                    <hr>
                                                                                                                    <p>All
                                                                                                                        notifications
                                                                                                                        related
                                                                                                                        to
                                                                                                                        lead
                                                                                                                    </p>
                                                                                                                    <p> Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        is
                                                                                                                        created
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        is
                                                                                                                        assigned
                                                                                                                        to
                                                                                                                        you
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        opens
                                                                                                                        the
                                                                                                                        email
                                                                                                                        sent
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        clicks
                                                                                                                        a
                                                                                                                        link
                                                                                                                        in
                                                                                                                        email
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        is
                                                                                                                        qualified
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        is
                                                                                                                        unqualified
                                                                                                                    </p>

                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="col-md-3">
                                                                                                                    <h6>Notification
                                                                                                                    </h6>
                                                                                                                    <hr>
                                                                                                                    <!-- Custom Checkboxes Color -->
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="col-md-3">
                                                                                                                    <h6>Webpush
                                                                                                                    </h6>
                                                                                                                    <hr>
                                                                                                                    <!-- Custom Checkboxes Color -->
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="accordion-item mt-2">
                                                                                                    <h2 class="accordion-header"
                                                                                                        id="accordionborderedExample3">
                                                                                                        <button
                                                                                                            class="accordion-button collapsed"
                                                                                                            type="button"
                                                                                                            data-bs-toggle="collapse"
                                                                                                            data-bs-target="#accor_borderedExamplecollapse3"
                                                                                                            aria-expanded="false"
                                                                                                            aria-controls="accor_borderedExamplecollapse3">
                                                                                                            Meeting
                                                                                                        </button>
                                                                                                    </h2>
                                                                                                    <div id="accor_borderedExamplecollapse3"
                                                                                                        class="accordion-collapse collapse"
                                                                                                        aria-labelledby="accordionborderedExample3"
                                                                                                        data-bs-parent="#accordionBordered">
                                                                                                        <div
                                                                                                            class="accordion-body">
                                                                                                            <div
                                                                                                                class="row">
                                                                                                                <div
                                                                                                                    class="col-md-6">
                                                                                                                    <h6>Event
                                                                                                                        name
                                                                                                                    </h6>
                                                                                                                    <hr>
                                                                                                                    <p>All
                                                                                                                        notifications
                                                                                                                        related
                                                                                                                        to
                                                                                                                        lead
                                                                                                                    </p>
                                                                                                                    <p> Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        is
                                                                                                                        created
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        is
                                                                                                                        assigned
                                                                                                                        to
                                                                                                                        you
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        opens
                                                                                                                        the
                                                                                                                        email
                                                                                                                        sent
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        clicks
                                                                                                                        a
                                                                                                                        link
                                                                                                                        in
                                                                                                                        email
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        is
                                                                                                                        qualified
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        is
                                                                                                                        unqualified
                                                                                                                    </p>

                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="col-md-3">
                                                                                                                    <h6>Notification
                                                                                                                    </h6>
                                                                                                                    <hr>
                                                                                                                    <!-- Custom Checkboxes Color -->
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="col-md-3">
                                                                                                                    <h6>Webpush
                                                                                                                    </h6>
                                                                                                                    <hr>
                                                                                                                    <!-- Custom Checkboxes Color -->
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="accordion-item mt-2">
                                                                                                    <h2 class="accordion-header"
                                                                                                        id="accordionborderedExample2">
                                                                                                        <button
                                                                                                            class="accordion-button collapsed"
                                                                                                            type="button"
                                                                                                            data-bs-toggle="collapse"
                                                                                                            data-bs-target="#accor_borderedExamplecollapse2"
                                                                                                            aria-expanded="false"
                                                                                                            aria-controls="accor_borderedExamplecollapse2">
                                                                                                            Mailbox
                                                                                                        </button>
                                                                                                    </h2>
                                                                                                    <div id="accor_borderedExamplecollapse2"
                                                                                                        class="accordion-collapse collapse"
                                                                                                        aria-labelledby="accordionborderedExample2"
                                                                                                        data-bs-parent="#accordionBordered">
                                                                                                        <div
                                                                                                            class="accordion-body">
                                                                                                            <div
                                                                                                                class="row">
                                                                                                                <div
                                                                                                                    class="col-md-6">
                                                                                                                    <h6>Event
                                                                                                                        name
                                                                                                                    </h6>
                                                                                                                    <hr>
                                                                                                                    <p>All
                                                                                                                        notifications
                                                                                                                        related
                                                                                                                        to
                                                                                                                        lead
                                                                                                                    </p>
                                                                                                                    <p> Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        is
                                                                                                                        created
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        is
                                                                                                                        assigned
                                                                                                                        to
                                                                                                                        you
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        opens
                                                                                                                        the
                                                                                                                        email
                                                                                                                        sent
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        clicks
                                                                                                                        a
                                                                                                                        link
                                                                                                                        in
                                                                                                                        email
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        is
                                                                                                                        qualified
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        is
                                                                                                                        unqualified
                                                                                                                    </p>

                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="col-md-3">
                                                                                                                    <h6>Notification
                                                                                                                    </h6>
                                                                                                                    <hr>
                                                                                                                    <!-- Custom Checkboxes Color -->
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="col-md-3">
                                                                                                                    <h6>Webpush
                                                                                                                    </h6>
                                                                                                                    <hr>
                                                                                                                    <!-- Custom Checkboxes Color -->
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="accordion-item mt-2">
                                                                                                    <h2 class="accordion-header"
                                                                                                        id="accordionborderedExample3">
                                                                                                        <button
                                                                                                            class="accordion-button collapsed"
                                                                                                            type="button"
                                                                                                            data-bs-toggle="collapse"
                                                                                                            data-bs-target="#accor_borderedExamplecollapse3"
                                                                                                            aria-expanded="false"
                                                                                                            aria-controls="accor_borderedExamplecollapse3">
                                                                                                            Chat
                                                                                                        </button>
                                                                                                    </h2>
                                                                                                    <div id="accor_borderedExamplecollapse3"
                                                                                                        class="accordion-collapse collapse"
                                                                                                        aria-labelledby="accordionborderedExample3"
                                                                                                        data-bs-parent="#accordionBordered">
                                                                                                        <div
                                                                                                            class="accordion-body">
                                                                                                            <div
                                                                                                                class="row">
                                                                                                                <div
                                                                                                                    class="col-md-6">
                                                                                                                    <h6>Event
                                                                                                                        name
                                                                                                                    </h6>
                                                                                                                    <hr>
                                                                                                                    <p>All
                                                                                                                        notifications
                                                                                                                        related
                                                                                                                        to
                                                                                                                        lead
                                                                                                                    </p>
                                                                                                                    <p> Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        is
                                                                                                                        created
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        is
                                                                                                                        assigned
                                                                                                                        to
                                                                                                                        you
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        opens
                                                                                                                        the
                                                                                                                        email
                                                                                                                        sent
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        clicks
                                                                                                                        a
                                                                                                                        link
                                                                                                                        in
                                                                                                                        email
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        is
                                                                                                                        qualified
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        is
                                                                                                                        unqualified
                                                                                                                    </p>

                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="col-md-3">
                                                                                                                    <h6>Notification
                                                                                                                    </h6>
                                                                                                                    <hr>
                                                                                                                    <!-- Custom Checkboxes Color -->
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="col-md-3">
                                                                                                                    <h6>Webpush
                                                                                                                    </h6>
                                                                                                                    <hr>
                                                                                                                    <!-- Custom Checkboxes Color -->
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="accordion-item mt-2">
                                                                                                    <h2 class="accordion-header"
                                                                                                        id="accordionborderedExample3">
                                                                                                        <button
                                                                                                            class="accordion-button collapsed"
                                                                                                            type="button"
                                                                                                            data-bs-toggle="collapse"
                                                                                                            data-bs-target="#accor_borderedExamplecollapse3"
                                                                                                            aria-expanded="false"
                                                                                                            aria-controls="accor_borderedExamplecollapse3">
                                                                                                            Projects
                                                                                                        </button>
                                                                                                    </h2>
                                                                                                    <div id="accor_borderedExamplecollapse3"
                                                                                                        class="accordion-collapse collapse"
                                                                                                        aria-labelledby="accordionborderedExample3"
                                                                                                        data-bs-parent="#accordionBordered">
                                                                                                        <div
                                                                                                            class="accordion-body">
                                                                                                            <div
                                                                                                                class="row">
                                                                                                                <div
                                                                                                                    class="col-md-6">
                                                                                                                    <h6>Event
                                                                                                                        name
                                                                                                                    </h6>
                                                                                                                    <hr>
                                                                                                                    <p>All
                                                                                                                        notifications
                                                                                                                        related
                                                                                                                        to
                                                                                                                        lead
                                                                                                                    </p>
                                                                                                                    <p> Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        is
                                                                                                                        created
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        is
                                                                                                                        assigned
                                                                                                                        to
                                                                                                                        you
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        opens
                                                                                                                        the
                                                                                                                        email
                                                                                                                        sent
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        clicks
                                                                                                                        a
                                                                                                                        link
                                                                                                                        in
                                                                                                                        email
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        is
                                                                                                                        qualified
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        is
                                                                                                                        unqualified
                                                                                                                    </p>

                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="col-md-3">
                                                                                                                    <h6>Notification
                                                                                                                    </h6>
                                                                                                                    <hr>
                                                                                                                    <!-- Custom Checkboxes Color -->
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="col-md-3">
                                                                                                                    <h6>Webpush
                                                                                                                    </h6>
                                                                                                                    <hr>
                                                                                                                    <!-- Custom Checkboxes Color -->
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="accordion-item mt-2">
                                                                                                    <h2 class="accordion-header"
                                                                                                        id="accordionborderedExample3">
                                                                                                        <button
                                                                                                            class="accordion-button collapsed"
                                                                                                            type="button"
                                                                                                            data-bs-toggle="collapse"
                                                                                                            data-bs-target="#accor_borderedExamplecollapse3"
                                                                                                            aria-expanded="false"
                                                                                                            aria-controls="accor_borderedExamplecollapse3">
                                                                                                            Payments
                                                                                                        </button>
                                                                                                    </h2>
                                                                                                    <div id="accor_borderedExamplecollapse3"
                                                                                                        class="accordion-collapse collapse"
                                                                                                        aria-labelledby="accordionborderedExample3"
                                                                                                        data-bs-parent="#accordionBordered">
                                                                                                        <div
                                                                                                            class="accordion-body">
                                                                                                            <div
                                                                                                                class="row">
                                                                                                                <div
                                                                                                                    class="col-md-6">
                                                                                                                    <h6>Event
                                                                                                                        name
                                                                                                                    </h6>
                                                                                                                    <hr>
                                                                                                                    <p>All
                                                                                                                        notifications
                                                                                                                        related
                                                                                                                        to
                                                                                                                        lead
                                                                                                                    </p>
                                                                                                                    <p> Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        is
                                                                                                                        created
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        is
                                                                                                                        assigned
                                                                                                                        to
                                                                                                                        you
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        opens
                                                                                                                        the
                                                                                                                        email
                                                                                                                        sent
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        clicks
                                                                                                                        a
                                                                                                                        link
                                                                                                                        in
                                                                                                                        email
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        is
                                                                                                                        qualified
                                                                                                                    </p>
                                                                                                                    <p>Get
                                                                                                                        notification
                                                                                                                        when
                                                                                                                        a
                                                                                                                        lead
                                                                                                                        is
                                                                                                                        unqualified
                                                                                                                    </p>

                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="col-md-3">
                                                                                                                    <h6>Notification
                                                                                                                    </h6>
                                                                                                                    <hr>
                                                                                                                    <!-- Custom Checkboxes Color -->
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="col-md-3">
                                                                                                                    <h6>Webpush
                                                                                                                    </h6>
                                                                                                                    <hr>
                                                                                                                    <!-- Custom Checkboxes Color -->
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-check form-check-outline form-check-secondary mb-3">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            type="checkbox"
                                                                                                                            id="formCheck7"
                                                                                                                            checked>

                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <!--end col-->
                                                                                            <div class="col-lg-12 mt-5">
                                                                                                <div
                                                                                                    class="hstack gap-2 justify-content-end">
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn btn-soft-success">Cancel</button>
                                                                                                    <button
                                                                                                        type="submit"
                                                                                                        class="btn btn-secondary waves-effect waves-light">Save
                                                                                                        changes</button>


                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                        </div>


                                                                                    </div>


                                                                                </div>
                                                                            </div>
                                                                            <!--end col-->
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="modal-footer"
                                                                    style="border-top: 1px solid #D9D9D9; height: 80px; flex-shrink: 0;">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-outline-secondary waves-effect waves-light fw-medium mt-3"
                                                                        data-bs-dismiss="modal"> Submit & add new</a>
                                                                    <button type="button"
                                                                        class="btn btn-primary mt-3">Submit</button>
                                                                </div>
                                                            </div><!-- /.modal-content -->
                                                        </div><!-- /.modal-dialog -->
                                                    </div><!-- /.modal -->
                                                </div>
                                            </div>
                                        </div>


                                        <div class="card">
                                            <div class="card-body">
                                                <div class="table-responsive table-card mt-4">
                                                    <table class="table align-middle" id="customerTable">
                                                        <thead class="table-light">
                                                            <tr>
                                                                <th scope="col" style="width: 50px;">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="checkAll" value="option">
                                                                    </div>
                                                                </th>

                                                                <th class="" data-sort="name">Mailbox</th>
                                                                <th class="" data-sort="company_name"></th>
                                                                <th class="" data-sort="leads_score">Label preview</th>

                                                                <th class="" data-sort="location">Members</th>
                                                                <th class="" data-sort="tags"></th>
                                                                <th class="" data-sort="date">Added on</th>
                                                                <th class="" data-sort="action"></th>
                                                                <th class="" data-sort="action"></th>
                                                                <th class="" data-sort="action"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="list form-check-all">
                                                            <tr>
                                                                <th scope="row">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            name="chk_child" value="option1">
                                                                    </div>
                                                                </th>
                                                                <td class="id" style="display:none;"><a
                                                                        href="javascript:void(0);"
                                                                        class="fw-medium link-primary">#VZ2101</a></td>

                                                                <td class="company_name">support@bloggeroutreach.io</td>
                                                                <td class="leads_score"></td>
                                                                <td class="phone"><button type="button"
                                                                        class="btn btn-outline-secondary btn-label waves-effect waves-light rounded-pill"><i
                                                                            class="ri-error-warning-line label-icon align-middle  fs-16 me-2"></i>
                                                                        Support.BO</button></td>
                                                                <td class="location">
                                                                    <div class="avatar-group">
                                                                        <!-- <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Jeffrey Salazar">
                                                                            <div class="avatar-xxs">
                                                                                <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle img-fluid">
                                                                            </div>
                                                                        </a>
                                                                        <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Mark Williams">
                                                                            <div class="avatar-xxs">
                                                                                <div class="avatar-title rounded-circle bg-warning">
                                                                                    M
                                                                                </div>
                                                                            </div>
                                                                        </a> -->
                                                                        <a href="javascript: void(0);"
                                                                            class="avatar-group-item"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top" title="Add Members">
                                                                            <div class="avatar-xxs">
                                                                                <div
                                                                                    class="avatar-title fs-16 rounded-circle bg-light border-dashed border text-primary">
                                                                                    +
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                                <td class=""></td>

                                                                <td class="date">07 Apr, 2021</td>
                                                                <td class="date"></td>
                                                                <td>
                                                                    <ul class="list-inline hstack gap-2 mb-0">

                                                                        <li class="list-inline-item"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top" title="View">
                                                                            <a href="javascript:void(0);"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="20" height="14"
                                                                                    viewBox="0 0 20 14" fill="none">
                                                                                    <path
                                                                                        d="M10 1.375C3.75 1.375 1.25 7.00061 1.25 7.00061C1.25 7.00061 3.75 12.625 10 12.625C16.25 12.625 18.75 7.00061 18.75 7.00061C18.75 7.00061 16.25 1.375 10 1.375Z"
                                                                                        stroke="#5E718D"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path
                                                                                        d="M10 10.1257C11.7259 10.1257 13.125 8.72655 13.125 7.00066C13.125 5.27477 11.7259 3.87566 10 3.87566C8.27411 3.87566 6.875 5.27477 6.875 7.00066C6.875 8.72655 8.27411 10.1257 10 10.1257Z"
                                                                                        stroke="#5E718D"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg></a>
                                                                        </li>
                                                                        <li class="list-inline-item"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top" title="Edit">
                                                                            <a class="edit-item-btn" href="#showModal"
                                                                                data-bs-toggle="modal"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="18" height="18"
                                                                                    viewBox="0 0 18 18" fill="none">
                                                                                    <path
                                                                                        d="M3.08498 6.15615C3.2256 5.85928 3.38967 5.57803 3.57717 5.30459L3.54592 3.27334C3.54592 3.08584 3.62404 2.90616 3.77248 2.78116C4.49904 2.17178 5.32716 1.67959 6.24123 1.35147C6.42091 1.28897 6.61623 1.30459 6.77248 1.40615L8.51467 2.45303C8.84279 2.42959 9.17091 2.42959 9.49904 2.45303L11.2412 1.40615C11.4053 1.3124 11.6006 1.28897 11.7803 1.35147C12.6709 1.67178 13.5069 2.14834 14.249 2.77334C14.3897 2.89053 14.4756 3.07803 14.4678 3.26553L14.4365 5.29678C14.624 5.57022 14.7881 5.85147 14.9287 6.14834L16.7022 7.13272C16.8662 7.22647 16.9834 7.38272 17.0147 7.57022C17.1787 8.4999 17.1865 9.46866 17.0147 10.414C16.9834 10.6015 16.8662 10.7577 16.7022 10.8515L14.9287 11.8358C14.7881 12.1327 14.624 12.414 14.4365 12.6874L14.4678 14.7187C14.4678 14.9062 14.3897 15.0858 14.2412 15.2108C13.5147 15.8202 12.6865 16.3124 11.7725 16.6405C11.5928 16.703 11.3975 16.6874 11.2412 16.5858L9.49904 15.539C9.17091 15.5624 8.84279 15.5624 8.51467 15.539L6.77248 16.5858C6.60842 16.6796 6.4131 16.703 6.23342 16.6405C5.34279 16.3202 4.50685 15.8437 3.76467 15.2187C3.62404 15.1015 3.5381 14.914 3.54592 14.7265L3.57717 12.6952C3.38967 12.4218 3.2256 12.1405 3.08498 11.8437L1.31154 10.8593C1.14748 10.7655 1.03029 10.6093 0.99904 10.4218C0.834978 9.49209 0.827165 8.52334 0.99904 7.57803C1.03029 7.39053 1.14748 7.23428 1.31154 7.14053L3.08498 6.15615Z"
                                                                                        stroke="#5E718D"
                                                                                        stroke-width="1.5"
                                                                                        stroke-miterlimit="10"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path
                                                                                        d="M8.99896 12.7499C11.07 12.7499 12.749 11.071 12.749 8.99992C12.749 6.92886 11.07 5.24992 8.99896 5.24992C6.92789 5.24992 5.24896 6.92886 5.24896 8.99992C5.24896 11.071 6.92789 12.7499 8.99896 12.7499Z"
                                                                                        stroke="#5E718D"
                                                                                        stroke-width="1.5"
                                                                                        stroke-miterlimit="10"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg></a>
                                                                        </li>

                                                                    </ul>
                                                                </td>
                                                                <td>
                                                                    <div class="dropdown d-inline-block">
                                                                        <button
                                                                            class="btn btn-soft-secondary btn-sm dropdown"
                                                                            type="button" data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            <i class="ri-more-2-fill align-middle"></i>
                                                                        </button>

                                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                                            <li><a href="#!" class="dropdown-item"><i
                                                                                        class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                                    View details</a></li>
                                                                            <li><a class="dropdown-item edit-item-btn"><i
                                                                                        class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                                    Edit details</a></li>
                                                                            <li>
                                                                                <a
                                                                                    class="dropdown-item remove-item-btn">
                                                                                    <i
                                                                                        class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                                    Deactivate user
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a
                                                                                    class="dropdown-item remove-item-btn">
                                                                                    <i
                                                                                        class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                                    Remove user
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            name="chk_child" value="option1">
                                                                    </div>
                                                                </th>
                                                                <td class="id" style="display:none;"><a
                                                                        href="javascript:void(0);"
                                                                        class="fw-medium link-primary">#VZ2101</a></td>

                                                                <td class="company_name">support@bloggeroutreach.io</td>
                                                                <td class="leads_score"></td>
                                                                <td class="phone"><button type="button"
                                                                        class="btn btn-outline-secondary btn-label waves-effect waves-light rounded-pill"><i
                                                                            class="ri-error-warning-line label-icon align-middle  fs-16 me-2"></i>
                                                                        Support.BO</button></td>
                                                                <td class="location">
                                                                    <div class="avatar-group">
                                                                        <a href="javascript: void(0);"
                                                                            class="avatar-group-item"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top"
                                                                            title="Jeffrey Salazar">
                                                                            <div class="avatar-xxs">
                                                                                <img src="assets/images/users/avatar-5.jpg"
                                                                                    alt=""
                                                                                    class="rounded-circle img-fluid">
                                                                            </div>
                                                                        </a>
                                                                        <a href="javascript: void(0);"
                                                                            class="avatar-group-item"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top"
                                                                            title="Mark Williams">
                                                                            <div class="avatar-xxs">
                                                                                <div
                                                                                    class="avatar-title rounded-circle bg-warning">
                                                                                    M
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                        <a href="javascript: void(0);"
                                                                            class="avatar-group-item"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top" title="Add Members">
                                                                            <div class="avatar-xxs">
                                                                                <div
                                                                                    class="avatar-title fs-16 rounded-circle bg-light border-dashed border text-primary">
                                                                                    4+
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                                <td class=""></td>

                                                                <td class="date">07 Apr, 2021</td>
                                                                <td class="date"></td>
                                                                <td>
                                                                    <ul class="list-inline hstack gap-2 mb-0">

                                                                        <li class="list-inline-item"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top" title="View">
                                                                            <a href="javascript:void(0);"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="20" height="14"
                                                                                    viewBox="0 0 20 14" fill="none">
                                                                                    <path
                                                                                        d="M10 1.375C3.75 1.375 1.25 7.00061 1.25 7.00061C1.25 7.00061 3.75 12.625 10 12.625C16.25 12.625 18.75 7.00061 18.75 7.00061C18.75 7.00061 16.25 1.375 10 1.375Z"
                                                                                        stroke="#5E718D"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path
                                                                                        d="M10 10.1257C11.7259 10.1257 13.125 8.72655 13.125 7.00066C13.125 5.27477 11.7259 3.87566 10 3.87566C8.27411 3.87566 6.875 5.27477 6.875 7.00066C6.875 8.72655 8.27411 10.1257 10 10.1257Z"
                                                                                        stroke="#5E718D"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg></a>
                                                                        </li>
                                                                        <li class="list-inline-item"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top" title="Edit">
                                                                            <a class="edit-item-btn" href="#showModal"
                                                                                data-bs-toggle="modal"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="18" height="18"
                                                                                    viewBox="0 0 18 18" fill="none">
                                                                                    <path
                                                                                        d="M3.08498 6.15615C3.2256 5.85928 3.38967 5.57803 3.57717 5.30459L3.54592 3.27334C3.54592 3.08584 3.62404 2.90616 3.77248 2.78116C4.49904 2.17178 5.32716 1.67959 6.24123 1.35147C6.42091 1.28897 6.61623 1.30459 6.77248 1.40615L8.51467 2.45303C8.84279 2.42959 9.17091 2.42959 9.49904 2.45303L11.2412 1.40615C11.4053 1.3124 11.6006 1.28897 11.7803 1.35147C12.6709 1.67178 13.5069 2.14834 14.249 2.77334C14.3897 2.89053 14.4756 3.07803 14.4678 3.26553L14.4365 5.29678C14.624 5.57022 14.7881 5.85147 14.9287 6.14834L16.7022 7.13272C16.8662 7.22647 16.9834 7.38272 17.0147 7.57022C17.1787 8.4999 17.1865 9.46866 17.0147 10.414C16.9834 10.6015 16.8662 10.7577 16.7022 10.8515L14.9287 11.8358C14.7881 12.1327 14.624 12.414 14.4365 12.6874L14.4678 14.7187C14.4678 14.9062 14.3897 15.0858 14.2412 15.2108C13.5147 15.8202 12.6865 16.3124 11.7725 16.6405C11.5928 16.703 11.3975 16.6874 11.2412 16.5858L9.49904 15.539C9.17091 15.5624 8.84279 15.5624 8.51467 15.539L6.77248 16.5858C6.60842 16.6796 6.4131 16.703 6.23342 16.6405C5.34279 16.3202 4.50685 15.8437 3.76467 15.2187C3.62404 15.1015 3.5381 14.914 3.54592 14.7265L3.57717 12.6952C3.38967 12.4218 3.2256 12.1405 3.08498 11.8437L1.31154 10.8593C1.14748 10.7655 1.03029 10.6093 0.99904 10.4218C0.834978 9.49209 0.827165 8.52334 0.99904 7.57803C1.03029 7.39053 1.14748 7.23428 1.31154 7.14053L3.08498 6.15615Z"
                                                                                        stroke="#5E718D"
                                                                                        stroke-width="1.5"
                                                                                        stroke-miterlimit="10"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path
                                                                                        d="M8.99896 12.7499C11.07 12.7499 12.749 11.071 12.749 8.99992C12.749 6.92886 11.07 5.24992 8.99896 5.24992C6.92789 5.24992 5.24896 6.92886 5.24896 8.99992C5.24896 11.071 6.92789 12.7499 8.99896 12.7499Z"
                                                                                        stroke="#5E718D"
                                                                                        stroke-width="1.5"
                                                                                        stroke-miterlimit="10"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg></a>
                                                                        </li>

                                                                    </ul>
                                                                </td>
                                                                <td>
                                                                    <div class="dropdown d-inline-block">
                                                                        <button
                                                                            class="btn btn-soft-secondary btn-sm dropdown"
                                                                            type="button" data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            <i class="ri-more-2-fill align-middle"></i>
                                                                        </button>

                                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                                            <li><a href="#!" class="dropdown-item"><i
                                                                                        class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                                    View details</a></li>
                                                                            <li><a class="dropdown-item edit-item-btn"><i
                                                                                        class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                                    Edit details</a></li>
                                                                            <li>
                                                                                <a
                                                                                    class="dropdown-item remove-item-btn">
                                                                                    <i
                                                                                        class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                                    Deactivate user
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a
                                                                                    class="dropdown-item remove-item-btn">
                                                                                    <i
                                                                                        class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                                    Remove user
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            name="chk_child" value="option1">
                                                                    </div>
                                                                </th>
                                                                <td class="id" style="display:none;"><a
                                                                        href="javascript:void(0);"
                                                                        class="fw-medium link-primary">#VZ2101</a></td>

                                                                <td class="company_name">support@bloggeroutreach.io</td>
                                                                <td class="leads_score"></td>
                                                                <td class="phone"><button type="button"
                                                                        class="btn btn-outline-secondary btn-label waves-effect waves-light rounded-pill"><i
                                                                            class="ri-error-warning-line label-icon align-middle  fs-16 me-2"></i>
                                                                        Support.BO</button></td>
                                                                <td class="location">
                                                                    <div class="avatar-group">
                                                                        <a href="javascript: void(0);"
                                                                            class="avatar-group-item"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top"
                                                                            title="Jeffrey Salazar">
                                                                            <div class="avatar-xxs">
                                                                                <img src="assets/images/users/avatar-5.jpg"
                                                                                    alt=""
                                                                                    class="rounded-circle img-fluid">
                                                                            </div>
                                                                        </a>
                                                                        <a href="javascript: void(0);"
                                                                            class="avatar-group-item"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top"
                                                                            title="Mark Williams">
                                                                            <div class="avatar-xxs">
                                                                                <div
                                                                                    class="avatar-title rounded-circle bg-warning">
                                                                                    M
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                        <a href="javascript: void(0);"
                                                                            class="avatar-group-item"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top" title="Add Members">
                                                                            <div class="avatar-xxs">
                                                                                <div
                                                                                    class="avatar-title fs-16 rounded-circle bg-light border-dashed border text-primary">
                                                                                    +
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                                <td class=""></td>

                                                                <td class="date">07 Apr, 2021</td>
                                                                <td class="date"></td>
                                                                <td>
                                                                    <ul class="list-inline hstack gap-2 mb-0">

                                                                        <li class="list-inline-item"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top" title="View">
                                                                            <a href="javascript:void(0);"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="20" height="14"
                                                                                    viewBox="0 0 20 14" fill="none">
                                                                                    <path
                                                                                        d="M10 1.375C3.75 1.375 1.25 7.00061 1.25 7.00061C1.25 7.00061 3.75 12.625 10 12.625C16.25 12.625 18.75 7.00061 18.75 7.00061C18.75 7.00061 16.25 1.375 10 1.375Z"
                                                                                        stroke="#5E718D"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path
                                                                                        d="M10 10.1257C11.7259 10.1257 13.125 8.72655 13.125 7.00066C13.125 5.27477 11.7259 3.87566 10 3.87566C8.27411 3.87566 6.875 5.27477 6.875 7.00066C6.875 8.72655 8.27411 10.1257 10 10.1257Z"
                                                                                        stroke="#5E718D"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg></a>
                                                                        </li>
                                                                        <li class="list-inline-item"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top" title="Edit">
                                                                            <a class="edit-item-btn" href="#showModal"
                                                                                data-bs-toggle="modal"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="18" height="18"
                                                                                    viewBox="0 0 18 18" fill="none">
                                                                                    <path
                                                                                        d="M3.08498 6.15615C3.2256 5.85928 3.38967 5.57803 3.57717 5.30459L3.54592 3.27334C3.54592 3.08584 3.62404 2.90616 3.77248 2.78116C4.49904 2.17178 5.32716 1.67959 6.24123 1.35147C6.42091 1.28897 6.61623 1.30459 6.77248 1.40615L8.51467 2.45303C8.84279 2.42959 9.17091 2.42959 9.49904 2.45303L11.2412 1.40615C11.4053 1.3124 11.6006 1.28897 11.7803 1.35147C12.6709 1.67178 13.5069 2.14834 14.249 2.77334C14.3897 2.89053 14.4756 3.07803 14.4678 3.26553L14.4365 5.29678C14.624 5.57022 14.7881 5.85147 14.9287 6.14834L16.7022 7.13272C16.8662 7.22647 16.9834 7.38272 17.0147 7.57022C17.1787 8.4999 17.1865 9.46866 17.0147 10.414C16.9834 10.6015 16.8662 10.7577 16.7022 10.8515L14.9287 11.8358C14.7881 12.1327 14.624 12.414 14.4365 12.6874L14.4678 14.7187C14.4678 14.9062 14.3897 15.0858 14.2412 15.2108C13.5147 15.8202 12.6865 16.3124 11.7725 16.6405C11.5928 16.703 11.3975 16.6874 11.2412 16.5858L9.49904 15.539C9.17091 15.5624 8.84279 15.5624 8.51467 15.539L6.77248 16.5858C6.60842 16.6796 6.4131 16.703 6.23342 16.6405C5.34279 16.3202 4.50685 15.8437 3.76467 15.2187C3.62404 15.1015 3.5381 14.914 3.54592 14.7265L3.57717 12.6952C3.38967 12.4218 3.2256 12.1405 3.08498 11.8437L1.31154 10.8593C1.14748 10.7655 1.03029 10.6093 0.99904 10.4218C0.834978 9.49209 0.827165 8.52334 0.99904 7.57803C1.03029 7.39053 1.14748 7.23428 1.31154 7.14053L3.08498 6.15615Z"
                                                                                        stroke="#5E718D"
                                                                                        stroke-width="1.5"
                                                                                        stroke-miterlimit="10"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path
                                                                                        d="M8.99896 12.7499C11.07 12.7499 12.749 11.071 12.749 8.99992C12.749 6.92886 11.07 5.24992 8.99896 5.24992C6.92789 5.24992 5.24896 6.92886 5.24896 8.99992C5.24896 11.071 6.92789 12.7499 8.99896 12.7499Z"
                                                                                        stroke="#5E718D"
                                                                                        stroke-width="1.5"
                                                                                        stroke-miterlimit="10"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg></a>
                                                                        </li>

                                                                    </ul>
                                                                </td>
                                                                <td>
                                                                    <div class="dropdown d-inline-block">
                                                                        <button
                                                                            class="btn btn-soft-secondary btn-sm dropdown"
                                                                            type="button" data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            <i class="ri-more-2-fill align-middle"></i>
                                                                        </button>

                                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                                            <li><a href="#!" class="dropdown-item"><i
                                                                                        class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                                    View details</a></li>
                                                                            <li><a class="dropdown-item edit-item-btn"><i
                                                                                        class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                                    Edit details</a></li>
                                                                            <li>
                                                                                <a
                                                                                    class="dropdown-item remove-item-btn">
                                                                                    <i
                                                                                        class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                                    Deactivate user
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a
                                                                                    class="dropdown-item remove-item-btn">
                                                                                    <i
                                                                                        class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                                    Remove user
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            name="chk_child" value="option1">
                                                                    </div>
                                                                </th>
                                                                <td class="id" style="display:none;"><a
                                                                        href="javascript:void(0);"
                                                                        class="fw-medium link-primary">#VZ2101</a></td>

                                                                <td class="company_name">support@bloggeroutreach.io</td>
                                                                <td class="leads_score"></td>
                                                                <td class="phone"><button type="button"
                                                                        class="btn btn-outline-secondary btn-label waves-effect waves-light rounded-pill"><i
                                                                            class="ri-error-warning-line label-icon align-middle  fs-16 me-2"></i>
                                                                        Support.BO</button></td>
                                                                <td class="location">
                                                                    <div class="avatar-group">
                                                                        <a href="javascript: void(0);"
                                                                            class="avatar-group-item"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top"
                                                                            title="Jeffrey Salazar">
                                                                            <div class="avatar-xxs">
                                                                                <img src="assets/images/users/avatar-5.jpg"
                                                                                    alt=""
                                                                                    class="rounded-circle img-fluid">
                                                                            </div>
                                                                        </a>
                                                                        <a href="javascript: void(0);"
                                                                            class="avatar-group-item"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top"
                                                                            title="Mark Williams">
                                                                            <div class="avatar-xxs">
                                                                                <div
                                                                                    class="avatar-title rounded-circle bg-warning">
                                                                                    M
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                        <a href="javascript: void(0);"
                                                                            class="avatar-group-item"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top" title="Add Members">
                                                                            <div class="avatar-xxs">
                                                                                <div
                                                                                    class="avatar-title fs-16 rounded-circle bg-light border-dashed border text-primary">
                                                                                    +
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                                <td class=""></td>

                                                                <td class="date">07 Apr, 2021</td>
                                                                <td class="date"></td>
                                                                <td>
                                                                    <ul class="list-inline hstack gap-2 mb-0">

                                                                        <li class="list-inline-item"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top" title="View">
                                                                            <a href="javascript:void(0);"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="20" height="14"
                                                                                    viewBox="0 0 20 14" fill="none">
                                                                                    <path
                                                                                        d="M10 1.375C3.75 1.375 1.25 7.00061 1.25 7.00061C1.25 7.00061 3.75 12.625 10 12.625C16.25 12.625 18.75 7.00061 18.75 7.00061C18.75 7.00061 16.25 1.375 10 1.375Z"
                                                                                        stroke="#5E718D"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path
                                                                                        d="M10 10.1257C11.7259 10.1257 13.125 8.72655 13.125 7.00066C13.125 5.27477 11.7259 3.87566 10 3.87566C8.27411 3.87566 6.875 5.27477 6.875 7.00066C6.875 8.72655 8.27411 10.1257 10 10.1257Z"
                                                                                        stroke="#5E718D"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg></a>
                                                                        </li>
                                                                        <li class="list-inline-item"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top" title="Edit">
                                                                            <a class="edit-item-btn" href="#showModal"
                                                                                data-bs-toggle="modal"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="18" height="18"
                                                                                    viewBox="0 0 18 18" fill="none">
                                                                                    <path
                                                                                        d="M3.08498 6.15615C3.2256 5.85928 3.38967 5.57803 3.57717 5.30459L3.54592 3.27334C3.54592 3.08584 3.62404 2.90616 3.77248 2.78116C4.49904 2.17178 5.32716 1.67959 6.24123 1.35147C6.42091 1.28897 6.61623 1.30459 6.77248 1.40615L8.51467 2.45303C8.84279 2.42959 9.17091 2.42959 9.49904 2.45303L11.2412 1.40615C11.4053 1.3124 11.6006 1.28897 11.7803 1.35147C12.6709 1.67178 13.5069 2.14834 14.249 2.77334C14.3897 2.89053 14.4756 3.07803 14.4678 3.26553L14.4365 5.29678C14.624 5.57022 14.7881 5.85147 14.9287 6.14834L16.7022 7.13272C16.8662 7.22647 16.9834 7.38272 17.0147 7.57022C17.1787 8.4999 17.1865 9.46866 17.0147 10.414C16.9834 10.6015 16.8662 10.7577 16.7022 10.8515L14.9287 11.8358C14.7881 12.1327 14.624 12.414 14.4365 12.6874L14.4678 14.7187C14.4678 14.9062 14.3897 15.0858 14.2412 15.2108C13.5147 15.8202 12.6865 16.3124 11.7725 16.6405C11.5928 16.703 11.3975 16.6874 11.2412 16.5858L9.49904 15.539C9.17091 15.5624 8.84279 15.5624 8.51467 15.539L6.77248 16.5858C6.60842 16.6796 6.4131 16.703 6.23342 16.6405C5.34279 16.3202 4.50685 15.8437 3.76467 15.2187C3.62404 15.1015 3.5381 14.914 3.54592 14.7265L3.57717 12.6952C3.38967 12.4218 3.2256 12.1405 3.08498 11.8437L1.31154 10.8593C1.14748 10.7655 1.03029 10.6093 0.99904 10.4218C0.834978 9.49209 0.827165 8.52334 0.99904 7.57803C1.03029 7.39053 1.14748 7.23428 1.31154 7.14053L3.08498 6.15615Z"
                                                                                        stroke="#5E718D"
                                                                                        stroke-width="1.5"
                                                                                        stroke-miterlimit="10"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path
                                                                                        d="M8.99896 12.7499C11.07 12.7499 12.749 11.071 12.749 8.99992C12.749 6.92886 11.07 5.24992 8.99896 5.24992C6.92789 5.24992 5.24896 6.92886 5.24896 8.99992C5.24896 11.071 6.92789 12.7499 8.99896 12.7499Z"
                                                                                        stroke="#5E718D"
                                                                                        stroke-width="1.5"
                                                                                        stroke-miterlimit="10"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg></a>
                                                                        </li>

                                                                    </ul>
                                                                </td>
                                                                <td>
                                                                    <div class="dropdown d-inline-block">
                                                                        <button
                                                                            class="btn btn-soft-secondary btn-sm dropdown"
                                                                            type="button" data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            <i class="ri-more-2-fill align-middle"></i>
                                                                        </button>

                                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                                            <li><a href="#!" class="dropdown-item"><i
                                                                                        class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                                    View details</a></li>
                                                                            <li><a class="dropdown-item edit-item-btn"><i
                                                                                        class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                                    Edit details</a></li>
                                                                            <li>
                                                                                <a
                                                                                    class="dropdown-item remove-item-btn">
                                                                                    <i
                                                                                        class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                                    Deactivate user
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a
                                                                                    class="dropdown-item remove-item-btn">
                                                                                    <i
                                                                                        class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                                    Remove user
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            name="chk_child" value="option1">
                                                                    </div>
                                                                </th>
                                                                <td class="id" style="display:none;"><a
                                                                        href="javascript:void(0);"
                                                                        class="fw-medium link-primary">#VZ2101</a></td>

                                                                <td class="company_name">support@bloggeroutreach.io</td>
                                                                <td class="leads_score"></td>
                                                                <td class="phone"><button type="button"
                                                                        class="btn btn-outline-secondary btn-label waves-effect waves-light rounded-pill"><i
                                                                            class="ri-error-warning-line label-icon align-middle  fs-16 me-2"></i>
                                                                        Support.BO</button></td>
                                                                <td class="location">
                                                                    <div class="avatar-group">
                                                                        <a href="javascript: void(0);"
                                                                            class="avatar-group-item"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top"
                                                                            title="Jeffrey Salazar">
                                                                            <div class="avatar-xxs">
                                                                                <img src="assets/images/users/avatar-5.jpg"
                                                                                    alt=""
                                                                                    class="rounded-circle img-fluid">
                                                                            </div>
                                                                        </a>
                                                                        <a href="javascript: void(0);"
                                                                            class="avatar-group-item"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top"
                                                                            title="Mark Williams">
                                                                            <div class="avatar-xxs">
                                                                                <div
                                                                                    class="avatar-title rounded-circle bg-warning">
                                                                                    M
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                        <a href="javascript: void(0);"
                                                                            class="avatar-group-item"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top" title="Add Members">
                                                                            <div class="avatar-xxs">
                                                                                <div
                                                                                    class="avatar-title fs-16 rounded-circle bg-light border-dashed border text-primary">
                                                                                    +
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                                <td class=""></td>

                                                                <td class="date">07 Apr, 2021</td>
                                                                <td class="date"></td>
                                                                <td>
                                                                    <ul class="list-inline hstack gap-2 mb-0">

                                                                        <li class="list-inline-item"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top" title="View">
                                                                            <a href="javascript:void(0);"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="20" height="14"
                                                                                    viewBox="0 0 20 14" fill="none">
                                                                                    <path
                                                                                        d="M10 1.375C3.75 1.375 1.25 7.00061 1.25 7.00061C1.25 7.00061 3.75 12.625 10 12.625C16.25 12.625 18.75 7.00061 18.75 7.00061C18.75 7.00061 16.25 1.375 10 1.375Z"
                                                                                        stroke="#5E718D"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path
                                                                                        d="M10 10.1257C11.7259 10.1257 13.125 8.72655 13.125 7.00066C13.125 5.27477 11.7259 3.87566 10 3.87566C8.27411 3.87566 6.875 5.27477 6.875 7.00066C6.875 8.72655 8.27411 10.1257 10 10.1257Z"
                                                                                        stroke="#5E718D"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg></a>
                                                                        </li>
                                                                        <li class="list-inline-item"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top" title="Edit">
                                                                            <a class="edit-item-btn" href="#showModal"
                                                                                data-bs-toggle="modal"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="18" height="18"
                                                                                    viewBox="0 0 18 18" fill="none">
                                                                                    <path
                                                                                        d="M3.08498 6.15615C3.2256 5.85928 3.38967 5.57803 3.57717 5.30459L3.54592 3.27334C3.54592 3.08584 3.62404 2.90616 3.77248 2.78116C4.49904 2.17178 5.32716 1.67959 6.24123 1.35147C6.42091 1.28897 6.61623 1.30459 6.77248 1.40615L8.51467 2.45303C8.84279 2.42959 9.17091 2.42959 9.49904 2.45303L11.2412 1.40615C11.4053 1.3124 11.6006 1.28897 11.7803 1.35147C12.6709 1.67178 13.5069 2.14834 14.249 2.77334C14.3897 2.89053 14.4756 3.07803 14.4678 3.26553L14.4365 5.29678C14.624 5.57022 14.7881 5.85147 14.9287 6.14834L16.7022 7.13272C16.8662 7.22647 16.9834 7.38272 17.0147 7.57022C17.1787 8.4999 17.1865 9.46866 17.0147 10.414C16.9834 10.6015 16.8662 10.7577 16.7022 10.8515L14.9287 11.8358C14.7881 12.1327 14.624 12.414 14.4365 12.6874L14.4678 14.7187C14.4678 14.9062 14.3897 15.0858 14.2412 15.2108C13.5147 15.8202 12.6865 16.3124 11.7725 16.6405C11.5928 16.703 11.3975 16.6874 11.2412 16.5858L9.49904 15.539C9.17091 15.5624 8.84279 15.5624 8.51467 15.539L6.77248 16.5858C6.60842 16.6796 6.4131 16.703 6.23342 16.6405C5.34279 16.3202 4.50685 15.8437 3.76467 15.2187C3.62404 15.1015 3.5381 14.914 3.54592 14.7265L3.57717 12.6952C3.38967 12.4218 3.2256 12.1405 3.08498 11.8437L1.31154 10.8593C1.14748 10.7655 1.03029 10.6093 0.99904 10.4218C0.834978 9.49209 0.827165 8.52334 0.99904 7.57803C1.03029 7.39053 1.14748 7.23428 1.31154 7.14053L3.08498 6.15615Z"
                                                                                        stroke="#5E718D"
                                                                                        stroke-width="1.5"
                                                                                        stroke-miterlimit="10"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path
                                                                                        d="M8.99896 12.7499C11.07 12.7499 12.749 11.071 12.749 8.99992C12.749 6.92886 11.07 5.24992 8.99896 5.24992C6.92789 5.24992 5.24896 6.92886 5.24896 8.99992C5.24896 11.071 6.92789 12.7499 8.99896 12.7499Z"
                                                                                        stroke="#5E718D"
                                                                                        stroke-width="1.5"
                                                                                        stroke-miterlimit="10"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg></a>
                                                                        </li>

                                                                    </ul>
                                                                </td>
                                                                <td>
                                                                    <div class="dropdown d-inline-block">
                                                                        <button
                                                                            class="btn btn-soft-secondary btn-sm dropdown"
                                                                            type="button" data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            <i class="ri-more-2-fill align-middle"></i>
                                                                        </button>

                                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                                            <li><a href="#!" class="dropdown-item"><i
                                                                                        class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                                    View details</a></li>
                                                                            <li><a class="dropdown-item edit-item-btn"><i
                                                                                        class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                                    Edit details</a></li>
                                                                            <li>
                                                                                <a
                                                                                    class="dropdown-item remove-item-btn">
                                                                                    <i
                                                                                        class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                                    Deactivate user
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a
                                                                                    class="dropdown-item remove-item-btn">
                                                                                    <i
                                                                                        class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                                    Remove user
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                            </tr>


                                                        </tbody>
                                                    </table>
                                                    <div class="noresult" style="display: none">
                                                        <div class="text-center">
                                                            <lord-icon
                                                                src="../../../../external.html?link=https://cdn.lordicon.com/msoeawqm.json"
                                                                trigger="loop"
                                                                colors="primary:#121331,secondary:#08a88a"
                                                                style="width:75px;height:75px"></lord-icon>
                                                            <h5 class="mt-2">Sorry! No Result Found</h5>
                                                            <p class="text-muted mb-0">We've searched more than 150+
                                                                leads We did not find any leads for you search.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Nav tabs -->

                                                <!-- Tab panes -->

                                            </div><!-- end card-body -->
                                        </div><!-- end card -->
                                    </div>
                                    <!--end col-->


                                </div>
                                <!--end row-->

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
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="assets/libs/simplebar/simplebar.min.js"></script> -->
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <!-- Modern colorpicker bundle -->
    <script src="assets/libs/%40simonwep/pickr/pickr.min.js"></script>

    <!-- init js -->
    <script src="assets/js/pages/form-pickers.init.js"></script>
    <!-- Modern colorpicker bundle -->

    <!-- Swiper Js -->
    <script src="assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- profile-setting init js -->
    <script src="assets/js/pages/profile-setting.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>var selector = '.color-list .color';
        $(".color").css('background', function () {
            return $(this).data('color')
        });

        $(selector).on('click', function () {
            var colorHEX = $(this).data('color');
            $(selector).removeClass('active');
            $(this).addClass('active');
            $('#setColor').val(colorHEX);
        });</script>
</body>

</html>