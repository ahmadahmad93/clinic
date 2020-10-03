<?php
    include '../db/db_connect.php';
?>
<!doctype html>
<html dir="rtl">
    <head>
        <meta charset="utf-8" />
        <title>عمليات المحاسبة</title>
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
                <a href="contacts.php"><i class="fa fa-envelope"></i></a> 
                <a class="active1" href="accounting.php"><i class="fa fa-credit-card"></i></a>
                <a href="clinic.php"><i class="fa fa-user-md"></i></a> 
                <a href="files.php"><i class="fa fa-file"></i></a> 
                <a href="../logout.php"><i class="fa fa-sign-out "></i></a> 
            </div>
            <div class="led well">
                <?php
                if(isset($_GET['msg'])&& ($_GET['msg']==1)){
                    echo "'<div class='alert alert-danger text-center'><strong>تم الحذف بنجاح</strong></div>";
                }
                ?>
                <div class="row">
                    <h3 class="page-header text-center text-success">عمليات المحاسبة الاجمالية</h3>
                    <?php
                    $sql1 = "select * from financial order by id desc";
                    $query1 = mysqli_query($conn, $sql1);
                    echo "<table class='table table-bordered table-responsive'>";
                    echo "<tr><th class='text-right'>رقم العملية</th><th class='text-right'> مبلغ ايراد</th><th class='text-right'>مبلغ صرف</th><th class='text-right'>البيان</th><th class='text-right'>التاريخ</th><th class='text-right'>حذف</th></tr>";
                    while ($row1 = mysqli_fetch_assoc($query1)) {
                        echo '<tr>';
                        echo '<td>' . $row1['id'] . '</td>';
                        echo '<td>' . $row1['in_cost'] . '</td>';
                        echo '<td>' . $row1['out_cost'] . '</td>';
                        echo '<td>' . $row1['report'] . '</td>';
                        echo '<td>' . $row1['time'] . '</td>';
                        echo "<td><a class='btn btn-link' href='del_rec.php?id=" . $row1['id'] . "'>حذف</a></td>";
                        echo '</tr>';
                    }
                    echo "</table>";
                    ?>
                </div>

            </div>
        </div>
    </body>
</html>