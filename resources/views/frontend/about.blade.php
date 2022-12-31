@extends('layouts.frontend')

@section('content')
    <!-- Start Banner Hero -->
    <section class="w-100 text-white" style="background-color: #041c2d!important">
        <div class="container">
            <div class="row d-flex align-items-center py-5">
                <div class="col-lg-6 text-start">
                    <h1 class="h2 py-5 typo-space-line">About Us</h1>
                    <p class="light-300">
                        MR Building Construction Ltd. is one of the most reliable & finest building construction companies in Bangladesh. We offer our customers the best kind of modern service & take extra care to fulfill our commitment. Because “Commitment is Our Service”                    </p>
                </div>
                <div class="col-lg-6">
                    <img src="frontend/assets/img/banner-img-02.svg">
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Hero -->


    <!-- Start Team Member -->
    <section class="container py-5">
        <div class="pt-2 pb-3">

            <div class="row">
                <div class="col-lg-12 text-white">
                    <h2 class="h2 py-5 typo-space-line">Our Team</h2>
                </div>
            </div>

            <div class="row">
                <div class="team-member col-md-3">
                    <img class="team-member-img img-fluid rounded-circle p-4" src="frontend/assets/img/chairman.jpg" alt="Card image">
                    <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300 text-white">
                        <li><h5 class="text-white">Mst. Minetu Akter</h5></li>
                        <li class="text-white">Chairman</li>
                    </ul>
                </div>

                <div class="team-member col-md-3">
                    <img class="team-member-img img-fluid rounded-circle p-4" src="frontend/assets/img/md.jpg" alt="Card image">
                    <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                        <li><h5 class="text-white">Hawlader Md. Mostofa Rahman</h5></li>
                        <li class="text-white">Managing Director</li>
                    </ul>
                </div>

                <div class="team-member col-md-3">
                    <img class="team-member-img img-fluid rounded-circle p-4" src="frontend/assets/img/dms.jpg" alt="Card image">
                    <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                        <li><h5 class="text-white">Engr. Md.Tajul Islam</h5></li>
                        <li class="text-white">Director Marketing & Sales</li>
                    </ul>
                </div>
                <div class="team-member col-md-3">
                    <img class="team-member-img img-fluid rounded-circle p-4" src="frontend/assets/img/kashidul.jpg" alt="Card image">
                    <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                        <li><h5 class="text-white">Md. Kasidul Hawlader</h5></li>
                        <li class="text-white">Assistant Manager</li>
                    </ul>
                </div>
                <div class="team-member col-md-3">
                    <img class="team-member-img img-fluid rounded-circle p-4" src="frontend/assets/img/rizu.jpg" alt="Card image">
                    <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                        <li><h5 class="text-white">Md. Raihanul Islam Rizu</h5></li>
                        <li class="text-white">Chief Architect</li>
                    </ul>
                </div>
                <div class="team-member col-md-3">
                    <img class="team-member-img img-fluid rounded-circle p-4" src="frontend/assets/img/ashraful.jpg" alt="Card image">
                    <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                        <li><h5 class="text-white">Khondaker Asraful Islam</h5></li>
                        <li class="text-white">Project Engineer Civil</li>
                    </ul>
                </div>
                <div class="team-member col-md-3">
                    <img class="team-member-img img-fluid rounded-circle p-4" src="frontend/assets/img/parvez.jpg" alt="Card image">
                    <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                        <li><h5 class="text-white">Md.Mainul Islam Parvez</h5></li>
                        <li class="text-white">B.SC. Engineer Civil</li>
                    </ul>
                </div>
                <div class="team-member col-md-3">
                    <img class="team-member-img img-fluid rounded-circle p-4" src="frontend/assets/img/majedur.jpg" alt="Card image">
                    <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                        <li><h5 class="text-white">Md.Majedur Rahman</h5></li>
                        <li class="text-white">Project Engineer Civil</li>
                    </ul>
                </div>
                <div class="team-member col-md-3">
                    <img class="team-member-img img-fluid rounded-circle p-4" src="frontend/assets/img/mamun.jpg" alt="Card image">
                    <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                        <li><h5 class="text-white">Md Mamun Hawlader</h5></li>
                        <li class="text-white">Project Supervisor</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <!-- End Team Member -->

    <!-- Start Our Partner -->
    <section class="bg-secondary py-3">
        <div class="container py-5">
            <h2 class="h2 text-white text-center py-5">Our Clients</h2>
            <div class="row text-center" id="clientsSlider">
                @foreach ($clients as $client)
                <div class="col-md-1 mb-3 mx-3 client-logo-container">
                    <a href="{{$client->url}}" target="blank" title="{{$client->name}}">
                        <img style="width:100%; height: 8rem;" src="frontend/assets/img/clients/{{$client->logo}}" alt="{{$client->name}}">
                    </a>
                    <span class="text-white text-center">{{$client->name}}</span>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--End Our Partner-->

    <!-- Start Progress -->
    {{-- <section class="bg-white py-5">
        <div class="container my-4">

            <h1 class="creative-heading h2 pb-3">Creative & Make Perfect</h1>

            <div class="creative-content row py-3">
                <div class="col-md-5">
                    <p class="text-muted col-lg-8 light-300">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida Risus.
                    </p>
                </div>
                <div class="creative-progress col-md-7">

                    <div class="row mt-4 mt-sm-2">
                        <div class="col-6">
                            <h4 class="h5">Development</h4>
                        </div>
                        <div class="col-6 text-right">66%</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="row mt-4 mt-sm-2">
                        <div class="col-6">
                            <h4 class="h5">Design</h4>
                        </div>
                        <div class="col-6 text-right">90%</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>


                    <div class="row mt-4 mt-sm-2">
                        <div class="col-6">
                            <h4 class="h5">Marketing</h4>
                        </div>
                        <div class="col-6 text-right">74%</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 74%" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                </div>
            </div>
        </div>
    </section> --}}
    <!-- End Progress -->

    <!-- Start Choice -->
    {{-- <section class="why-us banner-bg bg-light">
        <div class="container my-4">
            <div class="row">
                <div class="banner-img col-lg-5">
                    <img src="./assets/img/work.svg" class="rounded img-fluid" alt="">
                </div>
                <div class="banner-content col-lg-7 align-self-end">
                    <h2 class="h2 pb-3">Why you choose us?</h2>
                    <p class="text-muted pb-5 light-300">
                    You are allowed to download and use this Purple Buzz template for your websites. You are <strong>not allowed</strong> to re-distribute this template ZIP file on other template websites. It is quite easy to simply copy and repost the ZIP file on any <a rel="nofollow" href="https://www.google.com/search?q=free+css" target="_blank">Free CSS collection</a> websites.</p>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End Choice -->

    <!-- Start Aim -->
    <section class="banner-bg bg-white py-5">
        <div class="container my-4">
            <div class="row text-center">

                <div class="objective col-lg-4">
                    <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-secondary shadow-lg">
                        <i class="display-4 bx bxs-bulb text-light"></i>
                    </div>
                    <h2 class="objective-heading h3 mb-2 mb-sm-4 light-300">Our Vision</h2>
                    <p class="light-300">
                        Incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse commodo viverra.
                    </p>
                </div>

                <div class="objective col-lg-4 mt-sm-0 mt-4">
                    <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-secondary shadow-lg">
                        <i class='display-4 bx bx-revision text-light'></i>
                    </div>
                    <h2 class="objective-heading h3 mb-2 mb-sm-4 light-300">Our Mission</h2>
                    <p class="light-300">
                        Eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam quis.
                    </p>
                </div>

                <div class="objective col-lg-4 mt-sm-0 mt-4">
                    <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-secondary shadow-lg">
                        <i class="display-4 bx bxs-select-multiple text-light"></i>
                    </div>
                    <h2 class="objective-heading h3 mb-2 mb-sm-4 light-300">Our Goal</h2>
                    <p class="light-300">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor.
                    </p>
                </div>

            </div>
        </div>
    </section>
    <!-- End Aim -->

    <section class="certificate-area">
        <div class="container my-4">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <img class="text-center" src="frontend/assets/img/certificate.jpg" width="100%" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
<script>
    $(document).ready(function(){
    $('#clientsSlider').slick({
        dots: false,
        infinite: true,
        speed: 300,
        arrows: true,
        //centerMode:true,
        draggable: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay:true,
        autoplaySpeed:1000,
        responsive: [
            {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
            },
            {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
            },
            {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
  });
</script>
@endpush
