@extends('layouts.master')
@section('title','publication')
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
            <h4 class="fw-bold mb-4 mt-4">प्रकाशन
            </h4>
            <div class="row">
                <div class="col-md-6">

                </div>
                <div class="col-md-6">

                    <div class="input ms-5">
                        <select class="act px-5 py-2">
                            <option value="act" selected disabled>प्रकाशन खोज्नुहोस</option>
                            <option value="Agriculture"><a href="#">सूचनाको हक सम्बन्धी स्वतः प्रकाशन गरिएको विवरण, मंसिर, २०८०</a></option>
                            <option value="Agriculture"><a href="#">वार्षिक विकास कार्यक्रम तथा प्रगति पुस्तिका आ.व. २०७८-०७९</a></option>
                            <option value="Agriculture"><a href="#">सूचनाको हक सम्बन्धी स्वतः प्रकाशन गरिएको विवरण, श्रावण, २०८०</a></option>
                            <option value="Agriculture"><a href="#">मुसूचनाको हक सम्वन्धी स्वत: प्रकाशन गरिएको विवरण~ २०७९, चैत्र</a></option>
                            <option value="Agriculture"><a href="#">सूचनाको हक सम्वन्धी स्वत: प्रकाशन गरिएको विवरण~ २०७९, मंसिर</a></option>
                            <option value="Agriculture"><a href="#">सूचनाको हक सम्वन्धी स्वत: प्रकाशन गरिएको विवरण~ २०७८, चैत्र</a></option>

                        </select><br>
                    </div>
                </div>

                <div class="col-md-4 mt-4">
                    <div class="act">
                        <div class="card border-dark">
                            <h6><i class='fas fa-download'></i></h6>
                            <p class="py-0 mx-3 mt-4 ">सूचनाको हक सम्बन्धी स्वतः प्रकाशन गरिएको विवरण, मंसिर, २०८०
                                </p>
                            <h5 class="pt-0 fs-8 pb-2 mt-0 ms-3">प्रकाशन | 2080-9-6 </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="act">
                        <div class="card border-dark">
                            <h6><i class='fas fa-download'></i></h6>
                            <p class="py-0 mx-3 mt-4 ">वार्षिक विकास कार्यक्रम तथा प्रगति पुस्तिका आ.व. २०७८-०७९
                                </p>
                            <h5 class="pt-0 fs-8 pb-2 mt-0 ms-3">प्रकाशन | 2080-6-7 </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="act">
                        <div class="card border-dark">
                            <h6><i class='fas fa-download'></i></h6>
                            <p class="py-0 mx-3 mt-4 ">सूचनाको हक सम्बन्धी स्वतः प्रकाशन गरिएको विवरण, श्रावण, २०८०
                                </p>
                            <h5 class="pt-0 fs-8 pb-2 mt-0 ms-3">प्रकाशन | 2080-5-18 </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="act">
                        <div class="card border-dark">
                            <h6><i class='fas fa-download'></i></h6>
                            <p class="py-0 mx-3 mt-4 ">सूचनाको हक सम्वन्धी स्वत: प्रकाशन गरिएको विवरण~ २०७९, चैत्र

                                </p>
                            <h5 class="pt-0 fs-8 pb-2 mt-0 ms-3">प्रकाशन | 2080-3-14  </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
