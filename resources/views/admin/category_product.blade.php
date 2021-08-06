@extends('admin.layouts.adminLayout')

@section('content')


    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1 v-if="ediFormCat==0">دسته بندی ها</h1>
                    <span v-if="ediFormCat==0" @click="get_cat_childerns(0)" class="sub_cat">دسته اصلی</span>
                    <span v-if="ediFormCat==0" v-for="row in all_parent" @click="get_cat_childerns(row.id)"
                          class="sub_cat">@{{ row.title }}  </span>
                    <button v-if="ediFormCat==1" @click="editCatSelectCancel()" class="next_form">انصراف</button>
                    <span v-if="ediFormCat==0"  @click="deleteCats" class="delete_cat">حذف دسته</span>


                </div>
<!--                <div v-if="ediFormCat==0" class="col-md-6 col-sm-12 text-right">
                    <span v-if="ediFormCat==0"  @click="deleteCats" class="delete_cat">حذف دسته</span>
                </div>-->
            </div>
        </div>

        <div class="container-fluid">

            <div class="row clearfix">

                <div v-if="ediFormCat==0" class="col-lg-12">
                    <div class="card">

                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover table-custom spacing8">
                                    <thead>
                                    <tr>
                                        <th>ردیف</th>
                                        <th>عنوان دسته</th>
                                        <th>مشاهده زیر دسته</th>
                                        <th>افزودن</th>
                                        <th>ویرایش</th>
                                        <th>حذف</th>

                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>ردیف</th>
                                        <th>عنوان دسته</th>
                                        <th>مشاهده زیر دسته</th>
                                        <th>افزودن</th>
                                        <th>ویرایش</th>
                                        <th>حذف</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>

                                    <tr v-for="(row,index) in all_cat">
                                        <td>@{{ index+1 }}</td>
                                        <td>@{{ row . title }}</td>
                                        <td><span @click="get_cat_childerns(row.id)" href=""
                                                  class="sub_cat">زیر دسته</span></td>
                                        <td>
                                            {{--  <div class="fancy-checkbox">
                                                  <label><input
                                                          v-model="cat_ids_add[row.id]"
                                                          @click="addCatSelect(row.id)"
                                                          type="checkbox"><span></span></label>
                                              </div>--}}
                                            <i @click="addCatSelect(row.id)"
                                               class="fa fa-plus"></i>
                                        </td>
                                        <td>
                                            {{--  <div class="fancy-checkbox">
                                                  <label><input
                                                          v-model="cat_ids_edit[row.id]"
                                                          @click="editCatSelect(row.id,row.title,row.parent)"
                                                          type="checkbox"><span></span></label>
                                              </div>--}}
                                            <i @click="editCatSelect(row.id,row.title,row.parent)"
                                               class="fa fa-edit"></i>

                                        </td>
                                        <td>
                                            <div class="fancy-checkbox">
                                                <label><input
                                                        v-if="row.id!=35"
                                                        v-model="cat_ids_delete[row.id]"
                                                        type="checkbox"><span></span></label>
                                            </div>
                                        </td>

                                    </tr>
                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>
                </div>


                <div v-if="ediFormCat==1" class="col-md-12 col-lg-12" style="margin-top: 20px">
                    <h4 v-if="isEditCat==0">افزودن دسته</h4>
                    <h4 v-if="isEditCat==1">ویرایش دسته </h4>
                </div>
                <div v-if="ediFormCat==1" class="col-lg-4 col-md-4">
                    <div class="form-group">
                        <input
                            style="width: 325px!important;margin-bottom: 10px"
                            type="text" class="form-control" placeholder="عنوان دسته "
                            v-model="cat_title_add">
                    </div>
                </div>
                <div v-if="ediFormCat==1" class="col-lg-4 col-md-4">
                    <div class="form-group">
                        <label class="">دسته والد : </label>
                        <select
                            class="mdb-select md-form" v-model="cat_select_id">
                            <option value="0" selected>دسته اصلی</option>
                            <option v-for="row in all_cat_for_selector" :value="row.id">@{{row.title}}</option>
                        </select>
                    </div>
                </div>
                <div v-if="ediFormCat==1" class="col-md-4 col-lg-4">
                    <span @click="addCatToServer" class="sub_cat">اجرای عملیات</span>
                </div>
                <br>
                <br>


            </div>

        </div>


    </div>


@endsection
