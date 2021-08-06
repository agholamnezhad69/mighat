@extends('view1.layouts.adminLayout')

@section('content')


        <section id="content-single">

            <div class="container">

                <div class="row">
                    <div class="col-md-8 ">
                        <div class="khadamat_prop">
                            <h1>{{$product_single->title}}</h1>
                            <!-- ***********************************start gallery slider -->

                            <div class="khadamat_prop_image">
                                <img style="width: 100%" data-u="image" src="/uploads/product/{{$product_single->id}}/{{$product_single->img}}"/>
                            </div>

                            <!-- ***********************************end gallery slider -->
                            <!-- ***********************************start only mobile  purchase -->
                            <div class="purchase purchase2 ">
                                <h1>خرید محصول </h1>
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
                                        @if($product_single->is_online == 1)
                                            <p style="font-family: iran;font-size: 14px;margin-top: 5px;padding: 18px 10px;">کلاس آنلاین</p>
                                        @else
                                            <p style="font-family: iran;font-size: 14px;margin-top: 5px;padding: 18px 10px;">کلاس آفلاین</p>
                                        @endif


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
                                                    <span
                                                        class="deal-radio__price-number">{{$product_single->price}}</span>
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
                                                    class="deal-radio__answer">{{$product_single->title}}</span>
                                            </li>
                                        </ul>
                                    </div>


                                </div>
                            </div>
                            <!-- ***********************************end only mobile  purchase -->
                            <!-- ***********************************end gallery slider -->


                            <!--*****************************************start detail product-->

                            <div class="deal-feature">


                                {{--{!! $product_single->descc !!}--}}
                                <?php
                                $d= str_replace('aliAli123aliAli3231test', $product_single->id,  $product_single->descc);
                                echo $d;
                                ?>


                                <div class="ExternalMedia-modal"></div>
                            </div>

                            <!--*****************************************end detail product-->

                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="purchase purchase1">
                            <h1>خرید محصول</h1>
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
                                    @if($product_single->is_online == 1)
                                        <p style="font-family: iran;font-size: 14px;margin-top: 5px;padding: 18px 10px;">کلاس آنلاین</p>
                                    @else
                                        <p style="font-family: iran;font-size: 14px;margin-top: 5px;padding: 18px 10px;">کلاس آفلاین</p>
                                    @endif
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
                                                <span class="deal-radio__price-number">{{$product_single->price}}</span>
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
                                        <li><span class="deal-radio__answer">{{$product_single->title}}</span>
                                        </li>
                                    </ul>
                                    <button class="purchase__btn" @click="productAddToBasket({{$product_single->id}})">افزودن به سبد خرید</button>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>




@endsection
