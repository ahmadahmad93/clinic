<?php
date_default_timezone_set("Asia/Damascus");
include '../db/db_connect.php';
if ($_POST['report'] == 100) {
    $sql = "SELECT * from financial";
} elseif ($_POST['report'] == 0) {
    $sql = "SELECT * from financial where out_cost >0";
} elseif ($_POST['report'] == 10) {
    $sql = "SELECT * from financial where in_cost >0";
}
else{
    $report = (int) $_POST['report'];
    $sql = "SELECT * from financial where account=$report";
}

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
            <h3 class="page-header text-center">قسم المحاسبة</h3>
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 jumbotron"  dir="rtl">
                    <h3>تفاصيل التقرير</h3>
                    <table class="table table-bordered table-hover table-striped table-responsive">
                        <tr>
                            <td class="text-center">رقم العملية</td>
                            <td class="text-center">مدفوعات</td>
                            <td class="text-center">مقبوضات</td>
                            <td class="text-center">البيان</td>
                            <td class="text-center">ملاحظات</td>
                            <td class="text-center">التاريخ</td>
                        </tr>
<?php
while ($row = mysqli_fetch_assoc($query)) {
    echo "<tr>";
    echo "<td class='text-center'>" . $row['id'] . "</td>";
    echo "<td class='text-center'>" . $row['out_cost'] . "</td>";
    echo "<td class='text-center'>" . $row['in_cost'] . "</td>";
    echo "<td class='text-center'>" . $row['report'] . "</td>";
    echo "<td class='text-center'>" . $row['notes'] . "</td>";
    echo "<td class='text-center'>" . $row['time'] . "</td>";
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