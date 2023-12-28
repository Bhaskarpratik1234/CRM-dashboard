<!doctype html>
<html lang="en" data-layout="vertical" data-layout-style="default" data-layout-position="fixed" data-topbar="light"
    data-sidebar="dark" data-layout-width="fluid" data-sidebar-size="lg">
    <?php include 'includes/leads-head.php'; ?>
<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
    <?php include 'includes/leads-header.php'; ?>
    <?php include 'includes/leads-sidenav.php'; ?>
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item active">Leads</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-5">
                    <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                        <div class="flex-grow-1">
                            <h1 class="fs-28 mb-1 fw-bolder text-capitalize">raw leads <span class="text-muted fs-15 fw-normal">(400 new results found)</span></h1>
                            
                        </div>
                        <div class="flex-shrink-0">
                            <button type="button" class="btn btn-outline-success waves-effect waves-light fs-16 fw-normal"  data-bs-toggle="modal" data-bs-target="#exampleModalPopovers"><i class="ri-upload-cloud-2-fill"></i> Import</button>
                          
                            <div class="btn-group">
                                <button class="btn btn-secondary dropdown-toggle fs-16 fw-normal" type="button" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M15.4507 2.71146H4.55065C3.53398 2.71146 2.70898 3.53646 2.70898 4.55313C2.70898 4.99479 2.86732 5.41979 3.15065 5.75312L7.45898 10.7781C7.61732 10.9698 7.70898 11.2115 7.70898 11.4531V16.1531C7.70898 16.6615 7.96732 17.1281 8.40065 17.3948C8.63398 17.5365 8.90065 17.6115 9.16732 17.6115C9.39232 17.6115 9.60898 17.5615 9.81732 17.4531L11.484 16.6198C11.984 16.3698 12.2923 15.8698 12.2923 15.3115V11.4448C12.2923 11.1948 12.384 10.9531 12.5423 10.7698L16.8506 5.74479C17.134 5.41146 17.2923 4.98646 17.2923 4.54479C17.2923 3.52812 16.4673 2.70312 15.4507 2.70312V2.71146ZM15.9007 4.93646L11.5923 9.96146C11.234 10.3781 11.0423 10.9031 11.0423 11.4531V15.3198C11.0423 15.4031 11.0007 15.4698 10.9257 15.5031L9.25898 16.3365C9.16732 16.3865 9.09232 16.3531 9.05898 16.3281C9.02565 16.3031 8.95898 16.2531 8.95898 16.1531V11.4531C8.95898 10.9031 8.76732 10.3781 8.40898 9.96146L4.10065 4.93646C4.00898 4.82812 3.95898 4.69479 3.95898 4.55313C3.95898 4.22812 4.22565 3.96146 4.55065 3.96146H15.4507C15.7757 3.96146 16.0423 4.22812 16.0423 4.55313C16.0423 4.69479 15.9923 4.82812 15.9007 4.93646Z" fill="white"/>
                                      </svg> Generate Leads
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
                                    <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                </ul>
                            </div>
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
                            <div class="row g-4 align-items-center d-flex">
                                <div class="col-sm-3">
                                    <div class="search-box">
                                        <input type="text" class="form-control search" placeholder="Search for...">
                                        <i class="ri-search-line search-icon"></i>
                                    </div>                                   
                                </div>
                                <div class="col-sm-3">
                                    <button type="button" class="btn btn-outline-secondary waves-effect waves-light" data-bs-toggle="offcanvas" href="#offcanvasExample"><i class="ri-filter-3-line align-bottom me-1"></i></button>
                                </div>                               
                                <div class="col-sm-auto ms-auto">
                                    <div class="hstack gap-2">
                                        <button class="btn btn-soft-danger" id="remove-actions" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>                                       
                                        <div class="btn-group">
                                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                                Sort By</button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                            </ul>
                                        </div>                                        
                                        <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" data-bs-target="#zoomInModal"> Check SEO Metrics</button>
                                         <!-- Modal Blur -->
                                         <div id="zoomInModal" class="modal fade zoomIn" tabindex="-1" aria-labelledby="zoomInModalLabel" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="zoomInModalLabel">Modal Heading</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5 class="fs-16">
                                                                Overflowing text to show scroll behavior
                                                            </h5>
                                                            <p class="text-muted">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.</p>
                                                            <p class="text-muted">The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?" he thought.</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary ">Save Changes</button>
                                                        </div>

                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                    </div>
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
                                                        <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                    </div>
                                                </th>

                                                <th class="" data-sort="name">Publishers Name</th>
                                                <th class="" data-sort="company_name">E-mail ID</th>
                                                <th class="" data-sort="leads_score">Domain</th>
                                                <th class="" data-sort="phone">Email ID source</th>
                                                <th class="" data-sort="location">Countries</th>
                                                <th class="" data-sort=""></th>
                                                <th class="" data-sort="date">Create Date</th>
                                                <th class="" data-sort="action"></th>
                                            </tr>
                                        </thead>
                                        <tbody class="list form-check-all">
                                        <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                    </div>
                                                </th>
                                                <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 ms-2 name">Kane Brook</div>
                                                    </div>
                                                </td>
                                                <td class="company_name"><a href="http://">username@gmail.com</a></td>
                                                <td class="leads_score"><a href="http://">linkbuilders.io</a></td>
                                                <td class="phone">Get In Touch Page</td>
                                                <td class="location">United States</td>
                                                <td class=""> </td>
                                                <td class="date">12 June 2023</td>
                                                <td>
                                                    <span class="dropdown">                                                      
                                                        <button class="btn btn-soft-info btn-icon fs-14" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-2-fill align-middle"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <!-- <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom text-muted"></i> Edit</a></li>
                                                            <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                <i class="ri-delete-bin-fill align-bottom text-muted"></i> Delete</a></li> -->
                                                            <li><a class="dropdown-item" href="#">Mark as Qualified Leads</a></li>
                                                            <li><a class="dropdown-item" href="#">Remove This Lead</a></li>
                                                            <!-- <li><a class="dropdown-item" href="#">Reset form view to default</a></li> -->
                                                        </ul>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                    </div>
                                                </th>
                                                <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 ms-2 name">Kane Brook</div>
                                                    </div>
                                                </td>
                                                <td class="company_name"><a href="http://">username@gmail.com</a></td>
                                                <td class="leads_score"><a href="http://">linkbuilders.io</a></td>
                                                <td class="phone">Get In Touch Page</td>
                                                <td class="location">United States</td>
                                                <td class=""> </td>
                                                <td class="date">12 June 2023</td>
                                                <td>
                                                    <span class="dropdown">                                                      
                                                        <button class="btn btn-soft-info btn-icon fs-14" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-2-fill align-middle"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <!-- <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom text-muted"></i> Edit</a></li>
                                                            <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                <i class="ri-delete-bin-fill align-bottom text-muted"></i> Delete</a></li> -->
                                                            <li><a class="dropdown-item" href="#">Mark as Qualified Leads</a></li>
                                                            <li><a class="dropdown-item" href="#">Remove This Lead</a></li>
                                                            <!-- <li><a class="dropdown-item" href="#">Reset form view to default</a></li> -->
                                                        </ul>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                    </div>
                                                </th>
                                                <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 ms-2 name">Kane Brook</div>
                                                    </div>
                                                </td>
                                                <td class="company_name"><a href="http://">username@gmail.com</a></td>
                                                <td class="leads_score"><a href="http://">linkbuilders.io</a></td>
                                                <td class="phone">Get In Touch Page</td>
                                                <td class="location">United States</td>
                                                <td class=""> </td>
                                                <td class="date">12 June 2023</td>
                                                <td>
                                                    <span class="dropdown">                                                      
                                                        <button class="btn btn-soft-info btn-icon fs-14" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-2-fill align-middle"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <!-- <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom text-muted"></i> Edit</a></li>
                                                            <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                <i class="ri-delete-bin-fill align-bottom text-muted"></i> Delete</a></li> -->
                                                            <li><a class="dropdown-item" href="#">Mark as Qualified Leads</a></li>
                                                            <li><a class="dropdown-item" href="#">Remove This Lead</a></li>
                                                            <!-- <li><a class="dropdown-item" href="#">Reset form view to default</a></li> -->
                                                        </ul>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                    </div>
                                                </th>
                                                <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 ms-2 name">Kane Brook</div>
                                                    </div>
                                                </td>
                                                <td class="company_name"><a href="http://">username@gmail.com</a></td>
                                                <td class="leads_score"><a href="http://">linkbuilders.io</a></td>
                                                <td class="phone">Get In Touch Page</td>
                                                <td class="location">United States</td>
                                                <td class=""> </td>
                                                <td class="date">12 June 2023</td>
                                                <td>
                                                    <span class="dropdown">                                                      
                                                        <button class="btn btn-soft-info btn-icon fs-14" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-2-fill align-middle"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <!-- <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom text-muted"></i> Edit</a></li>
                                                            <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                <i class="ri-delete-bin-fill align-bottom text-muted"></i> Delete</a></li> -->
                                                            <li><a class="dropdown-item" href="#">Mark as Qualified Leads</a></li>
                                                            <li><a class="dropdown-item" href="#">Remove This Lead</a></li>
                                                            <!-- <li><a class="dropdown-item" href="#">Reset form view to default</a></li> -->
                                                        </ul>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                    </div>
                                                </th>
                                                <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 ms-2 name">Kane Brook</div>
                                                    </div>
                                                </td>
                                                <td class="company_name"><a href="http://">username@gmail.com</a></td>
                                                <td class="leads_score"><a href="http://">linkbuilders.io</a></td>
                                                <td class="phone">Get In Touch Page</td>
                                                <td class="location">United States</td>
                                                <td class=""> </td>
                                                <td class="date">12 June 2023</td>
                                                <td>
                                                    <span class="dropdown">                                                      
                                                        <button class="btn btn-soft-info btn-icon fs-14" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-2-fill align-middle"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <!-- <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom text-muted"></i> Edit</a></li>
                                                            <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                <i class="ri-delete-bin-fill align-bottom text-muted"></i> Delete</a></li> -->
                                                            <li><a class="dropdown-item" href="#">Mark as Qualified Leads</a></li>
                                                            <li><a class="dropdown-item" href="#">Remove This Lead</a></li>
                                                            <!-- <li><a class="dropdown-item" href="#">Reset form view to default</a></li> -->
                                                        </ul>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                    </div>
                                                </th>
                                                <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 ms-2 name">Kane Brook</div>
                                                    </div>
                                                </td>
                                                <td class="company_name"><a href="http://">username@gmail.com</a></td>
                                                <td class="leads_score"><a href="http://">linkbuilders.io</a></td>
                                                <td class="phone">Get In Touch Page</td>
                                                <td class="location">United States</td>
                                                <td class=""> </td>
                                                <td class="date">12 June 2023</td>
                                                <td>
                                                    <span class="dropdown">                                                      
                                                        <button class="btn btn-soft-info btn-icon fs-14" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-2-fill align-middle"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <!-- <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom text-muted"></i> Edit</a></li>
                                                            <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                <i class="ri-delete-bin-fill align-bottom text-muted"></i> Delete</a></li> -->
                                                            <li><a class="dropdown-item" href="#">Mark as Qualified Leads</a></li>
                                                            <li><a class="dropdown-item" href="#">Remove This Lead</a></li>
                                                            <!-- <li><a class="dropdown-item" href="#">Reset form view to default</a></li> -->
                                                        </ul>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                    </div>
                                                </th>
                                                <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 ms-2 name">Kane Brook</div>
                                                    </div>
                                                </td>
                                                <td class="company_name"><a href="http://">username@gmail.com</a></td>
                                                <td class="leads_score"><a href="http://">linkbuilders.io</a></td>
                                                <td class="phone">Get In Touch Page</td>
                                                <td class="location">United States</td>
                                                <td class=""> </td>
                                                <td class="date">12 June 2023</td>
                                                <td>
                                                    <span class="dropdown">                                                      
                                                        <button class="btn btn-soft-info btn-icon fs-14" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-2-fill align-middle"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <!-- <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom text-muted"></i> Edit</a></li>
                                                            <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                <i class="ri-delete-bin-fill align-bottom text-muted"></i> Delete</a></li> -->
                                                            <li><a class="dropdown-item" href="#">Mark as Qualified Leads</a></li>
                                                            <li><a class="dropdown-item" href="#">Remove This Lead</a></li>
                                                            <!-- <li><a class="dropdown-item" href="#">Reset form view to default</a></li> -->
                                                        </ul>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                    </div>
                                                </th>
                                                <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 ms-2 name">Kane Brook</div>
                                                    </div>
                                                </td>
                                                <td class="company_name"><a href="http://">username@gmail.com</a></td>
                                                <td class="leads_score"><a href="http://">linkbuilders.io</a></td>
                                                <td class="phone">Get In Touch Page</td>
                                                <td class="location">United States</td>
                                                <td class=""> </td>
                                                <td class="date">12 June 2023</td>
                                                <td>
                                                    <span class="dropdown">                                                      
                                                        <button class="btn btn-soft-info btn-icon fs-14" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-2-fill align-middle"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <!-- <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom text-muted"></i> Edit</a></li>
                                                            <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                <i class="ri-delete-bin-fill align-bottom text-muted"></i> Delete</a></li> -->
                                                            <li><a class="dropdown-item" href="#">Mark as Qualified Leads</a></li>
                                                            <li><a class="dropdown-item" href="#">Remove This Lead</a></li>
                                                            <!-- <li><a class="dropdown-item" href="#">Reset form view to default</a></li> -->
                                                        </ul>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                    </div>
                                                </th>
                                                <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 ms-2 name">Kane Brook</div>
                                                    </div>
                                                </td>
                                                <td class="company_name"><a href="http://">username@gmail.com</a></td>
                                                <td class="leads_score"><a href="http://">linkbuilders.io</a></td>
                                                <td class="phone">Get In Touch Page</td>
                                                <td class="location">United States</td>
                                                <td class=""> </td>
                                                <td class="date">12 June 2023</td>
                                                <td>
                                                    <span class="dropdown">                                                      
                                                        <button class="btn btn-soft-info btn-icon fs-14" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-2-fill align-middle"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <!-- <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom text-muted"></i> Edit</a></li>
                                                            <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                <i class="ri-delete-bin-fill align-bottom text-muted"></i> Delete</a></li> -->
                                                            <li><a class="dropdown-item" href="#">Mark as Qualified Leads</a></li>
                                                            <li><a class="dropdown-item" href="#">Remove This Lead</a></li>
                                                            <!-- <li><a class="dropdown-item" href="#">Reset form view to default</a></li> -->
                                                        </ul>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                    </div>
                                                </th>
                                                <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 ms-2 name">Kane Brook</div>
                                                    </div>
                                                </td>
                                                <td class="company_name"><a href="http://">username@gmail.com</a></td>
                                                <td class="leads_score"><a href="http://">linkbuilders.io</a></td>
                                                <td class="phone">Get In Touch Page</td>
                                                <td class="location">United States</td>
                                                <td class=""> </td>
                                                <td class="date">12 June 2023</td>
                                                <td>
                                                    <span class="dropdown">                                                      
                                                        <button class="btn btn-soft-info btn-icon fs-14" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-2-fill align-middle"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <!-- <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom text-muted"></i> Edit</a></li>
                                                            <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                <i class="ri-delete-bin-fill align-bottom text-muted"></i> Delete</a></li> -->
                                                            <li><a class="dropdown-item" href="#">Mark as Qualified Leads</a></li>
                                                            <li><a class="dropdown-item" href="#">Remove This Lead</a></li>
                                                            <!-- <li><a class="dropdown-item" href="#">Reset form view to default</a></li> -->
                                                        </ul>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                    </div>
                                                </th>
                                                <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 ms-2 name">Kane Brook</div>
                                                    </div>
                                                </td>
                                                <td class="company_name"><a href="http://">username@gmail.com</a></td>
                                                <td class="leads_score"><a href="http://">linkbuilders.io</a></td>
                                                <td class="phone">Get In Touch Page</td>
                                                <td class="location">United States</td>
                                                <td class=""> </td>
                                                <td class="date">12 June 2023</td>
                                                <td>
                                                    <span class="dropdown">                                                      
                                                        <button class="btn btn-soft-info btn-icon fs-14" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-2-fill align-middle"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <!-- <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom text-muted"></i> Edit</a></li>
                                                            <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                <i class="ri-delete-bin-fill align-bottom text-muted"></i> Delete</a></li> -->
                                                            <li><a class="dropdown-item" href="#">Mark as Qualified Leads</a></li>
                                                            <li><a class="dropdown-item" href="#">Remove This Lead</a></li>
                                                            <!-- <li><a class="dropdown-item" href="#">Reset form view to default</a></li> -->
                                                        </ul>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                    </div>
                                                </th>
                                                <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 ms-2 name">Kane Brook</div>
                                                    </div>
                                                </td>
                                                <td class="company_name"><a href="http://">username@gmail.com</a></td>
                                                <td class="leads_score"><a href="http://">linkbuilders.io</a></td>
                                                <td class="phone">Get In Touch Page</td>
                                                <td class="location">United States</td>
                                                <td class=""> </td>
                                                <td class="date">12 June 2023</td>
                                                <td>
                                                    <span class="dropdown">                                                      
                                                        <button class="btn btn-soft-info btn-icon fs-14" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-2-fill align-middle"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <!-- <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom text-muted"></i> Edit</a></li>
                                                            <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                <i class="ri-delete-bin-fill align-bottom text-muted"></i> Delete</a></li> -->
                                                            <li><a class="dropdown-item" href="#">Mark as Qualified Leads</a></li>
                                                            <li><a class="dropdown-item" href="#">Remove This Lead</a></li>
                                                            <!-- <li><a class="dropdown-item" href="#">Reset form view to default</a></li> -->
                                                        </ul>
                                                    </span>
                                                </td>
                                            </tr>
                                         
                                        </tbody>
                                    </table>
                                    <div class="noresult" style="display: none">
                                        <div class="text-center">
                                            <lord-icon src="../../../../external.html?link=https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                            <h5 class="mt-2">Sorry! No Result Found</h5>
                                            <p class="text-muted mb-0">We've searched more than 150+ leads We did not find any leads for you search.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="gridjs-pagination mt-3">
                                    <div role="status" aria-live="polite" class="gridjs-summary" title="Page 1 of 2">Showing <b>1</b> to <b>10</b> of <b>12</b> results</div>
                                    <div class="gridjs-pages">
                                        <button tabindex="0" role="button" disabled="" title="Previous" aria-label="Previous" class="">Previous</button>
                                        <button tabindex="0" role="button" class="gridjs-currentPage" title="Page 1" aria-label="Page 1">1</button>
                                        <button tabindex="0" role="button" class="" title="Page 2" aria-label="Page 2">2</button>
                                        <button tabindex="0" role="button" class="" title="Page 2" aria-label="Page 3">3</button>
                                        <button tabindex="0" role="button" title="Next" aria-label="Next" class="">Next</button>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header bg-light p-3">
                                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                        </div>
                                        <form class="tablelist-form" autocomplete="off">
                                            <div class="modal-body">
                                                <input type="hidden" id="id-field" />
                                                <div class="row g-3">
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <div class="position-relative d-inline-block">
                                                                <div class="position-absolute bottom-0 end-0">
                                                                    <label for="lead-image-input" class="mb-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Select Image">
                                                                        <div class="avatar-xs cursor-pointer">
                                                                            <div class="avatar-title bg-light border rounded-circle text-muted">
                                                                                <i class="ri-image-fill"></i>
                                                                            </div>
                                                                        </div>
                                                                    </label>
                                                                    <input class="form-control d-none" value="" id="lead-image-input" type="file" accept="image/png, image/gif, image/jpeg">
                                                                </div>
                                                                <div class="avatar-lg p-1">
                                                                    <div class="avatar-title bg-light rounded-circle">
                                                                        <img src="assets/images/users/user-dummy-img.jpg" id="lead-img" class="avatar-md rounded-circle object-fit-cover" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <h5 class="fs-13 mt-3">Lead Image</h5>
                                                        </div>
                                                        <div>
                                                            <label for="leadname-field" class="form-label">Name</label>
                                                            <input type="text" id="leadname-field" class="form-control" placeholder="Enter Name" required />
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-12">
                                                        <div>
                                                            <label for="company_name-field" class="form-label">Company Name</label>
                                                            <input type="text" id="company_name-field" class="form-control" placeholder="Enter company name" required />
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-6">
                                                        <div>
                                                            <label for="leads_score-field" class="form-label">Leads Score</label>
                                                            <input type="text" id="leads_score-field" class="form-control" placeholder="Enter lead score" required />
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-6">
                                                        <div>
                                                            <label for="phone-field" class="form-label">Phone</label>
                                                            <input type="text" id="phone-field" class="form-control" placeholder="Enter phone no" required />
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-12">
                                                        <div>
                                                            <label for="location-field" class="form-label">Location</label>
                                                            <input type="text" id="location-field" class="form-control" placeholder="Enter location" required />
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-12">
                                                        <div>
                                                            <label for="taginput-choices" class="form-label">Tags</label>
                                                            <select class="form-control" name="taginput-choices" id="taginput-choices" multiple>
                                                                <option value="Lead">Lead</option>
                                                                <option value="Partner">Partner</option>
                                                                <option value="Exiting">Exiting</option>
                                                                <option value="Long-term">Long-term</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div>
                                                            <label for="date-field" class="form-label">Created Date</label>
                                                            <input type="date" id="date-field" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" placeholder="Select Date" required />
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                            <div class="modal-footer">
                                                <div class="hstack gap-2 justify-content-end">
                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-success" id="add-btn">Add leads</button>
                                                    <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--end modal-->

                            <!-- Modal -->
                            <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-labelledby="deleteRecordLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                                        </div>
                                        <div class="modal-body p-5 text-center">
                                            <lord-icon src="../../../../external.html?link=https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#405189,secondary:#f06548" style="width:90px;height:90px"></lord-icon>
                                            <div class="mt-4 text-center">
                                                <h4 class="fs-semibold">You are about to delete a lead ?</h4>
                                                <p class="text-muted fs-14 mb-4 pt-1">Deleting your lead will remove all of your information from our database.</p>
                                                <div class="hstack gap-2 justify-content-center remove">

                                                    <button class="btn btn-link link-success fw-medium text-decoration-none" id="deleteRecord-close" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</button>
                                                    <button class="btn btn-danger" id="delete-record">Yes, Delete It!!</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end modal -->


                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                                <div class="offcanvas-header bg-light">
                                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Leads Fliters</h5>
                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <!--end offcanvas-header-->
                                <form action="#" class="d-flex flex-column justify-content-end h-100">
                                    <div class="offcanvas-body">
                                        <div class="mb-4">
                                            <label for="datepicker-range" class="form-label text-muted text-uppercase fw-semibold mb-3">Date</label>
                                            <input type="date" class="form-control" id="datepicker-range" data-provider="flatpickr" data-range="true" placeholder="Select date">
                                        </div>
                                        <div class="mb-4">
                                            <label for="country-select" class="form-label text-muted text-uppercase fw-semibold mb-3">Country</label>
                                            <select class="form-control" data-choices data-choices-multiple-remove="true" name="country-select" id="country-select" multiple>
                                                <option value="">Select country</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Brazil" selected>Brazil</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="France">France</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Russia">Russia</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Syria">Syria</option>
                                                <option value="United Kingdom" selected>United Kingdom</option>
                                                <option value="United States of America">United States of America</option>
                                            </select>
                                        </div>
                                        <div class="mb-4">
                                            <label for="status-select" class="form-label text-muted text-uppercase fw-semibold mb-3">Status</label>
                                            <div class="row g-2">
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label class="form-check-label" for="inlineCheckbox1">New Leads</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">Old Leads</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                                        <label class="form-check-label" for="inlineCheckbox3">Loss Leads</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                                                        <label class="form-check-label" for="inlineCheckbox4">Follow Up</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <label for="leadscore" class="form-label text-muted text-uppercase fw-semibold mb-3">Lead Score</label>
                                            <div class="row g-2 align-items-center">
                                                <div class="col-lg">
                                                    <input type="number" class="form-control" id="leadscore" placeholder="0">
                                                </div>
                                                <div class="col-lg-auto">
                                                    To
                                                </div>
                                                <div class="col-lg">
                                                    <input type="number" class="form-control" id="leadscore" placeholder="0">
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <label for="leads-tags" class="form-label text-muted text-uppercase fw-semibold mb-3">Tags</label>
                                            <div class="row g-3">
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="marketing" value="marketing">
                                                        <label class="form-check-label" for="marketing">Marketing</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="management" value="management">
                                                        <label class="form-check-label" for="management">Management</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="business" value="business">
                                                        <label class="form-check-label" for="business">Business</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="investing" value="investing">
                                                        <label class="form-check-label" for="investing">Investing</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="partner" value="partner">
                                                        <label class="form-check-label" for="partner">Partner</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="lead" value="lead">
                                                        <label class="form-check-label" for="lead">Leads</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="sale" value="sale">
                                                        <label class="form-check-label" for="sale">Sale</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="owner" value="owner">
                                                        <label class="form-check-label" for="owner">Owner</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="banking" value="banking">
                                                        <label class="form-check-label" for="banking">Banking</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="banking" value="banking">
                                                        <label class="form-check-label" for="banking">Exiting</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="banking" value="banking">
                                                        <label class="form-check-label" for="banking">Finance</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="banking" value="banking">
                                                        <label class="form-check-label" for="banking">Fashion</label>
                                                    </div>
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
<!--preloader end-->

<?php include 'includes/lead-footer.php'; ?>
