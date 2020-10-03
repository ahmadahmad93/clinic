<!Doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>الرئيسية</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/jquery3.2.1.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function() {

                /* Every time the window is scrolled ... */
                $(window).scroll(function() {

                    /* Check the location of each desired element */
                    $('.hideme').each(function(i) {

                        var bottom_of_object = $(this).offset().top + $(this).outerHeight();
                        var bottom_of_window = $(window).scrollTop() + $(window).height();

                        /* If the object is completely visible in the window, fade it it */
                        if (bottom_of_window > bottom_of_object) {

                            $(this).animate({'opacity': '1'}, 500);

                        }

                    });

                });

            });
        </script>
    </head>
    <body>
        <?php
        if (isset($_GET['contact'])) {
            echo "<div class='alert alert-success text-center'>شكرا لتواصلك معنا</div>";
        }
        if (isset($_GET['reg'])) {
            echo "<div class='alert alert-success text-center'>تم التسجيل بنجاح, يمكنك الان تسجيل الدخول لطلب استشارة طبية</div>";
        }
        ?>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">children clinic</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">اقسام <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="login.php">الاستقبال</a></li>
                                <li><a href="login.php">لعيادة</a></li>
                                <li><a href="login.php">المحاسبة</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="login.php">نصائح طبية</a></li>
                                <li><a href="login.php">استشارات طبية</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="login.php">الادارة</a></li>
                            </ul>
                        </li>
                        <li><a href="index.php">الرئيسية</a></li>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="row" style="width: 100%;direction: rtl;margin: 0;margin-right: -15%;">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="images/clinic-2586827_1920.jpg" alt="...">
                        <div class="carousel-caption">
                            موقع عيادة طب الاطفال
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/medic-563423_1920.jpg" alt="...">
                        <div class="carousel-caption">
                            موقع عيادة طب الاطفال
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/doctor-563428_1920.jpg" alt="...">
                        <div class="carousel-caption">
                            موقع عيادة طب الاطفال
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/doctors-office-2610509_1920.jpg" alt="...">
                        <div class="carousel-caption">
                            موقع عيادة طب الاطفال
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/medic-563423_1920.jpg" alt="...">
                        <div class="carousel-caption">
                            موقع عيادة طب الاطفال
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/medical-563427_1920.jpg" alt="...">
                        <div class="carousel-caption">
                            موقع عيادة طب الاطفال
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>  
        <br/>
        <br/>
        <div class="row hideme" dir="rtl">
            <h3 class="page-header text-info text-center"> خدماتنا</h3>
            <div class="container">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/login.png" alt="...">
                        <div class="caption">                        
                            <p><a href="#" class="btn btn-default btn-block" data-toggle="modal" data-target=".bs-example-modal-sm">تسجيل دخول</a></p>
                            <p><a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target=".bs-example-modal-lg">تسجيل مستخدم جديد</a></p>
                        </div>
                    </div>
                </div>  
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/consult.png" alt="...">
                        <div class="caption">
                            <h3>استشارات</h3>
                            <p>تتطلب تسجيل دخول</p>
                            <p><a href="consult.php" class="btn btn-primary">تصفح</a></p>
                        </div>
                    </div>
                </div>   
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/advice.png" alt="...">
                        <div class="caption">
                            <h3>النصائح الطبية</h3>
                            <p><a href="advice.php" class="btn btn-primary" target="_blank">تصفح</a></p>
                        </div>
                    </div>
                </div>    
            </div>

        </div>
        <div class="row hideme">
            <h2 class="text-center page-header">عن العيادة</h2>
            <div class="container">
                <div class="col-lg-6">
                    <img src="images/child.jpg" class="img-rounded img-responsive" alt="" style="padding: 25px;"/>
                </div>
                <div class="col-lg-6">
                    <div class="list-group" style="padding-top: 25px;">
                        <a href="#" class="list-group-item active text-center">
                            خدماتنا
                        </a>
                        <a href="#" class="list-group-item text-center">مواعيد منظمة</a>
                        <a href="#" class="list-group-item text-center">معاينات دقيقة</a>
                        <a href="#" class="list-group-item text-center">سجلات طبية و تاريخ طبي خاص بكل مريض</a>
                        <a href="#" class="list-group-item text-center">سجل دوائي خاص بكل مريض</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <h2 class="page-header text-center">تواصل معنا</h2>
            <div class="container well">
                <form action="contact.php" method="post">
                    <input type="text" name="name" class="form-control text-right" required placeholder="رجاء ادخال الاسم" /><br/>
                    <input type="email" name="mail" class="form-control text-right" required placeholder="رجاء ادخال البريد الالكتروني" /><br/>
                    <textarea name="msg" class="form-control text-right" rows="6" >
                        
                    </textarea>
                    <br/>
                    <input type="submit" class="btn btn-default btn-block" value="ارسال" name="send" />
                </form>
            </div>
        </div>
        <footer class="bg-primary">
            <h3 class="text-center text-uppercase">children clinic project by &copy; OMAR and WAFAA</h3>
        </footer>
        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content" style="padding: 20px;">
                    <form method="post" action="log.php">
                        <input type="text" class="form-control text-center" required name="user" placeholder="email" /><br/>
                        <input type="password" class="form-control text-center" required name="pwd" placeholder="password" /><br/>
                        <input type="submit" class="btn btn-block btn-primary" name="btn" value="تسجيل دخول" />            
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade bs-example-modal-lg" tabindex="-2" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content" style="padding: 20px;">
                    <form method="post" action="reg.php">
                        <input type="text" class="form-control text-center" required name="name" placeholder="الاسم" /><br/>
                        <input type="text" class="form-control text-center" required name="mail" placeholder="البريد الالكتروني" /><br/>
                        <input type="password" class="form-control text-center" required name="pwd" placeholder="كلمة المرور" /><br/>
                        <input type="submit" class="btn btn-block btn-primary" name="btn" value="تسجيل" />            
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>