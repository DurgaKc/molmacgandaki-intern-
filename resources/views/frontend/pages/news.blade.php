@extends('layouts.master')
@section('title','news')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 mt-4">
            <div class="ministry">

                <div class="card shadow border-0 mb-3">
                    <h6 class="mt-2 mb-3 ms-3"><a href="{{route('news')}}">सूचना तथा समचारहरु</a></h6>
                </div>
                <div class="card shadow border-0 mb-3">
                    <h6 class="mt-2 mb-3 ms-3"><a href="../news/press.html">प्रेस बिज्ञप्ति</a></h6>
                </div>
                <div class="card shadow border-0 mb-3">
                    <h6 class="mt-2 mb-3 ms-3"><a href="../news/bid.html">बोलपत्र</a></h6>
                </div>
                <div class="card shadow border-0 mb-3">
                    <h6 class="mt-2 mb-3 ms-3"><a href="../news/other.html">अन्य
                    </a></h6>
                </div>

            </div>
        </div>

        <div class="col-md-9 mb-5">
            <h4 class="fw-bold mb-4 mt-4">सूचना तथा समचारहरु
            </h4>
            <div class="row">
                <div class="col-md-6">

                </div>
                <div class="col-md-6">

                    <div class="input ms-5">
                        <select class="act px-5 py-2">
                            <option value="act" selected disabled>सूचना तथा समचारहरु खोज्नुहोस</option>
                            <option value="Agriculture"><a href="#">गाँजा खेतीको सम्भाव्यता अध्ययनका लागि सूची दर्ता हुने सम्बन्धी सूचना</a></option>
                            <option value="Agriculture"><a href="#">कृषि मौसम सल्लाह बुलेटिन शृंखला ५९, वर्ष २ अंक २९</a></option>
                            <option value="Agriculture"><a href="#">कस्टम हायरिङ सेन्टर- व्यवसायिक योजना</a></option>
                            <option value="Agriculture"><a href="#">कृषि मौसम सल्लाह बुलेटिन शृंखला ५७, वर्ष २ अंक २७</a></option>

                        </select><br>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="act">
                        <div class="card border-dark">
                            <h6><i class='fas fa-download'></i></h6>
                            <p class="py-0 mx-3 mt-4 ">कृषि मौसम सल्लाह बुलेटिन शृंखला ५७, वर्ष २ अंक २७</p>
                            <h5 class="pt-0 fs-8 pb-2 mt-0 ms-3">सूचना तथा समचारहरु |2080-10-7 </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="act">
                        <div class="card border-dark">
                            <h6><i class='fas fa-download'></i></h6>
                            <p class="py-0 mx-3 mt-4 ">कृषि मौसम सल्लाह बुलेटिन शृंखला ५९, वर्ष २ अंक २९ </p>
                            <h5 class="pt-0 fs-8 pb-2 mt-0 ms-3">सूचना तथा समचारहरु | 2080-10-21</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="act">
                        <div class="card border-dark">
                            <h6><i class='fas fa-download'></i></h6>
                            <p class="py-0 mx-3 mt-4 ">कृषि मौसम सल्लाह बुलेटिन शृंखला ५८, वर्ष २ अंक २८</p>
                            <h5 class="pt-0 fs-8 pb-2 mt-0 ms-3">सूचना तथा समचारहरु | 2080-10-14 </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="act">
                        <div class="card border-dark">
                            <h6><i class='fas fa-download'></i></h6>
                            <p class="py-0 mx-3 mt-4 ">कृषि मौसम सल्लाह बुलेटिन शृंखला ५७, वर्ष २ अंक २७८</p>
                            <h5 class="pt-0 fs-8 pb-2 mt-0 ms-3">सूचना तथा समचारहरु | 2080-10-14 </h5>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
@endsection
