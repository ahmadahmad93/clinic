<?php
include '../db/db_connect.php';
$id = (int) $_POST['search'];
$sql = "SELECT * FROM p_visit WHERE p_id =$id order by time DESC";
$query = mysqli_query($conn, $sql);
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
            <h3 class="page-header text-center">تاريخ الزيارات المرضية للمريض</h3>
            <div class="row">
                <div class="col-lg-12 jumbotron"  dir="rtl">
                    <div>
                        <table class="table table-bordered table-striped table-responsive">
                            <tr>
                                <td class="text-center text-primary">رقم المريض</td>
                                <td class="text-center text-primary">رقم الزيارة</td>
                                <td class="text-center text-primary">الوزن</td>
                                <td class="text-center text-primary">الطول</td>
                                <td class="text-center text-primary">الحرارة</td>
                                <td class="text-center text-primary">الاسهال</td>
                                <td class="text-center text-primary">الاقياء</td>
                                <td class="text-center text-primary">لون الوجه</td>
                                <td class="text-center text-primary">البراز</td>
                                <td class="text-center text-primary">التنفس</td>
                                <td class="text-center text-primary">التشخيص</td>
                                <td class="text-center text-primary">الملاحظات</td>
                                <td class="text-center text-primary">التاريخ</td>
                            </tr>
                            <?php
                            while ($row = mysqli_fetch_assoc($query)) {
                                echo "<tr>";
                                echo "<td class='text-center text-primary'>" . $row['p_id'] . "</td>";
                                echo "<td class='text-center text-primary'>" . $row['v_id'] . "</td>";
                                echo "<td class='text-center text-primary'>" . $row['weight'] . "</td>";
                                echo "<td class='text-center text-primary'>" . $row['height'] . "</td>";
                                echo "<td class='text-center text-primary'>" . $row['heat'] . "</td>";
                                echo "<td class='text-center text-primary'>" . $row['Diarrhea'] . "</td>";
                                echo "<td class='text-center text-primary'>" . $row['Vibrant'] . "</td>";
                                echo "<td class='text-center text-primary'>" . $row['color'] . "</td>";
                                echo "<td class='text-center text-primary'>" . $row['stool'] . "</td>";
                                echo "<td class='text-center text-primary'>" . $row['breath'] . "</td>";
                                echo "<td class='text-center text-primary'>" . $row['Diagnosis'] . "</td>";
                                echo "<td class='text-center text-primary'>" . $row['notes'] . "</td>";
                                echo "<td class='text-center text-primary'>" . $row['time'] . "</td>";
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