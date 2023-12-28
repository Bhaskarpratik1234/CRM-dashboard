<!doctype html>
<html lang="en" data-layout="vertical" data-layout-style="default" data-layout-position="fixed" data-topbar="light"
    data-sidebar="dark" data-layout-width="fluid" data-sidebar-size="lg">
    <?php include 'includes/Publishers-Management-leads/head.php'; ?>
<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
    <?php include 'includes/Publishers-Management-leads/header.php'; ?>
    <?php include 'includes/Publishers-Management-leads/sidenav.php'; ?>
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12 mb-3">
                            <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                <div class="flex-grow-1">
                                    <h1 class="fs-28 mb-1 fw-bolder text-uppercase">publishers lists <span class="fs-15 fw-normal text-muted fst-italic">(25,000+ total publishers)</span></h1>
                                </div>
                                <div class="flex-shrink-0">
                                    <button type="button" class="btn btn-success add-btn fs-16 fw-normal" data-bs-toggle="modal" data-bs-target="#exampleModalPopovers"><i class="ri-upload-cloud-2-fill"></i> Import</button>                                    
                                    <button type="button" class="btn btn-secondary fs-16 fw-normal" data-bs-toggle="offcanvas" href="#offcanvasExample"><i class="ri-add-fill"></i> New Company</button>
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
                                    <div class="d-flex align-items-lg-center flex-lg-row flex-column ">
                                        <div class="flex-grow-1">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-sm-6 col-md-8 ">
                                                    <div class="col-xl-8 mb-1">
                                                        <div class="input-group">
                                                            <div class="btn-group">
                                                                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                                                    Publisher</button>
                                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Publisher</a></li>
                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Publisher ID</a></li>
                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Categories</a></li>
                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Country</a></li>
                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Service Type</a></li>
                                                                </ul>
                                                            </div> 
                                                            <div class="search-box g-5" style="margin-right: 10px;">
                                                                <input type="text" class="form-control search"
                                                                    placeholder="Search for...">
                                                                <i class="ri-search-line search-icon"></i>
                                                            </div>
                                                            <button type="button" class="btn btn-light add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i
                                                                 class="ri-filter-3-line align-bottom me-1"></i> </button>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="search-box">
                                                        <input type="text" class="form-control search"
                                                            placeholder="Search for...">
                                                        <i class="ri-search-line search-icon"></i>
                                                    </div> -->
        
                                                </div>
                                                <!-- <div class="col-sm-1">
                                                    <button type="button" class="btn btn-light add-btn" data-bs-toggle="modal"
                                                        id="create-btn" data-bs-target="#showModal"><i
                                                            class="ri-filter-3-line align-bottom me-1"></i> </button>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div class="btn-group">
                                                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                                    Sort By</button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                                </ul>
                                            </div>                                    
                                            <div class="btn-group">
                                                <button class="btn btn-light " type="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                                    Show/Hide Coloumn</button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="formCheck1" checked="">
                                                        <label class="form-check-label fs-14 fw-normal" for="formCheck1">
                                                            Publisher ID
                                                        </label>
                                                    </div></a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="formCheck2" checked="">
                                                        <label class="form-check-labelfs-14 fw-normal" for="formCheck2">
                                                            Publisher Name
                                                        </label>
                                                    </div></a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="formCheck3" checked="">
                                                        <label class="form-check-label fs-14 fw-normal" for="formCheck3">
                                                            E-mail ID
                                                        </label>
                                                    </div></a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="formCheck4" checked="">
                                                        <label class="form-check-label fs-14 fw-normal" for="formCheck4">
                                                            Sites
                                                        </label>
                                                    </div></a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="formCheck5" checked="">
                                                        <label class="form-check-label fs-14 fw-normal" for="formCheck5">
                                                            Status
                                                        </label>
                                                    </div></a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="formCheck6" checked="">
                                                        <label class="form-check-label fs-14 fw-normal" for="formCheck6">
                                                            Categories
                                                        </label>
                                                    </div></a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="formCheck7" checked="">
                                                        <label class="form-check-label fs-14 fw-normal" for="formCheck7">
                                                            Source
                                                        </label>
                                                    </div></a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="formCheck8" checked="">
                                                        <label class="form-check-label fs-14 fw-normal" for="formCheck8">
                                                            Link Insertion
                                                        </label>
                                                    </div></a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="formCheck9" checked="">
                                                        <label class="form-check-label fs-14 fw-normal" for="formCheck9">
                                                            Guest Posting
                                                        </label>
                                                    </div></a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="formCheck10" checked="">
                                                        <label class="form-check-label fs-14 fw-normal" for="formCheck10">
                                                            Grey Niche
                                                        </label>
                                                    </div></a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="formCheck11" checked="">
                                                        <label class="form-check-label fs-14 fw-normal" for="formCheck11">
                                                            Country
                                                        </label>
                                                    </div></a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="formCheck12" checked="">
                                                        <label class="form-check-label fs-14 fw-normal" for="formCheck12">
                                                            Added by
                                                        </label>
                                                    </div></a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="formCheck13" checked="">
                                                        <label class="form-check-label fs-14 fw-normal" for="formCheck13">
                                                            Created on </label>
                                                    </div></a></li>
                                                </ul>
                                            </div>
                                        </div>        
                                    </div>                                  
                                </div>
                                <div class="card-body">
                                    <div>
                                         <!-- Nav tabs -->
                                        <ul class="nav nav-tabs nav-tabs-custom nav-success mb-5" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active All py-3 text-uppercase fs-16 fw-normal" data-bs-toggle="tab" id="All" href="#All1" role="tab" aria-selected="true">
                                                    All     
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link py-3 New text-uppercase fs-16 fw-normal" data-bs-toggle="tab" id="Verified" href="#Verified1" role="tab" aria-selected="false">
                                                    Verified
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link py-3 Pending text-uppercase fs-16 fw-normal" data-bs-toggle="tab" id="Pending" href="#Pending1" role="tab" aria-selected="false">
                                                    Pending verification
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link py-3 Hold text-uppercase fs-16 fw-normal" data-bs-toggle="tab" id="hold" href="#hold1" role="tab" aria-selected="false">
                                                    on hold
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link py-3 Unverified text-uppercase fs-16 fw-normal" data-bs-toggle="tab" id="unverified" href="#unverified1" role="tab" aria-selected="false">
                                                    unverified
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link py-3 Rejected text-uppercase fs-16 fw-normal" data-bs-toggle="tab" id="deleted" href="#deleted1" role="tab" aria-selected="false">
                                                    deleted
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link py-3 Rejected text-uppercase fs-16 fw-normal" data-bs-toggle="tab" id="blacklisted" href="#blacklisted1" role="tab" aria-selected="false">
                                                    blacklisted
                                                </a>
                                            </li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content text-muted">
                                            <div class="tab-pane active show" id="All1" role="tabpanel">
                                                <div class="d-flex">  
                                                    <div class="table-responsive table-card mb-3">
                                                        <table class="table align-middle table-nowrap mb-0" id="customerTable">
                                                            <thead class="table-light">
                                                                <tr class="text-uppercase">
                                                                    <th scope="col" style="width: 25px;">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                                        </div>
                                                                    </th>
                                                                    <th class="" data-sort="id" style="width: 140px;">Id no.</th>
                                                                    <th class="" data-sort="company fs-16 fw-normal">pB. name</th>
                                                                    <th class="" data-sort="designation fs-16 fw-normal">E-mail ID</th>
                                                                    <th class="" data-sort="date fs-16 fw-normal">Sites</th>
                                                                    <th class="" data-sort="contacts fs-16 fw-normal">categories</th>
                                                                    <th class="" data-sort="status fs-16 fw-normal">Status</th>
                                                                    <th class="" data-sort="status fs-16 fw-normal">Source</th>
                                                                    <th class="" data-sort="status fs-16 fw-normal">Li</th>
                                                                    <th class="" data-sort="status fs-16 fw-normal">Gp</th>
                                                                    <th class="" data-sort="status fs-16 fw-normal"></th>
                                                                    <th class="" data-sort="status fs-16 fw-normal">Gn</th>
                                                                    <th class="" data-sort="type fs-16 fw-normal">added by</th>                                                       
                                                                    <th class="" data-sort="city fs-16 fw-normal">country</th>
                                                                    <th class="" data-sort="city fs-16 fw-normal">created on</th>
                                                                    <th class="" data-sort="status fs-16 fw-normal"></th>
                                                                    <th class="" data-sort="city fs-16 fw-normal">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="list form-check-all">
                                                                <tr  class="">
                                                                    <th scope="row">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                                        </div>
                                                                    </th>
                                                                    <td class="id"><a href="#" class="fw-medium link-primary fs-14 fw-normal">#4280</a></td>
                                                                    <td class="company">
                                                                        <div class="d-flex align-items-center">
                                                                            <!-- <div class="flex-shrink-0">
                                                                                <img src="assets/images/brands/slack.png" alt="" class="avatar-xxs rounded-circle image_src object-fit-cover">
                                                                            </div> -->
                                                                            <div class="flex-grow-1 ms-2 fs-14 fw-normal">Kane Brook</div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="designation fs-14 fw-normal"><a href="#">usernam@gmail.com</a></td>
                                                                    <td class="designation fs-14 fw-normal"><a href="#">cleaningbusiness.com</a> <span class="badge bg-light text-body text-capitalize fs-12 fw-normal"><a href="">+3 more</a></span></td>                                                        
                                                                    <td class="status fs-14 fw-normal">
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Lifestyle</span>
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal "data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Business</span>
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Entertainment</span>
                                                                        <span class="badge bg-danger-subtle text-danger text-uppercase"data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="+3">+ 3</span>
                                                                    </td>
                                                                    <td class="status fs-14 fw-normal"><span class="badge bg-danger-subtle text-danger text-capitalize  fw-normal">Verified</span></td>
                                                                    <td class="status fs-14 fw-normal"><span class="badge bg-light text-body text-capitalize  fw-normal">Lead</span></td>
                                                                    <td class="date fs-14 fw-normal"><img src="./assets/images/tick_check_mark_accept_icon.svg" alt=""></td>
                                                                    <td class="contacts fs-14 fw-normal"><img src="./assets/images/tick_check_mark_accept_icon.svg" alt=""></td>
                                                                    <td class="type fs-14 fw-normal"></td>
                                                                    <td class="type fs-14 fw-normal">N/A</td>
                                                                    <td class="type fs-14 fw-normal">Parama Kundu</td>
                                                                    <td class="country fs-14 fw-normal">United States</td>
                                                                    <td class="date fs-14 fw-normal">23 Aug,2023</td>
                                                                    
                                                                    <td>
                                                                        <ul class="list-inline hstack gap-2 mb-0">
                                                                            <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Message">
                                                                                <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                                                                    <i class="ri-mail-line fs-16"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                                                <a href="apps-job-details.html" class="text-primary d-inline-block">
                                                                                    <i class="ri-eye-fill fs-16"></i>
                                                                                </a>
                                                                            </li>  
                                                                        </ul>
                                                                        
                                                                    </td>
                                                                    <td>  
                                                                        <span class="dropdown">                                                      
                                                                            <button class="btn btn-soft-info btn-icon fs-14" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="ri-more-2-fill align-middle"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                                <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-eye-fill fs-16"></i> View Details</a></li>
                                                                                <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom text-muted"></i> Edit Details</a></li>
                                                                                <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#">
                                                                                    <i class="ri-delete-bin-fill align-bottom text-muted drop-bottom"></i> Change Status</a></li>                                                                
                                                                                <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                                    <i class="ri-delete-bin-fill align-bottom text-muted"></i> Delete Publisher</a></li>
                                                                                <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                                    <i class="ri-delete-bin-fill align-bottom text-muted"></i> Delete Publisher</a></li>
                                                                                    
                                                                            </ul>
                                                                    </span>
                                                                </td>
                                                                </tr>
                                                                <tr  class="">
                                                                    <th scope="row">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                                        </div>
                                                                    </th>
                                                                    <td class="id"><a href="#" class="fw-medium link-primary fs-14 fw-normal">#4281</a></td>
                                                                    <td class="company">
                                                                        <div class="d-flex align-items-center">
                                                                            <!-- <div class="flex-shrink-0">
                                                                                <img src="assets/images/brands/slack.png" alt="" class="avatar-xxs rounded-circle image_src object-fit-cover">
                                                                            </div> -->
                                                                            <div class="flex-grow-1 ms-2 fs-14 fw-normal">Kane Brook</div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="designation fs-14 fw-normal"><a href="#">usernam@gmail.com</a></td>
                                                                    <td class="designation fs-14 fw-normal"><a href="#">cleaningbusiness.com</a> <span class="badge bg-light text-body text-capitalize fs-12 fw-normal"><a href="">+3 more</a></span></td>                                                        
                                                                    <td class="status fs-14 fw-normal">
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Lifestyle</span>
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal "data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Business</span>
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Entertainment</span>
                                                                        <span class="badge bg-danger-subtle text-danger text-uppercase"data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="+3">+ 3</span>
                                                                    </td>
                                                                    <td class="status fs-14 fw-normal"><span class="badge bg-danger-subtle text-danger text-capitalize  fw-normal">On Hold</span></td>
                                                                    <td class="status fs-14 fw-normal"><span class="badge bg-light text-body text-capitalize  fw-normal">Lead</span></td>
                                                                    <td class="date fs-14 fw-normal"><img src="./assets/images/tick_check_mark_accept_icon.svg" alt=""></td>
                                                                    <td class="contacts fs-14 fw-normal">N/A</td>
                                                                    <td class="type fs-14 fw-normal"></td>
                                                                    <td class="type fs-14 fw-normal"><img src="./assets/images/tick_check_mark_accept_icon.svg" alt=""></td>
                                                                    <td class="type fs-14 fw-normal">Parama Kundu</td>
                                                                    <td class="country fs-14 fw-normal">United States</td>
                                                                    <td class="date fs-14 fw-normal">23 Aug,2023</td>
                                                                    
                                                                    <td>
                                                                        <ul class="list-inline hstack gap-2 mb-0">
                                                                            <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Message">
                                                                                <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                                                                    <i class="ri-mail-line fs-16"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                                                <a href="apps-job-details.html" class="text-primary d-inline-block">
                                                                                    <i class="ri-eye-fill fs-16"></i>
                                                                                </a>
                                                                            </li>
                                                                            
                                                                            <!-- <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                                                <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                                                    <i class="ri-delete-bin-5-fill fs-16"></i>
                                                                                </a>
                                                                            </li> -->
                                                                        </ul>
                                                                        
                                                                    </td>
                                                                    <td>  <span class="dropdown">                                                      
                                                                        <button class="btn btn-soft-info btn-icon fs-14" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <i class="ri-more-2-fill align-middle"></i>
                                                                        </button>
                                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                            <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom text-muted"></i> Edit</a></li>
                                                                            <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                                <i class="ri-delete-bin-fill align-bottom text-muted"></i> Delete</a></li>
                                                                        </ul>
                                                                    </span></td>
                                                                </tr>
                                                                <tr  class="">
                                                                    <th scope="row">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                                        </div>
                                                                    </th>
                                                                    <td class="id"><a href="#" class="fw-medium link-primary">#4283</a></td>
                                                                    <td class="company">
                                                                        <div class="d-flex align-items-center">
                                                                            <!-- <div class="flex-shrink-0">
                                                                                <img src="assets/images/brands/slack.png" alt="" class="avatar-xxs rounded-circle image_src object-fit-cover">
                                                                            </div> -->
                                                                            <div class="flex-grow-1 ms-2">Kane Brook</div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="designation"><a href="#">usernam@gmail.com</a></td>
                                                                    <td class="designation"><a href="#">cleaningbusiness.com</a> <span class="badge bg-light text-body text-capitalize fs-12 fw-normal"><a href="">+3 more</a></span></td>                                                        
                                                                    <td class="status">
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Lifestyle</span>
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal "data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Business</span>
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Entertainment</span>
                                                                        <span class="badge bg-danger-subtle text-danger text-uppercase"data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="+3">+ 3</span>
                                                                    </td>
                                                                    <td class="status"><span class="badge bg-danger-subtle text-danger text-capitalize  fw-normal">Unverified</span></td>
                                                                    <td class="status"><span class="badge bg-light text-body text-capitalize  fw-normal">Manual</span></td>
                                                                    <td class="date"><img src="./assets/images/tick_check_mark_accept_icon.svg" alt=""></td>
                                                                    <td class="contacts"><img src="./assets/images/tick_check_mark_accept_icon.svg" alt=""></td>
                                                                    <td class="type"></td>
                                                                    <td class="type">N/A</td>
                                                                    <td class="type">Parama Kundu</td>
                                                                    <td class="country">United States</td>
                                                                    <td class="date">23 Aug,2023</td>
                                                                    
                                                                    <td>
                                                                        <ul class="list-inline hstack gap-2 mb-0">
                                                                            <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Message">
                                                                                <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                                                                    <i class="ri-mail-line fs-16"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                                                <a href="apps-job-details.html" class="text-primary d-inline-block">
                                                                                    <i class="ri-eye-fill fs-16"></i>
                                                                                </a>
                                                                            </li>
                                                                            
                                                                            <!-- <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                                                <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                                                    <i class="ri-delete-bin-5-fill fs-16"></i>
                                                                                </a>
                                                                            </li> -->
                                                                        </ul>
                                                                        
                                                                    </td>
                                                                    <td>  <span class="dropdown">                                                      
                                                                        <button class="btn btn-soft-info btn-icon fs-14" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <i class="ri-more-2-fill align-middle"></i>
                                                                        </button>
                                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                            <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom text-muted"></i> Edit</a></li>
                                                                            <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                                <i class="ri-delete-bin-fill align-bottom text-muted"></i> Delete</a></li>
                                                                        </ul>
                                                                    </span></td>
                                                                </tr>
                                                                <tr  class="">
                                                                    <th scope="row">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                                        </div>
                                                                    </th>
                                                                    <td class="id"><a href="#" class="fw-medium link-primary">#4284</a></td>
                                                                    <td class="company">
                                                                        <div class="d-flex align-items-center">
                                                                            <!-- <div class="flex-shrink-0">
                                                                                <img src="assets/images/brands/slack.png" alt="" class="avatar-xxs rounded-circle image_src object-fit-cover">
                                                                            </div> -->
                                                                            <div class="flex-grow-1 ms-2">Kane Brook</div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="designation"><a href="#">usernam@gmail.com</a></td>
                                                                    <td class="designation"><a href="#">cleaningbusiness.com</a> <span class="badge bg-light text-body text-capitalize fs-12 fw-normal"><a href="">+3 more</a></span></td>                                                        
                                                                    <td class="status">
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Lifestyle</span>
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal "data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Business</span>
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Entertainment</span>
                                                                        <span class="badge bg-danger-subtle text-danger text-uppercase"data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="+3">+ 3</span>
                                                                    </td>
                                                                    <td class="status"><span class="badge bg-danger-subtle text-danger text-capitalize  fw-normal">Rejected</span></td>
                                                                    <td class="status"><span class="badge bg-light text-body text-capitalize  fw-normal">Auto</span></td>
                                                                    <td class="date">N/A</td>
                                                                    <td class="contacts"><img src="./assets/images/tick_check_mark_accept_icon.svg" alt=""></td>
                                                                    <td class="type"></td>
                                                                    <td class="type"><img src="./assets/images/tick_check_mark_accept_icon.svg" alt=""></td>
                                                                    <td class="type">Parama Kundu</td>
                                                                    <td class="country">United States</td>
                                                                    <td class="date">23 Aug,2023</td>
                                                                    
                                                                    <td>
                                                                        <ul class="list-inline hstack gap-2 mb-0">
                                                                            <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Message">
                                                                                <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                                                                    <i class="ri-mail-line fs-16"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                                                <a href="apps-job-details.html" class="text-primary d-inline-block">
                                                                                    <i class="ri-eye-fill fs-16"></i>
                                                                                </a>
                                                                            </li>
                                                                            
                                                                            <!-- <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                                                <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                                                    <i class="ri-delete-bin-5-fill fs-16"></i>
                                                                                </a>
                                                                            </li> -->
                                                                        </ul>
                                                                        
                                                                    </td>
                                                                    <td>  <span class="dropdown">                                                      
                                                                        <button class="btn btn-soft-info btn-icon fs-14" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <i class="ri-more-2-fill align-middle"></i>
                                                                        </button>
                                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                            <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom text-muted"></i> Edit</a></li>
                                                                            <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                                <i class="ri-delete-bin-fill align-bottom text-muted"></i> Delete</a></li>
                                                                        </ul>
                                                                    </span></td>
                                                                </tr>
                                                                <tr  class="">
                                                                    <th scope="row">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                                        </div>
                                                                    </th>
                                                                    <td class="id"><a href="#" class="fw-medium link-primary">#4285</a></td>
                                                                    <td class="company">
                                                                        <div class="d-flex align-items-center">
                                                                            <!-- <div class="flex-shrink-0">
                                                                                <img src="assets/images/brands/slack.png" alt="" class="avatar-xxs rounded-circle image_src object-fit-cover">
                                                                            </div> -->
                                                                            <div class="flex-grow-1 ms-2">Kane Brook</div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="designation"><a href="#">usernam@gmail.com</a></td>
                                                                    <td class="designation"><a href="#">cleaningbusiness.com</a> <span class="badge bg-light text-body text-capitalize fs-12 fw-normal"><a href="">+3 more</a></span></td>                                                        
                                                                    <td class="status">
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Lifestyle</span>
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal "data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Business</span>
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Entertainment</span>
                                                                        <span class="badge bg-danger-subtle text-danger text-uppercase"data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="+3">+ 3</span>
                                                                    </td>
                                                                    <td class="status"><span class="badge bg-info-subtle text-info text-capitalize  fw-normal">Pending</span></td>
                                                                    <td class="status"><span class="badge bg-light text-body text-capitalize  fw-normal">Auto</span></td>
                                                                    <td class="date"><img src="./assets/images/tick_check_mark_accept_icon.svg" alt=""></td>
                                                                    <td class="contacts"><img src="./assets/images/tick_check_mark_accept_icon.svg" alt=""></td>
                                                                    <td class="type"></td>
                                                                    <td class="type">N/A</td>
                                                                    <td class="type">Parama Kundu</td>
                                                                    <td class="country">United States</td>
                                                                    <td class="date">23 Aug,2023</td>
                                                                    
                                                                    <td>
                                                                        <ul class="list-inline hstack gap-2 mb-0">
                                                                            <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Message">
                                                                                <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                                                                    <i class="ri-mail-line fs-16"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                                                <a href="apps-job-details.html" class="text-primary d-inline-block">
                                                                                    <i class="ri-eye-fill fs-16"></i>
                                                                                </a>
                                                                            </li>
                                                                            
                                                                            <!-- <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                                                <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                                                    <i class="ri-delete-bin-5-fill fs-16"></i>
                                                                                </a>
                                                                            </li> -->
                                                                        </ul>
                                                                        
                                                                    </td>
                                                                    <td>  <span class="dropdown">                                                      
                                                                        <button class="btn btn-soft-info btn-icon fs-14" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <i class="ri-more-2-fill align-middle"></i>
                                                                        </button>
                                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                            <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom text-muted"></i> Edit</a></li>
                                                                            <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                                <i class="ri-delete-bin-fill align-bottom text-muted"></i> Delete</a></li>
                                                                        </ul>
                                                                    </span></td>
                                                                </tr>
                                                                <tr  class="">
                                                                    <th scope="row">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                                        </div>
                                                                    </th>
                                                                    <td class="id"><a href="#" class="fw-medium link-primary">#4286</a></td>
                                                                    <td class="company">
                                                                        <div class="d-flex align-items-center">
                                                                            <!-- <div class="flex-shrink-0">
                                                                                <img src="assets/images/brands/slack.png" alt="" class="avatar-xxs rounded-circle image_src object-fit-cover">
                                                                            </div> -->
                                                                            <div class="flex-grow-1 ms-2">Kane Brook</div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="designation"><a href="#">usernam@gmail.com</a></td>
                                                                    <td class="designation"><a href="#">cleaningbusiness.com</a> <span class="badge bg-light text-body text-capitalize fs-12 fw-normal"><a href="">+3 more</a></span></td>                                                        
                                                                    <td class="status">
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Lifestyle</span>
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal "data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Business</span>
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Entertainment</span>
                                                                        <span class="badge bg-danger-subtle text-danger text-uppercase"data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="+3">+ 3</span>
                                                                    </td>
                                                                    <td class="status"><span class="badge bg-dark text-capitalize  fw-normal">Blacklisted</span></td>
                                                                    <td class="status"><span class="badge bg-light text-body text-capitalize  fw-normal">Manual</span></td>
                                                                    <td class="date">N/A</td>
                                                                    <td class="contacts"><img src="./assets/images/tick_check_mark_accept_icon.svg" alt=""></td>
                                                                    <td class="type"></td>
                                                                    <td class="type">N/A</td>
                                                                    <td class="type">Parama Kundu</td>
                                                                    <td class="country">United States</td>
                                                                    <td class="date">23 Aug,2023</td>
                                                                    
                                                                    <td>
                                                                        <ul class="list-inline hstack gap-2 mb-0">
                                                                            <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Message">
                                                                                <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                                                                    <i class="ri-mail-line fs-16"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                                                <a href="apps-job-details.html" class="text-primary d-inline-block">
                                                                                    <i class="ri-eye-fill fs-16"></i>
                                                                                </a>
                                                                            </li>
                                                                            
                                                                            <!-- <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                                                <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                                                    <i class="ri-delete-bin-5-fill fs-16"></i>
                                                                                </a>
                                                                            </li> -->
                                                                        </ul>
                                                                        
                                                                    </td>
                                                                    <td>  <span class="dropdown">                                                      
                                                                        <button class="btn btn-soft-info btn-icon fs-14" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <i class="ri-more-2-fill align-middle"></i>
                                                                        </button>
                                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                            <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom text-muted"></i> Edit</a></li>
                                                                            <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                                <i class="ri-delete-bin-fill align-bottom text-muted"></i> Delete</a></li>
                                                                            <!-- <li><a class="dropdown-item" href="#">Mark as Qualified Leads</a></li>
                                                                            <li><a class="dropdown-item" href="#">Remove This Lead</a></li>
                                                                            <li><a class="dropdown-item" href="#">Reset form view to default</a></li> -->
                                                                        </ul>
                                                                    </span></td>
                                                                </tr>
                                                                <tr  class="">
                                                                    <th scope="row">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                                        </div>
                                                                    </th>
                                                                    <td class="id"><a href="#" class="fw-medium link-primary">#4287</a></td>
                                                                    <td class="company">
                                                                        <div class="d-flex align-items-center">
                                                                            <!-- <div class="flex-shrink-0">
                                                                                <img src="assets/images/brands/slack.png" alt="" class="avatar-xxs rounded-circle image_src object-fit-cover">
                                                                            </div> -->
                                                                            <div class="flex-grow-1 ms-2">Kane Brook</div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="designation"><a href="#">usernam@gmail.com</a></td>
                                                                    <td class="designation"><a href="#">cleaningbusiness.com</a> <span class="badge bg-light text-body text-capitalize fs-12 fw-normal"><a href="">+3 more</a></span></td>                                                        
                                                                    <td class="status">
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Lifestyle</span>
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal "data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Business</span>
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Entertainment</span>
                                                                        <span class="badge bg-danger-subtle text-danger text-uppercase"data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="+3">+ 3</span>
                                                                    </td>
                                                                    <td class="status"><span class="badge bg-warning-subtle text-warning text-capitalize  fw-normal">Delete</span></td>
                                                                    <td class="status"><span class="badge bg-light text-body text-capitalize  fw-normal">Auto</span></td>
                                                                    <td class="date"><img src="./assets/images/tick_check_mark_accept_icon.svg" alt=""></td>
                                                                    <td class="contacts"><img src="./assets/images/tick_check_mark_accept_icon.svg" alt=""></td>
                                                                    <td class="type"></td>
                                                                    <td class="type">N/A</td>
                                                                    <td class="type">Parama Kundu</td>
                                                                    <td class="country">United States</td>
                                                                    <td class="date">23 Aug,2023</td>
                                                                    
                                                                    <td>
                                                                        <ul class="list-inline hstack gap-2 mb-0">
                                                                            <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Message">
                                                                                <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                                                                    <i class="ri-mail-line fs-16"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                                                <a href="apps-job-details.html" class="text-primary d-inline-block">
                                                                                    <i class="ri-eye-fill fs-16"></i>
                                                                                </a>
                                                                            </li>
                                                                            
                                                                            <!-- <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                                                <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                                                    <i class="ri-delete-bin-5-fill fs-16"></i>
                                                                                </a>
                                                                            </li> -->
                                                                        </ul>
                                                                        
                                                                    </td>
                                                                    <td>  <span class="dropdown">                                                      
                                                                        <button class="btn btn-soft-info btn-icon fs-14" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <i class="ri-more-2-fill align-middle"></i>
                                                                        </button>
                                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                            <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom text-muted"></i> Edit</a></li>
                                                                            <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                                <i class="ri-delete-bin-fill align-bottom text-muted"></i> Delete</a></li>
                                                                            <!-- <li><a class="dropdown-item" href="#">Mark as Qualified Leads</a></li>
                                                                            <li><a class="dropdown-item" href="#">Remove This Lead</a></li>
                                                                            <li><a class="dropdown-item" href="#">Reset form view to default</a></li> -->
                                                                        </ul>
                                                                    </span></td>
                                                                </tr>
                                                                
                                                                
                                                            </tbody>
                                                        </table>
                                                        <div class="noresult" style="display: none">
                                                            <div class="text-center">
                                                                <lord-icon src="../../../../external.html?link=https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                                                <h5 class="mt-2">Sorry! No Result Found</h5>
                                                                <p class="text-muted mb-0">We've searched more than 150+ contacts We did not find any contacts for you search.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="Verified1" role="tabpanel">
                                                <div class="d-flex">  
                                                    <div class="table-responsive table-card mb-3">
                                                        <table class="table align-middle table-nowrap mb-0" id="customerTable">
                                                            <thead class="table-light">
                                                                <tr class="text-uppercase">
                                                                    <th scope="col" style="width: 25px;">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                                        </div>
                                                                    </th>
                                                                    <th class="" data-sort="id" style="width: 140px;">Id no.</th>
                                                                    <th class="" data-sort="company fs-16 fw-normal">pB. name</th>
                                                                    <th class="" data-sort="designation fs-16 fw-normal">E-mail ID</th>
                                                                    <th class="" data-sort="date fs-16 fw-normal">Sites</th>
                                                                    <th class="" data-sort="contacts fs-16 fw-normal">categories</th>
                                                                    <th class="" data-sort="status fs-16 fw-normal">Status</th>
                                                                    <th class="" data-sort="status fs-16 fw-normal">Source</th>
                                                                    <th class="" data-sort="status fs-16 fw-normal">Li</th>
                                                                    <th class="" data-sort="status fs-16 fw-normal">Gp</th>
                                                                    <th class="" data-sort="status fs-16 fw-normal"></th>
                                                                    <th class="" data-sort="status fs-16 fw-normal">Gn</th>
                                                                    <th class="" data-sort="type fs-16 fw-normal">added by</th>                                                       
                                                                    <th class="" data-sort="city fs-16 fw-normal">country</th>
                                                                    <th class="" data-sort="city fs-16 fw-normal">created on</th>
                                                                    <th class="" data-sort="status fs-16 fw-normal"></th>
                                                                    <th class="" data-sort="city fs-16 fw-normal">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="list form-check-all">
                                                                <tr  class="">
                                                                    <th scope="row">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                                        </div>
                                                                    </th>
                                                                    <td class="id"><a href="#" class="fw-medium link-primary fs-14 fw-normal">#4280</a></td>
                                                                    <td class="company">
                                                                        <div class="d-flex align-items-center">
                                                                            <!-- <div class="flex-shrink-0">
                                                                                <img src="assets/images/brands/slack.png" alt="" class="avatar-xxs rounded-circle image_src object-fit-cover">
                                                                            </div> -->
                                                                            <div class="flex-grow-1 ms-2 fs-14 fw-normal">Kane Brook</div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="designation fs-14 fw-normal"><a href="#">usernam@gmail.com</a></td>
                                                                    <td class="designation fs-14 fw-normal"><a href="#">cleaningbusiness.com</a> <span class="badge bg-light text-body text-capitalize fs-12 fw-normal"><a href="">+3 more</a></span></td>                                                        
                                                                    <td class="status fs-14 fw-normal">
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Lifestyle</span>
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal "data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Business</span>
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Entertainment</span>
                                                                        <span class="badge bg-danger-subtle text-danger text-uppercase"data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="+3">+ 3</span>
                                                                    </td>
                                                                    <td class="status fs-14 fw-normal"><span class="badge bg-danger-subtle text-danger text-capitalize  fw-normal">Verified</span></td>
                                                                    <td class="status fs-14 fw-normal"><span class="badge bg-light text-body text-capitalize  fw-normal">Lead</span></td>
                                                                    <td class="date fs-14 fw-normal"><img src="./assets/images/tick_check_mark_accept_icon.svg" alt=""></td>
                                                                    <td class="contacts fs-14 fw-normal"><img src="./assets/images/tick_check_mark_accept_icon.svg" alt=""></td>
                                                                    <td class="type fs-14 fw-normal"></td>
                                                                    <td class="type fs-14 fw-normal">N/A</td>
                                                                    <td class="type fs-14 fw-normal">Parama Kundu</td>
                                                                    <td class="country fs-14 fw-normal">United States</td>
                                                                    <td class="date fs-14 fw-normal">23 Aug,2023</td>
                                                                    
                                                                    <td>
                                                                        <ul class="list-inline hstack gap-2 mb-0">
                                                                            <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Message">
                                                                                <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                                                                    <i class="ri-mail-line fs-16"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                                                <a href="apps-job-details.html" class="text-primary d-inline-block">
                                                                                    <i class="ri-eye-fill fs-16"></i>
                                                                                </a>
                                                                            </li>  
                                                                        </ul>
                                                                        
                                                                    </td>
                                                                    <td>  
                                                                        <span class="dropdown">                                                      
                                                                            <button class="btn btn-soft-info btn-icon fs-14" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="ri-more-2-fill align-middle"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                                <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-eye-fill fs-16"></i> View Details</a></li>
                                                                                <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom text-muted"></i> Edit Details</a></li>
                                                                                <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#">
                                                                                    <i class="ri-delete-bin-fill align-bottom text-muted drop-bottom"></i> Change Status</a></li>                                                                
                                                                                <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                                    <i class="ri-delete-bin-fill align-bottom text-muted"></i> Delete Publisher</a></li>
                                                                                <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                                    <i class="ri-delete-bin-fill align-bottom text-muted"></i> Delete Publisher</a></li>
                                                                                    
                                                                            </ul>
                                                                    </span>
                                                                </td>
                                                                </tr>
                                                              
                                                                <tr  class="">
                                                                    <th scope="row">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                                        </div>
                                                                    </th>
                                                                    <td class="id"><a href="#" class="fw-medium link-primary">#4283</a></td>
                                                                    <td class="company">
                                                                        <div class="d-flex align-items-center">
                                                                            <!-- <div class="flex-shrink-0">
                                                                                <img src="assets/images/brands/slack.png" alt="" class="avatar-xxs rounded-circle image_src object-fit-cover">
                                                                            </div> -->
                                                                            <div class="flex-grow-1 ms-2">Kane Brook</div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="designation"><a href="#">usernam@gmail.com</a></td>
                                                                    <td class="designation"><a href="#">cleaningbusiness.com</a> <span class="badge bg-light text-body text-capitalize fs-12 fw-normal"><a href="">+3 more</a></span></td>                                                        
                                                                    <td class="status">
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Lifestyle</span>
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal "data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Business</span>
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Entertainment</span>
                                                                        <span class="badge bg-danger-subtle text-danger text-uppercase"data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="+3">+ 3</span>
                                                                    </td>
                                                                    <td class="status"><span class="badge bg-danger-subtle text-danger text-capitalize  fw-normal">Verified</span></td>
                                                                    <td class="status"><span class="badge bg-light text-body text-capitalize  fw-normal">Manual</span></td>
                                                                    <td class="date"><img src="./assets/images/tick_check_mark_accept_icon.svg" alt=""></td>
                                                                    <td class="contacts"><img src="./assets/images/tick_check_mark_accept_icon.svg" alt=""></td>
                                                                    <td class="type"></td>
                                                                    <td class="type">N/A</td>
                                                                    <td class="type">Parama Kundu</td>
                                                                    <td class="country">United States</td>
                                                                    <td class="date">23 Aug,2023</td>
                                                                    
                                                                    <td>
                                                                        <ul class="list-inline hstack gap-2 mb-0">
                                                                            <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Message">
                                                                                <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                                                                    <i class="ri-mail-line fs-16"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                                                <a href="apps-job-details.html" class="text-primary d-inline-block">
                                                                                    <i class="ri-eye-fill fs-16"></i>
                                                                                </a>
                                                                            </li>
                                                                            
                                                                            <!-- <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                                                <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                                                    <i class="ri-delete-bin-5-fill fs-16"></i>
                                                                                </a>
                                                                            </li> -->
                                                                        </ul>
                                                                        
                                                                    </td>
                                                                    <td>  <span class="dropdown">                                                      
                                                                        <button class="btn btn-soft-info btn-icon fs-14" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <i class="ri-more-2-fill align-middle"></i>
                                                                        </button>
                                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                            <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom text-muted"></i> Edit</a></li>
                                                                            <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                                <i class="ri-delete-bin-fill align-bottom text-muted"></i> Delete</a></li>
                                                                        </ul>
                                                                    </span></td>
                                                                </tr>
                                                                <tr  class="">
                                                                    <th scope="row">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                                        </div>
                                                                    </th>
                                                                    <td class="id"><a href="#" class="fw-medium link-primary">#4284</a></td>
                                                                    <td class="company">
                                                                        <div class="d-flex align-items-center">
                                                                            <!-- <div class="flex-shrink-0">
                                                                                <img src="assets/images/brands/slack.png" alt="" class="avatar-xxs rounded-circle image_src object-fit-cover">
                                                                            </div> -->
                                                                            <div class="flex-grow-1 ms-2">Kane Brook</div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="designation"><a href="#">usernam@gmail.com</a></td>
                                                                    <td class="designation"><a href="#">cleaningbusiness.com</a> <span class="badge bg-light text-body text-capitalize fs-12 fw-normal"><a href="">+3 more</a></span></td>                                                        
                                                                    <td class="status">
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Lifestyle</span>
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal "data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Business</span>
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Entertainment</span>
                                                                        <span class="badge bg-danger-subtle text-danger text-uppercase"data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="+3">+ 3</span>
                                                                    </td>
                                                                    <td class="status"><span class="badge bg-danger-subtle text-danger text-capitalize  fw-normal">Rejected</span></td>
                                                                    <td class="status"><span class="badge bg-light text-body text-capitalize  fw-normal">Auto</span></td>
                                                                    <td class="date">N/A</td>
                                                                    <td class="contacts"><img src="./assets/images/tick_check_mark_accept_icon.svg" alt=""></td>
                                                                    <td class="type"></td>
                                                                    <td class="type"><img src="./assets/images/tick_check_mark_accept_icon.svg" alt=""></td>
                                                                    <td class="type">Parama Kundu</td>
                                                                    <td class="country">United States</td>
                                                                    <td class="date">23 Aug,2023</td>
                                                                    
                                                                    <td>
                                                                        <ul class="list-inline hstack gap-2 mb-0">
                                                                            <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Message">
                                                                                <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                                                                    <i class="ri-mail-line fs-16"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                                                <a href="apps-job-details.html" class="text-primary d-inline-block">
                                                                                    <i class="ri-eye-fill fs-16"></i>
                                                                                </a>
                                                                            </li>
                                                                            
                                                                            <!-- <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                                                <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                                                    <i class="ri-delete-bin-5-fill fs-16"></i>
                                                                                </a>
                                                                            </li> -->
                                                                        </ul>
                                                                        
                                                                    </td>
                                                                    <td>  <span class="dropdown">                                                      
                                                                        <button class="btn btn-soft-info btn-icon fs-14" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <i class="ri-more-2-fill align-middle"></i>
                                                                        </button>
                                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                            <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom text-muted"></i> Edit</a></li>
                                                                            <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                                <i class="ri-delete-bin-fill align-bottom text-muted"></i> Delete</a></li>
                                                                        </ul>
                                                                    </span></td>
                                                                </tr>
                                                                <tr  class="">
                                                                    <th scope="row">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                                        </div>
                                                                    </th>
                                                                    <td class="id"><a href="#" class="fw-medium link-primary">#4285</a></td>
                                                                    <td class="company">
                                                                        <div class="d-flex align-items-center">
                                                                            <!-- <div class="flex-shrink-0">
                                                                                <img src="assets/images/brands/slack.png" alt="" class="avatar-xxs rounded-circle image_src object-fit-cover">
                                                                            </div> -->
                                                                            <div class="flex-grow-1 ms-2">Kane Brook</div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="designation"><a href="#">usernam@gmail.com</a></td>
                                                                    <td class="designation"><a href="#">cleaningbusiness.com</a> <span class="badge bg-light text-body text-capitalize fs-12 fw-normal"><a href="">+3 more</a></span></td>                                                        
                                                                    <td class="status">
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Lifestyle</span>
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal "data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Business</span>
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Entertainment</span>
                                                                        <span class="badge bg-danger-subtle text-danger text-uppercase"data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="+3">+ 3</span>
                                                                    </td>
                                                                    <td class="status"><span class="badge bg-info-subtle text-info text-capitalize  fw-normal">Verified</span></td>
                                                                    <td class="status"><span class="badge bg-light text-body text-capitalize  fw-normal">Auto</span></td>
                                                                    <td class="date"><img src="./assets/images/tick_check_mark_accept_icon.svg" alt=""></td>
                                                                    <td class="contacts"><img src="./assets/images/tick_check_mark_accept_icon.svg" alt=""></td>
                                                                    <td class="type"></td>
                                                                    <td class="type">N/A</td>
                                                                    <td class="type">Parama Kundu</td>
                                                                    <td class="country">United States</td>
                                                                    <td class="date">23 Aug,2023</td>
                                                                    
                                                                    <td>
                                                                        <ul class="list-inline hstack gap-2 mb-0">
                                                                            <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Message">
                                                                                <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                                                                    <i class="ri-mail-line fs-16"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                                                <a href="apps-job-details.html" class="text-primary d-inline-block">
                                                                                    <i class="ri-eye-fill fs-16"></i>
                                                                                </a>
                                                                            </li>
                                                                            
                                                                            <!-- <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                                                <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                                                    <i class="ri-delete-bin-5-fill fs-16"></i>
                                                                                </a>
                                                                            </li> -->
                                                                        </ul>
                                                                        
                                                                    </td>
                                                                    <td>  <span class="dropdown">                                                      
                                                                        <button class="btn btn-soft-info btn-icon fs-14" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <i class="ri-more-2-fill align-middle"></i>
                                                                        </button>
                                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                            <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom text-muted"></i> Edit</a></li>
                                                                            <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                                <i class="ri-delete-bin-fill align-bottom text-muted"></i> Delete</a></li>
                                                                        </ul>
                                                                    </span></td>
                                                                </tr>
                                                                
                                                                
                                                            </tbody>
                                                        </table>
                                                        <div class="noresult" style="display: none">
                                                            <div class="text-center">
                                                                <lord-icon src="../../../../external.html?link=https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                                                <h5 class="mt-2">Sorry! No Result Found</h5>
                                                                <p class="text-muted mb-0">We've searched more than 150+ contacts We did not find any contacts for you search.</p>
                                                            </div>
                                                        </div>
                                                    </div>            
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="Pending1" role="tabpanel">
                                                <div class="d-flex">
                                                    <div class="table-responsive table-card mb-3">
                                                        <table class="table align-middle table-nowrap mb-0" id="customerTable">
                                                            <thead class="table-light">
                                                                <tr class="text-uppercase">
                                                                    <th scope="col" style="width: 25px;">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                                        </div>
                                                                    </th>
                                                                    <th class="" data-sort="id" style="width: 140px;">Id no.</th>
                                                                    <th class="" data-sort="company fs-16 fw-normal">pB. name</th>
                                                                    <th class="" data-sort="designation fs-16 fw-normal">E-mail ID</th>
                                                                    <th class="" data-sort="date fs-16 fw-normal">Sites</th>
                                                                    <th class="" data-sort="contacts fs-16 fw-normal">categories</th>
                                                                    <th class="" data-sort="status fs-16 fw-normal">Status</th>
                                                                    <th class="" data-sort="status fs-16 fw-normal">Source</th>
                                                                    <th class="" data-sort="status fs-16 fw-normal">Li</th>
                                                                    <th class="" data-sort="status fs-16 fw-normal">Gp</th>
                                                                    <th class="" data-sort="status fs-16 fw-normal"></th>
                                                                    <th class="" data-sort="status fs-16 fw-normal">Gn</th>
                                                                    <th class="" data-sort="type fs-16 fw-normal">added by</th>                                                       
                                                                    <th class="" data-sort="city fs-16 fw-normal">country</th>
                                                                    <th class="" data-sort="city fs-16 fw-normal">created on</th>
                                                                    <th class="" data-sort="status fs-16 fw-normal"></th>
                                                                    <th class="" data-sort="city fs-16 fw-normal">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="list form-check-all">
                                                                <tr  class="">
                                                                    <th scope="row">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                                        </div>
                                                                    </th>
                                                                    <td class="id"><a href="#" class="fw-medium link-primary fs-14 fw-normal">#4280</a></td>
                                                                    <td class="company">
                                                                        <div class="d-flex align-items-center">
                                                                            <!-- <div class="flex-shrink-0">
                                                                                <img src="assets/images/brands/slack.png" alt="" class="avatar-xxs rounded-circle image_src object-fit-cover">
                                                                            </div> -->
                                                                            <div class="flex-grow-1 ms-2 fs-14 fw-normal">Kane Brook</div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="designation fs-14 fw-normal"><a href="#">usernam@gmail.com</a></td>
                                                                    <td class="designation fs-14 fw-normal"><a href="#">cleaningbusiness.com</a> <span class="badge bg-light text-body text-capitalize fs-12 fw-normal"><a href="">+3 more</a></span></td>                                                        
                                                                    <td class="status fs-14 fw-normal">
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Lifestyle</span>
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal "data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Business</span>
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Entertainment</span>
                                                                        <span class="badge bg-danger-subtle text-danger text-uppercase"data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="+3">+ 3</span>
                                                                    </td>
                                                                    <td class="status"><span class="badge bg-info-subtle text-info text-capitalize  fw-normal">Pending</span></td>
                                                                    <td class="status fs-14 fw-normal"><span class="badge bg-light text-body text-capitalize  fw-normal">Lead</span></td>
                                                                    <td class="date fs-14 fw-normal"><img src="./assets/images/tick_check_mark_accept_icon.svg" alt=""></td>
                                                                    <td class="contacts fs-14 fw-normal"><img src="./assets/images/tick_check_mark_accept_icon.svg" alt=""></td>
                                                                    <td class="type fs-14 fw-normal"></td>
                                                                    <td class="type fs-14 fw-normal">N/A</td>
                                                                    <td class="type fs-14 fw-normal">Parama Kundu</td>
                                                                    <td class="country fs-14 fw-normal">United States</td>
                                                                    <td class="date fs-14 fw-normal">23 Aug,2023</td>
                                                                    
                                                                    <td>
                                                                        <ul class="list-inline hstack gap-2 mb-0">
                                                                            <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Message">
                                                                                <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                                                                    <i class="ri-mail-line fs-16"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                                                <a href="apps-job-details.html" class="text-primary d-inline-block">
                                                                                    <i class="ri-eye-fill fs-16"></i>
                                                                                </a>
                                                                            </li>  
                                                                        </ul>
                                                                        
                                                                    </td>
                                                                    <td>  
                                                                        <span class="dropdown">                                                      
                                                                            <button class="btn btn-soft-info btn-icon fs-14" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="ri-more-2-fill align-middle"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                                <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-eye-fill fs-16"></i> View Details</a></li>
                                                                                <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom text-muted"></i> Edit Details</a></li>
                                                                                <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#">
                                                                                    <i class="ri-delete-bin-fill align-bottom text-muted drop-bottom"></i> Change Status</a></li>                                                                
                                                                                <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                                    <i class="ri-delete-bin-fill align-bottom text-muted"></i> Delete Publisher</a></li>
                                                                                <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                                    <i class="ri-delete-bin-fill align-bottom text-muted"></i> Delete Publisher</a></li>
                                                                                    
                                                                            </ul>
                                                                    </span>
                                                                </td>
                                                                </tr>
                                                              
                                                                <tr  class="">
                                                                    <th scope="row">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                                        </div>
                                                                    </th>
                                                                    <td class="id"><a href="#" class="fw-medium link-primary">#4283</a></td>
                                                                    <td class="company">
                                                                        <div class="d-flex align-items-center">
                                                                            <!-- <div class="flex-shrink-0">
                                                                                <img src="assets/images/brands/slack.png" alt="" class="avatar-xxs rounded-circle image_src object-fit-cover">
                                                                            </div> -->
                                                                            <div class="flex-grow-1 ms-2">Kane Brook</div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="designation"><a href="#">usernam@gmail.com</a></td>
                                                                    <td class="designation"><a href="#">cleaningbusiness.com</a> <span class="badge bg-light text-body text-capitalize fs-12 fw-normal"><a href="">+3 more</a></span></td>                                                        
                                                                    <td class="status">
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Lifestyle</span>
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal "data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Business</span>
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Entertainment</span>
                                                                        <span class="badge bg-danger-subtle text-danger text-uppercase"data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="+3">+ 3</span>
                                                                    </td>
                                                                    <td class="status"><span class="badge bg-info-subtle text-info text-capitalize  fw-normal">Pending</span></td>
                                                                    <td class="status"><span class="badge bg-light text-body text-capitalize  fw-normal">Manual</span></td>
                                                                    <td class="date"><img src="./assets/images/tick_check_mark_accept_icon.svg" alt=""></td>
                                                                    <td class="contacts"><img src="./assets/images/tick_check_mark_accept_icon.svg" alt=""></td>
                                                                    <td class="type"></td>
                                                                    <td class="type">N/A</td>
                                                                    <td class="type">Parama Kundu</td>
                                                                    <td class="country">United States</td>
                                                                    <td class="date">23 Aug,2023</td>
                                                                    
                                                                    <td>
                                                                        <ul class="list-inline hstack gap-2 mb-0">
                                                                            <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Message">
                                                                                <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                                                                    <i class="ri-mail-line fs-16"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                                                <a href="apps-job-details.html" class="text-primary d-inline-block">
                                                                                    <i class="ri-eye-fill fs-16"></i>
                                                                                </a>
                                                                            </li>
                                                                            
                                                                            <!-- <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                                                <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                                                    <i class="ri-delete-bin-5-fill fs-16"></i>
                                                                                </a>
                                                                            </li> -->
                                                                        </ul>
                                                                        
                                                                    </td>
                                                                    <td>  <span class="dropdown">                                                      
                                                                        <button class="btn btn-soft-info btn-icon fs-14" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <i class="ri-more-2-fill align-middle"></i>
                                                                        </button>
                                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                            <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom text-muted"></i> Edit</a></li>
                                                                            <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                                <i class="ri-delete-bin-fill align-bottom text-muted"></i> Delete</a></li>
                                                                        </ul>
                                                                    </span></td>
                                                                </tr>
                                                                <tr  class="">
                                                                    <th scope="row">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                                        </div>
                                                                    </th>
                                                                    <td class="id"><a href="#" class="fw-medium link-primary">#4284</a></td>
                                                                    <td class="company">
                                                                        <div class="d-flex align-items-center">
                                                                            <!-- <div class="flex-shrink-0">
                                                                                <img src="assets/images/brands/slack.png" alt="" class="avatar-xxs rounded-circle image_src object-fit-cover">
                                                                            </div> -->
                                                                            <div class="flex-grow-1 ms-2">Kane Brook</div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="designation"><a href="#">usernam@gmail.com</a></td>
                                                                    <td class="designation"><a href="#">cleaningbusiness.com</a> <span class="badge bg-light text-body text-capitalize fs-12 fw-normal"><a href="">+3 more</a></span></td>                                                        
                                                                    <td class="status">
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Lifestyle</span>
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal "data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Business</span>
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Entertainment</span>
                                                                        <span class="badge bg-danger-subtle text-danger text-uppercase"data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="+3">+ 3</span>
                                                                    </td>
                                                                    <td class="status"><span class="badge bg-info-subtle text-info text-capitalize  fw-normal">Pending</span></td>
                                                                    <td class="status"><span class="badge bg-light text-body text-capitalize  fw-normal">Auto</span></td>
                                                                    <td class="date">N/A</td>
                                                                    <td class="contacts"><img src="./assets/images/tick_check_mark_accept_icon.svg" alt=""></td>
                                                                    <td class="type"></td>
                                                                    <td class="type"><img src="./assets/images/tick_check_mark_accept_icon.svg" alt=""></td>
                                                                    <td class="type">Parama Kundu</td>
                                                                    <td class="country">United States</td>
                                                                    <td class="date">23 Aug,2023</td>
                                                                    
                                                                    <td>
                                                                        <ul class="list-inline hstack gap-2 mb-0">
                                                                            <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Message">
                                                                                <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                                                                    <i class="ri-mail-line fs-16"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                                                <a href="apps-job-details.html" class="text-primary d-inline-block">
                                                                                    <i class="ri-eye-fill fs-16"></i>
                                                                                </a>
                                                                            </li>
                                                                            
                                                                            <!-- <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                                                <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                                                    <i class="ri-delete-bin-5-fill fs-16"></i>
                                                                                </a>
                                                                            </li> -->
                                                                        </ul>
                                                                        
                                                                    </td>
                                                                    <td>  <span class="dropdown">                                                      
                                                                        <button class="btn btn-soft-info btn-icon fs-14" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <i class="ri-more-2-fill align-middle"></i>
                                                                        </button>
                                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                            <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom text-muted"></i> Edit</a></li>
                                                                            <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                                <i class="ri-delete-bin-fill align-bottom text-muted"></i> Delete</a></li>
                                                                        </ul>
                                                                    </span></td>
                                                                </tr>
                                                                <tr  class="">
                                                                    <th scope="row">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                                        </div>
                                                                    </th>
                                                                    <td class="id"><a href="#" class="fw-medium link-primary">#4285</a></td>
                                                                    <td class="company">
                                                                        <div class="d-flex align-items-center">
                                                                            <!-- <div class="flex-shrink-0">
                                                                                <img src="assets/images/brands/slack.png" alt="" class="avatar-xxs rounded-circle image_src object-fit-cover">
                                                                            </div> -->
                                                                            <div class="flex-grow-1 ms-2">Kane Brook</div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="designation"><a href="#">usernam@gmail.com</a></td>
                                                                    <td class="designation"><a href="#">cleaningbusiness.com</a> <span class="badge bg-light text-body text-capitalize fs-12 fw-normal"><a href="">+3 more</a></span></td>                                                        
                                                                    <td class="status">
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Lifestyle</span>
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal "data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Business</span>
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Entertainment</span>
                                                                        <span class="badge bg-danger-subtle text-danger text-uppercase"data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="+3">+ 3</span>
                                                                    </td>
                                                                    <td class="status"><span class="badge bg-info-subtle text-info text-capitalize  fw-normal">Pending</span></td>
                                                                    <td class="status"><span class="badge bg-light text-body text-capitalize  fw-normal">Auto</span></td>
                                                                    <td class="date"><img src="./assets/images/tick_check_mark_accept_icon.svg" alt=""></td>
                                                                    <td class="contacts"><img src="./assets/images/tick_check_mark_accept_icon.svg" alt=""></td>
                                                                    <td class="type"></td>
                                                                    <td class="type">N/A</td>
                                                                    <td class="type">Parama Kundu</td>
                                                                    <td class="country">United States</td>
                                                                    <td class="date">23 Aug,2023</td>
                                                                    
                                                                    <td>
                                                                        <ul class="list-inline hstack gap-2 mb-0">
                                                                            <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Message">
                                                                                <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                                                                    <i class="ri-mail-line fs-16"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                                                <a href="apps-job-details.html" class="text-primary d-inline-block">
                                                                                    <i class="ri-eye-fill fs-16"></i>
                                                                                </a>
                                                                            </li>
                                                                            
                                                                            <!-- <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                                                <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                                                    <i class="ri-delete-bin-5-fill fs-16"></i>
                                                                                </a>
                                                                            </li> -->
                                                                        </ul>
                                                                        
                                                                    </td>
                                                                    <td>  <span class="dropdown">                                                      
                                                                        <button class="btn btn-soft-info btn-icon fs-14" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <i class="ri-more-2-fill align-middle"></i>
                                                                        </button>
                                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                            <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom text-muted"></i> Edit</a></li>
                                                                            <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                                <i class="ri-delete-bin-fill align-bottom text-muted"></i> Delete</a></li>
                                                                        </ul>
                                                                    </span></td>
                                                                </tr>
                                                                
                                                                
                                                            </tbody>
                                                        </table>
                                                        <div class="noresult" style="display: none">
                                                            <div class="text-center">
                                                                <lord-icon src="../../../../external.html?link=https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                                                <h5 class="mt-2">Sorry! No Result Found</h5>
                                                                <p class="text-muted mb-0">We've searched more than 150+ contacts We did not find any contacts for you search.</p>
                                                            </div>
                                                        </div>
                                                    </div>       
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="hold1" role="tabpanel">
                                                <div class="d-flex">
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="unverified1" role="tabpanel">
                                            <div class="d-flex">
                                            </div>
                                            </div>
                                            <div class="tab-pane" id="deleted1" role="tabpanel">
                                                <div class="d-flex">
                                                    <div class="table-responsive table-card mb-3">
                                                        <table class="table align-middle table-nowrap mb-0" id="customerTable">
                                                            <thead class="table-light">
                                                                <tr class="text-uppercase">
                                                                    <th scope="col" style="width: 25px;">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                                        </div>
                                                                    </th>
                                                                    <th class="" data-sort="id" style="width: 140px;">Id no.</th>
                                                                    <th class="" data-sort="company fs-16 fw-normal">pB. name</th>
                                                                    <th class="" data-sort="designation fs-16 fw-normal">E-mail ID</th>
                                                                    <th class="" data-sort="date fs-16 fw-normal">Sites</th>
                                                                    <th class="" data-sort="contacts fs-16 fw-normal">categories</th>
                                                                    <th class="" data-sort="status fs-16 fw-normal">Status</th>
                                                                    <th class="" data-sort="status fs-16 fw-normal">Source</th>
                                                                    <th class="" data-sort="status fs-16 fw-normal">Li</th>
                                                                    <th class="" data-sort="status fs-16 fw-normal">Gp</th>
                                                                    <th class="" data-sort="status fs-16 fw-normal"></th>
                                                                    <th class="" data-sort="status fs-16 fw-normal">Gn</th>
                                                                    <th class="" data-sort="type fs-16 fw-normal">added by</th>                                                       
                                                                    <th class="" data-sort="city fs-16 fw-normal">country</th>
                                                                    <th class="" data-sort="city fs-16 fw-normal">created on</th>
                                                                    <th class="" data-sort="status fs-16 fw-normal"></th>
                                                                    <th class="" data-sort="city fs-16 fw-normal">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="list form-check-all">
                                                                <tr  class="">
                                                                    <th scope="row">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                                        </div>
                                                                    </th>
                                                                    <td class="id"><a href="#" class="fw-medium link-primary fs-14 fw-normal">#4280</a></td>
                                                                    <td class="company">
                                                                        <div class="d-flex align-items-center">
                                                                            <!-- <div class="flex-shrink-0">
                                                                                <img src="assets/images/brands/slack.png" alt="" class="avatar-xxs rounded-circle image_src object-fit-cover">
                                                                            </div> -->
                                                                            <div class="flex-grow-1 ms-2 fs-14 fw-normal">Kane Brook</div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="designation fs-14 fw-normal"><a href="#">usernam@gmail.com</a></td>
                                                                    <td class="designation fs-14 fw-normal"><a href="#">cleaningbusiness.com</a> <span class="badge bg-light text-body text-capitalize fs-12 fw-normal"><a href="">+3 more</a></span></td>                                                        
                                                                    <td class="status fs-14 fw-normal">
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Lifestyle</span>
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal "data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Business</span>
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Entertainment</span>
                                                                        <span class="badge bg-danger-subtle text-danger text-uppercase"data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="+3">+ 3</span>
                                                                    </td>
                                                                    <td class="status"><span class="badge bg-warning-subtle text-warning text-capitalize  fw-normal">Delete</span></td>
                                                                    <td class="status fs-14 fw-normal"><span class="badge bg-light text-body text-capitalize  fw-normal">Lead</span></td>
                                                                    <td class="date fs-14 fw-normal"><img src="./assets/images/tick_check_mark_accept_icon.svg" alt=""></td>
                                                                    <td class="contacts fs-14 fw-normal"><img src="./assets/images/tick_check_mark_accept_icon.svg" alt=""></td>
                                                                    <td class="type fs-14 fw-normal"></td>
                                                                    <td class="type fs-14 fw-normal">N/A</td>
                                                                    <td class="type fs-14 fw-normal">Parama Kundu</td>
                                                                    <td class="country fs-14 fw-normal">United States</td>
                                                                    <td class="date fs-14 fw-normal">23 Aug,2023</td>
                                                                    
                                                                    <td>
                                                                        <ul class="list-inline hstack gap-2 mb-0">
                                                                            <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Message">
                                                                                <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                                                                    <i class="ri-mail-line fs-16"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                                                <a href="apps-job-details.html" class="text-primary d-inline-block">
                                                                                    <i class="ri-eye-fill fs-16"></i>
                                                                                </a>
                                                                            </li>  
                                                                        </ul>
                                                                        
                                                                    </td>
                                                                    <td>  
                                                                        <span class="dropdown">                                                      
                                                                            <button class="btn btn-soft-info btn-icon fs-14" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="ri-more-2-fill align-middle"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                                <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-eye-fill fs-16"></i> View Details</a></li>
                                                                                <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom text-muted"></i> Edit Details</a></li>
                                                                                <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#">
                                                                                    <i class="ri-delete-bin-fill align-bottom text-muted drop-bottom"></i> Change Status</a></li>                                                                
                                                                                <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                                    <i class="ri-delete-bin-fill align-bottom text-muted"></i> Delete Publisher</a></li>
                                                                                <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                                    <i class="ri-delete-bin-fill align-bottom text-muted"></i> Delete Publisher</a></li>
                                                                                    
                                                                            </ul>
                                                                    </span>
                                                                </td>
                                                                </tr>
                                                              
                                                                <tr  class="">
                                                                    <th scope="row">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                                        </div>
                                                                    </th>
                                                                    <td class="id"><a href="#" class="fw-medium link-primary">#4283</a></td>
                                                                    <td class="company">
                                                                        <div class="d-flex align-items-center">
                                                                            <!-- <div class="flex-shrink-0">
                                                                                <img src="assets/images/brands/slack.png" alt="" class="avatar-xxs rounded-circle image_src object-fit-cover">
                                                                            </div> -->
                                                                            <div class="flex-grow-1 ms-2">Kane Brook</div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="designation"><a href="#">usernam@gmail.com</a></td>
                                                                    <td class="designation"><a href="#">cleaningbusiness.com</a> <span class="badge bg-light text-body text-capitalize fs-12 fw-normal"><a href="">+3 more</a></span></td>                                                        
                                                                    <td class="status">
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Lifestyle</span>
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal "data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Business</span>
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Entertainment</span>
                                                                        <span class="badge bg-danger-subtle text-danger text-uppercase"data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="+3">+ 3</span>
                                                                    </td>
                                                                    <td class="status"><span class="badge bg-warning-subtle text-warning text-capitalize  fw-normal">Delete</span></td>
                                                                    <td class="status"><span class="badge bg-light text-body text-capitalize  fw-normal">Manual</span></td>
                                                                    <td class="date"><img src="./assets/images/tick_check_mark_accept_icon.svg" alt=""></td>
                                                                    <td class="contacts"><img src="./assets/images/tick_check_mark_accept_icon.svg" alt=""></td>
                                                                    <td class="type"></td>
                                                                    <td class="type">N/A</td>
                                                                    <td class="type">Parama Kundu</td>
                                                                    <td class="country">United States</td>
                                                                    <td class="date">23 Aug,2023</td>
                                                                    
                                                                    <td>
                                                                        <ul class="list-inline hstack gap-2 mb-0">
                                                                            <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Message">
                                                                                <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                                                                    <i class="ri-mail-line fs-16"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                                                <a href="apps-job-details.html" class="text-primary d-inline-block">
                                                                                    <i class="ri-eye-fill fs-16"></i>
                                                                                </a>
                                                                            </li>
                                                                            
                                                                            <!-- <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                                                <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                                                    <i class="ri-delete-bin-5-fill fs-16"></i>
                                                                                </a>
                                                                            </li> -->
                                                                        </ul>
                                                                        
                                                                    </td>
                                                                    <td>  <span class="dropdown">                                                      
                                                                        <button class="btn btn-soft-info btn-icon fs-14" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <i class="ri-more-2-fill align-middle"></i>
                                                                        </button>
                                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                            <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom text-muted"></i> Edit</a></li>
                                                                            <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                                <i class="ri-delete-bin-fill align-bottom text-muted"></i> Delete</a></li>
                                                                        </ul>
                                                                    </span></td>
                                                                </tr>
                                                                <tr  class="">
                                                                    <th scope="row">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                                        </div>
                                                                    </th>
                                                                    <td class="id"><a href="#" class="fw-medium link-primary">#4284</a></td>
                                                                    <td class="company">
                                                                        <div class="d-flex align-items-center">
                                                                            <!-- <div class="flex-shrink-0">
                                                                                <img src="assets/images/brands/slack.png" alt="" class="avatar-xxs rounded-circle image_src object-fit-cover">
                                                                            </div> -->
                                                                            <div class="flex-grow-1 ms-2">Kane Brook</div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="designation"><a href="#">usernam@gmail.com</a></td>
                                                                    <td class="designation"><a href="#">cleaningbusiness.com</a> <span class="badge bg-light text-body text-capitalize fs-12 fw-normal"><a href="">+3 more</a></span></td>                                                        
                                                                    <td class="status">
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Lifestyle</span>
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal "data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Business</span>
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Entertainment</span>
                                                                        <span class="badge bg-danger-subtle text-danger text-uppercase"data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="+3">+ 3</span>
                                                                    </td>
                                                                    <td class="status"><span class="badge bg-warning-subtle text-warning text-capitalize  fw-normal">Delete</span></td>
                                                                    <td class="status"><span class="badge bg-light text-body text-capitalize  fw-normal">Auto</span></td>
                                                                    <td class="date">N/A</td>
                                                                    <td class="contacts"><img src="./assets/images/tick_check_mark_accept_icon.svg" alt=""></td>
                                                                    <td class="type"></td>
                                                                    <td class="type"><img src="./assets/images/tick_check_mark_accept_icon.svg" alt=""></td>
                                                                    <td class="type">Parama Kundu</td>
                                                                    <td class="country">United States</td>
                                                                    <td class="date">23 Aug,2023</td>
                                                                    
                                                                    <td>
                                                                        <ul class="list-inline hstack gap-2 mb-0">
                                                                            <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Message">
                                                                                <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                                                                    <i class="ri-mail-line fs-16"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                                                <a href="apps-job-details.html" class="text-primary d-inline-block">
                                                                                    <i class="ri-eye-fill fs-16"></i>
                                                                                </a>
                                                                            </li>
                                                                            
                                                                            <!-- <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                                                <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                                                    <i class="ri-delete-bin-5-fill fs-16"></i>
                                                                                </a>
                                                                            </li> -->
                                                                        </ul>
                                                                        
                                                                    </td>
                                                                    <td>  <span class="dropdown">                                                      
                                                                        <button class="btn btn-soft-info btn-icon fs-14" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <i class="ri-more-2-fill align-middle"></i>
                                                                        </button>
                                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                            <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom text-muted"></i> Edit</a></li>
                                                                            <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                                <i class="ri-delete-bin-fill align-bottom text-muted"></i> Delete</a></li>
                                                                        </ul>
                                                                    </span></td>
                                                                </tr>
                                                                <tr  class="">
                                                                    <th scope="row">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                                        </div>
                                                                    </th>
                                                                    <td class="id"><a href="#" class="fw-medium link-primary">#4285</a></td>
                                                                    <td class="company">
                                                                        <div class="d-flex align-items-center">
                                                                            <!-- <div class="flex-shrink-0">
                                                                                <img src="assets/images/brands/slack.png" alt="" class="avatar-xxs rounded-circle image_src object-fit-cover">
                                                                            </div> -->
                                                                            <div class="flex-grow-1 ms-2">Kane Brook</div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="designation"><a href="#">usernam@gmail.com</a></td>
                                                                    <td class="designation"><a href="#">cleaningbusiness.com</a> <span class="badge bg-light text-body text-capitalize fs-12 fw-normal"><a href="">+3 more</a></span></td>                                                        
                                                                    <td class="status">
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Lifestyle</span>
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal "data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Business</span>
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Entertainment</span>
                                                                        <span class="badge bg-danger-subtle text-danger text-uppercase"data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="+3">+ 3</span>
                                                                    </td>
                                                                    <td class="status"><span class="badge bg-warning-subtle text-warning text-capitalize  fw-normal">Delete</span></td>
                                                                    <td class="status"><span class="badge bg-light text-body text-capitalize  fw-normal">Auto</span></td>
                                                                    <td class="date"><img src="./assets/images/tick_check_mark_accept_icon.svg" alt=""></td>
                                                                    <td class="contacts"><img src="./assets/images/tick_check_mark_accept_icon.svg" alt=""></td>
                                                                    <td class="type"></td>
                                                                    <td class="type">N/A</td>
                                                                    <td class="type">Parama Kundu</td>
                                                                    <td class="country">United States</td>
                                                                    <td class="date">23 Aug,2023</td>
                                                                    
                                                                    <td>
                                                                        <ul class="list-inline hstack gap-2 mb-0">
                                                                            <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Message">
                                                                                <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                                                                    <i class="ri-mail-line fs-16"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                                                <a href="apps-job-details.html" class="text-primary d-inline-block">
                                                                                    <i class="ri-eye-fill fs-16"></i>
                                                                                </a>
                                                                            </li>
                                                                            
                                                                            <!-- <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                                                <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                                                    <i class="ri-delete-bin-5-fill fs-16"></i>
                                                                                </a>
                                                                            </li> -->
                                                                        </ul>
                                                                        
                                                                    </td>
                                                                    <td>  <span class="dropdown">                                                      
                                                                        <button class="btn btn-soft-info btn-icon fs-14" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <i class="ri-more-2-fill align-middle"></i>
                                                                        </button>
                                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                            <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom text-muted"></i> Edit</a></li>
                                                                            <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                                <i class="ri-delete-bin-fill align-bottom text-muted"></i> Delete</a></li>
                                                                        </ul>
                                                                    </span></td>
                                                                </tr>
                                                                
                                                                
                                                            </tbody>
                                                        </table>
                                                        <div class="noresult" style="display: none">
                                                            <div class="text-center">
                                                                <lord-icon src="../../../../external.html?link=https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                                                <h5 class="mt-2">Sorry! No Result Found</h5>
                                                                <p class="text-muted mb-0">We've searched more than 150+ contacts We did not find any contacts for you search.</p>
                                                            </div>
                                                        </div>
                                                    </div>  
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="blacklisted1" role="tabpanel">
                                                <div class="d-flex">
                                                    <div class="table-responsive table-card mb-3">
                                                        <table class="table align-middle table-nowrap mb-0" id="customerTable">
                                                            <thead class="table-light">
                                                                <tr class="text-uppercase">
                                                                    <th scope="col" style="width: 25px;">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                                        </div>
                                                                    </th>
                                                                    <th class="" data-sort="id" style="width: 140px;">Id no.</th>
                                                                    <th class="" data-sort="company fs-16 fw-normal">pB. name</th>
                                                                    <th class="" data-sort="designation fs-16 fw-normal">E-mail ID</th>
                                                                    <th class="" data-sort="date fs-16 fw-normal">Sites</th>
                                                                    <th class="" data-sort="contacts fs-16 fw-normal">categories</th>
                                                                    <th class="" data-sort="status fs-16 fw-normal">Status</th>
                                                                    <th class="" data-sort="status fs-16 fw-normal">Source</th>
                                                                    <th class="" data-sort="status fs-16 fw-normal">Li</th>
                                                                    <th class="" data-sort="status fs-16 fw-normal">Gp</th>
                                                                    <th class="" data-sort="status fs-16 fw-normal"></th>
                                                                    <th class="" data-sort="status fs-16 fw-normal">Gn</th>
                                                                    <th class="" data-sort="type fs-16 fw-normal">added by</th>                                                       
                                                                    <th class="" data-sort="city fs-16 fw-normal">country</th>
                                                                    <th class="" data-sort="city fs-16 fw-normal">created on</th>
                                                                    <th class="" data-sort="status fs-16 fw-normal"></th>
                                                                    <th class="" data-sort="city fs-16 fw-normal">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="list form-check-all">
                                                                <tr  class="">
                                                                    <th scope="row">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                                        </div>
                                                                    </th>
                                                                    <td class="id"><a href="#" class="fw-medium link-primary fs-14 fw-normal">#4280</a></td>
                                                                    <td class="company">
                                                                        <div class="d-flex align-items-center">
                                                                            <!-- <div class="flex-shrink-0">
                                                                                <img src="assets/images/brands/slack.png" alt="" class="avatar-xxs rounded-circle image_src object-fit-cover">
                                                                            </div> -->
                                                                            <div class="flex-grow-1 ms-2 fs-14 fw-normal">Kane Brook</div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="designation fs-14 fw-normal"><a href="#">usernam@gmail.com</a></td>
                                                                    <td class="designation fs-14 fw-normal"><a href="#">cleaningbusiness.com</a> <span class="badge bg-light text-body text-capitalize fs-12 fw-normal"><a href="">+3 more</a></span></td>                                                        
                                                                    <td class="status fs-14 fw-normal">
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Lifestyle</span>
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal "data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Business</span>
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Entertainment</span>
                                                                        <span class="badge bg-danger-subtle text-danger text-uppercase"data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="+3">+ 3</span>
                                                                    </td>
                                                                    <td class="status"><span class="badge bg-dark text-capitalize  fw-normal">Blacklisted</span></td>
                                                                    <td class="status fs-14 fw-normal"><span class="badge bg-light text-body text-capitalize  fw-normal">Lead</span></td>
                                                                    <td class="date fs-14 fw-normal"><img src="./assets/images/tick_check_mark_accept_icon.svg" alt=""></td>
                                                                    <td class="contacts fs-14 fw-normal"><img src="./assets/images/tick_check_mark_accept_icon.svg" alt=""></td>
                                                                    <td class="type fs-14 fw-normal"></td>
                                                                    <td class="type fs-14 fw-normal">N/A</td>
                                                                    <td class="type fs-14 fw-normal">Parama Kundu</td>
                                                                    <td class="country fs-14 fw-normal">United States</td>
                                                                    <td class="date fs-14 fw-normal">23 Aug,2023</td>
                                                                    
                                                                    <td>
                                                                        <ul class="list-inline hstack gap-2 mb-0">
                                                                            <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Message">
                                                                                <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                                                                    <i class="ri-mail-line fs-16"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                                                <a href="apps-job-details.html" class="text-primary d-inline-block">
                                                                                    <i class="ri-eye-fill fs-16"></i>
                                                                                </a>
                                                                            </li>  
                                                                        </ul>
                                                                        
                                                                    </td>
                                                                    <td>  
                                                                        <span class="dropdown">                                                      
                                                                            <button class="btn btn-soft-info btn-icon fs-14" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="ri-more-2-fill align-middle"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                                <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-eye-fill fs-16"></i> View Details</a></li>
                                                                                <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom text-muted"></i> Edit Details</a></li>
                                                                                <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#">
                                                                                    <i class="ri-delete-bin-fill align-bottom text-muted drop-bottom"></i> Change Status</a></li>                                                                
                                                                                <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                                    <i class="ri-delete-bin-fill align-bottom text-muted"></i> Delete Publisher</a></li>
                                                                                <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                                    <i class="ri-delete-bin-fill align-bottom text-muted"></i> Delete Publisher</a></li>
                                                                                    
                                                                            </ul>
                                                                    </span>
                                                                </td>
                                                                </tr>
                                                              
                                                                <tr  class="">
                                                                    <th scope="row">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                                        </div>
                                                                    </th>
                                                                    <td class="id"><a href="#" class="fw-medium link-primary">#4283</a></td>
                                                                    <td class="company">
                                                                        <div class="d-flex align-items-center">
                                                                            <!-- <div class="flex-shrink-0">
                                                                                <img src="assets/images/brands/slack.png" alt="" class="avatar-xxs rounded-circle image_src object-fit-cover">
                                                                            </div> -->
                                                                            <div class="flex-grow-1 ms-2">Kane Brook</div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="designation"><a href="#">usernam@gmail.com</a></td>
                                                                    <td class="designation"><a href="#">cleaningbusiness.com</a> <span class="badge bg-light text-body text-capitalize fs-12 fw-normal"><a href="">+3 more</a></span></td>                                                        
                                                                    <td class="status">
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Lifestyle</span>
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal "data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Business</span>
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Entertainment</span>
                                                                        <span class="badge bg-danger-subtle text-danger text-uppercase"data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="+3">+ 3</span>
                                                                    </td>
                                                                    <td class="status"><span class="badge bg-dark text-capitalize  fw-normal">Blacklisted</span></td>
                                                                    <td class="status"><span class="badge bg-light text-body text-capitalize  fw-normal">Manual</span></td>
                                                                    <td class="date"><img src="./assets/images/tick_check_mark_accept_icon.svg" alt=""></td>
                                                                    <td class="contacts"><img src="./assets/images/tick_check_mark_accept_icon.svg" alt=""></td>
                                                                    <td class="type"></td>
                                                                    <td class="type">N/A</td>
                                                                    <td class="type">Parama Kundu</td>
                                                                    <td class="country">United States</td>
                                                                    <td class="date">23 Aug,2023</td>
                                                                    
                                                                    <td>
                                                                        <ul class="list-inline hstack gap-2 mb-0">
                                                                            <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Message">
                                                                                <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                                                                    <i class="ri-mail-line fs-16"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                                                <a href="apps-job-details.html" class="text-primary d-inline-block">
                                                                                    <i class="ri-eye-fill fs-16"></i>
                                                                                </a>
                                                                            </li>
                                                                            
                                                                            <!-- <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                                                <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                                                    <i class="ri-delete-bin-5-fill fs-16"></i>
                                                                                </a>
                                                                            </li> -->
                                                                        </ul>
                                                                        
                                                                    </td>
                                                                    <td>  <span class="dropdown">                                                      
                                                                        <button class="btn btn-soft-info btn-icon fs-14" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <i class="ri-more-2-fill align-middle"></i>
                                                                        </button>
                                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                            <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom text-muted"></i> Edit</a></li>
                                                                            <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                                <i class="ri-delete-bin-fill align-bottom text-muted"></i> Delete</a></li>
                                                                        </ul>
                                                                    </span></td>
                                                                </tr>
                                                                <tr  class="">
                                                                    <th scope="row">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                                        </div>
                                                                    </th>
                                                                    <td class="id"><a href="#" class="fw-medium link-primary">#4284</a></td>
                                                                    <td class="company">
                                                                        <div class="d-flex align-items-center">
                                                                            <!-- <div class="flex-shrink-0">
                                                                                <img src="assets/images/brands/slack.png" alt="" class="avatar-xxs rounded-circle image_src object-fit-cover">
                                                                            </div> -->
                                                                            <div class="flex-grow-1 ms-2">Kane Brook</div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="designation"><a href="#">usernam@gmail.com</a></td>
                                                                    <td class="designation"><a href="#">cleaningbusiness.com</a> <span class="badge bg-light text-body text-capitalize fs-12 fw-normal"><a href="">+3 more</a></span></td>                                                        
                                                                    <td class="status">
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Lifestyle</span>
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal "data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Business</span>
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Entertainment</span>
                                                                        <span class="badge bg-danger-subtle text-danger text-uppercase"data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="+3">+ 3</span>
                                                                    </td>
                                                                    <td class="status"><span class="badge bg-dark text-capitalize  fw-normal">Blacklisted</span></td>
                                                                    <td class="status"><span class="badge bg-light text-body text-capitalize  fw-normal">Auto</span></td>
                                                                    <td class="date">N/A</td>
                                                                    <td class="contacts"><img src="./assets/images/tick_check_mark_accept_icon.svg" alt=""></td>
                                                                    <td class="type"></td>
                                                                    <td class="type"><img src="./assets/images/tick_check_mark_accept_icon.svg" alt=""></td>
                                                                    <td class="type">Parama Kundu</td>
                                                                    <td class="country">United States</td>
                                                                    <td class="date">23 Aug,2023</td>
                                                                    
                                                                    <td>
                                                                        <ul class="list-inline hstack gap-2 mb-0">
                                                                            <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Message">
                                                                                <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                                                                    <i class="ri-mail-line fs-16"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                                                <a href="apps-job-details.html" class="text-primary d-inline-block">
                                                                                    <i class="ri-eye-fill fs-16"></i>
                                                                                </a>
                                                                            </li>
                                                                            
                                                                            <!-- <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                                                <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                                                    <i class="ri-delete-bin-5-fill fs-16"></i>
                                                                                </a>
                                                                            </li> -->
                                                                        </ul>
                                                                        
                                                                    </td>
                                                                    <td>  <span class="dropdown">                                                      
                                                                        <button class="btn btn-soft-info btn-icon fs-14" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <i class="ri-more-2-fill align-middle"></i>
                                                                        </button>
                                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                            <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom text-muted"></i> Edit</a></li>
                                                                            <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                                <i class="ri-delete-bin-fill align-bottom text-muted"></i> Delete</a></li>
                                                                        </ul>
                                                                    </span></td>
                                                                </tr>
                                                                <tr  class="">
                                                                    <th scope="row">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                                        </div>
                                                                    </th>
                                                                    <td class="id"><a href="#" class="fw-medium link-primary">#4285</a></td>
                                                                    <td class="company">
                                                                        <div class="d-flex align-items-center">
                                                                            <!-- <div class="flex-shrink-0">
                                                                                <img src="assets/images/brands/slack.png" alt="" class="avatar-xxs rounded-circle image_src object-fit-cover">
                                                                            </div> -->
                                                                            <div class="flex-grow-1 ms-2">Kane Brook</div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="designation"><a href="#">usernam@gmail.com</a></td>
                                                                    <td class="designation"><a href="#">cleaningbusiness.com</a> <span class="badge bg-light text-body text-capitalize fs-12 fw-normal"><a href="">+3 more</a></span></td>                                                        
                                                                    <td class="status">
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Lifestyle</span>
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal "data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Business</span>
                                                                        <span class="badge bg-light text-body text-uppercase  fw-normal" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Finance, Technology, Health">Entertainment</span>
                                                                        <span class="badge bg-danger-subtle text-danger text-uppercase"data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="+3">+ 3</span>
                                                                    </td>
                                                                    <td class="status"><span class="badge bg-dark text-capitalize  fw-normal">Blacklisted</span></td>
                                                                    <td class="status"><span class="badge bg-light text-body text-capitalize  fw-normal">Auto</span></td>
                                                                    <td class="date"><img src="./assets/images/tick_check_mark_accept_icon.svg" alt=""></td>
                                                                    <td class="contacts"><img src="./assets/images/tick_check_mark_accept_icon.svg" alt=""></td>
                                                                    <td class="type"></td>
                                                                    <td class="type">N/A</td>
                                                                    <td class="type">Parama Kundu</td>
                                                                    <td class="country">United States</td>
                                                                    <td class="date">23 Aug,2023</td>
                                                                    
                                                                    <td>
                                                                        <ul class="list-inline hstack gap-2 mb-0">
                                                                            <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Message">
                                                                                <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                                                                    <i class="ri-mail-line fs-16"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                                                <a href="apps-job-details.html" class="text-primary d-inline-block">
                                                                                    <i class="ri-eye-fill fs-16"></i>
                                                                                </a>
                                                                            </li>
                                                                            
                                                                            <!-- <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                                                <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                                                    <i class="ri-delete-bin-5-fill fs-16"></i>
                                                                                </a>
                                                                            </li> -->
                                                                        </ul>
                                                                        
                                                                    </td>
                                                                    <td>  <span class="dropdown">                                                      
                                                                        <button class="btn btn-soft-info btn-icon fs-14" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <i class="ri-more-2-fill align-middle"></i>
                                                                        </button>
                                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                            <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom text-muted"></i> Edit</a></li>
                                                                            <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                                <i class="ri-delete-bin-fill align-bottom text-muted"></i> Delete</a></li>
                                                                        </ul>
                                                                    </span></td>
                                                                </tr>
                                                                
                                                                
                                                            </tbody>
                                                        </table>
                                                        <div class="noresult" style="display: none">
                                                            <div class="text-center">
                                                                <lord-icon src="../../../../external.html?link=https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                                                <h5 class="mt-2">Sorry! No Result Found</h5>
                                                                <p class="text-muted mb-0">We've searched more than 150+ contacts We did not find any contacts for you search.</p>
                                                            </div>
                                                        </div>
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
                                        <div class="align-items-center mt-4 pt-2 justify-content-between row text-center text-sm-start">
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
                                    </div>


                                    </div>
                                <!--Company Filters model Start--->
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

                                                                        </div>

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
                                    <div class="modal fade" id="exampleModalPopovers" tabindex="-1"
                                        aria-labelledby="exampleModalPopoversLabel" aria-modal="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">                                                    
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <h1 class="fs-24 fw-medium mt-0 text-uppercase text-center">IMPORT  Company</h1>
                                                   
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="card">
                                                              
                                                                <div class="cardbody">                                                                    
                                                                    <div>
                                                                        <h5 class="fs-18 fw-normal mb-3">Upload Files
                                                                        </h5> 
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
                                                    <lord-icon
                                                        src="../../../../external.html?link=https://cdn.lordicon.com/gsqxdxog.json"
                                                        trigger="loop" colors="primary:#405189,secondary:#f06548"
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

                                    <!----New Publishers offcanvas------>
                                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample"
                                        aria-labelledby="offcanvasExampleLabel">
                                        <div class="offcanvas-header bg-light">
                                            <h5 class="offcanvas-title fs-24 fw-medium text-uppercase" id="offcanvasExampleLabel">
                                                add publishers</h5>
                                            <button type="button" class="btn-close text-reset"
                                                data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <!--end offcanvas-header-->
                                        <form action="#" class="d-flex flex-column justify-content-end h-100">
                                            <h6 class="offcanvas-title mt-3 fs-16 fw-medium mt-5" id="offcanvasExampleLabel"
                                                style="margin: 14px !important; color: var(--neutrals-1, #121212); font-family: DM Sans;  line-height: 120%;   text-transform: uppercase;">
                                                Basic Details</h6>
                                            <div class="offcanvas-body">
                                                <div class="row">
                                                    <div class="col-12 ">
                                                        <div class="mb-4">
                                                            <label for="nameInput"
                                                                class="form-label text-muted text-capitalize fs-16 fw-normal mb-3">
                                                                Publisher Name</label>
                                                            <input type="text" class="form-control" id="nameInput" placeholder="Publisher Name" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 ">
                                                        <div class="mb-4">
                                                            <label for="nameInput"
                                                                class="form-label text-muted text-capitalize fs-16 fw-normal mb-3">
                                                                E-mail ID</label>
                                                            <input type="email" class="form-control" id="nameInput"
                                                                placeholder=" E-mail ID " value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-6 mb-4">
                                                        <div class="mb-4">
                                                            <h5 class=" mt-3 fs-16 fw-medium mt-5" 
                                                            style="margin: 14px !important; color: var(--neutrals-1, #121212); font-family: DM Sans;  line-height: 120%;   text-transform: uppercase;">
                                                            Publisher sites</h5>
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="col-6 justify-content-end">
                                                        <div class="mb-4">
                                                            <a href="http://"> <h5 class=" mt-3 fs-16 fw-medium mt-5" 
                                                                style="margin: 14px !important; color:  #003ef8 !important; font-family: DM Sans;  line-height: 120%;   text-transform:lowercase;">
                                                                + add new site</h5></a>
                                                        </div>
                                                    </div>
                                                    

                                                   

                                                </div>
                                            </div>
                                            <!--end offcanvas-body-->
                                            <!-- <div class="offcanvas-footer border-top p-3 text-center hstack gap-2">
                                                <button class="btn btn-light w-100">Clear Filter</button>
                                                <button type="submit" class="btn btn-success w-100">Filters</button>
                                            </div> -->
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
<!-- ============================================================== -->
<!-- End right Content here -->
<!-- ============================================================== -->
<?php include 'includes/Publishers-Management-leads/footer.php'; ?>
