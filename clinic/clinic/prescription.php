<?php
include '../db/db_connect.php';
$id = (int) $_GET['id'];
$v_id = (int) $_GET['v_id'];
$num = $id . $v_id;
?>
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
            <h3 class="page-header text-center">وصفة طبية جديدة</h3>
            <div class="row">
                <div class="col-lg-12 jumbotron"  dir="rtl">
                    <div class="col-lg-6">
                        <table class="table table-bordered table-striped table-responsive table-condensed">
                            <tr>
                                <td class="text-center text-primary" style="width: 10%;">رقم المريض</td>
                                <td class="text-center text-primary" style="width: 10%;">رقم الزيارة</td>
                                <td class="text-center text-primary" style="width: 10%;">رقم الوصفة</td>
                                <td class="text-center text-primary" style="width: 20%;">اسم الدواء</td>
                                <td class="text-center text-primary" style="width: 35%;">ملاخظات</td>
                                <td class="text-center text-primary" style="width: 15%;">عمليات</td>
                            </tr>
                            <?php
                                $sql = "SELECT * FROM prescription WHERE p_id =$id and v_id = $v_id and p_num='$num'";
                                $query = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($query)) {
                                    echo "<tr>";
                                    echo "<td class='text-center text-primary'>".$row['p_id']."</td>";
                                    echo "<td class='text-center text-primary'>".$row['v_id']."</td>";
                                    echo "<td class='text-center text-primary'>".$row['p_num']."</td>";
                                    echo "<td class='text-center text-primary'>".$row['name']."</td>";
                                    echo "<td class='text-center text-primary'>".$row['notes']."</td>";
                                    echo "<td class='text-center text-primary'><a href='control/delete_med.php?id=".$row['id']."' class='btn btn-link'>حذف</a></td>";
                                    echo '</tr>';
                                    }
                            ?>
                        </table>
                    </div>
                    <div class="col-lg-6">
                        <form action="control/new_pre.php" method="post" >
                            <div class="col-lg-12">
                                <div class="col-lg-4">
                                    <label>رقم المريض</label>
                                    <input type="text" name="p_id" class="form-control" value="<?php echo $id; ?>" />
                                </div>
                                <div class="col-lg-4">
                                    <label>رقم الزيارة</label>
                                    <input type="text" name="v_id" class="form-control" value="<?php echo $v_id; ?>" />
                                </div>
                                <div class="col-lg-4">
                                    <label>رقم الوصفة</label>
                                    <input type="text" name="p_num" class="form-control" value="<?php echo $num; ?>" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label>اسم الدواء</label>
                                <input type="text" name="name" class="form-control" />
                            </div>
                            <div class="col-lg-12">
                                <label>ملاحظات</label>
                                <textarea name="notes" rows="5" class="form-control"></textarea>

                            </div>

                            <div class="col-lg-12" style="margin-top: 15px;">
                                <div class="col-lg-4"><a class="btn btn-block btn-danger" href="show_app.php" target="_blank" >عرض جدول المواعيد</a></div>
                                <div class="col-lg-4"><input class="btn btn-danger btn-block" type="submit" name="approve" value="تأكيد" />
                                </div>
                            </div>
                        </form>           
                    </div>

                </div>


            </div>
        </div>
        <footer></footer>

    </body>
</html>