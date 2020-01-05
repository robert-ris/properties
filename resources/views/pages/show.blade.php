@extends('layouts.app')

@push('css')

@endpush

@section('content')


    @include('inc.navbar')

    <div class="site-wrap">

        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div> <!-- .site-mobile-menu -->

        <div class="border-bottom bg-white top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-6 col-md-6">
                        <p class="mb-0">
                            <a href="#" class="mr-3"><span class="text-black fl-bigmug-line-phone351"></span> <span class="d-none d-md-inline-block ml-2">+2 102 3923 3922</span></a>
                            <a href="#"><span class="text-black fl-bigmug-line-email64"></span> <span class="d-none d-md-inline-block ml-2">info@domain.com</span></a>
                        </p>
                    </div>
                    <div class="col-6 col-md-6 text-right">
                        <a href="#" class="mr-3"><span class="text-black icon-facebook"></span></a>
                        <a href="#" class="mr-3"><span class="text-black icon-twitter"></span></a>
                        <a href="#" class="mr-0"><span class="text-black icon-linkedin"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-blocks-cover overlay" style="background-image: url({{ url('/properties/images/hero_bg_2.jpg') }});" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-10">
                    <span class="d-inline-block text-white px-3 mb-3 property-offer-type rounded">Property Details of</span>
                    <h1 class="mb-2">{{ $property->address }}</h1>
                    <p class="mb-5"><strong class="h2 text-success font-weight-bold">${{ $property->price }}</strong></p>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section site-section-sm">
        <div class="container">
            <div class="row">
                <div class="col-lg-8" style="margin-top: -150px;">
                    <div class="mb-5">
                            <img src="/storage/cover_image/{{ $property->cover_image }}" alt="Image" class="img-fluid">
                    </div>
                    <div class="bg-white">
                        <div class="row mb-5">
                            <div class="col-md-6">
                                <strong class="text-success h1 mb-3">${{ $property->price }}</strong>
                            </div>
                            <div class="col-md-6">
                                <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
                                    <li>
                                        <span class="property-specs">Beds</span>
                                        <span class="property-specs-number">{{ $property->beds }} <sup>+</sup></span>

                                    </li>
                                    <li>
                                        <span class="property-specs">Baths</span>
                                        <span class="property-specs-number">{{ $property->baths }}</span>

                                    </li>
                                    <li>
                                        <span class="property-specs">Area</span>
                                        <span class="property-specs-number">{{ $property->area }}</span>

                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h2 class="h4 text-black">More Info</h2>
                        <p>{{ $property->description }}</p>
                    </div>
                </div>
                <div class="col-lg-4 pl-md-5">
                    <div class="bg-white widget border rounded">
                        <h3 class="h4 text-black widget-title mb-3">Paragraph</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit qui explicabo, libero nam, saepe eligendi. Molestias maiores illum error rerum. Exercitationem ullam saepe, minus, reiciendis ducimus quis. Illo, quisquam, veritatis.</p>
                    </div>

                </div>

            </div>
        </div>
    </div>
        @include('inc.footer')
        @endsection

@push('js')
    <script src="{{ asset('properties/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('properties/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('properties/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('properties/js/popper.min.js') }}"></script>
    <script src="{{ asset('properties/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('properties/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('properties/js/mediaelement-and-player.min.js') }}"></script>
    <script src="{{ asset('properties/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('properties/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('properties/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('properties/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('properties/js/aos.js') }}"></script>

    <script src="{{ asset('properties/js/main.js') }}"></script>
@endpush