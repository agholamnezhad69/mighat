<!doctype html>
<html lang="en">


<!-- Mirrored from paradigm-shift.ir/Brego/brego/dark/index.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Jul 2019 07:36:49 GMT -->

<head>
    <title>میقات </title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description"
          content="Brego Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, Brego admin template, dashboard template, flat admin template, responsive admin template, web app, Light Dark version">
    <meta name="author" content="GetBootstrap, design by: puffintheme.com">
    <?php
    $a = '';
    if (isset($idproduct)) {
        $a = 'admin/product_lesson/' . $idproduct;
    }
    ?>

    @if ( (Request::path() == 'admin/index') )



        <link rel="icon" href="favicon.html" type="image/x-icon">
        <!-- VENDOR CSS -->
        <link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/vendor/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="/assets/vendor/animate-css/vivify.min.css">

        <link rel="stylesheet" href="/assets/vendor/c3/c3.min.css"/>
        <link rel="stylesheet" href="/assets/vendor/chartist/css/chartist.css">
        <link rel="stylesheet" href="/assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
        <link rel="stylesheet" href="/assets/vendor/toastr/toastr.min.css">
        <link rel="stylesheet" href="/assets/vendor/jvectormap/jquery-jvectormap-2.0.3.css"/>

        <!-- MAIN CSS -->
        <link rel="stylesheet" href="/assets/css/site.min.css">



    @elseif(Request::path() =='admin/getStudents'
   || Request::path() =='admin/employment'
   || Request::path() =='admin/employment_add'
  || Request::path() =='admin/employ_rezome'
  || Request::path() =='admin/category_product'
   || Request::path() =='admin/addCat'
   || Request::path() =='admin/product'
   || Request::path() =='admin/news_add'
   || Request::path() =='admin/news'
   || Request::path() =='admin/product_add'
   || Request::path() =='admin/nashriye'
   || Request::path() =='admin/nashriye_add'
   ||  Request::path() ==$a
   ||  Request::path() =='admin/kadamat_refahi'
   ||  Request::path() =='admin/kadamat_refahi_add'
   ||  Request::path() =='admin/student_add'
   ||  Request::path() =='admin/contactToLeader'
   )


    <!-- VENDOR CSS -->
        <link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/vendor/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="/assets/vendor/animate-css/vivify.min.css">

        <link rel="stylesheet" href="/assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css">
        <link rel="stylesheet"
              href="/assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css">
        <link rel="stylesheet"
              href="/assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css">
        <link rel="stylesheet" href="/assets/vendor/sweetalert/sweetalert.css"/>

        <!-- MAIN CSS -->
        <link rel="stylesheet" href="/assets/css/site.min.css">

        <style>
            button.swal2-confirm.btn.btn-success {
                margin-left: 6px;
            }

            td.details-control {
                background: url('../assets/images/details_open.html') no-repeat center center;
                cursor: pointer;
            }

            tr.shown td.details-control {
                background: url('../assets/images/details_close.html') no-repeat center center;
            }

        </style>
        <style>
            .article-desc {
                line-height: 30px;
                /*     padding: 20px 5px !important;*/
                display: inline-block;
                text-align: justify;
            }

            span.article-title {
                color: #e70b0b !important;
            }

            input.form-control {
                text-align: center !important;
            }

            .col-md-3, col-lg-3 {
                padding: 0 !important;
                margin: 0 !important;
            }

            @media (min-width: 300px) {
                .dropzone-box .container {
                    width: 100%;
                    max-width: 100%;
                    margin-top: 21px;
                }
            }

            .img-box {
                display: flex;
                flex-wrap: wrap;
                padding: 10px;
            }

            .img-box-item {
                margin: 5px;
                border: 1px solid #eee;
                background-color: #fff;
            }

            .img-box-item h4 {
                text-align: center;
                font-size: 15px;
                padding: 6px;
                margin-top: 7px;
                cursor: pointer;
            }
        </style>

    @endif


    <script src="/js/playerjs1.js"></script>

</head>

<body class="theme-orange">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="/assets/images/icon.svg" width="100" height="70" alt="Brego"></div>
        <p>لطفا صبر کنید...</p>
    </div>
</div>

<!-- Theme Setting -->
<div class="themesetting">
    <a href="javascript:void(0);" class="theme_btn"><i class="icon-magic-wand"></i></a>
    <ul class="choose-skin list-unstyled mb-0">
        <li data-theme="green">
            <div class="green"></div>
        </li>
        <li data-theme="orange" class="active">
            <div class="orange"></div>
        </li>
        <li data-theme="blush">
            <div class="blush"></div>
        </li>
        <li data-theme="cyan">
            <div class="cyan"></div>
        </li>
    </ul>
