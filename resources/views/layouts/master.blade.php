<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet"  href="{{asset('assets/frontend/css/style.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
   <title>@yield('title')/कृषि तथा भूमि व्यवस्था मन्त्रालय</title>
</head>

<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
    @include('sweetalert::alert')


    <!--------------- header ------------------>
@include('frontend.partials.header')
    <!--------------- header end --------------------->
    <!-- --------------------------------------------- -->
    <!--------------- nav bar start ------------------>
@include('frontend.partials.navbar')
    <!----------------- nav bar ends --------------------->
    <!-- ---------------------------------------------- -->
    <!-- news section start-->
  @yield('content')

    <!-- footer -->
@include('frontend.partials.footer')

{{-- <div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close fs-2 mt-0">&times;</span>
        <hr class="mt-0">
        <img src="{{asset('assets/frontend/images/modal.jpg')}}" alt="Placeholder Image">
    </div>
</div> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    {{-- <!-- popup -->
    <!-- <script type="text/javascript">
        $(document).ready(function () {
            $("#exampleModal").modal('show');
          });
    </script> --> --}}

    <script src="{{asset('assets/frontend/js/script.js')}}"></script>
</body>

</html>
