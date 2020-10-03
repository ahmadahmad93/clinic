<?php
include '../db/db_connect.php';
$sql = "SELECT * from contact order by id desc";
$query = mysqli_query($conn, $sql);

?>
<!doctype html>
<html dir="rtl">
    <head>
        <meta charset="utf-8" />
        <title>رسائل الموقع</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../css/style.css"/>
        <script src="../js/jquery3.2.1.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>
        <div class="admin">
        <div class="icon-bar">
            <a href="index.php"><i class="fa fa-home"></i></a> 
            <a href="users.php"><i class="fa fa-users"></i></a> 
            <a class="active1" href="contacts.php"><i class="fa fa-envelope"></i></a> 
            <a href="accounting.php"><i class="fa fa-credit-card"></i></a>
            <a href="clinic.php"><i class="fa fa-user-md"></i></a> 
            <a href="files.php"><i class="fa fa-file"></i></a> 
            <a href="../logout.php"><i class="fa fa-sign-out "></i></a> 
        </div>
        <div class="led well">
            <div class="row">
                <h3 class="page-header text-center text-success">الرسائل المرسلة عبر بريد التواصل</h3>
            </div>
            <div class="row">
                <?php
                while ($row = mysqli_fetch_assoc($query)) {
                    echo "<table class='table table-bordered table-responsive bg-success'>";
                    echo "<tr>";
                    echo "<td>الاسم: ".$row['name']."</td>";
                    echo "<td>البريد: ".$row['mail']."</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td colspan='2'>نص الرسالة: <br/>".$row['msg']."</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td colspan='2'>زمن الارسال: ".$row['time']."</td>";
                    echo "</tr>";
                    echo "</table>";
                }
                ?>
            </div>
        </div>
        </div>
    </body>
</html>