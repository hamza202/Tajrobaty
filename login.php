<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content=""/>
    <meta name="description" content="Webster - Responsive Multi-purpose HTML5 Template"/>
    <meta name="author" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <title>تجربتي | تسجيل الدخول</title>
    <?php include 'stylesheet.php' ?>
</head>

<body>
<div class="wrapper">

    <!--=================================
     preloader -->

    <div id="pre-loader">
        <img src="images/pre-loader/loader-16.gif" alt="">
    </div>

    <!--=================================
     preloader -->

    <!--=================================
     header -->

    <?php include "header.php"; ?>

    <!--=================================
     header -->

    <!--=================================
     banner -->

    <section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}'
             style="background-image: url(images/welcome.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-name">
                        <h1>تسجيل الدخول</h1>
                    </div>
                    <ul class="page-breadcrumb">
                        <li><a href="index.php"><i class="fa fa-home"></i> الرئيسية</a> <i
                                    class="fa fa-angle-double-left"></i></li>
                        <li><span>تسجيل الدخول</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--=================================
     banner -->

    <section class="log-in-section page-section-pb pt-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="login-bg clearfix">
                        <div class="login-title">
                            <h2 class="text-white mb-0">تسجيل الدخول الى حسابك</h2>
                        </div>
                        <form action="#">
                            <div class="login-form">
                                <div class="section-field mb-20">
                                    <label class="mb-10" for="name">اسم المستخدم: </label>
                                    <input required id="name" class="web form-control" type="text" placeholder="اسم المستخدم"
                                           name="web">
                                </div>
                                <div class="section-field mb-20">
                                    <label class="mb-10" for="Password">كلمة المرور: </label>
                                    <input required id="Password" class="Password form-control" type="password"
                                           placeholder="كلمة المرور" name="Password">
                                </div>
                                <div class="section-field">
                                    <div class="remember-checkbox mb-20">
                                        <input type="checkbox" class="form-control" name="two" id="two"/>
                                        <label for="two"> تذكرني</label>
                                        <a href="forgot.php" class="float-right">نسيت كلمة المرور؟</a>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="button">
                                        <span>تسجيل الدخول</span>
                                        <i class="fa fa-check"></i>
                                    </button>
                                    <p class="mt-20 mb-0">ليس لديك حساب؟ <a href="signup.php"> سجل الأن</a></p>
                                </div>
                            </div>
                        </form>
                        <div class="login-social text-center clearfix">
                            <h4 class="theme-color mb-15">او سجل الدخول بواسطة:</h4>
                            <ul>
                                <li><a class="fb" href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=================================
     login-->

    <!--=================================
     footer -->

    <?php include "footer.php" ?>

    <!--=================================
     footer -->

</div>


<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>أعلى</span></a></div>

<?php include "javascript.php" ?>


</body>

</html>