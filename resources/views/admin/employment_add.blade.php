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

        <div class="container-fluid">


            <div class="row clearfix">


                <div class="col-lg-12 col-md-12 col-sm-12">
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
                            <div style="text-align: right;margin-bottom: 30px">
                                <button @click="employmentSave()" class="next_form">ذخیره</button>


                            </div>
                            <div class="clearfix"></div>
                            <form id="myform1">
                                {{-- <h3 style="text-align: center">اطلاعات فردی</h3>--}}
                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                <fieldset>
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
                                                <v-select
                                                    :options="optionSelectOstan"
                                                    searchable="true"
                                                    v-model="employState"/>

                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <div class="form-group">
                                                <v-select
                                                    :options="optionSelectCatEmploy"
                                                    searchable="true"
                                                    v-model="employCategory"/>

                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <editor-employment-add
                                                    ref="ref_editor_employment_add">
                                                </editor-employment-add>
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















