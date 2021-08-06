@extends('admin.layouts.adminLayout')

@section('content')


    <div id="main-content">
        <div class="block-header" v-if="ediFormNashriye==0">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1>مشاهده نشریه ها</h1>

                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <span @click="deleteNashriye" class="delete_cat">حذف نشریه</span>
                </div>
            </div>
        </div>

        <div v-if="ediFormNashriye==0" class="container-fluid">

            <div class="row clearfix">

                <div  class="col-lg-12">
                    <div class="card">

                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover table-custom spacing8">
                                    <thead>
                                    <tr>
                                        <th>ردیف</th>
                                        <th>عنوان نشریه</th>
                                        <th>ویرایش نشریه</th>
                                        <th>حذف نشریه</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>ردیف</th>
                                        <th>عنوان نشریه</th>
                                        <th>ویرایش نشریه</th>
                                        <th>حذف نشریه</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>

                                    <tr v-for="row in all_nashriye_always">
                                        <td>@{{ row . id }}</td>
                                        <td>@{{ row . title }}</td>
                                        <td>
                                            <div class="fancy-checkbox">
                                                <label><i @click="funcEdiFormNashriye(1,row.title,row.groupp,row.id)"
                                                          class="fa fa-edit"></i></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="fancy-checkbox">
                                                <label>
                                                    <input
                                                        v-model="nashriye_ids_delete[row.id]"
                                                        @click="removeCatSelect()"
                                                        type="checkbox"><span></span></label>
                                            </div>
                                        </td>


                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div v-if="ediFormNashriye==1" class="container-fluid">

            <div class="row clearfix">


                <div  class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">

                        <div class="body wizard_validation">
                            <div>
                                <button @click="saveNashriye()" class="next_form">ذخیره</button>
                                <button @click="funcEdiFormNashriyeCansel" class="next_form">انصراف</button>
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
                                            <img width="300px" height="300px"  :src="'/nashriye/'+film_addr1[0]" alt="User Profile Picture"
                                                 class="user-photo">
                                        </div>
                                        <div class="col-md-3 col-lg-3" style="display: inline-block;text-align: center">
                                            <div class="form-group">
                                                <example-component1_1 @addrfilm="funcaddrfilm1_1"></example-component1_1>
                                            </div>
                                            <img width="300px" height="300px"  :src="'/nashriye/'+film_addr1[1]" alt="User Profile Picture"
                                                 class="user-photo">
                                        </div>
                                        <div class="col-md-3 col-lg-3" style="display: inline-block;text-align: center">
                                            <div class="form-group">
                                                <example-component1_2 @addrfilm="funcaddrfilm1_2"></example-component1_2>
                                            </div>
                                            <img width="300px" height="300px"  :src="'/nashriye/'+film_addr1[2]" alt="User Profile Picture"
                                                 class="user-photo">
                                        </div>
                                        <div class="col-md-3 col-lg-3" style="display: inline-block;text-align: center">
                                            <div class="form-group">
                                                <example-component1_3 @addrfilm="funcaddrfilm1_3"></example-component1_3>

                                            </div>
                                            <img width="300px" height="300px" :src="'/nashriye/'+film_addr1[3]" alt="User Profile Picture"
                                                 class="user-photo">
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
