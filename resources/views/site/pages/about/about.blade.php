@extends('site.layouts.app')

@section('title')
    Hakkımızda
@endsection

@section('content')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle text-center bg-pt"
             style="background-image:url({{ asset('site/assets/images/hurkonsan1.png') }});">
            <div class="container">
                <div class="dlab-bnr-inr-entry align-m text-center">
                    <h1 class="text-white">{{__('header.about_us')}}</h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">
                            <li><a href="{{ route('front.home') }}">{{__('header.home')}}</a></li>
                            <li>{{__('header.about_us')}}</li>
                        </ul>
                    </div>
                    <!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-block">
            <!-- About Services info -->
            <div class="section-full content-inner bg-white video-section"
                 style="background-image:url('{{ asset('site/assets/images/background/bg-video.png') }}');">
                <div class="container">
                    <div class="section-content">
                        <div class="row d-flex">
                                {{--<div class="col-lg-6 col-md-12 m-t50 our-story-thum">
                                    <img  src="{{ asset('site/assets/images/hidroweb22.png') }}" class="radius-sm" alt="">
                                </div>--}}

                            <div class="col-lg-9 col-md-12 m-b30 align-self-center video-infobx">
                                <div class="content-bx1">
                                    <h2 class="m-b15 title">{{__('about.About_Our_Company')}}{{--<br><span class="text-primary">Hakkında</span>--}}
                                    </h2>
                                    <p class="m-b30">{!! $about->text !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Services info END -->
            {{--<!-- Counter -->
            <div class="section-full content-inner overlay-black-dark bg-img-fix"
                 style="background-image:url({{ asset('site/assets/images/background/bg1.jpg') }});">
                <div class="container">
                    <div class="section-content text-center text-white">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                                <div class="counter-style-5">
                                    <div class="">
                                        <span class="counter">6810</span>
                                    </div>
                                    <span class="counter-text">Passionate Employee</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                                <div class="counter-style-5">
                                    <div class="">
                                        <span class="counter">4060</span>
                                    </div>
                                    <span class="counter-text">Modern Factory</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                                <div class="counter-style-5">
                                    <div class="">
                                        <span class="counter">3164</span>
                                    </div>
                                    <span class="counter-text">Factory in Worldwide</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                                <div class="counter-style-5">
                                    <div class="">
                                        <span class="counter">1852</span>
                                    </div>
                                    <span class="counter-text">International Awards</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Counter END -->--}}

            <!-- Our Project -->
            <div class="section-full content-inner-2 bg-white wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                <div class="container">
                    <div class="section-head text-black text-center">
                        <h2 class="title">{{__('product.related_product')}}</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="img-carousel-dots-nav owl-theme owl-dots-none owl-carousel owl-btn-center-lr owl-btn-3">
                                @foreach($lastProducts as $product)
                                    <div class="item">
                                        <a href="{{ route('product.product-detail',$product->id) }}">
                                            <div class="dlab-media radius-sm dlab-img-overlay1 dlab-img-effect zoom">
                                                <img src="/storage/{{json_decode($product->image)[0]}}" alt="{{$product->title}}">
                                            </div>
                                        </a>
                                        <div class="dlab-info">
                                            <h5 class="dlab-title"><a href="{{ route('product.product-detail',$product->id) }}">{{$product->title}}</a></h5>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Our Project END -->

            <!-- Testimonials -->
            <div class="section-full content-inner-2 bg-white">
                <div class="container">
                    <div class="section-head text-black text-center">

                        <h2 class="title">{{__('homePage.reviws_customer')}}</h2>
                        <p>{{__('homePage.reviws_customer2')}}</p>

                    </div>
                    <div class="testimonial-six owl-loaded owl-theme owl-carousel owl-none dots-style-2">
                        @foreach($customerReview as $item)
                            <div class="item">
                                <div class="testimonial-8">
                                    <div class="testimonial-text">
                                        <p>{!! $item->review !!}</p>
                                    </div>
                                    <div class="testimonial-detail clearfix">
                                        <div class="testimonial-pic radius shadow"><img
                                                src="/storage/{{ $item->image }}" width="100"
                                                height="100" alt=""></div>
                                        <h5 class="testimonial-name m-t0 m-b5">{{ $item->name }}</h5> <span
                                            class="testimonial-position">{{ $item->job }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Testimonials END -->
        </div>
        <!-- contact area END -->
    </div>
    <!-- Content END -->
@endsection
