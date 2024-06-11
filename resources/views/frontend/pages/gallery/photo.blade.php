@extends('layouts.master')
@section('title','photo')
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
            <h4 class="fw-bold mb-4 mt-4">फोटो ग्यालेरी
            </h4>
            <div class="row">
                <div class="col-md-4">

                    <img src="{{asset('assets/frontend/images/kaski.jpg')}}" style="height: 150px; width: 280px;" alt="photo">
                    <h6 class="mt-2">कास्की जिल्लाको माछापुच्छ्रे गाउँपालिका घाचोकमा यस मन्त्रालयको सहयोगमा गरिएको
                        जग्गा चक्लाबन्दी</h6>
                    <div class="act">
                        <h5 class="fs-6">1 items</h5>
                    </div>
                </div>
                <div class="col-md-4">

                    <img src="{{asset('assets/frontend/images/syanga.jpg')}}" style="height: 150px; width: 280px;" alt="photo">
                    <h6 class="mt-2">मा. मन्त्रीज्यूबाट कृषि ज्ञान केन्द्र, स्याङ्गजा प्रमुखलाइ विदाइ गर्दै</h6>
                    <div class="act">
                        <h5 class="fs-6">1 items</h5>
                    </div>
                </div>
                <div class="col-md-4">

                    <img src="{{asset('assets/frontend/images/sachib.jpg')}}" style="height: 150px; width: 280px;" alt="photo">
                    <h6 class="mt-2">श्रीमान सचिव ज्यूबाट कृषि ज्ञान केन्द्र, स्याङ्गजाका प्रमुख श्री लोकेन्द्र
                        बोहोराको बिदाइमा सम्मान पत्र प्रदान गर्दै</h6>
                    <div class="act">
                        <h5 class="fs-6">1 items</h5>
                    </div>
                </div>
                <div class="col-md-4">

                    <img src="{{asset('assets/frontend/images/bohara.jpg')}}" style="height: 150px; width: 280px;" alt="photo">
                    <h6 class="mt-2">कृषि ज्ञान केन्द्र, स्याङ्गजाका प्रमुख श्री लोकेन्द्र बोहोराको बिदाइ</h6>
                    <div class="act">
                        <h5 class="fs-6">1 items</h5>
                    </div>
                </div>

                <div class="col-md-4">

                    <a href="{{route('photos')}}"><img src="{{asset('assets/frontend/images/field.jpg')}}" style="height: 150px; width: 280px;" alt="photo">
                        <h6 class="mt-2 text-dark">चक्लाबन्दी प्रवर्द्वन कार्यक्रम सम्वन्धी फिल्डकार्य</h6>
                        <div class="act">
                            <h5 class="fs-6">6 items</h5>
                        </div></a>
                </div>
                <div class="col-md-4">

                    <img src="{{asset('assets/frontend/images/achyut.jpg')}}" style="height: 150px; width: 280px;" alt="photo">
                    <h6 class="mt-2">श्रीमान सचिव अच्युत प्रसाद ढकालज्यूको बिदाई कार्यक्रमका महत्वपुर्ण क्षणहरु:
                    </h6>
                    <div class="act">
                        <h5 class="fs-6">1 items</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
