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

                @include('user.layouts.top-menue')

                <div class="container">
                    <div class="row clearfix">

                        <div class="block-header">
                            <div class="row clearfix">
                                <div class="col-md-12 col-sm-12">
                                    <h2 class="account-top">مراحل ثبت نام</h2>
                                </div>

                            </div>


                            <div class="box-parent">
                                <ul style="padding: 0 16px 0 0 ;">
                                    <li class="box-account">
                                        <div class="box-account-sub">
                                            <button class="btn-account">1</button>
                                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                                            <span class="caption-account">اطلاعات فردی</span>
                                        </div>
                                    </li>
                                    <li class="box-account">
                                        <div class="box-account-sub">
                                            <button class="btn-account">2</button>
                                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                                            <span class="caption-account">وضعیت تحصیلات</span>
                                        </div>
                                    </li>
                                    <li class="box-account">
                                        <div class="box-account-sub">
                                            <button class="btn-account" @click="btn_1()">3</button>
                                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                                            <span class="caption-account">اطلاعات شغلی- مهارتی</span>
                                        </div>
                                    </li>

                                    <li class="box-account">
                                        <div class="box-account-sub">
                                            <button class="btn-account" @click="btn_1()">4</button>
                                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                                            <span class="caption-account">اطلاعات تشکیلاتی</span>
                                        </div>
                                    </li>

                                </ul>

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
                                                <button @click="changeForm(1)" class="next_form">بعدی</button>
                                                <button @click="editForm()" class="next_form">ویرایش فرم</button>
                                            </div>
                                            <div class="clearfix"></div>
                                            <form id="wizard_with_validation" method="POST">
                                                <h3 class="title-header" style="text-align: center">اطلاعات فردی</h3>

                                                <fieldset>
                                                    <div class="row clearfix">

                                                        <div class="col-lg-4 col-md-12">
                                                            <div class="form-group">
                                                                <input
                                                                    type="text"
                                                                    :disabled="isFormEdit == 1"
                                                                    v-model="name" class="form-control"
                                                                    placeholder="نام *">

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-12">
                                                            <div class="form-group">
                                                                <input
                                                                    :disabled="isFormEdit == 1"
                                                                    type="text" v-model="family"
                                                                    class="form-control"
                                                                    placeholder="نام خانوادگی"
                                                                >
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-12">
                                                            <div class="form-group">
                                                                <input
                                                                    :disabled="isFormEdit == 1"
                                                                    type="text" v-model="fatherName"
                                                                    class="form-control"
                                                                    placeholder="نام پدر "
                                                                >
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-12">
                                                            <div class="form-group">
                                                                <input
                                                                    :disabled="isFormEdit == 1"
                                                                    type="text" class="form-control"
                                                                    placeholder="شماره ملی "
                                                                    v-model="nCod">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-12 birthday">
                                                            <date-picker :disabled="isFormEdit == 1"
                                                                         v-model="birthday"/>


                                                        </div>


                                                        <div class="col-lg-4 col-md-12">
                                                            <div class="form-group">
                                                                <input
                                                                    :disabled="isFormEdit == 1"
                                                                    type="text" class="form-control"
                                                                    placeholder="آدرس منزل"
                                                                    v-model="address">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12" style="padding: 0">
                                                            <div class="col-lg-8 col-md-8"
                                                                 :disabled="isFormEdit == 1"
                                                                 style="float: right;padding: 0">
                                                                <div class="form-group form-group-container"
                                                                     style="margin: 0 ;height: 209px">

                                                                    <example-component
                                                                        :user_file_list="user_file_object"
                                                                        @get_user_img="get_user_img()"
                                                                        @add_user="add_user">

                                                                    </example-component>


                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 " style="float: right">
                                                                <!--                                                                <img v-if="user_file != ''"
                                                                                                                                     :src="'/uploads/user/'+user_file" alt=""
                                                                                                                                     style="display: inline-block;height: 208px ;width: 100%">
                                                                                                                                <img v-else-if="user_file_object.name != ''"
                                                                                                                                     :src="'/uploads/user/'+user_file_object.name" alt=""
                                                                                                                                     style="display: inline-block;height: 208px ;width: 100%">
                                                                                                                                <img v-else src="/imgUser/widoutpic.png" alt=""
                                                                                                                                     style="display: inline-block;height: 208px ;width: 100%">-->

                                                                <div class="form-group">
                                                                    <input
                                                                        style="text-align: left"
                                                                        :disabled="isFormEdit == 1"
                                                                        type="text" class="form-control"
                                                                        placeholder="تلفن همراه "
                                                                        v-model="mobile">
                                                                </div>

                                                                <div class="form-group">
                                                                    <input
                                                                        style="text-align: left"
                                                                        :disabled="isFormEdit == 1"
                                                                        type="text" class="form-control"
                                                                        v-model="socialmobile"
                                                                        placeholder="تلفن شبکه اجتماعی"
                                                                    >
                                                                </div>

                                                                <div class="form-group">
                                                                    <input
                                                                        style="text-align: left"
                                                                        :disabled="isFormEdit == 1"
                                                                        type="text" class="form-control"
                                                                        placeholder="تلفن همراه "
                                                                        v-model="mobile">
                                                                </div>


                                                            </div>


                                                        </div>

                                                    </div>
                                                </fieldset>
                                                {{--  <h3>اطلاعات مشخصات</h3>--}}
                                                <fieldset>
                                                    <div class="row clearfix">
                                                        <div class="col-lg-4 col-md-12">
                                                            <div class="form-group form-group-force">
                                                                <label class="title">وضعیت نظام وظیقه : </label>
                                                                <select
                                                                    :disabled="isFormEdit == 1"
                                                                    class="mdb-select md-form" v-model="v_nv_id">

                                                                    <option value="" disabled selected>انتخاب کنید
                                                                    </option>

                                                                    <option v-for="row in v_nv" :value="row.id">
                                                                        @{{row.attr}}
                                                                    </option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-12">
                                                            <div class="form-group form-group-force">
                                                                <label class="title">وضعیت تاهل : </label>
                                                                <select
                                                                    :disabled="isFormEdit == 1"
                                                                    class="mdb-select md-form" v-model="v_t_id">
                                                                    <option value="" disabled selected>انتخاب کنید
                                                                    </option>
                                                                    <option v-for="row in v_t" :value="row.id">
                                                                        @{{row.attr}}
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 col-md-12">
                                                            <div class="form-group form-group-force">
                                                                <label class="">استان محل تحصیل : </label>


                                                                <v-select :disabled="isFormEdit == 1"
                                                                          :options="optionSelectOstan" searchable="true"
                                                                          v-model="ostan_id"/>

                                                            </div>
                                                        </div>

                                                        <!--                                                        <div class="col-lg-4 col-md-12">
                                                                                                                    <div class="form-group">
                                                                                                                        <label class="">استان محل تحصیل : </label>


                                                                                                                        <v-select :disabled="isFormEdit == 1"
                                                                                                                                  :options="optionSelectOstan" searchable="true"
                                                                                                                                  v-model="ostan_id"/>

                                                                                                                    </div>
                                                                                                                </div>-->
                                                        <!--                                                        <div class="col-md-12">
                                                                                                                    <div class="form-group">

                                                                                                                        <label class="">تعداد سال سابقه در عضویت در تشکل
                                                                                                                            : </label>
                                                                                                                        &lt;!&ndash;                                                <input
                                                                                                                                                                            :disabled="isFormEdit == 1"
                                                                                                                                                                            v-model="t_s_s_o_t" value="0" type="number" name="age"
                                                                                                                                                                            class="form-control my-form-control">   &ndash;&gt;

                                                                                                                        <input
                                                                                                                                :disabled="isFormEdit == 1"
                                                                                                                                v-model="t_s_s_o_t"
                                                                                                                                @change="attr_value_select(15)"
                                                                                                                                type="number" name="age"
                                                                                                                                class="form-control my-form-control">
                                                                                                                    </div>
                                                                                                                    <div class="form-group">

                                                                                                                        <div v-for="row in form1_singleAttr"
                                                                                                                             v-if="row.id >=16  &&  row.id <=28"
                                                                                                                             class="fancy-checkbox my-fancy-checkbox">
                                                                                                                            <label class="label-account"><input
                                                                                                                                        :disabled="isFormEdit == 1"
                                                                                                                                        v-model="form1_singleAttr_selected[row.id] "
                                                                                                                                        class="input-account"
                                                                                                                                        type="checkbox"
                                                                                                                                ><span>@{{row.attr}}</span></label>
                                                                                                                        </div>


                                                                                                                    </div>
                                                                                                                </div>-->
                                                        <!--                                                        <div class="col-lg-4 col-md-12">
                                                                                                                    <div class="form-group">
                                                                                                                        <label class="">دوره قرارگاه ملی : </label>
                                                                                                                        <select
                                                                                                                                :disabled="isFormEdit == 1"
                                                                                                                                class="mdb-select md-form" v-model="dore_id">
                                                                                                                            <option value="" disabled selected>انتخاب کنید
                                                                                                                            </option>
                                                                                                                            <option v-for="row in dore" :value="row.id">
                                                                                                                                @{{row.attr}}
                                                                                                                            </option>
                                                                                                                        </select>
                                                                                                                    </div>
                                                                                                                </div>-->
                                                        <!--                                                        <div class="col-lg-4 col-md-12">
                                                                                                                    <div class="form-group">
                                                                                                                        <label class="">وضعیت ارتباط با اتحادیه : </label>
                                                                                                                        <select
                                                                                                                                :disabled="isFormEdit == 1"
                                                                                                                                class="mdb-select md-form"
                                                                                                                                v-model="v_er_ba_et_id">
                                                                                                                            <option value="" disabled selected>انتخاب کنید
                                                                                                                            </option>
                                                                                                                            <option v-for="row in v_er_ba_et" :value="row.id">
                                                                                                                                @{{row.attr}}
                                                                                                                            </option>
                                                                                                                        </select>
                                                                                                                    </div>
                                                                                                                </div>-->
                                                        <!--                                                        <div class="col-lg-4 col-md-12">
                                                                                                                    <div class="form-group">
                                                                                                                        <label class="">در حال تحصیل : </label>
                                                                                                                        <select
                                                                                                                                :disabled="isFormEdit == 1"
                                                                                                                                class="mdb-select md-form" v-model="dar_h_t_id">
                                                                                                                            <option value="" disabled selected>انتخاب کنید
                                                                                                                            </option>
                                                                                                                            <option v-for="row in dar_h_t" :value="row.id">
                                                                                                                                @{{row.attr}}
                                                                                                                            </option>
                                                                                                                        </select>
                                                                                                                    </div>
                                                                                                                </div>-->
                                                    </div>
                                                </fieldset>

                                            </form>
                                        </div>
                                    </div>
                                </div>


                                <div v-if="formChange==2" class="col-lg-12 col-md-12 col-sm-12">
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
                                            <button @click="changeForm(2)" class="next_form">بعدی</button>
                                            <button @click="editForm()" class="next_form">ویرایش فرم</button>
                                            <button @click="changeFormToBack(1)" class="next_form">قبلی</button>
                                            <form id="wizard_with_validation" method="POST">
                                                {{-- <h3>وضعیت تحصیلی</h3> --}}
                                                <fieldset>
                                                    <div class="row clearfix">

                                                        <div class="col-md-12">
                                                            <h3 class="title-header" style="text-align: center">
                                                                وضعیت تحصیلات</h3>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group form-group-force  ">

                                                                <label class="title ">وضعیت تحصیلی : </label>
                                                                <select
                                                                    @change="change_selected()"
                                                                    :disabled="isFormEdit == 1"
                                                                    class="mdb-select md-form v-tahsili"
                                                                    v-model="v_tt_id">

                                                                    <option value="" disabled selected>انتخاب کنید
                                                                    </option>

                                                                    <option v-for="row in v_tt" :value="row.id">
                                                                        @{{row.attr}}
                                                                    </option>

                                                                </select>

                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group form-group-force">
                                                                <label class="title">در حال تحصیل : </label>
                                                                <select
                                                                    :disabled="isFormEdit == 1"
                                                                    class="mdb-select md-form"
                                                                    v-model="dar_h_t_id">
                                                                    <option value="" disabled selected>
                                                                        انتخاب
                                                                        کنید
                                                                    </option>
                                                                    <option v-for="row in dar_h_t"
                                                                            :value="row.id">
                                                                        @{{row.attr}}
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>


                                                        <div
                                                            style="width: 100%"
                                                            v-if="stat_show_academy==3 ||stat_show_academy==1 || stat_show_academy==2">

                                                            <div v-if="stat_show_academy==1 || stat_show_academy==3">


                                                                <div style="display: flex; flex-wrap: wrap;">


                                                                    <div class="col-12">
                                                                        <h3> تحصیلات دانشگاهی </h3>
                                                                    </div>
                                                                    <div class="col-md-4 ">

                                                                        <div class="form-group">


                                                                            <label class="title">تحصیلات دانشگاهی
                                                                                : </label>
                                                                            <select
                                                                                :disabled="isFormEdit == 1"
                                                                                class="mdb-select md-form"
                                                                                v-model="t_d_id">

                                                                                <option value="" disabled selected>
                                                                                    انتخاب
                                                                                    کنید
                                                                                </option>

                                                                                <option v-for="row in t_d"
                                                                                        :value="row.id">
                                                                                    @{{row.attr}}
                                                                                </option>

                                                                            </select>


                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="title">نام دانشگاه : </label>
                                                                            <v-select style="    width: 59%;"
                                                                                      :disabled="isFormEdit == 1"
                                                                                      :options="optionSelectdaneshgah"
                                                                                      searchable="true" v-model="d_id"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 ">
                                                                        <div class="form-group">


                                                                            <label class="title">نوع دانشگاه : </label>
                                                                            <select
                                                                                :disabled="isFormEdit == 1"
                                                                                class="mdb-select md-form"
                                                                                v-model="t_d_id_type_d">

                                                                                <option value="" disabled selected>
                                                                                    انتخاب
                                                                                    کنید
                                                                                </option>

                                                                                <option v-for="row in noe_daneshgah"
                                                                                        :value="row.id">
                                                                                    @{{row.attr}}
                                                                                </option>

                                                                            </select>


                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="title">رشته : </label>
                                                                            <v-select :disabled="isFormEdit == 1"
                                                                                      :options="optionSelectReshte"
                                                                                      searchable="true" v-model="r_id"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">

                                                                            <label class="title">کد دانشجویی : </label>
                                                                            <input
                                                                                style="width: 251px"
                                                                                v-model="k_d"
                                                                                @change="attr_value_select(78)"
                                                                                :disabled="isFormEdit == 1"
                                                                                value="0" name="age"
                                                                                class="form-control my-form-control k_d"
                                                                                style="width:180px">
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                            <div v-if="stat_show_academy==2 || stat_show_academy==3"
                                                                 style="width: 100%"
                                                            >
                                                                <div class="clearfix"></div>
                                                                <div style="display: flex; flex-wrap: wrap;">
                                                                    <div class="col-12"><h3>تحصیلات حوزوی</h3></div>
                                                                    <div class="col-md-4">

                                                                        <div class="form-group">


                                                                            <label class="title">تحصیلات حوزوی
                                                                                : </label>
                                                                            <select
                                                                                style="width: 237px"
                                                                                :disabled="isFormEdit == 1"
                                                                                class="mdb-select md-form"
                                                                                v-model="t_h_id">

                                                                                <option value="" disabled selected>
                                                                                    انتخاب
                                                                                    کنید
                                                                                </option>

                                                                                <option v-for="row in t_h"
                                                                                        :value="row.id">
                                                                                    @{{row.attr}}
                                                                                </option>

                                                                            </select>


                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="title">نام حوزه : </label>
                                                                            {{-- <select
                                                                                :disabled="isFormEdit == 1"
                                                                                class="mdb-select md-form" v-model="ostan_h_id">
                                                                                <option value="" disabled selected>انتخاب کنید</option>
                                                                                <option v-for="row in ostan" :value="row.id">@{{row.attr}}
                                                                                </option>
                                                                            </select> --}}
                                                                            <v-select :disabled="isFormEdit == 1"
                                                                                      :options="optionSelectOstan"
                                                                                      searchable="true"
                                                                                      v-model="ostan_h_id"/>

                                                                        </div>


                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="title">رشته تخصصی : </label>
                                                                            <select
                                                                                style="margin-top: 5px"
                                                                                :disabled="isFormEdit == 1"
                                                                                class="mdb-select md-form"
                                                                                v-model="r_t_id">
                                                                                <option value="" disabled selected>
                                                                                    انتخاب
                                                                                    کنید
                                                                                </option>
                                                                                <option v-for="row in r_t"
                                                                                        :value="row.id">
                                                                                    @{{row.attr}}
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">

                                                                            <label class="title">کد مرکز مدیریت
                                                                                : </label>
                                                                            <input
                                                                                style="width: 209px"
                                                                                v-model="k_m_m"
                                                                                @change="attr_value_select(80)"
                                                                                placeholder="کد مرکز مدیریت"
                                                                                type="text"
                                                                                :disabled="isFormEdit == 1"
                                                                                name="age"
                                                                                class="form-control my-form-control k_m_m"
                                                                                style="width:180px">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">

                                                                            <label class="title">کد مرکز خدمات
                                                                                : </label>
                                                                            <input
                                                                                v-model="k_m_kh"
                                                                                @change="attr_value_select(79)"
                                                                                placeholder="کد مرکز خدمات"
                                                                                type="text"
                                                                                :disabled="isFormEdit == 1"
                                                                                name="age"
                                                                                class="form-control my-form-control k_m_kh "
                                                                                style="width:180px">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-4">
                                                                        <div class="form-group">

                                                                            <label class="title">نام حوزه : </label>
                                                                            <input
                                                                                style="width: 280px"
                                                                                v-model="n_h"
                                                                                @change="attr_value_select(81)"
                                                                                type="text"
                                                                                placeholder="نام حوزه"
                                                                                :disabled="isFormEdit == 1"
                                                                                name="age"
                                                                                class="form-control my-form-control n_h"
                                                                                style="width:180px">
                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>


                                                        </div>

                                                        <div class="col-md-12 ">

                                                            <div class="form-group">

                                                                <label class="title">مقالات عملی : </label>
                                                                <div
                                                                    class="fancy-checkbox my-fancy-checkbox">
                                                                    <label class="label-account"><input
                                                                            v-model="article"
                                                                            :disabled="isFormEdit == 1"
                                                                            class="input-account"
                                                                            type="radio"
                                                                            name="article"
                                                                            :value="1"
                                                                        ><span>دارم </span></label>
                                                                </div>
                                                                <div
                                                                    class="fancy-checkbox my-fancy-checkbox">
                                                                    <label class="label-account"><input
                                                                            v-model="article"
                                                                            :disabled="isFormEdit == 1"
                                                                            class="input-account"
                                                                            type="radio"
                                                                            name="article"
                                                                            :value="0"
                                                                        ><span>ندارم</span></label>
                                                                </div>


                                                            </div>
                                                        </div>

                                                        <div class="col-md-12" v-if="article==1">
                                                            <div class="form-group">
                                                                <div class="card">


                                                                    <div class="body">
                                                                        <div class="table-responsive">
                                                                            <table
                                                                                class="table-article table table-hover table-custom spacing8">
                                                                                <thead>
                                                                                <tr>
                                                                                    <th>ردیف</th>
                                                                                    <th>عنوان مقاله</th>
                                                                                    <th>نوع مقاله</th>
                                                                                    <th>سفارش دهنده</th>
                                                                                    <th>سال</th>
                                                                                    <th>توضیحات</th>
                                                                                    <th>افزودن</th>
                                                                                    <th>حذف</th>
                                                                                </tr>
                                                                                </thead>
                                                                                <tbody class="article-body">

                                                                                <tr v-for="(row, index) in article_arr">
                                                                                    <td>
                                                                                        <div
                                                                                            class="form-group">
                                                                                            <input
                                                                                                :value="index+1"
                                                                                                disabled="disabled"
                                                                                                type="text"
                                                                                            >
                                                                                        </div>

                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="form-group">
                                                                                            <input
                                                                                                :disabled="isFormEdit == 1"
                                                                                                v-model="row.article_title"
                                                                                                type="text"
                                                                                            >
                                                                                        </div>

                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="form-group">
                                                                                            <input
                                                                                                :disabled="isFormEdit == 1"
                                                                                                v-model="row.article_type"
                                                                                                type="text"
                                                                                            >
                                                                                        </div>

                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="form-group">
                                                                                            <input
                                                                                                :disabled="isFormEdit == 1"
                                                                                                v-model="row.article_customer"
                                                                                                type="text"
                                                                                            >
                                                                                        </div>

                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="form-group ">
                                                                                            <date-picker
                                                                                                :disabled="isFormEdit == 1"
                                                                                                v-model="row.article_date"/>
                                                                                            <input
                                                                                                :disabled="isFormEdit == 1"
                                                                                                v-model="row.article_customer"
                                                                                                type="text"
                                                                                            >

                                                                                        </div>

                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="form-group">
                                                                                                        <textarea
                                                                                                            v-model="row.article_desc"
                                                                                                            rows="5"
                                                                                                            cols="60">

