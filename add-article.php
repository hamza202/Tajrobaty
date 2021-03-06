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
                            <div class="form-group">
                                <label for="form-title" class="mt-2">عنوان التجربة</label>
                                <input type="text" name="formTitle" class="form-control" id="form-title"
                                       placeholder="عنوان التجربة">
                            </div>
                            <label class="d-block mt-3">صورة معبرة عن التجربة</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">اختر صوره</label>
                            </div>
                            <div class="form-group">
                                <label for="formSelect" class="mt-3">اختر القسم</label>
                                <select class="custom-select" id="formSelect" name="formSelect">
                                    <option value=""> اختر القسم</option>
                                    <option value="1">قسم</option>
                                    <option value="2">قسم</option>
                                    <option value="3">قسم</option>
                                </select>
                            </div>
                            <div class="form-group mt-4">
                                <label for="basic-url" class="mb-0">اضف رابط Youtube</label>
                                <small class="d-block   ">مثال: https://www.youtube.com/watch?v=ARA0AxrnHdM</small>
                                <div class="input-group mb-3 add-youtube-link">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon3"><i
                                                    class="fa fa-youtube-play"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="رابط Youtube" id="basic-url"
                                           aria-describedby="basic-addon3">
                                </div>
                            </div>

                            <label class="mt-2" for="editor">تحدث عن التجربة</label>
                            <textarea id="editor" name="editor">

                             </textarea>

                            <button type="submit" class="button mt-3"> نشر التجربة</button>
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
                formSelect: {required: true}
            },
            messages: {
                formTitle: "الرجاء ادخال العنوان",
                formSelect: "الرجاء اختيار القسم"
            }
        });
    });
</script>
<script src="js/ckeditor.js"></script>
<script src="js/sample.js"></script>
<script>
    initSample();


    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
</script>
</body>

</html>