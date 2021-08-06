@extends('admin.layouts.adminLayout')

@section('content')


    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                {{--   <div class="col-md-6 col-sm-12">
                       <h1>داشبورد</h1>
                   </div>--}}
            </div>
        </div>

        <div class="container-fluid">


            <div class="dashboard-box">


                <div class="container">
                    <div class="row clearfix">


                        <div class="container-fluid">


                            <div class="row clearfix">
                                <div v-if="formChange==1" class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="card">

                                        <div class="body wizard_validation">

                                            <div class="clearfix"></div>
                                            <div id="wizard_with_validation" method="POST">
                                                <!--
                                                                                                <h3 class="title-header" style="text-align: center">اطلاعات فردی</h3>
                                                -->

                                                <fieldset>
                                                    <div class="row clearfix">

                                                        <div class="col-lg-4 col-md-12">
                                                            <div class="form-group form-group-add-student">
                                                                <input
                                                                    type="text"
                                                                    v-model="name" class="form-control"
                                                                    placeholder="نام *">

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-12">
                                                            <div class="form-group form-group-add-student">
                                                                <input

                                                                    type="text" v-model="family"
                                                                    class="form-control"
                                                                    placeholder="نام خانوادگی"
                                                                >
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-12">
                                                            <div class="form-group form-group-add-student">
                                                                <input

                                                                    type="text" v-model="fatherName"
                                                                    class="form-control"
                                                                    placeholder="نام پدر "
                                                                >
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-12">
                                                            <div class="form-group form-group-add-student">
                                                                <input

                                                                    type="text" class="form-control"
                                                                    placeholder="شماره ملی "
                                                                    v-model="nCod">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-12">
                                                            <div class="form-group form-group-add-student">
                                                                <date-picker
                                                                    v-model="birthday"/>


                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-12">
                                                            <div class="form-group form-group-add-student">
                                                                <input

                                                                    type="text" class="form-control"
                                                                    placeholder="تلفن همراه "
                                                                    v-model="mobile">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-12">
                                                            <div class="form-group form-group-add-student">
                                                                <input

                                                                    type="text" class="form-control"
                                                                    v-model="socialmobile"
                                                                    placeholder="تلفن شبکه اجتماعی"
                                                                >
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-12">
                                                            <div class="form-group form-group-add-student">
                                                                <input

                                                                    type="text" class="form-control"
                                                                    placeholder="تلفن منزل "
                                                                    v-model="telhome">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-12">
                                                            <div class="form-group form-group-add-student">
                                                                <input
                                                                    type="text" class="form-control"
                                                                    placeholder="نام کاربری "
                                                                    v-model="user_name">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-12">
                                                            <div class="form-group form-group-add-student">
                                                                <input

                                                                    type="text" class="form-control"
                                                                    placeholder="پسورد "
                                                                    v-model="user_pass">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group form-group-add-student">
                                                                <button style="float: left" @click="addStudent()"
                                                                        class="next_form">افزودن
                                                                </button>
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
                </div>

            </div>


        </div>
    </div>


@endsection
