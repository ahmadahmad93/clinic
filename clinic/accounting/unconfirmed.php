<?php
date_default_timezone_set("Asia/Damascus");
include '../db/db_connect.php';
$sql = "SELECT * from unconfirmed_entries";
$query = mysqli_query($conn, $sql);
?>
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
            <h3 class="page-header text-center">تقرير المعاينات الغير مقبوضة</h3>
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 jumbotron"  dir="rtl">
                    <h3>تفاصيل التقرير</h3>
                    <table class="table table-bordered table-hover table-striped table-responsive">
                        <tr>
                            <td class="text-center">المبلغ</td>
                            <td class="text-center">رقم الحساب</td>
                            <td class="text-center">البيان</td>
                            <td class="text-center">توقيت العملية</td>
                            <td class="text-center">عمليات</td>
                        </tr>
                        <?php
                        while ($row = mysqli_fetch_assoc($query)) {
                            echo "<tr>";
                            echo "<td class='text-center'>" . $row['cost'] . "</td>";
                            echo "<td class='text-center'>1</td>";
                            echo "<td class='text-center'>" . $row['report'] . "</td>";
                            echo "<td class='text-center'>" . $row['time'] . "</td>";
                            echo "<td class='text-center'><a href='control/confirm.php?id=" . $row['id'] . "' class='btn btn-info btn-block'>تأكيد</a></td>";
                            echo "</tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <footer></footer>

    </body>
</html>