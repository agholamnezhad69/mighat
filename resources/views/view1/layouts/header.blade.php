<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>میقات</title>

    <?php


    $path_shop_single = '';

    if (isset($id)) {
        $path_shop_single = 'home/shop_single/' . $id;
    }


    $path_employment_single = '';
    if (isset($employ_single->id)) {

        $path_employment_single = 'home/employment_single/' . $employ_single->id;

    }
    ?>





    @if (Request::path() == '/')
        <link rel="stylesheet" type="text/css" href="/mighat_asset/sliderHome/css/style.css">
        <link rel="stylesheet" href="/mighat_asset/css/carousel.css">
        <link rel="stylesheet" href="/mighat_asset/css/flickity.css" media="screen">

        <style>
            .carousel1 .carousel1-right .tutorial-desc {
                margin-top: 1.5rem !important;
                overflow: hidden !important;
                white-space: normal !important;
                text-overflow: clip !important;
                font-family: iran !important;
                font-size: .86667rem !important;
                line-height: 30px !important;
                color: rgb(245 245 246) !important;
                height: 92px !important;
            }

            .to-date {
                font-family: iran;
                margin-top: .8rem;
                font-size: .93333rem;
                color: rgb(255 255 255 / 60%);
                margin-right: 11px;
            }
        </style>



    @elseif (Request::path() == 'home/news')

        <style>
            .infinite-status-prompt {
                display: none;
            }
        </style>


    @elseif(Request::path() =='home/employment')
        <link rel="stylesheet" href="/mighat_asset/css/carousel.css">
        <link rel="stylesheet" href="/mighat_asset/css/flickity.css" media="screen">


    @elseif(Request::path() ==$path_employment_single)
        <style>
            .e-single-content img {
                width: 100% !important;
                height: unset !important;
            }

            .e-single-content p, .e-single-content h4 {
                font-family: iran;
                line-height: 40px;
            }

            .dropzone.dz-clickable {

                border: 1px solid #eee;
            }

            .dropzone .dz-preview {
                margin: 0 !important;
            }

            .alert-success {
                color: #188d32;
                background-color: #d4edda;
                border-color: #c3e6cb;
                font-family: 'iran';
                width: 89%;
                margin: 0 auto;
            }

            .alert-error {
                color: #dd0217;
                background-color: #d4edda;
                border-color: #c3e6cb;
                font-family: 'iran';
                width: 89%;
                margin: 0 auto;
            }

        </style>


    @elseif(Request::path() =='home/shop'
           ||Request::path() =='home/shop_product' || Request::path() =='home/shop_product_majale')
        <link rel="stylesheet" href="/mighat_asset/css/carousel.css">
        <link rel="stylesheet" href="/mighat_asset/css/flickity.css" media="screen">
        <style>
            .search-result li {
                display: flex;
                flex-wrap: wrap;
                margin-top: 10px;
            }

            .type-class {
                color: #fff;
                font-family: iran;
            }
        </style>
    @elseif(Request::path() ==$path_shop_single)
        <link rel="stylesheet" href="/mighat_asset/sliderGallery/css/style_slider.css">
    @endif
    <link rel="stylesheet" href="/mighat_asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="/mighat_asset/css/style.css">
    <link rel="stylesheet" href="/mighat_asset/css/responsive.css">
    <link rel="stylesheet" href="/mighat_asset/css/style.fontawesome.css">


    <!--**************** start pre loader css -->
    <style>
        .search-result ul li {
            display: flex;
            flex-wrap: wrap;
            margin-top: 14px
        }

        .type-class {
            color: #fff;
            font-family: iran !important;
        }

        p.type-class {
            font-family: 'iran';
        }

        .shora-logo {
            width: 100% !important;
        }

        .se-pre-con {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url(/mighat_asset/img/preAnimationLoader/loader-128x/Preloader_8.gif) center no-repeat #fff;
        }

        .social-item1 {
            text-align: center;
            margin-right: 22px;
            border: 1px solid #7c6868;
            padding: 5px 14px;
            border-radius: 10px;
            display: inline;
        }

        .social-item1 span {
            margin-right: 10px;
            vertical-align: 6px;
            font-family: iran;
            color: #fff;

        }

        .social-item1 i {
            font-size: 25px;
            color: #fff;
            margin: 0 auto;

        }

        .social-item2 {
            margin: 0 23px;
            position: relative;
        }

        .social-item2 i {
            color: #fff;

        }

        .social-item2 span {
            font-family: iran;
            position: absolute;
            bottom: -11px;
            right: -9px;
            font-weight: 600;
            line-height: 16px;
            width: 20px;
            height: 18px;
            background: #ef394e;
            text-align: center;
            vertical-align: middle;
            border-radius: 8px;
            border: 2px solid #fff;
            color: #fff;

        }

        .social-item2 i.fa.fa-shopping-basket {
            font-size: 23px;
        }
        /************************app in all page for not top footer*/
        #app{
            height: 100%;
        }

    </style>
    <!--**************** end pre loader css -->




</head>
<body>

<div id="app">

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


        <a class="menue_item" href="/home/shop_product_majale">مجله تصویری میقات</a>


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
                        <a href="/"> <img height="45px" width="auto" class="shora-logo"
                                          src="/mighat_asset/img/logo11.png"></a>
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
                        <div class="social-item">
                            <a href="#"><img width="20px" height="auto"
                                             src="/mighat_asset/img/bale.svg"></a>
                        </div>
                        <div class="social-item1">
                            <a href="/user/login">
                                <i class="fa fa-user"></i>
                                <span>ورود</span>
                            </a>
                        </div>
                        <div class="social-item2">
                            <a href="/home/basket">
                                <i class="fa fa-shopping-basket"></i>
                                <br>
                                <span>7</span>
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
                                <a class="nav-link" href="/home/shop_product_majale">مجله تصویری میقات</a>
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
    </section>