</textarea>
                                                                                        </div>

                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            v-if="row.article_id ==''"
                                                                                            style="cursor: pointer"
                                                                                            @click="add_article_row(index)"
                                                                                            class="form-group">

                                                                                            <i
                                                                                                class="fa fa-plus-circle">

                                                                                            </i>

                                                                                            افزودن

                                                                                        </div>
                                                                                        <div
                                                                                            v-else
                                                                                            style="cursor: pointer"
                                                                                            @click="add_article_row(index)"
                                                                                            class="form-group">

                                                                                            <i
                                                                                                class="fa fa-plus-circle">

                                                                                            </i>

                                                                                            ویرایش

                                                                                        </div>

                                                                                    </td>
                                                                                    <td>

                                                                                        <div
                                                                                            v-if="row.article_id !=''"
                                                                                            style="cursor: pointer"
                                                                                            @click="remove_article_row(index)"
                                                                                            class="form-group">

                                                                                            <i
                                                                                                class="fa fa-minus-circle">

                                                                                            </i>
                                                                                            حذف

                                                                                        </div>

                                                                                    </td>
                                                                                </tr>


                                                                                </tbody>
                                                                            </table>
                                                                        </div>

                                                                    </div>

                                                                    <pagination
                                                                        :data="all_kadamat_refahi"
                                                                        @pagination-change-page="get_kadamat_refahi"
                                                                    >

                                                                    </pagination>
                                                                    <loading :active.sync="isLoading"
                                                                             color="#fff"
                                                                             background-color="#000"
                                                                             loader="dots"></loading>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="col-md-12 ">

                                                            <div class="form-group">

                                                                <label class="title">تالیف : </label>
                                                                <div
                                                                    class="fancy-checkbox my-fancy-checkbox">
                                                                    <label class="label-account"><input
                                                                            v-model="talif"
                                                                            :disabled="isFormEdit == 1"
                                                                            class="input-account"
                                                                            type="radio"
                                                                            name="talif"
                                                                            :value="1"
                                                                        ><span>دارم </span></label>
                                                                </div>
                                                                <div
                                                                    class="fancy-checkbox my-fancy-checkbox">
                                                                    <label class="label-account"><input
                                                                            v-model="talif"
                                                                            :disabled="isFormEdit == 1"
                                                                            class="input-account"
                                                                            type="radio"
                                                                            name="talif"
                                                                            :value="0"
                                                                        ><span>ندارم</span></label>
                                                                </div>


                                                            </div>
                                                        </div>

                                                        <div class="col-md-12" v-if="talif==1">
                                                            <div class="form-group">
                                                                <div class="card">


                                                                    <div class="body">
                                                                        <div class="table-responsive">
                                                                            <table
                                                                                class="table-article table table-hover table-custom spacing8">
                                                                                <thead>
                                                                                <tr>
                                                                                    <th>ردیف</th>
                                                                                    <th>عنوان</th>
                                                                                    <th>موضوع</th>
                                                                                    <th>ناشر</th>
                                                                                    <th>سال</th>
                                                                                    <th>توضیحات</th>
                                                                                    <th>افزودن</th>
                                                                                    <th>حذف</th>
                                                                                </tr>
                                                                                </thead>
                                                                                <tbody class="article-body">

                                                                                <tr v-for="(row, index) in talif_arr">
                                                                                    <td>
                                                                                        <div
                                                                                            class="form-group">
                                                                                            <input
                                                                                                :value="index+1"
                                                                                                disabled="disabled"
                                                                                                type="text"
                                                                                            >
                                                                                        </div>

                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="form-group">
                                                                                            <input
                                                                                                :disabled="isFormEdit == 1"
                                                                                                v-model="row.talif_title"
                                                                                                type="text"
                                                                                            >
                                                                                        </div>

                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="form-group">
                                                                                            <input
                                                                                                :disabled="isFormEdit == 1"
                                                                                                v-model="row.talif_subject"
                                                                                                type="text"
                                                                                            >
                                                                                        </div>

                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="form-group">
                                                                                            <input
                                                                                                :disabled="isFormEdit == 1"
                                                                                                v-model="row.talif_nasher"
                                                                                                type="text"
                                                                                            >
                                                                                        </div>

                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="form-group ">
                                                                                            <date-picker
                                                                                                :disabled="isFormEdit == 1"
                                                                                                v-model="row.talif_date"/>
                                                                                            <input
                                                                                                :disabled="isFormEdit == 1"
                                                                                                v-model="row.article_customer"
                                                                                                type="text"
                                                                                            >

                                                                                        </div>

                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="form-group">
                                                                                                        <textarea
                                                                                                            v-model="row.talif_desc"
                                                                                                            rows="5"
                                                                                                            cols="60">

