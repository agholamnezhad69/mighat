@extends('view1.layouts.adminLayout')

@section('content')


        <section id="content-single">

            <div class="container">

                <div class="row">
                    <div class="col-md-8 ">
                        <div class="khadamat_prop">

                            <h1>{{$q_kr->title}}</h1>
                            <!-- ***********************************start gallery slider -->

                            <div id="jssor_1"
                                 style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:480px;overflow:hidden;visibility:hidden;">
                                <!-- Loading Screen -->
                                <div data-u="loading" class="jssorl-009-spin"
                                     style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                                    <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;"
                                         src="img/spin.svg"/>
                                </div>
                                <div data-u="slides"
                                     style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
                                    @foreach($q_kr_imgs as $item)
                                        <div>
                                            <img data-u="image" src="/uploads/khadamat/{{$q_kr->id}}/{{$item->img}}"/>
                                            <img data-u="thumb" src="/uploads/khadamat/{{$q_kr->id}}/{{$item->img}}"/>
                                        </div>
                                    @endforeach

                                </div>
                                <a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">web
                                    animation</a>
                                <!-- Thumbnail Navigator -->
                                <div data-u="thumbnavigator" class="jssort101"
                                     style="position:absolute;left:0px;bottom:0px;width:980px;height:100px;background-color:#000;"
                                     data-autocenter="1" data-scale-bottom="0.75">
                                    <div data-u="slides">
                                        <div data-u="prototype" class="p" style="width:190px;height:90px;">
                                            <div data-u="thumbnailtemplate" class="t"></div>
                                            <svg viewbox="0 0 16000 16000" class="cv">
                                                <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                                                <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                                                <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <!-- Arrow Navigator -->
                                <div data-u="arrowleft" class="jssora106"
                                     style="width:55px;height:55px;top:162px;left:30px;"
                                     data-scale="0.75">
                                    <svg viewbox="0 0 16000 16000"
                                         style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                        <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                                        <polyline class="a"
                                                  points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
                                        <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
                                    </svg>
                                </div>
                                <div data-u="arrowright" class="jssora106"
                                     style="width:55px;height:55px;top:162px;right:30px;"
                                     data-scale="0.75">
                                    <svg viewbox="0 0 16000 16000"
                                         style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                        <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                                        <polyline class="a"
                                                  points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
                                        <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
                                    </svg>
                                </div>
                            </div>

                            <!-- ***********************************end gallery slider -->
                            <!-- ***********************************start only mobile  purchase -->
                            <div class="purchase purchase2 ">
                                <h1>خدمات رفاهی </h1>
                                <div class="kadamt_purchase">

                                    <div class="percen">
                                        <span class="purchase-number"> %1</span>
                                        <span class="purchase-text">تخفیف</span>
                                    </div>
                                    <div class="takhfif_icon"></div>
                                    <div class="purchase__suggest">
                                        <span class="fa fa-shopping-basket"></span>
                                        <span class="purchase__member">1</span>
                                        <span class="purchase__text">نفر این پیشنهاد را خریده‌اند</span>
                                    </div>
                                    <div class="deal-radio__top-box">
                                        <h4 class="deal-radio__title">{{$q_kr->kdadmat_from_date}}</h4>
                                    </div>
                                    <div class="deal-radio__bottom-box">
                                        <div class="deal-radio__purchase">
<!--                                            <span class="deal-radio__number">37</span>
                                            <span class="deal-radio__text">خرید</span>-->
                                        </div>
                                        <div class="deal-radio__left-box">
                                            <div class="deal-radio__price">
<!--                                                <p class="deal-radio__old-price">110,000</p>-->
                                                <p class="deal-radio__new-price">
                                                    <span class="deal-radio__price-number">{{$q_kr->price}}</span>
                                                    <span class="deal-radio__price-text">تومان</span>
                                                </p>
                                            </div>
<!--                                            <div class="deal-radio__percent-box">
                                             <span>%20</span>
                                            </div>-->
                                        </div>
                                    </div>
                                    <div class="deal-radio__slide-box">
                                        <ul class="deal-radio__list-option">
                                            <li><span
                                                    class="deal-radio__answer">{{$q_kr->information}}</span>
                                            </li>
                                        </ul>
                                    </div>


                                </div>
                            </div>
                            <!-- ***********************************end only mobile  purchase -->
                            <!-- ***********************************end gallery slider -->


                            <!--*****************************************start detail product-->

                            <div class="deal-feature">
