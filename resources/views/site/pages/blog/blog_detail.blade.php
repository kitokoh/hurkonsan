@extends('site.layouts.app')
@section('title')
{{$blog->name}}
@endsection
@section('content')

    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt"
             style="background-image:url({{  asset('site/assets/images/hidro-cnc.png')  }});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">{{ $blog->name }}</h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">
                            <li><a href="{{ route('front.home') }}">Anasayfa</a></li>
                            <li>{{ $blog->name }}</li>
                        </ul>
                    </div>
                    <!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-area">
            <div class="container max-w900">
                <!-- blog start -->
                <div class="blog-post blog-single">
                    <div class="dlab-post-meta m-b20">
                        <ul>
                            <li class="post-author"> HİDROGÜÇ</li>
                        </ul>
                    </div>
                    <div class="dlab-post-title">
                        <h4 class="post-title m-t0" style="margin-bottom: 25px; font-size: 35px">{{ $blog->name }}</a></h4>
                    </div>
                    <div class="dlab-post-media dlab-img-effect zoom-slow">
                        <a href="javascript:void(0)"><img src="/storage/{{json_decode($blog->image_inner_page)[0]}}" alt=""></a>
                    </div>
                    <div class="dlab-post-text">
                        <p>{!! $blog->text  !!}</p>
                    </div>
                </div>
                <!-- blog END -->
            </div>
        </div>
        <!-- contact area END -->
        <!-- Our Project -->
        <div class="section-full content-inner-2 bg-gray wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
            <div class="container">
                <div class="section-head text-black text-center">
                    <h2 class="title">{{__('blog.another_blog')}}</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="img-carousel-dots-nav owl-theme owl-dots-none owl-carousel owl-btn-center-lr owl-btn-3">
                            @foreach($another_blog as $blog)
                                <div class="item">
                                    <div class="dlab-box project-bx">
                                        <div class="dlab-media radius-sm dlab-img-overlay1 dlab-img-effect zoom">
                                            <a href="{{ route('blog.blog-detail',$blog->slug) }}"><img src="/storage/{{$blog->image[0]}}" alt=""></a>
                                        </div>

                                    </div>
                                    <div class="dlab-info">
                                        <h5 class="dlab-title"><a href="{{ route('blog.blog-detail',$blog->slug) }}">{{$blog->name}}</a></h5>
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
    <!-- Content END-->
@endsection
