@extends('view1.layouts.adminLayout')

@section('content')



        <div id="mySideFilter" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav1()">
                <img width="50" height="50" id="close_btn1" src="/mighat_asset/img/close.png" alt="">
            </a>
            <div class="mighat-box ">
                <div class="side-title">دسته بندی</div>
                <div class="side-content">
                    نرم افزار کامپیوتر
                </div>
            </div>
            <div class="mighat-box radiobutton">
                <div class="side-title">نوع وبینار:</div>
                <div class="side-content">
                    <label class="container">
                        <input type="radio" checked="checked" name="radio">
                        <span class="checkmark"></span>
                        همه
                    </label>
                    <label class="container">
                        <input type="radio" name="radio">
                        <span class="checkmark"></span>
                        رایگان
                    </label>
                    <label class="container">
                        <input type="radio" name="radio">
                        <span class="checkmark"></span>
                        غیر رایگان
                    </label>


                </div>
            </div>
            <div class="mighat-box checkbox">
                <div class="side-title">نوع وبینار:</div>
                <div class="side-content ">
                    <label class="container">
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                        اول
                    </label>
                    <label class="container">
                        <input type="checkbox">
                        <span class="checkmark"></span>
                        دوم
                    </label>
                    <label class="container">
                        <input type="checkbox">
                        <span class="checkmark"></span>
                        سوم
                    </label>
                    <label class="container">
                        <input type="checkbox">
                        <span class="checkmark"></span>
                        چهارم
                    </label>


                </div>
            </div>

        </div>
        <!--*************************************************start header-->


        <section id="main_top">
            <div class="mainSearch-bg"></div>
            <div class="container">
                <div class="row">
                    <div class="main_top_top">
                        <h2>مهارت‌های به‌درد‌بخور</h2>
                        <span>مرجع آموزش‌های ویدئویی زنده و تعاملی</span>
                    </div>
                    <div class="search_product">
                        <input type="text" placeholder="چی دوست داری یاد بگیری؟ :)">
                    </div>

                </div>
            </div>
        </section>
        <!--**************************** start category filter on mobile*********************************-->
        <section id="filterProductButtonEmployment">

    <span class="menu_btn1" style="font-size:30px;cursor:pointer" onclick="openNav1()">
        <img width="40" height="40" src="/mighat_asset/img/filter.png" alt="">
        <span class="">فیلتر ها</span>
    </span>

        </section>
        <!--**************************** end category filter on mobile*********************************-->

        <section id="main_content">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-3">
                        <div class="mighat-box desktop-box">
                            <div class="side-title">دسته بندی</div>
                            <div class="side-content">
                                نرم افزار کامپیوتر
                            </div>
                        </div>
                        <div class="mighat-box radiobutton desktop-box">
                            <div class="side-title">نوع وبینار:</div>
                            <div class="side-content">
                                <label class="container">
                                    <input type="radio" checked="checked" name="radio">
                                    <span class="checkmark"></span>
                                    همه
                                </label>
                                <label class="container">
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                    رایگان
                                </label>
                                <label class="container">
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                    غیر رایگان
                                </label>


                            </div>
                        </div>
                        <div class="mighat-box checkbox desktop-box">
                            <div class="side-title">نوع وبینار:</div>
                            <div class="side-content ">
                                <label class="container">
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                    اول
                                </label>
                                <label class="container">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    دوم
                                </label>
                                <label class="container">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    سوم
                                </label>
                                <label class="container">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    چهارم
                                </label>


                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-9">
                        <div class="main_content_left">
                            <div class="col-md-12">
                                <div class="main_content_left_top_title">
                                    <div class="mighat-breadcrumb">
                                        <a href="">خانه</a>
                                        <i class="fa fa-angle-left"></i>
                                        <a href="">همه وبینارها</a>
                                        <i class="fa fa-angle-left"></i>
                                        <a href="">استارتاپها</a>
                                    </div>
                                    <!-- <div class="mighat-details">
                                         <i class="fa fa-close"></i>
                                         <i class="fa fa-calculator"></i>
                                     </div>-->
                                    <div class="mighat-types">
                                        <span>مرتب‌سازی براساس :</span>
                                        <button class="active">تاریخ برگزاری</button>
                                        <button>جدیدترین</button>
                                        <button>پربازدید ترین</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 p-0">
                                <div class=" row-mighat-list">
                                    <div v-for="row in all_kadamat_refahi.data"
                                         class="dore-item col-lg-4 col-12 col-md-4 col-xl-4">
                                        <div class="card">
                                            <img
                                                src="https://static.eseminar.tv/public/upload/webinar/thumb/1590373633_44.jpg"
                                                alt="Denim Jeans" style="width:100%">
                                            <a href="/home/shop_single"><h3>@{{ row . title }}</h3></a>
                                            <p class="price">
                                                17 تیر 99 - ساعت 20:00
                                            </p>
                                            <p class="desc">@{{ row . price }}</p>
                                            <p>
                                                <button>سبد خرید</button>
                                            </p>
                                        </div>

                                    </div>
                                    <!--
                                                                    <div class="dore-item col-lg-4 col-12 col-md-4 col-xl-4">
                                                                        <div class="card">
                                                                            <img
                                                                                src="https://static.eseminar.tv/public/upload/webinar/thumb/1590373633_44.jpg"
                                                                                alt="Denim Jeans" style="width:100%">
                                                                            <a href="/home/shop_single"><h3>وبینار بررسی وضعیت کتابفروشی های ایران در سالهای آینده</h3></a>
                                                                            <p class="price">
                                                                                17 تیر 99 - ساعت 20:00
                                                                            </p>
                                                                            <p class="desc">45000 تومان</p>
                                                                            <p>
                                                                                <button>سبد خرید</button>
                                                                            </p>
                                                                        </div>

                                                                    </div>
                                                                    <div class="dore-item col-lg-4 col-12 col-md-4 col-xl-4">
                                                                        <div class="card">
                                                                            <img
                                                                                src="https://static.eseminar.tv/public/upload/webinar/thumb/1590373633_44.jpg"
                                                                                alt="Denim Jeans" style="width:100%">
                                                                            <a href="/home/shop_single"><h3>وبینار بررسی وضعیت کتابفروشی های ایران در سالهای آینده</h3></a>
                                                                            <p class="price">
                                                                                17 تیر 99 - ساعت 20:00
                                                                            </p>
                                                                            <p class="desc">45000 تومان</p>
                                                                            <p>
                                                                                <button>سبد خرید</button>
                                                                            </p>
                                                                        </div>

                                                                    </div>
                                                                    <div class="dore-item col-lg-4 col-12 col-md-4 col-xl-4">
                                                                        <div class="card">
                                                                            <img
                                                                                src="https://static.eseminar.tv/public/upload/webinar/thumb/1590373633_44.jpg"
                                                                                alt="Denim Jeans" style="width:100%">
                                                                            <a href="/home/shop_single"><h3>وبینار بررسی وضعیت کتابفروشی های ایران در سالهای آینده</h3></a>
                                                                            <p class="price">
                                                                                17 تیر 99 - ساعت 20:00
                                                                            </p>
                                                                            <p class="desc">45000 تومان</p>
                                                                            <p>
                                                                                <button>سبد خرید</button>
                                                                            </p>
                                                                        </div>

                                                                    </div>
                                                                    <div class="dore-item col-lg-4 col-12 col-md-4 col-xl-4">
                                                                        <div class="card">
                                                                            <img
                                                                                src="https://static.eseminar.tv/public/upload/webinar/thumb/1590373633_44.jpg"
                                                                                alt="Denim Jeans" style="width:100%">
                                                                            <a href="/home/shop_single"><h3>وبینار بررسی وضعیت کتابفروشی های ایران در سالهای آینده</h3></a>
                                                                            <p class="price">
                                                                                17 تیر 99 - ساعت 20:00
                                                                            </p>
                                                                            <p class="desc">45000 تومان</p>
                                                                            <p>
                                                                                <button>سبد خرید</button>
                                                                            </p>
                                                                        </div>

                                                                    </div>
                                                                    <div class="dore-item col-lg-4 col-12 col-md-4 col-xl-4">
                                                                        <div class="card">
                                                                            <img
                                                                                src="https://static.eseminar.tv/public/upload/webinar/thumb/1590373633_44.jpg"
                                                                                alt="Denim Jeans" style="width:100%">
                                                                            <a href="/home/shop_single"><h3>وبینار بررسی وضعیت کتابفروشی های ایران در سالهای آینده</h3></a>
                                                                            <p class="price">
                                                                                17 تیر 99 - ساعت 20:00
                                                                            </p>
                                                                            <p class="desc">45000 تومان</p>
                                                                            <p>
                                                                                <button>سبد خرید</button>
                                                                            </p>
                                                                        </div>

                                                                    </div>
                                    -->

                                </div>

                            </div>
                            <div class="col-md-12 d-flex "></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
