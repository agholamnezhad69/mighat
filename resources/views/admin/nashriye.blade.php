@extends('admin.layouts.adminLayout')

@section('content')



    <div id="main-content">


        <div class="container-fluid">


            <div class="row clearfix">
          {{--      <div v-if="formChange==1" class="col-lg-12 col-md-12 col-sm-12">
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
                            <div>
                                <button @click="saveNashriye(0)" class="next_form">ذخیره</button>
                            </div>
                            <div class="clearfix"></div>
                            <form id="wizard_with_validation" method="POST">
                                --}}{{--<h3 style="text-align: center">نشریه ها</h3>--}}{{--

                                <fieldset>
                                    <div class="row clearfix">


                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <input
                                                    style="text-align: center;margin-top: 10px"
                                                    type="text" class="form-control" placeholder="
                                                    عنوان نشریه "
                                                    v-model="nashriye_title">
                                            </div>
                                        </div>


                                        <div class="col-md-3 col-lg-3" style="display: inline-block">
                                            <div class="form-group">
                                                <example-component1 @addrfilm="funcaddrfilm1"></example-component1>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-3" style="display: inline-block">
                                            <div class="form-group">
                                                <example-component1 @addrfilm="funcaddrfilm1"></example-component1>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-3" style="display: inline-block">
                                            <div class="form-group">
                                                <example-component1 @addrfilm="funcaddrfilm1"></example-component1>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-3" style="display: inline-block">
                                            <div class="form-group">
                                                <example-component1 @addrfilm="funcaddrfilm1"></example-component1>
                                            </div>
                                        </div>

                                    </div>
                                </fieldset>


                            </form>
                        </div>
                    </div>
                </div>--}}
                <div  class="col-lg-12 col-md-12 col-sm-12">
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
                            <div>
                                <button @click="saveNashriye()" class="next_form">ذخیره</button>
                            </div>
                            <div class="clearfix"></div>
                            <form id="wizard_with_validation" method="POST">
                                {{--<h3 style="text-align: center">نشریه ها</h3>--}}

                                <fieldset>
                                    <div class="row clearfix">


                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <input
                                                    style="text-align: center;margin-top: 10px"
                                                    type="text" class="form-control" placeholder="
                                                    عنوان نشریه "
                                                    v-model="nashriye_title">
                                            </div>
                                        </div>


                                        <div class="col-md-3 col-lg-3" style="display: inline-block;text-align: center">
                                            <div class="form-group">
                                                <example-component1_0 @addrfilm="funcaddrfilm1_0"></example-component1_0>
                                            </div>

                                        </div>
                                        <div class="col-md-3 col-lg-3" style="display: inline-block;text-align: center">
                                            <div class="form-group">
                                                <example-component1_1 @addrfilm="funcaddrfilm1_1"></example-component1_1>
                                            </div>

                                        </div>
                                        <div class="col-md-3 col-lg-3" style="display: inline-block;text-align: center">
                                            <div class="form-group">
                                                <example-component1_2 @addrfilm="funcaddrfilm1_2"></example-component1_2>
                                            </div>

                                        </div>
                                        <div class="col-md-3 col-lg-3" style="display: inline-block;text-align: center">
                                            <div class="form-group">
                                                <example-component1_3 @addrfilm="funcaddrfilm1_3"></example-component1_3>

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