</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<div id="wrapper">

    <div id="app">
        @include('admin.layouts.navbar');
        @include('admin.layouts.megamnenu');
        @include('admin.layouts.rightbar');
        @include('admin.layouts.left-sidebar');
        <div class="clearfix"></div>
        <!--start  content-->
        @yield('content')
        <div class="clearfix"></div>
        <!--end content-->
        <loading :active.sync="isLoading" color="#fff" background-color="#000" loader="dots"></loading>
    </div>
</div>

<script src="/assets/vendor/jquery-steps/jquery.steps.js"></script>
<script src="{{ url('js/app.js') }}"></script>

@if (Request::path() == 'admin/index')
    <!-- Javascript -->
    <script src="/assets/bundles/libscripts.bundle.js"></script>
    <script src="/assets/bundles/vendorscripts.bundle.js"></script>
    <script src="/assets/bundles/c3.bundle.js"></script>
    <script src="/assets/bundles/chartist.bundle.js"></script>
    <script src="/assets/bundles/knob.bundle.js"></script>
    <script src="/assets/vendor/toastr/toastr.js"></script>
    <script src="/assets/bundles/mainscripts.bundle.js"></script>
    <script src="/assets/js/index.js"></script>
@endif

@if (Request::path() == 'admin/getStudents'
|| Request::path() =='admin/nashriye'
 || Request::path() =='admin/nashriye_add'
 || Request::path() =='admin/employment'
 || Request::path() =='admin/employment_add'
|| Request::path() =='admin/employ_rezome'
|| Request::path() =='admin/category_product'
|| Request::path() =='admin/addCat'
|| Request::path() =='admin/product'
|| Request::path() =='admin/product_add'
|| Request::path() =='admin/news_add'
|| Request::path() =='admin/news'
 ||  Request::path() ==$a
 || Request::path() =='admin/kadamat_refahi'
 || Request::path() =='admin/kadamat_refahi_add'
 || Request::path() =='admin/student_add'
   ||  Request::path() =='admin/contactToLeader'
)


    <script src="/assets/bundles/libscripts.bundle.js"></script>
    <script src="/assets/bundles/vendorscripts.bundle.js"></script>

    <script src="/assets/bundles/datatablescripts.bundle.js"></script>
    <script src="/assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
    <script src="/assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
    <script src="/assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
    <script src="/assets/vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
    <script src="/assets/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>
    <script src="/assets/vendor/sweetalert/sweetalert.min.js"></script>
    <!-- SweetAlert Plugin Js -->
    <script src="/assets/bundles/mainscripts.bundle.js"></script>
    <script src="/assets/js/pages/tables/jquery-datatable.js"></script>





    }

    <style>
        .top-margin {
            padding-right: 10px;
        }

        label.top-pdf {
            width: 100%;
            text-align: center;
        }

        #pdf {
            /* font-family: 'Avenir', Helvetica, Arial, sans-serif !important;*/
            -webkit-font-smoothing: antialiased !important;
            -moz-osx-font-smoothing: grayscale !important;
            /* text-align: center !important; */
            color: #2c3e50 !important;
            margin-top: 5px !important;
            margin-bottom: 5px !important;
            padding: 15px 5px !important;
            background: #fff;
        }

     /*   .card .header {
            background: #fff;
            padding: 30px 0;
        }*/

        .fa-edit {
            color: #0ee13b !important;
            font-size: 24px !important;
            cursor: pointer;
        }

        .fa-eye {
            color: #0ee13b !important;
            font-size: 24px !important;
            cursor: pointer;

        }

        .dt-buttons {
            margin-bottom: 15px;
        }

        .v-select[data-v-138dff1d] {
            width: 40%;
            display: inline-block;
        }

        .v-dropdown-item[data-v-138dff1d] {
            text-align: right;
        }

        select.mdb-select.md-form {
            padding: 5px 25px;
            border-radius: 6px;
            background: #E5E5E5;
        }

        td.dataTables_empty {
            display: none;
        }

        label.top-pdf, .label-account span {
            color: #000;
        }

        .label_studen_attr {
            color: #FFA117 !important;
        }


        .donoghte {
            padding: 0 8px !important;
        }

        button.v-select-toggle {
            height: 31px;
        }

        .form-group.my-form-group {
            text-align: center
        }

        .form-group.my-form-group label {
            display: block
        }

        @media screen and (min-width: 992px) {
            select.mdb-select.md-form {
                width: 250px;
            }

            .v-select {
                width: 250px !important;
            }

        }

        .next_form {
            color: #fff;
            background-color: #0062cc;
            border-color: #005cbf;
            border-radius: 5px;
            padding: 5px 23px;
            cursor: pointer;
            margin-left: 10px;
        }

        .next_form_green {
            color: #fff;
            background-color: #15830e;
            border-color: #16890e;
            border-radius: 5px;
            padding: 5px 23px;
            cursor: pointer;
            margin-left: 10px;
        }

        .delete_cat {
            display: inline-block;
            border: 1px solid #eee;
            margin-top: 20px;
            padding: 5px 19px;
            border-radius: 5px;
            background: #c60000;
            color: white;
            cursor: pointer;
        }

        .form-group2 .container {
            /*height: 303px !important;*/
            padding: 0;
        }


    </style>



