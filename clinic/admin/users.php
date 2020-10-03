<?php
include '../db/db_connect.php';
?>
<!doctype html>
<html dir="rtl">
    <head>
        <meta charset="utf-8" />
        <title>مستخدمي الموقع</title>
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
                <a class="active1" href="users.php"><i class="fa fa-users"></i></a> 
                <a href="contacts.php"><i class="fa fa-envelope"></i></a> 
                <a href="accounting.php"><i class="fa fa-credit-card"></i></a>
                <a href="clinic.php"><i class="fa fa-user-md"></i></a> 
                <a href="files.php"><i class="fa fa-file"></i></a> 
                <a href="../logout.php"><i class="fa fa-sign-out "></i></a> 
            </div>
            <div class="led well"> 
                <div class="row">
            <?php
                if(isset($_GET['msg'])&& ($_GET['msg']==1)){
                    echo "'<div class='alert alert-danger text-center'><strong>تم الحذف بنجاح</strong></div>";
                }
                if(isset($_GET['msg'])&& ($_GET['msg']==2)){
                    echo "'<div class='alert alert-info text-center'><strong>تمت الاضافة بنجاح</strong></div>";
                }
            ?>
            
        </div>
                <div>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs text-right" role="tablist">
                        <li role="presentation"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">اضافة مستخدم</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">مستخدمي الموقع</a></li>
                        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">الموظفين</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane" id="home">
                            <div class="row">
                                <h3 class="page-header text-center text-success">اضافة مستخدم</h3>
                                <div class="col-lg-8 col-lg-offset-2">
                                <form action="new_emp.php" method="post">
                                    <input type="text" name="name" class="form-control text-right" placeholder="الاسم" /><br/>
                                    <input type="text" name="user" class="form-control text-right" placeholder="اسم المستخدم" /><br/>
                                    <input type="password" name="pwd" class="form-control text-right" placeholder="كلمة المرور" /><br/>
                                    <select name="section" class="form-control text-right">
                                        <option>الرجاء اختيار قسم</option>
                                        <option value="1">استقبال</option>
                                        <option value="2">عيادة</option>
                                        <option value="3">محاسبة</option>
                                        <option value="4">محتوى - نصائح طبية</option>
                                        <option value="5">محتوى - استشارات طبية</option>
                                        <option value="6">مدير</option>
                                    </select><br/>
                                    <input type="submit" class="btn btn-block btn-success" name="app" value="تسجيل" />
                                </form>
                                    </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile">
                            <div class="row">
                                <h3 class="page-header text-center text-success">مستخدمي الموقع</h3>
                                <?php
                                    $sql1 ="select * from users order by id desc";
                                    $query1 = mysqli_query($conn, $sql1);
                                    echo "<table class='table table-bordered table-responsive'>";
                                    echo "<tr><th class='text-right'>الاسم</th><th class='text-right'>البريد الالكتروني</th><th class='text-right'>كلمة المرور</th><th class='text-right'>تاريخ التسجيل</th><th class='text-right'>حذف مستخدم</th></tr>";
                                    while ($row1=  mysqli_fetch_assoc($query1)){
                                        echo '<tr>';
                                        echo '<td>'.$row1['name'].'</td>';
                                        echo '<td>'.$row1['mail'].'</td>';
                                        echo '<td>'.$row1['pwd'].'</td>';
                                        echo '<td>'.$row1['time'].'</td>';
                                        echo "<td><a class='btn btn-link' href='del_user.php?id=".$row1['id']."'>حذف</a></td>";
                                        echo '</tr>';
                                    }
                                    echo "</table>";
                                ?>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="messages">
                            <div class="row">
                                <h3 class="page-header text-center text-success">مستخدمي الموقع</h3>
                                <?php
                                    $sql2 ="select * from employees order by id desc";
                                    $query2 = mysqli_query($conn, $sql2);
                                    echo "<table class='table table-bordered table-responsive'>";
                                    echo "<tr><th class='text-right'>الاسم</th><th class='text-right'> اسم المستخدم</th><th class='text-right'>كلمة المرور</th><th class='text-right'>حذف مستخدم</th></tr>";
                                    while ($row2=  mysqli_fetch_assoc($query2)){
                                        echo '<tr>';
                                        echo '<td>'.$row2['name'].'</td>';
                                        echo '<td>'.$row2['username'].'</td>';
                                        echo '<td>'.$row2['pwd'].'</td>';
                                        echo "<td><a class='btn btn-link' href='del_emp.php?id=".$row2['id']."'>حذف</a></td>";
                                        echo '</tr>';
                                    }
                                    echo "</table>";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>