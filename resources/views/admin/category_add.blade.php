@extends('admin.layouts.adminLayout')

@section('content')


    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1>دسته بندی ها</h1>
                    <span @click="get_cat_childerns(0)" class="sub_cat">دسته اصلی</span>
                    <span  v-for="row in all_parent" @click="get_cat_childerns(row.id)"  class="sub_cat">@{{ row.title }}  </span>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <div class="inlineblock vivify swoopInTop delay-900 mr-4">بازدیدکنندگان <span id="mini-bar-chart1"
                                                                                                  class="mini-bar-chart"></span>
                    </div>
                    <div class="inlineblock vivify swoopInTop delay-950 mr-4">بازدیدها <span id="mini-bar-chart2"
                                                                                             class="mini-bar-chart"></span>
                    </div>
                    <div class="inlineblock vivify swoopInTop delay-1000">چت ها <span id="mini-bar-chart3"
                                                                                      class="mini-bar-chart"></span>
                    </div>
                    <br>
                    <span @click="deleteCats" class="delete_cat">اجرای عملیات</span>
                </div>
            </div>
        </div>

        <div class="container-fluid">

            <div class="row clearfix">


                <div class="col-lg-12 col-md-12">
                    <div class="form-group">
                        <input
                            style="width: 325px!important;margin-bottom: 10px"
                            type="text" class="form-control" placeholder="تلفن منزل "
                            v-model="telhome">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="form-group">
                        <label class="">عنوان دسته : </label>
                        <select
                            class="mdb-select md-form" v-model="cat_select_id">
                            <option value="0"  selected>دسته مادر</option>
                            <option v-for="row in all_cat" :value="row.id">@{{row.title}}</option>
                        </select>
                    </div>
                </div>

            </div>

        </div>
    </div>


@endsection
