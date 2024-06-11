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
            <h4 class="fw-bold mb-4 mt-4">मापदण्ड
            </h4>
            <div class="row">
                <div class="col-md-6">

                </div>
                <div class="col-md-6">

                    <div class="input ms-5">
                        <select class="act px-5 py-2">
                            <option value="act" selected disabled>मापदण्ड खोज्नुहोस</option>
                            <option value="Agriculture"><a href="#">कृषि जैविक विविधता तथा प्राङ्गारिक कृषि प्रवर्धन
                                    रणनीतिक कार्ययोजना, २०८०</a></option>
                            <option value="Agriculture"><a href="#">कृषि प्राविधिक समन्वय संयन्त्र गठन तथा सञ्‍चालन
                                    विधि, २०७९</a></option>
                            <option value="Agriculture"><a href="#">कित्तानापी नक्सामा सार्वजनिक बाटो अध्यावधिक
                                    गर्ने
                                    कार्यविधि , २०७६ (पहिलो संशोधन, २०७८ सहित)</a></option>
                            <option value="Agriculture"><a href="#">मुख्यमन्त्री जलवायुमैत्री नमुना कृषि गाउँ
                                    कार्यक्रम
                                    सञ्चालन कार्यविधि, २०७७ (पहिलो संसोधन २०७८ सहित)</a></option>
                            <option value="Agriculture"><a href="#">पशुको पूर्ण खोप कार्यक्रम कार्यान्वयन कार्यविधि
                                    ,२०७६ (पहिलो संसोधन २०७८ सहित)</a></option>
                            <option value="Agriculture"><a href="#">सेवा करारमा प्राविधिक जनशक्ति छनौट सम्बन्धी
                                    कार्यविधि, २०७७</a></option>

                        </select><br>
                    </div>
                </div>

                <div class="col-md-4 mt-4">
                    <div class="act">
                        <div class="card border-dark">
                            <h6><i class='fas fa-download'></i></h6>
                            <p class="py-0 mx-3 mt-4 ">कृषि तथा पशुपन्छीजन्य बाली वस्तुको गुणस्तर परीक्षण, नियमन तथा
                                आयात निर्यात तथ्याङ्क व्यवस्थापन मापदण्ड,२०८० </p>
                            <h5 class="pt-0 fs-8 pb-2 mt-0 ms-3">molmac 2080-10-15 |</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="act">
                        <div class="card border-dark">
                            <h6><i class='fas fa-download'></i></h6>
                            <p class="py-0 mx-3 mt-4 ">प्रादेशिक कृषि-मौसम सल्लाह बुलेटिन प्रकाशन तथा प्रसारण
                                मापदण्ड, २०७९ (पहिलो संशोधन, २०८० सहित)</p>
                            <h5 class="pt-0 fs-8 pb-2 mt-0 ms-3">molmac 2080-9-19 |</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="act">
                        <div class="card border-dark">
                            <h6><i class='fas fa-download'></i></h6>
                            <p class="py-0 mx-3 mt-4 ">उन्नत प्रविधि प्रदर्शन सम्बन्धी कार्यक्रमा सञ्चालन मापदण्ड,
                                २०७८ (पहिलो संशोधन, २०८० सहित)</p>
                            <h5 class="pt-0 fs-8 pb-2 mt-0 ms-3">molmac 2080-9-19 |</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="act">
                        <div class="card border-dark">
                            <h6><i class='fas fa-download'></i></h6>
                            <p class="py-0 mx-3 mt-4 ">उत्पादनमा आधारित प्रोत्साहन सहयोग कार्यक्रम सञ्चालन मापदण्ड, २०८०
                                </p>
                            <h5 class="pt-0 fs-8 pb-2 mt-0 ms-3">molmac 2080-9-19 |</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="act">
                        <div class="card border-dark">
                            <h6><i class='fas fa-download'></i></h6>
                            <p class="py-0 mx-3 mt-4 ">आलु तथा तरकारीबाली प्रवर्धन सम्बन्धी आयोजना कार्यान्वयन मापदण्ड, २०८०
                               </p>
                            <h5 class="pt-0 fs-8 pb-2 mt-0 ms-3">molmac 2080-5-18 |</h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
