@extends('admin.layouts.adminLayout')

@section('content')

    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1>گزارش گیری کلی</h1>
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

        <div class="container-fluid">

            <div class="row clearfix">
                {{-- <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>جدول پایه <small>مثال اصلی بدون کلاس های اصلاح اضافی</small></h2>
                            <ul class="header-dropdown dropdown">

                                <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>
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
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover js-basic-example dataTable table-custom spacing5">
                                    <thead>
                                        <tr>
                                            <th>نام</th>
                                            <th>موقعیت</th>
                                            <th>اداره</th>
                                            <th>سن</th>
                                            <th>تاریخ شروع</th>
                                            <th>حقوق</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>نام</th>
                                            <th>موقعیت</th>
                                            <th>اداره</th>
                                            <th>سن</th>
                                            <th>تاریخ شروع</th>
                                            <th>حقوق</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            <td>$86,000</td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2012/03/29</td>
                                            <td>$433,060</td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>$162,700</td>
                                        </tr>
                                        <tr>
                                            <td>Brielle Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2012/12/02</td>
                                            <td>$372,000</td>
                                        </tr>
                                        <tr>
                                            <td>Herrod Chandler</td>
                                            <td>Sales Assistant</td>
                                            <td>San Francisco</td>
                                            <td>59</td>
                                            <td>2012/08/06</td>
                                            <td>$137,500</td>
                                        </tr>
                                        <tr>
                                            <td>Rhona Davidson</td>
                                            <td>Integration Specialist</td>
                                            <td>Tokyo</td>
                                            <td>55</td>
                                            <td>2010/10/14</td>
                                            <td>$327,900</td>
                                        </tr>
                                        <tr>
                                            <td>Colleen Hurst</td>
                                            <td>Javascript Developer</td>
                                            <td>San Francisco</td>
                                            <td>39</td>
                                            <td>2009/09/15</td>
                                            <td>$205,500</td>
                                        </tr>
                                        <tr>
                                            <td>Sonya Frost</td>
                                            <td>Software Engineer</td>
                                            <td>Edinburgh</td>
                                            <td>23</td>
                                            <td>2008/12/13</td>
                                            <td>$103,600</td>
                                        </tr>
                                        <tr>
                                            <td>Jena Gaines</td>
                                            <td>اداره Manager</td>
                                            <td>London</td>
                                            <td>30</td>
                                            <td>2008/12/19</td>
                                            <td>$90,560</td>
                                        </tr>
                                        <tr>
                                            <td>Quinn Flynn</td>
                                            <td>Support Lead</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2013/03/03</td>
                                            <td>$342,000</td>
                                        </tr>
                                        <tr>
                                            <td>Charde Marshall</td>
                                            <td>Regional Director</td>
                                            <td>San Francisco</td>
                                            <td>36</td>
                                            <td>2008/10/16</td>
                                            <td>$470,600</td>
                                        </tr>
                                        <tr>
                                            <td>Haley Kennedy</td>
                                            <td>Senior Marketing Designer</td>
                                            <td>London</td>
                                            <td>43</td>
                                            <td>2012/12/18</td>
                                            <td>$313,500</td>
                                        </tr>
                                        <tr>
                                            <td>Tatyana Fitzpatrick</td>
                                            <td>Regional Director</td>
                                            <td>London</td>
                                            <td>19</td>
                                            <td>2010/03/17</td>
                                            <td>$385,750</td>
                                        </tr>
                                        <tr>
                                            <td>Michael Silva</td>
                                            <td>Marketing Designer</td>
                                            <td>London</td>
                                            <td>66</td>
                                            <td>2012/11/27</td>
                                            <td>$198,500</td>
                                        </tr>
                                        <tr>
                                            <td>Paul Byrd</td>
                                            <td>Chief Financial ادارهr (CFO)</td>
                                            <td>New York</td>
                                            <td>64</td>
                                            <td>2010/06/09</td>
                                            <td>$725,000</td>
                                        </tr>
                                        <tr>
                                            <td>Gloria Little</td>
                                            <td>Systems Administrator</td>
                                            <td>New York</td>
                                            <td>59</td>
                                            <td>2009/04/10</td>
                                            <td>$237,500</td>
                                        </tr>
                                        <tr>
                                            <td>Bradley Greer</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>41</td>
                                            <td>2012/10/13</td>
                                            <td>$132,000</td>
                                        </tr>
                                        <tr>
                                            <td>Dai Rios</td>
                                            <td>Personnel Lead</td>
                                            <td>Edinburgh</td>
                                            <td>35</td>
                                            <td>2012/09/26</td>
                                            <td>$217,500</td>
                                        </tr>
                                        <tr>
                                            <td>Jenette Caldwell</td>
                                            <td>Development Lead</td>
                                            <td>New York</td>
                                            <td>30</td>
                                            <td>2011/09/03</td>
                                            <td>$345,000</td>
                                        </tr>
                                        <tr>
                                            <td>Yuri Berry</td>
                                            <td>Chief Marketing ادارهr (CMO)</td>
                                            <td>New York</td>
                                            <td>40</td>
                                            <td>2009/06/25</td>
                                            <td>$675,000</td>
                                        </tr>
                                        <tr>
                                            <td>Caesar Vance</td>
                                            <td>Pre-Sales Support</td>
                                            <td>New York</td>
                                            <td>21</td>
                                            <td>2011/12/12</td>
                                            <td>$106,450</td>
                                        </tr>
                                        <tr>
                                            <td>Doris Wilder</td>
                                            <td>Sales Assistant</td>
                                            <td>Sidney</td>
                                            <td>23</td>
                                            <td>2010/09/20</td>
                                            <td>$85,600</td>
                                        </tr>
                                        <tr>
                                            <td>Angelica Ramos</td>
                                            <td>Chief Executive ادارهr (CEO)</td>
                                            <td>London</td>
                                            <td>47</td>
                                            <td>2009/10/09</td>
                                            <td>$1,200,000</td>
                                        </tr>
                                        <tr>
                                            <td>Gavin Joyce</td>
                                            <td>Developer</td>
                                            <td>Edinburgh</td>
                                            <td>42</td>
                                            <td>2010/12/22</td>
                                            <td>$92,575</td>
                                        </tr>
                                        <tr>
                                            <td>Jennifer Chang</td>
                                            <td>Regional Director</td>
                                            <td>Singapore</td>
                                            <td>28</td>
                                            <td>2010/11/14</td>
                                            <td>$357,650</td>
                                        </tr>
                                        <tr>
                                            <td>Brenden Wagner</td>
                                            <td>Software Engineer</td>
                                            <td>San Francisco</td>
                                            <td>28</td>
                                            <td>2011/06/07</td>
                                            <td>$206,850</td>
                                        </tr>
                                        <tr>
                                            <td>Fiona Green</td>
                                            <td>Chief Operating ادارهr (COO)</td>
                                            <td>San Francisco</td>
                                            <td>48</td>
                                            <td>2010/03/11</td>
                                            <td>$850,000</td>
                                        </tr>
                                        <tr>
                                            <td>Shou Itou</td>
                                            <td>Regional Marketing</td>
                                            <td>Tokyo</td>
                                            <td>20</td>
                                            <td>2011/08/14</td>
                                            <td>$163,000</td>
                                        </tr>
                                        <tr>
                                            <td>Michelle House</td>
                                            <td>Integration Specialist</td>
                                            <td>Sidney</td>
                                            <td>37</td>
                                            <td>2011/06/02</td>
                                            <td>$95,400</td>
                                        </tr>
                                        <tr>
                                            <td>Suki Burks</td>
                                            <td>Developer</td>
                                            <td>London</td>
                                            <td>53</td>
                                            <td>2009/10/22</td>
                                            <td>$114,500</td>
                                        </tr>
                                        <tr>
                                            <td>Prescott Bartlett</td>
                                            <td>Technical Author</td>
                                            <td>London</td>
                                            <td>27</td>
                                            <td>2011/05/07</td>
                                            <td>$145,000</td>
                                        </tr>
                                        <tr>
                                            <td>Gavin Cortez</td>
                                            <td>Team Leader</td>
                                            <td>San Francisco</td>
                                            <td>22</td>
                                            <td>2008/10/26</td>
                                            <td>$235,500</td>
                                        </tr>
                                        <tr>
                                            <td>Martena Mccray</td>
                                            <td>Post-Sales support</td>
                                            <td>Edinburgh</td>
                                            <td>46</td>
                                            <td>2011/03/09</td>
                                            <td>$324,050</td>
                                        </tr>
                                        <tr>
                                            <td>Unity Butler</td>
                                            <td>Marketing Designer</td>
                                            <td>San Francisco</td>
                                            <td>47</td>
                                            <td>2009/12/09</td>
                                            <td>$85,675</td>
                                        </tr>
                                        <tr>
                                            <td>Howard Hatfield</td>
                                            <td>اداره Manager</td>
                                            <td>San Francisco</td>
                                            <td>51</td>
                                            <td>2008/12/16</td>
                                            <td>$164,500</td>
                                        </tr>
                                        <tr>
                                            <td>Hope Fuentes</td>
                                            <td>Secretary</td>
                                            <td>San Francisco</td>
                                            <td>41</td>
                                            <td>2010/02/12</td>
                                            <td>$109,850</td>
                                        </tr>
                                        <tr>
                                            <td>Vivian Harrell</td>
                                            <td>Financial Controller</td>
                                            <td>San Francisco</td>
                                            <td>62</td>
                                            <td>2009/02/14</td>
                                            <td>$452,500</td>
                                        </tr>
                                        <tr>
                                            <td>Timothy Mooney</td>
                                            <td>اداره Manager</td>
                                            <td>London</td>
                                            <td>37</td>
                                            <td>2008/12/11</td>
                                            <td>$136,200</td>
                                        </tr>
                                        <tr>
                                            <td>Jackson Bradshaw</td>
                                            <td>Director</td>
                                            <td>New York</td>
                                            <td>65</td>
                                            <td>2008/09/26</td>
                                            <td>$645,750</td>
                                        </tr>
                                        <tr>
                                            <td>Olivia Liang</td>
                                            <td>Support Engineer</td>
                                            <td>Singapore</td>
                                            <td>64</td>
                                            <td>2011/02/03</td>
                                            <td>$234,500</td>
                                        </tr>
                                        <tr>
                                            <td>Bruno Nash</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>38</td>
                                            <td>2011/05/03</td>
                                            <td>$163,500</td>
                                        </tr>
                                        <tr>
                                            <td>Sakura Yamamoto</td>
                                            <td>Support Engineer</td>
                                            <td>Tokyo</td>
                                            <td>37</td>
                                            <td>2009/08/19</td>
                                            <td>$139,575</td>
                                        </tr>
                                        <tr>
                                            <td>Thor Walton</td>
                                            <td>Developer</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2013/08/11</td>
                                            <td>$98,540</td>
                                        </tr>
                                        <tr>
                                            <td>Finn Camacho</td>
                                            <td>Support Engineer</td>
                                            <td>San Francisco</td>
                                            <td>47</td>
                                            <td>2009/07/07</td>
                                            <td>$87,500</td>
                                        </tr>
                                        <tr>
                                            <td>Serge Baldwin</td>
                                            <td>Data Coordinator</td>
                                            <td>Singapore</td>
                                            <td>64</td>
                                            <td>2012/04/09</td>
                                            <td>$138,575</td>
                                        </tr>
                                        <tr>
                                            <td>Zenaida Frank</td>
                                            <td>Software Engineer</td>
                                            <td>New York</td>
                                            <td>63</td>
                                            <td>2010/01/04</td>
                                            <td>$125,250</td>
                                        </tr>
                                        <tr>
                                            <td>Zorita Serrano</td>
                                            <td>Software Engineer</td>
                                            <td>San Francisco</td>
                                            <td>56</td>
                                            <td>2012/06/01</td>
                                            <td>$115,000</td>
                                        </tr>
                                        <tr>
                                            <td>Jennifer Acosta</td>
                                            <td>Junior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>43</td>
                                            <td>2013/02/01</td>
                                            <td>$75,650</td>
                                        </tr>
                                        <tr>
                                            <td>Cara Stevens</td>
                                            <td>Sales Assistant</td>
                                            <td>New York</td>
                                            <td>46</td>
                                            <td>2011/12/06</td>
                                            <td>$145,600</td>
                                        </tr>
                                        <tr>
                                            <td>Hermione Butler</td>
                                            <td>Regional Director</td>
                                            <td>London</td>
                                            <td>47</td>
                                            <td>2011/03/21</td>
                                            <td>$356,250</td>
                                        </tr>
                                        <tr>
                                            <td>Lael Greer</td>
                                            <td>Systems Administrator</td>
                                            <td>London</td>
                                            <td>21</td>
                                            <td>2009/02/27</td>
                                            <td>$103,500</td>
                                        </tr>
                                        <tr>
                                            <td>Jonas Alexander</td>
                                            <td>Developer</td>
                                            <td>San Francisco</td>
                                            <td>30</td>
                                            <td>2010/07/14</td>
                                            <td>$86,500</td>
                                        </tr>
                                        <tr>
                                            <td>Shad Decker</td>
                                            <td>Regional Director</td>
                                            <td>Edinburgh</td>
                                            <td>51</td>
                                            <td>2008/11/13</td>
                                            <td>$183,000</td>
                                        </tr>
                                        <tr>
                                            <td>Michael Bruce</td>
                                            <td>Javascript Developer</td>
                                            <td>Singapore</td>
                                            <td>29</td>
                                            <td>2011/06/27</td>
                                            <td>$183,000</td>
                                        </tr>
                                        <tr>
                                            <td>Donna Snider</td>
                                            <td>Customer Support</td>
                                            <td>New York</td>
                                            <td>27</td>
                                            <td>2011/01/25</td>
                                            <td>$112,000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-12">
                    <div class="card">
                        <div v-if="student_edit_form==0" class="header">
                            {{-- <h2>ابزار جدول<small>مثال اصلی بدون کلاس های اصلاح
                                    اضافی</small></h2> --}}
                            <div class="col-md-12">
                                <div style="float: right" class="col-md-4">

                                    <div class="form-group  my-form-group">
                                        <label class="">وضعیت نظام وظیقه </label>
                                        <select @change="filter_all_user()" class="mdb-select md-form"
                                                v-model="v_nv_id">

                                            <option :value="0" selected>انتخاب کنید</option>

                                            <option v-for="row in v_nv" :value="row.id">@{{ row . attr }}</option>

                                        </select>

                                    </div>
                                </div>
                                <div style="float: right" class="col-md-4">
                                    <div class="form-group  my-form-group">
                                        <label class="">وضعیت تاهل </label>
                                        <select @change="filter_all_user()" {{--
                                            :disabled="isFormEdit == 1" --}}
                                        class="mdb-select md-form" v-model="v_t_id">
                                            <option :value="0" selected>بدون انتخاب</option>
                                            <option v-for="row in v_t" :value="row.id">@{{ row . attr }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div style="float: right" class="col-md-4">
                                    <div class="form-group  my-form-group">
                                        <label>استان محل تحصیل </label>
                                        <v-select class="omt" :options="optionSelectOstan" searchable="true"
                                                  v-model="ostan_id"/>
                                    </div>
                                </div>


                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12">
                                <div style="float: right" class="col-md-4">
                                    <div class="form-group my-form-group">
                                        <label class="my-label">دوره قرارگاه ملی </label>
                                        <select @change="filter_all_user()" class="mdb-select md-form"
                                                v-model="dore_id">
                                            <option :value="0" selected>انتخاب کنید</option>
                                            <option v-for="row in dore" :value="row.id">@{{ row . attr }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div style="float: right" class="col-md-4">
                                    <div class="form-group my-form-group">
                                        <label>وضعیت ارتباط با اتحادیه </label>
                                        <select @change="filter_all_user()" class="mdb-select md-form"
                                                v-model="v_er_ba_et_id">
                                            <option :value="0" selected>انتخاب کنید</option>
                                            <option v-for="row in v_er_ba_et" :value="row.id">@{{ row . attr }}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div style="float: right" class="col-md-4">
                                    <div class="form-group my-form-group">
                                        <label class="">در حال تحصیل </label>
                                        <select @change="filter_all_user()" class="mdb-select md-form"
                                                v-model="dar_h_t_id">
                                            <option :value="0" selected>انتخاب کنید</option>
                                            <option v-for="row in dar_h_t" :value="row.id">@{{ row . attr }}
                                            </option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12">

                                <div style="float: right" class="col-md-4">

                                    <div class="form-group my-form-group">


                                        <label class="">ووضعیت تحصیلی </label>
                                        <select @change="filter_all_user()" class="mdb-select md-form"
                                                v-model="v_tt_id">

                                            <option :value="0" selected>انتخاب کنید</option>

                                            <option v-for="row in v_tt" :value="row.id">@{{ row . attr }}</option>

                                        </select>

                                    </div>
                                </div>
                                <div style="float: right" class="col-md-4">

                                    <div class="form-group my-form-group">


                                        <label class="">تحصیلات دانشگاهی </label>
                                        <select @change="filter_all_user()" class="mdb-select md-form" v-model="t_d_id">

                                            <option :value="0" selected>انتخاب کنید</option>

                                            <option v-for="row in t_d" :value="row.id">@{{ row . attr }}
                                            </option>

                                        </select>


                                    </div>
                                </div>
                                <div style="float: right" class="col-md-4">
                                    <div class="form-group my-form-group">
                                        <label class="">نام دانشگاه </label>
                                        <v-select :options="optionSelectdaneshgah" searchable="true" v-model="d_id"/>
                                    </div>
                                </div>

                            </div>


                            <div class="clearfix"></div>
                            <div class="col-md-12" style="display: inline-block">
                                <div style="float: right" class="col-md-4">
                                    <div class="form-group my-form-group">
                                        <label class="">رشته </label>
                                        <v-select :options="optionSelectReshte" searchable="true" v-model="r_id"/>
                                    </div>
                                </div>
                                <div style="float: right" class="col-md-4">
                                    <div class="form-group my-form-group">
                                        <label class="">تحصیلات حوزوی </label>
                                        <select @change="filter_all_user()" class="mdb-select md-form" v-model="t_h_id">

                                            <option :value="0" selected>انتخاب کنید</option>

                                            <option v-for="row in t_h" :value="row.id">@{{ row . attr }}
                                            </option>

                                        </select>
                                    </div>
                                </div>
                                <div style="float: right" class="col-md-4">
                                    <div class="form-group my-form-group">
                                        <label class="">استان حوزه </label>
                                        {{-- <select class="mdb-select md-form"
                                            v-model="ostan_h_id">
                                            <option value="" disabled selected>انتخاب کنید</option>
                                            <option v-for="row in ostan" :value="row.id">@{{ row . attr }}
                                            </option>
                                        </select> --}}
                                        <v-select :options="optionSelectOstan" searchable="true" v-model="ostan_h_id"/>
                                    </div>
                                </div>

                            </div>

                            <div class="clearfix"></div>
                            <div class="col-md-12" style="display: inline-block">

                                <div style="float: right" class="col-md-4">
                                    <div class="form-group my-form-group">
                                        <label class="">رشته تخصصی </label>
                                        <select @change="filter_all_user()" class="mdb-select md-form" v-model="r_t_id">
                                            <option :value="0" selected>انتخاب کنید</option>
                                            <option v-for="row in r_t" :value="row.id">
                                                @{{ row . attr }}
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div style="float: right" class="col-md-4">
                                    <div class="form-group my-form-group">
                                        <label class="">حوزه خدمت </label>
                                        <select @change="test()" class="mdb-select md-form" v-model="h_kh_id">
                                            <option :value="0" selected>انتخاب کنید</option>
                                            <option v-for="row in h_kh" :value="row.id">@{{ row . attr }}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div style="float: right" class="col-md-4">
                                    <div class="form-group my-form-group">
                                        <label class="">زیر مجوعه </label>
                                        <select @change="filter_all_user()" class="mdb-select md-form"
                                                v-model="h_kh_sub_id">
                                            <option :value="0" selected>انتخاب کنید</option>
                                            <option v-for="row in h_kh_sub" :value="row.id">
                                                @{{ row . attr }}
                                            </option>
                                        </select>
                                    </div>
                                </div>


                            </div>

                            <div class="clearfix"></div>


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
                        <div class="body body1">
                            <div v-if="student_edit_form==0" class="table-responsive">
                                <export-excel :data="all_users" style="display: inline-block;" :fields="json_fields"
                                              name="students_file">
                                    <button style="margin-top: 42px;display:inline-block;" type="button"
                                            class="btn btn-success">
                                        <i class="fas fa-file-excel"></i>
                                        اکسل
                                    </button>
                                </export-excel>
                                <table class="table table-hover table-custom spacing8">
                                    <thead>
                                    <tr>
                                        <th>نام</th>
                                        <th>نام خانوادگی</th>
                                        <th>نام پدر</th>
                                        <th>کد ملی</th>
                                        <th>تاریخ تولد</th>
                                        <th>تلفن همراه</th>
                                        <th>ویرایش</th>
                                        <th>ویژگی ها</th>
                                        <th>وضعیت نظام وظیفه</th>
                                        <th>وضعیت تاهل</th>
                                        <th>استان محل تحصیل</th>
                                        <th>دوره قرارگاه ملی</th>
                                        <th>وضعیت ارتباط با اتحادیه</th>
                                        <th>در حال تحصیل</th>
                                        <th>وضعیت تحصیلی</th>
                                        <th>تحصیلات دانشگاهی</th>
                                        <th>نام دانشگاه</th>
                                        <th>نوع دانشگاه</th>
                                        <th>رشته</th>
                                        <th>تحصیلات حوزوی</th>
                                        <th>استان حوزه</th>
                                        <th>رشته تخصصی</th>
                                        <th>حوزه خدمت</th>

                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>نام</th>
                                        <th>نام خانوادگی</th>
                                        <th>نام پدر</th>
                                        <th>کد ملی</th>
                                        <th>تاریخ تولد</th>
                                        <th>تلفن همراه</th>
                                        <th>ویرایش</th>
                                        <th>ویژگی ها</th>
                                        <th>وضعیت نظام وظیفه</th>
                                        <th>وضعیت تاهل</th>
                                        <th>استان محل تحصیل</th>
                                        <th>دوره قرارگاه ملی</th>
                                        <th>وضعیت ارتباط با اتحادیه</th>
                                        <th>در حال تحصیل</th>
                                        <th>وضعیت تحصیلی</th>
                                        <th>تحصیلات دانشگاهی</th>
                                        <th>نام دانشگاه</th>
                                        <th>نوع دانشگاه</th>
                                        <th>رشته</th>
                                        <th>تحصیلات حوزوی</th>
                                        <th>استان حوزه</th>
                                        <th>رشته تخصصی</th>
                                        <th>حوزه خدمت</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>

                                    <tr v-for="row in all_users">
                                        <td>@{{ row . name }}</td>
                                        <td>@{{ row . family }}</td>
                                        <td>@{{ row . fatherName }}</td>
                                        <td>@{{ row . nCod }}</td>
                                        <td>@{{ row . birthday }}</td>
                                        <td>@{{ row . mobile }}</td>
                                        <td><i class="fa fa-edit" @click="student_edit_form_func(row.id,row.name,
                                        row.family,row.fatherName,row.nCod,row.birthday,row.mobile,row.socialmobile	,row.telhome,row.user_name,row.pass)"></i>
                                        </td>
                                        <td><i class="fa fa-eye" @click="show_user_attr(row.id,row.name,
                                        row.family,row.fatherName,row.nCod,row.birthday,row.mobile,row.socialmobile	,row.telhome)"></i>
                                        </td>
                                        <td>@{{ row . v_n_v }}</td>
                                        <td>@{{ row . v_t }}</td>
                                        <td>@{{ row . o_m_t }}</td>
                                        <td>@{{ row . dore }}</td>
                                        <td>@{{ row . v_er_b_et }}</td>
                                        <td>@{{ row . dar_h_ta }}</td>
                                        <td>@{{ row . v_tahsil }}</td>
                                        <td>@{{ row . tahsilate_daneshkah }}</td>
                                        <td>@{{ row . n_daneshkah }}</td>
                                        <td>@{{ row . noe_daneshkah }}</td>
                                        <td>@{{ row . major }}</td>
                                        <td>@{{ row . tah_hoze }}</td>
                                        <td>@{{ row . o_h }}</td>
                                        <td>@{{ row . major_tahsil_hoze }}</td>
                                        <td>@{{ row . hoze_khedmat }}</td>

                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <fieldset v-if="student_edit_form==1">
                                <div class="row clearfix">
                                    <div class="col-12">
                                        <div class="form-group form-group-add-student">
                                            <button style="float: right;margin-bottom: 20px"
                                                    @click="student_edit_form=0"
                                                    class="next_form">
                                                انصراف
                                            </button>
                                            <button style="float: right" @click="addStudent()"
                                                    class="next_form">
                                                ویرایش
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group form-group-add-student">
                                            <input
                                                type="text"
                                                v-model="name" class="form-control"
                                                placeholder="نام *">

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group form-group-add-student">
                                            <input

                                                type="text" v-model="family"
                                                class="form-control"
                                                placeholder="نام خانوادگی"
                                            >
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group form-group-add-student">
                                            <input

                                                type="text" v-model="fatherName"
                                                class="form-control"
                                                placeholder="نام پدر "
                                            >
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group form-group-add-student">
                                            <input

                                                type="text" class="form-control"
                                                placeholder="شماره ملی "
                                                v-model="nCod">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group form-group-add-student">
                                            <date-picker
                                                v-model="birthday"/>


                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group form-group-add-student">
                                            <input

                                                type="text" class="form-control"
                                                placeholder="تلفن همراه "
                                                v-model="mobile">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group form-group-add-student">
                                            <input

                                                type="text" class="form-control"
                                                v-model="socialmobile"
                                                placeholder="تلفن شبکه اجتماعی"
                                            >
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group form-group-add-student">
                                            <input

                                                type="text" class="form-control"
                                                placeholder="تلفن منزل "
                                                v-model="telhome">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group form-group-add-student">
                                            <input
                                                disabled
                                                type="text" class="form-control"
                                                placeholder="نام کاربری "
                                                v-model="user_name">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group form-group-add-student">
                                            <input
                                                type="text" class="form-control"
                                                placeholder="پسورد "
                                                v-model="user_pass">
                                        </div>
                                    </div>


                                </div>
                            </fieldset>
                            <fieldset v-if="student_edit_form==2">
                                <div class="row clearfix" class="col-12">
                                    <div class="form-group form-group-add-student">
                                        <button style="float: right;margin-bottom: 20px"
                                                @click="addStudentCancel()"
                                                class="next_form">
                                            انصراف
                                        </button>
                                        <button style="float: right;margin-bottom: 20px"
                                                @click="exportToPDF"
                                                class="next_form">
                                            چاپ
                                        </button>
                                        <a style="float: right;margin-bottom: 20px"
                                           :href="'/admin/user_pdf/'+user_id"
                                           class="next_form">
                                            چاپ جدید
                                        </a>

                                    </div>
                                </div>
                                <div id="pdf" ref="document" class="row clearfix">

                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group form-group-add-student">

                                            <label class="label_studen_attr top-pdf">نام
                                                <span class="donoghte">  </span></label>
                                            <label class="top-pdf">@{{name}}</label>

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group form-group-add-student">

                                            <label class="label_studen_attr top-pdf">نام خانوادگی
                                                <span class="donoghte"> </span></label>
                                            <label class="top-pdf">@{{family}}</label>

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group form-group-add-student">

                                            <label class="label_studen_attr top-pdf">نام پدر
                                                <span class="donoghte">  </span></label>
                                            <label class="top-pdf">@{{fatherName}}</label>

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group form-group-add-student">

                                            <label class="label_studen_attr top-pdf">تاریخ تولد
                                                <span class="donoghte">  </span></label>
                                            <label class="top-pdf">@{{birthday}}</label>

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group form-group-add-student">

                                            <label class="label_studen_attr top-pdf">کد ملی
                                                <span class="donoghte">  </span></label>
                                            <label class="top-pdf">@{{nCod}}</label>

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group form-group-add-student">

                                            <label class="label_studen_attr top-pdf">شماره همراه
                                                <span class="donoghte">  </span></label>
                                            <label class="top-pdf">@{{mobile}}</label>

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group form-group-add-student">

                                            <label class="label_studen_attr top-pdf">شماره شبکه احتماعی
                                                <span class="donoghte">  </span></label>
                                            <label class="top-pdf">@{{socialmobile}}</label>

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group form-group-add-student">

                                            <label class="label_studen_attr top-pdf">تلفن منزل
                                                <span class="donoghte">  </span></label>
                                            <label class="top-pdf">@{{telhome}}</label>

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12" v-for="row in attr_parent_childs ">
                                        <div class="form-group form-group-add-student">

                                            <label class="label_studen_attr top-pdf">@{{row.parent_title}}
                                                <span class="donoghte">  </span></label>
                                            <label class="top-pdf">@{{row.attr}}</label>

                                        </div>
                                    </div>


                                    <div class="box-student-attr">
                                        <label class="label_studen_attr top-margin "> سوابق <span
                                                class="donoghte"> : </span>
                                        </label>
                                        <div v-for="row in form1_singleAttr"
                                             style="display: inline-block; padding: 5px 7px"
                                             v-if="row.id >=16  &&  row.id <=28"
                                             class="fancy-checkbox my-fancy-checkbox ">
                                            <label v-for="row1 in c_user_attr" class="label-account ">
                                                <span v-if="row.id==row1">@{{row.attr}}
                                                   <span
                                                       style="padding: 0 15px">|
                                                    </span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="box-student-attr">
                                        <label class="label_studen_attr">سابقه عضویت در سایر تشکل ها <span
                                                class="donoghte"> : </span></label>
                                        <div v-for="row in form1_singleAttr"
                                             style="display: inline-block; padding: 5px 7px"
                                             v-if="row.id >=91  &&  row.id <=94"
                                             class="fancy-checkbox my-fancy-checkbox">
                                            <label v-for="row1 in c_user_attr" class="label-account">
                                                <span v-if="row.id==row1">@{{row.attr}}
                                                <span style="padding: 0 15px">|</span>

                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="box-student-attr">
                                        <label class="label_studen_attr"> شغل<span class="donoghte"> : </span> </label>
                                        <div v-for="row in form1_singleAttr"
                                             style="display: inline-block; padding: 5px 7px"
                                             v-if="row.id >=96  &&  row.id <=106"
                                             class="fancy-checkbox my-fancy-checkbox">
                                            <label v-for="row1 in c_user_attr" class="label-account">
                                                <span v-if="row.id==row1">@{{row.attr}}
                                                <span
                                                    style="padding: 0 15px">|</span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="box-student-attr">
                                        <label class="label_studen_attr"> علمی و پژوهشی <span
                                                class="donoghte"> : </span> </label>
                                        <div v-for="row in form1_singleAttr"
                                             style="display: inline-block; padding: 5px 7px"
                                             v-if="row.id >=108  &&  row.id <=110"
                                             class="fancy-checkbox my-fancy-checkbox">
                                            <label v-for="row1 in c_user_attr" class="label-account">
                                                <span v-if="row.id==row1">
                                                    @{{row.attr}} <span
                                                        style="padding: 0 15px">|</span> </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="box-student-attr">
                                        <label class="label_studen_attr">رسانه ای <span class="donoghte"> : </span>
                                        </label>
                                        <div v-for="row in form1_singleAttr"
                                             style="display: inline-block; padding: 5px 7px"
                                             v-if="row.id >=112  &&  row.id <=122"
                                             class="fancy-checkbox my-fancy-checkbox">
                                            <label v-for="row1 in c_user_attr" class="label-account">
                                                <span v-if="row.id==row1">@{{row.attr}} <span
                                                        style="padding: 0 15px">|</span> </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="box-student-attr">
                                        <label class="label_studen_attr">مشاوره ای <span class="donoghte"> : </span>
                                        </label>
                                        <div v-for="row in form1_singleAttr"
                                             style="display: inline-block; padding: 5px 7px"
                                             v-if="row.id >=124  &&  row.id <=129"
                                             class="fancy-checkbox my-fancy-checkbox">
                                            <label
                                                v-for="row1 in c_user_attr"
                                                class="label-account">

                                                <span v-if="row.id==row1">@{{row.attr}} <span
                                                        style="padding: 0 15px">|</span> </span></label>
                                        </div>
                                    </div>
                                    <div class="box-student-attr">
                                        <label class="label_studen_attr">تعداد سال سابقه در عضویت در تشکل <span
                                                class="donoghte"> : </span> </label>

                                        <div
                                            style="display: inline-block; padding: 5px 7px"
                                            class="fancy-checkbox my-fancy-checkbox">
                                            <label class="label-account">
                                                <span>@{{t_s_s_o_t}} </span>
                                            </label>
                                        </div>


                                    </div>
                                    <div class="box-student-attr">


                                        <div
                                            style="display: inline-block; padding: 5px 7px"
                                            class="fancy-checkbox my-fancy-checkbox">
                                            <label class="label_studen_attr">کد دانشجوی <span
                                                    class="donoghte"> : </span> </label>
                                            <label class="label-account">
                                                <span>@{{k_d}} </span>
                                            </label>


                                        </div>


                                    </div>
                                    <div class="box-student-attr">


                                        <div
                                            style="display: inline-block; padding: 5px 7px"
                                            class="fancy-checkbox my-fancy-checkbox">

                                            <label class="label_studen_attr">نام حوزه <span class="donoghte"> : </span>
                                            </label>
                                            <label class="label-account">
                                                <span>@{{n_h}} </span>
                                            </label>

                                            <label class="label_studen_attr">کد مرکز خدمات : </label>
                                            <label class="label-account">
                                                <span>@{{k_m_kh}} </span>
                                            </label>
                                            <label class="label_studen_attr">کد مرکز مدیریت : </label>
                                            <label class="label-account">
                                                <span>@{{k_m_m}} </span>
                                            </label>


                                        </div>


                                    </div>
                                    <div class="box-student-attr">


                                        <div
                                            style="display: inline-block; padding: 5px 7px"
                                            class="fancy-checkbox my-fancy-checkbox">
                                            <label class="label_studen_attr"> عنوان دقیق شغل <span
                                                    class="donoghte"> : </span> </label>
                                            <label class="label-account">
                                                <span>@{{o_d_sh}} </span>
                                            </label>

                                        </div>


                                    </div>

                                    <div class="box-student-attr" v-if="article_arr.length > 0">
                                        <label class="label_studen_attr">مقالات<span class="donoghte"> : </span>
                                        </label>
                                        <br>
                                        <div v-for="row in article_arr"
                                             style="display: inline-block; padding: 5px 7px"
                                             class="fancy-checkbox my-fancy-checkbox">
                                            <label class="label-account">
                                                <span class="article-title">عنوان مقاله <span> : </span>  </span>
                                                <span style="padding: 0 15px">@{{row.article_title}}</span>

                                            </label>
                                            <label class="label-account">
                                                <span class="article-title">نوع مقاله <span> : </span>   </span>
                                                <span style="padding: 0 15px">@{{row.article_type}}</span>

                                            </label>
                                            <label class="label-account">
                                                <span class="article-title">سفارش  دهنده <span> : </span>   </span>
                                                <span style="padding: 0 15px">@{{row.article_customer}}</span>

                                            </label>
                                            <label class="label-account">
                                                <span class="article-title">تاریخ <span> : </span>  </span>
                                                <span style="padding: 0 15px">@{{row.article_date}}</span>

                                            </label>
                                            <br>
                                            <label class="label-account">
                                                <span class="article-title">توضیحات <span> : </span>  </span>
                                                <span class="article-desc"
                                                      style="padding: 0 15px">@{{row.article_desc}}</span>

                                            </label>
                                            <br>


                                        </div>
                                    </div>
                                    <div class="box-student-attr" v-if="talif_arr.length > 0">
                                        <label class="label_studen_attr">تالیف<span class="donoghte"> : </span>
                                        </label>
                                        <br>
                                        <div v-for="row in talif_arr"
                                             style="display: inline-block; padding: 5px 7px"
                                             class="fancy-checkbox my-fancy-checkbox">
                                            <label class="label-account">
                                                <span class="article-title">عنوان  <span> : </span>  </span>
                                                <span style="padding: 0 15px">@{{row.talif_title}}</span>

                                            </label>
                                            <label class="label-account">
                                                <span class="article-title">موضوع <span> : </span>   </span>
                                                <span style="padding: 0 15px">@{{row.talif_subject}}</span>

                                            </label>
                                            <label class="label-account">
                                                <span class="article-title">ناشر <span> : </span>   </span>
                                                <span style="padding: 0 15px">@{{row.talif_nasher}}</span>

                                            </label>
                                            <label class="label-account">
                                                <span class="article-title">سال <span> : </span>  </span>
                                                <span style="padding: 0 15px">@{{row.talif_date}}</span>

                                            </label>
                                            <br>
                                            <label class="label-account">
                                                <span class="article-title">توضیحات <span> : </span>  </span>
                                                <span class="article-desc"
                                                      style="padding: 0 15px">@{{row.talif_desc}}</span>

                                            </label>
                                            <br>


                                        </div>
                                    </div>
                                    <div class="box-student-attr" v-if="karafrin_arr.length > 0">
                                        <label class="label_studen_attr">کارآفرین<span class="donoghte"> : </span>
                                        </label>
                                        <br>
                                        <div v-for="row in karafrin_arr"
                                             style="display: inline-block; padding: 5px 7px"
                                             class="fancy-checkbox my-fancy-checkbox">
                                            <label class="label-account">
                                                <span class="article-title">عنوان کار  <span> : </span>  </span>
                                                <span style="padding: 0 15px">@{{row.karafrin_title}}</span>

                                            </label>
                                            <label class="label-account">
                                                <span class="article-title">موضوع <span> : </span>   </span>
                                                <span style="padding: 0 15px">@{{row.karafrin_subject}}</span>

                                            </label>
                                            <label class="label-account">
                                                <span class="article-title">سابقه <span> : </span>   </span>
                                                <span style="padding: 0 15px">@{{row.karafrin_sabeghe}}</span>

                                            </label>
                                            <label class="label-account">
                                                <span class="article-title">میزان اشتغال زایی <span> : </span>  </span>
                                                <span
                                                    style="padding: 0 15px">@{{row.karafrin_mizan_eshteghazayi}}</span>

                                            </label>
                                            <br>
                                            <label class="label-account">
                                                <span class="article-title">توضیحات <span> : </span>  </span>
                                                <span class="article-desc" style="padding: 0 15px">@{{row.karafrin_desc}}</span>

                                            </label>
                                            <br>


                                        </div>
                                    </div>
                                    <div class="box-student-attr" v-if="savabegh_taskilati.length > 0">
                                        <label class="label_studen_attr">سوابق تشکیلاتی<span class="donoghte"> : </span>
                                        </label>
                                        <br>
                                        <div v-for="row in savabegh_taskilati"
                                             style="display: inline-block; padding: 5px 7px"
                                             class="fancy-checkbox my-fancy-checkbox">
                                            <label class="label-account">
                                                <span class="article-title">نهاد  <span> : </span>  </span>
                                                <span style="padding: 0 15px">@{{row.attr}}</span>

                                            </label>
                                            <label class="label-account">
                                                <span class="article-title">سمت <span> : </span>   </span>
                                                <span style="padding: 0 15px">@{{row.savabegh_semat}}</span>

                                            </label>
                                            <label class="label-account">
                                                <span class="article-title">سابقه <span> : </span>   </span>
                                                <span style="padding: 0 15px">@{{row.sabeghe_number}}</span>

                                            </label>
                                            <label class="label-account">
                                                <span
                                                    class="article-title">حوزه(ملی/استانی/محلی) <span> : </span>  </span>
                                                <span style="padding: 0 15px">@{{row.title_ostan}}</span>

                                            </label>
                                            <br>
                                            <label class="label-account">
                                                <span class="article-title">توضیحات <span> : </span>  </span>
                                                <span class="article-desc"
                                                      style="padding: 0 15px">@{{row.sabegh_desc}}</span>

                                            </label>
                                            <br>


                                        </div>
                                    </div>
                                    <loading :active.sync="isLoading" color="#fff" background-color="#000"
                                             loader="dots"></loading>


                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    </div>

@endsection
