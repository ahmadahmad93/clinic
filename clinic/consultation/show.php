<?php
include '../db/db_connect.php';
$id = (int) $_GET['id'];
$sql = "SELECT * FROM concult WHERE id=$id";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);
?>
<!doctype html>
<html dir="rtl">
    <head>
        <meta charset="utf-8" />
        <title>الاستشارات</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../css/style.css"/>
        <script src="../js/jquery-migrate-3.0.0.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </head>
    <body>
        <header class="rec-header">
            <div class="row bg-warning">
                <div class="col-lg-4 text-center">
                    <h1>Children Health Clinic</h1>
                    <h2>consultation Department</h2>
                </div>
                <div class="col-lg-4 text-center">
                    <img src="../images/2clinic-logo.jpg" alt="" height="150" width="150">
                </div>
                <div class="col-lg-4 text-center">
                    <h1>عيادة طب الاطفال</h1>
                    <h2>قسم الاستشارات</h2>
                </div>
            </div>
        </header>
        <br/>
        <br/>
        <div class="container">
            <h3 class="page-header text-center">قسم الاستشارات</h3>
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 jumbotron"  dir="rtl">
                    <div class="col-lg-6">
                        <a href="old.php" class="btn btn-block btn-warning text-center">استشارات سابقة</a>
                    </div>
                    <div class="col-lg-6">
                        <a href="#" class="btn btn-block btn-warning text-center">خروج</a>
                    </div>
                    <div class="col-lg-12">
                        <h4 class="text-right alert alert-warning"><span>عنوان الاستشارة</span>&nbsp;&nbsp;<span><?php echo$row['title']; ?></span></h4>
                        <h4 class="text-right alert alert-warning"><span>صاحب الاستشارة</span>&nbsp;&nbsp;<span><?php echo$row['name']; ?></span></h4>
                        <div class="text-right alert alert-warning">
                            <span>نص الاستشارة</span><br/>
                            <?php echo $row['body']; ?>
                        </div>
                        <div class="text-right alert alert-warning">
                            <span>رد الاستشارة</span><br/>
                            <?php echo $row['replay']; ?>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <footer></footer>

    </body>
</html>