<!-- header -->
<header class="site-header mo-left header-transparent header navstyle3">
    <!-- main header -->
    <div class="sticky-header main-bar-wraper navbar-expand-lg">
        <div class="main-bar clearfix ">
            <div class="container clearfix">
                <!-- website logo -->
                <div class="logo-header mostion logo-white">
                    <a href="{{ route('front.home') }}"><img src="{{ asset('site/assets/images/logo/hidroyeni2.png') }}" alt="Hidrogüç Pres Logo"></a>
                </div>
                <!-- nav toggle button -->
                <button class="navbar-toggler collapsed navicon justify-content-end" type="button"
                        data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                {{--<!-- extra nav -->
                <div class="extra-nav">
                    <div class="extra-cell">
                        <button id="quik-search-btn" type="button" class="site-button-link"><i class="la la-search"></i>
                        </button>
                    </div>
                </div>
                <!-- Quik search -->
                <div class="dlab-quik-search ">
                    <form action="#">
                        <input name="search" value="" type="text" class="form-control" placeholder="Ara...">
                        <span id="quik-search-remove"><i class="ti-close"></i></span>
                    </form>
                </div>--}}
                <!-- main nav -->
                <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                    <div class="logo-header d-md-block d-lg-none">
                        <a href="{{ route('front.home') }}"><img src="{{ asset('site/assets/images/logo/hidroyeni2.png') }}" alt="Hidrogüç Pres Logo"></a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li  class="{{ Route::is('front.home') ? 'active': '' }} has-mega-menu"><a href="{{ route('front.home') }}">{{__('header.home')}}</a>
                        </li>
                        <li class="{{ Route::is('front.about') ? 'active': '' }} mega-menu">
                            <a class="" href="{{ route('front.about') }}">{{__('header.about_us')}}</a>
                        </li>
                        <li class="{{ Route::is('front.product') ? 'active': '' }} mega-menu">
                            <a href="{{ route('front.product') }}">{{__('header.products')}}</a>
                        </li>
                        <li class="{{ Route::is('front.reference') ? 'active': '' }} mega-menu">
                            <a href="{{ route('front.reference') }}">{{__('header.references')}}</a>
                        </li>
                        <li class="{{ Route::is('front.blog') ? 'active': '' }} mega-menu">
                            <a href="{{ route('front.blog') }}">{{__('header.blog')}}</a>
                        </li>
                        <li class="{{ Route::is('front.contact') ? 'active': '' }} mega-menu" >
                            <a href="{{ route('front.contact') }}">{{__('header.contact')}}</a>
                        </li>
                        <li>
                            <?php
                            $catalog = \App\Models\Admin\Catalog::find(1);
                            ?>
                            <a target="_blank"href="/storage/{{$catalog->image[0]}}">{{__('header.catalog')}}</a>
                        </li>
                    </ul>

                    {{--<ul class="list-unstyled" style="margin-left: 10px;">
                        <li>
                            <div class="dropdown pl-md-0 language">
                                <a class="dropdown-toggle" href="#" id="dropdownMenuButton"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @if(session()->get('locale') == "tr")
                                        <img class="pr-1" src="/site/images/flags-icon/flag-tr.png" alt="image">
                                        <span>TR</span><i class="fas fa-sort-down pl-2"></i>
                                    @elseif(session()->get('locale') == "ar")
                                        <img class="pr-1" src="/site/images/flags-icon/flag-de.png" alt="image">
                                        DE<i class="fas fa-sort-down pl-2"></i>
                                    @else
                                        <img class="pr-1" src="/site/images/flags-icon/flag-uk.png" alt="image">
                                        EN<i class="fas fa-sort-down pl-2"></i>
                                    @endif

                                </a>
                                <div style="border-radius: 16px; background-color: #252324ee;"
                                     class="dropd"
                                     aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item text-white dropdown-itemacolor"
                                       href="{{ route('setlang',['tr']) }}"><img
                                            class="pr-2" src="/site/images/flags-icon/flag-tr.png"
                                            alt="image">TR</a>
                                    <a class="dropdown-item text-white dropdown-itemacolor"
                                       href="{{ route('setlang',['en']) }}"><img
                                            class="pr-2" src="/site/images/flags-icon/flag-uk.png"
                                            alt="image">EN</a>
                                    <a class="dropdown-item text-white dropdown-itemacolor"
                                       href="{{ route('setlang',['ar']) }}"><img
                                            class="pr-2" src="/site/images/flags-icon/flag-de.png"
                                            alt="image">DE</a>
                                </div>
                            </div>
                        </li>
                    </ul>--}}

                    <div class = "dropdown ">
                        <button type = "button" class = "btn btn-info dropdown-toggle" data-bs-toggle = "dropdown"  style="background-color: unset; border: none">
                            <a class="" href="#" id="dropdownMenuButton"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @if(session()->get('locale') == "tr")
                                    <img class="pr-1" src="/site/images/flags-icon/flag-tr.png" alt="image">
                                    <span style="color: white">TR</span><i class=""></i>
                                @elseif(session()->get('locale') == "ar")
                                    <img class="pr-1" src="/site/images/flags-icon/flag-ar.png" alt="image">
                                    <span style="color: white">AR</span></i>
                                @elseif(session()->get('locale') == "de")
                                    <img class="pr-1" src="/site/images/flags-icon/flag-de.png" alt="image">
                                    <span style="color: white">DE</span><i class=""></i>
                                @elseif(session()->get('locale') == "ru")
                                    <img class="pr-1" src="/site/images/flags-icon/flag-ru.png" alt="image">
                                    <span style="color: white">RU</span><i class=""></i>
                                @else
                                    <img class="pr-1" src="/site/images/flags-icon/flag-uk.png" alt="image">
                                    <span style="color: white">EN</span><i class=""></i>
                                @endif

                            </a>
                        </button>
                        <ul class = "dropdown-menu" style="background-color: snow; border: none" >
                            <li> <a class = "dropdown-item" href = "{{ route('setlang',['tr']) }}">
                                    <img class="pr-2" src="/site/images/flags-icon/flag-tr.png"
                                        alt="image">TR </a>
                            </li>
                            <li> <a class = "dropdown-item" href = "{{ route('setlang',['en']) }}">
                                    <img class="pr-2" src="/site/images/flags-icon/flag-uk.png"
                                        alt="image">EN </a>
                            </li>
                            <li> <a class = "dropdown-item" href = "{{ route('setlang',['de']) }}">
                                    <img class="pr-2" src="/site/images/flags-icon/flag-de.png"
                                        alt="image">DE </a>
                            </li>
                            <li> <a class = "dropdown-item" href = "{{ route('setlang',['ar']) }}">
                                    <img class="pr-2" src="/site/images/flags-icon/flag-ar.png"
                                        alt="image">AR </a>
                            </li>
                            <li> <a class = "dropdown-item" href = "{{ route('setlang',['ru']) }}">
                                    <img class="pr-2" src="/site/images/flags-icon/flag-ru.png"
                                        alt="image">RU </a>
                            </li>
                        </ul>
                    </div>

                    {{--<ul class="list-unstyled" style="margin-left: 10px;">
                        <li>
                            <select class="selectpicker" data-width="fit">
                                <option value="Home"><a href="{{ route('setlang',['en']) }}">Home</a></option>

                                <option data-content='<img src="{{ asset('/site/images/flags-icon/flag-tr.png') }}"> TR'>TR</option>
                                <option data-content='<img src="{{ asset('/site/images/flags-icon/flag-uk.png') }}"> EN'>EN</option>
                                <option data-content='<img src="{{ asset('/site/images/flags-icon/flag-de.png') }}"> DE'>DE</option>
                            </select>
                        </li>
                    </ul>--}}

                    <div class="dlab-social-icon">
                        <ul>
                            <li><a target="_blank" class="site-button facebook sharp-sm fab fa-facebook-f"
                                   href="{{ $settings->facebook }}"></a></li>
                            <li><a target="_blank" class="site-button twitter sharp-sm fab fa-twitter" href="{{ $settings->twitter }}"></a>
                            </li>
                            <li><a target="_blank" class="site-button instagram sharp-sm fab fa-instagram"
                                   href="{{ $settings->instagram }}"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main header END -->
</header>
<!-- header END -->


{{--<script>
    $(function(){
        $('.selectpicker').selectpicker();
    });
</script>--}}