@endif

@if (Request::path() == 'admin/employ_rezome'
    || Request::path() == 'admin/employment_add'
    || Request::path() == 'admin/employment'
    || Request::path() =='admin/category_product'
    || Request::path() =='admin/addCat'
    || Request::path() =='admin/product'
    || Request::path() =='admin/product_add'
    || Request::path() =='admin/news_add'
    || Request::path() =='admin/news'
    || Request::path() ==$a
    || Request::path() =='admin/kadamat_refahi'
    || Request::path() =='admin/kadamat_refahi_add'
    || Request::path() =='admin/nashriye_add'
    || Request::path() =='admin/index'
    || Request::path() =='admin/getStudents'
    || Request::path() =='admin/student_add'
    ||  Request::path() =='admin/contactToLeader'

    )
    <style>
        #toast-container {
            display: none !important;
        }

        .answers {
            display: block;
            width: 100%;
            margin-top: 15px;
            border-bottom: 1px solid #cdcbcb;
            padding: 23px 50px;
            color: #000;
        }

        .dashboard .chartjs-render-monitor {
            max-width: 1100px !important;
        }

        .dashboard .card .body {
            background-color: #fff !important;
        }

        ul[data-v-138dff1d] {
            overflow: scroll !important;
            max-height: 174px !important;
        }

        .label_studen_attr {
            color: #FFA117;
            margin-left: 5px;
            padding-right: 20px;
        }

        /*
                .box-student-attr {
                    !*border: 1px solid #eee;*!
                    width: 100%;
                    margin: 19px 0;
                   !* padding: 22px 11px*!
                }*/

        .box-student-attr {
            border: 1px solid #eee;
            width: 100%;
            margin: 19px 0;
            padding: 7px 66px;
        }

        .form-group-add-student {
            margin-bottom: 52px !important;
        }

        .dt-buttons {
            display: none !important;
        }

        div.dataTables_wrapper div.dataTables_filter {
            display: none !important;
        }

        .sub_cat {
            cursor: pointer;
            margin: 0px 5px;
            display: inline-block;
            color: red;
            border: 1px solid #fff;
            padding: 5px 17px;
            background-color: #fff;
            border-radius: 5px;

        }

        .delete_cat {
            display: inline-block;
            border: 1px solid #eee;
            margin-top: 20px;
            padding: 5px 19px;
            border-radius: 5px;
            background: #c60000;
            color: white;
            cursor: pointer;
        }

        .form-group3 img {
            display: inline-block;
            width: 67%;
            height: 28%;
            margin-right: 33px;
        }

        i.fa.fa-edit {
            font-size: 22px;
            color: #7cd31d;
            cursor: pointer;
        }

        i.fa.fa-plus {
            font-size: 22px;
            color: #0c05c9;
            cursor: pointer;
        }

        i.fa.fa-book {
            font-size: 22px;
            color: #c9c604;
            cursor: pointer;
        }

        div#DataTables_Table_0_paginate {
            display: none;
        }

        div#DataTables_Table_0_info {
            display: none;
        }

        .pagination1 ul li {
            display: inline-block;
            border: 1px solid #fff;
            background: #800909;
            padding: 5px 14px;
            margin: 0 3px;
            cursor: pointer;
            border-radius: 4px;
        }

        #left-sidebar .navbar-brand .logo {
            width: 73px !important;
        }

        .dropzone .dz-preview.dz-image-preview {
            width: auto !important;
            height: 147px !important;
        }


    </style>
@endif

</body>


<!-- Mirrored from paradigm-shift.ir/Brego/brego/dark/index.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Jul 2019 07:37:15 GMT -->

</html>

