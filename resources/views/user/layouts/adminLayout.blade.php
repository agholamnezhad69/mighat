<!doctype html>
<html lang="en">


<!-- Mirrored from paradigm-shift.ir/Brego/brego/dark/index.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Jul 2019 07:36:49 GMT -->

<head>
    <title>میقات</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description"
          content="Brego Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, Brego admin template, dashboard template, flat admin template, responsive admin template, web app, Light Dark version">
    <meta name="author" content="GetBootstrap, design by: puffintheme.com">


    @if (Request::path() == 'user/index'
 || Request::path() == 'user/pass'
 ||  Request::path() =='user/kadamat_refahi'
 ||  Request::path() =='user/products')

        <link rel="icon" href="favicon.html" type="image/x-icon">
        <!-- VENDOR CSS -->
        <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/vendor/animate-css/vivify.min.css">

        <link rel="stylesheet" href="../assets/vendor/c3/c3.min.css"/>
        <link rel="stylesheet" href="../assets/vendor/chartist/css/chartist.css">
        <link rel="stylesheet" href="../assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
        <link rel="stylesheet" href="../assets/vendor/toastr/toastr.min.css">
        <link rel="stylesheet" href="../assets/vendor/jvectormap/jquery-jvectormap-2.0.3.css"/>

        <!-- MAIN CSS -->
        <link rel="stylesheet" href="/assets/css/site.min.css">


    @elseif(
         Request::path() =='user/account'

    )

        <link rel="icon" href="favicon.html" type="image/x-icon">
        <!-- VENDOR CSS -->
        <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/vendor/jquery-steps/jquery.steps.css">

        <!-- MAIN CSS -->
        <link rel="stylesheet" href="/assets/css/site.min.css">

    @endif


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
        @include('user.layouts.navbar');
        @include('user.layouts.megamnenu');
        @include('user.layouts.rightbar');
    {{-- @include('user.layouts.left-sidebar');--}}
    <!--start  content-->
    @yield('content')
    <!--end content-->
        <loading :active.sync="isLoading" color="#fff" background-color="#000" loader="dots"></loading>
    </div>


</div>
<script src="/assets/vendor/jquery-steps/jquery.steps.js"></script>
<script src="{{ url('js/app.js') }}"></script>


