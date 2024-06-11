@extends('layouts.master')
@section('title','workarea')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <h6 class="fw-bold mb-3 mt-3">मन्त्रालयको बारेमा</h6>

            <div class="card shadow border-0 mb-3">
                <h6 class="mt-2 mb-3 ms-3"><a href="{{route('organization')}}">संगठन संरचना</a></h6>
            </div>
            <div class="card shadow border-0 mb-3">
                <h6 class="mt-2 mb-3 ms-3"><a href="{{route('introduction')}}">परिचय</a></h6>
            </div>
            <div class="card shadow border-0 mb-3">
                <h6 class="mt-2 mb-3 ms-3"><a href="{{route('workarea')}}">उद्धेश्य</a></h6>
            </div>
            <div class="card shadow border-0 mb-3">
                <h6 class="mt-2 mb-3 ms-3"><a href="{{route('citizen')}}">प्रशासन तथा सहकारी विकास महाशाखा</a></h6>
            </div>
            <div class="card shadow border-0 mb-3">
                <h6 class="mt-2 mb-3 ms-3"><a href="#">कार्य क्षेत्र</a></h6>
            </div>
            <div class="card shadow border-0 mb-3">
                <h6 class="mt-2 mb-3 ms-3"><a href="{{route('planning')}}">योजना तथा अनुगमन महाशाखा</a></h6>
            </div>
            <div class="card shadow border-0 mb-3">
                <h6 class="mt-2 mb-3 ms-3"><a href="{{route('agri')}}">कृषि बिकास महाशाखा</a></h6>
            </div>
            <div class="card shadow border-0 mb-3">
                <h6 class="mt-2 mb-3 ms-3"><a href="{{route('lives')}}">पशुपंछी विकास महाशाखा</a></h6>
            </div>
            <div class="card shadow border-0 mb-3">
                <h6 class="mt-2 mb-3 ms-3"><a href="{{route('land')}}">भूमि व्यवस्था तथा भूमिश्रोत नक्साङ्कन महाशाखा</a></h6>
            </div>
        </div>

        <div class="col-md-9 justify-content-between">
            <h5 class="fw-bold mb-3 ms-2 mt-3">उद्धेश्य</h5>
            <p class="mx-2">१ सहकारीको सिद्धान्त र मूल्यहरूको प्रवर्द्वन गर्दै सहकारीमा आधारित उत्पादन, उद्यम र सेवा व्यवसायको
                विकास र विस्तार गरी प्रदेशको दिगो र समतामूलक आर्थिक सामाजिक विकासमा योगदान पुर्‍याउने ।<br><br>

                २ कृषि क्षेत्रमा आधुनिक प्रविधिको प्रयोग गर्दै प्रतिष्पर्धात्मक क्षमता हासिल गरी उत्पादन र
                उत्पादकत्व अभिवृद्धि गर्नुका साथै कृषिजन्य उद्योगलाई प्रवर्द्वन गर्ने ।<br><br>

                ३ पशुपछिं पालनमा प्रविधिको प्रयोगलाई प्रोत्साहन गर्दै व्यवसायिक, प्रतिस्पर्धी एवं स्वस्थ पशुपछिं
                उत्पादनको सुनिश्चितता एवं पशुपन्छीजन्य उत्पादनमा आत्मनिर्भरता हासिल गरी यस क्षेत्रलाई आय आर्जनका
                साथै रोजगारीको माध्यमका रुपमा विकास गर्ने ।</p>

        </div>
    </div>
</div>
@endsection
