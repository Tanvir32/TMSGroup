@extends('layouts.frontend')

<link rel="apple-touch-icon" type="image/png"
    href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png">
<meta name="apple-mobile-web-app-title" content="CodePen">

<link rel="shortcut icon" type="image/x-icon"
    href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">

<link rel="mask-icon" type="image/x-icon"
    href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg"
    color="#111">





<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.3/css/lightgallery-bundle.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">


<script>
    window.console = window.console || function(t) {};
</script>



<script>
    if (document.location.search.match(/type=embed/gi)) {
        window.parent.postMessage("resize", "*");
    }
</script>

<style>
    .service-img>img{

    }
</style>

</head>

<body translate="no" style="position: relative;" class="">

    @section('content')


        <!-- Start Banner Hero -->
<div class="slider-area bg-nav py-1">
    <div class="container">
        <div id="wowslider-container1">
            <div class="ws_images"><ul>
                {{-- <li><img src="frontend/assets/wowslider/data1/images/slider1.png" alt="mr-slider-1" id="wows1_0"/></li> --}}
                <li><img src="frontend/assets/wowslider/data1/images/mrslider1.jpg" alt="mr-slider-2" id="wows1_1"/></li>
                <li><img src="frontend/assets/wowslider/data1/images/mrslider2.jpg" alt="mr-slider-3" id="wows1_2"/></li>
                <li><img src="frontend/assets/wowslider/data1/images/mrslider3.jpg" alt="mr-slider-4" id="wows1_3"/></li>
                <li><img src="frontend/assets/wowslider/data1/images/mrslider5.jpg" alt="mr-slider-5" id="wows1_4"/></li>
                <li><img src="frontend/assets/wowslider/data1/images/slide051.jpg" alt="mr-slider-5" id="wows1_4"/></li>
                @if ($banners)
                    @foreach ($banners as $banner)
                    <li><img src="frontend/assets/wowslider/data1/images/{{$banner->banner}}" alt="mr-slder-{{$loop->index}}" id="wows1_{{$loop->index}}"/></li>
                    @endforeach
                @else
                    <span>No Banner Found in Database</span>
                @endif
            </ul></div>
            <div class="ws_bullets"><div>
                {{-- <a href="#"><span><img src="frontend/assets/wowslider/data1/tooltips/slider1.png" alt="mr-slider-1"/>1</span></a> --}}
                <a href="#"><span><img src="frontend/assets/wowslider/data1/tooltips/mrslider1.jpg" alt="mr-slider-2"/>2</span></a>
                <a href="#"><span><img src="frontend/assets/wowslider/data1/tooltips/mrslider2.jpg" alt="mr-slider-3"/>3</span></a>
                <a href="#"><span><img src="frontend/assets/wowslider/data1/tooltips/mrslider3.jpg" alt="mr-slider-4"/>4</span></a>
                <a href="#"><span><img src="frontend/assets/wowslider/data1/tooltips/mrslider5.jpg" alt="mr-slider-5"/>5</span></a>
                <a href="#"><span><img src="frontend/assets/wowslider/data1/tooltips/slide051.jpg" alt="mr-slider-5"/>5</span></a>
                @if ($banners)
                    @foreach ($banners as $banner)
                    <a href="#"><span><img src="frontend/assets/wowslider/data1/tooltips/{{$banner->banner}}" alt="mr-sider-{{$loop->index}}"/>5</span></a>
                    @endforeach
                @endif
            </div></div>
            <div class="ws_shadow"></div>
            </div>
    </div>
</div>