</textarea>
                                                                                        </div>

                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            v-if="row.talif_id  ==''"
                                                                                            style="cursor: pointer"
                                                                                            @click="add_talif_row(index)"
                                                                                            class="form-group">

                                                                                            <i
                                                                                                class="fa fa-plus-circle">

                                                                                            </i>

                                                                                            افزودن

                                                                                        </div>
                                                                                        <div
                                                                                            v-else
                                                                                            style="cursor: pointer"
                                                                                            @click="add_talif_row(index)"
                                                                                            class="form-group">

                                                                                            <i
                                                                                                class="fa fa-plus-circle">

                                                                                            </i>

                                                                                            ویرایش

                                                                                        </div>

                                                                                    </td>
                                                                                    <td>

                                                                                        <div
                                                                                            v-if="row.talif_id  !=''"
                                                                                            style="cursor: pointer"
                                                                                            @click="remove_talif_row(index)"
                                                                                            class="form-group">

                                                                                            <i
                                                                                                class="fa fa-minus-circle">

                                                                                            </i>
                                                                                            حذف

                                                                                        </div>

                                                                                    </td>
                                                                                </tr>


                                                                                </tbody>
                                                                            </table>
                                                                        </div>

                                                                    </div>

                                                                    <pagination
                                                                        :data="all_kadamat_refahi"
                                                                        @pagination-change-page="get_kadamat_refahi"
                                                                    >

                                                                    </pagination>
                                                                    <loading :active.sync="isLoading"
                                                                             color="#fff"
                                                                             background-color="#000"
                                                                             loader="dots"></loading>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div v-if="stat_show_academy==4">

                                                    </div>


                                        </div>
                                        </fieldset>
                                        </form>
                                    </div>
                                </div>


                                <div v-if="formChange==3" class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="card">
                                        <div class="header">
                                            <!--                                            <h2>مثال فرم پیشرفته با اعتبار سنجی</h2>-->
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
                                            <button @click="changeForm(3)" class="next_form">بعدی</button>
                                            <button @click="editForm()" class="next_form">ویرایش فرم</button>
                                            <button @click="changeFormToBack(2)" class="next_form">قبلی</button>
                                            <form id="wizard_with_validation" method="POST">
                                                {{-- <h3>وضعیت تحصیلی</h3> --}}
                                                <fieldset>
                                                    <div class="row clearfix">
                                                        <div class="col-12">
                                                            <h3 class="title-header" style="text-align: center">اطلاعات
                                                                شغلی- مهارتی</h3>
                                                        </div>

                                                        <div class="col-md-12 ">

                                                            <div class="form-group">

                                                                <label class="title">شغل : </label>
                                                                <div v-for="row in form1_singleAttr"
                                                                     v-if="row.id >=96  &&  row.id <=106"
                                                                     class="fancy-checkbox my-fancy-checkbox">
                                                                    <label class="label-account"><input
                                                                            :disabled="isFormEdit == 1"
                                                                            v-model="form1_singleAttr_selected[row.id] "
                                                                            class="input-account"
                                                                            type="checkbox"
                                                                        ><span>@{{row.attr}}</span></label>
                                                                </div>


                                                            </div>
                                                        </div>

                                                        <!--                                                    <div class="col-md-12">
                                                                                                                <div class="form-group">


                                                                                                                    <label class="">سابقه عضویت در سایر تشکل ها : </label>
                                                                                                                    <div v-for="row in form1_singleAttr"
                                                                                                                         v-if="row.id >=91  &&  row.id <=94"
                                                                                                                         class="fancy-checkbox my-fancy-checkbox">
                                                                                                                        <label class="label-account"><input
                                                                                                                                :disabled="isFormEdit == 1"
                                                                                                                                v-model="form1_singleAttr_selected[row.id] "
                                                                                                                                class="input-account"
                                                                                                                                type="checkbox"
                                                                                                                            ><span>@{{row.attr}}</span></label>
                                                                                                                    </div>

                                                                                                                </div>
                                                                                                            </div>-->


                                                        <div style="width: 100%">
                                                            <div style="width: 100% ;display: flex;flex-wrap: wrap">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="title">حوزه خدمت : </label>
                                                                        <select
                                                                            @change="test()"
                                                                            :disabled="isFormEdit == 1"
                                                                            class="mdb-select md-form"
                                                                            v-model="h_kh_id">
                                                                            <option value="" disabled selected>انتخاب
                                                                                کنید
                                                                            </option>
                                                                            <option v-for="row in h_kh" :value="row.id">
                                                                                @{{row.attr}}
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="title">زیر مجوعه : </label>
                                                                        <select

                                                                            :disabled="isFormEdit == 1"
                                                                            class="mdb-select md-form"
                                                                            v-model="h_kh_sub_id">
                                                                            <option value="" disabled selected>انتخاب
                                                                                کنید
                                                                            </option>
                                                                            <option v-for="row in h_kh_sub"
                                                                                    :value="row.id">
                                                                                @{{row.attr}}
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">

                                                                        <!--                                                        <label class="">کد مرکز خدمات : </label>-->
                                                                        <input
                                                                            style="width: 350px;"
                                                                            v-model="o_d_sh"
                                                                            @change="attr_value_select(130)"
                                                                            placeholder="عنوان دقیق شغل"
                                                                            type="text"
                                                                            :disabled="isFormEdit == 1"
                                                                            name="age"
                                                                            class="form-control my-form-control o_d_sh"
                                                                            style="width:180px">
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12 ">

                                                                    <div class="form-group">

                                                                        <label class="title">کار آفرین : </label>
                                                                        <div
                                                                            class="fancy-checkbox my-fancy-checkbox">
                                                                            <label class="label-account"><input
                                                                                    v-model="karafrin"
                                                                                    :disabled="isFormEdit == 1"
                                                                                    class="input-account"
                                                                                    type="radio"
                                                                                    name="karafrin"
                                                                                    :value="1"
                                                                                ><span>هستم </span></label>
                                                                        </div>
                                                                        <div
                                                                            class="fancy-checkbox my-fancy-checkbox">
                                                                            <label class="label-account"><input
                                                                                    v-model="karafrin"
                                                                                    :disabled="isFormEdit == 1"
                                                                                    class="input-account"
                                                                                    type="radio"
                                                                                    name="karafrin"
                                                                                    :value="0"
                                                                                ><span>نیستم</span></label>
                                                                        </div>


                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12" v-if="karafrin==1">
                                                                    <div class="form-group">
                                                                        <div class="card">


                                                                            <div class="body">
                                                                                <div class="table-responsive">
                                                                                    <table
                                                                                        class="table-article table table-hover table-custom spacing8">
                                                                                        <thead>
                                                                                        <tr>
                                                                                            <th>ردیف</th>
                                                                                            <th>عنوان کار</th>
                                                                                            <th>موضوع</th>
                                                                                            <th>سابقه</th>
                                                                                            <th>میزان اشتغال زایی</th>
                                                                                            <th>توضیحات</th>
                                                                                            <th>افزودن</th>
                                                                                            <th>حذف</th>
                                                                                        </tr>
                                                                                        </thead>
                                                                                        <tbody class="article-body">

                                                                                        <tr v-for="(row, index) in karafrin_arr">
                                                                                            <td>
                                                                                                <div
                                                                                                    class="form-group">
                                                                                                    <input
                                                                                                        :value="index+1"
                                                                                                        disabled="disabled"
                                                                                                        type="text"
                                                                                                    >
                                                                                                </div>

                                                                                            </td>
                                                                                            <td>
                                                                                                <div
                                                                                                    class="form-group">
                                                                                                    <input
                                                                                                        :disabled="isFormEdit == 1"
                                                                                                        v-model="row.karafrin_title"
                                                                                                        type="text"
                                                                                                    >
                                                                                                </div>

                                                                                            </td>
                                                                                            <td>
                                                                                                <div
                                                                                                    class="form-group">
                                                                                                    <input
                                                                                                        :disabled="isFormEdit == 1"
                                                                                                        v-model="row.karafrin_subject"
                                                                                                        type="text"
                                                                                                    >
                                                                                                </div>

                                                                                            </td>
                                                                                            <td>
                                                                                                <div
                                                                                                    class="form-group">
                                                                                                    <input
                                                                                                        :disabled="isFormEdit == 1"
                                                                                                        v-model="row.karafrin_sabeghe"
                                                                                                        type="number"
                                                                                                    >
                                                                                                </div>

                                                                                            </td>
                                                                                            <td>
                                                                                                <div
                                                                                                    class="form-group ">
                                                                                                    <input
                                                                                                        :disabled="isFormEdit == 1"
                                                                                                        v-model="row.karafrin_mizan_eshteghazayi"
                                                                                                        type="number"
                                                                                                    >

                                                                                                </div>

                                                                                            </td>
                                                                                            <td>
                                                                                                <div
                                                                                                    class="form-group">
                                                                                                        <textarea
                                                                                                            v-model="row.karafrin_desc"
                                                                                                            rows="5"
                                                                                                            cols="60">

