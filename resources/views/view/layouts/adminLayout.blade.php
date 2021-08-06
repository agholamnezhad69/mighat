<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <title>میقات</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="images/fav.png">

    <!-- Stylesheets -->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&amp;display=swap"
           rel="stylesheet">--}}
    {{--  <link href='/gambo/vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>--}}
    <link href="/gambo/css/style.css" rel="stylesheet">
    <link href="/gambo/css/responsive.css" rel="stylesheet">
    {{--  <link href="/gambo/css/night-mode.css" rel="stylesheet">--}}

<!-- Vendor Stylesheets -->
    <link href="/gambo/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="/gambo/vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="/gambo/vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="/gambo/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    {{--    <link rel="stylesheet" type="text/css" href="/gambo/vendor/semantic/semantic.min.css">--}}
<!-- //////////////////////////////////////////// -->
    {{--   <link rel="stylesheet" href="/gambo/slider/bootstrap.min.css">--}}
<!--my style-->
    <!-- ====================== edit -->
    @if (Request::path() == '/')
        <link rel="stylesheet" type="text/css" href="/slider2/sliderengine/amazingslider-1.css">
        <link rel="stylesheet" href="/slider3/ism/css/my-slider.css"/>
    @elseif(Request::path() =='home/nashriye')
        <link rel="stylesheet" href="https://kenwheeler.github.io/slick/slick/slick.css">
        <link rel="stylesheet" href="https://kenwheeler.github.io/slick/slick/slick-theme.css">

    @endif

    <link rel="stylesheet" href="/gambo/css/style1.css">

    <link rel="stylesheet" href="/mighat_asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="/mighat_asset/css/style.css">
    <link rel="stylesheet" href="/mighat_asset/css/responsive.css">
    <link rel="stylesheet" href="/mighat_asset/css/style.fontawesome.css">

    <style>
        .breadcrumb-item {
            font-size: 13px !important;
            font-weight: 900;
            color: #EEEEEE;
        }

        .social-item1 {
            margin-right: 22px;
            border: 1px solid #7c6868;
            padding: 5px 14px;
            border-radius: 10px;
            display: inline;
        }

        .social-item1 i {
            font-size: 25px;
            color: #fff;
            margin: 0 0 0 15px;
        }

        .social-item1 span {
            margin-right: 10px;
            vertical-align: 6px;
            font-family: iran;
            color: #fff;
        }

        .dark-top-slider {

        }

        body {


            background: url("/mighat_asset/img/ef.png") !important;
            background-color: #d3d3d3 !important;
        }

        .nav_center {
            top: 14px;
            position: absolute;
            right: 63px;
            background: url(/gambo/images/logog.png) no-repeat;
            width: 200px;
            height: 200px;
            max-width: 100px;
        }

        .nav_left {
            position: absolute;
            left: 50px;
            top: 28px;
        }

        .fab {
            font-size: 23px;
        }

        html, body {
            height: unset !important
        }

        #accordion0 {
            /* padding: 0 19px;*/
        }

        .form-group.mt-1 {
            text-align: right;
            font-family: IRANSans;
        }

        .form-group.mt-1 label.control-label {
            font-size: 17px;
            font-weight: 800;
        }

        .ui[class*="left icon"].swdh19.input > input {
            text-align: right;
            font-family: IRANSans !important;
            direction: rtl;
        }

        textarea.form-control {
            text-align: right;
            font-family: IRANSans !important;
            direction: rtl;
            height: 185px;

        }

        .panel-title a.collapsed {
            text-align: right;
            font-family: iransans_news_regular;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;


        }

        .panel-title a {
            text-align: justify;
            font-family: iransans_news_regular;
            line-height: 33px;
        }

        .panel-body {
            text-align: justify;
            font-family: iransans_news_bold;
            line-height: 38px;
        }

        .panel-title > a:before {
            margin-left: 7px;
            margin-top: -3px;
        }

        i.fas.fa-spinner.fa-pulse {
            font-weight: 900;
            font-size: 20px;
            position: relative;
            top: 2px;
            right: 7px;
        }

        .ui[class*="left icon"].swdh19.input > input {
            height: 40px;
        }

        .isEmpty {
            border: 1px solid red !important;
        }

    </style>

    <!--**************** start pre loader css -->
    <style>
        .se-pre-con {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url(/mighat_asset/img/preAnimationLoader/loader-128x/Preloader_8.gif) center no-repeat #fff;
        }
    </style>
    <!--**************** end pre loader css -->


</head>

<body>
<!--****************pre loader -->
<div class="se-pre-con"></div>


<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
        <img width="50" height="50" id="close_btn" src="/mighat_asset/img/close.png" alt="">
    </a>

    <a class="menue_item" href="/">خانه</a>


    <a class="menue_item" href="/home/news">اخبار</a>


    <a class="menue_item" href="/home/persons">یاران قرارگاه ملی</a>


    <a class="menue_item" href="/home/shop">خدمات </a>


    <a class="menue_item" href="/home/shop_product">دوره های آموزشی</a>


    <a class="menue_item" href="/home/shop_product">مجله تصویری میقات</a>


    <a class="menue_item" href="/home/employment">فرصت های شغلی</a>

    <!--                        <li class="nav-item">
                                <a class="nav-link" href="/home/nashriye">نشریه</a>
                            </li>-->

    <a class="menue_item" href="/home/contactToLeader">ارتباط با نماینده مقام معظم رهبری</a>


</div>

<section id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="logo-parent d-flex align-items-center h-100">
                    <a href="/">
<!--                        <img height="45px" width="auto" class="shora-logo" src="/mighat_asset/img/logo1.svg">-->
                    </a>
<!--                    <img height="45px" width="auto" class="namaz-logo mx-4" src="/mighat_asset/img/head1.png">-->
                </div>

            </div>
            <div class="col-md-3">
                <div class="social-parent d-flex align-items-center h-100" id="socail_top">
                    <div class="social-item"><a href="#"><img width="20px" height="auto"
                                                              src="/mighat_asset/img/app.svg"></a>
                    </div>
                    <div class="social-item"><a href="#"><img width="20px" height="auto"
                                                              src="/mighat_asset/img/sourosh.svg"></a>
                    </div>
                    <div class="social-item"><a href="#"><img width="20px" height="auto"
                                                              src="/mighat_asset/img/aparat.svg"></a>
                    </div>
                    <div class="social-item"><a href="#"><img width="20px" height="auto"
                                                              src="/mighat_asset/img/bale.svg"></a>
                    </div>
                    <div class="social-item1">
                        <a href="/user/login">
                            <i
                                class="fa fa-user"></i>
                            <span>ورود</span>

                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<section id="menue">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!--*************************************************************-->
                <span class="menu_btn" style="font-size:30px;cursor:pointer" onclick="openNav()">
                   <img width="40" height="40" src="/mighat_asset/img/mobile-menu.png" alt="">
                </span>
                <!--*************************************************************-->


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class=" active">
                            <a class="nav-link" href="/">خانه <span class="sr-only">(current)</span></a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/home/news">اخبار</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/home/persons">یاران قرارگاه ملی</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/home/shop">خدمات </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/home/shop_product">دوره های آموزشی</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/home/shop_product">مجله تصویری میقات</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/home/employment">فرصت های شغلی</a>
                        </li>
                        <!--                        <li class="nav-item">
                                                    <a class="nav-link" href="/home/nashriye">نشریه</a>
                                                </li>-->
                        <li class="nav-item">
                            <a class="nav-link" href="/home/contactToLeader">ارتباط با نماینده مقام معظم رهبری</a>
                        </li>


                    </ul>
                </div>


            </nav>
            <div class="social-parent d-flex align-items-center h-100" id="socail_menue">
                <div class="social-item"><a href="#"><img width="20px" height="auto"
                                                          src="/mighat_asset/img/app.svg"></a>
                </div>
                <div class="social-item"><a href="#"><img width="20px" height="auto"
                                                          src="/mighat_asset/img/sourosh.svg"></a>
                </div>
                <div class="social-item"><a href="#"><img width="20px" height="auto"
                                                          src="/mighat_asset/img/aparat.svg"></a></div>
                <div class="social-item"><a href="#"><img width="20px" height="auto"
                                                          src="/mighat_asset/img/bale.svg"></a></div>
            </div>
        </div>
    </div>
</section>


<!--start  content-->
@yield('content')
<!--end content-->


<script src="{{ url('js/app.js') }}"></script>

<!-- Javascripts -->
<script src="/gambo/js/jquery-3.3.1.min.js"></script>

{{--<script src="/gambo/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>--}}
<script src="/gambo/vendor/OwlCarousel/owl.carousel.js"></script>
<script src="/gambo/vendor/semantic/semantic.min.js"></script>
{{--<script src="/gambo/js/jquery.countdown.min.js"></script>--}}
<script src="/gambo/js/custom.js"></script>
{{--<script src="/gambo/js/offset_overlay.js"></script>--}}
{{--<script src="/gambo/js/night-mode.js"></script>--}}
<script src="/gambo/js/product.thumbnail.slider.js"></script>


<!-- ========================== edit -->

@if (Request::path() == '/')


@elseif(Request::path() =='home/nashriye')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.12/jquery.mousewheel.js"></script>
    <script>
        var slickCarousel = $('.slider-vertical');
        slickCarousel.slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 3,
            vertical: true,
            verticalSwiping: true,
            dots: false,
            centerPadding: '50px',
            arrows: true,
            prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0" role="button">Previous</button>',
            nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button">Next</button>',
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                }
            }, {
                breakpoint: 639,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    vertical: false,
                    verticalSwiping: false,
                }
            }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });


        //mouse wheel
        slickCarousel.mousewheel(function (e) {
            e.preventDefault();
            if (e.deltaY < 0) {
                $(this).slick('slickNext');
            } else {
                $(this).slick('slickPrev');
            }
        });
    </script>
@endif

@if (Request::path() == 'user/account')

@endif


<!--**************start pre animation loder js-->


<script src="/mighat_asset/js/jquery.min.js"></script>
<script src="/mighat_asset/js/index.js"></script>

<script>
    //paste this code under head tag or in a seperate js file.
    // Wait for window load
    $(window).load(function () {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");
        ;
    });
</script>

<!--**************end pre animation loder js-->

</body>


</html>
