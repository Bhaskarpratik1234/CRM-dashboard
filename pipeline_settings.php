<!doctype html>
<html lang="en" data-layout="vertical" data-layout-style="default" data-layout-position="fixed" data-topbar="light"
    data-sidebar="dark" data-layout-width="fluid" data-sidebar-size="lg">
    <?php include 'includes/settings/pipeline_settings-head.php'; ?>
<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
    <?php include 'includes/settings/pipeline_settings-header.php'; ?>
    <?php include 'includes/settings/pipeline_settings-sidenav.php'; ?>
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

<div class="page-content">
    <div class="container-fluid">
         <div class="row mb-3 pb-1">
            <div class="col-12">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        <li class="breadcrumb-item active">Settings</li>
                        <li class="breadcrumb-item active">Pipeline settings</li>
                    </ol>
                </div>

                <!-- end card header -->
            </div>
            <!--end col-->
        </div>
        <!-- start page title -->
            <div class="row">
                <div class="col-12 mb-0">
                    <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                        <div class="flex-grow-1">
                            <ul class="nav nav-tabs nav-border-top nav-border-top-primarys mb-3" role="tablist">
                                    <li class="nav-item">
                                    <a class="nav-link active fs-14 fw-normal" data-bs-toggle="tab" href="#nav-border-top-User" role="tab" aria-selected="true">
                                        Business unit 1
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fs-14 fw-normal" data-bs-toggle="tab" href="#nav-border-top-Teams" role="tab" aria-selected="false">
                                        Business unit 2
                                    </a>
                                </li>
                            </ul>                                    
                        </div>
                        <div class="flex-shrink-0">
                            <button type="button" class="btn btn-secondary waves-effect waves-light fs-16 fw-normal" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg"><i class="ri-add-fill"></i>
                            Add pipeline</button>
                                <!--  Large modal example -->
                            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                            <h5 class="modal-title fs-24 fw-normal" id="myLargeModalLabel">Add pipeline</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="#" class="form-steps" autocomplete="off">
                                                <!-- <div class="text-center pt-3 pb-4 mb-1">
                                                    <h5>Signup Your Account</h5>
                                                </div> -->
                                                <div id="custom-progress-bar" class="progress-nav mb-4">
                                                    <div class="progress" style="height: 1px;">
                                                        <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>

                                                    <ul class="nav nav-pills progress-bar-tab custom-nav" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link rounded-pill bg-blue active" data-progressbar="custom-progress-bar" id="pills-gen-info-tab" data-bs-toggle="pill" data-bs-target="#pills-gen-info" type="button" role="tab" aria-controls="pills-gen-info" aria-selected="true">1 </button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link rounded-pill" data-progressbar="custom-progress-bar" id="pills-info-desc-tab" data-bs-toggle="pill" data-bs-target="#pills-info-desc" type="button" role="tab" aria-controls="pills-info-desc" aria-selected="false">2</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link rounded-pill" data-progressbar="custom-progress-bar" id="pills-success-tab" data-bs-toggle="pill" data-bs-target="#pills-success" type="button" role="tab" aria-controls="pills-success" aria-selected="false">3</button>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="tab-content">
                                                    <div class="tab-pane fade show active" id="pills-gen-info" role="tabpanel" aria-labelledby="pills-gen-info-tab">
                                                       
                                                        <div>
                                                            <!-- <div class="mb-4">
                                                                <div>
                                                                    <h5 class="mb-1">General Information</h5>
                                                                    <p class="text-muted">Fill all Information as below</p>
                                                                </div>
                                                            </div> -->
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label fs-18 fw-normal" for="gen-info-email-input">Pipeline name</label>
                                                                        <input type="text" class="form-control fs-14 fw-normal" id="gen-info-email-input" placeholder="Pipeline name" required >
                                                                        <div class="invalid-feedback">Please enter a Pipeline name</div>
                                                                 </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label fs-18 fw-normal" for="gen-info-username-input">Related to</label>
                                                                        <select class="form-select mb-3" aria-label="Default select example">
                                                                            <option selected class="fs-14 fw-normal">Lead, deal or ticket</option>
                                                                            <option value="1" class="fs-14 fw-normal">Lead</option>
                                                                            <option value="2" class="fs-14 fw-normal">Deal</option>
                                                                            <option value="3" class="fs-14 fw-normal">Order</option>
                                                                            <option value="4" class="fs-14 fw-normal">Support</option>
                                                                        </select>
                                                                </div>
                                                            </div>
                                                            </div>
                                                          <div class="col-xl-6 mb-2">
                                                            <label for="toMail" class="form-label fs-18 fw-normal">Pipeline visibility</label> 
                                                            <div class="choices" data-type="select-multiple" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                                                <div class="choices__inner">
                                                                    <select class="form-control choices__input" name="toMail" id="toMail" multiple="" hidden="" tabindex="-1" data-choice="active">
                                                                        <option value="Choice 3" data-custom-properties="[object Object]">Team 01</option>
                                                                        <option value="Choice 2" data-custom-properties="[object Object]">Team 02</option>
                                                                        <option value="Choice 1" data-custom-properties="[object Object]">Team 03</option>
                                                                    </select>
                                                                    <div class="choices__list choices__list--multiple">
                                                                        <div class="choices__item choices__item--selectable" data-item="" data-id="1" data-value="Choice 3" data-custom-properties="[object Object]" aria-selected="true" data-deletable="">Team 01
                                                                            <button type="button" class="choices__button" aria-label="Remove item: 'Choice 1'" data-button="">Remove item</button>
                                                                    </div>