</textarea>
                                                                                                </div>

                                                                                            </td>
                                                                                            <td>
                                                                                                <div
                                                                                                    v-if="row.karafrin_id ==''"
                                                                                                    style="cursor: pointer"
                                                                                                    @click="add_karafarin_row(index)"
                                                                                                    class="form-group">

                                                                                                    <i
                                                                                                        class="fa fa-plus-circle">

                                                                                                    </i>

                                                                                                    افزودن

                                                                                                </div>
                                                                                                <div
                                                                                                    v-else
                                                                                                    style="cursor: pointer"
                                                                                                    @click="add_karafarin_row(index)"
                                                                                                    class="form-group">

                                                                                                    <i
                                                                                                        class="fa fa-plus-circle">

                                                                                                    </i>

                                                                                                    ویرایش

                                                                                                </div>

                                                                                            </td>
                                                                                            <td>

                                                                                                <div
                                                                                                    v-if="row.karafrin_id !=''"
                                                                                                    style="cursor: pointer"
                                                                                                    @click="remove_karafrin_row(index)"
                                                                                                    class="form-group">

                                                                                                    <i
                                                                                                        class="fa fa-minus-circle">

                                                                                                    </i>
                                                                                                    حذف

                                                                                                </div>

                                                                                            </td>
                                                                                        </tr>


                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>

                                                                            </div>

                                                                            <pagination
                                                                                :data="all_kadamat_refahi"
                                                                                @pagination-change-page="get_kadamat_refahi"
                                                                            >

                                                                            </pagination>
                                                                            <loading :active.sync="isLoading"
                                                                                     color="#fff"
                                                                                     background-color="#000"
                                                                                     loader="dots"></loading>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                            <div style="width: 100%"
                                                            >
                                                                <div class="clearfix"></div>
                                                                <div class="col-12">
                                                                    <h3>مهارتها وتخصص ها</h3>
                                                                </div>
                                                                <div>

                                                                    <div class="form-group">


                                                                        <label class="title">علمی و پژوهشی : </label>
                                                                        <div v-for="row in form1_singleAttr"
                                                                             v-if="row.id >=108  &&  row.id <=110"
                                                                             class="fancy-checkbox my-fancy-checkbox">
                                                                            <label class="label-account"><input
                                                                                    :disabled="isFormEdit == 1"
                                                                                    v-model="form1_singleAttr_selected[row.id] "
                                                                                    class="input-account"
                                                                                    type="checkbox"
                                                                                ><span>@{{row.attr}}</span></label>
                                                                        </div>


                                                                    </div>
                                                                </div>

                                                                <div class="clearFix"></div>
                                                                <div style="float: right" class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="title">رسانه ای : </label>
                                                                        <div v-for="row in form1_singleAttr"
                                                                             v-if="row.id >=112  &&  row.id <=122"
                                                                             class="fancy-checkbox my-fancy-checkbox">
                                                                            <label class="label-account"><input
                                                                                    :disabled="isFormEdit == 1"
                                                                                    v-model="form1_singleAttr_selected[row.id] "
                                                                                    class="input-account"
                                                                                    type="checkbox"
                                                                                ><span>@{{row.attr}}</span></label>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div style="float: right" class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="title">مشاوره ای : </label>
                                                                        <div v-for="row in form1_singleAttr"
                                                                             v-if="row.id >=124  &&  row.id <=129"
                                                                             class="fancy-checkbox my-fancy-checkbox">
                                                                            <label class="label-account"><input
                                                                                    :disabled="isFormEdit == 1"
                                                                                    v-model="form1_singleAttr_selected[row.id] "
                                                                                    class="input-account"
                                                                                    type="checkbox"
                                                                                ><span>@{{row.attr}}</span></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </fieldset>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <div v-if="formChange==4" class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="card">
                                        <div class="header">
                                            <h2>مثال فرم پیشرفته با اعتبار سنجی</h2>-->
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
                                            <button @click="changeForm(4)" class="next_form">ذخیره</button>
                                            <button @click="editForm()" class="next_form">ویرایش فرم</button>
                                            <button @click="changeFormToBack(3)" class="next_form">قبلی</button>
                                            <form id="wizard_with_validation" method="POST">
                                                {{-- <h3>وضعیت تحصیلی</h3> --}}
                                                <fieldset>
                                                    <div class="row clearfix">
                                                        <div class="col-12">
                                                            <h3 class="title-header" style="text-align: center">اطلاعات
                                                                تشکیلاتی</h3>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group">

                                                                <label class="title">تعداد سال سابقه در عضویت در
                                                                    تشکل: </label>

                                                                <input
                                                                    :disabled="isFormEdit == 1"
                                                                    v-model="t_s_s_o_t"
                                                                    value="0" type="number"
                                                                    @change="attr_value_select(15)"
                                                                    name="age"
                                                                    class="form-control my-form-control">

                                                            </div>
                                                            <div class="form-group">
                                                                <label class="title">عنوان های تشکیلاتی : </label>

                                                                <div v-for="row in form1_singleAttr"
                                                                     v-if="row.id >=16  &&  row.id <=28"
                                                                     class="fancy-checkbox my-fancy-checkbox">
                                                                    <label class="label-account">
                                                                        <input
                                                                            :disabled="isFormEdit == 1"
                                                                            v-model="form1_singleAttr_selected[row.id] "
                                                                            class="input-account"
                                                                            type="checkbox"
                                                                        ><span>@{{row.attr}}</span></label>
                                                                </div>


                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 col-md-12"
                                                             v-if="form1_singleAttr_selected[21]==true">
                                                            <div class="form-group form-group-force">
                                                                <label class="title">دوره قرارگاه ملی : </label>
                                                                <select
                                                                    :disabled="isFormEdit == 1"
                                                                    class="mdb-select md-form" v-model="dore_id">
                                                                    <option value="" disabled selected>انتخاب کنید
                                                                    </option>
                                                                    <option v-for="row in dore" :value="row.id">
                                                                        @{{row.attr}}
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>


                                                        <div class="col-lg-4 col-md-12"
                                                             v-if="form1_singleAttr_selected[21]==true">
                                                            <div class="form-group form-group-force">
                                                                <label class="title">وضعیت ارتباط با اتحادیه : </label>
                                                                <select
                                                                    :disabled="isFormEdit == 1"
                                                                    class="mdb-select md-form"
                                                                    v-model="v_er_ba_et_id">
                                                                    <option value="" disabled selected>انتخاب کنید
                                                                    </option>
                                                                    <option v-for="row in v_er_ba_et" :value="row.id">
                                                                        @{{row.attr}}
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group">


                                                                <label class="title">سابقه عضویت در سایر تشکل ها
                                                                    : </label>
                                                                <div v-for="row in form1_singleAttr"
                                                                     v-if="(row.id >=91  &&  row.id <=94) ||( row.id >=215  &&  row.id <=228)  "
                                                                     class="fancy-checkbox my-fancy-checkbox">
                                                                    <label class="label-account"><input
                                                                            :disabled="isFormEdit == 1"
                                                                            v-model="form1_singleAttr_selected[row.id] "
                                                                            class="input-account"
                                                                            type="checkbox"
                                                                        ><span>@{{row.attr}}</span></label>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 ">

                                                            <div class="form-group">

                                                                <label class="title">مهمترین سوابق تشکیلاتی
                                                                    : </label>

                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <div class="card">


                                                                    <div class="body">
                                                                        <div class="table-responsive">
                                                                            <table
                                                                                class="table-article table table-hover table-custom spacing8">
                                                                                <thead>
                                                                                <tr>
                                                                                    <th>ردیف</th>
                                                                                    <th>نهاد/تشکل</th>
                                                                                    <th>سمت</th>
                                                                                    <th>سابقه</th>
                                                                                    <th>حوزه(ملی/استانی/محلی)</th>
                                                                                    <th>توضیحات</th>
                                                                                    <th>افزودن</th>
                                                                                    <th>حذف</th>
                                                                                </tr>
                                                                                </thead>
                                                                                <tbody class="article-body">

                                                                                <tr v-for="(row, index) in savabegh_taskilati">
                                                                                    <td>
                                                                                        <div
                                                                                            class="form-group">
                                                                                            <input
                                                                                                :value="index+1"
                                                                                                disabled="disabled"
                                                                                                type="text"
                                                                                            >
                                                                                        </div>

                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="form-group"
                                                                                            style="width: 262px"
                                                                                        >
                                                                                            <v-select
                                                                                                :disabled="isFormEdit == 1"
                                                                                                :options="sayer_tashkol"
                                                                                                searchable="true"
                                                                                                v-model="row.sayer_tashakol"/>
                                                                                        </div>

                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="form-group">
                                                                                            <input
                                                                                                :disabled="isFormEdit == 1"
                                                                                                v-model="row.savabegh_semat"
                                                                                                type="text"
                                                                                            >
                                                                                        </div>

                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="form-group">
                                                                                            <input
                                                                                                :disabled="isFormEdit == 1"
                                                                                                v-model="row.sabeghe_number"
                                                                                                type="number"
                                                                                            >
                                                                                        </div>

                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="form-group ">
                                                                                            <div
                                                                                                class="form-group"
                                                                                                style="width: 262px;">
                                                                                                <v-select
                                                                                                    :disabled="isFormEdit == 1"
                                                                                                    :options="sayer_tashkol_ostan"
                                                                                                    searchable="true"
                                                                                                    v-model="row.sayer_tashakol_ostan"/>
                                                                                            </div>

                                                                                        </div>

                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="form-group">
                                                                                                        <textarea
                                                                                                            v-model="row.sabegh_desc"
                                                                                                            rows="5"
                                                                                                            cols="60">

