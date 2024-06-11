@extends('layouts.master')
@section('title','ministry')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 mt-4">
            <div class="ministry">

                <div class="card shadow border-0 mb-3">
                    <h6 class="mt-2 mb-3 ms-3"><a href="{{route('publication')}}">प्रकाशन</a></h6>
                </div>
                <div class="card shadow border-0 mb-3">
                    <h6 class="mt-2 mb-3 ms-3"><a href="{{route('record')}}">अभीलेख</a></h6>
                </div>
                <div class="card shadow border-0 mb-3">
                    <h6 class="mt-2 mb-3 ms-3"><a href="{{route('ministry')}}">मन्त्रालयस्तर बैठक</a></h6>
                </div>
                <div class="card shadow border-0 mb-3">
                    <h6 class="mt-2 mb-3 ms-3"><a href="{{route('form')}}">फारमहरू</a>
                    </h6>
                </div>
                <div class="card shadow border-0 mb-3">
                    <h6 class="mt-2 mb-3 ms-3"><a href="{{route('business')}}">व्यवसायिक योजनाको नमुना</a></h6>
                </div>
                <div class="card shadow border-0 mb-3">
                    <h6 class="mt-2 mb-3 ms-3"><a href="{{route('others')}}">अन्य
                    </a></h6>
                </div>

            </div>
        </div>

        <div class="col-md-9 mb-5">
            <h4 class="fw-bold mb-4 mt-4">मन्त्रालयस्तर बैठक
            </h4>
            <div class="row">
                <div class="col-md-6">

                </div>
                <div class="col-md-6">
                    <div class="input mx-3">
                        <select class="act px-5 py-2">
                            <option value="act" selected disabled>मन्त्रालयस्तर बैठक खोज्नुहोस</option>
                            <option value="service"><a href="#">No items found</a></option>

                        </select><br>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection
