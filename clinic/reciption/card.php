<?php
include '../db/db_connect.php';
if(!isset($_GET['id']))
    header("Location: show_cards.php");
$id = (int)$_GET['id'];
$sql = "select * from p_personal_info where id = $id";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);
?><!doctype html>
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
            <h3 class="page-header text-center">معلومات المريض</h3>
            <div class="row">
                <div class="col-lg-12"  dir="rtl">
                    <div class="panel panel-success">
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class="list-group-item">اسم المريض: <span><?php echo $row['name']; ?></span></li>
                                <li class="list-group-item">اسم الاب: <span><?php echo $row['father']; ?></span></li>
                                <li class="list-group-item">اسم العائلة: <span><?php echo $row['familly']; ?></span></li>
                                <li class="list-group-item">اسم الام: <span><?php echo $row['mother']; ?></span></li>
                                <li class="list-group-item">الجنس: <span><?php echo $row['sex']; ?></span></li>
                                <li class="list-group-item">سنة الميلاد: <span><?php echo $row['year']; ?></span></li>
                                <li class="list-group-item">الرقم الوطني: <span><?php echo $row['ssid']; ?></span></li>
                                <li class="list-group-item">اسم المرافق: <span><?php echo $row['assistant']; ?></span></li>
                                <li class="list-group-item">هاتف المرافق : <span><?php echo $row['a_phone']; ?></span></li>
                                <li class="list-group-item">صلة القربى: <span><?php echo $row['relation']; ?></span></li>
                                <li class="list-group-item">هاتف المريض: <span><?php echo $row['phone']; ?></span></li>
                                <li class="list-group-item">عنون المريض: <span><?php echo $row['address']; ?></span></li>
                                <li class="list-group-item">ملاحظات: <span><?php echo $row['notes']; ?></span></li>
                                <li class="list-group-item">تاريخ التسجيل: <span><?php echo $row['reg_date']; ?></span></li>
                            </ul>
                        </div>

                    </div>

                </div>


            </div>
        </div>
        <footer></footer>

    </body>
</html>