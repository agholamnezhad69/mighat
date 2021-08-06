<!doctype html>
<html lang="en">


<!-- Mirrored from paradigm-shift.ir/Brego/brego/dark/index.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Jul 2019 07:36:49 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <title>میقات</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="/gambo/css/style.css" rel="stylesheet">
    <link href="/gambo/css/responsive.css" rel="stylesheet">
{{--  <link href="/gambo/css/night-mode.css" rel="stylesheet">--}}

<!-- Vendor Stylesheets -->
    <link href="/gambo/vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">

    <link rel="stylesheet" href="/gambo/css/style1.css">


    <link rel="icon" type="image/png" href="images/fav.png">
    <link rel="stylesheet" href="https://kenwheeler.github.io/slick/slick/slick.css">
    <link rel="stylesheet" href="https://kenwheeler.github.io/slick/slick/slick-theme.css">
    <style>

        .wrapper {
            /* background-color: #000 !important; */
            /* padding-top: 106px !important;*/
        }

        .blog-gambo {
            padding: 0px 0 14px;

        }

        .top-nashriye {
            margin: 10px auto 5px auto;
        }

        ul.team-social {

            text-align: center;
        }

        .blog-title {
            width: 100%;
        }

        .pdpt-title h4 {
            font-family: cinema !important;
            text-align: center;
            font-size: 35px;
            color: #e70762;
        }

        .wrapper .blog-gambo .row {
            position: relative;

        }

        .righ-nashriye {
            position: absolute;
            top: 8px;
        }

        .blog-item {
            margin-bottom: 0;
        }

        /*  .owl-carousel.owl-loaded {
              position: absolute;
              top: 6%;
              transform: rotate(270deg);
          }*/


        [v-clock] {
            display: none;
        }

        div#carousel-html5-lightbox {
            display: none !important;
        }

        .amazingcarousel-list-container {
            height: 1445px !important;
        }

        /*      .amazingcarousel-next {
                  left: 79px;
              }

              .amazingcarousel-prev {
                  top: -23px;
                  left: 82px;
              }*/

        body, html {
            height: unset;
        }

        .container1 {
            margin: 39px auto !important;
        }

        .slider-vertical .slick-prev:before, .slider-vertical .slick-next:before {
            display: none;
        }

        .slider-vertical .slick-prev, .slider-vertical .slick-next {
            width: 0;
            height: 0;
            border-style: solid;
            margin: 10px;
            display: inline-block;
            left: 0;
            right: 0;
            margin: auto;
            z-index: 10;
            cursor: pointer;
        }

        .slider-vertical .slick-prev {
            border-width: 0 14px 14px 14px;
            border-color: #000000 transparent;
            top: -30px;
        }

        .slider-vertical .slick-next {
            border-width: 14px 14px 0px 14px;
            border-color: #000000 transparent;
            bottom: -30px;
            top: auto;
        }

        .slider-vertical .slick-prev.slick-disabled, .slider-vertical .slick-next.slick-disabled {
            opacity: 0.1;
            cursor: default;
        }

        .slider-vertical div {
            height: 250px;
            background: #333333;
            text-align: center;
            font-size: 50px;
            color: #ffffff;
        }

        img.img-responsive {
            width: 100%;
        }

        .container1 {
            margin: 50px auto;
        }

        .slider-vertical .slick-prev:before, .slider-vertical .slick-next:before {
            display: none;
        }

        .slider-vertical .slick-prev, .slider-vertical .slick-next {
            width: 0;
            height: 0;
            border-style: solid;
            margin: 10px;
            display: inline-block;
            left: 0;
            right: 0;
            margin: auto;
            z-index: 10;
            cursor: pointer;
        }

        .slider-vertical .slick-prev {
            border-width: 0 14px 14px 14px;
            border-color: #000000 transparent;
            top: -30px;
        }

        .slider-vertical .slick-next {
            border-width: 14px 14px 0px 14px;
            border-color: #000000 transparent;
            bottom: -30px;
            top: auto;
        }

        .slider-vertical .slick-prev.slick-disabled, .slider-vertical .slick-next.slick-disabled {
            opacity: 0.1;
            cursor: default;
        }

        .slider-vertical div {
            height: 250px;
            background: #333333;
            text-align: center;
            font-size: 50px;
            color: #ffffff;
        }

        .slider-vertical .slick-prev {
            border-width: 0 14px 14px 14px;
            border-color: #4f0c55 transparent !important;
            top: -30px;
        }

        .slick-list.draggable {
            height: 1692.29px !important;
        }
    </style>


    <link rel="stylesheet" href="/mighat_asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="/mighat_asset/css/style.css">
    <link rel="stylesheet" href="/mighat_asset/css/responsive.css">
    <link rel="stylesheet" href="/mighat_asset/css/style.fontawesome.css">

    <style>
        .slider-vertical div {
            background-color: #fff;
        }
    </style>

