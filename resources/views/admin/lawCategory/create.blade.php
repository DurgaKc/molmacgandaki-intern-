@extends('admin.layouts.master')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class=" d-flex justify-content-between">
                            <div>
                                <h4 class="fs-4 mt-3">कानूनवर्ग थप्नुहोस्</h4>
                            </div>
                            <div>
                                <a href="{{ route('admin.lawCategory.index') }}"
                                    class="btn btn-primary align-item-end">कानूनवर्ग सूची</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="container">
                <form class="row" action="{{ route('admin.lawCategory.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6  fs-3 mt-4">
                        <label for="title" class="form-label">शीर्षक</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="col-md-6 fs-3 mt-4">
                        <label for="title_en" class="form-label">शीर्षक अंग्रेजीमा</label>
                        <input type="text" class="form-control" id="title_en" name="title_en" required>
                    </div>

                    <div class="col-md-12 fs-4 mb-4">
                        <button type="submit" class="btn btn-primary mt-4">पेश गर्नुहोस्</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
