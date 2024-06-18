@extends('layouts.master')
@section('title','act')
@section('title','audio')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 mt-4">
            <div class="ministry">

                <div class="card shadow border-0 mb-3">
                    <h6 class="mt-2 mb-3 ms-3"><a href="../Legal/act.html">ऐन तथा नियमावलीहरु</a></h6>
                </div>
                <div class="card shadow border-0 mb-3">
                    <h6 class="mt-2 mb-3 ms-3"><a href="../Legal/procedure.html">कार्यविधि</a></h6>
                </div>
                <div class="card shadow border-0 mb-3">
                    <h6 class="mt-2 mb-3 ms-3"><a href="../Legal/document.html">दस्तावेज</a></h6>
                </div>
                <div class="card shadow border-0 mb-3">
                    <h6 class="mt-2 mb-3 ms-3"><a href="../Legal/directory.html">निर्देशिका</a>
                    </h6>
                </div>
                <div class="card shadow border-0 mb-3">
                    <h6 class="mt-2 mb-3 ms-3"><a href="../Legal/agdv.html">कृषि विकास रणनीति</a></h6>
                </div>
                <div class="card shadow border-0 mb-3">
                    <h6 class="mt-2 mb-3 ms-3"><a href="../Legal/criteria.html">मापदण्ड</a></h6>
                </div>
                <div class="card shadow border-0 mb-3">
                    <h6 class="mt-2 mb-3 ms-3"><a href="../Legal/other.html">अन्य
                        </a></h6>
                </div>

            </div>
        </div>

        <div class="col-md-9 mb-5">
            <h4 class="fw-bold mb-4 mt-4">ऐन तथा नियमावलीहरु</h4>
            <div class="row">
                <div class="col-md-6">

                </div>
                <div class="col-md-6">
                    <div class="input mx-3">
                        <select class="act px-2 py-2">
                            <option value="act" selected disabled>ऐन तथा नियमावलीहरु खोज्नुहोस</option>
                            <option value="service"><a href="#">सेवा शुल्क तथा दस्तुर सम्बन्धी सूचना</a></option>
                            <option value="service"><a href="#">प्रदेश कृषि व्यवसाय प्रबर्द्धन ऐन - २०७७</a>
                            </option>
                            <option value="service"><a href="#">गण्डकी प्रदेश खाद्य परिषद् (गठन तथा सञ्चालन) आदेश,
                                    २०७८</a></option>
                            <option value="service"><a href="#">सहकारी ऐन, २०७५</a></option>
                            <option value="service"><a href="#">प्रदेश दुग्ध विकास बोर्ड ऐन २०७५</a></option>
                        </select><br>
                    </div>
                </div>

            </div>
            @foreach ($laws as $law )
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="act">
                        <div class="card border-dark">
                            <h6><a href="{{route('lawDetail',$law)}}"><i class='fas fa-download'></i></a> </h6>
                            <p class="py-0 ms-3 mt-4 ">{{$law->title ?? ''}}</p>
                            <h5 class="pt-0 fs-8 pb-2 mt-0 ms-3">ऐन तथा नियमावलीहरु {{$law->date ?? ''}}</h5>

                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
