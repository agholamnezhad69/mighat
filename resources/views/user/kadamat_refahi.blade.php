@extends('user.layouts.adminLayout')

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

                @include('user.layouts.top-menue');

                <div class="container">
                    <div class="row clearfix">

                        <div class="container-fluid">

                            <div class="card">

                                <div class="body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-custom spacing8">
                                            <thead>
                                            <tr>
                                                <th>ردیف</th>
                                                <th>عنوان</th>
                                                <th>قیمت</th>
                                                <th>اطلاعات</th>
                                                <th>مشاهدی</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th>ردیف</th>
                                                <th>عنوان</th>
                                                <th>قیمت</th>
                                                <th>اطلاعات</th>
                                                <th>مشاهدی</th>
                                            </tr>
                                            </tfoot>
                                            <tbody>

                                            <tr v-for="row in all_kadamat_refahi.data">
                                                <td>@{{ row . id }}</td>
                                                <td>@{{ row . title }}</td>
                                                <td>@{{ row . price }}</td>
                                                <td>@{{ row . information }}</td>
                                                <td>
                                                    <a :href="'/home/shop_single/'+row.id_kadamat_refahi">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                </td>


                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                                <pagination
                                    :data="all_kadamat_refahi"
                                    @pagination-change-page="get_kadamat_refahi"
                                >

                                </pagination>
                                <loading :active.sync="isLoading" color="#fff" background-color="#000"
                                         loader="dots"></loading>
                            </div>


                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>


@endsection















