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
                    <div class="row">
                        <div class="col">
                            <div class="h-100">
                                <div class="row mb-3 pb-1">
                                    <div class="col-12">
                                        <!-- <div class="page-title-right">
                                            <ol class="breadcrumb m-0">
                                                <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                                <li class="breadcrumb-item active">Settings</li>
                                                <li class="breadcrumb-item active">Domains and Mailbox</li>                                             
                                            </ol>
                                        </div> -->
                                        <!-- end card header -->
                                    </div>
                                    <!--end col-->
                                </div>                             
                                <div class="row justify-content-center">
                                    <div class=" col-xl-12 ">
                                        <div class="d-flex mb-2">
                                            <div class="flex-grow-1">
                                                <h1 class="fs-28 fw-bolder text-capitalize">raw leads</h1>
                                             </div>
                                             <div class="flex-shrink-0 mb-3">
                                                <!--  Large modal example -->
                                                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h3 class="modal-title " id="myLargeModalLabel">Lead Generation via Search Engine</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body  ">
                                                                <div class="col-xl-12">
                                                                    <div class="row">
                                                                        <ul class="nav nav-tabs nav-tabs-custom nav-success nav-justified mb-3" role="tablist">
                                                                            <li class="nav-item">
                                                                                <a class="nav-link active fs-16 fw-normal" data-bs-toggle="tab" href="#Search-Engine" role="tab">
                                                                                Search Engine Parameters
                                                                                </a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a class="nav-link fs-16 fw-normal" data-bs-toggle="tab" href="#Raw-Leads" role="tab">
                                                                                Raw Leads
                                                                                </a>
                                                                            </li>
                                                                            <!-- <li class="nav-item">
                                                                                <a class="nav-link fs-16 fw-normal" data-bs-toggle="tab" href="#messages1" role="tab">
                                                                                    Meetings
                                                                                </a>
                                                                            </li> -->
                                                                            <li class="nav-item">
                                                                                <a class="nav-link fs-16 fw-normal" data-bs-toggle="tab" href="#Final-Leads" role="tab">
                                                                                Final Leads
                                                                                </a>
                                                                            </li>
                                                                        </ul>

                                                                        <!-- Tab panes -->
                                                                        <div class="tab-content text-muted">
                                                                            <div class="tab-pane active" id="Search-Engine" role="tabpanel">
                                                                                <!-- Accordions Bordered -->
                                                                                <div class="accordion custom-accordionwithicon custom-accordion-border accordion-border-box accordion-secondary" id="accordionBordered">
                                                                                    <div class="accordion-item bg-light">
                                                                                        <h2 class="accordion-header" id="accordionborderedExample1">
                                                                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accor_borderedExamplecollapse1" aria-expanded="true" aria-controls="accor_borderedExamplecollapse1">
                                                                                                 Queue monitor 
                                                                                            </button>
                                                                                            
                                                                                        </h2>
                                                                                        <div id="accor_borderedExamplecollapse1" class="accordion-collapse collapse show" aria-labelledby="accordionborderedExample1" data-bs-parent="#accordionBordered">
                                                                                            <div class="accordion-body">
                                                                                            <div class="table-responsive table-card">
                                                                                                <table class="table table-nowrap mb-0">
                                                                                                    <thead class="table-light">
                                                                                                        <tr>
                                                                                                           
                                                                                                            <th scope="col">Job ID</th>
                                                                                                            <th scope="col">Status</th>
                                                                                                            <th scope="col">Progress</th>
                                                                                                            <th scope="col"></th>
                                                                                                            <th scope="col">Duration</th>
                                                                                                            <th scope="col">Started</th>
                                                                                                            <th scope="col">Action</th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody>
                                                                                                        <tr>
                                                                                                            <td><a href="#" class="fw-semibold">#153</a></td>                                                                                                            
                                                                                                            <td><span class="badge badge-new bg-danger fs-16 fw-normal">Running</span></td>
                                                                                                            <td>
                                                                                                            <div class="progress animated-progress custom-progress progress-label">
                                                                                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"><div class="label">45%</div></div>
                                                                                                            </div>
                                                                                                            </td>
                                                                                                            <td></td>
                                                                                                            <td class ="fs-16 fw-normal">12:10:48</td>
                                                                                                            <td class ="fs-16 fw-normal">10 hrs ago</td>                                                                                                            
                                                                                                            <td>
                                                                                                            <button type="button" class="btn btn-outline-danger waves-effect waves-light">Abort</button>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td><a href="#" class="fw-semibold">#153</a></td>                                                                                                            
                                                                                                            <td><span class="badge badge-new bg-danger fs-16 fw-normal">Running</span></td>
                                                                                                            <td>
                                                                                                            <div class="progress animated-progress custom-progress progress-label">
                                                                                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"><div class="label">55%</div></div>
                                                                                                            </div>
                                                                                                            </td>
                                                                                                            <td></td>
                                                                                                            <td class ="fs-16 fw-normal">12:10:48</td>
                                                                                                            <td class ="fs-16 fw-normal">10 hrs ago</td>                                                                                                            
                                                                                                            <td>
                                                                                                            <button type="button" class="btn btn-outline-danger waves-effect waves-light">Abort</button>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td><a href="#" class="fw-semibold">#153</a></td>                                                                                                            
                                                                                                            <td><span class="badge badge-new bg-danger fs-16 fw-normal">Running</span></td>
                                                                                                            <td>
                                                                                                            <div class="progress animated-progress custom-progress progress-label">
                                                                                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"><div class="label">75%</div></div>
                                                                                                            </div>
                                                                                                            </td>
                                                                                                            <td></td>
                                                                                                            <td class ="fs-16 fw-normal">12:10:48</td>
                                                                                                            <td class ="fs-16 fw-normal">10 hrs ago</td>                                                                                                            
                                                                                                            <td>
                                                                                                            <button type="button" class="btn btn-outline-danger waves-effect waves-light">Abort</button>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td><a href="#" class="fw-semibold">#156</a></td>                                                                                                            
                                                                                                            <td><span class="badge badges bg-warning  fs-16 fw-normal">Queued</span></td>
                                                                                                            <td> </td>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <td></td>                                                                                                            
                                                                                                            <td>
                                                                                                            <button type="button" class="btn btn-outline-danger waves-effect waves-light">Abort</button>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td><a href="#" class="fw-semibold">#157</a></td>                                                                                                            
                                                                                                            <td><span class="badge badges bg-warning  fs-16 fw-normal">Queued</span></td>
                                                                                                            <td>
                                                                                                            </td>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                          
                                                                                                            <td></td>                                                                                                            
                                                                                                            <td>
                                                                                                            <button type="button" class="btn btn-outline-danger waves-effect waves-light">Abort</button>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                       <tr>
                                                                                                            <td>
                                                                                                                <div class="row d-flex justify-content-between">
                                                                                                                        <div class="col-xl-3 ">
                                                                                                                            <div class="form-check">
                                                                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                                                                                                                <label class="form-check-label  fw-normal" for="flexCheckIndeterminate">
                                                                                                                                     Show completed jobs
                                                                                                                                </label>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="col-xl-3  fail-check ">
                                                                                                                            <div class="form-check">
                                                                                                                                <input class="form-check-input " type="checkbox" value="" id="flexCheckIndeterminate">
                                                                                                                                <label class="form-check-label  fw-normal" for="flexCheckIndeterminate">
                                                                                                                                    Show failed jobs
                                                                                                                                </label>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div> 
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                       
                                                                                                       
                                                                                                        <tr>
                                                                                                            <td><a href="#" class="fw-semibold">#157</a></td>                                                                                                            
                                                                                                            <td><span class="badge badges-fail bg-Secondary  fs-16 fw-normal">Failed</span></td>
                                                                                                            <td>
                                                                                                          
                                                                                                            </td>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <td class ="fs-16 fw-normal"></td>                                                                                                         
                                                                                                            <td>
                                                                                                            <button type="button" class="btn btn-outline-danger waves-effect waves-light">Retry</button>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td><a href="#" class="fw-semibold">#157</a></td>                                                                                                            
                                                                                                            <td><span class="badge badges-fail bg-Secondary  fs-16 fw-normal">Failed</span></td>
                                                                                                            <td>
                                                                                                          
                                                                                                            </td>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <td class ="fs-16 fw-normal"></td>                                                                                                         
                                                                                                            <td>
                                                                                                            <button type="button" class="btn btn-outline-danger waves-effect waves-light">Retry</button>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td><a href="#" class="fw-semibold">#157</a></td>                                                                                                            
                                                                                                            <td><span class="badge badges-fail bg-Secondary  fs-16 fw-normal">Failed</span></td>
                                                                                                            <td>
                                                                                                          
                                                                                                            </td>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <td class ="fs-16 fw-normal"></td>                                                                                                         
                                                                                                            <td>
                                                                                                            <button type="button" class="btn btn-danger waves-effect waves-light">Retry</button>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                                                                                                                             
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                 
                                                                                </div>

                                                                                <div class="d-flex">
                                                                                    <div class="flex-grow-1 ms-2">
                                                                                        <div class="mb-3 mt-4 fs-16 fw-normal">
                                                                                        <img src="./assets/images/warning.svg" alt="" srcset="">
                                                                                             The lead scrapping module seems busy right now. Please come back after sometime.
                                                                                        </div>
                                                                                    <div class="col-xl-4  offset-1">
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                                                                            <label class="form-check-label fs-16 fw-medium" for="flexCheckIndeterminate">
                                                                                            Still Want to proceed?
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-xl-8 mt-3  offset-1">
                                                                                        <form action="javascript:void(0);">
                                                                                            <div class="row">
                                                                                                <div class="col-4">                                                                                                
                                                                                                    <div class="mb-3">
                                                                                                        <!-- Base Radios -->
                                                                                                        <div class="form-check mb-2">                                                                                                       
                                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                                                            <label class="form-check-label fs-16 fw-normal" for="flexRadioDefault1">
                                                                                                            Google
                                                                                                            </label>
                                                                                                        </div>   
                                                                                                    </div>
                                                                                                </div><!--end col-->
                                                                                                <div class="col-4">                                                                                                
                                                                                                    <div class="mb-3">
                                                                                                        <!-- Base Radios -->
                                                                                                        <div class="form-check mb-2">                                                                                                       
                                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                                                                            <label class="form-check-label fs-16 fw-normal" for="flexRadioDefault2">
                                                                                                                Yahoo
                                                                                                            </label>
                                                                                                        </div>   
                                                                                                    </div>
                                                                                                </div><!--end col-->
                                                                                                <div class="col-4">                                                                                                
                                                                                                    <div class="mb-3">
                                                                                                        <!-- Base Radios -->
                                                                                                        <div class="form-check mb-2">                                                                                                       
                                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                                                                                            <label class="form-check-label fs-16 fw-normal" for="flexRadioDefault3">
                                                                                                                Bing
                                                                                                            </label>
                                                                                                        </div>   
                                                                                                    </div>
                                                                                                </div><!--end col-->
                                                                                                <div class="col-12">
                                                                                                    <div class="mb-3">
                                                                                                        <label for="compnayNameinput" class="form-label">Keyword</label>
                                                                                                        <input type="text" class="form-control" placeholder="Enter a keyword" id="compnayNameinput">
                                                                                                        <span class="text-muted fs-14 fw-normal fst-italic mt-3 mb-3"> Suggestion : <b>“SEO agencies in Texas” </b></span>
                                                                                                    </div>
                                                                                                </div><!--end col-->
                                                                                                <div class="col-3">
                                                                                                    <!-- Base Radios -->
                                                                                                    <div class="form-check mb-2">
                                                                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                                                                                                        <label class="form-check-label" for="flexRadioDefault4">
                                                                                                            500-1000
                                                                                                        </label>
                                                                                                    </div>
                                                                                                </div><!--end col-->
                                                                                                <div class="col-3">
                                                                                                    <!-- Base Radios -->
                                                                                                    <div class="form-check mb-2">
                                                                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                                                                                                        <label class="form-check-label" for="flexRadioDefault5">
                                                                                                            1000-2000
                                                                                                        </label>
                                                                                                    </div>
                                                                                                </div><!--end col-->
                                                                                                <div class="col-3">
                                                                                                    <!-- Base Radios -->
                                                                                                    <div class="form-check mb-2">
                                                                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6">
                                                                                                        <label class="form-check-label" for="flexRadioDefault6">
                                                                                                            2000-5000
                                                                                                        </label>
                                                                                                    </div>
                                                                                                </div><!--end col-->
                                                                                                <div class="col-3">
                                                                                                    <!-- Base Radios -->
                                                                                                    <div class="form-check mb-2">
                                                                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault7">
                                                                                                        <label class="form-check-label" for="flexRadioDefault7">
                                                                                                            5000-10000
                                                                                                        </label>
                                                                                                    </div>
                                                                                                </div><!--end col-->
                                                                                                <div class="col-12">
                                                                                                    <!-- Base Radios -->
                                                                                                    <div class="form-check mb-2">
                                                                                                        <!-- <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault7"> -->
                                                                                                        <span class="text-muted fs-14 fw-normal fst-italic mt-3 mb-3"> Result of lead count scrapped may vary.</span>
                                                                                                    </div>
                                                                                                </div><!--end col-->
                                                                                            
                                                                                                <!--end col-->
                                                                                                <div class="col-lg-12">
                                                                                                    <!-- <div class="text-end">
                                                                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                                                                    </div> -->
                                                                                                </div><!--end col-->
                                                                                            </div><!--end row-->
                                                                                        </form>
                                                                                    </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tab-pane" id="Raw-Leads" role="tabpanel">
                                                                                <div class="d-flex">
                                                                                    <div class="flex-grow-1 ms-2">
                                                                                        <div class="mb-3 mt-4 fs-16 fw-normal">
                                                                                        <img src="./assets/images/warning.svg" alt="" srcset="">
                                                                                             The lead scrapping module seems busy right now. Please come back after sometime.
                                                                                        </div>
                                                                                    <div class="col-xl-4  offset-1">
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                                                                            <label class="form-check-label fs-16 fw-medium" for="flexCheckIndeterminate">
                                                                                            Still Want to proceed?
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-xl-8 mt-3  offset-1">
                                                                                        <form action="javascript:void(0);">
                                                                                            <div class="row">
                                                                                                <div class="col-4">                                                                                                
                                                                                                    <div class="mb-3">
                                                                                                        <!-- Base Radios -->
                                                                                                        <div class="form-check mb-2">                                                                                                       
                                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                                                            <label class="form-check-label fs-16 fw-normal" for="flexRadioDefault1">
                                                                                                            Google
                                                                                                            </label>
                                                                                                        </div>   
                                                                                                    </div>
                                                                                                </div><!--end col-->
                                                                                                <div class="col-4">                                                                                                
                                                                                                    <div class="mb-3">
                                                                                                        <!-- Base Radios -->
                                                                                                        <div class="form-check mb-2">                                                                                                       
                                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                                                                            <label class="form-check-label fs-16 fw-normal" for="flexRadioDefault2">
                                                                                                                Yahoo
                                                                                                            </label>
                                                                                                        </div>   
                                                                                                    </div>
                                                                                                </div><!--end col-->
                                                                                                <div class="col-4">                                                                                                
                                                                                                    <div class="mb-3">
                                                                                                        <!-- Base Radios -->
                                                                                                        <div class="form-check mb-2">                                                                                                       
                                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                                                                                            <label class="form-check-label fs-16 fw-normal" for="flexRadioDefault3">
                                                                                                                Bing
                                                                                                            </label>
                                                                                                        </div>   
                                                                                                    </div>
                                                                                                </div><!--end col-->
                                                                                                <div class="col-12">
                                                                                                    <div class="mb-3">
                                                                                                        <label for="compnayNameinput" class="form-label">Keyword</label>
                                                                                                        <input type="text" class="form-control" placeholder="Enter a keyword" id="compnayNameinput">
                                                                                                        <span class="text-muted fs-14 fw-normal fst-italic mt-3 mb-3"> Suggestion : <b>“SEO agencies in Texas” </b></span>
                                                                                                    </div>
                                                                                                </div><!--end col-->
                                                                                                <div class="col-3">
                                                                                                    <!-- Base Radios -->
                                                                                                    <div class="form-check mb-2">
                                                                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                                                                                                        <label class="form-check-label" for="flexRadioDefault4">
                                                                                                            500-1000
                                                                                                        </label>
                                                                                                    </div>
                                                                                                </div><!--end col-->
                                                                                                <div class="col-3">
                                                                                                    <!-- Base Radios -->
                                                                                                    <div class="form-check mb-2">
                                                                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                                                                                                        <label class="form-check-label" for="flexRadioDefault5">
                                                                                                            1000-2000
                                                                                                        </label>
                                                                                                    </div>
                                                                                                </div><!--end col-->
                                                                                                <div class="col-3">
                                                                                                    <!-- Base Radios -->
                                                                                                    <div class="form-check mb-2">
                                                                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6">
                                                                                                        <label class="form-check-label" for="flexRadioDefault6">
                                                                                                            2000-5000
                                                                                                        </label>
                                                                                                    </div>
                                                                                                </div><!--end col-->
                                                                                                <div class="col-3">
                                                                                                    <!-- Base Radios -->
                                                                                                    <div class="form-check mb-2">
                                                                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault7">
                                                                                                        <label class="form-check-label" for="flexRadioDefault7">
                                                                                                            5000-10000
                                                                                                        </label>
                                                                                                    </div>
                                                                                                </div><!--end col-->
                                                                                                <div class="col-12">
                                                                                                    <!-- Base Radios -->
                                                                                                    <div class="form-check mb-2">
                                                                                                        <!-- <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault7"> -->
                                                                                                        <span class="text-muted fs-14 fw-normal fst-italic mt-3 mb-3"> Result of lead count scrapped may vary.</span>
                                                                                                    </div>
                                                                                                </div><!--end col-->
                                                                                                <!--end col-->
                                                                                                <div class="col-lg-12">
                                                                                                    <!-- <div class="text-end">
                                                                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                                                                    </div> -->
                                                                                                </div><!--end col-->
                                                                                            </div><!--end row-->
                                                                                        </form>
                                                                                    </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tab-pane" id="Final-Leads" role="tabpanel">
                                                                                <div class="d-flex">
                                                                                    <div class="flex-grow-1 ms-2">
                                                                                        <form action="javascript:void(0);">
                                                                                            <div class="row">
                                                                                            <div class="" >
                                                                                                <div class=" text-center mt-5 mb-2 py-5" >
                                                                                                    <div class="position-relative d-inline-block ">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="147" height="134" viewBox="0 0 147 134" fill="none">
                                                                                                            <g clip-path="url(#clip0_2434_12604)">
                                                                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.143 94.5372C-0.715003 92.8872 -0.715003 90.1872 2.143 88.5372L68.243 50.3742C71.101 48.7242 75.777 48.7242 78.635 50.3742L144.736 88.5372C147.594 90.1872 147.594 92.8872 144.736 94.5372L78.636 132.7C75.777 134.35 71.101 134.35 68.243 132.7L2.143 94.5372Z" fill="#EAF0F6" fill-opacity="0.75"/>
                                                                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M94.611 80.4458C105.676 86.8358 105.676 97.2888 94.611 103.677C83.546 110.067 65.439 110.067 54.373 103.677C43.308 97.2888 43.308 86.8348 54.373 80.4468C65.439 74.0568 83.546 74.0558 94.611 80.4458Z" fill="white"/>
                                                                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M82.974 42.7708C77.476 43.8988 71.437 43.8948 65.944 42.7578L46.688 88.6808H46.695C47.784 85.6578 50.332 82.7808 54.374 80.4478C65.439 74.0578 83.546 74.0578 94.611 80.4478C97.513 82.1218 99.631 84.0798 101.011 86.1668L82.974 42.7708Z" fill="white"/>
                                                                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M92.296 32.6864C102.088 27.0334 102.088 17.7814 92.296 12.1284C82.504 6.47542 66.481 6.47542 56.689 12.1284C46.897 17.7814 46.896 27.0334 56.689 32.6864C66.481 38.3394 82.504 38.3394 92.296 32.6864Z" stroke="#CBD6E5" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M87.338 30.0702C94.638 25.8562 94.638 18.9602 87.338 14.7452C80.038 10.5302 68.094 10.5302 60.794 14.7452C53.494 18.9592 53.494 25.8562 60.794 30.0702C68.094 34.2842 80.038 34.2842 87.338 30.0702Z" stroke="#CBD6E5" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M92.296 32.6863C82.504 38.3393 66.481 38.3393 56.689 32.6863C51.793 29.8593 49.345 26.1332 49.345 22.4062V29.1093C49.345 32.8353 51.793 36.5613 56.689 39.3883C66.481 45.0413 82.504 45.0413 92.296 39.3883C97.192 36.5613 99.64 32.8352 99.64 29.1082V22.4073C99.64 26.1333 97.192 29.8593 92.296 32.6863Z" stroke="#CBD6E5" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M100.274 42.3972L104.261 36.0672L97.044 31.2492L97.033 31.2412L97.029 31.2392C96.548 30.9662 95.889 31.0062 95.162 31.4252C93.702 32.2682 92.508 34.3372 92.508 36.0232C92.508 36.8242 92.783 37.3912 93.223 37.6842L93.22 37.6902L93.276 37.7282L93.294 37.7392L100.274 42.3972Z" stroke="#CBD6E5" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                                                                <path d="M119.293 42.3983L105.198 34.2303C104.453 33.7983 103.426 33.8563 102.294 34.5103C100.035 35.8133 98.187 39.0153 98.187 41.6233C98.187 42.9433 98.662 43.8643 99.422 44.2873L99.42 44.2913L113.599 52.4923" stroke="#CBD6E5" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M120.635 45.1152C120.635 42.5062 118.787 41.4392 116.528 42.7452C114.268 44.0482 112.42 47.2492 112.42 49.8582C112.42 52.4662 114.268 53.5342 116.528 52.2292C118.788 50.9252 120.635 47.7242 120.635 45.1152ZM74.333 12.0762C71.306 13.6842 68.51 15.7232 66.077 18.1382C63.147 21.0472 60.759 24.4882 59.013 28.2302C59.614 28.7262 60.284 29.2002 61.043 29.6382C64.073 31.3862 67.903 32.3872 71.855 32.6612C73.02 28.8402 74.748 25.2042 77.115 21.9912C79.36 18.9432 82.203 16.3032 85.436 14.3412C82.184 12.8652 78.268 12.1092 74.333 12.0762Z" stroke="#CBD6E5" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M87.55 15.4727C83.571 17.3457 80.307 20.5807 77.944 24.3027C76.275 26.9327 75.026 29.7927 74.017 32.7457C75.249 32.7477 76.479 32.6757 77.691 32.5377C79.451 29.5367 81.664 26.0167 83.658 23.7657C85.656 21.5107 88.033 19.5397 90.729 18.2207C89.945 17.2247 88.877 16.2987 87.55 15.4727Z" stroke="#CBD6E5" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M92.296 32.6864C102.088 27.0334 102.088 17.7814 92.296 12.1284C82.504 6.47542 66.481 6.47542 56.689 12.1284C46.897 17.7814 46.896 27.0334 56.689 32.6864C66.481 38.3394 82.504 38.3394 92.296 32.6864Z" fill="white"/>
                                                                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M92.296 32.6864C102.088 27.0334 102.088 17.7814 92.296 12.1284C82.504 6.47542 66.481 6.47542 56.689 12.1284C46.897 17.7814 46.896 27.0334 56.689 32.6864C66.481 38.3394 82.504 38.3394 92.296 32.6864Z" stroke="#CBD6E5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M87.338 30.0702C94.638 25.8562 94.638 18.9602 87.338 14.7452C80.038 10.5302 68.094 10.5302 60.794 14.7452C53.494 18.9592 53.494 25.8562 60.794 30.0702C68.094 34.2842 80.038 34.2842 87.338 30.0702Z" fill="#F2F5F8"/>
                                                                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M87.338 30.0702C94.638 25.8562 94.638 18.9602 87.338 14.7452C80.038 10.5302 68.094 10.5302 60.794 14.7452C53.494 18.9592 53.494 25.8562 60.794 30.0702C68.094 34.2842 80.038 34.2842 87.338 30.0702Z" stroke="#CBD6E5"/>
                                                                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M92.296 32.6863C82.504 38.3393 66.481 38.3393 56.689 32.6863C51.793 29.8593 49.345 26.1332 49.345 22.4062V29.1093C49.345 32.8353 51.793 36.5613 56.689 39.3883C66.481 45.0413 82.504 45.0413 92.296 39.3883C97.192 36.5613 99.64 32.8352 99.64 29.1082V22.4073C99.64 26.1333 97.192 29.8593 92.296 32.6863Z" fill="#F2F5F8"/>
                                                                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M92.296 32.6863C82.504 38.3393 66.481 38.3393 56.689 32.6863C51.793 29.8593 49.345 26.1332 49.345 22.4062V29.1093C49.345 32.8353 51.793 36.5613 56.689 39.3883C66.481 45.0413 82.504 45.0413 92.296 39.3883C97.192 36.5613 99.64 32.8352 99.64 29.1082V22.4073C99.64 26.1333 97.192 29.8593 92.296 32.6863Z" stroke="#CBD6E5"/>
                                                                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M100.274 42.3972L104.261 36.0672L97.044 31.2492L97.033 31.2412L97.029 31.2392C96.548 30.9662 95.889 31.0062 95.162 31.4252C93.702 32.2682 92.508 34.3372 92.508 36.0232C92.508 36.8242 92.783 37.3912 93.223 37.6842L93.22 37.6902L93.276 37.7282L93.294 37.7392L100.274 42.3972Z" fill="white"/>
                                                                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M100.274 42.3972L104.261 36.0672L97.044 31.2492L97.033 31.2412L97.029 31.2392C96.548 30.9662 95.889 31.0062 95.162 31.4252C93.702 32.2682 92.508 34.3372 92.508 36.0232C92.508 36.8242 92.783 37.3912 93.223 37.6842L93.22 37.6902L93.276 37.7282L93.294 37.7392L100.274 42.3972Z" stroke="#CBD6E5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M119.293 42.3983L105.198 34.2303C104.453 33.7983 103.426 33.8563 102.294 34.5103C100.035 35.8133 98.187 39.0153 98.187 41.6233C98.187 42.9433 98.662 43.8643 99.422 44.2873L99.42 44.2913L113.599 52.4923" fill="#F2F5F8"/>
                                                                                                                <path d="M119.293 42.3983L105.198 34.2303C104.453 33.7983 103.426 33.8563 102.294 34.5103C100.035 35.8133 98.187 39.0153 98.187 41.6233C98.187 42.9433 98.662 43.8643 99.422 44.2873L99.42 44.2913L113.599 52.4923" stroke="#CBD6E5"/>
                                                                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M120.635 45.1153C120.635 42.5063 118.787 41.4393 116.528 42.7453C114.268 44.0483 112.42 47.2493 112.42 49.8583C112.42 52.4663 114.268 53.5343 116.528 52.2293C118.788 50.9253 120.635 47.7243 120.635 45.1153Z" fill="#F2F5F8"/>
                                                                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M120.635 45.1153C120.635 42.5063 118.787 41.4393 116.528 42.7453C114.268 44.0483 112.42 47.2493 112.42 49.8583C112.42 52.4663 114.268 53.5343 116.528 52.2293C118.788 50.9253 120.635 47.7243 120.635 45.1153Z" stroke="#CBD6E5"/>
                                                                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M74.333 12.0762C71.306 13.6842 68.51 15.7232 66.077 18.1382C63.147 21.0472 60.759 24.4882 59.013 28.2302C59.614 28.7262 60.284 29.2002 61.043 29.6382C64.073 31.3862 67.903 32.3872 71.855 32.6612C73.02 28.8402 74.748 25.2042 77.115 21.9912C79.36 18.9432 82.203 16.3032 85.436 14.3412C82.184 12.8652 78.268 12.1092 74.333 12.0762Z" fill="white"/>
                                                                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M87.55 15.4727C83.571 17.3457 80.307 20.5807 77.944 24.3027C76.275 26.9327 75.026 29.7927 74.017 32.7457C75.249 32.7477 76.479 32.6757 77.691 32.5377C79.451 29.5367 81.664 26.0167 83.658 23.7657C85.656 21.5107 88.033 19.5397 90.729 18.2207C89.945 17.2247 88.877 16.2987 87.55 15.4727Z" fill="white"/>
                                                                                                                <path d="M101.012 86.1659L82.974 42.7699C77.475 43.8969 71.437 43.8929 65.943 42.7559L46.687 88.6789H46.694" stroke="#CBD6E5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M94.611 80.4458C105.676 86.8358 105.676 97.2888 94.611 103.677C83.546 110.067 65.439 110.067 54.373 103.677C43.308 97.2888 43.308 86.8348 54.373 80.4468C65.439 74.0568 83.546 74.0558 94.611 80.4458Z" stroke="#CBD6E5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                                                                <path d="M121.68 10.236L109.778 14.597M115.666 23.734L110.427 21.264M119 25.306L118.247 24.95M106.763 7.402L105.96 9.106M109.781 1L107.971 4.84" stroke="#CBD6E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                                                            </g>
                                                                                                            <defs>
                                                                                                                <clipPath id="clip0_2434_12604">
                                                                                                                <rect width="147" height="134" fill="white"/>
                                                                                                                </clipPath>
                                                                                                            </defs>
                                                                                                            </svg>
                                                                                                    </div>
                                                                                                    <h5 class="mt-4 mb-4 fs-18 fw-normal fst-italic">No teams created yet, first create a team by adding users in Users and Teams page.
                                                                                                        Then you can add members to this mailbox.</h5>
                                                                                                        
                                                                                                        <button type="button" class="btn btn-secondary waves-effect waves-light fs-16 fw-normal fst-italic" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg"><i class="ri-add-fill"></i>Go to Users and team</button>
                                                                                                    
                                                                                                </div>
                                                                                                
                                                                                                </div>
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
                                                            <div class="modal-footer" >
                                                                <a href="javascript:void(0);" class="btn btn-outline-secondary waves-effect waves-light fw-medium mt-3" data-bs-dismiss="modal"> Cancel</a>
                                                                <button type="button" class="btn btn-secondary mt-3">Generate Raw Leads</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                             </div>
                                          </div>                                       
                                        <!--  Card -->
                                          <div class="card" >
                                            <div class="card-body text-center mt-0 mb-2">
                                                <div class="table-responsive table-card">
                                                    <table class="table align-middle" id="customerTable">
                                                        <thead class="table-light">
                                                            <tr>
                                                                <th scope="col" style="width: 50px;">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                                    </div>
                                                                </th>        
                                                                <th class="" data-sort="full_name " >Publishers Name</th>
                                                                <th class="" data-sort="website_link">E-mail id</th>
                                                                <th class="" data-sort=""></th>
                                                                <th class="" data-sort="domain">Domain</th>
                                                                <th class="" data-sort=""></th>
                                                                <th class="" data-sort="grade">E-mail id source</th>
                                                                <th class="" data-sort=""></th>
                                                                <th class="" data-sort="e-mail_id">countries</th>
                                                                <th class="" data-sort=""></th>
                                                                <th class="" data-sort="date">Date</th>                                                               
                                                                <th class="" data-sort=""></th>
                                                                <th class="" data-sort=""></th>
                                                              
                                                        </thead>
                                                        <tbody class="list form-check-all">
                                                            <!-- <tr>
                                                                <th scope="row">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                                    </div>
                                                                </th>
                                                                <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
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
                                                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <i class="ri-more-2-fill align-middle"></i>
                                                                        </button>
                                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                                            <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                                            <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                                            <li>
                                                                                <a class="dropdown-item remove-item-btn">
                                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                               
                                                                
                                                            </tr> -->
                                                           
                                                        </tbody>
                                                    </table>                                                
                                                </div>                                                
                                                <div class="position-relative d-inline-block " style=" padding: 134px 244px 176px 243px;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="147" height="134" viewBox="0 0 147 134" fill="none">
                                                        <g clip-path="url(#clip0_2434_12604)">
                                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M2.143 94.5372C-0.715003 92.8872 -0.715003 90.1872 2.143 88.5372L68.243 50.3742C71.101 48.7242 75.777 48.7242 78.635 50.3742L144.736 88.5372C147.594 90.1872 147.594 92.8872 144.736 94.5372L78.636 132.7C75.777 134.35 71.101 134.35 68.243 132.7L2.143 94.5372Z" fill="#EAF0F6" fill-opacity="0.75"/>
                                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M94.611 80.4458C105.676 86.8358 105.676 97.2888 94.611 103.677C83.546 110.067 65.439 110.067 54.373 103.677C43.308 97.2888 43.308 86.8348 54.373 80.4468C65.439 74.0568 83.546 74.0558 94.611 80.4458Z" fill="white"/>
                                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M82.974 42.7708C77.476 43.8988 71.437 43.8948 65.944 42.7578L46.688 88.6808H46.695C47.784 85.6578 50.332 82.7808 54.374 80.4478C65.439 74.0578 83.546 74.0578 94.611 80.4478C97.513 82.1218 99.631 84.0798 101.011 86.1668L82.974 42.7708Z" fill="white"/>
                                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M92.296 32.6864C102.088 27.0334 102.088 17.7814 92.296 12.1284C82.504 6.47542 66.481 6.47542 56.689 12.1284C46.897 17.7814 46.896 27.0334 56.689 32.6864C66.481 38.3394 82.504 38.3394 92.296 32.6864Z" stroke="#CBD6E5" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M87.338 30.0702C94.638 25.8562 94.638 18.9602 87.338 14.7452C80.038 10.5302 68.094 10.5302 60.794 14.7452C53.494 18.9592 53.494 25.8562 60.794 30.0702C68.094 34.2842 80.038 34.2842 87.338 30.0702Z" stroke="#CBD6E5" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M92.296 32.6863C82.504 38.3393 66.481 38.3393 56.689 32.6863C51.793 29.8593 49.345 26.1332 49.345 22.4062V29.1093C49.345 32.8353 51.793 36.5613 56.689 39.3883C66.481 45.0413 82.504 45.0413 92.296 39.3883C97.192 36.5613 99.64 32.8352 99.64 29.1082V22.4073C99.64 26.1333 97.192 29.8593 92.296 32.6863Z" stroke="#CBD6E5" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M100.274 42.3972L104.261 36.0672L97.044 31.2492L97.033 31.2412L97.029 31.2392C96.548 30.9662 95.889 31.0062 95.162 31.4252C93.702 32.2682 92.508 34.3372 92.508 36.0232C92.508 36.8242 92.783 37.3912 93.223 37.6842L93.22 37.6902L93.276 37.7282L93.294 37.7392L100.274 42.3972Z" stroke="#CBD6E5" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                                                          <path d="M119.293 42.3983L105.198 34.2303C104.453 33.7983 103.426 33.8563 102.294 34.5103C100.035 35.8133 98.187 39.0153 98.187 41.6233C98.187 42.9433 98.662 43.8643 99.422 44.2873L99.42 44.2913L113.599 52.4923" stroke="#CBD6E5" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M120.635 45.1152C120.635 42.5062 118.787 41.4392 116.528 42.7452C114.268 44.0482 112.42 47.2492 112.42 49.8582C112.42 52.4662 114.268 53.5342 116.528 52.2292C118.788 50.9252 120.635 47.7242 120.635 45.1152ZM74.333 12.0762C71.306 13.6842 68.51 15.7232 66.077 18.1382C63.147 21.0472 60.759 24.4882 59.013 28.2302C59.614 28.7262 60.284 29.2002 61.043 29.6382C64.073 31.3862 67.903 32.3872 71.855 32.6612C73.02 28.8402 74.748 25.2042 77.115 21.9912C79.36 18.9432 82.203 16.3032 85.436 14.3412C82.184 12.8652 78.268 12.1092 74.333 12.0762Z" stroke="#CBD6E5" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M87.55 15.4727C83.571 17.3457 80.307 20.5807 77.944 24.3027C76.275 26.9327 75.026 29.7927 74.017 32.7457C75.249 32.7477 76.479 32.6757 77.691 32.5377C79.451 29.5367 81.664 26.0167 83.658 23.7657C85.656 21.5107 88.033 19.5397 90.729 18.2207C89.945 17.2247 88.877 16.2987 87.55 15.4727Z" stroke="#CBD6E5" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M92.296 32.6864C102.088 27.0334 102.088 17.7814 92.296 12.1284C82.504 6.47542 66.481 6.47542 56.689 12.1284C46.897 17.7814 46.896 27.0334 56.689 32.6864C66.481 38.3394 82.504 38.3394 92.296 32.6864Z" fill="white"/>
                                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M92.296 32.6864C102.088 27.0334 102.088 17.7814 92.296 12.1284C82.504 6.47542 66.481 6.47542 56.689 12.1284C46.897 17.7814 46.896 27.0334 56.689 32.6864C66.481 38.3394 82.504 38.3394 92.296 32.6864Z" stroke="#CBD6E5" stroke-linecap="round" stroke-linejoin="round"/>
                                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M87.338 30.0702C94.638 25.8562 94.638 18.9602 87.338 14.7452C80.038 10.5302 68.094 10.5302 60.794 14.7452C53.494 18.9592 53.494 25.8562 60.794 30.0702C68.094 34.2842 80.038 34.2842 87.338 30.0702Z" fill="#F2F5F8"/>
                                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M87.338 30.0702C94.638 25.8562 94.638 18.9602 87.338 14.7452C80.038 10.5302 68.094 10.5302 60.794 14.7452C53.494 18.9592 53.494 25.8562 60.794 30.0702C68.094 34.2842 80.038 34.2842 87.338 30.0702Z" stroke="#CBD6E5"/>
                                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M92.296 32.6863C82.504 38.3393 66.481 38.3393 56.689 32.6863C51.793 29.8593 49.345 26.1332 49.345 22.4062V29.1093C49.345 32.8353 51.793 36.5613 56.689 39.3883C66.481 45.0413 82.504 45.0413 92.296 39.3883C97.192 36.5613 99.64 32.8352 99.64 29.1082V22.4073C99.64 26.1333 97.192 29.8593 92.296 32.6863Z" fill="#F2F5F8"/>
                                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M92.296 32.6863C82.504 38.3393 66.481 38.3393 56.689 32.6863C51.793 29.8593 49.345 26.1332 49.345 22.4062V29.1093C49.345 32.8353 51.793 36.5613 56.689 39.3883C66.481 45.0413 82.504 45.0413 92.296 39.3883C97.192 36.5613 99.64 32.8352 99.64 29.1082V22.4073C99.64 26.1333 97.192 29.8593 92.296 32.6863Z" stroke="#CBD6E5"/>
                                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M100.274 42.3972L104.261 36.0672L97.044 31.2492L97.033 31.2412L97.029 31.2392C96.548 30.9662 95.889 31.0062 95.162 31.4252C93.702 32.2682 92.508 34.3372 92.508 36.0232C92.508 36.8242 92.783 37.3912 93.223 37.6842L93.22 37.6902L93.276 37.7282L93.294 37.7392L100.274 42.3972Z" fill="white"/>
                                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M100.274 42.3972L104.261 36.0672L97.044 31.2492L97.033 31.2412L97.029 31.2392C96.548 30.9662 95.889 31.0062 95.162 31.4252C93.702 32.2682 92.508 34.3372 92.508 36.0232C92.508 36.8242 92.783 37.3912 93.223 37.6842L93.22 37.6902L93.276 37.7282L93.294 37.7392L100.274 42.3972Z" stroke="#CBD6E5" stroke-linecap="round" stroke-linejoin="round"/>
                                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M119.293 42.3983L105.198 34.2303C104.453 33.7983 103.426 33.8563 102.294 34.5103C100.035 35.8133 98.187 39.0153 98.187 41.6233C98.187 42.9433 98.662 43.8643 99.422 44.2873L99.42 44.2913L113.599 52.4923" fill="#F2F5F8"/>
                                                          <path d="M119.293 42.3983L105.198 34.2303C104.453 33.7983 103.426 33.8563 102.294 34.5103C100.035 35.8133 98.187 39.0153 98.187 41.6233C98.187 42.9433 98.662 43.8643 99.422 44.2873L99.42 44.2913L113.599 52.4923" stroke="#CBD6E5"/>
                                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M120.635 45.1153C120.635 42.5063 118.787 41.4393 116.528 42.7453C114.268 44.0483 112.42 47.2493 112.42 49.8583C112.42 52.4663 114.268 53.5343 116.528 52.2293C118.788 50.9253 120.635 47.7243 120.635 45.1153Z" fill="#F2F5F8"/>
                                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M120.635 45.1153C120.635 42.5063 118.787 41.4393 116.528 42.7453C114.268 44.0483 112.42 47.2493 112.42 49.8583C112.42 52.4663 114.268 53.5343 116.528 52.2293C118.788 50.9253 120.635 47.7243 120.635 45.1153Z" stroke="#CBD6E5"/>
                                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M74.333 12.0762C71.306 13.6842 68.51 15.7232 66.077 18.1382C63.147 21.0472 60.759 24.4882 59.013 28.2302C59.614 28.7262 60.284 29.2002 61.043 29.6382C64.073 31.3862 67.903 32.3872 71.855 32.6612C73.02 28.8402 74.748 25.2042 77.115 21.9912C79.36 18.9432 82.203 16.3032 85.436 14.3412C82.184 12.8652 78.268 12.1092 74.333 12.0762Z" fill="white"/>
                                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M87.55 15.4727C83.571 17.3457 80.307 20.5807 77.944 24.3027C76.275 26.9327 75.026 29.7927 74.017 32.7457C75.249 32.7477 76.479 32.6757 77.691 32.5377C79.451 29.5367 81.664 26.0167 83.658 23.7657C85.656 21.5107 88.033 19.5397 90.729 18.2207C89.945 17.2247 88.877 16.2987 87.55 15.4727Z" fill="white"/>
                                                          <path d="M101.012 86.1659L82.974 42.7699C77.475 43.8969 71.437 43.8929 65.943 42.7559L46.687 88.6789H46.694" stroke="#CBD6E5" stroke-linecap="round" stroke-linejoin="round"/>
                                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M94.611 80.4458C105.676 86.8358 105.676 97.2888 94.611 103.677C83.546 110.067 65.439 110.067 54.373 103.677C43.308 97.2888 43.308 86.8348 54.373 80.4468C65.439 74.0568 83.546 74.0558 94.611 80.4458Z" stroke="#CBD6E5" stroke-linecap="round" stroke-linejoin="round"/>
                                                          <path d="M121.68 10.236L109.778 14.597M115.666 23.734L110.427 21.264M119 25.306L118.247 24.95M106.763 7.402L105.96 9.106M109.781 1L107.971 4.84" stroke="#CBD6E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </g>
                                                        <defs>
                                                          <clipPath id="clip0_2434_12604">
                                                            <rect width="147" height="134" fill="white"/>
                                                          </clipPath>
                                                        </defs>
                                                      </svg>
                                                      <h5 class="mt-4 mb-4 fs-18 fw-normal fst-italic">There are no raw leads data, in your dashboard. <br> Click on Generate Leads button to gather publishers data.</h5>
                                                      <div class="btn-group">
                                                        <button class="btn btn-secondary dropdown-toggle show" type="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                                <path d="M15.4507 2.71146H4.55065C3.53398 2.71146 2.70898 3.53646 2.70898 4.55313C2.70898 4.99479 2.86732 5.41979 3.15065 5.75312L7.45898 10.7781C7.61732 10.9698 7.70898 11.2115 7.70898 11.4531V16.1531C7.70898 16.6615 7.96732 17.1281 8.40065 17.3948C8.63398 17.5365 8.90065 17.6115 9.16732 17.6115C9.39232 17.6115 9.60898 17.5615 9.81732 17.4531L11.484 16.6198C11.984 16.3698 12.2923 15.8698 12.2923 15.3115V11.4448C12.2923 11.1948 12.384 10.9531 12.5423 10.7698L16.8506 5.74479C17.134 5.41146 17.2923 4.98646 17.2923 4.54479C17.2923 3.52812 16.4673 2.70312 15.4507 2.70312V2.71146ZM15.9007 4.93646L11.5923 9.96146C11.234 10.3781 11.0423 10.9031 11.0423 11.4531V15.3198C11.0423 15.4031 11.0007 15.4698 10.9257 15.5031L9.25898 16.3365C9.16732 16.3865 9.09232 16.3531 9.05898 16.3281C9.02565 16.3031 8.95898 16.2531 8.95898 16.1531V11.4531C8.95898 10.9031 8.76732 10.3781 8.40898 9.96146L4.10065 4.93646C4.00898 4.82812 3.95898 4.69479 3.95898 4.55313C3.95898 4.22812 4.22565 3.96146 4.55065 3.96146H15.4507C15.7757 3.96146 16.0423 4.22812 16.0423 4.55313C16.0423 4.69479 15.9923 4.82812 15.9007 4.93646Z" fill="white"></path>
                                                              </svg> Generate Leads
                                                        </button>
                                                        <ul class="dropdown-menu show" aria-labelledby="dropdownMenuClickableInside" data-popper-placement="bottom-start" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 39.2px, 0px);">
                                                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg" href="javascript:void(0);">Search Engine</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Scrape by Domains</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Similar Websites</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Backlinks Analysis</a></li>
                                                        </ul>
                                                    </div>
                                                    
                                                </div>
                                            
                                               
                                            </div>
                                           
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
            <!-- <footer class="footer">
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
            </footer> -->
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

<?php include 'includes/lead-footer.php'; ?>
