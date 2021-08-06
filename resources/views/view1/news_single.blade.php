@extends('view1.layouts.adminLayout')

@section('content')

    <!--*************************************************start content-->

    <section id="content-single">

        <div class="container">

            <div class="row">
                <div class="news-title">
                    <div class="bismillah"></div>
                    <div class="news-title-content">
                        {{$news->title_news}}
                    </div>
                </div>
                <div class="col-md-8 ">
                    <div class="news-content news-content1">

                        <?php
                        $d= str_replace('aliAli123aliAli3231test', $news->id, $news->desc_news);
                        echo $d;
                        ?>

                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="news-sidebar">
                        <div class="news-box">
                            <div class="news-box-title">
                                برگزیده‌ها
                            </div>
                            <div class="news-box-content">

                                @foreach($last6 as $item)



                                    <div class="   col-6 padding-0">
                                        <div class="box-item">
                                            <a href="/home/news_single/{{$item->id}}">

                                                <img src="/uploads/news/{{$item->id}}/{{$item->img_news}}" alt="">
                                                <p>{{$item->title_news}}</p>
                                            </a>
                                        </div>
                                    </div>

                                @endforeach



                            </div>
                        </div>
                    </div>
                    <div class="news-sidebar">
                        <div class="news-box">
                            <div class="news-box-title">
                                آخرین ها
                            </div>
                            <div class="news-box-content">
                                <div class="col-md-12 padding-0">
                                    <div class="box-item">
                                        <ul class="hpUL">


                                            @foreach($last10 as $item)

                                                <li class="hpList">
                                                    <a href="/home/news_single/{{$item->id}}">
                                                        {{$item->title_news}}
                                                    </a>
                                                </li>

                                            @endforeach

                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <!--*************************************************end content-->
@endsection

