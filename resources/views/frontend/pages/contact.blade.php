@extends('layouts.master')
@section('title','contact')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-5">
            <h4 class="fw-bold mt-5 mb-3 ms-4">सम्पर्क विवरण</h4>
            <form class="ms-4" action="{{route('feedback')}}" method="POST">
                @csrf
                <div class="contact">
                    <div class="d-flex">
                        <div>
                            <label>पुरा नाम *</label>
                            <input type="text" class="form-control" name="fullname" placeholder="पुरा नाम">
                        </div>
                        <div class="ms-3">
                            <label>फोन नं. *</label>
                            <input type="text" class="form-control" name="phone" placeholder="+977">
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="my-3">
                            <label>ईमेल *</label>
                            <input type="email" class="form-control" name="email" placeholder="ईमेल *">
                        </div>
                        <div class="ms-3 my-3">
                            <label>सम्पर्कको उद्देश्य *</label>
                            <input type="text" class="form-control"  name="objective" placeholder="--सम्पर्कको उद्देश्य--">
                        </div>
                    </div>
                </div>
                <label class=" mt-3">सन्देश *</label>
                <textarea class="form-control" placeholder="सन्देश *"  name="message"></textarea>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-primary text-white mt-2 ">पठाउनुहोस</button>

                </div>

            </form>
        </div>
        <div class="col-md-7">
            <div class="map mt-5">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11146.583209270146!2d83.96070837295092!3d28.195858679884413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399595dfda775477%3A0xb931f5bb4cfcb316!2sRegistrar%20office%20of%20Ministry%20of%20Land%20Management%2C%20Agriculture%2C%20Co-operative%20%26%20Poverty%20Alleviation%2C%20Gandaki%20Province!5e0!3m2!1sen!2snp!4v1713505186166!5m2!1sen!2snp"
                    width="700" height="480" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <div class="col-md-3 my-5">
            <div class="row">
                <div class="d-flex">
                    <div class="text-primary fs-1 "><i class="fa fa-building"></i></div>
                    <div class="ms-3">
                        <p class="my-0">कार्यालय</p>
                        <p class="my-0">कृषि तथा भूमि व्यवस्था मन्त्रालय</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-md-3 my-5">
            <div class="row">
                <div class="d-flex">
                    <div class="text-primary fs-1"><i class="fas fa-map-marker-alt"></i></div>
                    <div class="ms-3">
                        <p class="my-0">ठेगाना</p>
                        <p class="my-0">पोखरा, नेपाल </p>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-md-3 my-5">
            <div class="row">
                <div class="d-flex">
                    <div class="text-primary fs-1 "><i class="fa fa-envelope"></i></div>
                    <div class="ms-3">
                        <p class="my-0">ईमेल</p>
                        <p class="my-0">(प्रशासन)-prasasan.molmacgandaki@gmail.com, molmacprovince4@gmail.com,
                            </p>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-md-3 my-5">
            <div class="row">
                <div class="d-flex">
                    <div class="text-primary fs-1 "><i class="fa fa-phone"></i></div>
                    <div class="ms-3">
                        <p class="my-0">फोन</p>
                        <p class="my-0">061-467885 </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
