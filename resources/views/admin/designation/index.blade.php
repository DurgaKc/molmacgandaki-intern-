@extends('admin.layouts.master')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class=" d-flex justify-content-between">
                            <div>
                                <h4 class="fs-5 mt-3">पद सूची</h4>
                            </div>
                            <div>
                                <a href="{{ route('admin.designation.create') }}" class="btn btn-primary align-item-end">नयाँ
                                    थप्नुहोस्</a>
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
                <th scope="col">शीर्षक अंग्रेजीमा</th>
                <th scope="col">#</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($designations as $designation)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $designation->title ?? '' }}</td>
                        <td>{{ $designation->title_en ?? '' }}</td>

                        <td>

                            <a href="{{ route('admin.designation.edit', $designation) }}" class="text-dark">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>

                            <form action="{{ route('admin.designation.destroy', $designation) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link p-0" onclick="return confirm('Are you sure you want to delete this designation?')">
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
