@extends('admin.layouts.adminLayout')

@section('content')


    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">

                <div style="text-align: center;padding-right: 27px;;margin-bottom: 30px">
                    <button @click="saveKadamat" class="next_form">افزودن</button>
                </div>

            </div>
        </div>
        <div class="container-fluid">

            <div class="row clearfix">

                <div class="col-lg-4 col-md-4">
                    <div class="container">
                        <input
                            style="width: 325px!important;margin-bottom: 10px"
                            type="text" class="form-control" placeholder="عنوان دوره"
                            v-model="title_kadamat">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="container">
                        <input
                            style="width: 325px!important;margin-bottom: 10px"
                            type="number" class="form-control" placeholder="قیمت"
                            v-model="price_kadamat">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="container">
                        <input
                            style="width: 325px!important;margin-bottom: 10px"
                            type="text" class="form-control" placeholder="اطلاعات"
                            v-model="info_kadamat">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="container">
                        <label style="padding: 5px">از تاریخ</label>
                        <date-picker v-model="kdadmat_from_date"/>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="container">
                        <label style="padding: 5px"> تا تاریخ</label>
                        <div class="form-group">
                            <date-picker v-model="kdadmat_to_date"/>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 dropzone-box">
                    <div class="container">
                        <!--                        <div class="form-group">-->
<!--                        <ckeditor
                            :disabled="isEditEmploy == 0"
                            v-model="desc_kadamat"
                            :config="editorConfig">
                        </ckeditor>-->

                        <editor-khadamat-add ref="ref_editor_khadamat_add"></editor-khadamat-add>



                        <!--                        </div>-->
                    </div>
                </div>
                <div class="col-md-8 col-lg-8 dropzone-box">
                    <example-component6
                        ref="myVueDropzone6"
                        @add_kadamat="funckadamatAdd4">
                    </example-component6>

                </div>
                <div class="col-lg-4 col-md-4 dropzone-box">
                    <div class="container">
                        <example-kadamt
                                        ref="myVueDropzone"
                            @add_kadamat="kadamat">
                        </example-kadamt>

                    </div>
                </div>
                <div class="col-md-12 col-lg-12 dropzone-box">
                    <div class="container">
                        <div class="img-box">
                            <div v-for="row in kadamatImg" class="img-box-item">
                                <img width="150px" height="120px" :src="'/uploads/khadamat/aliAli123aliAli3231test/'+row" alt="User Profile Picture"
                                     class="user-photo">
                                <h4 @click="funckadamatAdd4RemovePic(row)">حذف عکس</h4>
                            </div>
                        </div>
                    </div>
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
