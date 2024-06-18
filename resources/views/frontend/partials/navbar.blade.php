<div class="container-fluid mt-0 d-flex">
    <nav class="sticky-top col-md-9">
        <div class="row">
            <div class="main-nav flex py-2 mt-2">
                <a href="{{ route('index') }}">
                    <i class="fa fa-house-chimney-window text-white px-2"></i></a>
                <span class="dropdown mx-1">
                    <a class=" fw-bold text-white  dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">हाम्रो
                        बारेमा</a>
                    <ul class="dropdown-menu dropdown-menu-white" aria-labelledby="dropdownMicroProcessorTrigger">
                        <li><a class="dropdown-item  fw-bold " href="{{ route('introduction') }}">परिचय</a></li>
                        <li><a class="dropdown-item  fw-bold " href="{{ route('workarea') }}">कार्यक्षेत्र</a>
                        </li>
                        <li><a class="dropdown-item  fw-bold " href="{{ route('organization') }}">संगठन संरचना</a>
                        </li>
                        <li><a class="dropdown-item  fw-bold " href="{{ route('employee') }}">कर्मचारी विवरण</a>
                        </li>
                        <li><a class="dropdown-item  fw-bold " href="{{ route('citizen') }}">नागरिक वडापत्र</a>
                        </li>
                    </ul>
                </span>
                <span class="dropdown mx-2">
                    <a class=" fw-bold text-white  dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">महाशाखा/शाखा</a>
                    <ul class="dropdown-menu dropdown-menu-white" aria-labelledby="dropdownMicroProcessorTrigger">
                        <li><a class="dropdown-item  fw-bold " href="{{ route('citizen') }}">प्रशासन तथा सहकारी
                                <br>महाशाखा</a></li>
                        <li><a class="dropdown-item  fw-bold " href="{{ route('planning') }}">योजना तथा अनुगमन
                                <br> महाशाखा</a></li>
                        <li><a class="dropdown-item  fw-bold " href="{{ route('agri') }}">कृषि विकास महाशाखा</a>
                        </li>
                        <li><a class="dropdown-item  fw-bold " href="{{ route('lives') }}">पशुपन्छी विकास
                                महाशाखा</a></li>
                        <li><a class="dropdown-item  fw-bold " href="{{ route('land') }}">भूमि व्यवस्था तथा
                                भूमिस्रोत <br>नक्सांकन
                                महाशाखा </a></li>
                    </ul>
                </span>
                <span class="dropdown mx-2">
                    <a class=" fw-bold text-white  dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">कानुनी दस्तावेज </a>
                    <ul class="dropdown-menu dropdown-menu-white" aria-labelledby="dropdownMicroProcessorTrigger">
                        <li><a class="dropdown-item  fw-bold " href="{{ route('act') }}">ऐन तथा नियमावलीहरु</a>
                        </li>
                        <li><a class="dropdown-item  fw-bold " href="{{ route('document') }}">दस्तावेज</a></li>
                        <li><a class="dropdown-item  fw-bold " href="{{ route('procedure') }}">कार्यविधि</a></li>
                        <li><a class="dropdown-item  fw-bold " href="pages/Legal/directory.html">निर्देशिका</a></li>
                        <li><a class="dropdown-item  fw-bold " href="{{ route('agdv') }}">कृषि विकास रणनीति</a>
                        </li>
                        <li><a class="dropdown-item  fw-bold " href="{{ route('criteria') }}">मापदण्ड</a></li>
                        <li><a class="dropdown-item  fw-bold " href="{{ route('other') }}">अन्य</a></li>



                    </ul>
                </span>
                <span class="dropdown mx-2">
                    <a class=" fw-bold text-white  dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">प्रकाशन</a>
                    <ul class="dropdown-menu dropdown-menu-white" aria-labelledby="dropdownMicroProcessorTrigger">
                        <li><a class="dropdown-item  fw-bold " href="{{ route('publication') }}">प्रकाशन</a>
                        </li>
                        <li><a class="dropdown-item  fw-bold " href="{{ route('record') }}">अभीलेख</a></li>
                        <li><a class="dropdown-item  fw-bold " href="{{ route('ministry') }}">मन्त्रालयस्तर
                                बैठक</a></li>
                        <li><a class="dropdown-item  fw-bold " href="{{ route('form') }}">फारमहरू</a></li>
                        <li><a class="dropdown-item  fw-bold " href="{{ route('business') }}">व्यवसायिक
                                योजनाको नमुना</a></li>
                        <li><a class="dropdown-item  fw-bold " href="{{ route('others') }}">अन्य</a></li>

                    </ul>
                </span>
                <span class="dropdown mx-2">
                    <a class=" fw-bold text-white  dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">सूचना/समाचार</a>
                    <ul class="dropdown-menu dropdown-menu-white" aria-labelledby="dropdownMicroProcessorTrigger">
                        <li><a class="dropdown-item  fw-bold " href="{{ route('news') }}">सूचना तथा समचारहरु</a>
                        </li>
                        <li><a class="dropdown-item  fw-bold " href="pages/news/press.html">प्रेस बिज्ञप्ति</a></li>
                        <li><a class="dropdown-item  fw-bold " href="pages/news/bid.html">बोलपत्र</a></li>
                        <li><a class="dropdown-item  fw-bold " href="pages/news/other.html">अन्य</a></li>

                    </ul>
                </span>
                <span class="dropdown mx-2">
                    <a class=" fw-bold text-white  dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">ग्यालरी </a>
                    <ul class="dropdown-menu dropdown-menu-white" aria-labelledby="dropdownMicroProcessorTrigger">
                        <li><a class="dropdown-item  fw-bold " href="{{ route('photo') }}">फोटो ग्यालेरी</a>
                        </li>
                        <li><a class="dropdown-item  fw-bold " href="{{ route('vedio') }}">भिडियो ग्यालेरी</a>
                        </li>
                        <li><a class="dropdown-item  fw-bold " href="{{ route('audio') }}">अडियो ग्यालेरी</a>
                        </li>
                    </ul>
                </span>
                <span>
                    <a class=" fw-bold text-white mx-2" href="{{ route('contact') }}">सम्पर्क</a>
                </span>
                <span>
                    <a class=" fw-bold text-white mx-2" href="{{ route('subordinate') }}">मातहतका निकायहरु </a>
                </span>

            </div>

        </div>
    </nav>
    <nav class="col-md-3">
        <span class="my-5">
            <form action="" method="get" class="mx-5">
                <input type="text" class="mt-2 mb-2  p-1 rounded-3 ms-3 filter-form" name="search" placeholder="Search.." autocomplete="off" value="{{ old('search', \request('search')) }}">
                <button class="btn btn-outline-light bg-transparent rounded-3"> <i
                        class='fas fa-search text-white '></i></button>
            </form>
        </span>
    </nav>
</div>
{{-- <form action="" method="get" class="me-2">
    <input class="form-control form-control-sm filter-form" name="search" type="search" placeholder="Search"
        autocomplete="off" value="{{ old('search', \request('search')) }}">
</form> --}}
