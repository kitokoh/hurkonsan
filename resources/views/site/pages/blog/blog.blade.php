@extends('site.layouts.app')
@section('title')
    Bloglar
@endsection
@section('content')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt"
             style="background-image:url({{  asset('site/assets/images/hidro-cnc.png')  }});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">{{__('blog.title')}}</h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">
                            <li><a href="{{ route('front.home') }}">{{__('header.home')}}</a></li>
                            <li>{{__('header.blog')}}</li>
                        </ul>
                    </div>
                    <!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <div class="content-area">
            <div class="container">
                <!-- blog grid -->
                <div id="masonry" class="dlab-blog-grid-3 row">

                    @foreach($blogs as $blog)
                        <div class="post card-container col-lg-4 col-md-6 col-sm-12">
                            <div class="blog-post blog-grid blog-rounded blog-effect1">
                                <div class="dlab-post-media dlab-img-effect">
                                    <a href="{{ route('blog.blog-detail',$blog->slug) }}"><img src="storage/{{$blog->image[0]}}" alt="{{ $blog->name }}"></a>
                                </div>
                                <div class="dlab-info p-a20 border-1">
                                    <div class="dlab-post-meta ">
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
                                    {{--<div class="dlab-post-text">
                                        <p>{!! $blog->text !!}</p>
                                    </div>--}}
                                    <div class="dlab-post-readmore">
                                        <a href="{{ route('blog.blog-detail',$blog->slug) }}" title="READ MORE" rel="bookmark" class="site-button">
                                            {{__('blog.read_more')}}
                                            <i class="ti-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- blog grid END -->

                <!-- Pagination -->
                <div class="pagination-bx clearfix col-md-12 text-center">
                    <ul class="pagination">

                        {{ $blogs->links() }}
                    </ul>
                </div>
                <!-- Pagination END -->
            </div>
        </div>
    </div>
    <!-- Content END-->
@endsection
