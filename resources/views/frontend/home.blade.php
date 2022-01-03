@extends('layouts.frontend')

@section('content')
    <!-- Start Banner Hero -->
<div class="slider-area bg-nav py-1">
    <div class="container">
        <div id="wowslider-container1">
            <div class="ws_images"><ul>
                <li><img src="frontend/assets/wowslider/data1/images/mrslider4.jpg" alt="mr-slider-4" id="wows1_0"/></li>
                <li><img src="frontend/assets/wowslider/data1/images/mrslider1.jpg" alt="mr-slider-1" id="wows1_1"/></li>
                <li><img src="frontend/assets/wowslider/data1/images/mrslider2.jpg" alt="mr-slider-2" id="wows1_2"/></li>
                <li><img src="frontend/assets/wowslider/data1/images/mrslider3.jpg" alt="slider jquery" id="wows1_3"/></li>
                <li><img src="frontend/assets/wowslider/data1/images/mrslider5.jpg" alt="mr-slider-5" id="wows1_4"/></li>
            </ul></div>
            <div class="ws_bullets"><div>
                <a href="#"><span><img src="frontend/assets/wowslider/data1/tooltips/mrslider4.jpg" alt="mr-slider-4"/>1</span></a>
                <a href="#"><span><img src="frontend/assets/wowslider/data1/tooltips/mrslider1.jpg" alt="mr-slider-1"/>2</span></a>
                <a href="#"><span><img src="frontend/assets/wowslider/data1/tooltips/mrslider2.jpg" alt="mr-slider-2"/>3</span></a>
                <a href="#"><span><img src="frontend/assets/wowslider/data1/tooltips/mrslider3.jpg" alt="mr-slider-3"/>4</span></a>
                <a href="#"><span><img src="frontend/assets/wowslider/data1/tooltips/mrslider5.jpg" alt="mr-slider-5"/>5</span></a>
            </div></div>
            {{-- <div class="ws_shadow"></div> --}}
            </div>
    </div>
</div>

<!-- End Banner Hero -->

