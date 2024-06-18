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
                        <li class="breadcrumb-item active" aria-current="page"> <a href="{{route('admin.publication.index')}}">प्रकाशन</a></li>
                    </ol>
                </nav>
            </div>
        </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class=" d-flex justify-content-between">
                            <div>
                                <h4 class="fs-4 mt-3">प्रकाशन सम्पादन गर्नुहोस्</h4>
                            </div>
                            <div>
                                <a href="{{ route('admin.publication.index') }}" class="btn btn-primary align-item-end">प्रकाशन सूची</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        {{-- to check error in code --}}
        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
        <div class="card">
            <div class="container">
                <form class="row" action="{{ route('admin.publication.update', $publication) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-md-6  fs-3 mt-4">
                        <label for="title" class="form-label">शीर्षक</label>
                        <input type="text" class="form-control" id="title" value="{{old('title', $publication->title)}}" name="title" required>
                    </div>
                    <div class="col-md-6 fs-3 mt-4">
                        <label for="title_en" class="form-label">शीर्षक अंग्रेजीमा</label>
                        <input type="text" class="form-control" id="title_en" value="{{old('title_en', $publication->title_en)}}"  name="title_en" required>
                    </div>
                    <div class="col-md-6 fs-3 mt-4">
                        <label for="photo" class="form-label">फोटो</label>
                        <input type="file" class="form-control" id="photo" value="{{old('photo', $publication->photo)}}" name="photo">
                    </div>

                    <div class="col-md-6 fs-3 mt-4">
                        <label for="news">प्रकाशन वर्ग</label>
                        <select class="form-select" id="publication_category_id" name="publication_category_id">
                            <option value="publication_category_id">---छान्नुहोस्----</option>
                            @foreach ($publicationCategories as $publication_category)
                                <option value="{{ $publication_category->id }}">{{ $publication_category->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 fs-3 mt-4">
                        <label for="publisher" class="form-label">प्रकाशक</label>
                        <input type="text" class="form-control " id="publisher" value="{{old('publisher', $publication->publisher)}}"  name="publisher">
                    </div>
                    <div class="col-md-6 fs-3 mt-4">
                        <label for="publisher_en" class="form-label">प्रकाशन वर्ग</label>
                        <input type="text" class="form-control " id="publisher_en"  value="{{old('publisher_en', $publication->publisher_en)}}" name="publisher_en">
                    </div>
                    <div class="col-md-6 fs-3 mt-4">
                        <label for="date" class="form-label">date</label>
                        <input type="date" class="form-control" id="date" name="date">
                    </div>
                    <div class="col-md-12 fs-3 mt-4">
                        <label for="description" class="form-label">विवरण</label>
                        <textarea class="form-control editor" id="description" name="description"></textarea>
                    </div>
                    <div class="col-md-12 fs-3 mt-4">
                        <label for="description_en" class="form-label">विवरण अंग्रेजीमा</label>
                        <textarea class="form-control editor" id="description_en" name="description_en"></textarea>
                    </div>

                    <div class="col-md-12 fs-4 mb-4">
                        <button type="submit" class="btn btn-primary mt-4">पेश गर्नुहोस्</button>
                    </div>

                    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
                    <script>
                        document.querySelectorAll(".editor").forEach((editor) => {
                            ClassicEditor
                                .create(editor, {
                                    ckfinder: {
                                        uploadUrl: '/upload-image-endpoint'
                                    }
                                })
                                .catch(error => {
                                    console.error(error);
                                });
                        });
                    </script>
                </form>
            </div>
        </div>
    </div>

@endsection
