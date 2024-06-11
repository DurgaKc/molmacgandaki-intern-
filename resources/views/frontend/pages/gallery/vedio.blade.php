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
            <h4 class="fw-bold mb-4 mt-4">भिडियो ग्यालेरी
            </h4>
            <div class="row">

            </div>
        </div>
    </div>
</div>
@endsection
