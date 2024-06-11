@extends('layouts.master')
@section('title','subordinate')
@section('content')
<h5 class="text-center fw-bold py-3">मातहतका निकायहरु</h5>
    <div class="row">
        <div class="col-md-3">
            <ul>
                @foreach ($subordinates as $subordinate)


                <li class="border py-2 ps-1">
                   <a class="text-dark" href="{{$subordinate->url ??''}}" target="blank" >{{$subordinate->title ??''}}</a></li>

                    @endforeach
                {{-- <li class="border py-2 ps-1"><a href="https://add.gandaki.gov.np/" class=" text-dark">१. कृषि विकास
                        निर्देशनालय कास्की</a></li>
                <li class="border  py-2 ps-1"><a href="https://gorkha.akc.gov.np/" class=" text-dark">कृषि ज्ञान
                        केन्द्र, गोरखा</a></li>
                <li class="border  py-2 ps-1"><a href="https://kaski.akc.gov.np/" class="text-dark">कृषि ज्ञान केन्द्र,
                        कास्की </a></li>
                <li class="border  py-2 ps-1"><a href="https://ppl.gandaki.gov.np/" class="text-dark">बाली सन्रक्षन्
                        प्रयोगशाला, कास्की </a></li>
                <li class="border  py-2 ps-1"><a href="https://soillabgandaki.gov.np/" class="text-dark">माटो तथा मल
                        परीक्षणका, कास्की </a></li>
                <li class="border  py-2 ps-1"><a href="https://lamjung.akc.gov.np/" class="text-dark">कृषि ज्ञान
                        केन्द्र,लम्जुंग </a></li>
                <li class="border  py-2 ps-1"><a href="https://syangja.akc.gov.np/" class="text-dark">कृषि ज्ञान
                        केन्द्र, स्यांग्जा </a></li>

                <li class="border  py-2 ps-1"><a href="https://seedlabgandaki.gov.np/" class="text-dark">बीउ बिजन
                        प्रयोगशाला, कास्की </a></li> --}}

            </ul>
        </div>
        <div class="col-md-3">
            <ul>
                {{-- <li class="border py-2 ps-1"><a href="https://dlfd.gandaki.gov.np/introduction" class=" text-dark">२.
                        पशुपन्छी तथा मत्स्य विकाश निर्देशनालय, कास्की</a></li>
                <li class="border py-2 ps-1"><a
                        href="https://www.facebook.com/people/%E0%A4%B8%E0%A4%B9%E0%A4%95%E0%A4%BE%E0%A4%B0%E0%A5%80-%E0%A4%B0%E0%A4%9C%E0%A4%BF%E0%A4%B7%E0%A5%8D%E0%A4%9F%E0%A5%8D%E0%A4%B0%E0%A4%BE%E0%A4%B0%E0%A4%95%E0%A5%8B-%E0%A4%95%E0%A4%BE%E0%A4%B0%E0%A5%8D%E0%A4%AF%E0%A4%BE%E0%A4%B2%E0%A4%AF-%E0%A4%97%E0%A4%A3%E0%A5%8D%E0%A4%A1%E0%A4%95%E0%A5%80-%E0%A4%AA%E0%A5%8D%E0%A4%B0%E0%A4%A6%E0%A5%87%E0%A4%B6/100069082844517/"
                        class=" text-dark">३. सहकारी रजिष्ट्रार कार्यालय, गण्डकी प्रदेश</a></li> --}}


            </ul>
        </div>
        <div class="col-md-6">
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1797210.6615478776!2d84.03755205!3d28.383719250000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995713cf0b9cf0b%3A0xfa70b278c998bd29!2sGandaki%20Province!5e0!3m2!1sen!2snp!4v1713872078758!5m2!1sen!2snp"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>


    {{-- <button class="button">Hover Me</button> --}}

@endsection
