<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>कृषि तथा भूमि व्यवस्था मन्त्रालय </title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/backend/images/logos/image.png') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/backend/css/styles.min.css') }}" />
</head>

<body>
    @include('sweetalert::alert')
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        @include('admin.partials.sidebar')
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            @include('admin.partials.header')
            <!--  Header End -->
            <div class="container-fluid">
                @yield('content')

                <footer>
                    <div class="py-6 px-6 text-center">
                        <p class="mb-0 fs-4">2024&copy;Design and Developed by <a
                                href="https://www.facebook.com/profile.php?id=100016876090011" target="_blank"
                                class="pe-1 text-primary text-decoration-underline">Durga khanal</a> Distributed by <a
                                href="https://www.ninjainfosys.com/">Ninja Infosys</a></p>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/backend/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/backend/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('ssets/backend/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/backend/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/backend/libs/simplebar/dist/simplebar.js') }}"></script>
    <script src="{{ asset('assets/backend/js/dashboard.js') }}"></script>
</body>

</html>
