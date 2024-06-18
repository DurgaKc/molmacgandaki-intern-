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
                        <li class="breadcrumb-item active" aria-current="page"> <a href="{{route('admin.subordinate.index')}}">Subordinate</a></li>
                    </ol>
                </nav>
            </div>
        </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4 class="fs-4 mt-3">मातहतका निकाय सम्पादन गर्नुहोस्</h4>
                            </div>
                            <div>
                                <a href="{{ route('admin.subordinate.index') }}" class="btn btn-primary align-item-end">मातहतका निकाय सूची</a>
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
            <form class="row" action="{{ route('admin.subordinate.update', $subordinate) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-md-6 fs-4 mt-4">
                    <label for="title" class="form-label">शीर्षक</label>
                    <input type="text" class="form-control" id="title" value="{{ old('title', $subordinate->title) }}"
                        name="title" required>
                </div>
                <div class="col-md-6 fs-4 mt-4">
                    <label for="title_en" class="form-label">शीर्षक अंग्रेजीमा</label>
                    <input type="text" class="form-control" id="title_en" value="{{ old('title_en', $subordinate->title_en) }}"
                        name="title_en" required>
                </div>
                <div class="col-md-6 fs-4 mt-4">
                    <label for="url" class="form-label">Url</label>
                    <input type="url" class="form-control" id="url" name="url">
                </div>
                <div class="col-md-12 fs-4 mb-4">
                    <button type="submit" class="btn btn-primary mt-4">पेश गर्नुहोस्</button>
                </div>
            </form>
        </div>
      </div>
    </div>
@endsection
