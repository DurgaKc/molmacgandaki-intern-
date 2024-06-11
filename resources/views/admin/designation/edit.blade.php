@extends('admin.layouts.master')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class=" d-flex justify-content-between">
                            <div>
                                <h4 class="fs-4 mt-3">पद सम्पादन गर्नुहोस्</h4>
                            </div>
                            <div>
                                <a href="{{ route('admin.designation.index') }}" class="btn btn-primary align-item-end">पद
                                    सूची</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card">
            <div class="container">
                <form class="row" action="{{ route('admin.designation.update', $designation) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-md-6  fs-3 mt-4">
                        <label for="validationDefault01" class="form-label">शीर्षक</label>
                        <input type="text" class="form-control" id="validationDefault01"
                            value="{{ old('title', $designation->title) }}" name="title" required>
                    </div>
                    <div class="col-md-6 fs-3 mt-4">
                        <label for="validationDefault02" class="form-label">शीर्षक अंग्रेजीमा</label>
                        <input type="text" class="form-control" id="validationDefault02"
                            value="{{ old('title_en', $designation->title_en) }}" name="title_en" required>
                    </div>

                    <div class="col-md-12 fs-4 mb-4">
                        <button type="submit" class="btn btn-primary mt-4">पेश गर्नुहोस्</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
