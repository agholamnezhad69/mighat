<!doctype html>
<html lang="en">


<!-- Mirrored from paradigm-shift.ir/Brego/brego/dark/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Jul 2019 07:41:35 GMT -->
<head>
    <title>میقات</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description"
          content="Brego Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities.">
    <meta name="author" content="GetBootstrap, design by: puffintheme.com">

    <link rel="icon" href="favicon.html" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/vendor/animate-css/vivify.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="/assets/css/site.min.css">
    <style>
        img.d-inline-block.align-top.mr-2 {
            width: 106px;
            height: 57px;
        }

        i#refresh {
            color: #99fc16;
            font-size: 40px;
            position: absolute;
            top: 5px;
            left: 14px;
            cursor: pointer;
        }

        .captcha {
            display: flex;
            align-items: center;
            justify-content: center;
            background: #282b2f;
            overflow: hidden;
            user-select: none;
        }

        .captcha .flex-row {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 20px 0;
            position: relative;
        }

        .captcha .heading {
            position: absolute;
            left: 0;
            right: 0;
            top: 20vh;
            text-align: center;
        }

        .captcha .heading > h1 {
            color: #0f62fe;
        }

        .captcha input#Captcha {
            user-select: none;
            pointer-events: none;
        }

        .captcha input#Captcha {
            font-size: 18px;
            padding: 10px 20px;
            outline: 0;
            border: 1px solid #282b2f;
            width: 100%;
            background: #282b2f;
            color: #fff;
        }

        input#txtInput {
            font-size: 18px;
            padding: 10px 20px;
            outline: 0;
            border: 1px solid #5b5f64;
            width: 100%;
            background: #282b2f;
            color: #fff;
        }

        .captcha button {
            background-color: #0f62fe;
            border: 1px solid transparent;
            color: #fff;
            cursor: pointer;
            padding: 10px 30px 10px 10px;
            display: block;
            transition: background-color 0.5s;
            font-size: 18px;
            width: 100%;
            text-align: left;
            outline: 0;
        }

        .captcha .captcha_output, .fillcaptcha {
            width: 100%;
        }


    </style>

</head>

<body class="theme-orange">
<div class="pattern">
    <span class="red"></span>
    <span class="indigo"></span>
    <span class="blue"></span>
    <span class="green"></span>
    <span class="orange"></span>
    <style>
        [v-cloak] {
            display: none;
        }
    </style>
</div>
<div class="auth-main particles_js" id="app" v-cloak>
    <div class="auth_div vivify popIn">
        <div class="auth_brand">
            <a class="navbar-brand" href="/"><img src="/assets/images/logog.png" width="30"
                                                  height="30" class="d-inline-block align-top mr-2"
                                                  alt=""></a>
        </div>
        <div class="card">
            <div class="body">
                <p class="lead">وارد حساب کاربری خود شوید</p>
                <!--                <form class="form-auth-small m-t-20" method="post" action="/login">-->
                <div class="form-auth-small m-t-20">
                    <div class="form-group">
                        <label for="signin-email" class="control-label sr-only">ایمیل</label>
                        <input type="text" v-model="user_name" name="username" class="form-control round"
                               id="signin-email"
                               placeholder="نام کاربری">
                    </div>
                    <div class="form-group">
                        <label for="signin-password" class="control-label sr-only">رمزعبور</label>
                        <input type="password" v-model="user_pass" name="pass" class="form-control round"
                               id="signin-password"
                               placeholder="رمزعبور">
                    </div>

                    <div class="form-group clearfix captcha">

                        <div class="full-row">
                            <div class="captcha_outer flex-row">
                                <div class="captcha_output">
                                    <input type="text" id="Captcha" readonly>
                                </div>
                                <div class="captcha_gen">
                                    <i class="fa fa-refresh" id="refresh" @click="generateCaptcha();">

                                    </i>
                                </div>
                            </div>
                            <div class="captcha_valid flex-row">
                                <div class="fillcaptcha"><input placeholder="کد امنیتی" type="text" id="txtInput"/>
                                </div>
                                <div class="valid_captcha">
                                    <!--                                    <button id="CheckCaptcha" @click="CheckValidCaptcha();">Check</button>-->
                                </div>
                            </div>
                            <div class="valid-msg-error">
                                <span id="error" style="color:red"></span>
                                <span id="success" style="color:green"></span>
                            </div>
                        </div>

                    </div>

                    <div class="form-group clearfix">
                        <label class="fancy-checkbox element-left">
                            <input type="checkbox">
                            <span>مرا به خاطر بسپار</span>
                        </label>
                    </div>


                    <!--                    <button type="submit" class="btn btn-primary btn-round btn-block">ورود</button>-->
                    <button @click="login()" class="btn btn-primary btn-round btn-block">ورود</button>
                    <!--                    <div class="bottom">
                                            <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="page-forgot-password.html">رمز عبور را فراموش کرده اید؟</a></span>
                                            <span>حساب کاربری ندارید؟ <a href="page-register.html">ثبت نام</a></span>
                                        </div>-->
                </div>
                {{--@if(session('err'))--}}
                <div style="margin-top: 20px" v-if="loginSuccess==false" class="alert alert-danger">
                    نام کاربری و کلمه عبور را وارد کنید
                </div>
                <div style="margin-top: 20px" v-if="loginMistake==true" class="alert alert-danger">
                    نام کاربری یا کلمه عبور اشتباه هست
                </div>
                {{--@endif--}}
            </div>
        </div>
    </div>
    <div id="particles-js"></div>
    <loading :active.sync="isLoading" color="#fff" background-color="#000" loader="dots"></loading>

</div>
<!-- END WRAPPER -->
<script src="{{ url('js/app.js') }}"></script>
<script src="/assets/bundles/libscripts.bundle.js"></script>
<script src="/assets/bundles/vendorscripts.bundle.js"></script>
<script src="/assets/bundles/mainscripts.bundle.js"></script>
</body>


<!-- Mirrored from paradigm-shift.ir/Brego/brego/dark/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Jul 2019 07:41:35 GMT -->
</html>
