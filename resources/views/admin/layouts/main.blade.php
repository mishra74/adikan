<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- required meta -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- #keywords -->
        <meta name="keywords"
            content="Bluefin Academy - A Unit of Bluefin Advisory, Pro Traders Program, Job Assure Program, NISM Certification">
        <!-- #description -->
        <meta name="description"
            content="Bluefin Academy - Learn More, Earn More - A Unit of Bluefin Advisory, Pro Traders Program, Job Assure Program, NISM Certification">
        <!-- #title -->
        <title>Bluefin Academy - Learn More, Earn More - A Unit of Bluefin Advisory</title>
        <!-- #favicon -->
        <link rel="shortcut icon" href="frontend/assets/images/fav.png" type="image/x-icon">
        <!-- ==== css dependencies start ==== -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.36.0/tabler-icons.min.css">
        <link rel="stylesheet" href="frontend/assets/css/style.min.css">
    
        <link rel="stylesheet" href="https://affixtheme.com/html/flafy/flafy/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="https://affixtheme.com/html/flafy/flafy/vendor/vegas/vegas.min.css">
        <link rel="stylesheet" href="frontend/assets/css/style.css">
    
    </head>

<body>

   
        @include('admin.includes.header');
        
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
