<!-- Footer -->
<footer class="site-footer style1">
    <!-- newsletter part -->
    <div class="dlab-newsletter">
        <div class="container">
            <div class="ft-contact wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s">
                <div class="ft-contact-bx">
                    <img src="/site/images/icon/icon1.png" alt=""/>
                    <h4 class="title">{{__('contact.address')}}</h4>
                    <p>{{ $settings->address}}</p>
                </div>
                <div class="ft-contact-bx">
                    <img src="/site/images/icon/icon2.png" alt=""/>
                    <h4 class="title">{{__('contact.phone')}}</h4>
                    <a href="tel:{{$settings->phone}}"><p style="font-family: 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif">({{substr($settings->phone,0,3)}}) {{substr($settings->phone,3,3) . " " . substr($settings->phone,6,3) . " " . substr($settings->phone,9,4) }}</p></a>
                </div>
                <div class="ft-contact-bx">
                    <img src="/site/images/icon/icon3.png" alt=""/>
                    <h4 class="title">{{__('contact.mail')}}</h4>
                    <a href="mailto:{{$settings->email}}"><p style="font-family: 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif">{{$settings->email}}</p></a>
                </div>
            </div>
        </div>
    </div>
    <!-- footer top part -->
    <div class="footer-top" style="background-image:url(images/background/bg2.png); background-size: contain;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="widget widget_about">
                        <h4 class="footer-title">{{__('header.about_us')}}</h4>
                        <p >{!! substr(strip_tags($settings->about),0,130) !!}...</p>
                        <a href="{{route('front.about')}}" class="readmore">{{__('blog.read_more')}}</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="widget">
                        <h4 class="footer-title">{{__('footer.Internal_Links')}}</h4>
                        <ul class="list-2">
                            <li><a href="{{ route('front.home') }}">{{__('header.home')}}</a></li>
                            <li><a href="{{ route('front.about') }}">{{__('header.about_us')}}</a></li>
                            <li><a href="{{ route('front.product') }}">{{__('header.products')}}</a></li>
                            <li><a href="{{ route('front.reference') }}">{{__('header.blog')}}</a></li>
                            <li><a href="{{{ route('front.contact') }}}">{{__('header.contact')}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">

                    <div class="widget widget_subscribe">
                        <h4 class="footer-title">{{__('header.contact')}}</h4>
                        <p>{{__('footer.subscribe')}}</p>
                        <a href="{{ route('front.contact') }}" target="_parent">
                            <button class="site-button">{{__('footer.mail_enter')}}</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer bottom part -->
    <div class="footer-bottom footer-line">
        <div class="container">
            <div class="footer-bottom-in">
                <div class="col-6 text-left ">
                    <span>Copyright © {{ date('Y') }} <a style="color: red" href="https://ayyildizsoft.com.tr" target="_blank">AYYILDIZSOFT YAZILIM</a></span>
                </div>
                <div class="footer-bottom-social">
                    <ul class="dlab-social-icon dez-border">
                        <li><a target="_blank" class="fab fa-facebook-f" href="{{ $settings->facebook }}"></a></li>
                        <li><a target="_blank" class="fab fa-twitter" href="{{ $settings->twitter }}"></a></li>
                        <li><a target="_blank" class="fab fa-instagram" href="{{ $settings->instagram }}"></a></li>
                        <li><a target="_blank" class="fab fa-youtube" href="{{ $settings->you_tube }}"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer END -->
