@extends('admin.layouts.master')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="p-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">
                            Home</a></li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class=" d-flex justify-content-between">
                            <div>
                                <h4 class="fs-5 mt-3">विभाग सूची</h4>
                            </div>
                            <div>
                                <a href="{{ route('admin.department.create') }}" class="btn btn-primary align-item-end">नयाँ थप्नुहोस</a>
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
                <th scope="col">शीर्षक अंग्रेजीमा</th>
                <th scope="col">#</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($departments as $department)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $department->title ?? '' }}</td>
                        <td>{{ $department->title_en ?? '' }}</td>

                        <td>

                            <a href="{{ route('admin.department.edit', $department) }}" class="text-dark">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>

                            <form action="{{ route('admin.department.destroy', $department) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link p-0" onclick="return confirm('Are you sure you want to delete this department?')">
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
