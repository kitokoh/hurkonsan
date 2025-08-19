<!doctype html>
<html class="no-js" lang="tr">
@include('site.layouts.head')
<body>
@yield('css')
<main class="main-body">
    <!--====== Header Start ======-->
    @include('site.layouts.header')
    <!--====== Header Ends ======-->
    @yield('content')
    @include('site.layouts.footer')
{{--    <a href="#" class="back-to-top"><img src="{{ asset('site/assets/images/favicon.png') }}" alt=""></a>--}}
    <!--====== BACK TOP TOP PART ENDS ======-->
</main>
@include('site.layouts.script')
@yield('js')
</body>
</html>
