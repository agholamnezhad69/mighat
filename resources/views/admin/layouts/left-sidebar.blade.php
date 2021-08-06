<div id="left-sidebar" class="sidebar">
    <div class="navbar-brand">
        <a href="/"><img src="/assets/images/logog.png" alt="Brego Logo" class="img-fluid logo"><span>میقات</span></a>
        <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i class="lnr lnr-menu fa fa-chevron-circle-left"></i></button>
    </div>
    <div class="sidebar-scroll">
        <div class="user-account">
            <div class="user_div">
<!--                <img src="/assets/images/user.png" class="user-photo" alt="User Profile Picture">-->
            </div>
            <div class="dropdown">
<!--                <span>خوش آمديد،</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>آرش خادملو</strong></a>-->
                <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                    <li><a href="page-profile.html"><i class="icon-user"></i>پروفایل من</a></li>
                    <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>پیام</a></li>
                    <li><a href="javascript:void(0);"><i class="icon-settings"></i>تنظیمات</a></li>
                    <li class="divider"></li>
                    <li><a href="page-login.html"><i class="icon-power"></i>خروج</a></li>
                </ul>
            </div>
            <a href="/admin/student_add" class="btn btn-sm btn-block btn-primary btn-round mt-3" title=""><i class="icon-plus mr-1"></i> افزودن دانش آموز</a>
        </div>
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul id="main-menu" class="metismenu">
<!--                <li class="header">اصلی</li>-->
                <li @if(Request::path()=='admin/index') class="active" @endif>
                    <a href="/admin/index" class="has-arrow"><i class="icon-speedometer"></i><span>داشبورددد</span></a>

                </li>
<!--                <li @if(Request::path()=='admin/nashriye' || Request::path()=='admin/nashriye_add' ) class="active" @endif>
                    <a  class="has-arrow"><i class="icon-speedometer"></i><span>نشریه</span></a>
                    <ul>
                        <li @if(Request::path()=='admin/nashriye_add' ) class="active"  @endif><a href="/admin/nashriye_add">مشاهده نشریه ها</a></li>
                        <li  @if(Request::path()=='admin/nashriye' ) class="active"  @endif><a href="/admin/nashriye">افزودن نشریه</a></li>

                    </ul>
                </li>-->
                <li @if(Request::path()=='admin/getStudents' || Request::path()=='admin/student_add' || Request::path()=='admin/getStudents' ) class="active" @endif>
                    <a href="" class="has-arrow"><i class="icon-speedometer"></i><span>گزارش گیری</span></a>
                                      <ul>
                                            <li @if(Request::path()=='admin/student_add') class="active" @endif><a href="/admin/student_add">افزودن دانش آموز</a></li>
                                            <li @if(Request::path()=='admin/getStudents') class="active" @endif><a href="/admin/getStudents">گزارش کلی</a></li>
<!--
                                            <li><a href="index.html">گزارش  نظام وظیفه</a></li>
                                            <li><a href="../light/index.html">گزارش تحصیلی </a></li>
                                            <li><a href="../fluid/index.html">تحلیل استان</a></li>
-->

                                        </ul>
                </li>
                <li @if(Request::path()=='admin/employment_add' || Request::path()=='admin/employment'|| Request::path()=='admin/employ_rezome') class="active" @endif>
                    <a href="" class="has-arrow"><i class="icon-speedometer"></i><span>استخدام</span></a>
                    <ul>
                        <li   @if(Request::path()=='admin/employment') class="active" @endif><a href="/admin/employment">مشاهده آگهی ها </a></li>
                        <li   @if(Request::path()=='admin/employment_add') class="active" @endif><a href="/admin/employment_add">افزودن آگهی </a></li>
                        <li @if(Request::path()=='admin/employ_rezome') class="active" @endif ><a href="/admin/employ_rezome">رزومه ها</a></li>

                    </ul>
                </li>
                <li @if(Request::path()=='admin/product' || Request::path()=='admin/category_product' ||Request::path()=='admin/product_add') class="active" @endif>
                    <a href="" class="has-arrow"><i class="icon-speedometer"></i><span>محصولات</span></a>
                    <ul>
                        <li   @if(Request::path()=='admin/category_product') class="active" @endif><a href="/admin/category_product">دسته ها</a></li>
                        <li   @if(Request::path()=='admin/product') class="active" @endif><a href="/admin/product">مشاهده محصولات</a></li>
                        <li   @if(Request::path()=='admin/product_add') class="active" @endif><a href="/admin/product_add">افزودن محصول</a></li>
                    </ul>
                </li>
                <li @if(Request::path()=='admin/kadamat_refahi') class="active" @endif>
                    <a href="" class="has-arrow"><i class="icon-speedometer"></i><span>خدمات رفاهی</span></a>
                    <ul>
                        <li   @if(Request::path()=='admin/kadamat_refahi') class="active" @endif><a href="/admin/kadamat_refahi"> مشاهده خدمات رفاهی</a></li>
                        <li   @if(Request::path()=='admin/kadamat_refahi_add') class="active" @endif><a href="/admin/kadamat_refahi_add">افزودن </a></li>
                    </ul>
                </li>

                <li @if(Request::path()=='admin/news_add') class="active" @endif>
                    <a href="" class="has-arrow"><i class="icon-speedometer"></i><span>اخبار</span></a>
                    <ul>
                        <li   @if(Request::path()=='admin/news') class="active" @endif><a href="/admin/news">مشاهده اخبار</a></li>
                        <li   @if(Request::path()=='admin/news_add') class="active" @endif><a href="/admin/news_add">افرودن اخبار</a></li>

                    </ul>
                </li>
                <li @if(Request::path()=='admin/contactToLeader') class="active" @endif>
                    <a href="" class="has-arrow"><i class="icon-speedometer"></i><span>ارتباط با نماینده رهبری</span></a>
                    <ul>
                        <li   @if(Request::path()=='admin/contactToLeader') class="active" @endif><a href="/admin/contactToLeader">پیام</a></li>
                     </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