@if (Request::path() == 'user/index'
  || Request::path() == 'user/pass'
  ||  Request::path() =='user/kadamat_refahi'
  ||  Request::path() =='user/products'
  )
    <!-- Javascript -->
    <script src="/assets/bundles/libscripts.bundle.js"></script>
    <script src="/assets/bundles/vendorscripts.bundle.js"></script>
    <script src="/assets/bundles/c3.bundle.js"></script>
    <script src="/assets/bundles/chartist.bundle.js"></script>
    <script src="/assets/bundles/knob.bundle.js"></script>
    <script src="../assets/vendor/toastr/toastr.js"></script>
    <script src="/assets/bundles/mainscripts.bundle.js"></script>
    <script src="/assets/js/index.js"></script>

    <style>

        .article-body .clearfix:after, .clearfix:before {
            display: unset !important;
        }

        span.vpd-input-group {
            width: 135px;
        }

        .birthday span.vpd-input-group {
            width: 100%;
        }

        i.fa.fa-plus-circle {
            color: #0062cc;
            font-size: 28px;
            position: relative;
            top: 5px;
        }

        i.fa.fa-minus-circle {
            color: #0062cc;
            font-size: 28px;
            position: relative;
            top: 5px;
        }

        input[type=checkbox], input[type=radio] {
            width: 30px;
            height: 21px;
            position: relative;
            top: 8px;
        }

        .form-group-force::after {
            /* margin-bottom: 3rem; */
            content: "*";
            position: absolute;
            top: 30px;
            right: -5px;
            color: #ff0101;
            font-size: 32px;
        }

        label.title {
            color: #fff;
        }

        ul[data-v-138dff1d] {
            overflow-y: scroll;
            max-height: 174px !important;
        }

        .dashboard-box .dashboard-box {
            padding: 0 !important;
        }

        .dashboard-box .q_links {
            justify-content: space-around;
            list-style: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap;

        }

        .dashboard-box .q_links li {
            padding: 18px;
            background: rgba(34, 37, 42, 0.95);
            width: 100%;
            margin: 0px;
            text-align: center;
            align-items: center;
            justify-content: center;
            display: inline-block;
        }

        .dashboard-box .q_links li a {
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            color: #a5a8ad;
            border: 1px solid #2f3338;
            padding: 42px 0;
            display: block;
            width: 100%;
            border: 3px solid #2f3338;
        }

        .dashboard-box .q_links li a:hover {
            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -ms-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
            background: #fff;
            border-color: #FFA117;;
            box-sizing: border-box;
            color: #ff0303;
        }

        .dashboard-box .q_links li a.active {
            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -ms-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
            background: #fff;
            border-color: #FFA117;;
            box-sizing: border-box;
            color: #ff0303;
        }

        .dashboard-box .q_links li i {
            font-size: 22px;
        }

        .container {
            /* max-width: 1400px !important;*/
            margin-right: 0px !important;
        }

        .navbar-fixed-top {
            width: 97%;
            padding: 14px 5px;

        }

    </style>
    <style>
        .box-parent {
            margin-right: 5px;
        }

        .btn-account {
            height: 30px;
            width: 30px;
            border-radius: 50%;
            border: 1px solid red;
        }

        .line-account {
            display: inline-block;
            width: 100px;
            height: 5px;
            background: #2a30f1;
        }

        .box-account {
            display: inline-block;
            position: relative;
        }

        /* .box-account .caption-account {
            position: absolute;
            top: 41px;
            right: 0px;
            width: 100px
        } */

        .block-header {
            margin-bottom: 44px;
        }

        h2.account-top {
            margin-bottom: 22px;
            font-weight: 700;
            color: #FFA117;
            padding-right: 20px !important;
        }

        form#wizard_with_validation h3 {
            font-size: 1.50rem;
            margin-bottom: 40px;
            color: #FFA117;
        }

        select.mdb-select.md-form {
            padding: 5px 25px;
            border-radius: 6px;
            background: #E5E5E5;
        }

        .my-form-control {
            display: inline-block;
            width: 55px;
            height: 36px;
            text-align: center;
        }

        .form-control {
            border: 1px solid #797979 !important;
        }

        .checkbox-account {
            display: inline-block;
            width: 23px;
            height: 26px;
            text-align: center;
            vertical-align: -9px;
            background: transparent;
            /*   border: 1px solid white !important;
           width: 20px;
           height: 20px;
           cursor: pointer;
           background: rgba(40,40,40,0.2);
           -webkit-appearance: none;
           -moz-appearance: none;
           position: relative;
           left: -8px;
           top: 9px;*/
        }

        /*  .checkbox-account:checked {
          background: rgba(40,40,40,0.7);
      }*/

        .label-account {
            direction: ltr !important;
        }

        .fancy-checkbox input.input-account + span::before {
            right: 10px;
        }

        .my-fancy-checkbox {
            display: inline-block;
            margin-bottom: 25px;

        }

        .form-group {
            margin-bottom: 3rem;
        }

        .next_form {
            float: left;
            color: #fff;
            background-color: #0062cc;
            border-color: #005cbf;
            border-radius: 5px;
            padding: 5px 23px;
            cursor: pointer;
            margin-left: 10px;
        }

        .v-select[data-v-138dff1d] {
            width: 40%;
            display: inline-block;
        }

        .v-dropdown-item[data-v-138dff1d] {
            text-align: right;
        }

        span.caption-account {
            margin: 0 18px;
        }

        .fa-check-circle:before {
            display: none;
        }

        .my-check-step:before {
            display: inline;
            font-size: 30px;
            position: relative;
            top: 7px;
            right: -32px;
            color: green;
            transition: all 2s ease-in-out;
            -webkit-transition: all 2 ease-in-out;
            -moz-transition: all 2 ease-in-out;
            -o-transition: all 2 ease-in-out;
            box-shadow: -1px 2px 3px rgba(0, 0, 0, .2);
            -webkit-box-shadow: -1px 2px 3px rgba(0, 0, 0, .2);
            -moz-box-shadow: -1px 2px 3px rgba(0, 0, 0, .2);
            -o-box-shadow: -1px 2px 3px rgba(0, 0, 0, .2);

        }

        select.mdb-select.md-form {
            width: 100%;
        }

        .v-select[data-v-138dff1d] {
            width: 100% !important;
        }

        v-select.disabled[data-v-138dff1d] {
            width: 100% !important;
        }

        .form-control:disabled, .form-control[readonly] {
            width: 100% !important;
        }

        .v-select.disabled[data-v-138dff1d] {
            cursor: not-allowed;
            width: 100%;
        }

        fieldset {
            width: 100%;
        }

        .fancy-checkbox, .fancy-checkbox label {

            margin-bottom: 25px !important;
        }

        /*  select.mdb-select.md-form {
              width: 205px;
          }*/
        /*     .v-tahsili {
                 width: 234px !important;
             }*/

        .title-header {
            text-align: center;
            padding: 13px;
            border: 1px solid #fff;
            margin-top: 28px;
            color: #FFA117;
        }

        .box-parent {
            margin-right: 2px;
            display: flex;
            flex-wrap: wrap;
        }

        .k_m_kh {
            width: 100% !important;
        }

        .k_m_m {
            width: 100% !important;
        }

        .k_d {
            width: 100% !important;
        }

        .n_h {
            width: 100% !important;
        }

        .o_d_sh {
            width: 100% !important;
        }

        .v-select-toggle[data-v-138dff1d] {
            height: 34px !important;
        }

        h2.account-top {
            margin-bottom: 22px;
            font-weight: 700;
            color: #FFA117;
        }

        .l-td {
            padding-right: 40px
        }

        .dashboard-box .q_links li i {
            font-size: 22px;
            vertical-align: -6px;
            padding: 5px 9px;
        }

        @media screen and (max-width: 992px) {
            .l-td {
                padding-right: 0px !important;
            }

            .box-account {
                margin-bottom: 16px !important;
            }

            .form-group {
                margin-bottom: 1.5rem !important;
                margin-top: 1.5rem !important;
            }

            .mdb-select.md-form {
                width: 100% !important;
            }

            .v-tahsili {
                width: 100% !important;
            }

            .vpd-main {
                margin-bottom: 40px;
                display: inline-block;
                width: 100%;
            }

            select.mdb-select.md-form {
                width: 100%;
            }

            .v-select[data-v-138dff1d] {
                width: 100%;
            }
        }
    </style>
