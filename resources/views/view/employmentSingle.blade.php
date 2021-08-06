@extends('view.layouts.adminLayout')

@section('content')
    <style>

        .pdpt-title h4 {
            text-align: right;
            font-family: IRANSans !important;
        }

        .user-dt h4 {
            font-family: IRANSans !important;
            font-size: 20px;
            font-weight: bolder;
            border: 1px solid #eee;
            padding: 25px 5px;
            margin FONT-VARIANT: JIS04;
            box-sizing: border-box;
            margin: 17px 16px;
            cursor: pointer;
        }

        .ddsh-body h2 {
            font-size: 18px;
            text-align: right;
            font-family: IRANSans !important;
        }

        h4 {
            font-family: IRANSans !important;
        }

        .part-3 {
            text-align: right;
            border-top: 1px solid #262222;
            padding: 20px;
        }

        .pdpt-title {
            padding: 20px;
        }

        .col-md-12, col-lg-6, col-md-12 {
            padding-right: 15px;
            padding-left: 15px;
        }

        .dashboard-group {
            padding: 100px 0;
            background-color: #2c40ab;
        }

        .user-img div {
            width: 100%;
        }


        .rezome-right {
            width: 100%;
            height: 100%;
        }


        .rezome-right h1 {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80%;
            font-family: aviny !important;
        }

        .wllt-body {
            direction: rtl;
            text-align: right;

        }

        p {
            font-family: IRANSans !important;
            font-size: 16px;
            color: #fff;
            line-height: 42px !important;
            text-align: justify;
        }

        body, html {
            height: unset !important;
        }

        .gambo-Breadcrumb {
            background: #3044ad;
        }

        .left-side-tabs {
            background: #000055;
            box-shadow: 0 1px 2px 0 #000055;
            padding: 10px 0px;
            border-radius: 3px;
            margin-right: 6px;
            opacity: 6.2;
        }

        }
    </style>


    <div class="wrapper dark-top-slider" id="app">
        <div class="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <div class="left-side-tabs">
                            <div class="dashboard-left-links">

                                <div class="user-dt" style="width: 100%">
                                    <div class="user-img" style="width: 100%">
                                        <example-component2 @add_rezome="add_rezome"></example-component2>
                                    </div>
                                    <h4 @click="send_rezome({{$e_d->id}})">ارسال رزومه

                                    </h4>
                                    {{--<p>+91999999999<a href="#"><i class="uil uil-edit"></i></a></p>
                                    <div class="earn-points"><img src="images/Dollar.svg" alt="">Points : <span>20</span></div>--}}

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9" style="margin-top: 83px">
                        <div class="dashboard-right">
                            <div class="row">
                                {{--   <div class="col-md-12">
                                     --}}{{--  <div class="main-title-tab">
                                           <h4><i class="uil uil-apps"></i>Overview</h4>
                                       </div>
                                       <div class="welcome-text">
                                           <h2>Hi! John Doe</h2>
                                       </div>--}}{{--
                                   </div>--}}
                                <div class="col-lg-6 col-md-12">
                                    <div class="pdpt-bg">
                                        <div class="pdpt-title">
                                            <h4>استان : <span> {{$e_d->state}}</span></h4>
                                        </div>
                                        <div class="ddsh-body">
                                            <h2>وضعیت : <span>{{$e_d->status}}</span></h2>
                                        </div>
                                        <div class="part-3">
                                            <h4>تاریخ : <span> {{$e_d->date}}</span></h4>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="pdpt-bg">
                                        <div class="pdpt-title">
                                            <h4>{{$e_d->title}}</h4>
                                        </div>
                                        <div class="ddsh-body" style="min-height: 126px">
                                            <h2>دسته‌بندی شغلی : <span
                                                    style="line-height: 41px;"> {{$e_d->category}}</span>
                                            </h2>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="pdpt-bg">
                                        <div class="pdpt-title">
                                            <h4>شرح موقعیت شغلی</h4>
                                        </div>
                                        <div class="wllt-body">
                                            <?php
                                            echo $e_d->description;
                                            ?>
                                        </div>
                                        <div class="clearfix"></div>
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
