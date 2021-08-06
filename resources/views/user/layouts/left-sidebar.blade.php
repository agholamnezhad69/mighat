<div id="left-sidebar" class="sidebar">
    <div class="navbar-brand">
        <a href="index.html"><img src="/assets/images/logog.png" alt="Brego Logo" class="img-fluid logo"><span>میقات</span></a>
        <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i class="lnr lnr-menu fa fa-chevron-circle-left"></i></button>
    </div>
    <div class="sidebar-scroll">
        <div class="user-account">
            <div class="user_div">
                <img src="../assets/images/user.png" class="user-photo" alt="User Profile Picture">
            </div>
            <div class="dropdown">
                <span>خوش آمديد،</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>آرش خادملو</strong></a>
                <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                    <li><a href="page-profile.html"><i class="icon-user"></i>پروفایل من</a></li>
                    <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>پیام</a></li>
                    <li><a href="javascript:void(0);"><i class="icon-settings"></i>تنظیمات</a></li>
                    <li class="divider"></li>
                    <li><a href="page-login.html"><i class="icon-power"></i>خروج</a></li>
                </ul>
            </div>
            <a href="javascript:void(0);" class="btn btn-sm btn-block btn-primary btn-round mt-3" title=""><i class="icon-plus mr-1"></i> ایجاد جدید</a>
        </div>
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul id="main-menu" class="metismenu">
                <li class="header">اصلی</li>
                <li @if(Request::path()=='user/index') class="active" @endif>
                    <a href="/user/index" class="has-arrow"><i class="icon-speedometer"></i><span>داشبورد</span></a>
<!--                    <ul>
                        <li class="active"><a href="index.blade.php">نسخه تاریک</a></li>
                        <li><a href="../light/index.blade.php">نسخه روشن</a></li>
                        <li><a href="../fluid/index.blade.php">نسخه سیالات</a></li>
                        <li><a href="../hmenu/index.blade.php">نسخه منوی افقی</a></li>
                        <li><a href="../landing/index.blade.php">صفحه لندینگ</a></li>
                    </ul>-->
                </li>
                <li @if(Request::path()=='user/account') class="active" @endif>
                    <a href="/user/account" class="has-arrow"><i class="icon-speedometer"></i><span>حساب کاربری</span></a>
                    <!--                    <ul>
                                            <li class="active"><a href="index.blade.php">نسخه تاریک</a></li>
                                            <li><a href="../light/index.blade.php">نسخه روشن</a></li>
                                            <li><a href="../fluid/index.blade.php">نسخه سیالات</a></li>
                                            <li><a href="../hmenu/index.blade.php">نسخه منوی افقی</a></li>
                                            <li><a href="../landing/index.blade.php">صفحه لندینگ</a></li>
                                        </ul>-->
                </li>
                <li @if(Request::path()=='user/kadamat_refahi') class="active" @endif>
                    <a href="/user/kadamat_refahi" class="has-arrow"><i class="icon-speedometer"></i><span>خدمات رفاهی</span></a>
                </li>

            </ul>
        </nav>
    </div>
</div>
