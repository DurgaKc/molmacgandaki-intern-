@extends('admin.layouts.master')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class=" d-flex justify-content-between">
                            <div>
                                <h4 class="fs-4 mt-3">सूचना थप्नुहोस</h4>
                            </div>
                            <div>
                                <a href="{{ route('admin.news.index') }}" class="btn btn-primary align-item-end">समाचार
                                    सूची</a>
                            </div>
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
            <form class="row" action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6  fs-4 mt-4">
                    <label for="title" class="mb-2">शीर्षक</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="col-md-6 fs-4 mt-4">
                    <label for="title_en"  class="mb-2">शीर्षक अंग्रेजीमा</label>
                    <input type="text" class="form-control" id="title_en" name="title_en" required>
                </div>
                <div class="col-md-6 fs-4 mt-4">
                    <label for="photo"  class="mb-2">फोटो</label>
                    <input type="file" class="form-control" id="photo" name="photo">
                </div>
                <div class="col-md-6 fs-4 mt-4">
                    <label for="news_category_id"  class="mb-2"> समाचारवर्ग</label>
                    <select class="form-select" id="news_category_id" name="news_category_id">
                        <option value="news_category_id">---छान्नुहोस्----</option>
                        @foreach ($newsCategories as $newsCategory)
                            <option value="{{ $newsCategory->id }}">{{ $newsCategory->title }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6 fs-4 mt-4">
                    <label for="publisher"  class="mb-2">प्रकाशक</label>
                    <input type="text" class="form-control" id="publisher" name="publisher">
                </div>
                <div class="col-md-6 fs-4 mt-4">
                    <label for="publisher_en"  class="mb-2">प्रकाशक अंग्रेजीमा</label>
                    <input type="text" class="form-control" id="publisher_en" name="publisher_en">
                </div>
                <div class="col-md-6 fs-4 mt-4">
                    <label for="date"  class="mb-2">मिति</label>
                    <input type="date" class="form-control" id="date" name="date">
                </div>
                <div class="col-md-12 fs-4 mt-4">
                    <label for="description" class="mb-2" >विवरण</label>
                    <textarea class="form-control editor" id="description" name="description"></textarea>
                </div>
                <div class="col-md-12 fs-4 mt-4">
                    <label for="description_en"  class="mb-2" >विवरण अंग्रेजीमा</label>
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
