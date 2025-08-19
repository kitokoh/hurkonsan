@extends('site.layouts.app')
@section('title')
    Anasayfa
@endsection
@section('content')

    <!-- Content -->
    <div class="page-content bg-white">
        <!-- Slider -->
        <div class="main-slider style-two default-banner" id="home">
            <div class="tp-banner-container">
                <div class="tp-banner">
                    <div id="rev_slider_1175_1_wrapper" class="rev_slider_wrapper fullscreen-container"
                         data-alias="duotone192" data-source="gallery"
                         style="background-color:transparent;padding:0px;">
                        <!-- START REVOLUTION SLIDER 5.3.0.2 fullscreen mode -->
                        <div id="rev_slider_1175_1" class="rev_slider fullscreenbanner"
                             data-version="5.3.0.2">
                            <ul>
                                <!-- SLIDE  -->
                                @foreach($sliders as $key=> $slider)
                                    @if($key%2==0)
                                        <li data-index="rs-{{$key}}" data-transition="slideoverhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000"  data-thumb="images/main-slider/slide4.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="OIL INDUSTRY" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                            <!-- MAIN IMAGE -->
                                            <img src="/storage/{{json_decode($slider->image)[0]}}" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="110" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 200" data-offsetend="0 -200" alt="" data-bgparallax="10" class="rev-slidebg" data-no-retina="">
                                            <div class="tp-caption tp-shape tp-shapewrapper " id="slide-{{$key}}-layer"
                                                 data-x="['center','center','center','center']"
                                                 data-hoffset="['0','0','0','0']"
                                                 data-y="['middle','middle','middle','middle']"
                                                 data-voffset="['0','0','0','0']"
                                                 data-width="full" data-height="full"
                                                 data-whitespace="nowrap"
                                                 data-type="shape"
                                                 data-basealign="slide"
                                                 data-responsive_offset="off"
                                                 data-responsive="off"
                                                 data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]'
                                                 data-textAlign="['left','left','left','left']"
                                                 data-paddingtop="[0,0,0,0]"
                                                 data-paddingright="[0,0,0,0]"
                                                 data-paddingbottom="[0,0,0,0]"
                                                 data-paddingleft="[0,0,0,0]"
                                                 style="z-index: 2;background-color:rgba(0, 0, 0, 0.1);border-color:rgba(0, 0, 0, 0);border-width:0px; background-image:url(images/overlay/rrdiagonal-line.png)"> </div>
                                            <!-- LAYER NR. 1 -->
                                            <div class="tp-caption tp-shape tp-shapewrapper  "
                                                 id="slide-3042-layer-11"
                                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                                 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']"
                                                 data-width="full"
                                                 data-height="['400','400','400','550']"
                                                 data-whitespace="nowrap"

                                                 data-type="shape"
                                                 data-basealign="slide"
                                                 data-responsive_offset="off"
                                                 data-responsive="off"
                                                 data-frames='[{"from":"opacity:0;","speed":1500,"to":"o:1;","delay":0,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                                                 data-textAlign="['left','left','left','left']"
                                                 data-paddingtop="[0,0,0,0]"
                                                 data-paddingright="[0,0,0,0]"
                                                 data-paddingbottom="[0,0,0,0]"
                                                 data-paddingleft="[0,0,0,0]"

                                                 style="z-index: 5;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);border-width:0px;background:linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.45) 100%);cursor:default;">
                                            </div>
                                            <!-- LAYER NR. 2 -->
                                            <div class="tp-caption BigBold-Title tp-resizeme"
                                                 id="slide-3042-layer-1"
                                                 data-x="['left','left','left','left']" data-hoffset="['50','50','30','17']"
                                                 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['110','110','155','160']"
                                                 data-fontsize="['110','100','70','50']"
                                                 data-lineheight="['100','90','60','60']"
                                                 data-width="['none','none','none','400']"
                                                 data-height="none"
                                                 data-whitespace="['nowrap','nowrap','nowrap','normal']"

                                                 data-type="text"
                                                 data-basealign="slide"
                                                 data-responsive_offset="off"

                                                 data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];","speed":1500,"to":"o:1;","delay":500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]'
                                                 data-textAlign="['left','left','left','left']"
                                                 data-paddingtop="[10,10,10,10]"
                                                 data-paddingright="[0,0,0,0]"
                                                 data-paddingbottom="[10,10,10,10]"
                                                 data-paddingleft="[0,0,0,0]"


                                                 style="z-index: 6; white-space: nowrap;">
                                            </div>
                                            <!-- LAYER NR. 3 -->
                                            <div class="tp-caption BigBold-Title tp-resizeme"
                                                 id="slide-3042-layer-4"
                                                 data-x="['left','left','left','left']" data-hoffset="['55','55','33','20']"
                                                 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['80','80','130','120']"
                                                 data-fontsize="['43','30','30','26']"
                                                 data-lineheight="['60','48','48','40']"
                                                 data-width="['820','820','820','560']"
                                                 data-height="['120','200','200','200']"
                                                 data-whitespace="normal"

                                                 data-type="text"
                                                 data-basealign="slide"
                                                 data-responsive_offset="off"

                                                 data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];","speed":1500,"to":"o:1;","delay":500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]'
                                                 data-textAlign="['left','left','left','left']"
                                                 data-paddingtop="[10,10,10,10]"
                                                 data-paddingright="[0,0,0,0]"
                                                 data-paddingbottom="[10,10,10,10]"
                                                 data-paddingleft="[0,0,0,0]"

                                                 style="z-index: 6; white-space: nowrap;">
                                                {{$slider->name}}
                                            </div>
                                        </li>
                                    @else
                                        <li data-index="rs-{{$key}}" data-transition="slideoverhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000"  data-thumb="images/main-slider/slide4.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="OIL INDUSTRY" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                            <!-- MAIN IMAGE -->
                                            <img src="/storage/{{json_decode($slider->image)[0]}}" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="110" data-rotatestart="0" data-rotateend="0" data-offsetstart="-500 0" data-offsetend="500 0" alt="" data-bgparallax="10" class="rev-slidebg" data-no-retina="">
                                            <div class="tp-caption tp-shape tp-shapewrapper " id="slide-{{$key}}-layer"
                                                 data-x="['center','center','center','center']"
                                                 data-hoffset="['0','0','0','0']"
                                                 data-y="['middle','middle','middle','middle']"
                                                 data-voffset="['0','0','0','0']"
                                                 data-width="full" data-height="full"
                                                 data-whitespace="nowrap"
                                                 data-type="shape"
                                                 data-basealign="slide"
                                                 data-responsive_offset="off"
                                                 data-responsive="off"
                                                 data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]'
                                                 data-textAlign="['left','left','left','left']"
                                                 data-paddingtop="[0,0,0,0]"
                                                 data-paddingright="[0,0,0,0]"
                                                 data-paddingbottom="[0,0,0,0]"
                                                 data-paddingleft="[0,0,0,0]"
                                                 style="z-index: 2;background-color:rgba(0, 0, 0, 0.1);border-color:rgba(0, 0, 0, 0);border-width:0px; background-image:url(images/overlay/rrdiagonal-line.png)"> </div>
                                            <!-- LAYER NR. 1 -->
                                            <div class="tp-caption tp-shape tp-shapewrapper  "
                                                 id="slide-3042-layer-11"
                                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                                 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']"
                                                 data-width="full"
                                                 data-height="['400','400','400','550']"
                                                 data-whitespace="nowrap"

                                                 data-type="shape"
                                                 data-basealign="slide"
                                                 data-responsive_offset="off"
                                                 data-responsive="off"
                                                 data-frames='[{"from":"opacity:0;","speed":1500,"to":"o:1;","delay":0,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                                                 data-textAlign="['left','left','left','left']"
                                                 data-paddingtop="[0,0,0,0]"
                                                 data-paddingright="[0,0,0,0]"
                                                 data-paddingbottom="[0,0,0,0]"
                                                 data-paddingleft="[0,0,0,0]"

                                                 style="z-index: 5;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);border-width:0px;background:linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.45) 100%);cursor:default;">
                                            </div>
                                            <!-- LAYER NR. 2 -->
                                            <div class="tp-caption BigBold-Title tp-resizeme"
                                                 id="slide-3042-layer-1"
                                                 data-x="['left','left','left','left']" data-hoffset="['50','50','30','17']"
                                                 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['110','110','155','160']"
                                                 data-fontsize="['110','100','70','50']"
                                                 data-lineheight="['100','90','60','60']"
                                                 data-width="['none','none','none','400']"
                                                 data-height="none"
                                                 data-whitespace="['nowrap','nowrap','nowrap','normal']"

                                                 data-type="text"
                                                 data-basealign="slide"
                                                 data-responsive_offset="off"

                                                 data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];","speed":1500,"to":"o:1;","delay":500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]'
                                                 data-textAlign="['left','left','left','left']"
                                                 data-paddingtop="[10,10,10,10]"
                                                 data-paddingright="[0,0,0,0]"
                                                 data-paddingbottom="[10,10,10,10]"
                                                 data-paddingleft="[0,0,0,0]"


                                                 style="z-index: 6; white-space: nowrap;">
                                            </div>
                                            <!-- LAYER NR. 3 -->
                                            <div class="tp-caption BigBold-Title tp-resizeme"
                                                 id="slide-3042-layer-4"
                                                 data-x="['left','left','left','left']" data-hoffset="['55','55','33','20']"
                                                 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['80','80','130','120']"
                                                 data-fontsize="['43','30','30','26']"
                                                 data-lineheight="['60','48','48','40']"
                                                 data-width="['820','820','820','560']"
                                                 data-height="['120','200','200','200']"
                                                 data-whitespace="normal"

                                                 data-type="text"
                                                 data-basealign="slide"
                                                 data-responsive_offset="off"

                                                 data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];","speed":1500,"to":"o:1;","delay":500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]'
                                                 data-textAlign="['left','left','left','left']"
                                                 data-paddingtop="[10,10,10,10]"
                                                 data-paddingright="[0,0,0,0]"
                                                 data-paddingbottom="[10,10,10,10]"
                                                 data-paddingleft="[0,0,0,0]"

                                                 style="z-index: 6; white-space: nowrap;">
                                                {{$slider->name}}
                                            </div>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                            <div class="tp-bannertimer"
                                 style="height: 8px; background-color: rgba(255, 255, 255, 0.25);"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider END -->
        <!-- contact area -->
        <div class="content-block">
            <!-- Features -->
            <div class="section-full content-inner bg-white">
                <div class="container w-65">
                    <div class="row">
                        @foreach($product as $product)
                            <div class="col-lg-3 col-md-4 col-sm-6 m-b20">
                                <div class="item">
                                    <div class="dlab-box project-bx">
                                        <a href="{{ route('product.product-detail',$product->id) }}">
                                            <div class="dlab-media radius-sm dlab-img-overlay1 dlab-img-effect zoom">
                                                <img src="/storage/{{json_decode($product->image)[0]}}" alt="{{$product->title}}">
                                            </div>
                                        </a>

                                    </div>
                                    <div class="dlab-info p-a20">
                                        <h5 class="dlab-title" style="text-align: center"><a href="{{ route('product.product-detail',$product->id) }}">{{$product->title}}</a></h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Features End -->
            {{--<!-- Service Info Head -->
            <div class="section-full content-inner-2 bg-primary wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s"
                 style="background-image:url({{ asset('site/assets/images/background/test.jpg') }});">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center service-info">
                            <h2 class="title text-white">{{$settings->about}}</h2>
                            --}}{{--<p class="fa-s15">{{$settings->about}}</p>--}}{{--
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service Info Head End -->--}}
            <!-- About Us -->
            <div class="section-full content-inner bg-white">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                            <div class="our-story">
                                {{--<span>{{__('header.about_us')}}</span>--}}
                                <h2 class="title" style="color: var(--color-primary)!important">    {{__('homePage.welcome')}} </span></h2>
                                <p style="font-family:'Rage Italic'  ">{!! $settings->about ?? ''!!}</p>
                                <a href="{{ route('front.about') }}" class="site-button btnhover14">{{__('homePage.more')}}</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
                            <img  src="{{ asset('site/assets/images/hidrohome/hidroweb3.png') }}" class="radius-sm" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Us End -->

            <!-- Call To Action -->
            <div class="section-full call-action style1 bg-primary wow fadeIn" data-wow-duration="2s"
                 data-wow-delay="0.2s">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 text-white">
                            <h2 class="title">{{__('contact.subtitle')}}</h2>
                        </div>
                        <div class="col-lg-3 d-flex">
                            <a href="{{ route('front.contact') }}" class="site-button black align-self-center ms-auto btnhover14">{{__('header.contact')}}</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonials -->
            <div class="section-full content-inner-2 bg-gray wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
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


            <!-- Latests News -->
            <div class="section-full content-inner bg-white wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s">
                <div class="container">
                    <div class="section-head text-black text-center">
                        <h2 class="title">{{__('homePage.our_last_blogs')}}</h2>
                    </div>
                    <div class="blog-carousel owl-carousel owl-btn-3 owl-btn-center-lr">
                        @foreach($lastBlogs as $blog)
                            <div class="item">
                            <div class="blog-post blog-grid blog-rounded blog-effect1">
                                <div class="dlab-post-media dlab-img-effect rotate">
                                    <a href="{{ route('blog.blog-detail',$blog->slug) }}"><img src="storage/{{$blog->image[0]}}" alt="{{ $blog->name }}"></a>
                                </div>
                                <div class="dlab-info p-a20 border-1">
                                    <div class="dlab-post-meta">
                                        <ul>
                                            <li class="post-date">
                                                <strong>{{ \Carbon\Carbon::parse($blog->created_at)->format('d/m/Y') }}</strong>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dlab-post-title">
                                        <h4 class="post-title"><a href="{{ route('blog.blog-detail',$blog->slug) }}">{{ $blog->name }}</a></h4>
                                    </div>
                                    <div class="dlab-post-text">
                                        <p>{!! substr(strip_tags($blog->text),0,130) !!}...</p>
                                    </div>
                                    <div class="dlab-post-readmore">
                                        <a href="{{ route('blog.blog-detail',$blog->slug) }}" title="READ MORE" rel="bookmark" class="site-button btnhover14">{{__('blog.read_more')}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Latest News End -->

            <!-- Client logo -->
            <div class="section-full dlab-we-find bg-img-fix p-t20 p-b70  bg-white wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s">
                <div class="container">
                    <div class="section-head text-black text-center">
                        <h2 style="color: #d2151e" class="title">{{__('header.references')}}</h2>
                    </div>
                    <div class="section-content">
                        <div class="client-logo-carousel mfp-gallery gallery owl-btn-center-lr owl-carousel owl-btn-3">
                            @foreach($reference as $ref)
                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo">
                                            @if(isset($ref->reference_url))
                                                <a target="_blank" href="{{$ref->reference_url ?? 'javascript:void(0)'}}"><img src="/storage/{{ $ref->image }}" alt="{{ $ref->name }}"/></a>
                                            @else
                                                <a href="javascript:void(0)"><img src="/storage/{{ $ref->image }}" alt="{{ $ref->name }}"/></a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            {{--<div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo"> <a href="javascript:void(0);"><img src="images/client-logo/logo2.jpg" alt=""></a> </div>
                                </div>
                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- Client logo END -->
        </div>
        <!-- contact area END -->
    </div>
    <!-- Content END -->
@endsection
@section('js')
@endsection

