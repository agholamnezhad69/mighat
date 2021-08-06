@extends('admin.layouts.adminLayout')

@section('content')


    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">

                <div class="col-md-6 col-sm-12 text-right">
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <!--                    <span jjij @click="deleteNews" style="float: left" class="delete_cat">حذف خبر</span>-->
                </div>
            </div>
        </div>


        <div class="container-fluid">


            <div class="row clearfix">


                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="body wizard_validation">

                            <div class="clearfix"></div>
                            <div id="myform1">
                                {{-- <h3 style="text-align: center">اطلاعات فردی</h3>--}}
                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                <fieldset>
                                    <div style="text-align: right;margin-bottom: 30px">

                                        <button @click="addNewsToServer()" class="next_form">افزودن
                                        </button>
                                    </div>
                                    <div class="row clearfix">

                                        <div class="col-12">
                                            <div class="form-group">
                                                <input
                                                    style="margin-bottom: 20px"
                                                    type="text" class="form-control" placeholder="عنوان اخبار"
                                                    v-model="title_news">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">

                                                <editor-news-add
                                                    ref="ref_editor_news_add">
                                                </editor-news-add>

                                            </div>


                                        </div>
                                        <div class="col-md-12"
                                             style="background-color: #fff!important;max-height: 200px!important;"
                                        >
                                            <div class="form-group form-group2">
                                                <example-news
                                                    ref="myVueDropzone"
                                                    @add_news="news">
                                                </example-news>
                                            </div>
                                            <loading :active.sync="isLoading" color="#fff" background-color="#000"
                                                     loader="dots"></loading>

                                        </div>
                                        <!--                                        <div class="col-md-6 col-lg-6"
                                                                                     style="background-color: #fff!important;max-height: 200px!important;">
                                                                                    <div class="form-group form-group2">
                                                                                        <img style="width: 100%;max-height: 303px;" :src="'/news/'+img_news"
                                                                                             alt="">
                                                                                    </div>
                                                                                </div>-->
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>


@endsection