@endif

@if (Request::path() == 'user/account'

)
    <!-- Javascript -->
    <script src="/assets/bundles/libscripts.bundle.js"></script>
    <script src="/assets/bundles/vendorscripts.bundle.js"></script>

    <script src="/assets/vendor/jquery-validation/jquery.validate.js"></script><!-- Jquery Validation Plugin Css -->
    <!-- JQuery Steps Plugin Js -->
    <script src="/assets/bundles/mainscripts.bundle.js"></script>
    <script src="/assets/js/pages/forms/form-wizard.js"></script>
    <style>
        .box-parent {
            margin-right: 5px;
        }

        .btn-account {
            height: 30px;
            width: 30px;
            border-radius: 50%;
            border: 1px solid red;
        }

        .line-account {
            display: inline-block;
            width: 100px;
            height: 5px;
            background: #2a30f1;
        }

        .box-account {
            display: inline-block;
            position: relative;
        }

        /* .box-account .caption-account {
            position: absolute;
            top: 41px;
            right: 0px;
            width: 100px
        } */

        .block-header {
            margin-bottom: 44px;
        }

        form#wizard_with_validation h3 {
            font-size: 1.50rem;
            margin-bottom: 19px;
        }

        select.mdb-select.md-form {
            padding: 5px 25px;
            border-radius: 6px;
            background: #E5E5E5;
        }

        .my-form-control {
            display: inline-block;
            width: 55px;
            height: 36px;
            text-align: center;
        }

        .form-control {
            border: 1px solid #797979 !important;
        }

        .checkbox-account {
            display: inline-block;
            width: 23px;
            height: 26px;
            text-align: center;
            vertical-align: -9px;
            background: transparent;
            /*   border: 1px solid white !important;
           width: 20px;
           height: 20px;
           cursor: pointer;
           background: rgba(40,40,40,0.2);
           -webkit-appearance: none;
           -moz-appearance: none;
           position: relative;
           left: -8px;
           top: 9px;*/
        }

        /*  .checkbox-account:checked {
          background: rgba(40,40,40,0.7);
      }*/

        .label-account {
            direction: ltr !important;
        }

        .fancy-checkbox input.input-account + span::before {
            right: 10px;
        }

        .my-fancy-checkbox {
            display: inline-block;
            margin-bottom: 25px;

        }

        .form-group {
            margin-bottom: 3rem;
        }

        .next_form {
            float: left;
            color: #fff;
            background-color: #0062cc;
            border-color: #005cbf;
            border-radius: 5px;
            padding: 5px 23px;
            cursor: pointer;
            margin-left: 10px;
        }

        .v-select[data-v-138dff1d] {
            width: 40%;
            display: inline-block;
        }

        .v-dropdown-item[data-v-138dff1d] {
            text-align: right;
        }

        span.caption-account {
            margin: 0 18px;
        }

        .fa-check-circle:before {
            display: none;
        }

        .my-check-step:before {
            display: inline;
            font-size: 30px;
            position: relative;
            top: -22px;
            right: -5px;
            color: green;
            transition: all 2s ease-in-out;
            -webkit-transition: all 2 ease-in-out;
            -moz-transition: all 2 ease-in-out;
            -o-transition: all 2 ease-in-out;
            box-shadow: -1px 2px 3px rgba(0, 0, 0, .2);
            -webkit-box-shadow: -1px 2px 3px rgba(0, 0, 0, .2);
            -moz-box-shadow: -1px 2px 3px rgba(0, 0, 0, .2);
            -o-box-shadow: -1px 2px 3px rgba(0, 0, 0, .2);

        }


    </style>
