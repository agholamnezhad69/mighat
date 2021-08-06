@extends('view1.layouts.adminLayout')

@section('content')



    <!--*************************************************start content-->


    <section id="content-single">

        <div class="container" id="app">

            <div class="row">
                <div class="news-title-main">
                    <div class="news-title-content">
                        خبرتازه - مهمترین اخبار روز را باما دنبال کنید
                    </div>
                </div>
                <div class="news-main-content">
                    <ul>


                        <li v-for="row in all_news_for_home">
                            <a :href="'/home/news_single/'+row.id">
                                <div class="col-md-7 col-sm-7 col-xs-12 ">
                                    <span class="news-item-content">@{{row.title_news}}</span>
                                </div>
                                <div class="col-md-2 col-xs-12 col-xs-12 ">
                                    <span class="news-item-date">@{{row.date_news}}</span>
                                </div>
                                <div class="col-md-3 col-xs-12 ">
                                    <img v-if="row.img_news!= null" :src="'/uploads/news/'+row.id+'/'+row.img_news"
                                         alt="" class="img-responsive1">
                                </div>
                            </a>
                        </li>
                        <infinite-loading @infinite="get_news_scroll"></infinite-loading>


                    </ul>
                </div>
            </div>
        </div>


    </section>







@endsection


