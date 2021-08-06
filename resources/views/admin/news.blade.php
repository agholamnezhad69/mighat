@extends('admin.layouts.adminLayout')

@section('content')


    <div id="main-content">


        <div v-if="ediFormEmployment==0" class="container-fluid">


            <div class="row clearfix">

                <div class="col-lg-12">
                    <div class="card">

                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover table-custom spacing8">
                                    <thead>
                                    <tr>
                                        <th>ردیف</th>
                                        <th>عنوان خبر</th>
                                        <th>ویرایش</th>
                                        <th>حذف خبر</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>ردیف</th>
                                        <th>عنوان خبر</th>
                                        <th>ویرایش</th>
                                        <th>حذف خبر</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>

                                    <tr v-for="(row,index) in all_news.data">
                                        <td>@{{ index+1 }}</td>
                                        <td>@{{ row . title_news }}</td>
                                        <td>
                                            <i @click="funcEdiFormNews(row.id,row.title_news,row.desc_news,row.img_news)"
                                               class="fa fa-edit"></i>
                                        </td>
                                        <td>
                                            <i @click="deleteNews(row.id)"
                                               class="fa fa-trash"
                                               style="color: red;font-size: 25px;cursor: pointer"></i>
                                        </td>


                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <pagination
                            :data="all_news"
                            @pagination-change-page="getResults"
                        >

                        </pagination>

                    </div>
                </div>


            </div>
        </div>

        <div v-if="ediFormEmployment==1" class="container-fluid">


            <div class="row clearfix">


                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="body wizard_validation">

                            <div class="clearfix"></div>
                            <div id="myform1">
                                {{-- <h3 style="text-align: center">اطلاعات فردی</h3>--}}
                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                <fieldset>
                                    <div style="text-align: center;margin-bottom: 30px">

                                        <button @click="addNewsToServer()" class="next_form">ویرایش
                                        </button>
                                        <button @click="funcEdiFormEmploymentCansel()" class="next_form">انصراف</button>
                                    </div>
                                    <div class="row clearfix">

                                        <div class="col-12">
                                            <div class="form-group">
                                                <input
                                                    style="margin-bottom: 20px"
                                                    type="text"
                                                    class="form-control"
                                                    placeholder="عنوان اخبار"
                                                    v-model="title_news">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">

<!--                                                <ckeditor
                                                    v-model="desc_news"
                                                    :config="editorConfig">
                                                </ckeditor>-->

                                                <editor-news-edit
                                                    :prop_desc_news="desc_news"
                                                    :prop_news_id="id_news"
                                                    ref="ref_editor_news_edit">

                                                </editor-news-edit>


                                            </div>


                                        </div>
                                        <div class="col-md-12 col-lg-12"
                                             style="background-color: #fff!important;max-height: 200px!important;"
                                        >

                                            <div class="form-group form-group2">
                                                <example-news-edit
                                                    :news_file_list="news_file_list"
                                                    :id_news="id_news"
                                                    :img_news="img_news"
                                                    @get_news_img="get_news_img"
                                                    @add_news="news_edit">

                                                </example-news-edit>
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

    </div>


@endsection















