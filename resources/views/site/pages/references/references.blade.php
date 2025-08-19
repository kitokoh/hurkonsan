@extends('site.layouts.app')
@section('title')
    Referanslar
@endsection
@section('content')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt"
             style="background-image:url({{  asset('site/assets/images/hidro-cnc.png')  }});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">{{__('header.references')}}</h1>
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
                <div class="row">
                    @foreach($references as $ref)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="item-box m-b10">

                                <div class="item-img">
                                    @if(isset($ref->reference_url))
                                    <a target="_blank" href="{{$ref->reference_url ?? 'javascript:void(0)'}}"><img src="/storage/{{ $ref->image }}" alt="{{ $ref->name }}"/></a>
                                    @else
                                    <a href="javascript:void(0)"><img src="/storage/{{ $ref->image }}" alt="{{ $ref->name }}"/></a>
                                    @endif
                                </div>

                                {{--<div class="item-info text-center text-black p-a10">
                                    <h6 class="item-title font-weight-500"><a href="shop-product-details.html">Checked Short Dress</a></h6>
                                    <ul class="item-review">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star-half-alt"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <h4 class="item-price"><del>$232</del> <span class="text-primary">$192</span></h4>
                                </div>--}}
                            </div>
                        </div>
                    @endforeach
                    {{--<div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="item-box m-b10 item-style-1">
                            <div class="item-img">
                                <img src="images/product/item2.jpg" alt=""/>
                                <div class="item-info-in">
                                    <ul>
                                        <li><a href="shop-cart.html"><i class="ti-shopping-cart"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="ti-eye"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item-info text-center text-black p-a10">
                                <h6 class="item-title font-weight-500"><a href="shop-product-details.html">Slim Fit Chinos</a></h6>
                                <ul class="item-review">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star-half-alt"></i></li>
                                    <li><i class="far fa-star"></i></li>
                                </ul>
                                <h4 class="item-price"><del>$232</del> <span class="text-primary">$192</span></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="item-box m-b10">
                            <div class="item-img">
                                <img src="images/product/item3.jpg" alt=""/>
                                <div class="item-info-in">
                                    <ul>
                                        <li><a href="shop-cart.html"><i class="ti-shopping-cart"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="ti-eye"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item-info text-center text-black p-a10">
                                <h6 class="item-title font-weight-500"><a href="shop-product-details.html">Dark Brown Boots</a></h6>
                                <ul class="item-review">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star-half-alt"></i></li>
                                    <li><i class="far fa-star"></i></li>
                                </ul>
                                <h4 class="item-price"><del>$232</del> <span class="text-primary">$192</span></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="item-box m-b10">
                            <div class="item-img">
                                <img src="images/product/item4.jpg" alt=""/>
                                <div class="item-info-in">
                                    <ul>
                                        <li><a href="shop-cart.html"><i class="ti-shopping-cart"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="ti-eye"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item-info text-center text-black p-a10">
                                <h6 class="item-title font-weight-500"><a href="shop-product-details.html">Light Blue Denim Dress</a></h6>
                                <ul class="item-review">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star-half-alt"></i></li>
                                    <li><i class="far fa-star"></i></li>
                                </ul>
                                <h4 class="item-price"><del>$232</del> <span class="text-primary">$192</span></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="item-box m-b10">
                            <div class="item-img">
                                <img src="images/product/item5.jpg" alt=""/>
                                <div class="item-info-in">
                                    <ul>
                                        <li><a href="shop-cart.html"><i class="ti-shopping-cart"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="ti-eye"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item-info text-center text-black p-a10">
                                <h6 class="item-title font-weight-500"><a href="shop-product-details.html">Green Trousers</a></h6>
                                <ul class="item-review">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star-half-alt"></i></li>
                                    <li><i class="far fa-star"></i></li>
                                </ul>
                                <h4 class="item-price"><del>$232</del> <span class="text-primary">$192</span></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="item-box m-b10 item-style-1">
                            <div class="item-img">
                                <img src="images/product/item6.jpg" alt=""/>
                                <div class="item-info-in">
                                    <ul>
                                        <li><a href="shop-cart.html"><i class="ti-shopping-cart"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="ti-eye"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item-info text-center text-black p-a10">
                                <h6 class="item-title font-weight-500"><a href="shop-product-details.html">Unisex Sunglasses</a></h6>
                                <ul class="item-review">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star-half-alt"></i></li>
                                    <li><i class="far fa-star"></i></li>
                                </ul>
                                <h4 class="item-price"><del>$232</del> <span class="text-primary">$192</span></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="item-box m-b10">
                            <div class="item-img">
                                <img src="images/product/item7.jpg" alt=""/>
                                <div class="item-info-in">
                                    <ul>
                                        <li><a href="shop-cart.html"><i class="ti-shopping-cart"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="ti-eye"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item-info text-center text-black p-a10">
                                <h6 class="item-title font-weight-500"><a href="shop-product-details.html">Blue Round-Neck Tshirt</a></h6>
                                <ul class="item-review">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star-half-alt"></i></li>
                                    <li><i class="far fa-star"></i></li>
                                </ul>
                                <h4 class="item-price"><del>$232</del> <span class="text-primary">$192</span></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="item-box m-b10">
                            <div class="item-img">
                                <img src="images/product/item8.jpg" alt=""/>
                                <div class="item-info-in">
                                    <ul>
                                        <li><a href="shop-cart.html"><i class="ti-shopping-cart"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="ti-eye"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item-info text-center text-black p-a10">
                                <h6 class="item-title font-weight-500"><a href="shop-product-details.html">Men Grey Casual Shoes</a></h6>
                                <ul class="item-review">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star-half-alt"></i></li>
                                    <li><i class="far fa-star"></i></li>
                                </ul>
                                <h4 class="item-price"><del>$232</del> <span class="text-primary">$192</span></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="item-box m-b10">
                            <div class="item-img">
                                <img src="images/product/item9.jpg" alt=""/>
                                <div class="item-info-in">
                                    <ul>
                                        <li><a href="shop-cart.html"><i class="ti-shopping-cart"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="ti-eye"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item-info text-center text-black p-a10">
                                <h6 class="item-title font-weight-500"><a href="shop-product-details.html">Checked Short Dress</a></h6>
                                <ul class="item-review">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star-half-alt"></i></li>
                                    <li><i class="far fa-star"></i></li>
                                </ul>
                                <h4 class="item-price"><del>$232</del> <span class="text-primary">$192</span></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="item-box m-b10 item-style-1">
                            <div class="item-img">
                                <img src="images/product/item1.jpg" alt=""/>
                                <div class="item-info-in">
                                    <ul>
                                        <li><a href="shop-cart.html"><i class="ti-shopping-cart"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="ti-eye"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item-info text-center text-black p-a10">
                                <h6 class="item-title font-weight-500"><a href="shop-product-details.html">Slim Fit Chinos</a></h6>
                                <ul class="item-review">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star-half-alt"></i></li>
                                    <li><i class="far fa-star"></i></li>
                                </ul>
                                <h4 class="item-price"><del>$232</del> <span class="text-primary">$192</span></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="item-box m-b10">
                            <div class="item-img">
                                <img src="images/product/item2.jpg" alt=""/>
                                <div class="item-info-in">
                                    <ul>
                                        <li><a href="shop-cart.html"><i class="ti-shopping-cart"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="ti-eye"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item-info text-center text-black p-a10">
                                <h6 class="item-title font-weight-500"><a href="shop-product-details.html">Dark Brown Boots</a></h6>
                                <ul class="item-review">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star-half-alt"></i></li>
                                    <li><i class="far fa-star"></i></li>
                                </ul>
                                <h4 class="item-price"><del>$232</del> <span class="text-primary">$192</span></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="item-box m-b10">
                            <div class="item-img">
                                <img src="images/product/item3.jpg" alt=""/>
                                <div class="item-info-in">
                                    <ul>
                                        <li><a href="shop-cart.html"><i class="ti-shopping-cart"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="ti-eye"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="ti-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item-info text-center text-black p-a10">
                                <h6 class="item-title font-weight-500"><a href="shop-product-details.html">Light Blue Denim Dress</a></h6>
                                <ul class="item-review">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star-half-alt"></i></li>
                                    <li><i class="far fa-star"></i></li>
                                </ul>
                                <h4 class="item-price"><del>$232</del> <span class="text-primary">$192</span></h4>
                            </div>
                        </div>
                    </div>--}}
                </div>
                <!-- Pagination -->
                <div class="pagination-bx clearfix col-md-12 text-center">
                    <ul class="pagination">
                        {{$references->links("pagination::bootstrap-4")}}
                    </ul>
                </div>
                <!-- Pagination END -->
            </div>
        </div>
    </div>
    <!-- Content END-->
@endsection
