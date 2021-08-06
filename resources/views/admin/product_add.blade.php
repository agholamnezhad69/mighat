@extends('admin.layouts.adminLayout')

@section('content')


    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1>افزودن محصول</h1>
                    <div style="text-align: right;margin: 30px 0">

                        <button @click="addProdutToServer()" class="next_form">افزودن
                        </button>
                    </div>

                </div>
            </div>
        </div>

        <div class="container-fluid">

            <div class="row clearfix">

                <div class="col-lg-3 col-md-3">
                    <div class="form-group">
                        <label class="">دسته : </label>
                        <select
                            class="mdb-select md-form" v-model="cat_select_id">
                            <option value="0" selected>انتخاب کنید</option>
                            <option v-for="row in all_cat_for_selector" :value="row.id">@{{row.title}}</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="form-group">
                        <label class="">نوع کلاس : </label>
                        <select
                            class="mdb-select md-form" v-model="type_course">
                            <option value="0" selected>آفلاین</option>
                            <option value="1" selected>آنلاین</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="form-group">
                        <input
                            style="width: 325px!important;margin-bottom: 10px"
                            type="text" class="form-control" placeholder="عنوان دوره"
                            v-model="title_course">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="form-group">
                        <input
                            style="width: 325px!important;margin-bottom: 10px"
                            type="number" class="form-control" placeholder="قیمت"
                            v-model="price_course">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="form-group">
<!--                        <ckeditor
                            :disabled="isEditEmploy == 0"
                            v-model="desc_course"
                            :config="editorConfig">
                        </ckeditor>-->
                        <editor-product-add
                            ref="ref_editor_product_add">
                        </editor-product-add>


                    </div>
                </div>
                <div class="col-md-12 col-lg-12">
                    <div class="form-group form-group2 " style="background: #fff;height: 200px">
                        <example-component3
                            ref="myVueDropzone"
                            @add_product="add_img_product">
                        </example-component3>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8" v-if="type_course==1">
                    <div class="form-group">
                        <input
                            style="margin-bottom: 10px"
                            type="text" class="form-control" placeholder="لینک اسکای روم"
                            v-model="skyromm_course">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4" v-if="type_course==1">
                    <div class="form-group ">
                        <input
                            style="margin-bottom: 10px"
                            type="number" class="form-control" placeholder="تعداد"
                            v-model="tedad_afrad_course">
                    </div>
                </div>


            </div>

        </div>


    </div>


@endsection
<script>
    import Editor_product_add from "../../js/components/editor_product_add";
    export default {
        components: {Editor_product_add}
    }
</script>
