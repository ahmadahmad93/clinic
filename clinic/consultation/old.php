<?php
include '../db/db_connect.php';
$sql = "SELECT * FROM concult WHERE replay!=''";
$query = mysqli_query($conn, $sql);
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
                        <h4 class="text-center text-warning"> استشارات بحاجة الى رد</h4>
                        <table class="table table-bordered table-responsive">
                            <tr>
                                <th class="text-center">رقم الاستشارة</th>
                                <th class="text-center">صاحب الاستشارة</th>
                                <th class="text-center">عنوان الاستشارة</th>
                                <th class="text-center">تاريخ الاستشارة</th>
                                <th class="text-center">عمليات</th>
                            </tr>
                            <?php
                            while ($row = mysqli_fetch_assoc($query)) {
                                echo "<tr>";
                                echo "<th class='text-center'>".$row['id']."</th>";
                                echo "<th class='text-center'>".$row['name']."</th>";
                                echo "<th class='text-center'>".$row['title']."</th>";
                                echo "<th class='text-center'>".$row['time']."</th>";
                                echo "<th class='text-center'><a href='show.php?id=".$row['id']."' class='btn btn-warning'>عرض</a></th>";
                                echo "</tr>";
                            }
                            ?>
                        </table>
                    </div>
                </div>
                    
                
            </div>
        </div>
        <footer></footer>

    </body>
</html>