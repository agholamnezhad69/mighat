@extends('view.layouts.adminLayout')

@section('content')
<style>
    .pdpt-bg .pdpt-title {
        text-align: right;

    }

    .pdpt-bg .employment {
        float: right;


    }

    .pdpt-bg .blog-top-item {
        position: relative;
    }

    .pdpt-bg ul li {

        border: 1px solid #fff !important;
        margin: 12px 5px;
        border-radius: 3px;
    }

    .top-posts li {
        padding: 9px 5px !important;

    }
    .title129 {
        text-align: center;
        border: 1px solid #000055;
        background: #000055;
        padding: 61px;
        border-radius: 9px;
    }
    .title129 h2 {
        margin-top: 0px !important;
    }

    .blog-top-item a {
        display: block;
        width: 100%;
        height: 100%;
        padding: 11px 11px;
        font-family: IRANSans !important;
    }

    .top-post-link {
        color: #f55d2c !important;
        font-family: IRANSans !important;
    }

    .pdpt-bg .pdpt-title {
        margin-bottom: 19px;
    }

    .pdpt-bg .pdpt-title {
        margin-bottom: 19px;
    }

    .pdpt-bg .blog-top-item {
        text-align: right;
    }

    .pdpt-bg .employment .blog-top-item {
        text-align: right;


    }

    .pdpt-bg .employment span.blog-status {
        position: absolute;
        top: 11px;
        left: 14px;
        background: #d84a3e;
        padding: 5px 14px;
        border-radius: 3px;
        font-size: 11px;
        width: 58px;
        text-align: center;
        font-family: IRANSans !important;
    }

    .pdpt-bg span.blog-date {
        position: absolute;
        left: 5px;
    }

    .col-md-12,
    .col-md-5,
    .col-md-6,
    .col-md-7 {
        padding-right: 15px;
        padding-left: 15px;
    }

    .default-dt {
        margin-top: 50px;
        background: unset!important;
    }

    h4 {
        font-family: IRANSans !important;
    }
    .blog-gambo {
        padding: 0px 0 14px;
    }
    body, html {
        height: unset!important;
    }
</style>


