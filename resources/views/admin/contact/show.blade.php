@extends('admin.layouts.master')
@section('content')
<div class="d-flex  justify-content-between bd-highlight">
    <div class="p-2 bd-highlight">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"> <a href="{{route('admin.dashboard')}}">
                        Home</a></li>
            </ol>
        </nav>
    </div>
    <div class="p-2 ms-5  bd-highlight">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb me-3">
                <li class="breadcrumb-item"> <a href="{{route('admin.dashboard')}}">
                        Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{route('admin.contact.index')}}">FeedBack
                    </a></li>
            </ol>
        </nav>
    </div>
</div>
<div class="card bg-light ">
    <div class="container my-3 ">
        <div class="row">
            <div class="col-md-2">
                <p>पूरा नाम</p>
                <p>फोन</p>
                <p>इमेल</p>
                <p>सम्पर्कको उद्देश्य</p>
                <p>सन्देश</p>
            </div>
            <div class="col-md-9">
                <p>{{$contact->fullname}}</p>
                <p>{{$contact->phone}}</p>
                <p>{{$contact->email}}</p>
                <p>{{$contact->objective}}</p>
                <p>{{$contact->message}}</p>
            </div>
        </div>
    </div>
</div>
@endsection