<section class=" mb-5 company-bg text-white">
    <div class="container">
        <div class="recent-work-header row text-center pb-2">
            <h3 class="col-md-6 m-auto semi-bold-600 py-1">Our Companies</h3>
        </div>
        <div class="row gy-3 g-lg-4 mb-2">

            @foreach ($companies as $company)
            <div class="col-md-3 mb-1">
                <a href="{{ $company->url }}" target="blank" class="recent-work card border-0 shadow-lg overflow-hidden">
                    <img class="recent-work-img card-img" src="frontend/assets/img/companies/{{ $company->logo }}" alt="{{ $company->name }}">
                    <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                        <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                            {{-- <h5 class="card-title">Brother's Steel & Construction Ltd.</h5> --}}
                            {{-- <p class="card-text">Ullamco laboris nisi ut aliquip ex</p> --}}
                        </div>
                    </div>
                </a>
                <p  class="mt-1">{{ $company->name }}</p>
            </div>
            @endforeach

        </div>
    </div>
</section>

<section class=" mb-5 company-bg text-white">
    <div class="container">
        <div class="recent-work-header row text-center pb-2">
            <h3 class="col-md-6 m-auto semi-bold-600 py-1">Our Services</h3>
        </div>
        <div class="row gy-3 g-lg-4 mb-2">
            @foreach ($services as $service)
            <div class="col-md-3 mb-1">
                <div class="service-img">
                    <img class="card-img" width="100%" height="auto" src="frontend/assets/img/services/{{ $service->image }}" alt="{{ $service->name }}">
                    <div class="d-flex align-items-end">
                        <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                            {{-- <h5 class="card-title">Brother's Steel & Construction Ltd.</h5> --}}
                            {{-- <p class="card-text">Ullamco laboris nisi ut aliquip ex</p> --}}
                        </div>
                    </div>
                </div>
                <p  class="mt-1 text-center">{{ $service->name }}</p>
            </div>
            @endforeach

        </div>
    </div>
</section>

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
                    <a class="filter-btn nav-link btn-outline-primary rounded-pill text-light px-4 light-300" href="#" data-filter=".Running">Running</a>
                </li>
                <li class="filter-btn nav-item mx-lg-4">
                    <a class="filter-btn nav-link btn-outline-primary rounded-pill text-light px-4 light-300" href="#" data-filter=".Completed">Completed</a>
                </li>
                <li class="nav-item mx-lg-4">
                    <a class="filter-btn nav-link btn-outline-primary rounded-pill text-light px-4 light-300" href="#" data-filter=".Proposed">Proposed</a>
                </li>
            </ul>
        </div>
    </div>

</section>


<section class="container overflow-hidden py-5" id="project_galary">
    <div class="row gx-5 gx-sm-3 gx-lg-5 gy-lg-5 gy-3 pb-3 projects">


        @foreach ($projects as $project )
            <div class="col-xl-3 col-md-4 col-sm-6 project {{ $project->status }}" onclick="openGalaryDif({{ $project->id }})">
            <a  class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                <img class="card-img" style="height: 200px; object-fit:cover;" src="{{ asset("frontend/assets/img/project") ."/". $project->image }}" alt="Card image">
                <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                    <div class="service-work-content text-left text-light">
                        <!-- <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300"></span> -->
                        <p class="card-text">{{ $project->title }}</p>
                    </div>
                </div>
            </a>
        </div>
        @endforeach


    </div>



</section>



    @endsection
    <script
        src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.3/lightgallery.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.3/plugins/thumbnail/lg-thumbnail.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.3/plugins/zoom/lg-zoom.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.3/plugins/video/lg-video.umd.js"></script>
    <script id="rendered-js">
        let name = 'Tuhin';

        const newGalary = new Object();

        newGalary.src =
            "https://images.unsplash.com/photo-1477322524744-0eece9e79640?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1400&q=80";
        newGalary.thumb =
            "https://images.unsplash.com/photo-1477322524744-0eece9e79640?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1400&q=80";
        newGalary.subHtml = `<div class="lightGallery-captions">
                <h4>Photo by <a href="https://unsplash.com/@brookecagle">Brooke ${name} Cagle</a></h4>
                <p>Description of the slide 1</p>
            </div>`;
        const newGalary2 = new Object();

        newGalary2.src =
            "https://images.unsplash.com/photo-1477322524744-0eece9e79640?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1400&q=80";
        newGalary2.thumb =
            "https://images.unsplash.com/photo-1477322524744-0eece9e79640?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1400&q=80";



        const galArr = [newGalary, newGalary2];
        let galArr2 = [newGalary];
        let galArr5 = galArr2;
        console.log(galArr);

        function openGalary() {

            const newItems = [{
                    src: 'https://images.unsplash.com/photo-1641962868253-fe637e5bd228?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80',

                    subHtml: '<h4>Image 4 title</h4><p>Image 4 descriptions.</p>',
                },
                {
                    src: 'https://images.unsplash.com/photo-1641962868253-fe637e5bd228?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80',

                    subHtml: '<h4>Image 5 title</h4><p>Image 5 descriptions.</p>',
                },
            ];
            const updatedDynamicElements = [...newItems];
            const plugin = lightGallery();
            dynamicGallery.destroy();
            dynamicGallery.refresh(updatedDynamicElements);

            // To open gallery after updating slides,

            dynamicGallery.openGallery();
        }










        function openGalary2() {

            //  previous dynamic-gallery-demo
            const $dynamicGallery = document.getElementById("project_galary");
            const dynamicGallery = window.lightGallery($dynamicGallery, {
                dynamic: true,
                plugins: [lgZoom, lgVideo, lgThumbnail],
                dynamicEl: galArr
            });




            dynamicGallery.openGallery(0);
        }

        function openGalaryDif(pID) {
            let id = pID;
            let newItems = new Array();
            let url = "{{ route('galaryByProject', ':id') }}";
            url = url.replace(':id', id);
            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'json', // added data type
                success: function(res) {
                    imageURL = "{{ URL::asset('/frontend/assets/img/galary/') }}";
                    galaryData = res.data;
                    console.log(imageURL);
                    if (galaryData.length == 0) {
                        let tempData = new Object();
                        tempData.src = imageURL+`/`+"no_image.jpg";
                            ;
                        tempData.thumb =imageURL+`/`+"no_image.jpg";
                            ;

                        tempData.subHtml = '<h4>Sorry</h4><p>No Image for this project.</p>';
                        newItems.push(tempData);
                        show(newItems);
                    } else {

                        galaryData.forEach(element => {
                            let tempData = new Object();
                            tempData.src = imageURL+`/`+ element.project_image;

                            tempData.thumb = imageURL+`/`+ element.project_image;

                            tempData.subHtml = `<h4>${element.title}</h4><p>${element.image_title}.</p>`;
                            newItems.push(tempData);
                        });

                        show(newItems);

                    }



                }
            });
        }

        function show(newItems) {
            const $dynamicGallery = document.getElementById("project_galary");
            const dynamicGallery = window.lightGallery($dynamicGallery, {
                dynamic: true,
                plugins: [lgZoom, lgVideo, lgThumbnail],
                dynamicEl: newItems
            });
            dynamicGallery.openGallery();
        }
    </script>









</body>

</html>