</div>
                                                                    <div class="choices__list choices__list--multiple">
                                                                        <div class="choices__item choices__item--selectable" data-item="" data-id="2" data-value="Choice 3" data-custom-properties="[object Object]" aria-selected="true" data-deletable="">Team 02
                                                                            <button type="button" class="choices__button" aria-label="Remove item: 'Choice 3'" data-button="">Remove item</button>
                                                                    </div>
                                                                    <div class="choices__item choices__item--selectable" data-item="" data-id="3" data-value="Choice 2" data-custom-properties="[object Object]" aria-selected="true" data-deletable="">Team 03
                                                                        <button type="button" class="choices__button" aria-label="Remove item: 'Choice 2'" data-button="">Remove item</button>
                                                                </div>
                                                            </div>
                                                            <input type="search" name="search_terms" class="choices__input choices__input--cloned" autocomplete="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" aria-label="null" aria-activedescendant="choices--toMail-item-choice-2" style="min-width: 1ch; width: 1ch;"></div><div class="choices__list choices__list--dropdown" aria-expanded="false"><div class="choices__list" aria-multiselectable="true" role="listbox"><div id="choices--toMail-item-choice-2" class="choices__item choices__item--choice choices__item--selectable is-highlighted" role="option" data-choice="" data-id="2" data-value="Choice 1" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">jay@gmail.com</div><div id="choices--toMail-item-choice-4" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="4" data-value="Choice 4" data-select-text="Press to select" data-choice-selectable="" aria-selected="false">kimo@gmail.com</div></div></div></div> </div>
                                                            <!-- <div class="mb-3">
                                                                <label class="form-label" for="gen-info-password-input">Password</label>
                                                                <input type="password" class="form-control" id="gen-info-password-input" placeholder="Enter Password" required >
                                                                <div class="invalid-feedback">Please enter a password</div>
                                                            </div> -->
                                                        </div>
                                                        <div class="d-flex align-items-start gap-3 mt-4">
                                                            <button type="button" class="btn btn-secondary waves-effect waves-light fs-14 fw-normal  ms-auto nexttab nexttab" data-nexttab="pills-info-desc-tab">Next</button>
                                                        </div>
                                                    </div>
                                                    <!-- end tab pane -->

                                                    <div class="tab-pane fade" id="pills-info-desc" role="tabpanel" aria-labelledby="pills-info-desc-tab">
                                                        
                                                        <div>
                                                            <div class="text-center">
                                                                <div class="profile-user position-relative d-inline-block mx-auto mb-2">
                                                                    <img src="assets/images/users/user-dummy-img.jpg" class="rounded-circle avatar-lg img-thumbnail user-profile-image" alt="user-profile-image">
                                                                    <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                                                                        <input id="profile-img-file-input" type="file" class="profile-img-file-input" accept="image/png, image/jpeg">
                                                                        <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                                                            <span class="avatar-title rounded-circle bg-light text-body">
                                                                                <i class="ri-camera-fill"></i>
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <h5 class="fs-14">Add Image</h5>

                                                            </div>
                                                            <div>
                                                                <label class="form-label" for="gen-info-description-input">Description</label>
                                                                <textarea class="form-control" placeholder="Enter Description" id="gen-info-description-input" rows="2" required></textarea>
                                                                <div class="invalid-feedback">Please enter a description</div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-start gap-3 mt-4">
                                                            <button type="button" class="btn btn-link text-decoration-none btn-label previestab" data-previous="pills-gen-info-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back </button>
                                                            <button type="button" class="btn btn-secondary waves-effect waves-light fs-14 fw-normal ms-auto nexttab nexttab" data-nexttab="pills-success-tab">Next</button>
                                                        </div>
                                                    </div>
                                                    <!-- end tab pane -->

                                                    <div class="tab-pane fade" id="pills-success" role="tabpanel" aria-labelledby="pills-success-tab">
                                                        <div>
                                                            <div class="text-center">

                                                                <div class="mb-4">
                                                                    <lord-icon src="../../../../external.html?link=https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>
                                                                </div>
                                                                <h5>Well Done !</h5>
                                                                <p class="text-muted">You have Successfully Signed Up</p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-start gap-3 mt-4">
                                                            <!-- <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i
                                                            class="ri-close-line me-1 align-middle"></i> Close</a> -->
                                                            <button type="button" class="btn btn-link text-decoration-none btn-label previestab" data-previous="pills-gen-info-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back </button>
                                                            <button type="button" class="btn btn-secondary waves-effect waves-light fs-14 fw-normal ms-auto nexttab nexttab" data-nexttab="pills-success-tab">Done</button>
                                                        </div>
                                                    </div>
                                                    <!-- end tab pane -->
                                                </div>
                                                <!-- end tab content -->
                                            </form>
                                        </div>
                                        <!-- <div class="modal-footer">
                                            <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i
                                                    class="ri-close-line me-1 align-middle"></i> Close</a>
                                            <button type="button" class="btn btn-primary ">Save changes</button>
                                        </div> -->
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->

                        
                        </div>

                    </div>
                    <!-- end card header -->
                </div>
                    <!--end col-->
                </div>
                        <!-- end page title -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card ">                   
                                            <div class="card-body" >
                                                <div>
                                                    <div class="tab-content text-muted">
                                                            <div class="tab-pane active" id="nav-border-top-User" role="tabpanel">
                                                                <!-- Nav tabs -->
                                                                <ul class="nav nav-tabs nav-border-top nav-border-top-primary mb-3" role="tablist">
                                                                    <li class="nav-item">
                                                                        <a class="nav-link active fs-18 fw-medium" data-bs-toggle="tab" href="#Lead" role="tab">
                                                                            Lead
                                                                        </a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link fs-18 fw-medium" data-bs-toggle="tab" href="#Deal" role="tab">
                                                                            Deal
                                                                        </a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link fs-18 fw-medium" data-bs-toggle="tab" href="#Order" role="tab">
                                                                            Order
                                                                        </a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link fs-18 fw-medium" data-bs-toggle="tab" href="#Support" role="tab">
                                                                            Support
                                                                        </a>
                                                                    </li>
                                                                </ul> 
                                                                <!-- Tab panes -->
                                                                <div class="tab-content text-muted">
                                                                    <div class="tab-pane active" id="Lead" role="tabpanel">
                                                                        <div class="d-flex row">
                                                                            <div class="card" >
                                                                                <div class="card-header align-items-center d-flex  bg-light">
                                                                                    <h4 class="card-title mb-0 flex-grow-1 fs-18 mb-3 fw-medium">Lead pipeline (System default) <svg
                                                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                                                            <path
                                                                                                d="M7.38 7.38H8V11.76H8.62M8 15.5C12.14 15.5 15.5 12.14 15.5 8C15.5 3.86 12.14 0.5 8 0.5C3.86 0.5 0.5 3.86 0.5 8C0.5 12.14 3.86 15.5 8 15.5ZM8 5.01C8.25 5.01 8.45 4.81 8.45 4.56C8.45 4.31 8.25 4.11 8 4.11C7.75 4.11 7.55 4.31 7.55 4.56C7.55 4.81 7.75 5.01 8 5.01Z"
                                                                                                stroke="#5E718D" stroke-linecap="round" stroke-linejoin="round" />
                                                                                        </svg></h4>
                                                                                    
                                                                                    <div class="flex-shrink-0">
                                                                                        <div class="dropdown d-inline-block">
                                                                                            <button class="btn btn-ghost-secondary waves-effect btn-sm dropdown" type="button"
                                                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                                                <i class="ri-more-2-fill align-middle"></i>
                                                                                            </button>
                                                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                                                <li><a href="#" class="dropdown-item"> View pipeline</a></li>
                                                                                                <li><a class="dropdown-item edit-item-btn"> Edit pipeline</a></li>
                                                                                                <!-- <li>
                                                                                                                                                                                <a class="dropdown-item remove-item-btn">
                                                                                                                                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                                                                                                                                </a>
                                                                                                                                                                            </li> -->
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="flex-grow-1 ms-2">
                                                                                        <form action="javascript:void(0);">
                                                                                            <div class="row">
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="disabledInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="disabledInput" value="New leads"
                                                                                                            disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="disabledInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="disabledInput" value="In progress"
                                                                                                            disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="disabledInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="disabledInput" value="Qualified "
                                                                                                            disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="disabledInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="disabledInput" value="Unqualified"
                                                                                                            disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                                                
                                                                                                <!--end col-->
                                                                                            </div>
                                                                                            <!--end row-->
                                                                                        </form>
                                                                
                                                                                    </div>
                                                                                </div>
                                                                
                                                                
                                                                            </div>
                                                                
                                                                            <div class="card mt-3">
                                                                                <div class="card-header align-items-center d-flex  bg-light">
                                                                                    <h4 class="card-title mb-0 flex-grow-1 fs-18 fw-medium">Lead-demo pipeline</h4>
                                                                                    <div class="flex-shrink-0">
                                                                                        <div class="dropdown d-inline-block">
                                                                                            <button class="btn btn-ghost-secondary waves-effect btn-sm dropdown" type="button"
                                                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                                                <i class="ri-more-2-fill align-middle"></i>
                                                                                            </button>
                                                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                                                <li><a href="#" class="dropdown-item"> View pipeline</a></li>
                                                                                                <li><a class="dropdown-item edit-item-btn"> Edit pipeline</a></li>
                                                                                                <li><a class="dropdown-item remove-item-btn">  <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete pipeline </a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="flex-grow-1 ms-2">
                                                                                        <form action="javascript:void(0);">
                                                                                            <div class="row">
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="disabledInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="disabledInput" value="New leads"
                                                                                                            disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="disabledInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="disabledInput" value="In progress"
                                                                                                            disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="disabledInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="disabledInput" value="Attempting"
                                                                                                            disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="disabledInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="disabledInput"
                                                                                                            value="Disabled input" disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                
                                                                                                <!--end col-->
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="proposal_sentInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="proposal_sentInput"
                                                                                                            value="Proposal sent" disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="InterestedInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="InterestedInput" value="Interested"
                                                                                                            disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                
                                                                                                <!--end col-->
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="qualifiedInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="qualifiedInput" value="Qualified"
                                                                                                            disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                                                <!--end col-->
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="unqualifiedInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="unqualifiedInput"
                                                                                                            value="Unqualified" disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                
                                                                                                <!--end col-->
                                                                                                
                                                                                                <!--end col-->
                                                                                            </div>
                                                                                            <!--end row-->
                                                                                        </form>
                                                                
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane" id="Deal" role="tabpanel">
                                                                        <div class="d-flex row">
                                                                            <div class="card" >
                                                                                <div class="card-header align-items-center d-flex  bg-light">
                                                                                    <h4 class="card-title mb-0 flex-grow-1 fs-18 mb-3 fw-medium">Deal pipeline (System default) <svg
                                                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                                                            <path
                                                                                                d="M7.38 7.38H8V11.76H8.62M8 15.5C12.14 15.5 15.5 12.14 15.5 8C15.5 3.86 12.14 0.5 8 0.5C3.86 0.5 0.5 3.86 0.5 8C0.5 12.14 3.86 15.5 8 15.5ZM8 5.01C8.25 5.01 8.45 4.81 8.45 4.56C8.45 4.31 8.25 4.11 8 4.11C7.75 4.11 7.55 4.31 7.55 4.56C7.55 4.81 7.75 5.01 8 5.01Z"
                                                                                                stroke="#5E718D" stroke-linecap="round" stroke-linejoin="round" />
                                                                                        </svg></h4>
                                                                                    
                                                                                    <div class="flex-shrink-0">
                                                                                        <div class="dropdown d-inline-block">
                                                                                            <button class="btn btn-ghost-secondary waves-effect btn-sm dropdown" type="button"
                                                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                                                <i class="ri-more-2-fill align-middle"></i>
                                                                                            </button>
                                                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                                                <li><a href="#" class="dropdown-item"> View pipeline</a></li>
                                                                                                <li><a class="dropdown-item edit-item-btn"> Edit pipeline</a></li>
                                                                                                <!-- <li>
                                                                                                                                                                                <a class="dropdown-item remove-item-btn">
                                                                                                                                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                                                                                                                                </a>
                                                                                                                                                                            </li> -->
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="flex-grow-1 ms-2">
                                                                                        <form action="javascript:void(0);">
                                                                                            <div class="row">
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="disabledInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="disabledInput" value="New leads"
                                                                                                            disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="disabledInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="disabledInput" value="In progress"
                                                                                                            disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="disabledInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="disabledInput" value="Qualified "
                                                                                                            disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="disabledInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="disabledInput" value="Unqualified"
                                                                                                            disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                                                
                                                                                                <!--end col-->
                                                                                            </div>
                                                                                            <!--end row-->
                                                                                        </form>
                                                                
                                                                                    </div>
                                                                                </div>
                                                                
                                                                
                                                                            </div>
                                                                
                                                                            <div class="card mt-3">
                                                                                <div class="card-header align-items-center d-flex  bg-light">
                                                                                    <h4 class="card-title mb-0 flex-grow-1 fs-18 fw-medium">Deal-alpha pipeline</h4>
                                                                                    <div class="flex-shrink-0">
                                                                                        <div class="dropdown d-inline-block">
                                                                                            <button class="btn btn-ghost-secondary waves-effect btn-sm dropdown" type="button"
                                                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                                                <i class="ri-more-2-fill align-middle"></i>
                                                                                            </button>
                                                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                                                <li><a href="#" class="dropdown-item"> View pipeline</a></li>
                                                                                                <li><a class="dropdown-item edit-item-btn"> Edit pipeline</a></li>
                                                                                        
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="flex-grow-1 ms-2">
                                                                                        <form action="javascript:void(0);">
                                                                                            <div class="row">
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="disabledInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="disabledInput" value="New deals" disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="disabledInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="disabledInput" value="Contacted"
                                                                                                            disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="disabledInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="disabledInput" value="Needs identified"
                                                                                                            disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="disabledInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="disabledInput"
                                                                                                            value="Disabled input" disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                
                                                                                                <!--end col-->
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="proposal_sentInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="proposal_sentInput"
                                                                                                            value="Proposal sent" disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="InterestedInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="InterestedInput" value="Negotiation"
                                                                                                            disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                
                                                                                                <!--end col-->
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="qualifiedInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="qualifiedInput" value="Deal won"
                                                                                                            disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                                                <!--end col-->
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="unqualifiedInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="unqualifiedInput" value="Deal lost" disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                
                                                                                                <!--end col-->
                                                                                                
                                                                                                <!--end col-->
                                                                                            </div>
                                                                                            <!--end row-->
                                                                                        </form>
                                                                
                                                                                    </div>
                                                                                </div>
                                                                            </div>                                        
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane" id="Order" role="tabpanel">
                                                                        <div class="d-flex row">
                                                                            <div class="card" >
                                                                                <div class="card-header align-items-center d-flex  bg-light">
                                                                                    <h4 class="card-title mb-0 flex-grow-1 fs-18 mb-3 fw-medium">Order pipeline (System default) <svg
                                                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                                                            <path
                                                                                                d="M7.38 7.38H8V11.76H8.62M8 15.5C12.14 15.5 15.5 12.14 15.5 8C15.5 3.86 12.14 0.5 8 0.5C3.86 0.5 0.5 3.86 0.5 8C0.5 12.14 3.86 15.5 8 15.5ZM8 5.01C8.25 5.01 8.45 4.81 8.45 4.56C8.45 4.31 8.25 4.11 8 4.11C7.75 4.11 7.55 4.31 7.55 4.56C7.55 4.81 7.75 5.01 8 5.01Z"
                                                                                                stroke="#5E718D" stroke-linecap="round" stroke-linejoin="round" />
                                                                                        </svg></h4>
                                                                                    
                                                                                    <div class="flex-shrink-0">
                                                                                        <div class="dropdown d-inline-block">
                                                                                            <button class="btn btn-ghost-secondary waves-effect btn-sm dropdown" type="button"
                                                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                                                <i class="ri-more-2-fill align-middle"></i>
                                                                                            </button>
                                                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                                                <li><a href="#" class="dropdown-item"> View pipeline</a></li>
                                                                                                <li><a class="dropdown-item edit-item-btn"> Edit pipeline</a></li>
                                                                                                <!-- <li>
                                                                                                                                                                                <a class="dropdown-item remove-item-btn">
                                                                                                                                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                                                                                                                                </a>
                                                                                                                                                                            </li> -->
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="flex-grow-1 ms-2">
                                                                                        <form action="javascript:void(0);">
                                                                                            <div class="row">
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="disabledInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="disabledInput" value="New leads"
                                                                                                            disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="disabledInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="disabledInput" value="In progress"
                                                                                                            disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="disabledInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="disabledInput" value="Qualified "
                                                                                                            disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="disabledInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="disabledInput" value="Unqualified"
                                                                                                            disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                                                
                                                                                                <!--end col-->
                                                                                            </div>
                                                                                            <!--end row-->
                                                                                        </form>
                                                                
                                                                                    </div>
                                                                                </div>
                                                                
                                                                
                                                                            </div>                                        
                                                                            <div class="card mt-3">
                                                                                <div class="card-header align-items-center d-flex  bg-light">
                                                                                        <h4 class="card-title mb-0 flex-grow-1 fs-18 fw-medium">Order pipeline 01</h4>
                                                                                    <div class="flex-shrink-0">
                                                                                        <div class="dropdown d-inline-block">
                                                                                            <button class="btn btn-ghost-secondary waves-effect btn-sm dropdown" type="button"
                                                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                                                <i class="ri-more-2-fill align-middle"></i>
                                                                                            </button>
                                                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                                                <li><a href="#" class="dropdown-item"> View pipeline</a></li>
                                                                                                <li><a class="dropdown-item edit-item-btn"> Edit pipeline</a></li>
                                                                                                <!-- <li>
                                                                                                                                                                                <a class="dropdown-item remove-item-btn">
                                                                                                                                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                                                                                                                                </a>
                                                                                                                                                                            </li> -->
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="flex-grow-1 ms-2">
                                                                                        <form action="javascript:void(0);">
                                                                                            <div class="row">
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="disabledInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="disabledInput" value="New leads"
                                                                                                            disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="disabledInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="disabledInput" value="In progress"
                                                                                                            disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="disabledInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="disabledInput" value="Attempting"
                                                                                                            disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="disabledInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="disabledInput"
                                                                                                            value="Disabled input" disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                
                                                                                                <!--end col-->
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="proposal_sentInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="proposal_sentInput"
                                                                                                            value="Proposal sent" disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="InterestedInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="InterestedInput" value="Interested"
                                                                                                            disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                
                                                                                                <!--end col-->
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="qualifiedInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="qualifiedInput" value="Qualified"
                                                                                                            disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                                                <!--end col-->
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="unqualifiedInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="unqualifiedInput"
                                                                                                            value="Unqualified" disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                
                                                                                                <!--end col-->
                                                                                                
                                                                                                <!--end col-->
                                                                                            </div>
                                                                                            <!--end row-->
                                                                                        </form>
                                                                
                                                                                    </div>
                                                                                </div>
                                                                            </div>                                        
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane" id="Support" role="tabpanel">
                                                                        <div class="d-flex row">
                                                                            <div class="card" >
                                                                                <div class="card-header align-items-center d-flex  bg-light">
                                                                                    <h4 class="card-title mb-0 flex-grow-1 fs-18 mb-3 fw-medium">Support pipeline (System default)  <svg
                                                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                                                            <path
                                                                                                d="M7.38 7.38H8V11.76H8.62M8 15.5C12.14 15.5 15.5 12.14 15.5 8C15.5 3.86 12.14 0.5 8 0.5C3.86 0.5 0.5 3.86 0.5 8C0.5 12.14 3.86 15.5 8 15.5ZM8 5.01C8.25 5.01 8.45 4.81 8.45 4.56C8.45 4.31 8.25 4.11 8 4.11C7.75 4.11 7.55 4.31 7.55 4.56C7.55 4.81 7.75 5.01 8 5.01Z"
                                                                                                stroke="#5E718D" stroke-linecap="round" stroke-linejoin="round" />
                                                                                        </svg></h4>
                                                                                    
                                                                                    <div class="flex-shrink-0">
                                                                                        <div class="dropdown d-inline-block">
                                                                                            <button class="btn btn-ghost-secondary waves-effect btn-sm dropdown" type="button"
                                                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                                                <i class="ri-more-2-fill align-middle"></i>
                                                                                            </button>
                                                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                                                <li><a href="#" class="dropdown-item"> View pipeline</a></li>
                                                                                                <li><a class="dropdown-item edit-item-btn"> Edit pipeline</a></li>
                                                                                                <!-- <li>
                                                                                                                                                                                <a class="dropdown-item remove-item-btn">
                                                                                                                                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                                                                                                                                </a>
                                                                                                                                                                            </li> -->
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="flex-grow-1 ms-2">
                                                                                        <form action="javascript:void(0);">
                                                                                            <div class="row">
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="disabledInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="disabledInput" value="New leads"
                                                                                                            disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="disabledInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="disabledInput" value="In progress"
                                                                                                            disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="disabledInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="disabledInput" value="Qualified "
                                                                                                            disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="disabledInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="disabledInput" value="Unqualified"
                                                                                                            disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                                                
                                                                                                <!--end col-->
                                                                                            </div>
                                                                                            <!--end row-->
                                                                                        </form>
                                                                
                                                                                    </div>
                                                                                </div> 
                                                                            </div>                                        
                                                                            <div class="card mt-3">
                                                                                <div class="card-header align-items-center d-flex  bg-light">
                                                                                    <h4 class="card-title mb-0 flex-grow-1 fs-18 fw-medium">Support pipeline 01</h4>
                                                                                    <div class="flex-shrink-0">
                                                                                        <div class="dropdown d-inline-block">
                                                                                            <button class="btn btn-ghost-secondary waves-effect btn-sm dropdown" type="button"
                                                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                                                <i class="ri-more-2-fill align-middle"></i>
                                                                                            </button>
                                                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                                                <li><a href="#" class="dropdown-item"> View pipeline</a></li>
                                                                                                <li><a class="dropdown-item edit-item-btn"> Edit pipeline</a></li>
                                                                                                <!-- <li>
                                                                                                                                                                                <a class="dropdown-item remove-item-btn">
                                                                                                                                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                                                                                                                                </a>
                                                                                                                                                                            </li> -->
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="flex-grow-1 ms-2">
                                                                                        <form action="javascript:void(0);">
                                                                                            <div class="row">
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="disabledInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="disabledInput" value="New leads"
                                                                                                            disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="disabledInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="disabledInput" value="In progress"
                                                                                                            disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="disabledInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="disabledInput" value="Attempting"
                                                                                                            disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="disabledInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="disabledInput"
                                                                                                            value="Disabled input" disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                
                                                                                                <!--end col-->
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="proposal_sentInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="proposal_sentInput"
                                                                                                            value="Proposal sent" disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="InterestedInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="InterestedInput" value="Interested"
                                                                                                            disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                
                                                                                                <!--end col-->
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="qualifiedInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="qualifiedInput" value="Qualified"
                                                                                                            disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                                                <!--end col-->
                                                                                                <div class="col-lg-3">
                                                                                                    <!-- Disabled Input -->
                                                                                                    <div>
                                                                                                        <label for="unqualifiedInput" class="form-label"></label>
                                                                                                        <input type="text" class="form-control" id="unqualifiedInput"
                                                                                                            value="Unqualified" disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                
                                                                                                <!--end col-->
                                                                                                
                                                                                                <!--end col-->
                                                                                            </div>
                                                                                            <!--end row-->
                                                                                        </form>
                                                                
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                    
                                                                        </div>
                                                                    </div>
                                                                </div>   
                                                                
                                                            </div>                                            
                                                    </div>
                                                    <div class="tab-pane" id="nav-border-top-Teams" role="tabpanel">
                                                        <div class="d-flex">
                                                            <div class="flex-grow-1 ms-2">
                                                                        <div class="table-responsive table-card mt-4">
                                                        <table class="table align-middle" id="customerTable">
                                                            <thead class="table-light">
                                                                <tr>
                                                                    <th scope="col col-wd">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                                        </div>
                                                                    </th>

                                                                    <th class="" data-sort="Teamname">Team name</th>
                                                                    <th class="" data-sort=""></th>
                                                                    <th class="" data-sort="Users_count">Users count</th>
                                                                    
                                                                    <th class="" data-sort="Shared_mailbox">Shared mailbox</th>
                                                                    <th class="" data-sort=""></th>
                                                                    <th class="" data-sort="date">Created on</th>
                                                                    <th class="" data-sort="action"></th>
                                                                    <th class="" data-sort="action"></th>
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
                                                                    
                                                                    <td class="Teams_name">Sample team name</td>
                                                                    <td class=""></td>
                                                                    <td class="Users_count">0</td>
                                                                    <td class="Shared_mailbox">mailbox@samplemail.com
                                                                    </td>
                                                                    <td class=""></td>
                                                                    
                                                                    <td class="date">24-08-2023</td>
                                                                    <td class=""></td>
                                                                    <td>
                                                                        <ul class="list-inline hstack gap-2 mb-0">
                                                                            
                                                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="View" data-bs-original-title="View">
                                                                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" viewBox="0 0 20 14" fill="none">
                                                                                    <path d="M10 1.375C3.75 1.375 1.25 7.00061 1.25 7.00061C1.25 7.00061 3.75 12.625 10 12.625C16.25 12.625 18.75 7.00061 18.75 7.00061C18.75 7.00061 16.25 1.375 10 1.375Z" stroke="#5E718D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                                    <path d="M10 10.1257C11.7259 10.1257 13.125 8.72655 13.125 7.00066C13.125 5.27477 11.7259 3.87566 10 3.87566C8.27411 3.87566 6.875 5.27477 6.875 7.00066C6.875 8.72655 8.27411 10.1257 10 10.1257Z" stroke="#5E718D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                                    </svg></a>
                                                                            </li>
                                                                            
                                                                            
                                                                        </ul>
                                                                    </td>
                                                                    <td>
                                                                        <div class="dropdown d-inline-block">
                                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="ri-more-2-fill align-middle"></i>
                                                                            </button>
                                                                            
                                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                                <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                                    View details</a></li>
                                                                                <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                                    Edit details</a></li>
                                                                                <li>
                                                                                    <a class="dropdown-item remove-item-btn">
                                                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                                        Edit permissions
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="dropdown-item remove-item-btn">
                                                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
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
                                                                            <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                                        </div>
                                                                    </th>
                                                                    <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                                    
                                                                    <td class="Teams_name">Sample team name</td>
                                                                    <td class=""></td>
                                                                    <td class="Users_count">0</td>
                                                                    <td class="Shared_mailbox">mailbox@samplemail.com
                                                                    </td>
                                                                    <td class=""></td>
                                                                    
                                                                    <td class="date">24-08-2023</td>
                                                                    <td class=""></td>
                                                                    <td>
                                                                        <ul class="list-inline hstack gap-2 mb-0">
                                                                            
                                                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="View" data-bs-original-title="View">
                                                                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" viewBox="0 0 20 14" fill="none">
                                                                                    <path d="M10 1.375C3.75 1.375 1.25 7.00061 1.25 7.00061C1.25 7.00061 3.75 12.625 10 12.625C16.25 12.625 18.75 7.00061 18.75 7.00061C18.75 7.00061 16.25 1.375 10 1.375Z" stroke="#5E718D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                                    <path d="M10 10.1257C11.7259 10.1257 13.125 8.72655 13.125 7.00066C13.125 5.27477 11.7259 3.87566 10 3.87566C8.27411 3.87566 6.875 5.27477 6.875 7.00066C6.875 8.72655 8.27411 10.1257 10 10.1257Z" stroke="#5E718D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                                    </svg></a>
                                                                            </li>
                                                                            
                                                                            
                                                                        </ul>
                                                                    </td>
                                                                    <td>
                                                                        <div class="dropdown d-inline-block">
                                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="ri-more-2-fill align-middle"></i>
                                                                            </button>
                                                                            
                                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                                <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                                    View details</a></li>
                                                                                <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                                    Edit details</a></li>
                                                                                <li>
                                                                                    <a class="dropdown-item remove-item-btn">
                                                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                                        Edit permissions
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="dropdown-item remove-item-btn">
                                                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
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
                                                                            <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                                        </div>
                                                                    </th>
                                                                    <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                                    
                                                                    <td class="Teams_name">Sample team name</td>
                                                                    <td class=""></td>
                                                                    <td class="Users_count">0</td>
                                                                    <td class="Shared_mailbox">mailbox@samplemail.com
                                                                    </td>
                                                                    <td class=""></td>
                                                                    
                                                                    <td class="date">24-08-2023</td>
                                                                    <td class=""></td>
                                                                    <td>
                                                                        <ul class="list-inline hstack gap-2 mb-0">
                                                                            
                                                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="View" data-bs-original-title="View">
                                                                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" viewBox="0 0 20 14" fill="none">
                                                                                    <path d="M10 1.375C3.75 1.375 1.25 7.00061 1.25 7.00061C1.25 7.00061 3.75 12.625 10 12.625C16.25 12.625 18.75 7.00061 18.75 7.00061C18.75 7.00061 16.25 1.375 10 1.375Z" stroke="#5E718D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                                    <path d="M10 10.1257C11.7259 10.1257 13.125 8.72655 13.125 7.00066C13.125 5.27477 11.7259 3.87566 10 3.87566C8.27411 3.87566 6.875 5.27477 6.875 7.00066C6.875 8.72655 8.27411 10.1257 10 10.1257Z" stroke="#5E718D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                                    </svg></a>
                                                                            </li>
                                                                            
                                                                            
                                                                        </ul>
                                                                    </td>
                                                                    <td>
                                                                        <div class="dropdown d-inline-block">
                                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="ri-more-2-fill align-middle"></i>
                                                                            </button>
                                                                            
                                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                                <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                                    View details</a></li>
                                                                                <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                                    Edit details</a></li>
                                                                                <li>
                                                                                    <a class="dropdown-item remove-item-btn">
                                                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                                        Edit permissions
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="dropdown-item remove-item-btn">
                                                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
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
                                                                            <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                                        </div>
                                                                    </th>
                                                                    <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                                    
                                                                    <td class="Teams_name">Sample team name</td>
                                                                    <td class=""></td>
                                                                    <td class="Users_count">0</td>
                                                                    <td class="Shared_mailbox">mailbox@samplemail.com
                                                                    </td>
                                                                    <td class=""></td>
                                                                    
                                                                    <td class="date">24-08-2023</td>
                                                                    <td class=""></td>
                                                                    <td>
                                                                        <ul class="list-inline hstack gap-2 mb-0">
                                                                            
                                                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="View" data-bs-original-title="View">
                                                                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" viewBox="0 0 20 14" fill="none">
                                                                                    <path d="M10 1.375C3.75 1.375 1.25 7.00061 1.25 7.00061C1.25 7.00061 3.75 12.625 10 12.625C16.25 12.625 18.75 7.00061 18.75 7.00061C18.75 7.00061 16.25 1.375 10 1.375Z" stroke="#5E718D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                                    <path d="M10 10.1257C11.7259 10.1257 13.125 8.72655 13.125 7.00066C13.125 5.27477 11.7259 3.87566 10 3.87566C8.27411 3.87566 6.875 5.27477 6.875 7.00066C6.875 8.72655 8.27411 10.1257 10 10.1257Z" stroke="#5E718D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                                    </svg></a>
                                                                            </li>
                                                                            
                                                                            
                                                                        </ul>
                                                                    </td>
                                                                    <td>
                                                                        <div class="dropdown d-inline-block">
                                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="ri-more-2-fill align-middle"></i>
                                                                            </button>
                                                                            
                                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                                <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                                    View details</a></li>
                                                                                <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                                    Edit details</a></li>
                                                                                <li>
                                                                                    <a class="dropdown-item remove-item-btn">
                                                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                                        Edit permissions
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="dropdown-item remove-item-btn">
                                                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
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
                                                                <lord-icon src="../../../../external.html?link=https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                                                <h5 class="mt-2">Sorry! No Result Found</h5>
                                                                <p class="text-muted mb-0">We've searched more than 150+ leads We did not find any leads for you search.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                        
                                                </div>
                                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        
                            <!--end modal-->

                    

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


<!-- ============================================================== -->
<!-- Start pipeline_settings-footer here -->
<!-- ============================================================== -->
<?php include 'includes/settings/pipeline_settings-footer.php'; ?>