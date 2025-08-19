@extends('site.layouts.app')

@section('title')
    Servislerimiz
@endsection

@section('content')
    <main class="main-body">

        <!--====== Page Banner Start ======-->

        <section class="page-banner bg_cover" style="background-image: url(assets/images/page-banner-1.jpg);">
            <div class="container">
                <div class="row">
                    <div class="page-banner-content">
                        <h2 class="title">Service Page</h2>
                    </div>
                </div>
            </div>
        </section>

        <!--====== Page Banner Ends ======-->

        <!--====== Service Start ======-->

        <section class="service-area pt-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-title text-center pb-30">
                            <h4 class="sub-title">Our Services</h4>
                            <h2 class="title">How to integrate your Solar Panel System with <br> your home <span>Our Mineral Water.</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-service text-center mt-30">
                            <div class="service-content">
                                <img src="assets/images/service-1.png" alt="service">
                                <h3 class="service-title"><a href="services-details.html">Maxium Purity</a></h3>
                                <p>Nunc laoreet, mi sed fermentum fringilla, eros metus pellentesque urna, in lobortis massa turpis id tortor. In velit metus.</p>
                            </div>
                            <div class="service-btn">
                                <a class="main-btn" href="services-details.html"><span></span> Learn More <i class="flaticon-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-service text-center mt-30">
                            <div class="service-content">
                                <img src="assets/images/service-2.png" alt="service">
                                <h3 class="service-title"><a href="services-details.html">Total Home Solution</a></h3>
                                <p>Nunc laoreet, mi sed fermentum fringilla, eros metus pellentesque urna, in lobortis massa turpis id tortor. In velit metus.</p>
                            </div>
                            <div class="service-btn">
                                <a class="main-btn" href="services-details.html"><span></span> Learn More <i class="flaticon-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-service text-center mt-30">
                            <div class="service-content">
                                <img src="assets/images/service-3.png" alt="service">
                                <h3 class="service-title"><a href="services-details.html">Healthy Composition</a></h3>
                                <p>Nunc laoreet, mi sed fermentum fringilla, eros metus pellentesque urna, in lobortis massa turpis id tortor. In velit metus.</p>
                            </div>
                            <div class="service-btn">
                                <a class="main-btn" href="services-details.html"><span></span> Learn More <i class="flaticon-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-service text-center mt-30">
                            <div class="service-content">
                                <img src="assets/images/service-4.png" alt="service">
                                <h3 class="service-title"><a href="services-details.html">05 Steps Filtration</a></h3>
                                <p>Nunc laoreet, mi sed fermentum fringilla, eros metus pellentesque urna, in lobortis massa turpis id tortor. In velit metus.</p>
                            </div>
                            <div class="service-btn">
                                <a class="main-btn" href="services-details.html"><span></span> Learn More <i class="flaticon-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--====== Service Ends ======-->

        <!--====== About Start ======-->

        <section class="about-area bg-shape-1 pt-70 pb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="about-content">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="section-title pt-20">
                                        <h4 class="sub-title">Welcome</h4>
                                        <h2 class="title">About Us <br> Our Companey.</h2>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="about-text mt-20">
                                        <h3 class="title">We craft beautifully useful marketing  <br> and digital products that grow <span>Mineral Water.</span></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim admini veniam, quis nostru.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="about-video mt-50">
                            <div class="video-image bg_cover" style="background-image: url(assets/images/video-bg.jpg);"></div>
                            <a class="video-play video-popup" href="https://www.youtube.com/watch?v=9h_-vBYui_U"><i class="flaticon-play-button"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--====== About Ends ======-->

        <!--====== Quick Order Start ======-->

        <section class="quick-order-area quick-order-02 pt-100 pb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-title section-title-2 text-center pb-30">
                            <h4 class="sub-title">Order Now</h4>
                            <h2 class="title">How to integrate your Solar Panel System with <br> your home <span>Our Mineral Water.</span></h2>
                        </div>
                    </div>
                </div>
                <div class="quick-order-form">
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-form mt-30">
                                    <input class="form-control" type="text" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-form mt-30">
                                    <input class="form-control" type="text" placeholder="Number">
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-6">
                                <div class="single-form mt-30">
                                    <input class="form-control" type="text" placeholder="Address">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-form mt-30">
                                    <select>
                                        <option value="">Bottle Size</option>
                                        <option value="1">Bottle 1</option>
                                        <option value="2">Bottle 2</option>
                                        <option value="3">Bottle 3</option>
                                        <option value="4">Bottle 4</option>
                                        <option value="5">Bottle 5</option>
                                        <option value="6">Bottle 6</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6">
                                <div class="single-form mt-30">
                                    <input class="form-control" type="text" placeholder="Bottle">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-form mt-30">
                                    <input class="form-control" type="text" placeholder="Total Amount">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="single-form mt-30">
                                    <button class="main-btn main-btn-2 btn-block"><span></span> Make A Order <i class="flaticon-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <!--====== Quick Order Ends ======-->

        <!--====== Mineral Composition Start ======-->

        <section class="mineral-composition bg-shape-3 pt-100 pb-100">
            <div class="container">
                <div class="composition-title">
                    <h4 class="title">Our <br> Mineral composition <span>H20</span></h4>
                    <p>We Fight for justice, we are always ready to best solution for your problem.</p>
                </div>

                <div class="row justify-content-between">
                    <div class="col-lg-5">
                        <div class="composition-video mt-50">
                            <img src="assets/images/video-image.jpg" alt="">
                            <a class="play video-popup" href="https://www.youtube.com/watch?v=9h_-vBYui_U">
                                <i class="fal fa-play"></i>
                                <img src="assets/images/play.svg" alt="play">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="composition-tab pt-20">
                            <div class="row">
                                <div class="col-xl-6 col-sm-5">
                                    <ul class="nav flex-column mt-30">
                                        <li>
                                            <a class="active" data-toggle="pill" href="#tab1">Mineralization <i class="fal fa-plus"></i> <span>Ca2 <sup>-</sup></span></a>
                                        </li>
                                        <li>
                                            <a data-toggle="pill" href="#tab2">Magnesium <i class="fal fa-plus"></i> <span>Ca2 <sup>-</sup></span></a>
                                        </li>
                                        <li>
                                            <a data-toggle="pill" href="#tab3">Sodium <i class="fal fa-plus"></i> <span>Ca2 <sup>-</sup></span></a>
                                        </li>
                                        <li>
                                            <a data-toggle="pill" href="#tab4">Calcium <i class="fal fa-plus"></i> <span>Ca2 <sup>-</sup></span></a>
                                        </li>
                                        <li>
                                            <a data-toggle="pill" href="#tab5">Chlorine <i class="fal fa-plus"></i> <span>Ca2 <sup>-</sup></span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-xl-6 col-sm-7">
                                    <div class="tab-content mt-30">
                                        <div class="tab-pane fade show active" id="tab1">
                                            <div class="composition-tab-content">
                                                <h3 class="title">Mineralization</h3>
                                                <span class="sub-title"><i class="fal fa-check"></i> 20-25 mg/dm3</span>
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2">
                                            <div class="composition-tab-content">
                                                <h3 class="title">Magnesium</h3>
                                                <span class="sub-title"><i class="fal fa-check"></i> 20-25 mg/dm3</span>
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3">
                                            <div class="composition-tab-content">
                                                <h3 class="title">Sodium</h3>
                                                <span class="sub-title"><i class="fal fa-check"></i> 20-25 mg/dm3</span>
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4">
                                            <div class="composition-tab-content">
                                                <h3 class="title">Calcium</h3>
                                                <span class="sub-title"><i class="fal fa-check"></i> 20-25 mg/dm3</span>
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab5">
                                            <div class="composition-tab-content">
                                                <h3 class="title">Chlorine</h3>
                                                <span class="sub-title"><i class="fal fa-check"></i> 20-25 mg/dm3</span>
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--====== Mineral Composition Ends ======-->

        <!--====== Testimonial Start ======-->

        <section class="testimonial-area pt-50">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-4 col-md-7 col-sm-8">
                        <div class="testimonial-image mt-50">
                            <div class="testimonial-image-active">
                                <div class="image">
                                    <img src="assets/images/testimonial/testimonial-1.png" alt="">
                                </div>
                                <div class="image">
                                    <img src="assets/images/testimonial/testimonial-2.png" alt="">
                                </div>
                            </div>
                            <div class="testimonial-shape">
                                <img src="assets/images/testimonial/testimonial.svg" alt="">
                            </div>
                            <div class="testimonial-qauote">
                                <img src="assets/images/qauote.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="testimonial-content-wrapper testimonial-content-active mt-50">
                            <div class="testimonial-content">
                                <h2 class="testimonial-title">“What our clients say?”</h2>
                                <p>Donec scelerisque dolor id nunc dictum, interdum gravida mauris rhoncus. Aliquam at ultrices nunc. In sem leo, fermentum at lorem in, porta finibus mauris. Aliquam consectetur, ex in gravida porttitor.</p>
                                <div class="review-signechar">
                                    <div class="review">
                                        <ul class="rating">
                                            <li><i class="far fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>
                                        </ul>
                                        <span>(07 Review)</span>
                                    </div>
                                    <div class="signechar">
                                        <img src="assets/images/testimonial/signechar.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <h2 class="testimonial-title">“What our clients say?”</h2>
                                <p>Donec scelerisque dolor id nunc dictum, interdum gravida mauris rhoncus. Aliquam at ultrices nunc. In sem leo, fermentum at lorem in, porta finibus mauris. Aliquam consectetur, ex in gravida porttitor.</p>
                                <div class="review-signechar">
                                    <div class="review">
                                        <ul class="rating">
                                            <li><i class="far fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>
                                        </ul>
                                        <span>(07 Review)</span>
                                    </div>
                                    <div class="signechar">
                                        <img src="assets/images/testimonial/signechar.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--====== Testimonial Ends ======-->

        <!--====== Brand Start ======-->

        <div class="brand-area pt-50 pb-100">
            <div class="container">
                <div class="row justify-content-center brand-row">
                    <div class="brand-col col-lg-2">
                        <div class="single-brand mt-50">
                            <img src="assets/images/brand/brand-1.png" alt="brand">
                        </div>
                    </div>
                    <div class="brand-col">
                        <div class="single-brand mt-50">
                            <img src="assets/images/brand/brand-2.png" alt="brand">
                        </div>
                    </div>
                    <div class="brand-col">
                        <div class="single-brand mt-50">
                            <img src="assets/images/brand/brand-3.png" alt="brand">
                        </div>
                    </div>
                    <div class="brand-col">
                        <div class="single-brand mt-50">
                            <img src="assets/images/brand/brand-4.png" alt="brand">
                        </div>
                    </div>
                    <div class="brand-col">
                        <div class="single-brand mt-50">
                            <img src="assets/images/brand/brand-5.png" alt="brand">
                        </div>
                    </div>
                    <div class="brand-col">
                        <div class="single-brand mt-50">
                            <img src="assets/images/brand/brand-6.png" alt="brand">
                        </div>
                    </div>
                    <div class="brand-col">
                        <div class="single-brand mt-50">
                            <img src="assets/images/brand/brand-7.png" alt="brand">
                        </div>
                    </div>
                    <div class="brand-col">
                        <div class="single-brand mt-50">
                            <img src="assets/images/brand/brand-8.png" alt="brand">
                        </div>
                    </div>
                    <div class="brand-col">
                        <div class="single-brand mt-50">
                            <img src="assets/images/brand/brand-9.png" alt="brand">
                        </div>
                    </div>
                    <div class="brand-col">
                        <div class="single-brand mt-50">
                            <img src="assets/images/brand/brand-10.png" alt="brand">
                        </div>
                    </div>
                    <div class="brand-col">
                        <div class="single-brand mt-50">
                            <img src="assets/images/brand/brand-11.png" alt="brand">
                        </div>
                    </div>
                    <div class="brand-col">
                        <div class="single-brand mt-50">
                            <img src="assets/images/brand/brand-12.png" alt="brand">
                        </div>
                    </div>
                    <div class="brand-col">
                        <div class="single-brand mt-50">
                            <img src="assets/images/brand/brand-13.png" alt="brand">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--====== Brand Ends ======-->

        <!--====== Call To Action Start ======-->

        <section class="call-to-action-area">
            <div class="container">
                <div class="call-to-action-wrapper">
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <div class="call-to-action-content mt-30">
                                <h3 class="title">Ready to get started? <br> Get in touch, or create an account.</h3>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="call-to-action-btn text-md-right mt-30">
                                <a class="main-btn" href="#"><span></span> Subscribe Now <i class="flaticon-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--====== Call To Action Ends ======-->
    </main>
@endsection
