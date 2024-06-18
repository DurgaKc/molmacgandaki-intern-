@extends('layouts.master')
@section('content')
<div class="container">
    <h4 class="mt-5 mb-3 fw-bold">सेवा शुल्क तथा दस्तुर सम्बन्धी सूचना</h4>
  <div class="mb-4">
    {{$law->date}}
  </div>

    <div class="row">
        <div class="col-md-8">
            <iframe src="{{$law->photo}}" height="600px" width="100%"></iframe>
        </div>
    </div>
</div>
@endsection