<!-- Start View Work -->
{{-- <section class="bg-secondary">
    <div class="container py-5">
        <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-2 col-12 text-light align-items-center">
                <i class='display-1 bx bxs-box bx-lg'></i>
            </div>
            <div class="col-lg-7 col-12 text-left text-light pt-2">
                <h3 class="h4 light-300">Welcome to MR Building Construction Ltd.</h3>
                <p class="light-300">MR Building Construction Ltd. is one of the most reliable & finest building construction companies in Bangladesh.</p>
            </div>
            <div class="col-lg-3 col-12 pt-4">
                <a href="contact.html" class="btn btn-primary rounded-pill btn-block shadow px-4 py-2">Contact Us</a>
            </div>
        </div>
    </div>
</section> --}}
<!-- End View Work -->
<!-- Start Recent Work -->
<section class=" mb-5 company-bg text-white">
    <div class="container">
        <div class="recent-work-header row text-center pb-2">
            <h3 class="col-md-6 m-auto semi-bold-600 py-1">Our Companies</h3>
        </div>
        <div class="row gy-3 g-lg-4 mb-2">

            <!-- Start Recent Work -->
            <div class="col-md-3 mb-1">
                <a href="https://www.facebook.com/bsc.bd" class="recent-work card border-0 shadow-lg overflow-hidden">
                    <img class="recent-work-img card-img" src="frontend/assets/img/logo-1.jpg" alt="Card image">
                    <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                        <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                            {{-- <h5 class="card-title">Brother's Steel & Construction Ltd.</h5> --}}
                            {{-- <p class="card-text">Ullamco laboris nisi ut aliquip ex</p> --}}
                        </div>
                    </div>
                </a>
                <p  class="mt-1">MR Building Construction Ltd.</p>
            </div><!-- End Recent Work -->

            <!-- Start Recent Work -->
            <div class="col-md-3 mb-1">
                <a href="https://www.facebook.com/BGCL16" class="recent-work card border-0 shadow-lg overflow-hidden">
                    <img class="recent-work-img card-img" src="frontend/assets/img/logo-2.jpg" alt="Card image">
                    <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                        <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                            {{-- <h5 class="card-title">Brother's Glass & Construction Ltd.</h5> --}}
                            <!-- <p class="card-text">Psum officia anim id est laborum.</p> -->
                        </div>
                    </div>
                </a>
                <p  class="mt-1">Brother's Glass & Construction Ltd.</p>
            </div><!-- End Recent Work -->
            <div class="col-md-3 mb-1">
                <a href="https://www.facebook.com/Hawlader-Dairy-Farm-101750922295790/" class="recent-work card border-0 shadow-lg overflow-hidden">
                    <img class="recent-work-img card-img" src="frontend/assets/img/logo-5.jpg" alt="Card image">
                    <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                        <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                            {{-- <h5 class="card-title">Hawlader Dairy Farm</h5> --}}
                            <!-- <p class="card-text">Lorem ipsum dolor sit amet</p> -->
                        </div>
                    </div>
                </a>
                <p  class="mt-1">Mehjabin Enterprise</p>
            </div><!-- End Recent Work -->

            <!-- Start Recent Work -->
            <div class="col-md-3 mb-1">
                <a href="https://www.facebook.com/Mehjabin-Enterprise-101462432329534" class="recent-work card border-0 shadow-lg overflow-hidden">
                    <img class="recent-work-img card-img" src="frontend/assets/img/logo-3.jpg" alt="Card image">
                    <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                        <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                            {{-- <h5 class="card-title">Mehjabin Enterprise</h5> --}}
                            <!-- <p class="card-text">Sum dolor sit consencutur</p> -->
                        </div>
                    </div>
                </a>
                <p  class="mt-1">Brother's Steel & Construction Ltd.</p>
            </div><!-- End Recent Work -->

            <!-- Start Recent Work -->
            <div class="col-md-3 mb-1">
                <a href="https://www.facebook.com/Hawlader-Dairy-Farm-101750922295790/" class="recent-work card border-0 shadow-lg overflow-hidden">
                    <img class="recent-work-img card-img" src="frontend/assets/img/logo-4.jpg" alt="Card image">
                    <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                        <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                            {{-- <h5 class="card-title">Hawlader Dairy Farm</h5> --}}
                            <!-- <p class="card-text">Lorem ipsum dolor sit amet</p> -->
                        </div>
                    </div>
                </a>
                <p  class="mt-1">Hawladar Dairy Farm</p>
            </div>
            
            
            <!-- End Recent Work -->

        </div>
    </div>
</section>
<!-- End Recent Work -->

<!-- Start Service -->
<section class="service-wrapper text-white">
    <div class="container-fluid">
        <div class="row">
            <h3 class=" text-center col-12 py-1 semi-bold-600">Our Projects</h3>
        </div>
    </div>
    <div class="service-tag py-2 bg-secondary">
        <div class="col-md-12">
            <ul class="nav d-flex justify-content-center">
                <li class="nav-item mx-lg-4">
                    <a class="filter-btn nav-link btn-outline-primary active shadow rounded-pill text-light px-4 light-300" href="#" data-filter=".project">All</a>
                </li>
                <li class="nav-item mx-lg-4">
                    <a class="filter-btn nav-link btn-outline-primary rounded-pill text-light px-4 light-300" href="#" data-filter=".graphic">Running</a>
                </li>
                <li class="filter-btn nav-item mx-lg-4">
                    <a class="filter-btn nav-link btn-outline-primary rounded-pill text-light px-4 light-300" href="#" data-filter=".ui">Completed</a>
                </li>
                <li class="nav-item mx-lg-4">
                    <a class="filter-btn nav-link btn-outline-primary rounded-pill text-light px-4 light-300" href="#" data-filter=".branding">Proposed</a>
                </li>
            </ul>
        </div>
    </div>

</section>

<section class="container overflow-hidden py-5">
    <div class="row gx-5 gx-sm-3 gx-lg-5 gy-lg-5 gy-3 pb-3 projects">

        <!-- Start Recent Work -->
        <div class="col-xl-3 col-md-4 col-sm-6 project ui branding">
            <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                <img class="service card-img" src="frontend/assets/img/services-01.jpg" alt="Card image">
                <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                    <div class="service-work-content text-left text-light">
                        <!-- <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300"></span> -->
                        <p class="card-text">Short Note About this Project</p>
                    </div>
                </div>
            </a>
        </div><!-- End Recent Work -->

        <!-- Start Recent Work -->
        <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic">
            <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                <img class="card-img" src="frontend/assets/img/services-02.jpg" alt="Card image">
                <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                    <div class="service-work-content text-left text-light">
                        <!-- <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300"></span> -->
                        <p class="card-text">Short Note About this Project</p>
                    </div>
                </div>
            </a>
        </div><!-- End Recent Work -->

        <!-- Start Recent Work -->
        <div class="col-xl-3 col-md-4 col-sm-6 project branding">
            <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                <img class="card-img" src="frontend/assets/img/services-03.jpg" alt="Card image">
                <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                    <div class="service-work-content text-left text-light">
                        <!-- <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300"></span> -->
                        <p class="card-text">Short Note About this Project</p>
                    </div>
                </div>
            </a>
        </div><!-- End Recent Work -->

        <!-- Start Recent Work -->
        <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic">
            <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                <img class="card-img" src="frontend/assets/img/services-04.jpg" alt="Card image">
                <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                    <div class="service-work-content text-left text-light">
                        <!-- <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300"></span> -->
                        <p class="card-text">Short Note About this Project</p>
                    </div>
                </div>
            </a>
        </div><!-- End Recent Work -->

        <!-- Start Recent Work -->
        <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic">
            <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                <img class="card-img" src="frontend/assets/img/services-05.jpg" alt="Card image">
                <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                    <div class="service-work-content text-left text-light">
                        <!-- <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300"></span> -->
                        <p class="card-text">Short Note About this Project</p>
                    </div>
                </div>
            </a>
        </div><!-- End Recent Work -->

        <!-- Start Recent Work -->
        <div class="col-xl-3 col-md-4 col-sm-6 project branding">
            <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                <img class="card-img" src="frontend/assets/img/services-06.jpg" alt="Card image">
                <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                    <div class="service-work-content text-left text-light">
                        <!-- <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300"></span> -->
                        <p class="card-text">Short Note About this Project</p>
                    </div>
                </div>
            </a>
        </div><!-- End Recent Work -->

        <!-- Start Recent Work -->
        <div class="col-xl-3 col-md-4 col-sm-6 project branding">
            <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                <img class="card-img" src="frontend/assets/img/services-07.jpg" alt="Card image">
                <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                    <div class="service-work-content text-left text-light">
                        <!-- <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300"></span> -->
                        <p class="card-text">Short Note About this Project</p>
                    </div>
                </div>
            </a>
        </div><!-- End Recent Work -->

        <!-- Start Recent Work -->
        <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic branding">
            <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                <img class="card-img" src="frontend/assets/img/services-08.jpg" alt="Card image">
                <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                    <div class="service-work-content text-left text-light">
                        <!-- <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300"></span> -->
                        <p class="card-text">Short Note About this Project</p>
                    </div>
                </div>
            </a>
        </div><!-- End Recent Work -->
        <!-- Start Recent Work -->
        <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic branding">
            <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                <img class="card-img" src="frontend/assets/img/services-08.jpg" alt="Card image">
                <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                    <div class="service-work-content text-left text-light">
                        <!-- <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300"></span> -->
                        <p class="card-text">Project Added by developer.</p>
                    </div>
                </div>
            </a>
        </div><!-- End Recent Work -->

    </div>
</section>
<!-- End Service -->
@endsection