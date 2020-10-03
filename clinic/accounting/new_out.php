<!doctype html>
<html dir="rtl">
    <head>
        <meta charset="utf-8" />
        <title>المحاسبة</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../css/style.css"/>
        <script src="../js/jquery-migrate-3.0.0.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </head>
    <body>
        <header class="rec-header">
            <div class="row bg-info">
                <div class="col-lg-4 text-center">
                    <h1>Children Health Clinic</h1>
                    <h2>accounting Department</h2>
                </div>
                <div class="col-lg-4 text-center">
                    <img src="../images/2clinic-logo.jpg" alt="" height="150" width="150">
                </div>
                <div class="col-lg-4 text-center">
                    <h1>عيادة طب الاطفال</h1>
                    <h2>قسم المحاسبة</h2>
                </div>
            </div>
        </header>
        <br/>
        <br/>
        <div class="container">
            <h3 class="page-header text-center">قسم المحاسبة</h3>
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 jumbotron"  dir="rtl">
                    <h4 class="text-right text-primary">اضافة معلومات سند دفع من الصندوق </h4>
                    <form action="control/new_out.php" method="post">
                        <div class="col-lg-12">
                            <label>المبلغ</label>
                            <input class="form-control" name="cost" required="required" type="text" />
                        </div>
                        <div class="col-lg-12">
                            <label>اسم حساب الصرف</label>
                            <select name="account" class="form-control">
                                <option value="1">رواتب موظفين</option>
                                <option value="2">مشتريات مساعدة</option>
                                <option value="3">مشتريات غذائية</option>
                                <option value="4">مشتريات عدد و ادوات</option>
                                <option value="5">مصاريف صيانة</option>
                                <option value="6">سلف موظفين</option>
                                <option value="7">مصاريف نثرية</option>
                            </select>
                        </div>
                        <div class="col-lg-12">
                            <label>البيان</label>
                            <input class="form-control" name="report" required="required" type="text" />
                        </div>
                        <div class="col-lg-12">
                            <label>ملاحظات</label>
                            <input class="form-control" name="notes" type="text" />
                        </div>
                        <div class="col-lg-12">
                            <label></label>
                            <input class="btn btn-info btn-block" name="app" type="submit" value="تأكيد" />
                            <a href="index.php" class="btn btn-link" >عودة</a>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
        <footer></footer>

    </body>
</html>