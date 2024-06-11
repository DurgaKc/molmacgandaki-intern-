@extends('admin.layouts.master')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class=" d-flex justify-content-between">
                            <div>
                                <h4 class="fs-5 mt-3">समाचार सूची</h4>
                            </div>
                            <div>
                                <a href="{{route('admin.news.create')}}" class="btn btn-primary align-item-end">नयाँ थप्नुहोस्
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <table class="table border">
            <thead>
                <tr class=" fs-4">
                    <th scope="col">क्र.स</th>
                    <th scope="col">शीर्षक</th>
                    <th scope="col">फोटो</th>
                    <th scope="col">प्रकाशक</th>
                    <th scope="col">समाचारवर्ग</th>
                    <th scope="col">मिति</th>
                    {{-- <th scope="col">Description</th> --}}
                    <th scope="col">#</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($news as $news)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $news->title ?? '' }}</td>
                        <td><img src="{{ $news->photo }}" width="100" height="100"></td>
                        <td>{{ $news->publisher ?? '' }}</td>
                        <td>{{ $news->newsCategory->title ?? '' }}</td>
                        <td>{{ $news->date ?? '' }}</td>
                        {{-- <td>{{ $news->description ?? '' }}</td> --}}

                        {{-- <td>
                            <a href="{{ route('admin.news.edit', $news) }}" class="text-dark">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>

                            <form action="{{ route('admin.news.destroy', $news) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link p-0"
                                    onclick="return confirm('Are you sure you want to delete this data?')">
                                    <i class="fa fa-trash text-dark mx-3" aria-hidden="true"></i>
                                </button>
                            </form>

                        </td> --}}

                        <td>

                            <a href="{{ route('admin.news.edit', $news) }}" class="text-dark">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>

                            <form action="{{ route('admin.news.destroy', $news) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link p-0 m-0" onclick="return confirm('Are you sure you want to delete this publication?')">
                                    <i class="fa fa-trash text-dark mx-3" aria-hidden="true"></i>
                                </button>
                            </form>

                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
