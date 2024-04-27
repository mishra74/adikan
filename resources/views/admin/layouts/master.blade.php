<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="DexignLab">
    <meta name="robots" content="">
    <meta name="keywords"
        content="admin dashboard, admin template, analytics, bootstrap, bootstrap 5, bootstrap 5 admin template, job board admin, job portal admin, modern, responsive admin dashboard, sales dashboard, sass, ui kit, web app, frontend">
    <meta name="description"
        content="We proudly present Jobick, a Job Admin dashboard HTML Template, If you are hiring a job expert you would like to build a superb website for your Jobick, it's a best choice.">
    <meta property="og:title" content="Jobick : Job Admin Dashboard Bootstrap 5 Template + FrontEnd">
    <meta property="og:description"
        content="We proudly present Jobick, a Job Admin dashboard HTML Template, If you are hiring a job expert you would like to build a superb website for your Jobick, it's a best choice.">
    <meta property="og:image" content="https://jobick.dexignlab.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Page Title -->
    <title>@yield('title')</title>
   
    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/admin/images/favicon.png') }}">
    <!-- Daterange picker -->
    <link href="{{ asset('assets/admin/vendor/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <!-- Clockpicker -->
    <link href="{{ asset('assets/admin/vendor/clockpicker/css/bootstrap-clockpicker.min.css') }}" rel="stylesheet">
    <!-- asColorpicker -->
    <link href="{{ asset('assets/admin/vendor/jquery-asColorPicker/css/asColorPicker.min.css') }}" rel="stylesheet">
    <!-- Material color picker -->
    <link
        href="{{ asset('assets/admin/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}"
        rel="stylesheet">

    <!-- Pick date -->
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/pickadate/themes/default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/pickadate/themes/default.date.css') }}">
    <link href="../icon?family=Material+Icons" rel="stylesheet">

      <!-- Datatable -->
    <link href="{{asset('assets/admin/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
     

    <!-- All StyleSheet -->
    <link href="{{ asset('assets/admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet">

    <!-- Globle CSS -->
    <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet">

 <!-- Include Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <!-- Include Dropify CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" rel="stylesheet">
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <!-- Include Sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    
    <style>
        .dropify-wrapper .dropify-message span.file-icon {
            display: block;
            font-size: 30px;
        }
    </style>
    @stack('styles')

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Header start
        ***********************************-->
        @include('admin.includes.header');
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('admin.includes.sidebar');
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            @yield('content')
        </div>
        <!--**********************************
            Content body end
        ***********************************-->



        <!--**********************************
            Footer start
        ***********************************-->
        @include('admin.includes.footer')
        <!--**********************************
            Footer end
        ***********************************-->



    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
 Scripts
