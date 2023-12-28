
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
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <!-- list.js min js -->
    <script src="assets/libs/list.js/list.min.js"></script>
    <script src="assets/libs/list.pagination.js/list.pagination.min.js"></script>
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
    <!-- JAVASCRIPT -->

<script src="https://code.jquery.com/jquery-3.6.3.slim.min.js" ></script>

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
<!-- <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script> -->
<!-- crm leads init -->
<!-- <script src="assets/js/pages/crm-leads.init.js"></script> -->

<!-- App js -->
<script src="assets/js/app.js"></script>
<script src="assets/js/textCarusal.js"></script>
<!-- dropzone min -->
<script src="assets/libs/dropzone/dropzone-min.js"></script>
<!-- dropzone min -->
<script src="assets/libs/dropzone/dropzone-min.js"></script>
<!-- filepond js -->
<script src="assets/libs/filepond/filepond.min.js"></script>
<script src="assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js"></script>
<script src="assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js"></script>
<script src="assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js"></script>
<script src="assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<!-- <script src="assets/js/pages/form-file-upload.init.js"></script> -->

<!-- form wizard init -->
<script src="assets/js/pages/form-wizard.init.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<!-- filepond js -->
<script>
    $(document).ready(function(){
        $('.tabTest ').click(function(){
            $(this).removeClass("active");
            $(this).parents('.tab-pane').removeClass("active");
            $('.nav-tabs li a').removeClass("active");
            $('.nav-tabs li:nth-child(2) a').addClass("active");
        });
        $('.tabNext ').click(function(){
            $(this).removeClass("active");
            $(this).parents('.tab-pane').removeClass("active");
            $('.nav-tabs li:nth-child(2) a').removeClass("active");
            $('.nav-tabs li:nth-child(3) a').addClass("active");
            $('#settings1').addClass("active");
        });
    })
    // var anchorBtn = document.querySelector('.tabTest ')
    // anchorBtn.addEventListener("click", function (e) {
    //     alert('hhh')
    //     this.parents().removeClass("active");
    //     this.removeClass("active");

    // });

    function toggleNavBar(){
       const element = document.documentElement;
    //    if (element.hasAttribute("data-sidebar-size", "lg") ) {
    //        element.setAttribute("data-sidebar-size", "sm");
    //    }else{
    //        element.setAttribute("data-sidebar-size", "lg");
    //    }
    if (element.is("[data-target~='value3']")) { 
        console.log("yes it is");
    }
    else
        console.log("no it's not");
    }

    $("#checkAll").click(function() {
        $("input[type=checkbox]").prop("checked", $(this).prop("checked"));
    });

    $("input[type=checkbox]").click(function() {
        if (!$(this).prop("checked")) {
            $("#checkAll").prop("checked", false);
        }
    });
        
</script>
<script>
    jQuery("#single").select2({
        placeholder: "Select a programming language",
        allowClear: false,
        dropdownParent: $('#myModal')
    });
    jQuery("#multiple").select2({
        placeholder: "Select a programming language",
        allowClear: true
    });
  </script>

</body>

</html>