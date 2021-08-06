@extends('view1.layouts.adminLayout')

@section('content')


    <!--*************************************************start content-->

        @if(!isset($user))
            <div class="es__newBackdrop active "></div>
        @endif


        <section id="employment-s-content">
            <div class="employ-s-top">
                <h1>{{$employ_single->title}}</h1>
            </div>
            <div class="container">

                <div class="row">

                    <div class="col-md-8 ">
                        <div class="e-single-content">
                            <h2> {{$employ_single->title}}</h2>
                            <ul class="c-jobView__firstInfoBox c-infoBox">
                                <li class="c-infoBox__item">
                                    <h4 class="c-infoBox__itemTitle">دسته‌بندی شغلی</h4>
                                    <div class="tags">
                                        <span class="black"> {{$employ_single->valuee}}</span>
                                    </div>
                                </li>
                                <li class="c-infoBox__item">
                                    <h4 class="c-infoBox__itemTitle">موقعیت مکانی</h4>
                                    <div class="tags">
                                        <span class="black">{{$employ_single->title_ostan}}</span>

                                    </div>
                                </li>
                                <li class="c-infoBox__item">
                                    <h4 class="c-infoBox__itemTitle">نوع آگهی</h4>
                                    <div class="tags">
                                        @if($employ_single->status == 0)
                                            <span class="black">عادی</span>
                                        @else
                                            <span class="black">فوری</span>
                                        @endif

                                    </div>
                                </li>

                            </ul>
                            <h4 class="o-box__title">شرح موقعیت شغلی</h4>
                            <?php
                            $d= str_replace('aliAli123aliAli3231test', $employ_single->id, $employ_single->description);
                            echo $d;
                            ?>
                        </div>
                    </div>
                    <div class="col-md-4 ">

                        <div class="employment-s-sidebar">
                            <div class="employment-s-box">
                                <div class="employment-s-box-title">
                                    از اینجا شروع کنید
                                </div>
                                <div class="employment-s-box-content">
                                    <div class="e-form-item">

                                        @if(isset($user))
                                            <input value="{{$user->name}} {{$user->family}} " class="fullName"
                                                   type="text"
                                                   disabled="true"
                                                   placeholder="نام و نام خانوادگی">
                                        @endif

                                    </div>
                                    <div class="e-form-item">
                                        @if(isset($user))
                                            <input value="{{$user->mobile}}  " class="mobile" type="text"
                                                   disabled="true"
                                                   placeholder="شماره همراه">
                                        @endif
                                    </div>
                                    <div class="user-img" style="width: 100%">

                                        <example-component2
                                            :rezome_file_list="rezome_file_object"
                                            @get_rezome_img="get_rezome_img({{$employ_single->id}})"
                                            @add_rezome="add_rezome">

                                        </example-component2>



                                    </div>
                                    <div class="e-form-item">
                                        <span @click="send_rezome({{$employ_single->id}},{{$user->id}})">
                                            ارسال رزومه
                                                <i
                                                    :class="[
                                                     is_send_rezome == true ? 'fa-spinner':'',
                                'fa',
                                'fa-pulse',
                                'fa-3x',
                                'fa-fw',
                                 ]"
                                                ></i>
                                            </span>

                                    </div>
                                    <div v-if="is_send_rezome_success" class="alert alert-success" role="alert">
                                        رزومه با موفقیت ارسال شد
                                    </div>
                                    <div v-if="send_rezome_befor" class="alert alert-error" role="alert">
                                        شما قبلا این رزمه را ارسال کردید
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>


@endsection


