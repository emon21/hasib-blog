@include('frontend/inc_file/header')


<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Preloader start -->
    <div id="preloader">
        <div id="loader">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="lading"></div>
        </div>
    </div>

    <!-- Main Header start -->
@include('frontend/inc_file/top_menu')
   

    <!-- Welcome two Section -->
    @yield('content')
    
@include('frontend/inc_file/footer')
