<div class="container">
    <div class="row clearfix">
        <div class="col-12">
            <ul class="q_links">
                <li class="col-md-3  col-6 ">
                    <a href="/user/index"
                       @if(Request::path()=='user/index') class="active" @endif >
                        <i class="icon-envelope"></i>
                        <span>تکمیل نمایه</span>
                    </a>
                </li>
                <li class="col-md-3  col-6">
                    <a href="/user/kadamat_refahi"
                       @if(Request::path()=='user/kadamat_refahi') class="active" @endif>

                        <i class="icon-bubbles"></i>
                        <span>خدمات رفاهی من</span>
                    </a>

                </li>
                <li class="col-md-3   col-6">
                    <a href="/user/products"
                       @if(Request::path()=='user/products') class="active" @endif>

                        <i class="icon-bubbles"></i>
                        <span>دوره های آموزشی من</span>
                    </a>

                </li>
                <li class="col-md-3  col-6">
                    <a href="/home/news"
                       @if(Request::path()=='home/news') class="active" @endif>

                        <i class="icon-bubbles"></i>
                        <span>اخبار</span>
                    </a>

                </li>
                <li class="col-md-3  col-6">
                    <a href="/home/persons"
                       @if(Request::path()=='home/persons') class="active" @endif>

                        <i class="icon-bubbles"></i>
                        <span>یاران قرارگاه ملی</span>
                    </a>

                </li>
                <li class="col-md-3  col-6">
                    <a href="/home/shop_product"
                       @if(Request::path()=='home/shop_product') class="active" @endif>

                        <i class="icon-bubbles"></i>
                        <span>مجله تصویری میقات</span>
                    </a>

                </li>
                <li class="col-md-3  col-6">
                    <a href="/home/employment"
                       @if(Request::path()=='home/employment') class="active" @endif>

                        <i class="icon-bubbles"></i>
                        <span>فرصت های شغلی</span>
                    </a>

                </li>

                <li class="col-md-3  col-6">
                    <a href="/user/pass"
                       @if(Request::path()=='user/pass') class="active" @endif>

                        <i class="icon-bubbles"></i>
                        <span>تغییر کلمه ی عبور</span>
                    </a>

                </li>


            </ul>
        </div>
    </div>
</div>
