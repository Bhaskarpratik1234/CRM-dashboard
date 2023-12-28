<!doctype html>
<html lang="en" data-layout="vertical" data-layout-style="default" data-layout-position="fixed" data-topbar="light"
    data-sidebar="dark" data-layout-width="fluid" data-sidebar-size="lg">
<?php include 'includes/mail-box/head.php'; ?>

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        <?php include 'includes/mail-box/header.php'; ?>
        <?php include 'includes/mail-box/sidenav.php'; ?>
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <!-- <h4 class="mb-sm-0">Starter</h4> -->

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                        <!-- <li class="breadcrumb-item ">Mailbox</li> -->
                                        <li class="breadcrumb-item active">Mailbox</li>
                                    </ol>
                                </div>
                                <!-- <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                        
                                        <li class="breadcrumb-item active">Mailbox</li>
                                    </ol>
                                </div> -->

                            </div>
                        </div>
                    </div>

                    <div class="email-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1 ">

                        <div class="email-content ">
                            <div class="p-4 pb-0">
                                <div class="border-bottom border-bottom-dashed">
                                    <div class="row mt-n2 mb-3 mb-sm-0">
                                        <div class="col col-sm-auto order-1 d-block d-lg-none">
                                            <button type="button"
                                                class="btn btn-soft-success btn-icon btn-sm fs-16 email-menu-btn">
                                                <i class="ri-menu-2-fill align-bottom"></i>
                                            </button>
                                        </div>
                                        <div class="col-sm order-3 order-sm-2">
                                            <div class="hstack gap-sm-1 align-items-center flex-wrap email-topbar-link">
                                                <div class="form-check fs-14 m-0">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="checkall">
                                                    <label class="form-check-label" for="checkall"></label>
                                                    <i class="bx bx-caret-down"></i>
                                                </div>

                                                <div id="email-topbar-actions">

                                                    <div class="hstack gap-sm-1 align-items-center flex-wrap">
                                                        <button type="button"
                                                            class="btn btn-ghost-secondary btn-icon btn-sm fs-16"
                                                            data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                            data-bs-placement="top" title="Archive">
                                                            <i class="ri-inbox-archive-fill align-bottom"></i>
                                                        </button>
                                                        <button type="button"
                                                            class="btn btn-ghost-secondary btn-icon btn-sm fs-16"
                                                            data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                            data-bs-placement="top" title="Report Spam">
                                                            <i class="ri-error-warning-fill align-bottom"></i>
                                                        </button>
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                            data-bs-placement="top" title="Trash">
                                                            <button type="button"
                                                                class="btn btn-ghost-secondary btn-icon btn-sm fs-16"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#removeItemModal">
                                                                <i class="ri-delete-bin-5-fill align-bottom"></i>
                                                            </button>


                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="vr align-self-center mx-2"></div>

                                                <button type="button"
                                                    class="btn btn-ghost-secondary btn-icon btn-sm fs-16">
                                                    <i class="ri-refresh-line align-bottom"></i>
                                                </button>
                                                <div class="dropdown">

                                                    <button class="btn btn-ghost-secondary btn-icon btn-sm fs-16"
                                                        type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="ri-more-2-fill align-bottom"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#" id="mark-all-read">Mark all as
                                                            Read</a>
                                                    </div>
                                                </div>
                                                <div class="alert alert-warning alert-dismissible unreadConversations-alert px-4 fade show "
                                                    id="unreadConversations" role="alert">
                                                    No Unread Conversations
                                                </div>


                                            </div>
                                        </div>
                                        <div class="col-auto order-4 order-sm-8">

                                            <div class="d-flex gap-sm-1 email-topbar-link">
                                                <div class="text-muted mb-2 mt-2">1-50 of 13,144</div>

                                                <button type="button"
                                                    class="btn btn-ghost-secondary btn-icon btn-sm fs-16">
                                                    <i class="bx bx-chevron-left align-bottom"></i>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-ghost-secondary btn-icon btn-sm fs-16">
                                                    <i class="bx bx-chevron-right align-bottom"></i>
                                                </button>
                                                <button type="button" class="btn btn-secondary w-30 mb-2"
                                                    data-bs-toggle="modal" data-bs-target="#composemodal"><i
                                                        data-feather="plus-circle"
                                                        class="icon-xs me-1 icon-dual-light"></i> New mail</button>

                                            </div>
                                        </div>
                                    </div>                                   
                                </div>

                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="pills-primary" role="tabpanel"
                                        aria-labelledby="pills-primary-tab">
                                        <div class="message-list-content mx-n4 px-4 message-list-scroll">
                                            <!-- <div id="elmLoader">
                                                <div class="spinner-border text-primary avatar-sm" role="status">
                                                    <span class="visually-hidden">Loading...</span>
                                                </div>
                                            </div> -->
                                            <ul class="list-unstyled mb-0 mail-messages-container">
                                                <li class="active">
                                                    <div class="d-sm-flex align-items-top mt-3">
                                                        <div class="me-3 mt-1"> <input class="form-check-input"
                                                                type="checkbox" id="checkboxNoLabel1" value=""
                                                                aria-label="..."> </div>
                                                        <div class="me-1 lh-1"> <span
                                                                class="avatar avatar-md online me-2 avatar-rounded mail-msg-avatar">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                            <path d="M17 6.3757L9.5 2.00012L2 6.3757M17 6.3757V17.0007C17 17.1665 16.9342 17.3254 16.8169 17.4427C16.6997 17.5599 16.5408 17.6257 16.375 17.6257H2.625C2.45924 17.6257 2.30027 17.5599 2.18306 17.4427C2.06585 17.3254 2 17.1665 2 17.0007V6.3757M17 6.3757L9.5 10.75L2 6.3757" stroke="#5E718D" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg> </span>
                                                        </div>
                                                        <div class="flex-fill"> <a href="javascript:void(0);"
                                                                data-bs-toggle="offcanvas"
                                                                data-bs-target="#offcanvasRight"
                                                                aria-controls="offcanvasRight">
                                                                <p class="mb-1 fs-14"><button  class="btn p-0 lh-1 mail-starred true border-0 float-start">
                                                                <i class="ri-mail-lin fs-14"></i> </button> Richard Brown
                                                                <span class="float-end text-muted fw-normal fs-11">Tue, Aug 12, 12:45 pm</span>
                                                                </p>
                                                            </a>
                                                            
                                                            <div class="mail-msg mb-3">
                                                                 <span class="d-block mb-0 fw-medium text-truncate w-75">
                                                                    <button class="btn p-0 lh-1 mail-starred true border-0 float-start fs-14">
                                                                        <i class="ri-star-fill "></i> </button> 🎁 Guest posting enquiry for sites with DA40+, DR 12.
                                                                        <!-- Default dropdown -->
                                                                        <div class="btn-group">
                                                                            <button class="btn btn-light dropdown-toggle" type="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                                                Default dropdown
                                                                            </button>
                                                                            <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                                                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <!-- <div class="Unassignedh"><button class="btn btn-light"  style="width: 126px !important; border-radius: 30px; border: 1px solid #90CA40; background: rgba(144, 202, 64, 0.16);">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                                                <circle cx="8" cy="8" r="8" fill="#90CA40" />
                                                                            </svg> &nbsp;&nbsp;<a  href="#">Unassigned</a>
                                                                            </div>
                                                                        </button> -->
                                                                         <div class="Outreach"><button class="btn btn-light"  style="width: 126px!important; height: 40px!important; border-radius: 30px; border: 1px solid #90CA40; background: rgba(144, 202, 64, 0.16);">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                                                <circle cx="8" cy="8" r="8" fill="#90CA40" />
                                                                            </svg> &nbsp;&nbsp;<a  href="#">Outreach</a>
                                                                            </div>
                                                                        </button>
                                                                    
                                                                </span>
                                                                
                                                                <div class="fs-12 text-muted text-wrap text-truncate mail-msg-content">                                                                   
                                                                     <button  class="btn p-0 lh-1 mail-starred true border-0 float-end">
                                                                        <i class="ri-delete-bin-fill fs-14"></i> </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-sm-flex align-items-top mt-3">
                                                        <div class="me-3 mt-1"> <input class="form-check-input"
                                                                type="checkbox" id="checkboxNoLabel1" value=""
                                                                aria-label="..."> </div>
                                                        <div class="me-1 lh-1"> <span
                                                                class="avatar avatar-md online me-2 avatar-rounded mail-msg-avatar">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                            <path d="M17 6.3757L9.5 2.00012L2 6.3757M17 6.3757V17.0007C17 17.1665 16.9342 17.3254 16.8169 17.4427C16.6997 17.5599 16.5408 17.6257 16.375 17.6257H2.625C2.45924 17.6257 2.30027 17.5599 2.18306 17.4427C2.06585 17.3254 2 17.1665 2 17.0007V6.3757M17 6.3757L9.5 10.75L2 6.3757" stroke="#5E718D" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg> </span>
                                                        </div>
                                                        <div class="flex-fill"> <a href="javascript:void(0);"
                                                                data-bs-toggle="offcanvas"
                                                                data-bs-target="#offcanvasRight"
                                                                aria-controls="offcanvasRight">
                                                                <p class="mb-1 fs-14"><button  class="btn p-0 lh-1 mail-starred true border-0 float-start">
                                                                <i class="ri-mail-lin fs-14"></i> </button> Richard Brown
                                                                <span class="float-end text-muted fw-normal fs-11">Tue, Aug 12, 12:45 pm</span>
                                                                </p>
                                                            </a>
                                                            
                                                            <div class="mail-msg mb-3">
                                                                 <span class="d-block mb-0 fw-medium text-truncate w-75">
                                                                    <button class="btn p-0 lh-1 mail-starred true border-0 float-start fs-14">
                                                                        <i class="ri-star-fill "></i> </button> <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <g id="Icon">
                                                                            <path id="Vector" d="M10.4995 4.24963L3.99112 10.8661C3.7567 11.1006 3.625 11.4185 3.625 11.75C3.625 12.0815 3.7567 12.3995 3.99112 12.6339C4.22554 12.8683 4.54348 13 4.875 13C5.20652 13 5.52446 12.8683 5.75888 12.6339L13.5173 4.7674C13.7495 4.53525 13.9336 4.25966 14.0592 3.95634C14.1849 3.65303 14.2495 3.32794 14.2495 2.99963C14.2495 2.67133 14.1849 2.34624 14.0592 2.04293C13.9336 1.73961 13.7495 1.46401 13.5173 1.23187C13.2852 0.99972 13.0096 0.815572 12.7063 0.689935C12.4029 0.564298 12.0778 0.499634 11.7495 0.499634C11.4212 0.499634 11.0961 0.564298 10.7928 0.689935C10.4895 0.815572 10.2139 0.999721 9.98177 1.23187L2.22335 9.09836C1.52009 9.80163 1.125 10.7555 1.125 11.75C1.125 12.7446 1.52009 13.6984 2.22335 14.4017C2.92661 15.1049 3.88044 15.5 4.875 15.5C5.86956 15.5 6.82339 15.1049 7.52665 14.4017L13.937 7.99964" stroke="#5E718D" stroke-linecap="round" stroke-linejoin="round"/>
                                                                            </g>
                                                                            </svg>
                                                                            Guest posting enquiry for sites with DA40+, DR 12. 
                                                                        <!-- <div class="Unassignedh"><button class="btn btn-light"  style="width: 126px !important; border-radius: 30px; border: 1px solid #90CA40; background: rgba(144, 202, 64, 0.16);">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                                                <circle cx="8" cy="8" r="8" fill="#90CA40" />
                                                                            </svg> &nbsp;&nbsp;<a  href="#">Unassigned</a>
                                                                            </div>
                                                                        </button> -->
                                                                         <div class="Payments"><button class="btn btn-light"  style="width: 126px!important; height: 40px!important; border-radius: 30px !important; border: 1px solid #A97BC6 !important; background: rgba(169, 123, 198, 0.16) !important;">
                                                                         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                                                 <circle cx="8" cy="8" r="8" fill="#A97BC6"/>
                                                                        </svg> &nbsp;&nbsp;<a  href="#">Payments</a>
                                                                        </div>
                                                                        </button>
                                                                    
                                                                </span>
                                                                
                                                                <div class="fs-12 text-muted text-wrap text-truncate mail-msg-content">                                                                   
                                                                     <button  class="btn p-0 lh-1 mail-starred true border-0 float-end">
                                                                        <i class="ri-delete-bin-fill fs-14"></i> </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="active">
                                                    <div class="d-sm-flex align-items-top mt-3">
                                                        <div class="me-3 mt-1"> <input class="form-check-input"
                                                                type="checkbox" id="checkboxNoLabel1" value=""
                                                                aria-label="..."> </div>
                                                        <div class="me-1 lh-1"> <span
                                                                class="avatar avatar-md online me-2 avatar-rounded mail-msg-avatar">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                            <path d="M17 6.3757L9.5 2.00012L2 6.3757M17 6.3757V17.0007C17 17.1665 16.9342 17.3254 16.8169 17.4427C16.6997 17.5599 16.5408 17.6257 16.375 17.6257H2.625C2.45924 17.6257 2.30027 17.5599 2.18306 17.4427C2.06585 17.3254 2 17.1665 2 17.0007V6.3757M17 6.3757L9.5 10.75L2 6.3757" stroke="#5E718D" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg> </span>
                                                        </div>
                                                        <div class="flex-fill"> <a href="javascript:void(0);"
                                                                data-bs-toggle="offcanvas"
                                                                data-bs-target="#offcanvasRight"
                                                                aria-controls="offcanvasRight">
                                                                <p class="mb-1 fs-14"><button  class="btn p-0 lh-1 mail-starred true border-0 float-start">
                                                                <i class="ri-mail-lin fs-14"></i> </button> Richard Brown
                                                                <span class="float-end text-muted fw-normal fs-11">Tue, Aug 12, 12:45 pm</span>
                                                                </p>
                                                            </a>
                                                            
                                                            <div class="mail-msg mb-3">
                                                                 <span class="d-block mb-0 fw-medium text-truncate w-75">
                                                                    <button class="btn p-0 lh-1 mail-starred true border-0 float-start fs-14">
                                                                        <i class="ri-star-fill "></i> </button> &nbsp;&nbsp; Guest posting enquiry for sites with DA40+, DR 12 also content writing need... 
                                                                        <!-- <div class="Unassignedh"><button class="btn btn-light"  style="width: 126px !important; border-radius: 30px; border: 1px solid #90CA40; background: rgba(144, 202, 64, 0.16);">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                                                <circle cx="8" cy="8" r="8" fill="#90CA40" />
                                                                            </svg> &nbsp;&nbsp;<a  href="#">Unassigned</a>
                                                                            </div>
                                                                        </button> -->
                                                                         <div class="Support"><button class="btn btn-light"  style="width: 126px!important; height: 40px!important; border-radius: 30px; border: 1px solid #70A9EC; background: rgba(112, 169, 236, 0.16);">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                                                    <circle cx="8" cy="8" r="8" fill="#70A9EC"/>
                                                                            </svg> &nbsp;&nbsp;<a  href="#">Support</a>
                                                                        </div>
                                                                    </button>
                                                                    
                                                                </span>
                                                                
                                                                <div class="fs-12 text-muted text-wrap text-truncate mail-msg-content">                                                                   
                                                                     <button  class="btn p-0 lh-1 mail-starred true border-0 float-end">
                                                                        <i class="ri-delete-bin-fill fs-14"></i> </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                
                                                
                                                </li>
                                                <li class="active">
                                                    <div class="d-sm-flex align-items-top mt-3">
                                                        <div class="me-3 mt-1"> <input class="form-check-input"
                                                                type="checkbox" id="checkboxNoLabel1" value=""
                                                                aria-label="..."> </div>
                                                        <div class="me-1 lh-1"> <span
                                                                class="avatar avatar-md online me-2 avatar-rounded mail-msg-avatar">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                            <path d="M17 6.3757L9.5 2.00012L2 6.3757M17 6.3757V17.0007C17 17.1665 16.9342 17.3254 16.8169 17.4427C16.6997 17.5599 16.5408 17.6257 16.375 17.6257H2.625C2.45924 17.6257 2.30027 17.5599 2.18306 17.4427C2.06585 17.3254 2 17.1665 2 17.0007V6.3757M17 6.3757L9.5 10.75L2 6.3757" stroke="#5E718D" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg> </span>
                                                        </div>
                                                        <div class="flex-fill"> <a href="javascript:void(0);"
                                                                data-bs-toggle="offcanvas"
                                                                data-bs-target="#offcanvasRight"
                                                                aria-controls="offcanvasRight">
                                                                <p class="mb-1 fs-14"><button  class="btn p-0 lh-1 mail-starred true border-0 float-start">
                                                                <i class="ri-mail-lin fs-14"></i> </button> Richard Brown
                                                                <span class="float-end text-muted fw-normal fs-11">Tue, Aug 12, 12:45 pm</span>
                                                                </p>
                                                            </a>
                                                            
                                                            <div class="mail-msg mb-3">
                                                                 <span class="d-block mb-0 fw-medium text-truncate w-75">
                                                                    <button class="btn p-0 lh-1 mail-starred true border-0 float-start fs-14">
                                                                        <i class="ri-star-fill "></i> </button> 🎁 Guest posting enquiry for sites with DA40+, DR 12.
                                                                        <!-- <div class="Unassignedh"><button class="btn btn-light"  style="width: 126px !important; border-radius: 30px; border: 1px solid #90CA40; background: rgba(144, 202, 64, 0.16);">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                                                <circle cx="8" cy="8" r="8" fill="#90CA40" />
                                                                            </svg> &nbsp;&nbsp;<a  href="#">Unassigned</a>
                                                                            </div>
                                                                        </button> -->
                                                                         <div class="Outreach-Info"><button class="btn btn-light"  style="width: 126px!important; height: 40px!important; border-radius: 30px; border: 1px solid #90CA40; background: rgba(144, 202, 64, 0.16);">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                                                <circle cx="8" cy="8" r="8" fill="#90CA40" />
                                                                            </svg> &nbsp;&nbsp;<a  href="#">Info@BO</a>
                                                                            </div>
                                                                        </button>
                                                                    
                                                                </span>
                                                                
                                                                <div class="fs-12 text-muted text-wrap text-truncate mail-msg-content">                                                                   
                                                                     <button  class="btn p-0 lh-1 mail-starred true border-0 float-end">
                                                                        <i class="ri-delete-bin-fill fs-14"></i> </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                

                                               
                                            </ul>

                                          
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-social" role="tabpanel"
                                        aria-labelledby="pills-social-tab">
                                        <div class="message-list-content mx-n4 px-4 message-list-scroll">
                                            <ul class="message-list" id="mail-list">
                                                <li class="">
                                                    <div class="col-mail col-mail-1">
                                                        <div class="form-check checkbox-wrapper-mail fs-14"> <input
                                                                class="form-check-input" type="checkbox" value="1"
                                                                id="checkbox-1"> <label class="form-check-label"
                                                                for="checkbox-1"></label> </div> <input type="hidden"
                                                            value="assets/images/users/avatar-2.jpg"
                                                            class="mail-userimg"> <button type="button"
                                                            class="btn avatar-xs p-0 favourite-btn fs-15 active"> <svg
                                                                width="18" height="14" viewBox="0 0 18 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g id="Icon">
                                                                    <path id="Vector"
                                                                        d="M13.1855 12.3467L16.75 7L13.1855 1.65331C13.1285 1.5677 13.0511 1.4975 12.9604 1.44895C12.8697 1.4004 12.7684 1.375 12.6655 1.375H1.125C0.95924 1.375 0.800269 1.44085 0.683058 1.55806C0.565848 1.67527 0.5 1.83424 0.5 2V12C0.5 12.1658 0.565848 12.3247 0.683058 12.4419C0.800269 12.5591 0.95924 12.625 1.125 12.625H12.6655C12.7684 12.625 12.8697 12.5996 12.9604 12.551C13.0511 12.5025 13.1285 12.4323 13.1855 12.3467V12.3467Z"
                                                                        stroke="#5E718D" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </g>
                                                            </svg>
                                                        </button> <a href="javascript: void(0);" class="title"><span
                                                                class="title-name">Peter, me</span> </a>
                                                    </div>
                                                    <div class="col-mail col-mail-2"> <a href="javascript: void(0);"
                                                            class="subject"><span class="subject-title">Hello</span> –
                                                            <span class="teaser">Trip home from Colombo has been
                                                                arranged,
                                                                then Jenna will come get me from Stockholm. :)</span>
                                                        </a>
                                                        <div class="date">Mar 7</div>
                                                    </div>
                                                </li>
                                                <li class="">
                                                    <div class="col-mail col-mail-1">
                                                        <div class="form-check checkbox-wrapper-mail fs-14"> <input
                                                                class="form-check-input" type="checkbox" value="2"
                                                                id="checkbox-2"> <label class="form-check-label"
                                                                for="checkbox-2"></label> </div> <input type="hidden"
                                                            value="assets/images/users/avatar-3.jpg"
                                                            class="mail-userimg"> <button type="button"
                                                            class="btn avatar-xs p-0 favourite-btn fs-15 active"> <svg
                                                                width="18" height="14" viewBox="0 0 18 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g id="Icon">
                                                                    <path id="Vector"
                                                                        d="M13.1855 12.3467L16.75 7L13.1855 1.65331C13.1285 1.5677 13.0511 1.4975 12.9604 1.44895C12.8697 1.4004 12.7684 1.375 12.6655 1.375H1.125C0.95924 1.375 0.800269 1.44085 0.683058 1.55806C0.565848 1.67527 0.5 1.83424 0.5 2V12C0.5 12.1658 0.565848 12.3247 0.683058 12.4419C0.800269 12.5591 0.95924 12.625 1.125 12.625H12.6655C12.7684 12.625 12.8697 12.5996 12.9604 12.551C13.0511 12.5025 13.1285 12.4323 13.1855 12.3467V12.3467Z"
                                                                        stroke="#5E718D" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </g>
                                                            </svg>
                                                        </button> <a href="javascript: void(0);" class="title"><span
                                                                class="title-name">Susanna</span> </a>
                                                    </div>
                                                    <div class="col-mail col-mail-2"> <a href="javascript: void(0);"
                                                            class="subject"><span class="subject-title">Freelance -
                                                                Since you asked... and i'm inconceivably bored at the
                                                                train
                                                                station</span> – <span class="teaser">Alright thanks.
                                                                I'll have to re-book that somehow, i'll get
                                                                back to you.</span> </a>
                                                        <div class="date">Mar 7</div>
                                                    </div>
                                                </li>
                                                <li class="">
                                                    <div class="col-mail col-mail-1">
                                                        <div class="form-check checkbox-wrapper-mail fs-14"> <input
                                                                class="form-check-input" type="checkbox" value="3"
                                                                id="checkbox-3"> <label class="form-check-label"
                                                                for="checkbox-3"></label> </div> <input type="hidden"
                                                            value="assets/images/users/avatar-4.jpg"
                                                            class="mail-userimg"> <button type="button"
                                                            class="btn avatar-xs p-0 favourite-btn fs-15 "> <svg
                                                                width="18" height="14" viewBox="0 0 18 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g id="Icon">
                                                                    <path id="Vector"
                                                                        d="M13.1855 12.3467L16.75 7L13.1855 1.65331C13.1285 1.5677 13.0511 1.4975 12.9604 1.44895C12.8697 1.4004 12.7684 1.375 12.6655 1.375H1.125C0.95924 1.375 0.800269 1.44085 0.683058 1.55806C0.565848 1.67527 0.5 1.83424 0.5 2V12C0.5 12.1658 0.565848 12.3247 0.683058 12.4419C0.800269 12.5591 0.95924 12.625 1.125 12.625H12.6655C12.7684 12.625 12.8697 12.5996 12.9604 12.551C13.0511 12.5025 13.1285 12.4323 13.1855 12.3467V12.3467Z"
                                                                        stroke="#5E718D" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </g>
                                                            </svg>
                                                        </button> <a href="javascript: void(0);" class="title"><span
                                                                class="title-name">Web Support Dennis</span> (7)</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2"> <a href="javascript: void(0);"
                                                            class="subject"><span class="subject-title">Re:
                                                                New mail settings</span> – <span class="teaser">Will you
                                                                answer him asap?</span> </a>
                                                        <div class="date">Mar 5</div>
                                                    </div>
                                                </li>
                                                <li class="">
                                                    <div class="col-mail col-mail-1">
                                                        <div class="form-check checkbox-wrapper-mail fs-14"> <input
                                                                class="form-check-input" type="checkbox" value="4"
                                                                id="checkbox-4"> <label class="form-check-label"
                                                                for="checkbox-4"></label> </div> <input type="hidden"
                                                            value="assets/images/users/avatar-5.jpg"
                                                            class="mail-userimg"> <button type="button"
                                                            class="btn avatar-xs p-0 favourite-btn fs-15 "> <svg
                                                                width="18" height="14" viewBox="0 0 18 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g id="Icon">
                                                                    <path id="Vector"
                                                                        d="M13.1855 12.3467L16.75 7L13.1855 1.65331C13.1285 1.5677 13.0511 1.4975 12.9604 1.44895C12.8697 1.4004 12.7684 1.375 12.6655 1.375H1.125C0.95924 1.375 0.800269 1.44085 0.683058 1.55806C0.565848 1.67527 0.5 1.83424 0.5 2V12C0.5 12.1658 0.565848 12.3247 0.683058 12.4419C0.800269 12.5591 0.95924 12.625 1.125 12.625H12.6655C12.7684 12.625 12.8697 12.5996 12.9604 12.551C13.0511 12.5025 13.1285 12.4323 13.1855 12.3467V12.3467Z"
                                                                        stroke="#5E718D" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </g>
                                                            </svg>
                                                        </button> <a href="javascript: void(0);" class="title"><span
                                                                class="title-name">Peter</span> </a>
                                                    </div>
                                                    <div class="col-mail col-mail-2"> <a href="javascript: void(0);"
                                                            class="subject"><span class="subject-title">Support - Off on
                                                                Thursday</span> – <span class="teaser">Eff that place,
                                                                you
                                                                might as well stay here with us instead! Sent from my
                                                                iPhone 4 4 mar 2014 at 5:55 pm</span> </a>
                                                        <div class="date">Mar 4</div>
                                                    </div>
                                                </li>
                                                <li class="">
                                                    <div class="col-mail col-mail-1">
                                                        <div class="form-check checkbox-wrapper-mail fs-14"> <input
                                                                class="form-check-input" type="checkbox" value="5"
                                                                id="checkbox-5"> <label class="form-check-label"
                                                                for="checkbox-5"></label> </div> <input type="hidden"
                                                            value="assets/images/users/avatar-6.jpg"
                                                            class="mail-userimg"> <button type="button"
                                                            class="btn avatar-xs p-0 favourite-btn fs-15 "> <svg
                                                                width="18" height="14" viewBox="0 0 18 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g id="Icon">
                                                                    <path id="Vector"
                                                                        d="M13.1855 12.3467L16.75 7L13.1855 1.65331C13.1285 1.5677 13.0511 1.4975 12.9604 1.44895C12.8697 1.4004 12.7684 1.375 12.6655 1.375H1.125C0.95924 1.375 0.800269 1.44085 0.683058 1.55806C0.565848 1.67527 0.5 1.83424 0.5 2V12C0.5 12.1658 0.565848 12.3247 0.683058 12.4419C0.800269 12.5591 0.95924 12.625 1.125 12.625H12.6655C12.7684 12.625 12.8697 12.5996 12.9604 12.551C13.0511 12.5025 13.1285 12.4323 13.1855 12.3467V12.3467Z"
                                                                        stroke="#5E718D" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </g>
                                                            </svg>
                                                        </button> <a href="javascript: void(0);" class="title"><span
                                                                class="title-name">Medium</span> </a>
                                                    </div>
                                                    <div class="col-mail col-mail-2"> <a href="javascript: void(0);"
                                                            class="subject"><span class="subject-title">Social - This
                                                                Week's Top Stories</span> – <span class="teaser">Our top
                                                                pick
                                                                for you on Medium this week The Man Who Destroyed
                                                                America’s Ego</span> </a>
                                                        <div class="date">Feb 28</div>
                                                    </div>
                                                </li>
                                                <li class="">
                                                    <div class="col-mail col-mail-1">
                                                        <div class="form-check checkbox-wrapper-mail fs-14"> <input
                                                                class="form-check-input" type="checkbox" value="6"
                                                                id="checkbox-6"> <label class="form-check-label"
                                                                for="checkbox-6"></label> </div> <input type="hidden"
                                                            value="assets/images/users/user-dummy-img.jpg"
                                                            class="mail-userimg"> <button type="button"
                                                            class="btn avatar-xs p-0 favourite-btn fs-15 active"> <svg
                                                                width="18" height="14" viewBox="0 0 18 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g id="Icon">
                                                                    <path id="Vector"
                                                                        d="M13.1855 12.3467L16.75 7L13.1855 1.65331C13.1285 1.5677 13.0511 1.4975 12.9604 1.44895C12.8697 1.4004 12.7684 1.375 12.6655 1.375H1.125C0.95924 1.375 0.800269 1.44085 0.683058 1.55806C0.565848 1.67527 0.5 1.83424 0.5 2V12C0.5 12.1658 0.565848 12.3247 0.683058 12.4419C0.800269 12.5591 0.95924 12.625 1.125 12.625H12.6655C12.7684 12.625 12.8697 12.5996 12.9604 12.551C13.0511 12.5025 13.1285 12.4323 13.1855 12.3467V12.3467Z"
                                                                        stroke="#5E718D" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </g>
                                                            </svg>
                                                        </button> <a href="javascript: void(0);" class="title"><span
                                                                class="title-name">Death to Stock</span> </a>
                                                    </div>
                                                    <div class="col-mail col-mail-2"> <a href="javascript: void(0);"
                                                            class="subject"><span class="subject-title">Montly High-Res
                                                                Photos</span> – <span class="teaser">To create this
                                                                month's
                                                                pack, we hosted a party with local musician Jared Mahone
                                                                here in Columbus, Ohio.</span> </a>
                                                        <div class="date">Feb 28</div>
                                                    </div>
                                                </li>
                                                <li class="unread">
                                                    <div class="col-mail col-mail-1">
                                                        <div class="form-check checkbox-wrapper-mail fs-14"> <input
                                                                class="form-check-input" type="checkbox" value="7"
                                                                id="checkbox-7"> <label class="form-check-label"
                                                                for="checkbox-7"></label> </div> <input type="hidden"
                                                            value="assets/images/users/avatar-8.jpg"
                                                            class="mail-userimg"> <button type="button"
                                                            class="btn avatar-xs p-0 favourite-btn fs-15 "> <svg
                                                                width="18" height="14" viewBox="0 0 18 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g id="Icon">
                                                                    <path id="Vector"
                                                                        d="M13.1855 12.3467L16.75 7L13.1855 1.65331C13.1285 1.5677 13.0511 1.4975 12.9604 1.44895C12.8697 1.4004 12.7684 1.375 12.6655 1.375H1.125C0.95924 1.375 0.800269 1.44085 0.683058 1.55806C0.565848 1.67527 0.5 1.83424 0.5 2V12C0.5 12.1658 0.565848 12.3247 0.683058 12.4419C0.800269 12.5591 0.95924 12.625 1.125 12.625H12.6655C12.7684 12.625 12.8697 12.5996 12.9604 12.551C13.0511 12.5025 13.1285 12.4323 13.1855 12.3467V12.3467Z"
                                                                        stroke="#5E718D" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </g>
                                                            </svg>
                                                        </button> <a href="javascript: void(0);" class="title"><span
                                                                class="title-name">Miller, me</span> (5)</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2"> <a href="javascript: void(0);"
                                                            class="subject"><span class="subject-title">Family - Last
                                                                pic over my village</span> – <span class="teaser">Yeah
                                                                i'd like
                                                                that! Do you remember the video you showed me of your
                                                                train ride between Colombo and Kandy? The one
                                                                with the mountain view? I would love to see that one
                                                                again!</span> </a>
                                                        <div class="date">Feb 27</div>
                                                    </div>
                                                </li>
                                                <li class="unread">
                                                    <div class="col-mail col-mail-1">
                                                        <div class="form-check checkbox-wrapper-mail fs-14"> <input
                                                                class="form-check-input" type="checkbox" value="7"
                                                                id="checkbox-7"> <label class="form-check-label"
                                                                for="checkbox-7"></label> </div> <input type="hidden"
                                                            value="assets/images/users/avatar-9.jpg"
                                                            class="mail-userimg"> <button type="button"
                                                            class="btn avatar-xs p-0 favourite-btn fs-15 "> <svg
                                                                width="18" height="14" viewBox="0 0 18 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g id="Icon">
                                                                    <path id="Vector"
                                                                        d="M13.1855 12.3467L16.75 7L13.1855 1.65331C13.1285 1.5677 13.0511 1.4975 12.9604 1.44895C12.8697 1.4004 12.7684 1.375 12.6655 1.375H1.125C0.95924 1.375 0.800269 1.44085 0.683058 1.55806C0.565848 1.67527 0.5 1.83424 0.5 2V12C0.5 12.1658 0.565848 12.3247 0.683058 12.4419C0.800269 12.5591 0.95924 12.625 1.125 12.625H12.6655C12.7684 12.625 12.8697 12.5996 12.9604 12.551C13.0511 12.5025 13.1285 12.4323 13.1855 12.3467V12.3467Z"
                                                                        stroke="#5E718D" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </g>
                                                            </svg>
                                                        </button> <a href="javascript: void(0);" class="title"><span
                                                                class="title-name">Andrew Zimmer</span> (2)</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2"> <a href="javascript: void(0);"
                                                            class="subject"><span class="subject-title">Mochila Beta:
                                                                Subscription Confirmed</span> – <span
                                                                class="teaser">You've been
                                                                confirmed! Welcome to the ruling class of the inbox. For
                                                                your records, here is a copy of the
                                                                information you submitted to us...</span> </a>
                                                        <div class="date">Feb 27</div>
                                                    </div>
                                                </li>
                                                <li class="">
                                                    <div class="col-mail col-mail-1">
                                                        <div class="form-check checkbox-wrapper-mail fs-14"> <input
                                                                class="form-check-input" type="checkbox" value="9"
                                                                id="checkbox-9"> <label class="form-check-label"
                                                                for="checkbox-9"></label> </div> <input type="hidden"
                                                            value="assets/images/users/avatar-10.jpg"
                                                            class="mail-userimg"> <button type="button"
                                                            class="btn avatar-xs p-0 favourite-btn fs-15 active"> <svg
                                                                width="18" height="14" viewBox="0 0 18 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g id="Icon">
                                                                    <path id="Vector"
                                                                        d="M13.1855 12.3467L16.75 7L13.1855 1.65331C13.1285 1.5677 13.0511 1.4975 12.9604 1.44895C12.8697 1.4004 12.7684 1.375 12.6655 1.375H1.125C0.95924 1.375 0.800269 1.44085 0.683058 1.55806C0.565848 1.67527 0.5 1.83424 0.5 2V12C0.5 12.1658 0.565848 12.3247 0.683058 12.4419C0.800269 12.5591 0.95924 12.625 1.125 12.625H12.6655C12.7684 12.625 12.8697 12.5996 12.9604 12.551C13.0511 12.5025 13.1285 12.4323 13.1855 12.3467V12.3467Z"
                                                                        stroke="#5E718D" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </g>
                                                            </svg>
                                                        </button> <a href="javascript: void(0);" class="title"><span
                                                                class="title-name">Infinity HR</span> </a>
                                                    </div>
                                                    <div class="col-mail col-mail-2"> <a href="javascript: void(0);"
                                                            class="subject"><span class="subject-title">Sveriges Hetaste
                                                                sommarjobb</span> – <span class="teaser">Hej Nicklas
                                                                Sandell!
                                                                Vi vill bjuda in dig till "First tour 2014", ett
                                                                rekryteringsevent som erbjuder jobb på 16
                                                                semesterorter iSverige.</span> </a>
                                                        <div class="date">Feb 27</div>
                                                    </div>
                                                </li>
                                                <li class="">
                                                    <div class="col-mail col-mail-1">
                                                        <div class="form-check checkbox-wrapper-mail fs-14"> <input
                                                                class="form-check-input" type="checkbox" value="10"
                                                                id="checkbox-10"> <label class="form-check-label"
                                                                for="checkbox-10"></label> </div>
                                                        <input type="hidden"
                                                            value="assets/images/users/user-dummy-img.jpg"
                                                            class="mail-userimg"> <button type="button"
                                                            class="btn avatar-xs p-0 favourite-btn fs-15 active"> <svg
                                                                width="18" height="14" viewBox="0 0 18 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g id="Icon">
                                                                    <path id="Vector"
                                                                        d="M13.1855 12.3467L16.75 7L13.1855 1.65331C13.1285 1.5677 13.0511 1.4975 12.9604 1.44895C12.8697 1.4004 12.7684 1.375 12.6655 1.375H1.125C0.95924 1.375 0.800269 1.44085 0.683058 1.55806C0.565848 1.67527 0.5 1.83424 0.5 2V12C0.5 12.1658 0.565848 12.3247 0.683058 12.4419C0.800269 12.5591 0.95924 12.625 1.125 12.625H12.6655C12.7684 12.625 12.8697 12.5996 12.9604 12.551C13.0511 12.5025 13.1285 12.4323 13.1855 12.3467V12.3467Z"
                                                                        stroke="#5E718D" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </g>
                                                            </svg>

                                                        </button> <a href="javascript: void(0);" class="title"><span
                                                                class="title-name">Revibe</span> </a>
                                                    </div>
                                                    <div class="col-mail col-mail-2"> <a href="javascript: void(0);"
                                                            class="subject"><span class="subject-title">Friends -
                                                                Weekend on Revibe</span> – <span class="teaser">Today's
                                                                Friday and
                                                                we thought maybe you want some music inspiration for the
                                                                weekend. Here are some trending tracks and
                                                                playlists we think you should give a listen!</span> </a>
                                                        <div class="date">Feb 26</div>
                                                    </div>
                                                </li>
                                                <li class="">
                                                    <div class="col-mail col-mail-1">
                                                        <div class="form-check checkbox-wrapper-mail fs-14"> <input
                                                                class="form-check-input" type="checkbox" value="11"
                                                                id="checkbox-11"> <label class="form-check-label"
                                                                for="checkbox-11"></label> </div>
                                                        <input type="hidden" value="assets/images/users/avatar-4.jpg"
                                                            class="mail-userimg"> <button type="button"
                                                            class="btn avatar-xs p-0 favourite-btn fs-15 "> <svg
                                                                width="18" height="14" viewBox="0 0 18 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g id="Icon">
                                                                    <path id="Vector"
                                                                        d="M13.1855 12.3467L16.75 7L13.1855 1.65331C13.1285 1.5677 13.0511 1.4975 12.9604 1.44895C12.8697 1.4004 12.7684 1.375 12.6655 1.375H1.125C0.95924 1.375 0.800269 1.44085 0.683058 1.55806C0.565848 1.67527 0.5 1.83424 0.5 2V12C0.5 12.1658 0.565848 12.3247 0.683058 12.4419C0.800269 12.5591 0.95924 12.625 1.125 12.625H12.6655C12.7684 12.625 12.8697 12.5996 12.9604 12.551C13.0511 12.5025 13.1285 12.4323 13.1855 12.3467V12.3467Z"
                                                                        stroke="#5E718D" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </g>
                                                            </svg>
                                                        </button> <a href="javascript: void(0);" class="title"><span
                                                                class="title-name">Erik, me</span> </a>
                                                    </div>
                                                    <div class="col-mail col-mail-2"> <a href="javascript: void(0);"
                                                            class="subject"><span class="subject-title">Regarding our
                                                                meeting</span> – <span class="teaser">That's great, see
                                                                you on
                                                                Thursday!</span> </a>
                                                        <div class="date">Feb 25</div>
                                                    </div>
                                                </li>
                                                <li class="unread">
                                                    <div class="col-mail col-mail-1">
                                                        <div class="form-check checkbox-wrapper-mail fs-14"> <input
                                                                class="form-check-input" type="checkbox" value="12"
                                                                id="checkbox-12"> <label class="form-check-label"
                                                                for="checkbox-12"></label> </div>
                                                        <input type="hidden" value="assets/images/users/avatar-5.jpg"
                                                            class="mail-userimg"> <button type="button"
                                                            class="btn avatar-xs p-0 favourite-btn fs-15 "> <svg
                                                                width="18" height="14" viewBox="0 0 18 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g id="Icon">
                                                                    <path id="Vector"
                                                                        d="M13.1855 12.3467L16.75 7L13.1855 1.65331C13.1285 1.5677 13.0511 1.4975 12.9604 1.44895C12.8697 1.4004 12.7684 1.375 12.6655 1.375H1.125C0.95924 1.375 0.800269 1.44085 0.683058 1.55806C0.565848 1.67527 0.5 1.83424 0.5 2V12C0.5 12.1658 0.565848 12.3247 0.683058 12.4419C0.800269 12.5591 0.95924 12.625 1.125 12.625H12.6655C12.7684 12.625 12.8697 12.5996 12.9604 12.551C13.0511 12.5025 13.1285 12.4323 13.1855 12.3467V12.3467Z"
                                                                        stroke="#5E718D" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </g>
                                                            </svg>
                                                        </button> <a href="javascript: void(0);" class="title"><span
                                                                class="title-name">KanbanFlow</span> </a>
                                                    </div>
                                                    <div class="col-mail col-mail-2"> <a href="javascript: void(0);"
                                                            class="subject"><span class="subject-title">Social - Task
                                                                assigned: Clone ARP's website</span> – <span
                                                                class="teaser">You
                                                                have been assigned a task by Alex@Work on the board
                                                                Web.</span> </a>
                                                        <div class="date">Feb 24</div>
                                                    </div>
                                                </li>
                                                <li class="unread">
                                                    <div class="col-mail col-mail-1">
                                                        <div class="form-check checkbox-wrapper-mail fs-14"> <input
                                                                class="form-check-input" type="checkbox" value="13"
                                                                id="checkbox-13"> <label class="form-check-label"
                                                                for="checkbox-13"></label> </div>
                                                        <input type="hidden"
                                                            value="assets/images/users/user-dummy-img.jpg"
                                                            class="mail-userimg"> <button type="button"
                                                            class="btn avatar-xs p-0 favourite-btn fs-15 "> <svg
                                                                width="18" height="14" viewBox="0 0 18 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g id="Icon">
                                                                    <path id="Vector"
                                                                        d="M13.1855 12.3467L16.75 7L13.1855 1.65331C13.1285 1.5677 13.0511 1.4975 12.9604 1.44895C12.8697 1.4004 12.7684 1.375 12.6655 1.375H1.125C0.95924 1.375 0.800269 1.44085 0.683058 1.55806C0.565848 1.67527 0.5 1.83424 0.5 2V12C0.5 12.1658 0.565848 12.3247 0.683058 12.4419C0.800269 12.5591 0.95924 12.625 1.125 12.625H12.6655C12.7684 12.625 12.8697 12.5996 12.9604 12.551C13.0511 12.5025 13.1285 12.4323 13.1855 12.3467V12.3467Z"
                                                                        stroke="#5E718D" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </g>
                                                            </svg>
                                                        </button> <a href="javascript: void(0);" class="title"><span
                                                                class="title-name">Tobias Berggren</span> </a>
                                                    </div>
                                                    <div class="col-mail col-mail-2"> <a href="javascript: void(0);"
                                                            class="subject"><span class="subject-title">Let's go
                                                                fishing!</span> – <span class="teaser">Hey, You wanna
                                                                join me and
                                                                Fred at the lake tomorrow? It'll be awesome.</span> </a>
                                                        <div class="date">Feb 23</div>
                                                    </div>
                                                </li>
                                                <li class="">
                                                    <div class="col-mail col-mail-1">
                                                        <div class="form-check checkbox-wrapper-mail fs-14"> <input
                                                                class="form-check-input" type="checkbox" value="14"
                                                                id="checkbox-14"> <label class="form-check-label"
                                                                for="checkbox-14"></label> </div>
                                                        <input type="hidden" value="assets/images/users/avatar-8.jpg"
                                                            class="mail-userimg"> <button type="button"
                                                            class="btn avatar-xs p-0 favourite-btn fs-15 "> <svg
                                                                width="18" height="14" viewBox="0 0 18 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g id="Icon">
                                                                    <path id="Vector"
                                                                        d="M13.1855 12.3467L16.75 7L13.1855 1.65331C13.1285 1.5677 13.0511 1.4975 12.9604 1.44895C12.8697 1.4004 12.7684 1.375 12.6655 1.375H1.125C0.95924 1.375 0.800269 1.44085 0.683058 1.55806C0.565848 1.67527 0.5 1.83424 0.5 2V12C0.5 12.1658 0.565848 12.3247 0.683058 12.4419C0.800269 12.5591 0.95924 12.625 1.125 12.625H12.6655C12.7684 12.625 12.8697 12.5996 12.9604 12.551C13.0511 12.5025 13.1285 12.4323 13.1855 12.3467V12.3467Z"
                                                                        stroke="#5E718D" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </g>
                                                            </svg>
                                                        </button> <a href="javascript: void(0);" class="title"><span
                                                                class="title-name">Charukaw, me</span> </a>
                                                    </div>
                                                    <div class="col-mail col-mail-2"> <a href="javascript: void(0);"
                                                            class="subject"><span class="subject-title">Hey
                                                                man</span> – <span class="teaser">Nah man sorry i don't.
                                                                Should i get it?</span> </a>
                                                        <div class="date">Feb 23</div>
                                                    </div>
                                                </li>
                                                <li class="">
                                                    <div class="col-mail col-mail-1">
                                                        <div class="form-check checkbox-wrapper-mail fs-14"> <input
                                                                class="form-check-input" type="checkbox" value="15"
                                                                id="checkbox-15"> <label class="form-check-label"
                                                                for="checkbox-15"></label> </div>
                                                        <input type="hidden" value="assets/images/users/avatar-10.jpg"
                                                            class="mail-userimg"> <button type="button"
                                                            class="btn avatar-xs p-0 favourite-btn fs-15 active"> <svg
                                                                width="18" height="14" viewBox="0 0 18 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g id="Icon">
                                                                    <path id="Vector"
                                                                        d="M13.1855 12.3467L16.75 7L13.1855 1.65331C13.1285 1.5677 13.0511 1.4975 12.9604 1.44895C12.8697 1.4004 12.7684 1.375 12.6655 1.375H1.125C0.95924 1.375 0.800269 1.44085 0.683058 1.55806C0.565848 1.67527 0.5 1.83424 0.5 2V12C0.5 12.1658 0.565848 12.3247 0.683058 12.4419C0.800269 12.5591 0.95924 12.625 1.125 12.625H12.6655C12.7684 12.625 12.8697 12.5996 12.9604 12.551C13.0511 12.5025 13.1285 12.4323 13.1855 12.3467V12.3467Z"
                                                                        stroke="#5E718D" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </g>
                                                            </svg>
                                                        </button> <a href="javascript: void(0);" class="title"><span
                                                                class="title-name">Peter</span> </a>
                                                    </div>
                                                    <div class="col-mail col-mail-2"> <a href="javascript: void(0);"
                                                            class="subject"><span class="subject-title">Support - Home
                                                                again!</span> – <span class="teaser">That's just
                                                                perfect! See
                                                                you tomorrow.</span> </a>
                                                        <div class="date">Feb 21</div>
                                                    </div>
                                                </li>
                                                <li class="">
                                                    <div class="col-mail col-mail-1">
                                                        <div class="form-check checkbox-wrapper-mail fs-14"> <input
                                                                class="form-check-input" type="checkbox" value="16"
                                                                id="checkbox-16"> <label class="form-check-label"
                                                                for="checkbox-16"></label> </div>
                                                        <input type="hidden"
                                                            value="assets/images/users/user-dummy-img.jpg"
                                                            class="mail-userimg"> <button type="button"
                                                            class="btn avatar-xs p-0 favourite-btn fs-15 active"> <svg
                                                                width="18" height="14" viewBox="0 0 18 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g id="Icon">
                                                                    <path id="Vector"
                                                                        d="M13.1855 12.3467L16.75 7L13.1855 1.65331C13.1285 1.5677 13.0511 1.4975 12.9604 1.44895C12.8697 1.4004 12.7684 1.375 12.6655 1.375H1.125C0.95924 1.375 0.800269 1.44085 0.683058 1.55806C0.565848 1.67527 0.5 1.83424 0.5 2V12C0.5 12.1658 0.565848 12.3247 0.683058 12.4419C0.800269 12.5591 0.95924 12.625 1.125 12.625H12.6655C12.7684 12.625 12.8697 12.5996 12.9604 12.551C13.0511 12.5025 13.1285 12.4323 13.1855 12.3467V12.3467Z"
                                                                        stroke="#5E718D" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </g>
                                                            </svg>

                                                        </button> <a href="javascript: void(0);" class="title"><span
                                                                class="title-name">Stack Exchange</span> </a>
                                                    </div>
                                                    <div class="col-mail col-mail-2"> <a href="javascript: void(0);"
                                                            class="subject"><span class="subject-title">1
                                                                new items in your Stackexchange inbox</span> – <span
                                                                class="teaser">The following items were added
                                                                to your Stack Exchange global inbox since you last
                                                                checked it.</span> </a>
                                                        <div class="date">Feb 21</div>
                                                    </div>
                                                </li>
                                                <li class="">
                                                    <div class="col-mail col-mail-1">
                                                        <div class="form-check checkbox-wrapper-mail fs-14"> <input
                                                                class="form-check-input" type="checkbox" value="17"
                                                                id="checkbox-17"> <label class="form-check-label"
                                                                for="checkbox-17"></label> </div>
                                                        <input type="hidden" value="assets/images/users/avatar-6.jpg"
                                                            class="mail-userimg"> <button type="button"
                                                            class="btn avatar-xs p-0 favourite-btn fs-15 "> <svg
                                                                width="18" height="14" viewBox="0 0 18 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g id="Icon">
                                                                    <path id="Vector"
                                                                        d="M13.1855 12.3467L16.75 7L13.1855 1.65331C13.1285 1.5677 13.0511 1.4975 12.9604 1.44895C12.8697 1.4004 12.7684 1.375 12.6655 1.375H1.125C0.95924 1.375 0.800269 1.44085 0.683058 1.55806C0.565848 1.67527 0.5 1.83424 0.5 2V12C0.5 12.1658 0.565848 12.3247 0.683058 12.4419C0.800269 12.5591 0.95924 12.625 1.125 12.625H12.6655C12.7684 12.625 12.8697 12.5996 12.9604 12.551C13.0511 12.5025 13.1285 12.4323 13.1855 12.3467V12.3467Z"
                                                                        stroke="#5E718D" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </g>
                                                            </svg>
                                                        </button> <a href="javascript: void(0);" class="title"><span
                                                                class="title-name">Google Drive Team</span> </a>
                                                    </div>
                                                    <div class="col-mail col-mail-2"> <a href="javascript: void(0);"
                                                            class="subject"><span class="subject-title">You
                                                                can now use your storage in Google Drive</span> – <span
                                                                class="teaser">Hey Nicklas Sandell! Thank
                                                                you for purchasing extra storage space in Google
                                                                Drive.</span> </a>
                                                        <div class="date">Feb 20</div>
                                                    </div>
                                                </li>
                                                <li class="">
                                                    <div class="col-mail col-mail-1">
                                                        <div class="form-check checkbox-wrapper-mail fs-14"> <input
                                                                class="form-check-input" type="checkbox" value="18"
                                                                id="checkbox-18"> <label class="form-check-label"
                                                                for="checkbox-18"></label> </div>
                                                        <input type="hidden"
                                                            value="assets/images/users/user-dummy-img.jpg"
                                                            class="mail-userimg"> <button type="button"
                                                            class="btn avatar-xs p-0 favourite-btn fs-15 "> <svg
                                                                width="18" height="14" viewBox="0 0 18 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g id="Icon">
                                                                    <path id="Vector"
                                                                        d="M13.1855 12.3467L16.75 7L13.1855 1.65331C13.1285 1.5677 13.0511 1.4975 12.9604 1.44895C12.8697 1.4004 12.7684 1.375 12.6655 1.375H1.125C0.95924 1.375 0.800269 1.44085 0.683058 1.55806C0.565848 1.67527 0.5 1.83424 0.5 2V12C0.5 12.1658 0.565848 12.3247 0.683058 12.4419C0.800269 12.5591 0.95924 12.625 1.125 12.625H12.6655C12.7684 12.625 12.8697 12.5996 12.9604 12.551C13.0511 12.5025 13.1285 12.4323 13.1855 12.3467V12.3467Z"
                                                                        stroke="#5E718D" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </g>
                                                            </svg>
                                                        </button> <a href="javascript: void(0);" class="title"><span
                                                                class="title-name">Susanna</span> </a>
                                                    </div>
                                                    <div class="col-mail col-mail-2"> <a href="javascript: void(0);"
                                                            class="subject"><span class="subject-title">Train/Bus</span>
                                                            – <span class="teaser">Yes ok, great! I'm not stuck in
                                                                Stockholm anymore, we're making progress.</span> </a>
                                                        <div class="date">Feb 19</div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="pills-promotions" role="tabpanel"
                                        aria-labelledby="pills-promotions-tab">
                                        <div class="message-list-content mx-n4 px-4 message-list-scroll">
                                            <ul class="message-list" id="promotions-mail-list"></ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- end email-content -->

                        <div class="email-detail-content">
                            <div class="p-4 d-flex flex-column h-100">
                                <div class="pb-4 border-bottom border-bottom-dashed">
                                    <div class="row">
                                        <div class="col">
                                            <div class="">
                                                <!-- <button type="button"
                                                    class="btn btn-soft-danger btn-icon btn-sm fs-16 close-btn-email"
                                                    id="close-btn-email">
                                                    <i class="ri-close-fill align-bottom"></i>
                                                </button> -->
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="hstack gap-sm-1 align-items-center flex-wrap email-topbar-link">
                                                <button type="button"
                                                    class="btn btn-ghost-secondary btn-icon btn-sm fs-16 favourite-btn active">
                                                    <i class="ri-star-fill align-bottom"></i>
                                                </button>
                                                <button class="btn btn-ghost-secondary btn-icon btn-sm fs-16">
                                                    <i class="ri-printer-fill align-bottom"></i>
                                                </button>
                                                <button
                                                    class="btn btn-ghost-secondary btn-icon btn-sm fs-16 remove-mail"
                                                    data-remove-id="" data-bs-toggle="modal"
                                                    data-bs-target="#removeItemModal">
                                                    <i class="ri-delete-bin-5-fill align-bottom"></i>
                                                </button>
                                                <div class="dropdown">
                                                    <button class="btn btn-ghost-secondary btn-icon btn-sm fs-16"
                                                        type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="ri-more-2-fill align-bottom"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Mark as Unread</a>
                                                        <a class="dropdown-item" href="#">Mark as Important</a>
                                                        <a class="dropdown-item" href="#">Add to Tasks</a>
                                                        <a class="dropdown-item" href="#">Add Star</a>
                                                        <a class="dropdown-item" href="#">Mute</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mx-n4 px-4 email-detail-content-scroll" data-simplebar>
                                    <div class="mt-4 mb-3">
                                        <h5 class="fw-bold email-subject-title">New updates for Skote Theme</h5>
                                    </div>

                                    <div class="accordion accordion-flush">
                                        <div class="accordion-item border-dashed left">
                                            <div class="accordion-header">
                                                <a role="button"
                                                    class="btn w-100 text-start px-0 bg-transparent shadow-none collapsed"
                                                    data-bs-toggle="collapse" href="#email-collapseOne"
                                                    aria-expanded="true" aria-controls="email-collapseOne">
                                                    <div class="d-flex align-items-center text-muted">
                                                        <div class="flex-shrink-0 avatar-xs me-3">
                                                            <img src="assets/images/users/avatar-3.jpg" alt=""
                                                                class="img-fluid rounded-circle">
                                                        </div>
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <h5 class="fs-14 text-truncate email-user-name mb-0">Jack
                                                                Davis</h5>
                                                            <div class="text-truncate fs-12">to: me</div>
                                                        </div>
                                                        <div class="flex-shrink-0 align-self-start">
                                                            <div class="text-muted fs-12">09 Jan 2022, 11:12 AM</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <div id="email-collapseOne" class="accordion-collapse collapse">
                                                <div class="accordion-body text-body px-0">
                                                    <div>
                                                        <p>Hi,</p>
                                                        <p>Praesent dui ex, dapibus eget mauris ut, finibus vestibulum
                                                            enim. Quisque arcu leo, facilisis in fringilla id, luctus in
                                                            tortor.</p>
                                                        <p>Sed elementum turpis eu lorem interdum, sed porttitor eros
                                                            commodo. Nam eu venenatis tortor, id lacinia diam. Sed
                                                            aliquam in dui et porta. Sed bibendum orci non tincidunt
                                                            ultrices.</p>
                                                        <p>Sincerly,</p>

                                                        <div class="d-flex gap-3">
                                                            <div class="border rounded avatar-xl h-auto">
                                                                <img src="assets/images/small/img-2.jpg" alt=""
                                                                    class="img-fluid rouned-top">
                                                                <div class="py-2 text-center">
                                                                    <a href="#" class="d-block fw-semibold">Download</a>
                                                                </div>
                                                            </div>
                                                            <div class="border rounded avatar-xl h-auto">
                                                                <img src="assets/images/small/img-6.jpg" alt=""
                                                                    class="img-fluid rouned-top">
                                                                <div class="py-2 text-center">
                                                                    <a href="#" class="d-block fw-semibold">Download</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end accordion-item -->

                                        <div class="accordion-item border-dashed right">
                                            <div class="accordion-header">
                                                <a role="button"
                                                    class="btn w-100 text-start px-0 bg-transparent shadow-none collapsed"
                                                    data-bs-toggle="collapse" href="#email-collapseTwo"
                                                    aria-expanded="true" aria-controls="email-collapseTwo">
                                                    <div class="d-flex align-items-center text-muted">
                                                        <div class="flex-shrink-0 avatar-xs me-3">
                                                            <img src="assets/images/users/avatar-1.jpg" alt=""
                                                                class="img-fluid rounded-circle">
                                                        </div>
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <h5 class="fs-14 text-truncate email-user-name-right mb-0">
                                                                Anna Adame</h5>
                                                            <div class="text-truncate fs-12">to: jackdavis@email.com
                                                            </div>
                                                        </div>
                                                        <div class="flex-shrink-0 align-self-start">
                                                            <div class="text-muted fs-12">09 Jan 2022, 02:15 PM</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <div id="email-collapseTwo" class="accordion-collapse collapse">
                                                <div class="accordion-body text-body px-0">
                                                    <div>
                                                        <p>Hi,</p>
                                                        <p>If several languages coalesce, the grammar of the resulting
                                                            language is more simple and regular than that of the
                                                            individual.</p>
                                                        <p>Thank you</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end accordion-item -->

                                        <div class="accordion-item border-dashed left">
                                            <div class="accordion-header">
                                                <a role="button"
                                                    class="btn w-100 text-start px-0 bg-transparent shadow-none"
                                                    data-bs-toggle="collapse" href="#email-collapseThree"
                                                    aria-expanded="true" aria-controls="email-collapseThree">
                                                    <div class="d-flex align-items-center text-muted">
                                                        <div class="flex-shrink-0 avatar-xs me-3">
                                                            <img src="assets/images/users/avatar-3.jpg" alt=""
                                                                class="img-fluid rounded-circle">
                                                        </div>
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <h5 class="fs-14 text-truncate email-user-name mb-0">Jack
                                                                Davis</h5>
                                                            <div class="text-truncate fs-12">to: me</div>
                                                        </div>
                                                        <div class="flex-shrink-0 align-self-start">
                                                            <div class="text-muted fs-12">10 Jan 2022, 10:08 AM</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <div id="email-collapseThree" class="accordion-collapse collapse show">
                                                <div class="accordion-body text-body px-0">
                                                    <div>
                                                        <p>Hi,</p>
                                                        <p>Everyone realizes why a new common language would be
                                                            desirable: one could refuse to pay expensive translators. To
                                                            achieve this, it would be necessary to have uniform grammar
                                                            pronunciation.</p>
                                                        <p>Thank you</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end accordion-item -->
                                    </div>
                                    <!-- end accordion -->
                                </div>
                                <div class="mt-auto">
                                    <form class="mt-2">
                                        <div>
                                            <label for="exampleFormControlTextarea1" class="form-label">Reply :</label>
                                            <textarea class="form-control border-bottom-0 rounded-top rounded-0 border"
                                                id="exampleFormControlTextarea1" rows="3"
                                                placeholder="Enter message"></textarea>
                                            <div class="bg-light px-2 py-1 rouned-bottom border">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="btn-group" role="group">
                                                            <button type="button"
                                                                class="btn btn-sm py-0 fs-15 btn-light"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Bold"><i
                                                                    class="ri-bold align-bottom"></i></button>
                                                            <button type="button"
                                                                class="btn btn-sm py-0 fs-15 btn-light"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Italic"><i
                                                                    class="ri-italic align-bottom"></i></button>
                                                            <button type="button"
                                                                class="btn btn-sm py-0 fs-15 btn-light"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Link"><i
                                                                    class="ri-link align-bottom"></i></button>
                                                            <button type="button"
                                                                class="btn btn-sm py-0 fs-15 btn-light"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Image"><i
                                                                    class="ri-image-2-line align-bottom"></i></button>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-sm btn-success"><i
                                                                    class="ri-send-plane-2-fill align-bottom"></i></button>
                                                            <button type="button"
                                                                class="btn btn-sm btn-success dropdown-toggle dropdown-toggle-split"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <span class="visually-hidden">Toggle Dropdown</span>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a class="dropdown-item" href="#"><i
                                                                            class="ri-timer-line text-muted me-1 align-bottom"></i>
                                                                        Schedule Send</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- end email-detail-content -->
                    </div>
                    <!-- end email wrapper -->


    <!-- Compose Modal -->
    <div class="modal fade" id="composemodal" tabindex="-1" role="dialog" aria-labelledby="composemodalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header p-3 bg-light">
                    <h5 class="modal-title" id="composemodalTitle">New Message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-4">
    <div class="row">
        <div class="col-xl-6 mb-2"> <label for="fromMail" class="form-label">From<sup><i
                        class="ri-star-s-fill text-success fs-8"></i></sup></label> <input type="email"
                class="form-control" id="fromMail" value="jsontaylor2345@gmail.com"> </div>
        <div class="col-xl-6 mb-2"> <label for="toMail" class="form-label">To<sup><i
                        class="ri-star-s-fill text-success fs-8"></i></sup></label>
            <div class="choices" data-type="select-multiple" role="combobox" aria-autocomplete="list"
                aria-haspopup="true" aria-expanded="false">
                <div class="choices__inner"><select class="form-control choices__input" name="toMail" id="toMail"
                        multiple="" hidden="" tabindex="-1" data-choice="active">
                        <option value="Choice 3" data-custom-properties="[object Object]">don@gmail.com</option>
                    </select>
                    <div class="choices__list choices__list--multiple">
                        <div class="choices__item choices__item--selectable" data-item="" data-id="6"
                            data-value="Choice 3" data-custom-properties="[object Object]" aria-selected="true"
                            data-deletable="">don@gmail.com<button type="button" class="choices__button"
                                aria-label="Remove item: 'Choice 3'" data-button="">Remove item</button></div>
                    </div><input type="search" name="search_terms" class="choices__input choices__input--cloned"
                        autocomplete="off" autocapitalize="off" spellcheck="false" role="textbox"
                        aria-autocomplete="list" aria-label="null" aria-activedescendant="choices--toMail-item-choice-2"
                        style="min-width: 1ch; width: 1ch;">
                </div>
                <div class="choices__list choices__list--dropdown" aria-expanded="false">
                    <div class="choices__list" aria-multiselectable="true" role="listbox">
                        <div id="choices--toMail-item-choice-2"
                            class="choices__item choices__item--choice choices__item--selectable is-highlighted"
                            role="option" data-choice="" data-id="2" data-value="Choice 1"
                            data-select-text="Press to select" data-choice-selectable="" aria-selected="true">
                            jay@gmail.com</div>
                        <div id="choices--toMail-item-choice-3"
                            class="choices__item choices__item--choice choices__item--selectable" role="option"
                            data-choice="" data-id="3" data-value="Choice 2" data-select-text="Press to select"
                            data-choice-selectable="" aria-selected="false">kia@gmail.com</div>
                        <div id="choices--toMail-item-choice-4"
                            class="choices__item choices__item--choice choices__item--selectable" role="option"
                            data-choice="" data-id="4" data-value="Choice 4" data-select-text="Press to select"
                            data-choice-selectable="" aria-selected="false">kimo@gmail.com</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 mb-2"> <label for="mailCC" class="form-label text-dark fw-medium">Cc</label> <input
                type="email" class="form-control" id="mailCC"> </div>
        <div class="col-xl-6 mb-2"> <label for="mailBcc" class="form-label text-dark fw-medium">Bcc</label> <input
                type="email" class="form-control" id="mailBcc"> </div>
        <div class="col-xl-12 mb-2"> <label for="Subject" class="form-label">Subject</label> <input type="text"
                class="form-control" id="Subject" placeholder="Subject"> </div>
        <div class="col-xl-12"> <label class="col-form-label">Content :</label>
            <div class="mail-compose">
                <div class="ql-toolbar ql-snow"><span class="ql-formats"><span class="ql-header ql-picker"><span
                                class="ql-picker-label" tabindex="0" role="button" aria-expanded="false"
                                aria-controls="ql-picker-options-5"><svg viewBox="0 0 18 18">
                                    <polygon class="ql-stroke" points="7 11 9 13 11 11 7 11"></polygon>
                                    <polygon class="ql-stroke" points="7 7 9 5 11 7 7 7"></polygon>
                                </svg></span><span class="ql-picker-options" aria-hidden="true" tabindex="-1"
                                id="ql-picker-options-5"><span tabindex="0" role="button" class="ql-picker-item"
                                    data-value="1"></span><span tabindex="0" role="button" class="ql-picker-item"
                                    data-value="2"></span><span tabindex="0" role="button" class="ql-picker-item"
                                    data-value="3"></span><span tabindex="0" role="button" class="ql-picker-item"
                                    data-value="4"></span><span tabindex="0" role="button" class="ql-picker-item"
                                    data-value="5"></span><span tabindex="0" role="button" class="ql-picker-item"
                                    data-value="6"></span><span tabindex="0" role="button"
                                    class="ql-picker-item ql-selected"></span></span></span><select class="ql-header"
                            style="display: none;">
                            <option value="1"></option>
                            <option value="2"></option>
                            <option value="3"></option>
                            <option value="4"></option>
                            <option value="5"></option>
                            <option value="6"></option>
                            <option selected="selected"></option>
                        </select></span><span class="ql-formats"><span class="ql-font ql-picker"><span
                                class="ql-picker-label" tabindex="0" role="button" aria-expanded="false"
                                aria-controls="ql-picker-options-6"><svg viewBox="0 0 18 18">
                                    <polygon class="ql-stroke" points="7 11 9 13 11 11 7 11"></polygon>
                                    <polygon class="ql-stroke" points="7 7 9 5 11 7 7 7"></polygon>
                                </svg></span><span class="ql-picker-options" aria-hidden="true" tabindex="-1"
                                id="ql-picker-options-6"><span tabindex="0" role="button"
                                    class="ql-picker-item ql-selected"></span><span tabindex="0" role="button"
                                    class="ql-picker-item" data-value="serif"></span><span tabindex="0" role="button"
                                    class="ql-picker-item" data-value="monospace"></span></span></span><select
                            class="ql-font" style="display: none;">
                            <option selected="selected"></option>
                            <option value="serif"></option>
                            <option value="monospace"></option>
                        </select></span><span class="ql-formats"><button type="button" class="ql-bold"><svg
                                viewBox="0 0 18 18">
                                <path class="ql-stroke"
                                    d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z">
                                </path>
                                <path class="ql-stroke"
                                    d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z">
                                </path>
                            </svg></button><button type="button" class="ql-italic"><svg viewBox="0 0 18 18">
                                <line class="ql-stroke" x1="7" x2="13" y1="4" y2="4"></line>
                                <line class="ql-stroke" x1="5" x2="11" y1="14" y2="14"></line>
                                <line class="ql-stroke" x1="8" x2="10" y1="14" y2="4"></line>
                            </svg></button><button type="button" class="ql-underline"><svg viewBox="0 0 18 18">
                                <path class="ql-stroke" d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3">
                                </path>
                                <rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="12" x="3" y="15"></rect>
                            </svg></button><button type="button" class="ql-strike"><svg viewBox="0 0 18 18">
                                <line class="ql-stroke ql-thin" x1="15.5" x2="2.5" y1="8.5" y2="9.5"></line>
                                <path class="ql-fill"
                                    d="M9.007,8C6.542,7.791,6,7.519,6,6.5,6,5.792,7.283,5,9,5c1.571,0,2.765.679,2.969,1.309a1,1,0,0,0,1.9-.617C13.356,4.106,11.354,3,9,3,6.2,3,4,4.538,4,6.5a3.2,3.2,0,0,0,.5,1.843Z">
                                </path>
                                <path class="ql-fill"
                                    d="M8.984,10C11.457,10.208,12,10.479,12,11.5c0,0.708-1.283,1.5-3,1.5-1.571,0-2.765-.679-2.969-1.309a1,1,0,1,0-1.9.617C4.644,13.894,6.646,15,9,15c2.8,0,5-1.538,5-3.5a3.2,3.2,0,0,0-.5-1.843Z">
                                </path>
                            </svg></button></span><span class="ql-formats"><button type="button"
                            class="ql-blockquote"><svg viewBox="0 0 18 18">
                                <rect class="ql-fill ql-stroke" height="3" width="3" x="4" y="5"></rect>
                                <rect class="ql-fill ql-stroke" height="3" width="3" x="11" y="5"></rect>
                                <path class="ql-even ql-fill ql-stroke" d="M7,8c0,4.031-3,5-3,5"></path>
                                <path class="ql-even ql-fill ql-stroke" d="M14,8c0,4.031-3,5-3,5"></path>
                            </svg></button><button type="button" class="ql-code-block"><svg viewBox="0 0 18 18">
                                <polyline class="ql-even ql-stroke" points="5 7 3 9 5 11"></polyline>
                                <polyline class="ql-even ql-stroke" points="13 7 15 9 13 11"></polyline>
                                <line class="ql-stroke" x1="10" x2="8" y1="5" y2="13"></line>
                            </svg></button></span><span class="ql-formats"><button type="button" class="ql-header"
                            value="1"><svg viewBox="0 0 18 18">
                                <path class="ql-fill"
                                    d="M10,4V14a1,1,0,0,1-2,0V10H3v4a1,1,0,0,1-2,0V4A1,1,0,0,1,3,4V8H8V4a1,1,0,0,1,2,0Zm6.06787,9.209H14.98975V7.59863a.54085.54085,0,0,0-.605-.60547h-.62744a1.01119,1.01119,0,0,0-.748.29688L11.645,8.56641a.5435.5435,0,0,0-.022.8584l.28613.30762a.53861.53861,0,0,0,.84717.0332l.09912-.08789a1.2137,1.2137,0,0,0,.2417-.35254h.02246s-.01123.30859-.01123.60547V13.209H12.041a.54085.54085,0,0,0-.605.60547v.43945a.54085.54085,0,0,0,.605.60547h4.02686a.54085.54085,0,0,0,.605-.60547v-.43945A.54085.54085,0,0,0,16.06787,13.209Z">
                                </path>
                            </svg></button><button type="button" class="ql-header" value="2"><svg viewBox="0 0 18 18">
                                <path class="ql-fill"
                                    d="M16.73975,13.81445v.43945a.54085.54085,0,0,1-.605.60547H11.855a.58392.58392,0,0,1-.64893-.60547V14.0127c0-2.90527,3.39941-3.42187,3.39941-4.55469a.77675.77675,0,0,0-.84717-.78125,1.17684,1.17684,0,0,0-.83594.38477c-.2749.26367-.561.374-.85791.13184l-.4292-.34082c-.30811-.24219-.38525-.51758-.1543-.81445a2.97155,2.97155,0,0,1,2.45361-1.17676,2.45393,2.45393,0,0,1,2.68408,2.40918c0,2.45312-3.1792,2.92676-3.27832,3.93848h2.79443A.54085.54085,0,0,1,16.73975,13.81445ZM9,3A.99974.99974,0,0,0,8,4V8H3V4A1,1,0,0,0,1,4V14a1,1,0,0,0,2,0V10H8v4a1,1,0,0,0,2,0V4A.99974.99974,0,0,0,9,3Z">
                                </path>
                            </svg></button></span><span class="ql-formats"><button type="button" class="ql-list"
                            value="ordered"><svg viewBox="0 0 18 18">
                                <line class="ql-stroke" x1="7" x2="15" y1="4" y2="4"></line>
                                <line class="ql-stroke" x1="7" x2="15" y1="9" y2="9"></line>
                                <line class="ql-stroke" x1="7" x2="15" y1="14" y2="14"></line>
                                <line class="ql-stroke ql-thin" x1="2.5" x2="4.5" y1="5.5" y2="5.5"></line>
                                <path class="ql-fill"
                                    d="M3.5,6A0.5,0.5,0,0,1,3,5.5V3.085l-0.276.138A0.5,0.5,0,0,1,2.053,3c-0.124-.247-0.023-0.324.224-0.447l1-.5A0.5,0.5,0,0,1,4,2.5v3A0.5,0.5,0,0,1,3.5,6Z">
                                </path>
                                <path class="ql-stroke ql-thin"
                                    d="M4.5,10.5h-2c0-.234,1.85-1.076,1.85-2.234A0.959,0.959,0,0,0,2.5,8.156"></path>
                                <path class="ql-stroke ql-thin"
                                    d="M2.5,14.846a0.959,0.959,0,0,0,1.85-.109A0.7,0.7,0,0,0,3.75,14a0.688,0.688,0,0,0,.6-0.736,0.959,0.959,0,0,0-1.85-.109">
                                </path>
                            </svg></button><button type="button" class="ql-list" value="bullet"><svg
                                viewBox="0 0 18 18">
                                <line class="ql-stroke" x1="6" x2="15" y1="4" y2="4"></line>
                                <line class="ql-stroke" x1="6" x2="15" y1="9" y2="9"></line>
                                <line class="ql-stroke" x1="6" x2="15" y1="14" y2="14"></line>
                                <line class="ql-stroke" x1="3" x2="3" y1="4" y2="4"></line>
                                <line class="ql-stroke" x1="3" x2="3" y1="9" y2="9"></line>
                                <line class="ql-stroke" x1="3" x2="3" y1="14" y2="14"></line>
                            </svg></button></span><span class="ql-formats"><span
                            class="ql-color ql-picker ql-color-picker"><span class="ql-picker-label" tabindex="0"
                                role="button" aria-expanded="false" aria-controls="ql-picker-options-7"><svg
                                    viewBox="0 0 18 18">
                                    <line class="ql-color-label ql-stroke ql-transparent" x1="3" x2="15" y1="15"
                                        y2="15"></line>
                                    <polyline class="ql-stroke" points="5.5 11 9 3 12.5 11"></polyline>
                                    <line class="ql-stroke" x1="11.63" x2="6.38" y1="9" y2="9"></line>
                                </svg></span><span class="ql-picker-options" aria-hidden="true" tabindex="-1"
                                id="ql-picker-options-7"><span tabindex="0" role="button"
                                    class="ql-picker-item ql-selected ql-primary"></span><span tabindex="0"
                                    role="button" class="ql-picker-item ql-primary" data-value="#e60000"
                                    style="background-color: rgb(230, 0, 0);"></span><span tabindex="0" role="button"
                                    class="ql-picker-item ql-primary" data-value="#ff9900"
                                    style="background-color: rgb(255, 153, 0);"></span><span tabindex="0" role="button"
                                    class="ql-picker-item ql-primary" data-value="#ffff00"
                                    style="background-color: rgb(255, 255, 0);"></span><span tabindex="0" role="button"
                                    class="ql-picker-item ql-primary" data-value="#008a00"
                                    style="background-color: rgb(0, 138, 0);"></span><span tabindex="0" role="button"
                                    class="ql-picker-item ql-primary" data-value="#0066cc"
                                    style="background-color: rgb(0, 102, 204);"></span><span tabindex="0" role="button"
                                    class="ql-picker-item ql-primary" data-value="#9933ff"
                                    style="background-color: rgb(153, 51, 255);"></span><span tabindex="0" role="button"
                                    class="ql-picker-item" data-value="#ffffff"
                                    style="background-color: rgb(255, 255, 255);"></span><span tabindex="0"
                                    role="button" class="ql-picker-item" data-value="#facccc"
                                    style="background-color: rgb(250, 204, 204);"></span><span tabindex="0"
                                    role="button" class="ql-picker-item" data-value="#ffebcc"
                                    style="background-color: rgb(255, 235, 204);"></span><span tabindex="0"
                                    role="button" class="ql-picker-item" data-value="#ffffcc"
                                    style="background-color: rgb(255, 255, 204);"></span><span tabindex="0"
                                    role="button" class="ql-picker-item" data-value="#cce8cc"
                                    style="background-color: rgb(204, 232, 204);"></span><span tabindex="0"
                                    role="button" class="ql-picker-item" data-value="#cce0f5"
                                    style="background-color: rgb(204, 224, 245);"></span><span tabindex="0"
                                    role="button" class="ql-picker-item" data-value="#ebd6ff"
                                    style="background-color: rgb(235, 214, 255);"></span><span tabindex="0"
                                    role="button" class="ql-picker-item" data-value="#bbbbbb"
                                    style="background-color: rgb(187, 187, 187);"></span><span tabindex="0"
                                    role="button" class="ql-picker-item" data-value="#f06666"
                                    style="background-color: rgb(240, 102, 102);"></span><span tabindex="0"
                                    role="button" class="ql-picker-item" data-value="#ffc266"
                                    style="background-color: rgb(255, 194, 102);"></span><span tabindex="0"
                                    role="button" class="ql-picker-item" data-value="#ffff66"
                                    style="background-color: rgb(255, 255, 102);"></span><span tabindex="0"
                                    role="button" class="ql-picker-item" data-value="#66b966"
                                    style="background-color: rgb(102, 185, 102);"></span><span tabindex="0"
                                    role="button" class="ql-picker-item" data-value="#66a3e0"
                                    style="background-color: rgb(102, 163, 224);"></span><span tabindex="0"
                                    role="button" class="ql-picker-item" data-value="#c285ff"
                                    style="background-color: rgb(194, 133, 255);"></span><span tabindex="0"
                                    role="button" class="ql-picker-item" data-value="#888888"
                                    style="background-color: rgb(136, 136, 136);"></span><span tabindex="0"
                                    role="button" class="ql-picker-item" data-value="#a10000"
                                    style="background-color: rgb(161, 0, 0);"></span><span tabindex="0" role="button"
                                    class="ql-picker-item" data-value="#b26b00"
                                    style="background-color: rgb(178, 107, 0);"></span><span tabindex="0" role="button"
                                    class="ql-picker-item" data-value="#b2b200"
                                    style="background-color: rgb(178, 178, 0);"></span><span tabindex="0" role="button"
                                    class="ql-picker-item" data-value="#006100"
                                    style="background-color: rgb(0, 97, 0);"></span><span tabindex="0" role="button"
                                    class="ql-picker-item" data-value="#0047b2"
                                    style="background-color: rgb(0, 71, 178);"></span><span tabindex="0" role="button"
                                    class="ql-picker-item" data-value="#6b24b2"
                                    style="background-color: rgb(107, 36, 178);"></span><span tabindex="0" role="button"
                                    class="ql-picker-item" data-value="#444444"
                                    style="background-color: rgb(68, 68, 68);"></span><span tabindex="0" role="button"
                                    class="ql-picker-item" data-value="#5c0000"
                                    style="background-color: rgb(92, 0, 0);"></span><span tabindex="0" role="button"
                                    class="ql-picker-item" data-value="#663d00"
                                    style="background-color: rgb(102, 61, 0);"></span><span tabindex="0" role="button"
                                    class="ql-picker-item" data-value="#666600"
                                    style="background-color: rgb(102, 102, 0);"></span><span tabindex="0" role="button"
                                    class="ql-picker-item" data-value="#003700"
                                    style="background-color: rgb(0, 55, 0);"></span><span tabindex="0" role="button"
                                    class="ql-picker-item" data-value="#002966"
                                    style="background-color: rgb(0, 41, 102);"></span><span tabindex="0" role="button"
                                    class="ql-picker-item" data-value="#3d1466"
                                    style="background-color: rgb(61, 20, 102);"></span></span></span><select
                            class="ql-color" style="display: none;">
                            <option selected="selected"></option>
                            <option value="#e60000"></option>
                            <option value="#ff9900"></option>
                            <option value="#ffff00"></option>
                            <option value="#008a00"></option>
                            <option value="#0066cc"></option>
                            <option value="#9933ff"></option>
                            <option value="#ffffff"></option>
                            <option value="#facccc"></option>
                            <option value="#ffebcc"></option>
                            <option value="#ffffcc"></option>
                            <option value="#cce8cc"></option>
                            <option value="#cce0f5"></option>
                            <option value="#ebd6ff"></option>
                            <option value="#bbbbbb"></option>
                            <option value="#f06666"></option>
                            <option value="#ffc266"></option>
                            <option value="#ffff66"></option>
                            <option value="#66b966"></option>
                            <option value="#66a3e0"></option>
                            <option value="#c285ff"></option>
                            <option value="#888888"></option>
                            <option value="#a10000"></option>
                            <option value="#b26b00"></option>
                            <option value="#b2b200"></option>
                            <option value="#006100"></option>
                            <option value="#0047b2"></option>
                            <option value="#6b24b2"></option>
                            <option value="#444444"></option>
                            <option value="#5c0000"></option>
                            <option value="#663d00"></option>
                            <option value="#666600"></option>
                            <option value="#003700"></option>
                            <option value="#002966"></option>
                            <option value="#3d1466"></option>
                        </select><span class="ql-background ql-picker ql-color-picker"><span class="ql-picker-label"
                                tabindex="0" role="button" aria-expanded="false"
                                aria-controls="ql-picker-options-8"><svg viewBox="0 0 18 18">
                                    <g class="ql-fill ql-color-label">
                                        <polygon points="6 6.868 6 6 5 6 5 7 5.942 7 6 6.868"></polygon>
                                        <rect height="1" width="1" x="4" y="4"></rect>
                                        <polygon points="6.817 5 6 5 6 6 6.38 6 6.817 5"></polygon>
                                        <rect height="1" width="1" x="2" y="6"></rect>
                                        <rect height="1" width="1" x="3" y="5"></rect>
                                        <rect height="1" width="1" x="4" y="7"></rect>
                                        <polygon points="4 11.439 4 11 3 11 3 12 3.755 12 4 11.439"></polygon>
                                        <rect height="1" width="1" x="2" y="12"></rect>
                                        <rect height="1" width="1" x="2" y="9"></rect>
                                        <rect height="1" width="1" x="2" y="15"></rect>
                                        <polygon points="4.63 10 4 10 4 11 4.192 11 4.63 10"></polygon>
                                        <rect height="1" width="1" x="3" y="8"></rect>
                                        <path d="M10.832,4.2L11,4.582V4H10.708A1.948,1.948,0,0,1,10.832,4.2Z"></path>
                                        <path d="M7,4.582L7.168,4.2A1.929,1.929,0,0,1,7.292,4H7V4.582Z"></path>
                                        <path d="M8,13H7.683l-0.351.8a1.933,1.933,0,0,1-.124.2H8V13Z"></path>
                                        <rect height="1" width="1" x="12" y="2"></rect>
                                        <rect height="1" width="1" x="11" y="3"></rect>
                                        <path d="M9,3H8V3.282A1.985,1.985,0,0,1,9,3Z"></path>
                                        <rect height="1" width="1" x="2" y="3"></rect>
                                        <rect height="1" width="1" x="6" y="2"></rect>
                                        <rect height="1" width="1" x="3" y="2"></rect>
                                        <rect height="1" width="1" x="5" y="3"></rect>
                                        <rect height="1" width="1" x="9" y="2"></rect>
                                        <rect height="1" width="1" x="15" y="14"></rect>
                                        <polygon
                                            points="13.447 10.174 13.469 10.225 13.472 10.232 13.808 11 14 11 14 10 13.37 10 13.447 10.174">
                                        </polygon>
                                        <rect height="1" width="1" x="13" y="7"></rect>
                                        <rect height="1" width="1" x="15" y="5"></rect>
                                        <rect height="1" width="1" x="14" y="6"></rect>
                                        <rect height="1" width="1" x="15" y="8"></rect>
                                        <rect height="1" width="1" x="14" y="9"></rect>
                                        <path d="M3.775,14H3v1H4V14.314A1.97,1.97,0,0,1,3.775,14Z"></path>
                                        <rect height="1" width="1" x="14" y="3"></rect>
                                        <polygon points="12 6.868 12 6 11.62 6 12 6.868"></polygon>
                                        <rect height="1" width="1" x="15" y="2"></rect>
                                        <rect height="1" width="1" x="12" y="5"></rect>
                                        <rect height="1" width="1" x="13" y="4"></rect>
                                        <polygon points="12.933 9 13 9 13 8 12.495 8 12.933 9"></polygon>
                                        <rect height="1" width="1" x="9" y="14"></rect>
                                        <rect height="1" width="1" x="8" y="15"></rect>
                                        <path d="M6,14.926V15H7V14.316A1.993,1.993,0,0,1,6,14.926Z"></path>
                                        <rect height="1" width="1" x="5" y="15"></rect>
                                        <path d="M10.668,13.8L10.317,13H10v1h0.792A1.947,1.947,0,0,1,10.668,13.8Z">
                                        </path>
                                        <rect height="1" width="1" x="11" y="15"></rect>
                                        <path d="M14.332,12.2a1.99,1.99,0,0,1,.166.8H15V12H14.245Z"></path>
                                        <rect height="1" width="1" x="14" y="15"></rect>
                                        <rect height="1" width="1" x="15" y="11"></rect>
                                    </g>
                                    <polyline class="ql-stroke" points="5.5 13 9 5 12.5 13"></polyline>
                                    <line class="ql-stroke" x1="11.63" x2="6.38" y1="11" y2="11"></line>
                                </svg></span><span class="ql-picker-options" aria-hidden="true" tabindex="-1"
                                id="ql-picker-options-8"><span tabindex="0" role="button"
                                    class="ql-picker-item ql-primary" data-value="#000000"
                                    style="background-color: rgb(0, 0, 0);"></span><span tabindex="0" role="button"
                                    class="ql-picker-item ql-primary" data-value="#e60000"
                                    style="background-color: rgb(230, 0, 0);"></span><span tabindex="0" role="button"
                                    class="ql-picker-item ql-primary" data-value="#ff9900"
                                    style="background-color: rgb(255, 153, 0);"></span><span tabindex="0" role="button"
                                    class="ql-picker-item ql-primary" data-value="#ffff00"
                                    style="background-color: rgb(255, 255, 0);"></span><span tabindex="0" role="button"
                                    class="ql-picker-item ql-primary" data-value="#008a00"
                                    style="background-color: rgb(0, 138, 0);"></span><span tabindex="0" role="button"
                                    class="ql-picker-item ql-primary" data-value="#0066cc"
                                    style="background-color: rgb(0, 102, 204);"></span><span tabindex="0" role="button"
                                    class="ql-picker-item ql-primary" data-value="#9933ff"
                                    style="background-color: rgb(153, 51, 255);"></span><span tabindex="0" role="button"
                                    class="ql-picker-item ql-selected"></span><span tabindex="0" role="button"
                                    class="ql-picker-item" data-value="#facccc"
                                    style="background-color: rgb(250, 204, 204);"></span><span tabindex="0"
                                    role="button" class="ql-picker-item" data-value="#ffebcc"
                                    style="background-color: rgb(255, 235, 204);"></span><span tabindex="0"
                                    role="button" class="ql-picker-item" data-value="#ffffcc"
                                    style="background-color: rgb(255, 255, 204);"></span><span tabindex="0"
                                    role="button" class="ql-picker-item" data-value="#cce8cc"
                                    style="background-color: rgb(204, 232, 204);"></span><span tabindex="0"
                                    role="button" class="ql-picker-item" data-value="#cce0f5"
                                    style="background-color: rgb(204, 224, 245);"></span><span tabindex="0"
                                    role="button" class="ql-picker-item" data-value="#ebd6ff"
                                    style="background-color: rgb(235, 214, 255);"></span><span tabindex="0"
                                    role="button" class="ql-picker-item" data-value="#bbbbbb"
                                    style="background-color: rgb(187, 187, 187);"></span><span tabindex="0"
                                    role="button" class="ql-picker-item" data-value="#f06666"
                                    style="background-color: rgb(240, 102, 102);"></span><span tabindex="0"
                                    role="button" class="ql-picker-item" data-value="#ffc266"
                                    style="background-color: rgb(255, 194, 102);"></span><span tabindex="0"
                                    role="button" class="ql-picker-item" data-value="#ffff66"
                                    style="background-color: rgb(255, 255, 102);"></span><span tabindex="0"
                                    role="button" class="ql-picker-item" data-value="#66b966"
                                    style="background-color: rgb(102, 185, 102);"></span><span tabindex="0"
                                    role="button" class="ql-picker-item" data-value="#66a3e0"
                                    style="background-color: rgb(102, 163, 224);"></span><span tabindex="0"
                                    role="button" class="ql-picker-item" data-value="#c285ff"
                                    style="background-color: rgb(194, 133, 255);"></span><span tabindex="0"
                                    role="button" class="ql-picker-item" data-value="#888888"
                                    style="background-color: rgb(136, 136, 136);"></span><span tabindex="0"
                                    role="button" class="ql-picker-item" data-value="#a10000"
                                    style="background-color: rgb(161, 0, 0);"></span><span tabindex="0" role="button"
                                    class="ql-picker-item" data-value="#b26b00"
                                    style="background-color: rgb(178, 107, 0);"></span><span tabindex="0" role="button"
                                    class="ql-picker-item" data-value="#b2b200"
                                    style="background-color: rgb(178, 178, 0);"></span><span tabindex="0" role="button"
                                    class="ql-picker-item" data-value="#006100"
                                    style="background-color: rgb(0, 97, 0);"></span><span tabindex="0" role="button"
                                    class="ql-picker-item" data-value="#0047b2"
                                    style="background-color: rgb(0, 71, 178);"></span><span tabindex="0" role="button"
                                    class="ql-picker-item" data-value="#6b24b2"
                                    style="background-color: rgb(107, 36, 178);"></span><span tabindex="0" role="button"
                                    class="ql-picker-item" data-value="#444444"
                                    style="background-color: rgb(68, 68, 68);"></span><span tabindex="0" role="button"
                                    class="ql-picker-item" data-value="#5c0000"
                                    style="background-color: rgb(92, 0, 0);"></span><span tabindex="0" role="button"
                                    class="ql-picker-item" data-value="#663d00"
                                    style="background-color: rgb(102, 61, 0);"></span><span tabindex="0" role="button"
                                    class="ql-picker-item" data-value="#666600"
                                    style="background-color: rgb(102, 102, 0);"></span><span tabindex="0" role="button"
                                    class="ql-picker-item" data-value="#003700"
                                    style="background-color: rgb(0, 55, 0);"></span><span tabindex="0" role="button"
                                    class="ql-picker-item" data-value="#002966"
                                    style="background-color: rgb(0, 41, 102);"></span><span tabindex="0" role="button"
                                    class="ql-picker-item" data-value="#3d1466"
                                    style="background-color: rgb(61, 20, 102);"></span></span></span><select
                            class="ql-background" style="display: none;">
                            <option value="#000000"></option>
                            <option value="#e60000"></option>
                            <option value="#ff9900"></option>
                            <option value="#ffff00"></option>
                            <option value="#008a00"></option>
                            <option value="#0066cc"></option>
                            <option value="#9933ff"></option>
                            <option selected="selected"></option>
                            <option value="#facccc"></option>
                            <option value="#ffebcc"></option>
                            <option value="#ffffcc"></option>
                            <option value="#cce8cc"></option>
                            <option value="#cce0f5"></option>
                            <option value="#ebd6ff"></option>
                            <option value="#bbbbbb"></option>
                            <option value="#f06666"></option>
                            <option value="#ffc266"></option>
                            <option value="#ffff66"></option>
                            <option value="#66b966"></option>
                            <option value="#66a3e0"></option>
                            <option value="#c285ff"></option>
                            <option value="#888888"></option>
                            <option value="#a10000"></option>
                            <option value="#b26b00"></option>
                            <option value="#b2b200"></option>
                            <option value="#006100"></option>
                            <option value="#0047b2"></option>
                            <option value="#6b24b2"></option>
                            <option value="#444444"></option>
                            <option value="#5c0000"></option>
                            <option value="#663d00"></option>
                            <option value="#666600"></option>
                            <option value="#003700"></option>
                            <option value="#002966"></option>
                            <option value="#3d1466"></option>
                        </select></span><span class="ql-formats"><span class="ql-align ql-picker ql-icon-picker"><span
                                class="ql-picker-label" tabindex="0" role="button" aria-expanded="false"
                                aria-controls="ql-picker-options-9"><svg viewBox="0 0 18 18">
                                    <line class="ql-stroke" x1="3" x2="15" y1="9" y2="9"></line>
                                    <line class="ql-stroke" x1="3" x2="13" y1="14" y2="14"></line>
                                    <line class="ql-stroke" x1="3" x2="9" y1="4" y2="4"></line>
                                </svg></span><span class="ql-picker-options" aria-hidden="true" tabindex="-1"
                                id="ql-picker-options-9"><span tabindex="0" role="button"
                                    class="ql-picker-item ql-selected"><svg viewBox="0 0 18 18">
                                        <line class="ql-stroke" x1="3" x2="15" y1="9" y2="9"></line>
                                        <line class="ql-stroke" x1="3" x2="13" y1="14" y2="14"></line>
                                        <line class="ql-stroke" x1="3" x2="9" y1="4" y2="4"></line>
                                    </svg></span><span tabindex="0" role="button" class="ql-picker-item"
                                    data-value="center"><svg viewBox="0 0 18 18">
                                        <line class="ql-stroke" x1="15" x2="3" y1="9" y2="9"></line>
                                        <line class="ql-stroke" x1="14" x2="4" y1="14" y2="14"></line>
                                        <line class="ql-stroke" x1="12" x2="6" y1="4" y2="4"></line>
                                    </svg></span><span tabindex="0" role="button" class="ql-picker-item"
                                    data-value="right"><svg viewBox="0 0 18 18">
                                        <line class="ql-stroke" x1="15" x2="3" y1="9" y2="9"></line>
                                        <line class="ql-stroke" x1="15" x2="5" y1="14" y2="14"></line>
                                        <line class="ql-stroke" x1="15" x2="9" y1="4" y2="4"></line>
                                    </svg></span><span tabindex="0" role="button" class="ql-picker-item"
                                    data-value="justify"><svg viewBox="0 0 18 18">
                                        <line class="ql-stroke" x1="15" x2="3" y1="9" y2="9"></line>
                                        <line class="ql-stroke" x1="15" x2="3" y1="14" y2="14"></line>
                                        <line class="ql-stroke" x1="15" x2="3" y1="4" y2="4"></line>
                                    </svg></span></span></span><select class="ql-align" style="display: none;">
                            <option selected="selected"></option>
                            <option value="center"></option>
                            <option value="right"></option>
                            <option value="justify"></option>
                        </select></span><span class="ql-formats"><button type="button" class="ql-image"><svg
                                viewBox="0 0 18 18">
                                <rect class="ql-stroke" height="10" width="12" x="3" y="4"></rect>
                                <circle class="ql-fill" cx="6" cy="7" r="1"></circle>
                                <polyline class="ql-even ql-fill" points="5 12 5 11 7 9 8 10 11 7 13 9 13 12 5 12">
                                </polyline>
                            </svg></button><button type="button" class="ql-video"><svg viewBox="0 0 18 18">
                                <rect class="ql-stroke" height="12" width="12" x="3" y="3"></rect>
                                <rect class="ql-fill" height="12" width="1" x="5" y="3"></rect>
                                <rect class="ql-fill" height="12" width="1" x="12" y="3"></rect>
                                <rect class="ql-fill" height="2" width="8" x="5" y="8"></rect>
                                <rect class="ql-fill" height="1" width="3" x="3" y="5"></rect>
                                <rect class="ql-fill" height="1" width="3" x="3" y="7"></rect>
                                <rect class="ql-fill" height="1" width="3" x="3" y="10"></rect>
                                <rect class="ql-fill" height="1" width="3" x="3" y="12"></rect>
                                <rect class="ql-fill" height="1" width="3" x="12" y="5"></rect>
                                <rect class="ql-fill" height="1" width="3" x="12" y="7"></rect>
                                <rect class="ql-fill" height="1" width="3" x="12" y="10"></rect>
                                <rect class="ql-fill" height="1" width="3" x="12" y="12"></rect>
                            </svg></button></span><span class="ql-formats"><button type="button" class="ql-clean"><svg
                                class="" viewBox="0 0 18 18">
                                <line class="ql-stroke" x1="5" x2="13" y1="3" y2="3"></line>
                                <line class="ql-stroke" x1="6" x2="9.35" y1="12" y2="3"></line>
                                <line class="ql-stroke" x1="11" x2="15" y1="11" y2="15"></line>
                                <line class="ql-stroke" x1="15" x2="11" y1="11" y2="15"></line>
                                <rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="7" x="2" y="14"></rect>
                            </svg></button></span></div>
                <div id="mail-compose-editor" class="ql-container ql-snow">
                    <div class="ql-editor ql-blank" data-gramm="false" contenteditable="true">
                        <p><br></p>
                    </div>
                    <div class="ql-clipboard" contenteditable="true" tabindex="-1"></div>
                    <div class="ql-tooltip ql-hidden"><a class="ql-preview" rel="noopener noreferrer" target="_blank"
                            href="about:blank"></a><input type="text" data-formula="e=mc^2"
                            data-link="https://quilljs.com" data-video="Embed URL"><a class="ql-action"></a><a
                            class="ql-remove"></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>
    <!-- end modal -->
    <!-- removeItemModal -->
    <div id="removeItemModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        id="btn-close"></button>
                </div>
                <div class="modal-body">
                    <div class="mt-2 text-center">
                        <lord-icon src="../../../../external.html?link=https://cdn.lordicon.com/gsqxdxog.json"
                            trigger="loop" colors="primary:#f7b84b,secondary:#f06548"
                            style="width:100px;height:100px"></lord-icon>
                        <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                            <h4>Are you Sure ?</h4>
                            <p class="text-muted mx-4 mb-0">Are you Sure You want to Remove this Record ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn w-sm btn-danger " id="delete-record">Yes, Delete It!</button>
                    </div>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    
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
    <!-- Start pipeline_settings-footer here -->
    <!-- ============================================================== -->
    <?php include 'includes/mail-box/footer.php'; ?>