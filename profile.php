<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content=""/>
    <meta name="description" content="Webster - Responsive Multi-purpose HTML5 Template"/>
    <meta name="author" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <title>تجربتي | تفاصيل التجربة</title>
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
             style="background-image: url(images/bg1.jpg); padding-top: 190px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-name">
                        <h1>مقالات التجارب</h1>
                        <p>حدثنا عن تجاربك في الحياه </p>
                    </div>
                    <ul class="page-breadcrumb">
                        <li><a href="index.php"><i class="fa fa-home"></i> الرئيسية</a> <i
                                    class="fa fa-angle-double-left"></i></li>
                        <li><span>مقالات التجارب</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--=================================
     banner -->

    <section class="blog white-bg page-section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="blog-entry p-3">
                        <form action="#" id="form-r">
                            <div class="tab tab-border">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active show" id="home-04-tab" data-toggle="tab"
                                           href="#home-04" role="tab" aria-controls="home-04"
                                           aria-selected="true">اسم العرض</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-04-tab" data-toggle="tab" href="#profile-04"
                                           role="tab" aria-controls="profile-04" aria-selected="false">صورة شخصية </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="portfolio-04-tab" data-toggle="tab" href="#portfolio-04"
                                           role="tab" aria-controls="portfolio-04" aria-selected="false">بياناتي </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-04-tab" data-toggle="tab" href="#contact-04"
                                           role="tab" aria-controls="contact-04" aria-selected="false">كلمة المرور </a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade active show" id="home-04" role="tabpanel"
                                         aria-labelledby="home-04-tab">
                                        <input id="name" type="text" placeholder="اسم العرض" required
                                               class="form-control" name="name">
                                    </div>
                                    <div class="tab-pane fade" id="profile-04" role="tabpanel"
                                         aria-labelledby="profile-04-tab">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">اختر صوره</label>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="portfolio-04" role="tabpanel"
                                         aria-labelledby="portfolio-04-tab">
                                        <input id="name2" type="text" placeholder="الأسم" required class="form-control"
                                               name="name2">
                                        <textarea class="form-control input-message mt-3" placeholder="نبذة عني"
                                                  rows="5" name="message"></textarea>
                                        <div class="input-group mb-3 add-youtube-link mt-3">
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon3"><i
                                                            class="fa fa-facebook-f"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="رابط صفحة facebook الخاص بك"
                                                   id="face" aria-describedby="basic-addon3">
                                        </div>
                                        <div class="input-group mb-3 add-youtube-link mt-3">
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon3"><i
                                                            class="fa fa-twitter"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="رابط صفحة twitter الخاص بك"
                                                   id="twitter" aria-describedby="basic-addon3">
                                        </div>
                                        <div class="input-group mb-3 add-youtube-link mt-3">
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon3"><i
                                                            class="fa fa-linkedin"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="رابط صفحة linkedin الخاص بك"
                                                   id="linkedin" aria-describedby="basic-addon3">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="contact-04" role="tabpanel"
                                         aria-labelledby="contact-04-tab">
                                        <input id="password" type="password" placeholder="كلمة المرور الحالية"
                                               class="form-control" name="password">
                                        <input id="newPassword" type="password" placeholder="كلمة المرور الجديدة"
                                               class="form-control mt-3" name="newPassword">
                                        <input id="reNewPassword" type="password" placeholder="اعادة ادخال كلمة المرور"
                                               class="form-control mt-3" name="reNewPassword">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="button mt-3">حفظ</button>
                        </form>
                    </div>

                </div>
                <!-- ================================================ -->
                <div class="col-lg-3 ">
                    <div class="team-3 mb-3">
                        <div class="team team-round full-border">
                            <div class="team-photo">
                                <img class="img-fluid mx-auto" src="images/team/01.jpg" alt="">
                            </div>
                            <div class="team-description">
                                <div class="team-info">
                                    <h5><a href="#">حمزة القحطاني</a></h5>
                                    <span>خريج جامعة الملك سعود تخصص علم نفس, عام 2014 ,مواليد السعودية جدة 1990 . </span>
                                </div>
                                <div class="team-contact">
                                    <ul class="list-inline info-box">
                                        <li class="list-inline-item position-relative">
                                            <a href="#">
                                                <span>10</span>
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item position-relative">
                                            <a href="#">
                                                <span>5</span>
                                                <i class="fa  fa-heart"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item position-relative">
                                            <a href="#">
                                                <span>5</span>
                                                <i class="fa fa-question"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="social-icons social-border rounded color-hover clearfix">
                                        <ul>
                                            <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li class="social-instagram"><a href="#"><i class="fa fa-instagram"></i></a>
                                            </li>
                                            <li class="social-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <a class="button btn-block mt-2" href="#"> تجربة جديدة </a>
                        </div>
                    </div>
                </div>
                <!-- ================================= -->
            </div>
        </div>
    </section>

    <!--=================================
     footer -->

    <?php include "footer.php" ?>

    <!--=================================
     footer -->

</div>


<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>أعلى</span></a></div>

<?php include "javascript.php" ?>
<script src="js/jquery.validate.js"></script>
<script>
    jQuery(function ($) {
        $("#form-r").validate({
            event: 'blur',
            rules: {
                formTitle: {required: true},
                formSelect: {required: true},
                reNewPassword: {
                    equalTo: "#newPassword"
                }
            },
            messages: {
                reNewPassword:"كلمة المرور لا تطابق" ,
                formTitle: "الرجاء ادخال العنوان",
                formSelect: "الرجاء اختيار القسم"
            }
        });
    });
</script>

<script>

    $('.custom-file-input').on('change', function () {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
</script>
</body>

</html>