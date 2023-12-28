<!doctype html>
<html lang="en" data-layout="vertical" data-layout-style="default" data-layout-position="fixed" data-topbar="light"
    data-sidebar="dark" 
     data-layout-width="fluid">

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

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12 mb-5">
                            <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                <div class="flex-grow-1">
                                    <h1 class="fs-28 mb-1 fw-bolder">Contacts</h1>
                                    <!-- <p class="text-muted mb-0">Here's what's happening with your store today.</p> -->
                                </div>
                                <div class="flex-shrink-0">
                                    <button type="button" class="btn btn-success add-btn fs-16 fw-normal"
                                        data-bs-toggle="modal" data-bs-target="#exampleModalPopovers"><i
                                            class="ri-upload-cloud-2-fill"></i> Import</button>
                                    <!-- <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-upload-cloud-2-fill"></i> Import</button> -->
                                    <button type="button" class="btn btn-info fs-16 fw-normal"
                                        data-bs-toggle="offcanvas" href="#offcanvasExample"><i class="ri-add-fill"></i>
                                        New Company</button>
                                </div>

                            </div>
                            <!-- end card header -->
                        </div>
                        <!--end col-->
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card" id="leadsList">
                                <div class="card-header border-0">

                                    <div class="row g-4 align-items-center">
                                        <div class="col-sm-3">
                                            <div class="search-box">
                                                <input type="text" class="form-control search"
                                                    placeholder="Search for...">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>

                                        </div>
                                        <div class="col-sm-3">
                                            <button type="button" class="btn btn-light add-btn" data-bs-toggle="modal"
                                                id="create-btn" data-bs-target="#showModal"><i
                                                    class="ri-filter-3-line align-bottom me-1"></i> </button>

                                        </div>


                                    </div>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <div class="table-responsive table-card">
                                            <table class="table align-middle" id="customerTable">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th scope="col" style="width: 50px;">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="checkAll" value="option">
                                                            </div>
                                                        </th>

                                                        <th class="sort " data-sort="full_name ">Full Name</th>
                                                        <th class="sort " data-sort="company_name">Company Name</th>
                                                        <th class="sort " data-sort="website_link">website link</th>
                                                        <th class="sort " data-sort="designation">Designation</th>
                                                        <th class="sort " data-sort="grade">Grade</th>
                                                        <th class="sort " data-sort="e-mail_id">Person E-mail id</th>
                                                        <!-- <th class="sort " data-sort="company_type">Company Type</th>                                                         -->
                                                        <th class="sort " data-sort="managed_by">Managed By</th>
                                                        <th class="" data-sort="action"></th>
                                                        <th class="" data-sort="action"></th>
                                                        <th class="" data-sort="action"></th>
                                                        <th class="" data-sort="action"></th>
                                                        <!-- <th class="sort " data-sort="billing_country">Billing Country</th>
                                                        <th class="sort " data-sort="payment_id">Payment Id</th> -->
                                                        <th class="" data-sort="action">Action</th>
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
                                                        <td class="owner_name ">Kane Brook</td>
                                                        <td class="company_name">Link Builders </td>
                                                        <td class="website_link"><a href="#">linkbuilders.io </a></td>
                                                        <td class="designation">SEO Manager</td>
                                                        <td class="grade">Grade A</td>
                                                        <td class="e-mail_id"><a href="#">username@....</a></td>
                                                        <td class="managed_by">Kashmira</td>
                                                        <td class=""></td>
                                                        <td class=""></td>
                                                        <td class=""></td>
                                                        <td class=""></td>


                                                        <td>
                                                            <div class="dropdown d-inline-block">
                                                                <button class="btn btn-soft-secondary btn-sm dropdown"
                                                                    type="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                    <i class="ri-more-2-fill align-middle"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li><a href="#!" class="dropdown-item"><i
                                                                                class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                            View</a></li>
                                                                    <li><a class="dropdown-item edit-item-btn"><i
                                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                            Edit</a></li>
                                                                    <li>
                                                                        <a class="dropdown-item remove-item-btn">
                                                                            <i
                                                                                class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                            Delete
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <!-- <td class="tags">
                                                            <span class="badge bg-primary-subtle text-primary">Lead</span>
                                                            <span class="badge bg-primary-subtle text-primary">Partner</span>
                                                        </td> -->
                                                        <!-- <td class="date">07 Apr, 2021</td> -->

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
                                                        <td class="owner_name">Kane Brook</td>
                                                        <td class="company_name">Link Builders </td>
                                                        <td class="website_link"><a href="#">linkbuilders.io </a></td>
                                                        <td class="designation">SEO Manager</td>
                                                        <td class="grade">Grade A</td>
                                                        <td class="e-mail_id"><a href="#">username@....</a></td>
                                                        <td class="managed_by">Kashmira</td>
                                                        <td class=""></td>
                                                        <td class=""></td>
                                                        <td class=""></td>
                                                        <td class=""></td>
                                                        <td>
                                                            <div class="dropdown d-inline-block">
                                                                <button class="btn btn-soft-secondary btn-sm dropdown"
                                                                    type="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                    <i class="ri-more-2-fill align-middle"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li><a href="#!" class="dropdown-item"><i
                                                                                class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                            View</a></li>
                                                                    <li><a class="dropdown-item edit-item-btn"><i
                                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                            Edit</a></li>
                                                                    <li>
                                                                        <a class="dropdown-item remove-item-btn">
                                                                            <i
                                                                                class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                            Delete
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
                                                        <td class="owner_name">Kane Brook</td>
                                                        <td class="company_name">Link Builders </td>
                                                        <td class="website_link"><a href="#">linkbuilders.io </a></td>
                                                        <td class="designation">SEO Manager</td>
                                                        <td class="grade">Grade A</td>
                                                        <td class="e-mail_id"><a href="#">username@....</a></td>
                                                        <td class="managed_by">Kashmira</td>
                                                        <td class=""></td>
                                                        <td class=""></td>
                                                        <td class=""></td>
                                                        <td class=""></td>
                                                        <td>
                                                            <div class="dropdown d-inline-block">
                                                                <button class="btn btn-soft-secondary btn-sm dropdown"
                                                                    type="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                    <i class="ri-more-2-fill align-middle"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li><a href="#!" class="dropdown-item"><i
                                                                                class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                            View</a></li>
                                                                    <li><a class="dropdown-item edit-item-btn"><i
                                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                            Edit</a></li>
                                                                    <li>
                                                                        <a class="dropdown-item remove-item-btn">
                                                                            <i
                                                                                class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                            Delete
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td></td>

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
                                                        <td class="owner_name">Kane Brook</td>
                                                        <td class="company_name">Link Builders </td>
                                                        <td class="website_link"><a href="#">linkbuilders.io </a></td>
                                                        <td class="designation">SEO Manager</td>
                                                        <td class="grade">Grade A</td>
                                                        <td class="e-mail_id"><a href="#">username@....</a></td>
                                                        <td class="managed_by">Kashmira</td>
                                                        <td class=""></td>
                                                        <td class=""></td>
                                                        <td class=""></td>
                                                        <td class=""></td>
                                                        <td>
                                                            <div class="dropdown d-inline-block">
                                                                <button class="btn btn-soft-secondary btn-sm dropdown"
                                                                    type="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                    <i class="ri-more-2-fill align-middle"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li><a href="#!" class="dropdown-item"><i
                                                                                class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                            View</a></li>
                                                                    <li><a class="dropdown-item edit-item-btn"><i
                                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                            Edit</a></li>
                                                                    <li>
                                                                        <a class="dropdown-item remove-item-btn">
                                                                            <i
                                                                                class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                            Delete
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
                                                        <td class="owner_name">Kane Brook</td>
                                                        <td class="company_name">Link Builders </td>
                                                        <td class="website_link"><a href="#">linkbuilders.io </a></td>
                                                        <td class="designation">SEO Manager</td>
                                                        <td class="grade">Grade A</td>
                                                        <td class="e-mail_id"><a href="#">username@....</a></td>
                                                        <td class="managed_by">Kashmira</td>
                                                        <td class=""></td>
                                                        <td class=""></td>
                                                        <td class=""></td>
                                                        <td class=""></td>
                                                        <td>
                                                            <div class="dropdown d-inline-block">
                                                                <button class="btn btn-soft-secondary btn-sm dropdown"
                                                                    type="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                    <i class="ri-more-2-fill align-middle"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li><a href="#!" class="dropdown-item"><i
                                                                                class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                            View</a></li>
                                                                    <li><a class="dropdown-item edit-item-btn"><i
                                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                            Edit</a></li>
                                                                    <li>
                                                                        <a class="dropdown-item remove-item-btn">
                                                                            <i
                                                                                class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                            Delete
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
                                                        <td class="owner_name">Kane Brook</td>
                                                        <td class="company_name">Link Builders </td>
                                                        <td class="website_link"><a href="#">linkbuilders.io </a></td>
                                                        <td class="designation">SEO Manager</td>
                                                        <td class="grade">Grade A</td>
                                                        <td class="e-mail_id"><a href="#">username@....</a></td>
                                                        <td class="managed_by">Kashmira</td>
                                                        <td class=""></td>
                                                        <td class=""></td>
                                                        <td class=""></td>
                                                        <td class=""></td>
                                                        <td>
                                                            <div class="dropdown d-inline-block">
                                                                <button class="btn btn-soft-secondary btn-sm dropdown"
                                                                    type="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                    <i class="ri-more-2-fill align-middle"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li><a href="#!" class="dropdown-item"><i
                                                                                class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                            View</a></li>
                                                                    <li><a class="dropdown-item edit-item-btn"><i
                                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                            Edit</a></li>
                                                                    <li>
                                                                        <a class="dropdown-item remove-item-btn">
                                                                            <i
                                                                                class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                            Delete
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
                                                        <td class="owner_name">Kane Brook</td>
                                                        <td class="company_name">Link Builders </td>
                                                        <td class="website_link"><a href="#">linkbuilders.io </a></td>
                                                        <td class="designation">SEO Manager</td>
                                                        <td class="grade">Grade A</td>
                                                        <td class="e-mail_id"><a href="#">username@....</a></td>
                                                        <td class="managed_by">Kashmira</td>
                                                        <td class=""></td>
                                                        <td class=""></td>
                                                        <td class=""></td>
                                                        <td class=""></td>
                                                        <td>
                                                            <div class="dropdown d-inline-block">
                                                                <button class="btn btn-soft-secondary btn-sm dropdown"
                                                                    type="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                    <i class="ri-more-2-fill align-middle"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li><a href="#!" class="dropdown-item"><i
                                                                                class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                            View</a></li>
                                                                    <li><a class="dropdown-item edit-item-btn"><i
                                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                            Edit</a></li>
                                                                    <li>
                                                                        <a class="dropdown-item remove-item-btn">
                                                                            <i
                                                                                class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                            Delete
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
                                                        <td class="owner_name">Kane Brook</td>
                                                        <td class="company_name">Link Builders </td>
                                                        <td class="website_link"><a href="#">linkbuilders.io </a></td>
                                                        <td class="designation">SEO Manager</td>
                                                        <td class="grade">Grade A</td>
                                                        <td class="e-mail_id"><a href="#">username@....</a></td>
                                                        <td class="managed_by">Kashmira</td>
                                                        <td class=""></td>
                                                        <td class=""></td>
                                                        <td class=""></td>
                                                        <td class=""></td>

                                                        <td>
                                                            <div class="dropdown d-inline-block">
                                                                <button class="btn btn-soft-secondary btn-sm dropdown"
                                                                    type="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                    <i class="ri-more-2-fill align-middle"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li><a href="#!" class="dropdown-item"><i
                                                                                class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                            View</a></li>
                                                                    <li><a class="dropdown-item edit-item-btn"><i
                                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                            Edit</a></li>
                                                                    <li>
                                                                        <a class="dropdown-item remove-item-btn">
                                                                            <i
                                                                                class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                            Delete
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
                                                        <td class="owner_name">Kane Brook</td>
                                                        <td class="company_name">Link Builders </td>
                                                        <td class="website_link"><a href="#">linkbuilders.io </a></td>
                                                        <td class="designation">SEO Manager</td>
                                                        <td class="grade">Grade A</td>
                                                        <td class="e-mail_id"><a href="#">username@....</a></td>
                                                        <td class="managed_by">Kashmira</td>
                                                        <td class=""></td>
                                                        <td class=""></td>
                                                        <td class=""></td>
                                                        <td class=""></td>
                                                        <td>
                                                            <div class="dropdown d-inline-block">
                                                                <button class="btn btn-soft-secondary btn-sm dropdown"
                                                                    type="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                    <i class="ri-more-2-fill align-middle"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li><a href="#!" class="dropdown-item"><i
                                                                                class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                            View</a></li>
                                                                    <li><a class="dropdown-item edit-item-btn"><i
                                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                            Edit</a></li>
                                                                    <li>
                                                                        <a class="dropdown-item remove-item-btn">
                                                                            <i
                                                                                class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                            Delete
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
                                                        <td class="owner_name">Kane Brook</td>
                                                        <td class="company_name">Link Builders </td>
                                                        <td class="website_link"><a href="#">linkbuilders.io </a></td>
                                                        <td class="designation">SEO Manager</td>
                                                        <td class="grade">Grade A</td>
                                                        <td class="e-mail_id"><a href="#">username@....</a></td>
                                                        <td class="managed_by">Kashmira</td>
                                                        <td class=""></td>
                                                        <td class=""></td>
                                                        <td class=""></td>
                                                        <td class=""></td>
                                                        <td>
                                                            <div class="dropdown d-inline-block">
                                                                <button class="btn btn-soft-secondary btn-sm dropdown"
                                                                    type="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                    <i class="ri-more-2-fill align-middle"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li><a href="#!" class="dropdown-item"><i
                                                                                class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                            View</a></li>
                                                                    <li><a class="dropdown-item edit-item-btn"><i
                                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                            Edit</a></li>
                                                                    <li>
                                                                        <a class="dropdown-item remove-item-btn">
                                                                            <i
                                                                                class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                            Delete
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
                                                        <td class="owner_name">Kane Brook</td>
                                                        <td class="company_name">Link Builders </td>
                                                        <td class="website_link"><a href="#">linkbuilders.io </a></td>
                                                        <td class="designation">SEO Manager</td>
                                                        <td class="grade">Grade A</td>
                                                        <td class="e-mail_id"><a href="#">username@....</a></td>
                                                        <td class="managed_by">Kashmira</td>
                                                        <td class=""></td>
                                                        <td class=""></td>
                                                        <td class=""></td>
                                                        <td class=""></td>
                                                        <td>
                                                            <div class="dropdown d-inline-block">
                                                                <button class="btn btn-soft-secondary btn-sm dropdown"
                                                                    type="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                    <i class="ri-more-2-fill align-middle"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li><a href="#!" class="dropdown-item"><i
                                                                                class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                            View</a></li>
                                                                    <li><a class="dropdown-item edit-item-btn"><i
                                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                            Edit</a></li>
                                                                    <li>
                                                                        <a class="dropdown-item remove-item-btn">
                                                                            <i
                                                                                class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                            Delete
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
                                                        <td class="owner_name">Kane Brook</td>
                                                        <td class="company_name">Link Builders </td>
                                                        <td class="website_link"><a href="#"></a> linkbuilders.io</td>
                                                        <td class="designation">SEO Manager</td>
                                                        <td class="grade">Grade A</td>
                                                        <td class="e-mail_id"><a href="#">username@....</a></td>
                                                        <td class="managed_by">Kashmira</td>
                                                        <td class=""></td>
                                                        <td class=""></td>
                                                        <td class=""></td>
                                                        <td class=""></td>
                                                        <td class=""></td>
                                                        <td>
                                                            <div class="dropdown d-inline-block">
                                                                <button class="btn btn-soft-secondary btn-sm dropdown"
                                                                    type="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                    <i class="ri-more-2-fill align-middle"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li><a href="#!" class="dropdown-item"><i
                                                                                class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                            View</a></li>
                                                                    <li><a class="dropdown-item edit-item-btn"><i
                                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                            Edit Details</a></li>
                                                                    <li>
                                                                        <a class="dropdown-item remove-item-btn">
                                                                            <i
                                                                                class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                            Delete Company
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td class=""></td>
                                                        <td class=""></td>
                                                        <td class=""></td>

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
                                                        <td class="owner_name">Kane Brook</td>
                                                        <td class="company_name">Link Builders </td>
                                                        <td class="website_link"><a href="#">linkbuilders.io </a></td>
                                                        <td class="designation">SEO Manager</td>
                                                        <td class="grade">Grade A</td>
                                                        <td class="e-mail_id"><a href="#">username@....</a></td>
                                                        <td class="managed_by">Kashmira</td>
                                                        <td class=""></td>
                                                        <td class=""></td>
                                                        <td class=""></td>
                                                        <td class=""></td>
                                                        <td>
                                                            <div class="dropdown d-inline-block">
                                                                <button class="btn btn-soft-secondary btn-sm dropdown"
                                                                    type="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                    <i class="ri-more-2-fill align-middle"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li><a href="#!" class="dropdown-item"><i
                                                                                class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                            View</a></li>
                                                                    <li><a class="dropdown-item edit-item-btn"><i
                                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                            Edit</a></li>
                                                                    <li>
                                                                        <a class="dropdown-item remove-item-btn">
                                                                            <i
                                                                                class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                            Delete
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
                                                    <lord-icon src="#" trigger="loop"
                                                        colors="primary:#121331,secondary:#08a88a"
                                                        style="width:75px;height:75px"></lord-icon>
                                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                                    <p class="text-muted mb-0">We've searched more than 150+ leads We
                                                        did not find any leads for you search.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="align-items-center mt-4 pt-2 justify-content-between row text-center text-sm-start">
                                            <div class="col-sm">
                                                <div class="text-muted">
                                                    Showing <span class="fw-semibold">5</span> of <span
                                                        class="fw-semibold">25</span> Results
                                                </div>
                                            </div>
                                            <div class="col-sm-auto  mt-3 mt-sm-0">
                                                <ul
                                                    class="pagination pagination-separated pagination-sm mb-0 justify-content-center">
                                                    <li class="page-item disabled">
                                                        <a href="#" class="page-link">←</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="#" class="page-link">1</a>
                                                    </li>
                                                    <li class="page-item active">
                                                        <a href="#" class="page-link">2</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="#" class="page-link">3</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="#" class="page-link">→</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-start mt-3">
                                            <div class="pagination-wrap hstack gap-2">

                                                <a class="page-item pagination-prev disabled" href="#">
                                                    Previous
                                                </a>
                                                <ul class="pagination listjs-pagination mb-0"></ul>
                                                <a class="page-item pagination-next" href="#">
                                                    Next
                                                </a>

                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end mb-3 ">
                                            <div class="">

                                                <div role="status" aria-live="polite" class="gridjs-summary"
                                                    title="Page 1 of 2">Showing <b>1</b> to <b>5</b> of <b>10</b>
                                                    results</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="showModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header bg-light p-3">
                                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close" id="close-modal"></button>
                                                </div>
                                                <form class="tablelist-form" autocomplete="off">
                                                    <div class="modal-body">
                                                        <input type="hidden" id="id-field" />
                                                        <div class="row g-3">
                                                            <div class="col-lg-12">
                                                                <div class="text-center">
                                                                    <div class="position-relative d-inline-block">
                                                                        <div class="position-absolute bottom-0 end-0">
                                                                            <!-- <label for="lead-image-input" class="mb-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Select Image">
                                                                                <div class="avatar-xs cursor-pointer">
                                                                                    <div class="avatar-title bg-light border rounded-circle text-muted">
                                                                                        <i class="ri-image-fill"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </label>
                                                                            <input class="form-control d-none" value="" id="lead-image-input" type="file" accept="image/png, image/gif, image/jpeg"> -->
                                                                        </div>
                                                                        <!-- <div class="avatar-lg p-1">
                                                                            <div class="avatar-title bg-light rounded-circle">
                                                                                <img src="assets/images/users/user-dummy-img.jpg" id="lead-img" class="avatar-md rounded-circle object-fit-cover" />
                                                                            </div>
                                                                        </div> -->
                                                                    </div>
                                                                    <h1 class="fs-24 fw-medium mt-0 text-capitalize">
                                                                        Company filters</h1>
                                                                </div>

                                                            </div>
                                                            <!--end col-->
                                                            <div class="mb-5">
                                                                <label for="status-select"
                                                                    class="form-label text-muted text-uppercase fw-normal fs-16">By
                                                                    Company Grade</label>
                                                                <div class="row g-2">
                                                                    <div class="col-lg-3">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" id="inlineCheckbox1"
                                                                                value="option1">
                                                                            <label class="form-check-label"
                                                                                for="inlineCheckbox1">GRADE A</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" id="inlineCheckbox2"
                                                                                value="option2">
                                                                            <label class="form-check-label"
                                                                                for="inlineCheckbox2">GRADE B</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" id="inlineCheckbox2"
                                                                                value="option2">
                                                                            <label class="form-check-label"
                                                                                for="inlineCheckbox2">GRADE C</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" id="inlineCheckbox3"
                                                                                value="option3">
                                                                            <label class="form-check-label"
                                                                                for="inlineCheckbox3">GRADE D</label>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>


                                                            <div class="col-lg-12">
                                                                <div>
                                                                    <label for="company_name-field"
                                                                        class="form-label fw-normal fs-16">Company
                                                                        Name</label>
                                                                    <input type="text" id="company_name-field"
                                                                        class="form-control"
                                                                        placeholder="Enter company name" required />
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-lg-6">
                                                                <div>
                                                                    <label for="leads_score-field"
                                                                        class="form-label fw-normal fs-16">Leads
                                                                        Score</label>
                                                                    <input type="text" id="leads_score-field"
                                                                        class="form-control"
                                                                        placeholder="Enter lead score" required />
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-lg-6">
                                                                <div>
                                                                    <label for="phone-field"
                                                                        class="form-label fw-normal fs-16">Phone</label>
                                                                    <input type="text" id="phone-field"
                                                                        class="form-control"
                                                                        placeholder="Enter phone no" required />
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-lg-12">
                                                                <div>
                                                                    <label for="date-field"
                                                                        class="form-label fw-normal fs-16">Company
                                                                        Type</label>
                                                                    <select class="form-select mb-3"
                                                                        aria-label="Default select example">
                                                                        <option selected
                                                                            style="color: var(--neutrals-1, #121212); /* Body/Small */ font-family: DM Sans; font-size: 16px; font-style: normal; font-weight: 400; line-height: 120%;">
                                                                            Agencies</option>
                                                                        <option value="1">Agencies 2</option>
                                                                        <option value="2">Agencies 3</option>
                                                                        <option value="3">Agencies 4</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-lg-12">
                                                                <div>
                                                                    <label for="date-field"
                                                                        class="form-label fw-normal fs-16">Managed
                                                                        By</label>
                                                                    <select class="form-select mb-3"
                                                                        aria-label="Default select example">
                                                                        <option selected>Kashmira Khatun</option>
                                                                        <option value="1">Mirza Sabnam Akhtar</option>
                                                                        <option value="2">Sandip Shah</option>
                                                                        <option value="3">Kashmira Khatun</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div>
                                                                    <label for="date-field"
                                                                        class="form-label fw-normal fs-16">By Company
                                                                        Location</label>
                                                                    <select class="form-select mb-3"
                                                                        aria-label="Default select example">
                                                                        <option selected>Unites States</option>
                                                                        <option value="1">India</option>
                                                                        <option value="2">Sri Lanka</option>
                                                                        <option value="3">China</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                        </div>
                                                        <!--end row-->
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class="hstack gap-2 justify-content-center ">
                                                            <button type="reset" class="btn btn-light"
                                                                data-bs-dismiss="modal">Reset</button>
                                                            <button type="apply-filters" class="btn btn-primary"
                                                                id="add-btn">Apply Filters</button>

                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end modal-->
                                    <!--import model Start--->
                                    <!-- Tooltips and Popovers -->


                                    <!-- tooltips and popovers modal -->
                                    <div class="modal fade" id="exampleModalPopovers" tabindex="-1"
                                        aria-labelledby="exampleModalPopoversLabel" aria-modal="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <!-- <h5 class="modal-title" id="exampleModalPopoversLabel">Modal title</h5> -->
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <h1 class="fs-24 fw-medium mt-0 text-uppercase text-center">IMPORT
                                                        Company</h1>
                                                    <!-- <p>This <a href="#" role="button" class="btn btn-secondary popover-test" title="" data-bs-toggle="popover" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-container="body" data-bs-original-title="Popover Title">button</a> triggers a popover on click.
                                                    </p> -->
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="card">
                                                                <!-- <div class="card-header">
                                                                    <h5 class="card-title mb-0">Product Gallery</h5>
                                                                </div> -->
                                                                <div class="cardbody">
                                                                    <!-- <div class="mb-4">
                                                                        <h5 class="fs-14 mb-1">Product Image</h5>
                                                                        <p class="text-muted">Add Product main Image.</p>
                                                                        <div class="text-center">
                                                                            <div class="position-relative d-inline-block">
                                                                                <div class="position-absolute top-100 start-100 translate-middle">
                                                                                    <label for="product-image-input" class="mb-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Select Image">
                                                                                        <div class="avatar-xs">
                                                                                            <div class="avatar-title bg-light border rounded-circle text-muted cursor-pointer">
                                                                                                <i class="ri-image-fill"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                    </label>
                                                                                    <input class="form-control d-none" value="" id="product-image-input" type="file" accept="image/png, image/gif, image/jpeg">
                                                                                </div>
                                                                                <div class="avatar-lg">
                                                                                    <div class="avatar-title bg-light rounded">
                                                                                        <img src="#" id="product-img" class="avatar-md h-auto" />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div> -->
                                                                    <div>
                                                                        <h5 class="fs-18 fw-normal mb-3">Upload Files
                                                                        </h5>
                                                                        <!-- <p class="text-muted">Add Product Gallery Images.</p> -->

                                                                        <div class="dropzone">
                                                                            <div class="fallback">
                                                                                <input name="file" type="file"
                                                                                    multiple="multiple">
                                                                            </div>
                                                                            <div class="dz-message needsclick">
                                                                                <div class="mb-3">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="32" height="28"
                                                                                        viewBox="0 0 32 28" fill="none">
                                                                                        <path
                                                                                            d="M31.6436 9.74735C31.2612 9.20841 30.6169 8.89925 29.8759 8.89925H27.0554V5.83201C27.0554 4.64996 26.0938 3.6883 24.9117 3.6883H15.025C14.6043 3.6883 13.9479 3.35504 13.6998 3.01552L12.9598 2.00335C12.3825 1.21377 11.2096 0.618164 10.2314 0.618164H6.80552C5.72868 0.618164 4.6457 1.38387 4.2866 2.39941L4.05103 3.06593C3.94002 3.37995 3.50398 3.6883 3.17083 3.6883H2.14371C0.961656 3.6883 0 4.64996 0 5.83201V25.1914C0 25.294 0.0186561 25.3919 0.0513331 25.4833C0.0689463 25.8664 0.188067 26.2277 0.405103 26.5336C0.787494 27.0727 1.43177 27.3817 2.17279 27.3817H24.0138C25.3342 27.3817 26.7103 26.4056 27.1465 25.1593L31.86 11.6959C32.1048 10.9966 32.026 10.2864 31.6436 9.74735ZM2.14371 5.42644H3.17083C4.2479 5.42644 5.33076 4.66073 5.68975 3.6452L5.92521 2.97891C6.03633 2.66477 6.47238 2.35642 6.80552 2.35642H10.2313C10.6519 2.35642 11.3083 2.68968 11.5566 3.0292L12.2965 4.04126C12.8738 4.83096 14.0467 5.42644 15.025 5.42644H24.9117C25.1317 5.42644 25.3173 5.61219 25.3173 5.83201V8.89925H8.03485C6.71444 8.89925 5.33841 9.87539 4.90214 11.1216L1.73814 20.1592V5.83201C1.73814 5.61219 1.92389 5.42644 2.14371 5.42644ZM30.2194 11.1216L25.506 24.5851C25.312 25.1391 24.6007 25.6436 24.0138 25.6436H2.17279C2.005 25.6436 1.87418 25.6004 1.82285 25.5279C1.77151 25.4555 1.77383 25.3177 1.82934 25.1593L6.54283 11.6959C6.7368 11.1419 7.44805 10.6374 8.03497 10.6374H29.876C30.0438 10.6374 30.1746 10.6806 30.226 10.753C30.2773 10.8255 30.2749 10.9632 30.2194 11.1216Z"
                                                                                            fill="#71717A" />
                                                                                    </svg>
                                                                                    <!-- <i class="display-4 text-muted ri-upload-cloud-2-fill"></i> -->
                                                                                </div>

                                                                                <h5 class="fs-16 fw-normal">Drop your
                                                                                    file here, or <a href="#">
                                                                                        Browse</a></h5>
                                                                            </div>
                                                                        </div>
                                                                        <div class="dropzones mt-3">
                                                                            <div class="mb-3 mt-3">
                                                                                <!-- <label for="formFile" class="form-label">Upload Image</label> -->
                                                                                <input class="form-control" type="file"
                                                                                    id="formFile" />
                                                                            </div>
                                                                        </div>

                                                                        <ul class="list-unstyled mb-0"
                                                                            id="dropzone-preview">
                                                                            <li class="mt-2" id="dropzone-preview-list">
                                                                                <!-- This is used as the file preview template -->
                                                                                <div class="border rounded">
                                                                                    <div class="d-flex p-2">
                                                                                        <div class="flex-shrink-0 me-3">
                                                                                            <div
                                                                                                class="avatar-sm bg-light rounded">
                                                                                                <img data-dz-thumbnail
                                                                                                    class="img-fluid rounded d-block"
                                                                                                    src="#"
                                                                                                    alt="Product-Image" />
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="flex-grow-1">
                                                                                            <div class="pt-1">
                                                                                                <h5 class="fs-14 mb-1"
                                                                                                    data-dz-name>&nbsp;
                                                                                                </h5>
                                                                                                <p class="fs-13 text-muted mb-0"
                                                                                                    data-dz-size></p>
                                                                                                <strong
                                                                                                    class="error text-danger"
                                                                                                    data-dz-errormessage></strong>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="flex-shrink-0 ms-3">
                                                                                            <button data-dz-remove
                                                                                                class="btn btn-sm btn-danger">Delete</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                        <!-- end dropzon-preview -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end card -->
                                                        </div> <!-- end col -->
                                                    </div>
                                                    <!-- end row -->
                                                </div>
                                                <!-- <div class="modal-footer">
                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button> 
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <!------Import Model ends-->
                                    <!-- Modal -->
                                    <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1"
                                        aria-labelledby="deleteRecordLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close" id="btn-close"></button>
                                                </div>
                                                <div class="modal-body p-5 text-center">
                                                    <lord-icon src="" trigger="loop"
                                                        colors="primary:#405189,secondary:#f06548"
                                                        style="width:90px;height:90px"></lord-icon>
                                                    <div class="mt-4 text-center">
                                                        <h4 class="fs-semibold">You are about to delete a lead ?</h4>
                                                        <p class="text-muted fs-14 mb-4 pt-1">Deleting your lead will
                                                            remove all of your information from our database.</p>
                                                        <div class="hstack gap-2 justify-content-center remove">

                                                            <button
                                                                class="btn btn-link link-success fw-medium text-decoration-none"
                                                                id="deleteRecord-close" data-bs-dismiss="modal"><i
                                                                    class="ri-close-line me-1 align-middle"></i>
                                                                Close</button>
                                                            <button class="btn btn-danger" id="delete-record">Yes,
                                                                Delete It!!</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end modal -->


                                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample"
                                        aria-labelledby="offcanvasExampleLabel">
                                        <div class="offcanvas-header bg-light">
                                            <h5 class="offcanvas-title fs-24 fw-medium" id="offcanvasExampleLabel">
                                                Company Details</h5>
                                            <button type="button" class="btn-close text-reset"
                                                data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <!--end offcanvas-header-->
                                        <form action="#" class="d-flex flex-column justify-content-end h-100">
                                            <h6 class="offcanvas-title mt-3 fs-16 fw-medium" id="offcanvasExampleLabel"
                                                style="margin: 14px !important; color: var(--neutrals-1, #121212); font-family: DM Sans;  line-height: 120%;   text-transform: uppercase;">
                                                Basic Details</h6>
                                            <div class="offcanvas-body">
                                                <div class="row">
                                                    <div class="col-6 mb-4">
                                                        <div class="mb-4">
                                                            <label for="nameInput"
                                                                class="form-label text-muted text-capitalize fs-16 fw-normal mb-3">
                                                                Company Name</label>
                                                            <input type="text" class="form-control" id="nameInput"
                                                                placeholder="Link Builders" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-6 mb-4">
                                                        <div class="mb-4">
                                                            <label for="nameInput"
                                                                class="form-label text-muted text-capitalize fs-16 fw-normal mb-3">
                                                                Owner Name</label>
                                                            <input type="text" class="form-control" id="nameInput"
                                                                placeholder=" Owner Name " value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-6 mb-4">
                                                        <div class="mb-4">
                                                            <label for="nameInput"
                                                                class="form-label text-muted text-capitalize fs-16 fw-normal mb-3">
                                                                Website Link</label>
                                                            <input type="text" class="form-control" id="nameInput"
                                                                placeholder="Website Link" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-6 mb-4">
                                                        <div class="mb-4">
                                                            <label for="nameInput"
                                                                class="form-label text-muted text-capitalize fs-16 fw-normal mb-3">
                                                                Company Type</label>
                                                            <input type="text" class="form-control" id="nameInput"
                                                                placeholder=" Company Type " value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-6 mb-4">
                                                        <div class="mb-4">
                                                            <label for="nameInput"
                                                                class="form-label text-muted text-capitalize fs-16 fw-normal mb-3">
                                                                Company Grade</label>
                                                            <select class="form-select mb-3"
                                                                aria-label="Default select example">
                                                                <option selected></option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                            <!-- <input type="text" class="form-control" id="nameInput" placeholder="Company  Grade" value=""> -->
                                                        </div>
                                                    </div>
                                                    <div class="col-6 mb-4">
                                                        <div class="mb-4">
                                                            <label for="nameInput"
                                                                class="form-label text-muted text-capitalize fs-16 fw-normal mb-3">
                                                                Managed By</label>
                                                            <select class="form-select mb-3"
                                                                aria-label="Default select example">
                                                                <option selected></option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                            <!-- <input type="text" class="form-control" id="nameInput" placeholder="Managed By " value=""> -->
                                                        </div>
                                                    </div>


                                                    <h4 class="card-title mb-4 fs-16 fw-medium">Address Information</h4>
                                                    <div class="mb-4">
                                                        <div>
                                                            <label for="iconrightInput"
                                                                class="form-label text-muted text-capitalize fs-16 fw-normal mb-3">Company
                                                                Mail ID</label>
                                                            <div class="form-icon right">
                                                                <input type="email"
                                                                    class="form-control form-control-icon"
                                                                    id="iconrightInput" placeholder="">
                                                                <i class="ri-checkbox-multiple-blank-line"></i>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="mb-4">
                                                        <div>
                                                            <label for="iconrightInput"
                                                                class="form-label text-muted text-capitalize fs-16 fw-normal mb-3">Company
                                                                LinkedIn Page</label>
                                                            <div class="form-icon right">
                                                                <input type="email"
                                                                    class="form-control form-control-icon"
                                                                    id="iconrightInput" placeholder="">
                                                                <i class="ri-checkbox-multiple-blank-line"></i>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-6 mb-4">
                                                        <label for="inputPostal_Code"
                                                            class="form-label text-muted text-capitalize fs-16 fw-normal mb-3"">Postal Code</label>
                                                    <input type=" text" class="form-control" id="inputPostal_Code"
                                                            placeholder="">

                                                    </div>

                                                    <div class="col-6 mb-4">
                                                        <label for="inputCountry"
                                                            class="form-label text-muted text-capitalize fs-16 fw-normal mb-3"">Country</label>
                                                    <input type=" text" class="form-control" id="inputCountry"
                                                            placeholder="Enter your Country">
                                                    </div>
                                                    <h4 class="card-title mb-5 fs-16 fw-medium">Contacts Information
                                                    </h4>


                                                    <div class="col-12 mb-4">
                                                        <!-- Accordions Bordered -->
                                                        <div class="accordion custom-accordionwithicon custom-accordion-border accordion-border-box accordion-secondary"
                                                            id="accordionBordered" style="border-radius: 4px;
                                                    background: #FAFAFA;">
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header"
                                                                    id="accordionborderedExample1">
                                                                    <button class="accordion-button" type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#accor_borderedExamplecollapse1"
                                                                        aria-expanded="true"
                                                                        aria-controls="accor_borderedExamplecollapse1"
                                                                        style="color: var(--neutrals-1, #121212); background: #FAFAFA !important; font-family: DM Sans; font-size: 16px; font-style: normal; font-weight: 400; line-height: 120%;">
                                                                        1. Person Profile
                                                                    </button>
                                                                </h2>
                                                                <div id="accor_borderedExamplecollapse1"
                                                                    class="accordion-collapse collapse show"
                                                                    aria-labelledby="accordionborderedExample1"
                                                                    data-bs-parent="#accordionBordered">
                                                                    <div class="accordion-body"
                                                                        style="background: #FAFAFA !important;">
                                                                        <div class="row">
                                                                            <div class="col-6 mb-4">
                                                                                <label for="PersonNameinput"
                                                                                    class="form-label text-muted text-capitalize fs-16 fw-normal mb-3"">Person Name</label>
                                                                        <input type=" text" class="form-control"
                                                                                    placeholder="" id="PersonNameinput">
                                                                            </div>
                                                                            <div class="col-6 mb-4">
                                                                                <label for="emailidInput"
                                                                                    class="form-label text-muted text-capitalize fs-16 fw-normal mb-3"">Email Address</label>
                                                                        <input type=" email" class="form-control"
                                                                                    placeholder="" id="emailidInput">
                                                                            </div>
                                                                            <div class="col-6 mb-4">
                                                                                <label for="CompanyNameinput"
                                                                                    class="form-label text-muted text-capitalize fs-16 fw-normal mb-3"">Company Name</label>
                                                                        <input type=" text" class="form-control"
                                                                                    placeholder="" id="">
                                                                            </div>
                                                                            <div class="col-6 mb-4">
                                                                                <label for="DesignationInput"
                                                                                    class="form-label text-muted text-capitalize fs-16 fw-normal mb-3"">Designation</label>
                                                                        <input type=" text" class="form-control"
                                                                                    placeholder="" id="emailidInput">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-item mt-2">
                                                                <h2 class="accordion-header"
                                                                    id="accordionborderedExample2">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#accor_borderedExamplecollapse2"
                                                                        aria-expanded="false"
                                                                        aria-controls="accor_borderedExamplecollapse2"
                                                                        style="color: var(--neutrals-1, #121212); background: #FAFAFA !important; font-family: DM Sans; font-size: 16px; font-style: normal; font-weight: 400; line-height: 120%;">
                                                                        2. Ross Taylor
                                                                    </button>
                                                                </h2>
                                                                <div id="accor_borderedExamplecollapse2"
                                                                    class="accordion-collapse collapse"
                                                                    aria-labelledby="accordionborderedExample2"
                                                                    data-bs-parent="#accordionBordered">
                                                                    <div class="accordion-body">
                                                                        <div class="row">
                                                                            <div class="col-6 mb-4">
                                                                                <label for="Person Nameinput"
                                                                                    class="form-label text-muted text-capitalize fs-16 fw-normal mb-3"">Person Name</label>
                                                                            <input type=" text" class="form-control"
                                                                                    placeholder="Enter your Person Name"
                                                                                    id="">
                                                                            </div>
                                                                            <div class="col-6 mb-4">
                                                                                <label for="emailidInput"
                                                                                    class="form-label text-muted text-capitalize fs-16 fw-normal mb-3"">Email Address</label>
                                                                            <input type=" email" class="form-control"
                                                                                    placeholder="example@gamil.com"
                                                                                    id="emailidInput">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-4 mb-4 offset-1">
                                                        <div class="row">
                                                            <button type="cancel"
                                                                class="btn btn-light w-100">Cancel</button>

                                                        </div>
                                                    </div>
                                                    <div class="col-4 mb-4 offset-1">
                                                        <div class="row">

                                                            <button type="submit" class="btn btn-primary w-100">Save
                                                                Details</button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--end offcanvas-body-->
                                            <div class="offcanvas-footer border-top p-3 text-center hstack gap-2">
                                                <button class="btn btn-light w-100">Clear Filter</button>
                                                <button type="submit" class="btn btn-success w-100">Filters</button>
                                            </div>
                                            <!--end offcanvas-footer-->
                                        </form>
                                    </div>
                                    <!--end offcanvas-->

                                </div>
                            </div>

                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

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
                                Design & Develop by Viacon India
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
    <!-- <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script> -->
    <!-- <script src="assets/js/plugins.js"></script> -->

    <!-- list.js min js -->
    <script src="assets/libs/list.js/list.min.js"></script>
    <script src="assets/libs/list.pagination.js/list.pagination.min.js"></script>

    <!-- Sweet Alerts js -->
    <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>
    <!-- crm leads init -->
    <!-- <script src="assets/js/pages/crm-leads.init.js"></script> -->

    <!-- App js -->
    <script src="assets/js/app.js"></script>
    <!-- dropzone min -->
    <script src="assets/libs/dropzone/dropzone-min.js"></script>
    <!-- dropzone min -->
    <script src="assets/libs/dropzone/dropzone-min.js"></script>
    <!-- filepond js -->
    <script src="assets/libs/filepond/filepond.min.js"></script>
    <script src="assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js"></script>
    <script src="assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js"></script>
    <script
        src="assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js"></script>
    <script src="assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js"></script>

    <script src="assets/js/pages/form-file-upload.init.js"></script>
    <!-- filepond js -->
</body>

</html>