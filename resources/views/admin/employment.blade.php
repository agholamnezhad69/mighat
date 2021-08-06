@extends('admin.layouts.adminLayout')

@section('content')


    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                </div>
            </div>
        </div>

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
                                        <th>عنوان رزومه</th>
                                        <th>آگهی ویژه</th>
                                        <th>ویرایش</th>
                                        <th>حذف</th>

                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>ردیف</th>
                                        <th>عنوان رزومه</th>
                                        <th>آگهی ویژه</th>
                                        <th>ویرایش</th>
                                        <th>حذف</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>

                                    <tr v-for="(row,index) in all_employment.data">
                                        <td>@{{ index+1}}</td>
                                        <td>@{{ row . title }}</td>
                                        <td><i
                                                style="color: #ff3717;
                                                  font-size: 25px;"
                                                class="fa fa-check"
                                                v-if="row.is_special==1">
                                            </i>
                                        </td>
                                        <td>
                                            <i @click="funcEdiFormEmployment(row.id,row.title,row.description,row.status,row.state,row.category,row.is_special)"
                                               class="fa fa-edit"></i>
                                        </td>
                                        <td>
                                            <i @click="deleteEmployment(row.id)"
                                               class="fa fa-trash"
                                               style="color: red;font-size: 25px;cursor: pointer"></i>
                                        </td>

                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                    <pagination
                        :data="all_employment"
                        @pagination-change-page="employ_rezome_sent"
                    >
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
                                    <div style="text-align: right;margin-bottom: 30px">

                                        <button @click="employmentSave()" class="next_form">ویرایش
                                        </button>
                                        <button @click="funcEdiFormEmploymentCansel()" class="next_form">انصراف</button>


                                    </div>
                                    <div class="row clearfix">

                                        <div class="col-lg-3 col-md-3">
                                            <div class="form-group">
                                                <input
                                                    v-model="employTitle"
                                                    type="text"
                                                    class="title form-control"
                                                    placeholder="عنوان ">

                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <div class="form-group">
                                                <!--                                                <input
                                                                                                    v-model="employStatus"
                                                                                                    type="text"
                                                                                                    class="title form-control"
                                                                                                    placeholder="وضعیت">-->
                                                <select
                                                    class="mdb-select md-form" v-model="employStatus">
                                                    <option value="0" selected>عادی</option>
                                                    <option value="1" selected> فوری</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <v-select
                                                        :options="optionSelectOstan"
                                                        searchable="true"
                                                        v-model="employState"/>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <div class="form-group">
                                                <!--                                                <input
                                                                                                    v-model="employCategory"
                                                                                                    type="text"
                                                                                                    class="title form-control"
                                                                                                    placeholder="دسته بندی">-->
                                                <v-select
                                                    :options="optionSelectCatEmploy"
                                                    searchable="true"
                                                    v-model="employCategory"/>

                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="fancy-checkbox">
                                                <label style="vertical-align: -13px;">
                                                    <span style="margin-left: 16px">آگهی ویژه</span>
                                                    <input
                                                        v-model="is_special"
                                                        type="checkbox">
                                                    <span>

                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <!--                                                <ckeditor
                                                                                                    v-model="employDesc"
                                                                                                    :config="editorConfig">
                                                                                                </ckeditor>-->

                                                <editor-employment-edit
                                                    :prop_desc_employment="employDesc"
                                                    :prop_employment_id="employId"
                                                    ref="ref_editor_employment_edit">

                                                </editor-employment-edit>


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















