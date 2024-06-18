@extends('layouts.master')
@section('title','employee')
@section('content')

<div class="container" data-aos="fade-down">
    <h4 class="fw-bold mt-5 ms-2">कर्मचारीको विवरण</h4>
    <div class="row">
@foreach ($employees as $employee )
<div class="col-md-3 mb-5">
    <div class="card border-0 bg-light">
        <img src="{{$employee->photo}}"  class="border rounded-3 mt-4 mb-4" style="height: 150px; width: 150px;" alt="photo">
        <h6 class="text-center fw-bold ">"{{$employee->name}}"</h6>
        <a href="#" class="text-center">"{{$employee->department->title}}"</a>
        <a href="#" class="text-center">"{{$employee->designation->title ?? 'null'}}"</a>
        <p  class="text-center"><i class="fa fa-phone"></i>"{{$employee->phone}}"</p>
        <p class="text-center"><i class="fa fa-envelope"></i>"{{$employee->email}}"</p>
        {{-- <p class="text-center"><i class="fas fa-map-marker-alt"></i>null</p> --}}
    </div>
</div>

@endforeach

    </div>
</div>
@endsection
