@extends('view1.layouts.adminLayout')

@section('content')




        <div id="mySideFilter" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav1()">
                <img width="50" height="50" id="close_btn1" src="/mighat_asset/img/close.png" alt="">
            </a>
            <div class="mighat-box ">
                <div class="side-title">دسته بندی</div>
                <div class="side-content">
                    فرصت های شغلی
                </div>
            </div>
            <div class="mighat-box radiobutton">
                <div class="side-title">نوع آگهی:</div>
                <div class="side-content">
                    <label class="container">
                        <input @click="get_employment_filter_sidebar(2,'status')" type="radio" checked="checked"
                               name="radio">
                        <span class="checkmark"></span>
                        همه
                    </label>
                    <label class="container">
                        <input @click="get_employment_filter_sidebar(0,'status')" type="radio" name="radio">
                        <span class="checkmark"></span>
                        عادی
                    </label>
                    <label class="container">
                        <input @click="get_employment_filter_sidebar(1,'status')" type="radio" name="radio">
                        <span class="checkmark"></span>
                        فوری
                    </label>

                </div>
            </div>
            <div class="mighat-box checkbox">
                <div class="side-title">نوع آگهی:</div>
                <div class="side-content ">

                    <label class="container">
                        <input @click="get_employment_filter_sidebar(0,'state')" type="radio" name="radio">
                        <span class="checkmark"></span>
                        همه استان ها
                    </label>
                    <label class="container">
                        <input @click="get_employment_filter_sidebar(8,'state')" type="radio" name="radio">
                        <span class="checkmark"></span>
                        تهران
                    </label>
                    <label class="container">
                        <input @click="get_employment_filter_sidebar(11,'state')" type="radio" name="radio">
                        <span class="checkmark"></span>
                        مشهد
                    </label>
                    <label class="container">
                        <input @click="get_employment_filter_sidebar(4,'state')" type="radio" name="radio">
                        <span class="checkmark"></span>
                        اصفهان
                    </label>
                    <label class="container">
                        <input @click="get_employment_filter_sidebar(1,'state')" type="radio" name="radio">
                        <span class="checkmark"></span>
                        آذربایجان شرقی
                    </label>
                    <label class="container">
                        <input @click="get_employment_filter_sidebar(19,'state')" type="radio" name="radio">
                        <span class="checkmark"></span>
                        قم
                    </label>


                </div>
            </div>

        </div>
        <!--*************************************************start content-->

        <!--*******************************************start  tutorial dore-->
        <section id="carousel1" class="employment-carousel">
            <h2>آگهی های ویژه</h2>
            <!--*******************************start carousel top-->
            <div class="carousel1">

                @foreach($specials as $item)
                    <div class="carousel-cell">
                        <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                            <div class="carousel1-right">

                                <a href="/home/employment_single/{{$item->id}}"><h3> {{$item->title}}</h3></a>
                                <div class="tutorial-time">
                                    {{$item->date}}
                                </div>
                                <div class="tutorial-desc">
                                    {!! $item->description !!}
                                </div>


                                <div class="featuredWebinarCard-details">
                                    <div class="avatarBox avatarBox-lg">
                                    <span class="">
                                        <div class="avatar">
                                            <img
                                                src="/mighat_asset/img/fast-time.png"
                                                alt="مژده جعفری">
                                        </div>
                                    </span>

                                        @if($item->status == 0)

                                            <span class="es__featuredWebinar-item-teacher">
                                            عادی
                                           </span>

                                        @else
                                            <span class="es__featuredWebinar-item-teacher">
                                              فوری
                                             </span>

                                        @endif


                                    </div>
                                    <div class="featuredWebinarCard-price">
                                        <div class="primary-price">

                                        </div>
                                        <div class="price">
                                            {{ $item->title_ostan }}
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
                            <div class="carousel1-left" style="background-color: #ee2c72">
                                <img src="/mighat_asset/img/employ1.png" alt="asdf">
                            </div>

                        </div>
                    </div>


                @endforeach

            </div>
            <!--*******************************end carousel top-->

        </section>
        <!--*******************************************end  tutorial dore-->


        <!--*******************************************start  tutorial dore for mobile-->
        <section id="carousel2" class="container">
            <div class="row">
                <div class="container">
                    <h2>آگهی های ویژه</h2>
                    <div class="carousel" data-flickity='{ "groupCells": true }'>


                        @foreach($specials as $item)
                            <div class="dore-item col-lg-3 col-12 col-md-6 col-xl-4">
                                <div class="card">
                                    <a href="/home/employment_single/{{$item->id}}">
                                        <img
                                            src="https://static.eseminar.tv/public/upload/webinar/thumb/1590373633_44.jpg"
                                            alt="Denim Jeans" style="width:100%">
                                        <h3>{{$item->title}}</h3>
                                        <p class="price">
                                            {{$item->date}}
                                        </p>
                                        @if($item->status ==0)
                                            <p class="desc">عادی</p>
                                        @else
                                            <p class="desc">فوری</p>
                                        @endif
                                        <p style="font-family: iran;color: #fff">
                                            {{$item->title_ostan}}
                                        </p>
                                    </a>
                                </div>

                            </div>
                        @endforeach


                    </div>

                </div>
            </div>
        </section>
        <!--*******************************************end  tutorial dore for mobile-->

        <!--**************************** start category filter on mobile*********************************-->
        <section id="filterProductButtonEmployment">

            <button class="menu_btn11" style="font-size:30px;cursor:pointer" onclick="openNav1()">

                <img width="40" height="40" src="/mighat_asset/img/filter.png" alt="">
                <span>فیلتر ها</span>
            </button>

        </section>
        <!--**************************** end category filter on mobile*********************************-->

        <div class="e-filter">

        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-4">
                    <div class="e-sidebar-right">
                        <div class="employment-box-title desktop-box">
                            فیلترها
                        </div>
                        <div class="mighat-box desktop-box">
                            <div class="side-title">دسته بندی</div>
                            <div class="side-content">
                                فرصت های شغلی
                            </div>
                        </div>
                        <div class="mighat-box radiobutton desktop-box">
                            <div class="side-title">نوع آگهی:</div>
                            <div class="side-content">
                                <label class="container">
                                    <input @click="get_employment_filter_sidebar(2,'status')" type="radio" name="radio">
                                    <span class="checkmark"></span>
                                    همه
                                </label>
                                <label class="container">
                                    <input @click="get_employment_filter_sidebar(0,'status')" type="radio" name="radio">
                                    <span class="checkmark"></span>
                                    عادی
                                </label>
                                <label class="container">
                                    <input @click="get_employment_filter_sidebar(1,'status')" type="radio" name="radio">
                                    <span class="checkmark"></span>
                                    فوری
                                </label>


                            </div>
                        </div>
                        <div class="mighat-box checkbox desktop-box">
                            <div class="side-title">نوع آگهی:</div>
                            <div class="side-content ">
                                <label class="container">
                                    <input @click="get_employment_filter_sidebar(0,'state')" type="radio" name="radio">
                                    <span class="checkmark"></span>
                                    همه استان ها
                                </label>
                                <label class="container">
                                    <input @click="get_employment_filter_sidebar(8,'state')" type="radio" name="radio">
                                    <span class="checkmark"></span>
                                    تهران
                                </label>
                                <label class="container">
                                    <input @click="get_employment_filter_sidebar(11,'state')" type="radio" name="radio">
                                    <span class="checkmark"></span>
                                    مشهد
                                </label>
                                <label class="container">
                                    <input @click="get_employment_filter_sidebar(4,'state')" type="radio" name="radio">
                                    <span class="checkmark"></span>
                                    اصفهان
                                </label>
                                <label class="container">
                                    <input @click="get_employment_filter_sidebar(1,'state')" type="radio" name="radio">
                                    <span class="checkmark"></span>
                                    آذربایجان شرقی
                                </label>
                                <label class="container">
                                    <input @click="get_employment_filter_sidebar(19,'state')" type="radio" name="radio">
                                    <span class="checkmark"></span>
                                    قم
                                </label>


                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-12 col-xl-8 ">
                    <div class="employment-box-title">
                        دیگر آگهی ها
                    </div>
                    <div class="employment-content-main">

                        <div v-for="row in all_employment.data" class="col-md-6 col-sm-12 col-xs-12 padding-0">
                            <a :href="'/home/employment_single/'+row.id">
                                <span>
                                 @{{ row . title }}
                               </span>
                                <span v-if="row.status==0" class="state">
                                        عادی
                                </span>
                                <span v-else class="state">
فوری
                                </span>
                                <ul>
                                    <li>
                                        <i class="fa fa-map-marker"></i>
                                        <span> @{{ row . title_ostan }}</span>
                                    </li>
                                </ul>

                            </a>
                        </div>
                    </div>
                    <pagination
                        style="margin-top: 10px"
                        :data="all_employment"
                        @pagination-change-page="employ_rezome_sent"/>
                </div>
                <loading :active.sync="isLoading" color="#fff" background-color="#000" loader="dots"></loading>

            </div>
        </div>


@endsection