<div class="wrapper dark-top-slider" id="app">
    <div class="default-dt">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    {{-- <div class="default_tabs">
                             <nav>
                                 <div class="nav nav-tabs tab_default  justify-content-center">
                                     <a class="nav-item nav-link" href="about_us.html">About</a>
                                     <a class="nav-item nav-link active" href="our_blog.html">Blog</a>
                                     <a class="nav-item nav-link" href="career.html">Careers</a>
                                     <a class="nav-item nav-link" href="press.html">Press</a>
                                 </div>
                             </nav>
                         </div>--}}
                    <div class="title129">
                        <h2 style="font-family: aviny!important;">مشاهده همه آگهی ها</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-gambo">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="pdpt-bg mt-0">
                        <div class="pdpt-title">
                            <h4>آخرین آگهی ها</h4>
                        </div>
                        <ul class="top-posts">
                            <li  v-for="row in all_employment"
                                v-if="row.id >=12">

                                <div class="blog-top-item">
                                    <a :href="'/home/employment_detail/'+row.id">
                                        <span class="top-post-link">@{{ row.title }}</span>
                                        <span class="blog-time">@{{ row.state }}</span>
                                        <span class="blog-date">@{{ row.date }}</span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="pdpt-bg mt-0">
                        <div class="pdpt-title">
                            <h4> استخدام فوری امروز</h4>
                        </div>
                        <ul class="top-posts">

                            <div v-for="row in all_employment" class="col-md-6 col-lg-6 employment">
                                <li>
                                    <div class="blog-top-item">
                                        <a href="#">
                                            <span href="#" class="top-post-link"> @{{ row.title }} </span>
                                            <span class="blog-time">@{{ row.state }}</span>
                                            <span class="blog-status">@{{ row.status }}</span>
                                        </a>
                                    </div>
                                </li>

                            </div>
                            {{-- <div class="col-md-6 col-lg-6 employment">
                                           <li>
                                               <div class="blog-top-item">
                                                   <a href="#" class="top-post-link">استخدام مهندس الکترونیک</a>
                                                   <span class="blog-time">کرج</span>
                                                   <span class="blog-status">فوری</span>
                                               </div>
                                           </li>

                                       </div>
                                       <div class="col-md-6 col-lg-6 employment">
                                           <li>
                                               <div class="blog-top-item">
                                                   <a href="#" class="top-post-link">استخدام مهندس الکترونیک</a>
                                                   <span class="blog-time">کرج</span>
                                                   <span class="blog-status">فوری</span>
                                               </div>
                                           </li>

                                       </div>
                                       <div class="col-md-6 col-lg-6 employment">
                                           <li>
                                               <div class="blog-top-item">
                                                   <a href="#" class="top-post-link">استخدام مهندس الکترونیک</a>
                                                   <span class="blog-time">کرج</span>
                                                   <span class="blog-status">فوری</span>
                                               </div>
                                           </li>

                                       </div>
                                       <div class="col-md-6 col-lg-6 employment">
                                           <li>
                                               <div class="blog-top-item">
                                                   <a href="#" class="top-post-link">استخدام مهندس الکترونیک</a>
                                                   <span class="blog-time">کرج</span>
                                                   <span class="blog-status">فوری</span>
                                               </div>

                                           </li>

                                       </div>
                                       <div class="col-md-6 col-lg-6 employment">
                                           <li>
                                               <div class="blog-top-item">
                                                   <a href="#" class="top-post-link">استخدام مهندس الکترونیک</a>
                                                   <span class="blog-time">کرج</span>
                                                   <span class="blog-status">فوری</span>
                                               </div>

                                           </li>

                                       </div>
                                       <div class="col-md-6 col-lg-6 employment">
                                           <li>
                                               <div class="blog-top-item">
                                                   <a href="#" class="top-post-link"> استخدام مهندس الکترونیک </a>
                                                   <span class="blog-time">تهران</span>
                                                   <span class="blog-status">فوری</span>
                                               </div>
                                           </li>

                                       </div>
                                       <div class="col-md-6 col-lg-6 employment">
                                           <li>
                                               <div class="blog-top-item">
                                                   <a href="#" class="top-post-link">استخدام مهندس الکترونیک</a>
                                                   <span class="blog-time">کرج</span>
                                                   <span class="blog-status">فوری</span>
                                               </div>
                                           </li>

                                       </div>
                                       <div class="col-md-6 col-lg-6 employment">
                                           <li>
                                               <div class="blog-top-item">
                                                   <a href="#" class="top-post-link">استخدام مهندس الکترونیک</a>
                                                   <span class="blog-time">کرج</span>
                                                   <span class="blog-status">فوری</span>
                                               </div>
                                           </li>

                                       </div>
                                       <div class="col-md-6 col-lg-6 employment">
                                           <li>
                                               <div class="blog-top-item">
                                                   <a href="#" class="top-post-link">استخدام مهندس الکترونیک</a>
                                                   <span class="blog-time">کرج</span>
                                                   <span class="blog-status">فوری</span>
                                               </div>
                                           </li>

                                       </div>
                                       <div class="col-md-6 col-lg-6 employment">
                                           <li>
                                               <div class="blog-top-item">
                                                   <a href="#" class="top-post-link">استخدام مهندس الکترونیک</a>
                                                   <span class="blog-time">کرج</span>
                                                   <span class="blog-status">فوری</span>
                                               </div>

                                           </li>

                                       </div>
                                       <div class="col-md-6 col-lg-6 employment">
                                           <li>
                                               <div class="blog-top-item">
                                                   <a href="#" class="top-post-link">استخدام مهندس الکترونیک</a>
                                                   <span class="blog-time">کرج</span>
                                                   <span class="blog-status">فوری</span>
                                               </div>

                                           </li>

                                       </div>--}}
                        </ul>
                        <div class="clearfix"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
