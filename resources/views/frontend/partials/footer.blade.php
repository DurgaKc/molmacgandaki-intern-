<div class="footer bg-danger">

    <div class="d-flex">
        <div class="col-md-3 mt-4">
            <h6 class="fw-bold text-decoration-underline ms-2 text-white">सम्पर्क विवरण</h6>
            <p class="text-white ms-2">{{officeSetting()?->office_name ??''}} </p>
            <P class="my-0 py-0 ms-2 text-white"><i class='fas fa-map-marker-alt'></i>{{officesetting()?->address ?? ''}}</P>
            <P class=" py-0 my-0 mb-1 ms-2 text-white"><i class='fas fa-phone'></i> {{officesetting()?->phone ??''}}</P>
            <P class="mt-0 py-0 my-0 ms-2 text-white"><i
                    class='fas fa-envelope text-white'></i>(प्रशासन){{officesetting()?->email ?? ''}}</p>
            {{-- <P class="mt-0 py-0 my-0 ms-2 text-white"><i class='fas fa-envelope'></i>molmacprovince4@gmail.com</P> --}}
        </div>
        <div class="col-md-2 mt-4">
            <h6 class="fw-bold text-decoration-underline text-white">सामाजिक लिंकहरू</h6>
            <p class="fs-4 mt-3 text-white"><i class="fa-solid fa-globe"></i></p>
            <div class="border border-1 border-primary col-md-10">
                <div class="row">
                    <h5 class="fw-bold text-decoration-underline text-center mt-2 text-white">आगन्तुकहरू</h5>
                    <div class="col-md-5 text-white">
                        <P class="mx-2">1</P>
                        <p class="mx-2">दैनिक</p>
                    </div>
                    <div class="col-md-5 text-white">
                        <P class="mx-2">14992</P>
                        <p class="mx-2">जम्मा</p>
                    </div>
                </div>


            </div>
        </div>
        <div class="col-md-4 mt-4">
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11146.583209270146!2d83.96070837295092!3d28.195858679884413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399595dfda775477%3A0xb931f5bb4cfcb316!2sRegistrar%20office%20of%20Ministry%20of%20Land%20Management%2C%20Agriculture%2C%20Co-operative%20%26%20Poverty%20Alleviation%2C%20Gandaki%20Province!5e0!3m2!1sen!2snp!4v1713505186166!5m2!1sen!2snp"
                    width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="col-md-2 mt-4 text-white mb-4">
            <h6 class="fw-bold text-decoration-underline">महत्वपूर्ण लिंक</h6>
            <div class="border border-white" style="width: 18rem;">
                <ul class="list-group  list-group-flush">
                    @foreach (links() as $link)


                    <li class=" border border-white bg-transparent text-white list-group-item">
                       <a class="text-white" href="{{$link->url ??''}}" target="blank" >{{$link->title ??''}}</a></li>

                        @endforeach



                </ul>
            </div>
        </div>

    </div>


</div>

<div class="foot text-white">
    <div class="d-flex justify-content-between">
        <p class="copyright  fs-5.5 my-3 ms-2"> Copyright &copy;<a href="https://www.facebook.com/profile"
                class="text-white mt-4 mb-4 ms-2">कृषि तथा भूमि व्यवस्था मन्त्रालय</a></p>
        <p class="mx-3 text-white my-3">Updated on : 2079/05/30</p>

    </div>

</div>
