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
            <h3 class="page-header text-center">بطاقات المرضى</h3>
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 jumbotron"  dir="rtl">
                    <div class="col-lg-12">
                        <form>
                            <div class="col-lg-3 col-lg-offset-5">
                                <button class="btn btn-danger glyphicon glyphicon-search" onclick="">بحث</button>
                            </div>
                            <div class="col-lg-4">
                                <input type="text" id="card_search" class="form-control" />
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-12">
                        <br/>
                        <table class="table table-hover table-condensed bg-danger">
                            <tr>
                                <th class="text-center" style="width: 10%;">الرقم الذاتي</th>
                                <th class="text-center" style="width: 70%;">اسم المريض</th>
                                <th class="text-center" style="width: 20%;">عمليات</th>
                            </tr>
                            <?php
                            include './control/get_Cards.php';
                            ?>
                        </table>
                    </div>
                </div>


            </div>
        </div>
        <footer></footer>

    </body>
</html>