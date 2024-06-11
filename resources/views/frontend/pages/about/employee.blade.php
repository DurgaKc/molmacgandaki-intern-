@extends('layouts.master')
@section('title','employee')
@section('content')

<div class="container" data-aos="fade-down">
    <h4 class="fw-bold mt-5 ms-2">कर्मचारीको विवरण</h4>
    <div class="row">
        <div class="col-md-3">
            <div class="card border-0 bg-light">
                <img src="{{asset('assets/frontend/images/dr.jpg')}}"  class="border rounded-3 mt-4 mb-4" style="height: 150px; width: 150px;" alt="photo">
                <h6 class="text-center fw-bold ">Dr.Tanka Prasad Prasai</h6>
                <a href="#" class="text-center">Province Secretary</a>
                <p  class="text-center"><i class="fa fa-phone"></i>9856077709</p>
                <p class="text-center"><i class="fa fa-envelope"></i>secretarymolmacgandaki@gmail.com</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 bg-light">
                <img src="{{asset('assets/frontend/images/ganga.jpg')}}"  class="border rounded-3 mt-4 mb-4" style="height: 150px; width: 150px;" alt="photo">
                <h6 class="text-center fw-bold ">Dr.Ganga Prasad Prasai</h6>

            </div>
        </div>
        <div class="col-md-3 mb-5">
            <div class="card border-0 bg-light">
                <img src="{{asset('assets/frontend/images/bhanu.jpg')}}"  class="border rounded-3 mt-4 mb-4" style="height: 150px; width: 150px;" alt="photo">
                <h6 class="text-center fw-bold ">Bhanubhakta Bhattarai</h6>
                <a href="#" class="text-center">Planning and Monitoring Division</a>
                <a href="#" class="text-center">Senior Agriculture Economist</a>
                <p  class="text-center"><i class="fa fa-phone"></i>9848020978</p>
                <p class="text-center"><i class="fa fa-envelope"></i>molmacprovince4@gmail.com</p>
                <p class="text-center"><i class="fas fa-map-marker-alt"></i>null</p>
            </div>
        </div>
        <div class="col-md-3 mb-5">
            <div class="card border-0 bg-light">
                <img src="{{asset('assets/frontend/images/shova.jpg')}}"  class="border rounded-3 mt-4 mb-4" style="height: 150px; width: 150px;" alt="photo">
                <h6 class="text-center fw-bold ">Dr. Shova Sharma</h6>
                <a href="#" class="text-center">null</a>
                <a href="#" class="text-center">null</a>
                <p  class="text-center"><i class="fa fa-phone"></i>null</p>
                <p class="text-center"><i class="fa fa-envelope"></i>prasasan.molmacgandaki@gmail.com</p>
                <p class="text-center"><i class="fas fa-map-marker-alt"></i>null</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3 mb-5">
            <div class="card border-0 bg-light">
                <img src="{{asset('assets/frontend/images/mira.jpg')}}"  class="border rounded-3 mt-4 mb-4" style="height: 150px; width: 150px;" alt="photo">
                <h6 class="text-center fw-bold ">Mira Chaudhary</h6>
                <a href="#" class="text-center">null</a>
                <a href="#" class="text-center">null</a>
                <p  class="text-center"><i class="fa fa-phone"></i>null</p>
                <p class="text-center"><i class="fa fa-envelope"></i>prasasan.molmacgandaki@gmail.com</p>
                <p class="text-center"><i class="fas fa-map-marker-alt"></i>null</p>
            </div>
        </div>

        <div class="col-md-3 mb-5">
            <div class="card border-0 bg-light">
                <img src="{{asset('assets/frontend/images/pushpa.jpg')}}"  class="border rounded-3 mt-4 mb-4" style="height: 150px; width: 150px;" alt="photo">
                <h6 class="text-center fw-bold ">Pushparaj Poudel</h6>
                <a href="#" class="text-center">Administration and Cooperative </a>
                <a href="#" class="text-center">Development Division</a>
                <a href="#" class="text-center">  Under Secretary</a>
                <p class="text-center"><i class="fa fa-envelope"></i>prasasan.molmacgandaki@gmail.com</p>
                <p class="text-center"><i class="fas fa-map-marker-alt"></i>null</p>
            </div>
        </div>
        <div class="col-md-3 mb-5">
            <div class="card border-0 bg-light">
                <img src="{{asset('assets/frontend/images/jyoti.jpg')}}"  class="border rounded-3 mt-4 mb-4" style="height: 150px; width: 150px;" alt="photo">
                <h6 class="text-center fw-bold ">Jyoti Chhetri</h6>
                <a href="#" class="text-center">Planning Section</a>
                <a href="#" class="text-center">Information Officer</a>
                <p  class="text-center"><i class="fa fa-phone"></i>9856049138</p>
                <p class="text-center"><i class="fa fa-envelope"></i>jyotichhetripkr@gmail.com</p>
                <p class="text-center"><i class="fas fa-map-marker-alt"></i>kaski</p>
            </div>
        </div>
        <div class="col-md-3 mb-5">
            <div class="card border-0 bg-light">
                <img src="{{asset('assets/frontend/images/khagendra.jpg')}}"  class="border rounded-3 mt-4 mb-4" style="height: 150px; width: 150px;" alt="photo">
                <h6 class="text-center fw-bold ">Khagendraraj Aryal</h6>
                <p class="text-center"><i class="fa fa-envelope"></i>prasasan.molmacgandaki@gmail.com</p>
                <p class="text-center"><i class="fas fa-map-marker-alt"></i>null</p>
            </div>
        </div>
    </div>
</div>
@endsection
