@extends('admin.layouts.master')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class=" d-flex justify-content-between">
                            <div>
                                <h4 class="fs-5 mt-3">कर्मचारी सूची</h4>
                            </div>
                            <div>
                                <a href="{{route('admin.employee.create')}}" class="btn btn-primary align-item-end">नयाँ थप्नुहोस्</a>
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
                    <th scope="col">नाम</th>
                    <th scope="col">फोटो</th>
                    <th scope="col">फोन</th>
                    <th scope="col">इमेल</th>
                    <th scope="col">विभाग</th>
                    <th scope="col">पद</th>
                    <th scope="col">#</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $employee->name ?? '' }}</td>
                        <td><img src="{{ $employee->photo }}" width="100" height="100"></td>
                        <td>{{ $employee->phone ?? '' }}</td>
                        <td>{{ $employee->email ?? '' }}</td>
                        <td>{{ $employee->department->title ?? '' }}</td>
                        <td>{{ $employee->designation->title ?? '' }}</td>

                        {{-- <td>
                            <a href="{{ route('admin.employee.edit', $employee) }}" class="text-dark">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>

                            <form action="{{ route('admin.employee.destroy', $employee) }}" method="POST"
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

                            <a href="{{ route('admin.employee.edit', $employee) }}" class="text-dark">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>

                            <form action="{{ route('admin.employee.destroy', $employee) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link p-0 m-0" onclick="return confirm('Are you sure you want to delete this department?')">
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
