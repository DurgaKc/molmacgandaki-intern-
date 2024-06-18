@extends('admin.layouts.master')
@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-between">
            <div class="p-1">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">
                            Home</a></li>
                    </ol>
                </nav>
            </div>
            <div class="p-1">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">
                            Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> <a href="{{route('admin.slider.index')}}">Slider</a></li>
                    </ol>
                </nav>
            </div>
        </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class=" d-flex justify-content-between">
                            <div>
                                <h4 class="fs-4 mt-3 fw-bold">स्लाइडर थप्नुहोस</h4>
                            </div>
                            <div>
                                <a href="{{ route('admin.slider.index') }}" class="btn btn-primary align-item-end my-2">स्लाइडर
                                    सूची</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <div class="card">
            <div class="container">
                <form action="{{ route('admin.slider.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6  fs-4 mt-4">
                            <label for="validationDefault01" class="form-label">शीर्षक</label>
                            <input type="text" class="form-control" id="validationDefault01" name="title" required>
                        </div>
                        <div class="col-md-6 fs-4 mt-4">
                            <label for="validationDefault02" class="form-label">शीर्षक अंग्रेजीमा</label>
                            <input type="text" class="form-control" id="validationDefault02" name="title_en" required>
                        </div>
                        <div class="col-md-6 fs-4 mt-4">
                            <label for="validationDefault03" class="form-label">फोटो</label>
                            <input type="file" class="form-control" id="validationDefault03" name="photo">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary my-4">पेश गर्नुहोस्</button>

                </form>
            </div>
        </div>
    </div>
@endsection
