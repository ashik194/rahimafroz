<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />




     <!-- FAVICON -->
     <link rel="icon" href="../assets/images/brand-logos/favicon.ico" type="image/x-icon">

     <!-- ICONS CSS -->
     <link href="{{asset('/backend/css/icons.css')}}" rel="stylesheet">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="{{asset('/backend/css/style.css')}}">
        
    <!-- SIMPLEBAR CSS -->
    <link rel="stylesheet" href="{{asset('/backend/css/simplebar.min.css')}}">

    <!-- COLOR PICKER CSS -->
    <link rel="stylesheet" href="{{asset('/backend/css/nano.min.css')}}">
    
    <!-- MAIN JS -->
    <script src="{{asset('/backend/js/main.js')}}"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100 dark:bg-gray-900">
    @include('backend.layouts.header')
    @include('backend.layouts.sidebar')

    <!-- Page Content -->
    <main>
        
    <!-- MAIN-CONTENT -->
    <div class="content">
        <div class="main-content">
            @yield('content')
        </div>
    </div>
    </main>
    @include('backend.layouts.footer')

</div>

<script src="https://code.jquery.com/jquery-3.6.0.js" ></script>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>




    <!-- PRELINE JS -->
    <script src="{{asset('/backend/js/preline.js')}}"></script>

    <!-- POPPER JS -->
    <script src="{{asset("/backend/js/popper.min.js")}}"></script>

    <!-- COLOR PICKER JS -->
    <script src="{{asset('/backend/js/pickr.es5.min.js')}}"></script>

    <!-- SWITCH JS -->
    <script src="{{asset('/backend/js/switch.js')}}"></script>
    
    <!-- SIMPLEBAR JS -->
    <script src="{{asset('/backend/js/simplebar.min.js')}}"></script>
    
    <!-- Apex Charts JS -->
    <script src="{{asset('/backend/js/apexcharts.min.js')}}"></script>

    <!-- Used For Sessions By Device Chart -->
    <script src="{{asset('/backend/js/moment.js')}}"></script>
    
    <!-- Analytics-Dashboard JS -->
    <script src="{{asset('/backend/js/analytics-dashboard.js')}}"></script>
    

    <!-- DEFAULTMENU JS -->
    <script src="{{asset('/backend/js/defaultmenu.js')}}"></script>

    <!-- STICKY JS -->
    <script src="{{asset('/backend/js/sticky.js')}}"></script>

    <!-- CUSTOM JS -->
    <script src="{{asset("/backend/js/custom.js")}}"></script>

    <!-- CUSTOM-SWITCHER JS -->
    <script src="{{asset('/backend/js/custom-switcher.js')}}"></script>

    <!-- END SCRIPTS -->

{{-- <script>
    $(document).ready(function () {
        
        $('.owl-carousel').owlCarousel({
            nav: true,
      
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000,
            responsive: {
                0: {
                    items: 1,
                    margin: 10,
                },
                600: {
                    items: 2,
                    margin: 20,
                },
                1000: {
                    items: 4,
                    margin: 60,
                },
            },
        });

        $('.owl-nav').css('display','block')

    });
</script> --}}
</body>
</html>
