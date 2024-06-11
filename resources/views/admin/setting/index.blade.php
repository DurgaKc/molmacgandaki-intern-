@extends('admin.layouts.master')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class=" d-flex justify-content-between">
                            <div>
                                <h4  class="fs-4 mt-3 fw-bold">कार्यालय सेटिङ</h4>
                            </div>
                            <div>
                                {{-- <a href="{{ route('admin.setting.index') }}" class="btn btn-primary align-item-end">कार्यालय
                                    सेटिङ</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

       <div class="card">
       <div class="container">
        <form class="row mx-3" action="#" method="POST" enctype="multipart/form-data">

            @csrf

            <p class="fw-bold fs-4 mt-3 ms-4">कार्यालय बिवरण ठेगाना सेटअप</p>
            <div class="col-md-6 mt-3">
                <label for="office_name" class="form-label mx-2">कार्यालयको नाम</label>
                <input type="text" class="form-control" id="office_name"
                    value="{{ old('Office_name', $setting?->office_name) }}" name="office_name" >
            </div>
            <div class="col-md-6 mt-3 ">
                <label for="office_name_en" class="form-label mx-2">कार्यालयको नाम अंग्रेजीमा</label>
                <input type="text" class="form-control" id="office_name_en"
                    value="{{ old('Office_name_en', $setting?->office_name_en) }}" name="office_name_en" >
            </div>
            <div class="col-md-6 mt-3">
                <label for="address_en" class="form-label mx-2">ठेगाना अंग्रेजीमा</label>
                <input type="text" class="form-control" id="address_en" value="{{old('address_en', $setting?->address_en)}}" name="address_en">
            </div>
            <div class="col-md-6 mt-3">
                <label for="address" class="form-label mx-2">ठेगाना</label>
                <input type="text" class="form-control" id="address" value="{{old('address', $setting?->address)}}" name="address">
            </div>
            <div class="col-md-6 mt-3">
                <label for="email" class="form-label mx-2">इमेल</label>
                <input type="email" class="form-control" id="email"
                    value="{{ old('email', $setting?->email) }}" name="email" >
            </div>
            <div class="col-md-6 mt-3">
                <label for="phone" class="form-label mx-2">फोन</label>
                <input type="text" class="form-control" id="phone"
                    value="{{ old('phone', $setting?->phone) }}" name="phone" >
            </div>
            <div class="col-md-6 mt-3">
                <label for="logo" class="form-label mx-2">निसान छाप</label>
                <input type="file" class="form-control" id="logo"
                    value="{{ old('logo', $setting?->logo) }}" name="logo">
            </div>
            <div class="col-md-6 mt-3">
                <label for="flag" class="form-label mx-2">झण्डा</label>
                <input type="file" class="form-control" id="flag"
                    value="{{ old('flag', $setting?->flag) }}" name="flag" >
            </div>

            <div class="col-md-6 mt-3">
                <label for="background_img" class="form-label mx-2">Background Image</label>
                <input type="file" class="form-control" id="background_img"
                    value="{{ old('background_img', $setting?->background_img) }}" name="background_img" >
            </div>

            <div class="col-md-6 mt-3">
                <label for="office_head_id" class="form-label mx-2">कार्यलय प्रमुख</label>
                <select class="form-select" id="office_head_id" name="office_head_id"  value="{{ old('office_head_id', $setting?->office_head_id) }}" >
                    <option value="">---छान्नुहोस्----</option>
                    @foreach ($employees as $employee)
                        <option value="{{ $employee->id }}" {{$setting?->office_head_id==$employee->id ? 'selected' : ''}}>{{ $employee?->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 mt-3">
                <label for="information_officer_id" class="form-label mx-2">सूचना अधिकारी</label>
                <select class="form-select" id="information_officer_id" name="information_officer_id" value="{{ old('information_officer_id', $setting?->information_officer_id) }}">
                    <option value="">---छान्नुहोस्----</option>
                    @foreach ($employees as $employee)
                        <option value="{{ $employee->id }}"{{$setting?->information_officer_id==$employee->id ? 'selected' : ''}}>{{ $employee->name }}</option>
                    @endforeach
                </select>
            </div>


            <div class="col-md-6 mt-3">
                <label for="spoke_person_id" class="form-label mx-2">प्रबक्ता</label>
                <select class="form-select" id="spoke_person_id" name="spoke_person_id" value="{{ old('spoke_person_id', $setting?->spoke_person_id) }}">
                    <option value="">---छान्नुहोस्----</option>
                    @foreach ($employees as $employee)
                        <option value="{{ $employee->id }}" {{$setting?->spoke_person_id==$employee->id ? 'selected' : ''}}>{{ $employee->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-12 mt-3">
                <label for="map_iframe" class="form-label mx-2">नक्सा</label>
                <textarea  type="url" class="form-control" id="map_iframe" name="map_iframe">{{ old('map_iframe', $setting?->map_iframe) }}</textarea>
            </div>
            <div class="col-md-12 mt-3">
                <label for="facebook_iframe" class="form-label mx-2">फेसबूक</label>
                <textarea  type="url" class="form-control" id="facebook_iframe" name="facebook_iframe">{{ old('facebook_iframe', $setting?->facebook_iframe) }}</textarea>
            </div>
            <div class="col-md-12 mt-3">
                <label for="twitter_iframe" class="form-label mx-2">टुइटर</label>
                <textarea type="url" class="form-control" id="twitter_iframe" name="twitter_iframe">{{ old('twitter_iframe', $setting?->twitter_iframe) }}</textarea>
            </div>


            <div class="col-12 mt-4 mb-4">
                <button class="btn btn-primary" type="submit">पेश गर्नुहोस्</button>
            </div>
        </form>
       </div>
       </div>




    </div>
@endsection
