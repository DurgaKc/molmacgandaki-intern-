@extends('admin.layouts.master')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class=" d-flex justify-content-between">
                            <div>
                                <h4 class="fs-4 mt-3">प्रकाशन सूची</h4>
                            </div>
                            <div>
                                <a href="{{route('admin.publication.create')}}" class="btn btn-primary align-item-end">नयाँ थप्नुहोस</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <table class="table border">
            <thead>
                <tr class=" fs-4">
                    <th scope="col">क्र.स.</th>
                    <th scope="col">शीर्षक</th>
                    <th scope="col">फोटो</th>
                    <th scope="col">प्रकाशक</th>
                    <th scope="col">प्रकाशन वर्ग</th>
                    <th scope="col">मिति</th>
                    {{-- <th scope="col">विवरण</th> --}}
                    <th scope="col">#</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($publications as $publication)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $publication->title ?? '' }}</td>
                        <td><img src="{{ $publication->photo }}" width="100" height="100"></td>
                        <td>{{ $publication->publisher ?? '' }}</td>
                        <td>{{ $publication->publicationCategory->title ?? '' }}</td>
                        <td>{{ $publication->date ?? '' }}</td>
                        {{-- <td>{{ $publication->description ?? '' }}</td> --}}

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

                            <a href="{{ route('admin.publication.edit', $publication) }}" class="text-dark">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>

                            <form action="{{ route('admin.publication.destroy', $publication) }}" method="POST" style="display:inline-block;">
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
