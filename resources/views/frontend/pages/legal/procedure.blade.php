@extends('layouts.master')
@section('title','procedure')
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
            <h4 class="fw-bold mb-4 mt-4">कार्यविधि</h4>
            <div class="row">
                <div class="col-md-6">

                </div>
                <div class="col-md-6">

                    <div class="input ms-5">
                        <select class="act px-5 py-2">
                            <option value="act" selected disabled>कार्यविधि खोज्नुहोस</option>
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
            </div>

            <table class="border mt-5">
                <tr class="border">
                    <th class="border fw-bold px-1 py-2">क्र.स.</th>
                    <th class="border fw-bold text-center">शीर्षक</th>
                    <th class="border fw-bold px-2">प्रकाशित मिति</th>
                    <th class="border fw-bold px-2">फाईल</th>
                </tr>
                <tr class="border">
                    <td>
                        <p class="ms-2">1</p>
                    </td>
                    <td class="border my-2">
                        <p class="mt-2 mx-2 mb-0"><a href="#">कृषि जैविक विविधता तथा प्राङ्गारिक कृषि प्रवर्धन
                                रणनीतिक कार्ययोजना, २०८०</a></p>
                        <p class=" mx-2 mb-1">कार्यविधि</p>
                    <td class="border ps-2">2080-5-7</td>
                    <td>
                        <p class="text-center mt-3 text-primary"><i class='fas fa-download'></i></p>
                    </td>
                </tr>
                <tr class="border">
                    <td>
                        <p class="ms-2">2</p>
                    </td>
                    <td class="border my-2">
                        <p class="mt-2 mx-2 mb-0"><a href="#">कृषि प्राविधिक समन्वय संयन्त्र गठन तथा सञ्‍चालन
                                विधि, २०७९</a></p>
                        <p class=" mx-2 mb-1">कार्यविधि</p>
                    <td class="border ps-2">2079-1-21</td>
                    <td>
                        <p class="text-center mt-3 text-primary"><i class='fas fa-download'></i></p>
                    </td>
                </tr>

                <tr class="border">
                    <td>
                        <p class="ms-2">3</p>
                    </td>
                    <td class="border my-2">
                        <p class="mt-2 mx-2 mb-0"><a href="#">कित्तानापी नक्सामा सार्वजनिक बाटो अध्यावधिक गर्ने
                                कार्यविधि, २०७६ (पहिलो संशोधन, २०७८ सहित)</a></p>
                        <p class=" mx-2 mb-1">कार्यविधि</p>
                    <td class="border ps-2">2078-6-17</td>
                    <td>
                        <p class="text-center mt-3 text-primary"><i class='fas fa-download'></i></p>
                    </td>
                </tr>
                <tr class="border">
                    <td>
                        <p class="ms-2">4</p>
                    </td>
                    <td class="border my-2">
                        <p class="mt-2 mx-2 mb-0"><a href="#">मुख्यमन्त्री जलवायुमैत्री नमुना कृषि गाउँ
                                कार्यक्रम सञ्चालन कार्यविधि, २०७७ (पहिलो संसोधन २०७८ सहित)
                            </a></p>
                        <p class=" mx-2 mb-1">कार्यविधि</p>
                    <td class="border ps-2">2078-6-17</td>
                    <td>
                        <p class="text-center mt-3 text-primary"><i class='fas fa-download'></i></p>
                    </td>
                </tr>
                <tr class="border">
                    <td>
                        <p class="ms-2">5</p>
                    </td>
                    <td class="border my-2">
                        <p class="mt-2 mx-2 mb-0"><a href="#">पशुको पूर्ण खोप कार्यक्रम कार्यान्वयन कार्यविधि
                                ,२०७६ (पहिलो संसोधन २०७८ सहित)

                            </a></p>
                        <p class=" mx-2 mb-1">कार्यविधि</p>
                    <td class="border ps-2">2078-6-10</td>
                    <td>
                        <p class="text-center mt-3 text-primary"><i class='fas fa-download'></i></p>
                    </td>
                </tr>
                <tr class="border">
                    <td>
                        <p class="ms-2">6</p>
                    </td>
                    <td class="border my-2">
                        <p class="mt-2 mx-2 mb-0"><a href="#">Operational Guideline of Custom Hiring Center
                                (Draft)

                            </a></p>
                        <p class=" mx-2 mb-1">कार्यविधि</p>
                    <td class="border ps-2">2078-6-15</td>
                    <td>
                        <p class="text-center mt-3 text-primary"><i class='fas fa-download'></i></p>
                    </td>
                </tr>
                <tr class="border">
                    <td>
                        <p class="ms-2">7</p>
                    </td>
                    <td class="border my-2">
                        <p class="mt-2 mx-2 mb-0"><a href="#">स्थलरुप(टोपोग्राफिकल) नक्सामा स्थानीय तहको सिमाना
                                अद्यावधिक गर्ने सम्वन्धी कार्यविधि, २०७५

                            </a></p>
                        <p class=" mx-2 mb-1">कार्यविधि</p>
                    <td class="border ps-2">2077-6-10</td>
                    <td>
                        <p class="text-center mt-3 text-primary"><i class='fas fa-download'></i></p>
                    </td>
                </tr>
                <tr class="border">
                    <td>
                        <p class="ms-2">8</p>
                    </td>
                    <td class="border my-2">
                        <p class="mt-2 mx-2 mb-0"><a href="#">दुध उत्पादन र बजारीकरणका आधारमा अनुदान पाइलट
                                कार्यक्रम (संसोधित)कार्यविधि २०७५
                            </a></p>
                        <p class=" mx-2 mb-1">कार्यविधि</p>
                    <td class="border ps-2">2077-6-10</td>
                    <td>
                        <p class="text-center mt-3 text-primary"><i class='fas fa-download'></i></p>
                    </td>
                </tr>

            </table>


        </div>
    </div>
</div>
@endsection
