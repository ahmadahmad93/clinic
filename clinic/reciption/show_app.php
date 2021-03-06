<!doctype html>
<html dir="rtl">
    <head>
        <meta charset="utf-8" />
        <title>الاستقبال</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../css/style.css"/>
        <script src="../js/jquery-migrate-3.0.0.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </head>
    <body>
        <header class="rec-header">
            <div class="row bg-success">
                <div class="col-lg-4 text-center">
                    <h1>Children Health Clinic</h1>
                    <h2>Reciption Department</h2>
                </div>
                <div class="col-lg-4 text-center">
                    <img src="../images/2clinic-logo.jpg" alt="" height="150" width="150">
                </div>
                <div class="col-lg-4 text-center">
                    <h1>عيادة طب الاطفال</h1>
                    <h2>قسم الاستقبال</h2>
                </div>
            </div>
        </header>
        <br/>
        <br/>
        <div class="container">
            <h3 class="page-header text-center">مواعيد اليوم</h3>
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 jumbotron"  dir="rtl">
                    
                    <div class="col-lg-12">
                        <br/>
                        <table class="table table-hover table-condensed bg-success">
                            <tr>
                                <th class="text-center" style="width: 10%;">وقت الموعد</th>
                                <th class="text-center" style="width: 30%;">اسم المريض</th>
                                <th class="text-center" style="width: 20%;">الرقم الوطني</th>
                                <th class="text-center" style="width: 20%;">رقم الهاتف</th>
                                <th class="text-center" style="width: 20%;">عمليات</th>
                            </tr>
                            <?php
                            include './control/get_appointments.php';
                            ?>
                        </table>
                    </div>
                </div>


            </div>
        </div>
        <footer></footer>

    </body>
</html>