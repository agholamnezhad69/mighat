@extends('admin.layouts.adminLayout')

@section('content')


    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <div class="inlineblock vivify swoopInTop delay-900 mr-4">بازدیدکنندگان <span id="mini-bar-chart1"
                                                                                                  class="mini-bar-chart"></span>
                    </div>
                    <div class="inlineblock vivify swoopInTop delay-950 mr-4">بازدیدها <span id="mini-bar-chart2"
                                                                                             class="mini-bar-chart"></span>
                    </div>
                    <div class="inlineblock vivify swoopInTop delay-1000">چت ها <span id="mini-bar-chart3"
                                                                                      class="mini-bar-chart"></span>
                    </div>
                    <br>
                    <span @click="deleteCats" class="delete_cat">حذف دسته</span>
                </div>
            </div>
        </div>

        <div class="container-fluid">

            <div class="row clearfix">

                <div class="col-lg-12">
                    <div class="card">

                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover table-custom spacing8">
                                    <thead>
                                    <tr>
                                        <th>ردیف</th>
                                        <th>عنوان درس</th>
                                        <th>محصول</th>
                                        <th>فایل</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>ردیف</th>
                                        <th>عنوان درس</th>
                                        <th>محصول</th>
                                        <th>فایل</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>

                                    <?php

                                    $arr = $product_lessons;
                                    foreach ($arr as $key => $value) {
                                    ?>
                                    <tr>
                                        <td><?= $arr[$key]->id ?></td>
                                        <td><?= $arr[$key]->title ?></td>
                                        <td><?= $arr[$key]->cat_title ?></td>
                                        <td><a href=""><?= $arr[$key]->file ?></a></td>

                                    </tr>
                                    <?php
                                    }

                                    ?>


                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12" style="text-align: center">
                    <h4 style="    margin: 20px 19px;">افزود درس</h4>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="form-group" style="    margin-right: 29px;">
                        <input
                            style="width: 325px!important;margin-bottom: 10px"
                            type="text" class="form-control" placeholder="عنوان دوره"
                            v-model="title_course">
                    </div>
                </div>
                <div class="col-md-12 col-lg-12">
                    <div class="col-md-3 col-lg-3">
                        <div class="form-group form-group2">
                            <example-component3 @add_product="add_img_product"></example-component3>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12">
                    <span @click="" class="sub_cat">افزودن درس</span>
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
