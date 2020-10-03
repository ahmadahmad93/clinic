<?php
include '../db/db_connect.php';
$sql = "select * from advice";
$query = mysqli_query($conn, $sql);
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
            <h3 class="page-header text-center">قسم الاستشارات</h3>
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 jumbotron"  dir="rtl">
                    <div class="col-lg-6">
                        <a href="index.php" class="btn btn-block btn-primary text-center">اضافة نصيحة</a>
                    </div>
                    <div class="col-lg-6">
                        <a href="#" class="btn btn-block btn-primary text-center">خروج</a>
                    </div>
                    <div class="col-lg-12">
                        <h4 class="text-center text-primary">جدول النصائح الطبية</h4>
                        <table class="table table-responsive table-condensed">
                            <tr>
                                <td class="text-center">رقم</td>
                                <td class="text-center">عنوان</td>
                                <td class="text-center">نص النصيحة</td>
                                <td class="text-center">تاريخ الاضافة</td>
                                <td class="text-center">عمليات</td>
                            </tr>
                            <?php
                            while ($row = mysqli_fetch_assoc($query)) {
                                echo "<tr>";
                                echo "<td class='text-center'>".$row['id']."</td>";
                                echo "<td class='text-center'>".$row['title']."</td>";
                                echo "<td class='text-center'>".$row['body']."</td>";
                                echo "<td class='text-center'>".$row['time']."</td>";
                                echo "<td class='text-center'><a href='del.php?id=".$row['id']."' class='btn btn-primary' >حذف</a></td>";
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
