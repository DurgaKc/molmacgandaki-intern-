@extends('layouts.master')
@section('title','business')
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
            <h4 class="fw-bold mb-4 mt-4">व्यवसायिक योजनाको नमुना
            </h4>
            <div class="row">
                <div class="col-md-6">

                </div>
                <div class="col-md-6">

                    <div class="input ms-5">
                        <select class="act px-5 py-2">
                            <option value="act" selected disabled>व्यवसायिक योजनाको नमुना खोज्नुहोस</option>
                            <option value="Agriculture"><a href="#">स्याउ खेती नमुना व्यवसायिक योजना</a></option>
                            <option value="Agriculture"><a href="#">सुन्तला खेती नमुना व्यवसायिक योजना</a></option>
                            <option value="Agriculture"><a href="#">कस्टम हायरिङ सेन्टर- व्यवसायिक योजना</a></option>

                        </select><br>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="act">
                        <div class="card border-dark">
                            <h6><i class='fas fa-download'></i></h6>
                            <p class="py-0 mx-3 mt-4 ">स्याउ खेती नमुना व्यवसायिक योजना</p>
                            <h5 class="pt-0 fs-8 pb-2 mt-0 ms-3">व्यवसायिक योजनाको नमुना | 2079-7-23 </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="act">
                        <div class="card border-dark">
                            <h6><i class='fas fa-download'></i></h6>
                            <p class="py-0 mx-3 mt-4 ">सुन्तला खेती नमुना व्यवसायिक योजना </p>
                            <h5 class="pt-0 fs-8 pb-2 mt-0 ms-3">व्यवसायिक योजनाको नमुना | 2079-7-23 </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="act">
                        <div class="card border-dark">
                            <h6><i class='fas fa-download'></i></h6>
                            <p class="py-0 mx-3 mt-4 ">कस्टम हायरिङ सेन्टर- व्यवसायिक योजना</p>
                            <h5 class="pt-0 fs-8 pb-2 mt-0 ms-3">व्यवसायिक योजनाको नमुना | 2079-7-23 </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
