@extends('site.layouts.app')

@section('title')
    Ürün Detayı
@endsection

@section('content')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt"
             style="background-image:url({{ asset('site/assets/images/hidro-cnc.png')  }});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">{{ $product->title }}</h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">
                            <li><a href="{{ route('front.home') }}">{{__('header.home')}}</a></li>
                            <li>{{ $product->title }}</li>
                        </ul>
                    </div>
                    <!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="section-full content-inner bg-white">
            <!-- Product details -->
            <div class="container woo-entry">
                <div class="row m-b30"	>
                    <div class="col-md-5 col-lg-5 col-sm-12">
                        <div class="col-lg-12 col-md-6 col-sm-12 col-12 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s">
                            <div class="radius-sm m-b30 img-ho1">
                                <img src="/storage/{{json_decode($product->image)[0]}}" alt=""/>
                            </div>
                        </div>

                        {{--<div class="product-gallery on-show-slider lightgallery m-r50 m-t20" id="lightgallery">
                            <div id="sync1" class="owl-carousel owl-theme owl-btn-center-lr m-b5 owl-btn-1 primary">
                                @foreach(json_decode($product->image) as $pro)
                                    <div class="item">
                                        <div class="mfp-gallery">
                                            <div class="dlab-box">
                                                <div class="dlab-thum-bx dlab-img-overlay1 ">
                                                    <img src="/storage/{{ $pro }}" alt="">
                                                    <div class="overlay-bx">
                                                        <div class="overlay-icon">
														<span data-exthumbimage="/storage/{{ $pro }}" data-src="/storage/{{ $pro }}" class="check-km" title="{{$product->title}}">
															<i class="ti-fullscreen"></i>
														</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div id="sync2" class="owl-carousel owl-theme owl-none">
                                @foreach(json_decode($product->image) as $pro)
                                    <div class="item" style="background-color: white">
                                        <div class="dlab-media">
                                            <img src="/storage/{{ $pro }}" alt="">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>--}}
                    </div>
                    <div class="col-md-7 col-lg-7 col-sm-12">
                        <form method="post" {{--class="cart sticky-top"--}}>
                            <div class="dlab-post-title">
                                <h4 class="post-title"><a href="javascript:void(0);">{{ $product->title }}</a></h4>
                                {{--<p class="m-b10">{!! $product->text !!}</p>--}}
                                <div class="dlab-divider bg-gray tb15">
                                    <i class="icon-dot c-square"></i>
                                </div>
                            </div>

                            <div class="dlab-divider bg-gray tb15">
                                <i class="icon-dot c-square"></i>
                            </div>
                            <div class="row">
                                <div class=" col-lg-12">
                                    <div class="dlab-tabs  product-description tabs-site-button">
                                        <ul class="nav nav-tabs ">
                                            <li><a data-bs-toggle="tab" href="#web-design-1" class="active"><i class="fas fa-globe"></i> {{__('product.description')}}</a></li>
                                            <li><a data-bs-toggle="tab" href="#graphic-design-1"><i class="far fa-image"></i> {{__('product.properties')}}</a></li>
                                            @if(isset($product->image_tecnical))
                                                <li><a data-bs-toggle="tab" href="#tecnical-details"><i class="far fa-image"></i> {{__('product.tecnical')}}</a></li>
                                            @endif

                                            {{--<li><a data-bs-toggle="tab" href="#developement-1"><i class="fas fa-cog"></i> Product Review</a></li>--}}
                                        </ul>
                                        <div class="tab-content">
                                            <div id="web-design-1" class="tab-pane active">
                                                <p class="m-b10">{!! $product->text !!}</p>

                                            </div>
                                            <div id="graphic-design-1" class="tab-pane">
                                                <p class="m-b10">{!! $product->properties !!}</p>
                                            </div>
                                            @if(isset($product->image_tecnical))
                                                <div id="tecnical-details" class="tab-pane">
                                                    <div class="dlab-media">
                                                        <img width="460" height="300" alt="" src="/storage/{{$product->image_tecnical}} ">
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                {{--<div class="row">
                    <div class="col-lg-12">
                        <h5 class="m-b20">{{__('product.related_product')}}</h5>
                        <div class="img-carousel-content owl-carousel owl-btn-center-lr owl-btn-1 primary">
                            @foreach($productAll as $item)
                                <div class="item">
                                    <div class="item-box">
                                        <div class="item-img">
                                            <img src="/storage/{{json_decode($item->image)[0]}}" alt="">
                                            <div class="item-info-in">
                                                <ul>
                                                    <li><a target="_blank"
                                                           href="{{ route('product.product-detail',$item->id)}}"><i
                                                                class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="item-info text-center text-black p-a10">
                                            <h6 class="item-title text-uppercase font-weight-500"><a
                                                    href="#">{{ $product->title }}</a></h6>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>--}}
                <!-- Our Project -->
                <div class="section-full content-inner-2 bg-white wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                    <div class="container">
                        <div class="section-head text-black text-center">
                            <h2 class="title">{{__('product.related_product')}}</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="img-carousel-dots-nav owl-theme owl-dots-none owl-carousel owl-btn-center-lr owl-btn-3">
                                    @foreach($productAll as $product)
                                        <div class="item">
                                            <div class="dlab-box project-bx">
                                                <div class="dlab-media radius-sm dlab-img-overlay1 dlab-img-effect zoom">
                                                    <a href="{{ route('product.product-detail',$product->id) }}"><img src="/storage/{{json_decode($product->image)[0]}}" alt=""></a>
                                                </div>

                                            </div>
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
            </div>
            <!-- Product details -->
        </div>
        <!-- contact area  END -->
    </div>
    <!-- Content END-->
