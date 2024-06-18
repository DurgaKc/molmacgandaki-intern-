@extends('layouts.master')
@section('title','introduction')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <h6 class="fw-bold mb-3 mt-3">मन्त्रालयको बारेमा</h6>

            <div class="card shadow border-0 mb-3">
                <h6 class="mt-2 mb-3 ms-3"><a href="{{route('organization')}}">संगठन संरचना</a></h6>
            </div>
            <div class="card shadow border-0 mb-3">
                <h6 class="mt-2 mb-3 ms-3"><a href="{{route('introduction')}}">परिचय</a></h6>
            </div>
            <div class="card shadow border-0 mb-3">
                <h6 class="mt-2 mb-3 ms-3"><a href="{{route('workarea')}}">उद्धेश्य</a></h6>
            </div>
            <div class="card shadow border-0 mb-3">
                <h6 class="mt-2 mb-3 ms-3"><a href="{{route('citizen')}}">प्रशासन तथा सहकारी विकास महाशाखा</a></h6>
            </div>
            <div class="card shadow border-0 mb-3">
                <h6 class="mt-2 mb-3 ms-3"><a href="#">कार्य क्षेत्र</a></h6>
            </div>
            <div class="card shadow border-0 mb-3">
                <h6 class="mt-2 mb-3 ms-3"><a href="{{route('planning')}}">योजना तथा अनुगमन महाशाखा</a></h6>
            </div>
            <div class="card shadow border-0 mb-3">
                <h6 class="mt-2 mb-3 ms-3"><a href="{{route('agri')}}">कृषि बिकास महाशाखा</a></h6>
            </div>
            <div class="card shadow border-0 mb-3">
                <h6 class="mt-2 mb-3 ms-3"><a href="{{route('lives')}}">पशुपंछी विकास महाशाखा</a></h6>
            </div>
            <div class="card shadow border-0 mb-3">
                <h6 class="mt-2 mb-3 ms-3"><a href="{{route('land')}}">भूमि व्यवस्था तथा भूमिश्रोत नक्साङ्कन महाशाखा</a></h6>
            </div>

        </div>

        <div class="col-md-9 justify-content-between">
            <h6 class="fw-bold mb-3 mt-3">परिचय</h6>
           @foreach ($introductions as $introduction )
           <div class="d-print" >
            <div class="print justify-content-end"><i class="fas fa-print"></i></div>
            <h5>{{$introduction->title}}</h5>
                <P>{{$introduction->description}}<br></P>
        </div>

           @endforeach
        </div>
    </div>
</div>
@endsection