</head>

<body>


<div class="mask">
    <img src="/gambo/images/Preloader_8.gif" alt="">
</div>


<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
        <img width="50" height="50" id="close_btn" src="/mighat_asset/img/close.png" alt="">
    </a>
    <a class="menue_item" href="/">خانه</a>
    <a class="menue_item" href="/home/persons">ادوار</a>
    <a class="menue_item" href="/home/employment">استخدام</a>
    <a class="menue_item" href="/home/shop">خدمات رفاهی</a>
    <a class="menue_item" href="/home/news">اخبار</a>
    <a class="menue_item" href="/home/nashriye">نشریه</a>
    <a class="menue_item" href="/home/contactToLeader">ارتباط با نماینده رهبری</a>


</div>
<!-- Header Start -->
<section id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="logo-parent d-flex align-items-center h-100">
                    <img height="45px" width="auto" class="shora-logo" src="/mighat_asset/img/log.png">
                    <img height="45px" width="auto" class="namaz-logo mx-4" src="/mighat_asset/img/namaz.svg">
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
                        <li class="nav-item active">
                            <a class="nav-link" href="/">خانه <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/home/persons">ادوار</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/home/employment">استخدام</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/home/shop">خدمات رفاهی</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/home/news">اخبار</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/home/nashriye">نشریه</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/home/contactToLeader">ارتباط با نماینده رهبری</a>
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
<!-- Header End -->


<div class="wrapper  dark-top-slider" id="app" v-cloak>


    <div class="container">
        <div class="row">
            <div class="blog-title">
                <div class="pdpt-bg mb-30 col-md-12 col-lg-12 top-nashriye">
                    <div class="pdpt-title">
                        <h4>@{{ lastNashriye }}</h4>
                    </div>
                    <div class="cntct-social">
                        <ul class="team-social">
                            <li v-for="(item, index) in selected_nashriye" v-if="index < 5">
                                <a @click="showSelectNashriye(index)" href="#" class="scl-btn hover-btn">@{{ index+1
                                    }}</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-gambo">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2" style="margin-top: -34px;padding-right: 0">

                    {{-- <div class="container1">
                         <div class="slider-vertical">
                             <div v-for="row in all_nashriye_always" @click="showSeletedNashriye(row.groupp)">
                                 <img :src="'/nashriye/'+row.img" class="img-responsive">
                             </div>
                         </div>
                     </div>--}}
                    {{--     <div class="container1">
                             <div class="slider-vertical">
                                 <div v-for="row in all_nashriye_always"
                                      @click="showSeletedNashriye(row.groupp)">
                                     <h3>1</h3>
                                 </div>

                             </div>
                         </div>--}}
                    <div class="container1">
                        <div class="slider-vertical">


                            @foreach($all_nashriye as $object)

                                @foreach($object as $item)

                                    <div @click="showSeletedNashriye({{$item->groupp}})">
                                        <img src="/nashriye/{{$item->img}}" class="img-responsive">
                                    </div>

                                    @break

                                @endforeach

                            @endforeach
                        </div>
                    </div>


                </div>
                <div class="col-lg-10 col-md-10 " style="margin-top: 5px;padding: 0">

                    <div v-for="(row, index) in selected_nashriye" v-if="index < 5 " class="blog-item">
                        <a v-if="nashriyeChange==index" href="#" class="blog-img">
                            <img :src="'/nashriye/'+row.img" alt="">
                            {{-- <div class="blog-cate-badge">Food & Life Style</div>--}}
                        </a>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <loading :active.sync="isLoading" color="#fff" background-color="#000" loader="dots"></loading>

</div>
<!-- Body End -->
<script src="{{ url('js/app.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.12/jquery.mousewheel.js"></script>
<script>
    var slickCarousel = $('.slider-vertical');
    slickCarousel.slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 1,
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
<script src="/mighat_asset/js/index.js"></script>

</body>


</html>


