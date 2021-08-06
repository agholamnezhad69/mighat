@extends('view1.layouts.adminLayout')

@section('content')


    <div @click="closeDivBladk1"
         :class="[all_product_refahi_search_result.length!= 0 ? 'active':'','es__newBackdrop']">
    </div>

    <div id="mySideFilter" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav1()">
            <img width="50" height="50" id="close_btn1" src="/mighat_asset/img/close.png" alt="">
        </a>
        <div class="mighat-box ">
            <div class="side-title">دسته بندی</div>
            <div class="side-content">
                مجله تصویری میقات
            </div>
        </div>
        <div class="mighat-box radiobutton">
            <div class="side-title">نوع فروشگاه:</div>
            <div class="side-content">
                <label class="container">
                    <input @click="get_product_filter_sidebar_majale(0)" type="radio" name="radio">
                    <span class="checkmark"></span>
                    همه
                </label>
                <label class="container">
                    <input @click="get_product_filter_sidebar_majale(1)" type="radio" name="radio">
                    <span class="checkmark"></span>
                    رایگان
                </label>
                <label class="container">
                    <input @click="get_product_filter_sidebar_majale(2)" type="radio" name="radio">
                    <span class="checkmark"></span>
                    غیر رایگان
                </label>


            </div>
        </div>

        <div class="mighat-box radiobutton">
            <div class="side-title">نوع کلاس:</div>
            <div class="side-content">

                <label class="container">
                    <input @click="get_product_filter_sidebar_majale(3)" type="radio" name="radio">
                    <span class="checkmark"></span>
                    آفلاین
                </label>
                <label class="container">
                    <input @click="get_product_filter_sidebar_majale(4)" type="radio" checked="checked"
                           name="radio">
                    <span class="checkmark"></span>
                    آنلاین
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

                    <i
                        :class="[
                                   is_searched_product == true ? 'fa-spinner':'',
                                    'fa',
                                    'fa-pulse',
                                    'fa-3x',
                                    'fa-fw',
                                     ]"
                    ></i>

                    <input v-model="product_refahi_search_majale" type="text"
                           placeholder="چی دوست داری یاد بگیری؟ :)">
                    <div class="search-result">
                        <ul v-if="all_product_refahi_search_result.length!=0">

                            <li v-for="row in all_product_refahi_search_result">
                                <a :href="'/home/shop_single_product/'+row.id" target="_blank">
                                    <div class="img-holder">
                                        <img
                                            :src="'/uploads/product/'+row.id+'/'+row.img"
                                            alt="">
                                    </div>
                                    <div class="text">
                                        <div class="title">
                                            @{{ row . title }}
                                        </div>
                                        <div class="date">
                                            @{{ row . kdadmat_from_date }}
                                        </div>
                                    </div>
                                </a>
                            </li>


                        </ul>
                    </div>
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
                            مجله تصویری میقات
                        </div>
                    </div>
                    <div class="mighat-box radiobutton desktop-box">
                        <div class="side-title">نوع فروشگاه:</div>
                        <div class="side-content">
                            <label class="container">
                                <input @click="get_product_filter_sidebar_majale(0)" type="radio"
                                       name="radio">
                                <span class="checkmark"></span>
                                همه
                            </label>
                            <label class="container">
                                <input @click="get_product_filter_sidebar_majale(1)" type="radio" name="radio">
                                <span class="checkmark"></span>
                                رایگان
                            </label>
                            <label class="container">
                                <input @click="get_product_filter_sidebar_majale(2)" type="radio" name="radio">
                                <span class="checkmark"></span>
                                غیر رایگان
                            </label>


                        </div>
                    </div>
                    <div class="mighat-box radiobutton desktop-box">
                        <div class="side-title">نوع کلاس:</div>
                        <div class="side-content">
                            <label class="container">
                                <input @click="get_product_filter_sidebar_majale(3)" type="radio" name="radio">
                                <span class="checkmark"></span>
                                آفلاین
                            </label>

                            <label class="container">
                                <input @click="get_product_filter_sidebar_majale(4)" type="radio"
                                       name="radio">
                                <span class="checkmark"></span>
                                آنلاین
                            </label>


                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-9">
                    <div class="main_content_left">
                        <div class="col-md-12">
                            <div class="main_content_left_top_title">
                                <div class="mighat-breadcrumb">
                                    <a href="/">خانه</a>
                                    <i class="fa fa-angle-left"></i>
                                    <a href="">مجله تصویری میقات</a>

                                </div>
                                <!-- <div class="mighat-details">
                                     <i class="fa fa-close"></i>
                                     <i class="fa fa-calculator"></i>
                                 </div>-->
                                <div class="mighat-types">
                                    <span>مرتب‌سازی براساس :</span>
                                    <button @click="get_product_filter_majale(0)"
                                            :class="[isActive_product == 0 ? 'active' : '']">جدیدترین

                                    </button>
                                    <button @click="get_product_filter_majale(1)"
                                            :class="[isActive_product == 1 ? 'active'  : '']">پربازدید ترین

                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 p-0">
                            <div class=" row-mighat-list">
                                <div v-for="row in all_products.data"
                                     class="dore-item col-lg-4 col-12 col-md-4 col-xl-4">
                                    <div class="card">
                                        <img
                                            :src="'/uploads/product/'+row.id+'/'+row.img"

                                            alt="Denim Jeans" style="width:100%">
                                        <a :href="'/home/shop_single_product/'+row.id">
                                            <h3>@{{ row . title }}</h3>
                                        </a>
                                        <p class="type-class" v-if="row.is_online==1">آنلاین</p>
                                        <p class="type-class" v-else>آفلاین</p>


                                        <p class="price"> @{{ row . kdadmat_from_date }}</p>
                                        <p v-if="row.price!=0" class="desc">@{{ row . price }}</p>
                                        <p v-else class="desc">رایگان</p>
                                        <p>
                                            <button>سبد خرید</button>
                                        </p>


                                    </div>

                                </div>
                            </div>

                        </div>
                        <pagination
                            :data="all_products"
                            @pagination-change-page="get_products_majale"
                        >

                        </pagination>
                        <loading :active.sync="isLoading" color="#fff" background-color="#000"
                                 loader="dots"></loading>

                        <div class="col-md-12 d-flex "></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
