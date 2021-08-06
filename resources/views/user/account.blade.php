@extends('user.layouts.adminLayout')

@section('content')

    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2 class="account-top">مراحل ثبت نام</h2>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    {{-- <div class="inlineblock vivify swoopInTop delay-900 mr-4">بازدیدکنندگان <span id="mini-bar-chart1"
                                                                                                  class="mini-bar-chart"></span>
                    </div>
                    <div class="inlineblock vivify swoopInTop delay-950 mr-4">بازدیدها <span id="mini-bar-chart2"
                                                                                             class="mini-bar-chart"></span>
                    </div>
                    <div class="inlineblock vivify swoopInTop delay-1000">چت ها <span id="mini-bar-chart3"
                                                                                      class="mini-bar-chart"></span>
                    </div> --}}
                </div>
            </div>


            <div class="box-parent">
                <div class="box-account">
                    <div class="box-account-sub">
                        <button class="btn-account">1
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                        </button>
                        <span class="caption-account">مرحله اول</span>
                    </div>

                </div>
                <div class="box-account">
                    <div class="box-account-sub">
                        <button class="btn-account">2
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                        </button>
                        <span class="caption-account">مرحله دوم</span>
                    </div>

                </div>
                <div class="box-account" >
                    <div class="box-account-sub">
                        <button class="btn-account" @click="btn_1()">3
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                        </button>
                        <span class="caption-account">مرحله سوم</span>
                    </div>
                </div>
                {{-- <div class="box-account">
                    <div class="box-account-sub">
                        <button class="btn-account" @click="btn_1()">4
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                        </button>
                        <span class="caption-account">مرحله چهارم</span>
                    </div>

                </div> --}}
            </div>

        </div>

        <div class="container-fluid">


            <div class="row clearfix">
                <div v-if="formChange==1" class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <!--                            <h2>مثال فرم پیشرفته با اعتبار سنجی</h2>-->
                            <ul class="header-dropdown dropdown">

                                <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
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
                                <h3 style="text-align: center">اطلاعات فردی</h3>

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
                                                    type="text" v-model="family" class="form-control"
                                                    placeholder="نام خانوادگی"
                                                >
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <input
                                                    :disabled="isFormEdit == 1"
                                                    type="text" v-model="fatherName" class="form-control"
                                                    placeholder="نام پدر "
                                                >
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <input
                                                    :disabled="isFormEdit == 1"
                                                    type="text" class="form-control" placeholder="شماره ملی "
                                                    v-model="nCod">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <date-picker :disabled="isFormEdit == 1" v-model="birthday"/>


                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <input
                                                    :disabled="isFormEdit == 1"
                                                    type="text" class="form-control" placeholder="تلفن همراه "
                                                    v-model="mobile">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <input
                                                    :disabled="isFormEdit == 1"
                                                    type="text" class="form-control" v-model="socialmobile"
                                                    placeholder="تلفن شبکه اجتماعی"
                                                >
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <input
                                                    :disabled="isFormEdit == 1"
                                                    type="text" class="form-control" placeholder="تلفن منزل "
                                                    v-model="telhome">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12">
                                            <div class="col-lg-8 col-md-8" style="float: right">
                                                <div class="form-group" >
                                                    <example-component  @addrfilm="funcaddrfilm" style="height: 208px"></example-component>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 " style="float: right">
                                                <img :src="'/imgUser/'+film_addr" alt="" style="display: inline-block;height: 208px">
                                            </div>


                                        </div>

                                    </div>
                                </fieldset>
                                <h3>اطلاعات مشخصات</h3>
                                <fieldset>
                                    <div class="row clearfix">
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <label class="">وضعیت نظام وظیقه : </label>
                                                <select
                                                    :disabled="isFormEdit == 1"
                                                    class="mdb-select md-form" v-model="v_nv_id">

                                                    <option value="" disabled selected>انتخاب کنید</option>

                                                    <option v-for="row in v_nv" :value="row.id">@{{row.attr}}</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <label class="">وضعیت تاهل : </label>
                                                <select
                                                    :disabled="isFormEdit == 1"
                                                    class="mdb-select md-form" v-model="v_t_id">
                                                    <option value="" disabled selected>انتخاب کنید</option>
                                                    <option v-for="row in v_t" :value="row.id">@{{row.attr}}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <label class="">استان محل تحصیل : </label>


                                                <v-select  :disabled="isFormEdit == 1" :options="optionSelectOstan" searchable="true" v-model="ostan_id" />

                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">

                                                <label class="">تعداد سال سابقه در عضویت در تشکل : </label>
                                                <!--                                                <input
                                                                                                    :disabled="isFormEdit == 1"
                                                                                                    v-model="t_s_s_o_t" value="0" type="number" name="age"
                                                                                                    class="form-control my-form-control">   -->

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
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <label class="">دوره قرارگاه ملی : </label>
                                                <select
                                                    :disabled="isFormEdit == 1"
                                                    class="mdb-select md-form" v-model="dore_id">
                                                    <option value="" disabled selected>انتخاب کنید</option>
                                                    <option v-for="row in dore" :value="row.id">@{{row.attr}}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <label class="">وضعیت ارتباط با اتحادیه : </label>
                                                <select
                                                    :disabled="isFormEdit == 1"
                                                    class="mdb-select md-form" v-model="v_er_ba_et_id">
                                                    <option value="" disabled selected>انتخاب کنید</option>
                                                    <option v-for="row in v_er_ba_et" :value="row.id">@{{row.attr}}
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <label class="">در حال تحصیل : </label>
                                                <select
                                                    :disabled="isFormEdit == 1"
                                                    class="mdb-select md-form" v-model="dar_h_t_id">
                                                    <option value="" disabled selected>انتخاب کنید</option>
                                                    <option v-for="row in dar_h_t" :value="row.id">@{{row.attr}}
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
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

                                <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
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

                                            <div class="form-group">

                                                <!--                                                <div v-for="row in v_tt"
                                                                                                     class="fancy-checkbox my-fancy-checkbox">
                                                                                                    <label class="label-account"><input
                                                                                                            @change="change_selected(1,row.id)"
                                                                                                            :disabled="isFormEdit == 1"
                                                                                                            v-model="v_tt_selected[row.id] "
                                                                                                            class="input-account"
                                                                                                            type="checkbox"
                                                                                                        ><span>@{{row.attr}}</span></label>
                                                                                                </div>-->
                                                <label class="">ووضعیت تحصیلی : </label>
                                                <select
                                                    @change="change_selected()"
                                                    :disabled="isFormEdit == 1"
                                                    class="mdb-select md-form" v-model="v_tt_id">

                                                    <option value="" disabled selected>انتخاب کنید</option>

                                                    <option v-for="row in v_tt" :value="row.id">@{{row.attr}}</option>

                                                </select>

                                            </div>
                                        </div>


                                        <div style="width: 100%"
                                             v-if="stat_show_academy==3 ||stat_show_academy==1 || stat_show_academy==2">

                                            <div style="width: 100%"
                                                 v-if="stat_show_academy==1 || stat_show_academy==3">
                                                <div class="col-md-12 ">
                                                    <h3> تحصیلات دانشگاهی ( آخرین مقطع تحصیلی)</h3>
                                                    <div class="form-group">


                                                        <label class="">تحصیلات دانشگاهی : </label>
                                                        <select
                                                            style="width: 219px"
                                                            :disabled="isFormEdit == 1"
                                                            class="mdb-select md-form" v-model="t_d_id">

                                                            <option value="" disabled selected>انتخاب کنید</option>

                                                            <option v-for="row in t_d" :value="row.id">@{{row.attr}}
                                                            </option>

                                                        </select>


                                                    </div>
                                                </div>
                                                <div style="float: right" class="col-md-4">
                                                    <div class="form-group">

                                                        <label class="">کد دانشجویی : </label>
                                                        <input
                                                           style="width: 251px"
                                                            v-model="k_d"
                                                            @change="attr_value_select(78)"
                                                            :disabled="isFormEdit == 1"
                                                            value="0" name="age"
                                                            class="form-control my-form-control" style="width:180px">
                                                    </div>
                                                </div>
                                                <div style="float: right" class="col-md-4">
                                                    <div class="form-group">
                                                       <label class="">نام دانشگاه : </label>
                                                        <v-select style="    width: 59%;"  :disabled="isFormEdit == 1" :options="optionSelectdaneshgah" searchable="true" v-model="d_id" />
                                                    </div>
                                                </div>
                                                <div style="float: right" class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="">رشته : </label>
                                                        <v-select :disabled="isFormEdit == 1"   :options="optionSelectReshte" searchable="true" v-model="r_id" />
                                                    </div>
                                                </div>

                                            </div>
                                            <div style="width: 100%"
                                                 v-if="stat_show_academy==2 || stat_show_academy==3">
                                                <div class="clearfix"></div>
                                                <div>
                                                    <h3>تحصیلات حوزوی</h3>
                                                    <div class="form-group">


                                                        <label class="">تحصیلات حوزوی : </label>
                                                        <select
                                                            style="width: 237px"
                                                            @change="change_selected()"
                                                            :disabled="isFormEdit == 1"
                                                            class="mdb-select md-form" v-model="t_h_id">

                                                            <option value="" disabled selected>انتخاب کنید</option>

                                                            <option v-for="row in t_h" :value="row.id">@{{row.attr}}
                                                            </option>

                                                        </select>


                                                    </div>
                                                </div>

                                                <div class="clearFix"></div>
                                                <div style="float: right" class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="">استان حوزه : </label>
                                                        {{-- <select
                                                            :disabled="isFormEdit == 1"
                                                            class="mdb-select md-form" v-model="ostan_h_id">
                                                            <option value="" disabled selected>انتخاب کنید</option>
                                                            <option v-for="row in ostan" :value="row.id">@{{row.attr}}
                                                            </option>
                                                        </select> --}}
                                                        <v-select  :disabled="isFormEdit == 1" :options="optionSelectOstan" searchable="true" v-model="ostan_h_id" />

                                        </div>



                                                    </div>
                                                </div>
                                                <div style="float: right" class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="">رشته تخصصی : </label>
                                                        <select
                                                            :disabled="isFormEdit == 1"
                                                            class="mdb-select md-form" v-model="r_t_id">
                                                            <option value="" disabled selected>انتخاب کنید</option>
                                                            <option v-for="row in r_t" :value="row.id">
                                                                @{{row.attr}}
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div style="float: right" class="col-md-4">
                                                    <div class="form-group">

                                                        <!--                                                        <label class="">کد مرکز خدمات : </label>-->
                                                        <input
                                                            v-model="k_m_kh"
                                                            @change="attr_value_select(79)"
                                                            placeholder="کد مرکز خدمات"
                                                            type="text"
                                                            :disabled="isFormEdit == 1"
                                                            name="age"
                                                            class="form-control my-form-control" style="width:180px">
                                                    </div>
                                                </div>
                                                <div style="float: right" class="col-md-4">
                                                    <div class="form-group">

                                                        <!--                                                        <label class="">کد مرکز مدیریت : </label>-->
                                                        <input
                                                            style="width: 209px"
                                                            v-model="k_m_m"
                                                            @change="attr_value_select(80)"
                                                            placeholder="کد مرکز مدیریت"
                                                            type="text"
                                                            :disabled="isFormEdit == 1"
                                                            name="age"
                                                            class="form-control my-form-control" style="width:180px">
                                                    </div>
                                                </div>
                                                <div style="float: right" class="col-md-4">
                                                    <div class="form-group">

                                                        <!--                                                        <label class="">نام حوزه : </label>-->
                                                        <input
                                                            style="width: 280px"
                                                            v-model="n_h"
                                                            @change="attr_value_select(81)"
                                                            type="text"
                                                            placeholder="نام حوزه"
                                                            :disabled="isFormEdit == 1"
                                                            name="age"
                                                            class="form-control my-form-control" style="width:180px">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div v-if="stat_show_academy==4"></div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
                <div v-if="formChange==3" class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <!--                            <h2>مثال فرم پیشرفته با اعتبار سنجی</h2>-->
                            <ul class="header-dropdown dropdown">

                                <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
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
                            <button @click="changeForm(3)" class="next_form">ذخیره</button>
                            <button @click="editForm()" class="next_form">ویرایش فرم</button>
                            <button @click="changeFormToBack(2)" class="next_form">قبلی</button>
                            <form id="wizard_with_validation" method="POST">
                                {{-- <h3>وضعیت تحصیلی</h3> --}}
                                <fieldset>
                                    <div class="row clearfix">

                                        <div class="col-md-12">

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
                                        </div>


                                        <div style="width: 100%" >


                                            <div style="width: 100%">

                                                <div class="col-md-12 ">
                                                    <h3> تحصیلات دانشگاهی ( آخرین مقطع تحصیلی)</h3>
                                                    <div class="form-group">

                                                        <!--                                                        <div v-for="row in t_d"
                                                                                                                     class="fancy-checkbox my-fancy-checkbox">
                                                                                                                    <label class="label-account"><input
                                                                                                                            @change="change_selected(2,row.id)"
                                                                                                                            :disabled="isFormEdit == 1"
                                                                                                                            v-model="t_d_selected[row.id] "
                                                                                                                            class="input-account"
                                                                                                                            type="checkbox"
                                                                                                                        ><span>@{{row.attr}}</span></label>
                                                                                                                </div>-->

                                                        <label class="">شغل : </label>
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

                                                <div style="float: right" class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="">حوزه خدمت : </label>
                                                        <select
                                                            @change ="test()"
                                                            :disabled="isFormEdit == 1"
                                                            class="mdb-select md-form" v-model="h_kh_id">
                                                            <option value="" disabled selected>انتخاب کنید</option>
                                                            <option v-for="row in h_kh" :value="row.id">@{{row.attr}}
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div style="float: right" class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="">زیر مجوعه : </label>
                                                        <select

                                                            :disabled="isFormEdit == 1"
                                                            class="mdb-select md-form" v-model="h_kh_sub_id">
                                                            <option value="" disabled selected>انتخاب کنید</option>
                                                            <option v-for="row in h_kh_sub" :value="row.id">
                                                                @{{row.attr}}
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div style="float: right" class="col-md-12">
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
                                                                class="form-control my-form-control" style="width:180px">
                                                        </div>
                                                </div>

                                            </div>
                      <div style="width: 100%"
                                                >
                                                <div class="clearfix"></div>
                                                <div>
                                                    <h3>مهارت ها</h3>
                                                    <div class="form-group">


                                                        <label class="">علمی و پژوهشی : </label>
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
                                                        <label class="">رسانه ای : </label>
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
                                                        <label class="">مشاوره ای : </label>
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
            </div>

        </div>
    </div>

@endsection
