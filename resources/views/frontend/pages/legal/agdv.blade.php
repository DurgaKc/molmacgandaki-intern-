@extends('layouts.master')
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
            <h4 class="fw-bold mb-4 mt-4">कृषि विकास रणनीति
            </h4>
            <div class="row">
                <div class="col-md-6">

                </div>
                <div class="col-md-6">
                    <div class="input mx-3">
                        <select class="act px-5 py-2">
                            <option value="act" selected disabled>कृषि विकास रणनीति खोज्नुहोस</option>
                            <option value="service"><a href="#">No items found</a></option>

                        </select><br>
                    </div>
                </div>

            </div>


        </div>
    </div>
</div>
@endsection
