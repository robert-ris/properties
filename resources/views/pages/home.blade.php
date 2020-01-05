@extends('layouts.app')

@push('css')

@endpush

@section('content')

@include('inc.navbar')

    <div class="site-loader"></div>

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

    <div class="slide-one-item home-slider owl-carousel">

        <div class="site-blocks-cover" style="background-image: url({{ url('/properties/images/hero_bg_1.jpg') }});" data-aos="fade" data-stellar-background-ratio="0.5">

            <div class="text">
                <h2>853 S Lucerne Blvd</h2>
                <p class="location"><span class="property-icon icon-room"></span> Los Angeles, CA 90005</p>
                <p class="mb-2"><strong>$2,250,500</strong></p>


                <p class="mb-0"><a href="property-details.html" class="text-uppercase small letter-spacing-1 font-weight-bold">More Details</a></p>

            </div>
        </div>

        <div class="site-blocks-cover" style="background-image: url({{ url('/properties/images/hero_bg_3.jpg') }});" data-aos="fade" data-stellar-background-ratio="0.5">

            <div class="text">
                <h2>625 S. Berendo St</h2>
                <p class="location"><span class="property-icon icon-room"></span>607 Los Angeles, CA 90005</p>
                <p class="mb-2"><strong>$2,250,500</strong></p>
                <p class="mb-0"><a href="#" class="text-uppercase small letter-spacing-1 font-weight-bold">More Details</a></p>
            </div>
        </div>
    </div>
    <div class="site-section site-section-sm bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <div class="site-section-title">
                        <h2>New Properties for You</h2>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                @foreach($properties as $property)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <a href="/property/{{ $property->id }}" class="prop-entry d-block">
                            <figure>
                                <img src="storage/cover_image/{{ $property->cover_image }}" alt="Image" class="img-fluid">
                            </figure>
                            <div class="prop-text">
                                <div class="inner">
                                    <span class="price rounded">${{$property->price}}</span>
                                    <h3 class="title">{{ $property->country }}</h3>
                                    <p class="location">{{ $property->city }}</p>
                                </div>
                                <div class="prop-more-info">
                                    <div class="inner d-flex">
                                        <div class="col">
                                            <span>Area:</span>
                                            <strong>{{ $property->area }}<sup>2</sup></strong>
                                        </div>
                                        <div class="col">
                                            <span>Beds:</span>
                                            <strong>{{ $property->beds }}</strong>
                                        </div>
                                        <div class="col">
                                            <span>Baths:</span>
                                            <strong>{{ $property->baths }}</strong>
                                        </div>
                                        <div class="col">
                                            <span>Garages:</span>
                                            <strong>{{ $property->garages }}</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            {{$properties->links()}}
        </div>
    </div>

    <div class="container">
{{--        {!! $map['html'] !!}--}}
    </div>
    <br>
    @include('inc.footer')

@endsection

@push('js')

{{--    {{!! $map['js'] !!}}--}}
@endpush