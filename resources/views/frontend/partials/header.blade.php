<header>
    <div class="container-fluid">
        <div class="d-flex justify-content-between mt-1 mb-1">
            <div class="mx-5 my-1">2081-01-04 गते</div>
            <div class=" mx-3">
                <a  class="btn text-white py-1 px-2 rounded-0"  style="background-color: #2460B9;" href="{{route('login.form')}}">LOGIN</a>
                <button type="button" class="btn py-1 px-2 rounded-0 border">English</button>
                <button type="button" class="btn  py-1 px-2 rounded-0 border">नेपाली</button>

            </div>
        </div>
        <hr class="mt-0">
        <div class="row">
            <div class="col-md-2">
                <img src="{{officeSetting()?->logo ?? ''}}" style="width: 130px; height:110px" alt="nepal-govt logo">
            </div>
            <div class="col-md-8">
                <p class="text-danger text-center mb-0">गण्डकी प्रदेश सरकार</p>
                <P class="text-danger text-center fw-bold mb-0">कृषि तथा भुमि व्यवस्था मन्त्रालय </P>
                <P class="text-danger text-center">पोखरा, नेपाल</P>
                <P class="text-danger text-center fw-bold ">" व्यवसायिक कृषि उत्पादनमा यूवा कृषकको योगदान, प्रदेश
                    सरकारको आव्हान "</P>
            </div>
            <div class="col-md-2">
                <img src="{{officeSetting()?->flag ?? ''}}" alt="nepal-flag logo">
{{-- <img src="asset('assets/frontend/images/flag.gif')"> --}}
            </div>
        </div>

    </div>
</header>