@endsection

@section('js')
    <script src="{{ asset('site/assets/js/jquery.star-rating-svg.js') }}"></script>
    <script>
        $(document).ready(function () {

            var sync1 = $("#sync1");
            var sync2 = $("#sync2");
            var slidesPerPage = 4; //globaly define number of elements per page
            var syncedSecondary = true;

            sync1.owlCarousel({
                items: 1,
                slideSpeed: 2000,
                nav: true,
                autoplay: false,
                dots: false,
                loop: true,
                responsiveRefreshRate: 200,
                navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
            }).on('changed.owl.carousel', syncPosition);

            sync2.on('initialized.owl.carousel', function () {
                sync2.find(".owl-item").eq(0).addClass("current");
            }).owlCarousel({
                items: slidesPerPage,
                dots: false,
                nav: false,
                margin: 5,
                smartSpeed: 200,
                slideSpeed: 500,
                slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
                responsiveRefreshRate: 100
            }).on('changed.owl.carousel', syncPosition2);

            function syncPosition(el) {
                //if you set loop to false, you have to restore this next line
                //var current = el.item.index;

                //if you disable loop you have to comment this block
                var count = el.item.count - 1;
                var current = Math.round(el.item.index - (el.item.count / 2) - .5);

                if (current < 0) {
                    current = count;
                }
                if (current > count) {
                    current = 0;
                }

                //end block

                sync2
                    .find(".owl-item")
                    .removeClass("current")
                    .eq(current)
                    .addClass("current");
                var onscreen = sync2.find('.owl-item.active').length - 1;
                var start = sync2.find('.owl-item.active').first().index();
                var end = sync2.find('.owl-item.active').last().index();

                if (current > end) {
                    sync2.data('owl.carousel').to(current, 100, true);
                }
                if (current < start) {
                    sync2.data('owl.carousel').to(current - onscreen, 100, true);
                }
            }

            function syncPosition2(el) {
                if (syncedSecondary) {
                    var number = el.item.index;
                    sync1.data('owl.carousel').to(number, 100, true);
                }
            }

            sync2.on("click", ".owl-item", function (e) {
                e.preventDefault();
                var number = $(this).index();
                //sync1.data('owl.carousel').to(number, 300, true);

                sync1.data('owl.carousel').to(number, 300, true);

            });
        });
    </script>
@endsection
