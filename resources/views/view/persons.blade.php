@extends('view.layouts.adminLayout')

@section('content')



    <!-- Body Start -->
    <div class="wrapper dark-top-slider" id="app" style="direction: rtl">
        <div class="gambo-Breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">خانه</a></li>
                                <li class="breadcrumb-item active" aria-current="page">یاران قرارگاه ملی</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="all-product-grid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-top-dt">

                            {{-- <a href="#" class="filter-btn pull-bs-canvas-right">Filters</a>--}}
                            <div class="product-sort col-md-12 ">

                                <div class="col-md-4" style="float: right">
                                    <div class="form-group my-form-group">
                                        <label class="my-label">دوره قرارگاه ملی </label>
                                        <select @change="filter_all_user_for_persons()"
                                                class="mdb-select md-form form-controll"
                                                v-model="dore_id">
                                            <option :value="0" selected>انتخاب کنید</option>
                                            <option v-for="row in dore" :value="row.id">@{{ row . attr }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4" style="float: right">
                                    <div class="form-group  my-form-group">
                                        <label>استان محل تحصیل </label>
                                        <v-select class="omt"
                                                  :options="optionSelectOstan"
                                                  searchable="true"
                                                  v-model="ostan_id_for_persons"/>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4" style="float: right">
                                    <div class="form-group  my-form-group">
                                        <label>نام و نام خانوادگی </label>
                                        <input
                                            v-model="name_search"
                                            class="name_input"
                                            type="text"
                                            placeholder=" نام خانوادگی">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-list-view">
                    <div class="row">
                        <div v-for="row in all_users" v-if="row.name!=null && row.is_member_ghararghah =='yes' "
                             class="col-lg-2 col-md-3">
                            <a :href="'/home/persons_detail/'+row.id">
                                <figure>

                                    <img v-if="row.img!= null" :src="'/uploads/user/'+row.img" alt=""
                                         class="img-responsive1">
                                    <img v-else src="/uploads/user/widoutpic.png" alt="" class="img-responsive1">
                                </figure>
                                <div class="person-name">
                                    <span>@{{ row.name }} <span style="padding: 0 5px">@{{ row.family }} </span></span>
                                </div>
                            </a>
                        </div>
                        <infinite-loading @infinite="get_users_scroll"></infinite-loading>
                    </div>

                </div>

            </div>
        </div>


    </div>
    <!-- Body End -->

    <style>
        .infinite-status-prompt {
            display: none !important;
        }

        option, select {
            color: #555;
            font-family: aviny;
        }

        .show-more-btn {
            font-family: IRANSans !important;
        }

        .wrapper {
            /* padding-top: 106px !important;*/
            background: #000;
        }


        figure {
            padding: 5px;
        }

        .img-responsive1 {
            display: block;
            max-width: 100%;
            width: 100%;
            height: auto;
            border: 1px solid #eee;
            border-top-right-radius: 4px;
            border-top-left-radius: 4px;
        }

        .product-right-title {
            float: right;
        }

        h2 {
            font-family: aviny !important;
            margin-left: 20px;
        }

        ol.breadcrumb {
            direction: rtl;
        }

        .breadcrumb-item {
            font-family: iran !important;
            font-size: 13px;
            font-weight: 900;
            color: #EEEEEE;
        }

        select.mdb-select.md-form option {
            font-family: iran !important;
        }

        .breadcrumb-item + .breadcrumb-item::before {
            padding: 0 10px;
        }

        .gambo-Breadcrumb .breadcrumb .breadcrumb-item.active {
            color: #e70762
        }

        .product-right-title h2 {
            color: #fff;
        }

        select.mdb-select.md-form {
            width: 100% !important;
        }

        .v-select[data-v-138dff1d] {
            display: inline-block;
            position: relative;
            width: 100% !important;
            height: 30px;
            cursor: pointer;
        }

        .v-dropdown-item[data-v-138dff1d] {
            text-align: right;
            font-family: IRANSans !important;
        }

        input[type="text"] {
            width: 100% !important;
        }

        .form-group.my-form-group label {
            font-family: IRANSans;
            color: #fff !important;
        }

        *[data-v-138dff1d] {
            font-family: IRANSans !important;
        }

        .product-top-dt {
            float: left;
            width: 100%;
            display: block;
            border: 1px solid #4f0c55;
            padding: 23px 0 0 0;
            background: #4f0c55;
            border-radius: 7px;
        }

        .form-control {

            background-color: #ffffff !important;

        }

        .product-list-view {
            margin-top: 39px;
            border: 1px solid #051c4d;
            background: #fff;
            padding: 9px 18px 19px 14px;
            min-height: 450px !important;
        }

        .product-sort.col-md-8 {
            float: right;
        }

        input[type=text] {
            color: #0f0000 !important;
            font-family: iran !important;
        }

        .name_input {
            padding: 6px 12px;
            border: 1px solid #ccc;
            line-height: 1.42857143;
            height: 34px;
            border-radius: 4px;
        }

        figure {
            margin: 0;
            padding: 0;
        }

        .person-name {
            background: #eee;
            padding: 9px;
            margin-bottom: 10px;
            border-bottom-left-radius: 4px;
            border-bottom-right-radius: 4px;
        }

        .person-name span {
            color: #ee2c72;
            font-family: iran;
        }
    </style>




@endsection


