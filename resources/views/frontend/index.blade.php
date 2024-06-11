@extends('layouts.master')
@section('title', 'home')
@section('content')
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close fs-2 mt-0">&times;</span>
            <hr class="mt-0">
            <img src="{{ asset('assets/frontend/images/modal.jpg') }}" alt="Placeholder Image">
        </div>
    </div>
    <!-- news section start-->
    <section class="news-section">
        <div class="ticker mt-2 border-top border-bottom">
            <div class="news-title">
                <h5 class="mt-3">ताजा सूचना</h5>
            </div>
            <div class="news">

                <marquee width="100%" direction="left">
                    सहकारी क्षेत्रलाई परिचालन गरी भूमिको प्रकृतिको आधारमा उपयोग गरी गर्ने नीति
                    लिई कृषि एवं पशुपन्छीजन्य
                    उत्पादन एवं व्यापारमा यान्त्रिकीकरण, व्यावसयिकीकरण, बजारीकरण र आधुनिकीकरणका माध्यमबाट
                    प्रतिस्पर्धात्मक अवस्थाको सृजना गरी यस क्षेत्रको रुपान्तरण गर्दै रोजगारीको अवसर सृजना गर्ने
                    लक्ष्यका
                    साथ भूमि व्यवस्था, कृषि तथा सहकारी मन्त्रालयको स्थापना भएको हो ।
                </marquee>

            </div>
        </div>

    </section>


    <!-- news section ends -->

    <!-- main-content -->
    <!-- left-side-content -->
    <div class="container-fluid bg-light">
        <div class="row ">
            <div class="col-md-3">
                <div class="container bg-white rounded">
                    <div class="container-fluid ">
                        <h6 class="mt-3 mb-2 mx-4 text-center fw-bold">गतिविधि</h6>

                    </div>
                    <hr class="p-0 my-0">
                    <div class="d-flex  mt-1 p-0">
                        <div class="border d-flex rounded">
                            <span>
                                <p class="border border-primary mt-3 mx-2 p-1 text-primary"><i class='fas fa-download'></i>
                                </p>
                            </span>
                            <h6 class="para fw-bold py-0 p-3 px-1 my-3">गाँजा खेतीको सम्भाव्यता अध्ययनका लागि सूची दर्ता
                                हुने सम्बन्धी सूचना<br>2080-11-6 | MoALM</h6>
                        </div>

                    </div>
                    <div class="d-flex mt-1 p-0">
                        <div class="border d-flex rounded">
                            <span>
                                <p class="border border-primary mt-3 mx-2 p-1 text-primary"><i class='fas fa-download'></i>
                                </p>
                            </span>
                            <h6 class="para fw-bold py-0 px-1 my-3">कृषि मौसम सल्लाह बुलेटिन शृंखला ५९, वर्ष २ अंक
                                २९<br>2080-10-21
                                | molmac</h6>
                        </div>
                    </div>
                    <div class="d-flex mt-1 p-0">
                        <div class="border d-flex rounded">
                            <span>
                                <p class="border border-primary mt-3 mx-2 p-1 text-primary "><i class='fas fa-download'></i>
                                </p>
                            </span>
                            <h6 class="para fw-bold py-0 px-1 my-3">कार्यक्षमता मूल्याङ्कनको आधारमा गरिने बढुवा सम्भाव्य
                                उम्मेदवारको योग्यताक्रम नामावली
                                <br> 2080-10-17 | molmac
                            </h6>
                        </div>
                    </div>
                    <div class=" mt-1 p-0">
                        <div class="border d-flex rounded">
                            <span>
                                <p class="border border-primary my-3 mx-2 p-1 text-primary"><i class='fas fa-download'></i>
                                </p>
                            </span>
                            <h6 class="para fw-bold py-0 px-1 my-3">कृषि तथा पशुपन्छीजन्य बाली वस्तुको गुणस्तर परीक्षण,
                                नियमन तथा
                                आयात निर्यात तथ्याङ्क व्यवस्थापन मापदण्ड,<br>
                                <span>2080-11-6 | MoALM</span>
                            </h6>

                        </div>
                    </div>
                </div>
            </div>
            <!------------- slider ----------->
            <div class="col-md-6 mt-2">
                <div id="carouselExampleDark" class="carousel carousel-dark slide">
                    {{-- <div class="carousel-indicators">
                        @foreach ($sliders as $sliderButton)
                            <button type="button" data-bs-target="#carouselExampleDark"
                                data-bs-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"
                                @if ($loop->first) aria-current="true" @endif
                                aria-label="Slide {{ $loop->iteration }}"></button>
                        @endforeach
                    </div>

                        <div class="carousel-inner">
                            @foreach ($sliders as $slider)
                            <div class="carousel-item {{$loop->first ? 'active' : ""}}">
                                <img src="{{ $slider->photo }}" class="d-block w-100" height="500" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h4 class="fw-bold text-white">{{ $slider->title }}</h4>

                                </div>
                            </div>
                            @endforeach
                        </div> --}}

                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($sliders as $slider)
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <img src="{{ $slider->photo }}" class="d-block w-100" height="500" alt="{{ $slider->title }}">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h4 class="fw-bold text-white">{{ $slider->title }}</h4>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
            <!-------------- slider ends ------------------>

            <!--------- right side  ------->

            <div class="col-md-3 mt-2">

                <div class="card border-3 rounded-3">
                    <p class="text-center text-primary fw-bold mb-0">माननीय मन्त्री</p>

                    <img src="{{ asset('assets/frontend/images/mahendra.jpg') }}"
                        class="border border-2 border-primary mb-1 rounded-2 "
                        style="height: 180px; width: 200px;  width: 50%;  margin-left: auto; margin-right: auto;"
                        alt="...">
                    <p class="text-center text-white fw-bold mb-1 bg-danger p-1 rounded-bottom"> महेन्द्रध्वज जि.सी.
                    </p>
                </div>

                <div class="card border-3 rounded-3 mt-2">
                    <p class="text-center text-primary fw-bold mb-0">प्रदेश सचिव</p>

                    <img src="{{ asset('assets/frontend/images/tanka.jpg') }}"
                        class="border border-2 border-primary mb-1 rounded-2 "
                        style="height: 180px; width: 200px;  width: 50%;  margin-left: auto; margin-right: auto;"
                        alt="...">
                    <p class="text-center text-white fw-bold mb-1 bg-danger p-1 rounded-bottom">डा.टंक प्रसाद प्रसाई</p>
                </div>
            </div>
        </div>
    </div>
    <!-- main-content ends -->
    <!-- ------------------------------- -->
    <!-- परिचय  -->
    <div class="container-fluid bg-light mt-2">
        <div class="row">
            <div class="col-md-6">
                <h5 class="fw-bold mt-2 mx-2">परिचय </h5>
                <hr>
                <p class="bg-white px-2">वि.स. २०६२/६३ को जन आन्दोलनले संबैधानिक राजतन्त्रलाई विस्थापित गरी मुलुक
                    लोकतान्त्रिक गणतन्त्रात्मक
                    शासन व्यवस्थामा रूपान्तरण भएको संविधान सभाबाट निर्मित संविधानले कानुनी रूपमा मुलुकलाई सङ्घीय
                    संरचनामा लगेकोले सात वटा प्रदेशहरू कायम रहन गएको सन्दर्भमा प्रत्येक प्रदेशमा सातै वटा मन्त्रालयहरू
                    कायम रहने व्यवस्था अनुसार यो मन्त्रालयको स्थापना मिति २०७४/१०/२२ गते भएको हो ।यस मन्त्रालयमा मा.
                    श्री लेख बहादुर थापा मगर ज्यूले पहिलो मन्त्रिको रुपमा पदभार मिति २०७४/११/०४ मा ग्रहण गर्नुभइ यस
                    मन्त्रालयको जिम्मेवारी सम्हाल्नुभएको हो ।<br> <br>प्रदेशको आर्थिक, सामाजिक तथा कृषि क्षेत्रको
                    विकासमा
                    सहकारी क्षेत्रलाई परिचालन गरी भूमिको प्रकृतिको आधारमा उपयोग गरी गर्ने नीति लिई कृषि एवं पशुपन्छीजन्य
                    उत्पादन एवं व्यापारमा यान्त्रिकीकरण, व्यावसयिकीकरण, बजारीकरण र आधुनिकीकरणका माध्यमबाट
                    प्रतिस्पर्धात्मक अवस्थाको सृजना गरी यस क्षेत्रको रुपान्तरण गर्दै रोजगारीको अवसर सृजना गर्ने लक्ष्यका
                    साथ भूमि व्यवस्था, कृषि तथा सहकारी मन्त्रालयको स्थापना भएको हो । <br><br>
                    <a href="#">थप हेर्नुहोस</a>
                </p>
            </div>
            <div class="col-md-6">
                <h5 class="fw-bold mt-2 mx-2">मातहतका निकायहरु</h5>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card border-0">
                            <img src="{{ asset('assets/frontend/images/nepal.png') }}" class="mt-4 mb-4" alt="logo">
                            <h3 class="text-center fw-bold mt-1">२</h3>
                            <h6 class="text-center fw-bold mb-5">प्रदेश स्तरिय कार्यालयहरु</h6>
                        </div>
                    </div>
                    <div class="col-md-4">

                        <div class="card  border-0">
                            <img src="{{ asset('assets/frontend/images/nepal.png') }}" class="mt-4 mb-4" alt="logo">
                            <h3 class="text-center fw-bold mt-1">११</h3>
                            <h6 class="text-center fw-bold mb-5">कृषि ज्ञान केन्द्र</h6>
                        </div>

                    </div>
                    <div class="col-md-4">

                        <div class="card  border-0">
                            <img src="{{ asset('assets/frontend/images/nepal.png') }}" class="mt-4 mb-4" alt="logo">
                            <h3 class="text-center fw-bold mt-1">२</h3>
                            <h6 class="text-center fw-bold mb-5">विज्ञ केन्द्र</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!------------ परिचय ends -------------->
    <!-------------------------------- nav tabs begin--------------------------------------->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">

                <!----------------------- First tab ------------>

                <h6 class="fw-bold mt-4">ऐन, नियम, निर्देशिका</h6>
                <hr>
                <ul class="nav nav-pills bg-danger" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active text-white" id="pills-ऐन-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-ऐन " type="button" role="tab" aria-controls="pills-ऐन"
                            aria-selected="true">ऐन तथा नियमावलीहरु</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link  text-white" id="pills-कार्यविधि-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-कार्यविधि" type="button" role="tab"
                            aria-controls="pills-कार्यविधि" aria-selected="false">कार्यविधि</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-white" id="pills-दस्तावेज-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-दस्तावेज" type="button" role="tab"
                            aria-controls="pills-दस्तावेज" aria-selected="false">दस्तावेज</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-white" id="pills-निर्देशिका-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-निर्देशिका" type="button" role="tab"
                            aria-controls="pills-निर्देशिका" aria-selected="false">निर्देशिका</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-white" id="pills-कृषि -tab" data-bs-toggle="pill"
                            data-bs-target="#pills-कृषि " type="button" role="tab" aria-controls="pills-कृषि "
                            aria-selected="false">कृषि विकास रणनीति</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-white" id="pills-मापदण्ड-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-मापदण्ड" type="button" role="tab" aria-controls="pills-मापदण्ड"
                            aria-selected="false">मापदण्ड</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-ऐन" role="tabpanel"
                        aria-labelledby="pills-ऐन-tab">
                        <div class="border d-flex justify-content-between rounded mt-1">

                            <div class="d-flex">
                                <p class="border border-primary mt-1 mx-1 p-1 text-primary"><i
                                        class='fas fa-download'></i></p>


                                <p class="fw-bold  py-0 px-1 mt-2">सेवा शुल्क तथा दस्तुर सम्बन्धी सूचना</p>
                            </div>
                            <p class="mx-2 mt-2 justify-content-end"> 2080-4-18 | प्रदेश राजपत्र</p>
                        </div>

                        <div class="border d-flex justify-content-between rounded mt-1">

                            <div class="d-flex">
                                <p class="border border-primary mt-1 mx-1 p-1 text-primary"><i
                                        class='fas fa-download'></i></p>


                                <p class="fw-bold  py-0 px-1 mt-2">प्रदेश कृषि व्यवसाय प्रबर्द्धन ऐन - २०७७ </p>
                            </div>
                            <p class="mx-2 mt-2 justify-content-end"> 2079-7-27 |</p>

                        </div>
                        <div class="border d-flex justify-content-between rounded mt-1">
                            <span class="d-flex">
                                <p class="border border-primary mt-1 mx-1 p-1 text-primary"><i
                                        class='fas fa-download'></i></p>
                                <p class="fw-bold fs- py-0 px-1 mt-2">गण्डकी प्रदेश खाद्य परिषद् (गठन तथा सञ्चालन) आदेश,
                                    २०७८</p>
                            </span>
                            <p class="mx-2  mt-2">2078-11-25 | Admin</p>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-कार्यविधि" role="tabpanel"
                        aria-labelledby="pills-कार्यविधि-tab">
                        <div class="border d-flex justify-content-between rounded mt-1">
                            <span class="d-flex">
                                <p class="border border-primary mt-1 mx-1 p-1 text-primary"><i
                                        class='fas fa-download'></i></p>


                                <p class="fw-bold fs- py-0 px-1 mt-2">कृषि जैविक विविधता तथा प्राङ्गारिक कृषि प्रवर्धन
                                    रणनीतिक कार्ययोजना, २०८०
                                </p>
                            </span>
                            <p class="mx-2 mt-2">2080-5-7 | MoALM</p>

                        </div>
                        <div class="border d-flex justify-content-between rounded mt-1">
                            <span class="d-flex">
                                <p class="border border-primary mt-1 mx-1 p-1 text-primary"><i
                                        class='fas fa-download'></i></p>

                                <p class="fw-bold fs- py-0 px-1 mt-2">कृषि प्राविधिक समन्वय संयन्त्र गठन तथा सञ्‍चालन
                                    विधि, २०७९
                                </p>
                            </span>
                            <p class="mx-2 mt-2">2079-1-21 | Admin</p>


                        </div>
                        <div class="border d-flex justify-content-between rounded mt-1">
                            <span class="d-flex">
                                <p class="border border-primary mt-1 mx-1 p-1 text-primary"><i
                                        class='fas fa-download'></i></p>


                                <p class="fw-bold fs- py-0 px-1 mt-2">कित्तानापी नक्सामा सार्वजनिक बाटो अध्यावधिक गर्ने
                                    कार्यविधि , २०७६ (पहिलो संशोधन, २०७८ सहित)
                                </p>
                            </span>
                            <p class="mx-2 mt-2"> 2078-6-17 | Admin</p>

                        </div>
                        <button class="btn btn-primary text-white mt-1">थप हेर्नुहोस</button>

                    </div>
                    <div class="tab-pane fade" id="pills-दस्तावेज" role="tabpanel" aria-labelledby="pills-दस्तावेज-tab">
                        <button class="btn btn-primary text-white mt-1">थप हेर्नुहोस</button>

                    </div>
                    <div class="tab-pane fade" id="pills-निर्देशिका" role="tabpanel"
                        aria-labelledby="pills-निर्देशिका-tab">
                        <div class="border d-flex justify-content-between rounded mt-1">
                            <span class="d-flex">
                                <p class="border border-primary mt-1 mx-1 p-1 text-primary"><i
                                        class='fas fa-download'></i></p>
                                <p class="fw-bold fs- py-0 px-1 mt-2">फलफूल नर्सरी व्यवस्थापन (स्थापना तथा सञ्चालन)
                                    निर्देशिका, २०८०
                                </p>
                            </span>
                            <p class="mx-2 mt-2">2080-6-7 | MoALM</p>
                        </div>
                        <button class="btn btn-primary text-white mt-1">थप हेर्नुहोस</button>
                    </div>

                    <div class="tab-pane fade" id="pills-कृषि" role="tabpanel" aria-labelledby="pills-कृषि-tab">
                        <button class="btn btn-primary text-white mt-1">थप हेर्नुहोस</button>

                    </div>
                    <div class="tab-pane fade" id="pills-मापदण्ड" role="tabpanel" aria-labelledby="pills-मापदण्ड-tab">
                        <div class="border d-flex justify-content-between rounded mt-1">
                            <span class="d-flex">
                                <p class="border border-primary mt-1 mx-1 p-1 text-primary"><i
                                        class='fas fa-download'></i></p>
                                <p class="fw-bold fs- py-0 px-1 mt-2">कृषि तथा पशुपन्छीजन्य बाली वस्तुको गुणस्तर
                                    परीक्षण, नियमन तथा आयात निर्यात तथ्याङ्क व्यवस्थापन मापदण्ड,२०८०
                                </p>
                            </span>
                            <p class="mx-2 mt-2">2080-10-15 | molmac</p>

                        </div>
                        <div class="border d-flex justify-content-between mt-1">
                            <span class="d-flex">
                                <p class="border border-primary mt-1 mx-1 p-1 text-primary"><i
                                        class='fas fa-download'></i></p>
                                <p class="fw-bold fs- py-0 px-1 mt-2">उत्पादनमा आधारित प्रोत्साहन सहयोग कार्यक्रम
                                    सञ्चालन मापदण्ड, २०८०
                                </p>
                            </span>
                            <p class="mx-2 mt-2">2080-9-19 | Molmac</p>

                        </div>
                        <button class="btn btn-primary text-white mt-1">थप हेर्नुहोस</button>
                    </div>
                </div>
                <!--------------- second tab -------------------------->

                <h6 class="fw-bold mt-4">सूचना पाटि</h6>
                <hr>
                <ul class="nav nav-pills bg-danger" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active text-white" id="pills-सूचना-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-सूचना " type="button" role="tab" aria-controls="pills-सूचना"
                            aria-selected="true">सूचना तथा समाचारहरु</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link  text-white" id="pills-प्रेस-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-प्रेस" type="button" role="tab" aria-controls="pills-प्रेस"
                            aria-selected="false">प्रेस </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-white" id="pills-बोलपत्र-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-बोलपत्र" type="button" role="tab" aria-controls="pills-बोलपत्र"
                            aria-selected="false">बोलपत्र</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-white" id="pills-अन्य-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-अन्य" type="button" role="tab" aria-controls="pills-अन्य"
                            aria-selected="false">अन्य</button>
                    </li>

                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-सूचना" role="tabpanel"
                        aria-labelledby="pills-सूचना-tab">
                        <div class="border d-flex justify-content-between rounded mt-1">
                            <span class="d-flex">
                                <p class="border border-primary mt-1 mx-1 p-1 text-primary"><i
                                        class='fas fa-download'></i></p>
                                <p class="fw-bold fs- py-0 px-1 mt-2">गाँजा खेतीको सम्भाव्यता अध्ययनका लागि सूची दर्ता
                                    हुने सम्बन्धी सूचना
                                </p>
                            </span>
                            <p class="mt-2">2080-11-6 | MoALM </p>

                        </div>

                        <div class="border d-flex justify-content-between rounded mt-1">
                            <span class="d-flex">
                                <p class="border border-primary mt-1 mx-1 p-1 text-primary"><i
                                        class='fas fa-download'></i></p>

                                <p class="fw-bold fs- py-0 px-1 mt-2">कृषि मौसम सल्लाह बुलेटिन शृंखला ५९, वर्ष २ अंक
                                    २९
                                </p>
                            </span>
                            <p class="mx-2 mt-2"> 2080-10-21 | molmac</p>

                        </div>
                        <div class="border d-flex justify-content-between rounded mt-1">
                            <span class="d-flex">
                                <p class="border border-primary mt-1 mx-1 p-1 text-primary"><i
                                        class='fas fa-download'></i></p>


                                <p class="fw-bold fs- py-0 px-1 mt-2">कार्यक्षमता मूल्याङ्कनको आधारमा गरिने बढुवा
                                    सम्भाव्य उम्मेदवारको योग्यताक्रम नामावली
                                </p>
                            </span>
                            <p class="mx-2 mt-2">2080-10-17 | molmac</p>

                        </div>
                        <button class="btn btn-primary text-white mt-1">थप हेर्नुहोस</button>
                    </div>
                    <div class="tab-pane fade" id="pills-प्रेस" role="tabpanel" aria-labelledby="pills-प्रेस-tab">
                        <button class="btn btn-primary text-white mt-1">थप हेर्नुहोस</button>

                    </div>
                    <div class="tab-pane fade" id="pills-बोलपत्र" role="tabpanel" aria-labelledby="pills-बोलपत्र-tab">
                        <button class="btn btn-primary text-white mt-1">थप हेर्नुहोस</button>
                    </div>
                    <div class="tab-pane fade" id="pills-अन्य" role="tabpanel" aria-labelledby="pills-अन्य-tab">
                        <div class="border d-flex rounded mt-1">
                            <span>
                                <p class="border border-primary mt-1 mx-1 p-1 text-primary"><i
                                        class='fas fa-download'></i></p>
                            </span>
                            <p class="fw-bold fs- py-0 px-1 mt-2">सूचनाको हक सम्वन्धी स्वत: प्रकाशन गरिएको विवरण~
                                २०७८, चैत्र ~ Proactive Disclosure ~ March, 2022
                                2078-12-11 | molmac-gandaki</p>
                        </div>
                    </div>
                </div>

                <!----------------- third tab -------------------------------------->
                <h6 class="fw-bold mt-4">प्रकाशन</h6>
                <hr>
                <ul class="nav nav-pills bg-danger" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active text-white" id="pills-प्रकाशन-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-प्रकाशन" type="button" role="tab" aria-controls="pills-प्रकाशन"
                            aria-selected="true">प्रकाशन</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link  text-white" id="pills-अभिलेख-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-अभिलेख" type="button" role="tab" aria-controls="pills-अभिलेख"
                            aria-selected="false">अभिलेख</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-white" id="pills-वैठक-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-वैठक" type="button" role="tab" aria-controls="pills-वैठक"
                            aria-selected="false">मन्त्रालयतर वैठक</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-white" id="pills-फारमहरू-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-फारमहरू" type="button" role="tab" aria-controls="pills-फारमहरू"
                            aria-selected="false">फारमहरू</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-white" id="pills-नमुना-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-नमुना " type="button" role="tab" aria-controls="pills-नमुना "
                            aria-selected="false"> व्यवसायिक योजनाको नमुना</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-white" id="pills-अन्य-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-अन्य" type="button" role="tab" aria-controls="pills-अन्य"
                            aria-selected="false">अन्य</button>
                    </li>
                </ul>

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-प्रकाशन" role="tabpanel"
                        aria-labelledby="pills-प्रकाशन-tab">
                        <div class="border d-flex justify-content-between rounded mt-1">
                            <span class="d-flex">
                                <p class="border border-primary mt-1 mx-1 p-1 text-primary"><i
                                        class='fas fa-download'></i></p>

                                <p class="fw-bold fs- py-0 px-1 mt-2">सूचनाको हक सम्बन्धी स्वतः प्रकाशन गरिएको विवरण,
                                    मंसिर, २०८०
                                </p>
                            </span>
                            <p class="mx-2 mt-2"> 2080-9-6 | molmac</p>

                        </div>

                        <div class="border d-flex justify-content-between rounded mt-1">
                            <span class="d-flex">
                                <p class="border border-primary mt-1 mx-1 p-1 text-primary"><i
                                        class='fas fa-download'></i></p>
                                <p class="fw-bold fs- py-0 px-1 mt-2">सूचनाको हक सम्बन्धी स्वतः प्रकाशन गरिएको विवरण,
                                    श्रावण, २०८० </p>
                            </span>
                            <p class="mx-2 mt-2"> 2080-5-18 | MoALM</p>
                        </div>
                        <div class="border d-flex justify-content-between rounded mt-1">
                            <span class="d-flex">
                                <p class="border border-primary mt-1 mx-1 p-1 text-primary"><i
                                        class='fas fa-download'></i></p>

                                <p class="fw-bold fs- py-0 px-1 mt-2">वार्षिक विकास कार्यक्रम तथा प्रगति पुस्तिका आ.व.
                                    २०७८-०७९</p>
                            </span>
                            <p class="mx-2 mt-2">2080-6-7 | MoALM</p>

                        </div>
                        <button class="btn btn-primary text-white mt-1">थप हेर्नुहोस</button>
                    </div>

                    <div class="tab-pane fade" id="pills-अभिलेख" role="tabpanel" aria-labelledby="pills-अभिलेख-tab">
                        <button class="btn btn-primary text-white mt-1">थप हेर्नुहोस</button>
                    </div>
                    <div class="tab-pane fade" id="pills-वैठक" role="tabpanel" aria-labelledby="pills-वैठक-tab">
                        <button class="btn btn-primary text-white mt-1">थप हेर्नुहोस</button>
                    </div>
                    <div class="tab-pane fade" id="pills-फारमहरू" role="tabpanel" aria-labelledby="pills-फारमहरू-tab">
                        <button class="btn btn-primary text-white mt-1">थप हेर्नुहोस</button>
                    </div>
                    <div class="tab-pane fade" id="pills-नमुना" role="tabpanel" aria-labelledby="pills-नमुना-tab">
                        <div class="border d-flex justify-content-between rounded mt-1">
                            <span class="d-flex">
                                <p class="border border-primary mt-1 mx-1 p-1 text-primary"><i
                                        class='fas fa-download'></i></p>

                                <p class="fw-bold fs- py-0 px-1 mt-2">स्याउ खेती नमुना व्यवसायिक योजना</p>
                            </span>
                            <p class="mx-2 mt-2"> 2079-7-23 | </p>

                        </div>
                        <div class="border d-flex justify-content-between rounded mt-1">
                            <span class="d-flex">
                                <p class="border border-primary mt-1 mx-1 p-1 text-primary"><i
                                        class='fas fa-download'></i></p>

                                <p class="fw-bold fs- py-0 px-1 mt-2">सुन्तला खेती नमुना व्यवसायिक योजना</p>
                            </span>
                            <p class="mx-2 mt-2"> 2079-7-23 | null</p>

                        </div>
                        <div class="border d-flex justify-content-between rounded mt-1">
                            <span class="d-flex">
                                <p class="border border-primary mt-1 mx-1 p-1 text-primary"><i
                                        class='fas fa-download'></i></p>


                                <p class="fw-bold fs- py-0 px-1 mt-2">कस्टम हायरिङ सेन्टर- व्यवसायिक योजना</p>
                            </span>
                            <p class="mx-2 mt-2"> 2079-7-23 | null</p>

                        </div>
                        <button class="btn btn-primary text-white mt-1">थप हेर्नुहोस</button>
                    </div>
                    <div class="tab-pane fade" id="pills-अन्य" role="tabpanel" aria-labelledby="pills-अन्य-tab">
                        <button class="btn btn-primary text-white mt-1">थप हेर्नुहोस</button>
                    </div>
                </div>

                <!-----------------------fourth tab --------------------------------->
                <h6 class="fw-bold mt-4">डाउनलोड</h6>
                <hr>
                <ul class="nav nav-pills bg-danger" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active text-white" id="pills-फाईल-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-फाईल" type="button" role="tab" aria-controls="pills-फाईल"
                            aria-selected="true">फाईल</button>
                    </li>
                </ul>

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-प्रकाशन" role="tabpanel"
                        aria-labelledby="pills-प्रकाशन-tab">
                        <div class="border d-flex justify-content-between rounded mt-1">
                            <span class="d-flex">
                                <p class="border border-primary mt-1 mx-1 p-1 text-primary"><i
                                        class='fas fa-download'></i></p>


                                <p class="fw-bold fs- py-0 px-1 mt-2">सुन्तला खेती नमुना व्यवसाय योजना</p>
                            </span>
                            <p class="mx-2 mt-2"> 2079-7-21 | </p>

                        </div>
                        <button class="btn btn-primary text-white mt-1">थप हेर्नुहोस</button>
                    </div>
                </div>

            </div>
            <!-- -------------------------------------------------------------------------------- -->
            <!----------------------------nav tabs ends  ----------------------------------------->
            <!-- -------------------------------------------------------------------------------- -->






            <!-- right side photo -->
            <div class="col-md-3">
                {{-- <div class="card border-4 rounded-2">
                <p class="text-center text-primary fw-bold mb-0 mt-1">प्रबक्ता</p>

                <img src="" class="border border-2 border-primary mb-1 rounded-2 "
                    style="height: 180px;  width: 50%;  margin-left: auto; margin-right: auto;" alt="">
                <p class="text-center text-danger fw-bold mb-1 bg-danger p-1 rounded-bottom">प्रबक्ता</p>
            </div> --}}
                <div class="card border-4 rounded-2 mt-2">
                    <p class="text-center text-primary fw-bold mb-0 mt-1">सूचना अधिकारी</p>

                    <img src="{{ asset('assets/frontend/images/jyoti.jpg') }}"
                        class="border border-2 border-primary mb-1 rounded-2 "
                        style="height: 180px;   width: 50%;  margin-left: auto; margin-right: auto;" alt="...">
                    <div class="text-center text-white fw-bold bg-danger mx-1 my-1 rounded-bottom my-0 ">
                        <p class="my-0 text-center">ज्योती क्षेत्री</p>
                        <P class=" py-0 my-0 mb-1 text-center"><i class='fas fa-phone'></i> 9856049138</P>
                        <P class="mt-0 py-0 my-0 text-center"><i class='fas fa-envelope'></i> jyotichhetripkr@gmail.com
                        </P>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="facebook">
                        <iframe
                            src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fgandakikrishi%2F%3Fref%3Dembed_page&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                            width="290" height="500" style="border:none; overflow:hidden" scrolling="no"
                            frameborder="0" allowfullscreen="true"
                            allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- photo gallary -->
    <div class="container-fluid" bg-light data-aos="fade-up">
        <h5 class="fw-bold mt-5">फोटो ग्यालरी</h5>
        <hr>
        <div class="row">
            <div class="col-md-3">
                <img src="{{ asset('assets/frontend/images/slide1.jpg') }}" alt="slider" height="200px;"
                    width="270px;">
            </div>
            <div class="col-md-3">
                <img src="{{ asset('assets/frontend/images/slide2.jpg') }}" alt="slider" height="200px;"
                    width="270px;">
            </div>
            <div class="col-md-3">
                <img src="{{ asset('assets/frontend/images/slide3.jpg') }}" alt="slider" height="200px;"
                    width="270px;">
            </div>
            <div class="col-md-3">
                <img src="{{ asset('assets/frontend/images/slide4.jpg') }}" alt="slider" height="200px;"
                    width="270px;">
            </div>
        </div>


    </div>
    <!----------------------- icons --------------------------->
    <div class="container-fluid bg-white mt-4">
        <div class="row">
            <div class="col-md-3 mb-2">
                <div class="cards rounded">
                    <div class="d-flex">
                        <p class=" ms-2 mt-2 mb-2 my-0 text-white fs-1"> <i class="fas fa-envelope"></i></p>
                        <div class="heading  mt-2 mb-2 mt-4 ms-4 fw-bold text-white">चेक मेल</div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-2">
                <div class="cards rounded">
                    <div class="d-flex">
                        <p class=" ms-2 mt-2 mb-2 my-0 text-white fs-1"> <i class="fas fa-users"></i></p>
                        <div class="heading  mt-2 mb-2 mt-4 ms-4 fw-bold text-white">कर्मचारी विवरण</div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-2">
                <div class="cards rounded">
                    <div class="d-flex">
                        <p class=" ms-2 mt-2 mb-2 my-0 text-white fs-1"> <i class="fas fa-users"></i></p>
                        <div class="heading  mt-2 mb-2 mt-4 ms-4 fw-bold text-white">चेक मेल</div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-2">
                <div class="cards rounded">
                    <div class="d-flex">
                        <p class=" ms-2 mt-2 mb-2 my-0 text-white fs-1"> <i class="fas fa-calculator"></i></p>
                        <div class="heading  mt-2 mb-2 mt-4 ms-4 fw-bold text-white">भुक्तानिका लागि प्राप्त बिलहरू
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-4 mt-2">
                <div class="cards rounded">
                    <div class="d-flex">
                        <p class=" ms-2 mt-2 mb-2 my-0 text-white fs-1"> <i class="fas fa-video"></i></p>
                        <div class="heading  mt-2 mb-2 mt-4 ms-4 fw-bold text-white">भिडियो ग्यालेरी</div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4 mt-2">
                <div class="cards rounded">
                    <div class="d-flex">
                        <p class=" ms-2 mt-2 mb-2 my-0 text-white fs-1"> <i class="fas fa-file-image"></i></p>
                        <div class="heading  mt-2 mb-2 mt-4 ms-4 fw-bold text-white">फोटो ग्यालेरी</div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4 mt-2">
                <div class="cards rounded">
                    <div class="d-flex">
                        <p class=" ms-2 mt-2 mb-2 my-0 text-white fs-1"> <i class="fas fa-file-audio"></i></p>
                        <div class="heading  mt-2 mb-2 mt-4 ms-4 fw-bold text-white">अडियो ग्यालेरी</div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4 mt-2">
                <div class="cards rounded">
                    <div class="d-flex">
                        <p class=" ms-2 mt-2 mb-2 my-0 text-white fs-1"> <i class="fas fa-link"></i></p>
                        <div class="heading  mt-2 mb-2 mt-4 ms-4 fw-bold text-white">सम्बंदित लिङ्क</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
