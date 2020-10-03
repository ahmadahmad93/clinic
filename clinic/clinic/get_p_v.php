<!doctype html>
<html dir="rtl">
    <head>
        <meta charset="utf-8" />
        <title>العيادة</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../css/style.css"/>
        <script src="../js/jquery-migrate-3.0.0.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </head>
    <body>
        <header class="rec-header">
            <div class="row bg-danger">
                <div class="col-lg-4 text-center">
                    <h1>Children Health Clinic</h1>
                    <h2>clinic Department</h2>
                </div>
                <div class="col-lg-4 text-center">
                    <img src="../images/2clinic-logo.jpg" alt="" height="150" width="150">
                </div>
                <div class="col-lg-4 text-center">
                    <h1>عيادة طب الاطفال</h1>
                    <h2>قسم العيادة</h2>
                </div>
            </div>
        </header>
        <br/>
        <br/>
        <div class="container">
            <h3 class="page-header text-center">تاريخ زيارات مريض</h3>
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 jumbotron">
                                <h3 class="text-center text-danger">ادخل الرقم الذاتي للمريض</h3>
                                <form action="get_visits.php" method="post">
                                    <div class="col-lg-4 col-lg-offset-4 bg-danger">
                                        <br/>
                                        <input type="search" name="search" class="form-control" required="required" /><br/>
                                        <input type="submit" name="app" class="btn btn-danger btn-block" value="ابحث" />
                                        <br/>
                                    </div>
                                </form>
                    
                </div>
            </div>
        </div>
        <footer></footer>

    </body>
</html>