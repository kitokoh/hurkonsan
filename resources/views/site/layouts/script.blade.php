<!-- JAVASCRIPT FILES ========================================= -->

<script src="{{ asset('site/assets/js/jquery.min.js') }}"></script><!-- JQUERY.MIN JS -->
<script src="{{ asset('site/assets/plugins/wow/wow.js') }}"></script><!-- WOW JS -->
<script src="{{ asset('site/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{ asset('site/assets/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script><!-- FORM JS -->
<script src="{{ asset('site/assets/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script><!-- FORM JS -->
<script src="{{ asset('site/assets/plugins/magnific-popup/magnific-popup.js') }}"></script><!-- MAGNIFIC POPUP JS -->
<script src="{{ asset('site/assets/plugins/counter/waypoints-min.js') }}"></script><!-- WAYPOINTS JS -->
<script src="{{ asset('site/assets/plugins/counter/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
<script src="{{ asset('site/assets/plugins/imagesloaded/imagesloaded.js') }}"></script><!-- IMAGESLOADED -->
<script src="{{ asset('site/assets/plugins/masonry/masonry-3.1.4.js') }}"></script><!-- MASONRY -->
<script src="{{ asset('site/assets/plugins/masonry/masonry.filter.js') }}"></script><!-- MASONRY -->
<script src="{{ asset('site/assets/plugins/owl-carousel/owl.carousel.js') }}"></script><!-- OWL SLIDER -->
<script src="{{ asset('site/assets/plugins/lightgallery/js/lightgallery-all.min.js') }}"></script><!-- Lightgallery -->
<script src="{{ asset('site/assets/plugins/scroll/scrollbar.min.js') }}"></script><!-- scroll -->
<script src="{{ asset('site/assets/js/custom.js') }}"></script><!-- CUSTOM FUCTIONS  -->
<script src="{{ asset('site/assets/js/dz.carousel.min.js') }}"></script><!-- SORTCODE FUCTIONS  -->
<script src="{{ asset('site/assets/plugins/countdown/jquery.countdown.js') }}"></script><!-- COUNTDOWN FUCTIONS  -->
<script src="{{ asset('site/assets/js/dz.ajax.js') }}"></script><!-- CONTACT JS  -->
<script src="{{ asset('site/assets/plugins/rangeslider/rangeslider.js') }}" ></script><!-- Rangeslider -->
<script src="{{ asset('site/assets/js/jquery.lazy.min.js') }}"></script>

<!-- REVOLUTION JS FILES -->

<script src="{{ asset('site/assets/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('site/assets/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="{{ asset('site/assets/plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('site/assets/plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('site/assets/plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('site/assets/plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('site/assets/plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('site/assets/plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('site/assets/plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('site/assets/plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<script src="{{ asset('site/assets/js/rev.slider.js') }}"></script>


<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "{{ $settings->whatsapp }}", // WhatsApp numarası
            call_to_action: "{{__('contact.Wp_Message')}}", // Görüntülenecek yazı
            position: "left", // Sağ taraf için 'right' sol taraf için 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () {
            WhWidgetSendButton.init(host, proto, options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    })();
</script>

<script>
    jQuery(document).ready(function() {
        'use strict';
        dz_rev_slider_5();
        $('.lazy').Lazy();
    });	/*ready*/
</script>

{{--sağ tık özelliğini kapatma--}}
<script>
    document.addEventListener("contextmenu", function(e){
        e.preventDefault();
    }, false);
</script>

{{--sayfanızda Ctrl + C, Ctrl + V, Ctrl + U veya F6 tuşlarının kullanılmasını kapatma--}}
<script>
    document.onkeydown = function(e) {
        if (e.ctrlKey &&
            (e.keyCode === 67 ||
                e.keyCode === 86 ||
                e.keyCode === 85 ||
                e.keyCode === 117)) {
            alert('Kopyalama özelliği kapatılmıştır!');
            return false;
        } else {
            return true;
        }
    };
</script>
