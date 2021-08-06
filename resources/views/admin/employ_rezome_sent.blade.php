@extends('admin.layouts.adminLayout')

@section('content')


    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1>رزومه ها</h1>
                </div>
                <div class="col-md-12 col-sm-12 text-right">
                    <button style="float: right ;margin-top: 20px" v-if="ediFormRezome==1" @click="employSelectCancel()"
                            class="next_form">انصراف
                    </button>
                </div>
            </div>
        </div>

        <div class="container-fluid">

            <div class="row clearfix">

                <div v-if="ediFormRezome==0" class="col-lg-12">
                    <div class="card">

                        <div class="body">
                            <div class="table table-hover table-custom spacing8">
                                <table style="background-color: unset"
                                       class="table table-striped table-hover dataTable js-exportable">
                                    <thead>
                                    <tr>
                                        <th>ردیف</th>
                                        <th>عنوان رزومه</th>
                                        {{--   <th>عکس</th>--}}
                                        <th>انتخاب</th>

                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>ردیف</th>
                                        <th>عنوان رزومه</th>
                                        {{-- <th>عکس</th>--}}
                                        <th>انتخاب</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>

                                    <tr v-for="row in all_employment.data">
                                        <td>@{{ row . id }}</td>
                                        <td>@{{ row . title }}</td>
                                        {{-- <td class="w60">
                                             <img src="/assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="w35 rounded" data-original-title="Avatar Name">
                                         </td>--}}
                                        <td>
                                            {{--  <div class="fancy-checkbox">
                                                  <label><input @click="employSelect(row.id)"
                                                                v-model="employments_select[row.id]"
                                                                type="checkbox"><span>چک باکس فانتزی 1</span></label>
                                              </div>--}}
                                            <i @click="employSelect(row.id)"
                                               class="fa fa-eye"></i>
                                        </td>

                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <pagination
                        :data="all_employment"
                        @pagination-change-page="employ_rezome_sent"
                    >
                </div>
                <div v-if="ediFormRezome==1" v-for="row in employment_user_rezome" class="col-lg-3 col-md-6">
                    <a :href="'/uploads/employment_rezome/'+row.rezome_file" target="_blank" class="card">
                        <div class="body">
                            <div class="d-flex align-items-center">
                                <div class="icon-in-bg bg-indigo text-white rounded-circle"><i
                                        class="fa fa-briefcase"></i></div>
                                <div class="ml-4">
                                    <span>رزومه</span>
                                    <h4 class="mb-0 font-weight-medium" style="margin-top: 11px;font-size: 16px">@{{
                                        row.currentTime }}</h4>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>

        </div>
    </div>


@endsection
