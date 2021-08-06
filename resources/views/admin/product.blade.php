@extends('admin.layouts.adminLayout')

@section('content')


    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1 v-if="ediFormProduct==0" style="margin-bottom: 20px">مشاهده محصولات</h1>
                    <h1 v-if="ediFormProduct==1" style="margin-bottom: 20px">ویرایش محصول</h1>
                    <button v-if="ediFormProduct==1" @click="editProductSelectCancel()" class="next_form">انصراف
                    </button>
                    <button v-if="ediFormProduct==1" @click="addProdutToServer()" class="next_form">ویرایش
                    </button>
                    <button v-if="ediFormProductLesson==1" @click="addProductLessons()" class="next_form">
                        افزودن درس
                    </button>


                    <button v-if="editProductLesson==1" @click="add_lessonToProduct()"

                            class="next_form_green">افزودن
                    </button>
                    <button v-if=" editProductLesson==2" @click="add_lessonToProduct()"
                            class="next_form_green">ویرایش
                    </button>


                    <button v-if="ediFormProductLesson==1" @click="editProductLessonSelectCancel()" class="next_form">
                        انصراف
                    </button>
                    <button v-if="editProductLesson==1" @click="editProductLessonsCancel()" class="next_form_green">
                        انصراف
                    </button>
                    <button v-if="editProductLesson==2" @click="editProductLessonsCancel()" class="next_form_green">
                        انصراف
                    </button>


                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    {{--  <div class="inlineblock vivify swoopInTop delay-900 mr-4">بازدیدکنندگان <span id="mini-bar-chart1"
                                                                                                    class="mini-bar-chart"></span>
                      </div>
                      <div class="inlineblock vivify swoopInTop delay-950 mr-4">بازدیدها <span id="mini-bar-chart2"
                                                                                               class="mini-bar-chart"></span>
                      </div>
                      <div class="inlineblock vivify swoopInTop delay-1000">چت ها <span id="mini-bar-chart3"
                                                                                        class="mini-bar-chart"></span>
                      </div>
                      <br>
                      <span @click="deleteCats" class="delete_cat">حذف دسته</span>--}}
                </div>
            </div>
        </div>

        <div class="container-fluid">

            <div class="row clearfix">

                {{--**************************************************start product --}}
                <div v-if="ediFormProduct==0" class="col-lg-12">
                    <div class="card">

                        <div class="body">

                            <div class="table-responsive">
                                <table class="table table-hover table-custom spacing8">
                                    <thead>
                                    <tr>
                                        <th>ردیف</th>
                                        <th>عنوان محصول</th>
                                        <th>قیمت</th>
                                        <th>نوع کلاس</th>
                                        <th>لینک اسکای روم</th>
                                        <th>دسته</th>
                                        <th>ویرایش</th>
                                        <th>افزودن درس</th>
                                        <th>حذف</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>ردیف</th>
                                        <th>عنوان محصول</th>
                                        <th>قیمت</th>
                                        <th>نوع کلاس</th>
                                        <th>لینک اسکای روم</th>
                                        <th>دسته</th>
                                        <th>ویرایش</th>
                                        <th>افزودن درس</th>
                                        <th>حذف</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    <tr v-for="(row,index) in all_products.data">
                                        <td>@{{ index+1 }}</td>
                                        <td>@{{ row . title }}</td>
                                        <td>@{{ row . price }}</td>
                                        <td v-if="row.is_online==0">آفلاین</td>
                                        <td v-if="row.is_online==1">آنلاین</td>
                                        <td>@{{ row . skyromm }}</td>
                                        <td>@{{ row . cat_title }}</td>
                                        <td>
                                            {{--  <div class="fancy-checkbox">
                                                  <label><input
                                                          @click="editProductSelect(row.id,row.title,row.descc,
                                                          row.price,row.skyromm,row.tedad_afrad_course,row.img,row.cat_id,
                                                          row.is_online)"
                                                          type="checkbox"><span></span></label>
                                              </div>--}}

                                            <i @click="editProductSelect(row.id,row.title,row.descc,
                                                        row.price,row.skyromm,row.tedad_afrad_course,row.img,row.cat_id,
                                                        row.is_online)"
                                               class="fa fa-edit"></i>
                                        </td>
                                        {{--       <td v-if="row.is_online==0"><a target="_blank"
                                                                              :href="'/admin/product_lesson/'+row.id">مشاهده
                                                       دروس</a></td>--}}
                                        {{-- <td v-if="row.is_online==0">مشاهده دروس</td>--}}
                                        <td v-if="row.is_online==0">
                                            <i @click="editProductLessonSelect(row.id)" class="fa fa-book"></i>
                                        </td>

                                        <td v-if="row.is_online==1">بدون دروس</td>
                                        <td>
                                            <i @click="deleteProdcut(row.id)"
                                               class="fa fa-trash"
                                               style="color: red;font-size: 25px;cursor: pointer"></i>
                                        </td>


                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                        <pagination
                            :data="all_products"
                            @pagination-change-page="get_products"
                        >

                        </pagination>
                        <loading :active.sync="isLoading" color="#fff" background-color="#000" loader="dots"></loading>

                    </div>
                </div>


                <div v-if="ediFormProduct==1" class="col-lg-3 col-md-3">
                    <div class="form-group">
                        <label class="">دسته : </label>
                        <select
                            class="mdb-select md-form" v-model="cat_select_id">
                            <option value="0" selected>انتخاب کنید</option>
                            <option v-for="row in all_cat_for_selector" :value="row.id">@{{row.title}}</option>
                        </select>
                    </div>
                </div>
                <div v-if="ediFormProduct==1" class="col-lg-3 col-md-3">
                    <div class="form-group">
                        <label class="">نوع کلاس : </label>
                        <select
                            class="mdb-select md-form" v-model="type_course">
                            <option value="0" selected>آفلاین</option>
                            <option value="1" selected>آنلاین</option>
                        </select>
                    </div>
                </div>
                <div v-if="ediFormProduct==1" class="col-lg-3 col-md-3">
                    <div class="form-group">
                        <input
                            style="width: 325px!important;margin-bottom: 10px"
                            type="text" class="form-control" placeholder="عنوان دوره"
                            v-model="title_course">
                    </div>
                </div>
                <div v-if="ediFormProduct==1" class="col-lg-3 col-md-3">
                    <div class="form-group">
                        <input
                            style="width: 325px!important;margin-bottom: 10px"
                            type="text" class="form-control" placeholder="قیمت"
                            v-model="price_course">
                    </div>
                </div>
                <div v-if="ediFormProduct==1" class="col-lg-12 col-md-12">
                    <div class="form-group">
                        <!--                        <ckeditor
                                                    :disabled="isEditEmploy == 0"
                                                    v-model="desc_course"
                                                    :config="editorConfig">
                                                </ckeditor>-->
                        <editor-product-edit
                            :prop_product_desc="desc_course"
                            :prop_product_id="edit_product_id"
                            ref="ref_editor_product_edit">

                        </editor-product-edit>

                    </div>
                </div>
                <div v-if="ediFormProduct==1" class="col-md-12 col-lg-12">
                    <div class="form-group form-group2" style="background: #fff;height: 200px">
                        <!--                        <example-component3 @add_product="add_img_product"></example-component3>-->
                        <example-component3-edit
                            :id_product="edit_product_id"
                            :product_file_list="product_file_list"
                            @get_product_img="get_product_img"
                            @add_product="add_img_product">

                        </example-component3-edit>

                    </div>
                </div>
                <!--                <div v-if="ediFormProduct==1" class="col-md-3 col-lg-3">
                                    <div class="form-group form-group3">
                                        <img width="300px" height="150px" :src="'/news/'+img_course" alt="">
                                    </div>
                                </div>-->
                <div v-if="ediFormProduct==1 && type_course==1" class="col-lg-8 col-md-8">
                    <div class="form-group">
                        <input
                            style="margin-bottom: 10px"
                            type="text" class="form-control" placeholder="لینک اسکای روم"
                            v-model="skyromm_course">
                    </div>
                </div>
                <div v-if="ediFormProduct==1 && type_course==1" class="col-lg-4 col-md-4">
                    <div class="form-group ">
                        <input
                            style="margin-bottom: 10px"
                            type="number" class="form-control" placeholder="تعداد"
                            v-model="tedad_afrad_course">
                    </div>
                </div>

                {{--**************************************************end product --}}
                {{--**************************************************start product lesson --}}

                <div v-if="ediFormProductLesson==1" class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-hover table-custom spacing8">
                            <thead>
                            <tr>
                                <th>ردیف</th>
                                <th>عنوان درس</th>
                                <th>ویرایش</th>
                                <th>حذف</th>


                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>ردیف</th>
                                <th>عنوان درس</th>
                                <th>ویرایش</th>
                                <th>حذف</th>

                            </tr>
                            </tfoot>
                            <tbody>
                            <tr v-for="(row,index) in all_product_lessons">
                                <td>@{{ index+1}}</td>
                                <td>@{{ row . title }}</td>
                                <td>
                                    <i @click="editProductLessons(row.id,row.title,row.file)" class="fa fa-edit"></i>
                                </td>
                                <td>
                                    <i @click="deleteProdcut_lesson(row.id)"
                                       class="fa fa-trash"
                                       style="color: red;font-size: 25px;cursor: pointer"></i>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                {{--**************************************start product  add--}}

                <div v-if="editProductLesson==1" class="col-md-12 col-lg-12" style="text-align: center">
                    <h4 style="    margin: 20px 19px;">افزود درس</h4>
                </div>
                <div v-if="editProductLesson==1" class="col-lg-12 col-md-12" style="text-align: center">
                    <div class="form-group">
                        <input

                            id="title_lesson"
                            style="width: 325px!important;margin-bottom: 10px;display: inline-block"
                            type="text" class="form-control" placeholder="عنوان دوره"
                            v-model="film_title">
                    </div>
                </div>
                <div v-if="editProductLesson==1" class="col-md-12 col-lg-12" style="text-align: center">
                    <div class="col-md-6 col-lg-6" style="display: inline-block">
                        <div class="form-group form-group2">
                            <example-component5 @add_l_film="add_lessonFilm"></example-component5>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6" style="display: inline-block">
                        <div v-if="film_course">
                            <div class="form-group form-group2">
                                <div id="player"></div>
                            </div>
                        </div>
                    </div>
                </div>


                {{--**************************************************end product add --}}

                {{--**************************************start product  edit--}}

                <div v-if="editProductLesson==2" class="col-md-12 col-lg-12" style="text-align: center">
                    <h4 style="    margin: 20px 19px;"> ویرایش درس</h4>
                </div>
                <div v-if="editProductLesson==2" class="col-lg-12 col-md-12" style="text-align: center">
                    <div class="form-group">
                        <input

                            id="title_lesson"
                            style="width: 325px!important;margin-bottom: 10px;display: inline-block"
                            type="text" class="form-control" placeholder="عنوان دوره"
                            v-model="film_title">
                    </div>
                </div>
                <div v-if="editProductLesson==2" class="col-md-12 col-lg-12" style="text-align: center">
                    <div class="col-md-6 col-lg-6" style="display: inline-block">
                        <div class="form-group form-group2">


                            <example-component5-edit
                                :product_lesson_file_list="ProductLesson_file_list"
                                :id_product_lesson="lesson_id"
                                @get_product_lesson_video="get_product_lesson_video"
                                @add_l_film="add_lessonFilm_edit">

                            </example-component5-edit>

                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6" style="display: inline-block">
                        <div v-if="film_course">
                            <div class="form-group form-group2">
                                <div id="player"></div>
                            </div>
                        </div>
                    </div>
                </div>


                {{--**************************************************end product edit --}}


            </div>


        </div>

    </div>


    </div>


@endsection
