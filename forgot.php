<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content=""/>
    <meta name="description" content="Webster - Responsive Multi-purpose HTML5 Template"/>
    <meta name="author" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <title>تجربتي | استرجاع كلمة المرور</title>
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
             style="background-image: url(images/forgot.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-name">
                        <h1>استرجاع كلمة المرور</h1>
                    </div>
                    <ul class="page-breadcrumb">
                        <li><a href="index.php"><i class="fa fa-home"></i> الرئيسية</a> <i
                                    class="fa fa-angle-double-left"></i></li>
                        <li><span>استرجاع كلمة المرور</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--=================================
     banner -->

    <section class="white-bg page-section-ptb forgot-pass-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="section-title text-center">
                        <h2>هل نسيت<span class="theme-color"> كلمة المرور؟ </span></h2>
                        <p>سوف تصلك رسالة بكلمة المرور الجديدة لحسابك, على بريدك الالكتروني. </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form action="#">
                        <div class="clearfix">
                            <div class="section-field mb-20">
                                <input class="form-control" required type="text"
                                       placeholder="ضع البريد الذي قمت بالتسجيل من خلاله">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="button">
                                    <span> استعادة كلمة المرور</span>
                                    <i class="fa fa-check"></i>
                                </button>
                            </div>
                        </div>
                    </form>
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