</textarea>
                                                                                        </div>

                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            v-if="row.savabegh_id ==''"
                                                                                            style="cursor: pointer"
                                                                                            @click="add_savabegh_row(index)"
                                                                                            class="form-group">

                                                                                            <i
                                                                                                class="fa fa-plus-circle">

                                                                                            </i>

                                                                                            افزودن

                                                                                        </div>
                                                                                        <div
                                                                                            v-else
                                                                                            style="cursor: pointer"
                                                                                            @click="add_savabegh_row(index)"
                                                                                            class="form-group">

                                                                                            <i
                                                                                                class="fa fa-plus-circle">

                                                                                            </i>

                                                                                            ویرایش

                                                                                        </div>

                                                                                    </td>
                                                                                    <td>

                                                                                        <div
                                                                                            v-if="row.savabegh_id!=''"
                                                                                            style="cursor: pointer"
                                                                                            @click="remove_savabegh_row(index)"
                                                                                            class="form-group">

                                                                                            <i
                                                                                                class="fa fa-minus-circle">

                                                                                            </i>
                                                                                            حذف

                                                                                        </div>

                                                                                    </td>
                                                                                </tr>


                                                                                </tbody>
                                                                            </table>
                                                                        </div>

                                                                    </div>

                                                                    <pagination
                                                                        :data="all_kadamat_refahi"
                                                                        @pagination-change-page="get_kadamat_refahi"
                                                                    >

                                                                    </pagination>
                                                                    <loading :active.sync="isLoading"
                                                                             color="#fff"
                                                                             background-color="#000"
                                                                             loader="dots"></loading>
                                                                </div>
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
