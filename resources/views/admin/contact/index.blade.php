@extends('admin.layouts.master')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class=" d-flex justify-content-between">
                            <div>
                                <h4 class="fs-5 mt-3"></h4>
                            </div>
                            <div>
                                <a href="{{route('admin.contact.index')}}" class="btn btn-primary align-item-end">सम्पर्क सूची</a>
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
                    <th scope="col">पूरा नाम</th>
                    <th scope="col">फोन</th>
                    <th scope="col">इमेल</th>
                    <th scope="col">सम्पर्कको उद्देश्य </th>
                    {{-- <th scope="col">सन्देश </th> --}}
                    <th scope="col">#</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $contact->fullname ?? '' }}</td>
                        <td>{{ $contact->phone ?? '' }}</td>
                        <td>{{ $contact->email ?? '' }}</td>
                        <td>{{ $contact->objective ?? '' }}</td>
                        {{-- <td>{{ $contact->message ?? '' }}</td> --}}



                        <td>

                            <a href="{{ route('admin.contact.show', $contact) }}" class="text-dark">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </a>

                            <form action="{{ route('admin.contact.destroy', $contact) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link p-0 m-0" onclick="return confirm('Are you sure you want to delete this contactdetails?')">
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
