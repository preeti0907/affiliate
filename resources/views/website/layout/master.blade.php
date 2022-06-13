<!doctype html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Affiliate</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->


    <!-- =========================
        Loding All Stylesheet
    ============================== -->
    <link rel="stylesheet" href="{{url('affiliate/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('affiliate/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('affiliate/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('affiliate/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('affiliate/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{url('affiliate/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css')}}">

    <link rel="stylesheet" href="{{url('affiliate/css/megamenu.css')}}">

    <!-- =========================
        Loding Main Theme Style
    ============================== -->
    <link rel="stylesheet" href="{{url('affiliate/css/style.css')}}">

    <!-- =========================
    	Header Loding JS Script
    ============================== -->
    <script src="js/modernizr.js"></script>
  </head>
  <body>
    <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <div class="preloader"></div>

    @include('website.partials.header')

    @yield('content')

    @include('website.partials.footer')
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>
<script type="text/javascript">
  var swiper = new Swiper('.product-slider', {
        spaceBetween: 30,
        effect: 'fade',
        // initialSlide: 2,
        loop: true,
        navigation: {
            nextEl: '.next',
            prevEl: '.prev'
        },
        // mousewheel: {
        //     // invert: false
        // },
        on: {
            init: function(){
                var index = this.activeIndex;

                var target = $('.product-slider__item').eq(index).data('target');

                console.log(target);

                $('.product-img__item').removeClass('active');
                $('.product-img__item#'+ target).addClass('active');
            }
        }

    });

    swiper.on('slideChange', function () {
        var index = this.activeIndex;

        var target = $('.product-slider__item').eq(index).data('target');

        console.log(target);

        $('.product-img__item').removeClass('active');
        $('.product-img__item#'+ target).addClass('active');

        // if(swiper.isEnd) {
        //     $('.prev').removeClass('disabled');
        //     $('.next').addClass('disabled');
        // } else {
        //     $('.next').removeClass('disabled');
        // }

        // if(swiper.isBeginning) {
        //     $('.prev').addClass('disabled');
        // } else {
        //     $('.prev').removeClass('disabled');
        // }
    });

    $(".js-fav").on("click", function() {
        $(this).find('.heart').toggleClass("is-active");
    });
</script>
</html>