***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('assets/admin/vendor/global/global.min.js') }}"></script>
    
    <script src="{{ asset('assets/admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>

    <!-- Apex Chart -->
    <script src="{{ asset('assets/admin/vendor/apexchart/apexchart.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/chartjs/chart.bundle.min.js') }}"></script>


 <!-- Datatable -->
   <script src="{{asset('assets/admin/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
   <script src="{{asset('assets/admin/js/plugins-init/datatables.init.js')}}"></script>
  

    <!-- Chart piety plugin files -->
    <script src="{{ asset('assets/admin/vendor/peity/jquery.peity.min.js') }}"></script>

    <!-- Dashboard 1 -->
    <script src="{{ asset('assets/admin/js/dashboard/dashboard-1.js') }}"></script>

    <script src="{{ asset('assets/admin/vendor/owl-carousel/owl.carousel.js') }}"></script>

    <!-- Daterangepicker -->
    <!-- momment js is must -->
    <script src="{{ asset('assets/admin/vendor/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <!-- clockpicker -->
    <script src="{{ asset('assets/admin/vendor/clockpicker/js/bootstrap-clockpicker.min.js') }}"></script>
    <!-- asColorPicker -->
    <script src="{{ asset('assets/admin/vendor/jquery-asColor/jquery-asColor.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/jquery-asGradient/jquery-asGradient.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js') }}"></script>
    <!-- Material color picker -->
    <script
        src="{{ asset('assets/admin/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}">
    </script>
    <script src="{{ asset('assets/admin/vendor/bootstrap-datepicker-master/js/bootstrap-datepicker.min.js') }}"></script>
    <!-- pickdate -->
    <script src="{{ asset('assets/admin/vendor/pickadate/picker.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/pickadate/picker.time.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/pickadate/picker.date.js') }}"></script>



    <!-- Daterangepicker -->
    <script src="{{ asset('assets/admin/js/plugins-init/bs-daterange-picker-init.js') }}"></script>
    <!-- Clockpicker init -->
    <script src="{{ asset('assets/admin/js/plugins-init/clock-picker-init.js') }}"></script>
    <!-- asColorPicker init -->
    <script src="{{ asset('assets/admin/js/plugins-init/jquery-asColorPicker.init.js') }}"></script>
    <!-- Material color picker init -->
    <script src="{{ asset('assets/admin/js/plugins-init/material-date-picker-init.js') }}"></script>
    <!-- Pickdate -->
    <script src="{{ asset('assets/admin/js/plugins-init/pickadate-init.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>

   
    <script src="{{ asset('assets/admin/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/dlabnav-init.js') }}"></script>
    <script src="{{ asset('assets/admin/js/demo.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    
    <script>
        $(".form_datetime").datepicker({
            format: 'dd-mm-yyyy',
            autoclose: true
        });
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>

    <script>
        function JobickCarousel() {

            /*  testimonial one function by = owl.carousel.js */
            jQuery('.front-view-slider').owlCarousel({
                loop: false,
                margin: 30,
                nav: true,
                autoplaySpeed: 3000,
                navSpeed: 3000,
                autoWidth: true,
                paginationSpeed: 3000,
                slideSpeed: 3000,
                smartSpeed: 3000,
                autoplay: false,
                animateOut: 'fadeOut',
                dots: true,
                navText: ['', ''],
                responsive: {
                    0: {
                        items: 1,

                        margin: 10
                    },

                    480: {
                        items: 1
                    },

                    767: {
                        items: 3
                    },
                    1750: {
                        items: 3
                    }
                }
            })
        }

        jQuery(window).on('load', function() {
            setTimeout(function() {
                JobickCarousel();
            }, 1000);
        });
    </script>

    <!-- Include Dropify JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
    <!-- Include Datatable JS -->
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <!-- Include DataTables library -->


    <script>
        function deleteConfirm() {
            return confirm('Are you sure you want to delete this item?');
        }
        $('.dropify').dropify();

        // Used events
        var drEvent = $('.dropify-event').dropify();
        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });
        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });
    </script>
    <!-- Dyanamic Delete Alert -->
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            
            // Delete Data 
            const deleteTableRow = ($row) => {
                $row.remove(); // Remove the row from the table immediately
            };

            $('body').on('click', '.delete-item', event => {
                event.preventDefault();

                const $row = $(event.currentTarget).closest('tr');

                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: '#F72B50',
                    cancelButtonColor: '#0E8A74',
                    confirmButtonText: "Yes, delete it!"
                }).then(result => {
                    if (result.isConfirmed) {
                        deleteTableRow($row); // Remove the row from the table
                        const deleteUrl = $(event.currentTarget).attr('href');

                        // Send an AJAX request to delete the item from the server
                        $.ajax({
                            type: 'DELETE',
                            url: deleteUrl,
                            success: data => {
                                const {
                                    status,
                                    message
                                } = data;
                                const icon = status === 'success' ? 'success' : 'error';

                                Swal.fire({
                                    title: status === 'success' ? 'Deleted!' :
                                        'Error!',
                                    text: message,
                                    icon: icon
                                });
                            },
                            error: (xhr, status, error) => {
                                console.error(xhr.responseText);
                            }
                        });
                    }
                });
            });
        });
    </script>

    <!-- Include Summernote JS -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script> 
    @if(Session::has('success'))  
        toastr.success("{{ Session::get('success') }}","Success",{positionClass:"toast-bottom-left",progressBar:!0});  
    @endif  
    @if(Session::has('info'))  
        toastr.info("{{ Session::get('info') }}","Welcome",{positionClass:"toast-bottom-left",progressBar:!0});  
    @endif  
    @if(Session::has('warning'))  
        toastr.warning("{{ Session::get('warning') }}","Warning!",{positionClass:"toast-bottom-left",progressBar:!0});  
    @endif  
    @if(Session::has('error'))  
        toastr.error("{{ Session::get('error') }}","Error",{positionClass:"toast-bottom-left",progressBar:!0});  
    @endif  
</script>
    @stack('scripts')
</body>

</html>
