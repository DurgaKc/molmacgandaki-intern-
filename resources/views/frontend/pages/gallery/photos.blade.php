@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 mt-4">
            <div class="ministry">
                <h6 class="ms-2 fw-bold">ग्यालेरी</h6>
                <div class="card shadow border-0 mb-3">
                    <h6 class="mt-2 mb-3 ms-3"><a href="{{route('audio')}}">अडियो ग्यालेरी</a></h6>
                </div>
                <div class="card shadow border-0 mb-3">
                    <h6 class="mt-2 mb-3 ms-3"><a href="{{route('photo')}}">फोटो ग्यालेरी</a></h6>
                </div>
                <div class="card shadow border-0 mb-3">
                    <h6 class="mt-2 mb-3 ms-3"><a href="{{route('vedio')}}">भिडियो ग्यालेरी</a></h6>
                </div>

            </div>
        </div>

        <div class="col-md-9 mb-5">
            <h4 class="fw-bold mb-4 mt-4">चक्लाबन्दी प्रवर्द्वन कार्यक्रम सम्वन्धी फिल्डकार्य
            </h4>
            <div class="row">
                <div class="col-md-4">

                    <img src="{{asset('assets/frontend/images/photocopy.jpg')}}" style="height: 150px; width: 280px;" alt="photo">
                </div>
                <div class="col-md-4">

                    <img src="{{asset('assets/frontend/images/ph.jpg')}}" style="height: 150px; width: 280px;" alt="photo">

                </div>
                <div class="col-md-4 mb-4">

                    <img src="{{asset('assets/frontend/images/pho.jpg')}}" style="height: 150px; width: 280px;" alt="photo">

                </div>
                <div class="col-md-4">

                    <img src="{{asset('assets/frontend/images/bohara.jpg')}}" style="height: 150px; width: 280px;" alt="photo">

                </div>

                <div class="col-md-4">

                    <img src="{{asset('assets/frontend/images/field.jpg')}}" style="height: 150px; width: 280px;" alt="photo">
                </div>

                <div class="col-md-4">

                    <img src="{{asset('assets/frontend/images/achyut.jpg')}}" style="height: 150px; width: 280px;" alt="photo">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
