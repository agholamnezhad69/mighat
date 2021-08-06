@extends('view.layouts.adminLayout')

@section('content')
    <style>
        .gambo-Breadcrumb .breadcrumb .breadcrumb-item a {
            font-family: iran !important;
        }

        .gambo-Breadcrumb .breadcrumb .breadcrumb-item.active {
            color: #e70762;
            font-family: iran !important;
            font-size: 20px;
            font-weight: 900;

        }

        .breadcrumb-item + .breadcrumb-item::before {

            padding: 0px 8px;
        }
    </style>

    <div class="wrapper" id="app">
        <div class="gambo-Breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">خانه</a></li>
                                <li class="breadcrumb-item active" aria-current="page">ارتباط با نماینده رهبری</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="all-product-grid">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-6">
                        <!--					<div class="contact-title">
                                                <h2>Submit customer service request</h2>
                                                <p>If you have a question about our service or have an issue to report, please send a request and we will get back to you as soon as possible.</p>
                                            </div>-->
                        <div class="contact-form">

                            <div class="form-group mt-1">
                                <label class="control-label">نام و نام خانوادگی</label>
                                <div class="ui search focus">
                                    <div class="ui left icon input swdh11 swdh19">
                                        <input
                                            :class="[leaderIsEmpty.name == true ? 'isEmpty':'',

                                   'prompt','srch_explore'
                                     ]"
                                            v-model="leaderTitle" type="text"
                                            name="sendername" id="sendername" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-1">
                                <label class="control-label">شماره تماس</label>
                                <div class="ui search focus">
                                    <div class="ui left icon input swdh11 swdh19">
                                        <input
                                            :class="[
                                            leaderIsEmpty.tel == true ? 'isEmpty':'',
                                                    ]"
                                            v-model="leaderTel" class="prompt srch_explore" type="text"
                                            name="emailaddress" id="emailaddress" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-1">
                                <label class="control-label">ایمیل</label>
                                <div class="ui search focus">
                                    <div class="ui left icon input swdh11 swdh19">
                                        <input
                                            :class="[
                                            leaderIsEmpty.email == true ? 'isEmpty':'',
                                                    ]"
                                            v-model="leaderEmail"
                                            class="prompt srch_explore"
                                            type="text"
                                            name="emailaddress" id="emailaddress" placeholder="">
                                    </div>
                                </div>
                                <div class="alert alert-danger" v-if="is_leaderEmail_valid==false"
                                     style="margin-top: 5px">
                                    <strong>ایمیل شما صحیح نمی باشد</strong>
                                </div>
                            </div>
                            <div class="form-group mt-1">
                                <label class="control-label">انتخاب دسته</label>

                                <select
                                    style="font-family: iran!important;"
                                    :class="[
                                        leaderIsEmpty.cat ==true ? 'isEmpty':'',
                                          'form-control'
                                             ]"
                                    v-model="leader_cat_id">
                                    <option
                                        style="padding: 20px 0; margin: 40px;background-color: #eee;font-family: iran;font-size: 18px"
                                        v-for="row in leader_cats" :value="row.id_option">
                                        @{{row.valuee}}
                                    </option>
                                </select>
                            </div>

                            <div class="form-group mt-1">
                                <div class="field">
                                    <label class="control-label">توضیحات</label>
                                    <textarea
                                        :class="[
                                   leaderIsEmpty.desc == true ? 'isEmpty':'',


                                     ]"
                                        v-model="leaderDesc" rows="2" class="form-control"
                                        placeholder=""></textarea>
                                </div>
                            </div>
                            <button @click="addCommentToLeader" style="float: right;font-family: iransans!important;"
                                    class="next-btn16 hover-btn mt-3" type="submit" data-btntext-sending="Sending...">

                                <i
                                    :class="[
                                   leaderSend == true ? 'fa-spinner':'',
                                    'fas',
                                    'fa-pulse'
                                     ]"
                                ></i>
                                ارسال
                            </button>
                            <br>

                            <div class="clearfix"></div>
                            <div v-if="leaderSuccessMess" class="alert alert-success"
                                 style="margin-top: 5px;font-family: IRANSans ;text-align: right">
                                <strong>با موفقیت ارسال شد</strong>
                            </div>
                            <div v-if="leaderSuccessMessFail" class="alert alert-danger">
                                <strong>خطا در ارسال</strong>
                            </div>


                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="panel-group accordion " id="accordion0">
                            <div class="panel panel-default" v-for="row in repeated_mess">
                                <div class="panel-heading" id="@{{ row.id }}">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" :data-target="'#h'+row.id" href="#"
                                           aria-expanded="false" aria-controls="collapseOne">
                                            <i class="uil uil-location-point chck_icon"></i>
                                            @{{row.descc}}
                                        </a>
                                    </div>
                                </div>

                                <div :id="'h'+row.id" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="@{{ row.id }}" data-parent="#accordion0" style="">
                                    <div class="panel-body">
                                        <div style="color: red">جواب :</div>
                                        @{{row.answer}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Body End -->
@endsection
