@extends('user.layouts.adminLayout')

@section('content')


    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                {{--   <div class="col-md-6 col-sm-12">
                       <h1>داشبورد</h1>
                   </div>--}}
            </div>
        </div>

        <div class="container-fluid">


            <div class="dashboard-box">

                @include('user.layouts.top-menue');

                <div class="container">
                    <div class="row clearfix">

                        <div class="block-header">
                            <div class="row clearfix">

                            </div>




                        </div>

                        <div class="container-fluid">


                            <div class="row clearfix">
                                <div v-if="formChange==1" class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="card">
                                        <div class="header">
                                            <!--                            <h2>مثال فرم پیشرفته با اعتبار سنجی</h2>-->
                                            <ul class="header-dropdown dropdown">

                                                <li><a href="javascript:void(0);" class="full-screen"><i
                                                            class="icon-frame"></i></a>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="javascript:void(0);" class="dropdown-toggle"
                                                       data-toggle="dropdown"
                                                       role="button" aria-haspopup="true" aria-expanded="false"></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="javascript:void(0);">اقدام</a></li>
                                                        <li><a href="javascript:void(0);">دیگر اقدام</a></li>
                                                        <li><a href="javascript:void(0);">یک چیز دیگر</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="body wizard_validation">
                                            <div style="text-align: center">
                                                <button @click="changePass()" class="next_form">ذخیره تغییرات</button>
                                                <button @click="changePass_cancell()" class="next_form">لفو تغییرات</button>
                                            </div>
                                            <div class="clearfix"></div>
                                            <form id="wizard_with_validation" method="POST">
                                                <h3 class="title-header" style="text-align: center">تغییر کلمه عبور</h3>

                                                <fieldset>
                                                    <div class="row clearfix">

                                                        <div class="col-lg-4 col-md-12">
                                                            <div class="form-group">
                                                                <input
                                                                    type="text"
                                                                    v-model="user_pass_current" class="form-control"
                                                                    placeholder="رمز عبور فعلی">

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-12">
                                                            <div class="form-group">
                                                                <input
                                                                    type="text" v-model="user_pass_new"
                                                                    class="form-control"
                                                                    placeholder="کلمه عبور جدید"
                                                                >
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-12">
                                                            <div class="form-group">
                                                                <input
                                                                    type="text"
                                                                    v-model="user_pass_confirm"
                                                                    class="form-control"
                                                                    placeholder="تایید کلمه عبور"
                                                                >
                                                            </div>
                                                        </div>




                                                    </div>
                                                </fieldset>


                                            </form>
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
