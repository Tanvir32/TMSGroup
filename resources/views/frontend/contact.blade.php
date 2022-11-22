@extends('layouts.frontend')
@section('content')
    <!-- Start Banner Hero -->
    <section class="w-100 text-white" style="background-color: #041c2d!important">
        <div class="container py-4">
            <div class="row align-items-center justify-content-between">
                <div class="contact-header col-lg-4">
                    <h1 class="h2 pb-3">Contact</h1>
                    <p class="light-300">
                        For any query please fill the below form and send message to us
                    </p>
                </div>
                <div class="contact-img col-lg-5 align-items-end col-md-4">
                    <img src="frontend/assets/img/banner-img-01.svg">
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Hero -->


    <!-- Start Contact -->
    <section class="container py-5">

        <div class="row pb-4">
            <div class="col-lg-4 text-white">

                <div class="contact row mb-4">
                    <div class="contact-icon col-lg-3 col-3">
                        <div class="py-3 mb-2 text-center border rounded text-secondary">
                            <i class='display-6 text-white bx bx-phone color-brand'></i>
                        </div>
                    </div>
                    <ul class="contact-info list-unstyled col-lg-9 col-9  light-300">
                        <li class="h5 mb-0">Marketing & Sales</li>
                        <li class="text-white">Enge.Md.Tajul Islam</li>
                        <li class="text-white">01713269679</li>
                    </ul>
                </div>

                <div class="contact row mb-4">
                    <div class="contact-icon col-lg-3 col-3">
                        <div class="border py-3 mb-2 text-center border rounded text-secondary">
                            <i class='bx text-white bx-phone display-6 color-brand'></i>
                        </div>
                    </div>
                    <ul class="contact-info list-unstyled col-lg-9 col-9 light-300">
                        <li class="h5 mb-0">Managing Director</li>
                        <li class="text-white">Hawlader Md.Mostofa Rahman</li>
                        <li class="text-white">01713994291</li>
                    </ul>
                </div>

                <div class="contact row mb-4">
                    <div class="contact-icon col-lg-3 col-3">
                        <div class="border py-3 mb-2 text-center border rounded text-secondary">
                            <i class='bx text-white bx-phone display-6 color-brand'></i>
                        </div>
                    </div>
                    <ul class="contact-info list-unstyled col-lg-9 col-9 light-300">
                        <li class="h5 mb-0"> Project Engineer Civil</li>
                        <li class="text-white">Md.Majedur Rahman</li>
                        <li class="text-white">01713419806</li>
                    </ul>
                </div>

            </div>


            <!-- Start Contact Form -->
            <div class="col-lg-8 ">
                <form class="contact-form row" method="post" action="{{ route('mail.send') }}" role="form">
                    @csrf
                    @if (Session::has('error'))
                        <div class="alert alert-danger">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <div class="col-lg-6 mb-4">
                        <div class="form-floating">
                            <input type="text" class="form-control form-control-lg light-300" id="floatingname"
                                name="name" placeholder="Name" value="{{ old('name') }}">
                            <label for="floatingname light-300">Name</label>
                            @error('name')
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @enderror
                        </div>
                    </div><!-- End Input Name -->

                    <div class="col-lg-6 mb-4">
                        <div class="form-floating">
                            <input type="email" class="form-control form-control-lg light-300" id="floatingemail"
                                name="email" placeholder="Email" value="{{ old('email') }}">
                            <label for="floatingemail light-300">Email</label>
                            @error('email')
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @enderror
                        </div>
                    </div><!-- End Input Email -->

                    <div class="col-lg-6 mb-4">
                        <div class="form-floating">
                            <input type="text" class="form-control form-control-lg light-300" id="floatingphone"
                                name="mobile" placeholder="Phone" value="{{ old('mobile') }}">
                            <label for="floatingphone light-300">Phone</label>
                            @error('mobile')
                                <span class="text-danger">{{ $errors->first('mobile') }}</span>
                            @enderror
                        </div>
                    </div><!-- End Input Phone -->

                    <div class="col-lg-6 mb-4">
                        <div class="form-floating">
                            <input type="text" class="form-control form-control-lg light-300" id="floatingcompany"
                                name="companyName" placeholder="Company Name" value="{{ old('companyName') }}">
                            <label for="floatingcompany light-300">Company Name</label>
                            @error('companyName')
                                <span class="text-danger">{{ $errors->first('companyName') }}</span>
                            @enderror
                        </div>
                    </div><!-- End Input Company Name -->

                    <div class="col-12">
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control form-control-lg light-300" id="floatingsubject"
                                name="subject" placeholder="Subject" value="{{ old('subject') }}">
                            <label for="floatingsubject light-300">Subject</label>
                            @error('subject')
                                <span class="text-danger">{{ $errors->first('subject') }}</span>
                            @enderror
                        </div>
                    </div><!-- End Input Subject -->

                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <textarea class="form-control light-300" value="{{ old('message') }}" rows="8" placeholder="Message"
                                id="floatingtextarea" name="message"></textarea>
                            <label for="floatingtextarea light-300">Message</label>
                            @error('message')
                                <span class="text-danger">{{ $errors->first('message') }}</span>
                            @enderror
                        </div>
                    </div><!-- End Textarea Message -->

                    <div class="col-md-12 col-12 m-auto text-end">
                        <button type="submit"
                            class="btn btn-primary rounded-pill px-md-5 px-4 py-2 radius-0 text-light light-300">Send
                            Message</button>
                    </div>

                </form>
            </div>
            <!-- End Contact Form -->


        </div>
    </section>
    <!-- End Contact -->
@endsection
