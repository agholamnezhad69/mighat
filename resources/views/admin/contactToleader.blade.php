@extends('admin.layouts.adminLayout')

@section('content')



    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">

                <div class="col-md-6 col-sm-12 text-right">
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <!--                    <span @click="deleteNews" style="float: left" class="delete_cat">حذف خبر</span>-->
                </div>
            </div>
        </div>

        <div v-if="ediFormLeader==0" class="container-fluid">

            <div style="text-align: right;margin-bottom: 30px">
                <button @click="funcShowLeaderMess(2)" class="next_form">چاپ</button>
                <button @click="deleteleaderMessages" class="delete_cat">حذف</button>
            </div>
            <div class="row clearfix">

                <div class="col-lg-12">
                    <div class="card">

                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover table-custom spacing8">
                                    <thead>
                                    <tr>
                                        <th>ردیف</th>
                                        <th>نام</th>
                                        <th>تلفن</th>
                                        <th>نمایش پیام</th>
                                        <th>وضعیت تکرار</th>
                                        <th>چاپ</th>
                                        <th>حذف</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>ردیف</th>
                                        <th>نام</th>
                                        <th>تلفن</th>
                                        <th>نمایش خبر</th>
                                        <th>وضعیت تکرار</th>
                                        <th>چاپ</th>
                                        <th>حذف</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>

                                    <tr v-for="(row,index) in all_leader_message.data">
                                        <td>@{{index+1 }}</td>
                                        <td>@{{ row . name }}</td>
                                        <td>@{{ row . tel }}</td>
                                        <td>
                                            <i class="fa fa-eye"
                                               @click="funcShowLeaderMess(1,row.id,row.name,row.tel,row.descc,row.is_repeated,row.email)"></i>
                                        </td>

                                        <td><i
                                                style="color: #ff3717;
                                                  font-size: 25px;"
                                                class="fa fa-check"
                                                v-if="row.is_repeated==1">
                                            </i>
                                        </td>
                                        <td>
                                            <div class="fancy-checkbox">
                                                <label>
                                                    <input
                                                        v-model="row.row_selected"
                                                        @click="news_for_print_func(index,row.id,row.descc)"
                                                        type="checkbox">
                                                    <span>
                                                    </span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="fancy-checkbox">
                                                <label>
                                                    <input
                                                        v-model="leader_mess_ids_delete[row.id]"
                                                        type="checkbox"><span></span></label>
                                            </div>
                                        </td>


                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <pagination
                            style="margin-top: 10px;"
                            :data="all_leader_message"
                            @pagination-change-page="getLeader"
                        >

                        </pagination>

                    </div>
                </div>


            </div>
        </div>

        <div v-if="ediFormLeader==1" class="container-fluid">
            <div style="text-align: right;margin-bottom: 30px">
                <button @click="funcShowLeaderMessCancel()" class="next_form">انصراف</button>
                <button @click="LeaderMess_is_repeated" class="next_form">جواب</button>
                <button @click="emailToUser" class="next_form">ایمیل</button>
            </div>


            <div class="row clearfix">


                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="body wizard_validation">

                            <div class="clearfix"></div>
                            <div id="myform1">
                                {{-- <h3 style="text-align: center">اطلاعات فردی</h3>--}}
                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                <fieldset>
                                    <div class="row clearfix">

                                        <div class="col-5">
                                            <div class="form-group">
                                                <input
                                                    disabled
                                                    style="margin-bottom: 20px"
                                                    type="text" class="form-control" placeholder="نام و نام خانوادگی"
                                                    v-model="leaderTitle">
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="form-group">
                                                <input
                                                    disabled
                                                    style="margin-bottom: 20px"
                                                    type="text" class="form-control" placeholder="تلفن"
                                                    v-model="leaderTel">
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="fancy-checkbox">
                                                <label style="vertical-align: -13px;">
                                                    <span style="margin-left: 16px">سوالات تکراری</span>
                                                    <input
                                                        v-model="is_repeated"
                                                        type="checkbox">
                                                    <span>

                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea rows="10" cols="50"
                                                          disabled
                                                          style="line-height: 43px"
                                                          type="tex" class="form-control" placeholder="پیغام"
                                                          v-model="leaderDesc">
                                                    </textarea>
                                            </div>
                                            <div class="form-group">
                                                <textarea rows="10" cols="50"
                                                          style="line-height: 43px"
                                                          type="tex" class="form-control" placeholder="جواب"
                                                          v-model="leaderDesc_answer">
                                                    </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div v-if="ediFormLeader==2" class="container-fluid">
            <div style="text-align: right;margin-bottom: 30px">
                <button @click="funcShowLeaderMessCancel()" class="next_form">انصراف</button>
                <button @click="exportToPDFnews" class="next_form">چاپ</button>
            </div>

            <div class="row clearfix">


                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="body wizard_validation" style="background-color: #fff!important;">


                            <div class="row clearfix" ref="document">
                                <div class="answers" v-for="(row,index) in news_for_print">
                                    <span>@{{ index+1 }}  </span> <span> : </span>
                                    @{{ row.question }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>


    </div>


@endsection