<!--                                <ul>
                                    <li class="deal-feature__item"><h2 class="deal-feature__title">چرا &lt;!&ndash; &ndash;&gt;رستوران
                                            پنج
                                            ستاره
                                            رزمیلو</h2>
                                        <div class="deal-feature__text"><p style="text-align:right" dir="rtl">رستوران
                                                پنج
                                                ستاره
                                                رزمیلو&nbsp;با ویو عالی و منظره شمال تهران</p>
                                            <p style="text-align:right" dir="rtl">ویژه بوفه سلف سرویس صبحانه با بیش از
                                                100
                                                آیتم
                                                متنوع</p>
                                            <p style="text-align:right" dir="rtl"><strong>بوفه صبحانه شامل:</strong>
                                                بوفه
                                                سرد،
                                                بوفه گرم، بوفه مربا، سالاد و میوه، آجیل و میوه خشک، نوشیدنی، چای و
                                                دمنوش،
                                                نان و
                                                شیرینی</p>
                                            <p style="text-align:right" dir="rtl">یکی از کامل ترین و متنوع ترین بوفه های
                                                صبحانه
                                                تهران با ویو رویایی</p>
                                            <p style="text-align:right" dir="rtl">متشکل از چندین فضای محتلف اعم از بخش
                                                کافه،
                                                بخش
                                                رستوران و بخش فضای باز تراس با سقف متحرک</p>
                                            <p style="text-align:right" dir="rtl"><span>دارای فضای روف گاردن با ویو 360 درجه شهر تهران</span>
                                            </p>
                                            <p style="text-align:right" dir="rtl">دسترسی به مرکز خرید پرنیان</p>
                                            <p>&nbsp;</p>
                                            <p style="text-align:right">استفاده از محصولات درجه یک و تازه</p>
                                            <p style="text-align:right">امکان برگزاری مراسم، تولد و جلسات در فضایی بی
                                                نظیر</p>
                                        </div>
                                        <div>
                                        </div>
                                    </li>
                                    <li class="deal-feature__item">
                                        <div class="deal-feature__title">ویژگی‌ها</div>
                                        <div class="deal-feature__text">
                                            <ul class="deal-feature__list"></ul>
                                        </div>
                                    </li>
                                    <li class="deal-feature__item"><h3
                                            class="deal-feature__title deal-feature__facilities">
                                            شرایط استفاده</h3>
                                        <div class="deal-feature__text"><p><h4 style="margin-right: 10px;"> تاریخ
                                                استفاده:
                                                از
                                                1399/11/5 تا 1399/12/24</h4>
                                            <p><strong>سرویس‌دهی در تاریخ‌های 9 و 10 بهمن ماه به دلیل تکمیل ظرفیت
                                                    رستوران
                                                    امکان
                                                    پذیر نیست</strong></p>
                                            <div><span><br></span></div>
                                            <p dir="rtl" style="text-align: right;">هماهنگی پیش از مراجعه الزامی
                                                است.</p></p>
                                        </div>
                                    </li>
                                </ul>-->
                                <?php
                                echo $q_kr->descc;
                                ?>
                                <div class="ExternalMedia-modal"></div>
                            </div>

                            <!--*****************************************end detail product-->

                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="purchase purchase1">
                            <h1>خدمات رفاهی</h1>
                            <div class="kadamt_purchase">

                                <div class="percen">
                                    <span class="purchase-number"> %1</span>
                                    <span class="purchase-text">تخفیف</span>
                                </div>
                                <div class="takhfif_icon"></div>
                                <div class="purchase__suggest">
                                    <span class="fa fa-shopping-basket"></span>
                                    <span class="purchase__member">1</span>
                                    <span class="purchase__text">نفر این پیشنهاد را خریده‌اند</span>
                                </div>
                                <div class="deal-radio__top-box">
                                    <h4 class="deal-radio__title">{{$q_kr->kdadmat_from_date}}</h4>
                                </div>
                                <div class="deal-radio__bottom-box">
                                    <div class="deal-radio__purchase">
<!--                                        <span class="deal-radio__number">37</span>
                                        <span class="deal-radio__text">خرید</span>-->
                                    </div>
                                    <div class="deal-radio__left-box">
                                        <div class="deal-radio__price">
<!--                                            <p class="deal-radio__old-price">110,000</p>-->
                                            <p class="deal-radio__new-price">
                                                <span class="deal-radio__price-number">{{$q_kr->price}}</span>
                                                <span class="deal-radio__price-text">تومان</span>
                                            </p>
                                        </div>
<!--                                        <div class="deal-radio__percent-box">
                                            <span>%20</span>
                                        </div>-->
                                    </div>
                                </div>
                                <div class="deal-radio__slide-box">
                                    <ul class="deal-radio__list-option">
                                        <li><span class="deal-radio__answer">{{$q_kr->information}}</span>
                                        </li>
                                    </ul>
                                    <button class="purchase__btn">خرید</button>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>


@endsection
