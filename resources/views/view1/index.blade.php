@extends('view1.layouts.adminLayout')

@section('content')


    <div class="main-content">


        <!--*******************************************start  top content-->
        <section id="top-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12  col-sm-12 layerslider-container">
                        <!--*************************************start home slider -->
                        <div id="jssor_1"
                             style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
                            <!-- Loading Screen -->
                            <div data-u="loading" class="jssorl-009-spin"
                                 style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                                <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;"
                                     src="/mighat_asset/img/spin.svg"/>
                            </div>
                            <div data-u="slides"
                                 style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">


                                <style>
                                    div[u="thumb"] {
                                        color: #fff !important;
                                        right: 50px !important;
                                        font-family: iran !important;
                                    }
                                </style>


                                @foreach($news as $item)

                                    <div>
                                        <a href="/home/news_single/{{$item->id}}">

                                            <img data-u="image" src="/uploads/news/{{$item->id}}/{{$item->img_news}}"/>
                                        </a>
                                        <div u="thumb">
                                            {{$item->title_news}}
                                        </div>

                                    </div>

                                @endforeach

                                {{--   <div>
                                       <img data-u="image" src="/mighat_asset/sliderHome/img/045.jpg"/>
                                       <div u="thumb">Slide Description 001
                                       </div>
                                   </div>
                                   <div>
                                       <img data-u="image" src="/mighat_asset/sliderHome/img/043.jpg"/>
                                       <div u="thumb">Slide Description 002
                                       </div>
                                   </div>
                                   <div>
                                       <img data-u="image" src="/mighat_asset/sliderHome/img/046.jpg"/>
                                       <div u="thumb">Slide Description 003
                                       </div>
                                   </div>
                                   <div>
                                       <img data-u="image" src="/mighat_asset/sliderHome/img/047.jpg"/>
                                       <div u="thumb">Slide Description 004
                                       </div>
                                   </div>
                                   <div>
                                       <img data-u="image" src="/mighat_asset/sliderHome/img/048.jpg"/>
                                       <div u="thumb">Slide Description 005
                                       </div>
                                   </div>
                                   <div>
                                       <img data-u="image" src="/mighat_asset/sliderHome/img/044.jpg"/>
                                       <div u="thumb">Slide Description 006
                                       </div>
                                   </div>
                                   <div>
                                       <img data-u="image" src="/mighat_asset/sliderHome/img/050.jpg"/>
                                       <div u="thumb">Slide Description 007
                                       </div>
                                   </div>
                                   <div>
                                       <img data-u="image" src="/mighat_asset/sliderHome/img/049.jpg"/>
                                       <div u="thumb">Slide Description 008
                                       </div>
                                   </div>
                                   <div>
                                       <img data-u="image" src="/mighat_asset/sliderHome/img/052.jpg"/>
                                       <div u="thumb">Slide Description 009
                                       </div>
                                   </div>
                                   <div>
                                       <img data-u="image" src="/mighat_asset/sliderHome/img/051.jpg"/>
                                       <div u="thumb">Slide Description 010
                                       </div>
                                   </div>--}}
                            </div>
                            <a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">image
                                gallery</a>
                            <!-- Thumbnail Navigator -->
                            <div u="thumbnavigator"
                                 style="position:absolute;bottom:0px;left:0px;width:980px;height:50px;color:#FFF;overflow:hidden;cursor:default;background-color:rgba(0,0,0,.5);">
                                <div u="slides">
                                    <div u="prototype" style="position:absolute;top:0;left:0;width:980px;height:50px;">
                                        <div u="thumbnailtemplate"
                                             style="position:absolute;top:0;left:0;width:100%;height:100%;font-family:arial,helvetica,verdana;font-weight:normal;line-height:50px;font-size:16px;padding-left:10px;box-sizing:border-box;"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Arrow Navigator -->
                            <div data-u="arrowleft" class="jssora061" style="width:55px;height:55px;top:0px;left:25px;"
                                 data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                                <svg viewbox="0 0 16000 16000"
                                     style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                    <path class="a"
                                          d="M11949,1919L5964.9,7771.7c-127.9,125.5-127.9,329.1,0,454.9L11949,14079"></path>
                                </svg>
                            </div>
                            <div data-u="arrowright" class="jssora061"
                                 style="width:55px;height:55px;top:0px;right:25px;"
                                 data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                                <svg viewbox="0 0 16000 16000"
                                     style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                    <path class="a"
                                          d="M5869,1919l5984.1,5852.7c127.9,125.5,127.9,329.1,0,454.9L5869,14079"></path>
                                </svg>
                            </div>
                        </div>
                        <!--**************************************end home slider -->
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 main-link-container">
                        <div class="top-right-item col-md-12 ">
                            <a href="#">
                                <div class="top-right-item-container">
                                    <span>منشور انقلاب</span>
                                </div>
                            </a>
                        </div>
                        <div class="top-right-item top-right-item1 col-md-12  ">
                            <a href="#">
                                <div class="top-right-item-container">
                                    <span>منشور انقلاب</span>

                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--*******************************************end  top content-->

        <!--*******************************************start  nashriye-->
        <section id="nashriye">
            <div class="container">
                <div class="row row-nashriye">
                    @foreach($products_majale as $item)
                        <div class="nashriye-item col-md-3 col-sm-6 col-xs-6 ">

                            <a href="/home/shop_single_product/{{$item->id}}">
                                <img
                                    src="/uploads/product/{{$item->id}}/{{$item->img}}"
                                    alt="">
                                <div class="item-title">
                                    {{$item->title}}
                                </div>
                            </a>
                        </div>
                    @endforeach


                </div>
            </div>
        </section>
        <!--*******************************************end  nashriye-->

        <section class="section-seperate"></section>

        <!--*******************************************start  tutorial dore-->
        <section id="carousel1" class="container">
            <div class="row">
                <div class="container">
                    <h2>خدمات </h2>
                    <!-- Flickity HTML init -->
                    <div class="carousel1">

                        @foreach($kadamat_refahi as $item)
                            <div class="carousel-cell">
                                <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                                    <div class="carousel1-right">

                                        <a href="/home/shop_single/{{$item->id}}"><h3>{{$item->title}}</h3></a>
                                        <div class="tutorial-time">
                                            {{$item->kdadmat_from_date}}
                                        </div>
                                        <div class="tutorial-desc">
                                            {{ $item->information }}
                                        </div>


                                        <div class="featuredWebinarCard-details">
                                            <div class="avatarBox avatarBox-lg">
                                                <span class="">
                                                    <div class="avatar">
                                                        <img
                                                            src="/uploads/khadamat/{{$item->id}}/{{$item->img}}"
                                                            alt="مژده جعفری">
                                                    </div>
                                                </span>
                                                <span class="to-date">
                                                    {{$item->kdadmat_to_date}}

                                                </span>
                                            </div>
                                            <div class="featuredWebinarCard-price">
                                                <div class="primary-price">

                                                </div>
                                                <div class="price">
                                                    @if($item->price==0)
                                                        رایگان
                                                    @else
                                                        {{$item->price}} تومان
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="featuredWebinarCard-btn"><a
                                                    href="https://eseminar.tv/webinar/%DA%A9%D8%A7%D8%B1%DA%AF%D8%A7%D9%87-%D8%B7%D8%B1%D8%A7%D8%AD%DB%8C-%D8%AF%D8%A7%D8%B1%D9%88-%D9%88-%D8%A8%DB%8C%D9%88-%D8%A7%D9%86%D9%81%D9%88%D8%B1%D9%85%D8%A7%D8%AA%DB%8C%DA%A9">
                                                    <button
                                                        class="es__btn es__btn-rounded-xl es__btnGradiant es__btnGradiantSuccess es__btn-font-md es__btn-md">
                                                        خرید بلیت
                                                    </button>
                                                </a></div>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                                    <div class="carousel1-left">
                                        <img src="/uploads/khadamat/{{$item->id}}/{{$item->img}}" alt="">

                                    </div>

                                </div>
                            </div>
                        @endforeach


                    </div>

                </div>
            </div>
        </section>
        <!--*******************************************end  tutorial dore-->
        <!--*******************************************start  tutorial dore for mobile-->
        <section id="carousel2" class="container">
            <div class="row">
                <div class="container">
                    <h2>خدمات </h2>
                    <div class="carousel" data-flickity='{ "groupCells": true }'>


                        @foreach($kadamat_refahi as $item)
                            <div class="dore-item col-lg-3 col-12 col-md-6 col-xl-4">
                                <div class="card">
                                    <img
                                        src="/uploads/khadamat/{{$item->id}}/{{$item->img}}"
                                        alt="Denim Jeans" style="width:100%">
                                    <a href="/home/shop_single/{{$item->id}}"><h3>{{$item->title}}</h3></a>
                                    <p class="price">
                                        {{$item->kdadmat_from_date}}
                                    </p>
                                    <p class="desc">

                                        @if($item->price==0)
                                            رایگان
                                        @else
                                            {{$item->price}} تومان
                                        @endif

                                    </p>
                                    <p>
                                        <button>خرید</button>
                                    </p>
                                </div>

                            </div>
                        @endforeach

                    </div>

                </div>
            </div>
        </section>
        <!--*******************************************end  tutorial dore for mobile-->
        <section class="section-seperate " style="margin-top: 50px"></section>
        <!--*******************************************start  employment and find work-->
        <section id="carousel" class="container">
            <div class="row">
                <div class="container">
                    <h2>دوره های آموزشی</h2>
                    <div class="carousel" data-flickity='{ "groupCells": true }'>

                        @foreach($products as $item)
                            <div class="dore-item col-lg-3 col-12 col-md-6 col-xl-4">
                                <div class="card">
                                    <img src="/uploads/product/{{$item->id}}/{{$item->img}}"
                                         alt="Denim Jeans" style="width:100%">
                                    <a href="/home/shop_single_product/{{$item->id}}"><h3>{{$item->title}}</h3></a>
                                    <p class="price">
                                        @if($item->is_online == 0)
                                            آفلاین
                                        @else
                                            آنلاین
                                        @endif
                                    </p>
                                    <p class="desc">
                                        @if($item->price==0)
                                            رایگان
                                        @else
                                            {{$item->price}} تومان
                                        @endif
                                    </p>
                                    <p>
                                        <button>سبد خرید</button>
                                    </p>
                                </div>

                            </div>

                        @endforeach

                    </div>

                </div>
            </div>
        </section>
        <!--*******************************************end  employment and find work-->

@endsection
