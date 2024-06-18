@extends('admin.layouts.master')
@section('content')
    <header class="header">
        <div class="container-fluid">
            <div class="col-md-4">
                <div class="row mb-4">
                    <div class="col-md-4 fs-5">
                        <i class="fa fa-list"></i>
                    </div>
                    <div class="col-md-6 border border-dark" style="width:13rem; height:2rem;">
                        <div class="d-flex flex-row bd-highlight mb-3">
                            <div class="p-2 bd-highlight">
                                <i class="ti ti-search"></i>
                            </div>
                            <div class="p-2 bd-highlight">
                                <input type="text " id="search-input" class="border border-0" style="width:9rem;"
                                    placeholder="Search....">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container-fluid bg-light">
            <div class=" d-flex justify-content-between">
                <div>
                    <h4 class="fs-4 mt-3 fw-bold fs-6">ड्यासबोर्ड </h4>
                </div>
                <div>
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-primary align-item-end">ड्यासबोर्ड</a>
                </div>
            </div>

            <div class="container-fluid bg-light mt-3" style="height: 20rem;">
                <div class="row">
                    <div class="col-md-3 mt-4 ">
                        <div class="card ">
                            <div class=" d-flex justify-content-between">
                                <div class="col-md-4">
                                    <i class="fa fa-users m-5 fs-6"></i>
                                </div>
                                <div class="col-md-8">
                                    <h5 class="mt-4  mx-3  fw-bold text-dark">जम्मा कर्मचारीहरु</h5>
                                    <h3 class="text-dark mx-5">{{ $employee_count }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-4 ">
                        <div class="card ">
                            <div class=" d-flex justify-content-between">
                                <div class="col-md-4">
                                    <i class="fa fa-images m-5 fs-6"></i>
                                </div>
                                <div class="col-md-8">
                                    <h5 class="mt-4  mx-3  fw-bold text-dark">जम्मा फोटोहरु</h5>
                                    <h3 class="text-dark mx-5">0</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-4 ">
                        <div class="card ">
                            <div class=" d-flex justify-content-between">
                                <div class="col-md-4">
                                    <i class="fa fa-images m-5 fs-6"></i>
                                </div>
                                <div class="col-md-8">
                                    <h5 class="mt-4  mx-3  fw-bold text-dark">जम्मा स्लाइडर</h5>
                                    <h3 class="text-dark mx-5">{{ $slider_count }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-4 ">
                        <div class="card ">
                            <div class=" d-flex justify-content-between">
                                <div class="col-md-4">
                                    <i class="fa fa-file m-5 fs-6"></i>
                                </div>
                                <div class="col-md-8">
                                    <h5 class="mt-4  mx-3  fw-bold text-dark">कानुनी दस्तावेज</h5>
                                    <h3 class="text-dark mx-5">{{$law_count}}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-4 ">
                        <div class="card ">
                            <div class=" d-flex justify-content-between">
                                <div class="col-md-4">
                                    <i class="fa fa-file m-5 fs-6"></i>
                                </div>
                                <div class="col-md-8">
                                    <h5 class="mt-4 mx-3 fw-bold text-dark">
                                        सूचना/ समाचार</h5>
                                    <h3 class="text-dark mx-5">{{$news_count}}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-4 ">
                        <div class="card ">
                            <div class=" d-flex justify-content-between">
                                <div class="col-md-4">
                                    <i class="fa fa-file m-5 fs-6"></i>
                                </div>
                                <div class="col-md-8">
                                    <h5 class="mt-4 mx-4 fw-bold text-dark">
                                        प्रकाशन</h5>
                                    <h3 class="text-dark mx-5">{{$publication_count}}</h3>
                                </div>
                            </div>
                        </div>
                    </div>


    </header>
@endsection
