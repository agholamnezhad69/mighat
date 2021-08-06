@extends('admin.layouts.adminLayout')

@section('content')
    <style>

    </style>

    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1>داشبورد</h1>
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
                </div>
            </div>
        </div>

        <div class="container-fluid" >

            <div class="row clearfix">
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="body p-4">
                            <div class="row clearfix">
                                <div class="col-auto">
                                    <div class="stamp stamp-md bg-warning">
                                        <i class="fa fa-database"></i>
                                    </div>
                                </div>
                                <div class="col text-right">
                                    <div class="small text-muted" style="text-align: center;">تعداد دانشجویان</div>
                                    <div class="h4 m-0" style="text-align: center;margin-top: 5px">@{{ usersNumber }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="body p-4">
                            <div class="row clearfix">
                                <div class="col-auto">
                                    <div class="stamp stamp-md bg-warning">
                                        <i class="fa fa-database"></i>
                                    </div>
                                </div>
                                <div class="col text-right">
                                    <div class="small text-muted" style="text-align: center;">تعداد دانشجویان</div>
                                    <div class="h4 m-0" style="text-align: center;margin-top: 5px">@{{ usersNumber }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="body p-4">
                            <div class="row clearfix">
                                <div class="col-auto">
                                    <div class="stamp stamp-md bg-warning">
                                        <i class="fa fa-database"></i>
                                    </div>
                                </div>
                                <div class="col text-right">
                                    <div class="small text-muted" style="text-align: center;">تعداد دانشجویان</div>
                                    <div class="h4 m-0" style="text-align: center;margin-top: 5px">@{{ usersNumber }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="body p-4">
                            <div class="row clearfix">
                                <div class="col-auto">
                                    <div @click="exportToPDFDashboard" style="cursor: pointer" class="stamp stamp-md bg-warning">
                                        <i  class="fa fa-database"></i>
                                    </div>
                                </div>
                                <div class="col text-right">
                                    <div class="small text-muted" style="text-align: center;">تعداد دانشجویان</div>
                                    <div class="h4 m-0" style="text-align: center;margin-top: 5px">@{{ usersNumber }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix dashboard" ref="document" >
                <div class="col-lg-6 col-md-6"  >
                    <div class="card">
<!--                        <div class="header">
                            <h2>وضعیت نظام وظیفه</h2>
                        </div>-->
                        <div class="body">
                            <chart-component ref="chart" @get_optionschart="get_charts"
                                             :optionschart="optionschart"></chart-component>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="card">
<!--                        <div class="header">
                            <h2>وضعیت تاهل</h2>
                        </div>-->
                        <div class="body">
                            <chart-component_v_tahol ref="chart_v_tahol"
                                                     :optionschart_v_tahol="optionschart_v_tahol"></chart-component_v_tahol>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="card">
<!--                        <div class="header">
                            <h2>وضعیت ارتباط با اتحادیه</h2>
                        </div>-->
                        <div class="body">
                            <chart-component_v_ertebat_ba_etehadiye ref="chart_v_ertebat_ba_etehadiye"
                                                                    :optionschart_v_ertebat_ba_etehadiye="optionschart_v_ertebat_ba_etehadiye"></chart-component_v_ertebat_ba_etehadiye>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="card">
<!--                        <div class="header">
                            <h2>نوع دانشگاه</h2>
                        </div>-->
                        <div class="body">
                            <chart-component_noe_daneshkah ref="chart_noe_daneshkah"
                                                           :optionschart_noe_daneshkah="optionschart_noe_daneshkah"></chart-component_noe_daneshkah>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="card">
<!--                        <div class="header">
                            <h2>استان محل تحصیل</h2>
                        </div>-->
                        <div class="body">
                            <chart-component_ostan_tahsil ref="chart_ostan_tahsil"
                                                          :optionschart_ostan_tahsil="optionschart_ostan_tahsil"></chart-component_ostan_tahsil>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="card">
<!--                        <div class="header">
                            <h2>وضعیت تحصیلی</h2>
                        </div>-->
                        <div class="body">
                            <chart-component_v_tahsili ref="chart_v_tahsili"
                                                       :optionschart_v_tahsili="optionschart_v_tahsili"></chart-component_v_tahsili>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="card">
<!--                        <div class="header">
                            <h2>در حال تحصیل</h2>
                        </div>-->
                        <div class="body">
                            <chart-component_dar_hale_tahsil ref="chart_dar_hale_tahsil"
                                                             :optionschart_dar_hale_tahsil="optionschart_dar_hale_tahsil"></chart-component_dar_hale_tahsil>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="card">
<!--                        <div class="header">
                            <h2>تحصیلات دانشگاهی</h2>
                        </div>-->
                        <div class="body">
                            <chart-component_tahsilat_daneshkah ref="chart_tahsilat_daneshkah"
                                                                :optionschart_tahsilat_daneshkah="optionschart_tahsilat_daneshkah"></chart-component_tahsilat_daneshkah>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="card">
<!--                        <div class="header">
                            <h2>تحصیلات حوزوی</h2>
                        </div>-->
                        <div class="body">
                            <chart-component_tahsilat_hoze ref="chart_tahsilat_hoze"
                                                           :optionschart_tahsilat_hoze="optionschart_tahsilat_hoze"></chart-component_tahsilat_hoze>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="card">
<!--                        <div class="header">
                            <h2>دوره قرارگاه ملی </h2>
                        </div>-->
                        <div class="body">
                            <chart-component_dore_tahsili ref="chart_dore_tahsili"
                                                          :optionschart_dore_tahsili="optionschart_dore_tahsili"></chart-component_dore_tahsili>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

@endsection
<script>
    import ChartComponent_v_tahol from "../../js/components/ChartComponent_v_tahol";
    import ChartComponent_ostan_tahsil from "../../js/components/ChartComponent_ostan_tahsil";

    export default {
        components: {ChartComponent_ostan_tahsil, ChartComponent_v_tahol}
    }
</script>