@endif

<style>
    #left-sidebar .navbar-brand .logo {
        width: 73px;
    }

    i.fa.fa-eye {
        color: #00f800;
        font-size: 26px;
    }


    .navbar-fixed-top .navbar-btn .logo {
        width: 61px !important;
    }

    .navbar-fixed-top .navbar-btn {
        border-left: unset !important;
    }

    .table.table-custom thead th {
        text-align: center;
    }

    .dropzone .dz-preview.dz-image-preview {;
        z-index: 1 !important;
    }

    #toast-container {
        display: none !important;
    }
</style>
<style>
    @media screen and (max-width: 500px) {
        .dashboard-box .q_links li i {
            display: block !important;
        }

        .dashboard-box .q_links li i {

            padding: 0px 9px !important;
        }

    }

    @media screen and (max-width: 392px) {
        .next_form {
            width: 100%;
            margin-top: 7px;
        }

        .dashboard-box .q_links li a {
            font-size: 12px !important;
        }

        .dashboard-box .q_links li a {
            height: 132px !important;
        }

    }

    @media screen and (max-width: 992px) {
        .form-group-force::after {

            top: 55px !important;
            right: -1px !important;

        }

        .dashboard-box .q_links li a {

            height: 121px !important;
        }

        .vpd-main {
            margin-bottom: unset;
        }

    }

    @media screen and (max-width: 1450px) {
        .container {
            max-width: 100% !important;
        }

        #main-content {
            width: 100% !important;

        }

    }
</style>

</body>


<!-- Mirrored from paradigm-shift.ir/Brego/brego/dark/index.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Jul 2019 07:37:15 GMT -->

</html>

