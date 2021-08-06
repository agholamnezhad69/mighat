@extends('view.layouts.adminLayout')

@section('content')




    <style>
        .breadcrumb-item {
            font-family: iran !important;
            font-size: 20px;
            font-weight: 900;
            color: #EEEEEE;
        }

        .gambo-Breadcrumb .breadcrumb .breadcrumb-item.active {
            color: #e70762 !important;
        }

        .wrapper {
            background: #000;
            border-top: 1px solid #000000;
        }

        .gambo-Breadcrumb .breadcrumb .breadcrumb-item.active {
            color: #ffffff;
        }


        .pdp-text-dt span {
            font-family: aviny !important;
            font-size: 32px;
            text-align: center;
            color: #fff !important;
        }

        .pdp-text-dt {
            width: 100%;
        }

        .pdp-text-dt p {

            font-size: 19px;
            font-weight: 400;
            color: #e70762;
            margin-bottom: 0;
            line-height: 26px;
            font-family: iran;

        }

        ol.breadcrumb {
            direction: rtl;
        }

        .breadcrumb-item {
            font-family: iransans !important;
        }

        .breadcrumb-item + .breadcrumb-item::before {
            padding: 0 10px;
        }


        .pdp-details {
            background: #4f0c55;
        }

        .product-dt-view {
            background: #4f0c55;
            box-shadow: 0 1px 2px 0 #242424;
        }

        .owl-carousel .owl-item img {
            border-radius: 5px;
        }

        .pdp-details ul li {

            border: 1px solid #414141 !important;
            padding: 38px 5px;

        }
    </style>

    <div class="wrapper dark-top-slider">
        <div class="gambo-Breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">خانه</a></li>
                                <li class="breadcrumb-item"><a href="/home/persons">یاران قرارگاه ملی</a></li>
                                <li class="breadcrumb-item active" aria-current="page">مشخصات</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="all-product-grid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-dt-view">
                            <div class="row">

                                <div class="col-lg-4 col-md-4">
                                    @if(!empty($user->img))
                                        <img style="width: 100%;height: 100%;border-radius: 4px"
                                             src="/uploads/user/{{$user->img}}" alt="">

                                    @else
                                        <img style="width: 100%;height: 100%;border-radius: 4px"
                                             src="/uploads/user/widoutpic.png" alt="">
                                    @endif

                                </div>
                                <div class="col-lg-8 col-md-8">
                                    <div class="product-dt-right">
                                        <!--
                                                                                <h2 style="text-align: right;font-family: aviny;">امیر حسین مشایخی</h2>
                                        -->


                                        <div class="pdp-details">
                                            <ul>
                                                <li>
                                                    <div class="pdp-group-dt">
                                                        <div class="pdp-text-dt">
                                                            <span>استان</span>
                                                            @if(!empty($ostan))
                                                                <p>{{$ostan}}</p>
                                                            @else
                                                                <p>بدون انتخاب</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="pdp-group-dt">
                                                        <div class="pdp-text-dt">
                                                            <span>نام و نام خوادگی</span>

                                                            <p>{{$user->name}} {{$user->family}}</p>
                                                        </div>
                                                        <h1></h1>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="pdp-group-dt">
                                                        <div class="pdp-text-dt">
                                                            <span>تاریخ تولد</span>
                                                            @if(!empty($user->birthday))
                                                                <p>{{$user->birthday}}</p>
                                                            @else
                                                                <p>بدون انتخاب</p>
                                                            @endif

                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="pdp-group-dt">

                                                        <div class="pdp-text-dt">
                                                            <span>دانشگاه</span>
                                                            @if(!empty($d))
                                                                <p>{{$d}}</p>
                                                            @else
                                                                <p>بدون انتخاب</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="pdp-group-dt">

                                                        <div class="pdp-text-dt">
                                                            <span>رشته دانشگاه</span>
                                                            @if(!empty($r))
                                                                <p>{{$r}}</p>
                                                            @else
                                                                <p>بدون انتخاب</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="pdp-group-dt">
                                                        <div class="pdp-text-dt">
                                                            <span>نوع دانشگاه</span>
                                                            @if(!empty($type_uni))
                                                                <p>{{$type_uni}}</p>
                                                            @else
                                                                <p>بدون انتخاب</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


