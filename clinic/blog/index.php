<?php
include '../db/db_connect.php';
?>
<!doctype html>
<html dir="rtl">
    <head>
        <meta charset="utf-8" />
        <title>النصائح الطبية</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../css/style.css"/>
        <script src="../js/jquery-migrate-3.0.0.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </head>
    <body>
        <header class="rec-header">
            <div class="row bg-primary">
                <div class="col-lg-4 text-center">
                    <h1>Children Health Clinic</h1>
                    <h2>advice Department</h2>
                </div>
                <div class="col-lg-4 text-center">
                    <img src="../images/2clinic-logo.jpg" alt="" height="150" width="150">
                </div>
                <div class="col-lg-4 text-center">
                    <h1>عيادة طب الاطفال</h1>
                    <h2>قسم النصائح</h2>
                </div>
            </div>
        </header>
        <br/>
        <br/>
        <div class="container">
            <h3 class="page-header text-center">قسم النصائح</h3>
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 jumbotron"  dir="rtl">
                    <div class="col-lg-6">
                        <a href="old.php" class="btn btn-block btn-primary text-center">نصائج سابقة</a>
                    </div>
                    <div class="col-lg-6">
                        <a href="../" class="btn btn-block btn-primary text-center">خروج</a>
                    </div>
                    <div class="col-lg-12">
                        <h4 class="text-center text-primary">اضافة نصيحة</h4>
                        <form action="add_new.php" method="post">
                            <div>
                                <label>عنوان النصيحة</label>
                                <input type="text" required="required" name="title" class="form-control" />
                            </div>
                            <div>
                                <label>نص النصيحة</label>
                                <textarea required="required" name="body" class="form-control" maxlength="500"></textarea>
                            </div>
                            <div>
                                <br/>
                                <input type="submit" name="app" class="btn btn-primary" value="اضافة" />
                            </div>

                        </form>
                    </div>
                </div>


            </div>
        </div>
        <footer></footer>

    </body>
</html>