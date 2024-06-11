@extends('layouts.master')
@section('title','planning')
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
        </div>

        <div class="col-md-9 mb-5">
            <h5 class="fw-bold mb-4 mt-3">योजना तथा अनुगमन महाशाखा</h5>
            <h3>योजना तथा अनुगमन महाशाखा</h3>
            <P>यो महाशाखाद्वारा मन्त्रालयको अल्पकालीन तथा दीर्घकालिन योजनाहरुको तर्जुमा, वार्षिक बजेट निर्माण,
                कार्यान्वयन, अनुगमन तथा मूल्यांकन सम्बन्धी कार्यहरु सम्पादन गर्ने, अन्तर मन्त्रालय समन्वय गर्ने,
                अन्तर महाशाखा समन्वय गर्ने, आयोजना र कार्यक्रमहरुको आवधिक प्रगतिको अभिलेख राख्ने तथा कार्यक्रम
                कार्यान्वयनमा देखिएका समस्याहरुको समाधानका लागि आवश्यक कार्य गर्ने तथा मातहतका शाखाहरुको कार्यको
                दैनिक, मासिक प्रगति नियमित रुपमा मन्त्रालयको सचिव समक्ष पेश गर्ने तथा मन्त्रालयको सचिवको निर्देशन
                अनुसार आवधिक योजना र वार्षिक कार्यक्रम सहज रुपमा संचालन गर्ने यो महाशाखाको प्रमुख कार्य हुनेछ ।
                योजना तथा अनुगमन महाशाखा अन्तर्गत देहाय अनुसार दुई वटा शाखाहरु रहेका छन्:</P>
            <h6 class="fw-bold">योजना तथा बजेट शाखा</h6>
            <p>योजना तथा बजेट शाखाको कार्यविवरण देहाय अनुसार रहेको छ:
            </p>
            <ol>
                <li>मन्त्रालय र अन्तरगतका निकायवाट संचालन गरिने वार्षिक कार्यक्रमहरुको तर्जुमा गरी महाशाखा प्रमुख समक्ष पेश गर्ने तथा स्वीकृत पश्चात वार्षिक कार्यक्रम कार्यान्वयनको लागि सम्वद्ध निकायहरुमा पठाउने,</li>
                <li>मन्त्रालय र अन्तरगतका निकायको योजना तर्जुमा तथा कार्यक्रम कार्यान्वयन गर्ने क्रममा संघ तथा स्थानीय तहसँग समन्वय गर्ने,</li>
                <li>मन्त्रालय निरीक्षण, पालो-पहरा, सरसफाई, सवारी साधनको व्यवस्था आदि कार्यहरु गर्ने गराउने,</li>
                <li>योजना निर्माण कार्यलाई व्यवस्थित गर्न आवश्यकता र सम्भाव्यताको पहिचान सम्बन्धी कार्यक्रमहरु सञ्चालन गर्ने,</li>
                <li>आवश्यकताको आधारमा वार्षिक बजेट संशोधन तथा रकमान्तर सम्बन्धी कार्यहरु गर्ने,</li>
                <li>भूमि व्यवस्था, कृषि तथा सहकारी क्षेत्रको योजना तथा कार्यक्रम सञ्चालनमा अन्य निकायहरुसँग समन्वय गर्ने।</li>

            </ol>
            <h6 class="fw-bold ms-2 mt-5">अनुगमन तथा मूल्यांकन शाखा</h6>
            <p>अनुगमन तथा मूल्यांकन शाखाको कार्यविवरण देहाय अनुसार रहेको छ:
            </p>
            <ol>
                <li>आयोजना र कार्यक्रमहरुको आवधिक प्रगतिको अभिलेख राख्ने तथा कार्यक्रम कार्यान्वयनमा देखिएका समस्याहरुको समाधानका लागि आवश्यक कार्य गर्ने,</li>
                <li>मन्त्रालय र अन्तर्गतका कार्यक्रमहरुको नियमित रुपमा अनुगमन तथा निरीक्षण गर्ने, अनुगमन तथा निरीक्षण प्रतिवेदनका आधारमा प्रगति विवरण तयार गरी महाशाखा प्रमुख समक्ष पेश गर्ने,</li>
                <li>कार्यक्रम अनुगमन निरीक्षणको लागि कर्मचारी खटाउन महाशाखा प्रमुख मार्फत सिफारिस गराउने,</li>
                <li>मन्त्रालय र अन्तर्गतका बिषयगत कार्यालयहरुले सम्पादन गर्ने कामहरुको आवधिक उपलब्धी सम्बन्धी सूचकहरुको तथ्यांक संक्कलन गरी व्यवस्थित रुपमा भण्डारण र सार्वजनिक गर्ने,</li>
                <li>बहुवर्षीय खरिद गुरुयोजनाको खर्च सम्बन्धी अभिलेख राख्ने,</li>
                <li>भूमि व्यवस्था, कृषि तथा सहकारी क्षेत्रको लागि आवश्यक तथ्यांकको अध्यावधिक गर्ने।</li>

            </ol>



        </div>
    </div>
</div>
@endsection