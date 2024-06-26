@extends('layouts.master')
@section('title','agri')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 ">
                <div class="ministry">
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
                        <h6 class="mt-2 mb-3 ms-3"><a href="{{ route('planning') }}">योजना तथा अनुगमन महाशाखा</a></h6>
                    </div>
                    <div class="card shadow border-0 mb-3">
                        <h6 class="mt-2 mb-3 ms-3"><a href="{{ route('agri') }}">कृषि बिकास महाशाखा</a></h6>
                    </div>
                    <div class="card shadow border-0 mb-3">
                        <h6 class="mt-2 mb-3 ms-3"><a href="{{ route('lives') }}">पशुपंछी विकास महाशाखा</a></h6>
                    </div>
                    <div class="card shadow border-0 mb-3">
                        <h6 class="mt-2 mb-3 ms-3"><a href="{{ route('land') }}">भूमि व्यवस्था तथा भूमिश्रोत नक्साङ्कन
                                महाशाखा</a></h6>
                    </div>
                </div>
            </div>

            <div class="col-md-9 mb-5">
                <h5 class="fw-bold mb-4 mt-3">कृषि बिकास महाशाखा</h5>
                <h3> ४.३ कृषि बिकास महाशाखा</h3>
                <P>यस महाशाखा अन्तर्गत दुई वटा शाखाहरु रहेका छन्। यो महाशाखाद्वारा प्रदेशको खाद्य सुरक्षा सम्बन्धी नीति
                    तथा योजना तर्जुमा, कार्यान्वयन, अनुगमन तथा मूल्यांकन सम्बन्धी कार्यहरु सम्पादन गर्ने पर्दछन्।
                    व्यवसायिक कृषि प्रणालीको विकासका लागि आवश्यक नीति, मापदण्ड तथा योजना निर्माणमा समन्वय गर्ने र कृषि
                    विकासमा देखिएका समस्याहरुको समाधानका लागि आवश्यक कार्य गर्ने तथा मातहतका शाखाहरुको कार्यको मासिक
                    प्रगति नियमित रुपमा मन्त्रालयको सचिव समक्ष पेश गर्ने तथा मन्त्रालयको सचिवको निर्देशन अनुसार कृषि
                    विकास सम्बन्धी कार्यक्रम सहज रुपमा संचालन गर्न समन्वय गर्नु यो महाशाखाको प्रमुख कार्य हुनेछ । </P>
                <h6 class="fw-bold">खाद्य सुरक्षा प्रवर्धन शाखा</h6>
                <p>खाद्य सुरक्षा प्रवर्धन शाखाको कार्यविवरण देहाय अनुसार रहेको छ:
                </p>
                <ol>
                    <li>प्रदेशस्तरमा खाद्य सुरक्षाको अवस्थाको अनुगमन तथा विश्लेषण गरी मन्त्रालयलाई पृष्टपोषण गर्ने,</li>
                    <li>प्रदेशस्तरमा मल, वीउ, बेर्ना, विषादी, कृषि यन्त्र लगायतका कृषि सामग्रीको आपूर्ति स्थितीको नियमित
                        अनुगमन गरी मन्त्रालयलाई पृष्टपोषण गर्ने,</li>
                    <li>मन्त्रालय निरीक्षण, पालो-पहरा, सरसफाई, सवारी साधनको व्यवस्था आदि कार्यहरु गर्ने गराउने,</li>
                    <li>प्रदेशस्तरमा खाद्यसुरक्षाको दृष्टिकोणले महत्वपूर्ण क्षेत्र र समुदायको पहिचान गरी खाद्य सुरक्षा
                        सम्बन्धी प्रवर्धनात्मक कार्यक्रमहरु सञ्चालन गर्न समन्वय गर्ने,</li>

                </ol>
                <h6 class="fw-bold ms-2 mt-5">कृषि व्यवसाय प्रवर्धन शाखा</h6>
                <p>कृषि व्यवसाय प्रवर्धन शाखाको कार्यविवरण देहाय अनुसार रहेको छ:
                </p>
                <ol>
                    <li>कृषि व्यवसाय प्रवर्धन सम्बन्धी नीति तथा कार्यक्रम तर्जुमा, नीति तथा कार्यक्रमको कार्यान्वयनमा
                        समन्वय र अनुगमन गरी मन्त्रालयलाई पृष्ठपोषण गर्ने,/li>
                    <li>कृषि उपज बजार तथा पूर्वाधार विकास नीति तथा कार्यक्रम तर्जुमा, नीति तथा कार्यक्रमको कार्यान्वयनमा
                        समन्वय र अनुगमन गरी मन्त्रालयलाई पृष्ठपोषण गर्ने,</li>
                    <li>प्रदेशस्तरमा व्यवसायिक कृषिको दृष्टिकोणले महत्वपूर्ण पकेट क्षेत्रको पहिचान गरी कृषि व्यवसाय
                        प्रवर्धन सम्बन्धी कार्यक्रमहरु सञ्चालन गर्न समन्वय गर्ने,</li>
                    <li>कृषि बिमा सम्बन्धी नीति तथा योजना तर्जुमा र कार्यान्वयन,</li>

                </ol>

            </div>
        </div>
    </div>
@endsection
