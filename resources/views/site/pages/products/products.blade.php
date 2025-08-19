@extends('site.layouts.app')

@section('title')
    Ürünler
@endsection

@section('content')

    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url({{ asset('site/assets/images/hidro-cnc.png') }});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">{{__('header.products')}}</h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">
                            <li><a href="{{ route('front.home') }}">{{__('header.home')}}</a></li>
                            <li>{{__('header.products')}}</li>
                        </ul>
                    </div>
                    <!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-block">
            <!-- Portfolio  -->
            <div class="section-full content-inner-2 portfolio text-uppercase bg-white" id="portfolio">
                <div class="container">
                    <div class="site-filters clearfix center  m-b40">
                        <ul class="filters" data-bs-toggle="buttons">
                            <li data-filter="" class="btn active">
                                <input type="radio">
                                <a href="javascript:void(0);" class="site-button-secondry button-sm radius-xl"><span>{{__('product.all_product')}}</span></a>
                            </li>
                            @foreach($categories as $category)
                                {{--<li data-filter="{{$category->name}}" class="btn">
                                    <input type="radio">
                                    <a href="javascript:void(0);" class="site-button-secondry button-sm radius-xl"><span>{{$category->name}}</span></a>
                                </li>--}}
                                <li data-filter="{{$category->id}}" class="btn">
                                    <input type="radio">
                                    <a href="javascript:void(0);" class="site-button-secondry button-sm radius-xl"><span>{{$category->name}}</span></a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="clearfix" id="lightgallery">
                        <ul id="masonry" class=" portfolio-ic dlab-gallery-listing gallery-grid-4 gallery lightgallery text-center">
                            @foreach($products as $product)
                                <li class="{{$product->category->id}} design card-container col-lg-3 col-md-6 col-sm-6 p-a0">
                                <div class="dlab-box dlab-gallery-box">
                                    <div class="dlab-media dlab-img-overlay1 dlab-img-effect">
                                        <a href="portfolio-details.html"> <img src="/storage/{{json_decode($product->image)[0]}}"  alt="{{$product->title}}"> </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <div class="text-white">
                                                    <a href="{{route('product.product-detail',$product->id)}}"><i class="fas fa-link icon-bx-xs"></i></a>
                                                    <span data-exthumbimage="/storage/{{json_decode($product->image)[0]}}" data-src="/storage/{{json_decode($product->image)[0]}}" class="check-km" title="{{$product->title}}">
														<i class="far fa-image icon-bx-xs"></i>
													</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dez-info p-a30 bg-white" >
                                        <p class="dez-title m-t0"><a href="{{route('product.product-detail',$product->id)}}">{{$product->title}}</a></p>
                                        {{--<p><small>System</small></p>--}}
                                    </div>
                                </div>
                            </li>
                            @endforeach

                            {{--<li class="advertising branding photography card-container col-lg-3 col-md-6 col-sm-6 p-a0">
                                <div class="dlab-box dlab-gallery-box">
                                    <div class="dlab-media dlab-img-overlay1 dlab-img-effect dlab-img-effect ">
                                        <a href="portfolio-details.html"> <img src="images/portfolio/image_2.jpg"  alt=""> </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <div class="text-white">
                                                    <a href="portfolio-details.html"><i class="fas fa-link icon-bx-xs"></i></a>
                                                    <span data-exthumbimage="images/portfolio/image_2.jpg" data-src="images/portfolio/image_2.jpg" class="check-km" title="Factory Managment">
														<i class="far fa-image icon-bx-xs"></i>
													</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dez-info p-a30 bg-white">
                                        <p class="dez-title m-t0"><a href="portfolio-details.html">Mining Plant Set Up</a></p>
                                        <p><small>Mining / Plants</small></p>
                                    </div>
                                </div>
                            </li>
                            <li class="branding design photography card-container col-lg-3 col-md-6 col-sm-6 p-a0">
                                <div class="dlab-box dlab-gallery-box">
                                    <div class="dlab-media dlab-img-overlay1 dlab-img-effect">
                                        <a href="portfolio-details.html"> <img src="images/portfolio/image_3.jpg"  alt=""> </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <div class="text-white">
                                                    <a href="portfolio-details.html"><i class="fas fa-link icon-bx-xs"></i></a>
                                                    <span data-exthumbimage="images/portfolio/image_3.jpg" data-src="images/portfolio/image_3.jpg" class="check-km" title="Factory Managment">
														<i class="far fa-image icon-bx-xs"></i>
													</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dez-info p-a30 bg-white">
                                        <p class="dez-title m-t0"><a href="portfolio-details.html">sanfran cisco bridge</a></p>
                                        <p><small>Engineering</small></p>
                                    </div>
                                </div>
                            </li>
                            <li class="web design card-container col-lg-3 col-md-6 col-sm-6 p-a0">
                                <div class="dlab-box dlab-gallery-box">
                                    <div class="dlab-media dlab-img-overlay1 dlab-img-effect">
                                        <a href="portfolio-details.html"> <img src="images/portfolio/image_4.jpg"  alt=""> </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <div class="text-white">
                                                    <a href="portfolio-details.html"><i class="fas fa-link icon-bx-xs"></i></a>
                                                    <span data-exthumbimage="images/portfolio/image_4.jpg" data-src="images/portfolio/image_4.jpg" class="check-km" title="Factory Managment">
														<i class="far fa-image icon-bx-xs"></i>
													</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dez-info p-a30 bg-white">
                                        <p class="dez-title m-t0"><a href="portfolio-details.html">hamburg wind energy</a></p>
                                        <p><small>Energy</small></p>
                                    </div>
                                </div>
                            </li>
                            <li class="web branding card-container col-lg-3 col-md-6 col-sm-6 p-a0">
                                <div class="dlab-box dlab-gallery-box">
                                    <div class="dlab-media dlab-img-overlay1 dlab-img-effect">
                                        <a href="portfolio-details.html"> <img src="images/portfolio/image_5.jpg"  alt=""> </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <div class="text-white">
                                                    <a href="portfolio-details.html"><i class="fas fa-link icon-bx-xs"></i></a>
                                                    <span data-exthumbimage="images/portfolio/image_5.jpg" data-src="images/portfolio/image_5.jpg" class="check-km" title="Factory Managment">
														<i class="far fa-image icon-bx-xs"></i>
													</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dez-info p-a30 bg-white">
                                        <p class="dez-title m-t0"><a href="portfolio-details.html">Capturing Manila</a></p>
                                        <p><small>industry</small></p>
                                    </div>
                                </div>
                            </li>
                            <li class="advertising design photography card-container col-lg-3 col-md-6 col-sm-6 p-a0">
                                <div class="dlab-box dlab-gallery-box">
                                    <div class="dlab-media dlab-img-overlay1 dlab-img-effect ">
                                        <a href="portfolio-details.html"> <img src="images/portfolio/image_6.jpg"  alt=""> </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <div class="text-white">
                                                    <a href="portfolio-details.html"><i class="fas fa-link icon-bx-xs"></i></a>
                                                    <span data-exthumbimage="images/portfolio/image_6.jpg" data-src="images/portfolio/image_6.jpg" class="check-km" title="Factory Managment">
														<i class="far fa-image icon-bx-xs"></i>
													</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dez-info p-a30 bg-white">
                                        <p class="dez-title m-t0"><a href="portfolio-details.html">berlin central bank</a></p>
                                        <p><small>Bank / Constructions</small></p>
                                    </div>
                                </div>
                            </li>
                            <li class="web branding card-container col-lg-3 col-md-6 col-sm-6 p-a0">
                                <div class="dlab-box dlab-gallery-box">
                                    <div class="dlab-media dlab-img-overlay1 dlab-img-effect">
                                        <a href="portfolio-details.html"> <img src="images/portfolio/image_7.jpg"  alt=""> </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <div class="text-white">
                                                    <a href="portfolio-details.html"><i class="fas fa-link icon-bx-xs"></i></a>
                                                    <span data-exthumbimage="images/portfolio/image_7.jpg" data-src="images/portfolio/image_7.jpg" class="check-km" title="Factory Managment">
														<i class="far fa-image icon-bx-xs"></i>
													</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dez-info p-a30 bg-white">
                                        <p class="dez-title m-t0"><a href="portfolio-details.html">Crop Identity</a></p>
                                        <p><small>Branding and Identity</small></p>
                                    </div>
                                </div>
                            </li>
                            <li class="advertising design photography card-container col-lg-3 col-md-6 col-sm-6 p-a0">
                                <div class="dlab-box dlab-gallery-box">
                                    <div class="dlab-media dlab-img-overlay1 dlab-img-effect dlab-img-effect ">
                                        <a href="portfolio-details.html"> <img src="images/portfolio/image_8.jpg"  alt=""> </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <div class="text-white">
                                                    <a href="portfolio-details.html"><i class="fas fa-link icon-bx-xs"></i></a>
                                                    <span data-exthumbimage="images/portfolio/image_8.jpg" data-src="images/portfolio/image_8.jpg" class="check-km" title="Factory Managment">
														<i class="far fa-image icon-bx-xs"></i>
													</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dez-info p-a30 bg-white">
                                        <p class="dez-title m-t0"><a href="portfolio-details.html">hamburg wind energy</a></p>
                                        <p><small>industry</small></p>
                                    </div>
                                </div>
                            </li>
                            <li class="web photography card-container col-lg-3 col-md-6 col-sm-6 p-a0">
                                <div class="dlab-box dlab-gallery-box">
                                    <div class="dlab-media dlab-img-overlay1 dlab-img-effect">
                                        <a href="portfolio-details.html"> <img src="images/portfolio/image_9.jpg"  alt=""> </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <div class="text-white">
                                                    <a href="portfolio-details.html"><i class="fas fa-link icon-bx-xs"></i></a>
                                                    <span data-exthumbimage="images/portfolio/image_9.jpg" data-src="images/portfolio/image_9.jpg" class="check-km" title="Factory Managment">
														<i class="far fa-image icon-bx-xs"></i>
													</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dez-info p-a30 bg-white">
                                        <p class="dez-title m-t0"><a href="portfolio-details.html">Capturing Manila</a></p>
                                        <p><small>industry</small></p>
                                    </div>
                                </div>
                            </li>
                            <li class="advertising branding card-container col-lg-3 col-md-6 col-sm-6 p-a0">
                                <div class="dlab-box dlab-gallery-box">
                                    <div class="dlab-media dlab-img-overlay1 dlab-img-effect">
                                        <a href="portfolio-details.html"> <img src="images/portfolio/image_10.jpg"  alt=""> </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <div class="text-white">
                                                    <a href="portfolio-details.html"><i class="fas fa-link icon-bx-xs"></i></a>
                                                    <span data-exthumbimage="images/portfolio/image_10.jpg" data-src="images/portfolio/image_10.jpg" class="check-km" title="Factory Managment">
														<i class="far fa-image icon-bx-xs"></i>
													</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dez-info p-a30 bg-white">
                                        <p class="dez-title m-t0"><a href="portfolio-details.html">berlin central bank</a></p>
                                        <p><small>Bank / Constructions</small></p>
                                    </div>
                                </div>
                            </li>
                            <li class="web design card-container col-lg-3 col-md-6 col-sm-6 p-a0">
                                <div class="dlab-box dlab-gallery-box">
                                    <div class="dlab-media dlab-img-overlay1 dlab-img-effect">
                                        <a href="portfolio-details.html"> <img src="images/portfolio/image_11.jpg"  alt=""> </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <div class="text-white">
                                                    <a href="portfolio-details.html"><i class="fas fa-link icon-bx-xs"></i></a>
                                                    <span data-exthumbimage="images/portfolio/image_11.jpg" data-src="images/portfolio/image_11.jpg" class="check-km" title="Factory Managment">
														<i class="far fa-image icon-bx-xs"></i>
													</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dez-info p-a30 bg-white">
                                        <p class="dez-title m-t0"><a href="portfolio-details.html">sanfran cisco bridge</a></p>
                                        <p><small>Engineering</small></p>
                                    </div>
                                </div>
                            </li>
                            <li class="advertising branding photography card-container col-lg-3 col-md-6 col-sm-6 p-a0">
                                <div class="dlab-box dlab-gallery-box">
                                    <div class="dlab-media dlab-img-overlay1 dlab-img-effect ">
                                        <a href="portfolio-details.html"> <img src="images/portfolio/image_12.jpg"  alt=""> </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <div class="text-white">
                                                    <a href="portfolio-details.html"><i class="fas fa-link icon-bx-xs"></i></a>
                                                    <span data-exthumbimage="images/portfolio/image_12.jpg" data-src="images/portfolio/image_12.jpg" class="check-km" title="Factory Managment">
														<i class="far fa-image icon-bx-xs"></i>
													</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dez-info p-a30 bg-white">
                                        <p class="dez-title m-t0"><a href="portfolio-details.html">Muchen Railway Station</a></p>
                                        <p><small>System</small></p>
                                    </div>
                                </div>
                            </li>--}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact area END -->
    </div>
    <!-- Content END-->
@endsection
