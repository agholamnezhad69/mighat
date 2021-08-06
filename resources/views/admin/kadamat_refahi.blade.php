@extends('admin.layouts.adminLayout')

@section('content')


    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1 v-if="editkadamt===0">خدمات رفاهی</h1>
                    <div v-if="editkadamt===1" class="col-md-12 col-lg-12" style="margin-bottom: 35px">
                        <h4 style="font-size: 18px">ویرایش خدمات رفاهی</h4>
                    </div>
                    {{--  <span @click="get_cat_childerns(0)" class="sub_cat">دسته اصلی</span>
                      <span v-for="row in all_parent" @click="get_cat_childerns(row.id)"
                            class="sub_cat">@{{ row.title }}  </span>--}}
                    <button v-if="editkadamt===1" @click="editkadamatFuncCancel()" class="next_form">انصراف

                    </button>
                    <button v-if="editkadamt===1" @click="saveKadamat" class="next_form">ویرایش

                    </button>
                </div>
                <div class="col-md-6 col-sm-12 text-right">

                </div>
            </div>
        </div>

        <div class="container-fluid">

            <div class="row clearfix">

                <div v-if="editkadamt===0" class="col-lg-12">
                    <div class="card">

                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover table-custom spacing8">
                                    <thead>
                                    <tr>
                                        <th>ردیف</th>
                                        <th>عنوان</th>
                                        <th>قیمت</th>
                                        <th>اطلاعات</th>
                                        <th>ویرایش</th>
                                        <th>حذف</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>ردیف</th>
                                        <th>عنوان</th>
                                        <th>قیمت</th>
                                        <th>اطلاعات</th>
                                        <th>ویرایش</th>
                                        <th>حذف</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>

                                    <tr v-for="(row,index) in all_kadamat_refahi.data">
                                        <td>@{{ index+1 }}</td>
                                        <td>@{{ row . title }}</td>
                                        <td>@{{ row . price }}</td>
                                        <td>@{{ row . information }}</td>
                                        <td>
                                            <i @click="editkadamatFunc(row.id,row.title,row.descc,row.price,
                                            row.information,row.img,row.kdadmat_from_date,row.kdadmat_to_date)"
                                               class="fa fa-edit"></i></td>
                                        <td>
                                            <i @click="deleteKadamat(row.id)"
                                               class="fa fa-trash"
                                               style="color: red;font-size: 25px;cursor: pointer"></i>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                        <pagination
                            :data="all_kadamat_refahi"
                            @pagination-change-page="get_kadamat"
                        >

                        </pagination>
                        <loading :active.sync="isLoading" color="#fff" background-color="#000" loader="dots"></loading>
                    </div>
                </div>


                <div v-if="editkadamt===1" class="col-lg-4 col-md-4">
                    <div class="form-group">
                        <input
                            style="width: 325px!important;margin-bottom: 10px"
                            type="text" class="form-control" placeholder="عنوان دوره"
                            v-model="title_kadamat">
                    </div>
                </div>
                <div v-if="editkadamt===1" class="col-lg-4 col-md-4">
                    <div class="form-group">
                        <input
                            style="width: 325px!important;margin-bottom: 10px"
                            type="number" class="form-control" placeholder="قیمت"
                            v-model="price_kadamat">
                    </div>
                </div>
                <div v-if="editkadamt===1" class="col-lg-4 col-md-4">
                    <div class="form-group">
                        <input
                            style="width: 325px!important;margin-bottom: 10px"
                            type="text" class="form-control" placeholder="اطلاعات"
                            v-model="info_kadamat">
                    </div>
                </div>
                <div v-if="editkadamt===1" class="col-lg-6 col-md-6">
                    <div class="container">
                        <label style="padding: 5px">از تاریخ</label>
                        <date-picker v-model="kdadmat_from_date"/>
                    </div>
                </div>
                <div v-if="editkadamt===1" class="col-lg-6 col-md-6">
                    <div class="container">
                        <label style="padding: 5px"> تا تاریخ</label>
                        <div class="form-group">
                            <date-picker v-model="kdadmat_to_date"/>
                        </div>
                    </div>
                </div>


                <div v-if="editkadamt===1" class="col-lg-12 col-md-12 dropzone-box">
                    <div class="container">
                        <!--                        <div class="form-group">-->
                        <!--                        <ckeditor
                                                    :disabled="isEditEmploy == 0"
                                                    v-model="desc_kadamat"
                                                    :config="editorConfig">
                                                </ckeditor>-->

                        <editor-khadamat-edit
                            :prop_desc_khadamat="desc_kadamat"
                            :prop_khadamat_id="id_kadamat"
                            ref="ref_editor_khadamat_edit">

                        </editor-khadamat-edit>


                        <!--                        </div>-->
                    </div>
                </div>

                <!--                <div v-if="editkadamt===1" class="col-md-12 col-lg-12 dropzone-box">
                                    <example-component6 ref="myVueDropzone6" @add_kadamat="funckadamatAdd4"></example-component6>

                                </div>-->
                <div v-if="editkadamt===1" class="col-md-8 col-lg-8 dropzone-box">
                    <example-component6-edit
                        :id_kadamat="id_kadamat"
                        @add_kadamat="funckadamatAdd4">
                    </example-component6-edit>
                    <!--                    <example-news-edit
                                            :news_file_list="news_file_list"
                                            :id_news="id_news"
                                            :img_news="img_news"
                                            @get_news_img="get_news_img"
                                            @add_news="news_edit">
                                        </example-news-edit>-->

                </div>
                <div v-if="editkadamt===1" class="col-lg-4 col-md-4 dropzone-box">
                    <div class="container">
                        <example-kadamt-edit
                            :kadamat_file_list="kadamat_file_list"
                            :id_kadamat="id_kadamat"
                            @get_kadamat_shakes_img="get_kadamat_shakes_img"
                            @add_kadamat="kadamat_edit">
                        </example-kadamt-edit>

                    </div>
                </div>

                <div v-if="editkadamt===1" class="col-md-12 col-lg-12 dropzone-box">
                    <div class="container">
                        <div class="img-box">
                            <div v-for="row in kadamatImg" class="img-box-item">
                                <img width="150px" height="120px" :src="'/uploads/khadamat/'+id_kadamat+'/'+row"
                                     alt="User Profile Picture"
                                     class="user-photo">
                                <h4 @click="funckadamatAdd4RemovePic_edit(row)">حذف عکس</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <loading :active.sync="isLoading" color="#fff" background-color="#000" loader="dots"></loading>


            </div>


            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>


        </div>

    </div>


    </div>



@endsection
