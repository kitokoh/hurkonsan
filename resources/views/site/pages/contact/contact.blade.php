@extends('site.layouts.app')
@section('title')
    İletişim
@endsection

@section('content')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt"
             style="background-image:url({{  asset('site/assets/images/hidro-cnc.png')  }});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">{{__('header.contact')}}</h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">
                            <li><a href="{{ route('front.home') }}">{{__('header.home')}}</a></li>
                            <li>{{__('header.contact')}}</li>
                        </ul>
                    </div>
                    <!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="section-full content-inner bg-white contact-style-1">
            <div class="container">
                <div class="row dzseth">
                    <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                        <div class="icon-bx-wraper bx-style-1 p-lr20 p-tb30 center seth radius-sm">
                            <div class="icon-lg text-primary m-b20"><a href="javascript:void(0);" class="icon-cell"><i
                                        class="ti-location-pin"></i></a></div>
                            <div class="icon-content">
                                <h5 >{{__('contact.address')}}</h5>
                                <p>{{ $settings->address}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                        <div class="icon-bx-wraper bx-style-1 p-lr20 p-tb30 center seth radius-sm">
                            <div class="icon-lg text-primary m-b20"><a href="mailto:{{$settings->email}}" class="icon-cell"><i
                                        class="ti-email"></i></a></div>
                            <div class="icon-content">
                                <h5 >{{__('contact.mail')}}</h5>
                                <a href="mailto:{{$settings->email}}"><p>{{$settings->email}}</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                        <div class="icon-bx-wraper bx-style-1 p-lr20 p-tb30 center seth radius-sm">
                            <div class="icon-lg text-primary m-b20"><a href="tel:{{$settings->phone}}" class="icon-cell"><i
                                        class="ti-mobile"></i></a></div>
                            <div class="icon-content">
                                <h5 >{{__('contact.phone')}}</h5>
                                <div >
                                    <a href="tel:{{$settings->phone}}"><p>({{substr($settings->phone,0,3)}}) {{substr($settings->phone,3,3) . " " . substr($settings->phone,6,3) . " " . substr($settings->phone,9,4) }}</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                        <div class="icon-bx-wraper bx-style-1 p-lr20 p-tb30 center seth radius-sm">
                            <div class="icon-lg text-primary m-b20"><a href="tel:{{$settings->phone_other}}" class="icon-cell"><i
                                        class="ti-home"></i></a></div>
                            <div class="icon-content">
                                <h5 >{{__('contact.other_phone')}}</h5>
                                <div >
                                    <a href="tel:{{$settings->phone_other}}"><p>({{substr($settings->phone_other,0,3)}}) {{substr($settings->phone_other,3,3) . " " . substr($settings->phone_other,6,3) . " " . substr($settings->phone_other,9,4) }}</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Left part start -->
                    <div class="col-lg-6 m-b30">
                        <div class="p-a30 bg-gray clearfix radius-sm">
                            <h3>{{__('contact.message')}}</h3>
                            <div class="dzFormMsg"></div>
                            <form method="post" id="dzForm" class="dzForm"
                                  action="{{ route('contactMessages.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="name" id="userForm" type="text" required
                                                       class="form-control"
                                                       data-error="Lütfen Adınızı Giriniz!." placeholder="{{__('contact.name')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="email" id="emailForm" type="email"
                                                       data-error="Lütfen Eposta adresinizi Giriniz!."
                                                       class="form-control" required
                                                       placeholder="{{__('contact.mail')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="telephone" id="phoneForm"
                                                       data-error="Lütfen Telefon numarınızı giriniz!."
                                                       type="tel" required class="form-control"
                                                       placeholder="{{__('contact.phone')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="subject" id="subjectForm" type="text"
                                                       data-error="Lütfen Konuyu Giriniz!."
                                                       required class="form-control"
                                                       placeholder="{{__('contact.subject')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <textarea name="message" id="messageForm" rows="4"
                                                          data-error="Lütfen Mesajınızı Giriniz!." class="form-control"
                                                          required
                                                          placeholder="{{__('contact.message')}}"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button name="submit" onclick="clearForm()" type="submit" value="Submit" class="site-button "><span>{{__('contact.send')}}</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Left part END -->
                    <!-- right part start -->
                    <div class="col-lg-6 m-b30 d-flex">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3146.808160445611!2d32.555311315640814!3d37.93491191070239!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d091c0de99ab05%3A0x8129f45945c143b1!2zSMSwRFJPR8Ocw4cgUFJFUw!5e0!3m2!1str!2str!4v1674809076896!5m2!1str!2str" width="600" height="450"  loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                            style="border:0; width:100%;  min-height:100%;"
                            allowfullscreen></iframe>
                    </div>
                    <!-- right part END -->
                </div>
            </div>
        </div>
        <!-- contact area  END -->
    </div>
    <!-- Content END-->
@endsection

@section('js')
    <script>
        function clearForm() {
            const form = document.getElementById('dzForm');

            form.addEventListener('submit', function handleClick(event) {

                event.preventDefault();

                const inputs = document.querySelectorAll('#userForm,#emailForm,#phoneForm,#subjectForm,#messageForm');

                inputs.forEach(input => {
                    input.value = '';
                });
            });
        }
    </script>
@endsection
